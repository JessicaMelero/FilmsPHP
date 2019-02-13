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
    <header class="container-fluid mt-2">
       <a href="/home" class="text-dark"><strong>Home</strong></a>
    </header>
    <form action="/addFilm" method="post" class="container">
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                Please fix the following errors
            </div>
        @endif
            {!! csrf_field() !!}
        <div class="card w-50 p-5 mt-5 ">
            <h2 class="text-center">Add a new film</h2>
            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                <label>Title</label>
                <input type="text" class="form-control" name="title" placeholder="Enter a title" value="{{ old('title') }}"/>
                @if($errors->has('title'))
                    <span class="help-block">{{ $errors->first('title') }}</span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('year') ? ' has-error' : '' }}">
                <label>Year</label>
                <input type="text" class="form-control" name="year" placeholder="Enter a year" value="{{ old('year') }}"/>
                @if($errors->has('year'))
                    <span class="help-block">{{ $errors->first('year') }}</span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                <label>Description</label>
                <br>
                <textarea type="text" class="form-control w-100" name="description" placeholder="Enter a description">{{ old('description') }}</textarea>
                @if($errors->has('description'))
                    <span class="help-block">{{ $errors->first('description') }}</span>
                @endif
            </div>
            <button type="submit" class="btn btn-success w-25">Submit</button>
        </div>
    </form>
</body>
</html>