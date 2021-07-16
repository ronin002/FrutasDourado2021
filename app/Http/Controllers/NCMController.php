<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Post;
use App\Models\tb_ncm; 

class NCMController extends Controller
{
    public function search(Request $request){

        $filters = $request->except('_token');
        $ncms = tb_ncm::where('categoria', 'LIKE', "%$request->search%")
                                        ->orWhere('descricao', 'LIKE', "%$request->search%")
                                        ->orWhere('id', 'LIKE', "%$request->search%")
                                        ->paginate(3);
        
        return  ['ncms' => $ncms]; //view('ncm\busca_ncm_page',['ncms'=>$ncms, 'filters'=>$filters] );
    }

    /*
    AJAX request
    */
    public function getNCMs(Request $request){

        $search = $request->search;

        $ncms = tb_ncm::where('categoria', 'LIKE', "%$request->search%")
                ->orWhere('descricao', 'LIKE', "%$request->search%")
                ->orWhere('id', 'LIKE', "%$request->search%")
                ->paginate(3);

        $response = array();
        foreach($ncms as $ncm){

            $response[] = array("id"=>$ncm->id,
                                "categoria"=>$ncm->categoria,
                                "descricao"=>$ncm->descricao,
                                "uTrib"=>$ncm->uTrib,
                                "DescruTrib"=>$ncm->DescruTrib
                                );

            //$response[] = array("value"=>$employee->id,"label"=>$employee->name);
        }


        //return compact($response);
        return response()->json($response);
    }
}
