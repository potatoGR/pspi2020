<!doctype html>
<?php
require("config.php");
require("gen_elements.php");
session_start();
if (isset($_COOKIE["ActionCallUser"]) && isset($_COOKIE["ActionCallUserEmail"]) && isset($_COOKIE["ActionCallUserState"]))
{
    $_SESSION["loggedin"] = true;
    $_SESSION["email"] = $_COOKIE["ActionCallUserEmail"];
    $_SESSION["username"] = $_COOKIE["ActionCallUser"];
}
if (!isset($_SESSION["username"]))
{
    header("Location: index.php");
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <script src="js/gen_elements.js"></script>
        <script src="js/profile.js" defer></script>
        <?php header_gen(); ?>
        <link rel="stylesheet" href="css/forum.css">
        <title>ActionCall User Profile</title> 
    </head>
    
    <body>
        <?php navbar_gen(); ?>
        <div class="container">
            <h1> <?php echo($_SESSION["username"]); ?>'s profile  </h1>
        </div>


        <div class="container">
            <h2>Account Information</h2>

            <form>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <label for="username_text_field" class="col-sm-2 col-form-label">Username</label>
                        <input class="form-control" id="username_text_field" type="text" minlength="5" maxlength="32" 
                            value="<?php echo($_SESSION["username"]); ?>" oninput="button_enable_disable()">
                        <small class="form-text text-muted"> Your username must be 5-32 characters long.</small>
                    </div>             
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <label for="password_field" class="col-sm-2 col-form-label">Change Password</label>
                        <input class="form-control" id="password_field" type="password" minlength="1" 
                            value="" oninput="button_enable_disable()">
                        <small class="form-text text-muted"> Your password must be at least one (1) character long. The longer, the better.</small>
                        <input type="checkbox" onclick="toggle_password_visibility()"> Show password
                    </div>             
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <label for="password_field" class="col-sm-2 col-form-label">Repeat New Password</label>
                        <input class="form-control" id="password_field" type="password" minlength="1" 
                            value="" oninput="button_enable_disable()">
                        <small class="form-text text-muted"> Passwords must agree.</small>
                        <input type="checkbox" onclick="toggle_password_visibility()"> Show password
                    </div>             
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <label for="email_text_field" class="col-sm-2 col-form-label">E-mail</label>
                        <input class="form-control" value="<?php echo($_SESSION["email"]); ?>" disabled>
                    </div>
                 </div>
                 <div class="col-sm-10">
                    <button id="save_changes_button" type="submit" class="btn btn-primary">Save Changes</button>
                 </div>

            </form>
        </div>

        <div class="container content">
            <?php
            $find_posts_user_is_interested_in_sql_query = 
            "SELECT DISTINCT post_id , title, city, date_of_event, posts.poster_email
            FROM users AS users1 JOIN interested ON user_email = \"".$_SESSION["email"]."\" 
            JOIN posts ON post_id = id 
            JOIN users AS users2 ON users2.email = posts.poster_email";

            $posts_user_is_interested_in = mysqli_query($con, $find_posts_user_is_interested_in_sql_query);
            
            if (mysqli_num_rows($posts_user_is_interested_in) > 0){ ?>
                <table class="table" style="margin-top: 80px;">
                    <thead>
                        <tr>
                            <th scope="col">Post ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">City/Area</th>
                            <th scope="col">Date</th>
                            <th scope="col">Poster</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php // Output data of each row
                        while($posts_interested_row = $posts_user_is_interested_in -> fetch_assoc()){ ?>
                            <tr>
                                <th scope="row"> <?php echo($posts_interested_row["post_id"]) ; ?> </th>
                                <td><?php echo($posts_interested_row["title"]) ; ?></td>
                                <td><?php echo($posts_interested_row["city"]) ; ?></td>
                                <td><?php echo($posts_interested_row["date_of_event"]) ; ?></td>
                                <td><?php echo($posts_interested_row["poster_email"]) ; ?></td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>

             <?php }
            else{
                echo("You have not shown interest in any event.");
            } ?>

        </div>



        <?php footer_gen() ; ?>
    </body>

</html>