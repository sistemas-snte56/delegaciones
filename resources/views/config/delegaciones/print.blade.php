<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $delegacion->nomenclatura->nomenclatura}}{{$delegacion->num_delegaciona}}</title>
</head>
<body>

    <div class="element">
        <p class="s5" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">{{$delegacion->region->region}} - {{$delegacion->region->sede}}</p>
        <p style="text-indent: 0pt;text-align: left;"><br /></p>
        <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">{{$delegacion->delegacion_ct->deleg_ct}} {{ $delegacion->nomenclatura->nomenclatura}}{{$delegacion->num_delegaciona}}</p>
        <p class="s5" style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">{{ $delegacion->nivel_delegaciona }}</p>
        <p class="s5" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">{{$delegacion->sede_delegaciona}}</p>
        <p style="text-indent: 0pt;text-align: left;"><br /></p>
    
        @if ($delegacion->maestros->count()>0)
            @foreach ($delegacion->maestros as $maestro)
                <p>{{ $maestro->secretaria->cartera_secretaria}}</p>
                <p class="s6">{{ $maestro->titulo}} {{ $maestro->nombre }} {{ $maestro->apaterno }} {{ $maestro->amaterno }}</p>
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            @endforeach
            @else
                <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;">&nbsp;</p>
                <p class="s6" style="padding-top: 4pt;padding-left: 40pt;text-indent: 0pt;text-align: left;">No hay maestros asociados a esta delegación.</p>
                <p style="text-indent: 0pt;text-align: left;"><br /></p>    
        @endif
    
    </div>
    
    <footer>
        {{ $delegacion->direccion_delegaciona}}, 
        C.P. {{ $delegacion->cp_delegaciona}},
        {{ $delegacion->ciudad_delegaciona}},
        {{ $delegacion->estado_delegaciona}}
    </footer>

</body>


<style type="text/css">
    /* * {
        margin: 8px;
        padding: 0;
        text-indent: 0;
    } */

    @page{
        margin: 0.5cm;
        padding: 0;
        text-indent: 0;        
    }

    .element {
        width: 6.5cm;
        margin-top: 140px;
    }


    footer {
        color: black;
        padding: 0px;
        position: fixed; /* Cambia a 'absolute' si prefieres que sea relativo al documento */
        left: 0;
        bottom: 28;
        width: 60%;
        font-family: Arial, sans-serif;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        font-size: 6pt;
        padding-left: 35pt;
        text-indent: 0pt;
        text-align:center;
    }



    .s5 {
        color: black;
        font-family: Arial, sans-serif;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        font-size: 6pt;
    }

    p {
        color: black;
        font-family: Arial, sans-serif;
        font-style: normal;
        font-weight: bold;
        text-decoration: none;
        font-size: 6.4pt;
        margin: 0pt;
        padding-left: 5pt;
        text-indent: 0pt;
        text-align: left;
    }

    .s6 {
        color: #3F3F3F;
        font-family: Arial, sans-serif;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        font-size: 6pt;
        padding-top: 4pt;
        /* padding-left: 40pt; */
        padding-right: 5pt;
        text-indent: 0pt;
        text-align:right;
    }

    .s7 {
        color: black;
        font-family: Arial, sans-serif;
        font-style: normal;
        font-weight: bold;
        text-decoration: none;
        font-size: 6pt;
    }

    .s8 {
        color: #3F3F3F;
        font-family: Arial, sans-serif;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        font-size: 6pt;
    }
</style>
</html>