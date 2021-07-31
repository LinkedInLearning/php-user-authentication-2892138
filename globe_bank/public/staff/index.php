<?php require_once('../../private/initialize.php'); ?>

<?php require_login(); ?>

<?php $page_title = 'Staff Menu'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
  <div id="main-menu">
    <h2>Main Menu</h2>
    <ul>
      <li><a href="<?php echo url_for('/staff/admins/index.php'); ?>">Admins</a></li>
    </ul>
  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
