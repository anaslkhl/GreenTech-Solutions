@include('partials.header')

@section('content')
<div class="p-6">
    <h2 class="text-2xl font-bold mb-6 flex items-center gap-2">
        <i class="fas fa-boxes text-indigo-600"></i>
        Products Management
    </h2>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        @foreach($products as $product)
        <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition overflow-hidden flex flex-col">

            <!-- Image -->
            <div class="relative bg-gray-100 flex justify-center p-4">
                <img src="{{ asset($product->image) }}" class="h-28 object-contain">

                <span class="absolute top-3 right-3 bg-green-100 text-green-700 text-xs px-3 py-1 rounded-full font-semibold">
                    En stock
                </span>
            </div>

            <!-- Info -->
            <div class="p-4 flex flex-col flex-grow">

                <span class="text-xs text-indigo-600 font-semibold uppercase tracking-wide">
                    {{ $product->category->name ?? 'No Category' }}
                </span>

                <h3 class="text-lg font-bold mt-1">{{ $product->name }}</h3>

                <p class="text-sm text-gray-600 mt-2 line-clamp-3 flex-grow">
                    {{ $product->description }}
                </p>

                <div class="text-xl font-bold text-indigo-600 mt-3">
                    {{ $product->prix }} DH
                </div>

                <!-- Actions -->
                <div class="mt-4 flex gap-2">
                    <button class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-700 py-2 rounded-lg text-sm font-medium transition">
                        <i class="fas fa-eye mr-1"></i> View
                    </button>

                    <a href="{{ url('/edit/'.$product->id) }}"
                        class="flex-1 bg-indigo-500 hover:bg-indigo-600 text-white py-2 rounded-lg text-sm font-medium text-center transition">
                        <i class="fas fa-edit mr-1"></i> Update
                    </a>

                    <form action="/products/delete/{{ $product->id }}" method="GET" class="flex-1">
                        @csrf
                        <button type="submit"
                            class="w-full bg-red-500 hover:bg-red-600 text-white py-2 rounded-lg text-sm font-medium transition">
                            <i class="fas fa-trash mr-1"></i> Delete
                        </button>
                    </form>
                </div>

            </div>
        </div>
        @endforeach
    </div>
</div>