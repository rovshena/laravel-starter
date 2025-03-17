<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    public static function find(int $id): array
    {
        $jobs = self::all();

        $job = Arr::first($jobs, fn ($job) => $job['id'] == $id);

        if (! $job) {
            abort(404);
        }

        return $job;
    }

    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$50,000',
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => '$10,000',
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => '$40,000',
            ],
        ];
    }
}
