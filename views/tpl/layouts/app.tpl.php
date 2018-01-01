<!DOCTYPE html>
<html lang="en-US">
<head>
<base href="http://localhost:8080/" target="_self">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<title>Sample1</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-beta.1.css" type="text/css">
<script src="static/w3.js"></script>
<link rel="stylesheet" href="static/w3.css">
</head>
<body>
    <h1>Simple MVC</h1>
    <hr />
    <?php inc('partials/nav');?>
    <hr />
    <?php output();?>
    <hr />
    <?php output('content');?>
    <hr>
    <?php output('footer');?>
    <hr>
    <script>w3.includeHTML();</script>
</body>
</html>
