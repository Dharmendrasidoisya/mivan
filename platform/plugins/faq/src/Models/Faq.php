<?php

namespace Botble\Faq\Models;

use Botble\Base\Casts\SafeContent;
use Botble\Base\Enums\BaseStatusEnum;
use Botble\Base\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Faq extends BaseModel
{
    protected $table = 'faqs';

    protected $fillable = [
        'question',
        'answer',
        'category_id',
          'plot',
        'area',
        'area_sq_yard',
        'area_sq_ft',
        'price_sq_yard',
        'price_sq_ft',
        'north',
        'south',
        'east',
        'west',
        'price',
        'client',
	      'plot_status',
        'status',
    ];

    protected $casts = [
        'status' => BaseStatusEnum::class,
        'question' => SafeContent::class,
        'answer' => SafeContent::class,
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(FaqCategory::class, 'category_id')->withDefault();
    }
    public function project()
{
    return $this->belongsTo(\Botble\RealEstate\Models\Project::class, 'category_id');
}
}
