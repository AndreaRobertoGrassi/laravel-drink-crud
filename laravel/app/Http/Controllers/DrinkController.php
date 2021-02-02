<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drink;

class DrinkController extends Controller
{
  public function index()
  {
    $drinks = Drink::all();    //assegno alla variabile $peripherals tutta la tabella (posso anche scrivere: $peripherals = App\Peripheral::all(); togliendo use App\Peripheral; )
    return view('pages.drinks-index', compact('drinks'));
  }
  public function show($id)
  {
    $drink = Drink::findOrFail($id);    //cerco l'elemento con questo specifico id, se non trovato da errore
    return view('pages.drink-show', compact('drink'));
  }
}
