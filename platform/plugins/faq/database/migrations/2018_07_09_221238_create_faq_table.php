<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('faq_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 120);
            $table->tinyInteger('order')->default(0);
            $table->string('status', 60)->default('published');
            $table->timestamps();
        });

        Schema::create('faqs', function (Blueprint $table) {
            $table->id();
            $table->text('question');
            $table->text('answer');
            $table->foreignId('category_id');
                 $table->string('plot', 255);
            $table->string('area', 255);
              $table->string('area_sq_yard', 255);
                $table->string('area_sq_ft', 255);
                  $table->string('price_sq_yard', 255);
                    $table->string('price_sq_ft', 255);
            $table->string('north', 255);
            $table->string('south', 255);
            $table->string('east', 255);
            $table->string('west', 255);
  
                  $table->string('price', 255);
            $table->string('client', 255);
            $table->string('plot_status', 255);

            
            $table->string('status', 60)->default('published');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('faq_categories');
        Schema::dropIfExists('faqs');
    }
};
