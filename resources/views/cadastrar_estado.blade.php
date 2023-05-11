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

    <h3>Cadastrar Estado</h3>
    <div>
      <form action="{{ route('api.cadastrar_estado') }}" method="POST" onsubmit="return validateName()">
      <label for="state">Estado:</label>
        <select id="state" name="estado">
          <option value="">Selecione o estado</option>
          <option value="Acre">Acre</option>
          <option value="Alagoas">Alagoas</option>
          <option value="Amapá">Amapá</option>
          <option value="Amazonas">Amazonas</option>
          <option value="Bahia">Bahia</option>
          <option value="Ceará">Ceará</option>
          <option value="Distrito Federal">Distrito Federal</option>
          <option value="Espírito Santo">Espírito Santo</option>
          <option value="Goiás">Goiás</option>
          <option value="Maranhão">Maranhão</option>
          <option value="Mato Grosso">Mato Grosso</option>
          <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
          <option value="Minas Gerais">Minas Gerais</option>
          <option value="Pará">Pará</option>
          <option value="Paraíba">Paraíba</option>
          <option value="Paraná">Paraná</option>
          <option value="Pernambuco">Pernambuco</option>
          <option value="Piauí">Piauí</option>
          <option value="Rio de Janeiro">Rio de Janeiro</option>
          <option value="Rio Grande do Norte">Rio Grande do Norte</option>
          <option value="Rio Grande do Sul">Rio Grande do Sul</option>
          <option value="Rondônia">Rondônia</option>
          <option value="Roraima">Roraima</option>
          <option value="Santa Catarina">Santa Catarina</option>
          <option value="São Paulo">São Paulo</option>
          <option value="Sergipe">Sergipe</option>
          <option value="Tocantins">Tocantins</option>
        </select>
        
        <label for="city">Sigla:</label>
        <input type="text" id="city" name="sigla" placeholder="Digite o nome da cidade">

        <input id="form" type="submit" value="Salvar">
        </div>
    </form>
   
    <body>
</html>     