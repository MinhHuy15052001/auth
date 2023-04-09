@extends('master')

@section('content')

@if($message = Session::get('success'))

<div class="alert alert-success">
    {{ $message }}
</div>

@endif

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b>Student Data</b></div>
            <div class="col col-md-6">
                <a href="{{ route('workers.create') }}" class="btn btn-success btn-sm float-end">Add</a>
                <a href="" class="btn btn-success btn-sm float-end">Logout</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <th>Postision</th>
                <th>Salary</th>
                <th>Work at</th>
            </tr>
            @if(count($data) > 0)

                @foreach($data as $row)

                    <tr>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->potision }}</td>
                        <td>{{ $row->salary }}</td>
                        <td>{{ $row->work_at }}</td>
                        <td>
                            <form method="post" action="{{ route('workers.destroy', $row->id) }}">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('workers.show', $row->id) }}" class="btn btn-primary btn-sm">View</a>
                                <a href="{{ route('workers.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <input type="submit" class="btn btn-danger btn-sm" value="Delete" />
                            </form>

                        </td>
                    </tr>

                @endforeach

            @else
                <tr>
                    <td colspan="5" class="text-center">No Data Found</td>
                </tr>
            @endif
        </table>
        {!! $data->links() !!}
    </div>
</div>

@endsection
