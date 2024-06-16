document.getElementById('darkModeIcon').addEventListener('click', function () {
    this.classList.toggle('bi-moon');
    this.classList.toggle('bi-sun');
    let theme = document.documentElement.getAttribute('data-bs-theme');
    if (theme === 'dark') {
        document.documentElement.removeAttribute('data-bs-theme');
        document.getElementById("myspan").innerText = "Light";
    } else {
        document.documentElement.setAttribute('data-bs-theme', 'dark');
        document.getElementById("myspan").innerText = "Dark";
    }
});