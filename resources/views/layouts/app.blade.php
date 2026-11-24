
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Discover premium men's fashion, stylish outfits and exclusive offers at FashionHub.">

    <title>FashionHub | Premium Men's Fashion</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <!-- PREMIUM NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark main-navbar sticky-top">

        <div class="container">

            <!-- Logo -->
            <a href="/home" class="navbar-brand">
                FASHION<span>HUB</span>
            </a>

            <!-- Mobile Toggle -->
            <button class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarMenu"
                    aria-controls="navbarMenu"
                    aria-expanded="false"
                    aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">

                <!-- SEARCH BOX -->
                <form class="search-box mx-auto my-3 my-lg-0"
                      action="{{ url('/home') }}"
                      method="GET"
                      role="search">

                    <input
                        type="search"
                        name="q"
                        id="productSearch"
                        class="form-control"
                        placeholder="Search your style..."
                        aria-label="Search products"
                        value="{{ request('q') }}"
                    >

                    <button class="search-btn"
                            type="submit"
                            aria-label="Search">

                        <i class="bi bi-search"></i>

                    </button>

                </form>

                <!-- NAVIGATION LINKS -->
                <ul class="navbar-nav ms-lg-4 align-items-lg-center">

                    <!-- Cart -->
                    <li class="nav-item">
                        <a href="{{ route('cart.index') }}" class="nav-link cart-link">
                            <i class="bi bi-cart3"></i> Cart 
                            <span class="cart-count"> {{ DB::table('cart_items')
                                                      ->where('session_id', session()->getId())
                                                      ->sum('quantity') }}</span>
                        </a>
                    </li>

                    <!-- My Orders -->
                    <li class="nav-item">
                        <a href="{{ route('orders.index') }}" class="nav-link">
                            <i class="bi bi-person"></i> My Order
                        </a>
                    </li>

                    <!-- Login -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="bi bi-person"></i> Login
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>


    <!-- MAIN CONTENT -->
    <main>

        @yield('content')

    </main>


    <!-- PREMIUM FOOTER -->
    <footer class="fashion-footer">

        <div class="container">

            <div class="row g-4">

                <!-- BRAND -->
                <div class="col-lg-4 col-md-6">

                    <a href="/home" class="footer-logo">
                        FASHION<span>HUB</span>
                    </a>

                    <p class="footer-description">
                        Redefine your style with FashionHub.
                        Discover modern men's fashion,
                        everyday essentials and looks made
                        for every occasion.
                    </p>

                    <div class="footer-social">

                        <a href="#" aria-label="Facebook">
                            <i class="bi bi-facebook"></i>
                        </a>

                        <a href="#" aria-label="Instagram">
                            <i class="bi bi-instagram"></i>
                        </a>

                        <a href="#" aria-label="X">
                            <i class="bi bi-twitter-x"></i>
                        </a>

                        <a href="#" aria-label="YouTube">
                            <i class="bi bi-youtube"></i>
                        </a>

                    </div>

                </div>


                <!-- EXPLORE -->
                <div class="col-lg-2 col-md-6">

                    <h5>Explore</h5>

                    <ul class="footer-links">

                        <li>
                            <a href="/home">Home</a>
                        </li>

                        <li>
                            <a href="/home#combo-section">Shop Collection</a>
                        </li>

                        <li>
                            <a href="#">About Us</a>
                        </li>

                        <li>
                            <a href="#">Contact</a>
                        </li>

                    </ul>

                </div>


                <!-- COLLECTIONS -->
                <div class="col-lg-3 col-md-6">

                    <h5>Collections</h5>

                    <ul class="footer-links">

                        <li>
                            <a href="/home#combo-section">Combo Offers</a>
                        </li>

                        <li>
                            <a href="/home#formal-section">Formal Wear</a>
                        </li>

                        <li>
                            <a href="/home#casual-section">Casual Wear</a>
                        </li>

                        <li>
                            <a href="/home#t-shirt-section">T-Shirts</a>
                        </li>

                        <li>
                            <a href="/home#pant-section">Pants</a>
                        </li>

                    </ul>

                </div>


                <!-- CONTACT -->
                <div class="col-lg-3 col-md-6">

                    <h5>Get In Touch</h5>

                    <ul class="footer-contact">

                        <li>
                            <i class="bi bi-geo-alt"></i>
                            <span>Coimbatore, Tamil Nadu</span>
                        </li>

                        <li>
                            <i class="bi bi-envelope"></i>
                            <span>fashionhub@gmail.com</span>
                        </li>

                        <li>
                            <i class="bi bi-telephone"></i>
                            <span>+91 98765 43210</span>
                        </li>

                    </ul>

                </div>

            </div>


            <!-- FOOTER DIVIDER -->
            <div class="footer-divider"></div>


            <!-- FOOTER BOTTOM -->
            <div class="footer-bottom">

                <p>© 2026 FashionHub. All Rights Reserved.</p>

                <p>
                    Designed for your everyday style
                    <i class="bi bi-heart-fill"></i>
                </p>

            </div>

        </div>

    </footer>


    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


    <!-- PRODUCT SEARCH SCRIPT -->
<script>
document.addEventListener('DOMContentLoaded', function () {

    const params = new URLSearchParams(window.location.search);
    const searchValue = (params.get('q') || '').trim().toLowerCase();

    if (window.location.pathname !== '/home' || !searchValue) {
        return;
    }

    const cardClasses = [
        '.combo-card',
        '.formal-card',
        '.casual-card',
        '.tshirt-card',
        '.pant-card'
    ];

    const cards = document.querySelectorAll(cardClasses.join(','));

    const sections = [
        '.combo-section',
        '.formal-section',
        '.casual-section',
        '.tshirt-section',
        '.pant-section'
    ];

    let found = 0;

    cards.forEach(function (card) {

        const productText = card.innerText.toLowerCase();

        if (productText.includes(searchValue)) {
            card.style.display = '';
            found++;
        } else {
            card.style.display = 'none';
        }

    });

    sections.forEach(function (selector) {

        const section = document.querySelector(selector);

        if (!section) return;

        const visibleCards = section.querySelectorAll(
            cardClasses.join(',')
        );

        const hasVisibleCard = Array.from(visibleCards).some(function (card) {
            return card.style.display !== 'none';
        });

        section.style.display = hasVisibleCard ? '' : 'none';

    });

    const main = document.querySelector('main');

    const oldMessage = document.getElementById('searchNoResults');

    if (oldMessage) oldMessage.remove();

    if (found === 0) {

        const message = document.createElement('div');

        message.id = 'searchNoResults';
        message.className = 'container text-center py-5';

        message.innerHTML = `
            <i class="bi bi-search" style="font-size:50px;"></i>
            <h3 class="mt-3">No Products Found!</h3>
            <p class="text-muted">Try another product name.</p>
            <a href="/home" class="btn btn-dark">View All Products</a>
        `;

        main.appendChild(message);
    }

});
</script>

</body>
</html>
