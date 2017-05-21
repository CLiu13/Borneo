<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.1/css/bulma.css">
</head>
<body>

<!--Navbar-->
    <nav class="nav has-shadow">
        <div class="nav-left">
            <a class="nav-item">
            <img src="../assets/borneo.jpg" alt="Borneo logo">
            </a>
        </div>

        <!-- <div class="nav-center">
            <a class="nav-item">
            <span class="icon">
                <i class="fa fa-github"></i>
            </span>
            </a>
            <a class="nav-item">
            <span class="icon">
                <i class="fa fa-twitter"></i>
            </span>
            </a>
        </div> -->

        <!-- This "nav-toggle" hamburger menu is only visible on mobile -->
        <!-- You need JavaScript to toggle the "is-active" class on "nav-menu" -->
        <span class="nav-toggle">
            <span></span>
            <span></span>
            <span></span>
        </span>

        <!-- This "nav-menu" is hidden on mobile -->
        <!-- Add the modifier "is-active" to display it on mobile -->
        <div class="nav-right nav-menu">
            <a class="nav-item">
            Home
            </a>
            <a class="nav-item">
            Blog
            </a>

            <div class="nav-item ">
            <div class="field is-grouped">
                <p class="control">
                <a class="button is-primary">
                    <span>$USERNAME</span>
                </a>
                </p>
            </div>
            </div>
        </div>
    </nav>

<!--Reminder Tabel-->
    <div class="container is-fluid">
        <table class="table">
            <thead>
                <tr>
                <th><abbr title="Position">Pos</abbr></th>
                <th>Reminder</th>
                <th>Date and Time</th>
                <th>Tags</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                <th><abbr title="Position">Pos</abbr></th>
                <th>Reminder</th>
                <th>Date and Time</th>
                <th>Tags</th>
                </tr>
            </tfoot>
            <tbody>

                <!--Item Example-->
                <tr>
                <th>Ex</th> <!--Item Number-->
                <th>Hello World!!!</th> <!--Reminder-->
                <th>2017-05-20 12:00:00</th> <!--Date and Time-->
                <th><span class="tag is-dark">Example</span><span class="tag is-dark">Tags</span></th> <!--Tags-->
                </tr>

                <?php
                require "../db/connect.php";
                $sql = ("SELECT note,lastmod,tag FROM note");
                $result = $conn->query($sql);

                $x = 1;
                if ($result-> num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                    echo"<tr>
                    <th>";
                    echo"$x";
                    echo"</th>
                    <th>";
                    echo $row['note'];
                    echo"</th>
                    <th>";
                    echo $row['lastmod'];
                    echo"</th>
                    <th><span class='tag is-dark'>";
                    echo $row['tag'];
                    echo"</span></th>
                    </tr>";
                    $x++;
                }
                }
                ?>

            </tbody>
        </table>
    </div>

<!--Add Reminder Button-->
    <div>
        <div class="card">
        <header class="card-header">
            <p class="card-header-title">
            Component
            </p>
        </header>
        <div class="card-content">
            <div class="field">
                <p class="control">
                    <input class="input is-small" type="text" placeholder="Small input">
                </p>
            </div>
        </div>
        <footer class="card-footer">
            <a class="card-footer-item">Save</a>
            <a class="card-footer-item">Cancel</a>
        </footer>
        </div>
        <center><a class="button is-dark">Add Remind</a></center>
    </div>
</body>
</html>
