<?php 
include 'base.php';
if (isset($_SESSION['username'])) {
    $username = strtoupper($_SESSION['username']);
} else {
    setcookie('profile_cookies', $_SESSION['username'], time() + 60 * 60 * 24 * 365);
    $_COOKIE['profile_cookies'] = $_SESSION['username'];
    header("Location: login.php");
    exit();
}
include_once("db_conn.php");
include_once("user_conn.php");
$db = new Database();
$user = new user($db);
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    $result = $user->user($id);
    if ($result) {
?>
<section class='align-center'>
    <div class="main">
        <h2 style='color:white;'>USER'S PROFILE</h2>
        <div class="card">
            <div class="card-body">
                <i class="fa fa-pen fa-xs edit" onclick="enableEditMode()"></i>
                <form method="post" action="profile.php?id=<?php echo $id; ?>" style="display:none;">
                    <table>
                        <tbody>
                            <tr>
                                <td>USERNAME</td>
                                <td>: </td>
                                <td><input class='form-control' type="text" name="username" value="<?php echo $result['username']; ?>" readonly></td>
                            </tr>
                            <tr>
                                <td>FIRST NAME</td>
                                <td>: </td>
                                <td><input class='form-control' type="text" name="first_name" value="<?php echo $result['first_name']; ?>" readonly></td>
                            </tr>
                            <tr>
                                <td>LAST NAME</td>
                                <td>: </td>
                                <td><input class='form-control' type="text" name="last_name" value="<?php echo $result['last_name']; ?>" readonly></td>
                            </tr>
                            <tr>
                                <td>EMAIL</td>
                                <td>:</td>
                                <td><input class='form-control' type="email" name="email_add" value="<?php echo $result['email_add']; ?>" readonly></td>
                            </tr>
                            <tr>
                                <td>MOBILE</td>
                                <td>:</td>
                                <td><input class='form-control' type="text" name="mobile" value="<?php echo $result['mobile']; ?>" readonly></td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <button class="btn btn-danger" type="submit" style='height:30px;font-size:14px;'name="submit">Update</button>
                                    <button class="btn btn-secondary" href="profile.php?id='<?php $id ?>" style='height:30px;font-size:14px;'>Cancel</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
                <table id="viewTable">
                    <tbody>
                        <tr>
                            <td>USERNAME</td>
                            <td>: </td>
                            <td><?php echo $result['username'] ?></td>
                        </tr>
                        <tr>
                            <td>FIRST NAME</td>
                            <td>: </td>
                            <td><?php echo $result['first_name'] ?></td>
                        </tr>
                        <tr>
                            <td>LAST NAME</td>
                            <td>: </td>
                            <td><?php echo $result['last_name'] ?></td>
                        </tr>
                        <tr>
                            <td>EMAIL</td>
                            <td>:</td>
                            <td><?php echo $result['email_add'] ?></td>
                        </tr>
                        <tr>
                            <td>MOBILE</td>
                            <td>:</td>
                            <td>+63<?php echo $result['mobile'] ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?php
if (isset($_POST['submit'])) {
    try {
        $id = $_GET['id'];
        $username = $_POST['username'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email_add = $_POST['email_add'];
        $mobile = $_POST['mobile'];
        $data = [
            'username' => $username,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email_add' => $email_add, 
            'mobile' => $mobile
        ];
        $result = $user->updateUserProfile($id, $data);
        if ($result) {
            echo "<script>alert('User record with ID: " . $id . " has been successfully edited!');";
            echo "window.location.href = 'profile.php?id=" . $id . "';</script>"; 
        } else {
            echo "<script>alert('Error updating record.');</script>";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
<script>
    function enableEditMode() {
        var viewTable = document.getElementById('viewTable');
        var editForm = document.querySelector('form');
        var editIcon = document.querySelector('.edit');
        var inputs = editForm.getElementsByTagName('input');

        for (var i = 0; i < inputs.length; i++) {
            inputs[i].readOnly = false;
        }

        viewTable.style.display = 'none';
        editIcon.style.display = 'none';
        editForm.style.display = 'block';
        editForm.getElementsByTagName('input')[0].focus();
        editForm.getElementsByTagName('input')[inputs.length - 1].style.display = 'block';
    }
</script>
<?php
    } else {
        echo 'Error retrieving User data.';
    }
} else {
    echo 'Invalid or missing User ID.';
}
?>
</body>
</html>
