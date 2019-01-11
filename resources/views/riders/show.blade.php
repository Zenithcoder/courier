 @extends('riders.layouts')

@section('title')
Order Details
@endsection

@section('content')



<div id="main">
                 
                <div class="margin-container">
                    <!-- Project Contribution -->
                     
                    <div class="clearfix"></div>
                    <!-- Data Table -->
                    <div class="dashboard-widget">
                        <div class="title">
                            <i class="fa fa-users"></i>Order
                             
                        </div>
                    </div>
                        <div class="content">
                            <div class="data-table">
                        <table>
                            <tbody class="grid grid-5">
                                 
                                <tr>
                                     <td>pickup_address</td>
                                    <td>{{$order->pickup_address}}</td>
                                </tr>

                                <tr>
                                     <td>pickup_lga_id</td>
                                    <td>{{$order->pickup_lga->name}}</td>
                                </tr>

                                <tr>
                                     <td>drop_off_address</td>
                                    <td>{{$order->drop_off_address}}</td>
                                </tr>

                                <tr>
                                     <td>drop_off_lga_id</td>
                                    <td>{{$order->drop_off_lga->name}}</td>
                                </tr>

                                <tr>
                                     <td>amount</td>
                                    <td>{{$order->amount}}</td>
                                </tr>

                                <tr>
                                     <td>status</td>
                                    <td>{{$order->status}}</td>
                                </tr>

                                <tr>
                                     <td>description</td>
                                    <td>{{$order->description}}</td>
                                </tr>

                                <tr>
                                     <td>weight</td>
                                    <td>{{$order->weight}}</td>
                                </tr>

                                <tr>
                                     <td>tracking_number</td>
                                    <td>{{$order->tracking_number}}</td>
                                </tr>

                                <tr>
                                     <td>recipient_name</td>
                                    <td>{{$order->recipient_name}}</td>
                                </tr>

                                <tr>
                                     <td>recipient_phone_number</td>
                                    <td>{{$order->recipient_phone_number}}</td>
                                </tr>

                                <tr>
                                     <td>payment_status</td>
                                    <td>{{$order->payment_status}}</td>
                                </tr>

                                <tr>
                                     <td>expected_delivery_date</td>
                                    <td>{{$order->expected_delivery_date}}</td>
                                </tr>

                                <tr>
                                     <td>Customer Name</td>
                                    <td>{{$order->customer->name}}</td>
                                </tr>

                                <tr>
                                     <td>Customer Phone</td>
                                    <td>{{$order->customer->phone_number}}</td>
                                </tr>
                                
                            </tbody>
                             <tbody class="grid grid-7"> 
                                <tr>
                                     <td><b>ORDER ACTIVITY</b></td>
                                    <td> </td>
                                </tr>

                                <tr>
                                     <td>Description</td>
                                    <td> Current Location</td>
                                    <td>Current LGA</td>
                                    <td>Next Location</td>
                                    <td>Next LGA</td>
                                    <td> Expected Delivery</td>
                                    <td></td>
                                </tr>
                                @if ($activities == null )
                                    <tr> <td>No Activity</td></tr>
                                @endif
                                @foreach($activities as $activity)
                                <tr>
                                     <td>{{$activity->description}}</td>
                                    <td>{{$activity->current_location}}</td>
                                     <td>{{$activity->current_lga->name}}</td>
                                      <td>{{$activity->next_location}}</td>
                                    <td>{{$activity->next_lga->name}}</td>
                                    <td>{{$activity->expected_delivery_date}}</td>
                                    <td> <button class="btn btn-mini btn-info"><a href="{{route('orders.activity.edit',$activity->id )}} ">Edit</a></button> </td>
                                </tr>
                                @endforeach
                                <tr><td> <button class="btn btn-mini btn-info"><a href=" {{route('orders.activity.create', $order->id)}}">Add</a></button> </td>
                                 </tr>
                             </tbody>
                        </table>
                        </div>

                        </div>
                            
                </div>
            </div>

@endsection