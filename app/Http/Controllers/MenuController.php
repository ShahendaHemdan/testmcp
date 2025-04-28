<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\MenuItem;
use Illuminate\View\View;

class MenuController extends Controller
{
    /**
     * Display the menu page with categories and items.
     */
    public function index(): View
    {
        $categories = Category::with(['menuItems' => function ($query) {
            $query->orderBy('sort_order');
        }])->orderBy('sort_order')->get();
        
        $featuredItems = MenuItem::where('is_featured', true)
            ->orderBy('sort_order')
            ->take(4)
            ->get();
        
        return view('menu.index', compact('categories', 'featuredItems'));
    }
    
    /**
     * Display a specific category and its menu items.
     */
    public function category(Category $category): View
    {
        $category->load(['menuItems' => function ($query) {
            $query->orderBy('sort_order');
        }]);
        
        return view('menu.category', compact('category'));
    }
    
    /**
     * Display a specific menu item.
     */
    public function show(MenuItem $menuItem): View
    {
        return view('menu.show', compact('menuItem'));
    }
} 