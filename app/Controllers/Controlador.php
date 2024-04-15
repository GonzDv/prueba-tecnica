<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ArticuloModel;

class Controlador extends BaseController
{
    protected $helpers = ['form'];

    public function index()
    {
         

        return view('../Views/home');
    }
    public function lista() {
        $articulosModel = new ArticuloModel();
        $articulos = $articulosModel->findAll();

        $data = [
            'articulos' => $articulos, 
        ];

        return view('articulos/index', $data);
    }


    public function create()

    {

        return view('articulos/crear');
    }
    //guardar articulo
    public function save()
    {

        $articuloModel = new ArticuloModel();



        if ($imagen = $this->request->getFile('imagen')) {
            $imagenName = $imagen->getName();
            $imagen->move('../public/uploads/' . $imagenName);

            $datos = [
                'meta_titulo' => $this->request->getPost('meta_titulo'),
                'meta_descripcion' => $this->request->getPost('meta_descripcion'),
                'titulo' => $this->request->getPost('titulo'),
                'descripcion' => $this->request->getPost('descripcion'),
                'imagen' => $imagenName,
                'contenido_articulo' => $this->request->getPost('contenido_articulo'),
                'publish_date' => $this->request->getPost('publish_date'),
            ];
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


        $articuloModel->insert($datos);
        echo "Articulo guardado";
        return redirect()->to('articulos');
    }
    // Cargar vista para crear articulo
    public function edit($id = null)
    {
        $articuloModel = new ArticuloModel();
        $articulo = $articuloModel->find($id);

        //verificar si existe el articulo
        if (!$articulo) {

            return redirect()->to('articulos');
        }


        return view('articulos/editar', compact('articulo'));
    }

    // Update articulo
    public function update($id = null)
    {
        $articulosModel = new ArticuloModel();


        $articulo = $articulosModel->find($id);

        if (!$articulo) {

            return redirect()->back()->with('error', 'Record not found!');
        }

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

        $articulosModel->update($id, $datos);
        return redirect()->to('articulos/contenido/' . $id);
    }

    // Delete articulo
    public function delete($id)
    {
        $articulosModel = new ArticuloModel();
        
        
        if (!is_numeric($id) || $id <= 0) {
            return redirect()->to('articulos/admin')->with('error', 'id del articulo invalido');
        }

        $datosArticulo = $articulosModel->where('id', $id)->first();
        
        if ($datosArticulo) {
            log_message('info', 'Eliminado id: ' . $datosArticulo['titulo']);
        }
        
        $articulosModel->where('id', $id)->delete();
        unlink('../public/uploads/' . $datosArticulo['imagen'] . '/' . $datosArticulo['imagen']);

        if ($articulosModel->affectedRows() > 0) {
            log_message('info', 'Article ' . $id . ' eliminacion correcta');
        } else {
            log_message('error', 'fallo al eliminar id ' . $id);
            
        }

        return redirect()->to('articulos/admin');
    }


    // Cargar vista para editar/eliminar articulo
    public function admin()
    {
        $articulosModel = new ArticuloModel();
        $articulos = $articulosModel->findAll();

        $data = [
            'articulos' => $articulos, 
        ];

        return view('articulos/admin', $data);;
    }

    // Ver articulo
    public function see($id = null)
    {
        $modelo = new ArticuloModel();
        $datos['articulo'] = $modelo->find($id);



        if ($datos['articulo'] == null) {
            return redirect()->to('articulos');
        }

        $infoArticulos = [
            'publish_date' => $datos['articulo']['created_at'],
            'imagen' => base_url('uploads/' . $datos['articulo']['imagen'] . '/' .  $datos['articulo']['imagen']),
            'titulo_articulo' => $datos['articulo']['titulo'],
            'descripcion' => $datos['articulo']['meta_descripcion'],
            'contenido' => $datos['articulo']['contenido_articulo']
        ];


        return view('articulos/contenido', $infoArticulos);
    }
}
