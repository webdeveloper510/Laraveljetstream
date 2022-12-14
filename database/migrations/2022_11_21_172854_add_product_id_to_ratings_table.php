<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<<< HEAD:database/migrations/2022_11_20_081156_add_product_id.php
class AddProductId extends Migration
========
class AddProductIdToRatingsTable extends Migration
>>>>>>>> fb2ceaf992067219ed835a97e669cd16ed63e021:database/migrations/2022_11_21_172854_add_product_id_to_ratings_table.php
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ratings', function (Blueprint $table) {
<<<<<<<< HEAD:database/migrations/2022_11_20_081156_add_product_id.php
            //
========
>>>>>>>> fb2ceaf992067219ed835a97e669cd16ed63e021:database/migrations/2022_11_21_172854_add_product_id_to_ratings_table.php
            $table->integer('product_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ratings', function (Blueprint $table) {
            //
        });
    }
}
