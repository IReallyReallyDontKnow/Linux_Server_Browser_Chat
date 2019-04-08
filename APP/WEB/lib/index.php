<?php

class index
{
  
  private $config;
  private $template;
  public function __construct(){};
  
  private function read_config()
  {
    /*PARSE INI FILE */
    $parse_array = parse_ini_file('../default.ini');
    $this->config = $parse_array;
  }
  
  
  private function check_first_start()
  {
    if($this->config['setup']['install'] == true)
    {
      $this->already_started();
    }else
    {
      $this->first_start();
    }
  }
  
  private function create_template($where,$how)
  {
    $this->template = new template(); //TODO template.php
    $this->template->what($where,$how); 
  }
  
  private function first_start()
  {
    $this->create_template(index,false);
  }
  
  private function already_started()
  {
    $this->create_template(index,true);
  }

}






?>
