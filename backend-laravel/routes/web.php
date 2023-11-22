<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/test-database-connection', function () {
//     try {
//         DB::connection()->getPdo();
//         echo "Conexión exitosa a la base de datos.";
//     } catch (\Exception $e) {
//         die("Error de conexión a la base de datos: " . $e->getMessage());
//     }
// });

Route::get('/test-database-connection', function () {
    try {
        // Verifica la conexión a la base de datos
        DB::connection()->getPdo();
        echo "Conexión exitosa a la base de datos.<br>";

        // Obtiene la lista de bases de datos
        $databases = DB::select('SHOW DATABASES');

        // Muestra las bases de datos
        echo "Bases de datos disponibles:<br>";
        foreach ($databases as $database) {
            echo $database->Database . "<br>";
        }
    } catch (\Exception $e) {
        die("Error de conexión a la base de datos: " . $e->getMessage());
    }
});
