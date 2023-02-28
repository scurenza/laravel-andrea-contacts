<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuovo Contatto</title>
    {{-- STYLE --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <div class="container">
        <div class="title">
            <h1>Crea un nuovo contatto</h1>
        </div>

        {{-- Form per la creazione di un nuovo contatto --}}
        <div class="form-card">
            <form action="{{ route('contacts.store') }}" method="POST">
                @csrf
                <div class="form-row">
                    <label for="name">Nome:</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>

                <div class="form-row">
                    <label for="last_name">Cognome:</label>
                    <input type="text" class="form-control" id="last_name" name="last_name">
                </div>

                <div class="form-row">
                    <label for="num">Numero:</label>
                    <input type="text" class="form-control" id="num" name="num">
                </div>
                <div class="save-btn">
                    <button type="submit">Salva</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
