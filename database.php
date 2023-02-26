
<?php
   
    error_reporting(0);
    $conn = mysqli_connect("localhost","root","zakidjellouli","userd");
    if(count($_POST)>0)
    {
        $roll_no=$_POST['roll_no'];
        $result = mysqli_query($conn,"SELECT * FROM user_data where roll_no='$roll_no' ");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>

   <!-- library -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    
</head>
<body>
<br>
<br>
    <div class="container">
        <form class="form-inline" method="post" action="database.php">
            <input type="text" name="roll_no" class="form-control 
text-center" placeholder="Search roll no...">
            <button type="submit" name="save" class="btn btn-primary">Search</button>
        </form>
        <br>
            <table class="table table-striped table-bordered table-sm text-center" cellspacing="0"width="100%">
                
                <tbody>
                <?php
                while($row = mysqli_fetch_array($result))
                {
                    ?>
                    <tr>
                    <td><?= $row['id'];?></td>
                    <td><?= $row['name'];?></td>
                    <td><?= $row['email'];?></td>
                    <td><?= $row['roll_no'];?></td>
                    </tr>
                <?php
                }
                // close connection database
                mysqli_close($conn);
                ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
