<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function store(Request $request)
    {
        Device::create([
            'client_name' =>$request->client_name,
            'device_model' =>$request->device_model,
            'issue_description' =>$request->issue_description,
            'status' => 'pending',
        ]);
    }
}
