<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenTech Solutions - Catalogue</title>
    <link rel="stylesheet" href="{{ asset('css/catalog.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <div class="nav-brand">
                <i class="fas fa-leaf"></i>
                <span>GreenTech Solutions</span>
            </div>
            <div class="nav-links">
                <a href="{{ route('catalog.index') }}" class="nav-link active">Catalogue</a>
                <a href="#" class="nav-link">À propos</a>
                <a href="#" class="nav-link">Contact</a>
            </div>
            <div class="nav-actions">
                <form action="{{ route('catalog.search') }}" method="GET" class="search-container">
                    <i class="fas fa-search"></i>
                    <input type="text" name="query" placeholder="Rechercher un produit..." class="search-input" value="{{ request('query') }}">
                </form>
                <a href="{{ route('admin.dashboard') }}" class="btn-admin">
                    <i class="fas fa-user-shield"></i>
                    Admin
                </a>
            </div>
        </div>
    </nav>

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
                <a href="{{ route('catalog.index') }}" class="category-btn {{ !request('category') ? 'active' : '' }}">
                    <i class="fas fa-th"></i>
                    <span>Tous les Produits</span>
                </a>
                @foreach($categories as $category)
                <a href="{{ route('catalog.index', ['category' => $category->id]) }}"
                    class="category-btn {{ request('category') == $category->id ? 'active' : '' }}">
                    <i class="fas fa-{{ $category->icon ?? 'tag' }}"></i>
                    <span>{{ $category->name }}</span>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Products Grid -->
    <section class="products-section">
        <div class="container">
            @if($products->count() > 0)
            <div class="products-grid">
                @foreach($products as $product)
                <div class="product-card">
                    @if($product->is_new)
                    <div class="product-badge">Nouveau</div>
                    @endif
                    <div class="product-image">
                        <img src="{{ $product->image_url ?? 'https://via.placeholder.com/400x300?text=Produit' }}" alt="{{ $product->name }}">
                        <div class="product-overlay">
                            <a href="{{ route('catalog.show', $product->id) }}" class="btn-icon" title="Voir les détails">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">{{ $product->category->name }}</span>
                        <h3 class="product-name">{{ $product->name }}</h3>
                        <p class="product-description">{{ Str::limit($product->description, 60) }}</p>
                        <div class="product-footer">
                            <span class="product-price">{{ number_format($product->price, 2) }}€</span>
                            <span class="product-stock {{ $product->stock > 10 ? 'in-stock' : ($product->stock > 0 ? 'low-stock' : 'out-of-stock') }}">
                                {{ $product->stock > 10 ? 'En stock' : ($product->stock > 0 ? 'Stock limité' : 'Rupture') }}
                            </span>
                        </div>
                        <a href="{{ route('catalog.show', $product->id) }}" class="btn-card">Voir les détails</a>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="pagination-container">
                {{ $products->links() }}
            </div>
            @else
            <div class="no-products">
                <i class="fas fa-search"></i>
                <h3>Aucun produit trouvé</h3>
                <p>Essayez de modifier vos critères de recherche</p>
                <a href="{{ route('catalog.index') }}" class="btn-primary">Voir tous les produits</a>
            </div>
            @endif
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
        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

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