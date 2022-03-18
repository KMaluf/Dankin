<!DOCTYPE html>
<html>
    <head>
        <title>Projeto01</title>
        <link href="estilo/css/all.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="estilo/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Descrição do meu website">
        <meta name="keywords" content="palavra-chave,do,meu,site">
        <meta charset="utf-8">
    </head>
    <body>
        
        <header>
            <div class="center">
            <div class="logo left">Logomarca</div><!--logo-->
            <nav class="desktop right">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav>
            <nav class="mobile right">
                <div class="botao-menu-mobile">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav>
            <div class="clear"></div><!--clear-->
            </div><!--center-->
        </header>

        <section class="banner-principal">
        <div class="overlay"></div><!--overlay-->
            <div class="center">
            <form >
                <h2>Qual o seu melhor e-mail?</h2>
                <input type="email" name='email'require/>
                <input type="submit" name="acao" value="Cadastrar!">
            </form>
            </div><!--center-->
        </section><!--banner-principal-->


        <section class="descricao-autor">
            <div class="center">
            <div class="w50 left">
            <h2>Rowan Atkinson</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed risus tellus, pretium quis nibh ac, vulputate molestie nibh. Etiam non erat cursus, pretium odio id, euismod nibh. Pellentesque volutpat, ex ac hendrerit placerat, felis velit elementum nibh, quis sollicitudin justo nibh non neque. Donec a quam nec odio maximus vestibulum vel ac massa. Maecenas in fermentum nunc. Pellentesque vitae aliquet lacus.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed risus tellus, pretium quis nibh ac, vulputate molestie nibh. Etiam non erat cursus, pretium odio id, euismod nibh. Pellentesque volutpat, ex ac hendrerit placerat, felis velit elementum nibh, quis sollicitudin justo nibh non neque. Donec a quam nec odio maximus vestibulum vel ac massa. Maecenas in fermentum nunc. Pellentesque vitae aliquet lacus.</p>
            </div><!--w50-->
            <div class="w50 left">
                <img class="right" src="https://conteudo.imguol.com.br/c/entretenimento/47/2020/09/15/rowan-atkinson-como-mr-bean-1600189012561_v2_600x800.jpg.webp" width="250">
            </div><!--w50--> 
            <div class="clear"></div>
            </div><!--center-->    
        </section><!--Descricao-autor--->


        <section class="expecialidades">
            <div class="center">
            <h2 class="title">Especialidades</h2>
                <div class="w33 left box-especialidade">
                    <h3><i class="fa-brands fa-css3"></i></h3>
                    <h3>CSS3</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed risus tellus</p>
                </div><!--box-especialidade-->
                <div class="w33 left tbox-especialidade">
                    <h3><i class="fa-brands fa-html5"></i></h3>
                    <h3>HTML5</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed risus tellus</p>
                </div><!--box-especialidade-->
                <div class="w33 left box-especialidade">
                    <h3><i class="fa-brands fa-js"></i></h3>
                    <h3>JavaScript</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed risus tellus</p>
                </div><!--box-especialidade-->
            </div><!--Center-->
        </section><!--especialidades-->


        <section class="extras">
            <div class="center">
                <div class="w50 left">
                    <h2 class="title">Depoimentos</h2>
                    <div class="depoimento-single">
                        <p class="depoimento-descricao">Nulla ac ligula sed nibh maximus tempor. Mauris at faucibus ipsum. In at gravida mi. Cras nulla velit, feugiat sodales placerat ac, ornare eget tortor. Vestibulum a ligula turpis. Quisque dapibus tellus libero, mattis feugiat odio interdum egestas. Proin dapibus, mauris quis congue condimentum, erat orci interdum risus, a hendrerit elit justo ut ante. Morbi sit amet pharetra neque. Morbi at finibus lectus.</p>
                        <p class="nome-autor">Lorem Ipsum</p><!--nome-autor-->
                    </div><!--depoimento-single-->
                    <div class="depoimento-single">
                        <p class="depoimento-descricao">Nulla ac ligula sed nibh maximus tempor. Mauris at faucibus ipsum. In at gravida mi. Cras nulla velit, feugiat sodales placerat ac, ornare eget tortor. Vestibulum a ligula turpis. Quisque dapibus tellus libero, mattis feugiat odio interdum egestas. Proin dapibus, mauris quis congue condimentum, erat orci interdum risus, a hendrerit elit justo ut ante. Morbi sit amet pharetra neque. Morbi at finibus lectus.</p>
                        <p class="nome-autor">Lorem Ipsum</p><!--nome-autor-->
                    </div><!--depoimento-single-->
                    <div class="depoimento-single">
                        <p class="depoimento-descricao">Nulla ac ligula sed nibh maximus tempor. Mauris at faucibus ipsum. In at gravida mi. Cras nulla velit, feugiat sodales placerat ac, ornare eget tortor. Vestibulum a ligula turpis. Quisque dapibus tellus libero, mattis feugiat odio interdum egestas. Proin dapibus, mauris quis congue condimentum, erat orci interdum risus, a hendrerit elit justo ut ante. Morbi sit amet pharetra neque. Morbi at finibus lectus.</p>
                        <p class="nome-autor">Lorem Ipsum</p><!--nome-autor-->
                    </div><!--depoimento-single-->
                </div><!--w50-->
                <div class="w50 left">
                    <h2 class="title">Serviços</h2>
                    <div class="servicos">
                        <ul>
                            <li>Nulla ac ligula sed nibh maximus tempor. Mauris at faucibus ipsum. In at gravida mi. Cras nulla velit, feugiat sodales placerat ac, ornare eget tortor. Vestibulum a ligula turpis. Quisque dapibus tellus libero, mattis feugiat odio interdum egestas. Proin dapibus, mauris quis congue condimentum, erat orci interdum risus, a hendrerit elit justo ut ante. Morbi sit amet pharetra neque. Morbi at finibus lectus.</li>
                            <li>Nulla ac ligula sed nibh maximus tempor. Mauris at faucibus ipsum. In at gravida mi. Cras nulla velit, feugiat sodales placerat ac, ornare eget tortor. Vestibulum a ligula turpis. Quisque dapibus tellus libero, mattis feugiat odio interdum egestas. Proin dapibus, mauris quis congue condimentum, erat orci interdum risus, a hendrerit elit justo ut ante. Morbi sit amet pharetra neque. Morbi at finibus lectus.</li>
                            <li>Nulla ac ligula sed nibh maximus tempor. Mauris at faucibus ipsum. In at gravida mi. Cras nulla velit, feugiat sodales placerat ac, ornare eget tortor. Vestibulum a ligula turpis. Quisque dapibus tellus libero, mattis feugiat odio interdum egestas. Proin dapibus, mauris quis congue condimentum, erat orci interdum risus, a hendrerit elit justo ut ante. Morbi sit amet pharetra neque. Morbi at finibus lectus.</li>
                        </ul>
                    </div><!--servicos-->
                </div><!--w50-->
                <div class="clear"></div>
            </div><!--center-->
        </section><!--extras-->
        <footer>
        <div class="center">
            <p>Todos os direitos reservados</p>
        </div><!--center-->
    </footer>
    
    </body>
    
</html>