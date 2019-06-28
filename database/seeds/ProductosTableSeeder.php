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
            Producto::create( [
            'id_producto'=>'1',
            'modelo'=>'DIASCOPE',
            'id_tipo'=>'1',
            'id_marca'=>'1',
            'id_usuario'=>'1',
            'imagen'=>'productos/1.jpg'
            ] );
            
            Producto::create( [
            'id_producto'=>'2',
            'modelo'=>'S&W',
            'id_tipo'=>'1',
            'id_marca'=>'1',
            'id_usuario'=>'1',
            'imagen'=>'productos/2.jpg'
            ] );
            
            Producto::create( [
            'id_producto'=>'3',
            'modelo'=>'S&W',
            'id_tipo'=>'1',
            'id_marca'=>'1',
            'id_usuario'=>'1',
            'imagen'=>'productos/3.jpg'
            ] );
            
            Producto::create( [
            'id_producto'=>'4',
            'modelo'=>'3100, 3101, 3300, 3301, 3302, 3303, 3304, 3401, 3402, 3403, 6100, 9100, Advisor, Autocorr, Mini Torr, Mini Torr Plus',
            'id_tipo'=>'1',
            'id_marca'=>'2',
            'id_usuario'=>'1',
            'imagen'=>'productos/4.jpg'
            ] );
            
            Producto::create( [
            'id_producto'=>'5',
            'modelo'=>'3101, 6100, 9100, Advisor, Autocorr, Mini Torr, Mini Torr Plus',
            'id_tipo'=>'1',
            'id_marca'=>'2',
            'id_usuario'=>'1',
            'imagen'=>'productos/5.jpg'
            ] );
            
            Producto::create( [
            'id_producto'=>'6',
            'modelo'=>'AAEM, AAXM, ABBV, ABEM, Series, ARTM, DHS, EK40, EK50, EKR50, EO-8, EX50, Lifecare 5100/5200',
            'id_tipo'=>'2',
            'id_marca'=>'3',
            'id_usuario'=>'1',
            'imagen'=>'productos/6.jpg'
            ] );
            
            Producto::create( [
            'id_producto'=>'7',
            'modelo'=>'DH3',
            'id_tipo'=>'2',
            'id_marca'=>'3',
            'id_usuario'=>'1',
            'imagen'=>'productos/7.jpg'
            ] );
            
            Producto::create( [
            'id_producto'=>'8',
            'modelo'=>'Modelo 3R',
            'id_tipo'=>'2',
            'id_marca'=>'4',
            'id_usuario'=>'1',
            'imagen'=>'productos/8.jpg'
            ] );
            
            Producto::create( [
            'id_producto'=>'9',
            'modelo'=>'667',
            'id_tipo'=>'2',
            'id_marca'=>'5',
            'id_usuario'=>'1',
            'imagen'=>'productos/9.jpg'
            ] );
            
            Producto::create( [
            'id_producto'=>'10',
            'modelo'=>'Adult Monitors, AM46-1, Apnea Monitor 3000',
            'id_tipo'=>'2',
            'id_marca'=>'5',
            'id_usuario'=>'1',
            'imagen'=>'productos/10.jpg'
            ] );
            
            Producto::create( [
            'id_producto'=>'11',
            'modelo'=>'AS100, AS366-1, AS400, AS441, Athena 9240, 9241',
            'id_tipo'=>'2',
            'id_marca'=>'5',
            'id_usuario'=>'1',
            'imagen'=>'productos/11.jpg'
            ] );
            
            Producto::create( [
            'id_producto'=>'12',
            'modelo'=>'DMP-4A, Infa MBT-1',
            'id_tipo'=>'2',
            'id_marca'=>'5',
            'id_usuario'=>'1',
            'imagen'=>'productos/12.jpg'
            ] );
            
            Producto::create( [
            'id_producto'=>'13',
            'modelo'=>'HRRM 71-1/2, Porta-Fib I, II, III, System 5 (nuevo), System 6 (neonatal)',
            'id_tipo'=>'2',
            'id_marca'=>'5',
            'id_usuario'=>'1',
            'imagen'=>'productos/13.jpg'
            ] );
            
            Producto::create( [
            'id_producto'=>'14',
            'modelo'=>'CD184 - CD190 - CD191',
            'id_tipo'=>'3',
            'id_marca'=>'6',
            'id_usuario'=>'1',
            'imagen'=>'productos/14.jpg'
            ] );
            
            Producto::create( [
            'id_producto'=>'15',
            'modelo'=>'CD120 A / CD60M',
            'id_tipo'=>'3',
            'id_marca'=>'6',
            'id_usuario'=>'1',
            'imagen'=>'productos/15.jpg'
            ] );
            
            Producto::create( [
            'id_producto'=>'16',
            'modelo'=>'HIRUBEX, EDA 101A',
            'id_tipo'=>'3',
            'id_marca'=>'7',
            'id_usuario'=>'1',
            'imagen'=>'productos/16.jpg'
            ] );
            
            Producto::create( [
            'id_producto'=>'17',
            'modelo'=>null,
            'id_tipo'=>'3',
            'id_marca'=>'8',
            'id_usuario'=>'1',
            'imagen'=>'productos/17.jpg'
            ] );
            
            Producto::create( [
            'id_producto'=>'18',
            'modelo'=>'CARDIOCARE EK2000',
            'id_tipo'=>'3',
            'id_marca'=>'9',
            'id_usuario'=>'1',
            'imagen'=>'productos/18.jpg'
            ] );
            
            Producto::create( [
            'id_producto'=>'19',
            'modelo'=>'DATEX',
            'id_tipo'=>'4',
            'id_marca'=>null,
            'id_usuario'=>'1',
            'imagen'=>'productos/19.jpg'
            ] );
            
            Producto::create( [
            'id_producto'=>'20',
            'modelo'=>'GE MARQUETTE',
            'id_tipo'=>'4',
            'id_marca'=>null,
            'id_usuario'=>'1',
            'imagen'=>'productos/20.jpg'
            ] );
            
            Producto::create( [
            'id_producto'=>'21',
            'modelo'=>'PHILIPS',
            'id_tipo'=>'4',
            'id_marca'=>null,
            'id_usuario'=>'1',
            'imagen'=>'productos/21.jpg'
            ] );
            
            Producto::create( [
            'id_producto'=>'22',
            'modelo'=>'SIEMENS',
            'id_tipo'=>'4',
            'id_marca'=>null,
            'id_usuario'=>'1',
            'imagen'=>'productos/22.jpg'
            ] );
            
            Producto::create( [
            'id_producto'=>'23',
            'modelo'=>'SIEMENS DRÄGER',
            'id_tipo'=>'4',
            'id_marca'=>null,
            'id_usuario'=>'1',
            'imagen'=>'productos/23.jpg'
            ] );
            
            Producto::create( [
            'id_producto'=>'24',
            'modelo'=>'NYLON',
            'id_tipo'=>'5',
            'id_marca'=>null,
            'id_usuario'=>'1',
            'imagen'=>'productos/24.jpg'
            ] );
            
            Producto::create( [
            'id_producto'=>'25',
            'modelo'=>'IMPERMEABLE MARRÓN',
            'id_tipo'=>'5',
            'id_marca'=>null,
            'id_usuario'=>'1',
            'imagen'=>'productos/25.jpg'
            ] );
            
            Producto::create( [
            'id_producto'=>'26',
            'modelo'=>'100% ALGODÓN',
            'id_tipo'=>'5',
            'id_marca'=>null,
            'id_usuario'=>'1',
            'imagen'=>'productos/26.jpg'
            ] );
            
            Producto::create( [
            'id_producto'=>'27',
            'modelo'=>'NYLON  CAMARA Y BRAZAL INTEGRADOS',
            'id_tipo'=>'5',
            'id_marca'=>null,
            'id_usuario'=>'1',
            'imagen'=>'productos/27.jpg'
            ] );
            
            Producto::create( [
            'id_producto'=>'28',
            'modelo'=>'DESCARTABLE PVC CAMARA Y BRAZAL INTEGRADOS',
            'id_tipo'=>'5',
            'id_marca'=>null,
            'id_usuario'=>'1',
            'imagen'=>'productos/28.jpg'
            ] );
            
            Producto::create( [
            'id_producto'=>'29',
            'modelo'=>null,
            'id_tipo'=>'6',
            'id_marca'=>'10',
            'id_usuario'=>'1',
            'imagen'=>'productos/29.jpg'
            ] );
            
            Producto::create( [
            'id_producto'=>'30',
            'modelo'=>null,
            'id_tipo'=>'6',
            'id_marca'=>'11',
            'id_usuario'=>'1',
            'imagen'=>'productos/30.jpg'
            ] );
                        
            Producto::create( [
            'id_producto'=>'31',
            'modelo'=>null,
            'id_tipo'=>'6',
            'id_marca'=>'12',
            'id_usuario'=>'1',
            'imagen'=>'productos/31.jpg'
            ] );
                        
            Producto::create( [
            'id_producto'=>'32',
            'modelo'=>null,
            'id_tipo'=>'6',
            'id_marca'=>'13',
            'id_usuario'=>'1',
            'imagen'=>'productos/32.jpg'
            ] );
                        
            Producto::create( [
            'id_producto'=>'33',
            'modelo'=>null,
            'id_tipo'=>'6',
            'id_marca'=>'1',
            'id_usuario'=>'1',
            'imagen'=>'productos/33.jpg'
            ] );
        }
    }