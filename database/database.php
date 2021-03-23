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
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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
    // handle situation where email is empty
    // if($_POST['email'] != '') {
        
    //   }
    if(isset($_POST['email']) && isset($_POST['mood']) && isset($_POST['comment'])) 
    {
      
      $sql = 'INSERT INTO comments (email, mood, date, commentText) VALUES (:email, :mood, :date, :commentText)';
      $stmnt = $pdo->prepare($sql);
      $stmnt->bindValue(':email', $_POST['email']);
      $stmnt->bindValue(':mood', $_POST['mood']);
      $stmnt->bindValue(':date', '2021-03-16'); 
      $stmnt->bindValue(':commentText', $_POST['comment']);
      $stmnt->execute();
    }
  }
}

// Get all comments from database and store in $comments
function get_comments() {
  global $pdo;
  global $comments;

  //TODO
  $sql = "SELECT * FROM comments ORDER BY ID DESC, DATE";

  $result = $pdo->query($sql);
 
  while ($row = $result->fetch()) {
    array_push($comments, $row);  
  }

}


// Get unique email addresses and store in $commenters
function get_commenters() {
  global $pdo;
  global $commenters;

  //TODO
  $sql = "SELECT * FROM comments GROUP BY email";

  $result = $pdo->query($sql);
  while ($row = $result->fetch()) {
    array_push($commenters, $row);
  }

}
