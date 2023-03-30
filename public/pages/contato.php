<?php

use JetBrains\PhpStorm\Internal\ReturnTypeContract;

?>


<style>h1{color: #99CCFF;}</style>

<h1>Contato:</h1>

<?php get('message') ?>


<form action="pages/forms/contato.php" method="POST" role="form">

<div class="mb-3">
  <label for="name" class="form-label">Nome:</label>
  <input type="text" name="name" id="" class="form-control" placeholder="Digite seu Nome" aria-describedby="helpId" >

</div>
<div class="mb-3">
  <label for="email" class="form-label">Email:</label>
  <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="Digite E-mail" >
 
</div>
<div class="mb-3">
  <label for="assunto" class="form-label">Digite Assunto:</label>
  <input type="text" class="form-control" name="subject" id="" aria-describedby="emailHelpId" placeholder="Assunto"  >
 
 <textarea  type="text"class="form-control" name="textArea" id="" rows="3" placeholder="Mensagem"  ></textarea>
</div>
<button type="submit" class="btn btn-primary btn-lg">Enviar</button>
</form>
