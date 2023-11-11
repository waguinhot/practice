<?php

namespace Wager\Pi\Application;

use Wagner\Pi\Domain\Note\Note;
use Wagner\Pi\Domain\Note\NoteRepository;

class NoteService
{
    private $noteRepository;

    public function __construct(NoteRepository $noteRepository)
    {
        $this->noteRepository = $noteRepository;
    }

    public function getAllNotes()
    {
        return $this->noteRepository->getAll();
    }

    public function getNoteById($id)
    {
        return $this->noteRepository->getById($id);
    }

    public function createNote($title, $content)
    {
        $id = uniqid(); 
        $note = new Note($id, $title, $content);
        $this->noteRepository->save($note);
        return $note;
    }
}