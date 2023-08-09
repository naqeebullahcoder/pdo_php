<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Insert Data</title>
</head>
<body>
    <div class="container">
        <div class="col-md-8 mt-4">
            <div class="card">
                <div class="card-header">
                    <h3> Insert Data
                        <a href="index.php" class="btn btn-danger float-end">Back</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST">
                        <div class="mb-3">
                            <label>Full Name</label> 
                            <input type="text" name="full_name"  class="form-control"> 
                        </div>
                        <div class="mb-3">
                            <label>Email</label> 
                            <input type="text" name="email"  class="form-control"> 
                        </div>
                        <div class="mb-3">
                            <label>Phone</label> 
                            <input type="text" name="phone"  class="form-control"> 
                        </div>
                        <div class="mb-3">
                            <label>Course</label> 
                            <input type="text" name="course"  class="form-control"> 
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="save_student_btn" class="btn btn-primary">Save Student</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>