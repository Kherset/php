<?php
// $word = readline("tapez un mot\n");
// $reverseword = strrev($word);

// if (strtolower($word) == strtolower($reverseword)) {
//   echo "C'est un pallindrome";
// } else {
//   echo "Ce n'est un pallindrome";
// }

$notes = [10, 20, 10];
$moyenne = array_sum($notes) / count($notes);
echo round($moyenne);
?>
