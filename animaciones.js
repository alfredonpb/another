// alert('Suscribete a nuestro boletín')

var harina = document.getElementById("harinapan")

harina.addEventListener("mouseover", agrandar)
function agrandar(){
    harina.style.height = "38px"
    harina.style.transition = "1s width ease"
    //harina.style.background = "orange"
    //harina.style.fontSize = "16px"    
}

harina.addEventListener("mouseout", achicarHarina)
function achicarHarina(){
    harina.style.height = "35px"
    harina.style.transition = "2s width ease"
}