<!DOCTYPE html>
<html>
	<head>
     <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
     <style type="text/css">
     .conten{
     	background-color:red;
     }.bow{
     	background-color:blue
     } .hhh
     	background-color:green;
     }
     </style>
	</head>
	<body>

	<div class="conten">
			@yield("conten")
		 </div>
	<div class="bow">
			@yield("body")
		 </div>

     <div class="hhh">
			@yield("hhh")
		 </div>
	</body>
</html>