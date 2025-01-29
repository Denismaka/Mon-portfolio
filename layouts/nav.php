<!-- <nav class="navbar navbar-expand-lg bg-dark">
    <div class="container">
        <a class="navbar-brand ms-2" href="#"><span style="color: var(--white)">denis</span> <span>maka</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon bg-success"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item mx-2">
                    <a class="nav-link" href="index.php#home">home</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="index.php#about">about</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="index.php#services">services</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="index.php#projet">projet</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="index.php#contact">contact</a>
                </li>
                <?php if ($_SESSION['id_admin']) {
                ?>
                    <li class="nav-item mx-2" style="display: flex">
                        <a href=""> <i class="fa fa-user" style="color: var(--white)"></i> </a>
                        <a class="nav-link" href="#"><?= $_SESSION['nom'] ?></a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="logout.php">Deconnexion</a>
                    </li>
                <?php
                }
                ?>
                <style>
                    .navbar-nav ul {
                        padding-left: 150px;
                        background-color: red;
                    }
                </style>

            </ul>
        </div>
    </div>
</nav> -->

<header>
    <a href="#" class="brand">Denis Maka</a>
    <div class="menu-btn">
        <i class="fa-solid fa-bars"></i>
    </div>
    <div class="navigation">
        <a class="#" href="index.php#home">home</a>
        <a class="#" href="index.php#about">about</a>
        <a class="#" href="index.php#services">services</a>
        <a class="#" href="index.php#projet">projet</a>
        <a class="#" href="index.php#contact">contact</a>

    </div>
</header>

<style>
    /* ################  */
    /* Header   */
    /* ################  */
    header {
        z-index: 1000;
        position: fixed;
        background: rgba(255, 255, 255, 0.1);
        top: 0;
        left: 0;
        width: 100%;
        padding: 15px 200px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: 0.5s ease;
    }

    header.sticky {
        background-color: rgb(5, 49, 5);
        padding: 10px 200px;
    }

    header .brand {
        color: #fff;
        font-size: 1.8em;
        font-weight: 700;
        text-transform: uppercase;
        text-decoration: none;
    }

    header .navigation {
        position: relative;
    }

    header .navigation a {
        color: #fff;
        font-size: 1em;
        font-weight: 700;
        text-decoration: none;
        margin-left: 30px;
        text-transform: uppercase;
    }

    header .navigation a:hover {
        color: #3a6cf4;
        transition: 0.5s ease-in-out;
    }

    header.sticky .navigation a:hover {
        color: #000;
        transition: 0.5s ease-in-out;
    }

    @media (max-width: 1024px) {
        header {
            padding: 12px 20px;
        }

        header.sticky {
            padding: 10px 20px;
        }

        header .navigation {
            display: none;
        }

        .menu-btn {
            position: absolute;
        }
    }
</style>

<script>
    // Javascript for navigation bar affects on scroll

    window.addEventListener('scroll', function() {
        const header = document.querySelector('header');
        header.classList.toggle('sticky', window.scrollY > 0);
    });
</script>