 <table class="table table-bordered table-striped">
    <thead>
        <tr>
           <th>Id</th>
           <th>Username</th>
           <th>Firstname</th>
           <th>Lastname</th>
           <th>Email</th>
           <th>Role</th>
           <th>Admin</th>
           <th>Subscriber</th>
           <th>Edit</th>
           <th>delete</th>
           

        </tr>
    </thead>
    <tbody>
        <?php ViewAllUsers(); ?>         
    </tbody>
</table>

<?php deleteUser(); ?>
<?php ChangeRole(); ?>