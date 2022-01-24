
const menuItens = document.querySelectorAll('.NavBar-Header a[href^="#"');

menuItens.forEach(item =>{
    item.addEventListener('click', scrollToiDOnClick);
})

function getScrollTopHeref(element) {
    const id = element.getAttribute('href');
    return document.querySelector(id).offsetTop;
    
}

function scrollToiDOnClick(event) {
    event.preventDefault();
    const to = getScrollTopHeref(event.target) -80;
    scrollToPosition(to) 
}

function scrollToPosition(to) {
    window.scroll({
        top: to,
        behavior: "smooth",
    });
}

