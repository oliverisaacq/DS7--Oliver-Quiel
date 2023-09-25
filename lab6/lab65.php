<?php

class ClaseBase {
    public function test(){
        echo "ClaseBase::test() llamada\n";
    }

    final public function masTests(){
        echo "ClaseBase::masTest() llamada\n";
    }
}

class ClaseHijo extends ClaseBase {
    public function masTest(){
        echo "ClaseHijo::masTest() llamada \n";
    }
}

?>