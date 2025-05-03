<!DOCTYPE html>
<html lang="en">
<head>
  <!-- resources/views/landingpage.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FloraTrade - Transform your garden</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans text-gray-800">

    <!-- Navigation -->
    <nav class="bg-green-900 text-white px-4 py-3 flex justify-between items-center">
        <span class="font-bold text-lg">FloraTrade</span>
        <div>
            <button class="mr-4">Menu</button>
            <!---button>🛒</button--->
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="text-center py-20 bg-gradient-to-b from-green-50 to-white">
        <h1 class="text-4xl font-bold text-green-900 mb-4">"Let Your Ornamental Plant Business Flourish </br>
        — Start with Floratrade Today!"</h1>
        <p class="mb-6 text-green-700">Shop the beauty of nature: explore our stunning collection of plants and greenery today!</p>
        <div class="space-x-4">
            <a href="#" class="bg-green-800 text-white px-6 py-2 rounded">Explore more</a>
        </div>
        <div class="mt-10 flex flex-wrap justify-center gap-4 px-4">
            <!-- Replace these src with actual image paths -->
            <img src="/images/plant1.jpg" class="w-28 h-28 rounded-xl object-cover" alt="Plant 1">
            <img src="/images/plant2.jpg" class="w-28 h-28 rounded-xl object-cover" alt="Plant 2">
            <img src="/images/plant3.jpg" class="w-28 h-28 rounded-xl object-cover" alt="Plant 3">
            <img src="/images/plant4.jpg" class="w-28 h-28 rounded-xl object-cover" alt="Plant 4">
        </div>
    </section>

    <!-- About Us -->
    <section class="bg-green-900 text-white py-16 px-6 text-center">
        <h2 class="text-2xl font-semibold mb-3">Helping You Grow Beautiful Gardens</h2>
        <p class="max-w-xl mx-auto mb-5 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.</p>
        <a href="#" class="bg-white text-green-900 px-5 py-2 rounded">Learn more</a>
    </section>

    <!-- Product Section -->
    <section class="text-center py-16 bg-white px-4">
        <h3 class="text-xl text-green-900 font-semibold mb-6">Grow your garden with our quality products</h3>
        <div class="flex justify-center gap-6 flex-wrap">
            <img src="/images/product1.jpg" class="w-48 h-48 rounded-lg object-cover" alt="Product 1">
            <img src="/images/product2.jpg" class="w-48 h-48 rounded-lg object-cover" alt="Product 2">
            <img src="/images/product3.jpg" class="w-48 h-48 rounded-lg object-cover" alt="Product 3">
        </div>
    </section>

    <!-- Community Section -->
    <section class="bg-green-50 text-center py-16">
        <h3 class="text-xl font-semibold text-green-900 mb-2">Join our community of gardeners</h3>
        <p class="text-4xl text-green-800 font-bold mb-4">50,565+</p>
        <p class="text-sm mb-4 text-gray-700">People already joining</p>
        <a href="#" class="bg-green-800 text-white px-6 py-2 rounded">Yes, I want to join community</a>
    </section>

    <!-- Garden Journal -->
    <section class="relative h-96 bg-cover bg-center text-white flex items-center justify-center" style="background-image: url('/images/journal.jpg');">
        <div class="bg-green-900 bg-opacity-60 p-6 rounded">
            <h2 class="text-3xl font-bold">Explore our garden journal</h2>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="text-center py-16">
        <h3 class="text-xl text-green-900 font-semibold mb-6">What our client say</h3>
        <div class="flex justify-center flex-wrap gap-8 px-4">
            <div class="max-w-xs text-left">
                <img src="/images/client1.jpg" class="w-20 h-20 rounded-full mb-2" alt="Client 1">
                <p class="font-semibold text-green-900">Jhon Smit</p>
                <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Massa vulputate posuere euismod vel.</p>
            </div>
            <div class="max-w-xs text-left">
                <img src="/images/client2.jpg" class="w-20 h-20 rounded-full mb-2" alt="Client 2">
                <p class="font-semibold text-green-900">Another Client</p>
                <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Massa vulputate posuere euismod vel.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-green-900 text-white py-6 text-center text-sm">
        <p>© {{ date('Y') }} FloraTrade. All rights reserved.</p>
    </footer>

</body>
</html>

</html>