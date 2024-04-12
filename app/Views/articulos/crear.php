<?= $this->extend('plantilla'); ?>

<?= $this->section('content'); ?>

<h3>
    Nuevo articulo
</h3>

<form class="max-w-sm mx-auto bg-gray" action="<?= base_url('articulos/crear'); ?>" method="post">
    <div class="mb-5 form-group">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="meta_titulo">Meta titulo</label>
        <input type="text" name="meta_titulo" id="meta_titulo" class="form-control block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
    <div class="mb-5 form-group">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="meta_description">Meta descripcion</label>
        <input type="text" name="meta_description" id="meta_description" class="form-control block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
    <div class="mb-5 form-group">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="titulo">Titulo</label>
        <input type="text" name="titulo" id="titulo" class="form-control block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
    <div class="mb-5 form-group">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="descripcion">Descripcion</label>
        <input type="text" name="descripcion" id="descripcion" class="form-control block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
    <div class="mb-5 form-group">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Imagen</label>
        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
    </div>
    <div class="mb-5 form-group">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="contenido_articulo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contenido articulo</label>
        <textarea name="contenido_articulo" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment..."></textarea>
    </div>
    <div class="mb-5 form-group">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="publish_date">Fecha de publicacion</label>
        <input type="date" name="publish_date" id="publish_date" class="form-control block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
    <button type="submit" class="place-items-center text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 rounded-lg">Guardar</button>
</form>
<?= $this->endSection(); ?>