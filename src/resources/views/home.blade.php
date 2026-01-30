@include('partials.header')

@section('title', 'Catalogue')

<!-- Hero Section -->
<section class="hero" id="home">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <span class="hero-badge">Écosystème Agricole Intelligent</span>
                <h2>Transformez votre agriculture avec <span class="highlight">GreenTech</span></h2>
                <p>Découvrez notre catalogue de produits innovants pour une agriculture durable, productive et respectueuse de l'environnement.</p>

                <div class="hero-stats">
                    <div class="stat">
                        <h3>250+</h3>
                        <p>Produits Innovants</p>
                    </div>
                    <div class="stat">
                        <h3>3</h3>
                        <p>Catégories Premium</p>
                    </div>
                    <div class="stat">
                        <h3>100%</h3>
                        <p>Satisfaction Client</p>
                    </div>
                </div>

                <div class="hero-buttons">
                    <a href="#catalog" class="btn-primary">
                        <i class="fas fa-shopping-cart"></i> Voir le Catalogue
                    </a>
                    <a href="#categories" class="btn-secondary">
                        <i class="fas fa-filter"></i> Explorer les Catégories
                    </a>
                </div>
            </div>

            <div class="hero-image">
                <div class="image-container">
                    <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Agriculture Technologique">
                    <div class="image-overlay">
                        <div class="product-card">
                            <div class="product-badge">Nouveau</div>
                            <h4>Kit Smart Farming</h4>
                            <p>L'innovation au service de l'agriculture</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Categories Section -->
<section class="categories" id="categories">
    <div class="container">
        <div class="section-header">
            <h2>Nos <span>Catégories</span></h2>
            <p>Explorez notre sélection de produits organisés par catégories</p>
        </div>

        <div class="categories-grid">
            <div class="category-card">
                <div class="category-icon">
                    <i class="fas fa-spa"></i>
                </div>
                <h3>Plantes</h3>
                <p>Une large variété de plantes pour tous les types de cultures</p>
                <div class="product-count">85 produits</div>
                <a href="#" class="category-link">Explorer <i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="category-card">
                <div class="category-icon">
                    <i class="fas fa-seedling"></i>
                </div>
                <h3>Graines</h3>
                <p>Graines de qualité supérieure pour des récoltes optimales</p>
                <div class="product-count">120 produits</div>
                <a href="#" class="category-link">Explorer <i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="category-card">
                <div class="category-icon">
                    <i class="fas fa-tools"></i>
                </div>
                <h3>Outils</h3>
                <p>Équipements modernes pour une agriculture efficace</p>
                <div class="product-count">45 produits</div>
                <a href="#" class="category-link">Explorer <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- Products Section -->
<section class="products" id="catalog">
    <div class="container">
        <div class="section-header">
            <h2>Catalogue des <span>Produits</span></h2>
            <p>Découvrez nos produits innovants pour l'agriculture moderne</p>
        </div>

        <!-- Filters -->
        <div class="filters">
            <div class="filter-tags">
                <button class="filter-tag active">Tous les produits</button>
                <button class="filter-tag">Plantes</button>
                <button class="filter-tag">Graines</button>
                <button class="filter-tag">Outils</button>
            </div>

            <div class="filter-search">
                <input type="text" placeholder="Rechercher par nom...">
                <select>
                    <option>Trier par : Prix croissant</option>
                    <option>Trier par : Prix décroissant</option>
                    <option>Trier par : Nom</option>
                </select>
            </div>
        </div>
        
        <div class="products-grid">
        @foreach($products as $product)
        <div class="product-card">
                <div class="product-image">
                    <img src="" alt="Plante Médicinale">
                    <div class="product-status in-stock">En stock</div>
                </div>
                <div class="product-info">
                    <span class="product-category">Plantes</span>
                    <h3>{{$product->name}}</h3>
                    <p class="product-desc">{{$product->description}}</p>
                    <div class="product-price">{{$product->prix}}</div>
                    <button class="btn-view">
                        <i class="fas fa-eye"></i> Voir détails
                    </button>
                </div>
            </div>
            @endforeach

            <div class="load-more">
                <button class="btn-load">
                    <i class="fas fa-redo"></i> Charger plus de produits
                </button>
            </div>
        </div>
</section>

<!-- Features Section -->
<section class="features">
    <div class="container">
        <div class="section-header">
            <h2>Pourquoi choisir <span>GreenTech</span> ?</h2>
            <p>Notre engagement pour une agriculture durable et innovante</p>
        </div>

        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-leaf"></i>
                </div>
                <h3>100% Biologique</h3>
                <p>Tous nos produits sont certifiés biologiques et respectueux de l'environnement.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-shipping-fast"></i>
                </div>
                <h3>Livraison Rapide</h3>
                <p>Expédition sous 24h pour assurer la fraîcheur de vos produits.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-headset"></i>
                </div>
                <h3>Support Expert</h3>
                <p>Notre équipe d'experts est disponible pour vous conseiller.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-recycle"></i>
                </div>
                <h3>Économie Circulaire</h3>
                <p>Nous promouvons une économie circulaire et durable.</p>
            </div>
        </div>
    </div>
</section>
@include('partials.footer')


<script src="js/script.js"></script>
</body>

</html>