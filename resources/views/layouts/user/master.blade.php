<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kwuo-admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('kwor-admin/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Google fonts - Popppins for copy-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,800">
    <!-- orion icons-->
    <link rel="stylesheet" href="{{asset('kwor-admin/css/orionicons.css') }}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('kwor-admin/css/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('kwor-admin/css/custom.css') }}">
  </head>
    <body>
    @include('layouts.user.header')
    @include('layouts.user.side')
    @yield('content')
    @include('layouts.user.footer')
    <script>
      alert("hi");
   function Naira(){
	var unit= document.getElementById('unit').value;


    document.getElementById('ans').innerHTML= 1 * unit;
    return true;
}
function add(){
  var units=document.getElementById("unit").value;
  var new=document.getElementById('total');
  new.value=units*1*100;
  console.log(new.value);
}	

</script>
    <script src="{{asset('kwor-admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{asset('kwor-admin/vendor/popper.js/umd/popper.min.js') }}"> </script>
    <script src="{{asset('kwor-admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('kwor-admin/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
    <script src="{{asset('kwor-admin/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script src="{{asset('kwor-admin/js/charts-home.js') }}"></script>
    <script src="{{asset('kwor-admin/js/front.js')}}"></script>
    <script src="{{asset('kwor-admin/js/charts-custom.js') }}"></script>
    
    </body>
</html>