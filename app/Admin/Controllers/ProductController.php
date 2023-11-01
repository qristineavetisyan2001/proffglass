<?php

namespace App\Admin\Controllers;

use App\Models\Product;
use App\Models\Subcategory;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Storage;

class ProductController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Product';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product());

        $grid->column('id', __('Id'));
        $grid->subcategory('Ենթաբաժին')->display(function ($category) {
            return $category['title'];
        });
        $grid->column('title', __('Վերնագիր'));
        $grid->column('description', __('Նկարագրություն'));
        $grid->image(__('Պատկեր'))->display(function ($pictures) {
            $imagePath = Storage::url('public/' . $pictures);
            return '<img src="' . $imagePath . '" class="object-contain" style="width: 100px" />';
        });
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
        $show = new Show(Product::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('subcategory_id', __('Subcategory id'));
        $show->field('title', __('Title'));
        $show->field('description', __('Description'));
        $show->field('image', __('Image'));
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
        $form = new Form(new Product());

        $form->select('subcategory_id','Ենթաբաժին')
            ->options(Subcategory::all()
                ->pluck('title','id'));

        $form->text('title', __('Վերնագիր'));
        $form->textarea('description', __('Նկարագրություն'));
        $form->image('image', __('Պատկեր'));

        return $form;
    }
}
