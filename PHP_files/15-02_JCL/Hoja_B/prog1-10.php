<?php

// matrix numbers
$mat = array(6,8,-2,13,11,12,2,5);

//kernel1
function Process1($mat){
    foreach ($mat as $value) {
        $value=$value+$mat;
    }
    return $value;
}



//------------------------------------------------
//kernel2
function Process2($mat){
    for ($i=0; $i < 12; $i++) {
        echo "<table border='2'><tr><td> " . $mat . "</td></tr></table>";
        
    }
    return $mat;
}

//---------------------------------------------
function Process3($mat){
    for ($i=0; $i < 12; $i++) {
        if ($mat[$i]>0) {
            $media=($mat+$mat)/2;
        } 
    }
    return $media;
}

//------------------------

function Process4($mat){
    for ($i=0; $i < 12; $i++) { 
        if ($mat<$mat) {
            $small=$mat<$mat;
        }
    }
    return $small;
}

//---------------------------------

function Process5($mat){
    for ($i=0; $i < 12; $i++) { 
        $last_number=$mat[:3];
    }
    return $last_number;   
}

//----------------------------

function Process6($mat){
    for ($i=0; $i < 12; $i++) { 
        $big__number=$mat<$mat;
    }
    return $big__number;
}

//---------------------------------------
/*
function Process7($mat){
    for ($i=0; $i < 12; $i++) { 
        $big__number=$mat<$mat;
    }
    return $big__number;
}
no disponible
*/
//-------------------------------------

function Process8($mat){
    for ($i=0; $i < 12; $i++) {
        if ($mat<$mat) {
            echo "sorted in ascend";
        }else{
            echo "no sorted";
        }
    }
}
//------------------------------------
function Process9($mat){
    foreach ($mat as $value) {
        $value=$value+$mat;
    }
    return $value;
}

//------------------------------
function Process10($mat) {
    for ($i=0; $i < 12; $i++) { 
        if ($mat<0) {
            $mat=[0];
        }
    }
    
}




//-------------------------------------------------
//interface1.exe
function Visual1($mat){
    $result=Process1($mat);
    echo $result;
    
}
//------------------------------------------------

//interface2.exe
function Visual2($mat){
    echo "<table><tr><td> " . Process2($mat) . " </td></tr></table>";
    
}

//interface3.exe
function Visual3($mat){
    echo Process3($mat);
    
}


//interface4.exe
function Visual4($mat){
    echo Process4($mat);
    
}


//interface5.exe
function Visual5($mat){
    echo Process5($mat);
    
}

//interface6.exe
function Visual6($mat){
    echo Process6($mat);
    
}

/*
//interface7.exe
function Visual7($mat){
    echo Process7($mat);
}
*/

//interface2.exe
function Visual8($mat){
    echo Process8($mat);
    
}

//interface2.exe
function Visual9($mat){
    echo Process9($mat);
    
}


//interface2.exe
function Visual10($mat){
    echo Process10($mat);
    
}


// interface
Visual1($mat);
Visual2($mat);
Visual3($mat);
Visual4($mat);
Visual5($mat);
Visual6($mat);
//Visual7()
Visual8($mat);
Visual9($mat);
Visual10($mat);


?>