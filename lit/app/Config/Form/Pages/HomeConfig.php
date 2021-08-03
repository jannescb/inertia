<?php

namespace Lit\Config\Form\Pages;

use Ignite\Crud\Config\FormConfig;
use Ignite\Crud\CrudShow;
use Lit\Http\Controllers\Form\Pages\HomeController;

class HomeConfig extends FormConfig
{
    /**
     * Controller class.
     *
     * @var string
     */
    public $controller = HomeController::class;

    /**
     * Form route prefix.
     *
     * @return string
     */
    public function routePrefix()
    {
        return 'pages/home';
    }

    /**
     * Form singular name. This name will be displayed in the navigation.
     *
     * @return array
     */
    public function names()
    {
        return [
            'singular' => 'Home',
        ];
    }

    /**
     * Setup form page.
     *
     * @param  \Lit\Crud\CrudShow $page
     * @return void
     */
    public function show(CrudShow $page)
    {
        $page->card(function ($form) {
            $form->block('content')
                ->title('Content')
                ->repeatables(function ($repeatables) {
                    $repeatables->add('section', function ($form, $preview) {
                        $preview->col('Section');
                        $form->select('sectionType')
                            ->options([
                                'default' => 'Default Section',
                                'blue'    => 'Blue Section',
                            ])
                            ->title('Type');

                        $form->block('content')
                            ->title('Content')
                            ->repeatables(function ($repeatables) {
                                    $repeatables->add('text', function ($form, $preview) {
                                        $preview->col('{text}');
                                        $form->input('text')
                                            ->title('Text');
                                    });

                                    $repeatables->add('image', function ($form, $preview) {
                                        $preview->col('{}');
                                        $form->image('image')
                                            ->title('Image');
                                    });
                                });
                    });

                    $repeatables->add('text', function ($form, $preview) {
                        $preview->col('{text}');
                        $form->input('text')
                            ->title('Text');
                    });

                    $repeatables->add('image', function ($form, $preview) {
                        $preview->col('{}');
                        $form->image('image')
                            ->title('Image');
                    });
                });
        });
    }
}
