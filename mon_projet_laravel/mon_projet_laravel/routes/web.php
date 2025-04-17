<?php

use App\Http\Controllers\accueilcontroller;
use App\Http\Controllers\contactcontroller;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile; 
//en utilisant autre segment de l'url
Route::get('/home', function () {
    return view('home');
}); 

// on peut ajouter autre template (hello.blade.php) dans le dossier resources/views
Route::get('/blade', function () {
    return view('blade');
});
 
// -->le routage passer a la vue sans utiliser le controller
// Passage de données a la vue (template)
/*Route::get('/variable', function () {
    return view('variable', [
        'nom' => 'mojahid',
        'prenom' => 'abdo',
        'cours' => ['Laravel', 'React', 'PHP']
    ]); // Pass the variable to the view
});
*/
//recupation de la variable dynamiquement a partir de l'url
//segment de l'url dynamique 
/*Route::get("/variable/{nom}/{prenom}", function ($nom , $prenom) { // $nom is a dynamic segment
    return view("variable", [
        "nom" => $nom, // Variable to be passed to the view
        "prenom" => $prenom, // Variable to be passed to the view
        "cours" => ["php", "html", "css", "mvc", "laravel"],
    ]);
}); 
*/
//recupation de la variable en utilisant classe request (une fois besion une valeur a user ou formulaire en utilisant la classe request)
use Illuminate\Http\Request; // Import the Request class
/*Route::get('/variable', function (Request $request) { // Use the Request class to get query parameters
    //dd($request->nom);
    return view('variable', [
        'nom' => $request->nom,
        'prenom' => $request->prenom,
    ]);
}); */
//utilisation le callback by controller 
//on va definir le controller dans le dossier app/Http/Controllers
Route::get('/', [accueilcontroller::class, 'index']);
Route::get('/accueil', [accueilcontroller::class, 'accueil']);
Route::get('/{nom}', [accueilcontroller::class, 'create']);
use App\Http\Controllers\ProfileController; // Import the ProfileController class
Route::get('/profile', [ProfileController::class, 'showProfile']);
Route::get('/contact', [contactcontroller::class,'index']);



