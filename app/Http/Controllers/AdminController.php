<?php

namespace App\Http\Controllers;

use App\Lead;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin');
    }

    public function getLeadsData(Request $request)
    {
        
        $query = Lead::query();

        if ($request->has('address')) {
            
            $query->where('address', $request->address);
        }

        if ($request->has('utm_campaign') && $request->utm_campaign != null) {
            $query->where('utm_campaign', $request->utm_campaign);
        }
        return DataTables::of($query)
            ->addColumn('action', function ($lead) {
                return '<a href="#" class="btn btn-info btn-sm">Edit</a> <a href="#" class="btn btn-danger btn-sm">Delete</a>';
            })
            ->make(true);
    }
}
