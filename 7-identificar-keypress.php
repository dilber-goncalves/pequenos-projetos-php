<?php
$fin = fopen('php://stdin', 'r');
stream_set_blocking($fin, 0);
system('stty cbreak -echo');

function translateKeypress($string) {
    switch ($string) {
      case "\033[A":
        return "UP";
      case "\033[B":
        return "DOWN";
      case "\033[C":
        return "RIGHT";
      case "\033[D":
        return "LEFT";
      case "\n":
        return "ENTER";
      case " ":
        return "SPACE";
      case "\010":
      case "\177":
        return "BACKSPACE";
      case "\t":
        return "TAB";
      case "\e":
        return "ESC";
     }
    return $string;
  }

while (1) {
  $keypress = fgets($fin);
  if ($keypress) {
    echo 'Key pressed: ' . translateKeypress($keypress) . PHP_EOL;
  }
}
?>