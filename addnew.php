<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHONE~BOOK DETAILS</title>
</head>

    <style>
        .form-style{
            margin: 20px auto 20px auto;
            width: 500px;
        }
    </style>

<body>

    <form class="form-style" method="post" action="" >
            <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="name"
            placeholder="Name" required>
            <label for="floatingInput">Enter Name</label>
            </div>

            <div class="form-floating mb-3">
            <input type="number" name="number" class="form-control" id="floatingInput"
            placeholder="Mobile Number" required>
            <label for="floatingInput">Mobile number</label>
            </div>

            <div class="form-floating">
            <input type="email" class="form-control" name="email" id="floatingPassword" placeholder="Email" required>
            <label for="floatingPassword">Email address</label>
            </div>

                <input type="submit" name="submit" style="margin-top: 20px;" class="btn btn-primary">
            

    </form>

</body>
</html>