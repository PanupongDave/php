<?php  include "includes/header.php" ?> 

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


                    </div>
                </div>
                <!-- /.row -->
                <!-- Admin_wigets -->
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-file-text fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div  class='huge'><?php echo CountPosts(); ?></div>
                                        <div>Posts</div>
                                    </div>
                                </div>
                            </div>
                            <a href="posts.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-file-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div  class='huge'><?php echo CountComments(); ?></div>
                                        <div>Comments </div>
                                    </div>
                                </div>
                            </div>
                            <a href="comments.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div  class='huge'><?php echo CountUsers(); ?></div>
                                        <div>Users</div>
                                    </div>
                                </div>
                            </div>
                            <a href="users.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-list fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div  class='huge'><?php echo CountCategories(); ?></div>
                                        <div>Categories</div>
                                    </div>
                                </div>
                            </div>
                            <a href="categories.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
         
                </div>
                    <!-- /.row -->
                <div class="row">
                    
                    <script type="text/javascript">
                      google.charts.load('current', {'packages':['bar']});
                      google.charts.setOnLoadCallback(drawChart);

                      function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                          ['Data', 'Count'],
                          <?php 

                              $post_all_count = CountPosts();  
                              $post_count = CountPostsActive();
                              $post_draft_count = CountPostsDraft();

                              $comment_count = CountCommentsApproved();
                              $unapproved_comment_count = CountCommentsUnapproved();

                              $user_count = CountUsers();
                              $subscriber_count = CountUsersSubscriber();

                              $category_count = CountCategories();
                              
                              

                            $element_text = ['All Posts','Active Posts', 'Draft Posts', 'Comments','Pending Comments', 'Users', 'Subscribers', 'Categories'];
                            $element_count = [$post_all_count,$post_count, $post_draft_count, $comment_count, $unapproved_comment_count, $user_count, $subscriber_count, $category_count];

                            for($i =0;$i < 8 ; $i++){
                                echo "['{$element_text[$i]}'" . ",". "{$element_count[$i]}],";
                            }


                          ?>


                          // ['Posts', 1000],
                         
                        ]);

                        var options = {
                          chart: {
                            title: '',
                            subtitle: '',
                          }
                        };

                        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                        chart.draw(data, google.charts.Bar.convertOptions(options));
                      }
                    </script>

                    <div id="columnchart_material" style="width: 1000px; height: 500px;"></div>

                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php  include "includes/footer.php" ?> 