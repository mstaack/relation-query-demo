<?php

namespace App\Http\Controllers;

use App\Venue;

class SearchController extends Controller
{
    public function __invoke()
    {
        $seatingType = 'u_form';
        $seatingAmount = 60;

        $venues = Venue::query()->with([
            'seatings',
            'areas',
            'areas.seatings'
        ])->get();

        // find Venue has seatings with type/amount OR search venue having summed areas with total amount/type

        // result should include venue 2, which has two rooms with each room having 30->u_form;

        return response()->json($venues);
    }
}
