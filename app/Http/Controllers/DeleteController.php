<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    //

    public function deleteEntreprise($id)
    {
        $data = Company::find($id);
        $data->delete();
        return view('admin.allEntreprise');
    }

    public function AlldeleteEntreprise($id)
    {
        $deletedData = Company::onlyTrashed()->get();
       
        return view('corbeille.listeSupprimer',compact('deledData'));
    }
}
