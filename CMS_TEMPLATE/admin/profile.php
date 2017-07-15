<?php  include "includes/header.php" ?> 

<?php 
    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];

        $query = "SELECT * FROM users WHERE username = '{$username}' ";
        $select_user_profile = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($select_user_profile)){
                $user_id = $row['user_id'];
                $username = $row['username'];
                $user_password = $row['user_password'];
                $user_firstname = $row['user_firstname'];
                $user_lastname = $row['user_lastname'];
                $user_email = $row['user_email'];
                $user_image = $row['user_image'];
                $user_role = $row['user_role'];
        }
    }
?>


    <div id="wrapper">

   

     <!-- Navigation -->
    <?php  include "includes/navigation.php" ?> 

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to Admin
                            <small><?php echo $_SESSION['user_firstname']; ?></small>
                        </h1>
                        <?php updateUser() ?>
                       <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="user_id" value="<?php if(isset($user_id)){echo $user_id;} ?>">
                        <div class="form-group">
                                <label for="post_author">Firstname</label>
                                <input type="text" name="user_firstname" class="form-control" value="<?php if(isset($user_firstname)){echo $user_firstname;} ?>">
                            </div>

                            <div class="form-group">
                                <label for="post_status">Lastname</label>
                                <input type="text" name="user_lastname" class="form-control" value="<?php if(isset($user_lastname)){echo $user_lastname;} ?>">
                            </div>

                            <div class="form-group">
                                <label for="user_role">Role:</label>
                                <select name="user_role" id="">
                                    <option value="<?php if(isset($user_role)){echo $user_role;} ?>">Select Options</option>
                                    <option value="admin">Admin</option>
                                    <option value="subscriber">Subscriber</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="post_tags">Username</label>
                                <input type="text" name="username" class="form-control" value="<?php if(isset($username)){echo $username;} ?>">
                            </div>
                            <div class="form-group">
                                <label for="post_content">Email</label>
                                <input type="email" name="user_email" class="form-control" value="<?php if(isset($user_email)){echo $user_email;} ?>">
                            </div>

                            <div class="form-group">
                                <label for="post_content">Password</label>
                                <input type="password" name="user_password" class="form-control">
                            </div>


                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="update_user" value="Edit Your Profile">
                            </div>

                        </form>


                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php  include "includes/footer.php" ?> 