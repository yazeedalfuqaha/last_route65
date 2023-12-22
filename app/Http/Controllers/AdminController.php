<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class AdminController extends Controller
{
    public function view_category()

    {
        $data = category::all();
        return view('admin.category' , compact('data'));
    }


    public function add_category(Request $request)

    {
        $data = new Category(); // Assuming Category is your model class name

        $data->category_name = $request->category;

        $data->save();

        return redirect()->back()->with('message', 'Category Added Successfully');

    }


    public function delete_category($id)

    {

        $data = category::find($id);

        $data->delete();

        return redirect()->back();

    }



    public function view_menu()

    {
        $category = category::all();
        return view('admin.menu' , compact('category'));
    }


    public function add_menu(Request $request)
    {
        $product = new product;

        $product->title = $request->title;

        $product->description = $request->discription;

        $product->price = $request->price;

        $product->discount_Price = $request->discount_Price;

        $product->quantity = $request->quantity;

        $product->category = $request->Category;

        $image = $request->image;

        $imagename = time(). '.' . $image->getClientOriginalExtension();


        $request->image->move('product' , $imagename);

        $product->image = $imagename;

        $product->save();

        return redirect()->back()->with('message', 'Menu Item Added Successfully');
       
    }


    public function show_product()
    {
        $product = product::paginate(5); // get all the data from product table 
        return view('admin.show_menu' , compact('product'));
    }


}
