<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @extends('layouts.master_page')

    @section('titulo','CRUD com Laravel')

    @section('conteudo')
    <center>
        <form method="GET">
            <h3>Nome Bibliográfico</h3>
            <p>Informe seu nome: <input type="text" name="nome"></p>
            <input type="submit" value="nome">
            <br><br>
        </form>
    </center>
    @stop
    
</body>
</html>