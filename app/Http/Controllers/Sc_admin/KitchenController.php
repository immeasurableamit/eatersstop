<?php

namespace App\Http\Controllers\Sc_admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

//models
use App\Models\Kitchen;
use App\Models\Stock;
use App\Models\KitchenAssignment;
use App\Imports\UploadKitchen;

class KitchenController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function __construct()
  {
     $this->middleware('auth');
  }
  public function index()
  {
    $kitchen = new Kitchen();

    return view('auth-admin.kitchen.list',[
      'kitchen_items'=>$kitchen->getKitchenItems(),
    ]);

  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('auth-admin.kitchen.create');

  }

  public function assignStock($id)
  {
    $kitchen = Kitchen::find($id);
    return view('auth-admin.kitchen.stock',[
      'kitchen_items'=>$kitchen,
    ]);

  }

  public function store(Request $request)
  {
        $this->validate($request,[
          'kitchen_item_id'=>'required',
          'quantity'=>'required'
        ]);
    $kitchen = new KitchenAssignment();
    $kitchen->kitchen_item_id = $request->input('kitchen_item_id');
    $kitchen->quantity = $request->input('quantity');
    $kitchen->save();
    return redirect('/kitchen-list')->with('success','Item assigned successfully');
  }


  public function uploadcsv(Request $request){

    Excel::import(new UploadKitchen, $request->file('file')->store('temp'));
    return back();
  }

  public function stock()
  {
    $stocks = Stock::all();
    return view('auth-admin.kitchen.stock-list', compact('stocks'));

  }
}
