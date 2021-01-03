<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Golongan;

class GolonganController extends Controller
{
    public function show(Golongan $golongan)
    {
        return view('golongan.show', compact('golongan'));
    }
}
