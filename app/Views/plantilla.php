<!DOCTYPE html>
<html lang="en" class="h-screen">

<head>
    <meta charset="UTF-8">
    <title>Welcome to Upper Logistics</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">

</head>

<body>

    <header class="sticky top-0 bg-gray-800 py-4">
        <nav class="container flex justify-between items-center px-4 md:px-0">
            <div class="mx:ml-20">
                <a href="/" class="md:ml-24 text-2xl md:text-3xl font-bold text-center md:text-left text-white hover:text-yellow-500">Upper Logistics</a>
            </div>
                
            <ul class="hidden md:flex space-x-4">
                <li><a href="<?= base_url('/'); ?>" class="text-white px-3 py-2 hover:text-yellow-500">Home</a></li>
                <li><a href="<?=base_url('articulos'); ?>" class="text-white px-3 py-2 hover:text-yellow-500">articulos</a></li>
                <li><a href="#about" class="text-white px-3 py-2 hover:text-yellow-500">Sobre nosotros</a></li>
                <li><a href="#contact" class="text-white px-3 py-2 hover:text-yellow-500">Contact</a></li>
            </ul>
            <button id="menuBtn" class="md:hidden focus:outline-none text-white hover:text-gray-400 block p-2">
                <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 3h20v1H0V3zm0 6h20v1H0V9zm0 6h20v1H0v-1z" />
                </svg>
            </button>
        </nav>
    </header>

    <section class="bg-gray-900 text-white py-12 ">
        <div class="container mx-auto px-4 md:px-0 text-center">
            <h1 class="md:text-4xl text-2xl font-bold text-center md:text-left">Welcome to <a class="uppercase" href="">Upper Logistics</a></h1>
            <p class="mt-4 text-lg text-center md:text-left">Somos tu empresa de logística en México</p>
        </div>
    </section>

    <main class="py-12">
        <div class="container mx-auto px-4 md:px-0"> <?= $this->renderSection('content') ?>
        </div>
    </main>

    <section class="py-12">
        <div class="container mx-auto px-4 md:px-0"> <?= $this->renderSection('content') ?>
            
        </div>
    </section>



    <section class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4 md:px-0">
            <h2 class="text-3xl font-bold text-center">Contact</h2>
            <p class="mt-4 text-lg text-center">You can find us on GitHub, Twitter, or just drop us an email.</p>
        </div>
    </section>


    <footer class="bg-gray-800 text-white py-4 sticky bottom-0">
        <div class="container mx-auto text-center">
            &copy; 2024 Upper Logistics. All rights reserved.
        </div>
    </footer>
    <?php echo $this->renderSection('script'); 
    ?>
    <script>
        const menuBtn = document.getElementById('menuBtn')
        const menu = document.querySelector('nav ul')

        menuBtn.addEventListener('click', () => {
            menu.classList.toggle('hidden')
            console.log('click')
        })
        </script>
</body>

</html>