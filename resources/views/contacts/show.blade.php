<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contatto</title>

    {{-- STYLE --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- FONTAWESOME --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <h1 class="title">Contatto di {{ $contact->name }} {{ $contact->last_name }}</h1>
        <div class="card card-show">
            <div class="card-info">
                <h3>{{ $contact->name }} {{ $contact->last_name }}</h3>
                <p>numero: {{ $contact->num }}</p>
            </div>
            <div class="card-btn">

                <a class="button" href="{{ route('contacts.edit', $contact->id) }}">
                    <i class="fa-solid fa-pen"></i>
                </a>

                <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="button">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
