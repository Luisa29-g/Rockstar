<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.css" integrity="sha512-mG7Xo6XLlQ13JGPQLgLxI7bz8QlErrsE9rYQDRgF+6AlQHm9Tn5bh/vaIKxBmM9mULPC6yizAhEmKyGgNHCIvg==" crossorigin="anonymous" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: #f3c5c5">
    <form class="form-horizontal"
        method="POST"
        action="{{url('buscar')}}">

        @csrf

        <fieldset>

        <!-- Form Name -->
        <legend span style="color:#19647E;">Buscador en diferente motores de busqueda</legend>

        <!-- Text input-->
        <div class="form-group">
          <label span style="color:#18081f;" class="col-md-4 control-label" for="termino">1. Ingrese termino a buscar</label>
          <div class="col-md-4">
          <input id="Buscador" name="termino" type="text" placeholder="" class="form-control input-md">

          </div>
        </div>

        <!-- Multiple Radios -->
        <div class="form-group">
          <label span style="color:#18081f;" class="col-md-4 control-label" for="motores">2.Seleccione los botones de busqueda</label>
          <div class="col-md-4">
          <div class="radio">
            <label for="motores-0">
              <input type="radio" name="motores" id="motores-0" value="1" checked="checked">
              Google
            </label>
            </div>
          <div class="radio">
            <label for="motores-1">
              <input type="radio" name="motores" id="motores-1" value="2">
              Bing
            </label>
            </div>
            <div class="radio">
              <label for="radios-2">
                <input type="radio" name="motores" id="motores-2" value="3" checked="checked">
                Baidu
              </label>
              </div>
          <div class="radio">
          <label for="radios-3">
          <input type="radio" name="motores" id="motores-3" value="4" checked="checked">
           Yahoo
          </label>
          </div>
          <div class="radio">
          <label for="radios-4">
          <input type="radio" name="motores" id="motores-4" value="5" checked="checked">
           Yandex
           </label>
          </div>
          <div class="radio">
          <label for="radios-5">
          <input type="radio" name="motores" id="motores-5" value="6" checked="checked">
           Ask
          </label>
           </div>
           <div class="radio">
           <label for="radios-6">
          <input type="radio" name="motores" id="motores-6" value="7" checked="checked">
          DuckDuckGo
           </label>
           </div>
           <div class="radio">
          <label for="radios-7">
          <input type="radio" name="motores" id="motores-7" value="8" checked="checked">
          Naver
         </label>
          </div>
          <div class="radio">
         <label for="radios-8">
         <input type="radio" name="motores" id="motores-8" value="9" checked="checked">
         Seznam
            </label>
            <div class="radio">
                <label for="radios-9">
                  <input type="radio" name="motores" id="motores-9" value="10" checked="checked">
                  AOL
                </label>
                </div>
</div>
</div>

          </div>
        </div>
        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for=""></label>
          <div class="col-md-4">
            <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-info">Buscar</button>
          </div>
        </div>

        </fieldset>
        </form>
</body>
</html>
