
<html>
    <body>
    <div style="background-color: lightblue;">
    <form action="web_page.php" method="post" enctype="multipart/form-data">
        <h4>Register Page</h4><br>
        <input type="text" name="user_name" placeholder="User Name"><br>
        <input type="email" name="mail" placeholder="Eamil address"><br>
        <input type="text" name="password" placeholder="Password"><br>

        <h6>choose your gender</h6><br>
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female<br><br>

        <h6>choose the subjects you would like to attend/h6><br>
        <input type="checkbox" name="subjects[]" value="java">java 
        <input type="checkbox" name="subjects[]" value="php">Yellow
        <input type="checkbox" name="subjects[]" value="python">Blue<br><br>

        <input type="file" name="files[]" multiple><br><br>

        <button type="submit" name="submit">Rsgister</button>
    </form>
    </div>
    </body>
</html>