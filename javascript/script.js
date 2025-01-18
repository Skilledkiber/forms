// const popupBtn = document.querySelector ("#popupBtn")
//       popup = document.querySelector ("#popup")
//       cancel = document.querySelector ("#cancel")

popupBtn.onclick = (e) => {
    e.preventDefault()
    popup.style.display = "block"
    popupBtn.style.display = "none"
}

cancel.onclick = () => {
    popup.style.display = "none"
    popupBtn.style.display = "block"
}