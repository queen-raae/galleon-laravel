<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job {
    public static function all(): array
    {
        return [
            [ 
                'id' => 1,
                'name' => 'airtable WorkOS'   
            ],
            [
                'id' => 2,
                'name' => 'google drive WorkOS'   
            ]
        ];
    }

    public static function find(int $id): array
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if (! $job) {
            abort(404);
        }

        return $job;
    }
}


// TODO: show $job in mygateways.blade.php, but first route it through routes > web.php