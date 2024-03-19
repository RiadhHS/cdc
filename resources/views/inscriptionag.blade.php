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
                <h1 class="text-red-700 text-4xl text-center">Formulaire<br>
                    Demande d'inscription à l'AG
                    </h1>
                    <a href="{{ route('/') }}">
                      <button type="button" class="w-full flex items-center justify-center w-1/2 px-5 py-2 text-sm transition-colors duration-200 bg-red-700 border rounded-lg gap-x-2 sm:w-auto  text-white">
                          <svg class="w-5 h-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                          </svg>
                          <span>Revenir</span>
                      </button>
                        </a>
                    <div class="container mx-auto px-4 py-8">
                        <div class="container mx-auto px-4 py-8">
                            <div class="flex flex-col space-y-4">
                              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <label for="nom" class="block text-sm font-medium text-red-700">Nom</label>
                                <div class="col-span-1 md:col-span-2">
                                  <input type="text" id="nom" name="nom" class="w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                                </div>
                              </div>
                          
                              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <label for="prenom" class="block text-sm font-medium text-red-700">Prénom</label>
                                <div class="col-span-1 md:col-span-2">
                                  <input type="text" id="prenom" name="prenom" class="w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                                </div>
                              </div>
                          
                              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <label for="mobile" class="block text-sm font-medium text-red-700">N°Mobile</label>
                                <div class="col-span-1 md:col-span-2">
                                  <input type="tel" id="mobile" name="mobile" class="w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                                </div>
                              </div>
                          
                              <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
                                <label for="coproprietaire" class="block text-sm font-medium text-red-700">Copropriétaire du lot N°</label>
                                <div class="col-span-1 md:col-span-2">
                                  <div class="flex space-x-4">
                                    <input type="text" id="lot_number" name="lot_number" class="w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                                    <label for="immeuble" class="text-sm font-medium text-red-700">Immeuble situé</label>
                                    <input type="text" id="immeuble" name="immeuble" class="w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                                  </div>
                                </div>
                              </div>
                              <div class="flex flex-col items-center">
                                <div class="flex items-center mb-4">
                                    <label for="fileInput1" class="w-1/6 mr-2 text-sm font-medium text-gray-700">File 1:</label>
                                    <input type="file" name="fileInput1" id="fileInput1" class="w-full p-2 rounded-md border border-gray-300">
                                </div>
                                <div class="flex items-center">
                                    <label for="fileInput2" class=" w-1/6 mr-2 text-sm font-medium text-gray-700">File 2:</label>
                                    <input type="file" name="fileInput2" id="fileInput2" class="w-full p-2 rounded-md border border-gray-300">
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                              <label for="prenom" class="block text-sm font-medium text-red-700">Mon Email</label>
                              <div class="col-span-1 md:col-span-2">
                                <input type="text" id="prenom" name="prenom" class="w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                              </div>
                            </div>
                        
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                              <label for="mobile" class="block text-sm font-medium text-red-700">Mot de passe</label>
                              <div class="col-span-1 md:col-span-2">
                                <input type="password" id="mobile" name="mobile" class="w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                              </div>
                            </div> 
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                              <label for="mobile" class="block text-sm font-medium text-red-700">Répéter le mot de passe </label>
                              <div class="col-span-1 md:col-span-2">
                                <input type="password" id="mobile" name="mobile" class="w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                              </div>
                            </div>  
                            <div class="flex items-center mb-4">
                              <input type="checkbox" id="terms" name="terms" class="w-5 h-5 accent-primary focus:ring-primary focus:ring-offset-white mb-4">
                              <label for="terms" class="ml-2 text-sm text-gray-700">
                                J'accepte que mes données personnelles soient collectées et traitées conformément à la loi n° 18-07 du 10 juin 2018 relative à la protection des personnes physiques dans le traitement des données à caractère personnel.
                              </label>
                            </div>
                          <button type="submit" class="w-full md:w-auto mx-auto px-4 py-2 bg-red-700 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 text-center">
                            Créer mon compte
                          </button>
                        </div>
                      </div>
                    
            </div>
        </div>  
        
       
    </body>
    @section('scripts')
<script>
  // JavaScript for adding dynamic file input fields
  const addFileButton = document.getElementById('addFileButton');
  const dynamicFileInputs = document.getElementById('dynamicFileInputs');

  addFileButton.addEventListener('click', () => {
    const newFileInput = document.createElement('div');
    newFileInput.classList.add('flex', 'items-center', 'mt-2');

    const removeButton = document.createElement('button');
    removeButton.classList.add('ml-2', 'text-red-500', 'hover:text-red-700', 'focus:outline-none');
    removeButton.textContent = 'Supprimer';
    removeButton.addEventListener('click', () => dynamicFileInputs.removeChild(newFileInput));

    const fileInput = document.createElement('input');
    fileInput.type = 'file';
    fileInput.name = 'documents[]'; // Array name for multiple files
    fileInput.classList.add('w-full', 'px-3', 'py-2', 'rounded-md', 'border', 'border-gray-300', 'focus:outline-none', 'focus:ring-blue-500', 'focus:border-blue-500');

    newFileInput.appendChild(fileInput);
    newFileInput.appendChild(removeButton);

    dynamicFileInputs.appendChild(newFileInput);
  });
</script>
@endsection
</html>
