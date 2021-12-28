<?php
    function checkValidString ($str,$str1,$str2) 
    {
        if (((strstr($str, $str1) !== false) && (strstr($str, $str2) === false))
           || ((strstr($str, $str1) === false) && (strstr($str, $str2) !== false))) {
            return true;
        }
        return false;
     }

    //BaiTap1
    var_dump(checkValidString("I like going camping","book","restaurant"));         //fale
    echo "</br>";
    var_dump(checkValidString("I have a book","book","restaurant"));                //true
    echo "</br>";
    var_dump(checkValidString("I have dinner in a restaurant","book","restaurant")); //true
    echo "</br>";
    var_dump(checkValidString("I have dinner in restaurant and go to bookstore","book","restaurant")); //false
    echo "</br>";

    //BaiTap2
    function resultString ($s) 
    {
        if (checkValidString($s,$str1,$str2)) {
            echo "Chuỗi hợp lệ chuỗi bao gồm ".substr_count(file_get_contents("file1.txt"),".")." câu";
        } else {
            echo "Chuỗi không hợp lệ";
        }
    }
    echo "</br>";
    resultString(file_get_contents("file1.txt")); //Chuỗi hợp lệ chuỗi bao gồm 4 câu
    echo "</br>";
    resultString(file_get_contents("file2.txt")); // Chuỗi không hợp lệ
    

