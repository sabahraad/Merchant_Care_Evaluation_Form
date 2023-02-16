<?php

namespace App\Http\Controllers;

use App\Models\form_data;
use App\Models\InfoCat;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Session;
use Symfony\Polyfill\Intl\Idn\Info;
use Brian2694\Toastr\Facades;

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
        
        return view('evaluation_form');
    }
    
    public function option(Request $request){
        $catetory = $request->get('category');
        $option = InfoCat::get()->where('category',$catetory);
        $html='<option value="">Select option</option>';
		foreach($option as $list){
			$html.='<option value="'.$list->options.'">'.$list->options.'</option>';
		}
		echo $html;

    }
    public function form_data()
    {
        $result = form_data::orderBy('created_at','DESC')->get();
        return view('form_data',compact('result'));
    }

    public function search(Request $request)
    {
        $e=$request->interaction_date;
        $r=$request->evaluation_date;
        $result = form_data::where('interaction_date',$e)->orWhere('evaluation_date',$r)->get();
        return view('form_data',compact('result'));
    }

    public function data(Request $request)
    {
       
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
            Session::flash('msg', 'Your Data Updated Successfully');
            return redirect('form');

        }

        
    }
}
