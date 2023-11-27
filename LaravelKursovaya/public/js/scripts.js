const body = document.getElementsByTagName('body')[0];
const burgerBtn = document.querySelector('.js-header__btn--menu');
const headerNavMenu = document.querySelector('.js-header__menu');
//Filters
document.addEventListener('DOMContentLoaded', () => {
    const filterBtns = document.querySelectorAll('.js-filter-btn');
    const productCards = document.querySelectorAll('.js-product-card');
    
    const filterBtn = filterBtns.forEach((btn) => {
        btn.addEventListener(('click'), () =>{
            filterBtns.forEach(item => item.classList.remove('active'));
            btn.classList.add('active');
            if(btn.classList.contains('active')){
                productCards.forEach((card) => {
                    if(btn.dataset.filter_type == card.dataset.card_type){
                        card.classList.remove('filtered')
                    } else {
                        card.classList.add('filtered')
                    }
                });
            }
        });
    });
});

burgerBtn.addEventListener('click', () => {
    burgerBtn.classList.toggle('active');
    headerNavMenu.classList.toggle('open');
    body.classList.toggle('fixing');
});