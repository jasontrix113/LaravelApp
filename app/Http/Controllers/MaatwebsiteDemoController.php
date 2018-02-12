<?php

namespace App\Http\Controllers;
use Input;
use App\Items;
use DB;
use Excel;
use Illuminate\Http\Request;

class MaatwebsiteDemoController extends Controller
{
    public function importExport()
    {
        return view('importExport');
        
    }
    public function downloadExcel($type)
    {
            $data = Items::get()->toArray();
            return Excel::create('itsolutionstuff_example', function($excel) use ($data)
            {
                $excel->sheet('mySheet', function($sheet) use ($data)
                {
                     $sheet->fromArray($data);              
                });    
            })->download($type);
    }
    public function importExcel(Request $request)
    {
        if($request->hasFile('import_file')){
            $path = $request->file('import_file')->getRealPath();
            $data = Excel::load($path,function($reader){
            })->get();
            if(!empty($data)&& $data->count()){
                foreach($data as $key => $value){
                    $insert[] = ['title' => $value->title, 'description' => $value->description];
                }
                if(!empty($insert)){
                    DB::table('items')->insert($insert);
                    dd('Insert Record successfully.');
                }
            }
        }
        return back();
    }
}
