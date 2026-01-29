<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monstera Deliciosa - GreenTech Solutions</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>

<body>

    <!-- Breadcrumb -->
    <div class="breadcrumb">
        <div class="container">
            <a href="#"><i class="fas fa-home"></i> Accueil</a>
            <i class="fas fa-chevron-right"></i>
            <a href="#">Plantes</a>
            <i class="fas fa-chevron-right"></i>
            <span>Monstera Deliciosa</span>
        </div>
    </div>

    <!-- Product Detail Section -->
    <section class="product-detail">
        <div class="container">
            <div class="product-layout">

                <!-- Product Image -->
                <div class="product-image-section">
                    <div class="main-image">
                        <img src="https://via.placeholder.com/600x600?text=Plante" alt="Produit" id="mainImage">
                    </div>
                    <div class="image-gallery">
                        <img src="https://via.placeholder.com/150?text=1" class="thumbnail active" onclick="changeImage(this)">
                        <img src="https://via.placeholder.com/150?text=2" class="thumbnail" onclick="changeImage(this)">
                        <img src="https://via.placeholder.com/150?text=3" class="thumbnail" onclick="changeImage(this)">
                    </div>
                </div>

                <!-- Product Info -->
                <div class="product-info-section">
                    <div class="product-category-badge">
                        <i class="fas fa-tag"></i> Plantes
                    </div>

                    <h1 class="product-title">Monstera Deliciosa</h1>

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
                        <span class="current-price">29.99€</span>
                        <span class="price-info">TTC - Livraison gratuite dès 50€</span>
                    </div>

                    <div class="stock-indicator">
                        <i class="fas fa-check-circle" style="color: #28a745;"></i>
                        <span class="stock-text in-stock">En stock (25 unités disponibles)</span>
                    </div>

                    <div class="product-description">
                        <h3><i class="fas fa-info-circle"></i> Description</h3>
                        <p>Plante tropicale populaire pour son feuillage décoratif et son entretien facile. Idéale pour l’intérieur.</p>
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
                            <button class="qty-btn" onclick="decreaseQty()"><i class="fas fa-minus"></i></button>
                            <input type="number" id="quantity" value="1" min="1" max="25" readonly>
                            <button class="qty-btn" onclick="increaseQty()"><i class="fas fa-plus"></i></button>
                        </div>

                        <button class="btn-add-cart">
                            <i class="fas fa-shopping-cart"></i> Ajouter au panier
                        </button>

                        <button class="btn-wishlist">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>

                    <div class="product-meta">
                        <div class="meta-item"><strong>SKU:</strong> <span>PRD-00001</span></div>
                        <div class="meta-item"><strong>Catégorie:</strong> <a href="#">Plantes</a></div>
                    </div>
                </div>
            </div>

            <!-- Tabs -->
            <div class="product-tabs">
                <div class="tab-buttons">
                    <button class="tab-btn active" onclick="openTab(event, 'details')"><i class="fas fa-info-circle"></i> Détails</button>
                    <button class="tab-btn" onclick="openTab(event, 'care')"><i class="fas fa-heart"></i> Entretien</button>
                    <button class="tab-btn" onclick="openTab(event, 'reviews')"><i class="fas fa-star"></i> Avis (24)</button>
                </div>

                <div id="details" class="tab-content active">
                    <h3>Informations détaillées</h3>
                    <p>Ce produit fait partie de notre engagement pour un jardinage durable et respectueux de l'environnement.</p>
                </div>

                <div id="care" class="tab-content">
                    <h3>Conseils d'entretien</h3>
                    <ul>
                        <li>Conservez dans un endroit sec et frais</li>
                        <li>Évitez l'exposition directe au soleil</li>
                        <li>Suivez les instructions fournies</li>
                    </ul>
                </div>

                <div id="reviews" class="tab-content">
                    <h3>Avis clients</h3>
                    <p><strong>Marie D.</strong> – Excellent produit ! ⭐⭐⭐⭐⭐</p>
                    <p><strong>Pierre L.</strong> – Très bon rapport qualité-prix. ⭐⭐⭐⭐</p>
                </div>
            </div>

            <!-- Related Products -->
            <div class="related-products">
                <h2><i class="fas fa-th"></i> Produits similaires</h2>
                <div class="related-grid">
                    <div class="related-card">
                        <img src="https://via.placeholder.com/300x200?text=Produit" alt="Produit">
                        <h4>Autre Plante</h4>
                        <span class="related-price">24.99€</span>
                        <a href="#" class="btn-related">Voir</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h4><i class="fas fa-leaf"></i> GreenTech Solutions</h4>
                    <p>Votre partenaire pour un jardinage durable et écologique</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 GreenTech Solutions. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script>
        function changeImage(thumbnail) {
            document.getElementById('mainImage').src = thumbnail.src;
            document.querySelectorAll('.thumbnail').forEach(t => t.classList.remove('active'));
            thumbnail.classList.add('active');
        }

        function increaseQty() {
            const input = document.getElementById('quantity');
            const max = parseInt(input.max);
            if (parseInt(input.value) < max) input.value++;
        }

        function decreaseQty() {
            const input = document.getElementById('quantity');
            if (parseInt(input.value) > 1) input.value--;
        }

        function openTab(evt, tabName) {
            document.querySelectorAll('.tab-content').forEach(t => t.classList.remove('active'));
            document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
            document.getElementById(tabName).classList.add('active');
            evt.currentTarget.classList.add('active');
        }

        document.querySelector('.btn-wishlist').addEventListener('click', function () {
            const icon = this.querySelector('i');
            icon.classList.toggle('far');
            icon.classList.toggle('fas');
            this.style.color = icon.classList.contains('fas') ? '#FD5523' : '';
        });
    </script>
</body>

</html>
