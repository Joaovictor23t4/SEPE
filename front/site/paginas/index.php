<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Site SEPE</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <style>
    * {
      margin: 0;
      padding: 0;
    }



    header {
      display: flex;
      justify-content: flex-end;
      align-items: center;
    }

    nav {
      display: flex;
      align-items: center;
    }

    .d-flex>input,
    button {
      padding: 0;
    }

    nav>ul {
      display: flex;
      align-items: center;
      gap: 30px;
      list-style: none;
      font-family: Arial, Helvetica, sans-serif;
      font-weight: 600;
    }

    .d-flex {
      display: flex;
      padding: 25px;
    }

    .card {
      padding: 6px;
      border: none;
      box-shadow: 0 3px 5px 0 rgba(0, 1, 1, .1);
      height: 100%;
    }

    .card > img{
      max-height: 300px;
    }

    .main-banner{
      height: 350px;
      background: rgb(3,0,57);
      background: linear-gradient(90deg, rgba(3,0,57,1) 0%, rgba(17,17,17,1) 45%, rgba(46,100,111,1) 100%);
      color: aliceblue;
      text-align: center;
      display: flex;
      text-align: center;
      justify-content: center;
      margin: 0 0 50px 0
    }

    .banner-text {
      justify-content: center;
      display: flex;
      align-items: center;  
    }

    .main-banner h1, .main-banner p{
    display: flex;
    align-items: center;
    justify-content: center;
    }

    #pbanner {
      padding: 10px;
    }

    main{
      padding: 0 30px;
    }

    footer{
      margin: 70px 0 0 0;
      background-color: black;
      height: 300px;
    }

  </style>
</head>

<body>
  <header>
    <nav>
      <ul>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li><button type="button" class="btn btn-outline-dark">Mitologias</button></li>
          <li><button type="button" class="btn btn-outline-dark">Sobre Nós</button></li>
        <li><button type="button" class="btn btn-outline-dark">Contatos</button></li>
        <li><button type="button" class="btn btn-outline-dark">Politica de Privacidade</button></li>
      </ul>

      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </nav>
  </header>

  <div class="main-banner">
    <div class="banner-text">
      <h1>MITOLOGIAS</h1> 
    </div>

  </div>

<main>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card">
        <img src="../../../back/imagens/mitologia-africana.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">AFRICANA</h5>
          <p class="card-text">Clicando aqui você aprende sobre a mitologia africana.</p>
          <a href="../paginas/"></a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="../../../back/imagens/mitologia-egipcia.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">EGÍPCIA</h5>
          <p class="card-text">Clicando aqui você aprende sobre a mitologia egípcia.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="../../../back/imagens/mitologia-greco-romana.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">GRECO-ROMANA</h5>
          <p class="card-text">Clicando aqui você aprende sobre a mitologia greco-romana.</p>
        </div>
      </div>
    </div>
    
    <div class="col">
      <div class="card">
        <img src="../../../back/imagens/mitologia-grega.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">GREGA</h5>
          <p class="card-text">Clicando aqui você aprende sobre a mitologia grega.</p>
        </div>
      </div>
    </div>
  
    <div class="col">
      <div class="card">
        <img src="../../../back/imagens/mitologia-hindu.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">HINDU</h5>
          <p class="card-text">Clicando aqui você aprende sobre a mitologia hindu.</p>
        </div>
      </div>
    </div>
  
    <div class="col">
      <div class="card">
        <img src="../../../back/imagens/mitologia-mesopotamica.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">MESOPOTÂMICA</h5>
          <p class="card-text">Clicando aqui você aprende sobre a mitologia mesopotâmica.</p>
        </div>
      </div>
    </div>
  
    <div class="col">
      <div class="card">
        <img src="../../../back/imagens/mitologia-romana.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">ROMANA</h5>
          <p class="card-text">Clicando aqui você aprende sobre a mitologia romana.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="../../../back/imagens/mitologia-nordica.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">NÓRDICA</h5>
          <p class="card-text">Clicando aqui você aprende sobre a mitologia nórdica.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="https://wp.thecollector.com/wp-content/uploads/2020/06/giulio-romano-olympian-gods-wall-painting-1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"></h5>
          <p class="card-text"></p>
        </div>
        
      </div>
      
       
    </div>
  </div>
</main>
<footer>

</footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa"
    crossorigin="anonymous"></script>
</body>

</html>