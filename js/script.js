burger_container.onclick = () => {
  menu.style.left = 0;
  black_bg.style.display = "block"
}

cancel.onclick = () => {
  menu.style.left = "-100%"
  black_bg.style.display = "none"
}

black_bg.onclick = () => {
  menu.style.left = "-100%"
  black_bg.style.display = "none"
}

function openMenu(id) {
  id.style.display = 'block'
  id.style.position = 'fixed'
  id.style.top = '0'
  id.style.left = '0'
  id.style.width = '100%'
  id.style.zIndex = '1'
}

function closeMenu(id) {
  id.style.display = 'none'
  id.style.position = 'static'
}
if (window.innerWidth < 500) {
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