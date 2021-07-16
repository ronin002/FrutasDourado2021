<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoUpdate;
use Illuminate\Http\Request;
use App\Post;

use App\Models\Tipo;
use App\Models\tb_ncm;
use App\Models\tb_produto;

use function PHPUnit\Framework\isNull;

class ProdutoController extends Controller
{
    //
    public function index(){
        
        $produtos = tb_produto::paginate(10);
        return view('produto\list_prod_page',['produtos'=>$produtos] );

        //$produtos = tb_produto::paginate(15);
        //  $produtos = array();
        
        //  foreach ($products as $product) 
        //  {
        //      //$product 
        //      $sFruta = $this->subBuscaFruta($product->Tipo);
 
        //      $response[] = array("id"=>$product->id,
        //                          "descricao"=>$product->descricao,
        //                          "unidade"=>$product->unidade,
        //                          "NCM"=>$product->NCM,
        //                          "GTIN"=>$product->GTIN,
        //                          "idTipo"=>$product->Tipo,
        //                          "Tipo"=>$sFruta
        //                          );
 
        //      $produtos = array_merge($produtos, $response);
             
        //      //echo "{$agent}=>{$value}"."<br>";
        //  }
 
        //  return dd($produtos);
    }

    public function subBuscaNCM($id){
        
        if (!$ncm = tb_ncm::where('id',$id)->first()){
         
        }

        return $ncm->descricao;

    }

    public function edit($id){

        if (!$produto = tb_produto::where('id',$id)->first()){
            return redirect()->back();
        }

        $descricao_ncm = "";
        if (!$ncm = tb_ncm::where('id',$produto->NCM)->first()){
            $descricao_ncm = "NCM inválido - Favor informar a equipe de suporte";
        }
        else{
            $descricao_ncm = $ncm->descricao;
        }

        return view('produto\edit_produto_page',['produto'=>$produto, 'descricao_ncm'=>$descricao_ncm] )
                //->withTitle('descricao_ncm', $descricao_ncm);
                ->with('message','descricao_ncm'.$produto);
    }

    public function search(Request $request){

        $filters = $request->except('_token');
        $produtos = tb_produto::where('descricao', 'LIKE', "%$request->search%")
                                        ->orWhere('ncm', 'LIKE', "%$request->search%")
                                        ->orWhere('gtin', 'LIKE', "%$request->search%")
                                        ->orWhere('tipo', 'LIKE', "%$request->search%")
                                        ->paginate(3);
        
        return view('produto\list_prod_page',['produtos'=>$produtos, 'filters'=>$filters] );
    }

     public function create($id){

        $produto = [];
        if (isNull($id)){
        
            $produto = tb_produto::where('id', "$id");

        }

        return view('produto\cad_produto_page',['produto'=>$produto] );

     }

    public function save(ProdutoUpdate $request){

        
        //tb_produto::create($request);
        $this->validate($request, [
            'ncm' => 'required|string',
            'descricao' => 'required|string|min:3|max:100'
        ]);

        $tb_produto = new tb_produto();
        $tb_produto->ncm = $request['ncm'];
        $tb_produto->id_cliente = $request['id_cliente'];
        $tb_produto->descricao = $request['descricao'];
        $tb_produto->gtin = $request['gtin'];
        $tb_produto->tipo = $request['tipo'];
        //$tb_produto->password = hash('sha512', $request['password']);
        $tb_produto->save();

        return redirect()
                    ->route('produto.index')
                    ->with('message','Produto criado com sucesso');
   
    }

    public function update($id,ProdutoUpdate $request){

        if (!$produto = tb_produto::find($id)){
            return redirect()->route('produto.index')
                ->with('message',$id);
        }
        /*
        $tb_produto = new tb_produto();
        $tb_produto->id = $request['id'];
        $tb_produto->ncm = $request['ncm'];
        $tb_produto->descricao = $request['descricao'];
        $tb_produto->gtin = $request['gtin'];
        $tb_produto->tipo = $request['tipo'];
        //$tb_produto->password = hash('sha512', $request['password']);
        $tb_produto->update()$;
        */

        $produto->update($request->all());

        //$produto->update($request->all());
        return redirect()
            ->route('produto.index')
            ->with('message','Produto atualizado com sucesso');//.$request);

    }

    public function delete($id){

        if (!$produto = tb_produto::find('id',$id)){
            return redirect()->route('produto.index');
        }
        $produto->delete();
        return redirect()->route('produto.index');
    }
}
