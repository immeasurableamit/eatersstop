<?php

namespace App\Http\Controllers\Sc_admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
//models
use App\Models\Customers;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UploadCustomers;

class CustomersController extends Controller
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
     
    public function index(Request $request)
    {
        $keyword = request()->input('keyword', '');

        $customers = Customers::when($keyword, function ($query, $keyword) {
            $query
                ->orWhere('customers.full_name', 'LIKE', '%' . $keyword . '%')
                ->orWhere('customers.mobile_no', 'LIKE', '%' . $keyword . '%')
                ->orWhere('customers.location', 'LIKE', '%' . $keyword . '%');
        })
            ->orderBy('id', 'desc')->paginate(10);

        return view('auth-admin.customers.list', [
            'customers' => $customers,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('auth-admin.customers.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $this->validate($request,[
            'full_name'=>'required',
            'mobile_no' => 'required|numeric',
            'location'=>'required'
          ]);
      $customer = new Customers();
      $customer->full_name = $request->input('full_name');
      $customer->mobile_no = $request->input('mobile_no');
      $customer->location = $request->input('location');
      $customer->added_by = auth()->user()->id;
      $customer->save();
        return redirect()->route('customers')->with('success', 'customer added successfully');
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

    public function import(){

      return view('auth-admin.customers.upload');
    }


    public function uploadcsv(Request $request){

       Excel::import(new UploadCustomers, $request->file('file')->store('temp'));
        return back();
    }
}
