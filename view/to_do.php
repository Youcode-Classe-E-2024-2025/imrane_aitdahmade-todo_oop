<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskFlow - Gestion des Tâches</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans">
    <!-- Navigation -->
    <header class="bg-blue-600 text-white py-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">TaskFlow</h1>
            <nav>
                <a href="#tasks" class="px-4 py-2 hover:bg-blue-700 rounded">Tâches</a>
                <a href="#create-task" class="px-4 py-2 hover:bg-blue-700 rounded">Créer</a>
                <a href="#users" class="px-4 py-2 hover:bg-blue-700 rounded">Utilisateurs</a>
            </nav>
        </div>
    </header>

    <!-- Liste des Tâches -->
    <section id="tasks" class="container mx-auto mt-8">
        <h2 class="text-xl font-bold mb-4">Liste des Tâches</h2>
        <div class="grid grid-cols-3 gap-6">
            <!-- Colonne : To Do -->
            <div>
                <h3 class="text-lg font-semibold bg-yellow-300 p-2 rounded">To Do</h3>
                <ul class="bg-white p-4 shadow rounded">
                    <li class="border-b py-2">Tâche 1</li>
               
                </ul>
            </div>
            <!-- Colonne : Doing -->
            <div>
                <h3 class="text-lg font-semibold bg-blue-300 p-2 rounded">Doing</h3>
                <ul class="bg-white p-4 shadow rounded">
                 
                </ul>
            </div>
            <!-- Colonne : Done -->
            <div>
                <h3 class="text-lg font-semibold bg-green-300 p-2 rounded">Done</h3>
                <ul class="bg-white p-4 shadow rounded">
                   
                   
                </ul>
            </div>
        </div>
    </section>

    <!-- Formulaire de Création -->
    <section id="create-task" class="container mx-auto mt-8">
        <h2 class="text-xl font-bold mb-4">Créer une Nouvelle Tâche</h2>
        <form class="bg-white p-6 shadow rounded">
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium">Titre</label>
                <input type="text" id="title" class="w-full border p-2 rounded">
            </div>
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium">Description</label>
                <textarea id="description" class="w-full border p-2 rounded"></textarea>
            </div>
            <div class="mb-4">
                <label for="status" class="block text-sm font-medium">Statut</label>
                <select id="status" class="w-full border p-2 rounded">
                    <option value="to do">To Do</option>
                    <option value="doing">Doing</option>
                    <option value="done">Done</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="assigned-user" class="block text-sm font-medium">Utilisateur Assigné</label>
                <input type="text" id="assigned-user" class="w-full border p-2 rounded">
            </div>
            <div class="mb-4">
                <label for="status" class="block text-sm font-medium">Statut</label>
                <select id="status" class="w-full border p-2 rounded">
                    <option value="to do">To Do</option>
                    <option value="doing">Doing</option>
                    <option value="done">Done</option>
                </select>
            </div>
         

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Créer</button>
        </form>
    </section>

    <!-- Liste des Utilisateurs -->
    <section id="users" class="container mx-auto mt-8">
        <h2 class="text-xl font-bold mb-4">Liste des Utilisateurs</h2>
        <ul class="bg-white p-4 shadow rounded">
            <li class="border-b py-2"></li>
          
         
        </ul>
    </section>

    <script src="script.js"></script>
</body>

</html>
