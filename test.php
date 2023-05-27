<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <style>
        .form-inline .form-group {
            display: inline-block;
            margin-bottom: 0;
            vertical-align: middle;
        }
        .form-inline .form-control {
            display: inline-block;
            margin-bottom: 0;
            vertical-align: middle;
        }
        .form-inline .form-group { margin-right:20px;}
        </style>
    <title>Bootstrap</title>
  </head>
  <body>
      <h1>Space between two input fields in bootstrap</h1>
    <form class="form-inline" role="form">
        <div class="form-group">
          <label for="email2">Email:</label>
          <input type="email" class="form-control" id="email2" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="pwd2">Password:</label>
          <input type="password" class="form-control" id="pwd2" placeholder="Enter password">
        </div>
        <div class="checkbox">
          <label><input type="checkbox"> Remember me</label>
        </div>
        <button type="button" class="btn btn-primery">Submit</button>
  </body>
</html>