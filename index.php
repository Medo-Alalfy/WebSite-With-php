
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css">
  <title>Document</title>
</head>

<body>

  <div class="container">

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">Welcome to the site</h1>
      <p class="lead fw-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple’s marketing pages.</p>
      <a class="btn btn-outline-secondary" href="#">Coming soon</a>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
  </div>



    <form action="login.php" method="post" novalidate>

      <div class="mb-3">
        <label for="firstName" class="form-label">FirstName</label>
        <input type="text" class="form-control" id="firstName"  name="firstname">
       
      </div>

     <div class="mb-3">
        <label for="lastName" class="form-label">LastName</label>
        <input type="text" class="form-control" id="lastName"  name="lastname">
        </div>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="text" class="form-control" id="exampleInputEmail1"  name="email">
      </div>



      <button type="submit" class="btn btn-primary" name="login">Submit</button>
    </form>



  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="index.js"></script>
</body>

</html>