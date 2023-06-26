<?php

namespace AdminKit\Faqs\Models;

use AdminKit\Core\Abstracts\Models\AbstractModel;
use AdminKit\Faqs\Database\Factories\FaqFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;

class Faq extends AbstractModel
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'admin_kit_faqs';

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
