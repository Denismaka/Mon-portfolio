const typed = new Typed('.multiple', {
  strings: ['Développeur Fullstack', 'Web Designer'],
  typeSpeed: 100,
  backSpeed: 100,
  backDelay: 1000,
  loop: true,
});

ScrollReveal({
  reset: true,
  distance: '80px',
  duration: 2000,
  delay: 200,
});
ScrollReveal().reveal('.container, .heading', { origin: 'top' });
ScrollReveal().reveal('img, .col-md-4, form', { origin: 'bottom' });
ScrollReveal().reveal('h1, h3, h4, h5, span, li', { origin: 'left' });
ScrollReveal().reveal('p, i, .row', { origin: 'right' });
