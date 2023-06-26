<div class="col-md-12">
    @if(request()->session()->get('UserType') == 'Admin')
        <a href="{{route('Community.edit', $community[0]->id)}}" title="Edit Asset">
            <img src="/images/fleet/icons/edit.png" alt="error" style="width:23px; height:23px; float: right">
        </a>
    @endif
    @if($community[0]->deleted != 'Yes')
        <a href="{{route('Community.images', $community[0]->id)}}" title="View Assessment Images">
            <img src="/images/fleet/icons/camera.png" alt="error" style="width:23px; height:23px; float: right; margin-right:10px">
        </a>

        <a href="{{route('Community.notes', $community[0]->id)}}" title="Notes">
            <img src="/images/fleet/icons/notes.png" alt="error" style="width:23px; height:23px; float: right; margin-right:10px">
        </a>

        <a href="{{route('Community.file', $community[0]->id)}}" title="Documents">
            <img src="/images/fleet/icons/docs.png" alt="error" style="width:23px; height:23px; float: right; margin-right:10px">
        </a>

        @if(request()->session()->get('UserType') == 'Admin')
            <a href="{{route('CommunityAssessment.create', $community[0]->id)}}" title="Schedule Assessment">
                <img src="/images/fleet/icons/calendar.png" alt="error" style="width:23px; height:23px; float: right; margin-right:10px">
            </a>
        @endif

        <a href="/FAR/request/{{$community[0]->id}}/Community Asset" title="Request Disposal, Impairment Or Improvement">
            <img src="/images/fleet/icons/request.png" alt="error" style="width:25px; height:25px; float: right; margin-right:10px">
        </a>
    @endif
</div>

<br>
<br>
<div class="alert" id="sure" style="display:none; background-color:#A42420;">
    <span style="color:white" class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong style="color:white">You sure want to delete this Asset?</strong>
    <form action="{{ route('Community.destroy',$community[0]->id) }}" style="float:right; margin-top:-8px" method="post">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn" style="background-color:#D4AC0A;">Delete</button>
    </form>
</div>

<div class="col-md-6">
    <h2 style="color:black;">Asset Details</h2>
    <br>
    <table style="width:100%">
        <tbody>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Primary Asset ID:</strong></td>
                <td class="tableset2" >{{$group[0]->primary_id}}</td>
            </tr>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Primary Asset Description:</strong></td>
                <td class="tableset2" >{{$group[0]->description}}</td>
            </tr>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Asset ID:</strong></td>
                <td class="tableset2" >{{$community[0]->asset_id}}</td>
            </tr>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Asset Parent ID:</strong></td>
                <td class="tableset2" >{{$community[0]->parent_asset_id}}</td>
            </tr>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Asset Description:</strong></td>
                <td class="tableset2" >{{$community[0]->description}}</td>
            </tr>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Status:</strong></td>
                <td class="tableset2">
                    @if($community[0]->status == 'Active')                                                
                        <span class="label label-success" style="margin-left:10px">Active - In Use</span>
                    @elseif($community[0]->status == 'Withdrawn')
                        <span class="label label-danger" style="margin-left:10px">Withdrawn</span>                                              
                    @endif
                </td>
            </tr>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Asset Class:</strong></td>
                <td class="tableset2" >{{$community[0]->a1}}</td>
            </tr>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Asset Type:</strong></td>
                <td class="tableset2" >{{$community[0]->a2}}</td>
            </tr>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Asset Sub Type:</strong></td>
                <td class="tableset2" >{{$community[0]->subtype}}</td>
            </tr>                                                                                                                
        </tbody>
    </table>
    
    <br>
    <h2 style="color:black;">Custodianship and Accounting</h2>
    <br>
    <table style="width:100%">
        <tbody>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Custodian Org Code:</strong></td>
                <td class="tableset2">5</td>
            </tr>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Custodian Directorate:</strong></td>
                <td class="tableset2">{{$community[0]->d1}}</td>
            </tr>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Custodian Sub-Directortate:</strong></td>
                <td class="tableset2">{{$community[0]->d2}}</td>
            </tr>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Custodian Department:</strong></td>
                <td class="tableset2">@if(count($community)) @if(isset($community[0]->d3)) {{$community[0]->d3}} @endif @endif</td>
            </tr>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Custodian Responsible Official:</strong></td>
                <td class="tableset2">{{$custodianship[0]->responsible_official}}</td>
            </tr>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Custodian Email:</strong></td>
                <td class="tableset2">{{$custodianship[0]->custodian_email}}</td>
            </tr>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Custodian Contact Number:</strong></td>
                <td class="tableset2">{{$custodianship[0]->custodian_contact_number}}</td>
            </tr>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Capital Accountant Name:</strong></td>
                <td class="tableset2">{{$custodianship[0]->capital_accountant_name}}</td>
            </tr>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Capital Accountant Email:</strong></td>
                <td class="tableset2">{{$custodianship[0]->capital_accountant_email}}</td>
            </tr>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Operating Accountant Name:</strong></td>
                <td class="tableset2">{{$custodianship[0]->operating_accountant_name}}</td>
            </tr>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Operating Accountant Email:</strong></td>
                <td class="tableset2">{{$custodianship[0]->operating_accountant_email}}</td>
            </tr>
        </tbody>
    </table>

    <br>
    <h2 style="color:black;">Asset Property Data</h2>
    <br>
    <table style="width:100%">
        <tbody>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Allotment:</strong></td>
                <td class="tableset2">{{$community[0]->allotment_township}}</td>
            </tr>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Erf Number 1:</strong></td>
                <td class="tableset2">{{$community[0]->erf_number}}</td>
            </tr> 
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Erf Number 2:</strong></td>
                <td class="tableset2">{{$community[0]->erf_number2}}</td>
            </tr>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Ward:</strong></td>
                <td class="tableset2">{{$community[0]->ward}}</td>
            </tr>  
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Portion Number:</strong></td>
                <td class="tableset2">{{$community[0]->portion_number}}</td>
            </tr> 
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Complex:</strong></td>
                <td class="tableset2">{{$community[0]->complex}}</td>
            </tr> 
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Building Name:</strong></td>
                <td class="tableset2">{{$community[0]->building_name}}</td>
            </tr> 
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Street Number:</strong></td>
                <td class="tableset2">{{$community[0]->street_no}}</td>
            </tr> 
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Street Name:</strong></td>
                <td class="tableset2">{{$community[0]->street_name}}</td>
            </tr>                                         
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Street Intersection:</strong></td>
                <td class="tableset2">{{$community[0]->intersection}}</td>
            </tr> 
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Suburb:</strong></td>
                <td class="tableset2">{{$community[0]->suburb}}</td>
            </tr> 
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Town:</strong></td>
                <td class="tableset2">{{$community[0]->city_town}}</td>
            </tr> 
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Latitude:</strong></td>
                <td class="tableset2">{{$community[0]->latitude}}</td>
            </tr>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Longitude:</strong></td>
                <td class="tableset2">{{$community[0]->longitude}}</td>
            </tr> 
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Ownership Reference, Serial Number:</strong></td>
                <td class="tableset2">{{$community[0]->serial_number}}</td>
            </tr>                                          
        </tbody>
    </table>
</div>
<div class="col-md-6" >
    <h2 style="color:black;">Financial Data</h2>
    <br>
    <table style="width:100%">
        <tbody>    
            <tr class="tableset">
                <td class="tableset2" style="width:40%">
                    <strong>List of Components:</strong>
                </td>
                <td class="tableset2">
                    @foreach($financialType as $f)
                      <a href="#" data-toggle="modal" data-target="#exampleModal{{$f->type}}">{{$f->type}}</a><br>
                    @endforeach
                </td>
            </tr>    
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Date in Use:</strong></td>
                <td class="tableset2">{{$financial[0]->date_in_use}}</td>
            </tr>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Year in Use:</strong></td>
                <td class="tableset2">{{$financial[0]->year_in_use}}</td>
            </tr>
            {{-- <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Asset Life (Months):</strong></td>
                <td class="tableset2">{{$financial[0]->life}}</td>
            </tr>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Remaining Life(Months):</strong></td>
                <td class="tableset2">{{$financial[0]->remaining_life}}</td>
            </tr>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>PRIOR Remaining Life (Months):</strong></td>
                <td class="tableset2">{{$financial[0]->remaining_prior_life}}</td>
            </tr>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Remaining Life Diff:</strong></td>
                <td class="tableset2">{{$financial[0]->remaining_life_diff}}</td>
            </tr> --}}
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Total Cost Prior Years:</strong></td>
                {{-- <td class="tableset2">R @if(is_numeric($financial[0]->total_cost_prior_years)) {{ number_format($financial[0]->total_cost_prior_years, 2) }} @else 0 @endif</td> --}}
                <td class="tableset2">R {{number_format($financialCalculator[0]->total_cost_prior_years, 2)}}</td>
            </tr>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Write Out Total Current Year:</strong></td>
                {{-- <td class="tableset2">R @if(is_numeric($financial[0]->total_current_year)) {{ number_format($financial[0]->total_current_year, 2) }} @else 0 @endif</td> --}}
                <td class="tableset2">R {{number_format($financialCalculator[0]->total_current_year, 2)}}</td>
            </tr>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Costing Total Current Year:</strong></td>
                {{-- <td class="tableset2">R @if(is_numeric($financial[0]->costing_total_current_year)) {{ number_format($financial[0]->total_current_year, 2) }} @else 0 @endif</td> --}}
                <td class="tableset2">R {{number_format($financialCalculator[0]->costing_total_current_year, 2)}}</td>
            </tr>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Total Cost (All Years):</strong></td>
                {{-- <td class="tableset2">R @if(is_numeric($financial[0]->total_cost)) {{ number_format($financial[0]->total_cost, 2) }} @else 0 @endif</td> --}}
                <td class="tableset2">R {{number_format($financialCalculator[0]->total_cost, 2)}}</td>
            </tr>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Accumulated Depreciation Total Prior Years:</strong></td>
                {{-- <td class="tableset2">R @if(is_numeric($financial[0]->accumulated_depreciation)) {{ number_format($financial[0]->accumulated_depreciation, 2) }} @else 0 @endif</td> --}}
                <td class="tableset2">R {{number_format($financialCalculator[0]->accumulated_depreciation, 2)}}</td>
            </tr>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Depreciation Total Prior Year Cost:</strong></td>
                {{-- <td class="tableset2">R @if(is_numeric($financial[0]->depreciation_total_prior)) {{ number_format($financial[0]->depreciation_total_prior, 2) }} @else 0 @endif</td> --}}
                <td class="tableset2">R {{number_format($financialCalculator[0]->depreciation_total_prior, 2)}}</td>
            </tr>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Depreciation Total Additions:</strong></td>
                {{-- <td class="tableset2">R @if(is_numeric($financial[0]->depreciation_total_additions)) {{ number_format($financial[0]->depreciation_total_additions, 2) }} @else 0 @endif</td> --}}
                <td class="tableset2">R {{number_format($financialCalculator[0]->depreciation_total_additions, 2)}}</td>
            </tr>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Depreciation Total:</strong></td>
                {{-- <td class="tableset2">R @if(is_numeric($financial[0]->depreciation_total)) {{ number_format($financial[0]->depreciation_total, 2) }} @else 0 @endif</td> --}}
                <td class="tableset2">R {{number_format($financialCalculator[0]->depreciation_total, 2)}}</td>
            </tr>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Total Accumulated Depreciation:</strong></td>
                {{-- <td class="tableset2">R @if(is_numeric($financial[0]->total_accumulated_depreciation)) {{ number_format($financial[0]->total_accumulated_depreciation, 2) }} @else 0 @endif</td> --}}
                <td class="tableset2">R {{number_format($financialCalculator[0]->total_accumulated_depreciation, 2)}}</td>
            </tr>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Book Value:</strong></td>
                {{-- <td class="tableset2">R @if(is_numeric($financial[0]->book_value)) {{ number_format($financial[0]->book_value, 2) }} @else 0 @endif</td> --}}
                <td class="tableset2">R {{number_format($financialCalculator[0]->book_value, 2)}}</td>
            </tr>
        </tbody>
    </table>

    <br>
    <h2 style="color:black;">Community Asset Files/Documents</h2>
    <br>
    <table style="width:100%">
        <tbody>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Locality Plan:</strong></td>
                <td class="tableset2">
                  @if(count($file))
                    @if($file[0]->t1 == 'Yes')
                      <span class="label label-success">Yes</span>
                    @else 
                      <span class="label label-danger">No</span>
                    @endif
                  @else 
                    <span class="label label-danger">No</span>
                  @endif
                </td>
            </tr>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Street View Diagram:</strong></td>
                <td class="tableset2">
                  @if(count($file2))
                    @if($file2[0]->t2 == 'Yes')
                      <span class="label label-success">Yes</span>
                    @else 
                      <span class="label label-danger">No</span>
                    @endif
                  @else 
                    <span class="label label-danger">No</span>
                  @endif
                </td>
            </tr>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Surveyor General Diagram:</strong></td>
                <td class="tableset2">
                  @if(count($file3))
                    @if($file3[0]->t3 == 'Yes')
                      <span class="label label-success">Yes</span>
                    @else 
                      <span class="label label-danger">No</span>
                    @endif
                  @else 
                    <span class="label label-danger">No</span>
                  @endif
                </td>
            </tr>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Title Deed:</strong></td>
                <td class="tableset2">
                  @if(count($file4))
                    @if($file4[0]->t4 == 'Yes')
                      <span class="label label-success">Yes</span>
                    @else 
                      <span class="label label-danger">No</span>
                    @endif
                  @else 
                    <span class="label label-danger">No</span>
                  @endif
                </td>
            </tr>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Valuation Certificate:</strong></td>
                <td class="tableset2">
                  @if(count($file5))
                    @if($file5[0]->t5 == 'Yes')
                      <span class="label label-success">Yes</span>
                    @else 
                      <span class="label label-danger">No</span>
                    @endif
                  @else 
                    <span class="label label-danger">No</span>
                  @endif
                </td>
            </tr>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Zoning Diagram:</strong></td>
                <td class="tableset2">
                  @if(count($file6))
                    @if($file6[0]->t6 == 'Yes')
                      <span class="label label-success">Yes</span>
                    @else 
                      <span class="label label-danger">No</span>
                    @endif
                  @else 
                    <span class="label label-danger">No</span>
                  @endif
                </td>
            </tr>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Building Plans:</strong></td>
                <td class="tableset2">
                  @if(count($file7))
                    @if($file7[0]->t7 == 'Yes')
                      <span class="label label-success">Yes</span>
                    @else 
                      <span class="label label-danger">No</span>
                    @endif
                  @else 
                    <span class="label label-danger">No</span>
                  @endif
                </td>
            </tr>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Site Development Plans:</strong></td>
                <td class="tableset2">
                  @if(count($file8))
                    @if($file8[0]->t8 == 'Yes')
                      <span class="label label-success">Yes</span>
                    @else 
                      <span class="label label-danger">No</span>
                    @endif
                  @else 
                    <span class="label label-danger">No</span>
                  @endif
                </td>
            </tr>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Engineering Certifications:</strong></td>
                <td class="tableset2">
                  @if(count($file9))
                    @if($file9[0]->t9 == 'Yes')
                      <span class="label label-success">Yes</span>
                    @else 
                      <span class="label label-danger">No</span>
                    @endif
                  @else 
                    <span class="label label-danger">No</span>
                  @endif
                </td>
            </tr>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Occupancy Certificate:</strong></td>
                <td class="tableset2">
                  @if(count($file10))
                    @if($file10[0]->t10 == 'Yes')
                      <span class="label label-success">Yes</span>
                    @else 
                      <span class="label label-danger">No</span>
                    @endif
                  @else 
                    <span class="label label-danger">No</span>
                  @endif
                </td>
            </tr>
            <tr class="tableset">
                <td class="tableset2" style="width:40%"><strong>Amendment Form:</strong></td>
                <td class="tableset2">
                  @if(count($file11))
                    @if($file11[0]->t11 == 'Yes')
                      <span class="label label-success">Yes</span>
                    @else 
                      <span class="label label-danger">No</span>
                    @endif
                  @else 
                    <span class="label label-danger">No</span>
                  @endif
                </td>
            </tr>
        </tbody>
    </table>
    
    <br>
    <h2 style="color:black;">Projects Linked to Asset Development</h2>
    <br>
    <table style="width:100%">
        <tbody>
            @foreach ($project AS $p)
              <tr class="tableset">
                  <td class="tableset2" style="width:40%"><strong>Project ID: <br> Description:</strong></td>
                  <td class="tableset2">{{$p->project_id}} <br> {{$p->description}}</td>
              </tr>
            @endforeach
        </tbody>
    </table>
</div>