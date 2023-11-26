<!DOCTYPE html>
<html>

<head lang="ar">
  <meta charset="UTF-8">
  <title>لوحة التحكم | أسماء المراكز / المراكز المعتمدة</title>
  <link rel="stylesheet" href="/dash/css/main.css">
  <link rel="stylesheet" href="/dash/css/accounts.css">
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


      <table id="tableoffice">
        <tr>
          <th>اسم صاحب المكتب</th>
          <th>اسم المكتب</th>
          <th>رقم الصندوق</th>
          <th>تحرير</th>
          <th>اضافة</th>
        </tr>

        @foreach ($userse as $user)
           <tr>
            <th>{{ $user->name }}</th>
            <th>{{ $user->email }} </th>
            <th>{{ $user->boxnumber }}</th>
            <th><a id="edit" href="{{ url('admin/dashbord/setting/'.$user->id) }}">تحرير</a></th>
            <th><a id="add" href="{{ url('admin/dashbord/addmoney/'.$user->id) }}">اضافة</a></th>
           </tr>
        @endforeach
        {{-- @foreach ($user->accounts as $account)
           <tr>
            <th>{{ $account->balance }}</th>
            <th>{{ $account->user->name}}</th>
           </tr>
        @endforeach --}}
      </table>
    </div>

  </div>

  <script src="/dash/js/accounts.js" type="module"></script>
  <script src="/dash/js/main.js" type="module"></script>


</body>

</html>
