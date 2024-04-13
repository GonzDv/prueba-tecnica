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
    <a href="<?= base_url('articulos/nuevo'); ?>" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">+</a>
    <a href="<?= base_url('articulos/admin'); ?>" class="text-white"></a>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-5">
        <?php foreach ($articulos as $articulo) : ?>
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img class="w-full h-56 object-cover object-center rounded-t-lg" src="<?= $articulo['imagen'] ?>" alt="">
                <div class="p-4">
                    <span class="text-xs text-gray-400"><?= $articulo['meta_titulo'] ?></span>
                    <h2 class="font-bold text-2xl text-gray-800"><?= $articulo['titulo'] ?></h2>
                    <p class="text-justify text-sm text-gray-700"><?= $articulo['descripcion'] ?></p>
                    

                        <a href="<?= base_url('articulos/editar/' . $articulo['id']) ?>" class="focus:outline-none text-white bg-yellow-500 hover:bg-yellow-600 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-900">Editar</a>
                        <button data-bs-url="<?= base_url('articulos/' . $articulo['id']); ?>
                        data-bs-toggle="modal" data-bs-target="#eliminaModal" type="button" class="focus:outline-none text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Eliminar</button>    
                       
                </div>
            </div>
        <?php endforeach; ?>
</div>
</div>
<?= $this->endSection(); ?>
<?php $this->section('scritps') ?>

<script>
    const eliminaModal = document.getElementById('eliminaModal')
    if (eliminaModal) {
        eliminaModal.addEventListener('show.bs.modal', event => {
            // Button that triggered the modal
            const button = event.relatedTarget
            // Extract info from data-bs-* attributes
            const url = button.getAttribute('data-bs-url')

            // Update the modal's content.
            const form = eliminaModal.querySelector('#form-elimina')
            form.setAttribute('action', url)
        })
    }
</script>

<?= $this->endSection(); ?>