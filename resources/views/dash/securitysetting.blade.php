<!DOCTYPE html>
<html>

<head lang="ar">
    <meta charset="UTF-8">
    <title>لوحة التحكم | أسماء المراكز / المراكز المعتمدة</title>
    <link rel="stylesheet" href="dash/css/main.css">
    <link rel="stylesheet" href="dash/css/settingaccount.css">
    <link rel="stylesheet" href="dash/responsive/responsive-main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
</head>

<body>

 

    <div class="container">
        <!-- Nav Bar -->
        <nav>
            <!-- Logo -->
            <div class="logo">
                <img src="dash/img/logo.png" alt="logo">
            </div>
            <!-- End Logo -->
            <!-- ul -->
            <ul>
                <li><a  href="{{ route('admin.home') }}">الصفحة الرئيسية</a></li>
                <li><a class="activ"  href="{{ route('admin.edit') }}">أسماء المراكز / المراكز المعتمدة</a></li>
                <li><a href="./account_statement.html">كشف حساب</a></li>
                <li><a href="./cut_coins.html">قص العملات</a></li>
                <li><a href="{{ route('admin.transform') }}">التحويل من مركز الي مركز</a></li>
                <li><a href="">الاعتمادات</a></li>
                <li><a href="{{ route('signout') }}">تسجيل الخروج</a></li>
            </ul>
            <!-- end ul -->
            <span class="menu"><i class="fa-solid fa-bars"></i></span>
        </nav>
        
        <!-- End Nav Bar -->

    <div class="content">
            <div class="left">
                <div class="profile">
                    <i class="fa-solid fa-user"></i>
                    <span>
                    <h4>مصر القاهرة - مكتب 1</h4>
                    <p>56254</p>
                </span>
                </div>
                <div class="setting-btn">
                    <a class="btn btn-one " href="./gneralsetting.html">
                        <i class="fa-solid fa-gear"></i>
                        <p>إعدادات الحساب العامة</p>
                    </a>
                    <a class="btn btn-two clickd" href="./securitysetting.html">
                        <i class="fa-solid fa-lock"></i>
                        <p>الامان</p>
                    </a>
                    <a class="btn btn-three">
                        <i class="fa-sharp fa-solid fa-circle-check"></i>
                        <p>حالة الحساب</p>
                    </a>
                </div>
            </div>
            <div class="right">

                <div class="insetting">

                    <div class="gneral">

                    <div class="edit-data">
                        <h5>كلمة المرور</h5>
                        <div class="datauser">
                        <h5>************</h5>
                        <button class="btn-blue edit-btn btn-username">اظهار</button>
                    </div>
 </div>
                    <div class="edit-data">
                        <h5>تغيير كلمة المرور</h5>
                        <div class="datauser repassword">
                            <form action="">
                                <input type="password" id="oldpassword" placeholder="الحالية">
                                <input type="password" id="newpassword" placeholder="الجديدة">
                                <input type="password" id="قثnewpassword" placeholder="اعداة كلمة المرور الجديدة">
                                <input type="submit" value="حفظ" class="btn-blue">
                            </form>
                    </div> 
                </div>
                   
                   
                </div>


            </div>

            </div>
    
    </div>

    </div>
    <script src="dash/js/securitysetting.js" type="module"></script>
    <script src="dash/js/main.js" type="module"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    
    
</body>

</html>