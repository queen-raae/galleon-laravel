<?php

namespace App\Models; 

use Illuminate\Support\Arr; 

// use Illuminate\Database\Eloquent\Model; 
// extends Model

class Gateway {
    public static function all(): array 
    {
        return [
            [ 
                'id' => 1,
                'name' => 'WorkOS + Airtable'   
            ],
            [
                'id' => 2,
                'name' => 'WorkOS + Google drive'   
            ]
        ];
    }
    public static function find(int $id): array
    {
        $gateway = Arr::first(static::all(), fn($gateway) => $gateway['id'] == $id);

        if (! $gateway) {
            abort(404);
        }

        return $gateway;
    }
}