<?php echo $this->extend('plantilla'); ?>

<?= $this->section('content'); ?>
<div class="container mx-auto py-2">
    <h1 class="md:text-3xl text-2xl text-center m-5">Articulos</h1>
    <a href="<?= base_url('articulos/admin'); ?>" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Admin</a>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-5">
                <?php foreach ($articulos as $articulo) : ?>
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <a href="<?= base_url('articulos/contenido/' . $articulo['id']) ?>" class="hover:text-white ">
                        <img class="w-full h-56 object-cover object-center rounded-t-lg" src="<?= base_url('uploads/' . $articulo['imagen']. '/'.  $articulo['imagen']) ?>" alt="">
                        
                        <div class="p-4 hover:bg-gray-300">
                            
                            <span class="text-xs text-gray-400 "><?= $articulo['meta_titulo'] ?></span>
                            <h2 class="font-bold text-2xl text-gray-800 "><?= $articulo['titulo'] ?></h2>
                            <p class="text-justify text-sm text-gray-700"><?= $articulo['descripcion'] ?></p>
                        
                        </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>


        </tbody>
    </table>
</div>
<script></script>

<?= $this->endSection(); ?>