<?php

namespace App\Http\Controllers;


use App\Models\Job;
use Illuminate\Http\Request;
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
        Job::create($request->all());

        return Redirect::route('home');
    }
    public function create()
    {
        return view('jobs.create');
    }
}
