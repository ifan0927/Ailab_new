<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Ailab</title>
</head>
<body>
    <div class="container" style="margin-top:100px; width:500px">
    <div class="card border-dark mb-3" style="max-width: 30rem;">
        <div class="card-header">登入頁面</div>
        <div class="card-body text-dark">
        <form role="form" method="post" action="/Home/login">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username:</label>
            <input type="text" class="form-control" id="usr_name" name="usr_name" placeholder="Enter Username">
            
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password">
        </div>
        <div id="emailHelp" class="form-text"><br>帳號相關請聯繫系統管理員</div>
        <button type="submit" class="btn btn-primary">登入</button>
        </form>
        </div>
    </div>
    </div>
</body>
</html>