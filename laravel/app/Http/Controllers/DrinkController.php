<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drink;

class DrinkController extends Controller {
   public function index() {
      $drinks = Drink::all();    //assegno alla variabile $drinks tutta la tabella (posso anche scrivere: $drinks = App\Drink::all(); togliendo use App\Drink; )
      return view('pages.drinks-index', compact('drinks'));
   }

   public function show($id) {
      $drink = Drink::findOrFail($id);    //cerco l'elemento con questo specifico id, se non trovato da errore
      return view('pages.drink-show', compact('drink'));
   }

   public function create(){      //visualizzo la pagina per creare un nuovo elemento
      return view('pages.drink-create');
   }

   public function store(Request $request) {      //salvo l'elemento creato
      $request = $this -> getRequestFact($request);     //richiamo la funzione    (il $this si riferisce al DrinkController)

      $drink=Drink::create($request -> all());
      return redirect() -> route('drink-show', $drink -> id);
   }

   public function edit($id) {    //visualizzola pagina per modificare l'elemento selezionato
      $drink=Drink::findOrFail($id);
      return view('pages.drink-edit', compact('drink'));
   }

   public function update(Request $request, $id) {   //aggiorno l'elemento modificato
      $request = $this -> getRequestFact($request);     //richiamo la funzione    (il $this si riferisce al DrinkController)

      $drink=Drink::findOrFail($id);
      $drink->update($request -> all());
      return redirect() -> route('drink-show', $drink -> id);
   }

   public function delete($id) {           //elimino l'elemento selezionato
      $drink = Drink::findOrFail($id); 
      $drink -> delete();
      return redirect() -> route('drinks-index'); 
   }

   private function getRequestFact($request){      //funzione per ottenere il valore realmente inserito dall'utente
      $alchool=$request ->get('gradation')*10;   
      $price =$request -> get('price')*100;    
      $request -> merge([              // la merge se trova la chiave allora la sovrasscrive  (serve per quando è l'utente ad inserire dei valori)           
         'gradation' => $alchool,         
         'price' => $price            
      ]);

      return $request;
   }
}
