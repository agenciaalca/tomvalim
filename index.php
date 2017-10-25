<?php include_once 'header.php'; ?>
<?php include_once 'mail.php'; ?>

<div id="slider" class="slider">
    <div id="myCarousel" class="carousel slide conteudo-grupo" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div  id="carousel-slider" class="carousel-inner ">
            <div class="container">
                <div class="item active">

                    <div class="conteudo-de-texto col-md-4">
                        <div class="borda">
                        <h2>MISSÃO</h2>
                        <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de</p>

                        <p>descrição</p>
                        <button class="btn btn-default">Saiba Mais</button></div>
                    </div>
                    <div class="conteudo-de-texto col-md-8">
                        <img src="img/grupo.png" width="100%" height="300px">
                    </div>
                </div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#home-carousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#home-carousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="container">
    <!--  Blog -->
    <section id="blog" class="row">
        <div class="titulos-de-contexto ">
            <h1>ULTIMAS NOTICIAS</h1>
        </div>

        <div class=blog">
            <div id="post" class="col-md-4 col-sm-6 col-xs-12">
                <div class="single_projeto">
                    <img src="img/grupo.png"  />
                    <div class="projeto_overlay">
                        <p>Descrição do post</p>
                    </div>
                </div>
            </div>

            <div id="post"  class="col-md-4 col-sm-6 col-xs-12">
                <div class="single_projeto">
                    <img src="img/grupo.png" alt="Logo empresa arteco" />
                    <div class="projeto_overlay">
                        <p>Descrição do post</p>
                    </div>
                </div>
            </div>
            <div id="post" class="col-md-4 col-sm-6 col-xs-12">
                <div class="single_projeto">
                    <img src="img/grupo.png" alt="Logo empresa cenoura frita" />
                    <div class="projeto_overlay">
                        <p>Descrição do post</p>
                    </div>
                </div>
            </div>
            <div id="post" class="col-md-4 col-sm-6 col-xs-12">
                <div class="single_projeto">
                    <img src="img/grupo.png" alt="Logo grupo-conceito" />
                    <div class="projeto_overlay">
                        <p>Descrição do post</p>
                    </div>
                </div>
            </div>
            <div id="post" class="col-md-4 col-sm-6 col-xs-12">
                <div class="single_projeto">
                    <img src="img/grupo.png" alt="Logo tom valin" />
                    <div class="projeto_overlay">
                        <p>Descrição do post</p>
                    </div>
                </div>
            </div>
            <div id="post" class="col-md-4 col-sm-6 col-xs-12">
                <div class="single_projeto">
                    <img src="img/grupo.png" alt="Logo pizza na pedra" />
                    <div class="projeto_overlay">
                        <p>Descrição do post</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!--  o grupo conceito -->


</div>

<!--  contato  -->
<section id="contato" class="contato content">

    <div class="container">
        <div class="row">
            <div class="titulos-de-contexto ">
                <h1>ENTRE EM CONTATO</h1>

            </div>
        </div>
        <div class="row">
            <div class="col-md-8 ">
                <form method="post" action="index.php#contato" name="formulario-contato" data-toggle="validator" role="form">
                    <div class="col-md-6">
                        <div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="nome" id="nome" value="" placeholder="nome*" required />
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" value="" placeholder="email*" required
                                       data-error="Por favor, informe um e-mail válido.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div>
                            <div class="form-group">
                                <input type="number" class="form-control" name="telefone" id="telefone" value="" placeholder="telefone*" required
                                       data-error="Por favor, somente números.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <textarea class="form-control" id="exampleTextarea" rows="4" 
                                      id="message" name="mensagem" placeholder="mensagem*" required></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="botao ">
                            <button class="btn btn-default btn-block" id="submit" name="submit" type="submit" value="ENVIAR">Enviar Mensagem</button>
                        </div> 
                    </div>
                </form>
                <div class="col-md-12">

                    <div class="mensagem-alerta"><?php echo $msg ?></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="informacoes-contato">
                    <div class="informacoes-contato  espaco text-left">
                        <p><i class="fa fa-envelope" aria-hidden="true"></i> grupoconceito@grupoconceito.com</p>
                        <p><i class="fa fa-whatsapp" aria-hidden="true"></i> (062) 3636-0111</p>
                        <p><i class="fa fa-globe" aria-hidden="true"></i> Rua 88-B, nº 73, Setor Sul, Goiânia - GO, 74085-030</p>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php include_once 'footer.php'; ?>