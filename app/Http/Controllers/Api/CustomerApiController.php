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
                    'district' => $customer->district->name ?? 'N/A',
                    'municipality' => $customer->district->municipality->name ?? 'N/A',
                    'department' => $customer->district->municipality->department->name ?? 'N/A',
                ];
            });

        return response()->json(['data' => $data]);
    }
}
