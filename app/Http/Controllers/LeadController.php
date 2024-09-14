<?php

// app/Http/Controllers/LeadController.php

namespace App\Http\Controllers;
use App\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LeadController extends Controller
{
    public function create()
    {
        return view('leads.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'phone' => 'required|string|max:13',
            'address' => 'required|string',
            'username_id' => 'required|string|max:100',
            // 'utm_campaign' => 'required|string|max:100',
            // 'utm_source' => 'required|string|max:100',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Lead::create($request->all());

        return redirect()->route('leads.success')->with('success', 'Lead created successfully.');
    }
}
