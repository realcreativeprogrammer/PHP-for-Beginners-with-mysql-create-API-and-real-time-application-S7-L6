<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class='container'>
        <form method='post'>
            <div class="mb-3">
                <label class="form-label">Name:</label>
                <input type='text' name='name' class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Subject:</label>
                <input type='text' name='subject' class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Body:</label>
                <input type='text' name='body' class="form-control">
            </div>

            <input type="submit" value="Send Email" name="submit"  class='btn btn-success'>

        </form>

    </div>
</body>
</html>