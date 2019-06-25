<?php
    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

    class CrearTablaProductos extends Migration{
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up(){
            Schema::create('productos', function(Blueprint $table){
                $table->increments('id_producto');
                $table->string('nombre', 150);
                $table->text('modelos');
                $table->unsignedInteger('id_tipo');
                $table->unsignedInteger('id_marca');
                $table->unsignedInteger('id_usuario');
                $table->string('slug', 255);
                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down(){
            Schema::dropIfExists('productos');
        }
    }