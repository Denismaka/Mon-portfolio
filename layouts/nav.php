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
    <div class="menu-btn"></div>
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
        z-index: 999;
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
        background-color: rgb(12, 53, 5);
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
        display: flex;
        /* Afficher la navigation sur les grands écrans */
    }

    header .navigation a {
        color: #fff;
        font-size: 1em;
        font-weight: 700;
        text-transform: uppercase;
        text-decoration: none;
        margin-left: 30px;
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
            /* Masquer la navigation sur les petits écrans */
        }

        .menu-btn {
            position: absolute;
        }

        header .navigation a {
            color: #fff;
            font-size: 1.2em;
            margin: 10px;
            text-decoration: none;
            padding: 0 20px;
            border-radius: 20px;
        }

        header .navigation a:hover {
            box-shadow: 0 0 1rem #ff0000;
            color: #fff;
            transition: 0.3 ease;
        }

        .menu-btn {
            position: absolute;
            background-image: url(/assets/images/menu-burger.png) no-repeat;
            background-size: 30px;
            background-position: center;
            width: 40px;
            height: 40px;
            right: 0;
            margin: 0 20px;
            cursor: pointer;
            transition: 0.3 ease;
        }

        .menu-btn.active {
            z-index: 999;
            background-image: url(/assets/images/fermer.png) no-repeat;
            background-size: 25px;
            background-position: center;
            transition: 0.3s ease;
            filter: invert(1);
        }

        header .navigation.active {
            z-index: 888;
            position: fixed;
            background-color: rgb(9, 88, 42);
            top: 0;
            right: 0;
            width: 380px;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            box-shadow: 0 5px 25px rgba(1, 1, 1, 0.15);
            transition: 0.3 ease;
        }
    }
</style>

<script>
    // Javascript for navigation bar affects on scroll

    window.addEventListener('scroll', function() {
        const header = document.querySelector('header');
        header.classList.toggle('sticky', window.scrollY > 0);
    });


    const menuBtn = document.querySelector('.menu-btn');
    const navigation = document.querySelector('.navigation');
    const navigationItems = document.querySelectorAll('.navigation a'); // Ajouté

    menuBtn.addEventListener('click', () => {
        menuBtn.classList.toggle('active');
        navigation.classList.toggle('active');
    });

    navigationItems.forEach((navigationItem) => {
        navigationItem.addEventListener('click', () => {
            menuBtn.classList.remove('active');
            navigation.classList.remove('active');
        });
    });
</script>