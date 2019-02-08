<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>Add Film</title>
</head>
<body>
    <form class="container">
        <div class="card w-50 p-5 mt-5 ">
            <h2 class="text-center">Add a new film</h2>
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" id="title" placeholder="Enter a title">
            </div>
            <div class="form-group">
                <label>Year</label>
                <input type="text" class="form-control" id="year" placeholder="Enter a year">
            </div>
            <div class="form-group">
                <label>Description</label>
                <br>
                <textarea type="text" class="form-contol w-100" id="description"></textarea>
            </div>
            <button type="submit" class="btn btn-success w-25">Submit</button>
        </div>
    </form>
</body>
</html>