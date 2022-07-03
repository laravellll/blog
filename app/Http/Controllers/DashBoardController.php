<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LatestBlog;

class DashBoardController extends Controller
{
    public function Dashboard()
    {
        return view('backend.main');
    }
    public function create()
    {
        return view('backend.blog.create');
    }
    public function dataCreate(Request $request)
    {
        //dd($request->all());

        if ($request->image) {
            if (!file_exists(public_path('images'))) {
                mkdir(public_path('images'), 0777, true);
            }
            $image = $request->image;

            $name = $image->getClientOriginalName();
            $destination = public_path('images');
            $imageName = time() . '_' . $name;
            $image->move($destination, $imageName);

            $data['image'] = 'images/' . $imageName;
        }

        $data['author'] = $request->x;
        $data['title'] = $request->title;
        $data['description'] = $request->description;

        LatestBlog::create($data);

        return redirect()->route('viewData');
    }

    public function viewData()
    {
        $blog = LatestBlog::orderBy('id', 'DESC')->get(); //eloquent quary
        return view('backend.blog.viewdata', ['key' => $blog]);
    }

    public function delete($id)
    {

        $data = LatestBlog::where(['id' => $id])->first();
        if ($data) {
            $data->delete();
            return redirect()->back();
        }
    }
    public function edit($id)
    {
        $u = LatestBlog::where(['id' => $id])->first();
        if ($u) {
            return view('backend.blog.edit', ['v' => $u]);
        }
    }
    public function dataUpdate(Request $request)
    {
      //dd($request->all());
 
      
// dd($data);
        if ($request->image) {

            if (!file_exists(public_path('images'))) {
                mkdir(public_path('images'), 0777, true);
            }
            $image = $request->image;

            $name = $image->getClientOriginalName();
            $destination = public_path('images');
            $imageName = time() . '_' . $name;
            $image->move($destination, $imageName);

            $data['image'] = 'images/' . $imageName;
        }

        $data['author'] = $request->name;
        $data['title'] = $request->title;
        $data['description'] = $request->description;

        $blog = LatestBlog::where('id', $request->id)->first();
        $blog->update($data);

        return redirect()->route('viewData');
    }
}
