<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sandy Portfolio</title>

  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- AOS Animation -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="style/style.css">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>
  <!-- HOME -->
  <section class="home" id="home">
    <header>
      <h2>Sandy Hidayat</h2>
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About me</a></li>
        <li><a href="#skill">Skill</a></li>
        <li><a href="#project">Project</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      <i class="fa-solid fa-bars fa-2x hamburger-menu"></i>
    </header>
    <div class="section-home">
      <div class="field-text-home">
        <h1>Hi, I am <br> <span>Sandy Hidayat</span></h1>
        <h3>Front End Developer</h3>
      </div>
      <div class="field-image-home">
        <img src="img/myphoto.jpeg" alt="Sandy Hidayat">
      </div>
    </div>
    <a class="swipe-up" href="#about">Swipe Up <i class="fa-solid fa-arrow-down arrow-swipeup"></i></a>
  </section>

  <!-- ABOUT -->
  <section class="about" id="about">
    <div class="container-about" data-aos="fade-up" data-aos-duration="1500">
      <h1>About <span>Me</span></h1>
      <p>I am a student at SMK Negeri 2 Cimahi with a strong foundational knowledge in web development,
                 particularly in frontend technologies such as HTML and CSS. In addition to my frontend skills,
                  I also have a basic understanding of backend development using PHP. Throughout my academic journey,
                   I have worked on several relevant projects and participated in an internship program focused on web development.
</p>
      <p>With a deep passion for technology and continuous learning, I aim to make a meaningful contribution to the tech industry by building impactful,
                 responsive, and user‑friendly digital solutions. I believe that a solid understanding of both frontend and backend technologies, combined with the willingness to learn and adapt, is essential for creating valuable products in today’s digital landscape. I am very enthusiastic about further developing my skills, collaborating with industry professionals, engaging in real‑world development experiences,
                 and growing both personally and professionally in the dynamic and ever‑evolving world of web development.
</p>
    </div>
  </section>

  <!-- SKILLS -->
  <section class="skill" id="skill">
    <h1>My <span>Skills</span></h1>
    <div class="container-image-skill">
      <div class="field-image-skill" data-aos="flip-left">
        <img src="img/logo_html.png" alt="HTML"class="image-skill">
        <span>HTML</span>
      </div>
      <div class="field-image-skill">
        <img src="img/logo_css.png" alt="CSS" class="image-skill">
        <span>CSS</span>
      </div>
      <div class="field-image-skill">
        <img src="img/logo_javascript.png" alt="JavaScript" class="image-skill">
        <span>JavaScript</span>
      </div>
      <div class="field-image-skill">
        <img src="img/logo_php.png" alt="PHP" class="image-skill">
        <span>PHP</span>
      </div>
    </div>
  </section>

  <!-- PROJECT -->
  <section class="project" id="project">
    <h1>Pro<span>jects</span></h1>
    <div class="container-project">
      <div class="field-project">
        <a href="#" class="link-to-project">
          <img src="img/ss_projek.png" alt="Fire Detection System">
          <div class="field-text-project">
            <h3>System Monitoring Fire Detection<span> with Arduino</span></h3>
            <p class="description-project">
              This IoT-based application uses Flame Detector and MQ-2 sensors with an ESP32 microcontroller to monitor fire and gas. It displays statuses on an LCD and sends real-time data to a local server via HTTP, storing it in a MySQL database through PHP scripts. Ideal for use in homes, warehouses, or laboratories.
            </p>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section class="contact" id="contact">
    <h1>Con<span>tact</span></h1>
    <div class="container-contact">
      <div class="sosmed-and-maps">
        <div class="domain-and-contact">
          <div class="domain-contact phone">
            <a href="https://wa.me/qr/PRGIPXNQQYAEA1" target="_blank">
              <i class="fa-solid fa-mobile-screen icon-domain-and-contact fa-2x"></i>
              <span>+62 857 2031 8896</span>
            </a>
          </div>
          <div class="domain-contact house">
            <a href="https://www.google.com/maps?q=-6.718943,107.455846&z=17&output=embed" target="_blank">
              <i class="fa-solid fa-location-dot icon-domain-and-contact fa-2x"></i>
              <span>Kp. Cisomang Tengah, Cikalong Wetan, Kabupaten Bandung Barat</span>
            </a>
          </div>
          <div class="domain-contact email">
            <a href="mailto:sandyhidayat234@gmail.com" target="_blank">
              <i class="fa-regular fa-envelope icon-domain-and-contact fa-2x"></i>
              <span>sandyhidayat234@gmail.com</span>
            </a>
          </div>
        </div>
        <iframe src="https://www.google.com/maps?q=-6.718943,107.455846&z=17&output=embed" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="location-map"></iframe>
        <div class="social-media">
          <a href="https://www.linkedin.com/in/sandy-hidayat-545bb7374" target="_blank"><i class="fa-brands fa-linkedin fa-2x"></i></a>
          <a href="https://www.tiktok.com/@sanss448" target="_blank"><i class="fa-brands fa-tiktok fa-2x"></i></a>
          <a href="https://www.instagram.com/sndy_hida" target="_blank"><i class="fa-brands fa-instagram fa-2x"></i></a>
        </div>
      </div>

      <div class="form-message">
        <h2>Contact <span>Me</span></h2>
        <form action="">
          <input type="text" id="name" placeholder="Name">
          <input type="email" id="email" placeholder="Email">
          <textarea name="message" id="message" placeholder="Message" rows="10"></textarea>
          <button type="submit" class="send-contact">Send</button>
        </form>
      </div>
    </div>
  </section>

  <!-- AOS Animation Script -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Custom Script -->
  <script src="js/script.js"></script>
</body>

</html>