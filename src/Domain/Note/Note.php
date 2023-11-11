<?php

namespace Wagner\Pi\Domain\Note;

class Note
{
    private $title;
    private $content;

    public function __construct( $title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    public function getId()
    {
        return 1 ;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getContent() : string {
        return $this->content;
    }
    public function getById($id)
    {

    }
    public function getAll()
    {

    }
    public function save(Note $note)
    {
        
    }
}
