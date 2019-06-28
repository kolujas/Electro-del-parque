<?php
    namespace App\Http\Controllers;

    use App\Models\Marca;
    use App\Models\Producto;
    use App\Models\Tipo;
    use Illuminate\Http\Request;

    class ProductoController extends Controller{
        /** Carga la seccion intermedia antes de los listados de algunos Tipos. */
        public function intermedio($slug){
            $tipo = Tipo::findBySlug($slug);
            
            return view('producto.intermedio', [
                'tipo' => $tipo,
            ]);
        }

        /** Carga el listado de productos que coincidan con el slug. */
        public function listado($slug){
            $tipo = Tipo::findBySlug($slug);
            $marcas = Marca::get();
            $productos = Producto::where('id_tipo', '=', $tipo->id_tipo)->get();
            
            return view('producto.listado', [
                'marcas' => $marcas,
                'productos' => $productos,
                'tipo' => $tipo,
            ]);
        }

        /** Carga el sublistado de productos que coincidan con el slug. */
        public function sublistado($slug, $categoria){
            $tipo = Tipo::findBySlug($slug);
            
            return view('producto.sublistado', [
                'tipo' => $tipo,
            ]);
        }
    }