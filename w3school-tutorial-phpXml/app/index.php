<?php

$conn = new mysqli('db','root','arifoglu','mysql');

if($conn->connect_error)
{
    die("connection failed" . $conn->connect_error );
}
echo "connected succesfully!";
echo "<br>" ;

//
$xml = simplexml_load_file("note.xml") or die("Error: Cannot create an object");
echo $xml->to. "<br>" ;
echo $xml->from ."<br>";
echo $xml->heading ."<br>";
echo $xml->body ."<br>";

$xml = simplexml_load_file("books.xml") or die("Error: Cannot create an object");
echo $xml->book[0]->title ."<br>" ;
echo $xml->book[1]->title ."<br>" ;

foreach($xml->children() as $books ){
    echo $books->title . ",";
    echo $books->author . ",";
    echo $books->year . ",";
    echo $books->price . ","; 
}
echo "<br>";

echo $xml->book[0]['category']. "<br>";
echo $xml->book[1]->title['lang'] . "<br>";

//////////////////////////////////////////////////////XmL expat parser

$parser =xml_parser_create();

// Function to use at the start of an element
function start($parser,$element_name,$element_attrs) {
    switch($element_name) {
      case "NOTE":
      echo "-- Note --<br>";
      break;
      case "TO":
      echo "To: ";
      break;
      case "FROM":
      echo "From: ";
      break;
      case "HEADING":
      echo "Heading: ";
      break;
      case "BODY":
      echo "Message: ";
    }
  }

// Function to use at th end of an element
function stop($parser,$element_name){
    echo "<br>" ;
}

// function to use when finding character data 
function char($parser,$data){
    echo $data;
}
// Specify element handler
xml_set_element_handler($parser,"start","stop");

// Specify data handler
xml_set_character_data_handler($parser,"char");

// Open XML file
$fp=fopen("note.xml","r");
// Read data
while ($data=fread($fp,4096)) {
    xml_parse($parser,$data,feof($fp)) or
    die (sprintf("XML Error: %s at line %d",
    xml_error_string(xml_get_error_code($parser)),
    xml_get_current_line_number($parser)));
  }
// Free the XML parser
xml_parser_free($parser);

echo "<br>" ;

/////////////////////////////////////////////////////////////XML DOM
$xmlDoc= new DOMDocument();
$xmlDoc->load("note.xml");

print $xmlDoc->saveXMl();



?>