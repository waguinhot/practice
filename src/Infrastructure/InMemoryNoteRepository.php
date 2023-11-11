<?php 
namespace Wagner\Pi\Infrastructure\Note;

use Wagner\Pi\Domain\Note\Note;
use Wagner\Pi\Domain\Note\NoteRepositoryInterface;

class InMemoryNoteRepository implements NoteRepositoryInterface
{
    private $notes = [];

    public function getById($id)
    {
        return $this->notes[$id] ?? null;
    }

    public function getAll()
    {
        return $this->notes;
    }

    public function save(Note $note)
    {
        $this->notes[$note->getId()] = $note;
    }
}