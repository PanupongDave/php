<div class="col-md-4">



                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <form action="search.php" method="post">
                    <div class="input-group">
                        <input name="search" type="text" class="form-control">
                        <span class="input-group-btn">
                            <button name="submit" class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    </form>
                    <!-- /.input-group -->
                </div>
                <!-- Welcome User -->
                <?php 
                if($_SESSION['user_firstname'] != null){
                    echo "<div class='well'>";
                    echo "<h4>Welcome: ".$_SESSION['user_firstname']." ".$_SESSION['user_lastname']."</h4>";
                    echo "</div>";
                }else{

                ?>
                <!-- Login -->
                 <div class="well">
                    <h4>Login</h4>
                    <form action="includes/login.php" method="post">
                        <div class="input-group">
                            <label for="username">Username:</label>
                            <input name="username" type="text" class="form-control" placeholder="Enter Username">
                        </div>

                        <div class="input-group">
                            <label for="password">Password:</label>
                            <input name="password" type="password" class="form-control" placeholder="Enter Password">
                        </div>

                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" name="login" value="Login" style="margin-top: 10px">
                        </div>

                    </form>
                    <!-- Lgoin Form-->

                </div>
                <?php } ?>
                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                        <?php
                                $query = "SELECT * FROM categories";
                                $select_all_categories_sidebar = mysqli_query($connection,$query);

                                while($row = mysqli_fetch_assoc($select_all_categories_sidebar)){
                                    $cat_id = $row['cat_id'];
                                    $cat_title = $row['cat_title'];
                                    echo "<ul>";
                                    echo "<li><a href='category.php?category=$cat_id'>{$cat_title}</a></li>";
                                    echo "</ul>";
                                }
                      ?>
                        </div>
                        <!-- /.col-lg-6 -->
                 
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>