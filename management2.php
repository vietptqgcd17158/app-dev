
<?php require 'header2.php'; ?>
<h2 style="text-align: center; color: black;"></h2>
<?php 
  include "Model/DBConfig.php";
  $db = new Database;
  $db->connect();

  if(isset($_GET['controller'])) {
    $controller = $_GET['controller'];
  }
  else{
    $controller = '';
  }

  switch($controller){
        
    case 'cource':
    {
      require_once('Controller/cource/cource.php');
      break;
    }
  }
   
    
  
 ?>
<?php require 'footer.php'; ?>