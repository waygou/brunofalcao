<?php

use Waygou\BrunoFalcao\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebsiteSchema extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            /* Columns */
            $table->increments('id');

            $table->string('slug');

            $table->string('title');
            $table->string('header_line');
            $table->string('header_baseline');

            $table->text('excerpt')
                  ->comments('Appears in the main page, as baseline text.');

            $table->text('body');

            $table->string('external_link')
                  ->nullable()
                  ->comments('Used in case I want to relate it with an external reference link.');

            $table->boolean('is_published')
                  ->default(false);

            $table->date('published_at')
                  ->nullable();

            $table->string('featured_image')
                  ->nullable();

            $table->string('image_1')
                  ->nullable();

            $table->string('image_2')
                  ->nullable();

            $table->string('image_3')
                  ->nullable();

            $table->string('image_4')
                  ->nullable();

            $table->string('image_5')
                  ->nullable();

            /* System columns */
            $table->timestamps();
            $table->softDeletes();

            /* Engine */
            $table->engine = 'InnoDB';

            /* Collation */
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';

            /* Indexes */
            $table->unique(['slug']);
        });

        /*** Data initialization **/

        User::create(['name' => 'Bruno Falcão',
                      'email' => 'bruno.falcao@live.com',
                      'password' => bcrypt('honda'), ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
