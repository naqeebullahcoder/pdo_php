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
    <title>Edit Data</title>
</head>
<body>
    <div class="container">
        <div class="col-md-8 mt-4">

            <?php if(isset($_SESSION['message'])) : ?>
                <h5 class=" alert alert-success"><?= $_SESSION['message']; ?></h5>
            <?php endif; ?>

            <div class="card">
                <div class="card-header">
                    <h3> Edit Data
                        <a href="index.php" class="btn btn-danger float-end">Back</a>
                    </h3>
                </div>
                <div class="card-body">
                    <?php
                    if(isset ($_GET['id'])){
                        
                        $student_id = $_GET['id'];
                        $query = "SELECT * FROM students WHERE id=:stud_id LIMIT 1";
                        $statement = $conn->prepare($query);
                        $data = [':stud_id' => $student_id];
                        $statement->execute($data);

                        $result = $statement->fetch(PDO::FETCH_OBJ);

                    }
                    ?>
                    <form action="code.php" method="POST">
                        <input type="hidden" name="student_id" value="<?=$result->id; ?>">
                        <div class="mb-3">
                            <label>Full Name</label> 
                            <input type="text" name="full_name" value="<?=$result->full_name; ?>" class="form-control"> 
                        </div>
                        <div class="mb-3">
                            <label>Email</label> 
                            <input type="text" name="email"  value="<?=$result->email;?>" class="form-control"> 
                        </div>
                        <div class="mb-3">
                            <label>Phone</label> 
                            <input type="text" name="phone" value="<?=$result->phone ;?>" class="form-control"> 
                        </div>
                        <div class="mb-3">
                            <label>Course</label> 
                            <input type="text" name="course" value="<?=$result->course ;?>" class="form-control"> 
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="update_student_btn" class="btn btn-primary">Update Student</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>