<body>
    <div class="row">
        <div class="col-md-12">
            <h1>Instruções...</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h2>Concluí o programa pedido no desafio. Mas como a autenticação pelo token não funcionou, fiz uma simulação com dados fictícios.</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <ol>
                <li>Faça o clone ou o download do repositório</li>
                <li>Instale o Apache, o PHP, o MySQL e o Composer no computador. Execute o MySQL e logue nele.</li>
                <li>Crie no MySQL um banco de dados.
                    <br>Exemplo: CREATE DATABASE freegow;</li>
                <li>Importe para esse banco, o conteúdo do arquivo feegow-challenge.sql;</li>
                <li>Na linha de comando, entre na pasta do programa descompactado (se fez o download ele virá compactado em ZIP);</li>
                <li>Digite:
                    <br>composer update</li>
                <li>Copie o arquivo .env.example para .env nessa mesma pasta e configure com os dados do banco de dados, as variáveis:
                    <br>DB_DATABASE
                    <br>DB_USERNAME
                    <br>DB_PASSWORD</li>
                <li>E finalmente digite:
                    <br>php artisan serve;</li>
                <li>Acesse de um navegador qualquer o endereço:
                    <br>http://localhost:8000</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h2>Considerações</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <ol>
                <li>Uso Bootstrap e JQuery no frontend com Ajax. Para requisições POST, não consigo fazer por JQuery, portanto usei Javascript Fetch - que já sei de antemão que não funciona no Internet Explorer.</li>
                <li>Definitivamente não consigo usar Ajax acessando um servidor externo com autenticação. Eu normalmente uso a API REST para recuperar dados de outros servidores, mas não estou habituado a fazer isso por Ajax.</li>
                <li>Consequentemente, esse programa não é funcional com todos os requisitos exigidos no exercício. Não consegui acessar sua API como solicitado.</li>
                <li>Resumo, isto é uma simulação com dados fictícios.</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <img src="feegow-challenger.png"/>
        </div>
    </div>
</body>