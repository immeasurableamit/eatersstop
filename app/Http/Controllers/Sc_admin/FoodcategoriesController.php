<?php

namespace App\Http\Controllers\Sc_admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
//models
use App\Models\FoodCategory;

class FoodcategoriesController extends Controller
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

        $food_category = FoodCategory::when($keyword, function ($query, $keyword) {
            $query
                ->orWhere('food_categories.name', 'LIKE', '%' . $keyword . '%')
                ->orWhere('food_categories.description', 'LIKE', '%' . $keyword . '%');
        })
            ->orderBy('id', 'desc')->paginate(10);

        return view('auth-admin.foodcategory.list', [
            'food_category' => $food_category,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth-admin.foodcategory.create');
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
            'description' => 'required'
        ]);
        $food_category = new FoodCategory();
        $food_category->name = $request->input('name');
        $food_category->description = $request->input('description');
        $food_category->save();
        return redirect('/foodcategories')->with('success', 'category added successfully');
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
        $food_category = FoodCategory::find($id);
        return view('auth-admin.foodcategory.edit-category', [
            'food_category' => $food_category,
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
            'description' => 'required'
        ]);
        $food_category = FoodCategory::find($id);
        $food_category->name = $request->name;
        $food_category->description = $request->description;
        $food_category->save();
        return redirect('/foodcategories')->with('success', 'category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $food_category = FoodCategory::find($id);
        if (!empty($food_category)) {
            $food_category->status = 0;
            $food_category->save();
            return redirect('/foodcategories')->with('success', 'category Deleted successfully');
        }
        return redirect('/foodcategories')->with('error', 'category provided does not exist');
    }
}
