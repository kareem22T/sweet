<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function getMenuItemsPerCategory()
    {
        $items = Menu::all();
        return view('front.main', compact('items', $items));
    }
}