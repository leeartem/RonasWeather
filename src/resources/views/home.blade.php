<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RonasWeather</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<link href="https://getbootstrap.com/docs/5.2/examples/cover/cover.css" rel="stylesheet">

<meta name="theme-color" content="#712cf9">
<style>
    * {
        text-shadow: none !important;
    }
    .cover-container {
        min-height: 100vh;
        max-width: 80%;
        text-align: left;
    }
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }
    td {
        padding-right: 2rem;
    }
  </style>
</head>
<body class="d-flex h-100 text-center text-bg-dark">
    
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column container">
      <header class="mb-auto">
      </header>
    
      <main class="px-3">
        <div class="row">
            <div class="col-md-6">
                <h1 class="mb-3">Получение погоды <br>по координатам</h1>
                <a class="mb-3 d-flex" href="/api/v1/current/geo?lat=51.5073&lon=-0.1276" target="_blank">http://localhost/api/v1/current/geo?lat=51.5073&lon=-0.1276</a>
                <div class="mb-3">
                    <code>
                        Параметры
                        <table>
                            <tr>
                                <td>lat, lon</td>
                                <td>Required</td>
                                <td>51.5073, -0.1276 - Широта и долгота</td>
                            </tr>
                            <tr>
                                <td>units</td>
                                <td>Optional</td>
                                <td>standard | metric | imperial - Мера измерения</td>
                            </tr>
                            <tr>
                                <td>lang</td>
                                <td>Optional</td>
                                <td>ru | en | etc - Язык</td>
                            </tr>
                        </table>
                    </code>
                </div>
            </div>
            <div class="col-md-6">
                <h1 class="mb-3">Получение погоды <br>по названию города</h1>
                <a class="mb-3 d-flex" href="/api/v1/current/city?q=%D0%9B%D0%BE%D0%BD%D0%B4%D0%BE%D0%BD" target="_blank">http://localhost/api/v1/current/city?q=Лондон</a>
                <div class="mb-3">
                    <code>
                        Параметры
                        <table>
                            <tr>
                                <td>q</td>
                                <td>Required</td>
                                <td>Лондон | Moscow - Название города на любом языке</td>
                            </tr>
                            <tr>
                                <td>units</td>
                                <td>Optional</td>
                                <td>standard | metric | imperial - Мера измерения</td>
                            </tr>
                            <tr>
                                <td>lang</td>
                                <td>Optional</td>
                                <td>ru | en | etc - Язык</td>
                            </tr>
                        </table>
                    </code>
                </div>
            </div>
        </div>
      </main>
    
      <footer class="mt-auto text-white-50">
      </footer>
    </div>
</body>
</html>