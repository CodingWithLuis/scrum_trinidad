<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;

class CustomerApiController extends Controller
{
    public function index()
    {
        $data = Customer::query()
            ->with('district', 'district.municipality', 'district.municipality.department')
            ->get()
            ->map(function ($customer) {
                return [
                    'id' => $customer->id,
                    'name' => $customer->name,
                    'district' => $customer->district->name . ", " . $customer->district->municipality->name . ", " . $customer->district->municipality->department->name
                ];
            });

        return response()->json(['data' => $data]);
    }
}
