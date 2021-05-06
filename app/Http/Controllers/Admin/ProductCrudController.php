<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ProductCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ProductCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Product::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/product');
        CRUD::setEntityNameStrings('Khóa học', 'Các khóa học');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->addColumn([// Select2
            'label'     => "Loại",
            'type'      => 'select',
            'name'      => 'category_id', // the db column for the foreign key

            // optional
            'entity'    => 'getCategory', // the method that defines the relationship in your Model
            'model'     => "App\Models\Category", // foreign key model
            'attribute' => 'name', // foreign key attribute that is shown to user

        ]);
        CRUD::addColumn([
            'name' => 'name',
            'label' => ' Tên khóa học'
        ]);
        CRUD::addColumn([
            'name' => 'quantity',
            'label' => ' Số buổi học',
            'type'=>'number',
        ]);
        CRUD::addColumn([
            'name' => 'online_price',
            'label' => ' Học phí online',
            'type'=>'number',
        ]);
        CRUD::addColumn([
            'name' => 'offline_price',
            'label' => ' Học phí offline',
            'type'=>'number',
        ]);
        CRUD::addColumn([
            'name' => 'slug',
            'label'=>'Đường dẫn'
        ]);

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ProductRequest::class);

        $this->crud->addField([// Select2
            'label'     => "Loại",
            'type'      => 'select2',
            'name'      => 'category_id', // the db column for the foreign key

            // optional
            'entity'    => 'getCategory', // the method that defines the relationship in your Model
            'model'     => "App\Models\Category", // foreign key model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'default'   => 2, // set the default value of the select2

            // also optional

        ]);

        CRUD::addField([
            'name' => 'name',
            'label' => ' Tên khóa học'
        ]);
        CRUD::addField([
            'name' => 'slug',
            'type'=>'hidden'
        ]);
        CRUD::addField([
            'name' => 'content',
            'type'=>'ckeditor',
            'label'=>'Nội dung khóa học',
        ]);
        CRUD::addField([
            'name' => 'quantity',
            'label' => ' Số buổi học',
            'type'=>'number',
        ]);
        CRUD::addField([
            'name' => 'online_price',
            'label' => ' Học phí online',
            'type'=>'number',
        ]);
        CRUD::addField([
            'name' => 'offline_price',
            'label' => ' Học phí offline',
            'type'=>'number',
        ]);
        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
