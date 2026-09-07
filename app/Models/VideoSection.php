<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'eyebrow',
        'heading',
        'description',
        'button_text',
        'button_link',
        'video_url',
        'poster_url',
    ];

    /**
     * Get default fallback data.
     */
    public static function getDefaultData(): array
    {
        return [
            'eyebrow' => 'EXCELLENCE IN CRAFTSMANSHIP',
            'heading' => 'Watch How We Transform London Homes',
            'description' => 'From complex structural steelwork to high-end interior finishes, see our expert team at work across West London. We deliver fixed-price quality, full building control compliance, and 5-year workmanship guarantees on every project.',
            'button_text' => 'Explore Our Services',
            'button_link' => '#services',
            'video_url' => '/video.mp4',
            'poster_url' => null,
        ];
    }

    /**
     * Fetch active video section content with DB and JSON fallbacks.
     */
    public static function getContent(): array
    {
        try {
            $section = self::first();
            if ($section) {
                return [
                    'eyebrow' => $section->eyebrow ?: 'EXCELLENCE IN CRAFTSMANSHIP',
                    'heading' => $section->heading ?: 'Watch How We Transform London Homes',
                    'description' => $section->description ?: 'From complex structural steelwork to high-end interior finishes, see our expert team at work across West London.',
                    'button_text' => $section->button_text,
                    'button_link' => $section->button_link,
                    'video_url' => $section->video_url ?: '/video.mp4',
                    'poster_url' => $section->poster_url,
                ];
            }
        } catch (\Throwable $e) {
            // Log or fallback
        }

        $jsonPath = storage_path('app/video_section.json');
        if (file_exists($jsonPath)) {
            $data = json_decode(file_get_contents($jsonPath), true);
            if (is_array($data)) {
                return array_merge(self::getDefaultData(), $data);
            }
        }

        return self::getDefaultData();
    }
}
