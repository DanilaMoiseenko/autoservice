

$('#main-form').submit(function(){
    alert('Спасибо, ваша заявка отправлена! Скоро мы с вами свяжемся')
})


window.addEventListener('resize',function(){
    if(window.screen.width > 821 && isOpen) {

        let heigthHeader = document.querySelector('header').offsetHeight
        anime({
            targets: '.stick1',
            translateY: 0,
            rotate: '0deg',
            easing: 'easeOutQuart',
            direction: 'alternate',
            duration: 1000,
            loop: false
           });
           anime({
            targets: '.stick3',
            translateY: 0,
            rotate: '0deg',
            easing: 'easeOutQuart',
            direction: 'alternate',
            duration: 1000,
            loop: false
           });
           anime({
            targets: '.stick2',
            opacity: 1,
            easing: 'easeOutQuart',
            direction: 'alternate',
            duration: 1000,
            loop: false
           });
       document.querySelector('.burger-menu').style.top = '-100vh'
           isOpen = !isOpen;
    }
});











let bm = document.querySelector('.menu_small_icon');
// let heigthHeader = document.querySelector('header').offsetHeight
let isOpen = false;

bm.addEventListener('click',()=>{
    let heigthHeader = document.querySelector('header').offsetHeight
    console.log(heigthHeader)

    if (window.matchMedia("(max-width:485px)").matches) {
        if(!isOpen){
            anime({
                targets: '.stick1',
                translateY: 9,
                rotate: '45deg',
                easing: 'easeOutQuart',
                direction: 'alternate',
                duration: 1000,
                loop: false
               });
               anime({
                targets: '.stick3',
                translateY: -9,
                rotate: '-45deg',
                easing: 'easeOutQuart',
                direction: 'alternate',
                duration: 1000,
                loop: false
               });
               anime({
                targets: '.stick2',
                opacity: 0,
                easing: 'easeOutQuart',
                direction: 'alternate',
                duration: 1000,
                loop: false
               });
            document.querySelector('.burger-menu').style.top = heigthHeader+'px'
    
               isOpen = !isOpen;
    
        } else {
            anime({
                targets: '.stick1',
                translateY: 0,
                rotate: '0deg',
                easing: 'easeOutQuart',
                direction: 'alternate',
                duration: 1000,
                loop: false
               });
               anime({
                targets: '.stick3',
                translateY: 0,
                rotate: '0deg',
                easing: 'easeOutQuart',
                direction: 'alternate',
                duration: 1000,
                loop: false
               });
               anime({
                targets: '.stick2',
                opacity: 1,
                easing: 'easeOutQuart',
                direction: 'alternate',
                duration: 1000,
                loop: false
               });
           document.querySelector('.burger-menu').style.top = '-100vh'
               isOpen = !isOpen;
        }
        
      } else {
        if(!isOpen){
            anime({
                targets: '.stick1',
                translateY: 12,
                rotate: '45deg',
                easing: 'easeOutQuart',
                direction: 'alternate',
                duration: 1000,
                loop: false
               });
               anime({
                targets: '.stick3',
                translateY: -12,
                rotate: '-45deg',
                easing: 'easeOutQuart',
                direction: 'alternate',
                duration: 1000,
                loop: false
               });
               anime({
                targets: '.stick2',
                opacity: 0,
                easing: 'easeOutQuart',
                direction: 'alternate',
                duration: 1000,
                loop: false
               });
            document.querySelector('.burger-menu').style.top = heigthHeader+'px'
    
               isOpen = !isOpen;
    
        } else {
            anime({
                targets: '.stick1',
                translateY: 0,
                rotate: '0deg',
                easing: 'easeOutQuart',
                direction: 'alternate',
                duration: 1000,
                loop: false
               });
               anime({
                targets: '.stick3',
                translateY: 0,
                rotate: '0deg',
                easing: 'easeOutQuart',
                direction: 'alternate',
                duration: 1000,
                loop: false
               });
               anime({
                targets: '.stick2',
                opacity: 1,
                easing: 'easeOutQuart',
                direction: 'alternate',
                duration: 1000,
                loop: false
               });
           document.querySelector('.burger-menu').style.top = '-100vh'
               isOpen = !isOpen;
        }
      }
 
})

document.querySelector('.bm-link').addEventListener('click',
()=>{
    anime({
        targets: '.stick1',
        translateY: 0,
        rotate: '0deg',
        easing: 'easeOutQuart',
        direction: 'alternate',
        duration: 1000,
        loop: false
       });
       anime({
        targets: '.stick3',
        translateY: 0,
        rotate: '0deg',
        easing: 'easeOutQuart',
        direction: 'alternate',
        duration: 1000,
        loop: false
       });
       anime({
        targets: '.stick2',
        opacity: 1,
        easing: 'easeOutQuart',
        direction: 'alternate',
        duration: 1000,
        loop: false
       });
    document.querySelector('.burger-menu').style.top = '-100vh'
    isOpen = !isOpen;
}
)


var slideIndex = 1;
showSlides(slideIndex);

/* Функция увеличивает индекс на 1, показывает следующй слайд*/
function plusSlide() {
    showSlides(slideIndex += 1);
}

/* Функция уменьшяет индекс на 1, показывает предыдущий слайд*/
function minusSlide() {
    showSlides(slideIndex -= 1);  
}

/* Устанавливает текущий слайд */
// function currentSlide(n) {
//     showSlides(slideIndex = n);
// }

/* Основная функция слайдера */
function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("item");

   
    if (n > slides.length) {
      slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex - 1].style.display = "block";

}

