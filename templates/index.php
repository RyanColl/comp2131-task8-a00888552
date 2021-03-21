<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Assignment 8</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <script>
      $($(document).ready( () => {
        $('.about').click( (e) => {
          e.preventDefault();
          $('.about').attr('id', 'focused')
          $('.interests').attr('id', '')
            $('.projects').attr('id', '');
            $('.goals').attr('id', '');
            $('.div-box').detach();
            $('.general').load('./about.html')
        });
        $('.projects').click( (e) => {
          e.preventDefault();
          $('.projects').attr('id', 'focused')
          $('.interests').attr('id', '')
            $('.about').attr('id', '');
            $('.goals').attr('id', '');
            $('.div-box').detach();
            $('.general').load('./projects.html')
        });
        $('.goals').click( (e) => {
          e.preventDefault();
          $('.goals').attr('id', 'focused')
          $('.interests').attr('id', '')
            $('.about').attr('id', '');
            $('.projects').attr('id', '');
            $('.div-box').detach();
            $('.general').load('./goals.html')
        });
        $('.interests').click( (e) => {
          e.preventDefault();
          $('.interests').attr('id', 'focused')
            $('.about').attr('id', '');
            $('.projects').attr('id', '');
            $('.goals').attr('id', '');
            $('.div-box').detach();
            $('.general').load('./interests.html')
        });
      }))
    </script>
  </head>
  <body>
    <div id="main">
      <?php // load_all(); ?>
      <div class='spec' id="specs">
            <div class="head">
              <a href=''><img src='./assets/uxui.png'></a>
              <h3><i>RYAN COLLICUTT</i></h3>
              <h1><i>FULL STACK WEB DEVELOPER</i></h1>
            </div>
            <div id="n">
              <div class="nav">
                <a id='focused' class="about" href="index.php?profile=about"><p>ABOUT ME</p></a>
                <a class="projects" href="index.php?profile=projects"><p>PROJECTS</p></a>
                <a class="goals" href="index.php?profile=goals"><p>GOALS</p></a>
                <a class="interests" href="index.php?profile=interests"><p>INTERESTS</p></a>
              </div>
            </div>
            
            <!-- to be loaded in -->
            <div class="general">

            </div>
            <script>
              $('.general').load('./about.html')
            </script>
      </div>
      <div id="slanted">
        <div class="left"></div>
        <div class="middle"></div>
        <div class="right"></div>
        <div class="rightright"></div>
      </div>
      <div class="slantedL">
        
      </div>
      <div class="slantedM">
        <img src="./assets/me2.png">
      </div>
      <div class="slantedR">
        
      </div>
    </div>
  
    <!-- <?php
      // the_comments();
      // the_commenters();
     ?> -->
  </body>
</html>
