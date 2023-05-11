<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Comprovante de Inscrição</title>
	<style>
		body {
			background-color: #f5f5f5;
			font-family: Arial, sans-serif;
		}

		.container {
			width: 50%;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0 0 5px #ccc;
		}

		h3 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #444;
            text-align: center;
        }

		.field {
			margin-bottom: 10px;
		}

		.field label {
			display: inline-block;
			font-weight: bold;
			margin-right: 10px;
			width: 120px;
		}

		.field p {
			display: inline-block;
			margin: 0;
		}

		.field.full-width {
			width: 100%;
		}

		.btn {
			display: inline-block;
			padding: 10px 20px;
			background-color: #007bff;
			color: #fff;
			border-radius: 5px;
			text-decoration: none;
			font-weight: bold;
			margin-top: 20px;
			transition: background-color 0.3s ease;
		}

		.btn:hover {
			background-color: #0062cc;
		}
        .field {
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
        }
        .btn-print {
            display: block;
            margin: 20px auto 0;
            padding: 8px 16px;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            text-align: center;
            max-width: 200px;
            transition: background-color 0.3s ease;
        }
        
        .link {
            margin-top: 20px;
            text-align: center;
        }
        @media print {
            .link {
            display: none;
        }
        @media print {
            .btn-print {
            display: none;
        }
    }
}

	</style>
</head>
<body>
	<div class="container">
    <h3>Concurso Publico para desenvolvedor </h3>
    <hr>
		<h3>Comprovante de Inscrição</h3>
		<div class="field">
			<label>ID:</label>
			<p>{{ $id }}</p>
		</div>
		<div class="field">
			<label>Nome:</label>
			<p>{{ $pessoaFisica->firstname }}</p>
		</div>
		<div class="field">
			<label>CPF:</label>
			<p>{{ $pessoaFisica->cpf }}</p>
		</div>
		<div class="field">
			<label>Endereço:</label>
			<p>{{ $pessoaFisica->address }}</p>
		</div>
		<div class="field">
			<label>Cidade:</label>
			<p>{{ $pessoaFisica->city }}</p>
		</div>
		<div class="field">
			<label>Estado:</label>
			<p>{{ $pessoaFisica->state }}</p>
		</div>
		<div class="field">
			<label>Cargo:</label>
			<p>{{ $pessoaFisica->job }}</p>
		</div>
		<div class="field">
			<label>Data Inscricão:</label>
			<p>{{ date('d/m/Y H:i:s', strtotime($created_at)) }}</p>
		</div>
	
		<a href="#" class="btn btn-print" >Imprimir Comprovante</a>
	</div>
    <div class="link">
        <a href="{{ route('api.pessoa_fisica') }}">Retornar à inscrição</a>
    </div>    
</body>
</html>
<script>
    const btnPrint = document.querySelector('.btn-print');

    btnPrint.addEventListener('click', function() {
        window.print();
    });
</script>
<script>
  window.addEventListener('load', function() {

    var link = document.querySelector('link');
    link.style.display = 'none';
  });
</script>