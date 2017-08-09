<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\ProductCrudRequest as StoreRequest;
use App\Http\Requests\ProductCrudRequest as UpdateRequest;

class ProductCrudController extends CrudController {

	public function setup() {
        $this->crud->setModel("App\Product");
        $this->crud->setRoute("admin/product");
        $this->crud->setEntityNameStrings('product', 'products');

		$this->crud->addColumn([
		   'name' => 'id_product', // The db column name
		   'label' => "No. Item", // Table column heading
		   'type' => 'text'
		]);

		$this->crud->addColumn([
		   'name' => 'nama_brg', // The db column name
		   'label' => "Nama Barang", // Table column heading
		   'type' => 'text'
		]);

		$this->crud->addColumn([
		   'name' => 'harga1', // The db column name
		   'label' => "Harga 1", // Table column heading
		   'type' => 'text'
		]);

		$this->crud->addColumn([
		   'name' => 'harga2', // The db column name
		   'label' => "Harga 2", // Table column heading
		   'type' => 'text'
		]);

		$this->crud->addColumn([
		   'name' => 'harga3', // The db column name
		   'label' => "Harga 3", // Table column heading
		   'type' => 'text'
		]);

		$this->crud->addColumn([
		   'name' => 'harga4', // The db column name
		   'label' => "Harga 4", // Table column heading
		   'type' => 'text'
		]);

		$this->crud->addColumn([
		   'name' => 'harga5', // The db column name
		   'label' => "Harga 5", // Table column heading
		   'type' => 'text'
		]);

        $this->crud->addField([
            'name'  => 'id_product',
            'label' => 'No. Item',
            'type'  => 'text',
        ]);

		$this->crud->addField([
            'name'  => 'nama_brg',
            'label' => 'Nama Barang',
            'type'  => 'text',
        ]);

        $this->crud->addField([   // Number
            'name'  => 'harga1',
            'label' => 'Harga 1',
            'type'  => 'number',
            // optionals
            // 'attributes' => ["step" => "any"], // allow decimals
            'prefix' => "Rp",
            'suffix' => ",00",
        ]);

        $this->crud->addField([   // Number
            'name'  => 'harga2',
            'label' => 'Harga 2',
            'type'  => 'number',
            // optionals
            // 'attributes' => ["step" => "any"], // allow decimals
            'prefix' => "Rp",
            'suffix' => ",00",
        ]);

        $this->crud->addField([   // Number
            'name'  => 'harga3',
            'label' => 'Harga 3',
            'type'  => 'number',
            // optionals
            // 'attributes' => ["step" => "any"], // allow decimals
            'prefix' => "Rp",
            'suffix' => ",00",
        ]);

        $this->crud->addField([   // Number
            'name'  => 'harga4',
            'label' => 'Harga 4',
            'type'  => 'number',
            // optionals
            // 'attributes' => ["step" => "any"], // allow decimals
            'prefix' => "Rp",
            'suffix' => ",00",
        ]);

        $this->crud->addField([   // Number
            'name'  => 'harga5',
            'label' => 'Harga 5',
            'type'  => 'number', 
            // optionals
            // 'attributes' => ["step" => "any"], // allow decimals
            'prefix' => "Rp",
            'suffix' => ",00",
        ]);

        //$this->crud->enableAjaxTable();
        $this->crud->enableExportButtons();
        $this->crud->addButtonFromModelFunction('top', 'import_excel', 'importExcel', 'end'); // add a button whose HTML is returned by a method in the CRUD model
        // $this->crud->addButtonFromView($stack, 'Import from Excel', $view, 'top');
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