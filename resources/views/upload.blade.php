<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Upload File</h1>
    <form action="upload" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file"> <br> <br>
        <button type="submit">Upload File</button>
    </form>
</body>
</html>