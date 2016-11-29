<html>
  <head>
    
    <title>  BLA BLA BLA</title>
    
     </head>
  <?php
  $xmlDoc = new DOMDocument();
  $xmlDoc->load("books.xml");
  $x $xmlDoc->documentElement();
  foreach ($x->childNodes as $item){
  print $item->nodeName . "=" . $item->nodeValue . "<br/>";}
  ?>
  
  <body>
      
    </body>
    
    
    
    
    
    
    
    
    
 
