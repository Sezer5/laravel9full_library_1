<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=Product::all();
        return view('admin.product',[
            'data'=>$data
        ]);
    }

    protected $appends=[
        'getParentsTree'
    ];
    public static function getParentsTree($category, $title){

        if($category->parent_id != '0'){

            $parent = Category::find($category->parent_id);
            $title = ' Main Category >' . $parent->name . ' > ' . $title;
            return ProductController::getParentsTree($parent, $title);
        }
        return $title;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data=Category::all();
        return view('admin.product_create',[
            'data' =>$data
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
        //
        $data=new Product();
        $data->category_id = $request->category_id;
        $data->name = $request->name;
        $data->description = $request->description;
        if($request->file('image')){
            $data->image=$request->file('image')->store('public/images');
        };
        $data->save();
        return redirect()->back()->with('success','Product Added!');
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
}
