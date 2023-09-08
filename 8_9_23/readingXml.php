<?php

$xml_reader = simplexml_load_file ("data.xml");
print_r($xml_reader)."<br>";

foreach($xml_reader as $keys=>$values){
    echo $values."<br>" ;
}

$xml_data=<<<ST
<coder>

<name>Yustave</name>
<age> 19 </age>
<gender>Male</gender>

</coder>
ST;

$data = simplexml_load_string($xml_data);
print_r($data)."<br>";
foreach($data as $keys=>$values){
    echo $values."<br>";
}
?>