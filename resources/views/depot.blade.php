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
                    Déclaration de candidature à l’élection
                    </h1>
                    <p class="text-center text-2xl pt-4">Avez-vous déjà un compte ? <a href="{{ route('inscriptionag') }}" class=" font-semibold text-red-700 underline">Connectez-vous ici.</a></p>
                    <div class="container mx-auto px-4 py-8">
                        <div class="container mx-auto px-4 py-8">
                            <div class="flex flex-col space-y-4">
                                <div class="flex items-center mb-4">
                                <label for="nom" class="block text-sm font-medium text-red-700 pr-14">Mon email</label>
                                <div class="row-span-1 md:row-span-2">
                                  <input type="text" id="nom" name="nom" class="w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                                </div>
                              </div>
                          
                              <div class="flex items-center mb-4">
                                <label for="nom" class="block text-sm font-medium text-red-700 pr-10">Mot de passe</label>
                                <div class="row-span-1 md:row-span-2">
                                  <input type="text" id="nom" name="nom" class="w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                                </div>
                              </div>
                              <p class="text-center pt-4">Sinon, inscrivez-vous d’abord à l’AG <a href="{{ route('inscriptionag') }}" class=" font-semibold text-red-700 underline">ici.</a></p>
                             
                            <div class="flex items-center mb-4">
                              <input type="checkbox" id="terms" name="terms" class="w-5 h-5 accent-primary focus:ring-primary focus:ring-offset-white">
                              <label for="terms" class="ml-2 text-sm text-gray-700">
                                J'atteste réception de la convocation à la prochaine assemblée générale de copropriété programmée au (indiquer la date de l'assemblée générale).
                              </label>
                            </div>
                            <div class="flex items-center mb-4">
                                <input type="checkbox" id="terms" name="terms" class="w-5 h-5 accent-primary focus:ring-primary focus:ring-offset-white">
                                <label for="terms" class="ml-2 text-sm text-gray-700">
                                    J’atteste avoir pris connaissance des dispositions réglementaires régissant la copropriété dénommée « Centre Commercial & d’Affaires El-Qods – Chéraga » prévues par le règlement de copropriété établi par acte notarié selon les prescriptions du décret n° 14-99 du 4 mars 2014 et des articles 743 à 772 de l’ordonnance n° 75-58 du 26 septembre 1975 portant code civil.
                                </label>
                              </div>
                              <div class="flex items-center mb-4">
                                <input type="checkbox" id="terms" name="terms" class="w-5 h-5 accent-primary focus:ring-primary focus:ring-offset-white">
                                <label for="terms" class="ml-2 text-sm text-gray-700">
                                    Je déclare être candidat à l’élection prévu le 4 Avril 2024 en postulant pour le poste de 
                                </label>
                              </div>

                              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="flex flex-col">
                                  <div class="flex items-center mb-2">
                                    <input type="checkbox" id="checkbox1" name="checkbox1" class="w-5 h-5 accent-primary focus:ring-primary focus:ring-offset-white">
                                    <label for="checkbox1" class="ml-2 text-sm text-gray-700">Président du Syndic de la copropriété</label>
                                  </div>
                                  <div class="flex items-center mb-2">
                                    <input type="checkbox" id="checkbox2" name="checkbox2" class="w-5 h-5 accent-primary focus:ring-primary focus:ring-offset-white">
                                    <label for="checkbox2" class="ml-2 text-sm text-gray-700">Membre du Syndic de la copropriété</label>
                                  </div>
                                  <div class="flex items-center mb-2">
                                    <input type="checkbox" id="checkbox3" name="checkbox3" class="w-5 h-5 accent-primary focus:ring-primary focus:ring-offset-white">
                                    <label for="checkbox3" class="ml-2 text-sm text-gray-700">Président du Conseil syndical des copropriétaires</label>
                                  </div>
                                  <div class="flex items-center">
                                    <input type="checkbox" id="checkbox4" name="checkbox4" class="w-5 h-5  accent-red-700 focus:ring-primary focus:ring-offset-white">
                                    <label for="checkbox4" class="ml-2 text-sm text-gray-700">Membre du Conseil syndical des copropriétaires</label>
                                  </div>
                                </div>
                                <div></div>  </div>
                              
                            
                              
                          <button type="submit" class="w-full md:w-auto mx-auto px-4 py-2 bg-red-700 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 text-center">
                            Validation
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
