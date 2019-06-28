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
                $table->text('modelo')->nullable();
                $table->unsignedInteger('id_tipo');
                $table->unsignedInteger('id_marca')->nullable();
                $table->unsignedInteger('id_usuario');
                $table->string('imagen');
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