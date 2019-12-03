<?php namespace Controller;

use Trinity\Controller\BaseController as BaseController;

class ExamplePageController extends BaseController {

  function __construct(){
    // ALWAYS EXECUTE THE PARENT CONSTRUCTOR
    parent::__construct();
  }

  function index(){
    // RENDER views/index.php
    // And pass $title value = "Trinity Framework"
    $this->render(
      'index', // VIEW NAME
      array( 'title' => "Trinity Framework") // PARAMETERS ARRAY
    );

    /*

    =======================================================================================
    - REQUEST
    =======================================================================================

      ACCESS REQUEST OBJECT
        $req    = $this->request;
        $method = $req->httpMethod();
        $path   = $req->path();

    =======================================================================================
    - SESSION
    =======================================================================================
      SETTING AN ATTRIBUTE
        $user = new UserModel();
        $this->session->user = $user;
      RETRIVING ATTRIBUTE
        $user = $this->session->user;
      REMOVING ATTRIBUTE
        $this->session->unset('user')

    =======================================================================================
    - REQUEST BODY
    =======================================================================================

      RETRIVING ATTRIBUTE
        $id = $this->params->post_id;

    */
    
  }

}
