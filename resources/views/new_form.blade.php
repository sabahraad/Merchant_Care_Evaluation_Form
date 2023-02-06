<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>MCE</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/nunito-font.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
</head>
<style>

</style>
<body>
	<div class="page-content">
		<div class="wizard-v5-content">
			<div class="wizard-form">
		        <form class="form-register" id="form-register" method="POST" action="{{route('data')}}">
					@csrf
		        	<div id="form-total">
		        		<!-- SECTION 1 -->
			            <h2>
			            	<span class="step-icon" style="padding-left: 87px;"><i class="zmdi zmdi-check"></i></span>
			            	<span class="step-text">Personal Information</span>
			            </h2>
			            <section style="    padding-right: 107px;padding-left: 84px;">
			                <div class="inner">
								<div class="form-row">
									<div class="form-holder">
										<label for="name" class="form-label">Quality Evaluator</label>
											<select type="text" class="form-select" aria-label="Default select example" name="quality_evaluator" id="QE">
												<option selected>Choose a quality evaluator</option>
												<option value="Rubina">Rubina</option>
												<option value="Asqik">Asqik</option>
											</select>
									</div>
									<div class="form-holder" id="AND">
										<label for="agent_name" class="form-label">Agent Name</label>
											<select class="form-select" aria-label="Default select example" name="agent_name" id="AN">
												<option selected>Choose a agent name</option>
												<option value="Rubina">Rubina</option>
												<option value="Asqik">Asqik</option>
											</select>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="address">Interaction Date</label>
										<input type="date"  class="form-control" id="address" name="interaction_date">
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="address">Evaluation Date</label>
										<input type="date"  class="form-control" id="address" name="evaluation_date">
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="exampleFormControlInput1" class="form-label"> Skill Group</label>
											<select class="form-select" aria-label="Default select example" name="skill_group">
												<option selected>Choose a skill group</option>
												<option value="InBound">InBound</option>
												<option value="OutBound">OutBound</option>
												<option value="tele-sales">tele-sales</option>
											</select>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="exampleFormControlInput1" class="form-label">Sampling Type</label>
											<select class="form-select" aria-label="Default select example" name="sampling_type">
												<option selected>Choose a sampling type</option>
												<option value="Random">Random</option>
												<option value="FeedBack">FeedBack</option>
												<option value="Interaction DSAT">Interaction DSAT</option>
											</select>
									</div>
								</div>
								
								
							</div>
			            </section>
						<!-- SECTION 2 -->
			            <h2>
			            	<span class="step-icon"style="padding-left: 87px;"><i class="zmdi zmdi-check"></i></span>
			            	<span class="step-text">Basic Information</span>
			            </h2>
			            <section style="    padding-right: 107px;padding-left: 84px;"> 
			                <div class="inner">
								<div class="form-row">
									<div class="form-holder">
										<label for="exampleFormControlInput1" class="form-label">Case no. (NA if not available)</label>
                                    <input class="form-control" id="exampleFormControlInput1" rows="3" name="case_no"></input>
									</div>
									<div class="form-holder">
										<label for="exampleFormControlInput1" class="form-label">Order No. (NA if not available)</label>
                                    <input class="form-control" id="exampleFormControlInput1" rows="3" name="order_no"></input>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="exampleFormControlInput1" class="form-label test">Category</label>
                                    	<select class="form-select" aria-label="Default select example" name="category" id="category">
                                        <option selected>Choose a category</option>
                                        <option value="Information">Information</option>
                                        <option value="Complaint">Complaint</option>
                                        <option value="Service Request">Service Request</option>
                                    </select>
									</div>
								</div>
								<div class="form-row t1">
									<div class="form-holder form-holder-2" id="information-subcategory-div">
										<label for="exampleFormControlInput1" class="form-label">Information Sub-Category</label>
                                    	<select class="form-select" aria-label="Default select example" name="information_sub_category" id="information-subcategory">
                                        <option selected>Choose a category</option>
                                        <option value="Information">Information</option>
                                        <option value="Complaint">Complaint</option>
                                        <option value="Service Request">Service Request</option>
                                    </select>
									</div>
								</div>
								<div class="form-row t2">
									<div class="form-holder form-holder-2" id="compliant-subcategory-div">
										<label for="exampleFormControlInput1" class="form-label">Compliant Sub-Category</label>
                                    <select class="form-select" aria-label="Default select example" name="complaint_sub_category" id="compliant-subcategory">
                                        <option selected>Choose a category</option>
                                        <option value="Information">Information</option>
                                        <option value="Complaint">Complaint</option>
                                        <option value="Service Request">Service Request</option>
                                    </select>
									</div>
								</div>
								<div class="form-row t3">
									<div class="form-holder form-holder-2" id="service-request-subcategory-div">
										<label for="exampleFormControlInput1" class="form-label">Service Request Sub-Category</label>
                                    <select class="form-select" aria-label="Default select example" name="service_request_sub_category" id="service-request-subcategory">
                                        <option selected>Choose a category</option>
                                        <option value="Information">Information</option>
                                        <option value="Complaint">Complaint</option>
                                        <option value="Service Request">Service Request</option>
                                    </select>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="exampleFormControlInput1" class="form-label">Greeting</label>
                                    <select class="form-select" aria-label="Default select example" name="greetings">
                                        <option selected>Choose a greetings</option>
                                        <option value="12">12</option>
                                        <option value="6">6</option>
                                        <option value="3">3</option>
                                    </select>
									</div>
								</div>
                               
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="exampleFormControlInput1" class="form-label">Care & Enthusiasm</label>
                                    <select class="form-select" aria-label="Default select example" name="care_and_enthusiasm">
                                        <option selected>Choose a care & enthusiasm</option>
                                        <option value="12">12</option>
                                        <option value="6">6</option>
                                        <option value="3">3</option>
                                    </select>
									</div>
								</div>
								<div class="form-row ">
									<div class="form-holder form-holder-2">
										<label for="exampleFormControlInput1" class="form-label">Communication</label>
										<select class="form-select" aria-label="Default select example" name="communication">
											<option selected>Choose a communication</option>
											<option value="12">12</option>
											<option value="6">6</option>
											<option value="3">3</option>
										</select>
									</div>
								</div>
							</div>
			            </section>
			            <!-- SECTION 3 -->
			            <h2>
			            	<span class="step-icon"style="padding-left: 87px;"><i class="zmdi zmdi-check"></i></span>
			            	<span class="step-text">Basic Information</span>
			            </h2>
			            <section >
			                <div class="inner">
								<div class="form-row">
								<div class="form-holder form-holder-2">
                                    <label for="exampleFormControlInput1" class="form-label">Soft Skills</label>
                                    <select class="form-select" aria-label="Default select example" name="soft_skills">
                                        <option selected>Choose a soft skills</option>
                                        <option value="12">12</option>
                                        <option value="6">6</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
								</div>
								<div class="form-row">
								<div class="form-holder form-holder-2">
                                    <label for="exampleFormControlInput1" class="form-label">Interaction Handling Skills</label>
                                    <select class="form-select" aria-label="Default select example" name="interaction_handling_skills">
                                        <option selected>Choose a interaction handling skills</option>
                                        <option value="12">12</option>
                                        <option value="6">6</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
								</div>
								<div class="form-row">
								<div class="form-holder form-holder-2">
                                    <label for="exampleFormControlInput1" class="form-label">Probing</label>
                                    <select class="form-select" aria-label="Default select example" name="probing">
                                        <option selected>Choose a probing</option>
                                        <option value="10">10</option>
                                        <option value="5">5</option>
                                        <option value="fatal error">fatal error</option>
                                    </select>
                                </div>
								</div>
								<div class="form-row ">
								<div class="form-holder form-holder-2">
                                    <label for="exampleFormControlInput1" class="form-label">System Usage & Action</label>
                                    <select class="form-select" aria-label="Default select example" name="system_usage_and_action">
                                        <option selected>Choose a system_usage_&_action</option>
                                        <option value="10">10</option>
                                        <option value="5">5</option>
                                        <option value="fatal error">fatal error</option>
                                    </select>
                                </div>
								</div>
								<div class="form-row ">
								<div class="form-holder form-holder-2">
                                    <label for="exampleFormControlInput1" class="form-label">SOP Followed</label>
                                    <select class="form-select" aria-label="Default select example" name="sop_followed">
                                        <option selected>Choose a sop_followed</option>
                                        <option value="10">10</option>
                                        <option value="5">5</option>
                                        <option value="fatal error">fatal error</option>
                                    </select>
                                </div>
								</div>
								<div class="form-row">
								<div class="form-holder form-holder-2">
                                    <label for="exampleFormControlInput1" class="form-label">Correct/Complete Information</label>
                                    <select class="form-select" aria-label="Default select example" name="correct_info">
                                        <option selected>Choose a correct_info</option>
                                        <option value="10">10</option>
                                        <option value="5">5</option>
                                        <option value="fatal error">fatal error</option>
                                    </select>
                                </div>
								</div>
								<div class="form-row">
								<div class="form-holder form-holder-2">
                                    <label for="exampleFormControlInput1" class="form-label">Fatal error</label>
                                    <select class="form-select" aria-label="Default select example" name="fatal_error">
                                        <option selected>Choose a fatal_error</option>
                                        <option value="yes">yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
								</div>
								<div class="form-row">
								<div class="form-holder form-holder-2">
                                    <label for="exampleFormControlInput1" class="form-label">Fatal_reason</label>
                                    <select class="form-select" aria-label="Default select example" name="Fatal_reason">
                                        <option selected>Choose a Fatal_reason</option>
                                        <option value="yes">yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
								</div>
								<div class="form-row">
								<div class="form-holder form-holder-2" id="training_required_div">
								<label for="exampleFormControlInput1" class="form-label">Training Required</label>
                                    <select class="form-select" aria-label="Default select example" name="training_required" id="training_required">
                                        <option selected>Choose a training_required</option>
                                        <option value="yes">yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
								</div>
								<div class="form-row">
								<div class="form-holder form-holder-2" id="training_agenda_div">
								<label for="exampleFormControlInput1" class="form-label">Training Agenda</label>
                                    <select class="form-select" aria-label="Default select example" name="training_agenda" id="training_agenda">
                                        <option selected>Choose a training_agenda</option>
                                        <option value="Behavior">Behavior</option>
                                        <option value="Resolution">Resolution</option>
                                    </select>
                                </div>
								</div>
								<div class="form-row">
								<div class="form-holder form-holder-2" id="behavior_training_topic_div">
								<label for="exampleFormControlInput1" class="form-label">Behavior Training Topic</label>
                                    <select class="form-select" aria-label="Default select example" name="behavior_training_topic" id="behavior_training_topic">
                                        <option selected>Choose a behavior_training_topic</option>
                                        <option value="sdf">sdf</option>
                                        <option value="sdf">sdf</option>
                                    </select>
                                </div>
								</div>
								<div class="form-row">
								<div class="form-holder form-holder-2" id="resolution_training_topic_div">
								<label for="exampleFormControlInput1" class="form-label">Resolution Training Topic</label>
                                    <select class="form-select" aria-label="Default select example" name="resolution_training_topic" id="resolution_training_topic">
                                        <option selected>Choose a resolution_training_topic</option>
                                        <option value="sdf">sdf</option>
                                        <option value="sdf">sdf</option>
                                    </select>
                                </div>
								</div>
								<div class="form-row">
								<div class="form-holder form-holder-2">
								<label for="exampleFormControlInput1" class="form-label">Comments Box</label>
                                    <textarea class="form-control" id="exampleFormControlInput1" rows="3" name="comment"></textarea>
                                </div>
								</div>

								<button type="submit" class="btn btn-primary">Submit</button>

								</div>
							</div>
			            </section>
						
		        	</div>
		        </form>
			</div>
		</div>
	</div>
	<script src="{{asset('js/jquery-3.6.1.min.js')}}"></script>
	<script src="{{asset('js/jquery.steps.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>

	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>  -->
	<script>
		const category = document.querySelector("#category")
		category.onchange = (e) => {
			console.log(e.target.value)
		}
		console.log(category)

       
        $("#category").change(function() {
            // console.log($(this).val())
            if ($(this).val() === "Information") {
            $('#information-subcategory-div').show();
            $('#information-subcategory').attr('required', '');
            $('#information-subcategory').attr('data-error', 'This field is required.');
            } else {
            $('#information-subcategory-div').hide();
            $('#information-subcategory').removeAttr('required');
            $('#information-subcategory').removeAttr('data-error');
            }

            if ($(this).val() === "Complaint") {
            $('#compliant-subcategory-div').show();
            $('#compliant-subcategory').attr('required', '');
            $('#compliant-subcategory').attr('data-error', 'This field is required.');
            } else {
            $('#compliant-subcategory-div').hide();
            $('#compliant-subcategory').removeAttr('required');
            $('#compliant-subcategory').removeAttr('data-error');
            }

            if ($(this).val() === "Service Request") {
            $('#service-request-subcategory-div').show();
            $('#service-request-subcategory').attr('required', '');
            $('#service-request-subcategory').attr('data-error', 'This field is required.');
            } else {
            $('#service-request-subcategory-div').hide();
            $('#service-request-subcategory').removeAttr('required');
            $('#service-request-subcategory').removeAttr('data-error');
            }
			$.ajax({
                type: "get",
                url: "http://localhost:8000/option/?category="+$(this).val(),
                success: function(data) {
					console.log(data);
                    $("#information-subcategory").html(data)
                }
            });

            });
            $("#category").trigger("change");

			
			$("#training_required").change(function() {
            if ($(this).val() === "yes") {
            $('#training_agenda_div').show();
            $('#behavior_training_topic_div').show();
            $('#resolution_training_topic_div').show();
            } else {
			$('#training_agenda_div').hide();
            $('#behavior_training_topic_div').hide();
            $('#resolution_training_topic_div').hide();
            }

            });
            $("#training_required").trigger("change");
       
		
	</script>

</body>
</html>