<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/Info-Students-style.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/Resume-style.css') }}">


    <script src="{{ asset('style/js/pdfmake.min.js')}}"></script>
    <script src="{{ asset('style/js/vfs_fonts.js')}}"></script>
    <title>KP-11</title>
</head>
<body>
    <main class="d-flex flex-nowrap">
      <div class="d-flex flex-column flex-shrink-0 p-3 bg-correct" style="width: 280px;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
          <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
          <span class="fs-4"><img src="../img/logo_kp11 1.png" alt="" width="129" height="103"></span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li>
            <a href="{{route('Info-Students.index')}}" class="nav-link link-body-emphasis">
                <img src="{{asset('img/svg/study-book-svgrepo-com.svg')}}" alt="" width="32" height="32">
              Основная информация о студентах
            </a>
          </li>
          <li>
            <a href="{{route('Information-About-Disability')}}" class="nav-link link-body-emphasis">
                <img src="{{asset('img/svg/medicine-9-svgrepo-com.svg')}}" alt="" width="32" height="32">
              Сведения об ОВЗ и инвалидности
            </a>
          </li>
          <li>
            <a href="{{route('Job.index')}}" class="nav-link link-body-emphasis">
                <img src="{{asset('img/svg/worker-running-with-a-briefcase-in-one-hand-svgrepo-com.svg')}}" alt="" width="32" height="32">
              Трудоустйоство
            </a>
          </li>
          <li>
            <a href="{{route('Other-Job.index')}}" class="nav-link link-body-emphasis">
                <img src="{{asset('img/svg/worker-loading-boxes-svgrepo-com.svg')}}" alt="" width="32" height="32">
              Иные виды занятости
            </a>
          </li>
          <li>
            <a href="{{route('Not-Job.index')}}" class="nav-link link-body-emphasis">
                <img src="{{asset('img/svg/confounded-circle-svgrepo-com (1).svg')}}" alt="" width="32" height="32">
              Причины отстуствия трудоуствойства / иных видов занятости
            </a>
          </li>
          <li>
            <a href="{{route('Continue-Study-Army.index')}}" class="nav-link link-body-emphasis">
                <img src="{{asset('img/svg/studying-process-svgrepo-com.svg')}}" alt="" width="32" height="32">
              Продолжение обучения и армия
            </a>
          </li>
          <li>
            <a href="{{route('Practice.index')}}" class="nav-link link-body-emphasis">
                <img src="{{asset('img/svg/contract-svgrepo-com.svg')}}" alt="" width="32" height="32">
              Практика
            </a>
          </li>
          <li>
            <a href="{{route('Resume')}}" class="nav-link link-body-emphasis">
                <img src="{{asset('img/svg/Vector (2).svg')}}" alt="" width="32" height="32">
              Составить резюме
            </a>
          </li>
        </ul>

        <hr>

        <div class="dropdown">
            <img src="{{asset('img/svg/Vector.png')}}" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>Пользователь</strong>
            <button class="Close-btn"><img src="{{asset('img/svg/Vector (1).png')}}" alt=""></button>
        </div>
      </div>

        <div class="container-fluid">
            @yield('content')
        </div>

    </main>
    <script src="{{ asset('style/js/resume.js')}}"></script>
</body>
</html>
