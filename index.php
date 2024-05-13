<?php 
include('path.php'); 
include(ROOT_PATH . '/app/database/db.php');
include(ROOT_PATH . '/app/controllers/topics.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <!-- Styles -->
    <link rel="stylesheet" href="assets/css/admin_styles.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/public.css?v=<?php echo time(); ?>">
    
    <title>Home</title>


</head>
<body>
    
    <!-- Navbar -->
    <?php include(ROOT_PATH . '/app/includes/header.php'); ?>
    <!-- Flash Message -->
    <?php include(ROOT_PATH . '/app/includes/messages.php'); ?>

    <!-- Page Container -->

    <div class="default-page-container">

        <!-- Featured Article -->
        <h1 class="center">Featured Article</h1>
        <article class="post-card landscape featured-post">       
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
                        <h3>Learning Tailwind CSS</h3>
                    </a>
                </div>
                <div class="post-preview">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, tenetur temporibus 
                        doloribus modi esse, odio non ipsa suscipit qui quia accusamus laborum voluptas cupiditate 
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, tenetur temporibus 
                        doloribus modi esse, odio non ipsa suscipit qui quia accusamus laborum voluptas cupiditate 
                        illo aliquam fugit! Vero, asperiores voluptatem.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, tenetur temporibus 
                        doloribus modi esse, odio non ipsa suscipit qui quia accusamus laborum voluptas cupiditate 
                        illo aliquam fugit! Vero, asperiores voluptatem.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, tenetur temporibus 
                        doloribus modi esse, odio non ipsa suscipit qui quia accusamus laborum voluptas cupiditate 
                        illo aliquam fugit! Vero, asperiores voluptatem.
                        illo aliquam fugit! Vero, asperiores voluptatem.
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

        <!-- Carousel Begin -->

        <section class="page-section carousel-container">
            
            <div class="carousel-header">
                <h2>Best of 2024</h2>
                <a href="" class="link">See All</a>
            </div>

            <!-- Previous Next Arrow -->
            <button class="next-arrow slider-arrow">
                <ion-icon name="chevron-back-circle-outline"></ion-icon>  
            </button>
            <button class="prev-arrow slider-arrow">
                <ion-icon class="icon" name="chevron-forward-circle-outline"></ion-icon> 
            </button>
        
            
            <!-- Slider -->
            <div class="post-slider">
                <!-- Slide 1-->
                <article class="post-card featured-post">
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
                                illo aliquam fugit! Vero, asperiores voluptatem.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, tenetur temporibus 
                                doloribus modi esse, odio non ipsa suscipit qui quia accusamus laborum voluptas cupiditate 
                                illo aliquam fugit! Vero, asperiores voluptatem.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, tenetur temporibus 
                                doloribus modi esse, odio non ipsa suscipit qui quia accusamus laborum voluptas cupiditate 
                                illo aliquam fugit! Vero, asperiores voluptatem.
                                illo aliquam fugit! Vero, asperiores voluptatem.
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
                <article class="post-card featured-post">
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
                                illo aliquam fugit! Vero, asperiores voluptatem.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, tenetur temporibus 
                                doloribus modi esse, odio non ipsa suscipit qui quia accusamus laborum voluptas cupiditate 
                                illo aliquam fugit! Vero, asperiores voluptatem.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, tenetur temporibus 
                                doloribus modi esse, odio non ipsa suscipit qui quia accusamus laborum voluptas cupiditate 
                                illo aliquam fugit! Vero, asperiores voluptatem.
                                illo aliquam fugit! Vero, asperiores voluptatem.
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
                <!-- Slide 3 -->
                <article class="post-card featured-post">
                    <div class="image-wrapper bg-image" 
                        style="background-image: url(assets/images/featured_images/web_dev.jpg);">
                    </div>
                    <div class="post-info">
                        <div class="topic-wrapper">
                            <a href="" class="topic-tag td-none">Web Development</a>
                            <span class="gray-1">5 min</span>
                        </div>
                        <div class="post-title">
                            <a href="" class="td-none">
                                <h3>Learning Tailwind CSS</h3>
                            </a>
                        </div>
                        <div class="post-preview">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, tenetur temporibus 
                                doloribus modi esse, odio non ipsa suscipit qui quia accusamus laborum voluptas cupiditate 
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, tenetur temporibus 
                                doloribus modi esse, odio non ipsa suscipit qui quia accusamus laborum voluptas cupiditate 
                                illo aliquam fugit! Vero, asperiores voluptatem.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, tenetur temporibus 
                                doloribus modi esse, odio non ipsa suscipit qui quia accusamus laborum voluptas cupiditate 
                                illo aliquam fugit! Vero, asperiores voluptatem.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, tenetur temporibus 
                                doloribus modi esse, odio non ipsa suscipit qui quia accusamus laborum voluptas cupiditate 
                                illo aliquam fugit! Vero, asperiores voluptatem.
                                illo aliquam fugit! Vero, asperiores voluptatem.
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
                <!-- Slide 4 -->
                <article class="post-card featured-post">
                    <div class="image-wrapper bg-image" 
                        style="background-image: url(assets/images/featured_images/sys_admin.jpg);">
                    </div>
                    <div class="post-info">
                        <div class="topic-wrapper">
                            <a href="" class="topic-tag td-none">Systems Administration</a>
                            <span class="gray-1">5 min</span>
                        </div>
                        <div class="post-title">
                            <a href="" class="td-none">
                                <h3>Managing Active Directory, Domain Controllers, Organizational Units, and Users</h3>
                            </a>
                        </div>
                        <div class="post-preview">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, tenetur temporibus 
                                doloribus modi esse, odio non ipsa suscipit qui quia accusamus laborum voluptas cupiditate 
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, tenetur temporibus 
                                doloribus modi esse, odio non ipsa suscipit qui quia accusamus laborum voluptas cupiditate 
                                illo aliquam fugit! Vero, asperiores voluptatem.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, tenetur temporibus 
                                doloribus modi esse, odio non ipsa suscipit qui quia accusamus laborum voluptas cupiditate 
                                illo aliquam fugit! Vero, asperiores voluptatem.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, tenetur temporibus 
                                doloribus modi esse, odio non ipsa suscipit qui quia accusamus laborum voluptas cupiditate 
                                illo aliquam fugit! Vero, asperiores voluptatem.
                                illo aliquam fugit! Vero, asperiores voluptatem.
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

        </section>

        <!-- Second Carousel -->

        <section class="page-section carousel-container">
            
            <div class="carousel-header">
                <h2>Best of 2024</h2>
                <a href="" class="link">See All</a>
            </div>

            <!-- Previous Next Arrow -->
            <button class="next-arrow slider-arrow">
                <ion-icon name="chevron-back-circle-outline"></ion-icon>  
            </button>
            <button class="prev-arrow slider-arrow">
                <ion-icon class="icon" name="chevron-forward-circle-outline"></ion-icon> 
            </button>
        
            <!-- Slider -->
            <div class="post-slider">
                <!-- Slide 1 -->
                <article class="post-card featured-post">
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
                                illo aliquam fugit! Vero, asperiores voluptatem.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, tenetur temporibus 
                                doloribus modi esse, odio non ipsa suscipit qui quia accusamus laborum voluptas cupiditate 
                                illo aliquam fugit! Vero, asperiores voluptatem.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, tenetur temporibus 
                                doloribus modi esse, odio non ipsa suscipit qui quia accusamus laborum voluptas cupiditate 
                                illo aliquam fugit! Vero, asperiores voluptatem.
                                illo aliquam fugit! Vero, asperiores voluptatem.
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
                <article class="post-card featured-post">
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
                                illo aliquam fugit! Vero, asperiores voluptatem.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, tenetur temporibus 
                                doloribus modi esse, odio non ipsa suscipit qui quia accusamus laborum voluptas cupiditate 
                                illo aliquam fugit! Vero, asperiores voluptatem.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, tenetur temporibus 
                                doloribus modi esse, odio non ipsa suscipit qui quia accusamus laborum voluptas cupiditate 
                                illo aliquam fugit! Vero, asperiores voluptatem.
                                illo aliquam fugit! Vero, asperiores voluptatem.
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
                <!-- Slide 3 -->
                <article class="post-card featured-post">
                    <div class="image-wrapper bg-image" 
                        style="background-image: url(assets/images/featured_images/web_dev.jpg);">
                    </div>
                    <div class="post-info">
                        <div class="topic-wrapper">
                            <a href="" class="topic-tag td-none">Web Development</a>
                            <span class="gray-1">5 min</span>
                        </div>
                        <div class="post-title">
                            <a href="" class="td-none">
                                <h3>Learning Tailwind CSS</h3>
                            </a>
                        </div>
                        <div class="post-preview">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, tenetur temporibus 
                                doloribus modi esse, odio non ipsa suscipit qui quia accusamus laborum voluptas cupiditate 
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, tenetur temporibus 
                                doloribus modi esse, odio non ipsa suscipit qui quia accusamus laborum voluptas cupiditate 
                                illo aliquam fugit! Vero, asperiores voluptatem.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, tenetur temporibus 
                                doloribus modi esse, odio non ipsa suscipit qui quia accusamus laborum voluptas cupiditate 
                                illo aliquam fugit! Vero, asperiores voluptatem.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, tenetur temporibus 
                                doloribus modi esse, odio non ipsa suscipit qui quia accusamus laborum voluptas cupiditate 
                                illo aliquam fugit! Vero, asperiores voluptatem.
                                illo aliquam fugit! Vero, asperiores voluptatem.
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
                <!-- Slide 4 -->
                <article class="post-card featured-post">
                    <div class="image-wrapper bg-image" 
                        style="background-image: url(assets/images/featured_images/sys_admin.jpg);">
                    </div>
                    <div class="post-info">
                        <div class="topic-wrapper">
                            <a href="" class="topic-tag td-none">Systems Administration</a>
                            <span class="gray-1">5 min</span>
                        </div>
                        <div class="post-title">
                            <a href="" class="td-none">
                                <h3>Managing Active Directory, Domain Controllers, Organizational Units, and Users</h3>
                            </a>
                        </div>
                        <div class="post-preview">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, tenetur temporibus 
                                doloribus modi esse, odio non ipsa suscipit qui quia accusamus laborum voluptas cupiditate 
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, tenetur temporibus 
                                doloribus modi esse, odio non ipsa suscipit qui quia accusamus laborum voluptas cupiditate 
                                illo aliquam fugit! Vero, asperiores voluptatem.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, tenetur temporibus 
                                doloribus modi esse, odio non ipsa suscipit qui quia accusamus laborum voluptas cupiditate 
                                illo aliquam fugit! Vero, asperiores voluptatem.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, tenetur temporibus 
                                doloribus modi esse, odio non ipsa suscipit qui quia accusamus laborum voluptas cupiditate 
                                illo aliquam fugit! Vero, asperiores voluptatem.
                                illo aliquam fugit! Vero, asperiores voluptatem.
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
        </section>

        <!-- Topic Section -->

        <section class="page-section topics-container center">
            
            <h1>Explore articles in various topics</h1>
            
            <div class="topics-pills">
                <?php foreach ($topics as $key => $topic): ?>
                    <a href=""><?php echo $topic['name']; ?></a>                                                                                                                              
                <?php endforeach; ?>
                
            </div>     
        </section>


    </div>
    <!-- //Page Container -->



    <!-- Footer -->
    <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Slick Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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

        // Slick Carousel

        $('.post-slider').each(function(index, slider){
            
            $(slider).slick({
              slidesToShow: 3,
              slidesToScroll: 1,
              autoplay: false,
              autoplaySpeed: 2000,
              infinite: false,
              nextArrow: $(slider).siblings('.prev-arrow'),
              prevArrow: $(slider).siblings('.next-arrow'),       
              responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                    slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 700,
                    settings: {
                    slidesToShow: 1,
                    }
                }
                ]
            });
        })

    </script>
</body>
</html>