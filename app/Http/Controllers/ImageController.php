<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Guzzle\Tests\Plugin\Redirect;
use App\Image;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
use Illuminate\Contracts\Filesystem\Filesystem;
// use Illuminate\Http\File;
// require_once 'vendor/autoload';


class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Image.CreateImage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = new Image();
        $this->validate($request, [
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|max:255',
        ]);

        $s3 = Storage::disk('s3');
        $image->title = $request->title;
        $image->description = $request->description;
        $file = $request->file('image');

        if($file) {
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            $name = $request->get('title').$timestamp. '-' .$file->getClientOriginalName();
            Storage::put('imageservice/'.$name, file_get_contents($file), 'public');
            $image->filePath = $name;
            $file->move(public_path().'/images/', $name);
            $s3->put('imageservice/'.$name, File::get($file));
            unlink(public_path().'/images/'.$name);
        }

        return redirect('home')->with('status', 'Image Successfully Uploaded!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $images = Image::all();
        return view('image.showList', compact('images'));
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
