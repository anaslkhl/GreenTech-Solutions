@include('partials.header')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Products Management</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>

<body>

    <div class="container">

        <h2>📦 Products Management</h2>

        <div class="grid">
            @foreach($products as $product)
            <div class="card">

                <div class="image-box">
                    <img src="{{ asset($product->image) }}">
                    <span class="badge">En stock</span>
                </div>

                <div class="content">
                    <span class="category">
                        {{ $product->category->name ?? 'No Category' }}
                    </span>

                    <div class="title">{{ $product->name }}</div>

                    <div class="description">
                        {{ $product->description }}
                    </div>

                    <div class="price">{{ $product->prix }} DH</div>

                    <div class="actions">
                        <a href="/view/.{{$product->id}}">View</a>
                        <form action="/deleteFav/{{ $product->id }}" method="POST" style="flex:1;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-delete" type="submit">Unlike</button>
                        </form>
                    </div>
                </div>

            </div>
            @endforeach
        </div>

    </div>

</body>

</html>