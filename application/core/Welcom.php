
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Welcome extends INS {
  public function index() {
    $this->content = 'home'; // passing middle to function. change this for different views.
    $this->jobs();
  }
}
?>