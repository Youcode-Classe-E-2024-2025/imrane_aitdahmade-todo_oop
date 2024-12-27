
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskFlow - Gestion de Tâches</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="w-full h-screen bg-gray-100 flex items-center flex-col gap-28 ">
    <nav class="bg-blue-600 w-full py-3 shadow-lg text-white ">
        <div class="container mx-auto text-center">
            <h1 class="text-xl font-bold">TaskFlow - Application web simple de gestion de tâches</h1>
        </div>
    </nav>


    <div class="bg-white p-6 rounded shadow-lg w-96  mt-20">
        <form action="../controller/adduser.php" method="post" class="space-y-4">
            <div class="flex flex-col">
                <label for="username" class="text-sm font-medium">Nom d'utilisateur</label>
                <input type="text" id="username" name="username" placeholder="Entrez votre nom"
                    class="border rounded p-2 focus:ring-2 focus:ring-blue-400 outline-none">
            </div>
            <div class="flex flex-col">
                <label for="password" class="text-sm font-medium">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe"
                    class="border rounded p-2 focus:ring-2 focus:ring-blue-400 outline-none">
            </div>
            <div>
                <button type="submit"
                    class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">cree un compte</button>
            </div>
         
        </form>
    </div>

</body>

</html>
