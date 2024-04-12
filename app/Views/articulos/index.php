<?php echo $this->extend('plantilla'); ?>

<?= $this->section('content'); ?>
<div class="container mx-auto py-2">
    <h1 class="text-3xl text-center">Articulos</h1>
    <a href="<?= base_url('articulos/nuevo'); ?>" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Agregar</a>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <?php foreach ($articulos as $articulo) : ?>
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <img class="w-full h-56 object-cover object-center rounded-t-lg" src="<?= $articulo['imagen'] ?>" alt="">
                        <div class="p-4">
                            <span class="text-xs text-gray-400"><?= $articulo['meta_titulo'] ?></span>
                            <h2 class="font-bold text-2xl text-gray-800"><?= $articulo['titulo'] ?></h2>
                            <p class="text-justify text-sm text-gray-700"><?= $articulo['descripcion'] ?></p>
                            <a href="<?= base_url('articulos/' . $articulo['id']) ?>" class="block bg-green-500 hover:bg-green-600 focus:outline-none focus:ring-4 focus:ring-green-300 text-white font-medium text-sm px-5 py-2.5 mt-2 rounded-lg">Ver</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>



            <!-- tabla de articulos con tailwindcss  
                <tr class="bg-gray-100 border border-slate-500">
                    <td class="px-4 py-2"><?= $articulo['id'] ?></td>
                    <td class="px-4 py-2"><?= $articulo['meta_titulo'] ?></td>
                    <td class="px-4 py-2"><?= $articulo['titulo'] ?></td>
                    <td class="px-4 py-2"><?= $articulo['descripcion'] ?></td>
                    <td class="px-4 py-2"><?= $articulo['imagen'] ?></td>
                    <td class="px-4 py-2"><?= $articulo['contenido_articulo'] ?></td>
                    <td class="px-4 py-2"><?= $articulo['publish_date'] ?></td>
                </tr>
                -->
            <!-- lista de articulos con tailwindcss 
                <div class="flex flex-col w-full bg-white shadow-md rounded-lg overflow-hidden">
                    <img class="w-full h-56 object-cover object-center" src="<?= $articulo['imagen'] ?>" alt="">
                    <div class="p-6">
                        <h2 class="font-semibold text-xl text-gray-800"><?= $articulo['titulo'] ?></h2>
                        <p class="text-justify text-sm text-gray-700"><?= $articulo['descripcion'] ?></p>
                <div class="flex">
                    <span class=" p-2" hidden><?= $articulo['id'] ?></span>
                    <p class=" p2"><?= $articulo['meta_titulo'] ?></p>
                    <h2 class=" p-2"><?= $articulo['titulo'] ?></h2>
                    <p class=" p-2"><?= $articulo['descripcion'] ?></p>
                    <img class=" p-2"><?= $articulo['imagen'] ?>
                    <p class=" p-2"><?= $articulo['contenido_articulo'] ?></p>
                    <p class=" p-2"><?= $articulo['publish_date'] ?></p>
                    <div>
                 -->


        </tbody>
    </table>
</div>
<script></script>

<?= $this->endSection(); ?>