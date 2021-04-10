var scrollToTopBtn = document.querySelector(".scrollToTopBtn")
var rootElement = document.documentElement

function handleScroll() {
    // Do something on scroll
    var scrollTotal = rootElement.scrollHeight - rootElement.clientHeight
    if ((rootElement.scrollTop / scrollTotal) > 0.15) {
        // Affiche le bouton
        scrollToTopBtn.classList.add("showBtn")
    } else {
        // Cache le bouton
        scrollToTopBtn.classList.remove("showBtn")
    }
}

function scrollToTop() {
    // Remonte jusqu'en haut
    rootElement.scrollTo({
        top: 0,
        behavior: "smooth"
    })
}
scrollToTopBtn.addEventListener("click", scrollToTop)
document.addEventListener("scroll", handleScroll)