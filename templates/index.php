<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Assignment 8</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <script>
      $($(document).ready( () => {
        $.ajaxSetup({ cache: true });
        
          $.getScript('https://connect.facebook.net/en_US/sdk.js', function(){
            FB.init({
              appId: '{your-app-id}',
              version: 'v2.7' 
            });     
            $('#loginbutton,#feedbutton').removeAttr('disabled');
            FB.getLoginStatus(updateStatusCallback);
          });

        $('.about').click( (e) => {
          e.preventDefault();
          $('.about').attr('id', 'focused')
          $('.interests').attr('id', '')
            $('.projects').attr('id', '');
            $('.goals').attr('id', '');
            $('.div-box').detach();
            $('.general').load('./about.html')
            $('.slantedM img').attr('src', './assets/me2.png')
        });
        $('.projects').click( (e) => {
          e.preventDefault();
          $('.projects').attr('id', 'focused')
          $('.interests').attr('id', '')
            $('.about').attr('id', '');
            $('.goals').attr('id', '');
            $('.div-box').detach();
            $('.general').load('./projects.html');
            $('.slantedM img').attr('src', './assets/me5.png')
            
        });
        $('.goals').click( (e) => {
          e.preventDefault();
          $('.goals').attr('id', 'focused')
          $('.interests').attr('id', '')
            $('.about').attr('id', '');
            $('.projects').attr('id', '');
            $('.div-box').detach();
            $('.general').load('./goals.html')
            $('.slantedM img').attr('src', './assets/me4.png')
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
                <a id='focused' class="about" href="#"><p>ABOUT ME</p></a>
                <a class="projects" href="#"><p>PROJECTS</p></a>
                <a class="goals" href="#"><p>GOALS</p></a>
                <a class="interests" href="#"><p>INTERESTS</p></a>
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
      <div id='m' class="slantedM">
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
