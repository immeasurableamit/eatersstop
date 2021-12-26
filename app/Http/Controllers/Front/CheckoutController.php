<?php
  
namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Menu;
use App\Models\Orders;
use App\Models\User;
use App\Notifications\OrderProcessed;
use Twilio\Rest\Client;

class CheckoutController extends Controller
{
  
    public function cart()
    {
        return view('cart.cart');
    }
  

    public function addToCart($id)
    {
        $menu = Menu::findOrFail($id);
          
        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $menu->name,
                "quantity" => 1,
                "price" => $menu->price,
                "image" => $menu->cover_image
            ];
        }
          
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
  

    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
  

    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }

   public function placeOrder()
    {
        return view('cart.place-order');
    }


    public function checkoutOrder(Request $request)
    {
       

        Validator::validate($request->all(), [
            'firstname'=>'required|string|min:3|max:56',
            'lastname'=>'required|string|min:3|max:56',
            'town'=>'required|string|min:3|max:56',
            'street'=>'required|string|min:3|max:56',
            'email'=>'required|string|email|max:56',
            'suggestions'=>'nullable|string|min:3|max:56',
            'phone_number'=>'required',
        ]);

        $model = new Orders;
        $model->menu_id = $request->menu_ids;
        $model->amount = $request->prices;
        $model->total_amount = $request->total;
        $model->quantity = $request->menu_quantities;
        $model->first_name = $request->firstname;
        $model->last_name = $request->lastname;
        $model->phone_number = $request->phone_number;
        $model->email = $request->email;
        $model->street = $request->street;
        $model->town = $request->town;
        $model->comment = $request->suggestions;
        $model->save();
        $order = $model;
        $model_id = $model->id;
        if (!empty($model)) {
            $cart = session()->get('cart');
            $menu_ids = json_decode($request->menu_ids);
            foreach ($menu_ids as $key => $value) {
                unset($cart[$value]);
                session()->put('cart', $cart);
            }

            $this->whatsappNotification($request->full_number);
            return view('cart.thank-you');
            
        }
        else{
            return view('cart.place-order');
        }

    }

    private function whatsappNotification(string $recipient)
    {
        $sid    = getenv("TWILIO_AUTH_SID");
        $token  = getenv("TWILIO_AUTH_TOKEN");
        $restaurant_contact= getenv("TWILIO_WHATSAPP_FROM");
        $twilio = new Client($sid, $token);
        
        $body = "Hello, welcome to Webdent Technologies. How would you like you order deliered.";

        return $twilio->messages->create("whatsapp:$recipient",["from" => "whatsapp:$restaurant_contact", "body" => $body]);
    }
}