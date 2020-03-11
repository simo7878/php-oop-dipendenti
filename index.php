<?php
  require_once __DIR__ . '/classi/dipendente.php';
  require_once __DIR__ . '/classi/dirigente.php';
  require_once __DIR__ . '/classi/operaio.php';

$boss = new Dirigente('123456', 'boss', 'rossi', 'via tal dei tali', 'ctrlmcg25f35h839k', 'it12356g548125ds569', 3);

try {
  $boss->setBonus(7);
} catch(Exception $e) {
  echo 'errore' . $e->getMessage();
}
$boss->visualizzaDipendente();


 ?>
