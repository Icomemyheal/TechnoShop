//Utils
const body = document.getElementsByTagName('body')[0];
//Mobile Menu
const burgerBtn = document.querySelector('.js-header__btn--menu');
const headerNavMenu = document.querySelector('.js-header__menu');
burgerBtn.addEventListener('click', () => {
    burgerBtn.classList.toggle('active');
    headerNavMenu.classList.toggle('open');
    body.classList.toggle('fixing');
});
//Basket Checkout
document.addEventListener('DOMContentLoaded', () => {
    const basketCheckoutBtn = document.querySelector('.js-checkout-btn');
    const basketCheckoutModal = document.querySelector('.js-checkout-modal');
    const basketModalOverlay = document.querySelector('.js-overlay');
    const basketModalCloseBtn = document.querySelector('.js-close-checkout');
    const checkoutProductList = document.querySelector('.js-checkout-list');

    basketCheckoutBtn?.addEventListener('click', () => {
        basketCheckoutModal.classList.add('active');
        basketModalOverlay.classList.add('overlay');
        if(basketCheckoutModal.classList.contains('active')){
            burgerBtn.setAttribute("disabled", "");
        }

        if(checkoutProductList.childElementCount >= 4){
            basketCheckoutModal.classList.add('overflow');
        } else {
            basketCheckoutModal.classList.remove('overflow');
        }
        
    });
    basketModalOverlay.addEventListener('click', (e) => {
        if(e.target == basketModalOverlay){
            basketCheckoutModal.classList.remove('active');
            basketModalOverlay.classList.remove('overlay');
            burgerBtn.removeAttribute("disabled", "");
        } else {
            return false;
        }
    });
    basketModalCloseBtn.addEventListener('click', () => {
        basketCheckoutModal.classList.remove('active');
        basketModalOverlay.classList.remove('overlay');
        burgerBtn.removeAttribute("disabled", "");
    });
})

//Filters
document.addEventListener('DOMContentLoaded', () => {
    const filterBtns = document.querySelectorAll('.js-filter-btn');
    const productCards = document.querySelectorAll('.js-product-card');
    
    const filterBtn = filterBtns.forEach((btn) => {
        console.log(btn);
        btn.addEventListener(('click'), () =>{
            filterBtns.forEach(item => item.classList.remove('active'));
            btn.classList.add('active');
            if(btn.classList.contains('active')){
                productCards.forEach((card) => {
                    if(btn.dataset.filter_type == card.dataset.card_type){
                        card.classList.remove('filtered')
                    }else if(btn.dataset.filter_type == 'show-all'){
                        card.classList.remove('filtered')
                    }else {
                        card.classList.add('filtered')
                    }
                });
            }
        });
    });
});
//Basket & Order Product Check
document.addEventListener('DOMContentLoaded', () => {
    const basketProductList = document.querySelector('.js-basket-list');
    const orderProductList = document.querySelector('.js-order-list');
    const checkoutProductList = document.querySelector('.js-checkout-list');
    const checkoutBtn = document.querySelector('.js-checkout-btn');

    if(basketProductList.childElementCount === 0 && orderProductList.childElementCount === 0 && checkoutProductList.childElementCount === 0){
        const basketListChild = document.createElement('p');
        const orderListChild = document.createElement('p');

        orderListChild.classList.add('order__product--empty');
        orderListChild.innerHTML = 'Замовлення пусте. Поверніться в магазин та придбайте щось собі :)'

        basketListChild.classList.add('basket__product--empty');
        basketListChild.innerHTML = 'Кошик пустий. Поверніться в магазин та придбайте щось собі :)';

        basketProductList.appendChild(basketListChild);
        orderProductList.appendChild(orderListChild);

        checkoutBtn.classList.add('disable-btn');
        checkoutBtn.setAttribute("disabled", '');
    }
    else {
        return false;
    }
});

function validateForm() {
    const firstName = document.getElementById('firstName').value;
    const lastName = document.getElementById('lastName').value;
    const phoneNumber = document.getElementById('phoneNumber').value;
    const email = document.getElementById('email').value;

    const firstNameError = document.querySelector('.input__firstName--error');
    const lastNameError = document.querySelector('.input__lastName--error');
    const phoneNumberError = document.querySelector('.input__phoneNumber--error');
    const emailError = document.querySelector('.input__email--error');
    
    // Очищення попередніх помилок перед новою валідацією
    firstNameError.textContent = '';
    lastNameError.textContent = '';
    phoneNumberError.textContent = '';
    emailError.textContent = '';

    if (firstName.trim() === '') {
        firstNameError.textContent = 'Введіть Ім\'я';
        firstNameError.classList.add('_error');
    } else {
        firstNameError.classList.remove('_error');
    }

    if (lastName.trim() === '') {
        lastNameError.textContent = 'Введіть Прізвище';
        lastNameError.classList.add('_error');
    } else {
        lastNameError.classList.remove('_error');
    }

    // Проста перевірка для Номера телефону
    if (phoneNumber.trim() === '') {
        phoneNumberError.textContent = 'Введіть коректний номер телефону (наприклад, +380508745833)';
        phoneNumberError.classList.add('_error');
    } else {
        phoneNumberError.textContent = ''; // Очищення тексту помилки, якщо номер телефону введено правильно
        phoneNumberError.classList.remove('_error');
    }

    // Вбудована перевірка для Електронної пошти
    if (email.trim() === '') {
        emailError.textContent = 'Введіть Email!';
        emailError.classList.add('_error');
    } else if (!/^\S+@\S+\.\S+$/.test(email)) {
        emailError.textContent = 'Введіть коректну електронну пошту';
        emailError.classList.add('_error');
    } else {
        emailError.classList.remove('_error');
    }

    // Повертаємо true, якщо немає помилок, інакше false
    return !firstNameError.textContent && !lastNameError.textContent && !phoneNumberError.textContent && !emailError.textContent;
}

document.addEventListener('DOMContentLoaded', function () {
    const orderForm = document.getElementById('orderForm');

    if (orderForm) {
        orderForm.addEventListener('submit', function (e) {

            if(!validateForm()){
                e.preventDefault();
                return;
            }

            const formData = new FormData(orderForm);

            fetch(orderForm.action, {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: new URLSearchParams(formData)
            })
            .then(response => {
                if(!response){
                    throw new Error('Виникла HTTP помилка при відправлені письма' + response.status);
                } else {
                    alert('Лист відправлено успішно!');
                }
                response.json();
            })
            .catch(error => {
                console.error(error);
            });
        });
    }
});