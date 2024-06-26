 <?php include("path.php"); ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="assets/css/admin_styles.css">
    <link rel="stylesheet" href="assets/css/public.css">
    
    <title>Home</title>

</head>
<body>
    
    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>

    <!-- Page Banner -->
    <section class="page-banner">
        <div class="banner-container">
            <div class="left-box">
                <div class="breadcrumbs" role="navigation">
                    <a href="index.html">Home</a> >
                    <a href="index.html">Topic</a> >
                    This is the Title of the Post
                </div>
                <div class="single-post-title"> This is the Title of the Post How Would This Look if it Was a Long Title</div>
                <div class="post-detail">
                    <div class="author-wrapper">
                        <img src="assets/images/avatar/andy_profile_pic.png" alt="">
                        <div class="name-wrapper">
                            <a href="">Andy Hwang</a>
                            <small>April 29, 2024</small>
                        </div>
                        
                    </div>
                    <div class="social-links">
                        Share:
                        <a href=""><ion-icon class="social-icon" name="logo-facebook"></ion-icon></a>
                        <a href=""><ion-icon class="social-icon" name="logo-instagram"></ion-icon></a>
                        <a href=""><ion-icon class="social-icon" name="logo-linkedin"></ion-icon></a>
                    </div>
                </div>                  
            </div>
            <div class="right-box">
                <div class="post-image" style="background-image: url(assets/images/featured_images/web_dev.jpg); height: 200px;"></div>
            </div>
        </div>
    </section>

    <!-- Page Container -->
    <div class="default-page-container page-container single-page">

        <!-- Main Content -->
        <div class="main-content">
            <div class="post-content primary-font">
                <p>
                    Standard user story template
                    User stories consist of one or two sentences. In that space, they describe end users who earn value through your product. The user story format reads: "As a [user], I want to [goal] so that [benefit]."
                    Let's explore that format in more detail:
                    As a [user]: Explain who you're building this product for. Go beyond job titles and cliches, and capture the user's inner sense of value. If your organization uses buyer personas, you can apply a specific one here.  
                    I want to [goal]: Describe the user’s intentions rather than how they get there. The goal matters more than implementation.
                    So that [benefit]: Break down how meeting a goal benefits the user. Remember to look at the bigger picture or a deeper desire in users. 
                    Bear in mind that teams can use other user story formats. Some popular options include: 
                    In order to [receive benefit] as a [role], I can [goal/desire].
                    As [who] [when] [where], I [want] because [why].
                </p>
                    Tesla has gutted its charging team in a new round of layoffs, despite recently winning over major automakers like Ford and General Motors and making its connector the de facto standard in North America.
                    Tesla’s Supercharger network has long been seen as one of its greatest competitive advantages. It’s widely available, has far better uptime than other charging networks and the connector technology — known as the North American Charging Standard, or NACS — is now being adopted by essentially every major automaker with a presence in North America.
                    CEO Elon Musk announced the new layoffs in an overnight email to executives, first reported by The Information, in which he said he wants leaders to be “absolutely hard core about headcount and cost reduction,” as he ordered them to cut more employees who “don’t obviously pass the excellent, necessary and trustworthy test” or resign. Senior director of EV charging Rebecca Tinucci and head of new vehicles Daniel Ho are out, according to The Information.
                <p>

                </p>


            </div>

            <!-- Author Bio -->
            <div class="author-bio">
                <div class="avatar-wrapper">
                    <img src="assets/images/avatar/andy_profile_pic.png" alt="">
                </div>
                <div class="bio-wrapper">
                    <a href="" class="link"><span class="author-name">Andy Hwang</span></a>
                    
                    <div class="social-links">
                        <p>Follow on socials</p>
                        <a href=""><ion-icon class="social-icon" name="logo-facebook"></ion-icon></a>
                        <a href=""><ion-icon class="social-icon" name="logo-instagram"></ion-icon></a>
                        <a href=""><ion-icon class="social-icon" name="logo-linkedin"></ion-icon></a>
                    </div>
                    <div class="primary-font">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio neque perferendis iure id vero? Architecto nisi veniam modi similique quisquam dolorum asperiores exercitationem quibusdam voluptatem veritatis porro laudantium, necessitatibus repellat.</div>
                </div>
            </div>

            <!-- Suggested Posts Slider Begin -->
            <div class="suggested-posts">

                <h2>You might also like...</h2>
                <section class="page-section carousel-container">
                
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
            </div>
            <!-- Suggested Posts Slider End -->
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
              slidesToShow: 2,
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
                    slidesToShow: 1,
                    }
                }
                ]
            });
        })

    </script>
</body>
</html>