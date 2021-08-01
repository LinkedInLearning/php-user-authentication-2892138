<?php

// Performs all actions necessary to log in an admin
function log_in_admin($admin) {
  // Prevent session fixation attacks
  session_regenerate_id();
  $_SESSION['admin_id'] = $admin['id'];
  $_SESSION['username'] = $admin['username'];
  return true;
}

function log_out_admin() {
  unset($_SESSION['admin_id']);
  unset($_SESSION['username']);
  return true;
}

// is_logged_in() contains all the logic for determining if a
// request should be considered a "logged in" request or not.
// It is the core of require_login() but it can also be called
// on its own in other contexts (e.g. display one link if an admin
// is logged in and display another link if they are not)
function is_logged_in() {
  // Having a admin_id in the session serves a dual-purpose:
  // - Its presence indicates the admin is logged in.
  // - Its value tells which admin for looking up their record.
  return isset($_SESSION['admin_id']);
}

// Returns true if a page is in the allow-list and is
// exempt from user authentication
function page_exempt_from_auth() {
  $no_auth_pages = [
    '/staff/login.php'
  ];
  $current_page = str_replace(WWW_ROOT, '', $_SERVER['SCRIPT_NAME']);
  // If it is in the array, it is not restricted
  return in_array($current_page, $no_auth_pages);
}

// Call require_login() at the top of any page which needs to
// require a valid login before granting access to the page.
function require_login() {
  if(!is_logged_in() && !page_exempt_from_auth()) {
    redirect_to(url_for('/staff/login.php'));
  } else {
    // Do nothing, let the rest of the page proceed.
  }

}

?>
