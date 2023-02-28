<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    {{-- STYLE --}}
    <link rel="stylesheet" href="css/style.css">

    {{-- FONTAWESOME --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <div class="title">
            <h2>Dashboard</h2>
            <a href="{{ route('contacts.create') }}">Aggiungi in nuovo contatto</a>
        </div>
        <div class="cards-container">
            @foreach ($contacts as $contact)
                <div class="card">
                    <div class="card-info">
                        <h3>{{ $contact->name }} {{ $contact->last_name }}</h3>
                        <p>numero: {{ $contact->num }}</p>
                    </div>
                    <div class="card-btn">

                        <a class="button" href="{{ route('contacts.show', $contact->id) }}">
                            <i class="fa-solid fa-eye"></i>
                        </a>



                        <a class="button" href="{{ route('contacts.edit', $contact->id) }}">
                            <i class="fa-solid fa-pen"></i>
                        </a>

                        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="button" href="">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</body>

</html>
