<?php
    namespace App\Http\Controllers;

    use App\Models\Marca;
    use App\Models\Producto;
    use App\Models\Tipo;
    use Illuminate\Http\Request;

    class ProductoController extends Controller{
        /** Carga los productos que coincidan con el slug. */
        public function listado($slug, $pepe){
            $tipo = Tipo::findBySlug($slug);
            $marcas = Marca::where('id_tipo', '=', $tipo->id_tipo)->get();
            $productos = Producto::where('id_tipo', '=', $tipo->id_tipo)->get();
            
            if($pepe != ''){
                return view('producto.sub-listado');
            }else{
                return view('producto.listado', [
                    'marcas' => $marcas,
                    'productos' => $productos,
                    'tipo' => $tipo,
                ]);
            }

            
        }
    }