$($(document).ready( () => {
        $('.about').on("click", (e) => {
          e.preventDefault();
          $('.about').attr('id', 'focused')
          $('.interests').attr('id', '')
            $('.projects').attr('id', '');
            $('.goals').attr('id', '');
            $('.div-box').detach();
            $('.general').load('./about.html')
            $('.slantedM img').attr('src', './assets/me2.png')
            $("#position-1").addClass("keyframe")
        //     setTimeout(function(){ 
        //     $("#position-1").removeClass("keyframe")
        //     $("#position-1").attr("id","position-7")
        //  }, 3000);
        });
        $('.projects').on("click", (e) => {
          e.preventDefault();
          $('.projects').attr('id', 'focused')
          $('.interests').attr('id', '')
            $('.about').attr('id', '');
            $('.goals').attr('id', '');
            $('.div-box').detach();
            $('.general').load('./projects.html');
            $('.slantedM img').attr('src', './assets/me5.png')
            
        });
        $('.goals').on("click", (e) => {
          e.preventDefault();
          $('.goals').attr('id', 'focused')
          $('.interests').attr('id', '')
            $('.about').attr('id', '');
            $('.projects').attr('id', '');
            $('.div-box').detach();
            $('.general').load('./goals.html')
            $('.slantedM img').attr('src', './assets/me4.png')
        });
        $('.interests').on("click", (e) => {
          e.preventDefault();
          $('.interests').attr('id', 'focused')
            $('.about').attr('id', '');
            $('.projects').attr('id', '');
            $('.goals').attr('id', '');
            $('.div-box').detach();
            $('.general').load('./interests.html')
        });
      }))