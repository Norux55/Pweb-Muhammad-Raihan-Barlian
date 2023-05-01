<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Website Portofolio</title>
        <link rel="stylesheet" href="css/style.css">
        <!-- Font -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    </head>
    <body>
        <div class="hero-header">
            <div class="wrapper">
                <header>
                    <div class="logo">
                        <i class="fa-solid fa-r"></i>
                        <div class="logo-text">Muhammad Raihan Barlian</di v>
                    </div>
                    <nav>
                        <div class="togglebtn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <ul class="navlinks">
                            <li><a class="page-scroll" href="#home">Home</a></li>
                            <li><a class="page-scroll" href="#services">Passion</a></li>
                            <li><a class="page-scroll" href="#Contact">Contact</a></li>
                            <!-- <li><a class="page-scroll" href="#Aboutme">About me</a></li> -->
                        </ul>
                    </nav>
                </header>
                <div class="container">
                    <div class="hero-pic">
                        <img src="https://akademik.unsri.ac.id/images/foto_mhs/2021/09031282126092.jpg" alt="Profile Pic">
                    </div>
                    
                    <div id="home" class="hero-text">
                        <h5>Hello I'm <span class="input">Front Developer</span></h5>
                        <h1>Raihan</h1>
                        <p>  Hey! My name is Raihan and I'm a web developer with a passion for front end development and design. I'm currently a second year student at
                            <a href="https://unsri.ac.id/" target="_blank">Sriwijaya University</a> pursuing a degree in information science with a minor in interaction design. I aspire toward a career that will allow me to channel my creativity through crafting beautiful software and engaging experiences.</p>
                            <section id="services" class="text-center">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2>What I Do</h2>
                                            <div class="spacer-10"></div>
                                            <div class="col-md-4 wp2">
                                                <div class="icon"><i class="fa fa-gamepad"></i></div>
                                                <h3>Gaming</h3>
                                                <p>Hi there, I'm a passionate gamer who loves to spend my free time playing video games. I've been a fan of gaming since I was a kid, and it's been a hobby of mine ever since. There's nothing quite like immersing myself in a new world, whether it's a first-person shooter or a sprawling RPG.</p>
                                            </div>
                                            <div class="col-md-4 wp2 delay-025s">
                                                <div class="icon"><i class="fa fa-laptop"></i></div>
                                                <h3>Development</h3>
                                                <p>With a strong foundation in computer science, I'm passionate about web design and development, and interested in mobile app development. As I grow as a developer, I hope to write clean, readable code that can be used by others and leveraged to create beautiful software.</p>
                                            </div>
                                            <div class="col-md-4 wp2 delay-05s">
                                                <div class="icon"><i class="fa fa-music"></i></div>
                                                <h3>Music</h3>
                                                <p> I'm a music enthusiast who's always had a deep appreciation for the power of sound. Whether it's rock, pop, hip hop, or classical, I find that music has a way of connecting with me on a profound level.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="btn-group">
                            <!-- <a href="https://steamcommunity.com/profiles/76561198930725428/" class="btn active">Look at my Steam</a> -->
                            <a href="/contact" class="btn">Contact Us</a>
                        </div>
                        <section id="Contact">
                        <div class="social">
                            <a href="https://www.facebook.com/search/top/?q=muhammad%20raihan%20barlian"><i class="fa-brands fa-facebook"></i></a>
                            <a href="https://www.instagram.com/rraaihaann/"><i class="fa-brands fa-instagram"></i></a>
                            <a href="https://discord.gg/Q7WWCSBT"><i class="fa-brands fa-discord"></i></a>
                            <a href="https://steamcommunity.com/profiles/76561198930725428/"><i class="fa-brands fa-steam"></i></a>
                        </div>
                    </section>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.1/typed.min.js"></script>    
    <script>
        var togglebtn=document.querySelector(".togglebtn");
        var nav=document.querySelector(".navlinks");
        var links=document.querySelector(".navlinks li");

        togglebtn.addEventListener("click", function(){
            this.classList.toggle("click");
            nav.classList.toggle("open");
        })

        var typed=new Typed(".input",{
            strings:["Frontend Developer","UX Designer","Web Developer"],
            typeSpeed:70,
            backSpeed:55,
            loop:true
        })
    </script>
    </body>
</html>