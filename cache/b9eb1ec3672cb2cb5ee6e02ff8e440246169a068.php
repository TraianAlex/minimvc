<!DOCTYPE html>
<html lang="en-US">
<head>
<base href="http://localhost/router/public/" target="_self">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<title>Sample1</title>
<script src="static/w3.js"></script>
<link rel="stylesheet" href="static/w3.css">
</head>
<body>
    <h1>Simple MVC</h1>
    <hr />
    <?php echo $__env->make('partials/nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <hr />

    <hr />

    <hr>

    <hr>
    <script>w3.includeHTML();</script>
</body>
</html>
