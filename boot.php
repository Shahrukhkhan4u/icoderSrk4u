<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>iCoder - heaven programers</title>
  </head>
  <body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">iCoder</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Topics
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item bg bg-primary" href="#">Album</a>
          <a class="dropdown-item bg bg-primary" href="#">Another Album</a>
          <div class="dropdown-divider"></div>

          
      <form class="md-form" action="#">
       <div class="file-field">
        <div class="btn btn-primary btn-sm float-left">
        <input type="file" multiple>
        </div>
       </div>
       </form>
        <div class="dropdown-divider"></div>

<button type="button" class="btn btn-primary">
  Notifications <span class="badge badge-light"></span>
</button>

        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="/contact.html">Contact us</a>
      </li>
      </ul>

<div class="spinner-grow bg bg-warning" role="status">
  <span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-secondary bg bg-white" role="status">
  <span class="sr-only">Loading...</span>
</div>  
<div class="spinner-grow text-light bg bg-success" role="status">
  <span class="sr-only">Loading...</span>
</div>




    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    

    <div class="MX-2">
      <button class="btn btn-danger" data-toggle="modal" data-target="#login">Login</button>
      <button class="btn btn-danger" data-toggle="modal" data-target="#Signup">Signup</button>
      </div>

<!--Login Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="login">Login to iCoder </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="Email" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control border border-primary" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary border border-primary rounded-circle"" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

  </div>
</nav>

<!-- Signup Modal -->
<div class="modal fade" id="Signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Signup">Get an iCoder Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  
  <div class="form-group">
    <label for="CPassword1">CPassword</label>
    <input type="password" class="form-control" id="CPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-danger">Creat Account</button>
</form>
       </div>
      <div class="modal-footer">
        <button type="button"  class="btn btn-primary border border-danger rounded-circle" data-dismiss="modal">Close</button>
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
      <img src="1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Welcome to iCoder</h5>
        <p>Technology news,Development and Trend</p>
        <button class="btn btn-danger">Technology</button>
        <button class="btn btn-primary">web Development</button>
        <button class="btn btn-success">Tech fun </button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="21.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">    
      <h5>The Best Coding Blog</h5>
        <p>Technology news,Development and Trend</p>
        <button class="btn btn-danger">Technology</button>
        <button class="btn btn-primary">web Development</button>
        <button class="btn btn-success">Tech fun </button>
      </div>
    
    </div>
    <div class="carousel-item">
      <img src="22.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Award Wining Blog</h5>
        <p>Technology news,Development and Trend</p>
        <button class="btn btn-danger">Technology</button>
        <button class="btn btn-primary">web Development</button>
        <button class="btn btn-success">Tech fun </button>
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



<hr>





<div class="container my-4">
<div class="row mb-2">
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">World</strong>
          <h3 class="mb-0">Global Confences  </h3>
          <div class="mb-1 text-muted">Jun 1</div>
          <p class="card-text mb-auto">All who care about the well-being of the world’s children are invited to participate.</p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block"></div>
        <img  class="bd-placeholder-img" width="200" height="250" src="21.jpg " alt="error">
      </div>
    </div>
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Design</strong>
          <h3 class="mb-0">Learn Designing</h3>
          <div class="mb-1 text-muted">Jun 1</div>
          <p class="mb-auto">A design is a plan or specification for the construction of an object or system or for the process.</p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
        <img  class="bd-placeholder-img" width="200" height="250" src="1.jpg " alt="error"></div>
      </div>
    </div>
  </div>


</div>
<div class="row mb-2">
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-danger">frontend</strong>
          <h3 class="mb-0">Botstrap Templates  </h3>
          <div class="mb-1 text-muted">Jun 1</div>
          <p class="card-text mb-auto">Bootstrap is the most popular HTML, CSS, and JavaScript framework for developing responsive, mobile-first websites.Bootstrap is free </p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block"></div>
        <img  class="bd-placeholder-img" width="200" height="250" src="22.jpg " alt="error">
      </div>
    </div>
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-warning">Design</strong>
          <h3 class="mb-0">Learn Python</h3>
          <div class="mb-1 text-muted">Nov 11</div>
          <p class="mb-auto">Python is a popular programming language. It was created by Guido van Rossum, and released in 1991.It is used for web development.software development,
mathematics</p>
          
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
        <img  class="bd-placeholder-img"  width="200" height="250" src="11.jpg" alt="error"></div>
      </div>
    </div>
  </div>  
</div>




<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="1s.jpg" class="d-block w-100"  width="250" height="600" alt="Error Loading">
      <div class="carousel-caption d-none d-md-block">
        <h5>MIT FRONT</h5>
        <p>Mahakal Institute of Technology </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="5s.jpg" class="d-block w-100"  width="250" height="600" alt="Error Loading">
      <div class="carousel-caption d-none d-md-block">
        <h5>SRK 4u</h5>
        <p>SRK.....</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="6s.jpg" class="d-block w-100"  width="250" height="600" alt="Error Loading">
      <div class="carousel-caption d-none d-md-block">
        <h5>SRK 4u</h5>
        <p>SRK.....</p>
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







<footer class="text-muted">
      <div class="container">
        <p>Album Srk4u © Bootstrap, but please download and customize it for yourself!</p>
        <p >New to Bootstrap?<span class="badge badge-pill badge-info".>Info</span> <a href="https://getbootstrap.com/" class= " btn btn-danger "  target="_blank">Visit the Bootstrap</a> or read and Learn</p>
       <span class="badge badge-light float-right">New</span>
        <p class="float-right">
          
        <a href="#"class= " btn btn-primary">Back to top</a>
        
        </p></div>
</footer>
  <!-- Optional JavaScript    ../../-->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
