<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../header_php/header.css">
    <link rel="stylesheet" href="css/index.css">
    <title></title>
  </head>
  <body>
      <?php include "../header_php/header.php"; ?>
      <div class="sign-up-box">
        <div class="login-header">
              Sign Up.
        </div>
        <form class="sign-up" action="../
        authentication/signup.php" method="POST">
          <!-- <div class="type">
            <div class="student">
              Student
            </div>
            <div class="teacher">
              Teacher
            </div>
          </div> -->
          <table>
            <tr>
        <td>  <input type="text" name="user_id" size="30" required placeholder="User Id"><br></td>
        </tr>
        <tr>
        <td>  <input type="text" name="name" value="" size="30" required placeholder="Name"><br></td>
        </tr>
        <tr>
          <td><input type="text" name="email" value="" size="30" required placeholder="Email"><br></td>
        </tr>
        <tr>
          <td><input type="text" name="phone" value="" size="10" required maxlength="10" placeholder="Phone"><br></td>
        </tr>
        <tr>
          <td><input type="password" name="password" value="" size="30" required placeholder="Password"><br></td>
        </tr>
        <tr>
          <td>
            <select class="" name="type">
              <option value="t">Teacher</option>
              <option value="s">Student</option>
            </select>
          </td>
          <td>
              <input type="submit" name="" value="submit">
          </td>
        </tr>
        </table>
        </form>
      </div>

  </body>
</html>
