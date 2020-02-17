<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;
use Image;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::latest()->paginate(5);
        //echo "<pre>";print_r($blogs);die;
        return $blogs;
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
            'heading' => 'required|string|max:191',
            'description' => 'required|string',
            'photo' => 'required|string|min:191',
        ]);

        if($request->isMethod('post')){
            $blog = new Blog;
            $blog->heading=$request['heading'];
            $blog->category_name=$request['category_name'];
            $blog->description=$request['description'];
            $blog->points=$request['points'];
            //check for current photo
            $currentPhoto = $blog->photo;
            //Upload Image
            if($request->photo != $currentPhoto){
                $imgUpload = time().'.' . explode('/', explode(':', substr($request->photo, 0, strpos($request->photo, ';')))[1])[1];
                \Image::make($request->photo)->save(public_path('images/blogs/').$imgUpload);
                //upload to the db using the merge function
                $blog->photo = $imgUpload;

                //delete old photo if user updates their blogs picture
                $oldPhoto = public_path('images/blogs/').$currentPhoto;
                if (file_exists($oldPhoto)) {
                    @unlink($oldPhoto);
                }

            }
            //echo "<pre>";print_r($product);die;
            $blog->save();
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

        $blogs = Blog::findOrFail($id);
        //validate product information
        $this->validate($request, [
            'heading' => 'required|string|max:191',
            'description' => 'required|string',
        ]);
        //check for current photo
        $currentPhoto = $blogs->photo;
        //Upload Image
        if($request->photo != $currentPhoto){
            $imgUpload = time().'.' . explode('/', explode(':', substr($request->photo, 0, strpos($request->photo, ';')))[1])[1];
            \Image::make($request->photo)->save(public_path('images/blogs/').$imgUpload);
            //upload to the db using the merge function
            $request->merge(['photo' =>$imgUpload]);

            //delete old photo if blogs updates their homepage picture
            $oldPhoto = public_path('images/blogs/').$currentPhoto;
            if (file_exists($oldPhoto)) {
                @unlink($oldPhoto);
            }

        }
        //update blogs
         $blogs->update($request->all());
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

        $blogs = Blog::findOrFail($id);
        //delete the blogs
        $blogs->delete();
        //return ['message' => 'product is Deleted'];
    }
}
