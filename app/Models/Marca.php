<?php
    namespace App\Models;

    use App\Models\Producto;
    use App\Models\Tipo;
    use App\User;
    use Cviebrock\EloquentSluggable\Sluggable;
    use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
    use Illuminate\Database\Eloquent\Model;

    class Marca extends Model{
        use Sluggable, SluggableScopeHelpers;

        /** @var string El nombre de la tabla. */
        protected $table = 'marcas';
        
        /** @var string El nombre de la PK. */
        protected $primaryKey = 'id_marca';

        /** @var array Los atributos que se van a cargar de forma masiva. */
        protected $fillable = [
            'nombre', 'id_usuario', 'slug'
        ];
        
        /** Trae el Usuario que coincidan con el PK. */
        public function usuario(){
            return $this->belongsTo(User::class, 'id_usuario', 'id_usuario');
        }
        
        /** Trae todos los Productos que coincidan con el PK. */
        public function productos(){
            return $this->hasMany(Producto::class, 'id_marca', 'id_marca');
        }
        
        /**
         * Devuelve la configuracion del slug del modelo.
         * 
         * @return array
         */
        public function sluggable(){
            return [
                'slug' => [
                    'source'	=> 'nombre',
                    'onUpdate'	=> true,
                ]
            ];
        }
    }