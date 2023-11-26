<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/dash/fromto/style.css" />
    <title>التحويل من مركز الي مركز</title>
  </head>
  <body>
    <div class="container">
      <!-- Nav Bar -->
      <nav>
        <!-- Logo -->
        <div class="logo">
          <img src="/dash/fromto/img/logo.png" alt="logo" />
        </div>
        <!-- End Logo -->
        <!-- ul -->
        <ul>
          <li><a href="{{ route('admin.home') }}">الصفحة الرئيسية</a></li>
          <li>
            <a href="{{ route('admin.edit') }}">أسماء المراكز / المراكز المعتمدة</a>
          </li>
          <li><a href="./account_statement.html">كشف حساب</a></li>
          <li><a href="./cut_coins.html">قص العملات</a></li>
          <li>
            <a class="activ" href="{{ route('admin.transform') }}"
              >التحويل من مركز الي مركز</a
            >
          </li>
          <li><a href="">الاعتمادات</a></li>
          <li><a href="{{ route('signout') }}">تسجيل الخروج</a></li>
        </ul>
        <!-- end ul -->
        <span class="menu"><i class="fa-solid fa-bars"></i></span>
      </nav>
      <!-- End Nav Bar -->
      <div class="form">
        <form action="">
          <input
            type="number"
            id="boxnum"
            placeholder="ادخل رقم الصندوق المرسل"
          />
          <div class="info-1">
            <input type="text" id="username" placeholder="اسم المستلم" />
            <input type="text" id="username" placeholder="رقم جوال" />
            <input type="text" id="username" placeholder="الوجهة" />
          </div>
          <div class="info-1">
            <select name="" id="" aria-placeholder="aa">
              <option value="dolar">دولار</option>
              <option value="turkey">تركي</option>
              <option value="syria">ليرة</option>
            </select>
            <input type="number" id="username" placeholder="المبلغ" />
            <input type="number" id="username" placeholder="الاجور" />
          </div>
        </form>
        <button class="btn-orange">ارسال الحوالة</button>
      </div>
    </div>
  </body>
</html>
