<?php
    namespace App\Http\Controllers;

    use App\Models\Marca;
    use App\Models\Tipo;
    use Auth;
    use Illuminate\Http\Request;

    class WebController extends Controller{
        /** Carga la seccion principal. */
        public function inicio(){
            $tipos = Tipo::get();

            return view('web.inicio', [
                'tipos' => $tipos,
            ]);
        }
    }