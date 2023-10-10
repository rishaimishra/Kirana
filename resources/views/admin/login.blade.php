
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
      <title>Global Steel Suppliers & Manufacturers | Mining - Tata Group</title>
      <!-- include common vendor stylesheets & fontawesome -->
      <link rel="stylesheet" type="text/css" href="{{asset('admin/css/bootstrap.min.css')}}">
      <!-- ace.css -->
      <link rel="stylesheet" type="text/css" href="{{asset('admin/css/ace.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('admin/css/style.css')}}">
      <!-- "Basic Elements" page styles, specific to this page for demo only -->
   </head>
   <body>
      <div class="wrapper-page">
         <div class="panel panel-color panel-primary panel-pages">
            <div class="panel-heading rm08 text-center"> 
               <a href="index.html"><img src="images/logo-blue.png" alt=""></a>                    
            </div>
            <div class="panel-body">
               <form class="form-horizontal m-t-20">
                  <div class="form-group">
                     <div class="col-xs-12">
                        <input class="form-control input-lg" type="text" required="" placeholder="Username">
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-xs-12">
                        <input class="form-control input-lg" type="password" required="" placeholder="Password">
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-xs-12">
                        <div class="checkbox checkbox-primary">
                           <input id="checkbox-signup" type="checkbox">
                           <label for="checkbox-signup">
                           Remember me
                           </label>
                        </div>
                     </div>
                  </div>
                  <div class="form-group text-center m-t-40">
                     <div class="col-xs-12">
                        <a href="index.html" class="btn btn-primary btn-lg w-lg waves-effect waves-light rm01" type="submit">Log In</a>
                     </div>
                  </div>
                  <div class="form-group m-t-30">
                     <div class="col-sm-12">
                        <a href="recoverpw.html" class="rm01"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <!-- include common vendor scripts used in demo pages -->
      <script src="{{asset('admin/js/jquery.min.js')}}"></script>
      <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
      <!-- include ace.js -->
      <script src="{{asset('admin/js/ace.min.js')}}"></script>
      <script type="text/javascript">
         $(document).ready(function() {
         $('#example').DataTable();
         } );
      </script>
      <script src="{{asset('admin/js/jquery.dataTables.min.js')}}"></script>
      <script src="{{asset('admin/js/dataTables.bootstrap4.min.js')}}"></script>
      <link rel="stylesheet" type="text/css" href="{{asset('admin/css/dataTables.bootstrap4.min.css')}}">
   </body>
</html>