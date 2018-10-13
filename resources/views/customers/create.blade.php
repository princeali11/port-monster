@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create new customer</div>                
                <div class="panel-body">
                    <form method="POST" action="/customers" class="form-horizontal">
                    {{ csrf_field() }}
                        @include('customers.partials.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
