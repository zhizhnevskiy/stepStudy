<?php
$site = <<<"TEXT"
<p><b>Это жирный текст</b></p>
<p><strong>Это strong-текст</strong></p>
<p><big>Это большой текст</big></p>
<p><em>Это акцентированный текст</em></p>
<p><i>Это курсив</i></p>
<p><small>Это маленький текст</small></p>
<p>Это<sub> подстрочный</sub> и <sup>надстрочный</sup>текст</p>
TEXT;
echo strip_tags($site) . "<br>";

$text = "Каждый охотник желает знать, где сидит фазан";
$newText = wordwrap($text, 14, "<br>\n", 1);
echo "$newText\n<br>";

echo nl2br("Richard\n Of\n York\n Gave\n Battle\n In\n Vain") . "<br>";

echo htmlspecialchars("<a href='test'>Test</a>");