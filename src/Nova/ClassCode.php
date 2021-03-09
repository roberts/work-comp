<?php

declare(strict_types=1);

namespace Roberts\WorkComp\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;
use Tipoff\Support\Nova\BaseResource;

class ClassCode extends BaseResource
{
    public static $model = \Roberts\WorkComp\Models\ClassCode::class;

    public static $title = 'name';

    public static $search = [
        'name',
        'phraseology',
    ];

    public static $group = 'Class Codes';

    public function fieldsForIndex(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('Name')->sortable(),
            Text::make('Phraseology')->sortable(),
        ];
    }

    public function fields(Request $request)
    {
        return [
            Text::make('Name')->required(),
            Slug::make('Slug')->from('Name'),
            Text::make('Title')->exceptOnForms(),
            Text::make('Phraseology')->required(),
            Textarea::make('Description')->rows(10)->alwaysShow()->nullable(),
            Boolean::make('Construction')->nullable(),

            HasMany::make('WcRates'),

            HasMany::make('Related Codes', 'related_codes', \Roberts\WorkComp\Nova\ClassCode::class),

            new Panel('Data Fields', $this->dataFields()),
        ];
    }

    protected function dataFields(): array
    {
        return array_filter([
            ID::make(),
            nova('user') ? BelongsTo::make('Created By', 'creator', nova('user'))->exceptOnForms() : null,
            DateTime::make('Created At')->exceptOnForms(),
            nova('user') ? BelongsTo::make('Updated By', 'updater', nova('user'))->exceptOnForms() : null,
            DateTime::make('Updated At')->exceptOnForms(),
        ]);
    }
}
