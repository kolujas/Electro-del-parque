<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Web extends Model{
        /** @var array Las reglas de validación. */
        public static $reglas = [
            'contactar' => [
                'nombre' => 'required|min:2|max:60',
                'correo' => 'required|email|max:100',
                'telefono' => 'required|numeric',
                'descripcion' => 'required',
            ],
        ];
    }