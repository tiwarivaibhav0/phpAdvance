<style>
th{
    background-color:black;
    color:white;
}


</style>



<?php



$products = array(
    "Electronics" => array(
      "Television" => array(
        array(
        "id" => "PR001",
        "name" => "MAX-001",
        "brand" => "Samsung"
        ),
        array(
        "id" => "PR002",
        "name" => "BIG-301",
        "brand" => "Bravia"
        ),
        array(
        "id" => "PR003",
        "name" => "APL-02",
        "brand" => "Apple"
        )
      ),
      "Mobile" => array(
        array(
        "id" => "PR004",
        "name" => "GT-1980",
        "brand" => "Samsung"
        ),
        array(
        "id" => "PR005",
        "name" => "IG-5467",
        "brand" => "Motorola"
        ),
        array(
        "id" => "PR006",
        "name" => "IP-8930",
        "brand" => "Apple"
        )
      )
    ),
    "Jewelry" => array(
      "Earrings" => array(
        array(
        "id" => "PR007",
        "name" => "ER-001",
        "brand" => "Chopard"
        ),
        array(
        "id" => "PR008",
        "name" => "ER-002",
        "brand" => "Mikimoto"
        ),
        array(
        "id" => "PR009",
        "name" => "ER-003",
        "brand" => "Bvlgari"
        )
      ),
      "Necklaces" => array(
        array(
        "id" => "PR010",
        "name" => "NK-001",
        "brand" => "Piaget"
        ),
        array(
        "id" => "PR011",
        "name" => "NK-002",
        "brand" => "Graff"
        ),
        array(
        "id" => "PR012",
        "name" => "NK-003",
        "brand" => "Tiffany"
        )
      )
    )
        );
        echo("<table>");
        echo("<tr><th>Category</th><th>Sub-Category</th><th>ID</th><th>Name</th><th>Brand</th></tr>");

 foreach($products as $cat1 =>$val1){
     
              
    foreach($val1 as $sub_cat=>$val2){
        

        foreach($val2 as $sub_cat2 =>$val3)
        {   
            echo("<tr>");
            echo("<td> $cat1</td>");
            echo("<td> $sub_cat</td>");
            //echo("<td> $sub_cat2 </td>");
             if($val3['id']=="PR003"){
                 unset($products[$cat1][$sub_cat][$sub_cat2]);
             }
            foreach($val3 as $sub_cat3=> $final_vall ){
                
              
                
                
                echo("<td> $final_vall </td>");
                
                  
                
             }
             echo("</tr>");
             
           

        }
       
       
        
    }
   
   


 }
 echo("</table>");

 echo("<table>");
 echo("<tr><th>Category</th><th>Sub-Category</th><th>ID</th><th>Name</th><th>Brand</th></tr>");


 echo("<br><br><br>");




foreach($products as $cat1 =>$val1){

       
foreach($val1 as $sub_cat=>$val2){
 

 foreach($val2 as $sub_cat2 =>$val3)
 {   
     echo("<tr>");
     echo("<td> $cat1</td>");
     echo("<td> $sub_cat</td>");
     //echo("<td> $sub_cat2 </td>");
     
     foreach($val3 as $sub_cat3=> $final_vall ){
         
       
         
         
         echo("<td> $final_vall </td>");
         
           
         
      }
      echo("</tr>");
      
    

 }


 
}




}
echo("</table>");



?>