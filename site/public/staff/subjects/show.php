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
?>

<?php $page_title = 'Show Subject'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">&laquo; Back to List</a>

  <div class="subject show">

    Subject ID: <?php echo h($id); ?>

  </div>

</div>
