<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tenant extends Controller
{
    public function create_room_to_rent(Request $request)
    {
        $data = $request->validate([
            'number_of_rooms' => 'required',
            'condition' =>
            
            ]
        );
    }
}
