<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Teste Oftalmológico</title>
        <meta charset="utf8"/>
        <style>
            *{
                    margin: 0;
                    padding: 0;
            }

            html, body{
                        height: 100%;
                        background-color: rgb(150, 150, 150);
                    }

          
         
            .grid{
                    display: grid;
                    grid-template-columns: 100px 100px;
                    justify-content: center;
                    padding: 50px;
                    grid-gap: 100px;
                    height: auto;
                   
                }

            button{
              margin: 50px 650px;
            }

            h1{
                text-align: center;
            }
        </style>
    </head>
    <body>
            <header>
                <h1>Teste Oftalmológico</h1>
            </header>
            <main>
                    <?php 
                        if(isset($_POST['acao'])){
                            $geoe = $_POST["geoe"];
                            $geod = $_POST["geod"];
                            $gcoe = $_POST["gcoe"];
                            $gcod = $_POST["gcod"];
                            @$grauesferico = $geoe + $geod;
                            @$graucilindrico = $gcoe + $gcod;

                            if($grauesferico <= -3 and $grauesferico >= -12){
                                echo "Sua lente é a Prime!!";
                            }
                            if($grauesferico <= -3 and $grauesferico >= -10 and $graucilindrico <= -0.25 and $graucilindrico >= -2){
                                echo "Sua lente é a Prime!!";
                            }
                            if($grauesferico <= -0.25 and $grauesferico >= -2.75 and $graucilindrico <= -0.25 and $graucilindrico >= -6){
                                echo "Sua lente é a Vision!!";
                            }
                            if($grauesferico <= -10.25 and $grauesferico >= -15 and $graucilindrico <= -0.25 and $graucilindrico >= -6){
                                echo "Sua lente é a Vision!!";
                            }
                        }

                    ?>
                
                    <form method="post">
                        <div class = 'grid'>
                            <div class = 'itens'>
                                <label for='quantity'>Grau esférico olho esquerdo:
                                    <input type="number" name='geoe' min='-15' max='0' step='0.25'/>
                                </label>
                            </div>
                            <div class = 'itens'>
                                <label for='quantity'>Grau esférico olho direito:
                                    <input type="number" name='geod' min='-15' max='0' step='0.25'/>
                                </label>
                            </div>
                            <div class = 'itens'>
                                <label for='quantity'>Grau cilíndrico olho esquerdo:
                                    <input type="number" name='gcoe' min='-6' max='0' step='0.25'/>
                                </label>
                            </div>
                            <div class = 'itens'>
                                <label for='quantity'>Grau cilíndrico olho direito:
                                    <input type="number" name='gcod' min='-6' max='0' step='0.25'/>
                                </label>
                            </div> 
                        </div> 
                            <button type="submit" name="acao">Verificar</button>
                       
                    </form>
               
            </main>
    </body>
</html>

