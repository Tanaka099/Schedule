<?php 
use Illuminate\Database\Migrations\Migration; 
use Illuminate\Database\Schema\Blueprint; 
use Illuminate\Support\Facades\Schema; 

return new class extends Migration 

{ 
    /** 
     * Run the migrations. 
     * 
     * @return void 
     */ 
    public function up() 

    { 
        Schema::create('comments', function (Blueprint $table) { 
            $table->id(); 
            $table->unsignedBigInteger('user_id'); 
            $table->unsignedBigInteger('category_id'); 
            $table->string('comments',2500); 
            $table->timestamps(); 
        }); 
    } 
    /** 
     * Reverse the migrations. 
     * 
     * @return void 
     */ 
    public function down() 
    { 
        Schema::dropIfExists('comments'); 
    } 

}; 