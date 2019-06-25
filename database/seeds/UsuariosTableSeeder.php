<?php
    use App\User;
    use Illuminate\Database\Seeder;

    class UsuariosTableSeeder extends Seeder{
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run(){
            User::create([
                'id_usuario' => '1',
                'nombre' => 'Dummy',
                'correo' => 'dummy@gmail.com',
                'slug' => 'dummy',
                'clave' => \Hash::make('12345678')
            ]);
        }
    }