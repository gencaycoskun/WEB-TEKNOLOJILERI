
    <style>
        p{
            margin-top:-8px;
            margin-bottom:-7px;
            width: 100%;
            height: 780px;
            background: url(images/web.jpg);
            text-align: center;
            color: #3a6cf4;
            font-weight: 700;
            font-size: 3.5em;
        }
    </style>
<?php 
    $email="g231210073@ogr.sakarya.edu.tr";
    $pass="g231210073";
    if($_POST["email"]==$email && $_POST["password"]==$pass)
    {
        echo ("<p>Hosgeldiniz "g231210073"</p>");
        header("refresh: 5; url=../index.html");
    }
    else
    {
        echo ("<p>hatali giris yaptiniz!</p>");
        header("refresh: 5; url=index.php");
    }
?>