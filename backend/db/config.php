<?php
define("HOSTNAME","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DB","carenlub");

// Create connection
$conn = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DB);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}