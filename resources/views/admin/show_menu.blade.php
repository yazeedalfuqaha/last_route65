<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	@include('admin.css')

	<title>Route 65 || Show Menu</title>

    <style>
        .center{
            margin:auto;
            width:50%;
            border:2px solid black;
            text-align:center;
            margin-top:30px;
            
        }

        .h2_font{

        font-size:40px;
        padding-bottom:40px;
        text-align:center;
        margin-top:40px;


        }

        table , td  {
            border:1px solid black;
        }

        .img_size{
            height:100px;
            width:150px;
        }

        table , th{
            border:1px solid #fff;
        }

        /* CSS for pagination */
.pagination {
    margin-top: 1px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.pagination .pagination-list {
    display: flex;
    list-style: none;
    padding: 0;
    margin: 0;
}

.pagination .pagination-list li {
    margin: 0 5px;
}

.th_color{
    background-color:#000;
    color:#fff;
    padding : 30px !important;
}




        
    </style>
</head>
<body>


	@include('admin.sidebar')



	<!-- CONTENT -->
	<section id="content">
		

    @include('admin.nav')


    <div class="h2_font">
        <h1>All Menu</h1>
    </div>


   <!-- Your Blade pagination code -->
<div class="pagination">
    {{ $product->links() }}
</div>

<!-- Your table with pagination -->
<table class="center">
    <thead>
        <tr class="th_color">
            <th>Id Number</th>
            <th>Meal Title</th>
            <th>Description</th>
            <th>Category</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Discount Price</th>
            <th>Meal Image</th>
        </tr>
    </thead>
    <tbody>
        @foreach($product as $menu)
        <tr>
            <td>{{$menu->id}}</td>
            <td>{{$menu->title}}</td>
            <td>{{$menu->description}}</td>
            <td>{{$menu->category}}</td>
            <td>{{$menu->quantity}}</td>
            <td>{{$menu->price}} JOD</td>
            <td>{{$menu->discount_price}} JOD</td>
            <td>
                <img src="/product/{{$menu->image}}" alt="route_image" class="img_size">
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


    



   

		
	</section>
	<!-- CONTENT -->
	

	@include('admin.js')
</body>
</html>