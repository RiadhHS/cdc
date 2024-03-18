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
                    <a href="{{ route('/') }}">
                        <button type="button" class="w-full flex items-center justify-center w-1/2 px-5 py-2 text-sm transition-colors duration-200 bg-red-700 border rounded-lg gap-x-2 sm:w-auto  text-white">
                            <svg class="w-5 h-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                            </svg>
                            <span>Revenir</span>
                        </button>
                          </a>
                <div class="pt-16">
                    <h2 class = "text-red-700 text-3xl text-center">L'Assemblé génerale prendra place le</h2>
                </div>
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                      <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                          <table
                            class="min-w-full text-left text-sm font-light text-surface dark:text-white">
                           
                            <tbody>
                                <tr
                                class="border-b border-neutral-200 bg-white dark:border-white/10 dark:bg-body-dark">
                                <td class="whitespace-nowrap px-6 py-4 font-medium text-red-700 ">Date</td>
                               
                                <td class="whitespace-nowrap px-6 py-4">----</td>
                              </tr>
                              <tr
                                class="border-b border-neutral-200 bg-red-50 dark:border-white/10">
                                <td class="whitespace-nowrap px-6 py-4 font-medium text-red-700">Lieu</td>
                                
                                <td class="whitespace-nowrap px-6 py-4">---</td>
                              </tr>
                              <tr
                                class="border-b border-neutral-200 bg-white dark:border-white/10 dark:bg-body-dark">
                                <td class="whitespace-nowrap px-6 py-4 font-medium text-red-700">Ordre du jour</td>
                               
                                <td class="whitespace-nowrap px-6 py-4">---</td>
                              </tr>
                              <tr
                                class="border-b border-neutral-200 bg-red-50 dark:border-white/10">
                                <td class="whitespace-nowrap px-6 py-4 font-medium text-red-700">Condition de participation</td>
                                <td class="whitespace-nowrap px-6 py-4">---</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="flex justify-between px-24 mt-16">
                    <a href="{{ route('inscriptionag') }}">
                      <button class="bg-red-700 text-white h-14 font-bold px-8 py-2 hover:bg-red-800">
                        Inscription à l'AG
                      </button>
                    </a>
                    <a href="{{ route('inscriptionojag') }}">
                      <button class="bg-red-700 text-white h-14 font-bold px-8 py-2 hover:bg-red-800">
                        Inscription à l'ordre du jour de l'AG
                      </button>
                    </a>
                    <a href="{{ route('depot') }}">
                      <button class="bg-red-700 text-white h-14 font-bold px-8 py-2 hover:bg-red-800">
                        Dépôt de candidature
                      </button>
                    </a>
                  </div>
                  
                    
            </div>
        </div>  
        
       
    </body>
</html>
