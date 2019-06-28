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
            Tipo::create( [
            'id_tipo'=>'1',
            'nombre'=>'Oxicensores',
            'id_usuario'=>'1',
            'slug'=>'oxicensores',
            'imagen'=>'tipos/1.jpg'
            ] );
                        
            Tipo::create( [
            'id_tipo'=>'2',
            'nombre'=>'ECG',
            'id_usuario'=>'1',
            'slug'=>'ecg',
            'imagen'=>'tipos/2.jpg'
            ] );
                        
            Tipo::create( [
            'id_tipo'=>'3',
            'nombre'=>'EKG',
            'id_usuario'=>'1',
            'slug'=>'ekg',
            'imagen'=>'tipos/3.jpg'
            ] );
                        
            Tipo::create( [
            'id_tipo'=>'4',
            'nombre'=>'Presion Invasiva',
            'id_usuario'=>'1',
            'slug'=>'presion-invasiva',
            'imagen'=>'tipos/4.jpg'
            ] );
                        
            Tipo::create( [
            'id_tipo'=>'5',
            'nombre'=>'Presion no Invasiva',
            'id_usuario'=>'1',
            'slug'=>'presion-no-invasiva',
            'imagen'=>'tipos/5.jpg'
            ] );
                        
            Tipo::create( [
            'id_tipo'=>'6',
            'nombre'=>'Sensores de Temperatura',
            'id_usuario'=>'1',
            'slug'=>'sensores-de-temperatura',
            'imagen'=>'tipos/6.jpg'
            ] );
        }
    }