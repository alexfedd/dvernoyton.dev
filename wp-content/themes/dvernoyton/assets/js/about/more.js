const moreBtn = document.querySelector('.certificates__button');
const hidden = document.querySelectorAll('.certificates__item--hidden')
moreBtn.addEventListener('click', e => {
  console.log('fdghbfgkjhfghjf');
  hidden.forEach(item => {
    item.classList.remove('certificates__item--hidden')
    moreBtn.remove()
  })
})