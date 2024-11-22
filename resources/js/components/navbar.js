const menuBtn = document.querySelector('#menu-btn')
const menu = document.querySelector('#menu')
const closeBtn = document.querySelector('#menu-close-btn')
const overlay = document.querySelector('#overlay')
menuBtn.addEventListener('click', (e) => {
    menu.classList.remove('-right-64')
    menu.classList.add('right-0')
    overlay.style.display = 'block'
})
closeBtn.addEventListener('click', (e) => {
    menu.classList.add('-right-64')
    menu.classList.remove('right-0')
    overlay.style.display = 'none'

})

overlay.addEventListener('click',(e)=>{
    menu.classList.add('-right-64')
    menu.classList.remove('right-0')
    overlay.style.display = 'none'
})