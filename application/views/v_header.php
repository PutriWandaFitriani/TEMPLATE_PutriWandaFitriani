<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Web Programming II | Merancang Template Sederhana Dengan Codeigniter</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/stylebuku.css">
</head>
<body>
    <div id="wrapper">
        <header>
            <hgroup>
                <h1>TempleteBuku.net</h1>
                <h3>Ini Template Pertama Saya</h3>
            </hgroup>
            <nav>
                <ul>
                    <li><a href="<?php echo base_url(). 'web' ?>">Home</a></li>
                    <li><a href="<?php echo base_url(). 'web/Profile' ?>">Profile</a></li>
                    <li><a href="<?php echo base_url(). 'web/About' ?>">About</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </header>