<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>CDC</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
       
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="flex justify-center items-center">
            <div class="border border-red-700 px-10 py-5 w-3/4 border-4">
                <h1 class="text-red-700 text-4xl text-center">Menu d’accueil du Centre<br>
                    Commercial & d’Affaires El-Qods Chéraga
                    </h1>
                    <div class="flex justify-between px-[300px] mt-16">
                    <a href="{{ route('visiteurs') }}"><button class="bg-red-700 text-white h-14 w-[150px]  font-bold mx-4">Visiteur</button></a>
                    <a href="{{ route('coproprietaire') }}"><button class="bg-red-700 text-white h-14 w-[150px] font-bold mx-4">Copropriétaire</button></a>
                    </div>
            </div>
        </div>  
        
       
    </body>
</html>
