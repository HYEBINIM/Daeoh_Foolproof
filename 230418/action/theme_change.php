<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    $conn = new mysqli("localhost", "server", "00000000", "dataset");

    $_SESSION['theme'] = $_POST['theme'];
    ?>
    <script>
        alert('테마<?php echo $_SESSION['theme']; ?>로 변경되었습니다.');
        document.location.href = '/page/theme.html';
    </script>
</body>

</html>