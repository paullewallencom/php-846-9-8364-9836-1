<?php
  // Generic Example: 
  // $page = $_GET['page'];
  // if(isset($_GET['page'])) {
  //   $page = $_GET['page'];
  // } else {
  //   $page = '1';
  // }
  // $page = isset($_GET[;page']) ? $_GET['page'] : '1';
  // $page = $_GET[;page'] ?? '1'; // PHP > 7.0
  
  // Implementation: PHP < 7.0
  // $id = isset($_GET['id']) ? $_GET['id'] : '1';

  $id = $_GET['id'] ?? '1'; // PHP > 7.0

  echo $id;
?>