<?= $this->extend('plantilla'); ?>

<?= $this->section('content'); ?>
<div>
    <span>
        <a href="<?= base_url('articulos'); ?>"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
            </svg>
        </a>
    </span>
</div>
<div class="container mx-auto py-2">


    <h1 class="text-3xl text-center m-5">Articulos</h1>
    <a href="<?= base_url('articulos/crear'); ?>" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
        +</a>
       
    <a href="<?= base_url('articulos/admin'); ?>" class="text-white"></a>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-5">
        <?php foreach ($articulos as $articulo) : ?>
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img class="w-full h-56 object-cover object-center rounded-t-lg" src="<?= base_url('uploads/' . $articulo['imagen']. '/'.  $articulo['imagen']) ?>" alt="">
                <div class="p-4">
                    <span class="text-xs text-gray-400"><?= $articulo['meta_titulo'] ?></span>
                    <h2 class="font-bold text-2xl text-gray-800"><?= $articulo['titulo'] ?></h2>
                    <p class="text-justify text-sm text-gray-700"><?= $articulo['descripcion'] ?></p>
                    <div class="mt-5">
                        <a href="<?= base_url('articulos/' . 'editar/' . $articulo['id']) ?>" 
                        class="focus:outline-none text-white bg-yellow-500 hover:bg-yellow-600 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-900">
                        Editar</a>
                        <a href="<?= base_url('/articulos/delete/' . $articulo['id']); ?>" 
                    class="focus:outline-none text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-900">
                    Eliminar</a>
                    
                </div>
                
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection(); ?>

<?php $this->section('scritp') ?>

<script>
    console.log('hola')
    const btn = document.getElementById("eliminarArticulo");
    btn.addEventListener('click', () => {
        console.log('click')
    })
</script>

<?= $this->endSection(); ?>