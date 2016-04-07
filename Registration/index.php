<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration without DB</title>
    <style type="text/script">
    .wrapper{
      width: 700px;
      height: 700px;
      margin: 0px;
      border: 1px: black;
      padding: left: 10px;;
    }
    .form{
      width: 420px;
      height: 400px;
      text-align: right;
      border: 1px: blue;
      padding: 0px 10px;
    }
    .submit{
      width: 120px;
      height: 40px;
      font-size: 20px;
    }
    .description{
      font-size: 12px;
      color: red;
      line-height: 50%;
    }
    </style>
  </head>
  <body>
    <div class="wrapper">
      <div class="form">
        <form action="Rprocess.php" method="post" ENCTYPE="multipart/form-data">
          <p>e-mail: <input type="text" name="e-mail"></p>
          <p>first name: <input type="text" name="first name"></p>
          <p>last name: <input type="text" name="last name"></p>
          <p>password: <input type="text" name="password"></p>
          <p>confirm password: <input type"text" name="confirm password"></p>
          <p>birth date: <input type="birth date" name="birth date"></p>
          <p>profile picture: <input type="file" name="profile picture"></p>
          <input class="submit" type="submit" value="Register">
          <hr>
        </form>
      </div>
    </div>
  </body>
</html>
