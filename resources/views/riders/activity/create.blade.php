 @extends('riders.layouts')

@section('title')
Create Activity
@endsection

@section('content')

<div id="main">
                 
                <div class="margin-container">
                    <!-- Project Contribution -->
                     
                    <div class="clearfix"></div>
                     <p>@if($message =Session::get('success'))
                        <div class="alert alert-success">
                      <p>
                        {{$message}}
                      </p>
                    </div>
                    @endif</p>
                                        <!-- Data Table -->
                    <div class="dashboard-widget">
                        <div class="title">
                            <i class="fa fa-users"></i>Create Activity                             
                        </div>
                    </div>
                        <div class="content">
                        <div class="grid grid-2"></div>
                        <div class="grid grid-5">
                            <form method="post" action="{{route('orders.activity.store')}} " >
                                 {{ csrf_field() }}
                            <div class="form-row">
                                <div class="label"></div>
                                <div class="input">
                                   <input type="hidden" name="order_id" class="icon large"  value="{{$id}}"   />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="label">Description:</div>
                             
                               <div class="input">
                                   <input type="text" name="description" class="icon large"    />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="label">Current Location:</div>
                                <div class="input">
                                   <input type="text" name="current_location" class="icon large"    />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="label">Current LGA:</div>
                                 <select class=" " name="current_lga_id" > 
                                    @foreach($lgas as $lga)
                                    <option value="{{$lga->id}}">{{$lga->name}}</option>
                                    @endforeach                        
                                     
                                </select>
                            </div>
                            <div class="form-row">
                                <div class="label">Next Location :</div>
                                <div class="input">
                                   <input type="text" name="next_location" class="icon large"  />
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="label">Next LGA :</div>
                                <select class=" " name="next_lga_id" > 
                                    @foreach($lgas as $lga)
                                    <option value="{{$lga->id}}">{{$lga->name}}</option>
                                    @endforeach 
                                    
                                     
                                </select>
                            </div>

                            <div class="form-row">
                                <div class="label">Expected Delivery Date :</div>
                                <div class="input">
                                   <input type="date" name="expected_delivery_date" class="icon large"  />
                                </div>
                            </div>
                            
                            <div class="form-row">                                 
                                <div class="input">
                                   <button type="submit" class="btn btn-mini btn-info" id="notification-close">Submit</button>
                                </div>

                            </div>
                        </form>
                        </div>
                        </div>
                         <!--   <button class="btn btn-small btn-inverse" ><i class="fa fa-cogs"></i> Close in 20 Seconds</button>-->

                </div>
            </div>
    
@endsection