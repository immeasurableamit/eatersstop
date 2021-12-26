<?php

namespace App\Http\Controllers\Sc_admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
//models
use App\Models\BookTable;

class BooktableController extends Controller
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
      $table = new  BookTable();

      return view('auth-admin.table.list',[
        'booked_tables'=>$table->getBookedTables(),
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

    public function acceptBooking($id){
      $table = BookTable::find($id);
      if (!empty($table)) {
        $table->status = 2;
        $table->save();
        return redirect('/tablebooking')->with('success','Booking Acccepted');

      }

      return redirect('/tablebooking')->with('error','Booking rejected');
    }

    public function rejectBooking($id){
      $table = BookTable::find($id);
      if (!empty($table)) {
        $table->status = 0;
        $table->save();
        return redirect('/tablebooking')->with('success','Booking rejected');

      }

      return redirect('/tablebooking')->with('error','booking provided does not Exist');
    }

}
