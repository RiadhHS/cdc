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
                              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <label for="nom" class="block text-sm font-medium text-red-700">Joindre les pièces suivantes</label>
                                <div class="col-span-1 md:col-span-2">
                                  <input type="text" id="nom" name="nom" class="w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                                </div>
                              </div>
                              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <label for="documents" class="block text-sm font-medium text-red-700">Joindre les pièces suivantes</label>
                                <div class="col-span-1 md:col-span-2 flex flex-col space-y-2">
                          
                                  <div class="flex items-center">
                                    <input type="file" id="document1" name="documents[]" class="w-full px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                                    <button type="button" class="ml-2 text-red-500 hover:text-red-700 focus:outline-none">Supprimer</button>
                                  </div>
                          
                                  <div id="dynamicFileInputs"></div>
                          
                                  <button type="button" id="addFileButton" class="text-sm font-medium text-red-500 hover:text-red-700 focus:outline-none">Ajouter un fichier</button>
                                </div>
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
