<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .change{
            color: #1e3878;
            transition: all 0.3s;
        }
        
        .change:hover{
            color: #54c295;
        }
    </style>
</head>
<body dir="rtl">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white" style="height: 80px;">
        <div class="container">
            <a class="navbar-brand" href="/home"><h1 class="pe-4" style="color: #1e3878">الشعار</h1></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="#navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse bg-white text-center" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="--bs-scroll-height: 100px;">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle ps-4 pe-4" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="change">خدمات المحاسبة</span>
                        </a>
                        <ul class="dropdown-menu p-4" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item change" href="/Cloud-Accounting-Department"><h5>قسم المحاسبة السحابية</h5></a></li>
                            <li><a class="dropdown-item change" href="/funds-incubators"><h5>الصناديق والحاضنات</h5></a></li>
                            <li><a class="dropdown-item change" href="/franchise"><h5>الامتياز التجاري</h5></a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pricing"><p class="change fs-5">التسعير</p></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#"><p class="change fs-5 pe-4">اى شئ</p></a>
                    </li>
                </ul>

                <h6 class="change nav-item">
                    <a class="nav-link h5 change" href="/home/en">English</a>
                </h6>
            </div>
        </div>
    </nav>




    <script>
        window.addEventListener('scroll',(e)=>{
            const nav = document.querySelector('.navbar');
            if(window.pageYOffset>16){
                nav.classList.add("shadow");
            }else{
                nav.classList.remove("shadow");
            }
        });
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\laragon\www\server\1-web devlopment\2-back_end\2-laravel\Accounting-office\resources\views/projectAR/header.blade.php ENDPATH**/ ?>