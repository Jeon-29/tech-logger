<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'client_name' => 'required|string|max:255',
            'device_model' => 'required|string|max:255',
            'issue_description' => 'required|string',
        ]);

        Device::create([
            'client_name' =>$request->client_name,
            'device_model' =>$request->device_model,
            'issue_description' =>$request->issue_description,
            'status' => 'pending',
        ]); 

        return "Successfully created a new repair log for " . $request->client_name . " with device model " . $request->device_model . ".";
    }
    public function create()
    {
        return view('devices.create');
    }
}
