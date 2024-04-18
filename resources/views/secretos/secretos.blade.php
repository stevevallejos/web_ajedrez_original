@extends('adminlte::page')
@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> --}}
@stop
@section('title', 'Dashboard')

@section('content_header')
    <h1>secretos y curiosidades</h1>
@stop

@section('content')
<body>
    <div class="text-center">
        <img src="/img/robot.jpg" alt="imagen" width="300px">
        <h2>EL ROBOT DEL AJEDREZ ABB-120</h2>
        <p class="text-align text-justify">Los robots ajedrecistas son máquinas diseñadas para jugar al ajedrez. Pueden ser programas de software como *Stockfish* o *AlphaZero*, o robots físicos con brazos mecánicos para mover piezas en tableros reales.

            Estos robots utilizan inteligencia artificial y aprendizaje automático para mejorar su juego con el tiempo. Pueden enfrentar a humanos de distintos niveles y se utilizan para enseñar ajedrez.
            
            Son un ejemplo del avance tecnológico y pueden impulsar investigaciones en IA y robótica.</p>
    </div>
    <img src="/img/3033.jpg" alt="" width="300px">
    <img src="/img/maxresdefault.jpg" alt="" width="400px">
    <p>-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
    <div class="text-center">
        <h2>DONDE NACIO EL AJEDREZ?</h2>
        <img src="/img/images.png" alt="" width="150px">
        <img src="/img/225px-European_flag,_incorrect_star_rotation.svg.png" alt="" width="150px">
        <P>El ajedrez se originó en la India alrededor del siglo VI d.C. El juego era conocido como chaturanga, que significa "cuatro divisiones del ejército" en sánscrito, refiriéndose a las cuatro piezas principales: infantería, caballería, elefantes y carros. Desde la India, el juego se difundió a través de Persia y luego al mundo árabe, donde se convirtió en shatranj, y más tarde se extendió a Europa y otras partes del mundo, evolucionando hacia el ajedrez moderno.</P>
        <h4>donde nacio el ajedrez como hoy en dia conozemos</h4>
        <p>El ajedrez como lo conocemos hoy, con un tablero de 64 casillas en blanco y negro, y las reglas modernas, se desarrolló en **Europa**, principalmente en España e Italia, durante el siglo XV. 

            El juego evolucionó a partir del ajedrez árabe (*shatranj*), que fue introducido en Europa a través de la conquista de la península ibérica por los árabes. A lo largo de los siglos, se hicieron cambios en las reglas y en las piezas para crear el ajedrez moderno.
            
            Los colores blanco y negro del tablero se popularizaron en esa época, y las reglas actuales fueron estandarizadas en el siglo XIX, principalmente por la labor de diversas federaciones de ajedrez.</p>
    </div>
    <p>--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
    <div class="text-center">
        <h2>QUIENES SON LOS MEJORES JUGADORES DE AJEDREZ?</h2>
        <div class="card" style="width: 18rem;" class="row">
            <div class="card-body">
                <img src="/img/reyenigma.jpg" alt="">
                <h5 class="card-title text-center">REY ENIGMA <img src="/img/Bandera_de_España.svg" alt="" width="30px"></h5>
              <p class="card-text">Rey Enigma es un creador de contenido de ajedrez en español conocido por su estilo misterioso, ocultando su identidad detrás de una máscara y capa. Ofrece análisis de partidas, desafíos y ajedrez callejero. Su contenido entretenido ha popularizado el ajedrez entre nuevas audiencias hispanohablantes.</p>
            </div>
        <div class="card" style="width: 18rem; float: right;" class="row">
            <div class="card-body">
                <img src="/img/magnus.webp" alt="" width="200px" class="row">
                <h5 class="card-title text-center">MAGNUS CARLSEN <img src="/img/Flag_of_the_United_States.svg" width="30px" alt=""></h5>
                <p class="card-text">Magnus Carlsen es un jugador de ajedrez noruego, campeón mundial desde 2013. Conocido por su estilo innovador y habilidad táctica, es considerado uno de los mejores jugadores de la historia. Además de su éxito en torneos, Carlsen ha promovido el ajedrez a través de su compañía Play Magnus Group.</p>
            </div>
        </div>
        <div class="card" style="width: 18rem; float: right;">
            <div class="card-body">
                <img src="/img/Nakamura_Hikaru_(29290269410)_(cropped)_(cropped).jpg" alt="" width="200px">
                <h5 class="card-title text-center">Hikaru Nakamura <img src="/img/Flag_of_the_United_States.svg" width="30px" alt=""></h5>
                <p class="card-text">Hikaru Nakamura es un jugador de ajedrez estadounidense. Es uno de los mejores jugadores del mundo y destaca en partidas rápidas. Nakamura es conocido por su estilo agresivo y habilidades tácticas. Además, es un popular creador de contenido en plataformas de streaming y YouTube, donde comparte análisis y partidas.</p>
            </div>
        </div>
        <div class="card" style="width: 18rem; float: right;">
            <div class="card-body">
                <img src="/img/fischer_bobby.jpg" alt="" width="200px">
                <h5 class="card-title text-center">Bobby Fischer <img src="/img/Flag_of_the_United_States.svg" width="30px" alt=""></h5>
                <p class="card-text">Bobby Fischer fue un jugador de ajedrez estadounidense, campeón mundial en 1972 tras vencer a Boris Spassky. Fue un prodigio desde joven, conocido por su estilo innovador y habilidades tácticas. Su victoria en 1972 fue un hito durante la Guerra Fría. Fischer se retiró del ajedrez competitivo poco después y tuvo una vida personal controvertida. Falleció en 2008.</p>
            </div>
        </div>
        <div class="card" style="width: 18rem; float: right;">
            <div class="card-body">
                <img src="/img/Garry_Kasparov_European_Union_2023_(cropped).jpg" alt="" width="200px">
                <h5 class="card-title text-center">Viswanathan Anand <img src="/img/images.png" alt="" width="30px"></h5>
                <p class="card-text">Viswanathan Anand es un jugador de ajedrez indio, campeón mundial de 2007 a 2013. Conocido por su versatilidad en ajedrez clásico, rápido y relámpago, ha popularizado el ajedrez en India. Es respetado por su larga carrera y rivalidades con figuras como Garry Kasparov y Magnus Carlsen.</p>
            </div>
        </div>
        <div class="card" style="width: 18rem; float: right;">
            <div class="card-body">
                <img src="/img/anatoly.jpg" alt="" width="200px">
                <h5 class="card-title text-center">Anatoly Karpov <img src="/img/Flag_of_Russia.svg" alt="" width="30px"></h5>
                <p class="card-text">Anatoly Karpov es un jugador de ajedrez ruso, campeón mundial de 1975 a 1985. Conocido por su estilo sólido y posicional, tuvo una famosa rivalidad con Garry Kasparov. Ganó numerosos torneos internacionales y ha promovido el ajedrez tras su retiro.</p>
            </div>
        </div>
    </div>
</div>
</body>
@stop



@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop