<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS</title>
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css"
  rel="stylesheet"
/>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SMS</a>
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <!-- DROPDOWN -->
        <li class="nav-item dropdown">
        <a
          class="nav-link dropdown-toggle"
          href="#"
          id="navbarDropdownMenuLink"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
        >
          Dropdown link
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li>
            <a class="dropdown-item" href="#">Action</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Another action</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Something else here</a>
          </li>
        </ul>
      </li>

      <div class="container-fluid">
      <ul class="navbar-nav d-flex flex-row">
      <!-- Icon dropdown -->
      <li class="nav-item me-3 me-lg-0 dropdown">
        <a
          class="nav-link dropdown-toggle"
          href="#"
          id="navbarDropdown"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
        >
          <i class="fas fa-user"></i>
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li>
            <a class="dropdown-item" href="#">Action</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Another action</a>
          </li>
          <li><hr class="dropdown-divider" /></li>
          <li>
            <a class="dropdown-item" href="#">Something else here</a>
          </li>
        </ul>
      </li>
    </ul>
    </div>


      </ul>
    </div>
  </div>
</nav>

<div class="d-flex shadow" style="height:500px;background:linear-gradient(-45deg, navy 50%, transparent 50%)">
    <div class="container-fluid my-auto">
        <div class="row">
            <div class="col-lg-6 my-auto">
                <h1 class="display-3 font-weight-bold">School Management System</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt doloremque nobis quia culpa maxime magnam sit, maiores repellendus dolores at reprehenderit labore cum, porro blanditiis recusandae cupiditate obcaecati magni. Assumenda ad quidem at. Officiis?</p>
                <a href="" class="btn btn-lg btn-primary">Call to action</a>
            </div>
            <div class="col-lg-6">
                <div class="col-lg-8 mx-auto card shadow-lg">
                    <div class="card-body">
                      <h1>Admission Form</h1>
                        <form action="" method="post" class="">
                            <div class="md-form">
                                <input type="text" id="form1" class="form-control">
                                <label for="form1">Your Name</label>
                            </div>
                            <div class="md-form">
                                <input type="email" id="email" class="form-control">
                                <label for="email">Your Email</label>
                            </div>
                            <div class="md-form">
                                <input type="text" id="mobile" class="form-control">
                                <label for="mobile">Your Mobile</label>
                            </div>
                            <div class="md-form">
                                <input type="text" id="class" class="form-control">
                                <label for="class">Your Class</label>
                            </div>
                            <button class="btn btn-primary btn-block">Submit Form</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="py-5">
  <div class="text-center mb-5">
    <h2 class="font-weight-bold">Our Courses</h2>
    <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita perspiciatis laborum voluptate dignissimos iure atque a soluta ullam. Animi quae error et unde sequi nam incidunt obcaecati reprehenderit, tempore in quo vitae neque architecto?</p>
  </div>

  <div class="container">
    <div class="row">
      <?php for ($i=0; $i < 12; $i++) { ?>
      
      <div class="col-lg-3 mb-4">
        <div class="card">
          <div>
            <img src="./assets/images/s1.jpg" alt="" class="img-fluid rounded-top">
          </div>
          <div class="card-body">
            <b>Web Designing & Development</b>
            <p class="card-text">
              <b>Duration: </b> 45 hours <br>
              <b>Price: </b> 4000 Rs/-
            </p>
            <button class="btn btn-block  btn-primary btn-sm">Enroll Now</button>
          </div>
        </div>
      </div>

      <?php } ?>

    </div>
  </div>
</section>

<section class="py-5 bg-light">
<div class="text-center mb-5">
    <h2 class="font-weight-bold">Our Teachers</h2>
    <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita perspiciatis laborum voluptate dignissimos iure atque a soluta ullam. Animi quae error et unde sequi nam incidunt obcaecati reprehenderit, tempore in quo vitae neque architecto?</p>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        
      </div>
    </div>
  </div>
</section>

<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"
></script>
</body>
</html>