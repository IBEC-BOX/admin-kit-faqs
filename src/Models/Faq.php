<?php

namespace AdminKit\Faqs\Models;

use AdminKit\Core\Abstracts\Models\AbstractModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;
use AdminKit\Faqs\Database\Factories\FaqFactory;

class Faq extends AbstractModel
{
    use HasFactory;
    use HasTranslations;

    protected $fillable = [
        'title',
    ];

    protected $casts = [
        //
    ];

    protected $translatable = [
        'title',
    ];

    protected static function newFactory(): FaqFactory
    {
        return new FaqFactory();
    }
}
