<?php

namespace App\Controllers;

use App\Models\VeiculoModel;
use App\Models\ImagemModel;
use App\Models\MarcaModel;
use App\Models\OrigemModel;

class Home extends BaseController
{
	public function index()
	{
		$veiculoModel = new VeiculoModel();
		$imagemModel = new ImagemModel();
		$marcaModel = new MarcaModel();
        $origemModel = new OrigemModel();

		$data = [
			'veiculos'  => $veiculoModel->getVeiculo(),
			'marca'    => $marcaModel->asObject()->findAll(),
            'origem'   => $origemModel->asObject()->findAll(),
			'imagens'   => $imagemModel->findAll()
		];

		return view('Home', $data);
	}
}
