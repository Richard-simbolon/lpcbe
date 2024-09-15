<?php

// app/Http/Controllers/LeadController.php

namespace App\Http\Controllers;
use App\Lead;
use App\Question;
use App\Survey;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SurveyController extends Controller
{
    public function create()
    {
        return view('leads.create');
    }

    public function survey(Request $request)
    {
        $questions['questions'] = Question::where('status' , 'active')->with('answers')->get();
        //echo json_encode($questions); exit;
        return view('survey' , compact("questions"));
    }

    public function store(Request $request){
        $activeQuestion = Question::where('status' , 'active')->with('answers')->get();
        $validated = [];
        foreach($activeQuestion as $active){
            $validated['question'.$active->id] = 'required';
        }
      
        $validator = Validator::make($request->all(), $validated);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        // save the answer
        $save = [];
        $survey_id = Str::random(20);
        foreach($activeQuestion as $key ){
            $q_id = str_replace('question' , '' , $request->{'question'.$key->id});
            if($key->type == 'text'){
                $save[] = [
                    'question_id' => $key->id,
                    'answer_id' => 0,
                    'text_answer' => $request->{'question'.$key->id},
                    'survey_id' => $survey_id
                ];
            }else{
                $save[] = [
                    'question_id' => $key->id,
                    'answer_id' => $request->{'question'.$key->id},
                    'text_answer' => '',
                    'survey_id' => $survey_id
                ];
            }
        }

        $save = Survey::insert($save);
        if($save){
            return redirect()->route('leads.success')->with('success', 'Lead created successfully.');
        }
    }
}
