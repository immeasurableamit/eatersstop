<?php

namespace App\Http\Controllers\Sc_admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
//models
use App\Models\Orders;
use App\Models\Menu;
use DB;
class OrdersController extends Controller
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
      $orders = new Orders();
      return view('orders.list',[
        'orders'=>$orders->getAllOrders(),
      ]);
    }

    // public function orderdetails($id)
    // {
    //   $orders = Orders::find($id);
    //   if(empty($orders)){
    //     return redirect('/orders')->with('error','Order not found please select another one');
    //
    //   }
    //   $menu_ids = collect(json_decode($orders->menu_id));
    //   $menu_quantity = json_decode($orders->quantity);
    //   $menu_amount = json_decode($orders->amount);
    //   $menu_details = $menu_ids->combine([$menu_quantity]);
    //   foreach ($menu_details as $key => $value) {
    //     echo '<p>menu id->'.$key.' quantity->'.$value.'</p>';
    //   }
    // //  print_r($menu_details);exit;
    //   exit;
    //   $menu = Menu::whereIn('id',json_decode($orders->menu_id))->get();
    //   $quantity = json_decode($orders->quantity);
    //   $price =  json_decode($orders->amount);
    //   foreach ($menu as $key => $value) {
    //     foreach ($quantity as   $key => $value) {
    //       foreach ($price as $key => $value) {
    //       $menu[$key]['quantity'] = $quantity[$key];
    //       $menu[$key]['price'] = $price[$key];
    //       $menu[$key]['total_amount'] = $quantity[$key] * $price[$key] ;
    //       }
    //
    //     }
    //   }
    //   // echo "<pre>";
    //   // print_r($menu);exit;
    //   return view('orders.order-details',[
    //     'orders'=>$orders,
    //     'menu'=>$menu,
    //     'quantities'=>json_decode($orders->quantity)
    //   ]);
    // }



    public function orderdetails($id)
    {
        $orders = Orders::find($id);

        if(empty($orders)){
          return redirect('/orders')->with('error','Order not found please select another one');

        }
      $menu = Menu::find($orders->menu_id);
      $menu = Menu::whereIn('id',json_decode($orders->menu_id))->get();
      $quantity = json_decode($orders->quantity);
      $price =  json_decode($orders->amount);
      foreach ($menu as $key => $value) {
       foreach ($quantity as   $key => $value) {
          foreach ($price as $key => $value) {
          $menu[$key]['quantity'] = $quantity[$key];
         $menu[$key]['price'] = $price[$key];
          $menu[$key]['total_amount'] = $quantity[$key] * $price[$key] ;
         }

       }
     }
      return view('orders.order-details',[
          'orders'=>$orders,
          'menu'=>$menu,
          'quantities'=>json_decode($orders->quantity)
        ]);
      }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function acceptOrder($id){
      $orders = Orders::find($id);
      if (!empty($orders)) {
        $orders->status = 2;
        $orders->save();
        return redirect('/orders')->with('success','Order Acccepted');

      }

      return redirect('/orders')->with('error','Order provided does not Exist');
    }

    public function rejectOrder($id){
      $orders = Orders::find($id);
      if (!empty($orders)) {
        $orders->status = 0;
        $orders->save();
        return redirect('/orders')->with('success','Order rejected');

      }

      return redirect('/orders')->with('error','Order provided does not Exist');
    }
}
