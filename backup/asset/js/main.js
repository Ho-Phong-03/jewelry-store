// ==================== SCROLL MENU ===================
document.addEventListener('DOMContentLoaded', function() {
    const navHeader = document.getElementById('nav-header');
    const fixedClass = 'fixed-header';
    const scrollThreshold = 50;

    window.addEventListener('scroll', function() {
        if (window.scrollY > scrollThreshold) {
            if (!navHeader.classList.contains(fixedClass)) {
                navHeader.classList.add(fixedClass);
            }
        } else {
            if (navHeader.classList.contains(fixedClass)) {
                navHeader.classList.remove(fixedClass);
            }
        }
    });
});

// =================== SHOW MENU MINI ==================
const btnToggle = document.getElementById('nav-toggle');
const btnClose = document.getElementById('nav-close');
const navModal = document.getElementById('nav-modal-menu');
const navMenu = document.getElementById('nav-menu');

// Menu Show
btnToggle.addEventListener('click', () => {
    navModal.classList.add('show__modal__menu');
    navMenu.classList.add('show__modal__menu');
});

// Menu Hidden 
btnClose.addEventListener('click', () =>{
    navModal.classList.remove('show__modal__menu');
    navMenu.classList.remove('show__modal__menu');
});

const clickModalMenu = function(e){
    if(!navMenu.contains(e.target) && !btnToggle.contains(e.target)) {
        navModal.classList.remove('show__modal__menu');
        navMenu.classList.remove('show__modal__menu');
    }
}
window.addEventListener('click', clickModalMenu);

// ====================== SHOW SEARCH MINI =======================
const btnSearch = document.getElementById('header-btn-menu-search');
const btnSearchClose = document.getElementById('modal-search-close');
const boxModalSearch = document.getElementById('nav-box-modal-search');
const modalSearch = document.getElementById('nav-modal-search');


// Modal Search Show
btnSearch.addEventListener('click', () =>{
    boxModalSearch.classList.add('show__modal__search');
    modalSearch.classList.add('show__modal__search');
});

// Modal Search Hidden 
btnSearchClose.addEventListener('click', () =>{
    boxModalSearch.classList.remove('show__modal__search');
    modalSearch.classList.remove('show__modal__search');
});

const clickModalSearch = function(e){
    if (!modalSearch.contains(e.target) && !btnSearch.contains(e.target)) {
        boxModalSearch.classList.remove('show__modal__search');
        modalSearch.classList.remove('show__modal__search');
    }
}
window.addEventListener('click', clickModalSearch);

// ==================== SHOW CART MINI ============================
const btnCart = document.getElementById('nav-btn-cart');
const btnCartClose = document.getElementById('modal-cart-close');
const boxModalCart = document.getElementById('nav-box-modal-cart');
const modalCart = document.getElementById('nav-modal-cart');

// Modal Cart Show
btnCart.addEventListener('click', () =>{
    boxModalCart.classList.add('show__modal__cart');
    modalCart.classList.add('show__modal__cart');
});

// Modal Cart Hidden 
btnCartClose.addEventListener('click', () =>{
    boxModalCart.classList.remove('show__modal__cart');
    modalCart.classList.remove('show__modal__cart');
});

const clickModalCart = function(e){
    if (!modalCart.contains(e.target) && !btnCart.contains(e.target)) {
        boxModalCart.classList.remove('show__modal__cart');
        modalCart.classList.remove('show__modal__cart');
    }
}
window.addEventListener('click', clickModalCart);

// ================== ACTIVE PRODUCT ====================

const btnProduct = document.querySelectorAll('.product__button');

btnProduct.forEach(button => {
    button.addEventListener('click', function(e) {
        e.preventDefault(); // Prevent the default anchor click behavior
        btnProduct.forEach(btn => btn.classList.remove('active__product'));
        this.classList.add('active__product');
    });
});

// =================== SLIDER PRODUCT =====================
const btnPdLeft = document.getElementById('btn-pd-left');
const btnPdRight = document.getElementById('btn-pd-right');
const sliders = document.querySelector('.sliders');
const boxSliders = document.querySelector('.box__sliders');
const sliderImages = document.querySelectorAll('.slider__image');
let count = 0; // Biến đếm để theo dõi vị trí hiện tại của slider

// Số lượng ảnh hiển thị trong một lần
const imagesToShow = 4;

// Số lượng hình ảnh có thể cuộn qua lại
const maxCount = sliderImages.length - imagesToShow;

btnPdLeft.addEventListener('click', () => {
    count--;
    if (count < 0) {
        count = maxCount; // Quay về ảnh cuối cùng nếu đang ở đầu tiên
    }
    updateSlider();
});

btnPdRight.addEventListener('click', () => {
    count++;
    if (count > maxCount) {
        count = 0; // Quay về ảnh đầu tiên nếu đang ở cuối cùng
    }
    updateSlider();
});

// Hàm cập nhật vị trí của slider
function updateSlider() {
    const offset = count * -sliders.offsetWidth/ imagesToShow; // Tính toán vị trí di chuyển dựa trên chiều rộng của một hình ảnh
    boxSliders.style.transform = `translateX(${offset}px)`;
}


// ======================= QUICK VIEW ======================
document.addEventListener('DOMContentLoaded', function() {
    const btnQuick = document.querySelectorAll('.quick__button a');
    const btnCloseQuick = document.getElementById('btn-close');
    const viewModalQuick = document.getElementById('exampleModalToggle');
    const viewModalContent = document.getElementById('modal-content')

    btnQuick.forEach(button => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            viewModalQuick.classList.add('show__quick');
        });
    });

    btnCloseQuick.addEventListener('click', () => {
        viewModalQuick.classList.remove('show__quick');
    });

    const clickModalQuick = function(e) {
        if (!viewModalContent.contains(e.target) && !e.target.closest('.quick__button a')) {
            viewModalQuick.classList.remove('show__quick');
        }
    }
    window.addEventListener('click', clickModalQuick);
});

// ==================== SCROLL UP =================

window.addEventListener('scroll', () => {
    const btnScrollUp = document.getElementById('scroll-up');
    btnScrollUp.classList.toggle('show__scrollUp', window.scrollY > 120);
});

