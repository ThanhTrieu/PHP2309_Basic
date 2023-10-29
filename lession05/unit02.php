<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method GET</title>
</head>
<body>
    <a href="unit01.php?id=10&name=trieunt&age=20"> send data to unit01.php </a>
    <br/><br/>
    <h4>Method GET</h4>
    <form method="get" action="unit01.php">
        <input type="text" name="username" placeholder="username" />
        <br/><br/>
        <input type="password" name="password" placeholder="password" />
        <br/>
        <button type="submit" name="btnSend"> Send data</button>
    </form>
    <br/><br/>
    <h4>Method Post</h4>
    <form method="post" action="unit01.php">
        <input type="text" name="username" placeholder="username" />
        <br/><br/>
        <input type="password" name="password" placeholder="password" />
        <br/>
        <button type="submit" name="btnSend"> Send data</button>
    </form>

</body>
</html>