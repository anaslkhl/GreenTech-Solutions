<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ $product->name }} | Product Details</title>

</head>

<body>

    <div class="container-details">

        <!-- Image -->
        <div class="image-section">
            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
        </div>

        <!-- Product Info -->
        <div class="content">

            <div class="category">
                {{ $product->category->name ?? 'Uncategorized' }}
            </div>

            <div class="title">
                {{ $product->name }}
            </div>

            <div class="description">
                {{ $product->description }}
            </div>

            <div class="price">
                {{ $product->prix }} DH
            </div>

            <div class="actions">
                <button class="btn btn-cart">
                    Add to Cart
                </button>

                <button class="btn btn-buy">
                    Buy Now
                </button>
            </div>

        </div>

    </div>

</body>

</html>