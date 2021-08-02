<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cookie em Categorias</title>
    </head>
    <body>
        <?php
            if(isset($_COOKIE['codcategoria'])){
                echo("
                    <form method='post' action='ler-categoria.php'>
                        Categoria:
                        <select name='slcCategoria'>
                ");
                if($_COOKIE['codcategoria'] == 1){
                    echo("
                        <option value='1' selected>Roupas</option>
                        <option value='2'>Sapatos</option>
                    ");
                }
                else{
                    echo("
                        <option value='1'>Roupas</option>
                        <option value='2' selected>Sapatos</option>
                    ");
                }
                echo("
                        </select>
                        <input type='submit' value='Pesquisar'>
                    </form>
                    <h1>Lista de Produtos</h1>
                ");
                //se o cookie existir, o usuário informou seu categoria de preferência
                // então vamos carregar os produtos desta categoria em cima das demais
                if($_COOKIE['codcategoria'] == 1){ //categoria escolhida ROUPAS
                    echo("
                        <table border='1'>
                            <tr>
                                <td>
                                    <img src='imagens/casaco.png' width='100'> <br> Casaco de Inverno <br> Categoria: Roupas
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src='imagens/bota.png' width='100'> <br> Bota cano curto <br> Categoria: Sapatos
                                </td>
                            </tr>
                        </table>
                    ");
                }
                else{ // como só tenho duas categorias, só pode ser SAPATOS
                    echo("
                        <table border='1'>
                            <tr>
                                <td>
                                    <img src='imagens/bota.png' width='100'> <br> Bota cano curto <br> Categoria: Sapatos
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <img src='imagens/casaco.png' width='100'> <br> Casaco de Inverno <br> Categoria: Roupas
                                </td>
                            </tr>
                        </table>
                    ");
                }
            }
            else{
                //se o cookie não existir, o usuário não informou suas preferências na cateogria
                echo("
                <form method='post' action='ler-categoria.php'>
                    Categoria:
                    <select name='slcCategoria'>
                        <option value='1' selected>Roupas</option>
                        <option value='2'>Sapatos</option>
                    </select>
                    <input type='submit' value='Pesquisar'>
                </form>
                <h1>Lista de Produtos</h1>
            ");

                echo("
                        <table border='1'>
                            <tr>
                                <td>
                                    <img src='imagens/casaco.png' width='100'> <br> Casaco de Inverno <br> Categoria: Roupas
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src='imagens/bota.png' width='100'> <br> Bota cano curto <br> Categoria: Sapatos
                                </td>
                            </tr>
                        </table>
                    ");
            }
        ?>


        
    </body>
</html>