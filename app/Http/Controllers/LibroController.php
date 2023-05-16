<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use Carbon\Carbon;

class LibroController extends Controller{

    public function index(){

        $datosLibro = Libro::all();

        return response()->json($datosLibro);
    }

    public function guardar(Request $request){

        /*
        Cualquiera de las 2 formas son CORRECTAS para buscar los datos del libro (Se llama instancia)
        Instaciación y uso método directo sin poner la palabra reservada (new)
        Es muy recomendado porque se hace de forma directa.

        $datosLibro = new Libro; = $datosLibro = Libro::find($id);
        */

        $datosLibro = new Libro;

        if ($request->hasFile('imagen')) {

            // Obtiene el nombre original
            $nombreArchivoOriginal = $request->file('imagen')->getClientOriginalName();

            // Renombrar el nombre con fecha incluida
            $nuevoNombre = Carbon::now()->timestamp . '_' . $nombreArchivoOriginal;

            // Ubicación de la nueva carpeta donde se va a guardar
            $carpetaDestino = './upload/';

            // Movimiento del archivo con el nuevo nombre
            $request->file('imagen')->move($carpetaDestino, $nuevoNombre);

            // Obtiene los datos
            $datosLibro->titulo = $request->titulo;
            $datosLibro->imagen = ltrim($carpetaDestino, '.') . $nuevoNombre;

            // Guarda datos para mostrarlos
            $datosLibro->save();

        }

        /*
        Recepcionar datos (Se realiza inicialmente)
        $request->file('imagen');
        */

        // Recepciono y obtengo propiedades de la imagen
        return response()->json($nuevoNombre);
    }

    // Ver la infomación
    public function ver($id){

        // Método para consultar la información
        $datosLibro = new Libro;
        // Buscar información en la BD con el $id
        $datosEncontrados = $datosLibro->find($id);

        // Mostrar los datos en formato json
        return response()->json($datosEncontrados);
    }

    public function eliminar($id){

        // Instaciación y uso método directo sin poner la palabra reservada (new), busca datos del libro.
        $datosLibro = Libro::find($id);

        // Validamos si existe ese archivo
        if ($datosLibro) {
            // Ubicamos ese archivo (Obtenemos la ruta de este)
            $rutaArchivo = base_path('public') . $datosLibro->imagen;

            // Si existe
            if (file_exists($rutaArchivo)) {
                // ...Hacemos el borrado
                unlink($rutaArchivo);
            }
            // Eliminar datos en la BD
            $datosLibro->delete();
        }

        return response()->json("Registro Borrado");
    }

    public function actualizar(Request $request, $id){
        $datosLibro = Libro::find($id);

        if ($request->hasFile('imagen')) {

            // Esta sección es del método eliminar (Borra el archivo anterior)
            if ($datosLibro) {
                $rutaArchivo = base_path('public') . $datosLibro->imagen;

                if (file_exists($rutaArchivo)) {
                    unlink($rutaArchivo);
                }
                $datosLibro->delete();
            }
            // Fin del método eliminar

            // Esta sección es del método guardar (Pone el archivo nuevo)
            $nombreArchivoOriginal = $request->file('imagen')->getClientOriginalName();
            $nuevoNombre = Carbon::now()->timestamp . '_' . $nombreArchivoOriginal;
            $carpetaDestino = './upload/';
            $request->file('imagen')->move($carpetaDestino, $nuevoNombre);

            $datosLibro->imagen = ltrim($carpetaDestino, '.') . $nuevoNombre;
            $datosLibro->save();
            // Fin del método guardar

        }

        // Preguntar si Recepciona el dato
        if ($request->input('titulo')) {
            $datosLibro->titulo = $request->input('titulo');
        }
        $datosLibro->save();
        
        return response()->json("Datos actualizados");
    }


}
