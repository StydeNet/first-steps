<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Note;

class NotesTest extends TestCase
{
    use DatabaseTransactions;

    public function test_notes_list()
    {
        // Having
        Note::create(['note' => 'My first note']);
        Note::create(['note' => 'second note']);

        // When
        $this->visit('notes')
            // Then
            ->see('My first note')
            ->see('Second note');
    }

    public function test_create_note()
    {
        $this->visit('notes')
            ->click('Add a note')
            ->seePageIs('notes/create')
            ->see('Create a note')
            ->type('A new note', 'note')
            ->press('Create note')
            ->seePageIs('notes')
            ->see('A new note')
            ->seeInDatabase('notes', [
                'note' => 'A new note'
            ]);
    }
}
