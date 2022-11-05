<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Container Docker com Apache2, PHP e MySQL</title>
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
        <style type="text/css">
            * {margin: 0; padding: 0}
            header {background-color: #00c; color: #eee; padding: 10px; text-align: center;}
            section {background-color: #eef; color: #003; font-size: 20px; margin: 20px; padding: 15px}
            p {margin-bottom: 10px}
            button {background-color: #30e; border: 0; border-radius: 20px; color: #eee; cursor: pointer; margin: 10px; padding: 10px 20px}
            button:hover {background-color: #30f}
            ul li {list-style-type: none;}
            .float-right {float: right}
            .text-center {text-align: center}
            .text-right {text-align: right}
            .display-flex {display: flex}
            .informations {display: none}
            .justify-content-center {justify-content: flex-center}
            .justify-content-end {justify-content: flex-end}
        </style>
    </head>
        
    <body>
        <main>
            <header>
                <h1>Container Docker com Apache2, PHP e MySQL</h1>
            </header>
            <section>
                <p class="text-center">
                    <?php echo "Se você consegue ler está mensagem corretamente sem nenhuma anormalidade,
                                significa que seu <strong>ambiente de desenvolvimento foi configurado com sucesso!</strong>"; ?>
                </p>
                <br /><br />
                <div class="display-flex justify-content-end">
                    <button onclick="showInformation()" id="btnShowOrHide">
                        Para ver as configurações da base de dados clique aqui
                    </button>
                </div>
            </section>
            
            <section class="informations">
                <ul>
                    <li>Item #1</li>
                    <li>Item #2</li>
                    <li>Item #3</li>
                </ul>
            </section>
        </main>
        <script type="text/javascript">
            var sectionInformation = document.querySelector('.informations')
            var buttonShowOrHide   = document.querySelector('#btnShowOrHide')

            function showInformation() {
                if (sectionInformation.style.display === "none") {
                    buttonShowOrHide.innerHTML = 'Clique aqui para ocultar as informações da base de dados'
                    sectionInformation.style.display = "block"
                } else {
                    buttonShowOrHide.innerHTML = 'Para ver as configurações da base de dados clique aqui'
                    sectionInformation.style.display = "none"
                }
            }
        </script>
    </body>
</html>
