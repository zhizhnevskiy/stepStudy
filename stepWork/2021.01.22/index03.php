<?php
echo htmlspecialchars("<a href='test'>Test</a>") . "<br>";

$text = "
<p>Параграф</p>
<!--Comment-->
Ещё <b>немного</b> текста";

echo strip_tags($text);
echo "\n\n-------\n";
echo strip_tags($text,'<p><b>');