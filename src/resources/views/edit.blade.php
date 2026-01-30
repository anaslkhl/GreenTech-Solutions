<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($product) ? 'Modifier' : 'Ajouter' }} un Produit - GreenTech</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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



            <div class="sidebar-footer">
                <a href="" class="nav-item">
                    <i class="fas fa-home"></i>
                    <span>Retour au site</span>
                </a>
                <form method="POST" action="">
                    @csrf
                    <button type="submit" class="nav-item logout-btn">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Déconnexion</span>
                    </button>
                </form>
            </div>
        </aside>

        <div class="container-pro">

            <form class="product-cont" action="update" method="POST">
                @csrf
                <h3><i class="fas fa-box"></i> Ajouter un produit</h3>

                <label for="name">Name</label>
                <input type="text" name="name" value="{{$product->name}}">
                <label for="price">Price</label>
                <input type="number" name="price" value="{{$product->prix}}">
                <label for="category">Category</label>
                <select class="category-select" name="category_id">
                    @foreach($category as $catego)
                    <option value="{{$catego->id}}">{{$catego->name}}</option>
                    @endforeach
                </select>
                <label for="description">Description</label>
                <textarea name="description">{{$product->description}}</textarea>
                <label for="imageLink"></label>
                <input type="imageLink" name="imageLink" value="{{$product->image}}">
                <button type="submit">Update</button>
            </form>
        </div>

</body>

</html>