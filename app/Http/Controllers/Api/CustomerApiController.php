<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerApiController extends Controller
{
    public function index()
    {
        $data = Customer::query()
            ->with('district', 'district.municipality', 'district.municipality.department')
            ->get();

        return response()->json(['data' => $data]);
    }
}
