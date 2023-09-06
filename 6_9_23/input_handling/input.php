<?php
    
   if(isset($_POST["submit"])){
     $u_name = $_POST['username'];
     $pass = $_POST["password"];
   };

   if(isset($_POST["color_choose"])){
    if(isset($_POST["colors"])){
        $fav_colors = $_POST['colors'];

        foreach($fav_colors as $colors){
            echo $colors.  "<br>";
        }
    }
  };

  if(isset($_POST["fav_color"])){
    $fav_color = $_POST['fav'];
    echo $fav_color;
  };

  if(isset($_POST["upload"])){
    echo $_FILES['file'] ["tmp_name"]. "<br>";
    echo $_FILES['file'] ["size"]. "<br>";
    echo $_FILES['file'] ["type"]. "<br>";
    echo $_FILES['file'] ["name"]. "<br>";

    move_uploaded_file($_FILES['file']['tmp_name'], 'upload/'.$_FILES['file']['name']);
  }

  if(isset($_POST["upload_multi"])){
    foreach($_FILES['files']['tmp_name'] as $keys=>$y){
        echo $_FILES['files'] ["tmp_name"][$keys]. "<br>";
        echo $_FILES['files'] ["size"][$keys]. "<br>";
        echo $_FILES['files'] ["type"][$keys]. "<br>";
        echo $_FILES['files'] ["name"][$keys]. "<br>";   

        move_uploaded_file($_FILES['files']['tmp_name'][$keys], 'upload/'.$_FILES['files']['name'][$keys]);
    }
  }

?>

<html>
<body>
    <div>
        <form action="web_page.php" method="Post">
            <input type="text" name="user_name" placeholder="User Name">
            <input type="text" name="password" placeholder="Password">
            <button type="submit" name="submit">Rsgister</button>
        </form>
    </div> 
    <br>
    <div>
        <form action="" method="post">
            <input type="checkbox" name="colors[]" value="red">red <br>
            <input type="checkbox" name="colors[]" value="yellow">Yellow<br>
            <input type="checkbox" name="colors[]" value="blue">Blue<br>
            <input type="checkbox" name="colors[]" value="orange">Orange<br>
            <input type="submit"  name="color_choose" value="choose" >
        </form>
    </div>
    <br>
    <div>
        <form action="" method="post" >
        <input type="radio" name="fav" value="red">red <br>
        <input type="radio" name="fav" value="yellow">Yellow<br>
        <input type="radio" name="fav" value="blue">Blue<br>
        <input type="radio" name="fav" value="orange">Orange<br>
        <input type="submit"  name="fav_color" value="choose" >
        </form>
    </div>
    <br>
    <div>
        <form action="" method="Post" enctype="multipart/form-data">

            <input type="file" name="file">
            <button type="submit" name="upload">Upload</button>
        </form>
    </div>
    <br>
    <div>
        
    <form method='post' action='' enctype='multipart/form-data'>

        <input type="file" name="files[]" id="file" multiple>
        <input type='submit' name='upload_multi' value='upload'>
    </form>
    </div>

</body>
</html>

