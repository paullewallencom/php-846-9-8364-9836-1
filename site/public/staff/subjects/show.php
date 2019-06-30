<?php require_once('../../../private/initialize.php'); ?>

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

  // -----------
  // | ! | %21 | 
  // -----------
  // | # | %23 | 
  // -----------
  // | $ | %24 | 
  // -----------
  // | % | %25 | 
  // -----------
  // | & | %26 | 
  // -----------
  // | ' | %27 | 
  // -----------
  // | ( | %28 | 
  // -----------
  // | ) | %29 | 
  // -----------
  // | * | %2A | 
  // -----------
  // | + | %2B | 
  // -----------
  // | , | %2C | 
  // -----------
  // | / | %2F | 
  // -----------
  // | : | %3A | 
  // -----------
  // | ; | %3B | 
  // -----------
  // | = | %3D | 
  // -----------
  // | ? | %3F | 
  // -----------
  // | @ | %40 | 
  // -----------
  // | [ | %5B | 
  // -----------
  // | ] | %5D | 
  // -----------

  // -------------
  // | < | &lt;  | 
  // -------------
  // | > | &gt;  | 
  // -------------
  // | & | &amp; | 
  // -------------
  // | " | &quot | 
  // -------------

  // Injecting HTML tags into the URL.
  // http://localhost/.../site/public/staff/subjects/show.php?id=1
  // http://localhost/.../site/public/staff/subjects/show.php?id=<strong>1</strong>
  // Injecting JavaScript into the URL.
  // http://localhost/.../site/public/staff/subjects/show.php?id=<script>alert('Gotcha!');</script>

  $id = $_GET['id'] ?? '1'; // PHP > 7.0

  echo h($id);
?>

<a href="show.php?name=<?php echo u('John Doe'); ?>">Link</a><br />
<a href="show.php?company=<?php echo u('Widgets&More'); ?>">Link</a><br />
<a href="show.php?query=<?php echo u('!#*?'); ?>">Link</a><br />