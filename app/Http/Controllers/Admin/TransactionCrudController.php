<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\TransactionCrudRequest as StoreRequest;
use App\Http\Requests\TransactionCrudRequest as UpdateRequest;

class TransactionCrudController extends CrudController {

	public function setup() {
        $this->crud->setModel("App\Transaction");
        $this->crud->setRoute("admin/transaction");
        $this->crud->setEntityNameStrings('transaction', 'transactions');

		$this->crud->addColumn([
		   'name' => 'tgl', // The db column name
		   'label' => "Date", // Table column heading
		   'type' => 'date'
		]);

        $this->crud->addColumn([
           'name' => 'id_transaksi', // The db column name
           'label' => "Transaction ID", // Table column heading
           'type' => 'text'
        ]);

        $this->crud->addColumn([
           'name' => 'id_user', // The db column name
           'label' => "Customer", // Table column heading
           'type' => 'text'
        ]);


        $this->crud->addField([   // Date
            'name'  => 'tgl',
            'label' => 'Date (HTML5 spec)',
            'type'  => 'date'
            // 'wrapperAttributes' => ['class' => 'col-md-6'],
        ]);

        $this->crud->addField([    // SELECT
            'label'         => 'Customer',
            'type'          => 'select',
            'name'          => 'id_user',
            'entity'        => 'name',
            'attribute'     => 'name',
            'model'         => "App\User"
        ]);

        // $this->crud->addField([
        //    'name' => 'email', // The db column name
        //    'label' => "E-mail", // Table column heading
        //    'type' => 'email'
        // ]);

        // $this->crud->addField([
        //    'name' => 'alamat', // The db column name
        //    'label' => "Alamat", // Table column heading
        //    'type' => 'text'
        // ]);

        // $this->crud->addField([
        //    'name' => 'telp', // The db column name
        //    'label' => "Telp", // Table column heading
        //    'type' => 'text'
        // ]);

        $this->crud->enableDetailsRow();
        $this->crud->allowAccess('details_row');
        $this->crud->setDetailsRowView('vendor.backpack.crud.details_row.transaction');
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