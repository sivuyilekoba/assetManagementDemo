<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;

class InfoController extends Controller
{
    public function generator()
    {
        return view('community.report.generator');
    }

    public function report(Request $request)
    {
        $year = $request->input('year');
        $last = $year - 1;
        $month = $request->input('month');
        $format = $request->input('format');
        if ($month <= 6) {
            $current = $year;
        } else {
            $current = $last;
        }

        //Strict OFF
        config()->set('database.connections.mysql.strict', false);
        \DB::reconnect(); //important as the existing connection if any would be in strict mode

        //YEAR DATA
        $data1 = DB::connection('mysql4')->select('SELECT COUNT(id) AS total, MONTHNAME(date_of_assessment) AS year
            FROM assessment
            WHERE canceled <> "Yes"
            AND (((YEAR(date_of_assessment) = "' . $year . '" AND MONTH(date_of_assessment) <= 6))
            OR (YEAR(date_of_assessment) = "' . $last . '" AND (MONTH(date_of_assessment) >= 7))) GROUP BY year;');

        $modal1 = DB::connection('mysql4')->select('SELECT assessment.*, MONTHNAME(assessment.date_of_assessment) AS month, YEAR(assessment.date_of_assessment) AS year, property.description
            FROM assessment, property
            WHERE assessment.property_id = property.id
            AND (((YEAR(assessment.date_of_assessment) = "' . $year . '" AND MONTH(assessment.date_of_assessment) <= 6))
            OR (YEAR(assessment.date_of_assessment) = "' . $last . '" AND (MONTH(assessment.date_of_assessment) >= 7))) GROUP BY id ORDER BY date_of_assessment;');

        $data2 = DB::connection('mysql4')->select('SELECT 
            COUNT(id) AS total,
            COUNT(CASE WHEN date_of_assessment > CURDATE() THEN 1 END) AS upcoming,
            COUNT(CASE WHEN date_of_assessment <= CURDATE() AND done = 1 THEN 1 END) AS complete,
            COUNT(CASE WHEN date_of_assessment <= CURDATE() AND done = 0 THEN 1 END) AS incomplete
            FROM assessment
            WHERE canceled <> "Yes"
            AND (((YEAR(date_of_assessment) = "' . $year . '" AND MONTH(date_of_assessment) <= 6))
            OR (YEAR(date_of_assessment) = "' . $last . '" AND (MONTH(date_of_assessment) >= 7)));');

        $data3 = DB::connection('mysql4')->select('SELECT 
            IFNULL(avg(building_civils.average),0) as count1,
            IFNULL(avg(building_electrical.average),0) as count2,
            IFNULL(avg(building_external.average),0) as count3,
            IFNULL(avg(building_mechanical.average),0) as count4,
            IFNULL(avg(building_soft_service.average),0) as count5
            FROM assessment, building_civils, building_electrical, building_external, building_mechanical, building_soft_service
            WHERE assessment.id = building_civils.assessment_id AND assessment.id = building_electrical.assessment_id AND assessment.id = building_external.assessment_id 
            AND assessment.id = building_mechanical.assessment_id AND assessment.id = building_soft_service.assessment_id AND
            assessment.canceled <> "Yes" AND assessment.done = 1
            AND (((YEAR(assessment.date_of_assessment) = "' . $year . '" AND MONTH(assessment.date_of_assessment) <= 6))
            OR (YEAR(assessment.date_of_assessment) = "' . $last . '" AND (MONTH(assessment.date_of_assessment) >= 7)));');

        $data5 = DB::connection('mysql4')->select('SELECT assessor.id, CONCAT_WS(" ", assessor.name, assessor.surname) AS fullname, COUNT(assessment.id) AS total
            FROM assessor, assessment
            WHERE assessor.id = assessment.assessor_id AND assessment.canceled <> "Yes"
            AND (((YEAR(date_of_assessment) = "' . $year . '" AND MONTH(date_of_assessment) <= 6))
            OR (YEAR(date_of_assessment) = "' . $last . '" AND (MONTH(date_of_assessment) >= 7))) 
            GROUP BY id 
            ORDER BY total DESC LIMIT 5');

        $data6 = DB::connection('mysql4')->select('SELECT assessor.id, CONCAT_WS(" ", assessor.name, assessor.surname) AS fullname, COUNT(assessment.id) AS total,
            COUNT(CASE WHEN assessment.done = 1 THEN 1 END) AS completed
            FROM assessor, assessment
            WHERE assessor.id = assessment.assessor_id AND assessment.canceled <> "Yes"
            AND (((YEAR(date_of_assessment) = "' . $year . '" AND MONTH(date_of_assessment) <= 6))
            OR (YEAR(date_of_assessment) = "' . $last . '" AND (MONTH(date_of_assessment) >= 7))) 
            GROUP BY id');

        $data7 = DB::connection('mysql4')->select('SELECT directorate.id, directorate.name, COUNT(assessment.id) AS total, AVG(NULLIF(assessment.average, 0)) AS average
            FROM property 
            LEFT JOIN assessment ON property.id = assessment.property_id AND assessment.canceled <> "Yes"
            LEFT JOIN directorate_sub ON property.sub = directorate_sub.id
            LEFT JOIN directorate ON directorate_sub.directorate_id = directorate.id 
            WHERE (((YEAR(assessment.date_of_assessment) = "' . $year . '" AND MONTH(assessment.date_of_assessment) <= 6))
            OR (YEAR(assessment.date_of_assessment) = "' . $last . '" AND (MONTH(assessment.date_of_assessment) >= 7))) 
            GROUP BY id');

        $data8 = DB::connection('mysql4')->select('SELECT asset_class.name, AVG(NULLIF(assessment.average, 0)) AS average
            FROM property 
            LEFT JOIN assessment ON property.id = assessment.property_id AND assessment.canceled <> "Yes"
            LEFT JOIN asset_class ON asset_class.id = property.class
            WHERE (((YEAR(assessment.date_of_assessment) = "' . $year . '" AND MONTH(assessment.date_of_assessment) <= 6))
            OR (YEAR(assessment.date_of_assessment) = "' . $last . '" AND (MONTH(assessment.date_of_assessment) >= 7))) 
            GROUP BY property.class');

        $data10 = DB::connection('mysql4')->select('SELECT assessment.id, property.asset_id, directorate_sub.name AS dd, assessment.date_of_assessment, 
            assessment.time_of_assessment, assessor.name, assessor.surname, assessment.average
            FROM property, assessment, directorate_sub, assessor
            WHERE assessment.property_id = property.id AND property.sub = directorate_sub.id
            AND assessment.assessor_id = assessor.id AND assessment.average < 3 AND (((YEAR(assessment.date_of_assessment) = "' . $year . '" AND MONTH(assessment.date_of_assessment) <= 6))
            OR (YEAR(assessment.date_of_assessment) = "' . $last . '" AND (MONTH(assessment.date_of_assessment) >= 7)))
            GROUP BY id');

        //=============================================
        //MONTH DATA

        $data1m = DB::connection('mysql4')->select('SELECT COUNT(id) AS total, MONTHNAME(date_of_assessment) AS year
            FROM assessment
            WHERE canceled <> "Yes"
            AND (YEAR(assessment.date_of_assessment) = "' . $current . '" AND MONTH(assessment.date_of_assessment) = "' . $month . '") 
            GROUP BY year;');

        $modal2 = DB::connection('mysql4')->select('SELECT assessment.*, DAY(assessment.date_of_assessment) AS month, YEAR(assessment.date_of_assessment) AS year, property.description
            FROM assessment, property
            WHERE assessment.property_id = property.id
            AND (YEAR(assessment.date_of_assessment) = "' . $current . '" AND MONTH(assessment.date_of_assessment) = "' . $month . '") GROUP BY id ORDER BY date_of_assessment;');

        $data2m = DB::connection('mysql4')->select('SELECT 
            COUNT(id) AS total,
            COUNT(CASE WHEN date_of_assessment > CURDATE() THEN 1 END) AS upcoming,
            COUNT(CASE WHEN date_of_assessment <= CURDATE() AND done = 1 THEN 1 END) AS complete,
            COUNT(CASE WHEN date_of_assessment <= CURDATE() AND done = 0 THEN 1 END) AS incomplete
            FROM assessment
            WHERE canceled <> "Yes"
            AND (((YEAR(date_of_assessment) = "' . $year . '" AND MONTH(date_of_assessment) <= 6))
            OR (YEAR(date_of_assessment) = "' . $last . '" AND (MONTH(date_of_assessment) >= 7)));');

        $data3m = DB::connection('mysql4')->select('SELECT 
            IFNULL(avg(building_civils.average),0) as count1,
            IFNULL(avg(building_electrical.average),0) as count2,
            IFNULL(avg(building_external.average),0) as count3,
            IFNULL(avg(building_mechanical.average),0) as count4,
            IFNULL(avg(building_soft_service.average),0) as count5
            FROM assessment, building_civils, building_electrical, building_external, building_mechanical, building_soft_service
            WHERE assessment.id = building_civils.assessment_id AND assessment.id = building_electrical.assessment_id AND assessment.id = building_external.assessment_id 
            AND assessment.id = building_mechanical.assessment_id AND assessment.id = building_soft_service.assessment_id AND
            assessment.canceled <> "Yes" AND assessment.done = 1
            AND (YEAR(date_of_assessment) = "' . $current . '" AND MONTH(date_of_assessment) = "' . $month . '")');

        $data5m = DB::connection('mysql4')->select('SELECT assessor.id, CONCAT_WS(" ", assessor.name, assessor.surname) AS fullname, COUNT(assessment.id) AS total
            FROM assessor, assessment
            WHERE assessor.id = assessment.assessor_id AND assessment.canceled <> "Yes"
            AND (YEAR(date_of_assessment) = "' . $current . '" AND MONTH(date_of_assessment) = "' . $month . '") 
            GROUP BY id 
            ORDER BY total DESC 
            LIMIT 10');

        $data6m = DB::connection('mysql4')->select('SELECT assessor.id, CONCAT_WS(" ", assessor.name, assessor.surname) AS fullname, COUNT(assessment.id) AS total,
            COUNT(CASE WHEN assessment.done = 1 THEN 1 END) AS completed
            FROM assessor, assessment
            WHERE assessor.id = assessment.assessor_id AND assessment.canceled <> "Yes"
            AND (YEAR(date_of_assessment) = "' . $current . '" AND MONTH(date_of_assessment) = "' . $month . '") 
            GROUP BY id');

        $data7m = DB::connection('mysql4')->select('SELECT directorate.id, directorate.name, COUNT(assessment.id) AS total, 
            AVG(NULLIF(assessment.average, 0)) AS average
            FROM property 
            LEFT JOIN assessment ON property.id = assessment.property_id AND assessment.canceled <> "Yes"
            LEFT JOIN directorate_sub ON property.sub = directorate_sub.id
            LEFT JOIN directorate ON directorate_sub.directorate_id = directorate.id 
            WHERE (YEAR(assessment.date_of_assessment) = "' . $current . '" AND MONTH(assessment.date_of_assessment) = "' . $month . '") GROUP BY id');

        $data8m = DB::connection('mysql4')->select('SELECT asset_class.name, AVG(NULLIF(assessment.average, 0)) AS average
            FROM property 
            LEFT JOIN assessment ON property.id = assessment.property_id AND assessment.canceled <> "Yes"
            LEFT JOIN asset_class ON asset_class.id = property.class
            WHERE (YEAR(date_of_assessment) = "' . $current . '" AND MONTH(date_of_assessment) = "' . $month . '")
            GROUP BY property.class');

        $data10m = DB::connection('mysql4')->select('SELECT assessment.id, property.asset_id, directorate_sub.name AS dd, assessment.date_of_assessment, 
            assessment.time_of_assessment, assessor.name, assessor.surname, assessment.average
            FROM property, assessment, directorate_sub, assessor
            WHERE assessment.property_id = property.id AND property.sub = directorate_sub.id
            AND assessment.assessor_id = assessor.id AND assessment.average < 3 AND (YEAR(assessment.date_of_assessment) = "' . $current . '" 
            AND MONTH(assessment.date_of_assessment) = "' . $month . '")
            GROUP BY id');

        //now changing back the strict ON
        config()->set('database.connections.mysql.strict', true);
        \DB::reconnect();

        if ($format == "view") {
            return view('community.report.report', [
                'data1' => $data1, 'data2' => $data2, 'data3' => $data3, 'data5' => $data5, 'data6' => $data6,
                'data7' => $data7, 'data8' => $data8, 'data10' => $data10,
                'year' => $year, 'month' => $month, 'data1m' => $data1m, 'data2m' => $data2m, 'data3m' => $data3m, 'data5m' => $data5m, 'data6m' => $data6m,
                'data7m' => $data7m, 'data8m' => $data8m, 'data10m' => $data10m, 'modal1' => $modal1, 'modal2' => $modal2
            ]);
        } else if ($format == "pdf") {
            return view('community.report.report_pdf', [
                'data1' => $data1, 'data2' => $data2, 'data3' => $data3, 'data5' => $data5, 'data6' => $data6,
                'data7' => $data7, 'data8' => $data8, 'data10' => $data10,
                'year' => $year, 'month' => $month, 'data1m' => $data1m, 'data2m' => $data2m, 'data3m' => $data3m, 'data5m' => $data5m, 'data6m' => $data6m,
                'data7m' => $data7m, 'data8m' => $data8m, 'data10m' => $data10m, 'modal1' => $modal1, 'modal2' => $modal2
            ]);
        }
    }

    public function stats($id)
    {
        if ($id == 1) {
            $data = DB::connection('mysql4')->select('SELECT property.id AS pp, assessment.id, property.asset_id, property.description, property.latitude, property.longitude, property.class, ROUND(assessment.average) AS average
                FROM property
                LEFT JOIN assessment ON assessment.property_id = property.id AND assessment.done = 1 AND assessment.canceled <> "Yes"
                WHERE assessment.date_of_assessment = (
                        SELECT MAX(assessment.date_of_assessment)
                        FROM assessment
                        WHERE assessment.property_id = property.id AND assessment.done = 1 AND assessment.canceled <> "Yes"
                    )
                GROUP BY pp');
        } elseif ($id == 2) {
            $data = DB::connection('mysql4')->select('SELECT property.id AS pp, assessment.id, property.asset_id, property.description, property.latitude, property.longitude, property.class, ROUND(assessment.average) AS average
                FROM property
                LEFT JOIN assessment ON assessment.property_id = property.id AND assessment.done = 1 AND assessment.canceled <> "Yes" AND ROUND(assessment.average) = 1
                WHERE assessment.date_of_assessment = (
                        SELECT MAX(assessment.date_of_assessment)
                        FROM assessment
                        WHERE assessment.property_id = property.id AND assessment.done = 1 AND assessment.canceled <> "Yes"
                    )
                GROUP BY pp');
        } elseif ($id == 3) {
            $data = DB::connection('mysql4')->select('SELECT property.id AS pp, assessment.id, property.asset_id, property.description, property.latitude, property.longitude, property.class, ROUND(assessment.average) AS average
                FROM property
                LEFT JOIN assessment ON assessment.property_id = property.id AND assessment.done = 1 AND assessment.canceled <> "Yes" AND ROUND(assessment.average) = 2
                WHERE assessment.date_of_assessment = (
                        SELECT MAX(assessment.date_of_assessment)
                        FROM assessment
                        WHERE assessment.property_id = property.id AND assessment.done = 1 AND assessment.canceled <> "Yes"
                    )
                GROUP BY pp');
        } elseif ($id == 4) {
            $data = DB::connection('mysql4')->select('SELECT property.id AS pp, assessment.id, property.asset_id, property.description, property.latitude, property.longitude, property.class, ROUND(assessment.average) AS average
                FROM property
                LEFT JOIN assessment ON assessment.property_id = property.id AND assessment.done = 1 AND assessment.canceled <> "Yes" AND ROUND(assessment.average) = 3
                WHERE assessment.date_of_assessment = (
                        SELECT MAX(assessment.date_of_assessment)
                        FROM assessment
                        WHERE assessment.property_id = property.id AND assessment.done = 1 AND assessment.canceled <> "Yes"
                    )
                GROUP BY pp');
        } elseif ($id == 5) {
            $data = DB::connection('mysql4')->select('SELECT property.id AS pp, assessment.id, property.asset_id, property.description, property.latitude, property.longitude, property.class, ROUND(assessment.average) AS average
                FROM property
                LEFT JOIN assessment ON assessment.property_id = property.id AND assessment.done = 1 AND assessment.canceled <> "Yes" AND ROUND(assessment.average) = 4
                WHERE assessment.date_of_assessment = (
                        SELECT MAX(assessment.date_of_assessment)
                        FROM assessment
                        WHERE assessment.property_id = property.id AND assessment.done = 1 AND assessment.canceled <> "Yes"
                    )
                GROUP BY pp');
        } elseif ($id == 6) {
            $data = DB::connection('mysql4')->select('SELECT property.id AS pp, assessment.id, property.asset_id, property.description, property.latitude, property.longitude, property.class, ROUND(assessment.average) AS average
                FROM property
                LEFT JOIN assessment ON assessment.property_id = property.id AND assessment.done = 1 AND assessment.canceled <> "Yes" AND ROUND(assessment.average) = 5
                WHERE assessment.date_of_assessment = (
                        SELECT MAX(assessment.date_of_assessment)
                        FROM assessment
                        WHERE assessment.property_id = property.id AND assessment.done = 1 AND assessment.canceled <> "Yes"
                    )
                GROUP BY pp');
        }

        return view('community.report.stats', ['data' => $data, 'id' => $id]);
    }

    public function stats2()
    {
        $data = DB::connection('mysql4')->select('SELECT property.*, assessment.date_of_assessment, assessment.time_of_assessment, asset_class.name, assessment.id AS getid
            FROM property
            LEFT JOIN assessment ON assessment.property_id = property.id AND assessment.done = 1 AND assessment.canceled <> "Yes" AND ROUND(assessment.average) = 1
            LEFT JOIN asset_class ON asset_class.id = property.class
            WHERE assessment.date_of_assessment = (
                    SELECT MAX(assessment.date_of_assessment)
                    FROM assessment
                    WHERE assessment.property_id = property.id AND assessment.done = 1 AND assessment.canceled <> "Yes"
                )
            GROUP BY id');
        $data2 = DB::connection('mysql4')->select('SELECT property.*, assessment.date_of_assessment, assessment.time_of_assessment, asset_class.name, assessment.id AS getid
            FROM property
            LEFT JOIN assessment ON assessment.property_id = property.id AND assessment.done = 1 AND assessment.canceled <> "Yes" AND ROUND(assessment.average) = 2
            LEFT JOIN asset_class ON asset_class.id = property.class
            WHERE assessment.date_of_assessment = (
                    SELECT MAX(assessment.date_of_assessment)
                    FROM assessment
                    WHERE assessment.property_id = property.id AND assessment.done = 1 AND assessment.canceled <> "Yes"
                )
            GROUP BY id');
        $data3 = DB::connection('mysql4')->select('SELECT property.*, assessment.date_of_assessment, assessment.time_of_assessment, asset_class.name, assessment.id AS getid
            FROM property
            LEFT JOIN assessment ON assessment.property_id = property.id AND assessment.done = 1 AND assessment.canceled <> "Yes" AND ROUND(assessment.average) = 3
            LEFT JOIN asset_class ON asset_class.id = property.class
            WHERE assessment.date_of_assessment = (
                    SELECT MAX(assessment.date_of_assessment)
                    FROM assessment
                    WHERE assessment.property_id = property.id AND assessment.done = 1 AND assessment.canceled <> "Yes"
                )
            GROUP BY id');
        $data4 = DB::connection('mysql4')->select('SELECT property.*, assessment.date_of_assessment, assessment.time_of_assessment, asset_class.name, assessment.id AS getid
            FROM property
            LEFT JOIN assessment ON assessment.property_id = property.id AND assessment.done = 1 AND assessment.canceled <> "Yes" AND ROUND(assessment.average) = 4
            LEFT JOIN asset_class ON asset_class.id = property.class
            WHERE assessment.date_of_assessment = (
                    SELECT MAX(assessment.date_of_assessment)
                    FROM assessment
                    WHERE assessment.property_id = property.id AND assessment.done = 1 AND assessment.canceled <> "Yes"
                )
            GROUP BY id');
        $data5 = DB::connection('mysql4')->select('SELECT property.*, assessment.date_of_assessment, assessment.time_of_assessment, asset_class.name, assessment.id AS getid
            FROM property
            LEFT JOIN assessment ON assessment.property_id = property.id AND assessment.done = 1 AND assessment.canceled <> "Yes" AND ROUND(assessment.average) = 5
            LEFT JOIN asset_class ON asset_class.id = property.class
            WHERE assessment.date_of_assessment = (
                    SELECT MAX(assessment.date_of_assessment)
                    FROM assessment
                    WHERE assessment.property_id = property.id AND assessment.done = 1 AND assessment.canceled <> "Yes"
                )
            GROUP BY id');

        return view('community.report.stats2', ['data' => $data, 'data2' => $data2, 'data3' => $data3, 'data4' => $data4, 'data5' => $data5]);
    }
}
