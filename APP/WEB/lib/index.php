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
  
  private load_GET($input,$output)
  {
    return $output = $_GET[$input];  
  }
  
  private function check_first_start()
  {
    $this->load_GET();
    $this->read_config();
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
    $form = array() {
     ["host"]=> "<input class=start type=text name=host>"
     ["port"]=> "<input class=start type=port name=port>"
     ["user"]=> "<input class=start type=text name=user>"
     ["pass"]=> "<input class=start type=password name=pass>"
     ["submit"]=> "<input class=start type=submit name=submit>"
    }
  }
    $what='<form action=index.php method=post>'.$form['host'].''.$form['port'].''.$form['user'].''.$form['pass'].''.$form['submit'].'</form>';
    $this->create_template(index,false);
  }
  
  private function already_started()
  {
    $this->create_template(index,true);
  }

}






?>
