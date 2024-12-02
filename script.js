// Definir los elementos del menu dinámico con iconos
const menuItems = [
    { name: "Pagina personal", link: "pagina personal/paginaPersonal.html", icon: "bi-file-earmark-person" },
    { name: "Etiquetas html", link: "102 etiquetas/index.html", icon: "bi-tags" },
    { name: "Menu banrreservas", link: "banrreservas/index.html", icon: "bi-building" },
    { name: "Algoritmo modulo 10", link: "modulo 10/index.html", icon: "bi-calculator" },
    { name: "Menu dinamico Json", link: "menu dinamico Json/index.html", icon: "bi-list-ul" },
    { name: "Formulario con multiples paginas", link: "Formulario_multiples_paginas/index.html", icon: "bi-file-earmark-text" },
    { name: "Generar codigo QR", link: "codigo_QR/index.html", icon: "bi-qr-code" },
    { name: "Libreria para realizar graficos", link: "libreria_graficos/index.html", icon: "bi-bar-chart-line" },
    { name: "Formulario con acceso a Base de Datos", link: "formulario_accesoDB/index.html", icon: "bi-database" }
];

// Asignar los enlaces del menu dinamicamente con iconos
const menu = document.getElementById("menu");

menuItems.forEach((item) => {
    const li = document.createElement("li");
    li.classList.add("menu-item");

    const a = document.createElement("a");
    a.href = item.link;
    a.target = "_blank"; // Abre el enlace en una nueva pestaña

    // Crear el icono
    const icon = document.createElement("i");
    icon.classList.add("bi", item.icon); // Asigna la clase del icono

    // Agregar el icono y el texto al enlace
    a.appendChild(icon);
    a.innerHTML += ` ${item.name}`; // Agregar el nombre del menu despues del icono

    li.appendChild(a);
    menu.appendChild(li);
});