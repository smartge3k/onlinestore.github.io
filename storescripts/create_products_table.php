<?php
// This file is www.developphp.com curriculum material
// Written by Adam Khoury January 01, 2011
// http://www.youtube.com/view_play_list?p=442E340A42191003
// Connect to the MySQL database  
require "connect_to_mysql.php";  

$sqlCommand = "CREATE TABLE products (
		 		 id int(11) NOT NULL auto_increment,
				 product_name varchar(255) NOT NULL,
		 		 price varchar(16) NOT NULL,
				 details text NOT NULL,
				 category varchar(16) NOT NULL,
				 subcategory varchar(16) NOT NULL,
		 		 date_added date NOT NULL,
		 		 PRIMARY KEY (id),
		 		 UNIQUE KEY product_name (product_name)
		 		 ) ";
if (mysql_query($sqlCommand)){ 
    echo "Your products table has been created successfully!"; 
} else { 
    echo "CRITICAL ERROR: products table has not been created.";
}
?>