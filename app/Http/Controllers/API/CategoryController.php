<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use Image;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::latest()->paginate(5);
        //echo "<pre>";print_r($categories);die;
        return $categories;
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
            'category_name' => 'required|string|max:191',
            'parent_id' => 'required|integer|max:3',
            'description' => 'required|string',
        ]);

        if($request->isMethod('post')){
            $categories = new Category;
            $categories->category_name=$request['category_name'];
            $categories->parent_id=$request['parent_id'];
            $categories->description=$request['description'];
            //echo "<pre>";print_r($product);die;
            $categories->save();
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $categories = Category::findOrFail($id);
        //validate product information
        $this->validate($request, [
            'category_name' => 'required|string|max:191',
            'parent_id' => 'required|integer|max:3',
            'description' => 'required|string',
        ]);
        //update c$categories
         $categories->update($request->all());
        //return ['message'=>'updating'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $categories = Category::findOrFail($id);
        //delete the blogs
        $categories->delete();
        //return ['message' => 'product is Deleted'];
    }
}
