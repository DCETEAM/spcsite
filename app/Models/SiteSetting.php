<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class SiteSetting extends Model
{
    protected $fillable = [
        'accent',
        'accent_dark',
        'hero_navy',
        'hero_gold',
        'hero_blue',
        'footer_bg',
        'font_body',
        'font_heading',
        'text_primary',
        'text_muted',
        'bg_image',
        'bg_overlay',
    ];

    public static function fontOptions(): array
    {
        return [
            'Poppins' => 'Poppins',
            'Inter' => 'Inter',
            'Roboto' => 'Roboto',
            'Montserrat' => 'Montserrat',
            'Open Sans' => 'Open Sans',
            'Lato' => 'Lato',
            'Playfair Display' => 'Playfair Display',
            'Libre Baskerville' => 'Libre Baskerville',
        ];
    }

    public static function defaults(): array
    {
        return [
            'accent' => '#45aae3',
            'accent_dark' => '#2e96d4',
            'hero_navy' => '#001a3d',
            'hero_gold' => '#ffb800',
            'hero_blue' => '#3a9dff',
            'footer_bg' => '#060f1a',
            'font_body' => 'Poppins',
            'font_heading' => 'Poppins',
            'text_primary' => '#001a3d',
            'text_muted' => '#475569',
            'bg_image' => null,
            'bg_overlay' => 0,
        ];
    }

    public function bgImageUrl(): string
    {
        $file = $this->bg_image;

        if ($file && file_exists(public_path('assets/img/' . $file))) {
            return asset('assets/img/' . $file);
        }

        return asset('assets/img/site-bg.png');
    }

    public static function current(): self
    {
        return Cache::rememberForever('site_settings', function () {
            $settings = self::query()->first();

            if (!$settings) {
                $settings = self::query()->create(self::defaults());
            }

            return $settings;
        });
    }

    public static function clearCache(): void
    {
        Cache::forget('site_settings');
    }

    public function getFontBodyAttribute(?string $value): string
    {
        return $value ?: self::defaults()['font_body'];
    }

    public function getFontHeadingAttribute(?string $value): string
    {
        return $value ?: self::defaults()['font_heading'];
    }

    public function getTextPrimaryAttribute(?string $value): string
    {
        return $value ?: self::defaults()['text_primary'];
    }

    public function getTextMutedAttribute(?string $value): string
    {
        return $value ?: self::defaults()['text_muted'];
    }

    protected static function booted(): void
    {
        static::saved(fn () => self::clearCache());
        static::deleted(fn () => self::clearCache());
    }
}
