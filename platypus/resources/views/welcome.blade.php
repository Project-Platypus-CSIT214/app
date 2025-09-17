<div class="bg-gray-50 font-sans">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlyDreamAir Loyalty Program</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

   <!-- Navbar -->
   <nav class="bg-white shadow-md sticky top-0 z-50">
       <div class="container mx-auto px-6 py-4 flex flex-wrap items-center justify-between">
           <!-- Logo -->
           <a href="#" class="text-2xl font-bold text-blue-600 hover:text-blue-700 transition">FlyDreamAir</a>

           <!-- Links and Auth -->
           <div class="flex flex-wrap items-center gap-4">
               <a href="#earn" class="text-gray-700 hover:text-blue-600 transition">Earn Points</a>
               <a href="#redeem" class="text-gray-700 hover:text-blue-600 transition">Use Points</a>
               <a href="#status" class="text-gray-700 hover:text-blue-600 transition">Upgrade Status</a>

               @if (Route::has('login'))
                   @auth
                       <a href="{{ url('/dashboard') }}" class="text-gray-700 hover:text-blue-600 transition">Dashboard</a>
                   @else
                       <a href="{{ route('login') }}" class="text-gray-700 hover:text-blue-600 transition">Log In</a>
                       @if (Route::has('register'))
                           <a href="{{ route('register') }}" class="bg-blue-600 text-white px-3 py-1.5 rounded hover:bg-blue-700 transition">Sign Up</a>
                       @endif
                   @endauth
               @endif
           </div>
       </div>
   </nav>

   <!-- Hero Section -->
   <header class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-24">
       <div class="container mx-auto text-center px-6 animate-fadeIn">
           <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Welcome to FlyDreamAir</h1>
           <p class="text-lg md:text-xl mb-8 drop-shadow-md">Earn points, redeem rewards, and upgrade your status!</p>

           @if (Route::has('login'))
               <nav class="flex flex-wrap justify-center gap-4 mt-6 animate-fadeIn delay-200">
                   @auth
                       <a href="{{ url('/dashboard') }}" 
                          class="bg-white text-blue-600 px-6 py-3 rounded font-semibold hover:bg-gray-100 transition shadow-lg">
                           Dashboard
                       </a>
                   @else
                       <a href="{{ route('login') }}" 
                          class="bg-white text-blue-600 px-6 py-3 rounded font-semibold hover:bg-gray-100 transition shadow-lg">
                           Log In
                       </a>

                       @if (Route::has('register'))
                           <a href="{{ route('register') }}" 
                              class="bg-purple-500 text-white px-6 py-3 rounded font-semibold hover:bg-purple-700 transition shadow-lg">
                               Register
                           </a>
                       @endif
                   @endauth
               </nav>
           @endif
       </div>
   </header>

   <!-- Features Section -->
   <section id="features" class="py-20 bg-gray-50">
       <div class="container mx-auto px-6 text-center">
           <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-12 animate-fadeIn">Why Join FlyDreamAir?</h2>
           <div class="grid md:grid-cols-3 gap-8">
               <div class="bg-gradient-to-br from-blue-50 to-purple-50 p-8 rounded shadow hover:shadow-xl transition transform hover:-translate-y-2">
                   <h3 class="text-xl font-semibold mb-4">Earn Points Easily</h3>
                   <p class="text-gray-700">Collect points when you fly, book hotels, rent cars, or shop with our partners.</p>
               </div>
               <div class="bg-gradient-to-br from-blue-50 to-purple-50 p-8 rounded shadow hover:shadow-xl transition transform hover:-translate-y-2">
                   <h3 class="text-xl font-semibold mb-4">Redeem Rewards</h3>
                   <p class="text-gray-700">Use points for free flights, upgrades, exclusive experiences, and more.</p>
               </div>
               <div class="bg-gradient-to-br from-blue-50 to-purple-50 p-8 rounded shadow hover:shadow-xl transition transform hover:-translate-y-2">
                   <h3 class="text-xl font-semibold mb-4">Upgrade Your Status</h3>
                   <p class="text-gray-700">Enjoy premium benefits like lounge access, priority boarding, and bonus points.</p>
               </div>
           </div>
       </div>
   </section>

   <!-- Call to Action Section -->
   <section id="signup" class="py-24 bg-gradient-to-r from-purple-600 to-blue-600 text-white text-center">
       <h2 class="text-3xl md:text-4xl font-bold mb-6 animate-fadeIn">Join FlyDreamAir Today!</h2>
       <p class="mb-8 text-lg md:text-xl animate-fadeIn delay-200">Sign up now and start earning points on your next trip.</p>
       <a href="{{ route('register') }}" class="bg-white text-blue-600 px-6 py-3 rounded text-lg font-semibold hover:bg-gray-100 transition shadow-lg animate-fadeIn delay-400">Sign Up Now</a>
   </section>

   <!-- Footer -->
   <footer class="bg-gray-800 text-gray-200 py-10">
       <div class="container mx-auto px-6 text-center">
           <p>&copy; {{ date('Y') }} FlyDreamAir. All rights reserved.</p>
           <div class="mt-4 space-x-4">
               <a href="#" class="hover:text-white transition">Privacy Policy</a>
               <a href="#" class="hover:text-white transition">Terms of Service</a>
               <a href="#features" class="hover:text-white transition">Contact</a>
           </div>
       </div>
   </footer>

   <!-- TailwindCSS Animations -->
   <style>
       @keyframes fadeIn {
           0% { opacity: 0; transform: translateY(10px); }
           100% { opacity: 1; transform: translateY(0); }
       }
       .animate-fadeIn { animation: fadeIn 1s ease forwards; }
       .delay-200 { animation-delay: 0.2s; }
       .delay-400 { animation-delay: 0.4s; }
   </style>

</div>
