<!DOCTYPE html>
<html lang="en" class="h-screen">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Upper Logistics</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <!-- STYLES -->

   
</head>
<body>

<!-- HEADER: MENU + HEROE SECTION with tailwindcss  -->
<header class="bg-gray-800 py-4">
    <nav class="container p-2 mx-auto flex justify-between items-center">
        <a href="/" class="text-white font-bold uppercase">Upper Logistics</a>
        <ul class="flex">
            <li><a href="<?=base_url('/'); ?>" class="px-5 py-3 bg-white text-black rounded-lg">Home</a></li>
            <li><a href="<?=base_url('articulos'); ?>" class="text-white ml-4 px-5 py-3 hover:bg-white hover:text-black rounded-lg">Articulos</a></li>
            <li><a href="#about" class="text-white ml-4 px-5 py-3 hover:bg-white hover:text-black rounded-lg">Sobre nosotros</a></li>
            <li><a href="#contact" class="text-white ml-4 px-5 py-3 hover:bg-white rounded-lg ">Contact</a></li>
        </ul>
    </nav>
</header>

<section class="bg-gray-900 text-white py-12">
    <div class="container mx-auto">
        <h1 class="text-4xl font-bold">Welcome to <a class="uppercase" href="">Upper Logistics</a></h1>
        <p class="mt-4 text-lg">Somos tu empresa de logística en México</p>
    </div>
</section>

<main class="py-12">
    <div class="container mx-auto">
        <?= $this->renderSection('content') ?>
        
    </div>
</main>

<!--ABOUT SECTION-->

<section class="py-12">
    <div class="container mx-auto">
        <?= $this->renderSection('content') ?>
        desde plantilla
    </div>
</section>



<!--CONTACT SECTION -->
<section class="bg-gray-900 text-white py-12">
    <div class="container mx-auto">
        <h2 class="text-3xl font-bold">Contact</h2>
        <p class="mt-4 text-lg">You can find us on GitHub, Twitter, or just drop us an email.</p>
    </div>
</section>


<!-- FOOTER with tailwindcss -->
<footer class="bg-gray-800 text-white py-4  sticky bottom-0">
    <div class="container mx-auto text-center">
        &copy; 2022 CodeIgniter 4
    </div>
</footer>

<!-- SCRIPTS -->


</body>
</html>
