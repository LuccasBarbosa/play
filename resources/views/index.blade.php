<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PlayNtus</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">


        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            nav{
                flex-flow: row nowrap;
                justify-content: flex-start;
            }

            nav a{
                color: #98009b;
                font-size: 1.24rem;
                margin-right: 30px;
            }

            .btn-login{
                color: #fff;
                background-color: #ce3ed1;
                width: 224px;
                text-align: center;
                border-radius: 20px;
            }

            .btn-login:hover{
                text-transform: none;
                color: #fff;
            }

            .conteudo{
                position: relative
            }

            .info{
                background: url('https://www.playkids.com/_nuxt/img/promo-bg.3867338.png');
                width: 515px;
                height: 571px;
                max-width: 100%;
                top: 0;
                left: 0px;
                bottom: auto;
                position: absolute
            }

            .info-card{
                display: flex;
                flex-direction: column;
            }

            .info-card h3{
                color: #ffeea2;
                font-size: 30px;
                text-align: center;
                margin: 22px;
                padding: 0 40px;
            }
            .info-card h3 strong{
                color: #fff;
            }

            .info .info-card p{
                color: #98009b;
                margin: 3rem 0;
                padding: 0 40px;
                text-align: center;
                font-size: 1.24rem;
                margin-bottom: 0;
            }

            .card-box{
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                align-items: baseline;
                margin-top: 1.5rem;
            }

            .info .btn-conheca{
                color: #fff;
                margin: 0 auto;
                background-color: #98009b;
                display: flex;
                justify-content: center;
                border-radius: 20px;
                font-size: 1.44rem;
                margin-top: 25px;

            }

            .btn-conheca{
                color: #fff;
                margin: 0 auto;
                background-color: #98009b;
                display: flex;
                justify-content: center;
                border-radius: 20px;
                font-size: 1.44rem;
                margin-top: 50px;

            }

            .curva{
                background-image: url('https://www.playkids.com/_nuxt/img/curve01-bg.dacd0a2.png');
                height: 160px;
                border: none;
            }


            
        </style>
    </head>
    <body>

        <header>
            <nav class="navbar navbar-expand-md ">
                <a href="#" class="logo"> <img src="{{ asset('image/logo.png') }}" alt=""></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto text-right">

                  <li class="nav-item active">
                    <a class="nav-link" href="#">Por que a play Ntus? <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link btn-login" href="/login" >Entrar</a>
                  </li>
                </ul>
              </div>
            </nav>
          </header>

        <section class="conteudo">
            <div class="bg ">
                <div class="col-md-12 p-0">
                    <img src="{{asset('image/meninos.png')}}" alt="" class="img-fluid">
                </div>
            </div>

            <div class="info d-none d-lg-block">
                <div class="info-card">
                    <h3>Diversão sem perder o ritmo do aprendizado? <br> <strong>Tudo bem, é PlayKids</strong></h3>
                    <p>Um aplicativo infantil que traz conteúdos selecionados por especialistas, garantindo diversão, segurança e grandes aprendizados.</p>
                    <a href="" class="btn btn-conheca">Conheça o app</a>
                </div>
            </div>
        </section>

        <section class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center mb-10">As crianças aprendem o tempo todo!</h1>
                    <p class="text-center mb-10">Jogos, desenhos, livros e atividades para brincar e se desenvolver.</p>
                </div>

                <div class="card-box">
                    <div class="col-md-3">
                        <img src="https://www.playkids.com/_nuxt/img/wagon01.9937837.svg" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-3">
                        <img src="https://www.playkids.com/_nuxt/img/wagon02.820aa31.svg" alt="" class="img-fluid">
                        <div class="descricao">
                            <h3 class="text-center">Os personagens mais queridos</h3>
                            <p class="text-center">Desenhos infantis que ensinam grandes lições para a vida toda.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <img src="https://www.playkids.com/_nuxt/img/wagon03.a2244be.svg" alt="" class="img-fluid">
                        <div class="descricao">
                            <h3 class="text-center">Os personagens mais queridos</h3>
                            <p class="text-center">Empatia, diversidade, respeito para crescer em sociedade.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <img src="https://www.playkids.com/_nuxt/img/wagon04.cc2e0cd.svg" alt="" class="img-fluid">
                        <div class="descricao">
                            <h3 class="text-center">Os personagens mais queridos</h3>
                            <p class="text-center">Intensifique o aprendizado de números, idiomas, lógica e muito mais.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <button class="btn btn-conheca">Conheça o App</button>
                </div>
            </div>
            
        </section>

        <hr class="curva">

        
                
    </body>
</html>
