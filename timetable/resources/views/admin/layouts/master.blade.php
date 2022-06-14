<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Dashboard</title>
  <!--favicon-->
  <link rel="icon" href="{{asset('admin-theme/assets/images/favicon.ico')}}" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="{{asset('admin-theme/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
  <!-- simplebar CSS-->
  <link href="{{asset('admin-theme/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="{{asset('admin-theme/assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{asset('admin-theme/assets/css/animate.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{asset('admin-theme/assets/css/icons.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="{{asset('admin-theme/assets/css/sidebar-menu.css')}}" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="{{asset('admin-theme/assets/css/app-style.css')}}" rel="stylesheet"/>
  <link href="{{asset('admin-theme/assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('admin-theme/assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
   @toastr_css
</head>

<body>

    <div id="wrapper">
    
        @include('admin.layouts.header')
        
        @if(Auth::user()->role == 'student')
          @include('admin.layouts.sidebar_student')
        @elseif(Auth::user()->role == 'teacher')
          @include('admin.layouts.sidebar_teacher')
        @else
          @include('admin.layouts.sidebar')
        @endif

        @yield('content')
        @include('admin.layouts.footer')

    </div>

   
   

</body>




  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('admin-theme/assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('admin-theme/assets/js/popper.min.js')}}"></script>
  <script src="{{asset('admin-theme/assets/js/bootstrap.min.js')}}"></script>
  <!-- simplebar js -->
  <script src="{{asset('admin-theme/assets/plugins/simplebar/js/simplebar.js')}}"></script>
  <!-- waves effect js -->
  <script src="{{asset('admin-theme/assets/js/waves.js')}}"></script>
  <!-- sidebar-menu js -->
  <script src="{{asset('admin-theme/assets/js/sidebar-menu.js')}}"></script>
  <!-- Custom scripts -->
  <script src="{{asset('admin-theme/assets/js/app-script.js')}}"></script>
  
  <!-- Vector map JavaScript -->
  <script src="{{asset('admin-theme/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
  <script src="{{asset('admin-theme/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
  <!-- Chart js -->
  <script src="{{asset('admin-theme/assets/plugins/Chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('admin-theme/assets/plugins/Chart.js/Chart.extension.js')}}"></script>
  <!-- Index js for graph-->
  <link href="{{asset('admin-theme/assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
  <!-- <script src="{{asset('admin-theme/assets/js/index.js')}}"></script> -->


   <!--Data Tables js-->
   <script src="{{asset('admin-theme/assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('admin-theme/assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('admin-theme/assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{asset('admin-theme/assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js')}}"></script>
  <script src="{{asset('admin-theme/assets/plugins/bootstrap-datatable/js/jszip.min.js')}}"></script>
  <script src="{{asset('admin-theme/assets/plugins/bootstrap-datatable/js/pdfmake.min.js')}}"></script>
  <script src="{{asset('admin-theme/assets/plugins/bootstrap-datatable/js/vfs_fonts.js')}}"></script>
  <script src="{{asset('admin-theme/assets/plugins/bootstrap-datatable/js/buttons.html5.min.js')}}"></script>
  <script src="{{asset('admin-theme/assets/plugins/bootstrap-datatable/js/buttons.print.min.js')}}"></script>
  <script src="{{asset('admin-theme/assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js')}}"></script>
  <script src="{{asset('admin-theme/assets/js/bootstrap-confirmation.js')}}"></script>

  <script src="{{asset('admin-theme/assets/plugins/select2/js/select2.min.js')}}"></script>
    @toastr_js
    @toastr_render


    <script>
     $(document).ready(function() {
      //Default data table
       $('#default-datatable').DataTable();

       $('.single-select').select2();
       
       $('.multi-select').select2();

       var table = $('#example').DataTable( {
        lengthChange: false,
        // buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
      } );
 
     table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
      
      } );

    </script>

<script>

$(document).click(function(){
 $(".dropdown-menu").hide('slow'); 
});

$(".student_list").click(function(e){
  e.stopPropagation(); 
});


    $(".delete").on("submit", function(){
        return confirm("Do you want to delete this item?");
    });


    // global search header
    $('#student_name').keydown(function(){
         
          var query= $('#student_name').val();
         
            $.ajax({
            type: 'POST',
            url: "{{url('search_students')}}",
            data: {"_token": "{{ csrf_token() }}","student_name":query},
            dataType: "html",
            success: function(data) {
                if(!data)
                {
                  alert('dd')
                $('.dropdown-menu').show();
                  
                }
                else{
                  $('#student_list').html(data);
                  $('#student_list').show();
                }
               
            }
        })
        });

</script>

    



	
  
</body>
</html>
