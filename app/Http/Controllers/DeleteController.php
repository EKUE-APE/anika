<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

use App\Exports\ExportCompte;
use Maatwebsite\Excel\Facades\Excel;

class DeleteController extends Controller
{
    //

    public function deleteEntreprise($id)
    {
        $data = Company::find($id);
        $data->delete();
        return view('admin.allEntrepris');
    }

    public function AlldeleteEntreprise($id)
    {
        $deletedData = Company::onlyTrashed()->get();
       
        return view('corbeille.listeSupprimer',compact('deledData'));
    }



    public function export()
    {
        return Excel::download(new ExportCompte, 'ERYU.xlsx');
    }


}
