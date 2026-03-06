burger_container.onclick = () => {
  menu.style.left = 0;
  black_bg.style.display = "block"
}

cancel.onclick = () => {
  menu.style.left = "-100%"
  black_bg.style.display = "none"
}

black_bg.onclick = () => {
  submenu.style.display = "none"
  menu.style.left = "-100%"
  black_bg.style.display = "none"
}

order_call.onclick = (e) => {
  e.preventDefault()
  popup.style.display = "block"
  blury.style.display = "block"
}

blury.onclick = (e) => {
  e.preventDefault()
  popup.style.display = "none"
  blury.style.display = "none"
}

order_cancel.onclick = (e) => {
  e.preventDefault()
  popup.style.display = "none"
  blury.style.display = "none"
}

image.onclick = (e) => {
  e.preventDefault()
  image.classList.add("big")
  blury.style.display = "block"
}

function openMenu(id) {
  id.style.display = 'block'
  id.style.position = 'fixed'
  id.style.left = '0'
  id.style.width = 'auto'
  id.style.zIndex = '1'
}

function closeMenu(id) {
  id.style.display = 'none'
  id.style.position = 'static'
}

if(window.innerWidth < 800) {
  btn.onclick = (e) => {
  e.preventDefault()
  openMenu(submenu)
}

subbtn.onclick = (e) => {
  e.preventDefault()
  openMenu(subsubmenu)
}

cancelsub.onclick = (e) => {
  e.preventDefault()
  closeMenu(submenu)
}
cancelsubsub.onclick = (e) => {
  e.preventDefault()
  closeMenu(subsubmenu)
}
}