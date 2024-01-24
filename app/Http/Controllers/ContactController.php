<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ContactController extends Controller
{
    
    public function index(){
        $data = DB::table('gmail')->get();
        return view('contact', [
            'tittle' => 'Kontak',
            'items' => $data
        ]);
     
    }
    public function store(Request $request){
        DB::table('gmail')->insert([
            'komen' => $request->komen,
           
        ]);
        return redirect()->back();
        // dd($request);
    }


    


}
