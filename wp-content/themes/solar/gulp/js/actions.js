var ctaMenu = document.querySelector('.header__cta')
var myModal = new bootstrap.Modal(document.getElementById('myModal'), {
  keyboard: false
})

ctaMenu.addEventListener('click', () => {
  myModal.show()
})