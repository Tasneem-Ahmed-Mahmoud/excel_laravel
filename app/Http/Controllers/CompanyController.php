<?php

namespace App\Http\Controllers;

use App\Imports\CompanyImport;
use App\Models\Company;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CompanyController extends Controller
{






    function import_excel(){
        return view('import_excel');
    }
    // function import(Request $request){

    //     // dd($request->file('file'));

    //     if($request->file('file')){




    //         $import =  Excel::import(new CompanyImport, request()->file('file'));
    //         $msg_success = "Data Uploaded Succesfully! ";
    //         $msg_danger = "Data Uploaded failed! ";
    //         if ($import) {
    //             return redirect('/')->with('success', strtoupper($msg_success));
    //         }else{
    //            return redirect('/')->with('danger', strtoupper($msg_danger));
    //         }
    //     }
    //     else{
    //         $msge = "please choose your file! ";
    //         return redirect('/')->with('choose_file', strtoupper($msge));
    //     }
    // }









//     function import(Request $request){

// //         $request->validate([
// // 'file'=>'required|mimes:xls'



// //         ]);
// $msg_success = "Data Uploaded Succesfully! ";
// Excel::import(new CompanyImport,$request->file('file'));

// return redirect('/')->with('success', strtoupper($msg_success));


// dd($request);

        
//     }






}
