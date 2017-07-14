 <table class="table table-bordered table-striped">
    <thead>
        <tr>
           <th>Id</th>
           <th>Username</th>
           <th>Firstname</th>
           <th>Lastname</th>
           <th>Email</th>
           <th>Role</th>
           

        </tr>
    </thead>
    <tbody>
        <?php ViewAllUsers(); ?>         
    </tbody>
</table>

<?php deleteUser(); ?>
<?php ChangeRole(); ?>