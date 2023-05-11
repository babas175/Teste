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
        margin: 0 auto; /* Add this line to center the button */
        display: block; /* Add this line to make the button a block element */
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
    <hr>
    <h3>Inscriçao Candidato </h3>
    <div>
		<form  action="{{ route('api.pessoa_fisica') }}" method="POST" onsubmit="return validateName()">
    @csrf
      
        <label for="fname">Nome completo:</label>
        <input type="text" id="fname" name="firstname" placeholder="Digite seu nome completo...">

        <label for="address">Endereço:</label>
        <input type="text" id="address" name="address" placeholder="Digite seu endereço..." required>

        <label for="state">Estado:</label>
        <select id="state" name="state" value="" required>
          <option></option>
        </select>
        <label for="city">Cidade:</label>
        <select id="city" name="city" >
          <option></option>
        </select>

        <label for="cpf">CPF:</label>
        <input oninput="mascara(this)" type="text" id="cpf" name="cpf" placeholder="Digite seu CPF...">

        <label for="job">Cargo:</label>
        <input type="text" id="job" name="job" required  placeholder="Digite seu cargo... ">
		
        <input id="form" type="submit" value="Salvar Inscrição">
      </form>
      

    </div>

	<script src="../js/validacao.js"></script>
  <script src="../js/select.js"></script>
    <script> 
        function mascara(i){
        var v = i.value;
        if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
            i.value = v.substring(0, v.length-1);
            return;
        }
        i.setAttribute("maxlength", "14");
        if (v.length == 3 || v.length == 7) {
            i.value += ".";
        } else if (v.length == 11) {
            i.value += "-";
        }
    }
    </script>


  
</body>

</html>
