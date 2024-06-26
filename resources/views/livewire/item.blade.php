<div>
    <img src="https://via.placeholder.com/512x512.png/f3f4f6" alt="Product Image" />

    <div class="flex items-start justify-between mt-4">
        <div>
            <div>{{ $product->name }}</div>
            <div class="text-2xl font-bold">${{ $product->price }}</div>
        </div>

        <button
            class="px-3 py-2 text-sm font-bold text-white bg-blue-600 rounded disabled:bg-gray-200 disabled:text-gray-400"
        >
            Add to Cart
        </button>
    </div>
</div>