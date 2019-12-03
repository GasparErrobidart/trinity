<?php namespace Trinity\Response;

use Trinity\Response\Response as Response;

class ErrorResponse extends Response{

  function __construct($obj){
    parent::__construct($obj);
    if($this->code < 400) $this->setCode(400);
  }

}
