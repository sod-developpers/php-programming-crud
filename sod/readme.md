 insert data to the database
 $sql = "INSERT INTO `students`(`names`, `level`, `ages`) VALUES ('John parker','LEVEL 6','67')";

 delete
 $sql = "delete from students where id = 3";
 $sql = "delete from students";

 update
 $sql = "update students set names = 'john doe', level = 'LEVEL 4 SOD' where id = 1";

 if($conn->query($sql)) {
     print "Query executed successfuly";
 } else {
     echo "Failed to execute query";
 }