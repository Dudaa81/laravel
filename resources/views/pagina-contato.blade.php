```html
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Contato - Portal de Cursos</title>

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

iframe{
    border-radius:10px;
}

</style>

</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="index.html">Portal de Cursos</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menu">

      <ul class="navbar-nav ms-auto">

        <li class="nav-item">
          <a class="nav-link" href="index.html">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Cursos</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="sobre.html">Sobre</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="contato.html">Contato</a>
        </li>

      </ul>

    </div>
  </div>
</nav>


<!-- BANNER -->
<section class="banner">
<h1>Entre em Contato</h1>
<p>Estamos disponíveis para tirar dúvidas e fornecer informações.</p>
</section>


<!-- CONTATO -->
<section class="container mt-5">

<div class="row g-4">

<!-- FORMULÁRIO -->
<div class="col-md-6">

<h3>Envie uma mensagem</h3>

<form>

<div class="mb-3">
<label class="form-label">Nome</label>
<input type="text" class="form-control" placeholder="Digite seu nome">
</div>

<div class="mb-3">
<label class="form-label">Email</label>
<input type="email" class="form-control" placeholder="Digite seu email">
</div>

<div class="mb-3">
<label class="form-label">Assunto</label>
<input type="text" class="form-control" placeholder="Digite o assunto">
</div>

<div class="mb-3">
<label class="form-label">Mensagem</label>
<textarea class="form-control" rows="5" placeholder="Digite sua mensagem"></textarea>
</div>

<button class="btn btn-primary">Enviar mensagem</button>

</form>

</div>


<!-- INFORMAÇÕES -->
<div class="col-md-6">

<h3>Informações de contato</h3>

<p><strong>📍 Endereço:</strong> Rua Exemplo, 123 - Centro</p>
<p><strong>📞 Telefone:</strong> (15) 99999-9999</p>
<p><strong>📧 Email:</strong> contato@portalcursos.com</p>
<p><strong>⏰ Horário:</strong> Segunda a Sexta - 08h às 18h</p>

<h4 class="mt-4">Localização</h4>

<iframe 
width="100%" 
height="250"
src="https://maps.google.com/maps?q=sao%20paulo&t=&z=13&ie=UTF8&iwloc=&output=embed">
</iframe>

</div>

</div>

</section>


<!-- FAQ -->
<section class="container mt-5">

<h2 class="text-center mb-4">Perguntas Frequentes</h2>

<div class="accordion" id="faq">

<div class="accordion-item">
<h2 class="accordion-header">
<button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#p1">
Como faço para me inscrever em um curso?
</button>
</h2>
<div id="p1" class="accordion-collapse collapse show">
<div class="accordion-body">
Você pode acessar a página de cursos e clicar em "Saiba mais" para ver as
informações sobre inscrição.
</div>
</div>
</div>

<div class="accordion-item">
<h2 class="accordion-header">
<button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#p2">
Os cursos possuem certificado?
</button>
</h2>
<div id="p2" class="accordion-collapse collapse">
<div class="accordion-body">
Sim, todos os cursos oferecem certificado após a conclusão.
</div>
</div>
</div>

</div>

</section>


<!-- RODAPÉ -->
<footer class="bg-dark text-white text-center p-4 mt-5">
<p>© 2026 Portal de Cursos - Todos os direitos reservados</p>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
```
