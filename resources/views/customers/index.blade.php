<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Codecasts - Laravel - Básico</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
            crossorigin="anonymous">
    </head>
    <body>
        <h1>Bem vindo ao mundo Laravel</h1>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Cidade/Estado</th>

                    <th>Nascimento</th>
                    <th>Ações</th>                    
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <td>{{$customer->name}}</td>
                        <td>{{$customer->city}}-{{$customer->state}}</td>
                        <td>{{$customer->birthdate}}</td>
                        <td width="1%" nowrap>
                            <a href="#" class="btn btn-xs btn-default">Editar</a>
                            <a href="#" class="btn btn-xs btn-default">Excluir</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        
            <p></p>
        
    </body>
</html>