<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	@include('admin.css')

	<title>Route 65 || Add To Menu</title>

    <style>
         .div_center{

            text-align: center;
            padding-top:90px;
            }

            .h2_font{

            font-size:40px;
            padding-bottom:30px;
            

            }


            h1 {
                margin-bottom: 40px;
            }

            label {
                color: #333;
            }

            .btn-send {
                font-weight: 300;
                text-transform: uppercase;
                letter-spacing: 0.2em;
                width: 80%;
                margin-left: 3px;
                }
            .help-block.with-errors {
                color: #ff5050;
                margin-top: 5px;

            }

            .card{
                margin-left: 10px;
                margin-right: 10px;
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

    <h2 class="h2_font">Add Menu Item</h2>

    </div>

    

<form action="{{url('/add_menu')}}" method="POST"  enctype="multipart/form-data">

@csrf
    
    <div class="row ">
      <div class="col-lg-7 mx-auto">
        <div class="card mt-2 mx-auto p-4 bg-light">
            <div class="card-body bg-light">
       
            <div class = "container">
                             

            

            <div class="controls">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_name">Product Title :</label>
                            <input id="form_name" type="text" name="title" class="form-control" placeholder="Please enter your Product Title :" required="required" data-error="Product Title is required.">
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_lastname">Price : </label>
                            <input id="form_lastname" type="number" name="price" class="form-control" placeholder="Please enter your price" required="required" data-error="Price is required.">
                                                            </div>
                    </div>

                    
                </div>

                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_email">Discount Price :  </label>
                            <input id="form_email" type="number" name="discount_Price" class="form-control" placeholder="Please enter your Descount Price : *"  data-error="Discount Price is required.">
                            
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_need">Category : </label>
                            <select id="form_need" name="Category" class="form-control" required="required" data-error="Please specify your need.">
                                <option value="" selected disabled>--Select Your Gategory--</option>\

                                @foreach($category as $info)
                                <option value="{{$info->category_name}}" >{{$info->category_name}}</option>
                                @endforeach
                              
                               
                            </select>
                            
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_lastname">Quantity :  </label>
                            <input id="form_lastname" type="number" name="quantity" class="form-control" placeholder="Please enter your Quantity"  data-error="Quantity is required.">
                                                            </div>
                    </div>

                   



                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form_message">discription : </label>
                            <textarea id="form_message" name="discription" class="form-control" placeholder="Write your message discription : " rows="4" required="required" data-error="Please, leave  a discription."></textarea
                                >
                            </div>

                        </div>


                    <div class="col-md-12">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_lastname">Image : </label>
                            <input id="form_lastname" type="file" name="image" class="form-control" placeholder="" required="required" data-error="Image  is required.">
                                                            </div>
                    </div>

                    
                        
                        <input type="submit" class="btn btn-dark btn-send  pt-2 btn-block" value="Add to Menu "  style="background-color:#000; margin-top:30px !important;">
                    
                </div>
          
                </div>


        </div>
         </form>
        </div>
            </div>


    </div>
        <!-- /.8 -->

    </div>
    <!-- /.row-->

</div>
</div>

</form>




   

		
	</section>
	<!-- CONTENT -->
	

	@include('admin.js')
</body>
</html>