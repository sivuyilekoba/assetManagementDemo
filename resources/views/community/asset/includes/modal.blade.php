<!-- Modal -->
@foreach ($financialType as $f)
    <div class="modal fade" id="exampleModal{{ $f->type }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">{{ $f->type }}</h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            Date in Use:<br>
                            Year in Use:<br>
                            Asset Life (Months):<br>
                            Remaining Life(Months):<br>
                            PRIOR Remaining Life (Months):<br>
                            Remaining Life Diff:<br>
                            Total Cost Prior Years:<br>
                            Write Out Total Current Year:<br>
                            Costing Total Current Year:<br>
                            Total Cost (All Years):<br>
                            Accumulated Depreciation Total Prior Years:<br>
                            Depreciation Total Prior Year Cost:<br>
                            Depreciation Total Additions:<br>
                            Depreciation Total:<br>
                            Total Accumulated Depreciation:<br>
                            Book Value:<br>
                        </div>
                        <div class="col-md-6">
                            {{ $f->date_in_use }}<br>
                            {{ $f->year_in_use }}<br>
                            X<br>
                            {{ $f->remaining_life }}<br>
                            X<br>
                            X<br>
                            {{ $f->total_cost_prior_years }}<br>
                            {{ $f->total_current_year }}<br>
                            {{ $f->costing_total_current_year }}<br>
                            {{ $f->total_cost }}<br>
                            X<br>
                            X<br>
                            {{ $f->depreciation_total_additions }}<br>
                            {{ $f->depreciation_total }}<br>
                            {{ $f->total_accumulated_depreciation }}<br>
                            {{ $f->book_value }}<br>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endforeach

{{-- @foreach ($request as $d)
    <div class="modal fade" id="requestModal{{ $d->id }}" tabindex="-1" role="dialog"
        aria-labelledby="requestModal{{ $d->id }}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Request Details</h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12"><strong>Date & Time:</strong> {{ $d->dd }}</div>
                        <div class="col-md-12"><strong>Publisher:</strong> {{ $d->name }} {{ $d->surname }}
                        </div>
                        <div class="col-md-12"><strong>Type:</strong> {{ $d->type }}</div>
                        <div class="col-md-12"><strong>Status:</strong> {{ $d->status }}</div>
                        <div class="col-md-12" style="margin-top:10px"><strong>Note:</strong> {{ $d->note }}</div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endforeach --}}
