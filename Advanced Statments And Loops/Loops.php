<?php

class advancedIniterators{

    /**
     * Using advanced initerators to go through collections of data
     *
     * @return bool
     */
    public function advancedIniterators()
    {
        //-- FOREACH LOOPS -------------------------------
        $array = array(4, 5, 6, 7, 3, 2, 1);

        foreach ($array as $singleNumber) {
            print_r($arr); //Output: '4, 5, 6, 7, 3, 2, 1'
        }

        $arr = array(1, 2, 3, 4);

        foreach ($arr as $key => $value) {
            echo "{$key} => {$value} ";

            print_r($arr);
            // output:
            // 0 => 2 Array ( [0] => 2, [1] => 4, [2] => 6, [3] => 2 )
            // 1 => 4 Array ( [0] => 2, [1] => 4, [2] => 6, [3] => 4 )
            // 2 => 6 Array ( [0] => 2, [1] => 4, [2] => 6, [3] => 6 )
            // 3 => 6 Array ( [0] => 2, [1] => 4, [2] => 6, [3] => 6 )
        }
        
        /*
            Using the above foreach loop means that the foreach statement goes through
            the data collection and uses the key position of the valueof the array.  
        */

        //-- FOR LOOPS -------------------------------

        $array = array(1, 5, 8, 9);

        //for loops are used when the iterator is useful to the developer when looping 
        //through the data collection. Array index always starts at 0.
        for($i = 0; $i < count($array); $i++){
            //using the i as the iterator or index of the array,
            //not the value which is in the array but the position.
            if($i == 2){
                print_r($array[$i]); //output: 8
            }
        }

        return true;
    }
} 

?>