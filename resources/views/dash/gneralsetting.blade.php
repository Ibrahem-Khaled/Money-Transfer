<!DOCTYPE html>
<html>

<head lang="ar">
  <meta charset="UTF-8">
  <title>لوحة التحكم | أسماء المراكز / المراكز المعتمدة</title>
  <link rel="stylesheet" href="/dash/css/main.css">
  <link rel="stylesheet" href="/dash/css/settingaccount.css">
  <link rel="stylesheet" href="/dash/responsive/responsive-main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
</head>

<body>



  <div class="container">
    <!-- Nav Bar -->
    <nav>
      <!-- Logo -->
      <div class="logo">
        <img src="/dash/img/logo.png" alt="logo">
      </div>
      <!-- End Logo -->
      <!-- ul -->
      <ul>
        <li><a href="{{ route('admin.home') }}">الصفحة الرئيسية</a></li>
        <li><a class="activ" href="{{ route('admin.edit') }}">أسماء المراكز / المراكز المعتمدة</a></li>
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
            <h4>{{ $users->email }}</h4>
            <p>{{ $users->boxnumber }}</p>
          </span>
        </div>
        <div class="setting-btn">
          <a class="btn btn-one clickd" href="./gneralsetting.html">
            <i class="fa-solid fa-gear"></i>
            <p>إعدادات الحساب العامة</p>
          </a>
          <a class="btn btn-two" href="./securitysetting.html">
            <i class="fa-solid fa-lock"></i>
            <p>الامان</p>
          </a>
          <a class="btn btn-three">
            <i class="fa-sharp fa-solid fa-circle-check"></i>
            <p>حالة الحساب</p>
          </a>
        </div>
      </div>
      <form action="{{ url('admin/dashbord/update/'.$users->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="right">
          <div class="insetting">
            <div class="gneral">
              <div class="edit-data">
                <h5>اسم المستخدم</h5>
                <div class="datauser">
                  <h5>{{ $users->username }}</h5>
                </div>
                <input type="text" class="box-ceiling-input" 
                id="box-ceiling-input" name="username"
                  value="{{ $users->username }}">
              </div>

              <div class="edit-data">
                <h5>اسم الحساب:-</h5>
                <div class="datauser">
                  <h5>{{ $users->name }}</h5>
                </div>
                <input type="text" class="box-ceiling-input" 
                id="box-ceiling-input" name="name"
                  value="{{ $users->name }}">
              </div>
              <div class="edit-data">
                <h5>رقم الصندوق:-</h5>
                <div class="datauser">
                  <h5>{{ $users->boxnumber }}</h5>
                </div>
                <input type="number" class="box-ceiling-input" 
                id="box-ceiling-input" name="boxnumber"
                  value="{{ $users->boxnumber }}">
              </div>


              <div class="edit-data">
                <h5>اسم المكتب:-</h5>
                <div class="datauser">
                  <h5>{{ $users->email }}</h5>
                </div>
                <input type="text" class="box-ceiling-input" 
                id="box-ceiling-input" name="email"
                  value="{{ $users->email }}">
              </div>

              <div class="edit-data">
                <h5>الدولة:-</h5>
                <div class="datauser">
                  <h5>{{ $users->contry }}</h5>
                </div>
                <input type="text" class="box-ceiling-input" 
                id="box-ceiling-input" name="contry"
                  value="{{ $users->contry }}">
              </div>
              <div class="edit-data">
                <h5>المدينة:-</h5>
                <div class="datauser">
                  <h5>{{ $users->city }}</h5>
                </div>
                <input type="text" class="box-ceiling-input"
                 id="box-ceiling-input" name="city"
                  value="{{ $users->city }}">
              </div>
              <div class="edit-data">
                <h5>المعلومات:-</h5>
                <div class="datauser">
                  <h5>{{ $users->information }}</h5>
                </div>
                <input type="text" class="box-ceiling-input"
                 id="box-ceiling-input" name="information"
                  value="{{ $users->information }}">
              </div>

              <div class="edit-data">
                <h5>رقم التواصل:-</h5>
                <div class="datauser">
                  <h5>{{ $users->phone }}</h5>
                </div>
                <input type="number" class="box-ceiling-input"
                 id="box-ceiling-input" name="phone"
                  value="{{ $users->phone }}">
              </div>
            </div>
            <button class="btn-blue edit-btn">تعديل</button>
          </div>

        </div>
      </form>
    </div>


  </div>

  </div>

  </div>

  <script src="/dash/js/settingaccount.js" type="module"></script>
  <script src="/dash/js/main.js" type="module"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>


</body>

</html>
