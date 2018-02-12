<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pledge;
use Input;
use Excel;
class PledgeFormController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function downloadExcel($type)
    {
           
            return Excel::create('PledgeReport', function($excel)
            {
                $excel->sheet('mySheet', function($sheet){

                  $value=DB::table('pledge')->get();
                        foreach($value as $pledge) 
                        {
                           $data[] = array(
                              $pledge->id,
                              $pledge->current_gr,
                              $pledge->pt_number,
                              $pledge->date,
                              $pledge->amount,
                              $pledge->article,
                              $pledge->name,
                              $pledge->address,
                              $pledge->contactnum,
                              $pledge->birthdate,
                              $pledge->appraiser,
                          );
                        }
                        $sheet->fromArray($data);
                        $headings = array('ID', 'Current Gold Rate', 'P.T Number', 'Date', 'Amount','Article', 'Name', 'Address', 'Contact Number', 'BirthDate', 'Appraiser');
                        $sheet->prependRow(2, $value);
                        $sheet->prependRow(1, $headings);   
                        
                  }); 
                  
            })->download($type);
    }
    protected function insert(request $req)
    {   
            $current_gr = $req->input('current_gr');
            $date = $req->input('date');
            $amount = $req->input('amount');
            $article = $req->input('article');
            $name = $req->input('name');
            $address = $req->input('address');
            $contactnum = $req->input('contactnum');
            $birthdate = $req->input('birthdate');
            $appraiser = $req->input('appraiser');  
        
            $data = array('current_gr'=>$current_gr,
                          'date' => $date,
                          'amount' => $amount,
                          'article'=>$article,
                          'name' => $name, 
                          'address' => $address,
                          'contactnum' =>$contactnum,
                          'birthdate'=>$birthdate, 
                          'appraiser' => $appraiser);
            
            DB::table('pledge')->insert($data);

              $pledge = DB::table('pledge')->get();

                if(count($data) > 0)
                {
                     return view('layouts/pledge_table', ['pledge' => $pledge]);
                }
                else
                {
                  return view('layouts/pledge_table');
                }
    }
    public function edit(request $req)
    {
            /*$current_gr = $req->input('current_gr');
            $date = $req->input('date');
            $amount = $req->input('amount');
            $article = $req->input('article');
            $name = $req->input('name');
            $address = $req->input('address');
            $contactnum = $req->input('contactnum');
            $birthdate = $req->input('birthdate');
            $appraiser = $req->input('appraiser');

            $data = DB::table('pledge')
            ->update('id', id)
            ->set($req, $data);*/
    }
    public function delete()
    {
          
    }
    public function display()
    {
        $pledge = DB::table('pledge')->get();
        if(count($pledge) > 0)
                {
                     return view('layouts/pledge_table', ['pledge' => $pledge]);
                }
                else
                {
                  return view('layouts/summary_reports');
                }    
          
    }
    public function redirect_edit_form()
    { 
            
            return view('layouts/pledge-edit-form');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
   
    
    /*public function importExcel(Request $request)
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
    }*/
    public function index()
    {
        return view('layouts/pledgeform');
        
    }
   
    
}
