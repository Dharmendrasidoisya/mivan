<?php

namespace Botble\Faq\Forms;

use Illuminate\Support\Facades\DB;
use Botble\Base\Forms\FieldOptions\EditorFieldOption;
use Botble\Base\Forms\FieldOptions\SelectFieldOption;
use Botble\Base\Forms\FieldOptions\StatusFieldOption;
use Botble\Base\Forms\FieldOptions\TextareaFieldOption;
use Botble\Base\Forms\Fields\EditorField;
use Botble\Base\Forms\Fields\SelectField;
use Botble\Base\Forms\Fields\TextareaField;
use Botble\Base\Forms\FormAbstract;
use Botble\Faq\Http\Requests\FaqRequest;
use Botble\Faq\Models\Faq;
use Botble\Faq\Models\FaqCategory;
use Botble\Base\Forms\Fields\TextField;
use Botble\Base\Forms\FieldOptions\NameFieldOption;

class FaqForm extends FormAbstract

{
    public function setup(): void
    {
        $faqCategories = FaqCategory::query()
            ->pluck(
                'name',
                'id'
            )
            ->all();
        $projectCategories = DB::table('projectsposts')
            ->select('id', 'name')
            ->orderBy('name', 'asc')
            ->pluck('name', 'id') // returns [id => name]
            ->toArray();

        $this
            ->model(Faq::class)
            ->setValidatorClass(FaqRequest::class)
            ->add(
                'category_id',
                SelectField::class,
                SelectFieldOption::make()
                    ->label('Project Category')
                    ->choices(['' => 'Select Category'] + $projectCategories)
                    ->toArray()
            )

            
            ->add(
                'plot',
                TextField::class,
                NameFieldOption::make()
                    ->label('Plot No')
                    ->placeholder('Enter Plot Number')

                    ->toArray()
            )

            // ->add(
            //     'area',
            //     TextField::class,
            //     NameFieldOption::make()
            //         ->label('Area')
            //         ->placeholder('Enter Area (Sq.ft)')

            //         ->toArray()
            // )

              ->add(
                'area_sq_yard',
                TextField::class,
                NameFieldOption::make()
                    ->label('Area (Sq. Yard)')
                    ->placeholder('Enter Area in Sq. Yard')
                    ->toArray()
            )

            ->add(
                'area_sq_ft',
                TextField::class,
                NameFieldOption::make()
                    ->label('Area (Sq. Ft)')
                    ->placeholder('Enter Area in Sq. Ft')
                    ->toArray()
            )
            //  ->add(
            //     'price_sq_yard',
            //     TextField::class,
            //     NameFieldOption::make()
            //         ->label('Price (Per Sq. Yard)')
            //         ->placeholder('Enter Price per Sq. Yard')
            //         ->toArray()
            // )

            // ->add(
            //     'price_sq_ft',
            //     TextField::class,
            //     NameFieldOption::make()
            //         ->label('Price (Per Sq. Ft)')
            //         ->placeholder('Enter Price per Sq. Ft')
            //         ->toArray()
            // )

            // ->add(
            //     'north',
            //     TextField::class,
            //     NameFieldOption::make()
            //         ->label('North Side')
            //         ->placeholder('Enter North Side Details')

            //         ->toArray()
            // )

            // ->add(
            //     'south',
            //     TextField::class,
            //     NameFieldOption::make()
            //         ->label('South Side')
            //         ->placeholder('Enter South Side Details')

            //         ->toArray()
            // )

            // ->add(
            //     'east',
            //     TextField::class,
            //     NameFieldOption::make()
            //         ->label('East Side')
            //         ->placeholder('Enter East Side Details')

            //         ->toArray()
            // )

            // ->add(
            //     'west',
            //     TextField::class,
            //     NameFieldOption::make()
            //         ->label('West Side')
            //         ->placeholder('Enter West Side Details')

            //         ->toArray()
            // )

            // ->add(
            //     'price',
            //     TextField::class,
            //     NameFieldOption::make()
            //         ->label('Price')
            //         ->placeholder('Enter Price')

            //         ->toArray()
            // )

            ->add(
                'client',
                TextField::class,
                NameFieldOption::make()
                    ->label('Client Name')
                    ->placeholder('Enter Client Name')

                    ->toArray()
            )
            ->add(
            'plot_status',
            SelectField::class,
            SelectFieldOption::make()
                ->label('Plot Status')
                ->choices([
                    '' => 'Select Status',
                    'available' => 'Available',
                    'booked' => 'Booked',
                    'hold' => 'Hold',
                ])
                ->toArray()
        )
           
            ->add('status', SelectField::class, StatusFieldOption::make()->toArray())
            ->setBreakFieldPoint('status');
    }
}
