<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\CommunityAsset;
use Illuminate\Support\Facades\Auth;
use Yajra\Datatables\Datatables;

use App\Http\Controllers\Controller;

class CommunityController extends Controller
{
    public function index()
    {
        $group = DB::connection('mysql4')->select("SELECT * FROM property_group WHERE deleted <> 'Yes'");
        $property = DB::connection('mysql4')->select("SELECT property.*, department.name AS dd, directorate_sub.name AS ds, asset_class.name AS a1, asset_type.name AS a2
            FROM property, department, directorate_sub, asset_class, asset_type
            WHERE department.id = property.department AND directorate_sub.id = property.sub 
            AND asset_class.id = property.class AND asset_type.id = property.type AND property.deleted <> 'Yes'");
        
        return view('community.asset.index', ['group' => $group, 'property' => $property]);
    }

    public function create()
    {
        return view('community.asset.groupAdd');
    }

    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required',
            'desc' => 'required'
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
                'type' => 'Community',
                'action' => 'Created a Community Asset Primary Group '.$request->input('title')
            ]
        ]);

        //property_financial
        DB::connection('mysql4')->table('property_group')->insert( 
            [
                'primary_id' => $request->input('title'),
                'description' => $request->input('desc'),
                'deleted' => 'No'
            ]
        );

        //now changing back the strict ON
        config()->set('database.connections.mysql.strict', true);
        \DB::reconnect();

        return redirect()->back()->with('success', 'Community Asset Primary Group Created Successfully');
    }

    public function show($id)
    {
        // dd('Hello');
        $community = DB::connection('mysql4')->select("SELECT property.*, department.name AS d3, directorate_sub.name AS d2, directorate.name AS d1,
            asset_class.name AS a1, asset_type.name AS a2
            FROM property, department, directorate, directorate_sub, asset_class, asset_type
            WHERE property.id = '$id' AND property.department = department.id AND property.sub = directorate_sub.id AND
            directorate_sub.directorate_id = directorate.id AND asset_class.id = property.class AND asset_type.id = property.type");
        $get = $community[0]->group_id;
        $group = DB::connection('mysql4')->select("SELECT * FROM property_group WHERE id = '$get'");
        $custodianship = DB::connection('mysql4')->select("SELECT * FROM property_custodianship WHERE property_id = '$id'");
        $financial = DB::connection('mysql4')->select("SELECT * FROM property_financial WHERE property_id = '$id'");
        $financialCalculator = DB::connection('mysql4')->select("SELECT SUM(`total_cost_prior_years`) AS total_cost_prior_years, 
            SUM(`total_current_year`) AS total_current_year, 
            SUM(`costing_total_current_year`) AS costing_total_current_year, 
            SUM(`total_cost`) AS total_cost, 
            SUM(`accumulated_depreciation`) AS accumulated_depreciation, 
            SUM(`depreciation_total_prior`) AS depreciation_total_prior, 
            SUM(`depreciation_total_additions`) AS depreciation_total_additions, 
            SUM(`depreciation_total`) AS depreciation_total, 
            SUM(`total_accumulated_depreciation`) AS total_accumulated_depreciation, 
            SUM(`book_value`) AS book_value
            FROM property_financial_type 
            WHERE property_id = '$id'");
        $financialType = DB::connection('mysql4')->select("SELECT * FROM property_financial_type WHERE property_id = '$id' AND deleted <> 'Yes' GROUP BY type");
        
        $history = DB::connection('mysql4')->select("SELECT assessment.*, assessor.name, assessor.surname, assessor.id AS ids 
            FROM assessment, assessor 
            WHERE property_id = '$id' AND assessment.assessor_id = assessor.id 
            ORDER BY date_of_assessment DESC");
        $img = DB::connection('mysql4')->select("SELECT img 
            FROM assessment
            WHERE property_id = '$id' AND done = 1
            ORDER BY assessment.date DESC 
            LIMIT 1");
        $project = DB::connection('mysql4')->select("SELECT * FROM property_projects WHERE property_id = '$id' AND deleted <> 'Yes'");
        $audit = DB::select("SELECT * FROM activity_log WHERE codes = '$id' AND type = 'Community'");

        $file = DB::connection('mysql4')->select("SELECT IF(`type` = 'Locality Plan', 'Yes', 'No') AS `t1`
            FROM files
            WHERE property_id = '$id' AND type = 'Locality Plan' AND deleted <> 'Yes'");
        $file2 = DB::connection('mysql4')->select("SELECT IF(`type` = 'Street View Diagram', 'Yes', 'No') AS `t2`
            FROM files
            WHERE property_id = '$id' AND type = 'Street View Diagram' AND deleted <> 'Yes'");
        $file3 = DB::connection('mysql4')->select("SELECT IF(`type` = 'Surveyor General Diagram', 'Yes', 'No') AS `t3`
            FROM files
            WHERE property_id = '$id' AND type = 'Surveyor General Diagram' AND deleted <> 'Yes'");
        $file4 = DB::connection('mysql4')->select("SELECT IF(`type` = 'Title Deed', 'Yes', 'No') AS `t4`
            FROM files
            WHERE property_id = '$id' AND type = 'Title Deed' AND deleted <> 'Yes'");
        $file5 = DB::connection('mysql4')->select("SELECT IF(`type` = 'Valuation Certificate', 'Yes', 'No') AS `t5`
            FROM files
            WHERE property_id = '$id' AND type = 'Valuation Certificate' AND deleted <> 'Yes'");
        $file6 = DB::connection('mysql4')->select("SELECT IF(`type` = 'Zoning Diagram', 'Yes', 'No') AS `t6`
            FROM files
            WHERE property_id = '$id' AND type = 'Zoning Diagram' AND deleted <> 'Yes'");
        $file7 = DB::connection('mysql4')->select("SELECT IF(`type` = 'Building Plans', 'Yes', 'No') AS `t7`
            FROM files
            WHERE property_id = '$id' AND type = 'Building Plans' AND deleted <> 'Yes'");
        $file8 = DB::connection('mysql4')->select("SELECT IF(`type` = 'Site Development Plans', 'Yes', 'No') AS `t8`
            FROM files
            WHERE property_id = '$id' AND type = 'Site Development Plans' AND deleted <> 'Yes'");
        $file9 = DB::connection('mysql4')->select("SELECT IF(`type` = 'Engineering Certifications', 'Yes', 'No') AS `t9`
            FROM files
            WHERE property_id = '$id' AND type = 'Engineering Certifications' AND deleted <> 'Yes'");
        $file10 = DB::connection('mysql4')->select("SELECT IF(`type` = 'Occupancy Certificate', 'Yes', 'No') AS `t10`
            FROM files
            WHERE property_id = '$id' AND type = 'Occupancy Certificate' AND deleted <> 'Yes'");
        $file11 = DB::connection('mysql4')->select("SELECT IF(`type` = 'Amendment Form', 'Yes', 'No') AS `t11`
            FROM files
            WHERE property_id = '$id' AND type = 'Amendment Form' AND deleted <> 'Yes'");

        $stat2=DB::connection('mysql4')->select("SELECT COUNT(id) AS total 
            FROM assessment
            WHERE property_id = '$id'");
        
        $stat3=DB::connection('mysql4')->select("SELECT COUNT(id) AS total 
            FROM assessment
            WHERE property_id = '$id' AND date_of_assessment >= CURDATE() AND done <> 1");

        $stat4=DB::connection('mysql4')->select("SELECT COUNT(id) AS total 
            FROM assessment
            WHERE property_id = '$id' AND date_of_assessment <= CURDATE() AND done <> 1");

        $stat5=DB::connection('mysql4')->select("SELECT COUNT(id) AS total 
            FROM assessment
            WHERE property_id = '$id' AND done = 1");

        return view('community.asset.view', ['community' => $community, 'group' => $group, 'custodianship' => $custodianship, 'financial' => $financial,
            'financialType' => $financialType, 'financialCalculator' => $financialCalculator, 'history' => $history, 'img' => $img, 'project' => $project, 'audit' => $audit,
            'file' => $file, 'file2' => $file2, 'file3' => $file3, 'file4' => $file4, 'file5' => $file5, 
            'file6' => $file6, 'file7' => $file7, 'file8' => $file8, 'file9' => $file9, 'file10' => $file10, 'file11' => $file11,
            'stat2' => $stat2, 'stat3' => $stat3,  'stat4' => $stat4, 'stat5' => $stat5]);
    }

    public function groupEdit($id)
    {
        $group = DB::connection('mysql4')->select("SELECT * FROM property_group WHERE id = '$id'");

        return view('community.asset.groupEdit', ['group' => $group]);
    }

    public function groupUpdate(Request $request, $id)
    {
        request()->validate([
            'title' => 'required',
            'desc' => 'required'
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
                'type' => 'Community',
                'action' => 'Updated a Community Asset Primary Group'
            ]
        ]);

        //property_financial
        DB::connection('mysql4')->table('property_group')->where('id', $id)->update( 
            [
                'primary_id' => $request->input('title'),
                'description' => $request->input('desc'),
                'deleted' => 'No'
            ]
        );

        //now changing back the strict ON
        config()->set('database.connections.mysql.strict', true);
        \DB::reconnect();

        return redirect()->back()->with('success', 'Community Asset Primary Group '.$request->input('title').' Updated Successfully');
    }

    public function edit($id)
    {
        $class = DB::connection('mysql4')->select("SELECT * FROM asset_class WHERE deleted <> 'Yes' AND category = 'Community'");
        $type = DB::connection('mysql4')->select("SELECT * FROM asset_type WHERE deleted <> 'Yes'");

        $dir = DB::connection('mysql4')->select("SELECT * FROM directorate WHERE deleted <> 'Yes' ORDER BY name ASC");
        $sub = DB::connection('mysql4')->select("SELECT * FROM directorate_sub WHERE deleted <> 'Yes' ORDER BY name ASC");
        $dep = DB::connection('mysql4')->select("SELECT * FROM department WHERE deleted <> 'Yes' ORDER BY name ASC");

        $community = DB::connection('mysql4')->select("SELECT property.*, department.name AS d3, department.id AS dd3, directorate_sub.name AS d2, 
            directorate_sub.id AS dd2, directorate.name AS d1, directorate.id AS dd1, asset_class.name AS a1, asset_class.id AS aa1, asset_type.name AS a2, asset_type.id AS aa2
            FROM property, department, directorate, directorate_sub, asset_class, asset_type
            WHERE property.id = '$id' AND property.department = department.id AND property.sub = directorate_sub.id AND
            directorate_sub.directorate_id = directorate.id AND asset_class.id = property.class AND asset_type.id = property.type");
        $get = $community[0]->group_id;
        $group = DB::connection('mysql4')->select("SELECT * FROM property_group WHERE id = '$get'");
        $custodianship = DB::connection('mysql4')->select("SELECT * FROM property_custodianship WHERE property_id = '$id'");
        $financial = DB::connection('mysql4')->select("SELECT * FROM property_financial WHERE property_id = '$id'");

        return view('community.asset.edit', ['class' => $class, 'type' => $type, 'dir' => $dir, 'sub' => $sub, 'dep' => $dep, 'community' => $community, 'group' => $group, 'custodianship' => $custodianship, 'financial' => $financial]);
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'description' => 'required',
            'asset_id' => 'required',
            'owned' => 'required',
            // 'parent_asset_id' => 'required',
            'class' => 'required',
            'type' => 'required',
            // 'subtype' => 'required',
            'directorate' => 'required',
            'sub' => 'required',
            'department' => 'required',
           
        ]);

        //update
        $community = CommunityAsset::findOrFail($id);

        $community->class = $request->input('class');
        $community->type = $request->input('type');
        $community->subtype = $request->input('subtype');
        $community->description = $request->input('description');
        $community->asset_id = $request->input('asset_id');
        $community->owned = $request->input('owned');
        $community->parent_asset_id = $request->input('parent_asset_id');
        $community->allotment_township = $request->input('allotment_township');
        $community->erf_number = $request->input('erf_number');
        $community->erf_number2 = $request->input('erf_number2');
        $community->ward = $request->input('ward');
        $community->portion_number = $request->input('portion_number');
        $community->serial_number = $request->input('serial_number');
        $community->complex = $request->input('complex');
        $community->building_name = $request->input('building_name');
        $community->street_no = $request->input('street_no');
        $community->street_name = $request->input('street_name');
        $community->intersection = $request->input('intersection');
        $community->suburb = $request->input('suburb');
        $community->city_town = $request->input('city_town');
        $community->latitude = $request->input('latitude');
        $community->longitude = $request->input('longitude');
        $community->sub = $request->input('sub');
        $community->department = $request->input('department');

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
                'action' => 'Edit '.$request->input('description').' Community Asset'
            ]
        ]);

        //property_financial
        DB::connection('mysql4')->table('property_financial')->where('property_id', $id)->update(
            [ 
                'date_in_use' => $request->input('date_in_use'),
                'year_in_use' => $request->input('year_in_use'), 
             
            ]
        );

        //property_financial
        DB::connection('mysql4')->table('property_custodianship')->where('property_id', $id)->update(
            [ 
                'responsible_official' => $request->input('responsible_official'),
                'custodian_email' => $request->input('custodian_email'), 
                'custodian_contact_number' => $request->input('custodian_contact_number'),
                'capital_accountant_name' => $request->input('capital_accountant_name'),
                'capital_accountant_email' => $request->input('capital_accountant_email'),
                'operating_accountant_name' => $request->input('operating_accountant_name'),
                'operating_accountant_email' => $request->input('operating_accountant_email')    
            ]
        );

        //now changing back the strict ON
        config()->set('database.connections.mysql.strict', true);
        \DB::reconnect();

        $community->save();

        return redirect()->back()->with('success', 'Community Asset Updated Successfully');
    }

    public function destroy($id)
    {
        
    }

    public function add($id)
    {
        $class = DB::connection('mysql4')->select("SELECT * FROM asset_class WHERE deleted <> 'Yes' AND category = 'Community'");
        $type = DB::connection('mysql4')->select("SELECT * FROM asset_type WHERE deleted <> 'Yes'");

        $dir = DB::connection('mysql4')->select("SELECT * FROM directorate WHERE deleted <> 'Yes' ORDER BY name ASC");
        $sub = DB::connection('mysql4')->select("SELECT * FROM directorate_sub WHERE deleted <> 'Yes' ORDER BY name ASC");
        $dep = DB::connection('mysql4')->select("SELECT * FROM department WHERE deleted <> 'Yes' ORDER BY name ASC");

        return view('community.asset.add', ['class' => $class, 'type' => $type, 'dir' => $dir, 'sub' => $sub, 'dep' => $dep, 'id' => $id]);
    }

    public function addStore(Request $request, $id)
    {
        request()->validate([
            'description' => 'required',
            'asset_id' => 'required',
            // 'parent_asset_id' => 'required',
            'class' => 'required',
            'type' => 'required',
            // 'subtype' => 'required',
            'directorate' => 'required',
            'sub' => 'required',
            'department' => 'required',
            // 'allotment_township' => 'required',
            // 'erf_number' => 'required',
            // 'erf_number2' => 'required',
            // 'ward' => 'required',
            // 'portion_number' => 'required',
            // 'complex' => 'required',
            // 'building_name' => 'required',
            // 'street_no' => 'required',
            // 'street_name' => 'required',
            // 'intersection' => 'required',
            // 'suburb' => 'required',
            // 'city_town' => 'required',
            // 'latitude' => 'required',
            // 'longitude' => 'required',
            // 'serial_number' => 'required',
            // 'date_in_use' => 'required',
            // 'year_in_use' => 'required',
            // 'life' => 'required',
            // 'remaining_life' => 'required',
            // 'remaining_prior_life' => 'required',
            // 'remaining_life_diff' => 'required',
            // 'total_cost_prior_years' => 'required',
            // 'total_current_year' => 'required',
            // 'total_cost' => 'required',
            // 'accumulated_depreciation' => 'required',
            // 'depreciation_total_prior' => 'required',
            // 'depreciation_total_additions' => 'required',
            // 'depreciation_total' => 'required',
            // 'total_accumulated_depreciation' => 'required',
            // 'book_value' => 'required',
            // 'responsible_official' => 'required',
            // 'custodian_email' => 'required',
            // 'custodian_contact_number' => 'required',
            // 'capital_accountant_name' => 'required',
            // 'capital_accountant_email' => 'required',
            // 'operating_accountant_name' => 'required',
            // 'operating_accountant_email' => 'required'
        ]);

        //Generate random id
        $uni_md = md5(time() . mt_rand(1, 1000000));
        $uni_time = time();
        $uni_id = "$uni_md$uni_time";
        $uni_final = uniqid($uni_id, true);

        //update
        $community = new CommunityAsset;

        $community->group_id = $id;
        $community->id = $uni_final;
        $community->class = $request->input('class');
        $community->type = $request->input('type');
        $community->subtype = $request->input('subtype');
        $community->description = $request->input('description');
        $community->asset_id = $request->input('asset_id');
        $community->parent_asset_id = $request->input('parent_asset_id');
        $community->allotment_township = $request->input('allotment_township');
        $community->erf_number = $request->input('erf_number');
        $community->erf_number2 = $request->input('erf_number2');
        $community->ward = $request->input('ward');
        $community->portion_number = $request->input('portion_number');
        $community->serial_number = $request->input('serial_number');
        $community->complex = $request->input('complex');
        $community->building_name = $request->input('building_name');
        $community->street_no = $request->input('street_no');
        $community->street_name = $request->input('street_name');
        $community->intersection = $request->input('intersection');
        $community->suburb = $request->input('suburb');
        $community->city_town = $request->input('city_town');
        $community->latitude = $request->input('latitude');
        $community->longitude = $request->input('longitude');
        $community->sub = $request->input('sub');
        $community->department = $request->input('department');
        $community->status = "Active";
        $community->deleted = "No";

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
                'action' => 'Created a Community Asset '.$request->input('description')
            ]
        ]);

        //property_financial
        DB::connection('mysql4')->table('property_financial')->insert( 
            [
                'property_id' => $uni_final,
                'date_in_use' => $request->input('date_in_use'),
                'year_in_use' => $request->input('year_in_use'), 
                // 'life' => $request->input('life'),
                // 'remaining_life' => $request->input('remaining_life'),
                // 'remaining_prior_life' => $request->input('remaining_prior_life'),
                // 'remaining_life_diff' => $request->input('remaining_life_diff'),
                // 'total_cost_prior_years' => $request->input('total_cost_prior_years'),
                // 'total_current_year' => $request->input('total_current_year'),
                // 'costing_total_current_year' => $request->input('costing_total_current_year'),
                // 'total_cost' => $request->input('total_cost'),
                // 'accumulated_depreciation' => $request->input('accumulated_depreciation'),
                // 'depreciation_total_prior' => $request->input('depreciation_total_prior'),
                // 'depreciation_total_additions' => $request->input('depreciation_total_additions'),
                // 'depreciation_total' => $request->input('depreciation_total'),
                // 'total_accumulated_depreciation' => $request->input('total_accumulated_depreciation'),
                // 'book_value' => $request->input('book_value')
            ]
        );

        //property_financial
        DB::connection('mysql4')->table('property_custodianship')->insert(            
            [
                'property_id' => $uni_final,
                'responsible_official' => $request->input('responsible_official'),
                'custodian_email' => $request->input('custodian_email'), 
                'custodian_contact_number' => $request->input('custodian_contact_number'),
                'capital_accountant_name' => $request->input('capital_accountant_name'),
                'capital_accountant_email' => $request->input('capital_accountant_email'),
                'operating_accountant_name' => $request->input('operating_accountant_name'),
                'operating_accountant_email' => $request->input('operating_accountant_email')   
            ]
        );

        //now changing back the strict ON
        config()->set('database.connections.mysql.strict', true);
        \DB::reconnect();

        $community->save();

        return redirect()->back()->with('success', 'Community Asset Created Successfully');
    }

    public function yajra()
    {
        $row = DB::connection('mysql4')->select("SELECT * FROM property_group WHERE deleted <> 'Yes'");
        $property = DB::connection('mysql4')->select("SELECT property.*, department.name AS dd, directorate_sub.name AS ds, asset_class.name AS a1, asset_type.name AS a2
            FROM property, department, directorate_sub, asset_class, asset_type
            WHERE department.id = property.department AND directorate_sub.id = property.sub 
            AND asset_class.id = property.class AND asset_type.id = property.type AND property.deleted <> 'Yes'");

        return Datatables::of($row)
            ->addColumn('description', function($row)
                {
                    return $row->description.' [<a href="/Community/groupEdit/'.$row->id.'">Edit</a>]';
                })
            ->addColumn('assets', function($row) use ($property)
                {
                    $item = '';

                    foreach($property as $p)
                    {
                        if($p->group_id == $row->id)
                        { 
                            if($p->status == 'Active')
                            {                                                
                                $item .= '<span class="label label-success" style="margin-left:10px">A</span> ';
                            }
                            elseif($p->status == 'Withdrawn')
                            {                                                
                                $item .= '<span class="label label-warning" style="margin-left:10px">W</span> ';
                            }
                            else
                            {                                                
                                $item .= '<span class="label label-danger" style="margin-left:10px">'.$p->status.'</span> ';
                            }
                            $item .= $p->description.' [<strong><a href="/Community/'.$p->id.'">View</a></strong>] <br>';
                        }
                    }

                    // if($row->status == 'Active')
                    // {
                    //     $item .= '<span class="label label-success" style="margin-left:10px">Active - In Use</span>';
                    // }elseif($row->status == 'Withdrawn')
                    // {
                    //     $item .= '<span class="label label-warning" style="margin-left:10px">Withdrawn</span>';
                    // }else
                    // {
                    //     $item .= '<span class="label label-danger" style="margin-left:10px">'.$row->status.'</span>';
                    // }

                    return $item;
                })
            ->addColumn('action', function($row) 
                {
                    return '<a href="/CommunityAssessment/bulk/'.$row->id.'" class="btn btn-primary">Schedule</a> 
                    <a href="/Community/add/'.$row->id.'" class="btn btn-primary">Add Asset</a>';
                })
            ->rawColumns(['action', 'assets', 'description'])
            ->make(true);
    }
    
    public function disposed()
    {
        // $intangible = DB::connection('mysql3')->select("SELECT intangible.*, department.name AS dd, directorate_sub.name AS ds, asset_class.name AS a1, asset_type.name AS a2
        //     FROM intangible, department, directorate_sub, asset_class, asset_type
        //     WHERE intangible.status = 'Written Out' AND department.id = intangible.department AND directorate_sub.id = intangible.sub 
        //     AND asset_class.id = intangible.class AND asset_type.id = intangible.type");

        // return view('intangible.asset.disposed', ['intangible' => $intangible]);
    }

    public function images($id)
    {
        $images = DB::connection('mysql4')->select("SELECT assessment_images.*, assessment.date_of_assessment FROM assessment, assessment_images
        WHERE assessment_images.assessment_id = assessment.id AND assessment.canceled <> 'Yes' AND assessment.done = 1 AND assessment.property_id = '$id'");
        return view('community.asset.images', ['id' => $id, 'image' => $images]);
    }

    public function file($id)
    {
        $file = DB::connection('mysql4')->select("SELECT * FROM files WHERE property_id = '$id' AND deleted <> 'Yes'");

        return view('community.asset.file', ['id' => $id, 'file' => $file]);
    }

    public function fileAdd($id)
    {
        return view('community.asset.fileAdd', ['id' => $id]);
    }

    public function fileStore(Request $request, $id)
    {
        request()->validate([
            'title' => 'required',
            'type' => 'required',
            'file' => 'required'
        ]);

        //Handle File Upload
        //if validation success
        if($request->hasfile('file')) 
        {
            $file = $request->file('file');
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path    =   public_path('/uploads/community/files/');
            $file->move($target_path, $name);
        }

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
                'action' => 'Added a Community Asset file '.$request->input('title').' with type '.$request->input('type')
            ]
        ]);

        //file
        DB::connection('mysql4')->table('files')->insert([
            [
                'property_id' => $id, 
                'title' => $request->input('title'),
                'type' => $request->input('type'),
                'upload' => '/public/uploads/community/files/'.$name, 
                'deleted' => 'No'
            ]
        ]);

        //now changing back the strict ON
        config()->set('database.connections.mysql.strict', true);
        \DB::reconnect();

        return redirect()->back()->with('success', 'Community File Inserted Successfully');
    }

    public function fileEdit($id)
    {
        $file = DB::connection('mysql4')->select("SELECT * FROM files WHERE id = '$id'");

        return view('community.asset.fileEdit', ['file' => $file]);
    }

    public function fileUpdate(Request $request, $id)
    {
        request()->validate([
            'title' => 'required',
            'type' => 'required'
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
                'action' => 'Updated a Community file '.$request->input('title').' with type '.$request->input('type')
            ]
        ]);

         //Handle File Upload
        //if validation success
        if($request->hasfile('file')) 
        {
            $file = $request->file('file');
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path    =   public_path('/uploads/community/files/');
            $file->move($target_path, $name);

            //file
            DB::connection('mysql4')->table('files')->where('id', $id)->update(
                [ 
                    'title' => $request->input('title'),
                    'type' => $request->input('type'),
                    'upload' => '/public/uploads/community/files/'.$name, 
                ]); 
        }else
        {
            //file
            DB::connection('mysql4')->table('files')->where('id', $id)->update(
                [ 
                    'title' => $request->input('title'),
                    'type' => $request->input('type'),
                ]); 
        }

        //now changing back the strict ON
        config()->set('database.connections.mysql.strict', true);
        \DB::reconnect();

        return redirect()->back()->with('success', 'Community File Updated Successfully');
    }

    public function fileDestroy($id)
    {
        $files = DB::connection('mysql4')->select("SELECT deleted FROM files WHERE id = '$id'");
        $get = $files[0]->deleted;

        if($files[0]->deleted == 'No')
        {
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
                    'action' => 'Deleted a Community file '.$files[0]->title
                ]
            ]); 

            //notes
            DB::connection('mysql4')->table('files')->where('id', $id)->update(
                [ 
                    'deleted' => 'Yes'
                ]); 

            //now changing back the strict ON
            config()->set('database.connections.mysql.strict', true);
            \DB::reconnect();

            return redirect()->back()->with('success', 'Community File Deleted Successfully');
        }else
        {
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
                    'action' => 'Undo Deleted a Community file '.$files[0]->title
                ]
            ]); 

            //notes
            DB::connection('mysql4')->table('files')->where('id', $id)->update(
                [ 
                    'deleted' => 'No'
                ]); 

            //now changing back the strict ON
            config()->set('database.connections.mysql.strict', true);
            \DB::reconnect();

            return redirect()->back()->with('success', 'Community File Undo Deleted Successfully');
        }   
    }

    public function notes($id)
    {
        $notes = DB::connection('mysql4')->select("SELECT * FROM notes WHERE property_id = '$id'");
            
        return view('community.asset.notes', ['id' => $id, 'notes' => $notes]);
    }

    public function notesAdd($id)
    {
        return view('community.asset.notesAdd', ['id' => $id]);
    }

    public function notesStore(Request $request, $id)
    {
        request()->validate([
            'type' => 'required',
            'title' => 'required',
            'desc' => 'required'
        ]);

        //Strict OFF
        config()->set('database.connections.mysql.strict', false);
        \DB::reconnect(); //important as the existing connection if any would be in strict mode

        //Activity Log
        $community = CommunityAsset::findOrFail($id);
        DB::table('activity_log')->insert([
            [
                'email' => Auth::user()->email, 
                'name' => Auth::user()->name, 
                'surname' => Auth::user()->surname, 
                'codes' => $id,
                'type' => 'Community', 
                'action' => 'Added a Community Asset Notes '.$request->input('title').' with type '.$request->input('type').' on '.$community->description
            ]
        ]);

        //notes
        DB::connection('mysql4')->table('notes')->insert([
            [
                'property_id' => $id,
                'type' => $request->input('type'), 
                'title' => $request->input('title'),                
                'description' => $request->input('desc'),
                'deleted' => 'No'
            ]
        ]);

        //now changing back the strict ON
        config()->set('database.connections.mysql.strict', true);
        \DB::reconnect();

        return redirect()->back()->with('success', 'Community Note Created Successfully');
    }

    public function notesEdit($id)
    {
        $notes = DB::connection('mysql4')->select("SELECT * FROM notes WHERE id = '$id'");

        return view('community.asset.notesEdit', ['notes' => $notes, 'id' => $id]);
    }

    public function notesUpdate(Request $request, $id)
    {
        request()->validate([
            'type' => 'required',
            'title' => 'required',
            'desc' => 'required',
            'community' => 'required'
        ]);      

        //Strict OFF
        config()->set('database.connections.mysql.strict', false);
        \DB::reconnect(); //important as the existing connection if any would be in strict mode

        //Activity Log
        $community = CommunityAsset::findOrFail($request->input('community'));
        DB::table('activity_log')->insert([
            [
                'email' => Auth::user()->email, 
                'name' => Auth::user()->name, 
                'surname' => Auth::user()->surname, 
                'codes' => $id,
                'type' => 'Community', 
                'action' => 'Updated a Community Asset Notes '.$request->input('title').' with type '.$request->input('type').' on '.$community->description
            ]
        ]);

        //notes
        DB::connection('mysql4')->table('notes')->where('id', $id)->update(
            [
                'type' => $request->input('type'), 
                'title' => $request->input('title'),                
                'description' => $request->input('desc'),
            ]
        );

        //now changing back the strict ON
        config()->set('database.connections.mysql.strict', true);
        \DB::reconnect();

        return redirect()->back()->with('success', 'Community Notes Updated Successfully');
    }

    public function notesDestroy($id)
    {
        $notes = DB::connection('mysql4')->select("SELECT notes.deleted, notes.property_id, notes.title, notes.type FROM notes WHERE id = '$id'");

        if($notes[0]->deleted == 'No')
        {
            //Strict OFF
            config()->set('database.connections.mysql.strict', false);
            \DB::reconnect(); //important as the existing connection if any would be in strict mode
            
            //Activity Log
            $community = CommunityAsset::findOrFail($notes[0]->property_id);
            DB::table('activity_log')->insert([
                [
                    'email' => Auth::user()->email, 
                    'name' => Auth::user()->name, 
                    'surname' => Auth::user()->surname, 
                    'codes' => $id,
                    'type' => 'Community',
                    'action' => 'Deleted a Community Notes '.$notes[0]->title.' with type '.$notes[0]->type.' on '.$community->description
                ]
            ]); 

            //notes
            DB::connection('mysql4')->table('notes')->where('id', $id)->update(
                [ 
                    'deleted' => 'Yes'
                ]); 

            //now changing back the strict ON
            config()->set('database.connections.mysql.strict', true);
            \DB::reconnect();

            return redirect()->back()->with('success', 'Community Notes Deleted Successfully');
        }else
        {
            //Strict OFF
            config()->set('database.connections.mysql.strict', false);
            \DB::reconnect(); //important as the existing connection if any would be in strict mode
            
            //Activity Log
            $community = CommunityAsset::findOrFail($notes[0]->property_id);
            DB::table('activity_log')->insert([
                [
                    'email' => Auth::user()->email, 
                    'name' => Auth::user()->name, 
                    'surname' => Auth::user()->surname, 
                    'codes' => $id,
                    'type' => 'Community',
                    'action' => 'Undo Deleted a Community Notes '.$notes[0]->title.' with type '.$notes[0]->type.' on '.$community->description
                ]
            ]); 

            //notes
            DB::connection('mysql4')->table('notes')->where('id', $id)->update(
                [ 
                    'deleted' => 'No'
                ]); 

            //now changing back the strict ON
            config()->set('database.connections.mysql.strict', true);
            \DB::reconnect();

            return redirect()->back()->with('success', 'Community Notes Undo Deleted Successfully');
        }   
    }

    public function component($id)
    {
        $financial = DB::connection('mysql4')->select("SELECT * FROM property_financial_type WHERE id = '$id'");

        return view('community.asset.component', ['financial' => $financial]);
    }

    public function componentStore(Request $request, $id)
    {
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
                'action' => 'Edit a Community Component Asset'
            ]
        ]);

        //Activity Log
        DB::connection('mysql4')->table('property_financial_type')->insert([
            [
                'property_id' => $id, 
                'type' => $request->input('type'), 
                'date_in_use' => 'X', 
                'year_in_use' => 'X',
                'asset_life' => 'X',
                'remaining_life' => 'X',
                'prior_life' => 'X',
                'life_diff' => 'X',
                'total_cost_prior_years' => 'X',
                'total_current_year' => 'X',
                'costing_total_current_year' => 'X',
                'total_cost' => 'X',
                'accumulated_depreciation' => 'X',
                'depreciation_total_prior' => 'X',
                'depreciation_total_additions' => 'X',
                'depreciation_total' => 'X',
                'total_accumulated_depreciation' => 'X',
                'book_value' => 'X',
                'deleted' => 'No'
            ]
        ]);

        //now changing back the strict ON
        config()->set('database.connections.mysql.strict', true);
        \DB::reconnect();

        return redirect()->back()->with('success', 'Community Components Asset Added To List Successfully');
    }

    public function componentUpdate(Request $request, $id)
    {
        request()->validate([
            'component' => 'required',
            'date_in_use' => 'required',
            'year_in_use' => 'required',
            'asset_life' => 'required',
            'remaining_life' => 'required',
            'prior_life' => 'required',
            'life_diff' => 'required',
            'total_cost_prior_years' => 'required',
            'total_current_year' => 'required',
            'total_cost' => 'required',
            'accumulated_depreciation' => 'required',
            'depreciation_total_prior' => 'required',
            'depreciation_total_additions' => 'required',
            'depreciation_total' => 'required',
            'total_accumulated_depreciation' => 'required',
            'book_value' => 'required'
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
                'action' => 'Edit a Community Component Asset'
            ]
        ]);

        //property_financial
        DB::connection('mysql4')->table('property_financial_type')->where('id', $id)->update(
            [ 
                'component_asset_id' => $request->input('component'),
                'date_in_use' => $request->input('date_in_use'),
                'year_in_use' => $request->input('year_in_use'), 
                'asset_life' => $request->input('asset_life'),
                'remaining_life' => $request->input('remaining_life'),
                'prior_life' => $request->input('prior_life'),
                'life_diff' => $request->input('life_diff'),
                'total_cost_prior_years' => $request->input('total_cost_prior_years'),
                'total_current_year' => $request->input('total_current_year'),
                'costing_total_current_year' => $request->input('costing_total_current_year'),
                'total_cost' => $request->input('total_cost'),
                'accumulated_depreciation' => $request->input('accumulated_depreciation'),
                'depreciation_total_prior' => $request->input('depreciation_total_prior'),
                'depreciation_total_additions' => $request->input('depreciation_total_additions'),
                'depreciation_total' => $request->input('depreciation_total'),
                'total_accumulated_depreciation' => $request->input('total_accumulated_depreciation'),
                'book_value' => $request->input('book_value')
            ]
        );

        //now changing back the strict ON
        config()->set('database.connections.mysql.strict', true);
        \DB::reconnect();

        return redirect()->back()->with('success', 'Community Components Asset Updated Successfully');
    }
}
