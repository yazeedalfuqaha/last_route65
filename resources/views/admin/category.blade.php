<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	@include('admin.css')

	<title>Route 65 || Category</title>

    <style>

        .div_center{

            text-align: center;
            padding-top:90px;
        }

        .h2_font{

            font-size:40px;
            padding-bottom:40px;
            font-style: italic;
           
        }

        .button {
        background-color: #008CBA; /* Green */
        border: none;
        color: white;
        padding: 9px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        }

        .center{
            margin:auto;
            text-align: center;
            width: 50%;
            margin-top:40px;
            border:3px solid #000;
        }

       
        

    </style>

</head>
<body>


	@include('admin.sidebar')



	<!-- CONTENT -->
	<section id="content">
		

    @include('admin.nav')



    @if(session()->has('message'))

    <div class="alert alert-success">


    <button type="button" class="Close"  data-dismiss="alert"  aria-hidden="true"></button>
    {{session()->get('message')}}

    </div>

    @endif

    <div class="div_center">

        <h2 class="h2_font">Add Category</h2>

        <form action="{{url('/add_category')}}" method="POST">

        @csrf

        <input type="text" name="category" placeholder="Write Category Name">

        <button class="button button2">Add Category</button>

        </form>

    </div>


   <table class="center">
    <tr>
        <td>Category Name</td>
        <td>Action</td>
    </tr>

    <tr>
        <td>Beef</td>
        <td>
            <a href="" class="btn btn-danger">Delete</a>
        </td>
    </tr>
   </table>

		
	</section>
	<!-- CONTENT -->
	

	@include('admin.js')
</body>
</html>