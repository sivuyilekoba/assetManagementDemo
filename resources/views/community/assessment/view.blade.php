@extends('layouts.community.report')

@section('content')

<div class="row">
    <br>
    <div class="col-md-1"></div>
    <div class="col-md-10"><!--START COL MIDDLE-->

        <div class="row">
            <div class="col-md-12">
                <img src="/logo.png" style="width:120px">
            </div>            
            <div class="col-md-12">
                <h2>Community Asset Management</h2>    
                <h4>Building/Structure/Site Inspection - Property Data</h4>  
            </div>
            
            <div class="col-md-6">
                <br>
                <table style="width:100%; padding:7px" border="1">
                    <tbody>
                        <tr>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw; width:25%" colspan="2"><center>Property Information</center></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Asset Category:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$community[0]->a1}}/ {{$community[0]->a2}}</td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Parent Asset ID:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$group[0]->primary_id}}</td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Asset ID:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$community[0]->asset_id}}</td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Allotment/Township:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$community[0]->allotment_township}}</td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Erf Number:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$community[0]->erf_number}}</td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Portion Number:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$community[0]->portion_number}}</td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Erf Type:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Leased Area (sqm):</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$community[0]->leased_area}}</td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Complex:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$community[0]->complex}}</td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Property Description:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$community[0]->description}}</td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Building Name:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$community[0]->building_name}}</td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Street No.:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$community[0]->street_no}}</td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Street Name:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$community[0]->street_name}}</td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Suburb:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$community[0]->suburb}}</td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Street Code:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">City/Town:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$community[0]->city_town}}</td>
                        </tr>
                        <tr>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw; width:25%" colspan="2"><center>Lessee</center></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Lessee Profile Number:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Lessee Type:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Company/Organisation Name:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Registration Number:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$community[0]->registration_number}}</td>
                        </tr>
                        <tr>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw; width:25%" colspan="2"><center>Contract/Agreement</center></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Lease Category:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Lease Type:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Lease Status:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Lease Agreement No.:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw; width:25%" colspan="2"><center>Contact Information</center></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Contact Person:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Designation:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Primary Contact No:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Alternate Contact No:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Mobile No:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Fax No:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Email Address:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <img src="/logo.png" style="width:100%">
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <h3>Property Condition Overview</h3>
                <p><strong>Date of Inspection:</strong> {{$assessment[0]->date_of_assessment}}</p>
                <p><strong>Inspected By:</strong> {{$assessment[0]->a1}} {{$assessment[0]->a2}}</p>
                <p><strong>Time:</strong> {{$assessment[0]->time_of_assessment}}</p>
                <p><strong>Condition Assessment File No:</strong> {{$assessment[0]->file_no}}</p>
            </div>
            <div class="col-md-6">
                <img src="/logo.png" style="width:250px">
            </div>
            <div class="col-md-6">
                <br>
                <table style="width:100%; padding:7px" border="1">
                    <tbody>
                        <tr>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw; width:25%" colspan="2"><center>Condition Rating (CR)</center></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Not Rated:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">CR = 0</td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Condemn:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">CR = 1</td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Major Repairs:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">CR = 2</td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Minor Repairs:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">CR = 3</td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Normal Maintenance:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">CR = 4</td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">As New/No Defect:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">CR = 5</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <br>
                <table style="width:100%; padding:7px" border="1">
                    <tbody>
                        <tr>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw; width:25%" colspan="2"><center>Classification Code (CC)</center></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Not Classified:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">CC = 0</td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">OHS Risk/Emergency:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">CC = 1</td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Non-functional:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">CC = 2</td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Replacement Required:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">CC = 3</td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Repairs and Maintenance:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">CC = 4</td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Professional Input Required:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">CC = 5</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-12">
                <br>
                <table style="width:100%; padding:7px" border="1">
                    <tbody>
                        <tr>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw; width:25%"><center>Additional Comment</center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw; width:25%"><center>Code</center></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Age Related Maintenance:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">ARM</td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">All Signs Visible:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">ASV</td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Superficial Minor Cracks Appear:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">SMCA</td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Major Cracks Appear:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">MCA</td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Door Frames Rotten:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">DFR</td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Fire Extinguisher Serviced:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">FES</td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Fire Extinguisher Requires Service:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">FERS</td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Broken Windows:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">BW</td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Professional Assessment Required:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">PAR</td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Replacement Required:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">RR</td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Damp Maintenance:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">DM</td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Ceiling Leaking:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">CL</td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Water Damage:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">WD</td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">No Light Switch:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">NS</td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Electrical System Faulty:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">ESF</td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Lights Not Functioning:</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">LNF</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-12">
                <br>
                <table style="width:100%; padding:7px" border="1">
                    <tbody>
                        <tr>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw; width:5%"><center>Sector No.</center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw; width:25%"><center>Sector Description</center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center>Overall CR</center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center>External</center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center>Internal</center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center>Civils</center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center>Mechanical</center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center>Electrical</center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center>Soft Services</center></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:#838383"></td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Building/Structural</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$overall = ($building1[0]->average + $building2[0]->average + $building3[0]->average + $building4[0]->average + $building5[0]->average) / 5}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->average}}</td>
                            <td style="padding:3px; background-color:#838383"></td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building1[0]->average}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building4[0]->average}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building2[0]->average}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building5[0]->average}}</td>
                        </tr>
                        @foreach($sector AS $s) 
                            <tr>
                                <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$s->sector_no}}</td>
                                <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$s->description}}</td>
                                <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                    @php 
                                        $sectorOverall = 0;
                                        foreach($internal AS $e)
                                        {
                                            if($s->id == $e->sector_id)
                                            {
                                                $sectorOverall = $sectorOverall + $e->average;
                                            }
                                        }

                                        foreach($mechanical AS $m)
                                        {
                                            if($s->id == $m->sector_id)
                                            {
                                                $sectorOverall = $sectorOverall + $m->average;
                                            }
                                        }

                                        foreach($electrical AS $e)
                                        {
                                            if($s->id == $e->sector_id)
                                            {
                                                $sectorOverall = $sectorOverall + $e->average;
                                            }
                                        }
                                        $sectorOverall = $sectorOverall/3;
                                    @endphp
                                    {{$sectorOverall}}
                                </td>
                                <td style="padding:3px; background-color:#838383"></td>
                                <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@foreach($internal AS $e) @if($s->id == $e->sector_id) {{$e->average}} @endif @endforeach</td>
                                <td style="padding:3px; background-color:#838383"></td>
                                <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@foreach($mechanical AS $m) @if($s->id == $m->sector_id) {{$m->average}} @endif @endforeach</td>
                                <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@foreach($electrical AS $e) @if($s->id == $e->sector_id) {{$e->average}} @endif @endforeach</td>
                                <td style="padding:3px; background-color:#838383"></td>
                            </tr>
                        @endforeach
                        <tr>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;" colspan="8" align="right">Average CR</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$assessment[0]->average}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <br>
                <h3>Building|Structural</h3>
                <br>
                <table style="width:100%; padding:7px" border="1">
                    <tbody>
                        <tr>
                            <td style="padding:7px;font-size:1.1vw; background-color:rgb(229, 229, 229, 0.5);" colspan="9"><center><strong>EXTERNAL ENVELOPE ASSESSMENT - Building/Structural</strong></center></td>
                        </tr>
                        <tr>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;" colspan="2"><center><strong>ITEM INFORMATION</strong></center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;" colspan="7"><center><strong>ASSESSMENT CRITERIA</strong></center></td>
                        </tr>
                        <tr>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw; width:5%"><center><strong>NO.</strong></center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw; width:20%"><center><strong>ITEM</strong></center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw; width:5%"><center><strong>CHECK</strong></center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>CR</strong></center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>CONDITION RATING (CR) DESCRIPTION</strong></center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>CC</strong></center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>CLASSIFICATION CODE (CC) DESCRIPTION</strong></center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>ADDITIONAL COMMENTS</strong></center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>PHOTO REFERENCE</strong></center></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">1</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Signage (wall mounted)</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building3[0]->signage != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->signage}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building3[0]->signage == 1) 
                                    Condemn 
                                @elseif($building3[0]->signage == 2)
                                    Major Repairs 
                                @elseif($building3[0]->signage == 3)  
                                    Minor Repairs 
                                @elseif($building3[0]->signage == 4)  
                                    Normal Maintenance 
                                @elseif($building3[0]->signage == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->c1}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building3[0]->c1 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building3[0]->c1 == 2)
                                    Non-functional 
                                @elseif($building3[0]->c1 == 3)  
                                    Replacement Required
                                @elseif($building3[0]->c1 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building3[0]->c1 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->a1}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">2</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Curbs</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building3[0]->curbs != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->curbs}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building3[0]->curbs == 1) 
                                    Condemn 
                                @elseif($building3[0]->curbs == 2)
                                    Major Repairs 
                                @elseif($building3[0]->curbs == 3)  
                                    Minor Repairs 
                                @elseif($building3[0]->curbs == 4)  
                                    Normal Maintenance 
                                @elseif($building3[0]->curbs == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->c2}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building3[0]->c2 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building3[0]->c2 == 2)
                                    Non-functional 
                                @elseif($building3[0]->c2 == 3)  
                                    Replacement Required
                                @elseif($building3[0]->c2 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building3[0]->c2 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->a2}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">3</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Fences (concrete slab)</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building3[0]->fences != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->fences}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building3[0]->fences == 1) 
                                    Condemn 
                                @elseif($building3[0]->fences == 2)
                                    Major Repairs 
                                @elseif($building3[0]->fences == 3)  
                                    Minor Repairs 
                                @elseif($building3[0]->fences == 4)  
                                    Normal Maintenance 
                                @elseif($building3[0]->fences == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->c3}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building3[0]->c3 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building3[0]->c3 == 2)
                                    Non-functional 
                                @elseif($building3[0]->c3 == 3)  
                                    Replacement Required
                                @elseif($building3[0]->c3 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building3[0]->c3 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->a3}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">4</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Security Gates</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building3[0]->security_gates != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->security_gates}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building3[0]->security_gates == 1) 
                                    Condemn 
                                @elseif($building3[0]->security_gates == 2)
                                    Major Repairs 
                                @elseif($building3[0]->security_gates == 3)  
                                    Minor Repairs 
                                @elseif($building3[0]->security_gates == 4)  
                                    Normal Maintenance 
                                @elseif($building3[0]->security_gates == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->c4}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building3[0]->c4 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building3[0]->c4 == 2)
                                    Non-functional 
                                @elseif($building3[0]->c4 == 3)  
                                    Replacement Required
                                @elseif($building3[0]->c4 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building3[0]->c4 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->a4}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">5</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Paving</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building3[0]->paving != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->paving}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building3[0]->paving == 1) 
                                    Condemn 
                                @elseif($building3[0]->paving == 2)
                                    Major Repairs 
                                @elseif($building3[0]->paving == 3)  
                                    Minor Repairs 
                                @elseif($building3[0]->paving == 4)  
                                    Normal Maintenance 
                                @elseif($building3[0]->paving == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->c5}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building3[0]->c5 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building3[0]->c5 == 2)
                                    Non-functional 
                                @elseif($building3[0]->c5 == 3)  
                                    Replacement Required
                                @elseif($building3[0]->c5 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building3[0]->c5 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->a5}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">6</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Parking Area</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building3[0]->parking_area != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->parking_area}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building3[0]->parking_area == 1) 
                                    Condemn 
                                @elseif($building3[0]->parking_area == 2)
                                    Major Repairs 
                                @elseif($building3[0]->parking_area == 3)  
                                    Minor Repairs 
                                @elseif($building3[0]->parking_area == 4)  
                                    Normal Maintenance 
                                @elseif($building3[0]->parking_area == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->c6}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building3[0]->c6 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building3[0]->c6 == 2)
                                    Non-functional 
                                @elseif($building3[0]->c6 == 3)  
                                    Replacement Required
                                @elseif($building3[0]->c6 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building3[0]->c6 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->a6}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">7</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Poles/Columns/Supports</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building3[0]->poles_columns_supports != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->poles_columns_supports}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building3[0]->poles_columns_supports == 1) 
                                    Condemn 
                                @elseif($building3[0]->poles_columns_supports == 2)
                                    Major Repairs 
                                @elseif($building3[0]->poles_columns_supports == 3)  
                                    Minor Repairs 
                                @elseif($building3[0]->poles_columns_supports == 4)  
                                    Normal Maintenance 
                                @elseif($building3[0]->poles_columns_supports == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->c7}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building3[0]->c7 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building3[0]->c7 == 2)
                                    Non-functional 
                                @elseif($building3[0]->c7 == 3)  
                                    Replacement Required
                                @elseif($building3[0]->c7 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building3[0]->c7 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->a7}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">8</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Pathways & Sidewalks</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building3[0]->pathways_sidewalks != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->pathways_sidewalks}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building3[0]->pathways_sidewalks == 1) 
                                    Condemn 
                                @elseif($building3[0]->pathways_sidewalks == 2)
                                    Major Repairs 
                                @elseif($building3[0]->pathways_sidewalks == 3)  
                                    Minor Repairs 
                                @elseif($building3[0]->pathways_sidewalks == 4)  
                                    Normal Maintenance 
                                @elseif($building3[0]->pathways_sidewalks == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->c8}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building3[0]->c8 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building3[0]->c8 == 2)
                                    Non-functional 
                                @elseif($building3[0]->c8 == 3)  
                                    Replacement Required
                                @elseif($building3[0]->c8 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building3[0]->c8 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->a8}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">9</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Surface Drainage</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building3[0]->surface_drainage != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->surface_drainage}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building3[0]->surface_drainage == 1) 
                                    Condemn 
                                @elseif($building3[0]->surface_drainage == 2)
                                    Major Repairs 
                                @elseif($building3[0]->surface_drainage == 3)  
                                    Minor Repairs 
                                @elseif($building3[0]->surface_drainage == 4)  
                                    Normal Maintenance 
                                @elseif($building3[0]->surface_drainage == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->c9}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building3[0]->c9 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building3[0]->c9 == 2)
                                    Non-functional 
                                @elseif($building3[0]->c9 == 3)  
                                    Replacement Required
                                @elseif($building3[0]->c9 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building3[0]->c9 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->a9}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">10</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Foundations</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building3[0]->foundation != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->foundation}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building3[0]->foundation == 1) 
                                    Condemn 
                                @elseif($building3[0]->foundation == 2)
                                    Major Repairs 
                                @elseif($building3[0]->foundation == 3)  
                                    Minor Repairs 
                                @elseif($building3[0]->foundation == 4)  
                                    Normal Maintenance 
                                @elseif($building3[0]->foundation == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->c10}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building3[0]->c10 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building3[0]->c10 == 2)
                                    Non-functional 
                                @elseif($building3[0]->c10 == 3)  
                                    Replacement Required
                                @elseif($building3[0]->c10 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building3[0]->c10 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->a10}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>                        
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">11</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Masonry (stone, brick)</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building3[0]->masonry != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->masonry}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building3[0]->masonry == 1) 
                                    Condemn 
                                @elseif($building3[0]->masonry == 2)
                                    Major Repairs 
                                @elseif($building3[0]->masonry == 3)  
                                    Minor Repairs 
                                @elseif($building3[0]->masonry == 4)  
                                    Normal Maintenance 
                                @elseif($building3[0]->masonry == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->c11}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building3[0]->c11 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building3[0]->c11 == 2)
                                    Non-functional 
                                @elseif($building3[0]->c11 == 3)  
                                    Replacement Required
                                @elseif($building3[0]->c11 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building3[0]->c11 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->a11}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">12</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Exterior Slab</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building3[0]->exterior_slab != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->exterior_slab}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building3[0]->exterior_slab == 1) 
                                    Condemn 
                                @elseif($building3[0]->exterior_slab == 2)
                                    Major Repairs 
                                @elseif($building3[0]->exterior_slab == 3)  
                                    Minor Repairs 
                                @elseif($building3[0]->exterior_slab == 4)  
                                    Normal Maintenance 
                                @elseif($building3[0]->exterior_slab == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->c12}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building3[0]->c12 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building3[0]->c12 == 2)
                                    Non-functional 
                                @elseif($building3[0]->c12 == 3)  
                                    Replacement Required
                                @elseif($building3[0]->c12 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building3[0]->c12 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->a12}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">13</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Exterior Walls</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building3[0]->exterior_walls != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->exterior_walls}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building3[0]->exterior_walls == 1) 
                                    Condemn 
                                @elseif($building3[0]->exterior_walls == 2)
                                    Major Repairs 
                                @elseif($building3[0]->exterior_walls == 3)  
                                    Minor Repairs 
                                @elseif($building3[0]->exterior_walls == 4)  
                                    Normal Maintenance 
                                @elseif($building3[0]->exterior_walls == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->c13}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building3[0]->c13 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building3[0]->c13 == 2)
                                    Non-functional 
                                @elseif($building3[0]->c13 == 3)  
                                    Replacement Required
                                @elseif($building3[0]->c13 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building3[0]->c13 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->a13}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">14</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Exterior Paint</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building3[0]->exterior_paint != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->exterior_paint}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building3[0]->exterior_paint == 1) 
                                    Condemn 
                                @elseif($building3[0]->exterior_paint == 2)
                                    Major Repairs 
                                @elseif($building3[0]->exterior_paint == 3)  
                                    Minor Repairs 
                                @elseif($building3[0]->exterior_paint == 4)  
                                    Normal Maintenance 
                                @elseif($building3[0]->exterior_paint == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->c14}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building3[0]->c14 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building3[0]->c14 == 2)
                                    Non-functional 
                                @elseif($building3[0]->c14 == 3)  
                                    Replacement Required
                                @elseif($building3[0]->c14 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building3[0]->c14 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->a14}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">15</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Roof</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building3[0]->roof != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->roof}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building3[0]->roof == 1) 
                                    Condemn 
                                @elseif($building3[0]->roof == 2)
                                    Major Repairs 
                                @elseif($building3[0]->roof == 3)  
                                    Minor Repairs 
                                @elseif($building3[0]->roof == 4)  
                                    Normal Maintenance 
                                @elseif($building3[0]->roof == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->c15}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building3[0]->c15 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building3[0]->c15 == 2)
                                    Non-functional 
                                @elseif($building3[0]->c15 == 3)  
                                    Replacement Required
                                @elseif($building3[0]->c15 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building3[0]->c15 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->a15}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">16</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Roof Drainage</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building3[0]->roof_drainage != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->roof_drainage}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building3[0]->door_frame == 1) 
                                    Condemn 
                                @elseif($building3[0]->door_frame == 2)
                                    Major Repairs 
                                @elseif($building3[0]->door_frame == 3)  
                                    Minor Repairs 
                                @elseif($building3[0]->door_frame == 4)  
                                    Normal Maintenance 
                                @elseif($building3[0]->door_frame == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->c16}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building3[0]->c16 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building3[0]->c16 == 2)
                                    Non-functional 
                                @elseif($building3[0]->c16 == 3)  
                                    Replacement Required
                                @elseif($building3[0]->c16 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building3[0]->c16 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->a16}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">17</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Stairs/Steps</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building3[0]->stairs_steps != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->stairs_steps}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building3[0]->stairs_steps == 1) 
                                    Condemn 
                                @elseif($building3[0]->stairs_steps == 2)
                                    Major Repairs 
                                @elseif($building3[0]->stairs_steps == 3)  
                                    Minor Repairs 
                                @elseif($building3[0]->stairs_steps == 4)  
                                    Normal Maintenance 
                                @elseif($building3[0]->stairs_steps == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->c17}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building3[0]->c17 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building3[0]->c17 == 2)
                                    Non-functional 
                                @elseif($building3[0]->c17 == 3)  
                                    Replacement Required
                                @elseif($building3[0]->c17 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building3[0]->c17 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->a17}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">18</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Door Hardware</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building3[0]->door_hardware != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->door_hardware}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building3[0]->door_hardware == 1) 
                                    Condemn 
                                @elseif($building3[0]->door_hardware == 2)
                                    Major Repairs 
                                @elseif($building3[0]->door_hardware == 3)  
                                    Minor Repairs 
                                @elseif($building3[0]->door_hardware == 4)  
                                    Normal Maintenance 
                                @elseif($building3[0]->door_hardware == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->c18}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building3[0]->c18 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building3[0]->c18 == 2)
                                    Non-functional 
                                @elseif($building3[0]->c18 == 3)  
                                    Replacement Required
                                @elseif($building3[0]->c18 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building3[0]->c18 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->a18}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">19</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Door Frame</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building3[0]->door_frame != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->door_frame}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building3[0]->door_frame == 1) 
                                    Condemn 
                                @elseif($building3[0]->door_frame == 2)
                                    Major Repairs 
                                @elseif($building3[0]->door_frame == 3)  
                                    Minor Repairs 
                                @elseif($building3[0]->door_frame == 4)  
                                    Normal Maintenance 
                                @elseif($building3[0]->door_frame == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->c19}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building3[0]->c19 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building3[0]->c19 == 2)
                                    Non-functional 
                                @elseif($building3[0]->c19 == 3)  
                                    Replacement Required
                                @elseif($building3[0]->c19 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building3[0]->c19 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->a19}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">20</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Doors</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building3[0]->doors != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->doors}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building3[0]->doors == 1) 
                                    Condemn 
                                @elseif($building3[0]->doors == 2)
                                    Major Repairs 
                                @elseif($building3[0]->doors == 3)  
                                    Minor Repairs 
                                @elseif($building3[0]->doors == 4)  
                                    Normal Maintenance 
                                @elseif($building3[0]->doors == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->c20}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building3[0]->c20 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building3[0]->c20 == 2)
                                    Non-functional 
                                @elseif($building3[0]->c20 == 3)  
                                    Replacement Required
                                @elseif($building3[0]->c20 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building3[0]->c20 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->a20}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">21</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Lights</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building3[0]->lights != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->lights}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building3[0]->lights == 1) 
                                    Condemn 
                                @elseif($building3[0]->lights == 2)
                                    Major Repairs 
                                @elseif($building3[0]->lights == 3)  
                                    Minor Repairs 
                                @elseif($building3[0]->lights == 4)  
                                    Normal Maintenance 
                                @elseif($building3[0]->lights == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->c21}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building3[0]->c21 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building3[0]->c21 == 2)
                                    Non-functional 
                                @elseif($building3[0]->c21 == 3)  
                                    Replacement Required
                                @elseif($building3[0]->c21 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building3[0]->c21 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building3[0]->a21}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:7px;font-size:1.1vw; background-color:#E29F3C;" colspan="8"><strong style="float:right">Average Condition Rating (CR)</strong></td>
                            <td style="padding:7px;font-size:1.1vw;">{{ROUND($building3[0]->average)}}</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table style="width:100%; padding:7px" border="1">
                    <tbody>
                        <tr>
                            <td style="padding:7px;font-size:1.1vw; background-color:rgb(229, 229, 229, 0.5);" colspan="9"><center><strong>CIVILS ASSESSMENT - Building/Structural</strong></center></td>
                        </tr>
                        <tr>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;" colspan="2"><center><strong>ITEM INFORMATION</strong></center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;" colspan="7"><center><strong>ASSESSMENT CRITERIA</strong></center></td>
                        </tr>
                        <tr>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw; width:5%"><center><strong>NO.</strong></center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw; width:20%"><center><strong>ITEM</strong></center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw; width:5%"><center><strong>CHECK</strong></center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>CR</strong></center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>CONDITION RATING (CR) DESCRIPTION</strong></center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>CC</strong></center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>CLASSIFICATION CODE (CC) DESCRIPTION</strong></center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>ADDITIONAL COMMENTS</strong></center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>PHOTO REFERENCE</strong></center></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">1</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Water Reticulation</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building1[0]->water_reticulation != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building1[0]->water_reticulation}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building1[0]->water_reticulation == 1) 
                                    Condemn 
                                @elseif($building1[0]->water_reticulation == 2)
                                    Major Repairs 
                                @elseif($building1[0]->water_reticulation == 3)  
                                    Minor Repairs 
                                @elseif($building1[0]->water_reticulation == 4)  
                                    Normal Maintenance 
                                @elseif($building1[0]->water_reticulation == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building1[0]->c1}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building1[0]->c1 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building1[0]->c1 == 2)
                                    Non-functional 
                                @elseif($building1[0]->c1 == 3)  
                                    Replacement Required
                                @elseif($building1[0]->c1 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building1[0]->c1 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building1[0]->a1}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">2</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Sewerage Reticulation</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building1[0]->sewerage_reticulation != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building1[0]->sewerage_reticulation}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building1[0]->sewerage_reticulation == 1) 
                                    Condemn 
                                @elseif($building1[0]->sewerage_reticulation == 2)
                                    Major Repairs 
                                @elseif($building1[0]->sewerage_reticulation == 3)  
                                    Minor Repairs 
                                @elseif($building1[0]->sewerage_reticulation == 4)  
                                    Normal Maintenance 
                                @elseif($building1[0]->sewerage_reticulation == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building1[0]->c2}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building1[0]->c2 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building1[0]->c2 == 2)
                                    Non-functional 
                                @elseif($building1[0]->c2 == 3)  
                                    Replacement Required
                                @elseif($building1[0]->c2 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building1[0]->c2 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building1[0]->a2}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">3</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Boundary & Retaining Walls</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building1[0]->boundary_retaining_walls != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building1[0]->boundary_retaining_walls}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building1[0]->boundary_retaining_walls == 1) 
                                    Condemn 
                                @elseif($building1[0]->boundary_retaining_walls == 2)
                                    Major Repairs 
                                @elseif($building1[0]->boundary_retaining_walls == 3)  
                                    Minor Repairs 
                                @elseif($building1[0]->boundary_retaining_walls == 4)  
                                    Normal Maintenance 
                                @elseif($building1[0]->boundary_retaining_walls == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building1[0]->c3}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building1[0]->c3 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building1[0]->c3 == 2)
                                    Non-functional 
                                @elseif($building1[0]->c3 == 3)  
                                    Replacement Required
                                @elseif($building1[0]->c3 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building1[0]->c3 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building1[0]->a3}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">4</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Gully's</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building1[0]->gullys != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building1[0]->gullys}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building1[0]->gullys == 1) 
                                    Condemn 
                                @elseif($building1[0]->gullys == 2)
                                    Major Repairs 
                                @elseif($building1[0]->gullys == 3)  
                                    Minor Repairs 
                                @elseif($building1[0]->gullys == 4)  
                                    Normal Maintenance 
                                @elseif($building1[0]->gullys == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building1[0]->c4}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building1[0]->c4 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building1[0]->c4 == 2)
                                    Non-functional 
                                @elseif($building1[0]->c4 == 3)  
                                    Replacement Required
                                @elseif($building1[0]->c4 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building1[0]->c4 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building1[0]->a4}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">5</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Roads & Driveways</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building1[0]->roads_driveways != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building1[0]->roads_driveways}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building1[0]->roads_driveways == 1) 
                                    Condemn 
                                @elseif($building1[0]->roads_driveways == 2)
                                    Major Repairs 
                                @elseif($building1[0]->roads_driveways == 3)  
                                    Minor Repairs 
                                @elseif($building1[0]->roads_driveways == 4)  
                                    Normal Maintenance 
                                @elseif($building1[0]->roads_driveways == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building1[0]->c5}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building1[0]->c5 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building1[0]->c5 == 2)
                                    Non-functional 
                                @elseif($building1[0]->c5 == 3)  
                                    Replacement Required
                                @elseif($building1[0]->c5 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building1[0]->c5 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building1[0]->a5}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">6</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Garages & Carports</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building1[0]->garages_carports != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building1[0]->garages_carports}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building1[0]->garages_carports == 1) 
                                    Condemn 
                                @elseif($building1[0]->garages_carports == 2)
                                    Major Repairs 
                                @elseif($building1[0]->garages_carports == 3)  
                                    Minor Repairs 
                                @elseif($building1[0]->garages_carports == 4)  
                                    Normal Maintenance 
                                @elseif($building1[0]->garages_carports == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building1[0]->c6}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building1[0]->c6 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building1[0]->c6 == 2)
                                    Non-functional 
                                @elseif($building1[0]->c6 == 3)  
                                    Replacement Required
                                @elseif($building1[0]->c6 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building1[0]->c6 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building1[0]->a6}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">7</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Manholes/Stormwater</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building1[0]->manholes_stormwater != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building1[0]->manholes_stormwater}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building1[0]->manholes_stormwater == 1) 
                                    Condemn 
                                @elseif($building1[0]->manholes_stormwater == 2)
                                    Major Repairs 
                                @elseif($building1[0]->manholes_stormwater == 3)  
                                    Minor Repairs 
                                @elseif($building1[0]->manholes_stormwater == 4)  
                                    Normal Maintenance 
                                @elseif($building1[0]->manholes_stormwater == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building1[0]->c7}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building1[0]->c7 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building1[0]->c7 == 2)
                                    Non-functional 
                                @elseif($building1[0]->c7 == 3)  
                                    Replacement Required
                                @elseif($building1[0]->c7 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building1[0]->c7 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building1[0]->a7}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">8</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Fire Hydrant Connection</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building1[0]->fire_hydrant_connection != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building1[0]->fire_hydrant_connection}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building1[0]->fire_hydrant_connection == 1) 
                                    Condemn 
                                @elseif($building1[0]->fire_hydrant_connection == 2)
                                    Major Repairs 
                                @elseif($building1[0]->fire_hydrant_connection == 3)  
                                    Minor Repairs 
                                @elseif($building1[0]->fire_hydrant_connection == 4)  
                                    Normal Maintenance 
                                @elseif($building1[0]->fire_hydrant_connection == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building1[0]->c8}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building1[0]->c8 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building1[0]->c8 == 2)
                                    Non-functional 
                                @elseif($building1[0]->c8 == 3)  
                                    Replacement Required
                                @elseif($building1[0]->c8 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building1[0]->c8 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building1[0]->a8}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">9</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Signage (free standing)</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building1[0]->signage != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building1[0]->signage}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building1[0]->signage == 1) 
                                    Condemn 
                                @elseif($building1[0]->signage == 2)
                                    Major Repairs 
                                @elseif($building1[0]->signage == 3)  
                                    Minor Repairs 
                                @elseif($building1[0]->signage == 4)  
                                    Normal Maintenance 
                                @elseif($building1[0]->signage == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building1[0]->c9}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building1[0]->c9 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building1[0]->c9 == 2)
                                    Non-functional 
                                @elseif($building1[0]->c9 == 3)  
                                    Replacement Required
                                @elseif($building1[0]->c9 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building1[0]->c9 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building1[0]->a9}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">10</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Ramps & Railings</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building1[0]->ramps_railings != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building1[0]->ramps_railings}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building1[0]->ramps_railings == 1) 
                                    Condemn 
                                @elseif($building1[0]->ramps_railings == 2)
                                    Major Repairs 
                                @elseif($building1[0]->ramps_railings == 3)  
                                    Minor Repairs 
                                @elseif($building1[0]->ramps_railings == 4)  
                                    Normal Maintenance 
                                @elseif($building1[0]->ramps_railings == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building1[0]->c10}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building1[0]->c10 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building1[0]->c10 == 2)
                                    Non-functional 
                                @elseif($building1[0]->c10 == 3)  
                                    Replacement Required
                                @elseif($building1[0]->c10 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building1[0]->c10 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building1[0]->a10}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:7px;font-size:1.1vw; background-color:#E29F3C;" colspan="8"><strong style="float:right">Average Condition Rating (CR)</strong></td>
                            <td style="padding:7px;font-size:1.1vw;">{{ROUND($building1[0]->average)}}</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table style="width:100%; padding:7px" border="1">
                    <tbody>
                        <tr>
                            <td style="padding:7px;font-size:1.1vw; background-color:rgb(229, 229, 229, 0.5);" colspan="9"><center><strong>MECHANICAL ASSESSMENT - Building/Structural</strong></center></td>
                        </tr>
                        <tr>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;" colspan="2"><center><strong>ITEM INFORMATION</strong></center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;" colspan="7"><center><strong>ASSESSMENT CRITERIA</strong></center></td>
                        </tr>
                        <tr>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw; width:5%"><center><strong>NO.</strong></center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw; width:20%"><center><strong>ITEM</strong></center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw; width:5%"><center><strong>CHECK</strong></center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>CR</strong></center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>CONDITION RATING (CR) DESCRIPTION</strong></center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>CC</strong></center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>CLASSIFICATION CODE (CC) DESCRIPTION</strong></center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>ADDITIONAL COMMENTS</strong></center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>PHOTO REFERENCE</strong></center></td>
                        </tr>                        
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">1</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Faucets</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building4[0]->faucets != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building4[0]->faucets}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building4[0]->faucets == 1) 
                                    Condemn 
                                @elseif($building4[0]->faucets == 2)
                                    Major Repairs 
                                @elseif($building4[0]->faucets == 3)  
                                    Minor Repairs 
                                @elseif($building4[0]->faucets == 4)  
                                    Normal Maintenance 
                                @elseif($building4[0]->faucets == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building4[0]->c1}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building4[0]->c1 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building4[0]->c1 == 2)
                                    Non-functional 
                                @elseif($building4[0]->c1 == 3)  
                                    Replacement Required
                                @elseif($building4[0]->c1 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building4[0]->c1 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building4[0]->a1}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">2</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Sinks</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building4[0]->sinks != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building4[0]->sinks}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building4[0]->sinks == 1) 
                                    Condemn 
                                @elseif($building4[0]->sinks == 2)
                                    Major Repairs 
                                @elseif($building4[0]->sinks == 3)  
                                    Minor Repairs 
                                @elseif($building4[0]->sinks == 4)  
                                    Normal Maintenance 
                                @elseif($building4[0]->sinks == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building4[0]->c2}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building4[0]->c2 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building4[0]->c2 == 2)
                                    Non-functional 
                                @elseif($building4[0]->c2 == 3)  
                                    Replacement Required
                                @elseif($building4[0]->c2 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building4[0]->c2 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building4[0]->a2}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">3</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Fixtures (note type)</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building4[0]->fixtures != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building4[0]->fixtures}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building4[0]->fixtures == 1) 
                                    Condemn 
                                @elseif($building4[0]->fixtures == 2)
                                    Major Repairs 
                                @elseif($building4[0]->fixtures == 3)  
                                    Minor Repairs 
                                @elseif($building4[0]->fixtures == 4)  
                                    Normal Maintenance 
                                @elseif($building4[0]->fixtures == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building4[0]->c3}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building4[0]->c3 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building4[0]->c3 == 2)
                                    Non-functional 
                                @elseif($building4[0]->c3 == 3)  
                                    Replacement Required
                                @elseif($building4[0]->c3 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building4[0]->c3 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building4[0]->a3}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">4</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Toilets</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building4[0]->toilets != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building4[0]->toilets}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building4[0]->toilets == 1) 
                                    Condemn 
                                @elseif($building4[0]->toilets == 2)
                                    Major Repairs 
                                @elseif($building4[0]->toilets == 3)  
                                    Minor Repairs 
                                @elseif($building4[0]->toilets == 4)  
                                    Normal Maintenance 
                                @elseif($building4[0]->toilets == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building4[0]->c5}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building4[0]->c5 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building4[0]->c5 == 2)
                                    Non-functional 
                                @elseif($building4[0]->c5 == 3)  
                                    Replacement Required
                                @elseif($building4[0]->c5 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building4[0]->c5 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building4[0]->a5}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">5</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Hangers</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building4[0]->hangers != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building4[0]->hangers}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building4[0]->hangers == 1) 
                                    Condemn 
                                @elseif($building4[0]->hangers == 2)
                                    Major Repairs 
                                @elseif($building4[0]->hangers == 3)  
                                    Minor Repairs 
                                @elseif($building4[0]->hangers == 4)  
                                    Normal Maintenance 
                                @elseif($building4[0]->hangers == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building4[0]->c5}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building4[0]->c5 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building4[0]->c5 == 2)
                                    Non-functional 
                                @elseif($building4[0]->c5 == 3)  
                                    Replacement Required
                                @elseif($building4[0]->c5 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building4[0]->c5 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building4[0]->a5}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">6</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Composting Units</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building4[0]->composting_units != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building4[0]->composting_units}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building4[0]->composting_units == 1) 
                                    Condemn 
                                @elseif($building4[0]->composting_units == 2)
                                    Major Repairs 
                                @elseif($building4[0]->composting_units == 3)  
                                    Minor Repairs 
                                @elseif($building4[0]->composting_units == 4)  
                                    Normal Maintenance 
                                @elseif($building4[0]->composting_units == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building4[0]->c6}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building4[0]->c6 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building4[0]->c6 == 2)
                                    Non-functional 
                                @elseif($building4[0]->c6 == 3)  
                                    Replacement Required
                                @elseif($building4[0]->c6 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building4[0]->c6 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building4[0]->a6}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">7</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Vaults (cracks, leaks, capacity & material)</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building4[0]->vaults != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building4[0]->vaults}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building4[0]->vaults == 1) 
                                    Condemn 
                                @elseif($building4[0]->vaults == 2)
                                    Major Repairs 
                                @elseif($building4[0]->vaults == 3)  
                                    Minor Repairs 
                                @elseif($building4[0]->vaults == 4)  
                                    Normal Maintenance 
                                @elseif($building4[0]->vaults == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building4[0]->c7}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building4[0]->c7 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building4[0]->c7 == 2)
                                    Non-functional 
                                @elseif($building4[0]->c7 == 3)  
                                    Replacement Required
                                @elseif($building4[0]->c7 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building4[0]->c7 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building4[0]->a7}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">8</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Heating, Ventilation & Air Conditioning</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building4[0]->heating_ventilation_air_conditioning != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building4[0]->heating_ventilation_air_conditioning}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building4[0]->heating_ventilation_air_conditioning == 1) 
                                    Condemn 
                                @elseif($building4[0]->heating_ventilation_air_conditioning == 2)
                                    Major Repairs 
                                @elseif($building4[0]->heating_ventilation_air_conditioning == 3)  
                                    Minor Repairs 
                                @elseif($building4[0]->heating_ventilation_air_conditioning == 4)  
                                    Normal Maintenance 
                                @elseif($building4[0]->heating_ventilation_air_conditioning == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building4[0]->c8}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building4[0]->c8 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building4[0]->c8 == 2)
                                    Non-functional 
                                @elseif($building4[0]->c8 == 3)  
                                    Replacement Required
                                @elseif($building4[0]->c8 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building4[0]->c8 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building4[0]->a8}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">9</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Fire Fighting/Detection Equipment & Fixtures</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building4[0]->fire_fighting_detection != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building4[0]->fire_fighting_detection}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building4[0]->fire_fighting_detection == 1) 
                                    Condemn 
                                @elseif($building4[0]->fire_fighting_detection == 2)
                                    Major Repairs 
                                @elseif($building4[0]->fire_fighting_detection == 3)  
                                    Minor Repairs 
                                @elseif($building4[0]->fire_fighting_detection == 4)  
                                    Normal Maintenance 
                                @elseif($building4[0]->fire_fighting_detection == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building4[0]->c9}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building4[0]->c9 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building4[0]->c9 == 2)
                                    Non-functional 
                                @elseif($building4[0]->c9 == 3)  
                                    Replacement Required
                                @elseif($building4[0]->c9 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building4[0]->c9 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building4[0]->a9}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">10</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Access Control</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building4[0]->access_control != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building4[0]->access_control}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building4[0]->access_control == 1) 
                                    Condemn 
                                @elseif($building4[0]->access_control == 2)
                                    Major Repairs 
                                @elseif($building4[0]->access_control == 3)  
                                    Minor Repairs 
                                @elseif($building4[0]->access_control == 4)  
                                    Normal Maintenance 
                                @elseif($building4[0]->access_control == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building4[0]->c10}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building4[0]->c10 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building4[0]->c10 == 2)
                                    Non-functional 
                                @elseif($building4[0]->c10 == 3)  
                                    Replacement Required
                                @elseif($building4[0]->c10 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building4[0]->c10 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building4[0]->a10}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">11</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Pressure Vessels (boilers, geysers etc.)</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building4[0]->pressure_vessels != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building4[0]->pressure_vessels}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building4[0]->pressure_vessels == 1) 
                                    Condemn 
                                @elseif($building4[0]->pressure_vessels == 2)
                                    Major Repairs 
                                @elseif($building4[0]->pressure_vessels == 3)  
                                    Minor Repairs 
                                @elseif($building4[0]->pressure_vessels == 4)  
                                    Normal Maintenance 
                                @elseif($building4[0]->pressure_vessels == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building4[0]->c11}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building4[0]->c11 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building4[0]->c11 == 2)
                                    Non-functional 
                                @elseif($building4[0]->c11 == 3)  
                                    Replacement Required
                                @elseif($building4[0]->c11 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building4[0]->c11 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building4[0]->a11}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">12</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Incinerators</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building4[0]->incinerators != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building4[0]->incinerators}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building4[0]->incinerators == 1) 
                                    Condemn 
                                @elseif($building4[0]->incinerators == 2)
                                    Major Repairs 
                                @elseif($building4[0]->incinerators == 3)  
                                    Minor Repairs 
                                @elseif($building4[0]->incinerators == 4)  
                                    Normal Maintenance 
                                @elseif($building4[0]->incinerators == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building4[0]->c12}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building4[0]->c12 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building4[0]->c12 == 2)
                                    Non-functional 
                                @elseif($building4[0]->c12 == 3)  
                                    Replacement Required
                                @elseif($building4[0]->c12 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building4[0]->c12 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building4[0]->a12}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">13</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Water Tanks</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building4[0]->water_tanks != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building4[0]->water_tanks}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building4[0]->water_tanks == 1) 
                                    Condemn 
                                @elseif($building4[0]->water_tanks == 2)
                                    Major Repairs 
                                @elseif($building4[0]->water_tanks == 3)  
                                    Minor Repairs 
                                @elseif($building4[0]->water_tanks == 4)  
                                    Normal Maintenance 
                                @elseif($building4[0]->water_tanks == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building4[0]->c13}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building4[0]->c13 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building4[0]->c13 == 2)
                                    Non-functional 
                                @elseif($building4[0]->c13 == 3)  
                                    Replacement Required
                                @elseif($building4[0]->c13 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building4[0]->c13 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building4[0]->a13}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">14</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Pumps</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building4[0]->pumps != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building4[0]->pumps}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building4[0]->pumps == 1) 
                                    Condemn 
                                @elseif($building4[0]->pumps == 2)
                                    Major Repairs 
                                @elseif($building4[0]->pumps == 3)  
                                    Minor Repairs 
                                @elseif($building4[0]->pumps == 4)  
                                    Normal Maintenance 
                                @elseif($building4[0]->pumps == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building4[0]->c14}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building4[0]->c14 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building4[0]->c14 == 2)
                                    Non-functional 
                                @elseif($building4[0]->c14 == 3)  
                                    Replacement Required
                                @elseif($building4[0]->c14 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building4[0]->c14 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building4[0]->a14}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:7px;font-size:1.1vw; background-color:#E29F3C;" colspan="8"><strong style="float:right">Average Condition Rating (CR)</strong></td>
                            <td style="padding:7px;font-size:1.1vw;">{{ROUND($building4[0]->average)}}</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table style="width:100%; padding:7px" border="1">
                    <tbody>
                        <tr>
                            <td style="padding:7px;font-size:1.1vw; background-color:rgb(229, 229, 229, 0.5);" colspan="9"><center><strong>ELECTRICAL ASSESSMENT - Building/Structural</strong></center></td>
                        </tr>
                        <tr>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;" colspan="2"><center><strong>ITEM INFORMATION</strong></center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;" colspan="7"><center><strong>ASSESSMENT CRITERIA</strong></center></td>
                        </tr>
                        <tr>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw; width:5%"><center><strong>NO.</strong></center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw; width:20%"><center><strong>ITEM</strong></center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw; width:5%"><center><strong>CHECK</strong></center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>CR</strong></center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>CONDITION RATING (CR) DESCRIPTION</strong></center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>CC</strong></center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>CLASSIFICATION CODE (CC) DESCRIPTION</strong></center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>ADDITIONAL COMMENTS</strong></center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>PHOTO REFERENCE</strong></center></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">1</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Electrical Service</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building2[0]->electrical_service != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building2[0]->electrical_service}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building2[0]->electrical_service == 1) 
                                    Condemn 
                                @elseif($building2[0]->electrical_service == 2)
                                    Major Repairs 
                                @elseif($building2[0]->electrical_service == 3)  
                                    Minor Repairs 
                                @elseif($building2[0]->electrical_service == 4)  
                                    Normal Maintenance 
                                @elseif($building2[0]->electrical_service == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building2[0]->c1}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building2[0]->c1 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building2[0]->c1 == 2)
                                    Non-functional 
                                @elseif($building2[0]->c1 == 3)  
                                    Replacement Required
                                @elseif($building2[0]->c1 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building2[0]->c1 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building2[0]->a1}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">2</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Fixtures (note type)</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building2[0]->fixture != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building2[0]->fixture}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building2[0]->fixture == 1) 
                                    Condemn 
                                @elseif($building2[0]->fixture == 2)
                                    Major Repairs 
                                @elseif($building2[0]->fixture == 3)  
                                    Minor Repairs 
                                @elseif($building2[0]->fixture == 4)  
                                    Normal Maintenance 
                                @elseif($building2[0]->fixture == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building2[0]->c2}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building2[0]->c2 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building2[0]->c2 == 2)
                                    Non-functional 
                                @elseif($building2[0]->c2 == 3)  
                                    Replacement Required
                                @elseif($building2[0]->c2 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building2[0]->c2 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building2[0]->a2}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">3</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Lights</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building2[0]->lights != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building2[0]->lights}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building2[0]->lights == 1) 
                                    Condemn 
                                @elseif($building2[0]->lights == 2)
                                    Major Repairs 
                                @elseif($building2[0]->lights == 3)  
                                    Minor Repairs 
                                @elseif($building2[0]->lights == 4)  
                                    Normal Maintenance 
                                @elseif($building2[0]->lights == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building2[0]->c3}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building2[0]->c3 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building2[0]->c3 == 2)
                                    Non-functional 
                                @elseif($building2[0]->c3 == 3)  
                                    Replacement Required
                                @elseif($building2[0]->c3 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building2[0]->c3 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building2[0]->a3}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">4</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Solar Panels</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building2[0]->solar_panels != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building2[0]->solar_panels}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building2[0]->solar_panels == 1) 
                                    Condemn 
                                @elseif($building2[0]->solar_panels == 2)
                                    Major Repairs 
                                @elseif($building2[0]->solar_panels == 3)  
                                    Minor Repairs 
                                @elseif($building2[0]->solar_panels == 4)  
                                    Normal Maintenance 
                                @elseif($building2[0]->solar_panels == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building2[0]->c4}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building2[0]->c4 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building2[0]->c4 == 2)
                                    Non-functional 
                                @elseif($building2[0]->c4 == 3)  
                                    Replacement Required
                                @elseif($building2[0]->c4 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building2[0]->c4 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building2[0]->a4}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">5</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Batteries/Backup Power</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building2[0]->batteries != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building2[0]->batteries}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building2[0]->batteries == 1) 
                                    Condemn 
                                @elseif($building2[0]->batteries == 2)
                                    Major Repairs 
                                @elseif($building2[0]->batteries == 3)  
                                    Minor Repairs 
                                @elseif($building2[0]->batteries == 4)  
                                    Normal Maintenance 
                                @elseif($building2[0]->batteries == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building2[0]->c5}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building2[0]->c5 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building2[0]->c5 == 2)
                                    Non-functional 
                                @elseif($building2[0]->c5 == 3)  
                                    Replacement Required
                                @elseif($building2[0]->c5 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building2[0]->c5 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building2[0]->a5}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">6</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Switches</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building2[0]->switches != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building2[0]->switches}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building2[0]->switches == 1) 
                                    Condemn 
                                @elseif($building2[0]->switches == 2)
                                    Major Repairs 
                                @elseif($building2[0]->switches == 3)  
                                    Minor Repairs 
                                @elseif($building2[0]->switches == 4)  
                                    Normal Maintenance 
                                @elseif($building2[0]->switches == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building2[0]->c6}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building2[0]->c6 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building2[0]->c6 == 2)
                                    Non-functional 
                                @elseif($building2[0]->c6 == 3)  
                                    Replacement Required
                                @elseif($building2[0]->c6 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building2[0]->c6 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building2[0]->a6}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">7</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Sensors</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building2[0]->sensors != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building2[0]->sensors}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building2[0]->sensors == 1) 
                                    Condemn 
                                @elseif($building2[0]->sensors == 2)
                                    Major Repairs 
                                @elseif($building2[0]->sensors == 3)  
                                    Minor Repairs 
                                @elseif($building2[0]->sensors == 4)  
                                    Normal Maintenance 
                                @elseif($building2[0]->sensors == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building2[0]->c7}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building2[0]->c7 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building2[0]->c7 == 2)
                                    Non-functional 
                                @elseif($building2[0]->c7 == 3)  
                                    Replacement Required
                                @elseif($building2[0]->c7 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building2[0]->c7 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building2[0]->a7}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">8</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Distribution Board</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building2[0]->distribution_board != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building2[0]->distribution_board}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building2[0]->distribution_board == 1) 
                                    Condemn 
                                @elseif($building2[0]->distribution_board == 2)
                                    Major Repairs 
                                @elseif($building2[0]->distribution_board == 3)  
                                    Minor Repairs 
                                @elseif($building2[0]->distribution_board == 4)  
                                    Normal Maintenance 
                                @elseif($building2[0]->distribution_board == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building2[0]->c8}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building2[0]->c8 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building2[0]->c8 == 2)
                                    Non-functional 
                                @elseif($building2[0]->c8 == 3)  
                                    Replacement Required
                                @elseif($building2[0]->c8 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building2[0]->c8 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building2[0]->a8}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">9</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Grounding</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building2[0]->grounding != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building2[0]->grounding}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building2[0]->grounding == 1) 
                                    Condemn 
                                @elseif($building2[0]->grounding == 2)
                                    Major Repairs 
                                @elseif($building2[0]->grounding == 3)  
                                    Minor Repairs 
                                @elseif($building2[0]->grounding == 4)  
                                    Normal Maintenance 
                                @elseif($building2[0]->grounding == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building2[0]->c9}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building2[0]->c9 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building2[0]->c9 == 2)
                                    Non-functional 
                                @elseif($building2[0]->c9 == 3)  
                                    Replacement Required
                                @elseif($building2[0]->c9 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building2[0]->c9 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building2[0]->a9}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">10</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Wiring</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building2[0]->wiring != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building2[0]->wiring}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building2[0]->wiring == 1) 
                                    Condemn 
                                @elseif($building2[0]->wiring == 2)
                                    Major Repairs 
                                @elseif($building2[0]->wiring == 3)  
                                    Minor Repairs 
                                @elseif($building2[0]->wiring == 4)  
                                    Normal Maintenance 
                                @elseif($building2[0]->wiring == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building2[0]->c10}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building2[0]->c10 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building2[0]->c10 == 2)
                                    Non-functional 
                                @elseif($building2[0]->c10 == 3)  
                                    Replacement Required
                                @elseif($building2[0]->c10 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building2[0]->c10 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building2[0]->a10}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">11</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Plug Points</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building2[0]->plug_points != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building2[0]->plug_points}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building2[0]->plug_points == 1) 
                                    Condemn 
                                @elseif($building2[0]->plug_points == 2)
                                    Major Repairs 
                                @elseif($building2[0]->plug_points == 3)  
                                    Minor Repairs 
                                @elseif($building2[0]->plug_points == 4)  
                                    Normal Maintenance 
                                @elseif($building2[0]->plug_points == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building2[0]->c11}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building2[0]->c11 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building2[0]->c11 == 2)
                                    Non-functional 
                                @elseif($building2[0]->c11 == 3)  
                                    Replacement Required
                                @elseif($building2[0]->c11 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building2[0]->c11 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building2[0]->a11}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">12</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Electric Fencing</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building2[0]->electric_fencing != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building2[0]->electric_fencing}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building2[0]->electric_fencing == 1) 
                                    Condemn 
                                @elseif($building2[0]->electric_fencing == 2)
                                    Major Repairs 
                                @elseif($building2[0]->electric_fencing == 3)  
                                    Minor Repairs 
                                @elseif($building2[0]->electric_fencing == 4)  
                                    Normal Maintenance 
                                @elseif($building2[0]->electric_fencing == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building2[0]->c12}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building2[0]->c12 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building2[0]->c12 == 2)
                                    Non-functional 
                                @elseif($building2[0]->c12 == 3)  
                                    Replacement Required
                                @elseif($building2[0]->c12 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building2[0]->c12 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building2[0]->a12}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">13</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Security Surveillance</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building2[0]->security_surveillance != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building2[0]->security_surveillance}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building2[0]->security_surveillance == 1) 
                                    Condemn 
                                @elseif($building2[0]->security_surveillance == 2)
                                    Major Repairs 
                                @elseif($building2[0]->security_surveillance == 3)  
                                    Minor Repairs 
                                @elseif($building2[0]->security_surveillance == 4)  
                                    Normal Maintenance 
                                @elseif($building2[0]->security_surveillance == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building2[0]->c13}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building2[0]->c13 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building2[0]->c13 == 2)
                                    Non-functional 
                                @elseif($building2[0]->c13 == 3)  
                                    Replacement Required
                                @elseif($building2[0]->c13 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building2[0]->c13 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building2[0]->a13}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:7px;font-size:1.1vw; background-color:#E29F3C;" colspan="8"><strong style="float:right">Average Condition Rating (CR)</strong></td>
                            <td style="padding:7px;font-size:1.1vw;">{{ROUND($building2[0]->average)}}</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table style="width:100%; padding:7px" border="1">
                    <tbody>
                        <tr>
                            <td style="padding:7px;font-size:1.1vw; background-color:rgb(229, 229, 229, 0.5);" colspan="9"><center><strong>SOFT SERVICES ASSESSMENT - Building/Structural</strong></center></td>
                        </tr>
                        <tr>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;" colspan="2"><center><strong>ITEM INFORMATION</strong></center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;" colspan="7"><center><strong>ASSESSMENT CRITERIA</strong></center></td>
                        </tr>
                        <tr>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw; width:5%"><center><strong>NO.</strong></center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw; width:20%"><center><strong>ITEM</strong></center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw; width:5%"><center><strong>CHECK</strong></center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>CR</strong></center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>CONDITION RATING (CR) DESCRIPTION</strong></center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>CC</strong></center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>CLASSIFICATION CODE (CC) DESCRIPTION</strong></center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>ADDITIONAL COMMENTS</strong></center></td>
                            <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>PHOTO REFERENCE</strong></center></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">1</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Pest Control</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building5[0]->pest_control != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building5[0]->pest_control}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building5[0]->pest_control == 1) 
                                    Condemn 
                                @elseif($building5[0]->pest_control == 2)
                                    Major Repairs 
                                @elseif($building5[0]->pest_control == 3)  
                                    Minor Repairs 
                                @elseif($building5[0]->pest_control == 4)  
                                    Normal Maintenance 
                                @elseif($building5[0]->pest_control == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building5[0]->c1}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building5[0]->c1 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building5[0]->c1 == 2)
                                    Non-functional 
                                @elseif($building5[0]->c1 == 3)  
                                    Replacement Required
                                @elseif($building5[0]->c1 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building5[0]->c1 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building5[0]->a1}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">2</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Waste Management</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building5[0]->waste_management != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building5[0]->waste_management}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building5[0]->waste_management == 1) 
                                    Condemn 
                                @elseif($building5[0]->waste_management == 2)
                                    Major Repairs 
                                @elseif($building5[0]->waste_management == 3)  
                                    Minor Repairs 
                                @elseif($building5[0]->waste_management == 4)  
                                    Normal Maintenance 
                                @elseif($building5[0]->waste_management == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building5[0]->c2}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building5[0]->c2 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building5[0]->c2 == 2)
                                    Non-functional 
                                @elseif($building5[0]->c2 == 3)  
                                    Replacement Required
                                @elseif($building5[0]->c2 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building5[0]->c2 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building5[0]->a2}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">3</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Cleaning</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building5[0]->cleaning != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building5[0]->cleaning}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building5[0]->cleaning == 1) 
                                    Condemn 
                                @elseif($building5[0]->cleaning == 2)
                                    Major Repairs 
                                @elseif($building5[0]->cleaning == 3)  
                                    Minor Repairs 
                                @elseif($building5[0]->cleaning == 4)  
                                    Normal Maintenance 
                                @elseif($building5[0]->cleaning == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building5[0]->c3}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building5[0]->c3 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building5[0]->c3 == 2)
                                    Non-functional 
                                @elseif($building5[0]->c3 == 3)  
                                    Replacement Required
                                @elseif($building5[0]->c3 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building5[0]->c3 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building5[0]->a3}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">4</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Horticultural</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building5[0]->horticultural != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building5[0]->horticultural}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building5[0]->horticultural == 1) 
                                    Condemn 
                                @elseif($building5[0]->horticultural == 2)
                                    Major Repairs 
                                @elseif($building5[0]->horticultural == 3)  
                                    Minor Repairs 
                                @elseif($building5[0]->horticultural == 4)  
                                    Normal Maintenance 
                                @elseif($building5[0]->horticultural == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building5[0]->c4}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building5[0]->c4 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building5[0]->c4 == 2)
                                    Non-functional 
                                @elseif($building5[0]->c4 == 3)  
                                    Replacement Required
                                @elseif($building5[0]->c4 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building5[0]->c4 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building5[0]->a4}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">5</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Window Cleaning</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building5[0]->window_cleaning != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building5[0]->window_cleaning}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building5[0]->window_cleaning == 1) 
                                    Condemn 
                                @elseif($building5[0]->window_cleaning == 2)
                                    Major Repairs 
                                @elseif($building5[0]->window_cleaning == 3)  
                                    Minor Repairs 
                                @elseif($building5[0]->window_cleaning == 4)  
                                    Normal Maintenance 
                                @elseif($building5[0]->window_cleaning == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building5[0]->c5}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building5[0]->c5 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building5[0]->c5 == 2)
                                    Non-functional 
                                @elseif($building5[0]->c5 == 3)  
                                    Replacement Required
                                @elseif($building5[0]->c5 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building5[0]->c5 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building5[0]->a5}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">6</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Sanitation</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($building5[0]->sanitation != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building5[0]->sanitation}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building5[0]->sanitation == 1) 
                                    Condemn 
                                @elseif($building5[0]->sanitation == 2)
                                    Major Repairs 
                                @elseif($building5[0]->sanitation == 3)  
                                    Minor Repairs 
                                @elseif($building5[0]->sanitation == 4)  
                                    Normal Maintenance 
                                @elseif($building5[0]->sanitation == 5)  
                                    As New/No Defect 
                                @else
                                    Not Rated 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building5[0]->c6}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                @if($building5[0]->c6 == 1) 
                                    OHS Risk/Emergency
                                @elseif($building5[0]->c6 == 2)
                                    Non-functional 
                                @elseif($building5[0]->c6 == 3)  
                                    Replacement Required
                                @elseif($building5[0]->c6 == 4)  
                                    Repairs and Maintenance 
                                @elseif($building5[0]->c6 == 5)  
                                    Professional Input Required
                                @else
                                    Not Classified 
                                @endif
                            </td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$building5[0]->a6}}</td>
                            <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                        </tr>
                        <tr>
                            <td style="padding:7px;font-size:1.1vw; background-color:#E29F3C;" colspan="8"><strong style="float:right">Average Condition Rating (CR)</strong></td>
                            <td style="padding:7px;font-size:1.1vw;">{{ROUND($building5[0]->average)}}</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table style="width:100%; padding:7px" border="1">
                    <tbody>
                        <tr>
                            <td style="padding:7px;font-size:1.1vw; width:90%; background-color:rgb(229, 229, 229, 0.5);"><strong style="float:right">Building/Structural Average Condition Rating (CR)</strong></td>
                            <td style="padding:7px;font-size:1.1vw;">{{ROUND($overall)}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        @foreach($sector AS $s)
        
            @php 
                $sectorOverall = 0;
                foreach($internal AS $e)
                {
                    if($s->id == $e->sector_id)
                    {
                        $sectorOverall = $sectorOverall + $e->average;
                    }
                }

                foreach($mechanical AS $m)
                {
                    if($s->id == $m->sector_id)
                    {
                        $sectorOverall = $sectorOverall + $m->average;
                    }
                }

                foreach($electrical AS $e)
                {
                    if($s->id == $e->sector_id)
                    {
                        $sectorOverall = $sectorOverall + $e->average;
                    }
                }
                $sectorOverall = $sectorOverall/3;
            @endphp

            <div class="row">
                <div class="col-md-12">
                    <br>
                    <h3>Sector {{$s->sector_no}} <small>{{$s->description}}</small></h3>
                    <br>
                    <table style="width:100%; padding:7px" border="1">
                        <tbody>
                            <tr>
                                <td style="padding:7px;font-size:1.1vw; background-color:rgb(229, 229, 229, 0.5);" colspan="9"><center><strong>INTERNAL ENVELOPE ASSESSMENT</strong></center></td>
                            </tr>
                            <tr>
                                <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;" colspan="2"><center><strong>ITEM INFORMATION</strong></center></td>
                                <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;" colspan="7"><center><strong>ASSESSMENT CRITERIA</strong></center></td>
                            </tr>
                            <tr>
                                <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw; width:5%"><center><strong>NO.</strong></center></td>
                                <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw; width:20%"><center><strong>ITEM</strong></center></td>
                                <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw; width:5%"><center><strong>CHECK</strong></center></td>
                                <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>CR</strong></center></td>
                                <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>CONDITION RATING (CR) DESCRIPTION</strong></center></td>
                                <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>CC</strong></center></td>
                                <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>CLASSIFICATION CODE (CC) DESCRIPTION</strong></center></td>
                                <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>ADDITIONAL COMMENTS</strong></center></td>
                                <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>PHOTO REFERENCE</strong></center></td>
                            </tr>
                            @foreach($internal AS $e) 
                                @if($s->id == $e->sector_id)
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">1</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Slab</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->slab != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->slab}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->slab == 1) 
                                                Condemn 
                                            @elseif($e->slab == 2)
                                                Major Repairs 
                                            @elseif($e->slab == 3)  
                                                Minor Repairs 
                                            @elseif($e->slab == 4)  
                                                Normal Maintenance 
                                            @elseif($e->slab == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c1}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c1 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c1 == 2)
                                                Non-functional 
                                            @elseif($e->c1 == 3)  
                                                Replacement Required
                                            @elseif($e->c1 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c1 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a1}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>                                    
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">2</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Walls</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->walls != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->walls}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->walls == 1) 
                                                Condemn 
                                            @elseif($e->walls == 2)
                                                Major Repairs 
                                            @elseif($e->walls == 3)  
                                                Minor Repairs 
                                            @elseif($e->walls == 4)  
                                                Normal Maintenance 
                                            @elseif($e->walls == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c2}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c2 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c2 == 2)
                                                Non-functional 
                                            @elseif($e->c2 == 3)  
                                                Replacement Required
                                            @elseif($e->c2 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c2 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a2}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>  
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">3</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Paint</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->paint != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->paint}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->paint == 1) 
                                                Condemn 
                                            @elseif($e->paint == 2)
                                                Major Repairs 
                                            @elseif($e->paint == 3)  
                                                Minor Repairs 
                                            @elseif($e->paint == 4)  
                                                Normal Maintenance 
                                            @elseif($e->paint == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c3}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c3 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c3 == 2)
                                                Non-functional 
                                            @elseif($e->c3 == 3)  
                                                Replacement Required
                                            @elseif($e->c3 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c3 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a3}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>  
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">4</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Stairs/Steps</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->stairs_steps != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->stairs_steps}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->stairs_steps == 1) 
                                                Condemn 
                                            @elseif($e->stairs_steps == 2)
                                                Major Repairs 
                                            @elseif($e->stairs_steps == 3)  
                                                Minor Repairs 
                                            @elseif($e->stairs_steps == 4)  
                                                Normal Maintenance 
                                            @elseif($e->stairs_steps == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c4}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c4 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c4 == 2)
                                                Non-functional 
                                            @elseif($e->c4 == 3)  
                                                Replacement Required
                                            @elseif($e->c4 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c4 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a4}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>  
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">5</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Ladders</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->ladders != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->ladders}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->ladders == 1) 
                                                Condemn 
                                            @elseif($e->ladders == 2)
                                                Major Repairs 
                                            @elseif($e->ladders == 3)  
                                                Minor Repairs 
                                            @elseif($e->ladders == 4)  
                                                Normal Maintenance 
                                            @elseif($e->ladders == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c5}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c5 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c5 == 2)
                                                Non-functional 
                                            @elseif($e->c5 == 3)  
                                                Replacement Required
                                            @elseif($e->c5 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c5 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a5}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>  
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">6</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Handrails</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->handrails != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->handrails}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->handrails == 1) 
                                                Condemn 
                                            @elseif($e->handrails == 2)
                                                Major Repairs 
                                            @elseif($e->handrails == 3)  
                                                Minor Repairs 
                                            @elseif($e->handrails == 4)  
                                                Normal Maintenance 
                                            @elseif($e->handrails == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c6}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c6 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c6 == 2)
                                                Non-functional 
                                            @elseif($e->c6 == 3)  
                                                Replacement Required
                                            @elseif($e->c6 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c6 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a6}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>  
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">7</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Walkways</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->walkways != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->walkways}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->walkways == 1) 
                                                Condemn 
                                            @elseif($e->walkways == 2)
                                                Major Repairs 
                                            @elseif($e->walkways == 3)  
                                                Minor Repairs 
                                            @elseif($e->walkways == 4)  
                                                Normal Maintenance 
                                            @elseif($e->walkways == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c7}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c7 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c7 == 2)
                                                Non-functional 
                                            @elseif($e->c7 == 3)  
                                                Replacement Required
                                            @elseif($e->c7 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c7 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a7}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>  
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">8</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Signage (wall mounted)</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->signage != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->signage}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->signage == 1) 
                                                Condemn 
                                            @elseif($e->signage == 2)
                                                Major Repairs 
                                            @elseif($e->signage == 3)  
                                                Minor Repairs 
                                            @elseif($e->signage == 4)  
                                                Normal Maintenance 
                                            @elseif($e->signage == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c8}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c8 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c8 == 2)
                                                Non-functional 
                                            @elseif($e->c8 == 3)  
                                                Replacement Required
                                            @elseif($e->c8 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c8 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a8}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>  
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">9</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Crawl Spaces</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->crawl_spaces != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->crawl_spaces}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->crawl_spaces == 1) 
                                                Condemn 
                                            @elseif($e->crawl_spaces == 2)
                                                Major Repairs 
                                            @elseif($e->crawl_spaces == 3)  
                                                Minor Repairs 
                                            @elseif($e->crawl_spaces == 4)  
                                                Normal Maintenance 
                                            @elseif($e->crawl_spaces == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c9}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c9 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c9 == 2)
                                                Non-functional 
                                            @elseif($e->c9 == 3)  
                                                Replacement Required
                                            @elseif($e->c9 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c9 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a9}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>  
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">10</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Poles/Columns/Supports</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->poles_columns_support != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->poles_columns_support}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->poles_columns_support == 1) 
                                                Condemn 
                                            @elseif($e->poles_columns_support == 2)
                                                Major Repairs 
                                            @elseif($e->poles_columns_support == 3)  
                                                Minor Repairs 
                                            @elseif($e->poles_columns_support == 4)  
                                                Normal Maintenance 
                                            @elseif($e->poles_columns_support == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c10}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c10 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c10 == 2)
                                                Non-functional 
                                            @elseif($e->c10 == 3)  
                                                Replacement Required
                                            @elseif($e->c10 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c10 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a10}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>                         
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">11</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Window Casings</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->window_casings != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->window_casings}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->window_casings == 1) 
                                                Condemn 
                                            @elseif($e->window_casings == 2)
                                                Major Repairs 
                                            @elseif($e->window_casings == 3)  
                                                Minor Repairs 
                                            @elseif($e->window_casings == 4)  
                                                Normal Maintenance 
                                            @elseif($e->window_casings == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c11}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c11 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c11 == 2)
                                                Non-functional 
                                            @elseif($e->c11 == 3)  
                                                Replacement Required
                                            @elseif($e->c11 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c11 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a11}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>  
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">12</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Windows (note type)</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->windows != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->windows}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->windows == 1) 
                                                Condemn 
                                            @elseif($e->windows == 2)
                                                Major Repairs 
                                            @elseif($e->windows == 3)  
                                                Minor Repairs 
                                            @elseif($e->windows == 4)  
                                                Normal Maintenance 
                                            @elseif($e->windows == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c12}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c12 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c12 == 2)
                                                Non-functional 
                                            @elseif($e->c12 == 3)  
                                                Replacement Required
                                            @elseif($e->c12 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c12 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a12}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>  
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">13</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Glazing</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->glazing != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->glazing}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->glazing == 1) 
                                                Condemn 
                                            @elseif($e->glazing == 2)
                                                Major Repairs 
                                            @elseif($e->glazing == 3)  
                                                Minor Repairs 
                                            @elseif($e->glazing == 4)  
                                                Normal Maintenance 
                                            @elseif($e->glazing == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c13}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c13 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c13 == 2)
                                                Non-functional 
                                            @elseif($e->c13 == 3)  
                                                Replacement Required
                                            @elseif($e->c13 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c13 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a13}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>  
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">14</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Door Hardware</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->door_hardware != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->door_hardware}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->door_hardware == 1) 
                                                Condemn 
                                            @elseif($e->door_hardware == 2)
                                                Major Repairs 
                                            @elseif($e->door_hardware == 3)  
                                                Minor Repairs 
                                            @elseif($e->door_hardware == 4)  
                                                Normal Maintenance 
                                            @elseif($e->door_hardware == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c14}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c14 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c14 == 2)
                                                Non-functional 
                                            @elseif($e->c14 == 3)  
                                                Replacement Required
                                            @elseif($e->c14 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c14 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a14}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>  
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">15</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Door Frames</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->door_frames != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->door_frames}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->door_frames == 1) 
                                                Condemn 
                                            @elseif($e->door_frames == 2)
                                                Major Repairs 
                                            @elseif($e->door_frames == 3)  
                                                Minor Repairs 
                                            @elseif($e->door_frames == 4)  
                                                Normal Maintenance 
                                            @elseif($e->door_frames == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c15}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c15 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c15 == 2)
                                                Non-functional 
                                            @elseif($e->c15 == 3)  
                                                Replacement Required
                                            @elseif($e->c15 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c15 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a15}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>  
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">16</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Doors</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->doors != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->doors}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->doors == 1) 
                                                Condemn 
                                            @elseif($e->doors == 2)
                                                Major Repairs 
                                            @elseif($e->doors == 3)  
                                                Minor Repairs 
                                            @elseif($e->doors == 4)  
                                                Normal Maintenance 
                                            @elseif($e->doors == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c16}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c16 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c16 == 2)
                                                Non-functional 
                                            @elseif($e->c16 == 3)  
                                                Replacement Required
                                            @elseif($e->c16 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c16 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a16}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>  
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">17</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Insulation</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->insulation != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->insulation}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->insulation == 1) 
                                                Condemn 
                                            @elseif($e->insulation == 2)
                                                Major Repairs 
                                            @elseif($e->insulation == 3)  
                                                Minor Repairs 
                                            @elseif($e->insulation == 4)  
                                                Normal Maintenance 
                                            @elseif($e->insulation == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c17}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c17 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c17 == 2)
                                                Non-functional 
                                            @elseif($e->c17 == 3)  
                                                Replacement Required
                                            @elseif($e->c17 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c17 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a17}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>  
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">18</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Fascia</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->fascia != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->fascia}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->fascia == 1) 
                                                Condemn 
                                            @elseif($e->fascia == 2)
                                                Major Repairs 
                                            @elseif($e->fascia == 3)  
                                                Minor Repairs 
                                            @elseif($e->fascia == 4)  
                                                Normal Maintenance 
                                            @elseif($e->fascia == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c18}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c18 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c18 == 2)
                                                Non-functional 
                                            @elseif($e->c18 == 3)  
                                                Replacement Required
                                            @elseif($e->c18 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c18 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a18}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>  
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">19</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Roof Trusses</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->roof_trusses != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->roof_trusses}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->roof_trusses == 1) 
                                                Condemn 
                                            @elseif($e->roof_trusses == 2)
                                                Major Repairs 
                                            @elseif($e->roof_trusses == 3)  
                                                Minor Repairs 
                                            @elseif($e->roof_trusses == 4)  
                                                Normal Maintenance 
                                            @elseif($e->roof_trusses == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c19}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c19 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c19 == 2)
                                                Non-functional 
                                            @elseif($e->c19 == 3)  
                                                Replacement Required
                                            @elseif($e->c19 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c19 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a19}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>  
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">20</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Ironmongery</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->ironmongery != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->ironmongery}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->ironmongery == 1) 
                                                Condemn 
                                            @elseif($e->ironmongery == 2)
                                                Major Repairs 
                                            @elseif($e->ironmongery == 3)  
                                                Minor Repairs 
                                            @elseif($e->ironmongery == 4)  
                                                Normal Maintenance 
                                            @elseif($e->ironmongery == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c20}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c20 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c20 == 2)
                                                Non-functional 
                                            @elseif($e->c20 == 3)  
                                                Replacement Required
                                            @elseif($e->c20 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c20 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a20}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>  
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">21</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Flashing</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->flashing != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->flashing}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->flashing == 1) 
                                                Condemn 
                                            @elseif($e->flashing == 2)
                                                Major Repairs 
                                            @elseif($e->flashing == 3)  
                                                Minor Repairs 
                                            @elseif($e->flashing == 4)  
                                                Normal Maintenance 
                                            @elseif($e->flashing == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c21}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c21 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c21 == 2)
                                                Non-functional 
                                            @elseif($e->c21 == 3)  
                                                Replacement Required
                                            @elseif($e->c21 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c21 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a21}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>  
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">22</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Flooring (Carpet)</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->flooring != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->flooring}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->flooring == 1) 
                                                Condemn 
                                            @elseif($e->flooring == 2)
                                                Major Repairs 
                                            @elseif($e->flooring == 3)  
                                                Minor Repairs 
                                            @elseif($e->flooring == 4)  
                                                Normal Maintenance 
                                            @elseif($e->flooring == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c22}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c22 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c22 == 2)
                                                Non-functional 
                                            @elseif($e->c22 == 3)  
                                                Replacement Required
                                            @elseif($e->c22 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c22 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a22}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>  
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">23</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Masonry (note type)</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->masonry != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->masonry}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->masonry == 1) 
                                                Condemn 
                                            @elseif($e->masonry == 2)
                                                Major Repairs 
                                            @elseif($e->masonry == 3)  
                                                Minor Repairs 
                                            @elseif($e->masonry == 4)  
                                                Normal Maintenance 
                                            @elseif($e->masonry == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c23}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c23 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c23 == 2)
                                                Non-functional 
                                            @elseif($e->c23 == 3)  
                                                Replacement Required
                                            @elseif($e->c23 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c23 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a23}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>  
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">24</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Ceiling (Rhino Board)</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->ceiling != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->ceiling}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->ceiling == 1) 
                                                Condemn 
                                            @elseif($e->ceiling == 2)
                                                Major Repairs 
                                            @elseif($e->ceiling == 3)  
                                                Minor Repairs 
                                            @elseif($e->ceiling == 4)  
                                                Normal Maintenance 
                                            @elseif($e->ceiling == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c24}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c24 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c24 == 2)
                                                Non-functional 
                                            @elseif($e->c24 == 3)  
                                                Replacement Required
                                            @elseif($e->c24 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c24 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a24}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>  
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">25</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Vents</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->vents != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->vents}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->vents == 1) 
                                                Condemn 
                                            @elseif($e->vents == 2)
                                                Major Repairs 
                                            @elseif($e->vents == 3)  
                                                Minor Repairs 
                                            @elseif($e->vents == 4)  
                                                Normal Maintenance 
                                            @elseif($e->vents == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c25}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c25 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c25 == 2)
                                                Non-functional 
                                            @elseif($e->c25 == 3)  
                                                Replacement Required
                                            @elseif($e->c25 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c25 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a25}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>  
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">26</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Skylights</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->skylights != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->skylights}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->skylights == 1) 
                                                Condemn 
                                            @elseif($e->skylights == 2)
                                                Major Repairs 
                                            @elseif($e->skylights == 3)  
                                                Minor Repairs 
                                            @elseif($e->skylights == 4)  
                                                Normal Maintenance 
                                            @elseif($e->skylights == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c26}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c26 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c26 == 2)
                                                Non-functional 
                                            @elseif($e->c26 == 3)  
                                                Replacement Required
                                            @elseif($e->c26 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c26 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a26}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>                          
                                    <tr>
                                        <td style="padding:7px;font-size:1.1vw; background-color:#E29F3C;" colspan="8"><strong style="float:right">Average Condition Rating (CR)</strong></td>
                                        <td style="padding:7px;font-size:1.1vw;">{{ROUND($e->average)}}</td>
                                    </tr>
                                @endif 
                            @endforeach                            
                        </tbody>
                    </table>
                    <br>
                    <table style="width:100%; padding:7px" border="1">
                        <tbody>
                            <tr>
                                <td style="padding:7px;font-size:1.1vw; background-color:rgb(229, 229, 229, 0.5);" colspan="9"><center><strong>MECHANICAL ASSESSMENT</strong></center></td>
                            </tr>
                            <tr>
                                <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;" colspan="2"><center><strong>ITEM INFORMATION</strong></center></td>
                                <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;" colspan="7"><center><strong>ASSESSMENT CRITERIA</strong></center></td>
                            </tr>
                            <tr>
                                <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw; width:5%"><center><strong>NO.</strong></center></td>
                                <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw; width:20%"><center><strong>ITEM</strong></center></td>
                                <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw; width:5%"><center><strong>CHECK</strong></center></td>
                                <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>CR</strong></center></td>
                                <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>CONDITION RATING (CR) DESCRIPTION</strong></center></td>
                                <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>CC</strong></center></td>
                                <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>CLASSIFICATION CODE (CC) DESCRIPTION</strong></center></td>
                                <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>ADDITIONAL COMMENTS</strong></center></td>
                                <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>PHOTO REFERENCE</strong></center></td>
                            </tr>
                            @foreach($mechanical AS $e) 
                                @if($s->id == $e->sector_id)                                
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">1</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Faucets</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->faucets != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->faucets}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->faucets == 1) 
                                                Condemn 
                                            @elseif($e->faucets == 2)
                                                Major Repairs 
                                            @elseif($e->faucets == 3)  
                                                Minor Repairs 
                                            @elseif($e->faucets == 4)  
                                                Normal Maintenance 
                                            @elseif($e->faucets == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c1}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c1 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c1 == 2)
                                                Non-functional 
                                            @elseif($e->c1 == 3)  
                                                Replacement Required
                                            @elseif($e->c1 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c1 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a1}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">2</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Sinks</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->sinks != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->sinks}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->sinks == 1) 
                                                Condemn 
                                            @elseif($e->sinks == 2)
                                                Major Repairs 
                                            @elseif($e->sinks == 3)  
                                                Minor Repairs 
                                            @elseif($e->sinks == 4)  
                                                Normal Maintenance 
                                            @elseif($e->sinks == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c2}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c2 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c2 == 2)
                                                Non-functional 
                                            @elseif($e->c2 == 3)  
                                                Replacement Required
                                            @elseif($e->c2 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c2 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a2}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">3</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Fixtures (note type)</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->fixtures != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->fixtures}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->fixtures == 1) 
                                                Condemn 
                                            @elseif($e->fixtures == 2)
                                                Major Repairs 
                                            @elseif($e->fixtures == 3)  
                                                Minor Repairs 
                                            @elseif($e->fixtures == 4)  
                                                Normal Maintenance 
                                            @elseif($e->fixtures == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c3}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c3 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c3 == 2)
                                                Non-functional 
                                            @elseif($e->c3 == 3)  
                                                Replacement Required
                                            @elseif($e->c3 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c3 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a3}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">4</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Toilets</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->toilets != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->toilets}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->toilets == 1) 
                                                Condemn 
                                            @elseif($e->toilets == 2)
                                                Major Repairs 
                                            @elseif($e->toilets == 3)  
                                                Minor Repairs 
                                            @elseif($e->toilets == 4)  
                                                Normal Maintenance 
                                            @elseif($e->toilets == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c4}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c4 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c4 == 2)
                                                Non-functional 
                                            @elseif($e->c4 == 3)  
                                                Replacement Required
                                            @elseif($e->c4 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c4 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a4}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">5</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Hangers</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->hangers != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->hangers}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->hangers == 1) 
                                                Condemn 
                                            @elseif($e->hangers == 2)
                                                Major Repairs 
                                            @elseif($e->hangers == 3)  
                                                Minor Repairs 
                                            @elseif($e->hangers == 4)  
                                                Normal Maintenance 
                                            @elseif($e->hangers == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c5}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c5 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c5 == 2)
                                                Non-functional 
                                            @elseif($e->c5 == 3)  
                                                Replacement Required
                                            @elseif($e->c5 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c5 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a5}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">6</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Composting Units</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->composting_units != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->composting_units}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->composting_units == 1) 
                                                Condemn 
                                            @elseif($e->composting_units == 2)
                                                Major Repairs 
                                            @elseif($e->composting_units == 3)  
                                                Minor Repairs 
                                            @elseif($e->composting_units == 4)  
                                                Normal Maintenance 
                                            @elseif($e->composting_units == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c6}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c6 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c6 == 2)
                                                Non-functional 
                                            @elseif($e->c6 == 3)  
                                                Replacement Required
                                            @elseif($e->c6 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c6 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a6}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">7</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Vaults (cracks, leaks, capacity & material)</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->vaults != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->vaults}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->vaults == 1) 
                                                Condemn 
                                            @elseif($e->vaults == 2)
                                                Major Repairs 
                                            @elseif($e->vaults == 3)  
                                                Minor Repairs 
                                            @elseif($e->vaults == 4)  
                                                Normal Maintenance 
                                            @elseif($e->vaults == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c7}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c7 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c7 == 2)
                                                Non-functional 
                                            @elseif($e->c7 == 3)  
                                                Replacement Required
                                            @elseif($e->c7 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c7 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a7}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">8</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Heating, Ventilation & Air Conditioning</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->heating_ventilation != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->heating_ventilation}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->heating_ventilation == 1) 
                                                Condemn 
                                            @elseif($e->heating_ventilation == 2)
                                                Major Repairs 
                                            @elseif($e->heating_ventilation == 3)  
                                                Minor Repairs 
                                            @elseif($e->heating_ventilation == 4)  
                                                Normal Maintenance 
                                            @elseif($e->heating_ventilation == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c8}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c8 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c8 == 2)
                                                Non-functional 
                                            @elseif($e->c8 == 3)  
                                                Replacement Required
                                            @elseif($e->c8 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c8 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a8}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">9</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Fire Fighting/Detection Equipment & Fixtures</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->fire_detection != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->fire_detection}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->fire_detection == 1) 
                                                Condemn 
                                            @elseif($e->fire_detection == 2)
                                                Major Repairs 
                                            @elseif($e->fire_detection == 3)  
                                                Minor Repairs 
                                            @elseif($e->fire_detection == 4)  
                                                Normal Maintenance 
                                            @elseif($e->fire_detection == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c9}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c9 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c9 == 2)
                                                Non-functional 
                                            @elseif($e->c9 == 3)  
                                                Replacement Required
                                            @elseif($e->c9 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c9 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a9}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">10</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Access Control</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->access_control != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->access_control}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->access_control == 1) 
                                                Condemn 
                                            @elseif($e->access_control == 2)
                                                Major Repairs 
                                            @elseif($e->access_control == 3)  
                                                Minor Repairs 
                                            @elseif($e->access_control == 4)  
                                                Normal Maintenance 
                                            @elseif($e->access_control == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c10}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c10 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c10 == 2)
                                                Non-functional 
                                            @elseif($e->c10 == 3)  
                                                Replacement Required
                                            @elseif($e->c10 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c10 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a10}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">11</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Pressure Vessels (boilers, geysers etc.)</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->pressure_vessels != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->pressure_vessels}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->pressure_vessels == 1) 
                                                Condemn 
                                            @elseif($e->pressure_vessels == 2)
                                                Major Repairs 
                                            @elseif($e->pressure_vessels == 3)  
                                                Minor Repairs 
                                            @elseif($e->pressure_vessels == 4)  
                                                Normal Maintenance 
                                            @elseif($e->pressure_vessels == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c11}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c11 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c11 == 2)
                                                Non-functional 
                                            @elseif($e->c11 == 3)  
                                                Replacement Required
                                            @elseif($e->c11 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c11 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a11}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">12</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Incinerators</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->incinerators != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->incinerators}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->incinerators == 1) 
                                                Condemn 
                                            @elseif($e->incinerators == 2)
                                                Major Repairs 
                                            @elseif($e->incinerators == 3)  
                                                Minor Repairs 
                                            @elseif($e->incinerators == 4)  
                                                Normal Maintenance 
                                            @elseif($e->incinerators == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c12}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c12 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c12 == 2)
                                                Non-functional 
                                            @elseif($e->c12 == 3)  
                                                Replacement Required
                                            @elseif($e->c12 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c12 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a12}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">13</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Water Tanks</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->water_tanks != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->water_tanks}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->water_tanks == 1) 
                                                Condemn 
                                            @elseif($e->water_tanks == 2)
                                                Major Repairs 
                                            @elseif($e->water_tanks == 3)  
                                                Minor Repairs 
                                            @elseif($e->water_tanks == 4)  
                                                Normal Maintenance 
                                            @elseif($e->water_tanks == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c13}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c13 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c13 == 2)
                                                Non-functional 
                                            @elseif($e->c13 == 3)  
                                                Replacement Required
                                            @elseif($e->c13 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c13 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a13}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">14</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Pumps</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->pumps != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->pumps}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->pumps == 1) 
                                                Condemn 
                                            @elseif($e->pumps == 2)
                                                Major Repairs 
                                            @elseif($e->pumps == 3)  
                                                Minor Repairs 
                                            @elseif($e->pumps == 4)  
                                                Normal Maintenance 
                                            @elseif($e->pumps == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c14}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c14 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c14 == 2)
                                                Non-functional 
                                            @elseif($e->c14 == 3)  
                                                Replacement Required
                                            @elseif($e->c14 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c14 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a14}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:7px;font-size:1.1vw; background-color:#E29F3C;" colspan="8"><strong style="float:right">Average Condition Rating (CR)</strong></td>
                                        <td style="padding:7px;font-size:1.1vw;">{{ROUND($e->average)}}</td>
                                    </tr>
                                @endif 
                            @endforeach
                        </tbody>
                    </table>
                    <br>
                    <table style="width:100%; padding:7px" border="1">
                        <tbody>
                            <tr>
                                <td style="padding:7px;font-size:1.1vw; background-color:rgb(229, 229, 229, 0.5);" colspan="9"><center><strong>ELECTRICAL ASSESSMENT</strong></center></td>
                            </tr>
                            <tr>
                                <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;" colspan="2"><center><strong>ITEM INFORMATION</strong></center></td>
                                <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;" colspan="7"><center><strong>ASSESSMENT CRITERIA</strong></center></td>
                            </tr>
                            <tr>
                                <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw; width:5%"><center><strong>NO.</strong></center></td>
                                <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw; width:20%"><center><strong>ITEM</strong></center></td>
                                <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw; width:5%"><center><strong>CHECK</strong></center></td>
                                <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>CR</strong></center></td>
                                <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>CONDITION RATING (CR) DESCRIPTION</strong></center></td>
                                <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>CC</strong></center></td>
                                <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>CLASSIFICATION CODE (CC) DESCRIPTION</strong></center></td>
                                <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>ADDITIONAL COMMENTS</strong></center></td>
                                <td style="padding:7px; background-color:#E29F3C; font-size:1.1vw;"><center><strong>PHOTO REFERENCE</strong></center></td>
                            </tr>
                            @foreach($electrical AS $e) 
                                @if($s->id == $e->sector_id)
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">1</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Electrical Service</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->electrical_service != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->electrical_service}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->electrical_service == 1) 
                                                Condemn 
                                            @elseif($e->electrical_service == 2)
                                                Major Repairs 
                                            @elseif($e->electrical_service == 3)  
                                                Minor Repairs 
                                            @elseif($e->electrical_service == 4)  
                                                Normal Maintenance 
                                            @elseif($e->electrical_service == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c1}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c1 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c1 == 2)
                                                Non-functional 
                                            @elseif($e->c1 == 3)  
                                                Replacement Required
                                            @elseif($e->c1 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c1 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a1}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">2</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Fixtures (note type)</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->fixtures != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->fixtures}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->fixtures == 1) 
                                                Condemn 
                                            @elseif($e->fixtures == 2)
                                                Major Repairs 
                                            @elseif($e->fixtures == 3)  
                                                Minor Repairs 
                                            @elseif($e->fixtures == 4)  
                                                Normal Maintenance 
                                            @elseif($e->fixtures == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c2}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c2 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c2 == 2)
                                                Non-functional 
                                            @elseif($e->c2 == 3)  
                                                Replacement Required
                                            @elseif($e->c2 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c2 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a2}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">3</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Solar Panels</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->solar_panels != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->solar_panels}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->solar_panels == 1) 
                                                Condemn 
                                            @elseif($e->solar_panels == 2)
                                                Major Repairs 
                                            @elseif($e->solar_panels == 3)  
                                                Minor Repairs 
                                            @elseif($e->solar_panels == 4)  
                                                Normal Maintenance 
                                            @elseif($e->solar_panels == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c3}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c3 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c3 == 2)
                                                Non-functional 
                                            @elseif($e->c3 == 3)  
                                                Replacement Required
                                            @elseif($e->c3 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c3 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a3}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">4</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Lights</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->lights != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->lights}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->lights == 1) 
                                                Condemn 
                                            @elseif($e->lights == 2)
                                                Major Repairs 
                                            @elseif($e->lights == 3)  
                                                Minor Repairs 
                                            @elseif($e->lights == 4)  
                                                Normal Maintenance 
                                            @elseif($e->lights == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c4}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c4 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c4 == 2)
                                                Non-functional 
                                            @elseif($e->c4 == 3)  
                                                Replacement Required
                                            @elseif($e->c4 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c4 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a4}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">5</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Batteries/Backup Power</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->batteries != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->batteries}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->batteries == 1) 
                                                Condemn 
                                            @elseif($e->batteries == 2)
                                                Major Repairs 
                                            @elseif($e->batteries == 3)  
                                                Minor Repairs 
                                            @elseif($e->batteries == 4)  
                                                Normal Maintenance 
                                            @elseif($e->batteries == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c5}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c5 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c5 == 2)
                                                Non-functional 
                                            @elseif($e->c5 == 3)  
                                                Replacement Required
                                            @elseif($e->c5 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c5 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a5}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">6</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Switches</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->switches != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->switches}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->switches == 1) 
                                                Condemn 
                                            @elseif($e->switches == 2)
                                                Major Repairs 
                                            @elseif($e->switches == 3)  
                                                Minor Repairs 
                                            @elseif($e->switches == 4)  
                                                Normal Maintenance 
                                            @elseif($e->switches == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c6}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c6 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c6 == 2)
                                                Non-functional 
                                            @elseif($e->c6 == 3)  
                                                Replacement Required
                                            @elseif($e->c6 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c6 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a6}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">7</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Sensors</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->sensors != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->sensors}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->sensors == 1) 
                                                Condemn 
                                            @elseif($e->sensors == 2)
                                                Major Repairs 
                                            @elseif($e->sensors == 3)  
                                                Minor Repairs 
                                            @elseif($e->sensors == 4)  
                                                Normal Maintenance 
                                            @elseif($e->sensors == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c7}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c7 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c7 == 2)
                                                Non-functional 
                                            @elseif($e->c7 == 3)  
                                                Replacement Required
                                            @elseif($e->c7 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c7 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a7}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">8</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Distribution Board</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->distribution_board != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->distribution_board}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->distribution_board == 1) 
                                                Condemn 
                                            @elseif($e->distribution_board == 2)
                                                Major Repairs 
                                            @elseif($e->distribution_board == 3)  
                                                Minor Repairs 
                                            @elseif($e->distribution_board == 4)  
                                                Normal Maintenance 
                                            @elseif($e->distribution_board == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c8}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c8 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c8 == 2)
                                                Non-functional 
                                            @elseif($e->c8 == 3)  
                                                Replacement Required
                                            @elseif($e->c8 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c8 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a8}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">9</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Grounding</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->grounding != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->grounding}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->grounding == 1) 
                                                Condemn 
                                            @elseif($e->grounding == 2)
                                                Major Repairs 
                                            @elseif($e->grounding == 3)  
                                                Minor Repairs 
                                            @elseif($e->grounding == 4)  
                                                Normal Maintenance 
                                            @elseif($e->grounding == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c9}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c9 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c9 == 2)
                                                Non-functional 
                                            @elseif($e->c9 == 3)  
                                                Replacement Required
                                            @elseif($e->c9 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c9 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a9}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">10</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Wiring</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->wiring != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->wiring}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->wiring == 1) 
                                                Condemn 
                                            @elseif($e->wiring == 2)
                                                Major Repairs 
                                            @elseif($e->wiring == 3)  
                                                Minor Repairs 
                                            @elseif($e->wiring == 4)  
                                                Normal Maintenance 
                                            @elseif($e->wiring == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c10}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c10 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c10 == 2)
                                                Non-functional 
                                            @elseif($e->c10 == 3)  
                                                Replacement Required
                                            @elseif($e->c10 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c10 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a10}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">11</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Plug Points</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->plug_points != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->plug_points}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->plug_points == 1) 
                                                Condemn 
                                            @elseif($e->plug_points == 2)
                                                Major Repairs 
                                            @elseif($e->plug_points == 3)  
                                                Minor Repairs 
                                            @elseif($e->plug_points == 4)  
                                                Normal Maintenance 
                                            @elseif($e->plug_points == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c11}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c11 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c11 == 2)
                                                Non-functional 
                                            @elseif($e->c11 == 3)  
                                                Replacement Required
                                            @elseif($e->c11 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c11 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a11}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">12</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Electric Fencing</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->electric_fencing != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->electric_fencing}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->electric_fencing == 1) 
                                                Condemn 
                                            @elseif($e->electric_fencing == 2)
                                                Major Repairs 
                                            @elseif($e->electric_fencing == 3)  
                                                Minor Repairs 
                                            @elseif($e->electric_fencing == 4)  
                                                Normal Maintenance 
                                            @elseif($e->electric_fencing == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c12}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c12 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c12 == 2)
                                                Non-functional 
                                            @elseif($e->c12 == 3)  
                                                Replacement Required
                                            @elseif($e->c12 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c12 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a12}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">13</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">Water Tanks</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">@if($e->security != '') <i class="fa fa-check" aria-hidden="true"></i> @endif</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->security}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->security == 1) 
                                                Condemn 
                                            @elseif($e->security == 2)
                                                Major Repairs 
                                            @elseif($e->security == 3)  
                                                Minor Repairs 
                                            @elseif($e->security == 4)  
                                                Normal Maintenance 
                                            @elseif($e->security == 5)  
                                                As New/No Defect 
                                            @else
                                                Not Rated 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->c13}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">
                                            @if($e->c13 == 1) 
                                                OHS Risk/Emergency
                                            @elseif($e->c13 == 2)
                                                Non-functional 
                                            @elseif($e->c13 == 3)  
                                                Replacement Required
                                            @elseif($e->c13 == 4)  
                                                Repairs and Maintenance 
                                            @elseif($e->c13 == 5)  
                                                Professional Input Required
                                            @else
                                                Not Classified 
                                            @endif
                                        </td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);">{{$e->a13}}</td>
                                        <td style="padding:3px; background-color:rgb(229, 229, 229, 0.5);"></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:7px;font-size:1.1vw; background-color:#E29F3C;" colspan="8"><strong style="float:right">Average Condition Rating (CR)</strong></td>
                                        <td style="padding:7px;font-size:1.1vw;">{{ROUND($e->average)}}</td>
                                    </tr>
                                @endif 
                            @endforeach                            
                        </tbody>
                    </table>
                    <br>
                    <table style="width:100%; padding:7px" border="1">
                        <tbody>
                            <tr>
                                <td style="padding:7px;font-size:1.1vw; width:90%; background-color:rgb(229, 229, 229, 0.5);"><strong style="float:right">Sector {{$s->sector_no}} Average Condition Rating (CR)</strong></td>
                                <td style="padding:7px;font-size:1.1vw;">{{ROUND($sectorOverall)}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        @endforeach  

    </div><!--END COL MIDDLE-->
    <div class="col-md-1"></div>
</div>

@endsection
