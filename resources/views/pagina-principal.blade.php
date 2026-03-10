<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Cursos Técnicos</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background-color:#f5f5f5;
}

.banner{
    background: linear-gradient(90deg,#0d6efd,#0a58ca);
    color:white;
    padding:60px;
    text-align:center;
}

.card img{
    height:200px;
    object-fit:cover;
}
</style>

</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Portal de Cursos</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link active" href="{{route('contato')}}">Contato</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('sobre')}}">Sobre</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
            Áreas
          </a>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('adm')}}">Admnistrção</a></li>
            <li><a class="dropdown-item" href="{{route('ds')}}">DS</a></li>
            <!-- <li><a class="dropdown-item" href="{{route('ambiente')}}">Meio Ambiente</a></li> -->
          </ul>

        </li>

      </ul>

      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Pesquisar curso">
        <button class="btn btn-success" type="submit">Buscar</button>
      </form>

    </div>
  </div>
</nav>


<!-- BANNER -->
<section class="banner">
<h1>Catálogo de Cursos Técnicos</h1>
<p>Explore oportunidades de formação profissional em diversas áreas.</p>
</section>


<!-- CURSOS -->
<div class="container mt-5">

<h2 class="text-center mb-4">Nossos Cursos</h2>

<div class="row g-4">

<!-- DESENVOLVIMENTO DE SISTEMAS -->
<div class="col-md-6 col-lg-3">
<div class="card h-100 shadow">

<img src="https://images.unsplash.com/photo-1518770660439-4636190af475" class="card-img-top">

<div class="card-body">
<h5 class="card-title">Desenvolvimento de Sistemas</h5>

<p class="card-text">
Aprenda programação, banco de dados, desenvolvimento web e criação de aplicativos. 
Formação ideal para quem deseja trabalhar com tecnologia e inovação.
</p>

<a href="#" class="btn btn-primary">Saiba mais</a>

</div>
</div>
</div>


<!-- ADMINISTRAÇÃO -->
<div class="col-md-6 col-lg-3">
<div class="card h-100 shadow">

<img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f" class="card-img-top">

<div class="card-body">
<h5 class="card-title">Administração</h5>

<p class="card-text">
Desenvolva habilidades em gestão de empresas, organização financeira, marketing 
e liderança de equipes no ambiente corporativo.
</p>

<a href="#" class="btn btn-primary">Saiba mais</a>

</div>
</div>
</div>


<!-- MEIO AMBIENTE -->
<div class="col-md-6 col-lg-3">
<div class="card h-100 shadow">

<img src="https://images.unsplash.com/photo-1501004318641-b39e6451bec6" class="card-img-top">

<div class="card-body">
<h5 class="card-title">Meio Ambiente</h5>

<p class="card-text">
Estude sustentabilidade, preservação ambiental e gestão de recursos naturais. 
Ideal para quem deseja atuar na proteção do planeta.
</p>

<a href="#" class="btn btn-primary">Saiba mais</a>

</div>
</div>
</div>


<!-- MECATRONICA -->
<div class="col-md-6 col-lg-3">
<div class="card h-100 shadow">

<img src="https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc" class="card-img-top">

<div class="card-body">
<h5 class="card-title">Mecatrônica</h5>

<p class="card-text">
Curso focado em automação, robótica, eletrônica e programação de sistemas industriais. 
Muito utilizado na indústria 4.0.
</p>

<a href="#" class="btn btn-primary">Saiba mais</a>

</div>
</div>
</div>

</div>
</div>


<!-- RODAPÉ -->
<footer class="bg-dark text-white text-center p-4 mt-5">
<p>© 2026 Portal de Cursos - Todos os direitos reservados</p>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>