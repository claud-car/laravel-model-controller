<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Movies</title>
    </head>
    <style>
    body{
        display:flex;
        align-items:center;
        flex-wrap: wrap;
        width: 70%;
        margin: 0 auto;
    }
    div{
        margin:20px 30px;
        width:20%;
    }
    p{
        font-weight:bold;
    }
    label{
        font-weight:normal;
    }
    </style>
    <body>
            @foreach ($movies as $movie)
                <div>
                    <p>Title: <label>{{$movie->title}}</label></p>
                    <p>Original Title: <label>{{$movie->original_title}}</label></p>
                    <p>Nationality: <label>{{$movie->nationality}}</label></p>
                    <p>Date: <label>{{$movie->date}}</label></p>
                    <p>Vote: <label>{{$movie->vote}}</label></p>
                </div>
           @endforeach
    </body>
</html>









<!-- Ciao ragazzi,
esercizio di oggi:
nome repo: laravel-model-controller
Ciao ragazzi,
oggi facciamo la nostra prima vera interazione con il database utilizzando l'ORM di Laravel.
Create un nuovo progetto Laravel 7 e tramite phpMyAdmin create un nuovo database. Importate nel vostro database la tabella movies in allegato e inserite le vostre credenziali per il database nel file .env.
Create un model Movie e un controller che gestirà la rotta /. All'interno della funzione index() del controller, recuperate tutti i film dal database e passateli alla view, che quindi li visualizzerà a schermo, tramite delle card.
BONUS: Stilare il layout nei dettagli con Sass