<?php include('partials/menu.php');  ?>
<?php include('./config/constants.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>
        <br><br>

        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full Name:</td>
                    <td><input type="text" name="full_name" placeholder="Enter Your Name"></td>
                </tr>

                <tr>
                    <td>Username:</td>
                    <td>
                        <input type="text" name="username" placeholder="Your Username">
                    </td>
                </tr>

                <tr>
                    <td>Password:</td>
                    <td>
                        <input type="password" name="password" placeholder="Your Password">
                    </td>
                </tr>

                <tr>
                    <td colspan='2'>
                        <input type="submit" name="submit" value='Add Admin' class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

<?php include('partials/footer.php');  ?>

<?php
if(isset($_POST['submit'])) {
    echo $full_name = $_POST['full_name'];
    echo $username = $_POST['username'];
    echo $password = md5($_POST['password']);
    // You can process the form data here.

    //2. SqQL Query to Save the data into database

    $sql = "INSERT INTO tbl_admin SET
    full_name= '$full_name',
    username= '$username',
    password= '$password'
    ";
    echo $sql;

}
?>
