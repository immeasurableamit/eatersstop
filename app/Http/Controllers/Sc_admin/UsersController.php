<?php

namespace App\Http\Controllers\Sc_admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
//models
use App\Models\User;
use App\Models\Address;
use App\Models\Roles;


class UsersController extends Controller
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
      $users = User::orderBy('id','desc')->get();
      if (empty($users)) {
        return [];
      }

      return view('auth-admin.users.list',[
        'users'=>$users,
      ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $roles = new Roles();
      $address = new Address();

      return view('auth-admin.users.create',[
        'roles'=>$roles->getRoles(),
        'address'=>$address-> getRestaurantAddress()

      ]);

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
            'email'=>'required',
            'mobile_no'=>'required',
            'city'=>'required',
            'role_id'=>'required',
            'restaurant_id'=>'required',
            'password'=>'required'

          ]);
      $user = new User();
      $user->full_name = $request->input('full_name');
      $user->email = $request->input('email');
      $user->mobile_no = $request->input('mobile_no');
      $user->city = $request->input('city');
      $user->role_id = $request->input('role_id');
      $user->restaurant_id = $request->input('restaurant_id');
      $user->password = Hash::make($request->input('password'));
      $user->save();
      return redirect('/users')->with('success','user added successfully');
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
        $user = User::find($id);
        if (empty($user)) {
          return redirect('/users')->with('error','user provided does not exist');
        }
        $roles = new Roles();
        $address = new Address();
        return view('auth-admin.users.edit-user',[
          'user'=>$user,
          'roles'=>$roles->getRoles(),
          'address'=>$address-> getRestaurantAddress()
        ]);
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
          $this->validate($request,[
            'full_name'=>'required',
            'email'=>'required',
            'mobile_no'=>'required',
            'city'=>'required',
            'role_id'=>'required',
            'restaurant_id'=>'required',
          ]);
          $user =  User::find($id);
          $user->full_name = $request->input('full_name');
          $user->email = $request->input('email');
          $user->mobile_no = $request->input('mobile_no');
          $user->city = $request->input('city');
          $user->role_id = $request->input('role_id');
          $user->restaurant_id = $request->input('restaurant_id');
          $user->save();
          return redirect('/users')->with('success','user updated successfully');
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

    public function suspend($id){
      $user = User::find($id);
      if (!empty($user)) {
        $user->status = 0;
        $user->save();
        return redirect('/users')->with('success','user was suspended');

      }

      return redirect('/users')->with('error','user provided does not Exist');
    }

    public function activate($id){
      $user = User::find($id);
      if (!empty($user)) {
        $user->status = 1;
        $user->save();
        return redirect('/users')->with('success','user was activated');

      }
      return redirect('/users')->with('error','user provided does not Exist');
    }

}
