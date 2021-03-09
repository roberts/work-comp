<?php

declare(strict_types=1);

namespace Roberts\WorkComp\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Tipoff\Support\Models\BaseModel;
use Tipoff\Support\Traits\HasCreator;
use Tipoff\Support\Traits\HasPackageFactory;
use Tipoff\Support\Traits\HasUpdater;

class WcRate extends BaseModel
{
    use HasPackageFactory;
    use HasCreator;
    use HasUpdater;
    use SoftDeletes;

    public function class_code()
    {
        return $this->belongsTo(ClassCode::class);
    }
}
