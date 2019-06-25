<?php
    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

    class CrearTablaMarcas extends Migration{
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up(){
            Schema::create('marcas', function(Blueprint $table){
                $table->increments('id_marca');
                $table->string('nombre', 150);
                $table->unsignedInteger('id_tipo');
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
            Schema::dropIfExists('marcas');
        }
    }