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
                @include('bookings.partials.form')
            </form>
        </div>
    </div>
</div>
@endsection
