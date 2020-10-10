<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        $faker = Faker::create();
        foreach(range(0,10)as $i){
            DB::table('articles')->insert([
                //'id' =>$faker->number,
                'title' => $faker->text($maxNbChars=10),
                'content' => $faker->text($maxNbChars=250),
                'featured_image'=>$faker->imageUrl($widlh=640,$height=480),
            ]);
    }
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artikel');
    }
}

//Schema::create('articles', function (Blueprint $table) {
  //  $table->bigIncrements('id');
    //$table->String('title');
    //$table->text('content');
    //$table->text('featured_image');
    //$table->timestamps();