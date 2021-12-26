<?php

namespace App\Http\Controllers\Sc_admin;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

//models
use App\Models\Banners;

class BannersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
      $banners = new Banners();
      $uploaded_banners = $banners->getBanners();
        return view('auth-admin.banners.list',[
          'banners'=>(empty($uploaded_banners))?[]:$uploaded_banners
        ]);
    }

    public function create()
    {
        return view('auth-admin.banners.create');
    }
    public function store(Request $request)
    {
          $this->validate($request,[
            'name'=>'required',
            'banner_image'=>'image|nullable|max:1999',
            'banner_image.*' => 'mimes:jpeg,jpg,png,gif|max:2048'
          ]);
    //handle the upload
    if ($request->hasFile('banner_image')) {
      $banner_image = $request->file('banner_image');
      $bannerImage = $banner_image->getClientOriginalName();
      $banners = new Banners();
      $banners->name = $request->name;
      $banners->banner_image = $bannerImage;
      $banners->uploaded_by = auth()->user()->id;
      $banners->save();
      $model = $banners->id;
      if (!empty($model)) {
        $banner_image->move(public_path().'/uploads/banner_images/'.$model, $bannerImage);
      }
      return redirect('/banners')->with('success','Banner updated successfully');
    }
    }
}
