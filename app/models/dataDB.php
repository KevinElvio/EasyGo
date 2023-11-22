<?php

// class dataDB
// {
//     public function getAllData()
//     {
//         global $db;

//         $query = "SELECT * FORM tbl_user";
//         $result = $db->query($query);
//         $users = [] ;

//         if ($result->num_rows > 0)
//         {
//             while ($row = $result->fetch_assoc())
//             {
//                 $users[] = $row;
//             }
//         }

//         return $users;

//     }

//     public function createData($nama, $email, $password)
//     {
//         global $conn;

//         $db = "INSERT INTO tbl_user(name, username, email, password) VALUES (?, ?, ?, ?)";

//         $stmt = $conn->prepare($db);

//         $stmt->bind_Param("ssss", $nama, $username, $email, $password);
//         $stmt->execute();


//     }
   
// }