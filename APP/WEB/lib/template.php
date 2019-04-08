<?php
class template
{
  private $where;
  private $how;
  public function __construct($where,$how)
  {
    $this->where = $where;
    $this->how = $how;
  }
  private function redirect()
  {
    header("LOCATION: _DIR_/$this->where.php?sc=$this->how");
  }
  
  
}

?>
