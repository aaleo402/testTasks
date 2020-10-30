<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 'on');


  if (!empty($_POST['name'])) {
    echo 'Hello, '.$_POST['name'];
  }