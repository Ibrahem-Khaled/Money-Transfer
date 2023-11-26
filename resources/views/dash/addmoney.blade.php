<!DOCTYPE html>
<html>

<head lang="ar">
  <meta charset="UTF-8">
  <title>لوحة التحكم | أسماء المراكز / المراكز المعتمدة</title>
  <link rel="stylesheet" href="/dash/css/main.css">
  <link rel="stylesheet" href="/dash/css/setting.css">
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

      <table id="tableofficesetting">
        <tr>
          <th>اسم صاحب المكتب</th>
          <th>اسم المكتب</th>
          <th>رقم الصندوق</th>
        </tr>
        <tr>
          <th>{{ $users->name }}</th>
          <th>{{ $users->email }}</th>
          <th>{{ $users->boxnumber }}</th>
        </tr>
      </table>

    </div>

    <form method="POST" action="{{ route('creataddmoney') }}">
      @csrf
      <div class="form-info">
        <div class="box-ceiling">
          <lable for="">سقف الصندوق</lable>
          <input type="number" class="box-ceiling-input" id="box-ceiling-input" name="balance" placeholder="المبلغ">
          <input type="number" class="box-ceiling-input" id="box-ceiling-input"  name="user_id"
            value="{{ $users->id }}">
          <input type="number" class="box-ceiling-input" id="box-ceiling-input"  name="account_no"
            value="{{ $users->boxnumber }}1">


          <select id="select" class="select" name="type">
            <option id="defult" value="usd">دولار</option>
            <option id="defult" value="eruo">يورو</option>
            <option id="defult" value="lira">ليرة تركي</option>
          </select>
        </div>
        <div class="exports-imports-btn">
          <input class="btn-orange" type="submit" value="حفظ">
        </div>
    </form>
  </div>

  <script src="/dash/js/main.js" type="module"></script>
  <script src="/dash/js/setting.js" type="module"></script>

</body>

</html>
