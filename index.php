<?php 
session_start();
include('dbcon.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>PHP PDO</title>
</head>
<body>
    <div class="container">
        <div class="col-md-12 mt-4">

            <?php if(isset($_SESSION['message'])) : ?>
                <h5 class=" alert alert-success"><?= $_SESSION['message']; ?></h5>
            <?php endif; ?>

            <div class="card">
                <div class="card-header">
                    <h3> PHP PDO CRUD 
                        <a href="student-add.php" class="btn btn-primary float-end">Add Student</a>
                    </h3>
                </div>
             <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Course</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $query = "SELECT * FROM students"; 
                        $statement = $conn->prepare($query);
                        $statement->execute();
                        $statement->setFetchMode(PDO::FETCH_OBJ);
                        $result = $statement->fetchAll(); 
                        if($result)
                        {
                            foreach($result as $row)
                            {
                                ?>
                                <tr>
                                    <td><?= $row->id; ?></td>
                                    <td><?= $row->full_name; ?></td>
                                    <td><?= $row->email; ?></td>
                                    <td><?= $row->course; ?></td>
                                    <td> 
                                        <a href="student-edit.php?id=<?= $row->id; ?>"  class="btn btn-primary"> Edit</a>
                                    </td>
                                    <td>
                                        <form action="code.php" method="POST">
                                          <button type="submit" name="delete_student" value="<?=$row->id; ?>" class="btn btn-danger ">Delete</button>
                                        </form> 
                                    </td>
                                </tr>
                                <?php 
                            }
                        }
                        else{
                            ?>
                            <tr>
                                <td colspan="5">No Record Found</td>
                            </tr>
                            <?php 
                        }

                        ?>

                        <tr>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
             </div>
            </div>
        </div>
    </div>
</body>
</html>