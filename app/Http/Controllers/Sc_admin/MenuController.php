<?php

namespace App\Http\Controllers\Sc_admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
//models
use App\Models\Menu;
use App\Models\FoodCategory;

class MenuController extends Controller
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

        $menu = Menu::when($keyword, function ($query, $keyword) {
            $query
                ->orWhere('menu.name', 'LIKE', '%' . $keyword . '%')
                ->orWhere('menu.description', 'LIKE', '%' . $keyword . '%');
        })
            ->orderBy('id', 'desc')->paginate(10);

        return view('auth-admin.menu.list', [
            'menu' => $menu,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $food_category = FoodCategory::select('id', 'name')->where('status', 1)->get();
        return view('auth-admin.menu.create', [
            'food_category' => (empty($food_category)) ? [] : $food_category,
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
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'cover_image' => 'image|nullable|max:1999',
            'price' => 'required',
            'category_id' => 'required'
        ]);

        //handle the upload
        if ($request->hasFile('cover_image')) {
            //file name with extension
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            //get just file name
            $filename  = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //get just extension
            $extension =  $request->file('cover_image')->getClientOriginalExtension();
            //file name to store
            $filenametostore = $filename . '_' . time() . '.' . $extension;
            //upload image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $filenametostore);

            $menu = new Menu();
            $menu->name = $request->input('name');
            $menu->description = $request->input('description');
            $menu->price = $request->input('price');
            $menu->category_id = $request->input('category_id');
            $menu->cover_image = $filenametostore;
            $menu->uploaded_by = auth()->user()->id;
            $menu->save();
            return redirect('/menu')->with('success', 'Menu created successfully');
        }
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
        $food_category = FoodCategory::select('id', 'name')->where('status', 1)->get();
        $menu = Menu::find($id);
        return view('auth-admin.menu.edit-menu', [
            'menu' => $menu,
            'food_category' => (empty($food_category)) ? [] : $food_category,
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

        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'cover_image' => 'image|nullable|max:1999',
            'price' => 'required',
            'category_id' => 'required'
        ]);

        //handle the upload
        if ($request->hasFile('cover_image')) {
            $menu_image = $request->file('cover_image');
            $imageName = $menu_image->getClientOriginalName();
            $menu =  Menu::find($id);
            $menu->name = $request->name;
            $menu->description = $request->description;
            $menu->price = $request->price;
            $menu->category_id = $request->category_id;
            $menu->cover_image = $imageName;
            $menu->uploaded_by = auth()->user()->id;
            $menu->save();
            $model = $menu->id;
            if (!empty($model)) {
                $menu_image->move(public_path() . '/uploads/menu/' . $model, $imageName);
            }
            return redirect('/menu')->with('success', 'Menu updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deletemenu($id)
    {
        $menu = Menu::find($id);
        if (!empty($menu)) {
            $menu->status = 0;
            $menu->save();
            return redirect('/menu')->with('success', 'Menu Deleted successfully');
        }
        return redirect('/menu')->with('error', 'Menu provided does not exist');
    }
}
