<?php

use App\Models\Product;
use function Livewire\Volt\{state};

state(
    name: '',
    description: '',
    price: 0.00,
    amount: 0,
    products: fn () => Product::latest()->get()
);

$addProduct = function () {
    Product::create([
        'name' => $this->name,
        'description' => $this->description,
        'price' => $this->price,
        'amount' => $this->amount,
    ]);

    $this->name = '';
    $this->description = '';
    $this->price = 0.00;
    $this->amount = 0;
    $this->products = Product::latest()->get();
};

?>

<x-layouts.app>
    @volt
    <div>
        <h1 class="text-3xl font-bold mb-7">Add Product</h1>
        <form wire:submit="addProduct" class="flex flex-col gap-3">
            <div class="grid grid-cols-2 gap-3">
                <div class="flex flex-col gap-2">
                    <label for="name">Name</label>
                    <input class="h-10 px-3 py-1 shadow rounded" id="name" type="text" wire:model="name" placeholder="Name" required>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="description">Description</label>
                    <input class="h-10 px-3 py-1 shadow rounded" id="description" type="text" wire:model="description" placeholder="Description" required>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="price">Price</label>
                    <input class="h-10 px-3 py-1 shadow rounded" id="price" type="text" step="0.01" wire:model="price" placeholder="Price" required>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="amount">Amount</label>
                    <input class="h-10 px-3 py-1 shadow rounded" id="amount" type="number" wire:model="amount" placeholder="Amount" required>
                </div>
            </div>
            <button type="submit" class="w-100 bg-green-500 text-white py-2 rounded">Add Product</button>
        </form>
    
        <h1 class="text-3xl font-bold my-7">Products</h1>
    
        <div class="grid grid-cols-3 gap-8 mt-8">
            @foreach ($products as $product)
                <livewire:item :product="$product" :wire:key="$loop->index" />
            @endforeach
        </div>
    </div>
    @endvolt
</x-layouts.app>
