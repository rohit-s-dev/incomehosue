<div class="row">
    
    <div class="col-6 m-auto" >
    <div class="up_box my-3">
    <h2>All Users</h2>
    <form action="" >
        <div class="form-group">
            <input type="search" name="searchUser" id="" class="form-control" placeholder="search">
        </div>
    </form>
</div>
    </div>
</div>
<div class="table">
                <table class="table  table-responsivetable-bordered table-hover">
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>Username</th>
                            <th>User Firstname</th>
                            <th>User Lastname</th>
                            <th>User Email</th>
                            <th>User Number</th>
                            <th>User Role</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                    </thead>

                    <tbody>

                    <?php
                        
                        $sql = "SELECT * FROM users";
                        $sql_query = mysqli_query($con, $sql);
                        
                        while ($rows = mysqli_fetch_assoc( $sql_query )) {

                            $user_id = $rows['user_id'];
                            $user_username = $rows['username'];
                            $user_role = $rows['user_role'];
                            $user_firstname = $rows['user_firstname'];
                            $user_lastname = $rows['user_lastname'];
                            $user_email = $rows['user_email'];
                            $user_number = $rows['user_number'];


                            echo "<tr>";

                            echo "<td class='p-1 text-muted align-middle text-center'>{$user_id}</td>";

                            echo "<td class='p-1 text-muted align-middle text-center'>{$user_username}</td>";

                            echo "<td class='p-1 text-muted align-middle text-center'>{$user_firstname}</td>";

                            echo "<td class='p-1 text-muted align-middle text-center'>{$user_lastname}</td>";

                            echo "<td class='p-1 text-muted align-middle text-center'>{$user_email}</td>";

                            echo "<td class='p-1 text-muted align-middle text-center'>{$user_number}</td>";

                            echo "<td class='p-1 text-muted align-middle text-center'>{$user_role}</td>";

                            echo "<td class='p-1 text-muted align-middle text-center'><a href='users.php?delete=$user_id'> 
                            Remove
                        </a></td>";

                            echo "<td class='p-1 text-muted align-middle text-center'><a href='users.php?source=edit_user&e_id=$user_id'> 
                            Edit User
                        </a></td>";
                            echo "</tr>";

                        }
                        
                    ?>

                    </tbody>
                </table>

                <?php 
                    if ( isset($_GET['delete']) ) {
                        $d_u_sql = "DELETE FROM users WHERE user_id = $user_id";
                        $d_u_sql_query = mysqli_query($con, $d_u_sql);
                        header("Location: users.php");
                    }
                ?>
            </div>