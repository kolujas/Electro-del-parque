<?php
    namespace App\Http\Controllers;

    use App\Mail\Contactar;
    use App\Mail\Preguntar;
    use App\Models\Tipo;
    use App\Models\Web;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Mail;

    class CorreoController extends Controller{
        /** 
         * Contacta a un Usuario con los Administradores.
         * 
         * @param $request Request
         */
        public function contactar(Request $request){
            $inputData = $request->input();

            $request->validate(Web::$reglas['contactar'], [
                'nombre.required' => 'El nombre es obligatorio.',
                'nombre.min' => 'El nombre no puede tener menos de :min caracteres.',
                'nombre.max' => 'El nombre no puede tener más de :max caracteres.',
                'correo.required' => 'El correo es obligatorio.',
                'correo.max' => 'El correo no puede tener más de :max caracteres.',
                'telefono.required' => 'El teléfono es obligatorio.',
                'telefono.numeric' => 'El teléfono debe ser un valor numérico.',
                'mensaje.required' => 'El mensaje de no puede estar vacío.',
            ]);

            $objDemo = (object) $inputData;

            Mail::to('info@electrodelparque.com')->send(new Contactar($objDemo));

            return redirect()->route('correo.gracias');
        }

        /** 
         * Contacta a un Usuario con los Administradores.
         * 
         * @param $request Request
         */
        public function preguntar(Request $request){
            $inputData = $request->input();

            $request->validate(Web::$reglas['preguntar'], [
                'nombre.required' => 'El nombre es obligatorio.',
                'nombre.min' => 'El nombre no puede tener menos de :min caracteres.',
                'nombre.max' => 'El nombre no puede tener más de :max caracteres.',
                'correo.required' => 'El correo es obligatorio.',
                'correo.max' => 'El correo no puede tener más de :max caracteres.',
                'asunto.required' => 'El asunto es obligatorio.',
                'telefono.required' => 'El teléfono es obligatorio.',
                'telefono.numeric' => 'El teléfono debe ser un valor numérico.',
                'mensaje.required' => 'El mensaje no puede estar vacío.',
            ]);

            $objDemo = (object) $inputData;

            Mail::to('info@electrodelparque.com')->send(new Preguntar($objDemo));

            return redirect()->route('correo.gracias');
        }

        /** De vuelve la visgta de mensaje de exito. */
        public function gracias(){
            $tipos = Tipo::get();

            return view('correo.gracias', [
                'tipos' => $tipos,
            ]);
        }
    }