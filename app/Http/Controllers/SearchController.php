<?php

namespace App\Http\Controllers;

use App\Venue;

class SearchController extends Controller
{
    public function __invoke()
    {
        $venues = Venue::query()->get();

        // search venues having seatings where amount as total_amount by type
        
        // search venue or areas have seatings where amount as total_amount

        return response()->json($venues);
    }
}
