<?php

use App\Area;
use App\Venue;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $venue = Venue::create(['name' => 'Venue with 2 Seatings']);
        $venue->seatings()->createMany([
            [
                'type' => 'u_form',
                'amount' => 10
            ],
            [
                'type' => 'parliament',
                'amount' => 30
            ]
        ]);

        $venue = Venue::create(['name' => 'Venue with Areas and Seatings']);
        $venue->seatings()->createMany([
            [
                'type' => 'u_form',
                'amount' => 10
            ],
            [
                'type' => 'parliament',
                'amount' => 30
            ]
        ]);

        $venue->areas()->createMany([
            [
                'name' => 'Room 1',
            ],
            [
                'name' => 'Room 2',
            ]
        ])->each(
            fn(Area $area) => $area->seatings()->createMany([
                [
                    'type' => 'u_form',
                    'amount' => 30
                ],
                [
                    'type' => 'parliament',
                    'amount' => 20
                ]
            ])
        );
    }
}
