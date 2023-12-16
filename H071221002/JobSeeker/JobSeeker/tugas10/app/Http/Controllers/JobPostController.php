<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobPost;

class JobPostController extends Controller
{
    public function index()
    {
        $jobPosts = JobPost::all();
        return view('job_posts.index', ['jobPosts' => $jobPosts]);
    }
    public function index1()
    {
        $jobPosts = JobPost::all();
        return view('pelamar.index', ['jobPosts' => $jobPosts]);    
    }

    public function create()
    {
        return view('job_posts.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'position' => 'required',
            'location' => 'required',
            'job_type' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'description' => 'required',
            'salary' => 'required',
        ]);

        JobPost::create($validatedData);

        return redirect()->route('job_posts.index')
            ->with('success', 'Job Post created successfully');
    }

    public function show(JobPost $jobPost)
    {
        return view('job_posts.show', compact('jobPost'));
    }
    public function show1(JobPost $jobPost)
    {
        return view('pelamar.show', compact('jobPost'));
    }

    public function edit(JobPost $jobPost)
    {
        return view('job_posts.edit', compact('jobPost'));
    }

    public function update(Request $request, JobPost $jobPost)
    {
        $validatedData = $request->validate([
            'position' => 'required',
            'location' => 'required',
            'job_type' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'description' => 'required',
            'salary' => 'required',
        ]);

        $jobPost->update($validatedData);

        return redirect()->route('job_posts.index')
            ->with('success', 'Job Post updated successfully');
    }

    public function destroy(JobPost $jobPost)
    {
        $jobPost->delete();

        return redirect()->route('job_posts.index')
            ->with('success', 'Job Post deleted successfully');
    }
}
