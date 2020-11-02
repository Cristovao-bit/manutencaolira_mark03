<!--Slide Sohw-->
<section class="container  main_slidesow">
    <div class="content">
        <header class="sectiontitle fontsize2">
            <h1>Seja Bem Vindo!</h1>
            <p class="tagline">Ao Seu Suporte Técnico em Informática</p>
        </header>

        <div class="clear"></div>
    </div>
</section>

<!--Empresa-->
<section class="container">
    <div class="content main_empresa" style="padding-bottom: 10px;">
        <h1>Empresa</h1>
        <p class="tagline">Quem Somos!</p>

        <div class="al-justify" style="padding-bottom: 20px;">                
            <p>Manutenção Lira é uma empresa de Suporte Técnico em Informática para clientes domésticos e pequenas empresas.<br>
                Nosso Core Bussiness é baseado no relacionamento direto com o cliente ou empresa, propocionando ao mesmo serviços técnicos e acessórios que podemos oferecer dentro da nossa área, procurando na medida do impossível, adaptar serviços existentes para as suas necessidades, promovendo sempre a sua satisfação.</p>
        </div>

        <article class="box box-medium">
            <h1 class="sectiontitle">Missão</h1>
            <hr>
            <p class="al-center main_bloc">Atuar com padrões de excelência no serviços prestados aos nossos Clientes, aperfeiçoando processos, habilidades humanas e profissionais.</p>
        </article>

        <article class="box box-medium">
            <h1 class="sectiontitle">Visão</h1>
            <hr>
            <p class="al-center main_bloc">Ser reconhecido como uma das melhores fornecedoras de serviços na 
                área de suporte técnico em informática, superando sempre as expectativas de nossos clientes.</p>
        </article>

        <article class="box box-medium last">
            <h1 class="sectiontitle">Valores</h1>
            <hr>
            <p class="al-center main_bloc"> Compromisso com Nossos Clientes.<br>
                Ética Profissional.<br>
                Profissionalismo em Nossos Serviços.</p>
        </article>

        <div class="clear"></div>
    </div>
</section>

<!--Nossos Serviços-->
<section class="container bg-light">
    <div class="content">
        <h1 class="sectiontitle" style="border-bottom: 1px solid #000; margin-bottom: 50px; padding: 10px;">Nossos Serviços</h1>

        <article class="main_serv_item box box-medium al-center boxshadow">
            <img src="<?= INCLUDE_PATH; ?>/img/formatacao.png" title="Formatação" alt="[Formatação]"/>
            <h1>Formatação</h1>
            <p class="main_serv_text">Formatamos o seu equipamento com Sistema Operacionais atualizados.</p>
        </article>

        <article class="main_serv_item box box-medium al-center boxshadow">
            <img src="<?= INCLUDE_PATH; ?>/img/backup.png" title="Backup do seus arquivos" alt="[Backup dos seus arquivos]"/>
            <h1>Sistema de Backup</h1>
            <p class="main_serv_text">Salvamos seus arquivos com total eficiância e eficacia.</p>
        </article>

        <article class="main_serv_item box box-medium al-center last boxshadow">
            <img src="<?= INCLUDE_PATH; ?>/img/servico.png" title="Restauração e Instalação de Hardware" alt="[Restauração e Instalação de Hardware]"/>
            <h1>Restauração</h1>
            <p class="main_serv_text">Fazemos a restauração das peças danificas.</p>
        </article>

        <div class="box-line"></div>

        <article class="main_serv_item box box-medium al-center boxshadow">
            <img src="<?= INCLUDE_PATH; ?>/img/limpeza.png" title="Limpeza Completa" alt="[Limpeza Completa]"/>
            <h1>Limpeza Completa</h1>
            <p class="main_serv_text">O seu equipamento precisa de uma limpeza periodicamente.</p>
        </article>

        <article class="main_serv_item box box-medium al-center boxshadow">
            <img src="<?= INCLUDE_PATH; ?>/img/diagnostico.png" title="Diagnóstico do seu equipamento" alt="[Diagnóstico do seu equipamento]"/>
            <h1>Diagnóstico Completo</h1>
            <p class="main_serv_text">Fazemos diagnóstico do seu equipamentos e passamos com o orçamentos do serviço.</p>
        </article>

        <article class="main_serv_item box box-medium al-center last boxshadow">
            <img src="<?= INCLUDE_PATH; ?>/img/online.png" title="Suporte Online" alt="[Suporte Online]"/>
            <h1>Suporte Online</h1>
            <p class="main_serv_text">Fazemos serviços via acesso remoto e tiramos suas dúvidas.</p>
        </article>

        <div class="al-center">
            <a href="http://localhost/manutencao_lira/manutencaolira_mark03/servicos" class="btn btn-orange">Saiba Mais</a>
        </div>
        <div class="clear"></div>
    </div>
</section>

<!--Cartão Fidelidade-->
<article class="container bg-gray">
    <div class="content al-center">
        <header class="sectiontitle">
            <h1>Cartão Fidelidade</h1>
            <p class="tagline">Faça o seu Cadastro aqui e tenha as Nossas Ofertas de Serviços e Promoções!</p>
        </header>

        <form name="sendcontent" action="obrigado" method="post">
            <input class="box box-medium" type="text" name="Seu Nome" title="Seu nome" placeholder="Seu Nome" required/>
            <input class="box box-medium" type="email" title="Email" name="E-mail"  placeholder="E-mail" required/>

            <a href="#" class="btn btn-orange box box-medium last al-center">CADASTRA-SE</a>
        </form>
        <div class="clear"></div>
    </div>
</article>

<!--Book Online-->
<section class="container">
    <h1 class="fontzero">Agenda Online</h1>
    <div class="content main_agenda boxshadow">
        <article class="box box-large al-center">
            <h1 class="fontzero">Descrição</h1>
            <p class="main_descricao">A Empresa Manutenção Lira dispobiliza uma Agenda Online onde você marca uma visita do técnico a sua residência de acordo com o seu horário de disposição.</p>
        </article>

        <article class="sectiontitle box box-large last" style="padding:30px; border-left: 3px solid #000;">
            <h1>Book Online</h1>
            <p class="tagline">Agende agora a visita do técnico em sua residência!</p>
            <a href="http://localhost/manutencao_lira/manutencaolira_mark03/bookonline" class="btn btn-yelow">AGENDAR</a>
        </article>
        <div class="clear"></div>
    </div>
</section>

<!--Fale Conosco-->
<section class="container bg-blue">
    <div class="content">
        <h1 class="sectiontitle">Fale Conosco</h1>
        <hr>                
        <article class="box box-large">
            <h1 class="main_info fontzero">Nosso Contato</h1>
            <p><b>Rua: </b>Solon de Lucena, nº 187</br>
                Centro-Esperança-PB / Cep:58135-000</br>
                <b>Facebook: </b>Cristovão Lira Braga<br>
                <b>E-mail: </b>ML_servicos@outlook.com</br>
                <b>Fone: </b>(83)99837-9516/ (83)98748-4619</br>
                <b>Horário de Atendimento: </b>08:00 às 18:00 hrs
            </p>
            <img src="<?= INCLUDE_PATH; ?>/img/suporte.png"/>
        </article>

        <article class="box box-large last">
            <h1 class="main_info fontzero">Entre em Contato</h1>
            <form action="" method="post">
                <label>
                    <span>Nome Completo:</span>
                    <input type="text" name="nome" title="Informe seu Nome" placeholder="Informe seu Nome" required/>
                </label>

                <label>
                    <span>Email:</span>
                    <input type="email" name="email" title="Informe seu email" placeholder="Informe seu Email" required/>
                </label>

                <label>
                    <span>Assunto:</span>
                    <input type="text" name="assunto" title="Do que se trata" placeholder="Informe o Assunto" required/>
                </label>

                <label>
                    <span>Mensagem:</span>
                    <textarea rows="5" name="mensagem" title="Mensagem" placeholder="Deixe aqui sua mensagem" required></textarea>
                </label>
                <button class="btn btn-orange fl-right">Enviar</button>
            </form>
        </article>

        <div class="clear"></div>
    </div>
</section>

<!--Mensagem-->
<div class="container main_destaque">
    <div class="content al-center font-normal">
        <p class="fontsize2 font-normal">Manutenção Lira trazendo para você os melhores serviços com preços acessiveis ao seu bolso!</p>

        <div class="link_facebook box box-medium boxshadow">
            <a href="#" style="color: #fff; font-size: 1.5em;">Compartilhe no Facebook!</a>
        </div>

        <div class="link_goole box box-medium boxshadow">
            <a href="#" style="color: #fff; font-size: 1.5em;">Recomende no Google!</a>
        </div>

        <div class="link_twitter box box-medium last boxshadow">
            <a href="#" style="color: #fff; font-size: 1.5em;">Conte isso no Twitter!</a>
        </div>

        <div class="clear"></div>
    </div>
</div>


