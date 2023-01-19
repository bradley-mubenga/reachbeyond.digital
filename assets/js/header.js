const button = document.getElementById('toggleButton');
const icon = document.getElementById('icon');
const closeIcon = "/wp-content/themes/reachbeyond-wp-template/assets/images/close-button.png";
const openIcon = "/wp-content/themes/reachbeyond-wp-template/assets/images/menu.png";
const responsiveNavBar = document.getElementById('navbarLinks');
const htmlDOC = document.getElementById("html");

button.addEventListener('click', (e) => {
    e.preventDefault();
    responsiveNavBar.classList.toggle('active');
    htmlDOC.classList.toggle('hideOrShow');

    if (icon.src == `${document.location.origin}${closeIcon}`)
    {
        icon.src = `${document.location.origin}${openIcon}`;
    }
    else if (icon.src == `${document.location.origin}${openIcon}`)
    {
        icon.src = `${document.location.origin}${closeIcon}`;
    }
    else console.log("ERROR: CHECK header.js")
})