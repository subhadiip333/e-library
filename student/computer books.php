<!DOCTYPE html>
<html>

<head>
    <title>Computer Books</title>
</head>

<style type="text/css">
    body {
        margin: 0;
        padding: 0;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: "Roboto", sans-serif;
        background: linear-gradient(rgba(0, 0, 0, 0.7) 80%, #e67e22), url(26.jpg);
    }

    .navbar ul {
        list-style: none;
        background: rgb(235, 142, 3);
        padding: 0;
        margin: 0;
        text-align: right;
        position: relative;
    }

    .navbar li {
        display: inline-block;
    }

    .navbar a {
        text-decoration: none;
        color: rgb(59, 16, 16);
        width: 80px;
        display: block;
        padding: 25px 20px;
        font-weight: bold;
        font-family: Arial;
        text-align: center;
        font-size: 14px;
    }

    .navbar a:hover {
        background: #f2f2f5;
    }

    header {
        width: 100%;
        height: 100vh;
        background-size: 100% 100%;
    }



    .main {

        margin: 2%;
    }

    .card {
        width: 20%;
        display: inline-block;
        box-shadow: 2px 2px 20px rgb(238, 118, 5);
        border-radius: 5px;
        margin: 2%;
    }

    .image img {
        width: 100%;
        border-top-right-radius: 5px;
        border-top-left-radius: 5px;




    }

    .title {

        text-align: center;
        padding: 10px;

    }

    h1 {
        font-size: 20px;
    }

    .des {
        padding: 3px;
        text-align: center;

        padding-top: 10px;
        border-bottom-right-radius: 5px;
        border-bottom-left-radius: 5px;
    }

    .title {
        color: #f2f2f5;
    }
</style>

<body>
    <header>
        <nav class="nav1">
            <div class="navbar">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="log in.php">Log out</a></li>
                    <li><a href="books.php">BOOKS</a></li>
                </ul>
            </div>
        </nav>
        <div class="main">
            <div class="card">
                <div class="image">
                    <a href="ANCI C.php"><img src="28.png" width="90" height="250"></a>
                </div>
                <div class="title">
                    <h1>
                        Programming in ANSI C<br></h1>
                    <b>Author</b><span> - E Balagurusamy</span>
                </div>
            </div>
            <div class="card">
                <div class="image">
                    <a href="Let us C.php"><img src="29.jpg" width="50" height="270"></a>
                </div>
                <div class="title">
                    <h1> Let Us C<br><b>Author-</b> Yashavant Kanetkar </h1>
                </div>

            </div>



            <div class="card">

                <div class="image">
                    <a href="programming in c.php"><img src="30.jpg" width="50" height="270"></a>
                </div>
                <div class="title">
                    <h1>Programming in C<br> <b>Author - </b> Reema Thareja </h1>
                </div>
            </div>
            <div class="card">
                <div class="image">
                    <a href="Computer System Architecture.php"><img src="31.webp" width="90" height="250"></a>
                </div>
                <div class="title">
                    <h1>Computer System Architecture<br> <b>Author - </b>M.Morris Mano</h1>
                </div>
            </div>
            <div class="card">
                <div class="image">
                    <a href="Digital Design.php"><img src="32.webp" width="90" height="250"></a>
                </div>
                <div class="title">
                    <h1>Digital Design<br> <b>Author - </b>M.Morris Mano</h1>
                </div>

            </div>
            

            <div class="card">

                <div class="image">
                    <a href="Data Structures and Algorithms with Python.php"><img src="33.png" width="90" height="250"></a>
                </div>
                <div class="title">
                    <h1>Data Structures and Algorithms with Python</h1>
                </div>

            </div>
            <!--cards -->

            <div class="card">

                <div class="image">
                    <a href="The Python Book.php"><img src="34.jpg" width="90" height="250"></a>
                </div>
                <div class="title">
                    <h1>The Python Book: The Ultimate Guide to Coding with Python</h1>
                </div>
            </div>
            <div class="card">
                <div class="image">
                    <a href="Programming with Java.php"><img src="35.jpg" width="90" height="250"></a>
                </div>
                <div class="title">
                    <h1>Programming with Java</h1><b>Author</b><b>-E Balagurusamy</b>
                </div>
            </div>


        </div>
        </div>
</body>

</html>