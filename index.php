<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <form id="signupForm" method="post">
            <div class="row">
                <div class="mb-3 col-6">
                    <label for="firstName" class="form-label">First Name:</label>
                    <input type="text" id="firstName" class="form-control" name="firstName">
                </div>
                <div class="mb-3 col-6">
                    <label for="lastName" class="form-label">Last Name:</label>
                    <input type="text" id="lastName" class="form-control" name="lastName">
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-6">
                    <label for="gender">Gender : &nbsp;</label>

                    <input type="radio" name="gender" id="male" value="M">
                    <label for="male">Male</label>
                    &nbsp;
                    <input type="radio" name="gender" id="female" value="F">
                    <label for="female">Female</label>
                </div>
                <div class="col-6">
                    <label for="username" class="form-label">User Name</label>
                    <input type="text" name="username" id="username" class="form-control"> 
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-6">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 col-6">
                    <label for="passCode" class="form-label">Password</label>
                    <input type="password" class="form-control" id="passCode">
                </div>
            </div>
            <button type="submit" id="submitForm" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        $("#submitForm").click(function (event) { 

            event.preventDefault();
            $.ajax({
                type: "POST",
                url: "http://localhost/Project_11022024/CRUD-PHP/med_process_formdata.php",
                data: $("#submitForm").serialize(),
                success: function (response) {
                        console.log("Data sent successfully to the backend !");
                }
                ,
                error: function (response) { 
                        console.log("There is some error with the api call !");
                 }
            });

         });
        
        
    </script>
  </body>
</html>