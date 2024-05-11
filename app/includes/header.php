<header>     
    <div class="nav-overlay"></div>
    <!-- Menu Icon **mobile size only**--> 
    <ion-icon name="menu-outline" class="menu-icon"></ion-icon>
    <!-- Logo -->
    <a href="index.php" class="logo-wrapper td-none"> 
        <div class="logo">A<span>G</span>H</div>
    </a>
    
    <!-- Navbar -->
    <nav>
        <!-- Search -->
        <div class="search-item">
            <span class="search-icon" role="button">
                <ion-icon name="search-outline"></ion-icon>
            </span>
            <!-- Search Input -->
            <form action="/index.html" method="post" class="header-search-form hide">
                <input type="text" name="search-term" placeholder="Search" 
                class="input-control input-control-sm search-input">
            </form>
        </div>
        <!-- Nav Menu -->
        <ul class="navmenu">
            <li class="navitem"><a href="index.php">Home</a></li>
            <li class="navitem"><a href="/test.html">Test</a></li>
            <li class="navitem"><a href="#">Resume 
                <ion-icon class="navicon" name="chevron-down-outline"></ion-icon></a>
                <ul class="dropdown">
                    <li><a href="#">View Resume</a></li>
                    <li><a href="/downloads/andy_hwang_resume.pdf" download>Download Resume</a></li>
                </ul>
            </li>
            <li class="navitem"><a href="#">Projects 
                <ion-icon class="navicon" name="chevron-down-outline"></ion-icon></a>
                <ul class="dropdown">
                    <li><a href="#">Mini Projects</a></li>
                    <li><a href="/projects/large_projects/personal_website.html">Large Projects</a></li>
                </ul>
            </li>
            <li class="navitem"><a href="/contact.html">Contact</a></li>
            
            <!-- If Session Exists -->
            <?php if (isset($_SESSION['id'])): ?>
                
            <!-- Show Username -->
                <li class="navitem"> 
                    <a href="#">
                        <ion-icon class="navicon" name="person-circle-outline"></ion-icon>
                            <?php echo $_SESSION['username']; ?> 
                        <ion-icon class="navicon" name="chevron-down-outline"></ion-icon>
                    </a>
                    <ul class="dropdown">
                        <!-- Show Only if Admin -->
                        <?php if($_SESSION['admin']):?>
                            <li><a href="<?php echo BASE_URL . "/admin/dashboard.php"?>">Dashboard</a></li>
                        <?php endif;?>     
                        <!-- End Session -->
                        <li><a href="<?php echo BASE_URL . '/logout.php' ?>" style="color: red;">Logout</a></li>
                    </ul>
                </li>
                

            <!-- Show Login -->
            <?php else: ?>
                <li class="navitem"><a href="login.php">Login</a></li>
            <?php endif; ?>        
        
        </ul>
    </nav>
</header>