<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="../../header_php/header.css">
    <link rel="stylesheet" href="css/index.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php include "../../header_php/header.php"; ?>
    <div class="form-box">
      <div class="form-header">
        Create  Project
      </div>
      <form class="main-form" action="" method="post">
        <input type="text" name="project_name" value="" placeholder="Name" required>
        <input type="text" name="project_id" value="" placeholder="Id" required>
        <input type="text" name="sub_code" value="" placeholder="Submission Code" required>
        <input type="text" name="user_id" value="" placeholder="Leader Id" required>
        <input type="submit" name="" value="Create It!">
      </form>
    </div>
  </body>
</html>
