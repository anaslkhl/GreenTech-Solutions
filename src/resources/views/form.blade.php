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

        <div class="container">

            <form action="form" method="POST">
                @csrf
                <label for="name">Name</label>
                <input type="text" name="name">
                <label for="price">Price</label>
                <input type="number" name="price">
                <input type="category" name="category">
                <label for="category">Category</label>
                <textarea name="description"></textarea>
                <label for="imageLink">Image link</label>
                <input type="imageLink" name="imageLink">
                <button type="submit">Add</button>
            </form>
        </div>

</body>

</html>