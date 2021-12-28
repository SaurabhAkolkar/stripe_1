@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card" style="width:35rem;margin:auto;">
        <div class="card-body">
            <form action="{{route('plan.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="plan name">Plan Name : </label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Plan Name">
                </div>
                <div class="form-group">
                    <label for="cost">Cost : </label>
                    <input type="text" class="form-control" name="cost" placeholder="Enter Cost">
                </div>
                <div class="form-group">
                    <label for="cost">Plan Description : </label>
                    <input type="text" class="form-control" name="description" placeholder="Enter Description">
                </div>
                <button type="submit" class="btn btn-primary float-right">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection