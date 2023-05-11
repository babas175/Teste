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

    <h3>Cadastrar Cidade</h3>
    <div>
      <form action="{{ route('api.cadastrar_cidade') }}" method="POST" >
      <label for="state">Estado:</label>
        <select id="state" name="sigla">
          <option value="">Selecione o estado</option>
          <option value="AC">Acre</option>
          <option value="AL">Alagoas</option>
          <option value="AP">Amapá</option>
          <option value="AM">Amazonas</option>
          <option value="BA">Bahia</option>
          <option value="CE">Ceará</option>
          <option value="DF">Distrito Federal</option>
          <option value="ES">Espírito Santo</option>
          <option value="GO">Goiás</option>
          <option value="MA">Maranhão</option>
          <option value="MT">Mato Grosso</option>
          <option value="MS">Mato Grosso do Sul</option>
          <option value="MG">Minas Gerais</option>
          <option value="PA">Pará</option>
          <option value="PB">Paraíba</option>
          <option value="PR">Paraná</option>
          <option value="PE">Pernambuco</option>
          <option value="PI">Piauí</option>
          <option value="RJ">Rio de Janeiro</option>
          <option value="RN">Rio Grande do Norte</option>
          <option value="RS">Rio Grande do Sul</option>
          <option value="RO">Rondônia</option>
          <option value="RR">Roraima</option>
          <option value="SC">Santa Catarina</option>
          <option value="SP">São Paulo</option>
          <option value="SE">Sergipe</option>
          <option value="TO">Tocantins</option>
        </select>
        <label for="city">Cidade:</label>
        <input type="text" id="city" name="nome" placeholder="Digite o nome da cidade">

        <input id="form" type="submit" value="Salvar">
        </div>
    </form>
   
    <body>
</html>     