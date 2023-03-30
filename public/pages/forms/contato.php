<?php

require "../../../bootstrap.php";

//verificar preenchimeno



//vereficar se o usuario preencheu os dados 
// IsEmpty() verifica se foram preenchidos todos dados
//criar na pasta functions p arquivo flash
if (isEmpty()) {

   //flash('message','Preencha todos os campos' );

  // return redirect('?page=contato');
  header("location:public/?page=contato");
}


$validate = validate([
    'name' => 'n',
    'email' => 'e',
    'subject' => 's',
    'textArea' => 't'

]);
