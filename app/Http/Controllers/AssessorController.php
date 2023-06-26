<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\CommunityAssessor;
use Illuminate\Support\Facades\Auth;
use Yajra\Datatables\Datatables;
use App\Access;
use Hash;

use App\Http\Controllers\Controller;

class AssessorController extends Controller
{
    public function index()
    {
        $assessors=DB::connection('mysql4')->select('SELECT assessor.*, directorate_sub.name AS dd FROM assessor, directorate_sub where assessor.sub = directorate_sub.id');

        return view('community.assessor.manage', ['assessor' => $assessors]);
    }

    public function create()
    {
        $directorate = DB::connection('mysql4')->table('directorate')->where('deleted', '!=' , 'Yes')->orderBy('name', 'ASC')->get();
        $sub = DB::connection('mysql4')->table('directorate_sub')->where('deleted', '!=' , 'Yes')->orderBy('name', 'ASC')->get();
        $department = DB::connection('mysql4')->table('department')->where('deleted', '!=' , 'Yes')->orderBy('name', 'ASC')->get();

        return view('community.assessor.add', ['directorate' => $directorate, 'sub' => $sub, 'department' => $department]);
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'surname' => 'required',
            'id' => 'required',
            'identity' => 'required',
            'email' => 'required',
            'cell' => 'required',
            'tel' => 'required',
            'title' => 'required',
            'file' => 'required|mimes:jpeg,png,jpg,bmp|max:2048',
            'file2' => 'max:5120',
            'sub' => 'required',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password|min:6'
        ]);

        //Generate random id
        $uni_md = md5(time() . mt_rand(1, 1000000));
        $uni_time = time();
        $uni_id = "$uni_md$uni_time";
        $uni_final = uniqid($uni_id, true);

        //Strict OFF
        config()->set('database.connections.mysql.strict', false);
        \DB::reconnect(); //important as the existing connection if any would be in strict mode
        
        //Activity Log
        DB::table('activity_log')->insert([
            [
                'email' => Auth::user()->email, 
                'name' => Auth::user()->name, 
                'surname' => Auth::user()->surname, 
                'codes' => $uni_final,
                'type' => 'Community',
                'action' => 'Added a Assessor '.$request->input('name').' '.$request->input('surname')
            ]
        ]); 

        //access
        DB::table('access')->where([['user_id', $uni_final], ['module', '17']])->update(
            [ 
                'active' => 'No',
            ]
        ); 

        //Handle File Upload
        //if validation success
        if($file = $request->file('file')) 
        {
            $name = time().time().'.'.$file->getClientOriginalExtension();
            $target_path    =   public_path('/images/fleet/assessor/profile/');

            if($file->move($target_path, $name)) {
                //Create Accessories
                $assessor = new CommunityAssessor;
                $assessor->id = $uni_final;
                $assessor->name = $request->input('name');
                $assessor->surname = $request->input('surname');
                $assessor->employee_id = $request->input('id');
                $assessor->id_number = $request->input('identity');
                $assessor->email = $request->input('email');
                $assessor->cell = $request->input('cell');
                $assessor->tel = $request->input('tel');
                $assessor->job_title = $request->input('title');
                $assessor->bio = $request->input('bio');
                $assessor->department = $request->input('department');
                $assessor->sub = $request->input('sub');
                $assessor->profile_pic = "/public/images/fleet/assessor/profile/".$name;
                $assessor->deleted = "No";
                $assessor->save();

                //Handle File Upload
                //if validation success
                $uploaded = "";
                if($request->hasfile('file2')) { 
                    foreach($request->file('file2') as $file) 
                    {
                        $name2 = time().time().'.'.$file->getClientOriginalExtension();
                        $target_path    =   public_path('/images/users/qualification/');
                        $file->move($target_path, $name2);
                        $uploaded =  $uploaded."/public/images/users/qualification/".$name2.",";
                    }
                }

                //Activity Log
                DB::table('users')->insert([
                    [
                        'id' => $uni_final,
                        'email' => $request->input('email'), 
                        'name' => $request->input('name'), 
                        'surname' => $request->input('surname'), 
                        'cell' => $request->input('cell'),
                        'title' => $request->input('title'),
                        'profile_pic' => '/public/images/fleet/assessor/profile/'.$name,
                        'user_type' => 'Assessor',
                        'status' => 'Active',
                        'active' => 'Yes',
                        'password' => Hash::make($request->input('password')),
                        'android' => md5($request->input('password')),
                        'qualification' => $uploaded
                    ]
                ]); 

                //insert
                $access = new Access;
                $access->user_id = $uni_final;
                $access->module = '17';
                $access->type = 'Assessor';
                $access->active = 'Yes';

                $access->save();

                return redirect()->back()->with('success', 'Assessor Created Successfully');
            }
        }

        //now changing back the strict ON
        config()->set('database.connections.mysql.strict', true);
        \DB::reconnect();
    }

    public function show($id)
    {
       
        $year = now()->year;
        $year2 = $year-1;
        $year3 = $year-2;
        $year4 = $year-3;
        $year5 = $year-4;

        $assessors=DB::connection('mysql4')->select('SELECT assessor.*, directorate_sub.name AS dd FROM assessor, directorate_sub where assessor.sub = directorate_sub.id AND assessor.id = "'.$id.'"');
        // dd($assessors);
        $directorate = DB::connection('mysql4')->table('directorate')->where('deleted', '!=' , 'Yes')->orderBy('name', 'ASC')->get();
        $sub = DB::connection('mysql4')->table('directorate_sub')->where('deleted', '!=' , 'Yes')->orderBy('name', 'ASC')->get();
        $department = DB::connection('mysql4')->table('department')->where('deleted', '!=' , 'Yes')->orderBy('name', 'ASC')->get();
        $dir = DB::connection('mysql4')->select('SELECT directorate.id AS d1, directorate.name AS d2, directorate_sub.id AS s1, directorate_sub.name AS s2 
            FROM directorate, directorate_sub, assessor 
            WHERE assessor.id = "'.$id.'" AND assessor.sub = directorate_sub.id  AND directorate_sub.directorate_id = directorate.id');
        $dep = DB::connection('mysql4')->select('SELECT department.id AS dd1, department.name AS dd2 FROM department, assessor WHERE assessor.id = "'.$id.'" AND assessor.department = department.id');
        $assessments = DB::connection('mysql4')->select('SELECT assessment.*, property.asset_id 
            FROM assessment, property 
            WHERE assessment.assessor_id = "'.$id.'" AND property.id = assessment.property_id ORDER BY date_of_assessment DESC');
            
        //Stats
        $chart=DB::connection('mysql4')->select("SELECT 
        COUNT(CASE WHEN YEAR(date_of_assessment) = $year THEN 1 END) AS 'count1',
        COUNT(CASE WHEN YEAR(date_of_assessment) = $year2 THEN 1 END) AS 'count2',
        COUNT(CASE WHEN YEAR(date_of_assessment) = $year3 THEN 1 END) AS 'count3',
        COUNT(CASE WHEN YEAR(date_of_assessment) = $year4 THEN 1 END) AS 'count4',
        COUNT(CASE WHEN YEAR(date_of_assessment) = $year5 THEN 1 END) AS 'count5'
        FROM assessment WHERE assessor_id = '$id' AND done = 1");

        $chart2=DB::connection('mysql4')->select("SELECT 
        COUNT(CASE WHEN YEAR(date_of_assessment) = $year THEN 1 END) AS 'count1',
        COUNT(CASE WHEN YEAR(date_of_assessment) = $year2 THEN 1 END) AS 'count2',
        COUNT(CASE WHEN YEAR(date_of_assessment) = $year3 THEN 1 END) AS 'count3',
        COUNT(CASE WHEN YEAR(date_of_assessment) = $year4 THEN 1 END) AS 'count4',
        COUNT(CASE WHEN YEAR(date_of_assessment) = $year5 THEN 1 END) AS 'count5'
        FROM assessment WHERE assessor_id = '$id'");

        $stat1=DB::connection('mysql4')->select("SELECT ROUND(IFNULL(AVG(average),0),2) AS average 
        FROM assessment 
        WHERE assessor_id = '$id' AND done = 1");

        $stat3=DB::connection('mysql4')->select("SELECT COUNT(id) AS total 
        FROM assessment
        WHERE assessor_id = '$id' AND date_of_assessment >= CURDATE() AND done <> 1");

        $stat4=DB::connection('mysql4')->select("SELECT COUNT(id) AS total 
        FROM assessment
        WHERE assessor_id = '$id' AND done = 1");

        $stat5=DB::connection('mysql4')->select("SELECT COUNT(id) AS total 
        FROM assessment
        WHERE assessor_id = '$id' AND date_of_assessment <= CURDATE() AND done <> 1");

        return view('community.assessor.view', ['assessor' => $assessors, 'directorate' => $directorate, 
        'sub' => $sub, 'department' => $department, 'dir' => $dir, 'dep' => $dep, 'assessment' => $assessments, 'chart' => $chart, 'chart2' => $chart2, 
        'stat1' => $stat1, 'stat3' => $stat3, 'stat4' => $stat4, 'stat5' => $stat5]);
    }

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        if($request->hasFile('file'))
        {
            request()->validate([
                'name' => 'required',
                'surname' => 'required',
                'id' => 'required',
                'identity' => 'required',
                'email' => 'required',
                'cell' => 'required',
                'tel' => 'required',
                'title' => 'required',
                'file' => 'required|mimes:jpeg,png,jpg,bmp|max:2048',
                'sub' => 'required'
            ]);
            
            //if validation success
            if($file = $request->file('file')) 
            {
                $name = time().time().'.'.$file->getClientOriginalExtension();
                $target_path    =   public_path('/images/fleet/icons/accessories/');

                if($file->move($target_path, $name)) 
                {
                    //Find User
                    $assessor = CommunityAssessor::findOrFail($id);
                    $assessor->name = $request->input('name');
                    $assessor->surname = $request->input('surname');
                    $assessor->employee_id = $request->input('id');
                    $assessor->id_number = $request->input('identity');
                    $assessor->email = $request->input('email');
                    $assessor->cell = $request->input('cell');
                    $assessor->tel = $request->input('tel');
                    $assessor->job_title = $request->input('title');
                    $assessor->bio = $request->input('bio');
                    $assessor->department = $request->input('department');
                    $assessor->sub = $request->input('sub');
                    $assessor->profile_pic = "/images/fleet/assessor/profile/".$name;
                    $assessor->save();
                }
            }
            
        }else
        {
            request()->validate([
                'name' => 'required',
                'surname' => 'required',
                'id' => 'required',
                'identity' => 'required',
                'email' => 'required',
                'cell' => 'required',
                'tel' => 'required',
                'title' => 'required',
                'sub' => 'required'
            ]);

            //Find User
            $assessor = CommunityAssessor::findOrFail($id);
            $assessor->name = $request->input('name');
            $assessor->surname = $request->input('surname');
            $assessor->employee_id = $request->input('id');
            $assessor->id_number = $request->input('identity');
            $assessor->email = $request->input('email');
            $assessor->cell = $request->input('cell');
            $assessor->tel = $request->input('tel');
            $assessor->job_title = $request->input('title');
            $assessor->bio = $request->input('bio');
            $assessor->department = $request->input('department');
            $assessor->sub = $request->input('sub');
            $assessor->save();
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
                'action' => 'Updated a Assessor  '.$request->input('name').' '.$request->input('surname')
            ]
        ]); 

        //now changing back the strict ON
        config()->set('database.connections.mysql.strict', true);
        \DB::reconnect();

        return redirect()->back()->with('success', 'Assessor Edited Successfully');
    }

    public function destroy($id)
    {
        $assessor = CommunityAssessor::findOrFail($id);

        if($assessor->deleted == 'Yes')
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
                    'action' => 'Undo Deleted Assessor '.$assessor->name.' '.$assessor->surname
                ]
            ]); 

            //now changing back the strict ON
            config()->set('database.connections.mysql.strict', true);
            \DB::reconnect();

            $assessor->deleted = 'No';
            $assessor->save();
            return redirect('/CommunityAssessor')->with('success', 'Deleted assessor Successfully');
        }else{
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
                    'action' => 'Deleted a Assessor '.$assessor->name.' '.$assessor->surname
                ]
            ]); 

            //now changing back the strict ON
            config()->set('database.connections.mysql.strict', true);
            \DB::reconnect();

            $assessor->deleted = 'Yes';
            $assessor->save();
            return redirect('/CommunityAssessor')->with('success', 'Deleted assessor Successfully');
        }  
    }
}
