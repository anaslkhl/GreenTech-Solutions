<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenTech Solutions - Écosystème Agricole Intelligent</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <nav class="navbar">
        <div class="container">
            <div class="nav-brand">
                <i class="fas fa-leaf"></i>
                <span>GreenTech Solutions</span>
            </div>

            <ul class="nav-links">
                <li><a href="{{ url('/home') }}">Home</a></li>
                <li><a href="{{ url('/admin-dashboard') }}">Admin Dashboard</a></li>
                <li><a href="{{ url('/product-detail') }}">Product detail</a></li>
                <li><a href="{{ url('/product-form') }}">Add Product</a></li>
                <li><a href="{{ url('/catalog') }}">Catalog</a></li>
            </ul>

            <div class="burger">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </nav>

</body>