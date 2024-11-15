<?php

namespace App\Repositories;

use App\Models\Hotel;
use Illuminate\Support\Facades\DB;

class HotelRepository
{
    // Hotel
    public function getAllHotel($limit = 10)
    {
        $query = Hotel::orderBy('name', 'ASC');  // Start by ordering the cities
        // // dd($division);
        // // Apply division filter if provided
        // if (!empty($division)) {
        //     $query->where('name', 'like', "%{$division}%");
        // }

        // // Apply destination filter if provided
        // if (!empty($destination)) {
        //     $query->where('state_id', $destination);
        // }

        // Paginate the results
        $paginatedStates = $query->paginate($limit);  // $limit is the number of results per page

        // Get the total number of records (excluding pagination)
        $totalRecords = Hotel::orderBy('name', 'ASC')->get(); 

        // Return both the paginated results and the total record count
        return [
            'hotel' => $paginatedStates,
            'totalRecords' => $totalRecords,
        ];
    }

}
