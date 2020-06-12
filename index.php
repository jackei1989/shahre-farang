<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- stylesheet section -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css"> -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>شهر فرنگ</title>
</head>
<body>
    
    <!-- start main container section -->
    <div id="main-container">
        <!-- start header section -->
        <header id="header-container">
            <button class="toggle-nav">
                <img src="assets/imag/icon/menu.png" alt="" srcset="">
                <!-- <i class="fas fa-bars"></i> -->
            </button>

            <!-- logo -->
            <a class="logo" href="index.php">
                <img src="assets/imag/icon/logo.png" alt="شهر فرنگ" srcset="" title="شهر فرنگ">
            </a>

            <!-- search bar -->
            <div class="search">
                <form action="search.php" method="GET">
                    <input type="text" class="search-input" name="s" placeholder="جستجو در ویدیوها ...">
                    <button class="search-btn">
                        <i class="fas fa-search"></i>
                    </button>                    
                </form>
            </div>

            <!-- left header section -->
            <div class="left-header-icon">
                <div class="upload-btn-wrapper">
                    <a class="upload-btn" href="upload.php">
                        <i class="fas fa-upload"></i>
                        <span>بارگذاری ویدیو</span>
                    </a>
                </div>
                <div class="login-registry-btn-wrapper">
                    <a class="login-registry-btn" href="#">
                        <i class="fas fa-user"></i>
                        <span>ورود یا ثبت نام</span>
                    </a>
                </div>
             
            </div>
        </header>
        <!-- end header section -->
        <!-- start sidebar section -->
        <aside id="side-nav-container" style="display: none;">

        </aside>
        <!-- end sidebar section -->
        <!-- start container section -->
        <div id="container">
            <div id="content-container">
                 سلام به همه
            </div>
        </div>
        <!-- end container section -->
    </div>
    <!-- end main container section -->
    <!-- script section -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="./assets/js/main.js"></script>
</body>
</html>