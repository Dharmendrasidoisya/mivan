<?php

namespace Botble\Faq\Tables;
use Botble\Table\HeaderActions\HeaderAction;
use Botble\Faq\Models\Faq;
use Botble\Table\Abstracts\TableAbstract;
use Botble\Table\Actions\DeleteAction;
use Botble\Table\Actions\EditAction;
use Botble\Table\BulkActions\DeleteBulkAction;
use Botble\Table\BulkChanges\CreatedAtBulkChange;
use Botble\Table\BulkChanges\TextBulkChange;
use Botble\Table\Columns\CreatedAtColumn;
use Botble\Table\Columns\FormattedColumn;
use Botble\Table\Columns\IdColumn;
use Botble\Table\Columns\LinkableColumn;
use Botble\Table\Columns\StatusColumn;
use Botble\Table\HeaderActions\CreateHeaderAction;
use Illuminate\Database\Eloquent\Builder;
use Botble\Table\HeaderActions\ButtonAction;
class FaqTable extends TableAbstract
{
    public function setup(): void
    {
        $this
            ->model(Faq::class)
            ->addColumns([
                IdColumn::make(),

                // LinkableColumn::make('question')
                //     ->title(trans('plugins/faq::faq.question'))
                //     ->route('faq.edit')
                //     ->alignStart(),
FormattedColumn::make('project_name')
    ->title('Project Name')
    ->name('projectsposts.name')   // ✅ IMPORTANT (search will use this)
    ->alignStart(),

                FormattedColumn::make('plot')->title('Plot')->alignStart(),
                  FormattedColumn::make('client')->title('Client')->alignStart(), // <-- added
        FormattedColumn::make('plot_status')->title('Plot Status')->alignStart(), // <-- added
                // FormattedColumn::make('area')->title('Area')->alignStart(),
                // FormattedColumn::make('north')->title('North')->alignStart(),
                // FormattedColumn::make('south')->title('South')->alignStart(),
                // FormattedColumn::make('east')->title('East')->alignStart(),
                // FormattedColumn::make('west')->title('West')->alignStart(),
                // FormattedColumn::make('price')->title('Price')->alignStart(),
                // FormattedColumn::make('client')->title('Client')->alignStart(),
                // FormattedColumn::make('plot_status')->title('Plot Status')->alignStart(),
                FormattedColumn::make('area_sq_yard')->title('Area (Sq Yard)')->alignStart(),
                FormattedColumn::make('area_sq_ft')->title('Area (Sq Ft)')->alignStart(),
                // FormattedColumn::make('price_sq_yard')->title('Price / Sq Yard')->alignStart(),
                // FormattedColumn::make('price_sq_ft')->title('Price / Sq Ft')->alignStart(),


                CreatedAtColumn::make(),
                StatusColumn::make(),
            ])

            ->addHeaderAction(CreateHeaderAction::make()->route('faq.create'))
   
->addHeaderAction(
    HeaderAction::make('import')
        ->label('Import Excel')
        ->url(route('faq.import')) // We will create this route next
        ->icon('fas fa-file-import')
        ->color('info')
)
            ->addActions([
                EditAction::make()->route('faq.edit'),
                DeleteAction::make()->route('faq.destroy'),
            ])
            ->addBulkAction(DeleteBulkAction::make()->permission('faq.destroy'))
            ->addBulkChanges([
                TextBulkChange::make()
                    ->name('question')
                    ->title(trans('plugins/faq::faq.question')),
                CreatedAtBulkChange::make(),
            ])
           ->queryUsing(function (Builder $query) {
    return $query
        ->leftJoin('projectsposts', 'faqs.category_id', '=', 'projectsposts.id')
        ->select([
            'faqs.id',
            'faqs.question', 
            'faqs.plot',
            'faqs.client',         
            'faqs.plot_status',   
            'faqs.area',
            'faqs.north',
            'faqs.south',
            'faqs.east',
            'faqs.west',
            'faqs.price',
            'faqs.client',
            // 'faqs.plot_status',
            'faqs.area_sq_yard',
            'faqs.area_sq_ft',
            'faqs.price_sq_yard',
            'faqs.price_sq_ft',
            'faqs.created_at',
            'faqs.answer',
            'faqs.category_id',
            'faqs.status',
            'projectsposts.name as project_name',
        ]);
});

    }
}
