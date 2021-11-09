

<header>
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Instaaaaagram</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="post_page.php">Post</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                            account
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">login status:  Login</a></li>
                            <?php
                            if(isset($_SESSION['u_username'])){
                                echo"<li><a class='dropdown-item' href='#'>User Name:  ".$_SESSION['u_username']."</a></li>";
                            }
                            ?>
                            <?php
                            if(isset($_SESSION['u_email'])){
                                echo"<li><a class='dropdown-item' href='#'>Email: ".$_SESSION['u_email']."</a></li>";
                            }
                            ?>
                            <li>
                                <form action="logout.php">
                                    <button class="dropdown-item" name="log_out">Log Out</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
