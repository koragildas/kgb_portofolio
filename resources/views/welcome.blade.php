<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js"></script>
    <link rel="icon" href="/img/Logo-Kogo.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>

<body>
    <header class="header">
        <a href="#" class="logo"><img src="img/Logo-Kogo.png" alt=""></a>

        <nav class="navbar">
            <a href="#home" style="--i:1" class="active">Home</a>
            <a href="#about" style="--i:2">About</a>
            <!-- <a href="#skills" style="--i:3">Skills</a> -->
            <a href="#services" style="--i:4">Services</a>
            <a href="#contact" style="--i:5">Contact</a>
        </nav>
        <i class='bx bx-menu' id="menu-icon"></i>

    </header>
    <section class="home">
        <div class="home-content">
            <h3>Hello, It's Me </h3>
            <h1>Gildas KORABALO</h1>
            <H3>And I'm a <span class="text"></span></H3>
            <p>I'm a web Designer with extensive experience for over 3 years.
                <br> exepertise is to create and website design,Front-End design , and many more....
            </p>
            <div class="home-sci">
                <a href="https://www.facebook.com/profile.php?id=100072012502366" target="_blank" style="--i:7"><i
                        class="bx bxl-facebook"></i></a>
                <!-- <a href="https://www.instagram.com/kora_gildas/" target="_blank" style="--i:8"><i
                        class="bx bxl-instagram"></i></a> -->
                <a href="https://wa.me/22896206891?text=Bonjour%20Gildas%2C%20je%20viens%20de%20ton%20site"
                    style="--i:9"><i class="bx bxl-whatsapp"></i></a>
                <!-- <a href="https://www.youtube.com/@gildaskorabalo9180" target="_blank" style="--i:10"><i
                        class="bx bxl-youtube"></i></a> -->
                <!-- <a href="https://gitlab.com/kgbgil0" target="_blank" style="--i:10"><i
                        class="bx bxl-gitlab"></i></a> -->
                <a href="https://github.com/koragildas" target="_blank" style="--i:12"><i
                        class='bx bxl-github'></i></a>
                <a href="https://www.linkedin.com/in/gildas-korabalo-7a9b60260/" target="_blank" style="--i:12"><i
                        class='bx bxl-linkedin'></i></a>

            </div>
            <!-- <a href="#" class="btn_box">More About Me</a> -->
            <!-- <div class="cv-container">
                <button class="btn_box" id="download-cv" style="border: none;">Download my resume</button>
                <div id="cv-options" class="cv-options">
                    <h3>Sélectionnez la version de votre choix</h3>
                    <a href="file/Gildas_Korabalo_Resume.docx.pdf" download class="cv-option">English version</a>
                    <a href="file/Gildas_pdf_CV (1).docx.pdf" download class="cv-option">French version</a>
                    <a href="#" id="download-both" class="cv-option">All versions</a>
                </div>
            </div> -->
            <div class="cv-container">
                <button class="btn_box" id="download-cv" style="border: none;">View my resume</button>
                <div id="cv-options" class="cv-options">
                    <a href="file/Gildas_Korabalo_Resume.docx.pdf" target="_blank" class="cv-option">English version</a>
                    <a href="file/Gildas_pdf_CV (1).docx.pdf" target="_blank" class="cv-option">French version</a>

                </div>
            </div>

            <!-- <div class="cv-container">
                <a href="file/Gildas_Korabalo_Resume.docx.pdf" target="_blank" class="btn_box" style="border: none; text-decoration: none; display: inline-block;">
                    My Resume
                </a>
            </div> -->

        </div>
        <div class="profile-container">
            <div class="circle-animation">
                <span class="circle-layer"></span>
                <span class="circle-layer"></span>
                <span class="circle-layer"></span>
            </div>
            <img src="{{ asset('img/gil9-removebg.png') }}"
                alt="Gildas Korabalo - Développeur Frontend"
                class="profile-avatar">
        </div>
    </section>
    <section class="about" id="about">
        <div class="about-img">
            <img src="/img/kora25.png" alt="">
        </div>
        <div class="about-text">
            <h2>About <span>Me</span></h2>
            <h4>Full-Stack Developer!</h4>
            <p> I’m a passionate web developer specializing in Front-End development, WordPress, and website design. With
                a strong background in both web development and business law, I bring a versatile and detail-oriented
                approach to every project.
                <br> I’m skilled in modern technologies such as HTML, CSS, JavaScript, PHP, MySQL, SQL, Bootstrap,
                Laravel, and many other programming languages and frameworks.
                <br>My goal is to create fast, attractive, and fully customized websites that meet each client’s unique
                needs.
                Always eager to learn, I combine technical expertise with strategic insight to deliver innovative,
                secure, and user-focused web solutions.
            </p>
            <a href="#" class="btn-box">More About Me</a>
        </div>

    </section>

    <section>
        <div class="services" id="services">
            <div class="container">
                <h1 class="sub-tittle">My <span>Services</span></h1>
                <div class="services-list">
                    <div>
                        <i class='bx bx-code' style='color:#00eeff'></i>
                        <h2>UI/UX Design</h2>
                        <p>I design user-friendly interfaces that provide seamless and enjoyable user experiences. My
                            goal is to create intuitive and visually appealing designs that make websites and
                            applications easy to navigate.</p>
                        <!-- <a href="#" class="read">learn more</a> -->
                    </div>
                    <div>
                        <i class='bx bx-code' style='color:#00eeff'></i>
                        <h2>Web Development</h2>
                        <p>I build responsive and dynamic websites using modern web technologies. Whether it's HTML,
                            CSS, JavaScript, PHP, or Laravel, I bring your ideas to life with clean and efficient code.
                        </p>
                        <!-- <a href="#" class="read">learn more</a> -->
                    </div>
                    <div>
                        <i class='bx bx-crop' style='color:#00eeff'></i>
                        <h2>Responsive Design</h2>
                        <p>I ensure that your website looks great and functions perfectly on all devices desktops,
                            tablets, and smartphones. A responsive design improves user engagement and accessibility.
                        </p>
                        <!-- <a href="#" class="read">learn more</a> -->
                    </div>
                    <div>
                        <i class='bx bxl-apple' style='color:#00eeff'></i>
                        <h2> Apple/iOS Development</h2>
                        <p>I offer development services for iOS platforms, creating optimized and high-performance
                            applications compatible with iPhones and iPads, ensuring a native Apple experience.</p>
                        <!-- <a href="#" class="read">learn more</a> -->
                    </div>
                    <div>
                        <i class='bx bxl-wordpress' style='color:#00eeff'></i>
                        <h2>WordPress Development</h2>
                        <p>I develop custom WordPress websites tailored to your needs. Whether it's a blog, corporate
                            site, or e-commerce platform, I ensure easy content management and professional results.</p>
                        <!-- <a href="#" class="read">learn more</a> -->
                    </div>
                    <div>
                        <i class='bx bxl-flutter' style='color:#00eeff'></i>
                        <h2>Flutter Mobile App</h2>
                        <p>I build cross-platform mobile apps using Flutter. With a single codebase, your app runs
                            smoothly on both Android and iOS, saving you time and money while delivering high
                            performance.</p>
                        <!-- <a href="#" class="read">learn more</a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <h1 class="sub-title">My <span>Skills</span></h1> -->

    <!-- Structure HTML pour la section Skills -->
    <!-- <section id="skills" class="skills">
        <h2 class="skills-title">My <span>Skills</span></h2>

        <div class="skills-container">
            <div class="container1">
                <h3 class="heading1">Technical Skills</h3>
                <div class="Technical-bars">
                    <div class="bar">
                        <i class='bx bxl-html5' style='color:#e34c26'></i>
                        <div class="info">
                            <span>HTML</span>
                        </div>
                        <div class="progress-line html">
                            <span></span>
                        </div>
                    </div>
                    <div class="bar">
                        <i class='bx bxl-css3' style='color:#2965f1'></i>
                        <div class="info">
                            <span>CSS</span>
                        </div>
                        <div class="progress-line css">
                            <span></span>
                        </div>
                    </div>
                    <div class="bar">
                        <i class='bx bxl-javascript' style='color:#f0db4f'></i>
                        <div class="info">
                            <span>Javascript</span>
                        </div>
                        <div class="progress-line Javascript">
                            <span></span>
                        </div>
                    </div>
                    <div class="bar">
                        <i class='bx bxl-react' style='color:#61DBFB'></i>
                        <div class="info">
                            <span>React</span>
                        </div>
                        <div class="progress-line React">
                            <span></span>
                        </div>
                    </div>
                    <div class="bar">
                        <i class='bx bxl-python' style='color:#306998'></i>
                        <div class="info">
                            <span>Python</span>
                        </div>
                        <div class="progress-line Python">
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container1">
                <h3 class="heading">Professional Skills</h3>
                <div class="radial-bars">
                    <div class="radial-bar">
                        <svg x="0px" y="0px" viewBox="0 0 200 200">
                            <circle class="progress-bar" cx="100" cy="100" r="80"></circle>
                            <circle class="path" cx="100" cy="100" r="80"></circle>
                        </svg>
                        <div class="percentage">90%</div>
                        <div class="text-one">Creativity</div>
                    </div>
                    <div class="radial-bar">
                        <svg x="0px" y="0px" viewBox="0 0 200 200">
                            <circle class="progress-bar" cx="100" cy="100" r="80"></circle>
                            <circle class="path" cx="100" cy="100" r="80"></circle>
                        </svg>
                        <div class="percentage">65%</div>
                        <div class="text-one">Communication</div>
                    </div>
                    <div class="radial-bar">
                        <svg x="0px" y="0px" viewBox="0 0 200 200">
                            <circle class="progress-bar" cx="100" cy="100" r="80"></circle>
                            <circle class="path" cx="100" cy="100" r="80"></circle>
                        </svg>
                        <div class="percentage">75%</div>
                        <div class="text-one">Problem Solving</div>
                    </div>
                    <div class="radial-bar">
                        <svg x="0px" y="0px" viewBox="0 0 200 200">
                            <circle class="progress-bar" cx="100" cy="100" r="80"></circle>
                            <circle class="path" cx="100" cy="100" r="80"></circle>
                        </svg>
                        <div class="percentage">85%</div>
                        <div class="text-one">Teamwork</div>
                    </div>
                </div>
            </div>
        </div>

    </section> -->
    <section>
        <div id="Portfolio" class="project">
            <div class="main-text">
                <h2>Latest <span>projects</span></h2>

                <div class="container portfolio-content">
                    <div class="row">
                        <img src="img/sayebookCp.png" alt="Project 1">
                        <div class="layer">
                            <h5>Sayebook</h5>
                            <p> Reading Reinvented <br>
                                A digital platform for reading and selling e-books that connects authors and readers
                                through a modern, intuitive, and secure online library.</p>
                            <a href="https://www.sayebook.com/"> <i class='bx bx-link-external'></i> </a>
                        </div>
                    </div>
                    <div class="row">
                        <img src="img/tekbussines.jpg" alt="Project 2">
                        <div class="layer">
                            <h5> Tek Business</h5>
                            <p>A professional showcase website designed to present digital consulting and support
                                services to local businesses, featuring smooth navigation and a sleek corporate design.
                            </p>
                            <a href="https://tek-business.com/"> <i class='bx bx-link-external'></i> </a>
                        </div>
                    </div>
                    <div class="row">
                        <img src="img/Logo--Sunofa-Map (1).jpg" alt="Project 3">
                        <div class="layer">
                            <h5>Sunofa Map</h5>
                            <p> Reconnect with Loved Ones in One Click <br>
                                A smart web application for geolocation, protected by a PIN code, designed to connect
                                families and friends. Modern interface, easy and fast to use. </p>
                            <a href="https://sunofamap.com/"> <i class='bx bx-link-external'></i> </a>
                        </div>
                    </div>
                    <div class="row">
                        <img src="img/giw.jpg" alt="Project 3">
                        <div class="layer">
                            <h5> GIW USA</h5>
                            <p>Giving is Winning
                                Official website of the non-profit organization GIW-USA. <br>
                                Clean and responsive design to present their humanitarian actions, showcase projects,
                                and facilitate online donations.</p>
                            <a href="https://www.giw-usa.org/home"> <i class='bx bx-link-external'></i> </a>
                        </div>
                    </div>
                    <div class="row">
                        <img src="img/makoffab.png" alt="Project 3">
                        <div class="layer">
                            <h5>Makoffab</h5>
                            <p> Tailor-Made African Elegance <br>
                                An e-commerce platform dedicated to fashion and custom-made clothing. An intuitive
                                interface to explore unique creations, place orders, and immerse in 100% African
                                fashion.</p>
                            <a href="https://makoffab.com/"> <i class='bx bx-link-external'></i> </a>
                        </div>
                    </div>
                    <div class="row">
                        <img src="/img/ccs.jpeg" alt="Project 3">
                        <div class="layer">
                            <h5>CANAAN CARE SERVICES</h5>
                            <p>A company specialized in home care and personalized support for elderly or vulnerable individuals.
                                The website highlights their services, facilitates contact,
                                and ensures smooth navigation on both
                                desktop and mobile devices.</p>
                            <a href="https://canaanapp.com/"> <i class='bx bx-link-external'></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact" id="contact">
        <div class="contact-text">
            <h2>Contact <span>Me</span></h2>
            <h4>Let's Work Together</h4>
            <p>Do you have an idea? A project in mind? <br>
                I’m here to turn your vision into reality. Whether it’s building a modern website, boosting your online
                presence, or benefiting from my skills in development and design.I’m ready to take on any challenge
                with you.Your success starts with a message.
                So don’t wait... reach out now and let’s create something amazing together!</p>

            <div class="contact-info">
                <div class="contact-list">
                    <li><i class='bx bxs-send'></i><a href="mailto:contact.kogitech@gmail.com">contact.kogitech@gmail.com</a></li>
                    <li><i class='bx bxs-phone'></i> <a href="tel:‪+22891526909‬">‪(+228) 91 52 69 09‬</a></li>
                </div>

                <div class="contact-icons">
                    <a href="https://wa.me/22896206891?text=Bonjour%20Gildas%2C%20je%20viens%20de%20ton%20site"
                        style="--i:9"><i class="bx bxl-whatsapp"></i></a>
                    <a href="https://github.com/koragildas" target="_blank" style="--i:12"><i
                            class='bx bxl-github'></i></a>
                    <!-- <a href="https://www.facebook.com/profile.php?id=100072012502366" target="_blank" style="--i:7"><i
                            class="bx bxl-facebook"></i></a>
                    <a href="https://www.instagram.com/kora_gildas/" target="_blank" style="--i:8"><i
                            class='bx bxl-instagram'></i></a>
                    <a href="https://x.com/Gildas_korabalo" target="_blank" style="--i:11"><i
                            class='bx bxl-twitter'></i></a> -->
                    <a href="https://www.linkedin.com/in/gildas-korabalo-7a9b60260/" target="_blank" style="--i:12"><i
                            class='bx bxl-linkedin'></i></a>


                </div>
            </div>
        </div>

        <div class="contact-form">
            <div id="feedback"></div> <!-- Zone d'affichage du message -->

            <form id="contactForm">
                @csrf
                <input type="text" name="name" placeholder="Enter Your Name" required>
                <input type="email" name="email" placeholder="Enter Your Email" required>
                <input type="text" name="subject" placeholder="Enter Your Subject">
                <textarea name="message" cols="40" rows="10" placeholder="Enter Your Message" required></textarea>
                <input type="submit" value="submit" class="send">
            </form>
        </div>
    </section>

    <div class="last-text">
        <p>Developed with love by Gildas KORABALO © 2025</p>
    </div>
    <a href="#" class="top"><i class='bx bx-up-arrow-alt'></i></a>

    <script src="/main.js"></script>
    <script>
        document.getElementById('contactForm').addEventListener('submit', async function(e) {
            e.preventDefault(); // Empêche le rechargement de la page

            const form = e.target;
            const formData = new FormData(form);

            const button = form.querySelector('input[type="submit"]');
            button.disabled = true;
            button.value = "Sending...";

            try {
                const response = await fetch("{{ route('contact.send') }}", {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json'
                    },
                    body: formData
                });

                const result = await response.json();

                if (response.ok) {
                    document.getElementById('feedback').innerHTML = `<p style="color:green;">${result.message}</p>`;
                    form.reset(); // Réinitialiser le formulaire
                } else {
                    let errorMessages = '';
                    if (result.errors) {
                        for (let key in result.errors) {
                            errorMessages += `<p style="color:red;">${result.errors[key]}</p>`;
                        }
                    } else if (result.error) {
                        errorMessages = `<p style="color:red;">${result.error}</p>`;
                    }
                    document.getElementById('feedback').innerHTML = errorMessages;
                }

            } catch (error) {
                console.error(error);
                document.getElementById('feedback').innerHTML = `<p style="color:red;">Erreur lors de l'envoi.</p>`;
            } finally {
                button.disabled = false;
                button.value = "Submit";
            }
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuIcon = document.getElementById('menu-icon');
            const navbar = document.querySelector('.navbar');

            menuIcon.addEventListener('click', function() {
                console.log('ici')
                navbar.classList.toggle('active');

                // Animation des liens lorsqu'ils apparaissent
                if (navbar.classList.contains('active')) {
                    const navLinks = document.querySelectorAll('.navbar a');
                    navLinks.forEach(link => {
                        link.style.animation = `slideTop 0.5s ease forwards ${link.style.getPropertyValue('--i')}`;
                    });
                }
            });

            // Fermer le menu lorsqu'on clique sur un lien
            document.querySelectorAll('.navbar a').forEach(link => {
                link.addEventListener('click', function() {
                    if (window.innerWidth < 992) {
                        navbar.classList.remove('active');
                    }
                });
            });
        });
    </script>


</body>

</html>
