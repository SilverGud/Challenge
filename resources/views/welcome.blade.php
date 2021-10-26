<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <body style="background-color: #F4DD61; font-family: 'PT Sans', sans-serif;margin-right: -10px">

            <div style="margin-left: -10px; margin-top:-10px;margin-right: -10px;display:table;width:100%;background-color: #4CB6D9">

                <canvas height="200" width="100vm" style="background-color: #4CB6D9; margin: 0 auto;"></canvas>

            </div>
            <div style="margin-left: -10px;height: 380px; padding: 50px">
                <h2 style="text-align: center;">Menú Principal</h2>
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

                <div style="text-align: center;">
                    <ul class="accordion-menu" style="display: inline-block;margin: 0;padding: 0;list-style-type: none;">
                        <li >
                            <button class="btn btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" style="margin-top: 5px;color: black">Inicio<span class="caret"></span></button>
                        </li>
                        <li>
                            <button class="btn btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" style="margin-top: 5px;color: black">Nosotros<span class="caret"></span></button>
                        </li>
                        <li>

                            <button class="btn btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" style="margin-top: 5px;color: black">Servicios<span class="caret"></span></button>
                            <ul class="dropdown-menu" style="list-style-type: none;">
                                <li><a href="#" data-toggle="modal" data-target="#cuestionario">Arrendamiento</a></li>
                                <li><a href="#" data-toggle="modal" data-target="#cuestionario">Estrena tu auto</a></li>
                            </ul>

                        </li>
                        <li>
                            <button class="btn btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" style="margin-top: 5px;color: black">Calculadora de Pagos<span class="caret"></span></button>
                        </li>
                        <li>
                            <button class="btn btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" style="margin-top: 5px;color: black">Contacto<span class="caret"></span></button>
                        </li>
                    </ul>
                </div>
                @include('cuestionario')
            </div>

            <div style="margin-left: -10px;margin-right: -10px;display:table;width:100%;background-color: #4CB6D9">

                <canvas height="200" width="100%" style="background-color: #4CB6D9; margin: 0 auto;"></canvas>

            </div>
        </body>
</html>
