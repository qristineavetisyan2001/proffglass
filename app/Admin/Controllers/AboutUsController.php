<?php

namespace App\Admin\Controllers;

use App\Models\AboutUs;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Storage;

class AboutUsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'AboutUs';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new AboutUs());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Վերնագիր'));
        $grid->image(__('Պատկեր'))->display(function ($pictures) {
            $imagePath = Storage::url('public/' . $pictures);
            return '<img src="' . $imagePath . '" class="object-contain" style="width: 100px" />';
        });
        $grid->column('text', __('Տեքստ'));
        $grid->column('created_at', __('Ստեղծվել է'));
        $grid->column('updated_at', __('Թարմացվել է'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(AboutUs::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('image', __('Image'));
        $show->field('text', __('Text'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new AboutUs());

        $form->text('title', __('Վերնագիր'));
        $form->image('image', __('Պատկեր'));
        $form->textarea('text', __('Տեքստ'));

        return $form;
    }
}
