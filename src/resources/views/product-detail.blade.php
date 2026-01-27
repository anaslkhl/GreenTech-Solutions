<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }} - GreenTech Solutions</title>
    <link rel="stylesheet" href="{{ asset('css/product-detail.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navigation (Same as catalog) -->
    <nav class="navbar">
        <div class="container">
            <div class="nav-brand">
                <i class="fas fa-leaf"></i>
                <span>GreenTech Solutions</span>
            </div>
            <div class="nav-links">
                <a href="{{ route('catalog.index') }}" class="nav-link">Catalogue</a>
                <a href="#" class="nav-link">À propos</a>
                <a href="#" class="nav-link">Contact</a>
            </div>
            <div class="nav-actions">
                <form action="{{ route('catalog.search') }}" method="GET" class="search-container">
                    <i class="fas fa-search"></i>
                    <input type="text" name="query" placeholder="Rechercher un produit..." class="search-input">
                </form>
                <a href="{{ route('admin.dashboard') }}" class="btn-admin">
                    <i class="fas fa-user-shield"></i>
                    Admin
                </a>
            </div>
        </div>
    </nav>

    <!-- Breadcrumb -->
    <div class="breadcrumb">
        <div class="container">
            <a href="{{ route('catalog.index') }}"><i class="fas fa-home"></i> Accueil</a>
            <i class="fas fa-chevron-right"></i>
            <a href="{{ route('catalog.index', ['category' => $product->category_id]) }}">{{ $product->category->name }}</a>
            <i class="fas fa-chevron-right"></i>
            <span>{{ $product->name }}</span>
        </div>
    </div>

    <!-- Product Detail Section -->
    <section class="product-detail">
        <div class="container">
            <div class="product-layout">
                <!-- Product Image -->
                <div class="product-image-section">
                    <div class="main-image">
                        <img src="{{ $product->image_url ?? 'https://via.placeholder.com/600x600?text=Produit' }}"
                            alt="{{ $product->name }}"
                            id="mainImage">
                    </div>
                    <div class="image-gallery">
                        <img src="{{ $product->image_url ?? 'https://via.placeholder.com/150?text=1' }}"
                            alt="Image 1"
                            class="thumbnail active"
                            onclick="changeImage(this)">
                        <img src="{{ $product->image_url ?? 'https://via.placeholder.com/150?text=2' }}"
                            alt="Image 2"
                            class="thumbnail"
                            onclick="changeImage(this)">
                        <img src="{{ $product->image_url ?? 'https://via.placeholder.com/150?text=3' }}"
                            alt="Image 3"
                            class="thumbnail"
                            onclick="changeImage(this)">
                    </div>
                </div>

                <!-- Product Info -->
                <div class="product-info-section">
                    <div class="product-category-badge">
                        <i class="fas fa-tag"></i>
                        {{ $product->category->name }}
                    </div>

                    <h1 class="product-title">{{ $product->name }}</h1>

                    <div class="product-rating">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="rating-count">(4.5/5 - 24 avis)</span>
                    </div>

                    <div class="product-price-section">
                        <span class="current-price">{{ number_format($product->price, 2) }}€</span>
                        <span class="price-info">TTC - Livraison gratuite dès 50€</span>
                    </div>

                    <div class="stock-indicator">
                        @if($product->stock > 10)
                        <i class="fas fa-check-circle" style="color: #28a745;"></i>
                        <span class="stock-text in-stock">En stock ({{ $product->stock }} unités disponibles)</span>
                        @elseif($product->stock > 0)
                        <i class="fas fa-exclamation-circle" style="color: #ffc107;"></i>
                        <span class="stock-text low-stock">Stock limité ({{ $product->stock }} unités restantes)</span>
                        @else
                        <i class="fas fa-times-circle" style="color: #dc3545;"></i>
                        <span class="stock-text out-of-stock">Rupture de stock</span>
                        @endif
                    </div>

                    <div class="product-description">
                        <h3><i class="fas fa-info-circle"></i> Description</h3>
                        <p>{{ $product->description }}</p>
                    </div>

                    <div class="product-features">
                        <h3><i class="fas fa-check-double"></i> Caractéristiques</h3>
                        <ul>
                            <li><i class="fas fa-leaf"></i> Produit écologique et durable</li>
                            <li><i class="fas fa-shield-alt"></i> Garantie satisfait ou remboursé</li>
                            <li><i class="fas fa-truck"></i> Livraison rapide sous 48h</li>
                            <li><i class="fas fa-recycle"></i> Emballage recyclable</li>
                        </ul>
                    </div>

                    <div class="product-actions">
                        <div class="quantity-selector">
                            <button class="qty-btn" onclick="decreaseQty()">
                                <i class="fas fa-minus"></i>
                            </button>
                            <input type="number" id="quantity" value="1" min="1" max="{{ $product->stock }}" readonly>
                            <button class="qty-btn" onclick="increaseQty()">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>

                        @if($product->stock > 0)
                        <button class="btn-add-cart">
                            <i class="fas fa-shopping-cart"></i>
                            Ajouter au panier
                        </button>
                        @else
                        <button class="btn-add-cart" disabled>
                            <i class="fas fa-times"></i>
                            Indisponible
                        </button>
                        @endif

                        <button class="btn-wishlist">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>

                    <div class="product-meta">
                        <div class="meta-item">
                            <strong>SKU:</strong> <span>PRD-{{ str_pad($product->id, 5, '0', STR_PAD_LEFT) }}</span>
                        </div>
                        <div class="meta-item">
                            <strong>Catégorie:</strong> <a href="{{ route('catalog.index', ['category' => $product->category_id]) }}">{{ $product->category->name }}</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Info Tabs -->
            <div class="product-tabs">
                <div class="tab-buttons">
                    <button class="tab-btn active" onclick="openTab(event, 'details')">
                        <i class="fas fa-info-circle"></i> Détails
                    </button>
                    <button class="tab-btn" onclick="openTab(event, 'care')">
                        <i class="fas fa-heart"></i> Entretien
                    </button>
                    <button class="tab-btn" onclick="openTab(event, 'reviews')">
                        <i class="fas fa-star"></i> Avis (24)
                    </button>
                </div>

                <div id="details" class="tab-content active">
                    <h3>Informations détaillées</h3>
                    <p>{{ $product->description }}</p>
                    <p>Ce produit fait partie de notre engagement pour un jardinage durable et respectueux de l'environnement. Chaque article est soigneusement sélectionné pour sa qualité et son impact écologique minimal.</p>
                </div>

                <div id="care" class="tab-content">
                    <h3>Conseils d'entretien</h3>
                    <ul>
                        <li>Conservez dans un endroit sec et frais</li>
                        <li>Évitez l'exposition directe au soleil</li>
                        <li>Suivez les instructions d'utilisation fournies</li>
                        <li>En cas de doute, contactez notre service client</li>
                    </ul>
                </div>

                <div id="reviews" class="tab-content">
                    <h3>Avis clients</h3>
                    <div class="review-item">
                        <div class="review-header">
                            <div class="review-author">
                                <i class="fas fa-user-circle"></i>
                                <strong>Marie D.</strong>
                            </div>
                            <div class="review-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <p class="review-text">Excellent produit ! Conforme à mes attentes et livraison rapide.</p>
                        <span class="review-date">Il y a 2 jours</span>
                    </div>

                    <div class="review-item">
                        <div class="review-header">
                            <div class="review-author">
                                <i class="fas fa-user-circle"></i>
                                <strong>Pierre L.</strong>
                            </div>
                            <div class="review-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                        <p class="review-text">Très bon rapport qualité-prix. Je recommande !</p>
                        <span class="review-date">Il y a 1 semaine</span>
                    </div>
                </div>
            </div>

            <!-- Related Products -->
            <div class="related-products">
                <h2><i class="fas fa-th"></i> Produits similaires</h2>
                <div class="related-grid">
                    <!-- You can loop through related products here -->
                    <div class="related-card">
                        <img src="https://images.unsplash.com/photo-1459411552884-841db9b3cc2a?w=300" alt="Produit">
                        <h4>Autre Plante</h4>
                        <span class="related-price">24.99€</span>
                        <a href="#" class="btn-related">Voir</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer (Same as catalog) -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h4><i class="fas fa-leaf"></i> GreenTech Solutions</h4>
                    <p>Votre partenaire pour un jardinage durable et écologique</p>
                </div>
                <div class="footer-section">
                    <h4>Navigation</h4>
                    <ul>
                        <li><a href="{{ route('catalog.index') }}">Catalogue</a></li>
                        <li><a href="#">À propos</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Contact</h4>
                    <ul>
                        <li><i class="fas fa-envelope"></i> contact@greentech.com</li>
                        <li><i class="fas fa-phone"></i> +33 1 23 45 67 89</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 GreenTech Solutions. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script>
        // Change main image
        function changeImage(thumbnail) {
            document.getElementById('mainImage').src = thumbnail.src;
            document.querySelectorAll('.thumbnail').forEach(t => t.classList.remove('active'));
            thumbnail.classList.add('active');
        }

        // Quantity controls
        function increaseQty() {
            const input = document.getElementById('quantity');
            const max = parseInt(input.max);
            if (parseInt(input.value) < max) {
                input.value = parseInt(input.value) + 1;
            }
        }

        function decreaseQty() {
            const input = document.getElementById('quantity');
            if (parseInt(input.value) > 1) {
                input.value = parseInt(input.value) - 1;
            }
        }

        // Tabs
        function openTab(evt, tabName) {
            const tabContents = document.getElementsByClassName('tab-content');
            for (let i = 0; i < tabContents.length; i++) {
                tabContents[i].classList.remove('active');
            }

            const tabBtns = document.getElementsByClassName('tab-btn');
            for (let i = 0; i < tabBtns.length; i++) {
                tabBtns[i].classList.remove('active');
            }

            document.getElementById(tabName).classList.add('active');
            evt.currentTarget.classList.add('active');
        }

        // Wishlist toggle
        document.querySelector('.btn-wishlist').addEventListener('click', function() {
            const icon = this.querySelector('i');
            icon.classList.toggle('far');
            icon.classList.toggle('fas');
            this.style.color = icon.classList.contains('fas') ? '#FD5523' : '';
        });
    </script>
</body>

</html>