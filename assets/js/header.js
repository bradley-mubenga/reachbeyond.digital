const button = document.getElementById('toggleButton');
const dropDownButton = document.getElementById('dropDownButton');
const dropDownMenu = document.getElementById('dropDownItems');
const icon = document.getElementById('icon');
const closeIcon = "https://ik.imagekit.io/yrdximse9a/reachbeyond/close-button.png?updatedAt=1681212231741";
const openIcon = "https://ik.imagekit.io/yrdximse9a/reachbeyond/menu.png?updatedAt=1681212232004";
const responsiveNavBar = document.getElementById('navbarLinks');
const htmlDOC = document.getElementById("html");

button.addEventListener('click', (e) => {
    e.preventDefault();
    responsiveNavBar.classList.toggle('active');
    htmlDOC.classList.toggle('hideOrShow');

    if (icon.src == `${closeIcon}`)
    {
        icon.src = `${openIcon}`;
    }
    else if (icon.src == `${openIcon}`)
    {
        icon.src = `${closeIcon}`;
    }
    else console.log("ERROR: CHECK header.js")
});

dropDownButton.addEventListener('click', (e) => {
    e.preventDefault();
    if (window.innerWidth <= 991)
    {
        dropDownMenu.classList.toggle('activeMenu');
    }

    else
    {
        console.log("Desktop viewport")
    }
})

