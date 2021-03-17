<?php
require 'config.php';

// Should return a PDO
function db_connect() {

  try {
    // TODO
    // try to open database connection using constants set in config.php
    // return $pdo;
    $connectionString = 'mysql:host=' . DBHOST . ';dbname=' . DBNAME;
    $user = DBUSER;
    $pass = DBPASS;
    $pdo = new PDO($connectionString, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE.EXCEPTION);
    return $pdo;
  }
  catch (PDOException $e)
  {
    die($e->getMessage());
  }
}

// Handle form submission
function handle_form_submission() {
  global $pdo;

  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    // TODO
    
  }
}

// Get all comments from database and store in $comments
function get_comments() {
  global $pdo;
  global $comments;

  //TODO

}

// Get unique email addresses and store in $commenters
function get_commenters() {
  global $pdo;
  global $commenters;

  //TODO

}
