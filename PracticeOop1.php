<?php
    class ExerciseString
    {
        //Properties
        public $ckeck1;
        public $ckeck2;

        //Methods
        function getCheck1() 
        {
            return $this->check1;
        }

        function getCheck2 () 
        {
            return $this->check2;
        }
        
        public function readFile($s) 
        {
            $File = fopen($s, 'r');
            if (!$File) {
                echo 'Not success';
            } else {
                $data = fread($File, filesize($s));
                return $data;
            }
            fclose($File);
        }

        function checkValidString ($str) 
        {
            if (strstr($str, "book") == true) {
                if (strstr($str, "restaurant") == true) {
                    return false;
                }
                    return true;
            } else {
                if (strstr($str, "restaurant") == true) {
                    return true;
                }
                    return false;
            }
        }

        public function writeFile($file) 
        {
            $rs = fopen("result_file.txt", "w");
            fwrite($rs, $file);
            fclose($rs);
        }
    }

    $object1 = new ExerciseString();
    $object1->check1 = $object1->checkValidString($object1->readFile('file1.txt'));
    var_dump($object1->getCheck1());    //bool(true);
    echo "</br>";

    $object1->check2 = $object1->checkValidString($object1->readFile('file2.txt'));
    var_dump($object1->getCheck2()); // bool(false)

    $rs1 = $object1->getCheck1() ? "Chuỗi 1 là chuỗi hợp lệ" : "Chuỗi 1 là chuỗi ko hợp lệ";
    $rs2 = $object1->getCheck2() ? "Chuỗi 2 là chuỗi hợp lệ chuỗi bao gồm".substr_count(file_get_contents("file2.txt"),".")." câu" : "Chuỗi 2 là chuỗi không hợp lệ chuỗi bao gồm ".substr_count(file_get_contents("file2.txt"),".")." câu";

    $object1->writeFile($rs1);
    $object1->writeFile($rs2);
