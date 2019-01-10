<?php include "db.php"; ?>
<?php require_once('func.php'); ?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Incomehouse</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="icons/favicon.ico" type="image/x-icon">
    <link rel="icon" href="icons/favicon.ico" type="image/x-icon">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Theme initialization -->

    <script>
        var themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
        {};
        var themeName = themeSettings.themeName || '';
        if (themeName)
        {
            document.write('<link rel="stylesheet" id="theme-style" href="css/app-' + themeName + '.css">');
        }
        else
        {
            document.write('<link rel="stylesheet" id="theme-style" href="css/app.css">');
        }
    </script>
</head>
<body>