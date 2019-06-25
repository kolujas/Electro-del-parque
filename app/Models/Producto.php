<?php
    namespace App\Models;

    use App\Models\Marca;
    use App\Models\Tipo;
    use App\User;
    use Cviebrock\EloquentSluggable\Sluggable;
    use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
    use Illuminate\Database\Eloquent\Model;

    class Producto extends Model{
        use Sluggable, SluggableScopeHelpers;

        /** @var string El nombre de la tabla. */
        protected $table = 'productos';
        
        /** @var string El nombre de la PK. */
        protected $primaryKey = 'id_producto';

        /** @var array Los atributos que se van a cargar de forma masiva. */
        protected $fillable = [
            'nombre', 'modelos', 'id_tipo', 'id_marca', 'id_usuario', 'slug'
        ];
        
        /** Trae el Tipo que coincidan con el PK. */
        public function tipo(){
            return $this->belongsTo(Tipo::class, 'id_tipo', 'id_tipo');
        }
        
        /** Trae el Marca que coincidan con el PK. */
        public function marca(){
            return $this->belongsTo(Marca::class, 'id_marca', 'id_marca');
        }
        
        /** Trae el Usuario que coincidan con el PK. */
        public function usuario(){
            return $this->belongsTo(User::class, 'id_usuario', 'id_usuario');
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