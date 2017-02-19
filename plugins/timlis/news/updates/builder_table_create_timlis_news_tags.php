<?php namespace Timlis\News\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTimlisNewsTags extends Migration
{
    public function up()
    {
        Schema::create('timlis_news_tags', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('timlis_news_tags');
    }
}
