<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Najwa's Profil</title>
  <link rel="stylesheet" href="assets/styles/style.css">
  <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap"
      rel="stylesheet"
    />
</head>
<body>
  <header class="navbar-container">
    <div class="logo">
      <img src="assets/image/logo.png" alt="logo">
      <h1>My Portofolio</h1>
    </div>
    <nav class="nav-list">
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#works">Works</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <div id="content">
        <div class="home">
          <div class="home-description">
            <h1 class="title">Hi! I'm Najwa</h1>
            <p> I'm Najwa Fathiro Cahyono, a Cloud Engineer with a passion for innovation and a commitment to transforming businesses through cutting-edge technology. Welcome to my portfolio, where I showcase my journey and expertise in the world of cloud engineering.</p>
            <button>Read more</button>
          </div>
        
          <div class="home-image">
            <img src="assets/image/me.png" alt="Burger">
          </div>
        </div>

        <article id="works" >
          <div class="text-center">
            <h2>My Services</h2>
            </div>
            <div class="container">
          <h3 class="card card-menu">
            <img src="assets/image/google.png" alt="takeaway" class="card-image">
            Google Cloud
          </h3>
          <h3 class="card card-menu">
            <img src="assets/image/azure.png" alt="dinein" class="card-image">
            Microsoft Azure
          </h3>
          <h3 class="card card-menu">
            <img src="assets/image/aws.png" alt="drivethru" class="card-image">
            AWS
          </h3>
        </div>
        </article>

        <article id="about" class="card">
          <div class="text-center">
          <h2>About Me</h2>
          <img src="assets/image/about.png" alt="burger2" class="featured-image"/>
          <div class="description">
          <p>
            I'm more than just a Cloud Engineer; I'm a digital architect, a problem solver, and an advocate for efficiency. 
            With 2 years of experience in the field, I've had the privilege of working with various cloud platforms, such as AWS, Azure, and GCP, to name a few.
             My journey has been defined by a passion for innovation and a commitment to shaping the future of businesses through cloud technology.
          </p>
        </div>
        </article>

        <article id="contact">
          <header>
            <h2>Contact</h2>
          </header>

          <section>
            <table >
              <tr>
                <th>Instagram</th>
                <td>:</td>
                <td>@Najwaafc</td>
              </tr>
              <tr>
                <th>Address</th>
                <td>:</td>
                <td>Jl. Salemba Raya No.Kav. 31, RT.1/RW.3, Paseban, Kec. Senen, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10440</td>
              </tr>
              <tr>
                <th>Hours</th>
                <td>:</td>
                <td>Open 24 hours</td>
              </tr>
              <tr>
                <th>Phone</th>
                <td>:</td>
                <td>(021) 31907469</td>
              </tr>
            </table>
          </section>
        </article>
    </div>
    <aside class="order-now">
      <button class="order-button">
        <img src="assets/image/beli.png" alt="Beli Sekarang" />
        Contact me
      </button>
    </aside>    
  </main>
  <footer>
    <p>My Portofolio &#169; 2023, Najwa Fathiro C</p>
  </footer>
</body>
</html>
