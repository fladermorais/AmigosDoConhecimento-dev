<?php
include("include/_header.html");
?>
    <section class="container produtos">
        <div class="row">
            <h1>Contato</h1>
            <form action="" class="col-md-12">
            <div class=" conteudo">
                
                
                <div class="esquerda">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" placeholder="Nome">
                    
                    <br>
                    
                    <label for="nome">Email</label>
                    <input type="text" class="form-control" placeholder="E-mail">
                    
                    <br>
                    
                    <label for="nome">Assunto</label>
                    <input type="text" class="form-control" placeholder="Assunto">
                </div>
                
                <div class="direita">
                    <label for="">Mensagem</label>
                    <textarea name="mensagem" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                
                <button class="btn btn-default" type="submit">Enviar</button>
            </div>
        </form>
    </div>
</section>

<?php
   include("include/_footer.html");
?>