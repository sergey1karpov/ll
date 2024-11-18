<?php

namespace App\Http\Controllers;

use App\Models\NewsCategories;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;

class NewsCategoriesController extends Controller
{
    public function getCategories()
    {
        dd(NewsCategories::with('user', 'news', 'news.user')->get());
    }
}
