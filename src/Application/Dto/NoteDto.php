<?php 

namespace Wagner\Pi\Application\Dto;

use Wagner\Pi\Domain\Note\Note;

class NoteDTO
{   
    private $id = 1;
    private $title;
    private $content;

    public function __construct($title, $content)
    {   
        $this->id = 1;
        $this->title = $title;
        $this->content = $content;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getNote(): Note
    {
        $note = new Note( $this->title , $this->content);
        return $note;
    }
}