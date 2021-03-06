<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Category;

class ShopComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $products = Product::paginate(10);

        $categories = Category::all();

        return view('livewire.shop-component', ['products'=>$products, 'categories'=>$categories]) -> layout('layouts.base');
    }
}
