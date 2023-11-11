<?php

namespace Wagner\Pi\Domain\Note;

interface NoteRepositoryInterface
{
    public function getById($id);
    public function getAll();
    public function save(Note $note);
}