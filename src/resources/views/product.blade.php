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
            <div class="products-page">
                <h2 class="page-title"><i class="fas fa-boxes"></i> Products Management</h2>

                <div class="products-grid">
                    @foreach($products as $product)
                    <div class="product-card">

                        <div class="product-image">
                            <img src="{{ asset($product->image) }}" width="120">
                            <div class="product-status in-stock">En stock</div>
                        </div>

                        <div class="product-info">
                            <span class="product-category">
                                {{ $product->category->name ?? 'No Category' }}
                            </span>

                            <h3>{{ $product->name }}</h3>

                            <p class="product-desc">
                                {{ $product->description }}
                            </p>

                            <div class="product-price">
                                {{ $product->prix }} DH
                            </div>

                            <div class="product-actions">
                                <a href="{{ url('/view/'.$product->id) }}" class="btn-views">
                                    <i class="fas fa-eye"></i> View
                                </a>

                                <a href="{{ url('/edit/'.$product->id) }}" class="btn-edit">
                                    <i class="fas fa-edit"></i> Update
                                </a>

                                <form action="/products/delete/{{ $product->id }}" method="GET">
                                    @csrf
                                    <!-- @method('DELETE') -->
                                    <button type="submit" class="btn-deletes">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </div>

                    </div>
                    @endforeach
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


</body>

</html>