<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Python book</title>
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

    .des {
        text-size-adjust: 5px;
        padding: 10px;
        color: #f2f2f5;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        text-align: left;
        margin: 0;
        position: relative;
        display: inline block;
    }

    .image .des {
        position: absolute;
        top: 10%;
        left: 30%;
        border-radius: 20px;
        size: 4px;
        font-size: xx-small;

    }

    .image .btn {
        position: absolute;
        top: 50%;
        left: 30%;
        background-color: #df7511;
        border-radius: 20px;
    }

    .image .btn:hover {
        background-color: rgb(231, 152, 33);
        color: #f2f2f5;
    }
</style>
</head>

<body>
    <header>
        <nav class="nav1">
            <div class="navbar">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="books.php">BOOKS</a></li>
                </ul>
            </div>
        </nav>
        <div class="card">

            <div class="image">
                <img src="35.jpg" width="300" height="400"></a>
                <a href="idoc.pub_programming-with-java-a-primer3e-by-balagurusamy.pdf"><button class="btn">
                        <h2>Read Now</h2>
                    </button></a>
                <div class="des">
                    <h1>programming-with-java<br>Author- E Balagurusamy
                        <p>
                            The sixth edition of this most trusted book on JAVA for beginners is here with some
                            essential updates. Retaining its quintessential style of concept explanation with exhaustive
                            programs, solved examples, and illustrations, this test takes the journey of understanding
                            JAVA to slightly higher level. The book introduces readers to some of the Core JAVA topics
                            like JDBC, Java Servlets, Java Beans, Lambada Expression and much more. Practical real-life
                            projects will give a better understanding of JAVA usage and make students industry-ready.
                        </p>
                    </h1>

                </div>
            </div>
        </div>
</body>

</html>