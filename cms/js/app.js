$(document).ready(function() {

  // search bar action
  $('.btn-search').click(function() {
    if ($(window).width() <= 991) {
      $('.search-bar').slideToggle();
    } else {
      if ($('.search-bar').css('display') == 'none') {
        $('#primary-nav').slideToggle(function() {
          $('.search-bar').slideToggle();
        });
      } else {
        $('.search-bar').slideToggle(function() {
          $('#primary-nav').slideToggle();
        });
      }
    }
  });
  $(window).resize(function() {
    if ($(window).width() <= 991) {
      if ($('.search-bar').css('display') == 'block') {
        $('#primary-nav').removeAttr('style');
      }
    } else {
      if ($('.search-bar').css('display') == 'block') {
        $('#primary-nav').attr('style', 'display: none;');
      }
    }
  });

  // experience icCube menu
  $('.xp-menu-item').click(function() {

    $('.xp-menu-item').removeClass('active');
    $('.experience-box').removeClass('active');

    var i = $('.xp-menu-item').index($(this));
    $(this).addClass('active');
    $('.experience-box').eq(i).addClass('active');
  });

  // parallax effect
  // $(document).scroll(function() {
  //   $('.hero-parallax').css({
  //     backgroundPositionY: -($(document).scrollTop() / 10)
  //   });
  // });

  // counters {
  $(window).scroll(function() {
    if ($(document).scrollTop() > $('.counter-parent').offset().top + $('.counter-parent').height() - $(window).height()) {
      $('.counter-parent').find('.counter').each(function() {
        $(this).animate(
          {
            counter: parseInt($(this).attr('data-counter'))
          },
          {
            duration: 2000,
            easing: 'swing',
            step: function () {
              $(this).find('.count').text(Math.ceil(this.counter));
            }
          }
        );
      });
    }
  });

  // accordion
  $('.accordion-content').on('hide.bs.collapse', function () {
    $(this).parent().find('.accordion-link').find('svg').removeClass('fa-rotate-180');
  });
  $('.accordion-content').on('show.bs.collapse', function () {
    $(this).parent().find('.accordion-link').find('svg').addClass('fa-rotate-180');
  });


});
