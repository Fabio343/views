<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    //
    private $produtos = array(
      'Tv','Sofá','Bicicleta','Cadeira'
    );
    private $preco = array(
      '5000','1700','1400','150'
    );
    public function index()
    {
      $produtos = $this->produtos;
      return view('produtos.index', compact('produtos'));
    }

    public function show($index) {
      $preco= $this->preco[$index];
      return view('produtos.show', compact('produto'));
    }

}
