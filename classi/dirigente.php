<?php
require_once 'dipendente.php';

class Dirigente extends Dipendente {
  private $azioni;
  private $bonus;

  public function setBonus($_bonus) {
    if (!is_numeric($_bonus)) {
      throw new Exception('non è un numero');

    }else {
      $this->bonus = $_bonus;
    }
  }
}
 ?>
