<?php
    use App\Models\Tipo;
    use Illuminate\Database\Seeder;

    class TiposTableSeeder extends Seeder{
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run(){
            Tipo::create([
                'id_tipo' => '1',
                'nombre' => 'Tipo 1',
                'id_usuario' => '1',
                'slug' => 'tipo-1'
            ]);
            Tipo::create([
                'id_tipo' => '2',
                'nombre' => 'Tipo 2',
                'id_usuario' => '1',
                'slug' => 'tipo-2'
            ]);
            Tipo::create([
                'id_tipo' => '3',
                'nombre' => 'Tipo 3',
                'id_usuario' => '1',
                'slug' => 'tipo-3'
            ]);
            Tipo::create([
                'id_tipo' => '4',
                'nombre' => 'Tipo 4',
                'id_usuario' => '1',
                'slug' => 'tipo-4'
            ]);
            Tipo::create([
                'id_tipo' => '5',
                'nombre' => 'Tipo 5',
                'id_usuario' => '1',
                'slug' => 'tipo-5'
            ]);
            Tipo::create([
                'id_tipo' => '6',
                'nombre' => 'Tipo 6',
                'id_usuario' => '1',
                'slug' => 'tipo-6'
            ]);
        }
    }