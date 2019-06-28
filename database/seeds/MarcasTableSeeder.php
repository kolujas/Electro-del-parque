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
            Marca::create( [
            'id_marca'=>'1',
            'nombre'=>'ARTEMA',
            'id_usuario'=>'1',
            'slug'=>'artema'
            ] );
                        
            Marca::create( [
            'id_marca'=>'2',
            'nombre'=>'BCI',
            'id_usuario'=>'1',
            'slug'=>'bci'
            ] );
                        
            Marca::create( [
            'id_marca'=>'3',
            'nombre'=>'ABBOTT MEDICAL',
            'id_usuario'=>'1',
            'slug'=>'abbott-medical'
            ] );
                        
            Marca::create( [
            'id_marca'=>'4',
            'nombre'=>'ADVANCED AMR',
            'id_usuario'=>'1',
            'slug'=>'advanced-amr'
            ] );
                        
            Marca::create( [
            'id_marca'=>'5',
            'nombre'=>'AIR SHIELDS (Narco, Vickers)',
            'id_usuario'=>'1',
            'slug'=>'air-shields-(narco,-vickers)'
            ] );
                        
            Marca::create( [
            'id_marca'=>'6',
            'nombre'=>'BERGER',
            'id_usuario'=>'1',
            'slug'=>'berger'
            ] );
                        
            Marca::create( [
            'id_marca'=>'7',
            'nombre'=>'BEXEN',
            'id_usuario'=>'1',
            'slug'=>'bexen'
            ] );
                        
            Marca::create( [
            'id_marca'=>'8',
            'nombre'=>'BIOCARDIO',
            'id_usuario'=>'1',
            'slug'=>'biocardio'
            ] );
                        
            Marca::create( [
            'id_marca'=>'9',
            'nombre'=>'BIONET',
            'id_usuario'=>'1',
            'slug'=>'bionet'
            ] );
                        
            Marca::create( [
            'id_marca'=>'10',
            'nombre'=>'PHILIPS',
            'id_usuario'=>'1',
            'slug'=>'philips'
            ] );
                        
            Marca::create( [
            'id_marca'=>'11',
            'nombre'=>'MINDRAY T5/T8 BLT',
            'id_usuario'=>'1',
            'slug'=>'mindray-t5/t8-blt'
            ] );
                        
            Marca::create( [
            'id_marca'=>'12',
            'nombre'=>'GE DASH',
            'id_usuario'=>'1',
            'slug'=>'ge-dash'
            ] );
                        
            Marca::create( [
            'id_marca'=>'13',
            'nombre'=>'SIEMENS',
            'id_usuario'=>'1',
            'slug'=>'siemens'
            ] );
        }
    }