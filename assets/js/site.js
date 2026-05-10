const menuToggle = document.getElementById('menuToggle');
  const menuBox = document.getElementById('menuBox');
  const menuIcon = menuToggle.querySelector('i');

  menuToggle.addEventListener('click', () => {

    menuBox.classList.toggle('show');

    if(menuBox.classList.contains('show')){
      menuIcon.classList.remove('bi-list');
      menuIcon.classList.add('bi-x');
    } else {
      menuIcon.classList.remove('bi-x');
      menuIcon.classList.add('bi-list');
    }

  });

  document.addEventListener('click', function(e){

    if(
      !menuBox.contains(e.target) &&
      !menuToggle.contains(e.target)
    ){
      menuBox.classList.remove('show');

      // Reset Icon
      menuIcon.classList.remove('bi-x');
      menuIcon.classList.add('bi-list');
    }

  });

 const header = document.querySelector('.header');

  window.addEventListener('scroll', () => {
    if (window.scrollY > 400) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  });


let skillsContent = document.querySelector('.skills-content');

if (skillsContent) {

  new Waypoint({
    element: skillsContent,
    offset: '80%',

    handler: function(direction) {

      let progress = document.querySelectorAll(
        '.progress .progress-bar'
      );

      progress.forEach((el) => {
        el.style.width = el.getAttribute('aria-valuenow') + '%';
      });

      this.destroy(); // optional
    }
  });

}

new PureCounter();
 window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
    })
  });

const readMoreBtn = document.getElementById('readMoreBtn');
  const readLessBtn = document.getElementById('readLessBtn');
  const extraContent = document.getElementById('extraContent');

  readMoreBtn.addEventListener('click', () => {
    const bsCollapse = new bootstrap.Collapse(extraContent, { toggle: true });
    readMoreBtn.classList.add('d-none');
    readLessBtn.classList.remove('d-none');
  });

  readLessBtn.addEventListener('click', () => {
    const bsCollapse = bootstrap.Collapse.getInstance(extraContent);
    bsCollapse.hide();
    readLessBtn.classList.add('d-none');
    readMoreBtn.classList.remove('d-none');
  });


  var swiper = new Swiper(".testimonialSwiper", {
      effect: "cube",
      grabCursor: true,
      cubeEffect: {
        shadow: false,
        slideShadows: false,
        shadowOffset: 20,
        shadowScale: 0.94,
      },
      speed: 1000,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });

    var swiper = new Swiper(".toolSwiper", {
      slidesPerView: 4.3,
      spaceBetween: 20,
      autoplay: {
        delay: 0,
        disableOnInteraction: false,
      },
      loop: true,
      speed: 3000,
    });

  const lenis = new Lenis({
    duration: 3,
    smoothWheel: true,
    easing: (t) => 1 - Math.pow(1 - t, 3),
  })

  function raf(time) {
    lenis.raf(time)
    requestAnimationFrame(raf)
  }

  requestAnimationFrame(raf)
