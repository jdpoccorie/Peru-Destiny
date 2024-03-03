const wrapper = document.querySelector(".wrapper");
const carousel = document.querySelector(".carousel");
const arrowButtons = document.querySelectorAll(".wrapper i");
const firstCardWidth = carousel.querySelector(".card").offsetWidth;
const carouselChildrens = [...carousel.children]

let isDragging = false,
    startX,
    startScrollLeft,
    timeoutId;

// obtener la cantidad de tarjetas que caben en el carrusel a la vez
let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);

// inserte copias de las últimas tarjetas al comienzo del carrusel para un desplazamiento infinito
carouselChildrens.slice(-cardPerView).reverse().forEach(card => {
    carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
})

carouselChildrens.slice(0, cardPerView).forEach(card => {
    carousel.insertAdjacentHTML("beforeend", card.outerHTML);
})

// agregue detectores de eventos para los botones de flecha para desplazar el carrusel hacia la izquierda y hacia la derecha
arrowButtons.forEach(button => {
    button.addEventListener("click", () => {
        carousel.scrollLeft += button.id === "left" ? -firstCardWidth : firstCardWidth;
    })
})

const dragStart = (e) => {
    isDragging = true;
    carousel.classList.add("dragging");
    // registra el cursor inicial y la posición de desplazamiento del carrusel
    startX = e.pageX;
    startScrollLeft = carousel.scrollLeft;
}

const dragging = (e) => {
    if (!isDragging) return;
    // actualiza la posición de desplazamiento del carrusel según el movimiento del cursor
    carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
}

const dragStop = (e) => {
    isDragging = false;
    carousel.classList.remove("dragging");
}

const autoPlay = () => {
    // if (carousel.scrollLeft === carousel.scrollWidth - carousel.offsetWidth) {
    //     carousel.classList.add("no-transition");
    //     carousel.scrollLeft = 0;
    //     carousel.classList.remove("no-transition");
    // }

    if (window.innerWidth < 800) return;
    
    timeoutId = setTimeout(() => carousel.scrollLeft += firstCardWidth, 2500);
}

autoPlay();

const infiniteScroll = () => {
    if (carousel.scrollLeft === 0) {
        carousel.classList.add("no-transition");
        carousel.scrollLeft = carousel.scrollWidth - (carousel.offsetWidth * 2);
        carousel.classList.remove("no-transition");
    } else if(carousel.scrollLeft === carousel.scrollWidth - carousel.offsetWidth) {
        carousel.classList.add("no-transition");
        carousel.scrollLeft = carousel.offsetWidth;
        carousel.classList.remove("no-transition");
    }

    //
    clearTimeout(timeoutId);
    if (!wrapper.matches(":hover")) {
        autoPlay();
        
    }
}

carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);
carousel.addEventListener("scroll", infiniteScroll);
wrapper.addEventListener("nouseenter", () => clearTimeout(timeoutId));
wrapper.addEventListener("mouseleave", autoPlay);
