<?php

namespace App\Controllers;

use App\Models\ArticuloModel as ArticuloModel;

class Controlador extends BaseController
{
    public function index()
    {
        $modelo = new ArticuloModel();
        $datos['articulos'] = $modelo->findAll();
        return view('articulos/index', $datos);
    }

    public function new()
    {
        $modelo = new ArticuloModel();
        $datos['articulos'] = $modelo->findAll();
        return view('articulos/crear', $datos);
    }

    public function edit($id = null)
    {
        if ($id == null) {
            return redirect()->route('articulos');
        }
        $modelo = new ArticuloModel();
        $datos['articulos'] = $modelo->find($id);
        return view('articulos/editar', $datos);
    }

    public function create()
    {
        $modelo = new ArticuloModel();

        $datos = [
            'meta_titulo' => $this->request->getPost('meta_titulo'),
            'meta_descripcion' => $this->request->getPost('descripcion'),
            'titulo' => $this->request->getPost('titulo'),
            'descripcion' => $this->request->getPost('descripcion'),
            'imagen' => $this->request->getPost('imagen'),
            'contenido_articulo' => $this->request->getPost('contenido_articulo'),
            'publish_date' => $this->request->getPost('publish_date'),
        ];


        foreach ($datos as $campo => $valor) {
            if (empty($valor)) {
               
                echo "<script>alert('Por favor, complete todos los campos.');</script>";
                return redirect()->back()->withInput();;
            }
        }


        $modelo->insert($datos);
        return redirect()->route('articulos');
    }
    public function see($id = null)
    {
        if ($id == null) {
            return redirect()->route('articulos');
        }
        $modelo = new ArticuloModel();
        $datos['articulos'] = $modelo->find($id);
        return view('articulos/contenido', $datos);
    }
}
