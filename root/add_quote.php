<?php 

//Define a page title and include the header:
define('TITLE', 'Add a Quote');
include('templates/header.html');

print '<h2>Add a Quotation</h2>';

//Restrict access to administrators only:
if(!is_administrator()){
  print '<h2>Access Denied!</h2>
         <p class="error">You do not have permission to access this page.</p>';
}

?>