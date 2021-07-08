
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Exercices</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <div class="row">
        <p>Insérer un nouvel utilisateur :</p>
            <div class="col-md-3 col-sm-0"></div>
            <div class="col-md-6 col-sm-12">
                <form action="handler.php" method="post">
                    <div class="mb-3">
                        <label for="input-first_name" class="form-label">First Name:</label>
                        <input type="text" class="form-control" id="input-first_name" name="data-first_name">
                    </div>
                    <div class="mb-3">
                        <label for="input-last_name" class="form-label">Last Name:</label>
                        <input type="text" class="form-control" id="input-last_name" name="data-last_name">
                    </div>
                    <div class="mb-3">
                        <label for="input-email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="input-email" name="data-email">
                    </div>
                    <div class="mb-3">
                        <label for="input-gender" class="form-label">Gender:</label>
                        <select class="form-select" aria-label="Default select example" id="input-gender" name="data-gender">
                            <option selected>Choose gender</option>
                            <option value="Female">Female</option>
                            <option value="Male">Male</option>
                            <option value="Binary">Undefined</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="input-ip_address" class="form-label">IP Adress:</label>
                        <input type="text" class="form-control" id="input-ip_address" name="data-ip_address">
                    </div>
                    <div class="mb-3">
                        <label for="input-birth_date" class="form-label">Birth Date:</label>
                        <input type="date" class="form-control" id="input-birth_date" name="data-birth_date">
                    </div>
                    <div class="mb-3">
                        <label for="input-zip_code" class="form-label">Zip Code: </label>
                        <input type="text" class="form-control" id="input-zip_code" name="data-zip_code">
                    </div>
                    <div class="mb-3">
                        <label for="input-avatar_url" class="form-label">Avatar URL</label>
                        <input type="text" class="form-control" id="input-avatar_url" name="data-avatar_url">
                    </div>
                    <div class="mb-3">
                        <label for="input-state_code" class="form-label">State Code</label>
                        <input type="text" class="form-control" id="input-state_code" name="data-state_code">
                    </div>
                    <div class="mb-3">
                        <label for="input-country_code" class="form-label">Country Code:</label>
                        <input type="text" class="form-control" id="input-country_code" name="data-country_code">
                    </div>
                    <div class="d-grid gap-2 mt-3">
                        <button type="submit" class="btn btn-outline-primary">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-md-3 col-sm-0"></div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>