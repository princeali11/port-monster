@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-12">
             <h3>Create A new shipping Request</h3>
             <hr>
        </div>
        <div class="col-md-12">         
            <form action="{{route('bookings.store')}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">    
                    <label for="shipping_date">Shipping Date:</label>
                    <input type="text" class="form-control datetimepicker" required name="shipping_date" value="">
                </div>
                <div class="row">
                    <div class="form-group col-md-6">    
                        <label for="depaturePort">Departure port:</label>
                            <select class="form-control" required name="depature_port" id="depaturePort">
                                <option selected></option>
                                @foreach($ports as $port)
                                    <option value="{{ $port->id }}">{{ $port->name }}</option>
                                @endforeach
                            </select>                    
                    </div>
                    <div class="form-group col-md-6">    
                        <label for="arrival_port">Arrival port:</label>
                            <select class="form-control" required name="arrival_port" id="arrival_port">
                                <option selected></option>
                                @foreach($ports as $port)
                                    <option value="{{ $port->id }}">{{ $port->name }}</option>
                                @endforeach
                            </select>                     
                    </div>
                </div>
                
                <div class="form-group">    
                    <label for="weight">Shipping Weight (KG):</label>
                    <input type="text" class="form-control" required name="weight" value="">
                </div>
                <div class="form-group">    
                    <label for="details">Shipping Details</label>
                    <textarea class="form-control" id="details" rows="3" name="details"></textarea>
                </div>
                
                <div class="col-md-12">
                    <h3>Cost and status</h3>
                    <hr>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">    
                        <label for="approval_status">Approval Status</label>
                            <select class="form-control"
                                    {{ auth()->user()->user_type != 'staff' ? 'disabled': ''}}
                                    name="approval_status" id="approval_status">
                                <option selected></option>
                                <option>Approved</option>
                                <option>Rejected</option>
                                <option>Delivered</option>
                                <option>In progress</option>
                            </select>                    
                    </div>
                    <div class="form-group col-md-6">    
                        <label for="departure_time">Container ID</label>
                            <select class="form-control"
                                    {{ auth()->user()->user_type != 'staff' ? 'disabled': ''}}
                                    name="container_id" id="container_id">
                                <option selected></option>
                                @foreach($containers as $container)
                                    <option value="{{ $port->id }}">Container ({{ $container->id }})</option>
                                @endforeach
                            </select>                     
                    </div>
                </div>

                <input type="submit" class="btn btn-primary" value="Create">
            </form>
        </div>
    </div>
</div>
@endsection
