<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\UserCrudRequest as StoreRequest;
use App\Http\Requests\UserCrudRequest as UpdateRequest;

class UserCrudController extends CrudController {

	public function setup() {
        $this->crud->setModel("App\User");
        $this->crud->setRoute("admin/customer");
        $this->crud->setEntityNameStrings('Customer', 'customers');

    		$this->crud->addColumn([
    		   'name' => 'name', // The db column name
    		   'label' => "Nama", // Table column heading
    		   'type' => 'text'
    		]);

        $this->crud->addColumn([
           'name' => 'email', // The db column name
           'label' => "E-mail", // Table column heading
           'type' => 'email'
        ]);

        $this->crud->addColumn([
           'name' => 'alamat', // The db column name
           'label' => "Alamat", // Table column heading
           'type' => 'text'
        ]);

        $this->crud->addColumn([
           'name' => 'telp', // The db column name
           'label' => "Telp", // Table column heading
           'type' => 'text'
        ]);

        $this->crud->addField([
           'name' => 'name', // The db column name
           'label' => "Nama", // Table column heading
           'type' => 'text'
        ]);

        $this->crud->addField([   // Password
            'name'  => 'password',
            'label' => 'Password',
            'type'  => 'password',
        ]);

        $this->crud->addField([
           'name' => 'email', // The db column name
           'label' => "E-mail", // Table column heading
           'type' => 'email'
        ]);

        $this->crud->addField([
           'name' => 'alamat', // The db column name
           'label' => "Alamat", // Table column heading
           'type' => 'text'
        ]);

        $this->crud->addField([
           'name' => 'telp', // The db column name
           'label' => "Telp", // Table column heading
           'type' => 'text'
        ]);

        //$this->crud->enableAjaxTable();
        $this->crud->enableExportButtons();
        $this->crud->addClause('where', 'level', '=', 1);
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