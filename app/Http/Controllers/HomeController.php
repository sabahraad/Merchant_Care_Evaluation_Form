<?php

namespace App\Http\Controllers;

use App\Models\form_data;
use Illuminate\Http\Request;

class HomeController extends Controller
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
        return view('home');
    }

    public function form(){
        return view('form');
    }
    public function form_data()
    {
        $result = form_data::get();
        return view('form_data',compact('result'));
    }
    public function data(Request $request)
    {
        // dd($request->agent_name);
        $request->validate([
    		'quality_evaluator' => 'required',
    		'agent_name' => 'required',
    		'interaction_date' => 'required',
    		'evaluation_date' => 'required',
    		'skill_group' => 'required',
    		'category' => 'required',
            'fatal_error' => 'required',
            'training_required' => 'required',

    	]);

    	$data = new form_data;
        // dd($request->agent_name);
    	$data->quality_evaluator = $request->quality_evaluator;
    	$data->agent_name = $request->agent_name;
    	$data->interaction_date = $request->interaction_date;
    	$data->evaluation_date = $request->evaluation_date;

    	$data->skill_group = $request->skill_group;
    	$data->sampling_type = $request->sampling_type;
    	$data->case_no = $request->case_no;
    	$data->order_no = $request->order_no;

    	$data->category = $request->category;
    	$data->information_sub_category = $request->information_sub_category;
    	$data->complaint_sub_category = $request->complaint_sub_category;
        $data->service_request_sub_category = $request->service_request_sub_category;
        
        $data->greetings = $request->greetings;
    	$data->care_and_enthusiasm = $request->care_and_enthusiasm;
        $data->communication = $request->communication;
    	$data->soft_skills = $request->soft_skills;

    	$data->interaction_handling_skills = $request->interaction_handling_skills;
    	$data->probing = $request->probing;
    	$data->system_usage_and_action = $request->system_usage_and_action;
    	$data->sop_followed = $request->sop_followed;

    	$data->correct_info = $request->correct_info;
    	$data->fatal_error = $request->fatal_error;
    	$data->Fatal_reason = $request->Fatal_reason;
    	$data->training_required = $request->training_required;

    	$data->training_agenda = $request->training_agenda;
    	$data->behavior_training_topic = $request->behavior_training_topic;
    	$data->resolution_training_topic = $request->resolution_training_topic;
    	$data->comment = $request->comment;

    	if($data->save()){
            return redirect('form_data');

        }

        // $result = form_data::get();
        // // dd($request);

    	// return view ('form_data', compact('result'));
    }
}
