<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

$jobs = [
    [
        'id' => 1,
        'title' => 'Associate Software Engineer',
        'salary' => '50,000 BDT',
    ],
    [
        'id' => 2,
        'title' => 'Software Engineer',
        'salary' => '70,000 BDT',
    ],
    [
        'id' => 3,
        'title' => 'Senior Software Engineer',
        'salary' => '100,000 BDT',
    ],
];

Route::get('/', function() {
    return view('home');
});

Route::get('/jobs', function() use($jobs){
    return view('jobs', [
        'jobs' => $jobs
    ]);
});

Route::get('/job/{id}', function($id) use($jobs) {  
    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
    return view('job-details', [
        'job' => $job
    ]);
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/contact', function() {
    return view('contact');
});
