<?php

class Array_Summation
{
    /**
     * @param $start
     * @param $end
     * @return int|void
     */
    public static function sum($start,$end)
    {
        $numbers = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
        if ($start < 0 || $end < 0) {
            return -1;
        } else if ($start > $end) {
            return 0;
        } else {
            $startKey = array_keys($numbers, $start)[0];
            $endKey = array_keys($numbers, $end)[0] ?: end($numbers);
            $dataArray = array();
            foreach ($numbers as $key => $value) {
                if ($key >= $startKey && $key <= $endKey) {
                    $dataArray[$key] = $value;
                }
            }
        }
        //summation
        $total=0;
        foreach ($dataArray as $num) {
            $total+=$num;
        }
        // dump summation on the screen
        // use return $total to call total result
        var_dump($total);
    }

}
// pass testing values here
Array_Summation::sum(90,900);
