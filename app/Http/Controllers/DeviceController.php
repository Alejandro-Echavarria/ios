<?php

namespace App\Http\Controllers;

use App\Models\Devices;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function index()
    {
        return view('devices.index');
    }

    public function devices()
    {
        $devices = Devices::orderBy('id', 'desc')->limit(120)->get();

        return response()->json($devices);
    }
}
