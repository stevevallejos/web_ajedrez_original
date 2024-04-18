@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    
@stop   
@section('content')
    <h2>-----------idiomas🌐------------</h2>
<table class="wikitable table">
    <tbody>
        <tr>
    <td>
    </td>
        <td><b><a href="/wiki/Rey_(ajedrez)" title="Rey (ajedrez)">Rey</a></b></td>
        <td><b><a href="/wiki/Dama_(ajedrez)" title="Dama (ajedrez)">Dama</a></b></td>
        <td><b><a href="/wiki/Torre_(ajedrez)" title="Torre (ajedrez)">Torre</a></b></td>
        <td><b><a href="/wiki/Alfil" title="Alfil">Alfil</a></b></td>
        <td><b><a href="/wiki/Caballo_(ajedrez)" title="Caballo (ajedrez)">Caballo</a></b></td>
        <td><b><a href="/wiki/Pe%C3%B3n_(ajedrez)" title="Peón (ajedrez)">Peón</a></b></td>
    </tr>
    <tr>
    <td><a href="/wiki/Iconograf%C3%ADa" title="Iconografía">Iconografía</a>
    </td>
    <td><span style="font-size:x-large;">♔ ♚</span></td>
    <td><span style="font-size:x-large;">♕ ♛</span></td>
    <td><span style="font-size:x-large;">♖ ♜</span></td>
    <td><span style="font-size:x-large;">♗ ♝</span></td>
    <td><span style="font-size:x-large;">♘ ♞</span></td>
    <td><span style="font-size:x-large;">♙ ♟</span></td>
    </tr>
    <tr>
    <td><a href="/wiki/Idioma_alem%C3%A1n" title="Idioma alemán">Alemán</a>
    </td>
    <td><b>K</b> = König (<i>rey</i>)</td>
    <td><b>D</b> = Dame (<i>dama</i>)</td>
    <td><b>T</b> = Turm (<i>torre</i>)</td>
    <td><b>L</b> = Läufer (<i>corredor</i>)</td>
    <td><b>S</b> = Springer (<i>saltador</i>)</td>
    <td><b>(B)</b> = Bauer (<i>peón</i>)</td>
    </tr>
    <tr>
    <td><a href="/wiki/Idioma_espa%C3%B1ol" title="Idioma español">Español</a>
    </td>
    <td><b>R</b> = Rey</td>
    <td><b>D</b> = Dama</td>
    <td><b>T</b> = Torre</td>
    <td><b>A</b> = Alfil</td>
    <td><b>C</b> = Caballo</td>
    <td><b>(P)</b> = Peón</td>
    </tr>
    <tr>
    <td><a href="/wiki/Esperanto" title="Esperanto">Esperanto</a></td>
    <td><b>R</b> = Reĝo (<i>rey</i>)</td>
    <td><b>D</b> = Damo (<i>dama</i>)</td>
    <td><b>T</b> = Turo (<i>torre</i>)</td>
    <td><b>K</b> = Kuriero (<i>mensajero</i>)</td>
    <td><b>Ĉ</b> = Ĉevalo (<i>caballo</i>)</td>
    <td><b>(P)</b> = Peono (<i>peón</i>)</td></tr>
    <tr>
        <td><a href="/wiki/Idioma_franc%C3%A9s" title="Idioma francés">Francés</a></td>
        <td><b>R</b> = Roi (<i>rey</i>)</td>
        <td><b>D</b> = Dame (<i>dama</i>)</td>
        <td><b>T</b> = Tour (<i>torre</i>)</td>
        <td><b>F</b> = Fou (<i>bufón</i>)</td>
        <td><b>C</b> = Cavalier (<i>caballero</i>)</td>
        <td><b>(P)</b> = Pion (<i>peón</i>)</td>
    </tr>
    <tr>
        <td><a href="/wiki/Hindi" class="mw-redirect" title="Hindi">Hindi</a></td>
        <td><b>R</b> = Rājā (<i>rey</i>)</td>
        <td><b>V</b> = Vazīr (<i>visir</i>)</td>
        <td><b>H</b> = Hāthī (<i>elefante</i>)</td>
        <td><b>O</b> = Ūṁṭ (<i>camello</i>)</td>
        <td><b>G</b> = Ghoṛā (<i>caballo</i>)</td>
        <td><b>(P)</b> = Pyādā (<i>infantería</i>)</td>
    </tr>
    <tr>
        <td><a href="/wiki/Idioma_ingl%C3%A9s" title="Idioma inglés">Inglés</a></td>
        <td><b>K</b> = King (<i>rey</i>)</td>
        <td><b>Q</b> = Queen (<i>reina</i>)</td>
        <td><b>R</b> = Rook (<i>castillo</i>)</td>
        <td><b>B</b> = Bishop (<i>obispo</i>)</td>
        <td><b>N</b> = Knight (<i>caballero</i>)</td>
        <td><b>(P)</b> = Pawn (<i>peón</i>)</td>
    </tr>
    <tr>
        <td><a href="/wiki/Idioma_italiano" title="Idioma italiano">Italiano</a></td>
        <td><b>R</b> = Re (<i>rey</i>)</td>
        <td><b>D</b> = Donna (<i>dama</i>)</td>
        <td><b>T</b> = Torre (<i>torre</i>)</td>
        <td><b>A</b> = Alfiere (<i>alférez</i>)</td>
        <td><b>C</b> = Cavallo (<i>caballo</i>)</td>
        <td><b>(P)</b> = Pedone (<i>peón</i>)</td></tr>
    <tr>
        <td><a href="/wiki/Idioma_neerland%C3%A9s" title="Idioma neerlandés">Neerlandés</a></td>
        <td><b>K</b> = Koning (<i>rey</i>)</td>
        <td><b>D</b> = Dame (<i>dama</i>)</td>
        <td><b>T</b> = Toren (<i>torre</i>)</td>
        <td><b>L</b> = Loper (<i>corredor</i>)</td>
        <td><b>P</b> = Paard (<i>caballo</i>)</td>
        <td>Pion (<i>peón</i>)</td>
    </tr>
    <tr>
        <td><a href="/wiki/Idioma_polaco" title="Idioma polaco">Polaco</a></td>
        <td><b>K</b> = Król (<i>rey</i>)</td>
        <td><b>H</b> = <a href="/wiki/Hetman" title="Hetman">Hetman</a> (<i>comandante</i>)</td>
        <td><b>W</b> = Wieża (<i>torre</i>)</td>
        <td><b>G</b> = Goniec (<i>mensajero</i>)</td>
        <td><b>S</b> = Skoczek (<i>saltador</i>)</td>
        <td><b>(P)</b> = Pion (<i>peón</i>)</td>
    </tr>
    <tr>
        <td><a href="/wiki/Idioma_ruso" title="Idioma ruso">Ruso</a></td>
        <td><b>Kp</b> = Korol (<i>rey</i>)</td>
        <td><b>Ф</b> = Ferz (<i>visir</i>)</td>
        <td><b>Л</b> = Ladya (<i>barco</i>)</td>
        <td><b>C</b> = Slon (<i>elefante</i>)</td>
        <td><b>K</b> = Kon (<i>caballo</i>)</td>
        <td><b>(П)</b> = Peshka (<i>peón</i>)</td>
    </tr>
    <tr>
        <td><a href="/wiki/Idioma_griego" title="Idioma griego">Griego</a></td>
        <td><b>Ρ</b> = Ρουά/Roi (<i>rey</i>)</td>
        <td><b>Β</b> = Βασίλισσα/Vasilissa (<i>dama</i>)</td>
        <td><b>Π</b> = Πύργος/Pyrgos (<i>torre</i>)</td>
        <td><b>A</b> = Αξιωματικός/Aksiomatikos (<i>oficial del ejército</i>)</td>
        <td><b>Ι</b> = Ίππος/Ippos (<i>caballo</i>)</td>
        <td><b>(Σ)</b> = Στρατιώτης/Stratiotis (<i>soldado</i>)</td>
    </tr>
    <tr>
        <td><a href="/wiki/Idioma_irland%C3%A9s" title="Idioma irlandés">Irlandés</a></td>
        <td><b>R</b> = Rí (<i>rey</i>)</td>
        <td><b>Br</b> = Banríon (<i>reina</i>)</td>
        <td><b>C</b> = Caiseal (<i>castillo</i>)</td>
        <td><b>E</b> = Easpag (<i>obispo</i>)</td>
        <td><b>Ri</b> = Ridire (<i>caballero</i>)</td>
        <td><b>(F)</b> = Fichillín (<i>peón</i>)</td>
    </tr>
    <tr>
        <td><a href="/wiki/Idioma_morse" title="Idioma morse">Morse</a></td>
        <td><b>···</b>- = rey</td>
        <td><b>····</b>- = dama</td>
        <td><b>· ·</b>- = torre</td>
        <td><b>···</b>- = alfil</td>
        <td><b>··</b>- = caballo</td>
        <td><b>··</b>- = peón</td>
    </tr>
    </tbody>
</table>
@stop
@section('css')
@stop
@section('js')
@stop