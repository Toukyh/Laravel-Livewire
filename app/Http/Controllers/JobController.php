<?php

namespace App\Http\Controllers;


use App\Models\Job;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Redirect;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::online()->latest()->get();

        return view('jobs.index', compact('jobs'));
    }

    public function show(Job $id)
    {
        return view('jobs.show', compact('id'));
    }
    public function store(Request $request)
    {
        if (Gate::denies('access-client')) {
            abort(403);
        }

        Job::create($request->all());
        return Redirect::route('home');
    }
    public function create()
    {
        if (Gate::denies('access-client')) {
            return Redirect::route('home');
        }
        return view('jobs.create');
    }
    public function destroy(Job $id)
    {
        $job = Job::find($id);
        $job->each->delete();
        // dd($jobs);

        return Redirect::route('jobs.index');
    }
    public function edit($job)
    {
        $job = Job::find($job);
        return view('jobs.edit', compact('job'));
    }
    public function update(Request $request, $id)
    {
        $job = Job::find($id);
        $job->title = $request->title;
        $job->price = $request->price;
        $job->description = $request->description;
        $job->save();

        return redirect('jobs');
    }
}
