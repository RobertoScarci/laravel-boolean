<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cocktail;
use Illuminate\Http\Request;

class CocktailController extends Controller
{
    public function index()
    {
        $cocktails = Cocktail::all();
        return response()->json([
            'success' => true,
            'results' => $cocktails
        ]);
    }
    public function show(Cocktail $cocktail)
    {
        return response()->json([
            'success' => true,
            'results' => $cocktail
        ]);
    }
}
