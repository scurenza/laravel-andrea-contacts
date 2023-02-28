<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifica Contatto</title>
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <div class="container">
        <div class="title">
            <h1>Modifica un contatto</h1>
        </div>
        {{-- Form per la modifica di un contatto esistente --}}
        <div class="form-card">
            <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-row">
                    <label for="name">Nome</label>
                    <input type="text" id="name" name="name" value="{{ $contact->name }}">
                </div>
                <div class="form-row">
                    <label for="last_name">Cognome</label>
                    <input type="text" class="form-control" id="last_name" name="last_name"
                        value="{{ $contact->last_name }}">
                </div>
                <div class="form-row">
                    <label for="num">Numero di Telefono</label>
                    <input type="text" class="form-control" id="num" name="num"
                        value="{{ $contact->num }}">
                </div>
                <div class="save-btn">
                    <button type="submit">Salva</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
