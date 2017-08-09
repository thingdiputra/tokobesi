<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\DiskonCrudRequest as StoreRequest;
use App\Http\Requests\DiskonCrudRequest as UpdateRequest;

class DiskonCrudController extends CrudController {

	public function setup() {
        $this->crud->setModel("App\Diskon");
        $this->crud->setRoute("admin/discount");
        $this->crud->setEntityNameStrings('discount', 'Discounts');

		$this->crud->addColumn([
		   'name' => 'range', // The db column name
		   'label' => "Range", // Table column heading
		   'type' => 'text'
		]);

		$this->crud->addColumn([
		   'name' => 'diskon', // The db column name
		   'label' => "Discount", // Table column heading
		   'type' => 'text'
		]);

        $this->crud->addField([
            'name'  => 'range',
            'label' => 'Range',
            'type'  => 'text',
        ]);

		$this->crud->addField([
            'name'  => 'diskon',
            'label' => 'Discount',
            'type'  => 'number',
            'suffix' => "%",
        ]);

        //$this->crud->enableAjaxTable();
        $this->crud->enableExportButtons();
    }

	public function store(StoreRequest $request)
	{
		return parent::storeCrud();
	}

	public function update(UpdateRequest $request)
	{
		return parent::updateCrud();
	}

}