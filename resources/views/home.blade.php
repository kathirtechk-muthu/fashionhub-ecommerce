
@extends('layouts.app')

@section('content')

<!-- COMMON ADD TO CART FORM -->
<form id="commonCartForm" action="{{ route('cart.add', 1) }}" method="POST" style="display:none;">
    @csrf
    <input type="hidden" name="product_name" id="cartProductName">
    <input type="hidden" name="price" id="cartProductPrice">
    <input type="hidden" name="image" id="cartProductImage">
</form>

<script>
    function addToCart(name, price, image) {
        document.getElementById('cartProductName').value = name;
        document.getElementById('cartProductPrice').value = price;
        document.getElementById('cartProductImage').value = image;
        document.getElementById('commonCartForm').submit();
    }
</script>

<!-- CATEGORY NAVIGATION -->
<section class="category-nav">
    <div class="container">
        <div class="category-menu">
            <a href="#combo-section"><i class="bi bi-gift-fill"></i> Combo Offers</a>
            <a href="#formal-section"><i class="bi bi-bag-fill"></i> Formal Collection</a>
            <a href="#casual-section"><i class="bi bi-bag-fill"></i> Casual Collection</a>
            <a href="#t-shirt-section"><i class="bi bi-bag-fill"></i> T-Shirt Collection</a>
            <a href="#pant-section"><i class="bi bi-bag-fill"></i> Pant Collection</a>
        </div>
    </div>
</section>

<!-- HERO SLIDER -->
<section class="hero-section">
    <div class="container">
        <div id="heroSlider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">

            <div class="carousel-inner">

                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="hero-content">
                                <span class="sale-text"><i class="bi bi-stars"></i> BIGGEST SALE OF THE SEASON</span>
                                <h1>Shop Smart.<br><span>Live Better.</span></h1>
                                <p>Discover trending products, amazing deals and everyday essentials — all in one place.</p>

                                <div class="hero-buttons">
                                    <a href="#combo-section" class="shop-btn">Shop Now</a>
                                    <a href="#combo-section" class="explore-btn">Explore Categories</a>
                                </div>

                                <div class="hero-features">
                                    <span><i class="bi bi-truck"></i> Fast Delivery</span>
                                    <span><i class="bi bi-shield-check"></i> Secure Shopping</span>
                                    <span><i class="bi bi-arrow-repeat"></i> Easy Return</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="hero-image">
                                <img src="{{ asset('images/combo images.jpg') }}" alt="Combo offers">
                                <div class="discount-badge">
                                    <h2>70%</h2>
                                    <span>OFF</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="hero-content">
                                <span class="sale-text"><i class="bi bi-stars"></i> NEW ARRIVALS</span>
                                <h1>Upgrade Your<br><span>Style Today.</span></h1>
                                <p>Explore the latest men's fashion collection at amazing prices.</p>
                                <a href="#casual-section" class="shop-btn">Explore Now</a>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="hero-image">
                                <img src="{{ asset('images/Men-Premium-T-Shirt.jpg') }}" alt="New arrivals">
                                <div class="discount-badge">
                                    <h2>50%</h2>
                                    <span>OFF</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="hero-content">
                                <span class="sale-text"><i class="bi bi-stars"></i> EXCLUSIVE OFFERS</span>
                                <h1>Best Deals.<br><span>Best Looks.</span></h1>
                                <p>Find your favourite outfits with exclusive combo offers.</p>
                                <a href="#combo-section" class="shop-btn">Grab Offers</a>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="hero-image">
                                <img src="{{ asset('images/formal images.jpg') }}" alt="Exclusive fashion offers">
                                <div class="discount-badge">
                                    <h2>40%</h2>
                                    <span>OFF</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="0" class="active" aria-current="true"></button>
                <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="2"></button>
            </div>

        </div>
    </div>
</section>


<!-- COMBO OFFERS -->
<section class="combo-section" id="combo-section">
    <div class="container">

        <div class="section-heading">
            <span class="section-subtitle">SPECIAL OFFERS</span>
            <h2>Combo Offers</h2>
            <p>Get More Style With Amazing Combo Deals</p>
        </div>

        <div class="row g-4">

            <!-- Combo 1 -->
            <div class="col-lg-3 col-md-6">
                <div class="combo-card">
                    <div class="combo-image">
                        <span class="offer-badge">30% OFF</span>
                        <img src="{{ asset('images/linen shirt and pant.jpg') }}" alt="Shirt and Pant Combo">
                    </div>
                    <div class="combo-content">
                        <span class="product-category">MEN'S COMBO</span>
                        <h5>Shirt + Pant Combo</h5>
                        <div class="product-price"><span class="new-price">₹1049</span> <del>₹1499</del></div>
                        <button type="button" class="add-cart-btn" onclick="addToCart('Shirt + Pant Combo',1049,'images/linen shirt and pant.jpg')"><i class="bi bi-cart-plus"></i> Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Combo 2 -->
            <div class="col-lg-3 col-md-6">
                <div class="combo-card">
                    <div class="combo-image">
                        <span class="offer-badge">25% OFF</span>
                        <img src="{{ asset('images/combo t-shirt images.jpg') }}" alt="T-Shirt Combo">
                    </div>
                    <div class="combo-content">
                        <span class="product-category">MEN'S COMBO</span>
                        <h5>T-Shirt Combo</h5>
                        <div class="product-price"><span class="new-price">₹1199</span> <del>₹1599</del></div>
                <button type="button" class="add-cart-btn" onclick="addToCart('T-Shirt Combo',1199,'images/combo t-shirt images.jpg')"><i class="bi bi-cart-plus"></i> Add to Cart</button>
            </div>
                </div>
            </div>

            <!-- Combo 3 -->
            <div class="col-lg-3 col-md-6">
                <div class="combo-card">
                    <div class="combo-image">
                        <span class="offer-badge">35% OFF</span>
                        <img src="{{ asset('images/combo formal.webp') }}" alt="Formal Wear Combo">
                    </div>
                    <div class="combo-content">
                        <span class="product-category">FORMAL COMBO</span>
                        <h5>Formal Wear Combo</h5>
                        <div class="product-price"><span class="new-price">₹1299</span> <del>₹1999</del></div>
                <button type="button" class="add-cart-btn" onclick="addToCart('Formal Wear Combo',1299,'images/combo formal.webp')"><i class="bi bi-cart-plus"></i> Add to Cart</button>
            </div>
                </div>
            </div>

            <!-- Combo 4 -->
            <div class="col-lg-3 col-md-6">
                <div class="combo-card">
                    <div class="combo-image">
                        <span class="offer-badge">20% OFF</span>
                        <img src="{{ asset('images/calualimages.jpg') }}" alt="Casual Wear Combo">
                    </div>
                    <div class="combo-content">
                        <span class="product-category">CASUAL COMBO</span>
                        <h5>Casual Wear Combo</h5>
                        <div class="product-price"><span class="new-price">₹2499</span> <del>₹3199</del></div>
                <button type="button" class="add-cart-btn" onclick="addToCart('Casual Wear Combo',2499,'images/calualimages.jpg')"><i class="bi bi-cart-plus"></i> Add to Cart</button>
            </div>
                </div>
            </div>

            <!-- Combo 5 -->
            <div class="col-lg-3 col-md-6">
                <div class="combo-card">
                    <div class="combo-image">
                        <span class="offer-badge">30% OFF</span>
                        <img src="{{ asset('images/combo Light-Grey-Wine.webp') }}" alt="Light Gray and Wine Combo">
                    </div>
                    <div class="combo-content">
                <span class="product-category">MEN'S COMBO</span>
                <h5>Light Gray and Wine Combo</h5>
                <div class="product-price"><span class="new-price">₹1099</span> <del>₹1599</del></div>
                <button type="button" class="add-cart-btn" onclick="addToCart('Light Gray and Wine Combo',1099,'images/combo Light-Grey-Wine.webp')"><i class="bi bi-cart-plus"></i> Add to Cart</button>
            </div>
                </div>
            </div>

            <!-- Combo 6 -->
            <div class="col-lg-3 col-md-6">
                <div class="combo-card">
                    <div class="combo-image">
                        <span class="offer-badge">35% OFF</span>
                        <img src="{{ asset('images/mens combo t-shirt.webp') }}" alt="Mens Combo T-Shirts">
                    </div>
                    <div class="combo-content">
                <span class="product-category">MEN'S COMBO T-SHIRTS</span>
                <h5>Mens Combo T-Shirts</h5>
                <div class="product-price"><span class="new-price">₹1149</span> <del>₹1799</del></div>
                <button type="button" class="add-cart-btn" onclick="addToCart('Mens Combo T-Shirts',1149,'images/mens combo t-shirt.webp')"><i class="bi bi-cart-plus"></i> Add to Cart</button>
            </div>
                </div>
            </div>

            <!-- Combo 7 -->
            <div class="col-lg-3 col-md-6">
                <div class="combo-card">
                    <div class="combo-image">
                        <span class="offer-badge">30% OFF</span>
                        <img src="{{ asset('images/combo sky-maroon.webp') }}" alt="Sky and Maroon Combo">
                    </div>
                    <div class="combo-content">
                <span class="product-category">MEN'S SHIRT COMBO</span>
                <h5>Sky and Maroon Combo</h5>
                <div class="product-price"><span class="new-price">₹1099</span> <del>₹1599</del></div>
                <button type="button" class="add-cart-btn" onclick="addToCart('Sky and Maroon Combo',1099,'images/combo sky-maroon.webp')"><i class="bi bi-cart-plus"></i> Add to Cart</button>
            </div>
                </div>
            </div>

            <!-- Combo 8 -->
            <div class="col-lg-3 col-md-6">
                <div class="combo-card">
                    <div class="combo-image">
                        <span class="offer-badge">30% OFF</span>
                        <img src="{{ asset('images/combo t-shirts.jpg') }}" alt="Round Neck Combo T-Shirt">
                    </div>
                    <div class="combo-content">
                <span class="product-category">MEN'S T-SHIRT COMBO</span>
                <h5>Round Neck Combo T-Shirt</h5>
                <div class="product-price"><span class="new-price">₹1049</span> <del>₹1499</del></div>
                <button type="button" class="add-cart-btn" onclick="addToCart('Round Neck Combo T-Shirt',1049,'images/combo t-shirts.jpg')"><i class="bi bi-cart-plus"></i> Add to Cart</button>
            </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- FORMAL COLLECTION -->
<section class="formal-section" id="formal-section">
    <div class="container">

        <div class="section-heading">
            <span class="section-subtitle">CLASSIC STYLE</span>
            <h2>Formal Collection</h2>
            <p>Upgrade Your Professional Look With Our Formal Wear</p>
        </div>

        <div class="row g-4">

            <!-- Formal 1 -->
            <div class="col-lg-3 col-md-6">
                <div class="formal-card">
                    <div class="formal-image">
                        <span class="offer-badge">20% OFF</span>
                        <img src="{{ asset('images/white shirt.webp') }}" alt="Classic White Shirt">
                    </div>
                    <div class="formal-content">
                <span class="product-category">FORMAL SHIRTS</span>
                <h5>Classic White Shirt</h5>
                <div class="product-price"><span class="new-price">₹799</span> <del>₹999</del></div>
                <button type="button" class="add-cart-btn" onclick="addToCart('Classic White Shirt',799,'images/white shirt.webp')"><i class="bi bi-cart-plus"></i> Add to Cart</button>
            </div>
                </div>
            </div>

            <!-- Formal 2 -->
            <div class="col-lg-3 col-md-6">
                <div class="formal-card">
                    <div class="formal-image">
                        <span class="offer-badge">25% OFF</span>
                        <img src="{{ asset('images/gray shirt.jpg') }}" alt="Plain Formal Shirt">
                    </div>
                    <div class="formal-content">
                <span class="product-category">FORMAL SHIRT</span>
                <h5>Plain Formal Shirt - Gray</h5>
                <div class="product-price"><span class="new-price">₹899</span> <del>₹1199</del></div>
                <button type="button" class="add-cart-btn" onclick="addToCart('Plain Formal Shirt - Gray',899,'images/gray shirt.jpg')"><i class="bi bi-cart-plus"></i> Add to Cart</button>
            </div>
                </div>
            </div>

            <!-- Formal 3 -->
            <div class="col-lg-3 col-md-6">
                <div class="formal-card">
                    <div class="formal-image">
                        <span class="offer-badge">30% OFF</span>
                        <img src="{{ asset('images/sky formal shirt.webp') }}" alt="Premium Office Shirt">
                    </div>
                    <div class="formal-content">
                <span class="product-category">OFFICE WEAR</span>
                <h5>Premium Office Shirt</h5>
                <div class="product-price"><span class="new-price">₹699</span> <del>₹999</del></div>
                <button type="button" class="add-cart-btn" onclick="addToCart('Premium Office Shirt',699,'images/sky formal shirt.webp')"><i class="bi bi-cart-plus"></i> Add to Cart</button>
            </div>
                </div>
            </div>

            <!-- Formal 4 -->
            <div class="col-lg-3 col-md-6">
                <div class="formal-card">
                    <div class="formal-image">
                        <span class="offer-badge">35% OFF</span>
                        <img src="{{ asset('images/Formal White_Shirt.webp') }}" alt="Premium Formal Shirt">
                    </div>
                    <div class="formal-content">
                <span class="product-category">SHIRT</span>
                <h5>Premium Formal Shirt</h5>
                <div class="product-price"><span class="new-price">₹1999</span> <del>₹2999</del></div>
                <button type="button" class="add-cart-btn" onclick="addToCart('Premium Formal Shirt',1999,'images/Formal White_Shirt.webp')"><i class="bi bi-cart-plus"></i> Add to Cart</button>
            </div>
                </div>
            </div>

            <!-- Formal 5 -->
            <div class="col-lg-3 col-md-6">
                <div class="formal-card">
                    <div class="formal-image">
                        <span class="offer-badge">25% OFF</span>
                        <img src="{{ asset('images/formal shirt pink.webp') }}" alt="Formal Pink Shirt">
                    </div>
                    <div class="formal-content">
                <span class="product-category">FORMAL PINK SHIRT</span>
                <h5>Pink Formal Shirt</h5>
                <div class="product-price"><span class="new-price">₹799</span> <del>₹1199</del></div>
                <button type="button" class="add-cart-btn" onclick="addToCart('Pink Formal Shirt',799,'images/formal shirt pink.webp')"><i class="bi bi-cart-plus"></i> Add to Cart</button>
            </div>
                </div>
            </div>

            <!-- Formal 6 -->
            <div class="col-lg-3 col-md-6">
                <div class="formal-card">
                    <div class="formal-image">
                        <span class="offer-badge">25% OFF</span>
                        <img src="{{ asset('images/formal shirts.jpg') }}" alt="Formal Shirt">
                    </div>
                    <div class="formal-content">
                <span class="product-category">FORMAL SHIRT</span>
                <h5>Classic Formal Shirt</h5>
                <div class="product-price"><span class="new-price">₹899</span> <del>₹1199</del></div>
                <button type="button" class="add-cart-btn" onclick="addToCart('Classic Formal Shirt',899,'images/formal shirts.jpg')"><i class="bi bi-cart-plus"></i> Add to Cart</button>
            </div>
                </div>
            </div>

            <!-- Formal 7 -->
            <div class="col-lg-3 col-md-6">
                <div class="formal-card">
                    <div class="formal-image">
                        <span class="offer-badge">25% OFF</span>
                        <img src="{{ asset('images/formal shirt.webp') }}" alt="Formal Shirt">
                    </div>
                    <div class="formal-content">
                <span class="product-category">FORMAL SHIRT</span>
                <h5>Formal Shirt - Blue</h5>
                <div class="product-price"><span class="new-price">₹899</span> <del>₹1199</del></div>
                <button type="button" class="add-cart-btn" onclick="addToCart('Formal Shirt - Blue',899,'images/formal shirt.webp')"><i class="bi bi-cart-plus"></i> Add to Cart</button>
            </div>
                </div>
            </div>

            <!-- Formal 8 -->
            <div class="col-lg-3 col-md-6">
                <div class="formal-card">
                    <div class="formal-image">
                        <span class="offer-badge">25% OFF</span>
                        <img src="{{ asset('images/formal black shirt.webp') }}" alt="Premium Black Shirt">
                    </div>
                    <div class="formal-content">
                <span class="product-category">FORMAL SHIRT</span>
                <h5>Premium Black Shirt</h5>
                <div class="product-price"><span class="new-price">₹1199</span> <del>₹1999</del></div>
                <button type="button" class="add-cart-btn" onclick="addToCart('Premium Black Shirt',1199,'images/formal black shirt.webp')"><i class="bi bi-cart-plus"></i> Add to Cart</button>
            </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- CASUAL COLLECTION -->
<section class="casual-section" id="casual-section">
    <div class="container">

        <div class="section-heading">
            <span class="section-subtitle">EVERYDAY FASHION</span>
            <h2>Casual Collection</h2>
            <p>Discover Comfortable And Stylish Everyday Outfits</p>
        </div>

        <div class="row g-4">

            <!-- Casual 1 -->
            <div class="col-lg-3 col-md-6">
                <div class="casual-card">
                    <div class="casual-image">
                        <span class="offer-badge">25% OFF</span>
                        <img src="{{ asset('images/casual image.webp') }}" alt="Premium Casual Shirt">
                    </div>
                    <div class="casual-content">
                <span class="product-category">CASUAL SHIRTS</span>
                <h5>Premium Casual Shirt</h5>
                <div class="product-price"><span class="new-price">₹749</span> <del>₹999</del></div>
                <button type="button" class="add-cart-btn" onclick="addToCart('Premium Casual Shirt',749,'images/casual image.webp')"><i class="bi bi-cart-plus"></i> Add to Cart</button>
            </div>
                </div>
            </div>

            <!-- Casual 2 -->
            <div class="col-lg-3 col-md-6">
                <div class="casual-card">
                    <div class="casual-image">
                        <span class="offer-badge">30% OFF</span>
                        <img src="{{ asset('images/casual images.jpg') }}" alt="Casual Shirt">
                    </div>
                    <div class="casual-content">
                <span class="product-category">SHIRT</span>
                <h5>Casual Shirt</h5>
                <div class="product-price"><span class="new-price">₹999</span> <del>₹1499</del></div>
                <button type="button" class="add-cart-btn" onclick="addToCart('Casual Shirt - 1',999,'images/casual images.jpg')"><i class="bi bi-cart-plus"></i> Add to Cart</button>
            </div>
                </div>
            </div>

            <!-- Casual 3 -->
            <div class="col-lg-3 col-md-6">
                <div class="casual-card">
                    <div class="casual-image">
                        <span class="offer-badge">20% OFF</span>
                        <img src="{{ asset('images/casual men shirt.png') }}" alt="Regular Shirt">
                    </div>
                    <div class="casual-content">
                <span class="product-category">CASUAL SHIRT</span>
                <h5>Regular Shirt</h5>
                <div class="product-price"><span class="new-price">₹799</span> <del>₹999</del></div>
                <button type="button" class="add-cart-btn" onclick="addToCart('Regular Shirt',799,'images/casual men shirt.png')"><i class="bi bi-cart-plus"></i> Add to Cart</button>
            </div>
                </div>
            </div>

            <!-- Casual 4 -->
            <div class="col-lg-3 col-md-6">
                <div class="casual-card">
                    <div class="casual-image">
                        <span class="offer-badge">35% OFF</span>
                        <img src="{{ asset('images/casual shirt images.jpg') }}" alt="Trendy Casual Outfit">
                    </div>
                    <div class="casual-content">
                <span class="product-category">CASUAL OUTFIT</span>
                <h5>Trendy Casual Outfit</h5>
                <div class="product-price"><span class="new-price">₹1299</span> <del>₹1999</del></div>
                <button type="button" class="add-cart-btn" onclick="addToCart('Trendy Casual Outfit',1299,'images/casual shirt images.jpg')"><i class="bi bi-cart-plus"></i> Add to Cart</button>
            </div>
                </div>
            </div>

            <!-- Casual 5 -->
            <div class="col-lg-3 col-md-6">
                <div class="casual-card">
                    <div class="casual-image">
                        <span class="offer-badge">30% OFF</span>
                        <img src="{{ asset('images/casual shirt.webp') }}" alt="Premium Casual Shirt">
                    </div>
                    <div class="casual-content">
                <span class="product-category">SHIRT</span>
                <h5>Premium Casual Shirt - 2</h5>
                <div class="product-price"><span class="new-price">₹1199</span> <del>₹1999</del></div>
                <button type="button" class="add-cart-btn" onclick="addToCart('Premium Casual Shirt - 2',1199,'images/casual shirt.webp')"><i class="bi bi-cart-plus"></i> Add to Cart</button>
            </div>
                </div>
            </div>

            <!-- Casual 6 -->
            <div class="col-lg-3 col-md-6">
                <div class="casual-card">
                    <div class="casual-image">
                        <span class="offer-badge">30% OFF</span>
                        <img src="{{ asset('images/casual strip 2.webp') }}" alt="Casual Shirt">
                    </div>
            <div class="casual-content">
                <span class="product-category">SHIRT</span>
                <h5>Casual Shirt - 2</h5>
                <div class="product-price"><span class="new-price">₹999</span> <del>₹1499</del></div>
                <button type="button" class="add-cart-btn" onclick="addToCart('Casual Shirt - 2',999,'images/casual strip 2.webp')"><i class="bi bi-cart-plus"></i> Add to Cart</button>
            </div>
                </div>
            </div>

            <!-- Casual 7 -->
            <div class="col-lg-3 col-md-6">
                <div class="casual-card">
                    <div class="casual-image">
                        <span class="offer-badge">30% OFF</span>
                        <img src="{{ asset('images/casual strip shirt.webp') }}" alt="Casual Shirt">
                    </div>
            <div class="casual-content">
                <span class="product-category">SHIRT</span>
                <h5>Casual Shirt - 3</h5>
                <div class="product-price"><span class="new-price">₹999</span> <del>₹1499</del></div>
                <button type="button" class="add-cart-btn" onclick="addToCart('Casual Shirt - 3',999,'images/casual strip shirt.webp')"><i class="bi bi-cart-plus"></i> Add to Cart</button>
            </div>
                </div>
            </div>

            <!-- Casual 8 -->
            <div class="col-lg-3 col-md-6">
                <div class="casual-card">
                    <div class="casual-image">
                        <span class="offer-badge">30% OFF</span>
                        <img src="{{ asset('images/casual strip.webp') }}" alt="Casual Shirt">
                    </div>
            <div class="casual-content">
                <span class="product-category">SHIRT</span>
                <h5>Casual Shirt - 4</h5>
                <div class="product-price"><span class="new-price">₹999</span> <del>₹1499</del></div>
                <button type="button" class="add-cart-btn" onclick="addToCart('Casual Shirt - 4',999,'images/casual strip.webp')"><i class="bi bi-cart-plus"></i> Add to Cart</button>
            </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- T-SHIRT COLLECTION -->
<section class="tshirt-section" id="t-shirt-section">
    <div class="container">

        <div class="section-heading">
            <span class="section-subtitle">TRENDING COLLECTION</span>
            <h2>T-Shirt Collection</h2>
            <p>Discover Trendy T-Shirts For Your Everyday Style</p>
        </div>

        <div class="row g-4">

            <!-- T-Shirt 1 -->
            <div class="col-lg-3 col-md-6">
                <div class="tshirt-card">
                    <div class="tshirt-image">
                        <span class="offer-badge">25% OFF</span>
                        <img src="{{ asset('images/t-shirt for men.jpg') }}" alt="Black Oversized T-Shirt">
                    </div>
                    <div class="tshirt-content">
                <span class="product-category">OVERSIZED T-SHIRTS</span>
                <h5>Black Oversized T-Shirt</h5>
                <div class="product-price"><span class="new-price">₹599</span> <del>₹799</del></div>
                <button type="button" class="add-cart-btn" onclick="addToCart('Black Oversized T-Shirt',599,'images/t-shirt for men.jpg')"><i class="bi bi-cart-plus"></i> Add to Cart</button>
            </div>
                </div>
            </div>

            <!-- T-Shirt 2 -->
            <div class="col-lg-3 col-md-6">
                <div class="tshirt-card">
                    <div class="tshirt-image">
                        <span class="offer-badge">20% OFF</span>
                        <img src="{{ asset('images/white t-shirt.jpg') }}" alt="White Cotton T-Shirt">
                    </div>
                    <div class="tshirt-content">
                <span class="product-category">PLAIN T-SHIRTS</span>
                <h5>White Cotton T-Shirt</h5>
                <div class="product-price"><span class="new-price">₹399</span> <del>₹499</del></div>
                <button type="button" class="add-cart-btn" onclick="addToCart('White Cotton T-Shirt',399,'images/white t-shirt.jpg')"><i class="bi bi-cart-plus"></i> Add to Cart</button>
            </div>
                </div>
            </div>

            <!-- T-Shirt 3 -->
            <div class="col-lg-3 col-md-6">
                <div class="tshirt-card">
                    <div class="tshirt-image">
                        <span class="offer-badge">30% OFF</span>
                        <img src="{{ asset('images/graphic t-shirt.jpg') }}" alt="Graphic Printed T-Shirt">
                    </div>
                    <div class="tshirt-content">
                <span class="product-category">PRINTED T-SHIRTS</span>
                <h5>Graphic Printed T-Shirt</h5>
                <div class="product-price"><span class="new-price">₹699</span> <del>₹999</del></div>
                <button type="button" class="add-cart-btn" onclick="addToCart('Graphic Printed T-Shirt',699,'images/graphic t-shirt.jpg')"><i class="bi bi-cart-plus"></i> Add to Cart</button>
            </div>
                </div>
            </div>

            <!-- T-Shirt 4 -->
            <div class="col-lg-3 col-md-6">
                <div class="tshirt-card">
                    <div class="tshirt-image">
                        <span class="offer-badge">35% OFF</span>
                        <img src="{{ asset('images/polo-neck-tshirt.avif') }}" alt="Premium Polo T-Shirt">
                    </div>
                    <div class="tshirt-content">
                <span class="product-category">POLO T-SHIRTS</span>
                <h5>Premium Polo T-Shirt</h5>
                <div class="product-price"><span class="new-price">₹799</span> <del>₹1199</del></div>
                <button type="button" class="add-cart-btn" onclick="addToCart('Premium Polo T-Shirt',799,'images/polo-neck-tshirt.avif')"><i class="bi bi-cart-plus"></i> Add to Cart</button>
            </div>
                </div>
            </div>

            <!-- T-Shirt 5 -->
            <div class="col-lg-3 col-md-6">
                <div class="tshirt-card">
                    <div class="tshirt-image">
                        <span class="offer-badge">50% OFF</span>
                        <img src="{{ asset('images/t-shirt images.jpg') }}" alt="Blue T-Shirt">
                    </div>
            <div class="tshirt-content">
                <span class="product-category">OVERSIZED T-SHIRTS</span>
                <h5>Blue T-Shirt</h5>
                <div class="product-price"><span class="new-price">₹299</span> <del>₹599</del></div>
                <button type="button" class="add-cart-btn" onclick="addToCart('Blue T-Shirt',299,'images/t-shirt images.jpg')"><i class="bi bi-cart-plus"></i> Add to Cart</button>
            </div>
                </div>
            </div>

            <!-- T-Shirt 6 -->
            <div class="col-lg-3 col-md-6">
                <div class="tshirt-card">
                    <div class="tshirt-image">
                        <span class="offer-badge">25% OFF</span>
                        <img src="{{ asset('images/t-shirt image.jpg') }}" alt="Round Neck T-Shirt">
                    </div>
            <div class="tshirt-content">
                <span class="product-category">ROUND NECK T-SHIRTS</span>
                <h5>Round Neck T-Shirt</h5>
                <div class="product-price"><span class="new-price">₹599</span> <del>₹799</del></div>
                <button type="button" class="add-cart-btn" onclick="addToCart('Round Neck T-Shirt',599,'images/t-shirt image.jpg')"><i class="bi bi-cart-plus"></i> Add to Cart</button>
            </div>
                </div>
            </div>

            <!-- T-Shirt 7 -->
            <div class="col-lg-3 col-md-6">
                <div class="tshirt-card">
                    <div class="tshirt-image">
                        <span class="offer-badge">25% OFF</span>
                        <img src="{{ asset('images/printed t-shirt.jpg') }}" alt="Black Printed T-Shirt">
                    </div>
            <div class="tshirt-content">
                <span class="product-category">PRINTED T-SHIRTS</span>
                <h5>Black Printed T-Shirt</h5>
                <div class="product-price"><span class="new-price">₹599</span> <del>₹799</del></div>
                <button type="button" class="add-cart-btn" onclick="addToCart('Black Printed T-Shirt',599,'images/printed t-shirt.jpg')"><i class="bi bi-cart-plus"></i> Add to Cart</button>
            </div>
                </div>
            </div>

            <!-- T-Shirt 8 -->
            <div class="col-lg-3 col-md-6">
                <div class="tshirt-card">
                    <div class="tshirt-image">
                        <span class="offer-badge">25% OFF</span>
                        <img src="{{ asset('images/black t-shirt.png') }}" alt="Premium Black T-Shirt">
                    </div>
            <div class="tshirt-content">
                <span class="product-category">BLACK T-SHIRTS</span>
                <h5>Premium Black T-Shirt</h5>
                <div class="product-price"><span class="new-price">₹599</span> <del>₹799</del></div>
                <button type="button" class="add-cart-btn" onclick="addToCart('Premium Black T-Shirt',599,'images/black t-shirt.png')"><i class="bi bi-cart-plus"></i> Add to Cart</button>
            </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- PANT COLLECTION -->
<section class="pant-section" id="pant-section">
    <div class="container">

        <div class="section-heading">
            <span class="section-subtitle">TRENDING BOTTOM WEAR</span>
            <h2>Pant Collection</h2>
            <p>Discover Stylish And Comfortable Pants For Every Occasion</p>
        </div>

        <div class="row g-4">

            <!-- Pant 1 -->
            <div class="col-lg-3 col-md-6">
                <div class="pant-card">
                    <div class="pant-image">
                        <span class="offer-badge">25% OFF</span>
                        <img src="{{ asset('images/jeans pant.jpg') }}" alt="Classic Blue Jeans">
                    </div>
                    <div class="pant-content">
                <span class="product-category">DENIM JEANS</span>
                <h5>Classic Blue Jeans</h5>
                <div class="product-price"><span class="new-price">₹999</span> <del>₹1499</del></div>
                <button type="button" class="add-cart-btn" onclick="addToCart('Classic Blue Jeans',999,'images/jeans pant.jpg')"><i class="bi bi-cart-plus"></i> Add to Cart</button>
            </div>
                </div>
            </div>

            <!-- Pant 2 -->
            <div class="col-lg-3 col-md-6">
                <div class="pant-card">
                    <div class="pant-image">
                        <span class="offer-badge">20% OFF</span>
                        <img src="{{ asset('images/formal pant.jpg') }}" alt="Classic Black Formal Pant">
                    </div>
                    <div class="pant-content">
                <span class="product-category">FORMAL PANTS</span>
                <h5>Classic Black Formal Pant</h5>
                <div class="product-price"><span class="new-price">₹899</span> <del>₹1199</del></div>
                <button type="button" class="add-cart-btn" onclick="addToCart('Classic Black Formal Pant',899,'images/formal pant.jpg')"><i class="bi bi-cart-plus"></i> Add to Cart</button>
            </div>
                </div>
            </div>

            <!-- Pant 3 -->
            <div class="col-lg-3 col-md-6">
                <div class="pant-card">
                    <div class="pant-image">
                        <span class="offer-badge">30% OFF</span>
                        <img src="{{ asset('images/black pant.jpg') }}" alt="Trendy Cargo Pant">
                    </div>
                    <div class="pant-content">
                <span class="product-category">CARGO PANTS</span>
                <h5>Trendy Cargo Pant</h5>
                <div class="product-price"><span class="new-price">₹1099</span> <del>₹1599</del></div>
                <button type="button" class="add-cart-btn" onclick="addToCart('Trendy Cargo Pant',1099,'images/black pant.jpg')"><i class="bi bi-cart-plus"></i> Add to Cart</button>
            </div>
                </div>
            </div>

            <!-- Pant 4 -->
            <div class="col-lg-3 col-md-6">
                <div class="pant-card">
                    <div class="pant-image">
                        <span class="offer-badge">25% OFF</span>
                        <img src="{{ asset('images/mens pant.jpg') }}" alt="Premium Cream Pant">
                    </div>
                    <div class="pant-content">
                <span class="product-category">CASUAL PANTS</span>
                <h5>Premium Cream Pant</h5>
                <div class="product-price"><span class="new-price">₹799</span> <del>₹1099</del></div>
                <button type="button" class="add-cart-btn" onclick="addToCart('Premium Cream Pant',799,'images/mens pant.jpg')"><i class="bi bi-cart-plus"></i> Add to Cart</button>
            </div>
                </div>
            </div>

            <!-- Pant 5 -->
            <div class="col-lg-3 col-md-6">
                <div class="pant-card">
                    <div class="pant-image">
                        <span class="offer-badge">25% OFF</span>
                        <img src="{{ asset('images/linen white pant.webp') }}" alt="White Linen Pant">
                    </div>
                    <div class="pant-content">
                <span class="product-category">LINEN PANTS</span>
                <h5>White Linen Pant</h5>
                <div class="product-price"><span class="new-price">₹999</span> <del>₹1499</del></div>
                <button type="button" class="add-cart-btn" onclick="addToCart('White Linen Pant',999,'images/linen white pant.webp')"><i class="bi bi-cart-plus"></i> Add to Cart</button>
            </div>
                </div>
            </div>

            <!-- Pant 6 -->
            <div class="col-lg-3 col-md-6">
                <div class="pant-card">
                    <div class="pant-image">
                        <span class="offer-badge">25% OFF</span>
                        <img src="{{ asset('images/polo fit pant.webp') }}" alt="Polo Fit Pant">
                    </div>
                    <div class="pant-content">
                <span class="product-category">POLO FIT PANTS</span>
                <h5>Polo Fit Pant</h5>
                <div class="product-price"><span class="new-price">₹799</span> <del>₹1099</del></div>
                <button type="button" class="add-cart-btn" onclick="addToCart('Polo Fit Pant',799,'images/polo fit pant.webp')"><i class="bi bi-cart-plus"></i> Add to Cart</button>
            </div>
                </div>
            </div>

            <!-- Pant 7 -->
            <div class="col-lg-3 col-md-6">
                <div class="pant-card">
                    <div class="pant-image">
                        <span class="offer-badge">25% OFF</span>
                        <img src="{{ asset('images/mens baggy pant.avif') }}" alt="Baggy Pant">
                    </div>
                    <div class="pant-content">
                <span class="product-category">BAGGY PANTS</span>
                <h5>Baggy Pant</h5>
                <div class="product-price"><span class="new-price">₹799</span> <del>₹1099</del></div>
                <button type="button" class="add-cart-btn" onclick="addToCart('Baggy Pant',799,'images/mens baggy pant.avif')"><i class="bi bi-cart-plus"></i> Add to Cart</button>
            </div>
                </div>
            </div>

            <!-- Pant 8 -->
            <div class="col-lg-3 col-md-6">
                <div class="pant-card">
                    <div class="pant-image">
                        <span class="offer-badge">25% OFF</span>
                        <img src="{{ asset('images/mens-pant.webp') }}" alt="Men Formal Pant">
                    </div>
                    <div class="pant-content">
                <span class="product-category">FORMAL PANTS</span>
                <h5>Men's Formal Pant</h5>
                <div class="product-price"><span class="new-price">₹699</span> <del>₹1199</del></div>
                <button type="button" class="add-cart-btn" onclick="addToCart('Mens Formal Pant',699,'images/mens-pant.webp')"><i class="bi bi-cart-plus"></i> Add to Cart</button>
            </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
