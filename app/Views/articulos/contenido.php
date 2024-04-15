<?= $this->extend('plantilla'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<div>
    <span>
        <a href="<?= base_url('articulos'); ?>"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
            </svg>
        </a>
    </span>

</div>

<div>
    
    <span id="publish_date" class="text-xs"><?= esc($publish_date) ?></span>

    <h1 class="text-5xl">"<?= esc($titulo_articulo) ?>"</h1>
    <h3 class="">"<?= esc($descripcion) ?>"</h3>
    <img src="<?= esc($imagen) ?>" alt="imagen" >
    <h3 class="">"<?= esc($contenido) ?>"</h3>
    
    

    

</div>

</div <?= $this->endSection(); ?>

<?php $this->section('scritps') ?>

<?= $this->endSection(); ?>
