<?php

use App\Note;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class NoteExerciseTest extends TestCase
{
    use DatabaseTransactions;

    public function test_notes_summary_and_notes_details()
    {
        $text = 'Begin of the note. Dicta laborum animi nostrum qui sed dolorum. Enim magni odit est dignissimos ut et laboriosam. Facere laboriosam et dolorem et laborum blanditiis. Corrupti fugit et in eos omnis voluptas.';
        $text .= 'End of the note';

        $note = Note::create(['note' => $text]);

        $this->visit('notes')
            ->see('Begin of the note')
            ->seeInElement('.label', 'Others')
            ->dontSee('End of the note')
            ->seeLink('View note')
            ->click('View note')
            ->see($text);

    }
}
