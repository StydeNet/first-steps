<?php

namespace App\Http\Controllers;

use App\Note;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NotesController extends Controller
{
    public function index()
    {
        $notes = Note::paginate(20);
        return view('notes/list', compact('notes'));
    }

    public function create()
    {
        return view('notes/create');
    }

    public function store()
    {
        $this->validate(request(), [
            'note' => ['required', 'max:200']
        ]);

        $data = request()->all();

        Note::create($data);

        return redirect()->to('notes');
    }

    /**
     * Despliegue del contenido completo de la nota
     * 
     * @param $noteId
     *
     * @return mixed
     */
    public function show($noteId)
    {
        $note = Note::findOrFail($noteId);
        
        return view('notes.show', compact('note'));
    }
}
