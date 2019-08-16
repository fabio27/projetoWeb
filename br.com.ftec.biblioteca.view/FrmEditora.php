<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <title></title>
    </head>
    <body>

                <h1> Cadastro de Editoras </h1>

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">WebSiteName</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="#">Page 3</a></li>
                </ul>
            </div>
        </nav>

        <div class="container">
            <h2>Vertical (basic) form</h2>
            <form action="/action_page.php">
                <div class="form-group">
                    <label for="email">Nome:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Endereço:</label>
                    <input type="endereco" class="form-control" id="pwd" placeholder="Informe Endereço" name="pwd">
                </div>
                
                   <div class="form-group">
                    <label for="pwd">Telefone:</label>
                    <input type="telefone" class="form-control" id="pwd" placeholder="Informe telefone" name="pwd">
                </div>
                
                     <div class="form-group">
                    <label for="pwd">E-mail para contato:</label>
                    <input type="email" class="form-control" id="pwd" placeholder="Informe E-mail" name="pwd">
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="remember"> Remember me</label>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>

    </body>
</html>
