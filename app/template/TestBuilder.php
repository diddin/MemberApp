<?php

namespace app\template\builder;

require '../../vendor/autoload.php';

writeln('BEGIN TESTING BUILDER PATTERN');
writeln('');

$pageBuilder = new HtmlPageBuilder();
$pageDirector = new HtmlPageDirector($pageBuilder);
$pageDirector->buildPage();
//$_page = $pageDirector->getPage();
//writeln($_page->showPage());
writeln('');

writeln('END TESTING BUILDER PATTERN');

function writeln($line_in) {
    echo $line_in."<br/>";
}