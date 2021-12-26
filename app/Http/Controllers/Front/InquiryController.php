<?php
  
namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Rules\Name;
use Illuminate\Http\Request;
use Twilio\Rest\Client;
use Illuminate\Support\Facades\Validator;

//Models
use App\Models\BookTable;

class InquiryController extends Controller
{
  
    public function bookTable(Request $request)
    {
        Validator::validate($request->all(), [
            'customer_name'=>
            [ 
                'required',
                'min:3',
                'max:255',
                'string',
                new Name
            ],
            'phone_number'=>'required',
            'email'=>'required|string|email|max:56',
            'message'=>'nullable|string|min:3|max:56',
            'date'=>'required',
            'guest_number'=>'required',
        ]);

        $model = new BookTable;
        $model->customer_name = $request->customer_name;
        $model->phone_number = $request->full_number;
        $model->message = $request->message;
        $model->date = $request->date;
        $model->meal_time = $request->meal_time;
        $model->guest_number = $request->guest_number;
        $model->email = $request->email;
        $model->save();
        $model_id = $model->id;

        if (!empty($model_id)) {

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