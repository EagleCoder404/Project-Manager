<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="../../header_php/header.css">
    <link rel="stylesheet" href="css/master.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php include "../../header_php/header.php"; ?>
      <div class="form-box">
        <div class="form-header">
          Create Phase
        </div>
        <form class="main-form" action="index.html" method="post">
          <input type="text" name="submission_code" value="" required placeholder="Submission Code">
          <textarea name="description" rows="8" cols="80" placeholder="Description"></textarea>
        </form>
      </div>
  </body>
</html>
