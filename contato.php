<?php
require_once 'header.php';
?>


    <div class="container">
        <div class="row formulario">
            <form class="col s12" action="contato-enviar.php" method="POST" name="form">
                <div class="row">
                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="last_name" type="text" class="validate" id="nome" name="nome" placeholder="Seu Nome" required>
                        <label for="last_name">Nome</label>
                    </div>
                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">phone</i>
                        <input id="last_name" type="tel" id="telefone" name="telefone" pattern="[0-9]{2}[0-9]{5}[0-9]{4}" placeholder="Seu Numero com DDD" required>
                        <label for="last_name">Telefone</label>
                    </div>
                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">email</i>
                        <input id="last_name" type="email" class="validate" id="email" name="email" placeholder="seuemail@provedor" required>
                        <label for="last_name">Email</label>
                    </div>

                    <div class="input-field col s12 m12 l12">
                        <i class="material-icons prefix">mode_edit</i>
                        <textarea placeholder="Escreva sua Mensagem" id="mensagem" name="mensagem" cols="50" rows="8" maxlength="300" minlength="20" style="height: 200px; margin-top: 5px;" required></textarea>
                        <label for="mensagem ">Escreva sua Mensagem</label>
                    </div>


                    <div>
                        <button id="download-button " class="col s12 btn-large waves-effect waves-light " type="submit " name="submit " style="width: 100%;"><b>Enviar</b> 
                            <i class="material-icons right ">send</i>
                          </button>
                    </div>

                </div>
            </form>
        </div>
    </div>


    <?php
require_once 'footer.php';
?>