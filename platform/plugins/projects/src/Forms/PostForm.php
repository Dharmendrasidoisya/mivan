<?php

namespace Botble\Projects\Forms;

use Botble\Base\Forms\FieldOptions\ContentFieldOption;
use Botble\Base\Forms\FieldOptions\DescriptionFieldOption;
use Botble\Base\Forms\FieldOptions\NameFieldOption;
use Botble\Base\Forms\FieldOptions\OnOffFieldOption;
use Botble\Base\Forms\FieldOptions\RadioFieldOption;
use Botble\Base\Forms\FieldOptions\SelectFieldOption;
use Botble\Base\Forms\FieldOptions\StatusFieldOption;
use Botble\Base\Forms\FieldOptions\TagFieldOption;
use Botble\Base\Forms\Fields\EditorField;
use Botble\Base\Forms\Fields\MediaImageField;
use Botble\Base\Forms\Fields\OnOffField;
use Botble\Base\Forms\Fields\RadioField;
use Botble\Base\Forms\Fields\SelectField;
use Botble\Base\Forms\Fields\TagField;
use Botble\Base\Forms\Fields\TextareaField;
use Botble\Base\Forms\Fields\TextField;
use Botble\Base\Forms\Fields\TreeCategoryField;
use Botble\Base\Forms\FormAbstract;
use Botble\Projects\Http\Requests\PostRequest;
use Botble\Projects\Models\Category;
use Botble\Projects\Models\Post;
use Botble\Projects\Models\Tag;
use Botble\Base\Forms\Fields\MediaImagesField;
use Botble\Base\Forms\FieldOptions\EditorFieldOption;
use Botble\Base\Forms\Fields\MediaFileField;

class PostForm extends FormAbstract
{
    public function setup(): void
    {
        $productId = [];
        $this
            ->model(Post::class)
            ->setValidatorClass(PostRequest::class)
            ->hasTabs()
            ->add('name', TextField::class, NameFieldOption::make()->required()->toArray())
            ->add('description', TextareaField::class, DescriptionFieldOption::make()->toArray())
            ->add(
                'is_featured',
                OnOffField::class,
                OnOffFieldOption::make()
                    ->label(trans('core/base::forms.is_featured'))
                    ->defaultValue(false)
                    ->toArray()
            )
            ->add('content', EditorField::class, ContentFieldOption::make()->allowedShortcodes()->toArray())
            ->add('specification', EditorField::class, EditorFieldOption::make()->placeholder(trans('core/base::forms.description_placeholder'))->toArray())
            ->add('location', EditorField::class, EditorFieldOption::make()->placeholder(trans('core/base::forms.description_placeholder'))->toArray())
            // ->add('images[]', 'mediaImages', [
            //     'label' => 'Images',
            //     'is_multiple' => true,
            //     'values' => $productId ? json_decode($this->getModel()->images, true) : [],
            // ])
            ->add(
                'plot',
                TextField::class,
                NameFieldOption::make()
                    ->label('Plot No')
                    ->placeholder('Enter Plot Number')
                    ->required()
                    ->toArray()
            )

            ->add(
                'area',
                TextField::class,
                NameFieldOption::make()
                    ->label('Area')
                    ->placeholder('Enter Area (Sq.ft)')
                    ->required()
                    ->toArray()
            )

            ->add(
                'north',
                TextField::class,
                NameFieldOption::make()
                    ->label('North Side')
                    ->placeholder('Enter North Side Details')
                    ->required()
                    ->toArray()
            )

            ->add(
                'south',
                TextField::class,
                NameFieldOption::make()
                    ->label('South Side')
                    ->placeholder('Enter South Side Details')
                    ->required()
                    ->toArray()
            )

            ->add(
                'east',
                TextField::class,
                NameFieldOption::make()
                    ->label('East Side')
                    ->placeholder('Enter East Side Details')
                    ->required()
                    ->toArray()
            )

            ->add(
                'west',
                TextField::class,
                NameFieldOption::make()
                    ->label('West Side')
                    ->placeholder('Enter West Side Details')
                    ->required()
                    ->toArray()
            )

            ->add(
                'price',
                TextField::class,
                NameFieldOption::make()
                    ->label('Price')
                    ->placeholder('Enter Price')
                    ->required()
                    ->toArray()
            )

            ->add(
                'client',
                TextField::class,
                NameFieldOption::make()
                    ->label('Client Name')
                    ->placeholder('Enter Client Name')
                    ->required()
                    ->toArray()
            )




            ->add('status', SelectField::class, StatusFieldOption::make()->toArray())
            ->when(get_post_formats(true), function (PostForm $form, array $postFormats) {
                if (count($postFormats) > 1) {
                    $choices = [];

                    foreach ($postFormats as $postFormat) {
                        $choices[$postFormat[0]] = $postFormat[1];
                    }

                    $form
                        ->add(
                            'format_type',
                            RadioField::class,
                            RadioFieldOption::make()
                                ->label(trans('plugins/projects::posts.form.format_type'))
                                ->choices($choices)
                                ->toArray()
                        );
                }
            })
            ->add(
                'projectscategories[]',
                TreeCategoryField::class,
                SelectFieldOption::make()
                    ->label(trans('plugins/projects::posts.form.projectscategories'))
                    ->choices(get_projectscategories_with_children())
                    ->when($this->getModel()->id, function (SelectFieldOption $fieldOption) {
                        return $fieldOption->selected($this->getModel()->projectscategories()->pluck('category_id')->all());
                    })
                    ->when(! $this->getModel()->id, function (SelectFieldOption $fieldOption) {
                        return $fieldOption
                            ->selected(Category::query()
                                ->where('is_default', 1)
                                ->pluck('id')
                                ->all());
                    })
                    ->toArray()
            )
            ->add('image', MediaImageField::class)

            ->add('pdf', MediaFileField::class, [
                'label' => ' Brochure',
                'type' => 'file',
                'file_type' => 'themes/wowy/ads/upload',
                'value' => $this->getModel()->pdf ?? null,
            ])
             ->add('project_status', SelectField::class, SelectFieldOption::make()
                ->label('Project Status')
                ->choices([
                       'upcoming' => 'Upcoming',
                    'ongoing' => 'Ongoing',
                    'Sold Out' => 'Sold Out',
                ])
                ->toArray()
            )
            ->add(
                'stag',
                TagField::class,
                TagFieldOption::make()
                    ->label(trans('plugins/projects::posts.form.projectstags'))
                    ->when($this->getModel()->id, function (TagFieldOption $fieldOption) {
                        return $fieldOption
                            ->selected(
                                $this->getModel()
                                    ->projectstags()
                                    ->select('name')
                                    ->get()
                                    ->map(fn(Tag $item) => $item->name)
                                    ->implode(',')
                            );
                    })
                    ->placeholder(trans('plugins/projects::base.write_some_projectstags'))
                    ->ajaxUrl(route('projectstags.all'))
                    ->toArray()
            )
            ->setBreakFieldPoint('status');
    }
}
