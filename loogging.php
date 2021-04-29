<? php


function  logMsg ( $ msg , $ level = 'info' , $ file = 'main.log' )
{
    // variável que vai armazenar o nível do log (INFO, WARNING ou ERROR)
    $ levelStr = '' ;

    // verifica o nível do log
    switch ( $ nível )
    {
        caso  'info' :
            // nível de informação
            $ levelStr = 'INFO' ;
            pausa ;

        caso  'aviso' :
            // nível de aviso
            $ levelStr = 'AVISO' ;
            pausa ;

        caso  'erro' :
            // nível de erro
            $ levelStr = 'ERROR' ;
            pausa ;
    }

    date_default_timezone_set ( 'America / Sao_Paulo' );
    // dados atuais
    $ data = data ( 'Ymd H: i: s' );

    // formata a mensagem do log
    // 1o: dados atuais
    // 2o: nível da mensagem (INFO, WARNING ou ERROR)
    // 3o: a mensagem propriamente dita
    // 4o: uma quebra de linha
    $ msg = sprintf ( "[% s] [% s]:% s% s" , $ date , $ levelStr , $ msg , PHP_EOL );

    // refer o log no arquivo
    // é necessário usar FILE_APPEND para que a mensagem seja escrita no final do arquivo, preservando o conteúdo antigo do arquivo
    file_put_contents ( $ file , $ msg ,   FILE_APPEND );

    inclui  'connect.php' ;

    $ idlogging = 4 ;

    $ sqlinsertlogging = "inserir nos valores de registro (dateLogging, nível, msg, fk_reg) ('$ date', '$ levelStr', '$ msg', '$ idlogging')" ;

    // $ sqlinsertlogging = "inserir nos valores de registro (dateLogging, nível, msg, fk_reg) ('2021-04-29 11:39:42', 'INFO', 'Teste DB', 3)";
    mysqli_query ( $ con , $ sqlinsertlogging );

    // CRIA o registro da tabela (
        // idLogging da chave primária auto_increment,
       // dateLogging datetime not null,
        // nível varchar (100) não nulo,
       // msg varchar (1000) não nulo,
       // fk_reg int not null,
       // Chave estrangeira (fk_reg) REFERÊNCIAS reg (id)
    //);


}

logMsg ( "Executando a tarefa X ..." );

logMsg ( "Isto é um aviso .... a operação X pode falhar ..." , 'aviso' );

logMsg ( "Isto é um erro. Uma operação X falhou" , 'erro' );

?> 
