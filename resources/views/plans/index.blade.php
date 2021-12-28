@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                      <h4 class="alert-heading">{{ Session::get('success') }}</h4>
                    </div>
                @endif
                <div class="card-header"><b>Plans<b> <a href="{{ route('plan.create') }}" class="float-right btn btn-success">Create Plan</a></div>
                <div class="card-body" style="width:25rem;margin:auto;">
                    <ul class="list-group">
                        @foreach($plans as $plan)
                        <li class="list-group-item clearfix">
                            <div class="pull-left">
                                <h5>{{ $plan->name }}</h5>
                                <h5> ₹ {{ number_format($plan->cost, 2) }} / Month</h5>
                                <h5>{{ $plan->description }}</h5>
                                <a href="{{ route('plan.show', $plan->id) }}" class="btn btn-outline-success float-right">Choose</a>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection