<div class="grid-row">
    <div class="grid grid-responsive grid-5">
        {!! Form::open(["method" => "GET"]) !!}
        <div class="form-row">
            <div class="label">Search:<br><small>(Tracking Number)</small></div>
            <div class="input">
                <i class="fa fa-search"></i><input type="text" class="icon" name="q" placeholder="Tracking Number">
                <button class="btn btn-success btn-small"><i class="fa fa-search"></i> Search</button>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
    <div class="grid grid-responsive grid-7">

        <div class="grid grid-responsive grid-2">
            <button class="btn btn-small btn-info" id="filter"><i class="fa fa-filter"></i> Filter <i id="filterIcon" class="fa fa-chevron-down"></i></button>
        </div>

        <div id="filterForm" class="grid grid-responsive grid-10" style="display: none;">
            {!! Form::open(["method" => "GET"]) !!}
            <div class="grid grid-responsive grid-12">
                <div class="form-row ">
                    <div class="label">Order Status:</div>
                    <div class="input">
                        {!! Form::checkbox('status[]', 'PENDING', false, ["id" => "statusPending"]); !!}{!! Form::label('statusPending', 'Pending') !!}
                        {!! Form::checkbox('status[]', 'EN_ROUTE', false, ["id" => "statusEnRoute"]); !!}{!! Form::label('statusEnRoute', 'En-Route') !!}
                        {!! Form::checkbox('status[]', 'DELIVERED', false, ["id" => "statusDelivered"]); !!}{!! Form::label('statusDelivered', 'Delivered') !!}
                        {!! Form::checkbox('status[]', 'CANCELLED', false, ["id" => "statusCancelled"]); !!}{!! Form::label('statusCancelled', 'Cancelled') !!}
                    </div>
                </div>
                <div class="form-row">
                    <div class="label">Payment Status:</div>
                    <div class="input">
                        {!! Form::checkbox('payment_status[]', 'PAID', false, ["id" => "paymentStatusPaid"]); !!}{!! Form::label('paymentStatusPaid', 'Paid') !!}
                        {!! Form::checkbox('payment_status[]', 'FAILED', false, ["id" => "paymentStatusFailed"]); !!}{!! Form::label('paymentStatusFailed', 'Failed') !!}
                    </div>
                </div>
                <div class="form-row">
                    <div class="label">Assigned Status:</div>
                    <div class="input">
                        {!! Form::radio('assigned_status', 'ASSIGNED', false, ["id" => "assignedStatusAssigned"]); !!}{!! Form::label('assignedStatusAssigned', 'Assigned') !!}
                        {!! Form::radio('assigned_status', 'NOT_ASSIGNED', false, ["id" => "assignedStatusNotAssigned"]); !!}{!! Form::label('assignedStatusNotAssigned', 'Not Assigned') !!}
                    </div>
                </div>
                <div class="form-row ">

                    <div class="input">
                        <button class="btn btn-mini btn-success" id="filterGo"><i class="fa fa-search"></i> Go</button>
                        <button class="btn btn-mini btn-error" id="filterReset" type="reset"><i class="fa fa-eraser"></i> Clear</button>

                    </div>
                </div>
            </div>

            {!! Form::close() !!}
        </div>
    </div>
</div>