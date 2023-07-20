
const html  = document.querySelector('html');
const body  = document.querySelector('body');
const mainHeader  = document.querySelector('.main-header');
const mainMenu    = document.querySelector('.main-header .nav-outer .main-menu');
const mobileMenu  = document.querySelector('.mobile-menu .menu-box .menu-outer .ScrollbarsCustom-Content');
const menuSticky  = document.querySelector('.sticky-header .main-menu');

const mobileNavigationLi = document.querySelectorAll('.mobile-menu .navigation > li');
const mobileNavigationUl = document.querySelectorAll('.mobile-menu .navigation li ul');
// const dropdownBtn = document.querySelectorAll('.mobile-menu .navigation > li.dropdown > .dropdown-btn');
const scrollLink  = document.querySelector('.scroll-to-top');
const mobileNavToggle = document.querySelectorAll('.mobile-nav-toggler');
const mobileMenuCloseBtn = document.querySelector('.mobile-menu .close-btn');
const mobileMenuBackdrop = document.querySelector('.mobile-menu .menu-backdrop');


if(mobileMenu){

    mobileMenu.innerHTML = mainMenu.innerHTML;
    menuSticky.innerHTML = mainMenu.innerHTML;

    // dropdownBtn.forEach( elem =>{
    //     elem.addEventListener('click' ,function (e){
    //         e.preventDefault();
    //         let target = e.closest('li').querySelectorAll('ul');
    //
    //         if ( element.style.visibility === "visible" ){
    //             elem.closest('li').classList.remove("open");
    //             slideUp( target ,500 );
    //             elem.closest('.navigation').querySelectorAll('li.dropdown').classList.remove("open");
    //             slideUp( elem.closest('.navigation').querySelectorAll('li.dropdown > ul') ,500 );
    //             return false;
    //         }else{
    //             elem.closest('.navigation').querySelectorAll('li.dropdown').classList.remove("open");
    //             slideUp(elem.closest('.navigation').querySelectorAll('li.dropdown ul') ,500 );
    //             let li = elem.closest('li');
    //             li.forEach( item => {
    //                 if( item.classList.contains('open') ){
    //                     item.classList.remove('open');
    //                 }
    //                 else{
    //                     item.classList.add('open');
    //                 }
    //             });
    //             slideToggle( elem.closest('li').querySelectorAll('ul') ,500 );
    //         }
    //     });
    // })
}



function headerStyle() {

    if(mainHeader){
        window.addEventListener("scroll", function(event) {
            let top = this.scrollY ,left = this.scrollX;
            let HeaderHeight = mainHeader.offsetHeight;
            if (top >= HeaderHeight) {
                mainHeader.classList.add("fixed-header");
                fadeIn( scrollLink );
            } else {
                mainHeader.classList.remove("fixed-header");
                fadeOut( scrollLink ,300 );
            }
        }, false);
    }
}

headerStyle();


scrollLink.addEventListener('click' ,()=>{
    html.style.scrollBehavior = "smooth";
    window.scrollTo(0, 0);
})


mobileNavToggle.forEach(elem =>{
    elem.addEventListener('click' ,()=>{
        body.classList.add('mobile-menu-visible');
    })
})


mobileMenuCloseBtn.addEventListener('click' ,()=>{
    closeMobileMenu();
})
mobileMenuBackdrop.addEventListener('click' ,()=>{
    closeMobileMenu();
})

function closeMobileMenu(){
    body.classList.remove('mobile-menu-visible');
    mobileNavigationLi.forEach(el => {
        el.classList.remove('open');
    });
    mobileNavigationUl.forEach(el => {
        slideUp( el ,0);
    });
}


const mainHeaderLi  = document.querySelectorAll('.mobile-menu .menu-outer .navigation li.dropdown');


mainHeaderLi.forEach(elem => {
    let ul = elem.querySelectorAll('ul');
    const divElem = document.createElement('div');
    divElem.classList.add('dropdown-btn');
    const spanElem = document.createElement('span');
    spanElem.classList.add('fa' ,'fa-angle-down');
    divElem.append( spanElem );
    if( ul.length > 0 ){
        elem.appendChild( divElem );
    }
});

const dropdownBtn  = document.querySelectorAll('.mobile-menu .dropdown-btn');
dropdownBtn.forEach(btnElem => {
    btnElem.addEventListener('click' ,function(){
        if (this.previousSibling ){
            slideToggle( this.previousSibling ,500 )
        }
    })
});



// if($('.main-header li.dropdown ul').length){
//     $('.main-header li.dropdown').append('<div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>');
//
//     //Dropdown Button
//     $('.main-header li.dropdown .dropdown-btn').on('click', function() {
//         $(this).prev('ul').slideToggle(500);
//     });
//
//     //Dropdown Menu / Fullscreen Nav
//     $('.fullscreen-menu .navigation li.dropdown > a').on('click', function() {
//         $(this).next('ul').slideToggle(500);
//     });
//
//     //Disable dropdown parent link
//     $('.navigation li.dropdown > a').on('click', function(e) {
//         e.preventDefault();
//     });
//
//     //Disable dropdown parent link
//     $('.main-header .navigation li.dropdown > a,.hidden-bar .side-menu li.dropdown > a').on('click', function(e) {
//         e.preventDefault();
//     });
//
//     $('.cart-box .dropdown-menu').click(function(e) {
//         e.stopPropagation();
//     });
//
//     $('.select-categories').on('click', function(e){
//         //hiddenBar.removeClass('visible-sidebar');
//         $('body').toggleClass('category-open');
//     })
//
// }








/* SLIDE UP */
let slideUp = (target, duration=500) => {

    target.style.transitionProperty = 'height, margin, padding';
    target.style.transitionDuration = duration + 'ms';
    target.style.boxSizing = 'border-box';
    target.style.height = target.offsetHeight + 'px';
    target.offsetHeight;
    target.style.overflow = 'hidden';
    target.style.height = 0;
    target.style.paddingTop = 0;
    target.style.paddingBottom = 0;
    target.style.marginTop = 0;
    target.style.marginBottom = 0;
    window.setTimeout( () => {
        target.style.display = 'none';
        target.style.removeProperty('height');
        target.style.removeProperty('padding-top');
        target.style.removeProperty('padding-bottom');
        target.style.removeProperty('margin-top');
        target.style.removeProperty('margin-bottom');
        target.style.removeProperty('overflow');
        target.style.removeProperty('transition-duration');
        target.style.removeProperty('transition-property');
        //alert("!");
    }, duration);
}

/* SLIDE DOWN */
let slideDown = (target, duration=500) => {

    target.style.removeProperty('display');
    let display = window.getComputedStyle(target).display;
    if (display === 'none') display = 'block';
    target.style.display = display;
    let height = target.offsetHeight;
    target.style.overflow = 'hidden';
    target.style.height = 0;
    target.style.paddingTop = 0;
    target.style.paddingBottom = 0;
    target.style.marginTop = 0;
    target.style.marginBottom = 0;
    target.offsetHeight;
    target.style.boxSizing = 'border-box';
    target.style.transitionProperty = "height, margin, padding";
    target.style.transitionDuration = duration + 'ms';
    target.style.height = height + 'px';
    target.style.removeProperty('padding-top');
    target.style.removeProperty('padding-bottom');
    target.style.removeProperty('margin-top');
    target.style.removeProperty('margin-bottom');
    window.setTimeout( () => {
        target.style.removeProperty('height');
        target.style.removeProperty('overflow');
        target.style.removeProperty('transition-duration');
        target.style.removeProperty('transition-property');
    }, duration);
}



let slideToggle = (target, duration = 500) => {
    if ( window.getComputedStyle(target, null).display  === 'none') {
        return slideDown(target, duration);
    }
    else{
        return slideUp(target, duration);
    }
}





function fadeOut(el) {
    el.style.opacity = 1;
    (function fade() {
        if ((el.style.opacity -= .1) < 0) {
            el.style.display = "none";
        } else {
            requestAnimationFrame(fade);
        }
    })();
}

function fadeIn(el, display) {
    el.style.opacity = 0;
    el.style.display = 'block';
    el.style.display = display || "block";
    (function fade() {
        let val = parseFloat(el.style.opacity);
        if (!((val += .1) > 1)) {
            el.style.opacity = val;
            requestAnimationFrame(fade);
        }
    })();
}


