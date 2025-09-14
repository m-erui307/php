<?php
function score($score1, $score2, $score3)
{
  $value = $score1 + $score2 + $score3;
  return $value;
}

$total = score ();
echo $total;

