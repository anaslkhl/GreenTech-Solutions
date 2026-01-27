<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($product) ? 'Modifier' : 'Ajouter' }} un Produit - GreenTech</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>

<body>
    <div class="admin-layout">
        <!-- Sidebar (same as dashboard) -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <i class="fas fa-leaf"></i>
                <h2>GreenTech Admin</h2>
            </div>

            <nav class="sidebar-nav">
                <a href="{{ route('admin.dashboard') }}" class="nav-item">
                    <i class="fas fa-chart-line"></i>
                    <span>Tableau de bord</span>
                </a>
                <a href="{{ route('admin.products.index') }}" class="nav-item active">
                    <i class="fas fa-box"></i>
                    <span>Produits</span>
                </a>
                <a href="{{ route('admin.categories.index') }}" class="nav-item">
                    <i class="fas fa-tags"></i>
                    <span>Catégories</span>
                </a>
            </nav>

            <div class="sidebar-footer">
                <a href="{{ route('catalog.index') }}" class="nav-item">
                    <i class="fas fa-home"></i>
                    <span>Retour au site</span>
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="nav-item logout-btn">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Déconnexion</span>
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Top Bar -->
            <header class="top-bar">
                <div class="search-box">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Rechercher...">
                </div>

                <div class="user-menu">
                    <div class="user-profile">
                        <img src="https://ui-avatars.com/api/?name=Admin&background=356859&color=fff" alt="Admin">
                        <div class="user-info">
                            <span class="user-name">{{ Auth::user()->name ?? 'Administrateur' }}</span>
                            <span class="user-role">Admin</span>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Form Content -->
            <div class="dashboard-content">
                <div class="page-header">
                    <div class="breadcrumb-form">
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="fas fa-home"></i> Dashboard
                        </a>
                        <i class="fas fa-chevron-right"></i>
                        <a href="{{ route('admin.products.index') }}">Produits</a>
                        <i class="fas fa-chevron-right"></i>
                        <span>{{ isset($product) ? 'Modifier' : 'Nouveau' }}</span>
                    </div>
                    <h1>{{ isset($product) ? 'Modifier le Produit' : 'Ajouter un Nouveau Produit' }}</h1>
                </div>

                @if ($errors->any())
                <div class="alert alert-error">
                    <i class="fas fa-exclamation-circle"></i>
                    <div>
                        <strong>Erreur!</strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif

                @if (session('success'))
                <div class="alert alert-success">
                    <i class="fas fa-check-circle"></i>
                    <div>
                        <strong>Succès!</strong>
                        <p>{{ session('success') }}</p>
                    </div>
                </div>
                @endif

                <form action="{{ isset($product) ? route('admin.products.update', $product->id) : route('admin.products.store') }}"
                    method="POST"
                    enctype="multipart/form-data"
                    class="product-form">
                    @csrf
                    @if(isset($product))
                    @method('PUT')
                    @endif

                    <div class="form-grid">
                        <!-- Left Column - Main Info -->
                        <div class="form-section">
                            <div class="section-header">
                                <h2><i class="fas fa-info-circle"></i> Informations Générales</h2>
                            </div>

                            <div class="form-group">
                                <label for="name">
                                    Nom du Produit <span class="required">*</span>
                                </label>
                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    class="form-control"
                                    value="{{ old('name', $product->name ?? '') }}"
                                    placeholder="Ex: Monstera Deliciosa"
                                    required>
                                <small class="form-help">Entrez un nom descriptif pour votre produit</small>
                            </div>

                            <div class="form-group">
                                <label for="description">
                                    Description <span class="required">*</span>
                                </label>
                                <textarea
                                    id="description"
                                    name="description"
                                    class="form-control"
                                    rows="5"
                                    placeholder="Décrivez votre produit en détail..."
                                    required>{{ old('description', $product->description ?? '') }}</textarea>
                                <small class="form-help">Décrivez les caractéristiques et avantages du produit</small>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="category_id">
                                        Catégorie <span class="required">*</span>
                                    </label>
                                    <select id="category_id" name="category_id" class="form-control" required>
                                        <option value="">Sélectionner une catégorie</option>
                                        @foreach($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ old('category_id', $product->category_id ?? '') == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="price">
                                        Prix (€) <span class="required">*</span>
                                    </label>
                                    <div class="input-group">
                                        <input
                                            type="number"
                                            id="price"
                                            name="price"
                                            class="form-control"
                                            step="0.01"
                                            min="0"
                                            value="{{ old('price', $product->price ?? '') }}"
                                            placeholder="0.00"
                                            required>
                                        <span class="input-suffix">€</span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="stock">
                                    Quantité en Stock <span class="required">*</span>
                                </label>
                                <input
                                    type="number"
                                    id="stock"
                                    name="stock"
                                    class="form-control"
                                    min="0"
                                    value="{{ old('stock', $product->stock ?? 0) }}"
                                    placeholder="0"
                                    required>
                                <div class="stock-indicator-form" id="stockIndicator">
                                    <span class="stock-status"></span>
                                </div>
                            </div>
                        </div>

                        <!-- Right Column - Image & Actions -->
                        <div class="form-section">
                            <div class="section-header">
                                <h2><i class="fas fa-image"></i> Image du Produit</h2>
                            </div>

                            <div class="image-upload-container">
                                <div class="image-preview" id="imagePreview">
                                    @if(isset($product) && $product->image_url)
                                    <img src="{{ $product->image_url }}" alt="Preview">
                                    @else
                                    <i class="fas fa-image"></i>
                                    <p>Aucune image sélectionnée</p>
                                    @endif
                                </div>

                                <label for="image" class="file-label">
                                    <i class="fas fa-cloud-upload-alt"></i>
                                    Choisir une Image
                                    <input
                                        type="file"
                                        id="image"
                                        name="image"
                                        accept="image/*"
                                        class="file-input">
                                </label>

                                <small class="form-help text-center">
                                    ou entrez l'URL de l'image
                                </small>

                                <div class="form-group">
                                    <input
                                        type="url"
                                        name="image_url"
                                        class="form-control"
                                        value="{{ old('image_url', $product->image_url ?? '') }}"
                                        placeholder="https://example.com/image.jpg">
                                </div>

                                <small class="form-help">Formats acceptés: JPG, PNG, GIF (Max: 2MB)</small>
                            </div>

                            <div class="section-header">
                                <h2><i class="fas fa-toggle-on"></i> Options</h2>
                            </div>

                            <div class="form-options">
                                <label class="checkbox-label">
                                    <input
                                        type="checkbox"
                                        name="is_new"
                                        value="1"
                                        {{ old('is_new', $product->is_new ?? false) ? 'checked' : '' }}>
                                    <span>Marquer comme "Nouveau"</span>
                                </label>

                                <label class="checkbox-label">
                                    <input
                                        type="checkbox"
                                        name="is_featured"
                                        value="1"
                                        {{ old('is_featured', $product->is_featured ?? false) ? 'checked' : '' }}>
                                    <span>Produit à la une</span>
                                </label>

                                <label class="checkbox-label">
                                    <input
                                        type="checkbox"
                                        name="is_active"
                                        value="1"
                                        {{ old('is_active', $product->is_active ?? true) ? 'checked' : '' }}>
                                    <span>Produit actif</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="form-actions">
                        <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">
                            <i class="fas fa-times"></i>
                            Annuler
                        </a>
                        <button type="reset" class="btn btn-outline">
                            <i class="fas fa-redo"></i>
                            Réinitialiser
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i>
                            {{ isset($product) ? 'Mettre à Jour' : 'Enregistrer' }}
                        </button>
                    </div>
                </form>
            </div>
        </main>
    </div>

    <script>
        // Image preview
        document.getElementById('image').addEventListener('change', function(e) {
            const file = e.target.files[0];
            const preview = document.getElementById('imagePreview');

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.innerHTML = `<img src="${e.target.result}" alt="Preview">`;
                }
                reader.readAsDataURL(file);
            }
        });

        // Stock indicator
        const stockInput = document.getElementById('stock');
        const stockIndicator = document.getElementById('stockIndicator');

        function updateStockIndicator() {
            const value = parseInt(stockInput.value) || 0;
            const status = stockIndicator.querySelector('.stock-status');

            if (value > 10) {
                status.textContent = 'Stock suffisant';
                status.className = 'stock-status high';
            } else if (value > 0) {
                status.textContent = 'Stock limité';
                status.className = 'stock-status medium';
            } else {
                status.textContent = 'Rupture de stock';
                status.className = 'stock-status low';
            }
        }

        stockInput.addEventListener('input', updateStockIndicator);
        updateStockIndicator();

        // Form validation
        document.querySelector('.product-form').addEventListener('submit', function(e) {
            const requiredFields = this.querySelectorAll('[required]');
            let isValid = true;

            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add('error');
                } else {
                    field.classList.remove('error');
                }
            });

            if (!isValid) {
                e.preventDefault();
                alert('Veuillez remplir tous les champs obligatoires');
            }
        });
    </script>
</body>

</html>