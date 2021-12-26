<?php

namespace App\Http\Controllers\Front;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Address;
use App\Models\Banners;
use DB;

class HomeController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    public function index()
    {
        $menu = Menu::all();
        $banners = Banners::all();
        return view('pages.index',
            [
                'menu' => $menu,
        ]);
    }

    public function resAddress($id)
    {

        $address = Address::findOrFail($id);
        return json_encode($address);
    }

    public function faqs()
    {
        return view('pages.faqs');
    }

    public function contactus()
    {
        return view('pages.contact-us');
    }
    public function success()
    {
        return view('pages.success');
    }

    public function aboutus()
    {
        return view('pages.about-us');
    }
    public function menu()
    {
        $menu = Menu::all();
        session()->flash('message', 'Post successfully updated.');
        return view('pages.menu',
        [
            'menu' =>$menu,
        ]);
    }

}
