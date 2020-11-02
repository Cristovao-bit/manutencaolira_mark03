<!--Fale Conosco-->
<section class="container">
    <div class="main_content">
        <h1 class="title">Fale Conosco</h1>

        <header class="sectiontitle sectiontitle-nomargin">
            <h2>Formulário de Contato:</h2>
            <p>Preencha o formulário abaixo para entrar em contato conosco<br>
                ou fale conosco através de nosso telefone, e-mail e endereço a baixo do formulário.</p>
        </header>

        <form class="formulario">
            <div class="box box-large">
                <label>
                    <span>Informe Seu Nome:</span>
                    <input type="text" placeholder="Nome:"/>
                </label>

                <label>
                    <span>Informe Seu Email:</span>
                    <input type="email" placeholder="Email:"/>
                </label>
            </div>

            <div class="box box-large last">
                <label>
                    <span>Deixe Seu Telefone:</span>
                    <input type="tel" placeholder="Telefone:"/>
                </label>

                <label>
                    <span>Como encontrou o Site?</span>
                    <select>
                        <option>Google</option>
                        <option>Yahoo</option>
                        <option>Bing</option>
                        <option>Indicação</option>
                    </select>
                </label>
            </div>

            <label>
                <span>Fale Aqui:</span>
                <textarea rows="8" placeholder="Escreva Sua Mensagem:"></textarea>
            </label>

            <div class="form_action">
                <input class="btn btn-orange" type="submit" value="Enviar Dados"/>
                <input class="btn btn-orange first" type="submit" value="Limpar Dados"/>
            </div>
        </form>

        <aside class="box box-full">
            <img class="fl-left" src="<?= INCLUDE_PATH; ?>/img/location_icon.png" alt="Localizacao" title="Localizacao"/>
            <h2 class="fontzero">Entre em Contato</h2>
            <p><b>Rua: </b>Solon de Lucena, nº 187 | Centro-Esperança-PB / Cep:58135-000</br>
                <b>Facebook: </b>Cristovão Lira Braga | <b>E-mail: </b>ML_servicos@outlook.com</br>
                <b>Fone: </b>(83)99837-9516/ (83)98748-4619 | <b>Horário de Atendimento: </b>08:00 às 18:00 hrs
            </p>
        </aside>
        <div class="clear"></div>
    </div>
</section>

