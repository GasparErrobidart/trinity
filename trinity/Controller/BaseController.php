<?php namespace Trinity\Controller;

use Trinity\Response\RedirectResponse as RedirectResponse;
use Trinity\Response\ErrorResponse    as ErrorResponse;
use Trinity\Request\Request           as Request;
use Trinity\Session\Session           as Session;

class BaseController{

  private $session;
  private $params;
  private $request;



  function __construct(){
    $this->request = Request::getInstance();
    $this->params  = $this->request->params;
    $this->session = Session::getInstance();
  }



  function throw($message){
    echo new ErrorResponse($message);
    return;
  }



  function render($name,$params = array()){
    extract($params);
    include "views/$name.php";
  }



  function redirect($path,$params = array()){
    $queryString = "?";
    foreach($params as $key => $value){
      $queryString .= "$key=$value&";
    }
    $response = new RedirectResponse($path . substr_replace($queryString ,"",-1) );
    return $response->send();
  }


  function __get($attr){
    $readable_attributes = array(
      'session',
      'params',
      'request'
    );
    if(in_array( $attr, $readable_attributes)){
      return $this->$attr;
    };
  }

}
