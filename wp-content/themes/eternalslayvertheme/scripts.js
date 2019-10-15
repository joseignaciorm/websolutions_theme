;
console.log('Hello WordPress');

// Para evitar conflictos con versiones JQuery entre WordPress y sus Plugins
$ = jQuery.noConflict();

const navbarToogle = document.getElementById('navbar-toggle'),
      mainNavBar = document.getElementById('main-navbar'),
      navbarItem = document.getElementById('navbar__item'),
      navbarItemChild = document.getElementById('navbar--child')



navbarToogle.addEventListener('click', () => {
    mainNavBar.classList.toggle('translate');
})

navbarItem.addEventListener('click', () => {
    navbarItemChild.classList.toggle('dropdown__navbar--child')
})


/**********  
        * Banner slider *
        *               *   **************** */
const nextBtn = document.querySelector('#next'),
      prevBtn = document.querySelector('#prev'),
      bannerSlider = document.querySelector('#bannerSlider')

let firstSlide,
    lastSlide;


    let projects = [
        {
            title: "Diseño web - Posicionamiento SEO",
            text: "Diseño WEB a medida con contenido de calidad siguiendo las directrices de google para el posicionamiento seo",
            btnAction: "Servicios",
            image: 'assets/img/Posicionamiento-web-seo.jpg'
        },

        {
            title: "Desarrollamos páginas web, mejoramos la imágen de tu negocio",
            text: "Diseño WEB a medida, además trabajamos con los CMS mas importantes para desarrollar tu sitio web",
            btnAction: "Servicios",
            image: 'assets/img/Diseño-web.jpg'
        },

        {
            title: "Hacemos posicionamiento web-seo, auditorias de tu negocio",
            text: "Contenido de calidad siguiendo las directrices de google para generar tráfico a tu negocio",
            btnAction: "Servicios",
            image: 'assets/img/Posicionamiento-seo.jpg'
        },

        {
            title: "Diseño web - Posicionamiento SEO",
            text: "Diseño WEB a medida con contenido de calidad siguiendo las directrices de google para el posicionamiento seo",
            btnAction: "Servicios",
            image: 'assets/img/Posicionamiento-web-seo.jpg'
        }
    ]

    projects.forEach(({title, text, btnAction, image}, i) => {
        const slider = document.createElement('div')
        slider.classList.add('slider-1')
        //slider.style.backgroundImage = "url('" + image + "')";

        if(i == 0) {
            firstSlide = slider
            slider.classList.add('active')
        } else if (i + 1 == projects.length) {
            lastSlide = slider;
        }

        const bgSliderContent = document.createElement('div')
        bgSliderContent.classList.add('main_banner__slider--bg-slider-content')

        const sliderContent = document.createElement('div')
        sliderContent.classList.add('main_banner__slider--content')

        const sliderContent_content = document.createElement('div')
        sliderContent_content.classList.add('main_banner__slider--content-description')

        const sliderTitle = document.createElement('h1')
        sliderTitle.classList.add('main_banner__slider--title')
        sliderTitle.textContent = title

        const sliderSubTitle = document.createElement('p')
        sliderSubTitle.classList.add('main_banner__slider--sub-title')
        sliderSubTitle.textContent = text

        const sliderLink = document.createElement('a')
        sliderLink.classList.add('main_banner__slider--buttom', 'buttom-1', 'm-b')
        sliderLink.textContent = btnAction

        const sliderImageContent = document.createElement('div')
        sliderImageContent.classList.add('main_banner__slider--image-content')
        
        const sliderImage = document.createElement('img')
        sliderImage.classList.add('main_banner__slider--image')
        //sliderImage.style.backgroundImage = "url('" + image + "')";
        sliderImage.src =  image
        
        
        sliderContent_content.appendChild(sliderTitle)     
        sliderContent_content.appendChild(sliderSubTitle)
        sliderContent_content.appendChild(sliderLink)
        sliderImageContent.appendChild(sliderImage)
        sliderContent.appendChild(sliderContent_content)
        sliderContent.appendChild(sliderImageContent)
        bgSliderContent.appendChild(sliderContent)




        slider.appendChild(bgSliderContent);
        bannerSlider.appendChild(slider);
    })

    nextBtn.addEventListener('click', () => {
        const activeSlider = document.querySelector('.slider-1.active')
        let nextSibbling = activeSlider.nextElementSibling

        if(nextSibbling == null) {
            nextSibbling = firstSlide;
        }

        if(nextSibbling.classList.contains('slider-1')) {
            activeSlider.classList.remove('active')
            nextSibbling.classList.add('active')
        }
    })

    prevBtn.addEventListener('click', () => {
        const activeSlider = document.querySelector('.slider-1.active')
        let nextSibling = activeSlider.previousElementSibling

        if(nextSibling == null || !nextSibling.classList.contains('slider-1')) {
            nextSibling = lastSlide;
        }

        if(nextSibling.classList.contains('slider-1'))
        activeSlider.classList.remove('active')
        nextSibling.classList.add('active')
    })
    
    /**********  
        * End banner slider *
        *               *   **************** */


/**********  
        * Scroll dinámico *
        *               *   **************** */

const getScrollBarWidth = () => innerWidth - document.documentElement.clientWidth
document.documentElement.style.setProperty('--scrollBar', getScrollBarWidth())

/**********  
        * End scroll dinámico *
        *               *   **************** */