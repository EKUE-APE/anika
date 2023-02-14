<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\Quartier;

use App\Exports\ExportCompte;
use Maatwebsite\Excel\Facades\Excel;

class DeleteController extends Controller
{
    //

    public function deleteEntreprise($id)
    {
       $data = Company::find(intval($id));
        //$data = Company::where('id','=',3);
        //dd($data);
        $data->delete();
        return redirect('allEntreprise')->with('success','Suppression Effectué');

    }
    
        public function deleteLocalisation($id)
    {
        $data = Quartier::find(intval($id));
        $data->delete();
        return view('admin.listeLocalisation');
    }

    public function AlldeleteEntreprise()
    {
        $deletedData = Company::onlyTrashed()->get();
       $userCount =$deletedData->count();
        return view('corbeille.listeSupprimer',compact('deletedData','userCount'));
    }



    public function export()
    {
        return Excel::download(new ExportCompte, 'ERYU.xlsx');
    }


}
