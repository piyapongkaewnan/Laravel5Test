<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TypeBooks;
use \App\Http\Requests\StoreTypeBooksRequest;

class TypeBooksController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        //$typebooks = TypeBooks::all();
        //typebooks = TypeBooks::orderby('id','desc')->get();
        $typebooks = TypeBooks::paginate(10);

        $count = TypeBooks::count();

        return view('typebooks.index', [
            'typebooks' => $typebooks,
            'count' => $count
        ]);
    }

    public function create() {
        return view('typebooks.create');
    }

    public function store(StoreTypeBooksRequest $request) {
        $TypeBooks = new TypeBooks();
        $TypeBooks->name = $request->name;
        $TypeBooks->save();
        alert()->success('บันทึกข้อมูลเรียบร้อยแล้ว.', 'สำเร็จ!');
        return redirect()->action('TypeBooksController@index');
    }

    public function edit($id) {
        $typebooks = TypeBooks::findOrFail($id);
        //typebooks = TypeBooks::orderby('id','desc')->get();

        return view('typebooks.edit', [
            'typebooks' => $typebooks
        ]);
    }

    public function update(StoreTypeBooksRequest $request, $id) {

        $typebooks = TypeBooks::find($id);
        $typebooks->update($request->all());
        alert()->success('บันทึกข้อมูลเรียบร้อยแล้ว.', 'สำเร็จ!');
        return redirect()->action('TypeBooksController@index');
    }

    public function destroy($id) {
        // TypeBooks::find($id)->delete();
        TypeBooks::destroy($id);
         alert()->success('ลบข้อมูลเรียบร้อยแล้ว.', 'สำเร็จ!');
        return back();
    }

}
