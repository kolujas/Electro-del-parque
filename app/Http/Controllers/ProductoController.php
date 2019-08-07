<?php
    namespace App\Http\Controllers;

    use App\Models\Marca;
    use App\Models\Producto;
    use App\Models\Subproducto;
    use App\Models\Tipo;
    use Illuminate\Http\Request;

    class ProductoController extends Controller{
        /** Carga la seccion intermedia antes de los listados de algunos Tipos. */
        public function intermedio($slug){
            $tipo_actual = Tipo::findBySlug($slug);

            if(!Tipo::findBySlug($slug)){
                return redirect('/');
            }else if($tipo_actual->id_tipo != 3 && $tipo_actual->id_tipo != 5){
                return redirect('/' . $tipo_actual->slug . '/productos');
            }

            $tipos = Tipo::get();

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
                ], ], 5 => [
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
                ], ],
            ];

            return view('producto.intermedio', [
                'tipo_actual' => $tipo_actual,
                'tipos' => $tipos,
                'categorias' => $categorias[$tipo_actual->id_tipo],
            ]);
        }

        /** Carga el listado de productos que coincidan con el slug. */
        public function listado($slug, $marca_slug = null){
            $tipo_actual = Tipo::findBySlug($slug);

            if(!Tipo::findBySlug($slug)){
                return redirect('/');
            }
            
            $tipos = Tipo::get();
            $marcas = collect([]);
            $productos = Producto::where('id_tipo', '=', $tipo_actual->id_tipo)->with('marca')->get();

            if($tipo_actual->id_tipo == 4){
                $img = 'banners/' . $tipo_actual->id_tipo . '.jpeg';
            }else{
                foreach($productos as $producto){
                    if(!$marcas->contains($producto->marca)){
                        $marcas->push($producto->marca);
                    }
                }

                if($tipo_actual->id_tipo == 5){
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

                $img = 'banners/' . $tipo_actual->id_tipo . '.png';
            }

            $banner = (object) [
                'titulo' => 'Banner de ' . $tipo_actual->nombre,
                'leyenda' => '',
                'imagen' => $img,
            ];

            $titulo = '';
            $aclaracion = (object) [
                'tipo' => 0,
            ];

            if($tipo_actual->id_tipo == 3){
                $titulo = 'Cable Paciente';
            }else if($tipo_actual->id_tipo == 4){
                $aclaracion = (object) [
                    'tipo' => 1,
                    'titulo' => 'LOS MODELOS SON COMPATIBLES CON LAS SIGUIENTES MARCAS',
                    'texto' => 'BCI, Biolight, Bruker, Creative, Biocare, CSI, Choice, Comen, New Tech, General Tech, Datex, GE, Marquette, Corometrics, Trusignal, Ivy Biomedical, Datascope, MDE, Meditronic, Edan, Goldway, Invivo, Kontron, Mek, Masimo, Mindray, Nellcor, Nihon kohden, Novametrix, Hellige, Fukuda, Bosch, Cambridge, Medlab, Minota, Customed, Innomed, RGB, Welch Allyn, Von Berg, Esaote, Fidelity, Reynolds, Zoll, Trentina, Kanz, Mortara, DEGO, Colin (Omron), Bionet, NEC, Biosys, S&W/Artema, Huntleigh Health, Dolphin, Contec, PRIMEDIC, Drager, SIMED/Baxter, PACE TECH, PALCO, Lohmeier, Kernel Medical, Critikon, Landcom, Din Holter, Criticare, CAS Medical, Unicare-med, Dima, Digicare, Corpuls, Charmcare, Cardioline, etc.',
                ];
            }else if($tipo_actual->id_tipo == 5){
                $titulo = 'CUFFS / Brazal';
            }

            $marca_actual = (object)[
                'id_marca' => 0,
                'nombre' => 'Todos',
                'slug' => 'todos',
                'id_usuario' => 1,
            ];

            if($marca_slug !== null){
                if(!Marca::findBySlug($marca_slug)){
                    return redirect('/' . $tipo_actual->slug);
                }

                $marca_actual = Marca::findBySlug($marca_slug);
                $productos = Producto::where('id_tipo', '=', $tipo_actual->id_tipo)->where('id_marca', '=', $marca_actual->id_marca)->with('marca')->get();
            }

            return view('producto.listado', [
                'tipo_actual' => $tipo_actual,
                'marca_actual' => $marca_actual,
                'tipos' => $tipos,
                'marcas' => $marcas,
                'productos' => $productos,
                'titulo' => $titulo,
                'banner' => $banner,
                'aclaracion' => $aclaracion,
            ]);
        }

        /** Carga el sublistado de productos que coincidan con el slug. */
        public function sublistado($slug, $categoria){
            $tipo_actual = Tipo::findBySlug($slug);

            if(!Tipo::findBySlug($slug)){
                return redirect('/');
            }else if($tipo_actual->id_tipo != 3 && $tipo_actual->id_tipo != 5){
                return redirect('/' . $tipo_actual->slug . '/productos');
            }

            $tipos = Tipo::get();
            
            $aclaracion = (object) [
                'tipo' => 0,
            ];
            
            if($tipo_actual->id_tipo == 3){
                $titulo = 'Pinzas y Precordiales';
            }else{
                $titulo = 'Mangueras de PNI';
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
                ], ];
            }

            $productos = Subproducto::where('id_tipo', '=', $tipo_actual->id_tipo)->get();

            return view('producto.sublistado', [
                'tipo_actual' => $tipo_actual,
                'tipos' => $tipos,
                'productos' => $productos,
                'titulo' => $titulo,
            ]);
        }
    }