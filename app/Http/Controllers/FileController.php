<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = \App\File::paginate(10);

        return view('file.index',compact('files'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $file = new \App\File;

        return view('file.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\FileRequest $request)
    {

        $file = new \App\File;
        $file->file_name = $request->input('file_name');
        $file->file_size = $request->input('file_size');
        $file->save();

        $message = 'Failas pridėtas';

        return redirect()->route('file.index')->with('message', $message);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $file = DB::table('files')->where('id', $id)->first();

        $file = \App\File::findOrFail($id);

        return view('file.show', compact('file'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $file = \App\File::find($id);

        return view('file.edit', compact('file'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Http\Requests\FileRequest $request, $id)
    {
        $file = \App\File::find($id);
        $file->file_name = $request->input('file_name');
        $file->file_size = $request->input('file_size');
        $file->save();

        $message = 'Failas sėkmingai atnaujintas!';

        return redirect()->route('file.show', ['id' => $id])->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('files')->delete($id);

        $message = 'Failas ištrintas';

        return redirect()->route('file.index')->with('message', $message);
    }
}
