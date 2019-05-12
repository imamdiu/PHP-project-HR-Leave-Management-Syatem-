<?php
//require_once('DB_&_TABLE/connect.php');
require_once "../db.inc.php";
$user_id = $_GET['user_id'];

$DelSql = "DELETE FROM `users` WHERE user_id=$user_id";	 
$res = mysqli_query($conn, $DelSql);

if($res){
	//header('location: personal_info_edit.php');
	echo '<script>window.location="user_index_view.php"</script>';
}else{
	echo "Failed to delete";
}
/* DELETE T1, T2
FROM T1
INNER JOIN T2 ON T1.key = T2.key
WHERE condition;
$Del_Personal_info = "DELETE FROM `updatee_personal_info` WHERE user_id=$user_id"; */

/* $DelSql = "DELETE 
	FROM `users`, `updatee_personal_info`
		INNER JOIN `updatee_personal_info` ON `users`.user_id = `updatee_personal_info`.user_id
			WHERE user_id=$user_id"; */

/* "DELETE FROM table1 WHERE user_id='$user_id';
DELETE FROM table2 WHERE user_id='$user_id';
DELETE FROM table3 WHERE user_id='$user_id';
DELETE FROM table4 WHERE user_id='$user_id';"; 

DELETE users, employee, person FROM users INNER JOIN employee INNER JOIN WHERE users.id=employee.user_id AND employee.user_id= person.user_id
*/
/* $DelSql ="DELETE users, updatee_personal_info, updatee_contact_info FROM users INNER JOIN updatee_personal_info INNER JOIN WHERE users.id=updatee_personal_info.user_id AND updatee_personal_info.user_id= updatee_contact_info.user_id
			DELETE FROM `updatee_personal_info` WHERE user_id='$user_id'"; */

/* DELETE customers 
FROM customers
        LEFT JOIN
    orders ON customers.customerNumber = orders.customerNumber 
WHERE
    orderNumber IS NULL; */
	
	
/* $DelSql ="DELETE `users` 
FROM `users`
        LEFT JOIN
    `updatee_personal_info` ON `users`.user_id = `updatee_personal_info`.user_id 
WHERE
    user_id IS NULL"; */

/* delete from topics where boardid in (select boardid from boards)
delete from messages where boardid in (select boardid from boards) */

// $DelSql = "delete from users where user_id in (select user_id from users)
// 			delete from updatee_personal_info where user_id in (select user_id from updatee_personal_info)
			
// 			";	



?>