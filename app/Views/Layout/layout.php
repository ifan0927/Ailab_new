<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>AiLab</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand">Ailab</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="/Home/index">Home</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                智慧家庭
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/Home/smarthome">120 & 121 控制</a></li>
                <li><a class="dropdown-item" href="/Home/fishtank">智能魚缸</a></li>
            </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">DGX</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Setting</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                常用連結
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">DGX Station 導覽入口</a></li>
                <li><a class="dropdown-item" href="#">Nas使用教學</a></li>
                <li><a class="dropdown-item" href="#">Gitlab</a></li>
            </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Home/logout">登出</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    <?= $this->renderSection("content"); ?>
</body>
</html>