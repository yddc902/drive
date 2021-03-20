<?php include "db.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Drive</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Drive</h1>
    <div class="controls">
        <button id="btn-new-folder">New Folder</button>
        <button id="btn-new-link">New Link</button>
        <div class="folder-form-modal" id="folder-form-modal">
            <div class="modal-content">
                <span class="close-modal" id="close-folder-modal">&times;</span>
                <form  method="post">
                    <input type="text" name="folder_name"  class="form-control" autofocus required>
                    <input type="submit" name="add_folder" class="form-control" value="Create">
                </form> 
            </div>
        </div>        
        <div class="link-form-modal" id="link-form-modal">
            <div class="modal-content">
                <span class="close-modal" id="close-link-modal">&times;</span>
                <form  method="post">
                    <input type="text" name="link_url"  class="form-control" autofocus required>
                    <input type="submit" name="add_folder" class="form-control" value="Create Link">
                </form> 
            </div>
        </div>        
        <?php
            if(isset($_POST["add_folder"])){
            $sql = "INSERT INTO folders (folder_name)
                VALUES ('".$_POST["folder_name"]."')";
                
                if (mysqli_query($conn, $sql)) {
                } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }  
            }        
        ?>
    </div>
        <div class="folders-area">         
            <?php            
                $sql = "SELECT * FROM folders where parent_id=0 ORDER BY created_at ";

                if ($result = mysqli_query($conn, $sql)) {
                // Fetch one and one row
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<a class=\"folder\" href=\"folder/?id=".$row["id"]."\">".$row["folder_name"]."</a>";
                }
                mysqli_free_result($result);
                }
            ?>

        </div>
    
</div>
   <script src="main.js"></script>
</body>
</html>