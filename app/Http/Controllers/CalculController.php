<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculController extends Controller
{
    public function some($a, $b)
    {
        $res = $a + $b;
        return 'la somme est' . $res;
    }
    public function produit($a, $b)
    {
        $res = $a * $b;
        return 'la produit est' . $res;
    }
}
