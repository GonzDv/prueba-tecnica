<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ArticuloModel;

class Controlador extends BaseController
{
    protected $helpers = ['form'];

    public function index()
    {
        $articulosModel = new ArticuloModel();
        $data['articulos'] = $articulosModel->findAll();

        return view('articulos/index', $data);
    }

    public function new()
    {
        $articulosModel = new ArticuloModel();
        $data['articulos'] = $articulosModel->findAll();

        return view('articulos/crear', $data);
    }

    public function create()
    {
        $articulosModel = new ArticuloModel();


        $datos = [
            'meta_titulo' => $this->request->getPost('meta_titulo'),
            'meta_descripcion' => $this->request->getPost('meta_descripcion'),
            'titulo' => $this->request->getPost('titulo'),
            'descripcion' => $this->request->getPost('descripcion'),
            'imagen' => $this->request->getPost('imagen'),
            'contenido_articulo' => $this->request->getPost('contenido_articulo'),
            'publish_date' => $this->request->getPost('publish_date'),
        ];


        $reglas = [
            'meta_titulo' => 'required',
            'meta_descripcion' => 'required',
            'titulo' => 'required',
            'descripcion' => 'required',
            'contenido_articulo' => 'required',
            'publish_date' => 'required',
        ];

        if (!$this->validate($reglas)) {
            return redirect()->back()->withInput()->with('error', $this->validator->listErrors());
        }


        $articulosModel->insert($datos);
        return redirect()->to('articulos');
        //     }
    }

    public function edit($id = null)
    {
        // $articulosModel = new ArticuloModel();
        // $data['articulos'] = $articulosModel->findAll();

        // if ($id == null) {
        //     return redirect()->route('articulos');
        // }

        // $articulosModel = new ArticuloModel();

        // $data['articulos'] = $articulosModel->findAll();

        // return view('articulos/editar', $data);
        $articuloModel = new ArticuloModel();
        $articulo = $articuloModel->find($id);
        // Check if article exists (handle error if not found)
        if (!$articulo) {
            // ... handle article not found error
            return redirect()->to('articulos');
        }

        // Pass the data to the view
        return view('articulos/editar', compact('articulo'));
    }

    public function update($id = null)
    {
        if (!$this->request->is('put') || $id == null) {
            return redirect()->route('articulos');
        }

        $reglas = [
            'meta_titulo' => 'required',
            'meta_descripcion' => 'required',
            'titulo' => 'required',
            'descripcion' => 'required',
            
            'contenido_articulo' => 'required',
            'publish_date' => 'required',
        ];

        if (!$this->validate($reglas)) {
            return redirect()->back()->withInput()->with('error', $this->validator->listErrors());
        }

        if (!$this->validate($reglas)) {
            return redirect()->back()->withInput()->with('error', $this->validator->listErrors());
        }

        $post = $this->request->getPost(['meta_titulo', 'meta_descripcion', 'titulo', 'descripcion', 'imagen', 'contenido_articulo', 'publish_date']);

        $articulosModel = new  ArticuloModel();
        $articulosModel->insert([
            'meta_titulo' => trim($post['meta_titulo']),
            'meta_descripcion' => trim($post['meta_descripcion']),
            'titulo' => trim($post['titulo']),
            'descripcion' => $post['descripcion'],
            'imagen' => $post['imagen'],
            'contenido_articulo' => $post['contenido_articulo'],
            'publish_date' => $post['publish_date'],
        ]);

        return redirect()->route('articulos');
    }

    public function delete($id = null)
    {
        if (!$this->request->is('delete') || $id == null) {
            return redirect()->route('articulos');
        }

        $articulosModel = new ArticuloModel();
        $articulosModel->delete($id);

        return redirect()->to('articulos');
    }
    public function admin()
    {
        $modelo = new ArticuloModel();
        $datos['articulos'] = $modelo->findAll();
        return view('articulos/admin', $datos);
    }
    //     // Ver articulo
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
