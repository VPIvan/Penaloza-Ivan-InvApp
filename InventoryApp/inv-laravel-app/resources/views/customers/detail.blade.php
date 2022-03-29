@extends('adminlte::page')

@section('title', 'Customers')

@section('content_header')
    <h1>Customers</h1>
@stop

@section('content')
<div class="card">
    <div class = "card-body">
        <div>
            <div class="h1">
                {{ $customer->fname, lname}}
            </div>
            <dl class="row">
                <dt class="col-sm-3">Email</dt>
                <dd class="col-sm-9">{{ $customer->email }}</dd>

                <dt class="col-sm-3">Phone #</dt>
                <dd class="col-sm-9">{{ $customer->phonenum }}</dd>
            </dl>
        </div>
        <span style="float:right;">
            <a href="{{ route('customer.create') }}" class="btn btn-warning">Update</a>
            <a href="{{ route('customer.destroy',['customer'=>$customer->id]) }}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('submit-form').submit();">Delete</a>
            <form id="submit-form" action="{{ route('customer.destroy',['customer'=>$customer->id]) }}" method="POST" class="hidden">
                @csrf
                @method('DELETE')
            </form>
        </span>
    </div>
</div>
@stop