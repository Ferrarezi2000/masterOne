<?php ?>

<div style="background-color: white; opacity: 0.95; border-radius: 3px; padding: 10px; width:250px;
position:fixed;
z-index:100;
top:1%;
right:1%;">
    <div>
        <form action="../../php/email.php" name="form_contato" method="post">

            <input type="text" name="nome" style="padding: 8px"
                   placeholder="Nome*" tabindex="1" required>

            <input type="text" name="sobrenome"
                   placeholder="Sobrenome*" tabindex="2" required>

            <input type="text" name="assunto"
                   placeholder="Assunto*" tabindex="4" required>

            <input type="email" name="email"
                   placeholder="Email*" tabindex="3" required>

            <textarea  name="mensagem" rows="2"
                       placeholder="Mensagem*" tabindex="7" required></textarea>

            <button type="submit" class="form-submit button medium bkg-theme
                                botaoPrincipal bkg-hover-theme color-white color-hover-white">
                Enviar
            </button>

    </div>

    </form>
</div>
