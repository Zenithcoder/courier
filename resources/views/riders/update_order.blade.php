 @extends('riders.layouts')

@section('title')
Update Order
@endsection

@section('content')

<div id="main">
                 
                <div class="margin-container">
                    <!-- Project Contribution -->
                     
                    <div class="clearfix"></div>
                    <!-- Data Table -->
                    <div class="dashboard-widget">
                        <div class="title">
                            <i class="fa fa-users"></i>Update Order                             
                        </div>
                    </div>
                        <div class="content">
                        <div class="grid grid-2"></div>
                        <div class="grid grid-5">
                            <form method="post" action="{{ route('riders.orders.update', $order->id) }}" >
                                 {{csrf_field()}}
                            <div class="form-row">
                                <div class="label">Tracking Number:</div>
                                <div class="input">
                                   <input type="text" class="icon large"   value="{{$order->tracking_number}}" disabled="true" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="label">Amount:</div>
                                <div class="input">
                                   <input type="text" name ="amount" class="icon large"   value="{{$order->amount}}"  />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="label">Status:</div>
                             
                                <select class=" " name="status" >
                                    <option disabled="true" >{{$order->status}} </option>   
                                     @if($order->status == 'PENDING' )
                                        <option value="PENDING">PENDING</option>
                                         <option value="CANCELLED">CANCELLED</option>
                                      @endif                                                    
                                    <option value="EN_ROUTE">EN_ROUTE</option>
                                    <option value="DELIVERED">DELIVERED</option>
                                   
                                     
                                </select>
                            </div>
                            <div class="form-row">
                                <div class="label">Weight:</div>
                                <div class="input">
                                   <input type="text" name="weight" class="icon large"   value="{{$order->weight}}" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="label">Payment Status:</div>
                                 <select class=" " name="payment_status" >
                                    <option disabled="true" >{{$order->payment_status}} </option>   
                                    <option value="FAIL">FAIL</option>
                                    <option value="PAID">PAID</option>
                                    
                                     
                                </select>
                            </div>
                            <div class="form-row">
                                <div class="label">Expected Delivery Date:</div>
                                <div class="input">
                                   <input type="date" name="expected_delivery_date" class="icon large"  value="{{$order->expected_delivery_date}}" />
                                </div>
                            </div>
                            
                            <div class="form-row">                                 
                                <div class="input">
                                   <button type="submit" class="btn btn-mini btn-info" id="notification-close">Update</button>
                                </div>

                            </div>
                        </form>
                        </div>
                        </div>
                         <!--   <button class="btn btn-small btn-inverse" ><i class="fa fa-cogs"></i> Close in 20 Seconds</button>-->

                </div>
            </div>
    
@endsection