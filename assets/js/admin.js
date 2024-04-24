// Sidebar Responsiveness

const menuIcon = document.querySelector('.menu-icon');
const sidebar = document.querySelector('.sidebar');
const navOverlay = document.querySelector('.nav-overlay');
const dropdowns = document.querySelectorAll('.navitem .dropdown')

menuIcon.addEventListener('click', function(){
    sidebar.classList.add('open');
    navOverlay.classList.add('open');
})

navOverlay.addEventListener('click', function(){
    navOverlay.classList.remove('open');
    sidebar.classList.remove('open');
})

dropdowns.forEach(dropdown => {
    const navItem = dropdown.closest('.navitem');
    navItem.addEventListener('click', function(){
        navItem.classList.toggle('active');
    });
})



