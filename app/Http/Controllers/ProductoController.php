<?php
    namespace App\Http\Controllers;

    use App\Models\Marca;
    use App\Models\Producto;
    use App\Models\Tipo;
    use Illuminate\Http\Request;

    class ProductoController extends Controller{
        /** Carga la seccion intermedia antes de los listados de algunos Tipos. */
        public function intermedio($slug){
            $tipos = Tipo::get();
            $tipo = Tipo::findBySlug($slug);
            if($tipo->id_tipo != 3 && $tipo->id_tipo != 5){
                return redirect('/' . $tipo->slug . '/productos');
            }else{
                $categoria1 = new \stdClass();
                $categoria1->id_categoria = 1;
                if($tipo->id_tipo == 3){
                    $categoria1->nombre = 'Cable Paciente';
                    $categoria1->slug = 'cable-paciente';
                }else{
                    $categoria1->nombre = 'CUFFS / Brazal';
                    $categoria1->slug = 'cuffs-/-brazal';
                }

                $categoria2 = new \stdClass();
                $categoria2->id_categoria = 2;
                if($tipo->id_tipo == 3){
                    $categoria2->nombre = 'Pinzas y Precordiales';
                    $categoria2->slug = 'pinzas-y-precordiales';
                }else{
                    $categoria2->nombre = 'Mangueras de PNI';
                    $categoria2->slug = 'mangueras-de-pni';
                }

                $categorias = [$categoria1, $categoria2];

                return view('producto.intermedio', [
                    'tipos' => $tipos,
                    'tipo' => $tipo,
                    'categorias' => $categorias,
                ]);
            }
        }

        /** Carga el listado de productos que coincidan con el slug. */
        public function listado($slug){
            $tipos = Tipo::get();
            $tipo = Tipo::findBySlug($slug);
            $marcas = Marca::get();
            $productos = Producto::where('id_tipo', '=', $tipo->id_tipo)->get();

            $banner = new \stdClass();
            $banner->titulo = 'Banner de ' . $tipo->nombre;
            $banner->leyenda = '';
            if($tipo->id_tipo == 4){
                $banner->imagen = 'banners/' . $tipo->id_tipo . '.jpeg';
            }else{
                $banner->imagen = 'banners/' . $tipo->id_tipo . '.png';
            }

            $aclaracion = '';
            if($tipo->id_tipo == 4 || $tipo->id_tipo == 5){
                $aclaracion = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam magni iure voluptatum soluta ut porro.';
            }
            
            return view('producto.listado', [
                'marcas' => $marcas,
                'productos' => $productos,
                'tipos' => $tipos,
                'tipo' => $tipo,
                'banner' => $banner,
                'aclaracion' => $aclaracion,
            ]);
        }

        /** Carga el sublistado de productos que coincidan con el slug. */
        public function sublistado($slug, $categoria){
            $tipos = Tipo::get();
            $tipo = Tipo::findBySlug($slug);
            
            if($tipo->id_tipo != 3 && $tipo->id_tipo != 5){
                return redirect('/' . $tipo->slug . '/productos');
            }else{
                return view('producto.sublistado', [
                    'tipos' => $tipos,
                    'tipo' => $tipo,
                ]);
            }
        }
    }