<?php
    use App\Models\Marca;
    use Illuminate\Database\Seeder;

    class MarcasTableSeeder extends Seeder{
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run(){
            Marca::create([
                'id_marca' => '1',
                'nombre' => 'Marca 1',
                'id_tipo' => '1',
                'id_usuario' => '1',
                'slug' => 'marca-1'
            ]);
            Marca::create([
                'id_marca' => '2',
                'nombre' => 'Marca 2',
                'id_tipo' => '1',
                'id_usuario' => '1',
                'slug' => 'marca-2'
            ]);
            Marca::create([
                'id_marca' => '3',
                'nombre' => 'Marca 1',
                'id_tipo' => '2',
                'id_usuario' => '1',
                'slug' => 'marca-1'
            ]);
            Marca::create([
                'id_marca' => '4',
                'nombre' => 'Marca 2',
                'id_tipo' => '2',
                'id_usuario' => '1',
                'slug' => 'marca-2'
            ]);
            Marca::create([
                'id_marca' => '5',
                'nombre' => 'Marca 1',
                'id_tipo' => '3',
                'id_usuario' => '1',
                'slug' => 'marca-1'
            ]);
            Marca::create([
                'id_marca' => '6',
                'nombre' => 'Marca 2',
                'id_tipo' => '3',
                'id_usuario' => '1',
                'slug' => 'marca-2'
            ]);
            Marca::create([
                'id_marca' => '7',
                'nombre' => 'Marca 1',
                'id_tipo' => '4',
                'id_usuario' => '1',
                'slug' => 'marca-1'
            ]);
            Marca::create([
                'id_marca' => '8',
                'nombre' => 'Marca 2',
                'id_tipo' => '4',
                'id_usuario' => '1',
                'slug' => 'marca-2'
            ]);
            Marca::create([
                'id_marca' => '9',
                'nombre' => 'Marca 1',
                'id_tipo' => '5',
                'id_usuario' => '1',
                'slug' => 'marca-1'
            ]);
            Marca::create([
                'id_marca' => '10',
                'nombre' => 'Marca 2',
                'id_tipo' => '5',
                'id_usuario' => '1',
                'slug' => 'marca-2'
            ]);
            Marca::create([
                'id_marca' => '11',
                'nombre' => 'Marca 1',
                'id_tipo' => '6',
                'id_usuario' => '1',
                'slug' => 'marca-1'
            ]);
            Marca::create([
                'id_marca' => '12',
                'nombre' => 'Marca 2',
                'id_tipo' => '6',
                'id_usuario' => '1',
                'slug' => 'marca-2'
            ]);
        }
    }