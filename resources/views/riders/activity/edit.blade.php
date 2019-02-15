 @extends('riders.layouts')

@section('title')
Edit Activity
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
                            <i class="fa fa-users"></i>Edit Activity                             
                        </div>
                    </div>
                        <div class="content">
                        <div class="grid grid-2"></div>
                        <div class="grid grid-5">
                             {{ Form::open(['route'=>['orders.activity.update',$activity->id],'method'=>'PUT', 'class' => 'form-horizontal']) }}
                            <div class="form-row">
                                <div class="label"></div>
                                <div class="input">
                                   <input type="hidden" name="order_id" class="icon large"  value="{{$activity->order_id}}"   />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="label">Description:</div>
                             
                               <div class="input">
                                   <input type="text" name="description" class="icon large" value="{{$activity->description}}"    />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="label">Current Location:</div>
                                <div class="input">
                                   <input type="text" name="current_location" class="icon large"  value="{{$activity->current_location}}"   />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="label">Current LGA:</div>
                                 <select class=" " name="current_lga_id"    > 
                                    <option value="{{$activity->current_lga_id}}">{{ $activity->current_lga->name }}</option>
                                    @foreach($lgas as $lga)
                                    <option value="{{$lga->id}}">{{$lga->name}}</option>
                                    @endforeach                        
                                     
                                </select>
                            </div>
                            <div class="form-row">
                                <div class="label">Next Location :</div>
                                <div class="input">
                                   <input type="text" name="next_location" class="icon large" value="{{$activity->next_location}}"  />
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="label">Next LGA :</div>
                                <select class=" " name="next_lga_id"    > 
                                     <option value="{{$activity->next_lga_id}}">{{ $activity->next_lga->name }}</option>
                                    @foreach($lgas as $lga)
                                    <option value="{{$lga->id}}">{{$lga->name}}</option>
                                    @endforeach 
                                    
                                     
                                </select>
                            </div>

                            <div class="form-row">
                                <div class="label">Expected Delivery Date :</div>
                                <div class="input">
                                   <input type="date" name="expected_delivery_date" class="icon large" value="{{$activity->expected_delivery_date}}"  />
                                </div>
                            </div>
                            
                            <div class="form-row">                                 
                                <div class="input">
                                   <button type="submit" class="btn btn-mini btn-info" >Submit</button>
                                </div>

                            </div>
                         {{ Form::close() }}
                        </div>
                        </div>
                         <!--   <button class="btn btn-small btn-inverse" ><i class="fa fa-cogs"></i> Close in 20 Seconds</button>-->

                </div>
            </div>
    
@endsection