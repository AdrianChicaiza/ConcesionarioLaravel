@extends('layout.main')
<!--extension del main en donde se cambiara el contenido en mi pagina principal -->

@section('title','Nosotros')
<!--nombre de la pagina (cabecera) -->
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
    <style type="text/css">
        .im {
            border-radius: 2px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 100%;
        }

        div .imagen_seccion {
            text-align: justify;
        }

        div .imagen_seccion p{
            text-align: justify;
            font-family: Arial, Helvetica, Verdana;
        }

        .person {
            /* width: 10%; */
            width: 100px;
            height: 140px;
            
            border-end-start-radius: 10px;
            
        }

        div .person_div {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            width: 100%;
            background-color: rgba(var(--bs-dark-rgb),var(--bs-bg-opacity))!important;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            margin-bottom: 20px;
            border-radius: 10px;
        }

        div .description {
            padding-left: 20px;
            padding-right: 20px;
        }

        div .description p {
            font-size: 14px;
            font-family: Arial, Helvetica, Verdana;
            text-align: justify;
            color: aliceblue;
        }

        h1{
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Nuestra mision es crear aplicaciones web de calidad</h1>
   
    <!--width="900" hspace="80" -->

    <div class="imagen_seccion">
        <img src="{{ asset('imagenes/equipoDD4.jpg') }}" alt="Nosotros" class="im">
        <hr>
        <p>
        Nuestra misión consiste en la creación de <b>aplicaciones web de calidad. </b>
            Somos un grupo de desarrolladores con el objetivo de crear aplicaciones web con un estilo elegante e intuitivo
            que sea capaz de ayudar a las personas a encontrar de mejor manera la información que desean, esto con ayuda de
            la creación de aplicaciones web modernas con ayuda de frameworks como son Laravel y Symfony. Nuestro grupo consiste de varias
            desarrolladores con conocimientos varios en temas de desarrollo web, desarrollo de aplicaciones móviles, desarrollo backend, desarrollo frontend, manejo de base de datos, etc.

        </p>
    </div>
    <div>
        

    </div>
</body>

</html>
@endsection()