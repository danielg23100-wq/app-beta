<html:5>
    <?
    require("..config/database.php");
    $sql_users_model="SELECT u.firstname||' '|| u.lastname as fulllname, u.email, u.mobile_phone, CASE WHEN u.status= true then 'Active' else 'Inactivo' end AS status, 
u.profile_photos FROM users_model u"
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Usuarios</title>
</head>
<body>
    <h1><br><center>Listado de Usuarios</center></br></h1>
    <table border="1" align="center">
        <tr>
            <th>Fullname</th>
            <th>E-mail</th>
            <th>Mobile Phone</th>
            <th>Status</th>
            <th>Photo</th>
            <th>Options</th>
</tr>
<tr>
            <td>Peter Loza</td>
            <td>peter@mail.com</td>
            <td>300123</td>
            <td>Active</td>
            <td><img src="profile_photos/user_default.jpg" width="50"></td>
            <td><a herf="#"><img src="icons/edit.png" width="20" alt ="Edit User"></a>
            &nbsp;&nbsp;
            <a herf="#">
                <img src="icons/delete.png" width="20" alt="Delete users"></a>
            </td>
</tr>


            
