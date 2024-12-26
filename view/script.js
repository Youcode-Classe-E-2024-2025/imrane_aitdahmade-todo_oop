// js/main.js
document.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector("form");
    const taskList = document.querySelector("#tasks .grid");

    form.addEventListener("submit", (e) => {
        e.preventDefault();

        // Récupérer les données du formulaire
        const title = document.getElementById("title").value;
        const description = document.getElementById("description").value;
        const status = document.getElementById("status").value;

        // Ajouter une nouvelle tâche à la liste (exemple simple)
        const taskItem = document.createElement("li");
        taskItem.textContent = `${title} - ${description}`;
        taskItem.className = "border-b py-2";

        const column = taskList.querySelector(`.${status.toLowerCase()}`);
        if (column) column.querySelector("ul").appendChild(taskItem);

        // Réinitialiser le formulaire
        form.reset();
    });
});
