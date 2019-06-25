<?php
    use App\Models\Producto;
    use Illuminate\Database\Seeder;

    class ProductosTableSeeder extends Seeder{
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run(){
            Producto::create([
                'id_producto' => '1',
                'nombre' => 'Producto 1',
                'modelos' => 'Modelo A, Modelo B, Modelo C',
                'id_tipo' => '1',
                'id_marca' => '1',
                'id_usuario' => '1',
                'slug' => 'producto-1'
            ]);
            Producto::create([
                'id_producto' => '2',
                'nombre' => 'Producto 2',
                'modelos' => 'Modelo A, Modelo B, Modelo C',
                'id_tipo' => '1',
                'id_marca' => '2',
                'id_usuario' => '1',
                'slug' => 'producto-2'
            ]);
            Producto::create([
                'id_producto' => '3',
                'nombre' => 'Producto 1',
                'modelos' => 'Modelo A, Modelo B, Modelo C',
                'id_tipo' => '2',
                'id_marca' => '3',
                'id_usuario' => '1',
                'slug' => 'producto-1'
            ]);
            Producto::create([
                'id_producto' => '4',
                'nombre' => 'Producto 2',
                'modelos' => 'Modelo A, Modelo B, Modelo C',
                'id_tipo' => '2',
                'id_marca' => '4',
                'id_usuario' => '1',
                'slug' => 'producto-2'
            ]);
            Producto::create([
                'id_producto' => '5',
                'nombre' => 'Producto 1',
                'modelos' => 'Modelo A, Modelo B, Modelo C',
                'id_tipo' => '3',
                'id_marca' => '5',
                'id_usuario' => '1',
                'slug' => 'producto-1'
            ]);
            Producto::create([
                'id_producto' => '6',
                'nombre' => 'Producto 2',
                'modelos' => 'Modelo A, Modelo B, Modelo C',
                'id_tipo' => '3',
                'id_marca' => '6',
                'id_usuario' => '1',
                'slug' => 'producto-2'
            ]);
            Producto::create([
                'id_producto' => '7',
                'nombre' => 'Producto 1',
                'modelos' => 'Modelo A, Modelo B, Modelo C',
                'id_tipo' => '4',
                'id_marca' => '7',
                'id_usuario' => '1',
                'slug' => 'producto-1'
            ]);
            Producto::create([
                'id_producto' => '8',
                'nombre' => 'Producto 2',
                'modelos' => 'Modelo A, Modelo B, Modelo C',
                'id_tipo' => '4',
                'id_marca' => '8',
                'id_usuario' => '1',
                'slug' => 'producto-2'
            ]);
            Producto::create([
                'id_producto' => '9',
                'nombre' => 'Producto 1',
                'modelos' => 'Modelo A, Modelo B, Modelo C',
                'id_tipo' => '5',
                'id_marca' => '9',
                'id_usuario' => '1',
                'slug' => 'producto-1'
            ]);
            Producto::create([
                'id_producto' => '10',
                'nombre' => 'Producto 2',
                'modelos' => 'Modelo A, Modelo B, Modelo C',
                'id_tipo' => '5',
                'id_marca' => '10',
                'id_usuario' => '1',
                'slug' => 'producto-2'
            ]);
            Producto::create([
                'id_producto' => '11',
                'nombre' => 'Producto 1',
                'modelos' => 'Modelo A, Modelo B, Modelo C',
                'id_tipo' => '6',
                'id_marca' => '11',
                'id_usuario' => '1',
                'slug' => 'producto-1'
            ]);
            Producto::create([
                'id_producto' => '12',
                'nombre' => 'Producto 2',
                'modelos' => 'Modelo A, Modelo B, Modelo C',
                'id_tipo' => '6',
                'id_marca' => '12',
                'id_usuario' => '1',
                'slug' => 'producto-2'
            ]);
        }
    }