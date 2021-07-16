<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\Models\Tipo;


use function PHPUnit\Framework\isNull;

class TipoController extends Controller
{
    //
     /*
    AJAX request
    */
    public function index(Request $request){

        $search = $request->id_cliente;

        $tipos = Tipo::where('id_cliente', "$request->id_cliente")
                ->orderby('descricao')
                ->paginate(10);

        $response = array();
        foreach($tipos as $tipo){

        $response[] = array("id"=>$tipo->id,
                            "id_cliente"=>$tipo->id_cliente,
                            "descricao"=>$tipo->descricao
                            );

            //$response[] = array("value"=>$employee->id,"label"=>$employee->name);
        }
        //return compact($response);
        return response()->json($response);
    }


    public function show($id){

        //$response =array();

        if (!$tipo = Tipo::where('id',$id)->first()){
            return "";
        }

        return ['descricao'=>$tipo->descricao];// response()->json($ $tipo->descricao);
        //return  $tipo->descricao;//(response()->json($response);
        //return view('produto\edit_produto_page',['produto'=>$produto] );
    }

    public function save(Request $request){

        $search = $request->id_cliente;
        $id_cliente =   $request->id_cliente;
        $sDescr =  strtolower($request->descricao);
        $tipos = 0;
        //$tipos = DB::select("CALL sp_tipo_existe1()");
        $tipos = DB::select("SELECT * FROM db_frutas_dourado.tb_tipo WHERE id_cliente = $id_cliente AND lcase(descricao) = ltrim(rtrim('$sDescr'));");

        $sDescr =  strtoupper($sDescr);
        //$tipos = DB::select("SELECT * FROM users where name='$findUserInput'");
        //$tipos = DB::select("CALL sp_tipo_existe(".$request->id_cliente.",".$request->descricao.")");
        
        
        //$tipos = Tipo::select('exec sp_tipo_existe(?, ?)',[$request->id_cliente,$request->descricao]);
        //$tipos = Tipo::where('id_cliente', "$request->id_cliente")
        //        ->whereRaw('LOWER(`descricao`) LIKE ? ',[trim(strtolower($sDescr)).'%']);
                //->where('descricao', "$request->descricao")->first();
                //->whereRaw('LOWER(`descricao`) like ?', ['%'.strtolower($request->descricao).'%'])->pluck('descricao');
                //->whereRaw("UPPER('{descricao}') LIKE '%'". strtoupper($request->descricao)."'%'"); 
                //->whereIn( 'LCASE(descricao)' , $sDescr );
        
        //whereRaw("UPPER('{$column}') LIKE '%'". strtoupper($value)."'%'"); 

        //Tipo::whereRaw('LOWER(`descricao`) like ?', ['%'.strtolower($request->descricao).'%'])->pluck('descricao');
        //BusinessUser::whereRaw('LOWER(`company_name`) like ?', ['%'.strtolower($company_name).'%'])->pluck('company_name');

        
        // if (count($tipos)<=0 ){
        //      $response[] = array("result"=>"sucesso->Tipo já existe 111 SUCESSO", 
        //                       "tipos"=> $tipos);
        // }
        // else{
        //      $response[] = array("result"=>"FALHA->Tipo já existe 111",
        //                       "tipos"=> $tipos);
        //  }
        //   return response()->json($response);

        

          if (count($tipos)<=0 ){

            $this->validate($request, [
                'id_cliente' => 'required|string',
                'descricao' => 'required|string|min:3|max:100'
            ]);
        
            $tipo = new Tipo();
            $tipo->id_cliente = $request['id_cliente'];
            $tipo->descricao = $sDescr;

            //$tb_produto->password = hash('sha512', $request['password']);
            $tipo->save();
        
            //return response('', 201);
            
            $response[] = array("result"=>"Tipo inserido com sucesso",
                                "descricao"=>$request['descricao']);

        }
        else{
            $response[] = array("result"=>"FALHA->Tipo já existe");
        }

        return response()->json($response);

    }

}
