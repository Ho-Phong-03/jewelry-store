// ==================== SCROLL MENU ===================
document.addEventListener('DOMContentLoaded', function() {
    const navHeader = document.getElementById('nav-header');
    const fixedClass = 'fixed-header';
    const scrollThreshold = 550;

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
// const navList = document.querySelectorAll('.nav__list .nav__link');

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

const navLinks = document.querySelectorAll('.nav__link');

navLinks.forEach(link => {
    link.addEventListener('click', function() {
        // Xóa class 'active' khỏi tất cả các liên kết
        navLinks.forEach(nav => nav.classList.remove('active'));
        
        // Thêm class 'active' vào liên kết được nhấp
        this.classList.add('active');
    });
});

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

// =================== SLIDER PRODUCT QUICK VIEW =====================
const btnPdLeft = document.getElementById('btn-pd-left');
const btnPdRight = document.getElementById('btn-pd-right');
const sliders = document.querySelector('.product__sliders');
const boxSliders = document.querySelector('.box__sliders');
const sliderImages = document.querySelectorAll('.slider__image');
let count = 0; // Biến đếm để theo dõi vị trí hiện tại của slider
let imagesToShow = 4; // Số lượng ảnh hiển thị mặc định

// Số lượng hình ảnh có thể cuộn qua lại
let maxCount = sliderImages.length - imagesToShow;

// Cập nhật số lượng ảnh hiển thị dựa trên kích thước màn hình
function updateImagesToShow() {
    const screenWidth = window.innerWidth;

    if (screenWidth <= 379) {
        imagesToShow = 2;
    } else if (screenWidth >= 380 && screenWidth <= 768) {
        imagesToShow = 3;
    } else {
        imagesToShow = 4;
    }

    maxCount = sliderImages.length - imagesToShow;
    updateSlider(); // Cập nhật lại vị trí của slider
}

// Lắng nghe sự kiện resize để cập nhật số lượng hình ảnh hiển thị
window.addEventListener('resize', updateImagesToShow);

// Cập nhật số lượng hình ảnh hiển thị khi tải trang
updateImagesToShow();

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
    const offset = count * -sliders.offsetWidth / imagesToShow; // Tính toán vị trí di chuyển dựa trên chiều rộng của một hình ảnh
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

$(document).ready(function () {
    // Khi nút "View Details" được nhấn
    $('.openModal').on('click', function () {
        const productId = $(this).data('id'); // Lấy ID sản phẩm từ nút nhấn
        
        // Gọi AJAX để lấy thông tin sản phẩm
        $.ajax({
            url: `/product-detail/${productId}`, // Đường dẫn lấy dữ liệu
            type: 'GET',
            success: function (data) {
                // Cập nhật dữ liệu vào modal
                $('#modal-product-name').text(data.name);
                $('#modal-product-price').text(`$${data.price}`);
                $('#modal-product-description').text(data.description);
                $('#modal-product-image').attr('src', `/asset/users/images/products/${data.image}`);
                
                // Hiển thị modal
                $('#exampleModalToggle').modal('show');
            },
            error: function () {
                alert('Failed to fetch product details.');
            }
        });
    });
});

// ==================== SCROLL UP =================

window.addEventListener('scroll', () => {
    const btnScrollUp = document.getElementById('scroll-up');
    btnScrollUp.classList.toggle('show__scrollUp', window.scrollY > 120);
});



// ================== ZOOM PRODUCT ================
document.addEventListener('DOMContentLoaded', () => {
    const zoomWrapper = document.querySelector('.zoomWrapper');
    const zoomedImage = document.querySelector('.zoomedImage');
    const img = document.getElementById('zoom1');
    const zoomFactor = 1; // Độ phóng to

    zoomWrapper.addEventListener('mousemove', (event) => {
        const rect = zoomWrapper.getBoundingClientRect();
        const x = event.clientX - rect.left;
        const y = event.clientY - rect.top;

        // Hiển thị zoomedImage và đặt vị trí
        zoomedImage.style.display = 'block';
        zoomedImage.style.backgroundImage = `url(${img.src})`;
        zoomedImage.style.backgroundPosition = `-${x * zoomFactor}px -${y * zoomFactor}px`;
    });

    zoomWrapper.addEventListener('mouseout', () => {
        // Ẩn zoomedImage khi chuột ra ngoài
        zoomedImage.style.display = 'none';
    });
});


// ===================== SLIDERS PRODUCT ===============

document.addEventListener('DOMContentLoaded', function () {
    const btnDetailLeft = document.getElementById('btn-detail-left');
    const btnDetailRight = document.getElementById('btn-detail-right');
    const sliders = document.querySelector('.product__detail__sliders');
    const boxSliders = document.querySelector('.box__detail__sliders');
    const sliderImages = document.querySelectorAll('.slider__detail__image');
    let count = 0; // Biến đếm để theo dõi vị trí hiện tại của slider
    let imagesToShow = 2; // Số lượng ảnh hiển thị mặc định

    // Cập nhật số lượng ảnh hiển thị và tính toán số lượng hình ảnh có thể cuộn qua lại
    function updateImagesToShow() {
        const screenWidth = window.innerWidth;

        if (screenWidth <= 379) {
            imagesToShow = 2;
        } else if (screenWidth >= 380 && screenWidth <= 768) {
            imagesToShow = 2;
        } else if (screenWidth >= 992 && screenWidth <= 1149) {
            imagesToShow = 3;
        } else {
            imagesToShow = 4;
        }

        // Đảm bảo không trượt quá số lượng hình ảnh
        count = Math.min(count, sliderImages.length - imagesToShow);
        updateSlider(); // Cập nhật lại vị trí của slider
    }

    // Lắng nghe sự kiện resize để cập nhật số lượng hình ảnh hiển thị
    window.addEventListener('resize', updateImagesToShow);

    // Cập nhật số lượng hình ảnh hiển thị khi tải trang
    updateImagesToShow();

    btnDetailLeft.addEventListener('click', () => {
        count--;
        if (count < 0) {
            count = sliderImages.length - imagesToShow; // Quay về cuối cùng
        }
        updateSlider();
    });

    btnDetailRight.addEventListener('click', () => {
        count++;
        if (count > sliderImages.length - imagesToShow) {
            count = 0; // Quay về đầu tiên
        }
        updateSlider();
    });

    // Hàm cập nhật vị trí của slider
    function updateSlider() {
        const slideWidth = sliderImages[0].offsetWidth + parseFloat(getComputedStyle(sliderImages[0]).marginRight);
        const offset = count * -slideWidth; // Tính toán vị trí di chuyển dựa trên chiều rộng của một hình ảnh
        boxSliders.style.transform = `translateX(${offset}px)`;
    }
});


// ============== Price Range =============
const rangeInput = document.querySelectorAll('.range__input input');
const priceInput = document.querySelectorAll('.aside__price__input input');
const progress = document.querySelector('.ui__sider__corner__all .ui__sider__pange');
const priceGap = 1000;

priceInput.forEach(input =>{
    input.addEventListener("input", e => {
        let minVal = parseInt(priceInput[0].value);
        let maxVal = parseInt(priceInput[1].value);

        if((maxVal - minVal >= priceGap) && maxVal <= 10000 )
        {
            if(e.target.className === "input__min")
            {   
                rangeInput[0].value = minVal;
                progress.style.left = (minVal / rangeInput[0].max) * 100 + "%";
            }
            else{
                rangeInput[1].value = maxVal;
                progress.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
            }
        }        
    });
});

rangeInput.forEach(input =>{
    input.addEventListener("input", e => {
        let minVal = parseInt(rangeInput[0].value);
        let maxVal = parseInt(rangeInput[1].value);

        if(maxVal - minVal < priceGap )
        {
            if(e.target.className === "range__min")
            {   
                rangeInput[0].value = maxVal - priceGap;
            }
            else{
                rangeInput[1].value = minVal + priceGap;
            }
        }else{
            priceInput[0].value = minVal;
            priceInput[1].value = maxVal;
            progress.style.left = (minVal / rangeInput[0].max) * 100 + "%";
            progress.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";

        }
        
        
    });
});


// =============== FILTER BAR MINI =================
const   openFilter = document.getElementById('open-filters'),
        miniBar = document.getElementById('mini-bars'),
        miniXmark = document.getElementById('mini-xmark'),
        miniSidebarProduct = document.getElementById('sidebar-product');

openFilter.addEventListener('click', () =>{
    if (miniBar.style.display !== 'none') {
        miniBar.style.display = 'none';
        miniXmark.style.display = 'inline';
    } else {
        miniBar.style.display = 'inline';
        miniXmark.style.display = 'none';
    }

    if (openFilter.style.right === '0px' || openFilter.style.right === '') {
        openFilter.style.right = '260px';
    } else {
        openFilter.style.right = '0px';
    }

    if(miniSidebarProduct.style.transform === 'translateX(100%)' || miniSidebarProduct.style.transform === '')
    {
        miniSidebarProduct.style.transform = 'translateX(0)';
    }else{
        miniSidebarProduct.style.transform = 'translateX(100%)';
    }

});

/*=============== SCROLL REVEAL ANIMATION ===============*/
const sr = ScrollReveal({
    origin: 'top',
    distance: '60px',
    duration: 2500,
    delay: 300,
    // reset: true, // Animations repeat
})
// sr.reveal('.carousel-caption')
// sr.reveal('.home__dish', {delay: 500, distance: '100px', origin: 'bottom'})
// sr.reveal('.home__burger', {delay: 1200, distance: '100px', duration: 1500})
// sr.reveal('.home__ingredient', {delay: 1600, interval: 100})
// sr.reveal('.recipe__img, .delivery__img, .contact__image',  {origin: 'left'})
// sr.reveal('.recipe__data, .delivery__data, .contact__data', {origin: 'right'})
// sr.reveal('.popular__card', {interval: 100})
