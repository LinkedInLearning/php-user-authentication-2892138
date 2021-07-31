<?php

// Performs all actions necessary to log in an admin
function log_in_admin($admin) {
  $_SESSION['admin_id'] = $admin['id'];
  $_SESSION['username'] = $admin['username'];
  return true;
}

?>
