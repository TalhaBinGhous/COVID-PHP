
<header class="header">
        <a href="#" class="logo">COVIDO </a>

        <i class='bx bx-menu' id="menu-icon"></i>

        <nav class="navbar">
         <?php
            if (!isset($_SESSION['D_id'])) {
         ?>
            <a href="register.php">Register</a>
            <a href="login.php">Login</a>
            <?php

                        } else {
                        ?>
                        <a href="dashboard.php"> Dashboard</a>
                        <a href="Covid_appointments.php">Covid Appointments</a>
                        <a href="Vaccination_appointments.php">Vaccine Appointments</a>

<?php

} ?>
        </nav>
    </header>
<style>
   @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

.header{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    padding: 20px 100px;
    background: red;
    display: flex;
    justify-content: space-between;
    align-items: center;
    backdrop-filter: blur(10px);
    border-bottom: 2px solid rgba(255, 255, 255, .2);
    z-index: 100;
}

.header::before{
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: red;
    transition: .5s;
}

.header:hover::before{
    left: 100%;
}

.logo{
    color: #fff;
    font-size: 25px;
    text-decoration: none;
    font-weight: 600;
    cursor: default;
}

.navbar a{
    color: #fff;
    font-size: 18px;
    text-decoration: none;
    margin-left: 45px;
    transition: .3s;
}

.navbar a:hover{
    color: #f00;
}

#menu-icon{
    font-size: 36px;
    color: #fff;
    display: none;
}
/* 
@media (max-width: 992px){
    .header{
        padding: 1.25rem 4%;
    }
}

@media (max-width: 768px){
    #menu-icon{
        display: block;
    }

    .navbar{
        position: fixed;
        top: 100%;
        left: 0;
        width: 100%;
        padding: 0.5rem 4%;
        display: none;
    }

    .navbar.active{
        display: block;
    }

    .navbar a{
        display: block;
        margin: 1.5rem 0;
    }

    .nav-bg{
        position: fixed;
        top: 8.5%;
        left: 0;
        width: 100%;
        height: 295px;
        background: red;
        border-bottom: 2px solid rgba(255, 255, 255, .2);
        backdrop-filter: blur(10px);
        z-index: 99;
        display: none;
    }
    
    .nav-bg.active{
        display: block;
    }
  
} */
</style>