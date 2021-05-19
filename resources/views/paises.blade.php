<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: #BCEBCB">
    <h1>Lista de Paises</h1>
    <table class ="table table-hover">
        <tr>
            <th><span style="color: rgb(75, 18, 65);">Nombre</th>
            <th><span style="color: rgb(75, 18, 65);">Capital</th>
            <th><span style="color: rgb(75, 18, 65);">Moneda</th>
            <th><span style="color: rgb(75, 18, 65);">Poblacion</th>

        </tr>
            @foreach($naciones as $nombre => $nacion)
            <tr>
                <td><span style="color: rgb(255, 62, 223);">{{ $nombre }}</td>
                <td><span style="color: rgb(230, 76, 16);">{{ $nacion["Capital"] }}</td>
                <td><span style="color: #037003;">{{ $nacion["Moneda"] }}</td>
                <td><span style="color: rgb(74, 68, 122);">{{ $nacion["Poblacion"] }}</td>
            </tr>
            @endforeach
        </tr>




    </table>


</body>
</html>
