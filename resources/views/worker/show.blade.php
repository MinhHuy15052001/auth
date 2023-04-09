@extends('master')

@section('content')

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b>Worker Details</b></div>
            <div class="col col-md-6">
                <a href="{{ route('workers.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Name</b></label>
            <div class="col-sm-10">
                {{ $worker->name }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form">Potision<b></b></label>
            <div class="col-sm-10">
                {{ $worker->potision }}
            </div>
        </div>
        <div class="row mb-4">
            <label class="col-sm-2 col-label-form"><b>Salary</b></label>
            <div class="col-sm-10">
                {{ $worker->salary }}
            </div>
        </div>
        <div class="row mb-4">
        <label class="col-sm-2 col-label-form"><b>Work At</b></label>
            <div class="col-sm-10">
                {{ $worker->work_at }}
            </div>
        </div>
    </div>
</div>

@endsection('content')
