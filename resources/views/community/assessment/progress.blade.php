@extends('layouts.community.app')

@section('content')
<link rel="stylesheet" href="{{ URL::asset('/css/communityelements.css') }}">

<div class="wrapper" style='background-color: #f2f2f2; background-image: url("https://www.transparenttextures.com/patterns/shattered.png");'>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background-color: transparent; border-left:0px;">
        <section class="content-header">
            <h1 style="color:black">
                <strong>Community Assets</strong>
                <small>Dashboard</small>
            </h1>
        </section>
        <br>

        <section class="content">
            <!--FIRST LINE========================================-->   
            <div class="row">
                <div class="col-md-2">
                    
                </div>                
                <div class="col-md-8">
                    <div class="col-md-12" style="background-color:rgba(255, 255, 255, .15); padding:15px; box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); backdrop-filter: blur(5px); border-radius:5px">                    
                    <h3 style="margin-top:-1px; color:black; float:left">Assessment Progress</h3>
                    <a class="btn add" href="javascript: history.go(-1)"><strong><i class="fa fa-arrow-left"></i>  Back</strong></a>
                    <br>
                    <br>
                    <br>
                    @php 
                        $bbc = 64 - ($external[0]->total + $mechanical[0]->total + $electrical[0]->total + $civil[0]->total + $soft[0]->total);
                        $ss1 = 0;
                        $ssc = 0;
                        $grandTotal = 0;

                        foreach($sector AS $s) 
                        {                            
                            $ss1 = $ss1 + 53;

                            foreach($sector_internal AS $data)
                            {
                                if($s->id == $data->sector_id)
                                {
                                    $total = 26;
                                    $total = $total - $data->total;
                                }
                            }
                            $grandTotal = $grandTotal + $total;

                            foreach($sector_mechanical AS $data)
                            {
                                if($s->id == $data->sector_id)
                                {
                                    $total = 14;
                                    $total = $total - $data->total;
                                }
                            }
                            $grandTotal = $grandTotal + $total;

                            foreach($sector_electrical AS $data)
                            {
                                if($s->id == $data->sector_id)
                                {
                                    $total = 13;
                                    $total = $total - $data->total;
                                }
                            }
                            $grandTotal = $grandTotal + $total;
                        }

                        $gg = 64 + $ss1;
                        $ggc = $bbc + $grandTotal;
                        $percentage = ($ggc / $gg) * 100;
                    @endphp
                    <center><h1 style="color:#7C2A81; font-size: 85px"><strong>{{ROUND($percentage, 2)}}%</strong></h1><small style="font-size: 20px; margin-top:-60px; color:grey">OVERALL PROGRESS PERCENTAGE</small></center>

                    <div class="col-md-6">
                        <h3>Building/ Structure</h3>
                        <table style="width:100%">
                            <tbody>
                                <tr class="tableset">
                                    <td class="tableset2" style="width:50%"><strong>External Envelope:</strong></td>
                                    <td class="tableset2">
                                        @php 
                                            $grandCount = 0;
                                            $grandTotal = 0;

                                            $total = 21;
                                            $total = $total - $external[0]->total;

                                            $grandTotal = $grandTotal + $total;
                                            $grandCount = $grandCount + 21;
                                        @endphp
                                        @if($total != 21) 
                                            {{$total}}<strong style="color:red">/21</strong>
                                        @else 
                                            {{$total}}<strong>/21</strong>
                                        @endif                                    
                                    </td>
                                </tr>
                                <tr class="tableset">
                                    <td class="tableset2" style="width:50%"><strong>Civil:</strong></td>
                                    <td class="tableset2">
                                        @php 
                                            $total = 10;
                                            $total = $total - $civil[0]->total;

                                            $grandTotal = $grandTotal + $total;
                                            $grandCount = $grandCount + 10;
                                        @endphp
                                        @if($total != 10) 
                                            {{$total}}<strong style="color:red">/10</strong>
                                        @else 
                                            {{$total}}<strong>/10</strong>
                                        @endif                                    
                                    </td>
                                </tr>
                                <tr class="tableset">
                                    <td class="tableset2" style="width:50%"><strong>Mechanical:</strong></td>
                                    <td class="tableset2">
                                        @php 
                                            $total = 14;
                                            $total = $total - $mechanical[0]->total;

                                            $grandTotal = $grandTotal + $total;
                                            $grandCount = $grandCount + 14;
                                        @endphp
                                        @if($total != 14) 
                                            {{$total}}<strong style="color:red">/14</strong>
                                        @else 
                                            {{$total}}<strong>/14</strong>
                                        @endif                                    
                                    </td>
                                </tr>
                                <tr class="tableset">
                                    <td class="tableset2" style="width:50%"><strong>Electrical:</strong></td>
                                    <td class="tableset2">
                                        @php 
                                            $total = 13;
                                            $total = $total - $electrical[0]->total;

                                            $grandTotal = $grandTotal + $total;
                                            $grandCount = $grandCount + 13;
                                        @endphp
                                        @if($total != 13) 
                                            {{$total}}<strong style="color:red">/13</strong>
                                        @else 
                                            {{$total}}<strong>/13</strong>
                                        @endif                                    
                                    </td>
                                </tr>
                                <tr class="tableset">
                                    <td class="tableset2" style="width:50%"><strong>Soft Services:</strong></td>
                                    <td class="tableset2">
                                        @php 
                                            $total = 6;
                                            $total = $total - $soft[0]->total;

                                            $grandTotal = $grandTotal + $total;
                                            $grandCount = $grandCount + 6;
                                        @endphp
                                        @if($total != 6) 
                                            {{$total}}<strong style="color:red">/6</strong>
                                        @else 
                                            {{$total}}<strong>/6</strong>
                                        @endif                                    
                                    </td>
                                </tr>
                                <tr class="tableset">
                                    <td class="tableset2" style="width:50%;"><span class="label label-primary" style="font-size: 14px;">GRAND TOTAL</span></td>
                                    <td class="tableset2">
                                        <span class="label label-primary" style="font-size: 14px;">{{$grandTotal}}/{{$grandCount}} </span>                                
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div> 

                    <div class="col-md-6">
                        @foreach($sector AS $s) 
                            <h3>{{$s->description}}</h3>
                            <table style="width:100%">
                                <tbody>
                                    <tr class="tableset">
                                        <td class="tableset2" style="width:50%"><strong>Internal Envelope:</strong></td>
                                        <td class="tableset2">
                                            @php 
                                                $grandCount = 0;
                                                $grandTotal = 0;

                                                foreach($sector_internal AS $data)
                                                {
                                                    if($s->id == $data->sector_id)
                                                    {
                                                        $total = 26;
                                                        $total = $total - $data->total;
                                                    }
                                                }

                                                $grandTotal = $grandTotal + $total;
                                                $grandCount = $grandCount + 26;
                                            @endphp
                                            @if($total != 26) 
                                                {{$total}}<strong style="color:red">/26</strong>
                                            @else 
                                                {{$total}}<strong>/26</strong>
                                            @endif                                    
                                        </td>
                                    </tr>
                                    <tr class="tableset">
                                        <td class="tableset2" style="width:50%"><strong>Mechanical:</strong></td>
                                        <td class="tableset2">
                                            @php 
                                                foreach($sector_mechanical AS $data)
                                                {
                                                    if($s->id == $data->sector_id)
                                                    {
                                                        $total = 14;
                                                        $total = $total - $data->total;
                                                    }
                                                }

                                                $grandTotal = $grandTotal + $total;
                                                $grandCount = $grandCount + 14;
                                            @endphp
                                            @if($total != 14) 
                                                {{$total}}<strong style="color:red">/14</strong>
                                            @else 
                                                {{$total}}<strong>/14</strong>
                                            @endif                                    
                                        </td>
                                    </tr>
                                    <tr class="tableset">
                                        <td class="tableset2" style="width:50%"><strong>Electrical:</strong></td>
                                        <td class="tableset2">
                                            @php 
                                                foreach($sector_electrical AS $data)
                                                {
                                                    if($s->id == $data->sector_id)
                                                    {
                                                        $total = 13;
                                                        $total = $total - $data->total;
                                                    }
                                                }

                                                $grandTotal = $grandTotal + $total;
                                                $grandCount = $grandCount + 13;
                                            @endphp
                                            @if($total != 13) 
                                                {{$total}}<strong style="color:red">/13</strong>
                                            @else 
                                                {{$total}}<strong>/13</strong>
                                            @endif                                    
                                        </td>
                                    </tr>
                                    <tr class="tableset">
                                        <td class="tableset2" style="width:50%;"><span class="label label-primary" style="font-size: 14px;">GRAND TOTAL</span></td>
                                        <td class="tableset2">
                                            <span class="label label-primary" style="font-size: 14px;">{{$grandTotal}}/{{$grandCount}} </span>                                
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        @endforeach
                    </div>                    

                    </div>
                </div>

            </div>      
            <br>    
        </section><!-- /.content -->
        
    </div>
</div><!-- /.content-wrapper -->

@endsection
