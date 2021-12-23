<?php
    function checkValidString ($str) {

        if (((strstr($str, "book") !== false) && (strstr($str, "restaurant") === false))
           || ((strstr($str, "book") === false) && (strstr($str, "restaurant") !== false))
        ) {
          return true;
        }
        return false;
     }

    //BaiTap1
    var_dump(checkValidString("I like going camping"));         //fale
    echo "</br>";
    var_dump(checkValidString("I have a book"));                //true
    echo "</br>";
    var_dump(checkValidString("I have dinner in a restaurant")); //true
    echo "</br>";
    var_dump(checkValidString("I have dinner in restaurant and go to bookstore")); //false
    echo "</br>";

    //BaiTap2
    function resultString ($s) {
        if (checkValidString($s) == true) {
            echo "Chuỗi hợp lệ chuỗi bao gồm ".substr_count(file_get_contents("file1.txt"),".")." câu";
        } else {
            echo "Chuỗi không hợp lệ";
        }
    }
    echo "</br>";
    resultString(file_get_contents("file1.txt")); //Chuỗi hợp lệ chuỗi bao gồm 4 câu
    echo "</br>";
    resultString(file_get_contents("file2.txt")); // Chuỗi không hợp lệ
    

