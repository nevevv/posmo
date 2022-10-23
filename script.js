const menu = document.querySelector('.header__nav-menu')
const list = $('.header__head-list')

if(window.innerWidth <= 1100) {
    menu.addEventListener('click', () => {
        menu.classList.toggle('active__menu')  
        $('.header__head-list').toggle(400)
        list.css({
            display:'flex',
        })
        if( $('#head').hasClass('active__menu') ) {
            $('.header__nav-line').css({
                background:'black'
            })
            $('body').css({
                overflow:'hidden'
            })

        }else {
            $('.header__nav-line').css({
                background:'white'
            })
            $('body').css({
                overflow:'scroll'
            })
        }
       
    })    
    $('.header__list-links').click(function() {
        $('.header__head-list').hide();
        menu.classList.remove('active__menu')
        $('.header__nav-line').css({
            background:'white'
        })
        $('body').css({
            overflow:'scroll'
        })
    })

}