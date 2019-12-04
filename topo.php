<?php
$array = array('Japan' => 'tokyo', 'Mexico' => 'mexico city', 'argentina' => 'buenos aires');
$aantal_correcte_antwoorden = 0;
foreach ($array as $land => $city)
{
  $gebruikers_antwoord;
  echo 'Welke hoofdstad heeft ' . $land . '?' . "\n";
  $gebruikers_antwoord = readline();
  CheckAntwoord($gebruikers_antwoord, $city);
}
echo 'Je hebt ' . $aantal_correcte_antwoorden . ' van de ' . count($array) . "\n";
function CheckAntwoord($string, $correcte_antwoord)
{
  global $aantal_correcte_antwoorden;
  if ($string == $correcte_antwoord)
  {
    echo "Correct! \n";
    $aantal_correcte_antwoorden++;
  }
  else
  {
    echo "Het correcte antwoord is: " . $correcte_antwoord . ' :(' . "\n";
  }
}
 ?>
