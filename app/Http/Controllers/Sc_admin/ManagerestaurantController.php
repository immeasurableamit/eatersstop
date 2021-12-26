<?php
  
namespace App\Http\Controllers\Sc_admin;
use App\Http\Controllers\Controller;
use App\Rules\Name;
use Illuminate\Http\Request;
use Twilio\Rest\Client;
use Illuminate\Support\Facades\Validator;


//Models
use App\Models\Address;

class ManagerestaurantController extends Controller
{


    public function restaurantList()
    {
        $list = Address::all();
        return view('auth-admin.manage-list.index',
        [
            'list'=>$list
        ]);
    }

    public function create()
    {
        return view('auth-admin.manage-list.create');
    }
  
    public function addRestaurant(Request $request)
    {
        Validator::validate($request->all(), [
            'name'=>'required|string|max:128',
            'location'=>'required|string|max:128',
            'street'=>'required|string|max:128',
            'phone_number'=>'required',
            'email'=>'required|string|email|max:56',
        ]);

        $model = new Address;
        $model->name = $request->name;
        $model->phone_number = $request->phone_number;
        $model->street = $request->street;
        $model->email = $request->email;
        $model->location = $request->location;
        $model->save();
        $model_id = $model->id;

        if (!empty($model_id)) {

           return redirect('/restaurant-list')->with('success','restaurant added successfuly');
            
        }
        else{
            return view('cart.place-order');
        }

    }

    public function editRestaurant($id)
    {
         $editModel = Address::find($id);
        return view('auth-admin.manage-list.create', [
            'editModel' =>$editModel, 
        ]);

    }

    public function updateRestaurant(Request $request, $id)
    {
        Validator::validate($request->all(), [
            'name'=>'required|string|max:128',
            'location'=>'required|string|max:128',
            'street'=>'required|string|max:128',
            'phone_number'=>'required',
            'email'=>'required|string|email|max:56',
        ]);

        $updateModel = Address::find($id);
        $updateModel->name = $request->name;
        $updateModel->phone_number = $request->phone_number;
        $updateModel->street = $request->street;
        $updateModel->email = $request->email;
        $updateModel->location = $request->location;
        $updateModel->save();
        $updateModel = $updateModel->id;

        if (!empty($updateModel)) {

           return redirect('/restaurant-list')->with('success','restaurant added successfuly');
            
        }
        else{
            return view('cart.place-order');
        }

    }

    public function deleteRestaurant($id){ 
        Address::find($id)->delete($id);    
        return redirect('/restaurant-list')->with('success','restaurant added successfuly');
    }
}