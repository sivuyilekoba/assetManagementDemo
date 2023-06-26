<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\CommunityAssessment;
use App\CommunityAsset;
use Illuminate\Support\Facades\Auth;
use Yajra\Datatables\Datatables;

use App\Http\Controllers\Controller;

class AssessmentController extends Controller
{
    public function index()
    {
        $assessments = DB::connection('mysql4')->select('SELECT assessment.*, property.asset_id, property_group.primary_id, property_group.description, assessor.name AS a1, assessor.surname AS a2
            FROM assessment, assessor, property, property_group
            WHERE assessment.property_id = property.id AND property.group_id = property_group.id AND assessor.id = assessment.assessor_id
            AND assessment.date_of_assessment > CURDATE()');
        $display = "Upcoming";

        return view('community.assessment.manage', ['assessment' => $assessments, 'display' => $display]);
    }

    public function today()
    {
        $assessments = DB::connection('mysql4')->select('SELECT assessment.*, property.asset_id, property_group.primary_id, property_group.description, assessor.name AS a1, assessor.surname AS a2
            FROM assessment, assessor, property, property_group
            WHERE assessment.property_id = property.id AND property.group_id = property_group.id AND assessor.id = assessment.assessor_id
            AND assessment.date_of_assessment = CURDATE()');
        $display = "Today";

        return view('community.assessment.manage', ['assessment' => $assessments, 'display' => $display]);
    }

    public function completed()
    {
        $assessments = DB::connection('mysql4')->select('SELECT assessment.*, property.asset_id, property_group.primary_id, property_group.description, assessor.name AS a1, assessor.surname AS a2
            FROM assessment, assessor, property, property_group
            WHERE assessment.property_id = property.id AND property.group_id = property_group.id AND assessor.id = assessment.assessor_id
            AND assessment.date_of_assessment <= CURDATE() AND assessment.canceled <> "Yes" AND assessment.done = 1');
        $display = "Completed";

        return view('community.assessment.manage', ['assessment' => $assessments, 'display' => $display]);
    }

    public function incompleted()
    {
        $assessments = DB::connection('mysql4')->select('SELECT assessment.*, property.asset_id, property_group.primary_id, property_group.description, assessor.name AS a1, assessor.surname AS a2
            FROM assessment, assessor, property, property_group
            WHERE assessment.property_id = property.id AND property.group_id = property_group.id AND assessor.id = assessment.assessor_id
            AND assessment.date_of_assessment <= CURDATE() AND assessment.canceled <> "Yes" AND assessment.done <> 1');
        $display = "Incomplete";

        return view('community.assessment.manage', ['assessment' => $assessments, 'display' => $display]);
    }

    public function create($id)
    {
        $property = CommunityAsset::findOrFail($id);
        $assessors = DB::connection('mysql4')->select('SELECT * FROM assessor WHERE deleted <> "Yes" ORDER BY name');

        return view('community.assessment.add', ['property' => $property, 'assessor' => $assessors]);
    }

    public function store(Request $request, $id)
    {
        request()->validate([
            'date' => 'required',
            'time' => 'required',
            'assessor_listbox' => 'required'
        ]);

        //Generate random id
        $uni_md = md5(time() . mt_rand(1, 1000000));
        $uni_time = time();
        $uni_id = "$uni_md$uni_time";
        $uni_final = uniqid($uni_id, true);

        //insert
        $assessment = new CommunityAssessment;
        $assessment->id = $uni_final;
        $assessment->property_id = $id;
        $assessment->assessor_id = $request->input('assessor_listbox');
        $assessment->date_of_assessment = $request->input('date');
        $assessment->time_of_assessment = $request->input('time');
        $assessment->file_no = "N/A";
        $assessment->comment = $request->input('comments');
        $assessment->bulk = $uni_final;

        //Strict OFF
        config()->set('database.connections.mysql.strict', false);
        \DB::reconnect(); //important as the existing connection if any would be in strict mode

        //Activity Log
        $alt = CommunityAsset::findOrFail($id);
        DB::table('activity_log')->insert([
            [
                'email' => Auth::user()->email,
                'name' => Auth::user()->name,
                'surname' => Auth::user()->surname,
                'codes' => $id,
                'type' => 'Community',
                'action' => 'Scheduled a assessment on ' . $request->input('date') . ' for ' . $alt->description . ' community asset'
            ]
        ]);

        //INSERT Unique ID
        DB::connection('mysql4')->table('assessment_code')->insert([
            [
                'assessment_id' => $uni_final,
                'prefix' => 'MIS-SA',
                'year' => date("Y")
            ]
        ]);

        //INSERT building_civils
        DB::connection('mysql4')->table('building_civils')->insert([
            [
                'id' => $uni_final,
                'assessment_id' => $uni_final
            ]
        ]);

        //INSERT building_electrical
        DB::connection('mysql4')->table('building_electrical')->insert([
            [
                'id' => $uni_final,
                'assessment_id' => $uni_final
            ]
        ]);

        //INSERT building_external
        DB::connection('mysql4')->table('building_external')->insert([
            [
                'id' => $uni_final,
                'assessment_id' => $uni_final
            ]
        ]);

        //INSERT building_mechanical
        DB::connection('mysql4')->table('building_mechanical')->insert([
            [
                'id' => $uni_final,
                'assessment_id' => $uni_final
            ]
        ]);

        //INSERT building_soft_service
        DB::connection('mysql4')->table('building_soft_service')->insert([
            [
                'id' => $uni_final,
                'assessment_id' => $uni_final
            ]
        ]);

        //now changing back the strict ON
        config()->set('database.connections.mysql.strict', true);
        \DB::reconnect();

        $assessment->save();

        return redirect()->back()->with('success', 'Assessment Scheduled Successfully');
    }

    public function edit($id)
    {
        $assessments = DB::connection('mysql4')->select('SELECT assessment.*, assessor.name AS a1, assessor.surname AS a2 FROM assessment, assessor where assessment.id = "' . $id . '" AND assessor.id = assessment.assessor_id');
        $assessors = DB::connection('mysql4')->select('SELECT * FROM assessor WHERE deleted <> "Yes" ORDER BY name');

        return view('community.assessment.edit', ['assessment' => $assessments, 'assessor' => $assessors]);
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'date' => 'required',
            'time' => 'required',
            'assessor_listbox' => 'required'
        ]);

        $assessment = CommunityAssessment::findOrFail($id);

        //Strict OFF
        config()->set('database.connections.mysql.strict', false);
        \DB::reconnect(); //important as the existing connection if any would be in strict mode

        //Activity Log
        $alt = CommunityAsset::findOrFail($assessment->property_id);
        DB::table('activity_log')->insert([
            [
                'email' => Auth::user()->email,
                'name' => Auth::user()->name,
                'surname' => Auth::user()->surname,
                'codes' => $id,
                'type' => 'Community',
                'action' => 'Edit a scheduled assessment on ' . $request->input('date') . ' for ' . $alt->description . ' community asset'
            ]
        ]);

        //now changing back the strict ON
        config()->set('database.connections.mysql.strict', true);
        \DB::reconnect();

        //Find User
        $assessment->assessor_id = $request->input('assessor_listbox');
        $assessment->date_of_assessment = $request->input('date');
        $assessment->time_of_assessment = $request->input('time');
        $assessment->comment = $request->input('comments');

        $assessment->save();

        return redirect()->back()->with('success', 'Assessment Edited Successfully');
    }

    public function destroy($id)
    {
        $assessment = CommunityAssessment::findOrFail($id);

        //Strict OFF
        config()->set('database.connections.mysql.strict', false);
        \DB::reconnect(); //important as the existing connection if any would be in strict mode

        //Activity Log
        $alt = CommunityAsset::findOrFail($assessment->property_id);
        DB::table('activity_log')->insert([
            [
                'email' => Auth::user()->email,
                'name' => Auth::user()->name,
                'surname' => Auth::user()->surname,
                'codes' => $id,
                'type' => 'Community',
                'action' => 'Canceled a assessment for ' . $alt->description . ' community asset'
            ]
        ]);

        //now changing back the strict ON
        config()->set('database.connections.mysql.strict', true);
        \DB::reconnect();

        //Find User
        if ($assessment->canceled == 'Yes') {
            $assessment->canceled = 'No';
            $assessment->save();
            return redirect('CommunityAssessment/')->with('success', 'Undo Canceled Assessment Successfully');
        } else {
            $assessment->canceled = 'Yes';
            $assessment->save();
            return redirect('CommunityAssessment/')->with('success', 'Canceled Assessment Successfully');
        }
    }

    public function navigator($id)
    {
        $assessments = CommunityAssessment::findOrFail($id);
        return view('community.assessment.navigator', ['assessment' => $assessments]);
    }

    public function view($id)
    {
        $assessments = DB::connection('mysql4')->select('SELECT assessment.*, property.*, directorate_sub.name AS dd, 
            assessor.name AS a1, assessor.surname AS a2, asset_class.name AS c1, asset_type.name AS c2  
            FROM assessment, assessor, property, directorate_sub, asset_class, asset_type
            WHERE assessment.id = "' . $id . '" AND assessment.property_id = property.id AND assessor.id = assessment.assessor_id AND property.sub = directorate_sub.id
            AND property.class = asset_class.id AND property.type = asset_type.id');
        $unique = DB::connection('mysql4')->select("SELECT CONCAT(prefix, '' , LPAD(id, 6, '0'), '-', year) AS uniqueCode
            FROM assessment_code 
            where assessment_id = '$id'");
        $building1 = DB::connection('mysql4')->select("SELECT * FROM building_civils WHERE assessment_id = '$id'");
        $building2 = DB::connection('mysql4')->select("SELECT * FROM building_electrical WHERE assessment_id = '$id'");
        $building3 = DB::connection('mysql4')->select("SELECT * FROM building_external WHERE assessment_id = '$id'");
        $building4 = DB::connection('mysql4')->select("SELECT * FROM building_mechanical WHERE assessment_id = '$id'");
        $building5 = DB::connection('mysql4')->select("SELECT * FROM building_soft_service WHERE assessment_id = '$id'");
        $sector = DB::connection('mysql4')->select("SELECT * FROM sector WHERE assessment_id = '$id' AND deleted <> 'Yes' ORDER BY sector_no+0 ASC");
        if ($sector) {
            $s1 = DB::connection('mysql4')->select("SELECT * FROM sector_sanitation WHERE assessment_id = '$id'");
            $s2 = DB::connection('mysql4')->select("SELECT * FROM sector_internal WHERE assessment_id = '$id'");
            $s3 = DB::connection('mysql4')->select("SELECT * FROM sector_mechanical WHERE assessment_id = '$id'");
        }

        $p = $assessments[0]->property_id;
        $community = DB::connection('mysql4')->select("SELECT property.*, asset_class.name AS a1, asset_type.name AS a2
        FROM property, asset_class, asset_type
        WHERE property.id = '$p' AND asset_class.id = property.class AND asset_type.id = property.type");

        $get = $community[0]->group_id;
        $group = DB::connection('mysql4')->select("SELECT * FROM property_group WHERE id = '$get'");

        if ($sector) {
            return view('community.assessment.view', [
                'assessment' => $assessments, 'unique' => $unique, 'community' => $community, 'group' => $group,
                'building1' => $building1, 'building2' => $building2, 'building3' => $building3, 'building4' => $building4, 'building5' => $building5,
                'sector' => $sector, 'sanitation' => $s1, 'internal' => $s2, 'mechanical' => $s3
            ]);
        } else {
            return view('community.assessment.view', [
                'assessment' => $assessments, 'unique' => $unique, 'community' => $community, 'group' => $group,
                'building1' => $building1, 'building2' => $building2, 'building3' => $building3, 'building4' => $building4, 'building5' => $building5,
                'sector' => $sector
            ]);
        }
    }

    public function pdf($id)
    {
        $assessments = DB::connection('mysql4')->select('SELECT assessment.*, property.*, directorate_sub.name AS dd, 
            assessor.name AS a1, assessor.surname AS a2, asset_class.name AS c1, asset_type.name AS c2  
            FROM assessment, assessor, property, directorate_sub, asset_class, asset_type
            WHERE assessment.id = "' . $id . '" AND assessment.property_id = property.id AND assessor.id = assessment.assessor_id AND property.sub = directorate_sub.id
            AND property.class = asset_class.id AND property.type = asset_type.id');
        $unique = DB::connection('mysql4')->select("SELECT CONCAT(prefix, '' , LPAD(id, 6, '0'), '-', year) AS uniqueCode
            FROM assessment_code 
            where assessment_id = '$id'");
        $building1 = DB::connection('mysql4')->select("SELECT * FROM building_civils WHERE assessment_id = '$id'");
        $building2 = DB::connection('mysql4')->select("SELECT * FROM building_electrical WHERE assessment_id = '$id'");
        $building3 = DB::connection('mysql4')->select("SELECT * FROM building_external WHERE assessment_id = '$id'");
        $building4 = DB::connection('mysql4')->select("SELECT * FROM building_mechanical WHERE assessment_id = '$id'");
        $building5 = DB::connection('mysql4')->select("SELECT * FROM building_soft_service WHERE assessment_id = '$id'");
        $sector = DB::connection('mysql4')->select("SELECT * FROM sector WHERE assessment_id = '$id' AND deleted <> 'Yes' ORDER BY sector_no+0 ASC");
        if ($sector) {
            $s1 = DB::connection('mysql4')->select("SELECT * FROM sector_sanitation WHERE assessment_id = '$id'");
            $s2 = DB::connection('mysql4')->select("SELECT * FROM sector_internal WHERE assessment_id = '$id'");
            $s3 = DB::connection('mysql4')->select("SELECT * FROM sector_mechanical WHERE assessment_id = '$id'");
        }

        $p = $assessments[0]->property_id;
        $community = DB::connection('mysql4')->select("SELECT property.*, asset_class.name AS a1, asset_type.name AS a2
        FROM property, asset_class, asset_type
        WHERE property.id = '$p' AND asset_class.id = property.class AND asset_type.id = property.type");

        $get = $community[0]->group_id;
        $group = DB::connection('mysql4')->select("SELECT * FROM property_group WHERE id = '$get'");

        if ($sector) {
            return view('community.assessment.pdf', [
                'assessment' => $assessments, 'unique' => $unique, 'community' => $community, 'group' => $group,
                'building1' => $building1, 'building2' => $building2, 'building3' => $building3, 'building4' => $building4, 'building5' => $building5,
                'sector' => $sector, 'sanitation' => $s1, 'internal' => $s2, 'mechanical' => $s3
            ]);
        } else {
            return view('community.assessment.pdf', [
                'assessment' => $assessments, 'unique' => $unique, 'community' => $community, 'group' => $group,
                'building1' => $building1, 'building2' => $building2, 'building3' => $building3, 'building4' => $building4, 'building5' => $building5,
                'sector' => $sector
            ]);
        }
    }

    public function assessment($id)
    {
        $assessments = DB::connection('mysql4')->select('SELECT assessment.*, property.*, directorate_sub.name AS dd, 
            assessor.name AS a1, assessor.surname AS a2, asset_class.name AS c1, asset_type.name AS c2  
            FROM assessment, assessor, property, directorate_sub, asset_class, asset_type
            WHERE assessment.id = "' . $id . '" AND assessment.property_id = property.id AND assessor.id = assessment.assessor_id AND property.sub = directorate_sub.id
            AND property.class = asset_class.id AND property.type = asset_type.id');
        $unique = DB::connection('mysql4')->select("SELECT CONCAT(prefix, '' , LPAD(id, 6, '0'), '-', year) AS uniqueCode
            FROM assessment_code 
            where assessment_id = '$id'");
        $building1 = DB::connection('mysql4')->select("SELECT * FROM building_civils WHERE assessment_id = '$id'");
        $building2 = DB::connection('mysql4')->select("SELECT * FROM building_electrical WHERE assessment_id = '$id'");
        $building3 = DB::connection('mysql4')->select("SELECT * FROM building_external WHERE assessment_id = '$id'");
        $building4 = DB::connection('mysql4')->select("SELECT * FROM building_mechanical WHERE assessment_id = '$id'");
        $building5 = DB::connection('mysql4')->select("SELECT * FROM building_soft_service WHERE assessment_id = '$id'");
        $sector = DB::connection('mysql4')->select("SELECT * FROM sector WHERE assessment_id = '$id' AND deleted <> 'Yes' ORDER BY sector_no+0 ASC");
        if ($sector) {
            $s1 = DB::connection('mysql4')->select("SELECT * FROM sector_sanitation WHERE assessment_id = '$id'");
            $s2 = DB::connection('mysql4')->select("SELECT * FROM sector_internal WHERE assessment_id = '$id'");
            $s3 = DB::connection('mysql4')->select("SELECT * FROM sector_mechanical WHERE assessment_id = '$id'");
        }

        // dd($assessments);

        $p = $assessments[0]->property_id;
        $community = DB::connection('mysql4')->select("SELECT property.*, asset_class.name AS a1, asset_type.name AS a2
        FROM property, asset_class, asset_type
        WHERE property.id = '$p' AND asset_class.id = property.class AND asset_type.id = property.type");

        $get = $community[0]->group_id;
        $group = DB::connection('mysql4')->select("SELECT * FROM property_group WHERE id = '$get'");

        if ($sector) {
            return view('community.assessment.assessment', [
                'id' => $id, 'assessment' => $assessments, 'unique' => $unique, 'community' => $community, 'group' => $group,
                'building1' => $building1, 'building2' => $building2, 'building3' => $building3, 'building4' => $building4, 'building5' => $building5,
                'sector' => $sector, 'electrical' => $s1, 'internal' => $s2, 'mechanical' => $s3
            ]);
        } else {
            return view('community.assessment.assessment', [
                'id' => $id, 'assessment' => $assessments, 'unique' => $unique, 'community' => $community, 'group' => $group,
                'building1' => $building1, 'building2' => $building2, 'building3' => $building3, 'building4' => $building4, 'building5' => $building5,
                'sector' => $sector
            ]);
        }
    }

    public function images($assessment, $id)
    {
        $images = DB::connection('mysql4')->select("SELECT * FROM assessment_images WHERE assessment_id = '$assessment' AND foreign_id = '$id' AND deleted <> 'Yes'");

        return view('community.assessment.images', ['id' => $assessment, 'images' => $images]);
    }

    public function bulk($id)
    {
        $property = DB::connection('mysql4')->select("SELECT property.*, asset_class.name AS name, asset_type.name AS name2 
            FROM property, asset_class, asset_type
            WHERE property.group_id = '$id' AND  property.deleted <> 'Yes' AND property.class = asset_class.id AND property.type = asset_type.id");
        $assessors = DB::connection('mysql4')->select('SELECT * FROM assessor WHERE deleted <> "Yes" ORDER BY name');

        return view('community.assessment.bulk', ['id' => $id, 'property' => $property, 'assessor' => $assessors]);
    }

    public function bulked(Request $request)
    {
        request()->validate([
            'date' => 'required',
            'time' => 'required',
            'assessor_listbox' => 'required'
        ]);

        //CHECKBOX 
        $keys = $request->input('box');
        $count = count($keys);

        //BULK KEY
        $uni_md = md5(time() . mt_rand(1, 1000000));
        $uni_time = time();
        $uni_id = "$uni_md$uni_time";
        $bulk = uniqid($uni_id, true);

        //Strict OFF
        config()->set('database.connections.mysql.strict', false);
        \DB::reconnect(); //important as the existing connection if any would be in strict mode

        //Activity Log
        DB::table('activity_log')->insert([
            [
                'email' => Auth::user()->email,
                'name' => Auth::user()->name,
                'surname' => Auth::user()->surname,
                'codes' => $bulk . " Bulk ID",
                'type' => 'Community',
                'action' => 'Scheduled a bulk assessment for community assets on ' . $request->input('date')
            ]
        ]);

        for ($i = 0; $i < $count; $i++) {
            //Generate random id
            $uni_md = md5(time() . mt_rand(1, 1000000));
            $uni_time = time();
            $uni_id = "$uni_md$uni_time";
            $uni_final = uniqid($uni_id, true);

            //insert
            $assessment = new CommunityAssessment;
            $assessment->id = $uni_final;
            $assessment->property_id = $keys[$i];
            $assessment->assessor_id = $request->input('assessor_listbox');
            $assessment->date_of_assessment = $request->input('date');
            $assessment->time_of_assessment = $request->input('time');
            $assessment->file_no = "N/A";
            $assessment->comment = $request->input('comments');
            $assessment->bulk = $bulk;

            //INSERT Unique ID
            DB::connection('mysql4')->table('assessment_code')->insert([
                [
                    'assessment_id' => $uni_final,
                    'prefix' => 'MIS-SA',
                    'year' => date("Y")
                ]
            ]);

            //INSERT building_civils
            DB::connection('mysql4')->table('building_civils')->insert([
                [
                    'id' => $uni_final,
                    'assessment_id' => $uni_final
                ]
            ]);

            //INSERT building_electrical
            DB::connection('mysql4')->table('building_electrical')->insert([
                [
                    'id' => $uni_final,
                    'assessment_id' => $uni_final
                ]
            ]);

            //INSERT building_external
            DB::connection('mysql4')->table('building_external')->insert([
                [
                    'id' => $uni_final,
                    'assessment_id' => $uni_final
                ]
            ]);

            //INSERT building_mechanical
            DB::connection('mysql4')->table('building_mechanical')->insert([
                [
                    'id' => $uni_final,
                    'assessment_id' => $uni_final
                ]
            ]);

            //INSERT building_soft_service
            DB::connection('mysql4')->table('building_soft_service')->insert([
                [
                    'id' => $uni_final,
                    'assessment_id' => $uni_final
                ]
            ]);

            $assessment->save();
        }

        //now changing back the strict ON
        config()->set('database.connections.mysql.strict', true);
        \DB::reconnect();

        return redirect()->back()->with('success', 'Assessment Scheduled Successfully');
    }

    public function progress($id)
    {
        $civil = DB::connection('mysql4')->select("SELECT 
            IF(`water_reticulation` = '' ,1,0) + 
            IF(`sewerage_reticulation` = '' ,1,0) + 
            IF(`boundary_retaining_walls` = '' ,1,0) +
            IF(`gullys` = '' ,1,0) +
            IF(`roads_driveways` = '' ,1,0) +
            IF(`garages_carports` = '' ,1,0) +
            IF(`manholes_stormwater` = '' ,1,0) +
            IF(`fire_hydrant_connection` = '' ,1,0) +
            IF(`signage` = '' ,1,0) +
            IF(`ramps_railings` = '' ,1,0) AS total
            FROM building_civils
            WHERE assessment_id = '$id'");
        $sanitation = DB::connection('mysql4')->select("SELECT 
            IF(`sanitation_service` = '' ,1,0) + 
            IF(`fixture` = '' ,1,0) + 
            IF(`lights` = '' ,1,0) +
            IF(`solar_panels` = '' ,1,0) +
            IF(`batteries` = '' ,1,0) +
            IF(`switches` = '' ,1,0) +
            IF(`sensors` = '' ,1,0) +
            IF(`distribution_board` = '' ,1,0) +
            IF(`grounding` = '' ,1,0) +
            IF(`wiring` = '' ,1,0) +
            IF(`plug_points` = '' ,1,0) +
            IF(`electric_fencing` = '' ,1,0) AS total
            FROM building_electrical
            WHERE assessment_id = '$id'");
        $external = DB::connection('mysql4')->select("SELECT 
            IF(`signage` = '' ,1,0) + 
            IF(`curbs` = '' ,1,0) + 
            IF(`fences` = '' ,1,0) +
            IF(`security_gates` = '' ,1,0) +
            IF(`paving` = '' ,1,0) +
            IF(`parking_area` = '' ,1,0) +
            IF(`poles_columns_supports` = '' ,1,0) +
            IF(`pathways_sidewalks` = '' ,1,0) +
            IF(`surface_drainage` = '' ,1,0) +
            IF(`foundation` = '' ,1,0) +
            IF(`masonry` = '' ,1,0) +
            IF(`exterior_slab` = '' ,1,0) +
            IF(`exterior_walls` = '' ,1,0) +
            IF(`exterior_paint` = '' ,1,0) +
            IF(`roof` = '' ,1,0) +
            IF(`roof_drainage` = '' ,1,0) +
            IF(`stairs_steps` = '' ,1,0) +
            IF(`door_hardware` = '' ,1,0) +
            IF(`door_frame` = '' ,1,0) +
            IF(`doors` = '' ,1,0) +
            IF(`lights` = '' ,1,0) AS total
            FROM building_external
            WHERE assessment_id = '$id'");
        $mechanical = DB::connection('mysql4')->select("SELECT 
            IF(`faucets` = '' ,1,0) + 
            IF(`sinks` = '' ,1,0) + 
            IF(`fixtures` = '' ,1,0) +
            IF(`toilets` = '' ,1,0) +
            IF(`hangers` = '' ,1,0) +
            IF(`composting_units` = '' ,1,0) +
            IF(`vaults` = '' ,1,0) +
            IF(`heating_ventilation_air_conditioning` = '' ,1,0) +
            IF(`fire_fighting_detection` = '' ,1,0) +
            IF(`access_control` = '' ,1,0) +
            IF(`pressure_vessels` = '' ,1,0) +
            IF(`incinerators` = '' ,1,0) +
            IF(`water_tanks` = '' ,1,0) +
            IF(`pumps` = '' ,1,0) AS total
            FROM building_mechanical
            WHERE assessment_id = '$id'");
        $soft = DB::connection('mysql4')->select("SELECT 
            IF(`pest_control` = '' ,1,0) + 
            IF(`waste_management` = '' ,1,0) + 
            IF(`cleaning` = '' ,1,0) +
            IF(`horticultural` = '' ,1,0) +
            IF(`window_cleaning` = '' ,1,0) +
            IF(`sanitation` = '' ,1,0) AS total
            FROM building_soft_service
            WHERE assessment_id = '$id'");

        $sector = DB::connection('mysql4')->select("SELECT * FROM sector WHERE assessment_id = '$id' ORDER BY sector_no+0 ASC");
        $sector_sanitation = DB::connection('mysql4')->select("SELECT sector_id,
            IF(`sanitation_service` = '' ,1,0) + 
            IF(`fixtures` = '' ,1,0) + 
            IF(`solar_panels` = '' ,1,0) +
            IF(`batteries` = '' ,1,0) +
            IF(`switches` = '' ,1,0) +
            IF(`sensors` = '' ,1,0) +
            IF(`distribution_board` = '' ,1,0) +
            IF(`grounding` = '' ,1,0) +
            IF(`wiring` = '' ,1,0) +
            IF(`plug_points` = '' ,1,0) +
            IF(`electric_fencing` = '' ,1,0) +
            IF(`security` = '' ,1,0) +
            IF(`lights` = '' ,1,0) AS total
            FROM sector_sanitation
            WHERE assessment_id = '$id'");
        $sector_internal = DB::connection('mysql4')->select("SELECT sector_id,
            IF(`slab` = '' ,1,0) + 
            IF(`walls` = '' ,1,0) + 
            IF(`paint` = '' ,1,0) +
            IF(`stairs_steps` = '' ,1,0) +
            IF(`ladders` = '' ,1,0) +
            IF(`handrails` = '' ,1,0) +
            IF(`walkways` = '' ,1,0) +
            IF(`signage` = '' ,1,0) +
            IF(`crawl_spaces` = '' ,1,0) +
            IF(`poles_columns_support` = '' ,1,0) +
            IF(`window_casings` = '' ,1,0) +
            IF(`windows` = '' ,1,0) +
            IF(`glazing` = '' ,1,0) +
            IF(`door_hardware` = '' ,1,0) +
            IF(`door_frames` = '' ,1,0) +
            IF(`doors` = '' ,1,0) +
            IF(`insulation` = '' ,1,0) +
            IF(`fascia` = '' ,1,0) +
            IF(`roof_trusses` = '' ,1,0) +
            IF(`ironmongery` = '' ,1,0) +
            IF(`flashing` = '' ,1,0) +
            IF(`flooring` = '' ,1,0) +
            IF(`masonry` = '' ,1,0) +
            IF(`ceiling` = '' ,1,0) +
            IF(`vents` = '' ,1,0) +
            IF(`skylights` = '' ,1,0) AS total
            FROM sector_internal
            WHERE assessment_id = '$id'");
        $sector_mechanical = DB::connection('mysql4')->select("SELECT sector_id,
            IF(`faucets` = '' ,1,0) + 
            IF(`sinks` = '' ,1,0) + 
            IF(`fixtures` = '' ,1,0) +
            IF(`toilets` = '' ,1,0) +
            IF(`hangers` = '' ,1,0) +
            IF(`composting_units` = '' ,1,0) +
            IF(`vaults` = '' ,1,0) +
            IF(`heating_ventilation` = '' ,1,0) +
            IF(`fire_detection` = '' ,1,0) +
            IF(`access_control` = '' ,1,0) +
            IF(`pressure_vessels` = '' ,1,0) +
            IF(`incinerators` = '' ,1,0) +
            IF(`water_tanks` = '' ,1,0) +
            IF(`pumps` = '' ,1,0) AS total
            FROM sector_mechanical
            WHERE assessment_id = '$id'");

        return view('community.assessment.progress', [
            'id' => $id, 'civil' => $civil, 'sanitation' => $sanitation, 'external' => $external, 'mechanical' => $mechanical,
            'soft' => $soft, 'sector' => $sector, 'sector_sanitation' => $sector_sanitation, 'sector_internal' => $sector_internal, 'sector_mechanical' => $sector_mechanical
        ]);
    }

    public function superIntendent(Request $request, $id)
    {
        request()->validate([
            'box' => 'required'
        ]);

        //Strict OFF
        config()->set('database.connections.mysql.strict', false);
        \DB::reconnect(); //important as the existing connection if any would be in strict mode

        //Activity Log
        DB::table('activity_log')->insert([
            [
                'email' => Auth::user()->email,
                'name' => Auth::user()->name,
                'surname' => Auth::user()->surname,
                'codes' => $id,
                'type' => 'Community',
                'action' => 'SuperIntendent Signed Assessment ' . Auth::user()->name . ' ' . Auth::user()->surname . ' Signed Assessment'
            ]
        ]);

        //now changing back the strict ON
        config()->set('database.connections.mysql.strict', true);
        \DB::reconnect();

        //Find User
        $assessment = CommunityAssessment::findOrFail($id);
        $assessment->superIntendent = Auth::user()->id;
        $assessment->superIntendent_fullname = Auth::user()->name . " " . Auth::user()->surname;
        $assessment->superIntendent_date = \Carbon\Carbon::now();

        $assessment->save();

        return redirect()->back()->with('success', 'Assessment Signed Successfully');
    }

    public function deputyDirector(Request $request, $id)
    {
        request()->validate([
            'box' => 'required'
        ]);

        //Strict OFF
        config()->set('database.connections.mysql.strict', false);
        \DB::reconnect(); //important as the existing connection if any would be in strict mode

        //Activity Log
        DB::table('activity_log')->insert([
            [
                'email' => Auth::user()->email,
                'name' => Auth::user()->name,
                'surname' => Auth::user()->surname,
                'codes' => $id,
                'type' => 'Community',
                'action' => 'Deputy Director Signed Assessment ' . Auth::user()->name . ' ' . Auth::user()->surname . ' Signed Assessment'
            ]
        ]);

        //now changing back the strict ON
        config()->set('database.connections.mysql.strict', true);
        \DB::reconnect();

        //Find User
        $assessment = CommunityAssessment::findOrFail($id);
        $assessment->deputyDirector = Auth::user()->id;
        $assessment->deputyDirector_fullname = Auth::user()->name . " " . Auth::user()->surname;
        $assessment->deputyDirector_date = \Carbon\Carbon::now();

        $assessment->save();

        return redirect()->back()->with('success', 'Assessment Signed Successfully');
    }

    public function director(Request $request, $id)
    {
        request()->validate([
            'box' => 'required'
        ]);

        //Strict OFF
        config()->set('database.connections.mysql.strict', false);
        \DB::reconnect(); //important as the existing connection if any would be in strict mode

        //Activity Log
        DB::table('activity_log')->insert([
            [
                'email' => Auth::user()->email,
                'name' => Auth::user()->name,
                'surname' => Auth::user()->surname,
                'codes' => $id,
                'type' => 'Community',
                'action' => 'Director Signed Assessment ' . Auth::user()->name . ' ' . Auth::user()->surname . ' Signed Assessment'
            ]
        ]);

        //now changing back the strict ON
        config()->set('database.connections.mysql.strict', true);
        \DB::reconnect();

        //Find User
        $assessment = CommunityAssessment::findOrFail($id);
        $assessment->director = Auth::user()->id;
        $assessment->director_fullname = Auth::user()->name . " " . Auth::user()->surname;
        $assessment->director_date = \Carbon\Carbon::now();

        $assessment->save();

        return redirect()->back()->with('success', 'Assessment Signed Successfully');
    }

    public function signed()
    {
        $assessments = DB::connection('mysql4')->select('SELECT assessment.*, property.asset_id, property_group.primary_id, property_group.description, assessor.name AS a1, assessor.surname AS a2
            FROM assessment, assessor, property, property_group
            WHERE assessment.property_id = property.id AND property.group_id = property_group.id AND assessor.id = assessment.assessor_id
            AND assessment.date_of_assessment <= CURDATE() AND assessment.canceled <> "Yes" AND assessment.done = 1');

        return view('community.assessment.signed', ['assessment' => $assessments]);
    }
}
