<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tender;

class TendersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$cheretas=Cheretas::orderBy('title','desc')->select('where category = Accounting & Auditing')->paginate(9);
        $cheretas=Tender::where('category','he')->orderBy('title','desc')->paginate(9);
        return view('tenders.bid') ->with('cheretas',$cheretas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('tenders.create');
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

        //create post
         
         $post=new Tender;
         $post->title=$request->input('title');
         $post->tenderbody=$request->input('body');
         $post->category=$request->input('category');
         $post->deadline=$request->input('deadline');
         $post->reference=$request->input('reference');

         $post->website=$request->input('website');
         $post->phone_number=$request->input('phonnumber');

         
         $post->save();

        return redirect('/posts')->with('success','Post Created');
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
        $chereta =Tender::find($id);
        return view('tenders.show')->with('chereta',$chereta);

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
