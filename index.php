<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <h1>Form</h1>
    <div id="main">
        <div>
            <h3>Insert account</h3>
    
            <form action="includes/formhanlder.inc.php" method="post">
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <input type="text" name="email" placeholder="E-Mail">
                <button>Insert</button>
            </form>
        </div>
        
        <div>
            <h3>Change account</h3>
    
            <form action="includes/userupdate.inc.php" method="post">
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <input type="text" name="email" placeholder="E-Mail">
                <button>Update</button>
            </form>
        </div>
        
        <div>
            <h3>Delete account</h3>
    
            <form action="includes/userdelete.inc.php" method="post">
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">        
                <button>Delete</button>
            </form>
        </div>
    </div>
</body>

</html>