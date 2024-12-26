<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<nav class="bg-blue-600 w-full py-3 shadow-lg text-white mb-4 ">
        <div class="container mx-auto text-center">
            <h1 class="text-xl font-bold">Hello </h1>
        </div>
    </nav>
<div class="bg-blue-500 w-20 h-20 py-3 shadow-lg flex justify-center items-center rounded-full justify-self-center hover:bg-blue-800  mb-4 ">
<img src="../_images/add_24dp_FFFFFF_FILL0_wght400_GRAD0_opsz24.png" alt="">
</div>

    <div class="max-w-lg mx-auto bg-white p-6 rounded shadow-md hidden  p-full">
    <h2 class="text-2xl font-bold mb-4 text-gray-800 text-center">Ajouter une Nouvelle Tâche</h2>
    <form id="taskForm" class="space-y-4">
        <!-- Titre de la tâche -->
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">Titre de la tâche</label>
            <input type="text" id="title" name="title" placeholder="Entrez le titre" required
                class="w-full mt-1 border rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>

        <!-- Description -->
        <div>
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea id="description" name="description" rows="4" placeholder="Entrez les détails de la tâche" required
                class="w-full mt-1 border rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"></textarea>
        </div>

        <!-- Type de tâche -->
        <div>
            <label for="type" class="block text-sm font-medium text-gray-700">Type de Tâche</label>
            <select id="type" name="type" required
                class="w-full mt-1 border rounded-lg px-3 py-2 bg-white focus:ring-2 focus:ring-blue-500 focus:outline-none">
                <option value="">Sélectionnez un type</option>
                <option value="basique">Basique</option>
                <option value="bug">Bug</option>
                <option value="feature">Feature</option>
            </select>
        </div>

        <!-- Statut -->
        <div>
            <label for="status" class="block text-sm font-medium text-gray-700">Statut</label>
            <select id="status" name="status" required
                class="w-full mt-1 border rounded-lg px-3 py-2 bg-white focus:ring-2 focus:ring-blue-500 focus:outline-none">
                <option value="À faire">À faire</option>
                <option value="En cours">En cours</option>
                <option value="Terminé">Terminé</option>
            </select>
        </div>

        <!-- Assignation -->
        <div>
            <label for="assignee" class="block text-sm font-medium text-gray-700">Attribué à</label>
            <input type="text" id="assignee" name="assignee" placeholder="Nom de l'utilisateur" required
                class="w-full mt-1 border rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>

        <!-- Bouton Ajouter -->
        <div>
            <button type="submit"
                class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">Ajouter la Tâche</button>
        </div>
    </form>
</div>
<div class="container mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Liste des Tâches</h2>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white rounded shadow-md">
            <thead class="bg-blue-600 text-white">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-medium">ID</th>
                    <th class="px-6 py-3 text-left text-sm font-medium">Titre</th>
                    <th class="px-6 py-3 text-left text-sm font-medium">Type</th>
                    <th class="px-6 py-3 text-left text-sm font-medium">Statut</th>
                    <th class="px-6 py-3 text-left text-sm font-medium">Attribué à</th>
                    <th class="px-6 py-3 text-left text-sm font-medium">Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Exemple de tâche -->
                <tr class="border-b hover:bg-gray-100">
                    <td class="px-6 py-4 text-sm text-gray-700">1</td>
                    <td class="px-6 py-4 text-sm text-gray-700">Corriger un bug</td>
                    <td class="px-6 py-4 text-sm text-gray-700">Bug</td>
                    <td class="px-6 py-4 text-sm">
                        <span class="bg-yellow-200 text-yellow-800 py-1 px-3 rounded-full text-xs">En cours</span>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-700">Jean Dupont</td>
                    <td class="px-6 py-4 flex space-x-2">
                        <button
                            class="bg-green-500 text-white py-1 px-3 rounded text-xs hover:bg-green-600">Modifier</button>
                        <button
                            class="bg-red-500 text-white py-1 px-3 rounded text-xs hover:bg-red-600">Supprimer</button>
                    </td>
                </tr>

                <!-- Ajouter d'autres tâches ici -->
            </tbody>
        </table>
    </div>
</div>
</body>
</html>