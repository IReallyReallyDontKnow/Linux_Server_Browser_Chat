<?php

class index
{
  public function __construct(){};
  
  private function read_config()
  {
    /*PARSE INI FILE */
  
  }
  
  
  private function check_first_start()
  {
    if($this->config['setup'] === true)
    {
      $this->started();
    }else
    {
      $this->first_start();
    }
  }

}






?>
