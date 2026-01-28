<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenTech Solutions - Catalogue</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>

<body>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Cultivez Votre Avenir Vert</h1>
                <p class="hero-subtitle">Découvrez notre sélection de plantes, graines et outils pour jardiniers passionnés</p>
                <a href="#products" class="btn-primary">
                    Explorer le Catalogue
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Category Filter -->
    <section class="category-section" id="products">
        <div class="container">
            <h2 class="section-title">Nos Catégories</h2>
            <div class="category-filters">
                <a href="#" class="category-btn active">
                    <i class="fas fa-th"></i>
                    <span>Tous les Produits</span>
                </a>
                <a href="#" class="category-btn">
                    <i class="fas fa-seedling"></i>
                    <span>Plantes</span>
                </a>
                <a href="#" class="category-btn">
                    <i class="fas fa-apple-alt"></i>
                    <span>Graines</span>
                </a>
                <a href="#" class="category-btn">
                    <i class="fas fa-tools"></i>
                    <span>Outils</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Products Grid -->
    <section class="products-section">
        <div class="container">

            <div class="products-grid">

                <!-- Product 1 -->
                <div class="product-card">
                    <div class="product-badge">Nouveau</div>
                    <div class="product-image">
                        <img src="https://via.placeholder.com/400x300?text=Plante" alt="Plante">
                        <div class="product-overlay">
                            <a href="#" class="btn-icon"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Plantes</span>
                        <h3 class="product-name">Monstera Deliciosa</h3>
                        <p class="product-description">Plante tropicale idéale pour décorer votre intérieur avec une touche verte élégante.</p>
                        <div class="product-footer">
                            <span class="product-price">29.99€</span>
                            <span class="product-stock in-stock">En stock</span>
                        </div>
                        <a href="#" class="btn-card">Voir les détails</a>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://via.placeholder.com/400x300?text=Graines" alt="Graines">
                        <div class="product-overlay">
                            <a href="#" class="btn-icon"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Graines</span>
                        <h3 class="product-name">Graines de Tomates Bio</h3>
                        <p class="product-description">Variété biologique parfaite pour cultiver des tomates savoureuses dans votre jardin.</p>
                        <div class="product-footer">
                            <span class="product-price">4.50€</span>
                            <span class="product-stock low-stock">Stock limité</span>
                        </div>
                        <a href="#" class="btn-card">Voir les détails</a>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://via.placeholder.com/400x300?text=Outil" alt="Outil">
                        <div class="product-overlay">
                            <a href="#" class="btn-icon"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Outils</span>
                        <h3 class="product-name">Kit d'Outils de Jardinage</h3>
                        <p class="product-description">Ensemble complet d’outils essentiels pour entretenir votre jardin comme un pro.</p>
                        <div class="product-footer">
                            <span class="product-price">39.99€</span>
                            <span class="product-stock out-of-stock">Rupture</span>
                        </div>
                        <a href="#" class="btn-card">Voir les détails</a>
                    </div>
                </div>

            </div>

            <!-- No products example (hidden by default if you want later) -->
            <!--
            <div class="no-products">
                <i class="fas fa-search"></i>
                <h3>Aucun produit trouvé</h3>
                <p>Essayez de modifier vos critères de recherche</p>
                <a href="#" class="btn-primary">Voir tous les produits</a>
            </div>
            -->

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
                <div class="footer-section">
                    <h4>Navigation</h4>
                    <ul>
                        <li><a href="#">Catalogue</a></li>
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
                <div class="footer-section">
                    <h4>Suivez-nous</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 GreenTech Solutions. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });

        const observerOptions = { threshold: 0.1, rootMargin: '0px 0px -50px 0px' };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.product-card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'all 0.6s ease';
            observer.observe(card);
        });
    </script>
</body>

</html>
