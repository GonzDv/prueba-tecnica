<!DOCTYPE html>
<html lang="en" class="h-screen">
<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <!-- STYLES -->

   
</head>
<body>

<!-- HEADER: MENU + HEROE SECTION with tailwindcss  -->
<header class="bg-gray-800 py-4">
    <nav class="container mx-auto flex justify-between items-center">
        <a href="/" class="text-white font-bold uppercase">Upper Logistics</a>
        <ul class="flex">
            <li><a href="<?=base_url('/'); ?>" class="text-white">Home</a></li>
            <li><a href=""<?=base_url('articulos'); ?>" class="text-white ml-4">Articulos</a></li>
            <li><a href="#about" class="text-white ml-4">Sobre nosotros</a></li>
            <li><a href="#contact" class="text-white ml-4">Contact</a></li>
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
        hola
    </div>
</main>

<!--ABOUT SECTION with tailwindcss -->
<section class="py-12">
    <div class="container mx-auto">
        <h2 class="text-3xl font-bold">About</h2>
        <p class="mt-4 text-lg">CodeIgniter 4 is the latest version of the framework, intended to be light, fast and fully featured framework for building web applications. It is the first installment of the framework that is not compatible with the previous versions, and we have built it to be the most powerful CodeIgniter to date.</p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis error repellat maxime voluptatem culpa harum odio mollitia rem atque, fuga explicabo distinctio neque expedita laudantium similique quidem? Eligendi, atque odio.
        Blanditiis harum quidem recusandae consequatur quis quos aperiam ab veritatis quae sequi, quod mollitia culpa a debitis inventore, fugit laudantium, nulla voluptas est officiis at sed minima. Culpa, nobis rem?
        Fugit nihil, minima praesentium omnis iste, suscipit minus accusamus quam amet officiis illo nisi earum aliquam voluptas nostrum beatae eum placeat rem assumenda maxime? Officiis qui autem velit minima inventore.
    </div>
</section>



<!--CONTACT SECTION with tailwindcss -->
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
