<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The HTML5 Herald</title>
  <meta name="description" content="The HTML5 Herald">
  

  <link rel="stylesheet" href="css/styles.css?v=1.0">

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>

<body>

<?php// if(Session::get('loggedIn') == true):?>
  <a href="/admin/logout">Logout</a>
<?php// else: ?>
  <a href="login/index">Login</a>
<?php// endif; ?>
