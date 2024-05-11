<?php include("path.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="assets/css/admin_styles.css">
    <link rel="stylesheet" href="assets/css/public.css">
    
    <title>Posts by Andy Hwang</title>

</head>
<body>
    
    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
    
    <!-- Page Banner -->
    <section class="page-banner">
        <div class="user-banner-container">
            <div class="image-wrapper">
                <img src="assets/images/avatar/andy_profile_pic.png" alt="">
            </div>
            <div class="author-name"><h1>Andy Hwang</h1></div>
            <div class="author-info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia atque ab a sequi dolores reprehenderit sapiente cupiditate iusto officiis nam eum repellat corporis aliquam, maxime voluptates deserunt! Aliquam, consequuntur ipsum?</div>
            <div class="social-links">
                <a href="https://www.facebook.com/hgc93/"><ion-icon name="logo-facebook" class="social-icon"></ion-icon></a>
                <a href="https://www.instagram.com/hgc_93/"><ion-icon name="logo-instagram" class="social-icon"></ion-icon></a>
                <a href="https://www.linkedin.com/in/andy-hwang-b12321199/"><ion-icon name="logo-linkedin" class="social-icon"></ion-icon></a>
                <a href="https://github.com/andyghwang/websitev2"><ion-icon name="logo-github" class="social-icon"></ion-icon></a>
            </div>
        </div>
    </section>

    <!-- Page Container -->
    <div class="default-page-container page-container single-page">

        <!-- Main Content -->
        <div class="main-content">
            <div class="post-content">

                <article class="post-card landscape">
                    <div class="image-wrapper bg-image" 
                        style="background-image: url(assets/images/featured_images/cybersecurity.jpg);">
                    </div>
                    <div class="post-info">
                        <div class="topic-wrapper">
                            <a href="" class="topic-tag td-none">Cybersecurity</a>
                            <span class="gray-1">5 min</span>
                        </div>
                        <div class="post-title">
                            <a href="" class="td-none">
                                <h3>Cybersecurity and CompTIA Security+ Certification</h3>
                            </a>
                        </div>
                        <div class="post-preview">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, tenetur temporibus 
                                doloribus modi esse, odio non ipsa suscipit qui quia accusamus laborum voluptas cupiditate 
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, tenetur temporibus 
                                doloribus modi esse, odio non ipsa suscipit qui quia accusamus laborum voluptas cupiditate
                            </p>
                        </div>
                        <div class="author-info">
                            <div class="author">
                                <img src="assets/images/avatar/andy_profile_pic.png" class="avatar" alt="">
                                <a href="" class="link">Andy Hwang</a>
                            </div>
                            <a href="" class="link">Read More <ion-icon name="arrow-forward-outline" class="ionic-icon"></ion-icon></a>
                        </div>
                    </div>    
                </article>
                <!-- Slide 2 -->
                <article class="post-card landscape">
                    <div class="image-wrapper bg-image" 
                        style="background-image: url(assets/images/featured_images/networking.jpg);">
                    </div>
                    <div class="post-info">
                        <div class="topic-wrapper">
                            <a href="" class="topic-tag td-none">Networking</a>
                            <span class="gray-1">5 min</span>
                        </div>
                        <div class="post-title">
                            <a href="" class="td-none">
                                <h3>Studying for the CCNA Certification Using PacketTracer</h3>
                            </a>
                        </div>
                        <div class="post-preview">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, tenetur temporibus 
                                doloribus modi esse, odio non ipsa suscipit qui quia accusamus laborum voluptas cupiditate 
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, tenetur temporibus 
                                doloribus modi esse, odio non ipsa suscipit qui quia accusamus laborum voluptas cupiditate
                            </p>
                        </div>
                        <div class="author-info">
                            <div class="author">
                                <img src="assets/images/avatar/andy_profile_pic.png" class="avatar" alt="">
                                <a href="" class="link">Andy Hwang</a>
                            </div>
                            <a href="" class="link">Read More <ion-icon name="arrow-forward-outline" class="ionic-icon"></ion-icon></a>
                        </div>
                    </div>    
                </article>
            </div>
        </div>
     
       <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-section topics-section">
                <h2 class="title center">Topics</h2>
                <div class="topic-list center">
                    <a href="">Cybersecurity</a>
                    <a href="">Networking</a>
                    <a href="">Programming</a>
                    <a href="">Web Development</a>
                    <a href="">Database</a>
                    <a href="">Networking</a>
                    <a href="">Networking</a>
                </div>
            </div>
            <div class="sidebar-section">
                <!-- <img src="assets/images/featured_images/mocha.JPEG" style="width: 300px;" alt=""> -->
            </div>
        </div>
    </div>
    <!-- //Page Container -->



    <!-- Footer -->
    <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>

    <!-- Ionic Icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- Javascript -->
    <script>

        // Search Toggle
        const searchIcon = document.querySelector('.search-icon');
        const headerSearchForm = document.querySelector('.header-search-form');
        const searchInput = document.querySelector('.search-input');
        const logoWrapper = document.querySelector('.logo-wrapper');
        const mobileBreakPoint = 768;


        searchIcon.addEventListener('click', toggleSearchBar)
        searchInput.addEventListener('blur', toggleSearchBar)

        function toggleSearchBar() {
            searchIcon.classList.toggle('hide');
            headerSearchForm.classList.toggle('hide');
            searchInput.focus();

            if (window.innerWidth <= mobileBreakPoint) {
                logoWrapper.classList.toggle('hide');
            }

        }

        // Navbar Responsiveness
        const menuIcon = document.querySelector('.menu-icon');
        const navMenu = document.querySelector('.navmenu');
        const navOverlay = document.querySelector('.nav-overlay');
        const dropdowns = document.querySelectorAll('.navitem .dropdown')

        menuIcon.addEventListener('click', function(){
            navMenu.classList.add('open');
            navOverlay.classList.add('open');
        })

        navOverlay.addEventListener('click', function(){
            navOverlay.classList.remove('open');
            navMenu.classList.remove('open');
        })

        dropdowns.forEach(dropdown => {
            const navItem = dropdown.closest('.navitem');
            navItem.addEventListener('click', function(){
                navItem.classList.toggle('active');
            });
        })

    </script>
</body>
</html>