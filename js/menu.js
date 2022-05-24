const hamburguer = document.querySelector("button")

hamburguer.addEventListener("click", function hamburguerClick() {

    const nav = document.getElementsByTagName("nav")[0]
    nav.classList.toggle("active")

});
