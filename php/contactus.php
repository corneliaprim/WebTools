<!DOCTYPE html >
<html>
<head>
  <meta charset="utf-8" >
  <title>Thank you for your order</title>
  <style type="text/css">
  ol, ul { 
     list-style-type: none;
      }
  body {  
    background-color: #faf2e4;
    margin: 0 10%;
    font-family: sans-serif;
  }
  h1 {
    text-align: center;
    font-family: serif;
    font-weight: normal;
    text-transform: uppercase;
    border-bottom: 1px solid #57b1dc;
    margin-top: 30px;
  }

  h2 {
    color: #d1633c;
    font-size: 1em;
  }
  p.disclaimer { 
    border-top: 1px solid #d1633c; 
    padding-top: 1em;
  }
  </style>
</head>

<body>
  <?php if (isset($_POST['features']) && !is_array($_POST['features'])) {
    $features_problem = TRUE;
    $features = is_string($_POST['features']) ? $_POST['features'] : '<em>empty</em>';
  }
  else {
    $features_problem = FALSE;
    $features = isset($_POST['features']) ? implode(', ', $_POST['features']) : '<em>empty</em>';
  } ?>
<h1>THANK YOU</h1>

<p>Thank you for ordering for your message. We will respond in one to two business days.</p>

<h2>Your Information</h2>
<ul>
<li><strong>Name:</strong> <?php print $_POST['name'] ? $_POST['name'] : '<em>empty</em>'; ?></li>
<li><strong>Address:</strong> <?php print $_POST['address'] ? $_POST['address'] : '<em>empty</em>'; ?></li>
<li><strong>Telephone number:</strong> <?php print $_POST['telephone'] ? $_POST['telephone'] : '<em>empty</em>'; ?></li>
<li><strong>Email Address:</strong> <?php print $_POST['email'] ? $_POST['email'] : '<em>empty</em>'; ?></li>
</ul>
<p><strong>Comments:</strong> <?php print $_POST['instructions'] ? $_POST['instructions'] : '<em>empty</em>'; ?></p>

<h2>Additions to the Website</h2>

<?php if (!isset($_POST['addition']) && !isset($_POST['features']) && !isset($_POST['pizzas'])) { ?>
<em>Sorry, we did not receive your information. <a href="https://2learnweb.brookhavencollege.edu/RobinWilliams/contactus.html">Try again.</a></em>
<?php } 
  else { ?>
    <ul>
    <li><strong>Additions:</strong> <?php print isset($_POST['addition']) && $_POST['addition'] ? $_POST['addition'] : '<em>empty</em>'; ?></li>
    <li><strong>Features:</strong> <?php
      print $features;
      if ($features_problem) { ?>
        <span style="color:red">*</span>
     <?php } ?></li>
    <li><strong>Number of pages desired:</strong> <?php print isset($_POST['pizzas']) && $_POST['pizzas'] ? $_POST['pizzas'] : '<em>empty</em>'; ?></li>
    </ul>
<?php  }
if ($features_problem) { ?>
  <hr />
  <p>&nbsp;</p>
<?php } ?>

<p class="disclaimer"><small>This site is for educational purposes only..</small></p>

</body>
</html>
