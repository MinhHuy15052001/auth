@extends('master')

@section('content')

@if($errors->any())

<div class="alert alert-danger">
    <ul>
    @foreach($errors->all() as $error)

        <li>{{ $error }}</li>

    @endforeach
    </ul>
</div>

@endif

<div class="card">
    <div class="card-header">Add Worker</div>
    <div class="card-body">
        <form method="post" action="{{ route('workers.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Potision</label>
                <div class="col-sm-10">
                    <input type="text" name="potision" class="form-control" />
                </div>
            </div>
            <div class="row mb-4">
            <label class="col-sm-2 col-label-form">Salary</label>
                <div class="col-sm-10">
                    <input type="text" name="salary" class="form-control" />
                </div>
            </div>
            <div class="row mb-4">
            <label class="col-sm-2 col-label-form">Work at</label>
                <div class="col-sm-10">
                    <input type="text" name="work_at" class="form-control" />
                </div>
            </div>
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Add" />
            </div>
        </form>
    </div>
</div>

@endsection('content')
