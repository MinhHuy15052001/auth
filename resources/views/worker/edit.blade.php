@extends('master')

@section('content')

<div class="card">
    <div class="card-header">Edit Worker</div>
    <div class="card-body">
        <form method="post" action="{{ route('workers.update', $worker->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"> Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" value="{{ $worker->name }}" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Postision</label>
                <div class="col-sm-10">
                    <input type="text" name="potision" class="form-control" value="{{ $worker->potision }}" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Salary</label>
                <div class="col-sm-10">
                    <input type="text" name="salary" class="form-control" value="{{ $worker->salary }}" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Work at</label>
                <div class="col-sm-10">
                    <input type="text" name="work_at" class="form-control" value="{{ $worker->work_at }}" />
                </div>
            </div>
            <div class="text-center">
                <input type="hidden" name="hidden_id" value="{{ $worker->id }}" />
                <input type="submit" class="btn btn-primary" value="Edit" />
            </div>
        </form>
    </div>
</div>
<script>
</script>

@endsection('content')
