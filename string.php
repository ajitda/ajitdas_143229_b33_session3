<?php
echo 'this is a simple string ';
echo '<br>';
echo 'You can also have embedded newlines in
strings this way as it is
okay to do';
echo '<br>';
//outputs : Arnold once  said : "I'll be back "

echo 'Arnold once said: "I\'ll be back"';
echo '<br>';
//outputs : You deleted C:\*.*?
echo 'You deleted C:\\*.*?';
echo '<br>';
//outputs : You deleted C:\*.*?
echo 'You deleted C:\*.*?';
echo '<br>';
//outputs : Variables do not $expand $either
echo 'Variables do not $expand $either';

?>

<?php

echo "this is a double quoted string";

?>


<?php

$str = <<<EOD
Example os string
spanning multiple lines
uing heredoc syntax.
EOD;

echo $str;

?>


<?php

$str = <<<'EOD'
Example os string
spanning multiple lines
uing nowdoc syntax.
EOD;

echo $str;

?>












