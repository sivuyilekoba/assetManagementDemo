<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $month = date("m");
        if($month > 6)
        {
            $year = date("Y")+1;
            $last = date("Y");
        }else
        {
            $year = date("Y");
            $last = date("Y")-1;
        } 
        
        //ONE
        $pie1 = DB::connection('mysql4')->select('SELECT
            COUNT(CASE WHEN status = "Active" THEN 1 END) AS count1,
            COUNT(CASE WHEN status = "Withdrawn" THEN 1 END) AS count2
            FROM property');
        
        //TWO
        $chart1one = DB::connection('mysql4')->select("SELECT 
            COUNT(CASE WHEN MONTH(date_of_assessment) = 01 && YEAR(date_of_assessment) = $year THEN 1 END) AS 'jan',
            COUNT(CASE WHEN MONTH(date_of_assessment) = 02 && YEAR(date_of_assessment) = $year THEN 1 END) AS 'feb',
            COUNT(CASE WHEN MONTH(date_of_assessment) = 03 && YEAR(date_of_assessment) = $year THEN 1 END) AS 'mar',
            COUNT(CASE WHEN MONTH(date_of_assessment) = 04 && YEAR(date_of_assessment) = $year THEN 1 END) AS 'apr',
            COUNT(CASE WHEN MONTH(date_of_assessment) = 05 && YEAR(date_of_assessment) = $year THEN 1 END) AS 'may',
            COUNT(CASE WHEN MONTH(date_of_assessment) = 06 && YEAR(date_of_assessment) = $year THEN 1 END) AS 'jun',
            COUNT(CASE WHEN MONTH(date_of_assessment) = 07 && YEAR(date_of_assessment) = $last THEN 1 END) AS 'jul',
            COUNT(CASE WHEN MONTH(date_of_assessment) = 08 && YEAR(date_of_assessment) = $last THEN 1 END) AS 'aug',
            COUNT(CASE WHEN MONTH(date_of_assessment) = 09 && YEAR(date_of_assessment) = $last THEN 1 END) AS 'sep',
            COUNT(CASE WHEN MONTH(date_of_assessment) = 10 && YEAR(date_of_assessment) = $last THEN 1 END) AS 'oct',
            COUNT(CASE WHEN MONTH(date_of_assessment) = 11 && YEAR(date_of_assessment) = $last THEN 1 END) AS 'nov',
            COUNT(CASE WHEN MONTH(date_of_assessment) = 12 && YEAR(date_of_assessment) = $last THEN 1 END) AS 'dec'
            FROM assessment");

        $chart1two = DB::connection('mysql4')->select("SELECT 
            COUNT(CASE WHEN MONTH(date_of_assessment) = 01 && YEAR(date_of_assessment) = $year THEN 1 END) AS 'jan',
            COUNT(CASE WHEN MONTH(date_of_assessment) = 02 && YEAR(date_of_assessment) = $year THEN 1 END) AS 'feb',
            COUNT(CASE WHEN MONTH(date_of_assessment) = 03 && YEAR(date_of_assessment) = $year THEN 1 END) AS 'mar',
            COUNT(CASE WHEN MONTH(date_of_assessment) = 04 && YEAR(date_of_assessment) = $year THEN 1 END) AS 'apr',
            COUNT(CASE WHEN MONTH(date_of_assessment) = 05 && YEAR(date_of_assessment) = $year THEN 1 END) AS 'may',
            COUNT(CASE WHEN MONTH(date_of_assessment) = 06 && YEAR(date_of_assessment) = $year THEN 1 END) AS 'jun',
            COUNT(CASE WHEN MONTH(date_of_assessment) = 07 && YEAR(date_of_assessment) = $last THEN 1 END) AS 'jul',
            COUNT(CASE WHEN MONTH(date_of_assessment) = 08 && YEAR(date_of_assessment) = $last THEN 1 END) AS 'aug',
            COUNT(CASE WHEN MONTH(date_of_assessment) = 09 && YEAR(date_of_assessment) = $last THEN 1 END) AS 'sep',
            COUNT(CASE WHEN MONTH(date_of_assessment) = 10 && YEAR(date_of_assessment) = $last THEN 1 END) AS 'oct',
            COUNT(CASE WHEN MONTH(date_of_assessment) = 11 && YEAR(date_of_assessment) = $last THEN 1 END) AS 'nov',
            COUNT(CASE WHEN MONTH(date_of_assessment) = 12 && YEAR(date_of_assessment) = $last THEN 1 END) AS 'dec'
            FROM assessment WHERE done = 1;");
        
        //THREE
        $pie2 = DB::connection('mysql4')->select('SELECT 
            COUNT(CASE WHEN class = "1" THEN 1 END) AS count1, 
            COUNT(CASE WHEN class = "2" THEN 1 END) AS count2 
            FROM property             
            WHERE deleted <> "Yes"');
        
        //FOUR
        $pie3 = DB::connection('mysql4')->select('SELECT asset_type.id, COUNT(asset_type.id) AS total, asset_type.name
            FROM property, asset_type
            WHERE property.type = asset_type.id
            GROUP BY asset_type.id');
        
        //FIVE
        $pie4 = DB::connection('mysql4')->select('SELECT
            COUNT(CASE WHEN done = 1 OR done = 0 THEN 1 END) AS count1,
            COUNT(CASE WHEN done = 1 THEN 1 END) AS count2
            FROM assessment');

        $chart2 = DB::connection('mysql4')->select("SELECT 
            avg(case when MONTH(assessment.date_of_assessment) = 07 AND YEAR(assessment.date_of_assessment) = $last then assessment.average else null end) as count1,
            avg(case when MONTH(assessment.date_of_assessment) = 08 AND YEAR(assessment.date_of_assessment) = $last then assessment.average else null end) as count2,
            avg(case when MONTH(assessment.date_of_assessment) = 09 AND YEAR(assessment.date_of_assessment) = $last then assessment.average else null end) as count3,
            avg(case when MONTH(assessment.date_of_assessment) = 10 AND YEAR(assessment.date_of_assessment) = $last then assessment.average else null end) as count4,
            avg(case when MONTH(assessment.date_of_assessment) = 11 AND YEAR(assessment.date_of_assessment) = $last then assessment.average else null end) as count5,
            avg(case when MONTH(assessment.date_of_assessment) = 12 AND YEAR(assessment.date_of_assessment) = $last then assessment.average else null end) as count6,
            avg(case when MONTH(assessment.date_of_assessment) = 01 AND YEAR(assessment.date_of_assessment) = $year then assessment.average else null end) as count7,
            avg(case when MONTH(assessment.date_of_assessment) = 02 AND YEAR(assessment.date_of_assessment) = $year then assessment.average else null end) as count8,
            avg(case when MONTH(assessment.date_of_assessment) = 03 AND YEAR(assessment.date_of_assessment) = $year then assessment.average else null end) as count9,
            avg(case when MONTH(assessment.date_of_assessment) = 04 AND YEAR(assessment.date_of_assessment) = $year then assessment.average else null end) as count10,
            avg(case when MONTH(assessment.date_of_assessment) = 05 AND YEAR(assessment.date_of_assessment) = $year then assessment.average else null end) as count11,
            avg(case when MONTH(assessment.date_of_assessment) = 06 AND YEAR(assessment.date_of_assessment) = $year then assessment.average else null end) as count12 
            FROM assessment
            WHERE assessment.done = 1 ");
        
        $financial = DB::connection('mysql4')->select("SELECT YEAR(created) AS year FROM property GROUP BY Year");
        
        return view('community.index', ['pie1' => $pie1, 'chart1one' => $chart1one, 'chart1two' => $chart1two, 'pie2' => $pie2, 'pie3' => $pie3, 'pie4' => $pie4, 'chart2' => $chart2, 'year' => $financial]);
    }

    public function filter($id)
    {
        $year = $id;
        $last = $id-1;

        //ONE
        $pie1 = DB::connection('mysql4')->select('SELECT
            COUNT(CASE WHEN status = "Active" THEN 1 END) AS count1,
            COUNT(CASE WHEN status = "Withdrawn" THEN 1 END) AS count2
            FROM property
            WHERE (YEAR(date) = YEAR("'.$year.'-06-01") AND MONTH(date) <= MONTH("'.$year.'-06-01")) 
            OR (YEAR(date) = YEAR("'.$last.'-06-01") AND MONTH(date) >= MONTH("'.$last.'-07-01"))');
        
        //TWO
        $chart1one = DB::connection('mysql4')->select("SELECT 
            COUNT(CASE WHEN MONTH(date_of_assessment) = 01 && YEAR(date_of_assessment) = $year THEN 1 END) AS 'jan',
            COUNT(CASE WHEN MONTH(date_of_assessment) = 02 && YEAR(date_of_assessment) = $year THEN 1 END) AS 'feb',
            COUNT(CASE WHEN MONTH(date_of_assessment) = 03 && YEAR(date_of_assessment) = $year THEN 1 END) AS 'mar',
            COUNT(CASE WHEN MONTH(date_of_assessment) = 04 && YEAR(date_of_assessment) = $year THEN 1 END) AS 'apr',
            COUNT(CASE WHEN MONTH(date_of_assessment) = 05 && YEAR(date_of_assessment) = $year THEN 1 END) AS 'may',
            COUNT(CASE WHEN MONTH(date_of_assessment) = 06 && YEAR(date_of_assessment) = $year THEN 1 END) AS 'jun',
            COUNT(CASE WHEN MONTH(date_of_assessment) = 07 && YEAR(date_of_assessment) = $last THEN 1 END) AS 'jul',
            COUNT(CASE WHEN MONTH(date_of_assessment) = 08 && YEAR(date_of_assessment) = $last THEN 1 END) AS 'aug',
            COUNT(CASE WHEN MONTH(date_of_assessment) = 09 && YEAR(date_of_assessment) = $last THEN 1 END) AS 'sep',
            COUNT(CASE WHEN MONTH(date_of_assessment) = 10 && YEAR(date_of_assessment) = $last THEN 1 END) AS 'oct',
            COUNT(CASE WHEN MONTH(date_of_assessment) = 11 && YEAR(date_of_assessment) = $last THEN 1 END) AS 'nov',
            COUNT(CASE WHEN MONTH(date_of_assessment) = 12 && YEAR(date_of_assessment) = $last THEN 1 END) AS 'dec'
            FROM assessment");

        $chart1two = DB::connection('mysql4')->select("SELECT 
            COUNT(CASE WHEN MONTH(date_of_assessment) = 01 && YEAR(date_of_assessment) = $year THEN 1 END) AS 'jan',
            COUNT(CASE WHEN MONTH(date_of_assessment) = 02 && YEAR(date_of_assessment) = $year THEN 1 END) AS 'feb',
            COUNT(CASE WHEN MONTH(date_of_assessment) = 03 && YEAR(date_of_assessment) = $year THEN 1 END) AS 'mar',
            COUNT(CASE WHEN MONTH(date_of_assessment) = 04 && YEAR(date_of_assessment) = $year THEN 1 END) AS 'apr',
            COUNT(CASE WHEN MONTH(date_of_assessment) = 05 && YEAR(date_of_assessment) = $year THEN 1 END) AS 'may',
            COUNT(CASE WHEN MONTH(date_of_assessment) = 06 && YEAR(date_of_assessment) = $year THEN 1 END) AS 'jun',
            COUNT(CASE WHEN MONTH(date_of_assessment) = 07 && YEAR(date_of_assessment) = $last THEN 1 END) AS 'jul',
            COUNT(CASE WHEN MONTH(date_of_assessment) = 08 && YEAR(date_of_assessment) = $last THEN 1 END) AS 'aug',
            COUNT(CASE WHEN MONTH(date_of_assessment) = 09 && YEAR(date_of_assessment) = $last THEN 1 END) AS 'sep',
            COUNT(CASE WHEN MONTH(date_of_assessment) = 10 && YEAR(date_of_assessment) = $last THEN 1 END) AS 'oct',
            COUNT(CASE WHEN MONTH(date_of_assessment) = 11 && YEAR(date_of_assessment) = $last THEN 1 END) AS 'nov',
            COUNT(CASE WHEN MONTH(date_of_assessment) = 12 && YEAR(date_of_assessment) = $last THEN 1 END) AS 'dec'
            FROM assessment WHERE done = 1;");
        
        //THREE
        $pie2 = DB::connection('mysql4')->select('SELECT 
            COUNT(CASE WHEN class = "1" THEN 1 END) AS count1, 
            COUNT(CASE WHEN class = "2" THEN 1 END) AS count2 
            FROM property
            WHERE deleted <> "Yes" AND (YEAR(date) = YEAR("'.$year.'-06-01") AND MONTH(date) <= MONTH("'.$year.'-06-01")) 
            OR (YEAR(date) = YEAR("'.$last.'-06-01") AND MONTH(date) >= MONTH("'.$last.'-07-01"))');
        
        //FOUR
        $pie3 = DB::connection('mysql4')->select('SELECT asset_type.id, COUNT(asset_type.id) AS total, asset_type.name
            FROM property, asset_type                      
            WHERE property.type = asset_type.id AND ((YEAR(property.date) = YEAR("'.$year.'-06-01") AND MONTH(property.date) <= MONTH("'.$year.'-06-01")) 
            OR (YEAR(property.date) = YEAR("'.$last.'-06-01") AND MONTH(property.date) >= MONTH("'.$last.'-07-01")))
            GROUP BY asset_type.id');
        
        //FIVE
        $pie4 = DB::connection('mysql4')->select('SELECT
            COUNT(CASE WHEN done = 1 OR done = 0 THEN 1 END) AS count1,
            COUNT(CASE WHEN done = 1 THEN 1 END) AS count2
            FROM assessment
            WHERE (YEAR(date_of_assessment) = YEAR("'.$year.'-06-01") AND MONTH(date_of_assessment) <= MONTH("'.$year.'-06-01")) 
            OR (YEAR(date_of_assessment) = YEAR("'.$last.'-06-01") AND MONTH(date_of_assessment) >= MONTH("'.$last.'-07-01"))');

        $chart2 = DB::connection('mysql4')->select("SELECT 
            avg(case when MONTH(assessment.date_of_assessment) = 07 AND YEAR(assessment.date_of_assessment) = $last then assessment.average else null end) as count1,
            avg(case when MONTH(assessment.date_of_assessment) = 08 AND YEAR(assessment.date_of_assessment) = $last then assessment.average else null end) as count2,
            avg(case when MONTH(assessment.date_of_assessment) = 09 AND YEAR(assessment.date_of_assessment) = $last then assessment.average else null end) as count3,
            avg(case when MONTH(assessment.date_of_assessment) = 10 AND YEAR(assessment.date_of_assessment) = $last then assessment.average else null end) as count4,
            avg(case when MONTH(assessment.date_of_assessment) = 11 AND YEAR(assessment.date_of_assessment) = $last then assessment.average else null end) as count5,
            avg(case when MONTH(assessment.date_of_assessment) = 12 AND YEAR(assessment.date_of_assessment) = $last then assessment.average else null end) as count6,
            avg(case when MONTH(assessment.date_of_assessment) = 01 AND YEAR(assessment.date_of_assessment) = $year then assessment.average else null end) as count7,
            avg(case when MONTH(assessment.date_of_assessment) = 02 AND YEAR(assessment.date_of_assessment) = $year then assessment.average else null end) as count8,
            avg(case when MONTH(assessment.date_of_assessment) = 03 AND YEAR(assessment.date_of_assessment) = $year then assessment.average else null end) as count9,
            avg(case when MONTH(assessment.date_of_assessment) = 04 AND YEAR(assessment.date_of_assessment) = $year then assessment.average else null end) as count10,
            avg(case when MONTH(assessment.date_of_assessment) = 05 AND YEAR(assessment.date_of_assessment) = $year then assessment.average else null end) as count11,
            avg(case when MONTH(assessment.date_of_assessment) = 06 AND YEAR(assessment.date_of_assessment) = $year then assessment.average else null end) as count12 
            FROM assessment
            WHERE assessment.done = 1 ");
        
        $financial = DB::connection('mysql4')->select("SELECT YEAR(created) AS year FROM property GROUP BY Year");

        return view('community.index', ['pie1' => $pie1, 'chart1one' => $chart1one, 'chart1two' => $chart1two, 'pie2' => $pie2, 'pie3' => $pie3, 'pie4' => $pie4, 'chart2' => $chart2, 'year' => $financial]);
    }
}
