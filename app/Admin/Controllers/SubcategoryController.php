<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SubcategoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Subcategory';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */

    protected function grid()
    {
        $grid = new Grid(new Subcategory());

        $grid->quickSearch(function ($model, $query) {
            $model->where('title', 'like', "%{$query}%");
        });

        $grid->column('id', __('Id'));
        $grid->category('Բաժին')->display(function ($category) {
            return $category['title'];
        });
        $grid->column('title', __('Վերնագիր'));
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
        $show = new Show(Subcategory::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('category_id', __('Category id'));
        $show->field('title', __('Title'));
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
        $form = new Form(new Subcategory());

        $form->select('category_id','Բաժին')
            ->options(Category::all()
                ->pluck('title','id'));
        $form->text('title', __('Վերնագիր'));

        return $form;
    }
}
