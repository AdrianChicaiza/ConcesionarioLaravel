@extends('layout.main')


@section('title','Inicio')

@section('content')




<h1>Contactos</h1>

BIENVENIDO {{$name}}

@switch($name)
    @case("Eduardo")
    <div class="w3-card-4 w3-margin" style="width:80% ;margin:10px">

        <header class="w3-container w3-light-grey">
          <h3>Eduardo Farinango</h3>
        </header>
        
        <div class="w3-container">
      
          <hr>
          <div align="center">
          <img  src="{{ asset('recursos/Edu.JPG') }}" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:100px">
        </div>
          <p>Nació en Quito
            -Ecuador en el año 1987. Realizo sus
            estudios secundarios en el sector
            público, pero se graduó en el Centro
            Educativo Asambleas de Dios, luego
            de dejar sus estudios universitarios en
            el año 2015 vuelve a reingresar a la
            Escuela Politécnica Nacional en la
            carrera Tecnología Superior en
            Desarrollo de Software y está
            cursando el cuarto semestre. Áreas
            de interés: Desarrollo WEB, Análisis
            de datos, Hardware.</p>

        </div>
        
        <a href="https://github.com/EdFarinango">Github</a>
        
        </div>


        @break
    @case("Adrian")
    <div class="w3-card-4 w3-margin" style="width:80% ;margin:10px">

        <header class="w3-container w3-light-grey" >
          <h3>Adrian Chicaiza</h3>
        </header>
        
        <div class="w3-container " >
          
          <hr>
          <div align="center">
          <img src="{{ asset('recursos/img_avatar3.png') }}" alt="Nosotros" class="im" style="width:100px" >
          </div>
          <p> nació en QuitoEcuador el 17 de diciembre del 2000.<br>
            Realizó sus estudios secundarios en el<br>
            Instituto Tecnológico Cinco de Junio.<br>
            Actualmente estudia en la Escuela<br>
            Politécnica Nacional en la carrera<br>
            Tecnología Superior en Desarrollo de<br>
            Software y está cursando el cuarto<br>
            semestre. Áreas de interés: desarrollo<br>
            de aplicaciones web, diseño de<br><
            interfaces, informática, manejo y
            mantenimiento de Software y<br>
            Hardware.
            </p><br>
        </div>
        
        <a href="https://github.com/AdrianChicaiza">Github</a>
        
        </div>

        @break
        @case("Alexander")
        <div class="w3-card-4 w3-margin" style="width:80% ;margin:10px">

            <header class="w3-container w3-light-grey">
              <h3>Tupiza Carrera Alexander
                Fernando</h3>
            </header>
            
            <div class="w3-container">
              
              <hr>
              <div align="center">
              <img  src="{{ asset('recursos/alex.JPG')}}" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:100px" />
            </div>
              <p>Nació en Quito-Ecuador
                el 3 de junio de 2001. Realizó sus<br>
                estudios secundarios en la Unidad<br>
                Educativa “Luxemburgo”.<br>
                Actualmente estudia en la Escuela<br>
                Politécnica Nacional en la carrera<br>
                Tecnología Superior en Desarrollo de<br>
                Software y está en cuarto semestre.<br>
                Áreas de interés: Redes, Software y<br>
                Hardware, Seguridad</p>
            </div>
            
            <a href="https://github.com/FernandoTupiza">Github</a>
            
            </div>
        @break
        @case("Pedro")
        <div class="w3-card-4 w3-margin" style="width:80% ;margin:10px">

            <header class="w3-container w3-light-grey">
              <h3>Pedro Páez</h3>
            </header>
            
            <div class="w3-container">
              <hr>
              <div align="center">
              <img  src="{{ asset('recursos/paez.JPG')}}" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:100px">
            </div>
              <p>Nació en Quito-Ecuador el 23
                de marzo de 1995. Realizó sus estudios en
                el colegio secundario” Verbo”.
                Actualmente estudia en la Escuela
                Politécnica Nacional en la carrera de
                Tecnología Superior en Desarrollo de
                Software. Áreas de interés: back-end,
                desarrollo de apps web.
            </div>
            
            <a href="https://github.com/PPC80">Github</a>
            
            </div>
        @break
        @case("Antonio")
        <div class="w3-card-4 w3-margin" style="width:80% ;margin:10px">

            <header class="w3-container w3-light-grey">
              <h3>Antonio Villegas</h3>
            </header>
            
            <div class="w3-container">
             
              <hr>
              <div align="center">
              <img  src="{{ asset('recursos/yomeroo.JPG') }}" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:100px">
              </div>
              <p>Nació en Quito-Ecuador
                en
                2001.. Realizó sus estudios secundarios en varios
                Colegios de la ciudad, pero termino su
                bachillerato en la “Unidad Educativa Jesús de
                Nazareth” Actualmente estudia en la Escuela
                Politécnica Nacional en la carrera Tecnología
                Superior en Desarrollo de Software y está
                cursando el cuarto semestre.
                Áreas de interés: Hacking ético, desarrollo de
                aplicaciones, desarrollo de aplicaciones
                móviles. </p>
            </div>
            
            <a href="https://github.com/AntonioVillegas13">Github</a>
            </div>
        @break
    @default
 
        
@endswitch
 


@endsection()