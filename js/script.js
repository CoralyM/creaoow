gsap.registerPlugin(ScrollTrigger);

var intervalId = window.setInterval(function(){
    $(document).ready(function(){
        $('.logo_top').css('background-position', '3px -110.5px');
        var delayInMilliseconds = 500; //1 second
        setTimeout(function() {
            $('.logo_top').css('background-position', '0px 0px');
        }, delayInMilliseconds);
    });
}, 10000);

$(window).scroll(function(){
    var scrolledFromTop = $(window).scrollTop() + $(window).height();
    $(".appear").each(function(){
      var distanceFromTop = $(this).offset().top;
      if(scrolledFromTop >= distanceFromTop+100){
        var delaiAnim = $(this).data("delai");
        $(this).delay(delaiAnim).animate({
          top:0,
          opacity:1
        });
      }
    });
  });

  gsap.from("#txt_banner", {
    scrollTrigger: "#txt_banner", // start the animation when ".box" enters the viewport (once)
    x: -1000
  });

  gsap.to("#txt_banner", {
    scrollTrigger: "#txt_banner", // start the animation when ".box" enters the viewport (once)
    x: this,
    duration: 1.5,
  });

  gsap.from("#img_banner", {
    scrollTrigger: "#img_banner", // start the animation when ".box" enters the viewport (once)
    opacity: 0
  });

  gsap.to("#img_banner", {
    scrollTrigger: "#img_banner", // start the animation when ".box" enters the viewport (once)
    opacity: 1,
    duration: 1.5,
    delay: 1.5
  });

  var burgerMenu = document.getElementById('burger-menu');
var overlay = document.getElementById('menu');
burgerMenu.addEventListener('click',function(){
  this.classList.toggle("close");
  overlay.classList.toggle("overlay");
});

gsap.from(".contact_banner_txt", {
  scrollTrigger: ".contact_banner_txt", // start the animation when ".box" enters the viewport (once)
  x: 1000
});

gsap.to(".contact_banner_txt", {
  scrollTrigger: ".contact_banner_txt", // start the animation when ".box" enters the viewport (once)
  x: this,
  duration: 1.5,
});

gsap.from(".contact_banner_img", {
  scrollTrigger: ".contact_banner_img", // start the animation when ".box" enters the viewport (once)
  opacity: 0
});

gsap.to(".contact_banner_img", {
  scrollTrigger: ".contact_banner_img", // start the animation when ".box" enters the viewport (once)
  opacity: 1,
  duration: 1.5,
  delay: 1.5
});