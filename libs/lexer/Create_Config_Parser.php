<?php
// Create Parser
passthru('C:\wamp\bin\php\php5.2.8\php ./ParserGenerator/cli.php internal.configfileparser.y');

// Create Lexer
require_once './LexerGenerator.php';
$lex = new PHP_LexerGenerator('internal.configfilelexer.plex');
copy('internal.configfilelexer.php','../sysplugins/internal.configfilelexer.php');
copy('internal.configfileparser.php','../sysplugins/internal.configfileparser.php');

?>
