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
                            'imagen' => 'categorias/cable-paciente.jpg',
                        ], (object) [
                            'id_categoria' => 2,
                            'nombre' => 'Pinzas y Precordiales',
                            'slug' => 'pinzas-y-precordiales',
                            'imagen' => 'categorias/pinzas-y-precordiales.jpg',
                        ],
                    ],
                    5 => [
                        (object) [
                            'id_categoria' => 1,
                            'nombre' => 'CUFFS / Brazal',
                            'slug' => 'cuffs-/-brazal',
                            'imagen' => 'categorias/cuffs.jpg',
                        ], (object) [
                            'id_categoria' => 2,
                            'nombre' => 'Mangueras de PNI',
                            'slug' => 'mangueras-de-pni',
                            'imagen' => 'categorias/mangueras-de-pni.png',
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
        public function listado($slug, $marca_slug = null){
            $tipos = Tipo::get();

            if(Tipo::findBySlug($slug)){
                $tipo = Tipo::findBySlug($slug);
                $tipo = Tipo::findBySlug($slug);
            }else{
                return redirect('/');
            }

            $marcas = collect([]);
            $productos = Producto::where('id_tipo', '=', $tipo->id_tipo)->with('marca')->get();

            if($tipo->id_tipo == 4){
                $img = 'banners/' . $tipo->id_tipo . '.jpeg';
            }else{
                foreach($productos as $producto){
                    if(!$marcas->contains($producto->marca)){
                        $marcas->push($producto->marca);
                    }
                }

                if($tipo->id_tipo == 5){
                    $marcas->prepend((object)[
                        'id_marca' => 0,
                        'nombre' => 'Todos',
                        'slug' => 'todos',
                        'id_usuario' => 1,
                    ]);
                }else{
                    $marcas->prepend((object)[
                        'id_marca' => 0,
                        'nombre' => 'Todas',
                        'slug' => 'todas',
                        'id_usuario' => 1,
                    ]);
                }

                $img = 'banners/' . $tipo->id_tipo . '.png';
            }

            $banner = (object) [
                'titulo' => 'Banner de ' . $tipo->nombre,
                'leyenda' => '',
                'imagen' => $img,
            ];

            $titulo = '';
            $aclaracion = (object) [
                'tipo' => 0,
            ];

            if($tipo->id_tipo == 3){
                $titulo = 'Cable Paciente';
            }else if($tipo->id_tipo == 4){
                $aclaracion = (object) [
                    'tipo' => 1,
                    'titulo' => 'LOS MODELOS SON COMPATIBLES CON LAS SIGUIENTES MARCAS',
                    'texto' => 'BCI, Biolight, Bruker, Creative, Biocare, CSI, Choice, Comen, New Tech, General Tech, Datex, GE, Marquette, Corometrics, Trusignal, Ivy Biomedical, Datascope, MDE, Meditronic, Edan, Goldway, Invivo, Kontron, Mek, Masimo, Mindray, Nellcor, Nihon kohden, Novametrix, Hellige, Fukuda, Bosch, Cambridge, Medlab, Minota, Customed, Innomed, RGB, Welch Allyn, Von Berg, Esaote, Fidelity, Reynolds, Zoll, Trentina, Kanz, Mortara, DEGO, Colin (Omron), Bionet, NEC, Biosys, S&W/Artema, Huntleigh Health, Dolphin, Contec, PRIMEDIC, Drager, SIMED/Baxter, PACE TECH, PALCO, Lohmeier, Kernel Medical, Critikon, Landcom, Din Holter, Criticare, CAS Medical, Unicare-med, Dima, Digicare, Corpuls, Charmcare, Cardioline, etc.',
                ];
            }else if($tipo->id_tipo == 5){
                $titulo = 'CUFFS / Brazal';
            }

            $marca = (object)[
                'id_marca' => 0,
                'nombre' => 'Todos',
                'slug' => 'todos',
                'id_usuario' => 1,
            ];

            if($marca_slug !== null){
                if(!Marca::findBySlug($marca_slug)){
                    return redirect('/' . $tipo->slug);
                }

                $marca = Marca::findBySlug($marca_slug);
                $productos = Producto::where('id_tipo', '=', $tipo->id_tipo)->where('id_marca', '=', $marca->id_marca)->with('marca')->get();
            }
            
            return view('producto.listado', [
                'marcas' => $marcas,
                'productos' => $productos,
                'tipos' => $tipos,
                'marca_actual' => $marca,
                'tipo' => $tipo,
                'banner' => $banner,
                'aclaracion' => $aclaracion,
                'titulo' => $titulo,
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
            
            $aclaracion = (object) [
                'tipo' => 0,
            ];
            
            if($tipo->id_tipo != 3 && $tipo->id_tipo != 5){
                return redirect('/' . $tipo->slug . '/productos');
            }else{
                if($tipo->id_tipo == 3){
                    $titulo = 'Pinzas y Precordiales';
                    $productos = [
                        (object) [
                            'id_producto' => 1,
                            'imagen' => '1.png',
                        ], (object) [
                            'id_producto' => 2,
                            'imagen' => '2.png',
                        ], (object) [
                            'id_producto' => 3,
                            'imagen' => '3.png',
                        ], (object) [
                            'id_producto' => 4,
                            'imagen' => '4.png',
                        ], (object) [
                            'id_producto' => 5,
                            'imagen' => '5.png',
                        ], (object) [
                            'id_producto' => 6,
                            'imagen' => '6.png',
                        ], (object) [
                            'id_producto' => 7,
                            'imagen' => '7.png',
                        ],
                    ];
                }else{
                    $aclaracion = (object) [
                        'tipo' => 2,
                        'listado' => [
                            'MINDRAY, MEC1000, EDAN , ETC',
                            'COMEN, ZONDAN, 3F',
                            'PHILIPS, MINDRAY T SERIES, IPM SERIES',
                            'GE-DINAMAP SERIES',
                            'DATEX OHMEDA SERIES',
                            'GE-DASH, EAGLE, SOLAR SERIES',
                            'NIHON KOHDEN',
                            'COLIN',
                        ],
                    ];
                    $titulo = 'Mangueras de PNI';
                    $productos = [
                        (object) [
                            'id_producto' => 1,
                            'imagen' => '1.png',
                        ], (object) [
                            'id_producto' => 2,
                            'imagen' => '2.png',
                        ], (object) [
                            'id_producto' => 3,
                            'imagen' => '3.png',
                        ], (object) [
                            'id_producto' => 4,
                            'imagen' => '4.png',
                        ], (object) [
                            'id_producto' => 5,
                            'imagen' => '5.png',
                        ], (object) [
                            'id_producto' => 6,
                            'imagen' => '6.png',
                        ],
                    ];
                }

                return view('producto.sublistado', [
                    'tipos' => $tipos,
                    'tipo' => $tipo,
                    'productos' => $productos,
                    'titulo' => $titulo,
                ]);
            }
        }
    }