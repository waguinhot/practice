<?php

namespace Wagner\Pi\Infrastructure\Persistence;

use Wagner\Pi\Domain\Note\NoteRepositoryInterface;

use PDO;
use Wagner\Pi\Domain\Note\Note;

class NoteRepository implements NoteRepositoryInterface
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getById($id){

    }

    public function getAll(){
        $stmt = $this->db->query('SELECT * FROM notes');
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function save(Note $note){

        $stmt = $this->db->prepare("INSERT INTO notes (title, content) VALUES (:title, :content)");

        $title = $note->getTitle();
        $content = $note->getContent();
        
        $stmt->bindParam(':title', $title , PDO::PARAM_STR);
        $stmt->bindParam(':content',$content , PDO::PARAM_STR);

        $stmt = $stmt->execute();

        if(!$stmt){
            return false;
        }

        return true;
    }
}