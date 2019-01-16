 @extends('layouts.header')

@section('title')
All Orders
@endsection

@section('content')

<div id="main">
                 
                <div class="margin-container">
                    <!-- Project Contribution -->
                     
                    <div class="clearfix"></div>
                    <!-- Data Table -->
                    <div class="dashboard-widget">
                        <div class="title">
                            <i class="fa fa-users"></i>All Orders
                             
                        </div>

                         <p>@if($message =Session::get('success'))
                        <div class="alert alert-success">
                      <p>
                        {{$message}}
                      </p>
                    </div>
                    @endif</p>
                        <div class="content">
                            <div class="data-table">
                                <table>
                                    <tbody>
                                        <tr>
                                             <th><i class="fa fa-sort"></i>Tracking No.</th><th><i class="fa fa-sort"></i>Pickup</th><th><i class="fa fa-sort"></i>Dropoff</th><th class="minor">status</th><th class="minor">Recipient_Name</th><th class="minor">Recipient_No</th><th class="minor">Payment_status</th><th class="minor">AssigningOrder</th> <th></th><th></th>
                                        </tr>
                                    @foreach($orders as $order)
                                        <tr>
                                             <td>{{$order->tracking_number}}</td><td>{{$order->pickup_address}}</td><td><span class="text-dollar">{{$order->drop_off_address}}</span></td><td class="minor"> {{$order->status}}</td><td>{{$order->recipient_name}}</td><td>{{$order->recipient_phone_number}}</td>
                                             <td>{{$order->payment_status}}</td>
                                             {{ Form::open(['route'=>['riders.orders.assign',$order->id],'method'=>'PUT', 'class' => 'form-horizontal']) }}
                                             <td><select class=" form-control" name="rider_id" >
                                                @foreach($riders as $rider)
                                              <option value="{{$rider->id}} ">{{$rider->name}}</option>
                                              @endforeach
                                               </select></td>                
                                             <td> 

                                             </td>
                                               <td>
                                                   
                                                <button class="btn btn-mini btn-info" type="submit">Assign</button>
                                                       {{ Form::close() }}
                                            </td>
                                        </tr>
                                     @endforeach    
                                    </tbody>
                                </table>
                            </div>
                            <div class="divider"></div>
                               {{$orders->links()}}
                            <div class="clearfix"></div>
                        </div>
                    </div>
                 
                    <!-- End -->
                </div>
            </div>

@endsection