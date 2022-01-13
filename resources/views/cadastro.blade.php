<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WordPad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <header>
        <div><img src="/img/notepad.png" alt="logo"></div>
        <div>
            <h1>Bem vindo ao NotePad</h1>
        </div>
        <div class="mt-3">
            <a href="/login"><button type="button" class="btn btn-success">Logar</button> </a>

        </div>
    </header>

    <div class="login">
        <div class="fazerlogin">
            <form action="/cadastrar" method="POST">
                @csrf
                <h1>Faça seu cadastro</h1>
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control mb-2" id="nome" aria-describedby="emailHelp"
                        placeholder="Seu nome" name="name" style="width: 400px">

                </div>
                <div class="form-group">
                    <label for="email">Endereço de email</label>
                    <input type="email" class="form-control mb-2" id="email" aria-describedby="emailHelp"
                        placeholder="Seu email" name="email">
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control mb-2 " id="senha" placeholder="Senha" name='password'>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label " for="exampleCheck1">Clique em mim</label>
                </div>
                <button type="submit" class="btn btn-primary mt-2">Enviar</button>


                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">{{ $error }}</div>
                @endforeach

                @endif
            </form>

        </div>
    </div>


    <footer>
        <p>NotePad &copy; 2022</p>
    </footer>

</body>

</html>
