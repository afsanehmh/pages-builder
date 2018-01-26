<?php

namespace Tarnama\Pages\Http\Controllers\Page;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Tarnama\Pages\Models\Page;

use Validator;
class PagesController extends Controller
{
    public function index(){
        $pages = Page::orderBy('created_at','desc')->get();

        return view('pages::index')->with(compact('pages'));
    }

    public function create(){
        return view('pages::create');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:128|min:1',
        ]);

        if($validator->fails())
        {
            return back()->withErrors($validator->errors())->withInput();
        }
        $page = new Page();
        $page->title=$request->title;
        $page->content_text = $request->content_text;
        $page->save();
        return back()->with('success','page successful created');
    }

    public function edit($id){

        $validator=Validator::make(['id'=>$id],[
            'id'=>'required|exists:pages',
        ]);
        if($validator->fails())
        {
            return back()->withErrors($validator->errors())->withInput();
        }
        $page = Page::find($id);
        return view('pages::edit')->with(compact('page'));
    }

    public function update(Request $request)

    {
        $validator = Validator::make($request->all(), [
            'id'=>'required|exists:pages',
            'title' => 'required|max:128|min:1',
        ]);

        if($validator->fails())
        {
            return back()->withErrors($validator->errors())->withInput();
        }

        $page = Page::find($request->id);
        $page->title=$request->title;
        $page->content_text = $request->content_text;
        $page->save();

        return back()->with('success','pages successful updated');
    }

    public function delete($id){
        $validator=Validator::make(['id'=>$id],[
            'id'=>'required|exists:pages',
        ]);
        if($validator->fails())
        {
            return back()->withErrors($validator->errors())->withInput();
        }
        $page = Page::find($id);
        $page->delete();
        return back()->with('success','page successful deleted');
    }

    public function indexPage($id){
        $pages = Page::find($id);
        $pages->increment('visits');
        return view('pages::page')->with(compact('pages'));
    }

}