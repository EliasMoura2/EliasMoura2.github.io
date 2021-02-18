<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio Moura Elias</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
  <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" 
    integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" 
    crossorigin="anonymous" />
  <link rel="stylesheet" href="main.css">
</head>
<body>
    <header>
        <h1 id="greet"><strong>Bienvenido!</strong></h1>
        <div class="col-lg-12 p-lg-4 p-md-3 p-sm-3">
            <div class="card p-lg-3 p-md-3 p-sm-3">
                <div class="card-body " id='presentation'>
                    <p class="card-text">
                        Hola soy Elias, soy Desarrollador de Software Junior y estudiante de ingeniería en Informática, con especialidad en el desarrollo de software.<br>
                        En el último año he formado parte del equipo de desarrollo de la Escuela de Robótica en el cual realicé tareas como backend developer (Node.js / Express.js) en proyectos en el stack MERN.
                    </p>
                    
                </div>
            </div>
        </div>
        <!-- <p id="presentation" class="col user-select-none">
            Hola soy Elias, soy Desarrollador de Software Junior y estudiante de ingeniería en Informática, con especialidad en el desarrollo de software.<br>
            En el último año he formado parte del equipo de desarrollo de la Escuela de Robótica en el cual realicé tareas como backend developer (Node.js / Express.js) en proyectos en el stack MEAN.<br>
        </p> -->
    </header>
  <!-- <nav>
    <ul>
        <li>Home</li>
          form-group row
    </ul>
  </nav> -->

  <div class="container-fluid shadow-lg p-3 m-lg-1 rounded">
    <div class="row justify-content-center projects">
      <h1><strong>Proyectos</strong></h1>
    </div>
    <hr class="my-3">
    <div class="row justify-content-center row-cols-1 row-cols-sm-2 row-cols-md-4 row-cols-lg-4">
      <div class="col-lg-3 col-md-6 p-lg-3 p-md-3 p-sm-3 pb-2">
        <div class="card" ">
          <img src="./assets/img/HTML-CSS-JS-MONGO-NODE.png" class="card-img-top" style="" alt="...">
          <div class="card-body">
            <h5 class="card-title text-body"><strong>Login App</strong></h5>
            <p class="card-text text-body"><strong>Proyecto CRUD de tareas con autenticacion utilizando Passport.js </strong></p>
            <a href="https://node-passportjs.herokuapp.com/" class="btn btn-primary btn-lg btn-block heroku" target="_blank" ><img src="./assets/img/heroku_logo_icon_168126.svg" alt=""></a>
            <a href="https://github.com/EliasMoura2/node-passport" class="btn btn-primary btn-lg btn-block github" target="_blank"><img src="./assets/img/logo_github_icon_160827.svg" alt=""></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 p-lg-3 p-md-3 p-sm-3 pb-2">
        <div class="card" ">
          <img src="./assets/img/HTML-CSS-JS-MONGO-NODE.png" class="card-img-top" style="" alt="...">
          <div class="card-body">
            <h5 class="card-title text-body"><strong>Books App</strong></h5>
            <p class="card-text text-body"><strong>Proyecto CRUD de libros, utilizando HTML, CSS, Boostrap, JS, Node.js y MongoDB </strong></p>
            <a href="https://books-full-js.herokuapp.com/" class="btn btn-primary btn-lg btn-block heroku" target="_blank" ><img src="./assets/img/heroku_logo_icon_168126.svg" alt=""></a>
            <a href="https://github.com/EliasMoura2/CRUD-Books" class="btn btn-primary btn-lg btn-block github" target="_blank"><img src="./assets/img/logo_github_icon_160827.svg" alt=""></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 p-lg-3 p-md-3 p-sm-3 pb-2">
        <div class="card" ">
          <img src="./assets/img/HTML-CSS-JS-MONGO-NODE.png" class="card-img-top" style="" alt="...">
          <div class="card-body">
            <h5 class="card-title text-body"><strong>Tasks App</strong></h5>
            <p class="card-text text-body"><strong>Proyecto CRUD de tareas utilizando HTML, CSS, Boostrap, JS, Node.js y MongoDB</strong></p>
            <a href="https://app-tasks-node.herokuapp.com/" class="btn btn-primary btn-lg btn-block heroku target="_blank"" ><img src="./assets/img/heroku_logo_icon_168126.svg" alt=""></a>
            <a href="https://github.com/EliasMoura2/app-tasks" class="btn btn-primary btn-lg btn-block github target="_blank""><img src="./assets/img/logo_github_icon_160827.svg" alt=""></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 p-lg-3 p-md-3 p-sm-3 pb-2">
        <div class="card";">
          <img src="./assets/img/HTML-CSS-JS.png" class="card-img-top" style="" alt="stack javascript html css">
          <div class="card-body">
            <h5 class="card-title text-body"><strong>Pokedex</strong></h5>
            <p class="card-text text-body"><strong>Proyecto utilizando HTML, CSS, Javascript. Consumiendo la api de Pokemon.</strong></p>
            <div class="buttons"></div>
            <a href="https://pokedex-vanillajs.herokuapp.com/" class="btn btn-primary btn-lg btn-block heroku" target="_blank" ><img src="./assets/img/heroku_logo_icon_168126.svg" alt=""></a>
            <a href="https://github.com/EliasMoura2/basicPokedex" class="btn btn-primary btn-lg btn-block github" target="_blank"><img src="./assets/img/logo_github_icon_160827.svg" alt=""></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 p-lg-3 p-md-3 p-sm-3 pb-2">
        <div class="card"">
          <img src="./assets/img/HTML-CSS-JS.png" class="card-img-top" style="" alt="stack javascript html css">
          <div class="card-body">
            <h5 class="card-title text-body"><strong>Todo List</strong></h5>
            <p class="card-text text-body"><strong>Proyecto Todo list desarrollado con HTML, CSS, Javascript y localSorage.</strong></p>
            <a href="https://todo-basic-js-localstorage.herokuapp.com/" class="btn btn-primary btn-lg btn-block heroku" target="_blank"><img src="./assets/img/heroku_logo_icon_168126.svg" alt=""></a>
            <a href="https://github.com/EliasMoura2/todoList-vanillaJS-LocalStorage" class="btn btn-primary btn-lg btn-block github" target="_blank"><img src="./assets/img/logo_github_icon_160827.svg" alt=""></a>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="row justify-content-center row-cols-1 row-cols-sm-2 row-cols-md-4 row-cols-lg-4">
      <div class="col-lg-3 col-md-6 p-lg-3 p-md-3 p-sm-3 pb-2">
        <div class="card" ">
          <img src="./assets/img/HTML-CSS-JS-MONGO-NODE.png" class="card-img-top" style="" alt="...">
          <div class="card-body">
            <h5 class="card-title text-body"><strong>Todo List</strong></h5>
            <p class="card-text text-body"><strong>proyecto Todo list con HTML, CSS y Javascript</strong></p>
            <a href="https://todo-basic-js-localstorage.herokuapp.com/" class="btn btn-primary btn-lg btn-block text-body"><strong>VER</strong></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 p-lg-3 p-md-3 p-sm-3 pb-2">
        <div class="card" ">
          <img src="./assets/img/HTML-CSS-JS-MONGO-NODE.png" class="card-img-top" style="" alt="...">
          <div class="card-body">
            <h5 class="card-title text-body"><strong>Books App</strong></h5>
            <p class="card-text text-body"><strong>proyecto A list con HTML, CSS y Javascript</strong></p>
            <a href="https://todo-basic-js-localstorage.herokuapp.com/" class="btn btn-primary btn-lg btn-block text-body"><strong>VER</strong></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 p-lg-3 p-md-3 p-sm-3 pb-2">
        <div class="card";">
          <img src="./assets/img/HTML-CSS-JS.png" class="card-img-top" style="" alt="stack javascript html css">
          <div class="card-body">
            <h5 class="card-title text-body"><strong>Pokedex</strong></h5>
            <p class="card-text text-body"><strong>proyecto utilizando HTML, CSS, Javascript. Utilizando la api de Pokemon</strong></p>
            <a href="https://pokedex-vanillajs.herokuapp.com/" class="btn btn-primary btn-lg btn-block text-body"><strong>VER</strong></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 p-lg-3 p-md-3 p-sm-3 pb-2">
        <div class="card"">
          <img src="./assets/img/HTML-CSS-JS.png" class="card-img-top" style="" alt="stack javascript html css">
          <div class="card-body">
            <h5 class="card-title text-body"><strong>Todo List</strong></h5>
            <p class="card-text text-body"><strong>Proyecto Todo list con HTML, CSS, Javascript y localSorage</strong></p>
            <a href="https://todo-basic-js-localstorage.herokuapp.com/" class="btn btn-primary btn-lg btn-block text-body"><strong>VER</strong></a>
          </div>
        </div>
      </div>
    </div> -->
  </div>

  <footer>

  </footer>
</body>
</html>