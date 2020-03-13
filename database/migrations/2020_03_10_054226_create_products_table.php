<?php
 
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
  
class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sto');
            $table->string('merk');
            $table->string('type')->nullable();;
            $table->string('hostname');
            $table->string('ip_oam');
            $table->string('metro')->nullable();
            $table->string('metro_port_1')->nullable();
            $table->string('metro_port_2')->nullable();
            $table->string('vlan_inet')->nullable();
            $table->string('alamat')->nullable();
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
        Schema::dropIfExists('products');
    }
}