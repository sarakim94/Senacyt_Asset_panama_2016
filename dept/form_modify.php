<?php

session_cache_limiter('nocache, must-revalidate');

    session_start();
   
    if($_SESSION['user_id']!='admin'){    
        ?>
<script>alert("no access right");</script>
<meta http-equiv="refresh" content="0;url=../main.php">
<?php
    }
        
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script type="text/javascript" src="../chk.js"></script>
    </head>
    <body>
        <?php
        include_once("../header.php");
   
        
        // put your code here
        $dept_id = $_POST['dept_id'];
        $dept_name = $_POST['dept_name'];
        $dept_location = $_POST['dept_location'];
        ?>
     
    
        <br><form method = "post" name ='myform' id='myform' action='do_modify.php' onsubmit ="return validateForm('myform');">
       
        <input type='hidden' name='dept_id' value = '<?php echo $dept_id; ?>'>
        <br>Departmento <input type='text' name='dept_name' value = '<?php echo $dept_name?>'>
        <br>Ubicación <input type='text' name='dept_location' value = '<?php echo $dept_location;?>'>
        <br><input type='submit' name='submit' value = 'confirmar'  formaction = 'do_modify.php'>
    
        </form></tr>
          <button type ="button"  onclick="history.back()"> volver </button>
          <?php include_once '../footer.php';?>
    </body>
    
</html>
