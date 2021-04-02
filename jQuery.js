$($(document).ready(() => {
  firstFade();
  // ABOUT

  $('.about').on("click", (e) => {
    aboutClick(e);
  });
  
  // PROJECTS 
  $('.projects').on("click", (e) => {
    projectsClick(e);
  });
  
  // GOALS
  $('.goals').on("click", (e) => {
    goalsClick(e);
  });
  
  // INTERESTS
  $('.interests').on("click", (e) => {
    interestsClick(e);
  });
}))


















function firstFade() {
  $('.orb').fadeOut();
  $(".bgimg").fadeOut()
  $('#blurrs1').fadeIn('slow', () => {
    $('#position-1').fadeIn('slow', () => {
      $('#position-2').fadeIn('slow', () => {
        $('#position-3').fadeIn('slow', () => {
          $('#position-4').fadeIn('slow', () => {
            $('#position-5').fadeIn('slow', () => {
              $('#position-6').fadeIn('slow', () => {
                $('#position-7').fadeIn('slow')
              })
            })
          })
        })
      })
    });
  })
}

function aboutClick(e) {
  e.preventDefault();
  $('.orb').fadeOut();
  $(".bgimg").fadeOut()
  $('#blurrs1').fadeIn('slow', () => {
    $('#position-1').fadeIn('slow', () => {
      $('#position-2').fadeIn('slow', () => {
        $('#position-3').fadeIn('slow', () => {
          $('#position-4').fadeIn('slow', () => {
            $('#position-5').fadeIn('slow', () => {
              $('#position-6').fadeIn('slow', () => {
                $('#position-7').fadeIn('slow')
              })
            })
          })
        })
      })
    });
  })
  $('.about').attr('id', 'focused')
  $('.interests').attr('id', '')
  $('.projects').attr('id', '');
  $('.goals').attr('id', '');
  // $('.div-box').detach();
  // $('.general').load('./about.html')
}
function projectsClick(e) {
  e.preventDefault();
  $('.orb').fadeOut();
  $(".bgimg").fadeOut()
  $('#blurrs2').fadeIn('slow', () => {
    $('#position-1').fadeIn('slow', () => {
      $('#position-2').fadeIn('slow', () => {
        $('#position-3').fadeIn('slow', () => {
          $('#position-4').fadeIn('slow', () => {
            $('#position-5').fadeIn('slow', () => {
              $('#position-6').fadeIn('slow', () => {
                $('#position-7').fadeIn('slow')
              })
            })
          })
        })
      })
    });
  })
  $('.projects').attr('id', 'focused')
  $('.interests').attr('id', '')
  $('.about').attr('id', '');
  $('.goals').attr('id', '');
  $('.div-box').detach();
  $('.general').load('./projects.html');
  $('.slantedM img').attr('src', './assets/me5.png')
}
function goalsClick(e) {
  e.preventDefault();
  $('.orb').fadeOut();
  $(".bgimg").fadeOut()
  $('#blurrs3').fadeIn('slow', () => {
    $('#position-1').fadeIn('slow', () => {
      $('#position-2').fadeIn('slow', () => {
        $('#position-3').fadeIn('slow', () => {
          $('#position-4').fadeIn('slow', () => {
            $('#position-5').fadeIn('slow', () => {
              $('#position-6').fadeIn('slow', () => {
                $('#position-7').fadeIn('slow')
              })
            })
          })
        })
      })
    });
  })
  $('.goals').attr('id', 'focused')
  $('.interests').attr('id', '')
  $('.about').attr('id', '');
  $('.projects').attr('id', '');
  $('.div-box').detach();
  $('.general').load('./goals.html')
  $('.slantedM img').attr('src', './assets/me4.png')
}
function interestsClick(e) {
  e.preventDefault();
  $('.orb').fadeOut();
  $(".bgimg").fadeOut()
  $('#blurrs4').fadeIn('slow', () => {
    $('#position-1').fadeIn('slow', () => {
      $('#position-2').fadeIn('slow', () => {
        $('#position-3').fadeIn('slow', () => {
          $('#position-4').fadeIn('slow', () => {
            $('#position-5').fadeIn('slow', () => {
              $('#position-6').fadeIn('slow', () => {
                $('#position-7').fadeIn('slow')
              })
            })
          })
        })
      })
    });
  })
  $('.interests').attr('id', 'focused')
  $('.about').attr('id', '');
  $('.projects').attr('id', '');
  $('.goals').attr('id', '');
  $('.div-box').detach();
  $('.general').load('./interests.html')
}