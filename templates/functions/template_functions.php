<?php
require "format_comment_text.php";
// Output comments to HTML
function the_comments()
{
  global $comments;
  echo "<h2>Comments</h2>";
  // TODO
  foreach ($comments as $comm) {
    echo "<p>Post ID: $comm[ID]<br>Posted on : $comm[date]</p>
    <h3>New Comment by: $comm[email]</h3>
    <p>Current mood: $comm[mood]</p>
    <p>$comm[commentText]</p><hr>";
  }
}

// Output unique email addresses to HTML
function the_commenters() 
{
  global $commenters;

  //TODO
  // echo "<form action='/$comms[email]' method='GET' name='email'>";
  echo    "<h2>Email of those who have commented:</h2>";
  echo      "<ul>";
  
  foreach($commenters as $comms) 
  {
    echo        "<li><a href='index.php?email=$comms[email]'>$comms[email]</a></li>";
  }
  echo     "</ul>";
  // echo "</form>";
}

function load_all() 
{
  @$profile = $_GET['profile'];
  if($profile) 
  {
      if($profile == 'about') {
        echo "<div id='specs'>
                <div id='n'>
                  <div class='nav'>
                    <a href='index.php?profile=about'><p>About Me</p></a>
                    <a href='index.php?profile=projects'><p>Projects</p></a>
                    <a href='index.php?profile=goals'><p>Goals</p></a>
                    <a href='index.php?profile=interests'><p>Interests</p></a>
                  </div>
                </div>
              </div>
              <div id='slanted'>
                <div class='left'></div>
                <div class='middle'></div>
                <div class='right'></div>
                <div class='rightright'></div>
              </div>
              <div class='slantedL'>
                
              </div>
              <div class='slantedM'>
                <img src='./assets/me2.png'>
              </div>
              <div class='slantedR'>
                
              </div>
            </div>";
      }
      if($profile == 'projects') {
        echo "<div id='specs'>
                <div id='n'>
                  <div class='nav'>
                    <a href='index.php?profile=about'><p>About Me</p></a>
                    <a href='index.php?profile=projects'><p>Projects</p></a>
                    <a href='index.php?profile=goals'><p>Goals</p></a>
                    <a href='index.php?profile=interests'><p>Interests</p></a>
                  </div>
                </div>
              </div>
              <div id='slanted'>
                <div class='left'></div>
                <div class='middle'></div>
                <div class='right'></div>
                <div class='rightright'></div>
              </div>
              <div class='slantedL'>
                
              </div>
              <div class='slantedM'>
                <img src='./assets/me2.png'>
              </div>
              <div class='slantedR'>
                
              </div>
            </div>";
           }
           if($profile == 'goals') {
            echo "<div id='specs'>
                    <div id='n'>
                      <div class='nav'>
                        <a href='index.php?profile=about'><p>About Me</p></a>
                        <a href='index.php?profile=projects'><p>Projects</p></a>
                        <a href='index.php?profile=goals'><p>Goals</p></a>
                        <a href='index.php?profile=interests'><p>Interests</p></a>
                      </div>
                    </div>
                  </div>
                  <div id='slanted'>
                    <div class='left'></div>
                    <div class='middle'></div>
                    <div class='right'></div>
                    <div class='rightright'></div>
                  </div>
                  <div class='slantedL'>
                    
                  </div>
                  <div class='slantedM'>
                    <img src='./assets/me2.png'>
                  </div>
                  <div class='slantedR'>
                    
                  </div>
                </div>";
               }
               if($profile == 'interests') {
                echo "<div id='specs'>
                        <div id='n'>
                          <div class='nav'>
                            <a href='index.php?profile=about'><p>About Me</p></a>
                            <a href='index.php?profile=projects'><p>Projects</p></a>
                            <a href='index.php?profile=goals'><p>Goals</p></a>
                            <a href='index.php?profile=interests'><p>Interests</p></a>
                          </div>
                        </div>
                      </div>
                      <div id='slanted'>
                        <div class='left'></div>
                        <div class='middle'></div>
                        <div class='right'></div>
                        <div class='rightright'></div>
                      </div>
                      <div class='slantedL'>
                        
                      </div>
                      <div class='slantedM'>
                        <img src='./assets/me2.png'>
                      </div>
                      <div class='slantedR'>
                        
                      </div>
                    </div>";
                   }
                   
  }
  else {
    echo "<div id='specs'>
            <div id='n'>
              <div class='nav'>
                <a href='index.php?profile=about'><p>About Me</p></a>
                <a href='index.php?profile=projects'><p>Projects</p></a>
                <a href='index.php?profile=goals'><p>Goals</p></a>
                <a href='index.php?profile=interests'><p>Interests</p></a>
              </div>
            </div>
          </div>
          <div id='slanted'>
            <div class='left'></div>
            <div class='middle'></div>
            <div class='right'></div>
            <div class='rightright'></div>
          </div>
          <div class='slantedL'>
            
          </div>
          <div class='slantedM'>
            <img src='./assets/me2.png'>
          </div>
          <div class='slantedR'>
            
          </div>
        </div>";
   }

}
