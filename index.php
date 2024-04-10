<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="Images/BLog logo 1.png" type="image/x-icon">
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link rel="stylesheet" href="signup.css">
    <!-- Trial Css For Login page
<style>
  .modal-header  {
    background-color: black;
    color: white;
    align-content: center;
  }
  .modal-body{
    background-color: black;
    color: white;
  }
</style> -->

    <title>Blogger - A Unique Blogging Experience</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><img src="Images/BLog logo 1.png" style="height: 40px; "></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html" style="padding-top: 10px;">About</a>
                </li>
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Topics
                    </a> -->
                    <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Technology</a>
                        <a class="dropdown-item" href="#">Web Developement</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Support</a>
                        <a class="dropdown-item" href="#">Write for us</a>
                    </div> -->
                <!-- </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="writeblog.html">Create Blog</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" id="loginForm">

                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                    Search
                </button>


            </form>
            <div class="mx-2">
                <a href="">
                </a>
                <?php
    session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true)
      {
      echo'
      <a href="register.php">
      <button class="button" id="form-open">Login</button>
    </a>';
    }
    else{
      echo'
      <a href="logout.php">
      <button class="button" id="form-open">Logout</button>
    </a>';
    }
?>

                <!-- <a href="signup.html"><button
            class="btn btn-danger"
            data-toggle="modal"
            data-target="#LoginModal"
          > Login
</button></a> -->
                <!-- <button
            class="btn btn-danger"
            data-toggle="modal"
            data-target="#SignUpModal"
          >
            SignUp
          </button> -->
            </div>
        </div>
    </nav>

    <!-- Login Modal -->
    <!-- <div
        class="modal fade"
        id="LoginModal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="LoginModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="LoginModalLabel">Login to Blogger</h5>
              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input
                    type="email"
                    class="form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                  />
                  <small id="emailHelp" class="form-text text-muted"
                    >We'll never share your email with anyone else.</small
                  >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input
                    type="password"
                    class="form-control"
                    id="exampleInputPassword1"
                  />
                </div>
                <div class="form-group form-check">
                  <input
                    type="checkbox"
                    class="form-check-input"
                    id="exampleCheck1"
                  />
                  <label class="form-check-label" for="exampleCheck1"
                    >Check me out</label
                  >
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
              </form>
            </div>
            <div class="modal-footer">
              <button
                type="button"
                class="btn btn-secondary"
                data-dismiss="modal"
              >
                Close
              </button>
            </div>
          </div>
        </div>
      </div> -->
    <!--SignUp Modal -->
    <!-- <div
      class="modal fade"
      id="SignUpModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="SignUpModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="SignUpModalLabel">
              Get an Blogger Account
            </h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div> -->
    <!-- <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input
                  type="email"
                  class="form-control"
                  id="exampleInputEmail1"
                  aria-describedby="emailHelp"
                />emailHelp 
                <small id="emailHelp" class="form-text text-muted"
                  >We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="cexampleInputPassword1">Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="cexampleInputPassword1"/>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Confirm Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="exampleInputPassword1"/>
              </div>

              <button type="submit" class="btn btn-primary">Submit</button> -->
    </form>
    </div>
    <!-- <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-dismiss="modal"
            >
              Close
            </button>
            <button type="button" class="btn btn-primary">
              Create Account
            </button> -->
    </div>
    </div>
    </div>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Images/1.jpg" class="d-block w-100" alt="" />
                <div class="carousel-caption d-none d-md-block">
                    <h2>Welcome to Blogger</h2>
                    <p>Technology News , Developement and Trends</p>
                    <button class="btn btn-danger">Technology</button>
                    <button class="btn btn-primary">Web Development</button>
                    <button class="btn btn-success">Tech Fun</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Images/2.jpg" class="d-block w-100" alt="" />
                <div class="carousel-caption d-none d-md-block">
                    <h2>The Best Coding Blog</h2>
                    <p>Technology News , Developement and Trends</p>
                    <button class="btn btn-danger">Technology</button>
                    <button class="btn btn-primary">Web Development</button>
                    <button class="btn btn-success">Tech Fun</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Images/7.jpg" class="d-block w-100" alt="" />
                <div class="carousel-caption d-none d-md-block">
                    <h2>Award Winning Blog</h2>
                    <p>Technology News , Developement and Trends</p>
                    <button class="btn btn-danger">Technology</button>
                    <button class="btn btn-primary">Web Development</button>
                    <button class="btn btn-success">Tech Fun</button>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container my-4">
        <div class="row mb-2">
            <div class="col-md-6">
                <div
                    class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">World</strong>
                        <h3 class="mb-0">Global Conferences</h3>
                        <div class="mb-1 text-muted">Dec 24</div>
                        <p class="card-text mb-auto">
                            The Global Conference on Primary Health Care, which took place in Astana, Kazakhstan,
                            endorsed...

                        </p>
                        <a href="global.html" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <div
                            style="height: 200px; width: 200px; padding-top: 20px; padding-right: 20px; margin-right: 20px;">
                            <img src="Images/edit1.jpg " height="200px" width="200px" alt="">
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Design</strong>
                        <h3 class="mb-0">Learn Designing</a></h3>
                        <div class="mb-1 text-muted">Dec 26</div>
                        <p class="mb-auto">
                            Welcome to the world of graphic design,
                            where imagination meets digital artistry!
                            Whether ...

                        </p>
                        <a href="design.html" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <div
                            style="height: 200px; width: 200px; padding-top: 20px; padding-right:20px; margin-right: 20px;">
                            <img src="Images/Design front.jfif" height="200px" width="200px" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-4">
        <div class="row mb-2">
            <div class="col-md-6">
                <div
                    class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-danger">FrontEnd</strong>
                        <h3 class="mb-0">Bootstrap Templates</h3>
                        <div class="mb-1 text-muted">Dec 28</div>
                        <p class="card-text mb-auto">
                            The PHC approach is foundational to achieving our shared global goals in Universal Health
                            Coverage (UHC)
                            <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="200" src="Images/edit3.jpg" alt="" />
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-warning">Coding</strong>
                        <h3 class="mb-0">Learn programming</h3>
                        <div class="mb-1 text-muted">Dec 30</div>
                        <p class="mb-auto">
                            Welcome to the world of programming, where creativity converges with digital innovation!
                        </p>
                        <a href="coding.html" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <div
                            style="height: 200px; width: 200px; padding-top: 20px; padding-right: 20px; margin-right: 20px;">
                            <img src="Images/Coding front.jpg" height="200px" width="200px" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="container">
        <p class="float-right"><a href="#">Back to Top</a></p>
        <p>
            copyright 2023-24 Blogger , Inc. .<a href="#">Privacy</a>.
            <a href="#">Terms</a>
        </p>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script>
    document.getElementById("form-open").addEventListener("click", function() {
        window.location.href = "../register.php"
    });
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="signup.js"></script>
</body>

</html>