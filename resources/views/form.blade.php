<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body {
  background-color: rgb(176,224,230);
}
</style>
<body>
<div class="form-content my-3 p-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                  <div class="login-area">
                    <div class="d-table">
                      <div class="d-table-cell">
                        <div class="login-form">
                          <div class="logo">
                            <a href="#"><img src="https://aamarpay.com/images/logo/aamarpay_logo.png" alt="image"></a>
                          </div>
                        <h2 class="row justify-content-center">Merchant Care</h2>
                                <form method="POST" action="{{route('data')}}">
                                    @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Quality Evaluator</label>
                                    <select type="text" class="form-select" aria-label="Default select example" name="quality_evaluator">
                                        <option selected>Choose a quality evaluator</option>
                                        <option value="Rubina">Rubina</option>
                                        <option value="Asqik">Asqik</option>
                                    </select>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="agent_name" class="form-label">Agent Name</label>
                                    <select class="form-select" aria-label="Default select example" name="agent_name">
                                        <option selected>Choose a agent name</option>
                                        <option value="Rubina">Rubina</option>
                                        <option value="Asqik">Asqik</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Interaction Date</label>
                                    <input type="date" class="form-control" id="exampleFormControlInput1"name="interaction_date" >
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Evaluation Date</label>
                                    <input type="date" class="form-control" id="exampleFormControlInput1" rows="3" name="evaluation_date"></input>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label"> Skill Group</label>
                                    <select class="form-select" aria-label="Default select example" name="skill_group">
                                        <option selected>Choose a skill group</option>
                                        <option value="InBound">InBound</option>
                                        <option value="OutBound">OutBound</option>
                                        <option value="tele-sales">tele-sales</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Sampling Type</label>
                                    <select class="form-select" aria-label="Default select example" name="sampling_type">
                                        <option selected>Choose a sampling type</option>
                                        <option value="Random">Random</option>
                                        <option value="FeedBack">FeedBack</option>
                                        <option value="Interaction DSAT">Interaction DSAT</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Case no./Transcript/Caller ID (NA if not available)</label>
                                    <input class="form-control" id="exampleFormControlInput1" rows="3" name="case_no"></input>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Order No. (NA if not available)</label>
                                    <input class="form-control" id="exampleFormControlInput1" rows="3" name="order_no"></input>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Category</label>
                                    <select class="form-select" aria-label="Default select example" name="category">
                                        <option selected>Choose a category</option>
                                        <option value="Information">Information</option>
                                        <option value="Complaint">Complaint</option>
                                        <option value="Service Request">Service Request</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Information/Complaint Sub-Category</label>
                                    <input class="form-control" id="exampleFormControlInput1" rows="3" name="information_sub_category"></input>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Information/Complaint Sub-Category</label>
                                    <input class="form-control" id="exampleFormControlInput1" rows="3" name="complaint_sub_category"></input>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Information/Complaint Sub-Category</label>
                                    <input class="form-control" id="exampleFormControlInput1" rows="3" name="service_request_sub_category"></input>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Greeting</label>
                                    <select class="form-select" aria-label="Default select example" name="greetings">
                                        <option selected>Choose a greetings</option>
                                        <option value="12">12</option>
                                        <option value="6">6</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Care & Enthusiasm</label>
                                    <select class="form-select" aria-label="Default select example" name="care_and_enthusiasm">
                                        <option selected>Choose a care & enthusiasm</option>
                                        <option value="12">12</option>
                                        <option value="6">6</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Communication</label>
                                    <select class="form-select" aria-label="Default select example" name="communication">
                                        <option selected>Choose a communication</option>
                                        <option value="12">12</option>
                                        <option value="6">6</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Soft Skills</label>
                                    <select class="form-select" aria-label="Default select example" name="soft_skills">
                                        <option selected>Choose a soft skills</option>
                                        <option value="12">12</option>
                                        <option value="6">6</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Interaction Handling Skills</label>
                                    <select class="form-select" aria-label="Default select example" name="interaction_handling_skills">
                                        <option selected>Choose a interaction handling skills</option>
                                        <option value="12">12</option>
                                        <option value="6">6</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Probing</label>
                                    <select class="form-select" aria-label="Default select example" name="probing">
                                        <option selected>Choose a probing</option>
                                        <option value="10">10</option>
                                        <option value="5">5</option>
                                        <option value="fatal error">fatal error</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">System Usage & Action</label>
                                    <select class="form-select" aria-label="Default select example" name="system_usage_and_action">
                                        <option selected>Choose a system_usage_&_action</option>
                                        <option value="10">10</option>
                                        <option value="5">5</option>
                                        <option value="fatal error">fatal error</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">SOP Followed</label>
                                    <select class="form-select" aria-label="Default select example" name="sop_followed">
                                        <option selected>Choose a sop_followed</option>
                                        <option value="10">10</option>
                                        <option value="5">5</option>
                                        <option value="fatal error">fatal error</option>
                                    </select>
                                </div>
                                </div><div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Correct/Complete Information</label>
                                    <select class="form-select" aria-label="Default select example" name="correct_info">
                                        <option selected>Choose a correct_info</option>
                                        <option value="10">10</option>
                                        <option value="5">5</option>
                                        <option value="fatal error">fatal error</option>
                                    </select>
                                </div>
                            
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Fatal error</label>
                                    <select class="form-select" aria-label="Default select example" name="fatal_error">
                                        <option selected>Choose a fatal_error</option>
                                        <option value="yes">yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Fatal_reason</label>
                                    <select class="form-select" aria-label="Default select example" name="Fatal_reason">
                                        <option selected>Choose a Fatal_reason</option>
                                        <option value="yes">yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Training Required</label>
                                    <select class="form-select" aria-label="Default select example" name="training_required">
                                        <option selected>Choose a training_required</option>
                                        <option value="yes">yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Training Agenda</label>
                                    <select class="form-select" aria-label="Default select example" name="training_agenda">
                                        <option selected>Choose a training_agenda</option>
                                        <option value="Behavior">Behavior</option>
                                        <option value="Resolution">Resolution</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Behavior Training Topic</label>
                                    <select class="form-select" aria-label="Default select example" name="behavior_training_topic">
                                        <option selected>Choose a behavior_training_topic</option>
                                        <option value="sdf">sdf</option>
                                        <option value="sdf">sdf</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Resolution Training Topic</label>
                                    <select class="form-select" aria-label="Default select example" name="resolution_training_topic">
                                        <option selected>Choose a resolution_training_topic</option>
                                        <option value="sdf">sdf</option>
                                        <option value="sdf">sdf</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Comments Box</label>
                                    <textarea class="form-control" id="exampleFormControlInput1" rows="3" name="comment"></textarea>
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>