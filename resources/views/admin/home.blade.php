<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	@include('admin.css')

	<title>Route 65 || Admin Panel</title>
</head>
<body>


	@include('admin.sidebar')



	<!-- CONTENT -->
	<section id="content">
		

    @include('admin.nav')



    @include('admin.body')

		
	</section>
	<!-- CONTENT -->
	

	@include('admin.js')
</body>
</html>