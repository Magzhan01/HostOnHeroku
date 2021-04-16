<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,600" type="text/css">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<style>
    .container {
        margin-top:2%;
    } 
</style>
<style type="text/css">
        .box{
            width: 600px;
            margin: 0 auto;
            border:1px solid #ccc;
        }
        .has-error{
            border-color:#cc0000;
            background-color: #ffff99;
        }
    </style>

</head>
<body>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-2"><img src="/32114.svg" width="80"></div>
            <div class="col-md-8"><h2>Send us a photo and an explanation of your oral problem.</h2>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="http://localhost/lab_10/public/multiuploads" method="post" enctype="multipart/form-data" >
                {{ csrf_field() }}
                <div class="form-droup">
                    <label for="Full Name">Full Name</label>
                    <input type="text" name="fullname" class="form-control" placeholder="Full Name" >
                    <label for="Email">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" >
                    </div>
                    <label for="Full Name">Problem photos : </label>
                    <br>
                    <input type="file" class="form-control" name="photos[]" multiple>
                    <br> 
                    <input type="submit" class="btn btn-success" value="Upload">
            </form>
        </div>
    </div>
    </div>

    
</body>
</html>