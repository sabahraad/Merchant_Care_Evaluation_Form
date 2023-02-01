<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet" > 
    <link href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        button.dt-button:first-child, div.dt-button:first-child, a.dt-button:first-child, input.dt-button:first-child{
            position: inherit !important;
            margin-top: 37px !important;
            margin-left: -150px !important;
        }
        .dataTables_paginate{
            color: black;
            float: right;
            padding: 8px 16px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
<table id="example" class="table table-bordered table-striped" style="width:100%">

    <thead>
        <tr>
            <th>serial</th>
            <th>quality_evaluator</th>
            <th>agent_name</th>
            <th>interaction_date</th>
            <th>evaluation_date</th>

            <th>skill_group</th>
            <th>sampling_type</th>
            <th>case_no</th>
            <th>order_no</th>

            <th>category</th>
            <th>information_sub_category</th>
            <th>complaint_sub_category</th>
            <th>service_request_sub_category</th>

            <th>greetings</th>
            <th>care_and_enthusiasm</th>
            <th>communication</th>
            <th>soft_skills</th>

            <th>skill_group</th>
            <th>interaction_handling_skills</th>
            <th>probing</th>
            <th>system_usage_and_action</th>

            <th>sop_followed</th>
            <th>correct_info</th>
            <th>fatal_error</th>
            <th>Fatal_reason</th>

            <th>training_required</th>
            <th>training_agenda</th>
            <th>behavior_training_topic</th>
            <th>resolution_training_topic</th>

            <th>comment</th>
            
        </tr>
    </thead>

    <tbody>
    @foreach($result as $result)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$result->quality_evaluator}}</td>
            <td>{{$result->agent_name}}</td>
            <td>{{$result->interaction_date}}</td>
           <td>{{$result->evaluation_date}}</td>   
            
            <td>{{$result->skill_group}}</td>
            <td>{{$result->sampling_type}}</td>
            <td>{{$result->case_no}}</td>
            <td>{{$result->order_no}}</td>  
            
            <td>{{$result->category}}</td>
            <td>{{$result->information_sub_category}}</td>
            <td>{{$result->complaint_sub_category}}</td>
            <td>{{$result->service_request_sub_category}}</td> 

            <td>{{$result->greetings}}</td>
            <td>{{$result->care_and_enthusiasm}}</td>
            <td>{{$result->communication}}</td>
            <td>{{$result->soft_skills}}</td> 
              <td>{{$result->skill_group}}</td>
            <td>{{$result->interaction_handling_skills}}</td>
            <td>{{$result->probing}}</td>
            <td>{{$result->system_usage_and_action}}</td>
            <td>{{$result->sop_followed}}</td> 

            <td>{{$result->correct_info}}</td>
            <td>{{$result->fatal_error}}</td>
            <td>{{$result->Fatal_reason}}</td>
            <td>{{$result->training_required}}</td> 

            <td>{{$result->training_agenda}}</td>
            <td>{{$result->behavior_training_topic}}</td>
            <td>{{$result->resolution_training_topic}}</td>
            <td>{{$result->comment}}</td> 
        </tr>
@endforeach
    </tbody>
</table>
</div>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/dataTables.jqueryui.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.jqueryui.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.colVis.min.js"></script>

        <script>
            $(document).ready(function() {
                 $('#example').DataTable( 
                    {
                    // lengthChange: false,
                    // buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
                    dom: 'lBfrtpi',
                
                    buttons: [
                        'copy', 'excel'
                    ]
                } );
            } );
        //  $(document).ready(function() {
        //    var table= $('#example').DataTable( 
        //     {
        //         // dom: 'lBfrtip',
        //         dom: 'lBfrtip',
        //         "ordering": true,
        //         buttons: [
        //             'copy', 'excel'
        //         ]
        //     } 
        //     );
         
            
        // } );
        </script>
</body>
</html>
