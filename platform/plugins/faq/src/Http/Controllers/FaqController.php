<?php

namespace Botble\Faq\Http\Controllers;

use Botble\Base\Http\Actions\DeleteResourceAction;
use Botble\Base\Http\Controllers\BaseController;
use Botble\Base\Supports\Breadcrumb;
use Botble\Faq\Forms\FaqForm;
use Botble\Faq\Http\Requests\FaqRequest;
use Botble\Faq\Models\Faq;
use Botble\Faq\Tables\FaqTable;
use Botble\Base\Facades\BaseHelper;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Validators\ValidationException as ExcelValidationException;
use Botble\Faq\Imports\FaqImport;
use Botble\Base\Http\Responses\BaseHttpResponse;
use Throwable;

class FaqController extends BaseController
{
    protected function breadcrumb(): Breadcrumb
    {
        return parent::breadcrumb()
            ->add(trans('plugins/faq::faq.name'), route('faq.index'));
    }

    public function index(FaqTable $table)
    {
        $this->pageTitle(trans('plugins/faq::faq.name'));

        return $table->renderTable();
    }

   public function getImport()
    {
        $this->pageTitle('Import Plots Data');
        return view('plugins/faq::import');
    }

    public function postImport(Request $request, BaseHttpResponse $response)
    {
        $request->validate([
            'import_file' => 'required|mimes:xlsx,xls,csv|max:5120', // 5MB limit
        ]);

        try {
            Excel::import(new FaqImport(), $request->file('import_file'));

            return $response
                ->setNextUrl(route('faq.index'))
                ->setMessage(' (Plot, Area, Status) successfully import thai gaya che!');
        } catch (ExcelValidationException $exception) {
            BaseHelper::logError($exception);

            $errors = [];

            foreach ($exception->failures() as $failure) {
                $errors[] = sprintf(
                    'Row %s (%s): %s',
                    $failure->row(),
                    $failure->attribute(),
                    implode(' ', $failure->errors())
                );
            }

            return $response
                ->setError()
                ->setMessage(implode(' | ', array_slice($errors, 0, 10)) ?: $exception->getMessage());
        } catch (Throwable $exception) {
            BaseHelper::logError($exception);

            return $response
                ->setError()
                ->setMessage(__('Could not import the file, please check the file format and try again.'));
        }
    }
    public function create()
    {
        $this->pageTitle(trans('plugins/faq::faq.create'));

        return FaqForm::create()->renderForm();
    }

    public function store(FaqRequest $request)
    {
        $form = FaqForm::create()->setRequest($request);
        $form->save();

        return $this
            ->httpResponse()
            ->setPreviousRoute('faq.index')
            ->setNextRoute('faq.edit', $form->getModel()->getKey())
            ->withCreatedSuccessMessage();
    }

    public function edit(Faq $faq)
    {
        $this->pageTitle(trans('core/base::forms.edit_item', ['name' => $faq->question]));

        return FaqForm::createFromModel($faq)->renderForm();
    }

    public function update(Faq $faq, FaqRequest $request)
    {
        FaqForm::createFromModel($faq)->setRequest($request)->save();

        return $this
            ->httpResponse()
            ->setPreviousRoute('faq.index')
            ->withUpdatedSuccessMessage();
    }

    public function destroy(Faq $faq)
    {
        return DeleteResourceAction::make($faq);
    }
}
