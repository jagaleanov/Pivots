<?php
function getPivots() {
    $pivots = [];
    $number = 1;
    $sumPrevious = 0;
    $sumNext = 0;
    $successor = 2;

    while (count($pivots) < 10) {
        $sumPrevious += $number - 1;
        $sumNext -= ($number == 1 ? 0 : $number);
        while ($sumNext + $successor <= $sumPrevious) {
            $sumNext += $successor;
            $successor++;
        }
        
        if ($sumPrevious > 0 && $sumPrevious == $sumNext) {
            $pivots[] = $number;
        }
        $number++;
    }
    return $pivots;
}
print_r(getPivots());
//Array ( [0] => 6 [1] => 35 [2] => 204 [3] => 1189 [4] => 6930 [5] => 40391 [6] => 235416 [7] => 1372105 [8] => 7997214 [9] => 46611179 )