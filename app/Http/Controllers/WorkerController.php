<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Worker::latest()->paginate(5);

        return view('worker.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('worker.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'    =>  'required',
            'potision'   =>  'required',
            'salary' => 'required|numeric',
            'work_at' => 'required'
        ]);


        $worker = new Worker();

        $worker->name = $request->name;
        $worker->potision = $request->potision;
        $worker->salary = $request->salary;
        $worker->work_at = $request->work_at;

        $worker->save();

        return redirect()->route('workers.index')->with('success', 'Worker Added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Worker $worker)
    {
        return view('worker.show', compact('worker'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Worker $worker)
    {
        return view('worker.edit', compact('worker'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Worker $worker)
    {
        $request->validate([
            'name'    =>  'required',
            'potision'   =>  'required',
            'salary' => 'required|numeric',
            'work_at' => 'required'
        ]);

    

        $worker = Worker::find($request->hidden_id);

        $worker->name = $request->name;
        $worker->potision = $request->potision;
        $worker->salary = $request->salary;
        $worker->work_at = $request->work_at;

        $worker->save();

        return redirect()->route('workers.index')->with('success', 'Worker Data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Worker $worker)
    {
        $worker->delete();

        return redirect()->route('workers.index')->with('success', 'Worker Data deleted successfully');
    }
}
