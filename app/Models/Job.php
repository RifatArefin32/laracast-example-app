<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    /**
     * Returns all available jobs
     */
    public static function index(): array
    {
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

        return $jobs;
    }

    /**
     * Returns job with specific job id
     * @var id: integer, job id 
     * @return array, of job match with specific job id
     */
    public static function find(int $id) {
        $job = Arr::first(static::index(), fn($job) => $job['id'] == $id);
        if(!$job) {
            abort(404);
        }

        return $job;
    }


}
