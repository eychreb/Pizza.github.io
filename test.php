<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <form action="test.php" method="post">
    <h1>Please Select Option</h1>
    <h1>0.Create Folder</h1>
    <h1>2.Delete Folder</h1>
    <h1>Create and open file</h1>
    <h1>Append file from data </h1>
    <input type="text" name="option" placeholder="option">
    <input type="text" name="add" placeholder="DATA">
    <button type="submit">GO</button>
    </form>
</body>
</html>

<?php 
    $option = $_POST['option'];
    $add = $_POST['add'];
    switch($option){
        case 1: 
            createDirectory();
            break;
        case 2:
            deleteDirectory();
            break;
        case 3:
            createfile();
            break;
        case 4:


    }
    function createDirectory() {
        $add = $_POST["add"];
        mkdir("Gfg ".$add);
        echo "<script type = 'text/javascript'>alert('Done!');</script>";
    }
    function deleteDirectory(){
        $add = $_POST["add"];
        mkdir('gfg' . $add);
        // removing directory using rmdir()
        rmdir($add);
    }
    function createfile(){
        $fp = fopen('data.txt', 'w');//opens file in write-only mode  
        fclose($fp);  
          
        echo "File written successfully";    
    }
    function read_file(){
       
    }
    ?>