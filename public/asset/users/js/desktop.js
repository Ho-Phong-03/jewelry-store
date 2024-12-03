
document.addEventListener('DOMContentLoaded', function() {
    const searchButton = document.getElementById('header-btn-menu-search');
    const searchModal = document.getElementById('nav-box-modal-search');
    const searchModalClose = document.getElementById('modal-search-close');

    const cartButton = document.getElementById('nav-btn-cart');
    const cartModal = document.getElementById('nav-box-modal-cart');
    const cartModalClose = document.getElementById('modal-cart-close');

    // Open Search Modal
    searchButton.addEventListener('click', function() {
        searchModal.classList.add('show__modal__search');
    });

    // Close Search Modal
    searchModalClose.addEventListener('click', function() {
        searchModal.classList.remove('show__modal__search');
    });

    // Open Cart Modal
    cartButton.addEventListener('click', function() {
        cartModal.classList.add('show__modal__cart');
    });

    // Close Cart Modal
    cartModalClose.addEventListener('click', function() {
        cartModal.classList.remove('show__modal__cart');
    });

    // Close modal when clicking outside of it
    window.addEventListener('click', function(e) {
        if (e.target === searchModal) {
            searchModal.classList.remove('show__modal__search');
        }
        if (e.target === cartModal) {
            cartModal.classList.remove('show__modal__cart');
        }
    });
});
