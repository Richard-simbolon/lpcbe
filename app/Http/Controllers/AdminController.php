<?php

namespace App\Http\Controllers;

use App\Lead;
use App\Question;
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

    public function survey()
    {
        // $data = [];

        // $questions = Question::with(['answers' => function($query){
        //     $query->withCount('survey');
        // }])->get();
        // // echo json_encode($questions);
        // // exit;
        // return view('admin_survey' , compact("data"));

        $questions = Question::with(['answers' => function($query) {
            $query->withCount('survey');
        }])->get();

        // Calculate total responses for each question
        $questions->each(function ($question) {
            $totalResponses = $question->answers->sum('survey_count');
            $question->answers->transform(function ($answer) use ($totalResponses) {
                $answer->percentage = $totalResponses > 0 ? number_format(($answer->survey_count / $totalResponses) * 100, 2) : 0;
                return $answer;
            });
        });
    
        return view('admin_survey', ['questions' => $questions]);
    }
}
