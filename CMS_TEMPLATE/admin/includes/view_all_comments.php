 <table class="table table-bordered table-striped">
    <thead>
        <tr>
           <th>Id</th>
           <th>Author</th>
           <th>Comment</th>
           <th>Email</th>
           <th>Status</th>
           <th>In Response to</th>
           <th>Date</th>
           <th>Approve</th>
           <th>Unapprove</th> 
           <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php ViewAllComments(); ?>         
    </tbody>
</table>

<?php deleteComments(); ?>
<?php Approve(); ?>