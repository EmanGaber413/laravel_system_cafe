<?php

namespace App\Http\Controllers;

use App\Models\BookTable;
use App\Models\food;
use App\Models\foodCard;
use App\Models\orders;
use Illuminate\Http\Request;

use \app\Models\User;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{public function index(){
    $foods=food::all();
    return view('profile.home',compact('foods'));
}

public function addToCard(Request $request){
    $food=food::FindOrFail($request->food_id);
    $card=new foodCard();
    $card->userID=Auth::id();
    $card->food_id=$food->id;
    $card->food_name=$food->food_name;
    $card->food_details=$food->food_details;
    $card->food_image=$food->food_image;
    $card->food_quantity=$request->quantity;
    $card->food_price= $card->food_quantity * (float) $food->food_price;

    $card->save();
 return redirect()->back()->with('card_message', 'Item added to cart successfully!');
}

public function foodcard()
{
    $current_auth = Auth::id();
    $card_food_info = FoodCard::where('userID', "=",$current_auth)->get();

    return view('show_card', compact('card_food_info'));
}

public function removefromcard($id)
{
$remove_food=foodcard::findorfail($id);
$remove_food->delete();
return redirect()->back();

}
 public function cardconfirm( Request $request ){
    $total_price = $request->input('total_price');

    $current_user=Auth::id();
    $card_food=foodcard::where('userID', '=', $current_user)->get();
foreach ($card_food  as $card_foods){
    $single_order=new orders();
    $single_order->customer_name=Auth::user()->name;
    $single_order->customer_email=Auth::user()->email;
    $single_order->customer_address=Auth::user()->address?? 'No address provided';
    $single_order->food_name=$card_foods->food_name;
    $single_order->food_image=$card_foods->food_image?? 'default_image.jpg';
    $single_order->food_quantity=$card_foods->food_quantity;
    $single_order->food_price=$card_foods->food_price;

    $single_order->save();

 };
        return redirect()->back()->with("confirm_order",'order added successfully');
    }

public function gofile(){
    return view('admin.adminfile');
}

public function backhome(){
    return view('profile.main');
}

    public function home()
    {
      if (Auth::id()) {
           $usertype = Auth::user()->usertype;
             if ($usertype=='admin'){
                return view('dashboard');
              }
                else {return view('dashboard');
                }
      };
        return redirect()->route('login');
    }

public function booktable( Request $request){
    $book= new BookTable();
    $book->Email=$request->email;
    $book->number_of_guests	=$request->number_of_guests	;
    $book->time=$request->time;
    $book->date=$request->date;
    $book->save();
    return redirect()->back()->with('booktable', 'Your table has been booked successfully!');


}

}
