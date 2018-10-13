@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
             <div class="pull-right">
                <b>Status:</b> <div class="label label-warning">{{ $booking->status }}</div>
            </div>
            <h2>Booking Information</h2>
            
            <hr>
        </div>
        <div class="col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading">Customer Information</div>                
                <div class="panel-body">
                    <h4>{{ $booking->customer->name }}</h4>
                    <table class="table">
                        <tr>
                            <th>Contact</th>
                            <td>{{ $booking->customer->contact }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $booking->customer->email }}</td>
                        </tr>
                        <tr>
                            <th>Company Name</th>
                            <td>{{ $booking->customer->company_name }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="panel panel-primary">
                <div class="panel-heading">Schedule Information</div>                
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <th>Ship Name</th>
                            <td>{{ $booking->schedule->ship->name }}</td>
                        </tr>
                        <tr>
                            <th>Ship Register Number</th>
                            <td>{{ $booking->schedule->ship->reg_no }}</td>
                        </tr>
                        <tr>
                            <th>Departure Time</th>
                            <td>{{ $booking->schedule->departure_time->format('jS \\of F Y h:i:s A') }}</td>
                        </tr>
                        <tr>
                            <th>Departure Port</th>
                            <td>{{ $booking->schedule->departure_port }}</td>
                        </tr>
                        <tr>
                            <th>Warehouse details</th>
                            <td>{{ $booking->schedule->warehouse }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">Cargo info</div>                
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <th>Weight</th>
                            <td>{{ $booking->weight }}</td>
                        </tr>
                        <tr>
                            <th>Quantity</th>
                            <td>{{ $booking->quantity }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
