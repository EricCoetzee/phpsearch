 <?php
        if(isset($_POST['submit'])){
            $connection = new mysqli($host = "localhost", $username = "root", $password = "",  $dbname = "maxn");
            $q = $connection->real_escape_string($_POST['q']);
            $column = $connection->real_escape_string($_POST['column']);


        if($column == "" || ($column != "classifieds" && $column != "directories" && $column != "events")){
            $column = "post_title"; 
            $sql = $connection->query( $query = "SELECT * FROM posts WHERE  $column LIKE '%$q%'");

            if($sql->num_rows > 0){
                while($data = $sql->fetch_array())
                echo $data['post_title'] . "<br>" . $data['post_content'] . '<br>';
            
        }else{
            echo "Your search doesn't match any of our data!";
        }

        }
        if($column == "classifieds"){
            $column = "post_title"; 
           $sql = $connection->query( $query = "SELECT * FROM posts WHERE post_type = 'classifieds' AND $column LIKE '%$q%'");

           if($sql->num_rows > 0){
               while($data = $sql->fetch_array())
               echo $data['post_title'] . "<br>" . $data['post_content'] . '<br>';
           
       }else{
           echo "No Classified Ad with the name $q found on or database!";
       }

       }
       if($column == "directories"){
        $column = "post_title"; 
       $sql = $connection->query( $query = "SELECT * FROM posts WHERE post_type = 'directories' AND $column LIKE '%$q%'");

       if($sql->num_rows > 0){
           while($data = $sql->fetch_array())
           echo $data['post_title'] . "<br>" . $data['post_content'] . '<br>';
       
   }else{
       echo "No Business Directory with the name $q found on or database!";
   }

   }
   if($column == "events"){
    $column = "post_title"; 
   $sql = $connection->query( $query = "SELECT * FROM posts WHERE post_type = 'events' AND $column LIKE '%$q%'");

   if($sql->num_rows > 0){
       while($data = $sql->fetch_array())
       echo $data['post_title'] . "<br>" . $data['post_content'] . '<br>';
   
}else{
   echo "No Event with the name $q found on or database!";
}

}
    }


?>