<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('footer', function (Blueprint $table) {
           $table->id();

            // Style
            $table->string('footer_bg_color')->nullable();
            $table->string('footer_text_color')->nullable();
            $table->string('footer_link_color')->nullable();

            // Kontak
            $table->string('footer_institution_name')->nullable();
            $table->text('footer_address')->nullable();
            $table->string('footer_phone')->nullable();
            $table->string('footer_email')->nullable();

            // Media Sosial
            $table->string('footer_youtube')->nullable();
            $table->string('footer_instagram')->nullable();
            $table->string('footer_facebook')->nullable();
            $table->string('footer_twitter')->nullable();

            // Layanan & Program
            $table->text('footer_services')->nullable();   // bisa multiline
            $table->text('footer_programs')->nullable();   // bisa multiline

            // Link Penting
            $table->text('footer_policies')->nullable();
            $table->text('footer_external_links')->nullable();

            // Jam Operasional
            $table->string('footer_weekday_hours')->nullable();
            $table->string('footer_saturday_hours')->nullable();
            $table->boolean('footer_show_hours')->default(true);

            // Hak Cipta & Credit
            $table->text('footer_copyright')->nullable();
            $table->string('footer_developer')->nullable();
            $table->boolean('footer_show_developer')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footer');
    }
};
