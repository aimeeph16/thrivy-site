<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Category;

class CategoryComponent extends Component
{
    public $category_slug;

    public function mount($category_slug){
        $this->category_slug = $category_slug;
    }

    use WithPagination;
    public function render()
    {
        $category = Category::where('slug', $this->category_slug)->first();
        $category_id = $category->id;
        $category_name = $category->name;

        $products = Product::where('category_id', $category_id) -> paginate(10);

        $categories = Category::all();

        return view('livewire.category-component', ['products'=>$products, 'categories'=>$categories, 'category_name'=>$category_name]) -> layout('layouts.base');
    }
}
