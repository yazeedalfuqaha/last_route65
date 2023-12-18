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


        table , td {
            font-weight: bold;
            border:1px solid #000;
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


    @foreach($data as $info)

    <tr>
        <td>{{$info->category_name;}}</td>
        <td>
            <a href="{{url('delete_category' , $info->id)}}" onclick="confirmation(event)"><i class='bx bxs-trash-alt' style='color:#fc0606; font-size: 35px;'></i>
</a>
        </td>
    </tr>
    @endforeach
   </table>

		
	</section>
	<!-- CONTENT -->
	

	@include('admin.js')

    <script>

function confirmation(ev) {
    ev.preventDefault(); // This is optional, depends on your use case

    var urlToRedirect = ev.currentTarget.getAttribute('href');

    console.log(urlToRedirect);

    swal({
        title: "Are you sure to delete this ?",
        text: "You won't be able to revert this delete.",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willCancel) => {
        if (!willCancel) {
            // The user clicked cancel or closed the dialog
            // You might add handling for this scenario if needed
        } else {
            // The user clicked on "OK"
            window.location.href = urlToRedirect;
        }
    });
}


    </script>
</body>
</html>