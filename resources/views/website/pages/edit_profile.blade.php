<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>User Registration Form</title>
</head>
<body>
    <div class="registration_form m-4">
        <div class="form-header m-4 text-center text-uppercase"><h1>Edit Profile</h1></div>
        <form>
            <div class="form-group">
                <label for="name1">Name</label>
                <input type="text" name="name" class="form-control" id="name1">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" name="address" class="form-control" id="inputAddress">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputphone">Phone</label>
                    <input type="number" name="phone" class="form-control" id="inputphone">
                </div>
            </div>
            <button type="submit" class="btn btn-info w-100 text-uppercase">Save Changes</button>
        </form>
    </div>
</body>
</html>