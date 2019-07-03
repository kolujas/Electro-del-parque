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
            if(Tipo::findBySlug($slug)){
                $tipo = Tipo::findBySlug($slug);
            }else{
                return redirect('/');
            }

            if($tipo->id_tipo != 3 && $tipo->id_tipo != 5){
                return redirect('/' . $tipo->slug . '/productos');
            }else{
                $categorias = [
                    3 => [
                        (object) [
                            'id_categoria' => 1,
                            'nombre' => 'Cable Paciente',
                            'slug' => 'cable-paciente',
                        ], (object) [
                            'id_categoria' => 2,
                            'nombre' => 'Pinzas y Precordiales',
                            'slug' => 'pinzas-y-precordiales',
                        ],
                    ],
                    5 => [
                        (object) [
                            'id_categoria' => 1,
                            'nombre' => 'CUFFS / Brazal',
                            'slug' => 'cuffs-/-brazal',
                        ], (object) [
                            'id_categoria' => 2,
                            'nombre' => 'Mangueras de PNI',
                            'slug' => 'mangueras-de-pni',
                        ],
                    ],
                ];

                return view('producto.intermedio', [
                    'tipos' => $tipos,
                    'tipo' => $tipo,
                    'categorias' => $categorias[$tipo->id_tipo],
                ]);
            }
        }

        /** Carga el listado de productos que coincidan con el slug. */
        public function listado($slug){
            $tipos = Tipo::get();

            if(Tipo::findBySlug($slug)){
                $tipo = Tipo::findBySlug($slug);
            }else{
                return redirect('/');
            }

            $marcas = Marca::get();
            $productos = Producto::where('id_tipo', '=', $tipo->id_tipo)->with('marca')->get();

            if($tipo->id_tipo == 4){
                $img = 'banners/' . $tipo->id_tipo . '.jpeg';
            }else{
                $img = 'banners/' . $tipo->id_tipo . '.png';
            }

            $banner = (object) [
                'titulo' => 'Banner de ' . $tipo->nombre,
                'leyenda' => '',
                'imagen' => $img,
            ];

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
            
            if(Tipo::findBySlug($slug)){
                $tipo = Tipo::findBySlug($slug);
            }else{
                return redirect('/');
            }
            
            if($tipo->id_tipo != 3 && $tipo->id_tipo != 5){
                return redirect('/' . $tipo->slug . '/productos');
            }else{
                if($tipo->id_tipo == 4){
                    $img = 'banners/' . $tipo->id_tipo . '.jpeg';
                }else{
                    $img = 'banners/' . $tipo->id_tipo . '.png';
                }
    
                $banner = (object) [
                    'titulo' => 'Banner de ' . $tipo->nombre,
                    'leyenda' => '',
                    'imagen' => $img,
                ];
    
                $productos = [
                    (object) [
                        'id_producto' => 1,
                        'imagen' => 'https://mdbootstrap.com/img/Photos/Others/images/16.jpg',
                    ], (object) [
                        'id_producto' => 2,
                        'imagen' => 'https://mdbootstrap.com/img/Photos/Others/images/16.jpg',
                    ], (object) [
                        'id_producto' => 3,
                        'imagen' => 'https://mdbootstrap.com/img/Photos/Others/images/16.jpg',
                    ], (object) [
                        'id_producto' => 4,
                        'imagen' => 'https://mdbootstrap.com/img/Photos/Others/images/16.jpg',
                    ], (object) [
                        'id_producto' => 5,
                        'imagen' => 'https://mdbootstrap.com/img/Photos/Others/images/16.jpg',
                    ],
                ];
    
                $aclaracion = '';
                if($tipo->id_tipo == 4 || $tipo->id_tipo == 5){
                    $aclaracion = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam magni iure voluptatum soluta ut porro.';
                }

                return view('producto.sublistado', [
                    'tipos' => $tipos,
                    'tipo' => $tipo,
                    'productos' => $productos,
                    'banner' => $banner,
                    'aclaracion' => $aclaracion,
                ]);
            }
        }
    }