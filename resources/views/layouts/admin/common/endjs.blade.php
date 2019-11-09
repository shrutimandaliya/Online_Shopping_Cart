 <!-- jQuery  -->
         <script src="{{url('/')}}/resources/assets/js/jquery.min.js"></script>
        <script src="{{url('/')}}/resources/assets/js/tether.min.js"></script>




        <!-- Tether for Bootstrap -->
        <script src="{{url('/')}}/resources/assets/js/bootstrap.min.js"></script>
        <script src="{{url('/')}}/resources/assets/js/metisMenu.min.js"></script>
        <script src="{{url('/')}}/resources/assets/js/waves.js"></script>
        <script src="{{url('/')}}/resources/assets/js/jquery.slimscroll.js"></script>

        <!-- Counter js  -->
        <script src="{{url('/')}}/resources/assets/plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="{{url('/')}}/resources/assets/plugins/counterup/jquery.counterup.min.js"></script>

        <!--C3 Chart-->
        <script type="text/javascript" src="{{url('/')}}/resources/assets/plugins/d3/d3.min.js"></script>
        <script type="text/javascript" src="{{url('/')}}/resources/assets/plugins/c3/c3.min.js"></script>

        <!--Echart Chart-->
        <script src="{{url('/')}}/resources/assets/plugins/echart/echarts-all.js"></script>
        
        <!-- Dashboard init -->
        <script src="{{url('/')}}/resources/assets/pages/jquery.dashboard.js"></script>

        {{-- Switchery --}}
         <script src="{{url('/')}}/resources/assets/plugins/switchery/switchery.min.js"></script>

        
        <!-- App js -->
        <script src="{{url('/')}}/resources/assets/js/jquery.core.js"></script>
        <script src="{{url('/')}}/resources/assets/js/jquery.app.js"></script>

        <!-- Required datatable js -->
        <script src="{{url('/')}}/resources/assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="{{url('/')}}/resources/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>

          <!-- Parsley js -->
        <script type="text/javascript" src="{{url('/')}}/resources/assets/plugins/parsleyjs/parsley.min.js"></script>

         <!-- Sweet-Alert  -->
        <script src="{{url('/')}}/resources/assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
        <script src="{{url('/')}}/resources/assets/pages/jquery.sweet-alert.init.js"></script>


       {{--  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script> --}}


        <script type="text/javascript">
    //         $(document).on('.onee','input',function(){
    //   alert();
    //   // var k = e.keyCode; 
    //   // return ((k > 64 && k < 91)|| (k > 96 && k < 123) || (k==8));
    // });
            $(document).ready(function(){
              // alert();
                 $('#datatable').DataTable({ });
                 $('#form').parsley();
                 

            });

        </script>

 <script type="text/javascript">


  $('form').submit(function(){
    $(this).find(':input[type=submit]').prop('disabled',true);
  });

    $(document).ready(function() {

      $("body").on('click','.btn-info',function(){ 
        // console.log('hii');

          var html = $(".control-group:last").clone();
          html.find('#clone').val('');

          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });

    });

    // function blockSpecialChar(e){
    //   var k = e.keyCode;
    //   console.log(e.keyCode);
    //   return ((k > 64 && k < 91)|| (k > 96 && k < 123) || (k==8) || (k==32) || (k==189));
    // }
    
</script>
{{-- <script type="text/javascript">
        $(document).ready(function()
                {
                
                  $('#form').parsley();



        $(document).on('change',".toggle",function()
        {

            id = $(this).attr('id'); 
            var mode = (this).checked;
           // alert(mode);

            if(mode == true){
                var status = 'Y';
               //alert(status);
            }
            else
            {
                var status = 'N';
                //alert(status);
                
            }

            $.ajax({
                type : "GET",
                 dataType : "JSON",
                url : "toggleStatus/"+id,
                data : {checkvar:status}, 
                success : function()
                {
                    alert( "Your Status successfully Changed");
                 //   var category = eval(data);
                    // msg = data.msg;
                    // success = data.success;
                    // $("#heading").html()
                }
            });
           
        });


        $(".toggleColor").on('change',function(){

            id = $(this).attr('id'); 
            var mode = (this).checked;
           // alert(mode);

            if(mode == true){
                var status = 'Y';
               // alert(status);
            }
            else
            {
                var status = 'N';
                //alert(status);
                
            }

            $.ajax({
                type : "GET",
                 dataType : "JSON",
                url : "toggleStatus/"+id,
                data : {checkvar:status}, 
                success : function()
                {
                    alert( "Your Status successfully Changed");
                 //   var category = eval(data);
                    // msg = data.msg;
                    // success = data.success;
                    // $("#heading").html()
                }
            });
           
        });

         $(".toggleProduct").on('change',function(){

            id = $(this).attr('id'); 
            var mode = (this).checked;
           // alert(mode);

            if(mode == true){
                var status = 'Y';
               // alert(status);
            }
            else
            {
                var status = 'N';
                //alert(status);
                
            }

            $.ajax({
                type : "GET",
                dataType : "JSON",
                url : "toggleStatus/"+id,
                data : {checkvar:status}, 
                success : function()
                {
                    alert( "Your Status successfully Changed");
                 //   var category = eval(data);
                    // msg = data.msg;
                    // success = data.success;
                    // $("#heading").html()
                }
            });
           
        });
    });



    
</script> --}}
      {{--   <script src="../plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
        <script src="../plugins/select2/js/select2.min.js" type="text/javascript"></script>
        <script src="../plugins/bootstrap-select/js/bootstrap-select.js" type="text/javascript"></script>
        <script src="../plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
        <script src="../plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
        <script src="../plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script> --}}
























