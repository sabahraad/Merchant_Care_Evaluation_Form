<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./raad_form.css" rel="stylesheet">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> 

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/raad_form.css')}}">
    
    <title>Merchant Care Evaluation</title>
</head>
<body translate="no">
    <!-- MultiStep Form -->
    <div  class="center">
      <a href="#"><img src="https://aamarpay.com/images/logo/aamarpay_logo.png" alt="image"></a>
    </div>
    <form method="get" action="{{route('form_data')}}" class="mb-3">
                  <button type="submit" class=" btn btn-primary btn-sm fcolor">Evaluation details</button>
            </form>
    <div class=bColor>
    
        <div class="col-md-12 col-md-offset-3">
          <form id="msform" method="POST" action="{{route('data')}}">
          @csrf
              <!-- progressbar -->
              <ul id="progressbar">
                  <li class="active">Personal Details</li>
                  <li>Category</li>
                  <li>Marking</li>
                  <li>Error Type</li>
                  <li>Training</li>
              </ul>
              <!-- fieldsets -->
              <!-- fieldset 1 start -->
              <fieldset>
                  <h2 class="fs-title">Personal Details</h2>
                    <select type="text" class="form-select" aria-label="Default select example" name="quality_evaluator"Required name="Choose a Quality Evaluator" placeholder="Choose a Quality Evaluator" Required>
                        <option value="Rubina Akter">Rubina Akter</option>
                        <option value="Md.Ashikur Rahman Ashik">Md. Ashikur Rahman Ashik</option>
                    </select>
                    <select class="form-select" aria-label="Default select example" name="agent_name"Required>
                        <option selected>Choose a agent name</option>
                        <option value="Mazharul Islam (Inbound & Lead management system)">Mazharul Islam (Inbound & Lead management system)</option>
                        <option value="Reshma Akter (Inbound)">Reshma Akter (Inbound)</option>
                        <option value="Abida sultana mou (Outbound)">Abida sultana mou (Outbound)</option>
                        <option value="Farhana Shobnom (Outbound)">Farhana Shobnom (Outbound)</option>
                        <option value="MD Kamrul Islam (Tele Sales)">MD Kamrul Islam (Tele Sales)</option>
                        <option value="Sadia Jabin (Tele Sales)">Sadia Jabin (Tele Sales)</option>
                        <option value="Rabeya Basri (Tele Sales)">Rabeya Basri (Tele Sales)</option>
                        <option value="Afnan Dewan (Tele Sales)">Afnan Dewan (Tele Sales)</option>
                    </select>
                  <input type="text" Required name="interaction_date" placeholder="Interaction Date" onfocus="(this.type='date')" onblur="(this.type='text')">
                  <input type="text"  Required name="evaluation_date" placeholder="Evaluation Date" onfocus="(this.type='date')" onblur="(this.type='text')">
                  <select class="form-select" aria-label="Default select example" name="skill_group" id="skill_group"Required>
                    <option selected>Choose a skill group</option>
                    <option value="InBound">InBound</option>
                    <option value="OutBound">OutBound</option>
                    <option value="tele-sales">tele-sales</option>
                  </select>
                  <input type="button" name="next" class="next action-button" value="Next">
              </fieldset>
              <!-- fieldset 1 end -->

              <!-- fieldset 2 start -->
              <fieldset>
                  <h2 class="fs-title">Category</h2>
                  <select class="form-select" aria-label="Default select example" name="sampling_type">
                    <option selected>Choose a sampling type</option>
                    <option value="Random">Random</option>
                    <option value="FeedBack">FeedBack</option>
                    <option value="Interaction DSAT">Interaction DSAT</option>
                  </select>
                  <input type="text" name="case_no" placeholder="Case No">
                  <input type="text" name="order_no" placeholder="Order No">
                  <select class="form-select" aria-label="Default select example" name="category">
                    <option selected>Choose a category</option>
                    <option value="Information">Information</option>
                    <option value="Complaint">Complaint</option>
                    <option value="Service Request">Service Request</option>
                </select>
                <select class="form-select" aria-label="Default select example" name="information_sub_category">
                    <option selected>Choose a information_sub_category</option>
                    <option value="Campaign & promotion info">Campaign & promotion info</option>
                    <option value="Account Deactivation/Reactivation">Account Deactivation/Reactivation</option>
                    <option value="Pricing & packages Info">Pricing & packages Info</option>
                    <option value="Commission Info & Details">Commission Info & Details</option>
                    <option value="Settlement Info">Settlement Info</option>
                    <option value="aamarPay Policies & Guidelines">aamarPay Policies & Guidelines</option>
                    <option value="Account Activation">Account Activation</option>
                    <option value="Merchant Panel Usage">Merchant Panel Usage</option>
                    <option value="Crank Caller">Crank Caller</option>
                    <option value="Enterprise Solutions">Enterprise Solutions</option>
                    <option value="API/Plugins Integration">API/Plugins Integration</option>
                    <option value="Account Verification Status">Account Verification Status</option>
                    <option value="Elaboration / Details Required">Elaboration / Details Required</option>
                    <option value="How to become a Merchant on aamarPay">How to become a Merchant on aamarPay</option>
                    <option value="Bank Details Information">Bank Details Information</option>
                    <option value="Business/Legal info Updates">Business/Legal info Updates</option>
                    <option value="Merchant Campaign Info">Merchant Campaign Info</option>
                    <option value="New Store ID request">New Store ID request</option>
                    <option value="Merchant POC Change Request">Merchant POC Change Request</option>
                    <option value="Settlement Clearance Request">Settlement Clearance Request</option>
                    <option value="Urgent Settlement Request">Urgent Settlement Request</option>
                    <option value="Trx. wise statement Request">Trx. wise statement Request</option>
                    <option value="EMI Activation Request">EMI Activation Request</option>
                    <option value="International Transaction info">International Transaction info</option>
                    <option value="Merchant refund Request">Merchant refund Request</option>
                    <option value="Merchant Chargeback Request">Merchant Chargeback Request</option>
                    <option value="Transactional Issues">Transactional Issues</option>
                    <option value="Settlement/disbursement disputes">Settlement/disbursement disputes</option>
                    <option value="Merchant Logo Change Request">Merchant Logo Change Request</option>
                    <option value="How To reset Password">How To reset Password</option>
                    <option value="Finance Claim - Payment not processed">Finance Claim - Payment not processed</option>
                    <option value="Finance Claim - Incorrect Commission charged">Finance Claim - Incorrect Commission charged</option>
                    <option value="Website Logo Verification">Website Logo Verification</option>
                    <option value="Update Bank Details">Update Bank Details</option>
                    <option value="OTP & Login Page Error">OTP & Login Page Error</option>
                    <option value="Unable to login on Merchant panel">Unable to login on Merchant panel</option>
                    <option value="Password reset issue">Password reset issue</option>
                    <option value="Fraudulent Activity">Fraudulent Activity</option>
                    <option value="Abusive Merchant/Customer">Abusive Merchant/Customer</option>
                    <option value="Call Dropped">Call Dropped</option>
                    <option value="TL/Manager Escalations">TL/Manager Escalations</option>
                    <option value="Legal Threat">Legal Threat</option>
                    <option value="Customer Refund/Chargeback">Customer Refund/Chargeback</option>
                    <option value="Escrow - Delivery Confirmation">Escrow - Delivery Confirmation</option>
                    <option value="Merchant Invoice Generate info">Merchant Invoice Generate info</option>
                    <option value="Merchant Payment Link Info">Merchant Payment Link Info</option>
                    <option value="Tele-sales; Payment Gateway">Tele-sales; Payment Gateway</option>
                    <option value="Tele-sales; SMS">Tele-sales; SMS</option>
                    <option value="Tele-sales; Enterprise Solution">Tele-sales; Enterprise Solution</option>
                    <option value="Tele-sales; Supper App">Tele-sales; Supper App</option>
                    <option value="Others">Others</option>

                </select>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous">
                  <input type="button" name="next" class="next action-button" value="Next">
              </fieldset>
              <!-- fieldset 2 end -->

              <!-- fieldset 3 start -->
              <fieldset>
                  <h2 class="fs-title">Step 3</h2>
                  <select class="form-select" aria-label="Default select example" name="greetings">
                    <option selected>Choose a greetings</option>
                    <option value="12">12</option>
                    <option value="6">6</option>
                    <option value="3">3</option>
                </select>                  
                <select class="form-select" aria-label="Default select example" name="care_and_enthusiasm">
                    <option selected>Choose a care & enthusiasm</option>
                    <option value="12">12</option>
                    <option value="6">6</option>
                    <option value="3">3</option>
                </select>
                <select class="form-select" aria-label="Default select example" name="communication">
                    <option selected>Choose a communication</option>
                    <option value="12">12</option>
                    <option value="6">6</option>
                    <option value="3">3</option>
                </select>
                <select class="form-select" aria-label="Default select example" name="soft_skills">
                    <option selected>Choose a soft skills</option>
                    <option value="12">12</option>
                    <option value="6">6</option>
                    <option value="3">3</option>
                </select>
                <select class="form-select" aria-label="Default select example" name="interaction_handling_skills">
                    <option selected>Choose a interaction handling skills</option>
                    <option value="12">12</option>
                    <option value="6">6</option>
                    <option value="3">3</option>
                </select>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous">
                <input type="button" name="next" class="next action-button" value="Next">
              </fieldset>
              <!-- fieldset 3 end -->

              <!-- fieldset 4 start -->
              <fieldset>
                <h2 class="fs-title">Step 4</h2>
                <select class="form-select" aria-label="Default select example" name="probing">
                    <option selected>Choose a probing</option>
                    <option value="10">10</option>
                    <option value="5">5</option>
                    <option value="fatal error">fatal error</option>
                </select>
                <select class="form-select" aria-label="Default select example" name="system_usage_and_action">
                    <option selected>Choose a system_usage_&_action</option>
                    <option value="10">10</option>
                    <option value="5">5</option>
                    <option value="fatal error">fatal error</option>
                </select>
                <select class="form-select" aria-label="Default select example" name="sop_followed">
                    <option selected>Choose a sop_followed</option>
                    <option value="10">10</option>
                    <option value="5">5</option>
                    <option value="fatal error">fatal error</option>
                </select>
                <select class="form-select" aria-label="Default select example" name="correct_info">
                    <option selected>Choose a correct_info</option>
                    <option value="10">10</option>
                    <option value="5">5</option>
                    <option value="fatal error">fatal error</option>
                </select>
                <select class="form-select" aria-label="Default select example" name="fatal_error">
                    <option selected>Choose a fatal_error</option>
                    <option value="yes">yes</option>
                    <option value="no">No</option>
                </select>
              <input type="button" name="previous" class="previous action-button-previous" value="Previous">
                <input type="button" name="next" class="next action-button" value="Next">
            </fieldset>
              <!-- fieldset 4 end -->

            <!-- fieldset 5 start -->
            <fieldset>
                  <h2 class="fs-title">Traninig</h2>
                  <h3 class="fs-subtitle">Traninig</h3>
                  <select class="form-select" aria-label="Default select example" name="Fatal_reason">
                    <option selected>Choose a Fatal_reason</option>
                    <option value="Negative or Harsh tone">Negative or Harsh tone</option>
                    <option value="Agent was condescending or sarcastic">Agent was condescending or sarcastic</option>
                    <option value="Usages of inappropriate language">Usages of inappropriate language</option>
                    <option value="Being rude to the merchant /buyer">Being rude to the merchant /buyer</option>
                    <option value="Said No to buyer/merchant directly or without apology">Said No to buyer/merchant directly or without apology</option>
                    <option value="Did not use buyer/merchant 's preferred language">Did not use buyer/merchant 's preferred language</option>
                    <option value="Ended interaction suddenly/abruptly (Hang up)">Ended interaction suddenly/abruptly (Hang up)</option>
                    <option value="The probing was irrelevant and prolonged interaction unnecessarily">The probing was irrelevant and prolonged interaction unnecessarily</option>
                    <option value="Agent didn't check all relevant portals before providing information">Agent didn't check all relevant portals before providing information</option>
                    <option value="Incorrect template selected/edited">Incorrect template selected/edited</option>
                    <option value="Wrong Category Selected">Wrong Category Selected</option>
                    <option value="Wrong Tagging (Social)">Wrong Tagging (Social)</option>
                    <option value="Wrong Sentiment (Social)">Wrong Sentiment (Social)</option>
                    <option value="Agent took the wrong system action/made incorrect case/escalation or took no action">Agent took the wrong system action/made incorrect case/escalation or took no action</option>
                    <option value="Agent did not follow correct SOP as per scenario">Agent did not follow correct SOP as per scenario</option>
                    <option value="Agent provided incorrect or incomplete information to buyer/merchant">Agent provided incorrect or incomplete information to buyer/merchant</option>

                </select>                 
                <select class="form-select" aria-label="Default select example" name="training_required" id="training_required">
                    <option selected>Choose a training_required</option>
                    <option value="yes">yes</option>
                    <option value="no">No</option>
                </select>
                <div id="training_agenda">
                    <select class="form-select" aria-label="Default select example" name="training_agenda" id="training_agenda">
                        <option selected>Choose a training_agenda</option>
                        <option value="Behavior">Behavior</option>
                        <option value="Resolution">Resolution</option>
                    </select>
                </div>
                    <select class="form-select" aria-label="Default select example" name="behavior_training_topic" id="behavior_training_topic">
                        <option selected>Choose a behavior_training_topic</option>
                        <option value="Greeting">Greeting</option>
                        <option value="Care & Enthusiasm">Care & Enthusiasm</option>
                        <option value="Communication">Communication</option>
                        <option value="Soft Skills">Soft Skills</option>
                        <option value="Interaction Handling Skills">Interaction Handling Skills</option>

                    </select>
                    <select class="form-select" aria-label="Default select example" name="resolution_training_topic" id="resolution_training_topic">
                        <option selected>Choose a resolution_training_topic</option>
                        <option value="Probing">Probing</option>
                        <option value="System Usage & Action">System Usage & Action</option>
                        <option value="SOP Followed">SOP Followed</option>
                        <option value="Correct/Complete Information">Correct/Complete Information</option>
                    </select>
                
                
                <textarea type="textarea" name="comment" placeholder="Comment" rows="5"></textarea>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous">
                <!-- <input type="submit"  class="submit action-button" value="Submit"> -->
                <button type="submit" class="btn btn-primary" >Submit</button>
                </div>
              </fieldset>
            <!-- fieldset 5 end -->

          </form>
      </div>
  </div>
  <!-- /.MultiStep Form -->
  <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  <script id="rendered-js">
  //jQuery time
  var current_fs, next_fs, previous_fs; //fieldsets
  var left, opacity, scale; //fieldset properties which we will animate
  var animating; //flag to prevent quick multi-click glitches
  

  

    const select = document.querySelector('#training_required');
    const div = document.querySelector('#training_div');
    const agenda = document.querySelector('#training_agenda');
    const behavior = document.querySelector('#behavior_training_topic');
    const training=document.querySelector('#resolution_training_topic');
    agenda.style.display='none';
    training.style.display='none';
    behavior.style.display='none';

// console.log(agenda,training,behavior);
    select.addEventListener('change', function() {
    const selectedValue = this.value;
    if (selectedValue === 'yes') {
        agenda.style.display = 'block';
    } else {
        agenda.style.display = 'none';
    }
    });
  agenda.addEventListener('change',function(){

    const selectedValue =this.value;
    if(selectedValue=='Behavior'){
      behavior.style.display='block';
    }else{
      training.style.display='block';
    }
  });
  
  $(".next").click(function () {
    if (animating) return false;
    animating = true;
  
    current_fs = $(this).parent();
    next_fs = $(this).parent().next();
  
    //activate next step on progressbar using the index of next_fs
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
  
    //show the next fieldset
    next_fs.show();
    //hide the current fieldset with style
    current_fs.animate({ opacity: 0 }, {
      step: function (now, mx) {
        //as the opacity of current_fs reduces to 0 - stored in "now"
        //1. scale current_fs down to 80%
        scale = 1 - (1 - now) * 0.2;
        //2. bring next_fs from the right(50%)
        left = now * 50 + "%";
        //3. increase opacity of next_fs to 1 as it moves in
        opacity = 1 - now;
        current_fs.css({
          'transform': 'scale(' + scale + ')',
          'position': 'absolute' });
  
        next_fs.css({ 'left': left, 'opacity': opacity });
      },
      duration: 800,
      complete: function () {
        current_fs.hide();
        animating = false;
      },
      //this comes from the custom easing plugin
      easing: 'easeInOutBack' });
  
  });
  
  $(".previous").click(function () {
    if (animating) return false;
    animating = true;
  
    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();
  
    //de-activate current step on progressbar
    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
  
    //show the previous fieldset
    previous_fs.show();
    //hide the current fieldset with style
    current_fs.animate({ opacity: 0 }, {
      step: function (now, mx) {
        //as the opacity of current_fs reduces to 0 - stored in "now"
        //1. scale previous_fs from 80% to 100%
        scale = 0.8 + (1 - now) * 0.2;
        //2. take current_fs to the right(50%) - from 0%
        left = (1 - now) * 50 + "%";
        //3. increase opacity of previous_fs to 1 as it moves in
        opacity = 1 - now;
        current_fs.css({ 'left': left });
        previous_fs.css({ 'transform': 'scale(' + scale + ')', 'opacity': opacity });
      },
      duration: 800,
      complete: function () {
        current_fs.hide();
        animating = false;
      },
      //this comes from the custom easing plugin
      easing: 'easeInOutBack' });
  
  });
  
  $(".submit").click(function () {
    return false;
  });
  //# sourceURL=pen.js
      </script>
  </body>
</html>