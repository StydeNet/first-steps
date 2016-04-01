<?php

namespace App\Http\Controllers;

use App\Note;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class NotesController extends Controller
{
    public function index()
    {
        $notes = Note::paginate(20);
        return view('notes.list')->with(compact('notes'));
    }

    public function create()
    {
        $categories = Category::all()->pluck('name','id')->toArray();
        
        return view('notes.create')->with(compact('categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'note' => 'required|max:200'
        ]);

        $data = $request->all();

        Note::create($data);
        
        return redirect()->to('notes');
    }

    public function show($id)
    {
        $note = Note::findOrFail($id);
        
        return view('notes.show')->with(compact('note'));
    }
}
