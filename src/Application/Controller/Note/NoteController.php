<?php 

namespace Wagner\Pi\Application\Controller\Note;

use Wagner\Pi\Config\ConfigMysql;
use Wagner\Pi\Application\Request\JsonRequest;
use Wagner\Pi\Application\Dto\NoteDTO;
use Wagner\Pi\Application\Response\JsonResponseService;
use Wagner\Pi\Infrastructure\Persistence\NoteRepository;

class NoteController {
    public function store()
    {   

        $data =  JsonRequest::JSON();

        if(!$data)
        {
            return JsonResponseService::sendJsonResponse(['status' => 'error' , 'message' => 'json invalid'] , 400);
        }
      
        $title = $data['title'];
        $content = $data['content'];

        $note = new NoteDTO( $title, $content);

        $note = $note->getNote();   


         $repository = new NoteRepository(ConfigMysql::conect());

         $repository->save($note);

         return JsonResponseService::sendJsonResponse(['status' => 'succes' , 'data' => ['title' => $note->getTitle() , 'content' => $note->getContent()]] , 201);

    }
}