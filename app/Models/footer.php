<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class footer extends Model
{
    //
    use HasFactory;
    protected $table = 'footer';
    protected $fillable = [
        // Style
        'footer_bg_color',
        'footer_text_color',
        'footer_link_color',

        // Kontak
        'footer_institution_name',
        'footer_address',
        'footer_phone',
        'footer_email',

        // Media Sosial
        'footer_youtube',
        'footer_instagram',
        'footer_facebook',
        'footer_twitter',

        // Layanan & Program
        'footer_services',
        'footer_programs',

        // Link Penting
        'footer_policies',
        'footer_external_links',

        // Jam Operasional
        'footer_weekday_hours',
        'footer_saturday_hours',
        'footer_show_hours',

        // Hak Cipta & Developer
        'footer_copyright',
        'footer_developer',
        'footer_show_developer',
    ];
}
