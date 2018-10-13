@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-12">
             <h3>Create A new shipping Request</h3>
             <hr>
        </div>
        <div class="col-md-12">         
            <form action="/bookings/create" method="post">
                <div class="form-group">    
                    <label for="departure_time">Shipping Date:</label>
                    <input type="text" class="form-control datetimepicker" name="departure_time" value="{{ $date }}">                    
                </div>
                <div class="row">
                    <div class="form-group col-md-6">    
                        <label for="depaturePort">Departure port:</label>
                            <select class="form-control" name="depature_port" id="deparutePort">
                            <option>PORT A</option>
                                <option>PORT B</option>
                                <option>PORT C</option>
                                <option>PORT D</option>
                                <option>PORT E</option>
                            </select>                    
                    </div>
                    <div class="form-group col-md-6">    
                        <label for="departure_time">Arrival port:</label>
                            <select class="form-control" name="depature_port" id="deparutePort">
                                <option>PORT A</option>
                                <option>PORT B</option>
                                <option>PORT C</option>
                                <option>PORT D</option>
                                <option>PORT E</option>
                            </select>                     
                    </div>
                </div>
                
                <div class="form-group">    
                    <label for="weight">Shipping Weight (KG):</label>
                    <input type="text" class="form-control" name="weight" value="{{ $weight }}">                    
                </div>
                <div class="form-group">    
                    <label for="details">Shipping Details</label>
                    <textarea class="form-control" id="details" rows="3" value="{{ $weight }}"></textarea>                 
                </div>
                
                <div class="col-md-12">
                    <h3>Cost and status</h3>
                    <hr>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">    
                        <label for="approval_status">Approval Status</label>
                            <select class="form-control" name="approval_status" id="approval_status">
                            <option>Approved</option>
                                <option>Rejected</option>
                                <option>Deliverd</option>
                                <option>In progress</option>
                            </select>                    
                    </div>
                    <div class="form-group col-md-6">    
                        <label for="departure_time">Container ID</label>
                            <select class="form-control" name="container_id" id="container_id">
                                <option>PORT A</option>
                                <option>PORT B</option>
                                <option>PORT C</option>
                                <option>PORT D</option>
                                <option>PORT E</option>
                            </select>                     
                    </div>
                </div>

                <input type="submit" class="btn btn-primary" value="Create">
            </form>
        </div>
        <!-- <div class="col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading">Available Dates</div>                  
                <table class="table">
                    <tr>
                        <th>Departure Time</th>
                        <th>Ship Name</th>
                        <th>Port</th>
                        <th>WareHouse</th>
                        <th>Action</th>                        
                    </tr>
                    @foreach ($schedules as $schedule)
                    <tr class="{{ $date->format('Y-m-d') == $schedule->departure_time->format('Y-m-d') ? "success" : "" }}">
                        <td>{{ $schedule->departure_time->format('jS \\of F Y h:i:s A') }}</td>
                        <td>{{ $schedule->ship->name }}</td>
                        <td>{{ $schedule->departure_port }}</td>
                        <td>{{ $schedule->warehouse }}</td>
                        <td>
                            <a href="/bookings/create/{{ $schedule->id }}" class="btn btn-primary">Book</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div> -->
    </div>
</div>
@endsection
