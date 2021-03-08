<?php

declare(strict_types=1);

namespace Roberts\WorkComp\Models;

use Tipoff\Support\Models\BaseModel;
use Tipoff\Support\Traits\HasCreator;
use Tipoff\Support\Traits\HasPackageFactory;
use Tipoff\Support\Traits\HasUpdater;

class ClassCode extends BaseModel
{
    use HasPackageFactory;
    use HasCreator;
    use HasUpdater;

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($code) {
            if (empty($code->name)) {
                throw new \Exception('Class code must have a number/name.');
            }
            if (empty($code->phraseology)) {
                throw new \Exception('Class code must have a phraseology.');
            }
            if (empty($code->construction)) {
                $code->construction = 0;
            }
            $code->generateTitle();
        });
    }

    public function generateTitle()
    {
        $this->title = 'Class Code ' . $this->name;
    }

    public function rates()
    {
        return $this->hasMany(Rate::class);
    }

    public function related_codes()
    {
        return $this->belongsToMany(ClassCode::class, 'related_codes', 'class_code_id', 'related_code_id');
    }
}
