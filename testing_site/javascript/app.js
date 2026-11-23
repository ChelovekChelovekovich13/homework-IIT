'use strict';
const switcher = document.querySelector('.btn');
const savedTheme = localStorage.getItem('theme');

if (savedTheme) {
    document.body.className = savedTheme;
    if (savedTheme === "light-theme") {
        switcher.textContent = "Включить тёмную тему";
    } else {
        switcher.textContent = "Включить мерзкую тему"; 
    }
}
switcher.addEventListener('click', function() {
    document.body.classList.toggle('light-theme');
    document.body.classList.toggle('dark-theme');

    const className = document.body.className;
    localStorage.setItem('theme', className);

    if(className == "light-theme") {
        this.textContent = "Включить тёмную тему";
    } else {
        this.textContent = "Включить мерзкую тему";
    }

    console.log('current class name: ' + className);
    console.log('Пиздуй нахуй отсюда')
});