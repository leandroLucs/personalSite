const nav = document.querySelector('#header nav')
const toggle = document.querySelectorAll('nav .toggle')
const links = document.querySelectorAll('nav ul li a')

for (const element of toggle) {
  element.addEventListener('click', function () {
    nav.classList.toggle('show')
  })
} /*mostrar menu*/
for (const link of links) {
  link.addEventListener('click', function () {
    nav.classList.remove('show')
  })
} /*esconder menu*/

/*Biblioteca swiper para slider, carousel no TESTIMONIALS*/
const swiper = new Swiper('.swiper-container', {
  slidesPerView: 1,
  pagination: {
    el: '.swiper-pagination'
  },
  mousewheel: true,
  keyboard: true,
  breakpoints: {
    767: {
      slidesPerView: 2,
      setWrapperSize: true
    }
  }
})
/*Biblioteca Scroll Reveal*/
const scrollReveal = ScrollReveal({
  origin: 'top',
  distance: '30px',
  duration: 700,
  reset: true
})
scrollReveal.reveal(
  `#home .text, #home .scroll-down,
  #about .title, #about .bio, #about .paragraph-1, #about .paragraph-2,
  #portfolio .text, .swiper-container,
  #blog header, #testimonials .testimonials,
  #contact .text, #contact .links, #contact form,
  footer .brand, footer .social
  `,
  { interval: 100 }
)

/*mudar header*/
const header = document.querySelector('#header')
const navHeight = header.offsetHeight
function changeHeaderWhenScroll() {
  if (window.scrollY >= navHeight) {
    header.classList.add('scroll')
  } else {
    header.classList.remove('scroll')
  }
}

/*botão voltar para o topo*/
const backTopBtn = document.querySelector('.back-to-top')
function backToTop() {
  if (window.scrollY >= 560) {
    backTopBtn.classList.add('show')
  } else {
    backTopBtn.classList.remove('show')
  }
}

/*menu ativo conforme seção visivel*/
const sections = document.querySelectorAll('main section[id]')
function currentSection() {
  const checkpoint = window.pageYOffset + (window.innerHeight / 8) * 4
  for (const section of sections) {
    const sectionTop = section.offsetTop
    const sectionHeight = section.offsetHeight
    const sectionId = section.getAttribute('id')
    const checkpointStart = checkpoint >= sectionTop
    const checkpointEnd = checkpoint <= sectionTop + sectionHeight
    if (checkpointStart && checkpointEnd) {
      document
        .querySelector('nav ul li a[href*=' + sectionId + ']')
        .classList.add('active')
    } else {
      document
        .querySelector('nav ul li a[href*=' + sectionId + ']')
        .classList.remove('active')
    }
  }
}

/*when scroll*/
window.addEventListener('scroll', function () {
  changeHeaderWhenScroll()
  backToTop()
  currentSection()
})
