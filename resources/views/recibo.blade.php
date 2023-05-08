<!DOCTYPE html>
<html>
  <head>
    <style>
		h3{
			text-align: center;
		}
      input[type=text], select {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        display: block;
        border: 1px solid #fefefe;
        border-radius: 4px;
        box-sizing: border-box;
      }

      input[type=submit] {
        width: 30%;
        background-color: #4CAF50;
        color: white;
        padding: 14px;
        margin-top: 19px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
		margin: 0 auto;
      }

      input[type=submit]:hover {
        background-color: #45a049;
      }

      div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 50px;
        width: 40%;
        margin: 0 auto;
      }
    </style>
  </head>
  <body>
	
    <h3>Concurso Publico para desenvolvedor </h3>
    <div>
		<form action="/action_page.php" onsubmit="return validateName()">
        <label for="fname">Nome completo:</label>
        <input type="text" id="fname" name="firstname" placeholder="Digite seu nome completo...">

        <label for="address">Endereço:</label>
        <input type="text" id="address" name="address" placeholder="Digite seu endereço...">

        <label for="state">Estado:</label>
        <select id="state" name="state"></select>

        <label for="city">Cidade:</label>
        <select id="city" name="city"></select>

        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF...">

        <label for="job">Cargo:</label>
        <input type="text" id="job" name="job" placeholder="Digite seu cargo...">
		
        <input type="submit" value="Salvar Inscrição">
      </form>
    </div>

	<script src="validacao.js"></script>
</body>

</html>
