<!DOCTYPE html>
<html>
<body>

<h1>Formulario</h1>

<p>"Forms"</p>
<form action = primeiro.php method="post">
	<label for ="nome">Nome</label>

<input type= "text" name="Nome" maxlength="50" placeholder="Insira seu nome" autofocus required id="nome"autocomplete="true"><br>

<label for ="email">E-mail</label>
<input type="Email" name= "E-mail" placeholder="Insira seu e-mail" maxlength="100" required id="email" autocomplete="true"><br>

<label for ="idade">Idade</label>
<input type="number" name= "Idade"placeholder="Insira sua idade"id="idade"><br>

<input type="radio" name= "teste"placeholder="Teste"id="teste1"><br>
<input type="radio" name= "teste"placeholder="Teste"id="teste2"><br>

<input type="check" name= "teste3"placeholder="Teste3"id="teste3"><br>


<input type="submit" name= "Enviar" value="Enviar"></br>
<input type="reset" name="reset" value="Limpar"></br>


Animais:</br>
<Select name="Animais">
	<option>Elefante</option>
	<option>Hipopotamo</option>
	<option>Rinoceronte</option>
	<option>Dinossauro</option>
</Select>
</br>
Abrir arquivo<input type="file" name="files">
</br>
<input type="range" name="range"> 



</form>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>



</body>
</html>