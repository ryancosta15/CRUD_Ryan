<html lang="pt-br">  
<head>
    <?php
        //variáveis
        $botao = $_GET['bot'];//botão selecionado
        $visita = $_GET['visit']; //vê se é a primeira vez que visita
        $database = mysqli_connect("localhost", "root", "", "camara_ryan");//conexão com a database
        $fieldset = false;

        //informações de acordo com botão selecionado
        switch ($botao) {
            case 1:
                $titulo = "Adicionar Deputado";
                $fieldset = true;
                $form = true;
                break;
            
            case 2:
               $titulo = "Pesquisar Deputado";
               $fieldset = false;
                break;
            
            case 3:
                $titulo = "Listar Deputados";
                $fieldset = true;
                break;
            
            case 4:
                $titulo = "Excluir Deputado";
                $fieldset = false;
                break;

            case 5:
                $titulo = "Alterar Deputado";
                $fieldset = false;
                break;

        }
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <!--Nome página-->
    <title><?php echo $titulo ?></title>
</head>
<body>
    <?php //abre fieldset
    if ($fieldset == true && $visita == 1 && $botao == 1) {
        echo"<fieldset class='fieldsetadd'>";//exibe fieldset (apenas na primeira vez)        
    } elseif ($fieldset == true && $visita == 1 && $botao == 3) {
        echo"<fieldset>";//exibe fieldset (apenas na primeira vez)  
    }
    ?>
    <h1><!--título-->
        <?php 
        if ($fieldset == true) {
        echo "<legend>$titulo</legend>";
        }else {
            echo $titulo;
        }?>
    </h1>
    <?php
    //exibição de acordo com botão selecionado
    switch ($botao) {
        case 1://inclusão
            if ($visita == 1) {//primeira vez
                //inclusão (cadastrando dados do deputado)
                echo"
                    <form action='principal.php' method='get'>
                        <input type='hidden' name='visit' value='2'>
                        <input type='hidden' name='bot' value='$botao'>
                        <div>
                            <label>Código</label>
                            <input type='number' name='cod'>
                        </div> <br>
                        <div>
                            <label>Nome</label>
                            <input type='text' name='nome'>
                        </div> <br>
                        <div>
                            <label>Partido</label>
                            <input type='text' name='partido'>
                        </div> <br>
                        <div>
                            <label>Unidade Federativa</label>
                            <select name='uf' class='box_shadow'>
                                <option value='AC'>Acre</option>
                                <option value='AL'>Alagoas</option>
                                <option value='AP'>Amapá</option>
                                <option value='AM'>Amazonas</option>
                                <option value='BA'>Bahia</option>
                                <option value='CE'>Ceará</option>
                                <option value='DF'>Distrito Federal</option>
                                <option value='ES'>Espirito Santo</option>
                                <option value='GO'>Goiás</option>
                                <option value='MA'>Maranhão</option>
                                <option value='MS'>Mato Grosso do Sul</option>
                                <option value='MT'>Mato Grosso</option>
                                <option value='MG'>Minas Gerais</option>
                                <option value='PA'>Pará</option>
                                <option value='PB'>Paraíba</option>
                                <option value='PR'>Paraná</option>
                                <option value='PE'>Pernambuco</option>
                                <option value='PI'>Piauí</option>
                                <option selected value='RJ'>Rio de Janeiro</option>
                                <option value='RN'>Rio Grande do Norte</option>
                                <option value='RS'>Rio Grande do Sul</option>
                                <option value='RO'>Rondônia</option>
                                <option value='RR'>Roraima</option>
                                <option value='SC'>Santa Catarina</option>
                                <option value='SP'>São Paulo</option>
                                <option value='SE'>Sergipe</option>
                                <option value='TO'>Tocantins</option>
                            </select>
                        </div> <br>
                        <div>
                            <label>Legislatura</label>
                            <select name='legislatura' class='box_shadow'>
                                <option value='1ª'>1ª Legislatura (1826 - 1829)</option>
                                <option value='2ª'>2ª Legislatura (1830 - 1833)</option>
                                <option value='3ª'>3ª Legislatura (1834 - 1837)</option>
                                <option value='4ª'>4ª Legislatura (1838 - 1841)</option>
                                <option value='5ª'>5ª Legislatura (1843 - 1844)</option>
                                <option value='6ª'>6ª Legislatura (1845 - 1847)</option>
                                <option value='7ª'>7ª Legislatura (1848 - 1849)</option>
                                <option value='8ª'>8ª Legislatura (1850 - 1852)</option>
                                <option value='9ª'>9ª Legislatura (1853 - 1856)</option>
                                <option value='10ª'>10ª Legislatura (1857 - 1860)</option>
                                <option value='11ª'>11ª Legislatura (1861 - 1863)</option>
                                <option value='12ª'>12ª Legislatura (1864 - 1866)</option>
                                <option value='13ª'>13ª Legislatura (1867 - 1868)</option>
                                <option value='14ª'>14ª Legislatura (1869 - 1872)</option>
                                <option value='15ª'>15ª Legislatura (1872 - 1875)</option>
                                <option value='16ª'>16ª Legislatura (1877 - 1878)</option>
                                <option value='17ª'>17ª Legislatura (1878 - 1881)</option>
                                <option value='18ª'>18ª Legislatura (1882 - 1884)</option>
                                <option value='19ª'>19ª Legislatura (1885 - 1885)</option>
                                <option value='20ª'>20ª Legislatura (1886 - 1889)</option>
                                <option value='21ª'>21ª Legislatura (1890 - 1891)</option>
                                <option value='22ª'>22ª Legislatura (1891 - 1893)</option>
                                <option value='23ª'>23ª Legislatura (1894 - 1896)</option>
                                <option value='24ª'>24ª Legislatura (1897 - 1899)</option>
                                <option value='25ª'>25ª Legislatura (1900 - 1902)</option>
                                <option value='26ª'>26ª Legislatura (1903 - 1905)</option>
                                <option value='27ª'>27ª Legislatura (1906 - 1908)</option>
                                <option value='28ª'>28ª Legislatura (1909 - 1911)</option>
                                <option value='29ª'>29ª Legislatura (1912 - 1915)</option>
                                <option value='30ª'>30ª Legislatura (1915 - 1917)</option>
                                <option value='31ª'>31ª Legislatura (1918 - 1920)</option>
                                <option value='32ª'>32ª Legislatura (1921 - 1923)</option>
                                <option value='33ª'>33ª Legislatura (1924 - 1926)</option>
                                <option value='34ª'>34ª Legislatura (1927 - 1929)</option>
                                <option value='35ª'>35ª Legislatura (1930 - 1930)</option>
                                <option value='36ª'>36ª Legislatura (1933 - 1934)</option>
                                <option value='37ª'>37ª Legislatura (1934 - 1937)</option>
                                <option value='38ª'>38ª Legislatura (1946 - 1951)</option>
                                <option value='39ª'>39ª Legislatura (1951 - 1955)</option>
                                <option value='40ª'>40ª Legislatura (1955 - 1959)</option>
                                <option value='41ª'>41ª Legislatura (1959 - 1963)</option>
                                <option value='42ª'>42ª Legislatura (1963 - 1967)</option>
                                <option value='43ª'>43ª Legislatura (1967 - 1970)</option>
                                <option value='44ª'>44ª Legislatura (1971 - 1974)</option>
                                <option value='45ª'>45ª Legislatura (1975 - 1978)</option>
                                <option value='46ª'>46ª Legislatura (1979 - 1983)</option>
                                <option value='47ª'>47ª Legislatura (1983 - 1987)</option>
                                <option value='48ª'>48ª Legislatura (1987 - 1991)</option>
                                <option value='49ª'>49ª Legislatura (1991 - 1995)</option>
                                <option value='50ª'>50ª Legislatura (1995 - 1999)</option>
                                <option value='51ª'>51ª Legislatura (1999 - 2003)</option>
                                <option value='52ª'>52ª Legislatura (2003 - 2007)</option>
                                <option value='53ª'>53ª Legislatura (2007 - 2011)</option>
                                <option value='54ª'>54ª Legislatura (2011 - 2015)</option>
                                <option value='55ª'>55ª Legislatura (2015 - 2019)</option>
                                <option selected value='56ª'>56ª Legislatura (2019 - 2023)</option>
                            </select>
                        </div> <br>
                        <div>
                            <label>Sexo</label>
                            <input type='hidden' name='sexo' value=''>
                            <input type='radio' name='sexo' value='Masculino' class='box_shadow'>Masculino
                            <input type='radio' name='sexo' value='Feminino' class='box_shadow'>Feminino
                        </div>
                        <div id='botpag'>
                            <button type='submit' class='box_shadow'>Cadastrar</button>
                            <a href='inicial.html'><button type='button' class='box_shadow'>Voltar</button></a>
                        </div>                   
                    </form>";
                break;
            } else { //segunda vez
                
                //salvando dados como variáveis
                $cod = $_GET['cod'];
                $nome = $_GET['nome'];
                $partido = $_GET['partido'];
                $uf = $_GET['uf'];
                $sexo = $_GET['sexo'];
                $legislatura = $_GET['legislatura'];
                
                
                //teste se cod repetido
                $sql = "SELECT * FROM deputados WHERE cod_deputado = '$cod'";
                $dados = mysqli_query($database, $sql);
                $quant = mysqli_num_rows($dados); //no. de respostas
                
                if ($quant > 0) {//se já existe cod
                echo"<h2>Este código já está em uso!</h2>
                <a href='inicial.html'><button type='button' class='box_shadow'>Voltar ao CRUD</button></a>";
                } else {
                
                //inserindo dados na database
                $sql = "INSERT INTO deputados VALUES ('$cod','$nome','$partido','$uf','$sexo','$legislatura')";
                $stat = mysqli_query($database, $sql);
                //mensagem cadastramento
                echo"
                <h1>O deputado $nome foi cadastrado</h1>
                <h2>Seus dados são:</h2>
                <fieldset id='fieldsetdados'>
                    <p>
                        Código: $cod<br>
                        Nome: $nome<br>
                        Partido: $partido<br>
                        UF: $uf<br>
                        Legislatura: $legislatura<br>
                        Sexo: $sexo
                    </p>  
                </fieldset><br>
                <a href='inicial.html'><button type='button' class='box_shadow'>Voltar ao CRUD</button></a>
                ";
                }
            break;
            }
        case 2://pesquisa
            if ($visita == 1) { //primeira vez
                //interface busca
                echo"
                <form action='principal.php' method='get'>
                    <input type='hidden' name='visit' value='2'>
                    <input type='hidden' name='bot' value='$botao'>
                    <div>
                        <label>Nome</label>
                        <input type='text' name='busca' placeholder='Digite o nome completo'>
                    </div> <br>
                    <button type='submit' class='box_shadow'>Pesquisar</button>
                    <a href='inicial.html'><button type='button' class='box_shadow'>Voltar</button></a>
                </form>
                ";
                break;
            } else {//segunda vez
                //variáveis
                $busca = $_GET['busca'];
                //filtrando dados da database
                $sql = "SELECT * FROM deputados WHERE nome = '$busca'   ";//filtro
                $dados = mysqli_query($database, $sql);//resposta filtro
                $quant = mysqli_num_rows($dados); //no. de respostas
                if ($busca == '') {
                    $busca = ' ';
                }
                if ($quant > 0) { //se existirem dados da busca
                    $row = mysqli_fetch_array($dados);
                    $cod = $row['cod_deputado'];
                    $nome = $row['nome'];
                    $partido = $row['partido'];
                    $uf = $row['uf'];
                    $sexo = $row['sexo'];
                    $legislatura = $row['legislatura'];
                    //exibição busca
                    echo "
                        <fieldset class='fieldsetadd'>
                        <legend><h2>Resultado</h2></legend>
                            <p>
                                Deputado: $nome<br>
                                Código: $cod<br>
                                Partido: $partido<br>
                                UF: $uf<br>
                                Legislatura: $legislatura<br>
                                Sexo: $sexo
                            </p> 
                        <a href='inicial.html'><button type='button' class='box_shadow'>Voltar ao CRUD</button></a>
                        </fieldset>";
                }else {
                    echo"<h2>Não foi encontrado nenhum deputado com nome '$busca'</h2>
                    <a href='inicial.html'><button type='button' class='box_shadow'>Voltar ao CRUD</button></a>";
                    
                }
                break;
            }
        case 3://lista
            $sql = "SELECT * FROM deputados";//código para exibir todos os dados
            $dados = mysqli_query($database, $sql); //rodar código na database
            $quant = mysqli_num_rows($dados); //no. de respostas
            
            if ($quant > 0) {//caso existam deputados cadastrados
                for ($contador = 0; $quant > $contador; $contador++) {//loop para listagem
                    $row = mysqli_fetch_array($dados);
                    $cod = $row['cod_deputado'];
                    $nome = $row['nome'];
                    $partido = $row['partido'];
                    $uf = $row['uf'];
                    $sexo = $row['sexo'];
                    $legislatura = $row['legislatura'];
                    echo "
                            <p>
                                Deputado: $nome<br>
                                Código: $cod<br>
                                Partido: $partido<br>
                                UF: $uf<br>
                                Legislatura: $legislatura<br>
                                Sexo: $sexo
                            </p>";
                            if ($contador != ($quant-1)) {//linha menos no último Deputado
                                echo"<hr>";
                            }
                }
                echo "<a href='inicial.html'><button type='button' class='box_shadow'>Voltar ao CRUD</button></a>";
                break; 
            }else {//nenhum deputado cadastrado
                echo "<h2>Não existem deputados para serem listados</h2>
                <a href='inicial.html'><button  type='button' class='box_shadow'>Voltar</button></a>";
                break;
            }
        case 4://exclusão
            if ($visita == 1) {//primeira vez
    
                //interface de busca para exclusão
                echo"
                <form action='principal.php' method='get'>
                    <input type='hidden' name='visit' value='2'>
                    <input type='hidden' name='bot' value='$botao'>
                    <div>
                        <label>Código</label>
                        <input type='number' name='busca'>
                    </div> <br>
                    <button type='submit' class='box_shadow'>Excluir</button>
                    <a href='inicial.html'><button type='button' class='box_shadow'>Voltar</button></a>
                </form>
                ";
                break;
            } elseif ($visita == 2) {//segunda vez
                
                //variáveis
                $busca = $_GET['busca'];
                //filtrando dados da database
                $sql = "SELECT * FROM deputados WHERE cod_deputado = '$busca'";//filtro
                $dados = mysqli_query($database, $sql);//resposta filtro
                $quant = mysqli_num_rows($dados); //no. de respostas

                if ($quant > 0) {//filtro encontrado
                    //dados da database
                    $row = mysqli_fetch_array($dados);
                    $cod = $row['cod_deputado'];
                    $nome = $row['nome'];
                    $partido = $row['partido'];
                    $uf = $row['uf'];
                    $sexo = $row['sexo'];
                    $legislatura = $row['legislatura'];
                    
                    //confirmação exclusão
                    echo"
                    <fieldset class='fieldsetadd'>
                    <legend><h2>Você deseja excluir esse deputado?</h2></legend>
                        <p>
                            Deputado:$nome<br>
                            Código:$cod<br>
                            Partido:$partido<br>
                            UF:$uf<br>
                            Legislatura:$legislatura<br>
                            Sexo:$sexo
                        </p> 
                    <form action='principal.php' method='get'>
                        <input type='hidden' name='nome' value='$nome'>
                        <input type='hidden' name='cod' value='$cod'>
                        <input type='hidden' name='busca' value='$busca'>
                        <input type='hidden' name='bot' value='$botao'>
                        <button type='submit' name='visit' class='box_shadow' value='3'>Excluir</button>
                        <a href='inicial.html'><button type='button' class='box_shadow'>Voltar ao CRUD</button></a>
                    </form>
                    </fieldset>";
                    break;
                } else {//filtro não encontrado
                    echo "
                    <h2>Não existem deputados com este código</h2>
                    <a href='inicial.html'><button  type='button' class='box_shadow'>Voltar ao CRUD</button></a>";
                    break;    
                }
            } else {
                
                //variáveis
                $busca = $_GET['busca'];
                $cod = $_GET['cod'];
                $nome = $_GET['nome'];
                
                //excluindo
                $sql = "DELETE FROM deputados WHERE cod_deputado = '$busca'";
                $exclusão = mysqli_query($database, $sql);
                
                //exibição
                echo "<h2>O deputado $nome de código $cod foi excluido</h2>
                <a href='inicial.html'><button type='button' class='box_shadow'>Voltar ao CRUD</button></a>";
                break;
            }
        case 5://alteração
            if ($visita == 1) {//primeira vez (busca)
            //interface busca para alteração
                echo"
                <form action='principal.php' method='get'>
                    <input type='hidden' name='visit' value='2'>
                    <input type='hidden' name='bot' value='$botao'>
                    <div>
                        <label>Código</label>
                        <input type='number' name='busca'>
                    </div> <br>
                    <button type='submit' class='box_shadow'>Pesquisar</button>
                    <a href='inicial.html'><button type='button' class='box_shadow'>Voltar</button></a>
                </form>
                ";
                break;
            } elseif ($visita == 2) {//segunda vez (resultado busca)
                //variáveis
                $busca = $_GET['busca'];
                //filtrando dados da database
                $sql = "SELECT * FROM deputados WHERE cod_deputado = '$busca'   ";//filtro
                $dados = mysqli_query($database, $sql);//resposta filtro
                $quant = mysqli_num_rows($dados); //no. de respostas
                
                if ($quant > 0) { //se existirem dados da busca
                    $row = mysqli_fetch_array($dados);
                    $cod = $row['cod_deputado'];
                    $nome = $row['nome'];
                    $partido = $row['partido'];
                    $uf = $row['uf'];
                    $sexo = $row['sexo'];
                    $legislatura = $row['legislatura'];
                    //exibição busca
                    echo "
                    <fieldset class='fieldsetadd'>
                    <legend><h2>Você deseja alterar os dados desse deputado?</h2></legend>
                        <p>
                            Deputado: $nome<br>
                            Código: $cod<br>
                            Partido: $partido<br>
                            UF: $uf<br>
                            Legislatura: $legislatura<br>
                            Sexo: $sexo
                        </p> 
                    <form action='principal.php' method='get'>
                        <input type='hidden' name='nome' value='$nome'>
                        <input type='hidden' name='cod' value='$cod'>
                        <input type='hidden' name='bot' value='$botao'>
                        <button type='submit' name='visit' class='box_shadow' value='3'>Alterar</button>
                        <a href='inicial.html'><button type='button' class='box_shadow'>Voltar ao CRUD</button></a>
                    </form>
                    </fieldset>";
                    break;
                }else { //nenhum resultado da busca
                    echo"<h2>Não existe nenhum deputado com nome '$busca'</h2>
                    <a href='inicial.html'><button type='button' class='box_shadow'>Voltar ao CRUD</button></a>";
                    
                }
                break;
            } elseif ($visita == 3) { //terceira vez (alterando dados)
                
                //variáveis
                $botao = $_GET['bot'];
                $nome = $_GET['nome'];
                $cod = $_GET['cod'];
                //form alteração
                echo"
                <fieldset class='fieldsetadd'>
                    <h2>Deputado atual: $nome (código $cod)</h2>
                    <form action='principal.php' method='get'>
                        <input type='hidden' name='visit' value='4'>
                        <input type='hidden' name='bot' value='$botao'>
                        <input type='hidden' name='cod' value='$cod'>
                        <div>
                            <label>Nome</label>
                            <input type='text' name='nome'>
                        </div> <br>
                        <div>
                            <label>Partido</label>
                            <input type='text' name='partido'>
                        </div> <br>
                        <div>
                            <label>Unidade Federativa</label>
                            <select name='uf' class='box_shadow'>
                                <option value='AC'>Acre</option>
                                <option value='AL'>Alagoas</option>
                                <option value='AP'>Amapá</option>
                                <option value='AM'>Amazonas</option>
                                <option value='BA'>Bahia</option>
                                <option value='CE'>Ceará</option>
                                <option value='DF'>Distrito Federal</option>
                                <option value='ES'>Espirito Santo</option>
                                <option value='GO'>Goiás</option>
                                <option value='MA'>Maranhão</option>
                                <option value='MS'>Mato Grosso do Sul</option>
                                <option value='MT'>Mato Grosso</option>
                                <option value='MG'>Minas Gerais</option>
                                <option value='PA'>Pará</option>
                                <option value='PB'>Paraíba</option>
                                <option value='PR'>Paraná</option>
                                <option value='PE'>Pernambuco</option>
                                <option value='PI'>Piauí</option>
                                <option selected value='RJ'>Rio de Janeiro</option>
                                <option value='RN'>Rio Grande do Norte</option>
                                <option value='RS'>Rio Grande do Sul</option>
                                <option value='RO'>Rondônia</option>
                                <option value='RR'>Roraima</option>
                                <option value='SC'>Santa Catarina</option>
                                <option value='SP'>São Paulo</option>
                                <option value='SE'>Sergipe</option>
                                <option value='TO'>Tocantins</option>
                            </select>
                        </div> <br>
                        <div>
                            <label>Legislatura</label>
                            <select name='legislatura' class='box_shadow'>
                                <option value='1ª'>1ª Legislatura (1826 - 1829)</option>
                                <option value='2ª'>2ª Legislatura (1830 - 1833)</option>
                                <option value='3ª'>3ª Legislatura (1834 - 1837)</option>
                                <option value='4ª'>4ª Legislatura (1838 - 1841)</option>
                                <option value='5ª'>5ª Legislatura (1843 - 1844)</option>
                                <option value='6ª'>6ª Legislatura (1845 - 1847)</option>
                                <option value='7ª'>7ª Legislatura (1848 - 1849)</option>
                                <option value='8ª'>8ª Legislatura (1850 - 1852)</option>
                                <option value='9ª'>9ª Legislatura (1853 - 1856)</option>
                                <option value='10ª'>10ª Legislatura (1857 - 1860)</option>
                                <option value='11ª'>11ª Legislatura (1861 - 1863)</option>
                                <option value='12ª'>12ª Legislatura (1864 - 1866)</option>
                                <option value='13ª'>13ª Legislatura (1867 - 1868)</option>
                                <option value='14ª'>14ª Legislatura (1869 - 1872)</option>
                                <option value='15ª'>15ª Legislatura (1872 - 1875)</option>
                                <option value='16ª'>16ª Legislatura (1877 - 1878)</option>
                                <option value='17ª'>17ª Legislatura (1878 - 1881)</option>
                                <option value='18ª'>18ª Legislatura (1882 - 1884)</option>
                                <option value='19ª'>19ª Legislatura (1885 - 1885)</option>
                                <option value='20ª'>20ª Legislatura (1886 - 1889)</option>
                                <option value='21ª'>21ª Legislatura (1890 - 1891)</option>
                                <option value='22ª'>22ª Legislatura (1891 - 1893)</option>
                                <option value='23ª'>23ª Legislatura (1894 - 1896)</option>
                                <option value='24ª'>24ª Legislatura (1897 - 1899)</option>
                                <option value='25ª'>25ª Legislatura (1900 - 1902)</option>
                                <option value='26ª'>26ª Legislatura (1903 - 1905)</option>
                                <option value='27ª'>27ª Legislatura (1906 - 1908)</option>
                                <option value='28ª'>28ª Legislatura (1909 - 1911)</option>
                                <option value='29ª'>29ª Legislatura (1912 - 1915)</option>
                                <option value='30ª'>30ª Legislatura (1915 - 1917)</option>
                                <option value='31ª'>31ª Legislatura (1918 - 1920)</option>
                                <option value='32ª'>32ª Legislatura (1921 - 1923)</option>
                                <option value='33ª'>33ª Legislatura (1924 - 1926)</option>
                                <option value='34ª'>34ª Legislatura (1927 - 1929)</option>
                                <option value='35ª'>35ª Legislatura (1930 - 1930)</option>
                                <option value='36ª'>36ª Legislatura (1933 - 1934)</option>
                                <option value='37ª'>37ª Legislatura (1934 - 1937)</option>
                                <option value='38ª'>38ª Legislatura (1946 - 1951)</option>
                                <option value='39ª'>39ª Legislatura (1951 - 1955)</option>
                                <option value='40ª'>40ª Legislatura (1955 - 1959)</option>
                                <option value='41ª'>41ª Legislatura (1959 - 1963)</option>
                                <option value='42ª'>42ª Legislatura (1963 - 1967)</option>
                                <option value='43ª'>43ª Legislatura (1967 - 1970)</option>
                                <option value='44ª'>44ª Legislatura (1971 - 1974)</option>
                                <option value='45ª'>45ª Legislatura (1975 - 1978)</option>
                                <option value='46ª'>46ª Legislatura (1979 - 1983)</option>
                                <option value='47ª'>47ª Legislatura (1983 - 1987)</option>
                                <option value='48ª'>48ª Legislatura (1987 - 1991)</option>
                                <option value='49ª'>49ª Legislatura (1991 - 1995)</option>
                                <option value='50ª'>50ª Legislatura (1995 - 1999)</option>
                                <option value='51ª'>51ª Legislatura (1999 - 2003)</option>
                                <option value='52ª'>52ª Legislatura (2003 - 2007)</option>
                                <option value='53ª'>53ª Legislatura (2007 - 2011)</option>
                                <option value='54ª'>54ª Legislatura (2011 - 2015)</option>
                                <option value='55ª'>55ª Legislatura (2015 - 2019)</option>
                                <option selected value='56ª'>56ª Legislatura (2019 - 2023)</option>
                            </select>
                        </div> <br>
                        <div>
                            <label>Sexo</label>
                            <input type='hidden' name='sexo' value=''>
                            <input type='radio' name='sexo' value='Masculino' class='box_shadow'>Masculino
                            <input type='radio' name='sexo' value='Feminino' class='box_shadow'>Feminino
                        </div>
                        <div id='botpag'>
                            <button type='submit' class='box_shadow'>Alterar</button>
                            <a href='inicial.html'><button type='button' class='box_shadow'>Voltar</button></a>
                        </div>                   
                    </form>
                </fieldset>";
                break;
            } elseif ($visita == 4) {
                
                //salvando dados como variáveis
                $cod = $_GET['cod'];//continua o mesmo
                $nome = $_GET['nome'];
                $partido = $_GET['partido'];
                $uf = $_GET['uf'];
                $sexo = $_GET['sexo'];
                $legislatura = $_GET['legislatura'];
                
                //atualizando dados na database
                $sql = "UPDATE deputados SET nome = '$nome', partido = '$partido', uf = '$uf', sexo = '$sexo', legislatura = '$legislatura' WHERE cod_deputado = $cod";
                $stat = mysqli_query($database, $sql);
                /*mensagem cadastramento*/
                echo "
                <h1>O de código $cod foi atualizado</h1>
                <h2>Seus dados agora são:</h2>
                <fieldset id='fieldsetdados'>
                    <p>
                        Código: $cod<br>
                        Nome: $nome<br>
                        Partido: $partido<br>
                        UF: $uf<br>
                        Legislatura: $legislatura<br>
                        Sexo: $sexo
                    </p>  
                </fieldset><br>
                <a href='inicial.html'><button type='button' class='box_shadow'>Voltar ao CRUD</button></a>
                ";
                }
            break;
    } 
    //fecha fieldset   
    if ($fieldset == true && $visita == 1) {
            echo"</fieldset>"; //fecha fieldset (se primeira vez)
    }
    ?>
    <footer>
        <br>
        <p class="textofooter">Atividade avaliativa do primeiro bimestre do quarto período técnico em informática integrado ao ensino médio do IFRJ, da disciplina Desenvolvimento Web</p><br>
        <p class="textofooter">Caso queira entrar em contato, mande um e-mail para ryanfcosta9@gmail.com, utilize a plataforma do classroom ou me procure pelo campus!</p><br>
        <p class="textofooter">Todos os códigos e páginas foram feitos por Ryan Ferreira Costa</p><br>
    </footer>
</body>
</html>