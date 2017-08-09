<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use Illuminate\Support\Facades\Input;
use App\Product;

class ExcelController extends Controller
{
	public function index(){
		return view('import_excel.index');
	}

    public function ExportClients()
	{
		Excel::create('clients',function($excel)
		{
			$excel->sheet('clients',function($sheet)
			{
				
				$sheet->loadView('ExportClients');
			});
		})->export('xlsx');
	}
	
	public function ImportClients(Request $request)
	{
		$this->validate($request, [
            'attachment' => 'required|mimes:csv,xls,xlsx',
        ]);

		$file = Input::file('attachment');
		$file_name = $file->getPathName();
		$results = Excel::selectSheetsByIndex(0)->load($file_name,function($reader)
		{
			$results = $reader->noHeading();
		});
		$i=0;
		$n=8;
		foreach($results->toArray() as $data)
		{
			if($i!=$n)
			{
				if($data[1]!=null)
				{
					$item[] = $data[1];
					$keterangan[]= $data[3];
					$cost[]= $data[5];
					$price1[] =$data[8];
					$price2[] =$data[10];
					$price3[] =$data[12];
					$price4[] =$data[14];
					$price5[] =$data[16];

					$product = Product::updateOrCreate(
					    ['id_product' => $data[1]],
					    ['nama_brg' => $data[3],
					     'stok' => $data[5],
					     'harga1' => $data[8],
					     'harga2' => $data[10],
					     'harga3' => $data[12],
					     'harga4' => $data[14],
					     'harga5' => $data[16],
					    ]
					);

					// $product = new Product;
			        // $product->id_product = $data[1];
			        // $product->nama_brg = $data[3];
			        // $product->stok = $data[5];
			        // $product->harga1 = $data[8];
			        // $product->harga2 = $data[10];
			        // $product->harga3 = $data[12];
			        // $product->harga4 = $data[14];
			        // $product->harga5 = $data[16];
			        // $product->save();
					
					// echo $data[1]."<br>";
					// echo $data[3]."<br>";
					// echo $data[5]."<br>";
					// echo $data[8]."<br>";
					// echo $data[10]."<br>";
					// echo $data[12]."<br>";
					// echo $data[14]."<br>";
					// echo $data[16]."<br>";
				}	
			}
			else
			{
				$n += 43;
			}
			$i++;
		}
		// dd($results->toArray());
		return view('/product');
	}
}