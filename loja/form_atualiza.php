<?php 
    include 'pedaco.php';
?>

    <div class="container">
       

        <h1>Formulário para Cadastro de Produtos</h1>
        <form action="atualizar.php" method="POST">

            <?php
                $id = $_GET['id'];
                echo "Valor passado"



            ?>

            <div class="mb-3">
                Nome: <input type="text" class="form-control" name="nome">
            </div>
            <div class="mb-3">
                Preço: <input type="text" class="form-control" name="preco">
            </div>
            <div class="mb-3">
                Quantidade: <input type="text" class="form-control" name="quantidade">
            </div>
            
            <button type="submit" class="btn btn-primary">Atualizar Produto</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>