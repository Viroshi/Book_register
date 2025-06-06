const link = document.querySelector(".theme");
const buttonTheme = document.querySelector(".buttonTheme");


function toggleTheme()
{
    const themeAlt = buttonTheme.getAttribute("alt");
    const buttonMode = buttonTheme.getAttribute("src");
    const current = link.getAttribute("href");
    const classButton = buttonTheme.getAttribute("class");


    const newTheme = current === 'theme/light.css' ? 'theme/dark.css' : 'theme/light.css';
    link.setAttribute('href', newTheme);
    
    const newThemeAlt = themeAlt === "Tema escuro" ? "Tema claro" : "Tema escuro";
    buttonTheme.setAttribute('alt', newThemeAlt);
    buttonTheme.src = buttonMode === "images/dark_mode.svg" ? "images/light_mode.svg" : "images/dark_mode.svg";
    
    const toggleButton = classButton === "light" ? "dark" : "light";
    buttonTheme.classList.remove(classButton);
    buttonTheme.classList.add(toggleButton);
}

const containerLogin = document.querySelector(".container-login")

function toggleCad()
{
    const value = containerLogin.classList[1];
    const newValue = value === "row-verse" ? "row-reverse" : "row-verse";
    containerLogin.classList.remove(value);
    containerLogin.classList.add(newValue); 
}