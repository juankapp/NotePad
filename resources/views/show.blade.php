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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</head>

<body>
    <header>
        <div><img src="/img/notepad.png" alt="logo"></div>
        <div>
            <h1>Bem vindo ao NotePad</h1>
        </div>
        <div class="mt-3">
            <a href="/Deslogar"><button type="button" class="btn btn-danger">Sair</button> </a>
            <div class="btn-group">
                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Meus Dados
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/minhas-anotacoes">Minhas Anotações</a>
                    <a class="dropdown-item" href="/meus-dados">Meus Dados</a>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="all">
            <div class="notas">
                @if (count($notas) < 1)
                <div class="alert alert-danger" role="alert">Você não tem notas</div>
                @endif
                @foreach ($notas as $nota)
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ mb_strimwidth("$nota->title", 0, 15, "..."); }}</h5>
                            <p class="card-text">{{ mb_strimwidth("$nota->text", 0, 15, "...");  }}</p>
                            <a href="/nota/editar/{{ $nota->id }}" class="btn btn-outline-primary">Editar</a>
                            <a href="/nota/excluir/{{ $nota->id }}" class="btn btn-outline-danger">Excluir</a>
                        </div>
                    </div>
            @endforeach
        </div>
            <div class="paginator">
                {{ $notas->links() }}
            </div>
        </div>
    </main>

    <footer>
        <p>NotePad &copy; 2021</p>
    </footer>

</body>

</html>
