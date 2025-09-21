<?php

namespace App\Http\Controllers;

use App\Models\BookTable;
use App\Models\food;
use App\Models\orders;
use Illuminate\Http\Request;

class admincontroller extends Controller
{
    public function addfood(){
        return view('admin.addfood');
    }
      public function postaddfood(Request $request){

        $food= new food();
        $food->food_name=$request->food_name;
        $food->food_details=$request->food_details;
        $food->food_price=$request->food_price;


    $food->save();

    return redirect()->back()->with('success', 'Food item added successfully!');
}

public function showfood(){
    $foods=food::all();
    return view('admin.showfood',compact('foods'));
}

public function deletefood($id){
    $foods=food::findOrFail($id);
    $foods->delete();
     return redirect()->back()->with('delete', 'Food item deleted successfully!');
}

public function updatefood($id){
    $foods = Food::find($id);
    return view('admin.updatefood', compact('foods'));
}

public function vieworders(){
    $orders=orders::all();
    return view('admin.vieworders',compact('orders'));
}

public function delivered($id){
 $order = orders::findOrfail($id);
 $order->order_status='Delivered';
 $order->save();
 return redirect()->back();
}

public function cancel($id){
 $order = orders::findOrfail($id);
 $order->order_status='Canceled';
  $order->save();
 return redirect()->back();
}

public function viewbookedtable(){
    $bookedtables=BookTable::all();
    return view("admin.showbookedtable",compact("bookedtables"));

}}
