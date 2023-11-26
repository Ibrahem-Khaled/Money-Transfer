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

    <form action="{{ url('admin/dashbord/editsetting/' . $users->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="form-info">
        @foreach ($users->accounts as $us)
          <div class="box-ceiling">
            <lable for="">تعديل الصندوق</lable>
            <input type="number" class="box-ceiling-input" id="box-ceiling-input" value="{{ $us->balance }}"
              name="balance">
            <h4>{{ $us->type }}</h4>
          </div>
        @endforeach
        <div class="exports-imports-btn">
          <input class="btn-orange" type="submit" value="حفظ">
        </div>
    </form>
    <div class="exports-imports">
      <div class="exports">
        <h4>صادر</h4>
        <select name="" id="select" class="select">
          <option id="defult" value="defult" selected>اختر العملة</option>
          <option id="defult" value="dolar">دولار</option>
          <option id="defult" value="Syria">يورو</option>
          <option id="defult" value="Turki">ليرة تركي</option>
        </select>
        <input type="number" class="exports-dolar-from" placeholder="من">
        <input type="number" class="exports-dolar-to" placeholder="الي">
        <input type="number" class="exports-dolar-pay" placeholder="الاجور">
        <input type="submit" class="exports-dolar-submit btn-blue submit" value="اضافة">
      </div>
      <div class="exports">
        <h4>الوارد</h4>
        <select name="" id="select" class="select">
          <option id="defult" value="defult" selected>اختر العملة</option>
          <option id="defult" value="dolar">دولار</option>
          <option id="defult" value="Syria">يورو</option>
          <option id="defult" value="Turki">ليرة تركي</option>
        </select>
        <input type="number" class="exports-dolar-from" placeholder="من">
        <input type="number" class="exports-dolar-to" placeholder="الي">
        <input type="number" class="exports-dolar-pay" placeholder="الاجور">
        <input type="submit" class="exports-dolar-submit btn-blue submit" value="اضافة">
      </div>
    </div>
    <div class="exports-imports-btn">
      <a id="edit" href="{{ url('admin/dashbord/gneralsetting/' . $users->id) }}">تعديل بيانات المكتب</a>
    </div>
  </div>
  <script src="/dash/js/main.js" type="module"></script>
  <script src="/dash/js/setting.js" type="module"></script>

</body>

</html>
