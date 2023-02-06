<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet" > 
    <link href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css"> -->
    <link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        button.dt-button:first-child, div.dt-button:first-child, a.dt-button:first-child, input.dt-button:first-child{
            position: inherit ;
            margin-top: 37px ;
            margin-left: -150px ;
        }
        .dataTables_paginate{
            color: black;
            float: right;
            padding: 8px 16px;
            text-decoration: none;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
        background: none;
        color: black;
        border-radius: 4px;
        border: 1px solid #828282;
        }
        .a.fg-button.ui-button.ui-state-default {
            padding-right: 10px;
        }        
        .dataTables_wrapper .dataTables_paginate .paginate_button:active {
        background: none;
        color: black;
        }
    </style>
</head>
<body>
    asdasd
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.jqueryui.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.jqueryui.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.colVis.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


    <script>
        $(document).ready(function() {
            //     $('#example').DataTable( 
            //     {
            //     dom: 'Bfrtpi',
            
            //     buttons: [
            //         'copy', 'excel'
            //     ]
            // } );

            toastr.options = {
  "closeButton": false,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
        } );

        toastr["success"]('{{ $success }}');
    </script>
</body>
</html>