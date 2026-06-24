<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact | Daniel Caesar</title>

<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body{
        font-family: Arial, Helvetica, sans-serif;
        background-image: url("images/background.jpg.webp");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    header{
        width: 100%;
        height: 42px;
        background: #f3f3f3;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 60px;
    }

    .header-color{
        font-family: Georgia, serif;
        font-size: 18px;
        font-weight: normal;
        color: #222;
    }

    nav ul{
        display: flex;
        list-style: none;
        gap: 25px;
    }

    nav ul li a{
        text-decoration: none;
        color: navy;
        font-size: 20px;
        font-weight: bold;
    }

    nav ul li a:hover{
        color: navy;
        text-decoration: underline;
    }

    nav ul li:active{
        text-decoration: underline;
        text-decoration-color: navy;
    }

    .contact-container{
        display:flex;
        justify-content:center;
        align-items:center;
        min-height:80vh;
        padding:40px;
    }

    .contact-box{
        width:500px;
        background:navy;
        padding:40px;
        border-radius:15px;
        box-shadow: 0 4px 15px rgba(0,0,255,0.3);
        animation:fadeIn .8s ease;
    }

    .contact-box h1{
        text-align:center;
        margin-bottom:25px;
        letter-spacing:2px;
        color: white;
    }

    .contact-box input,
    .contact-box textarea{
        width:100%;
        padding:12px;
        margin-bottom:15px;
        border:none;
        border-radius:8px;
        background:white;
        color:black;
    }

    .contact-box textarea{
        height:200px;
        resize:none;
    }

    .contact-box button{
        width:100%;
        padding:12px;
        border:none;
        border-radius:8px;
        background: blue;
        color:white;
        font-weight:bold;
        cursor:pointer;
        transition:.3s;
    }

    .contact-box button:hover{
        transform:scale(1.03);
    }

    .success-msg {
        background-color: #d4edda;
        color: #155724;
        padding: 10px;
        margin-bottom: 15px;
        border-radius: 8px;
        text-align: center;
        font-weight: bold;
    }
</style>
</head>

<body>

<header>
    <div class="header-color">Daniel Caesar</div>
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="album.html">Album</a></li>
            <li><a href="contacts.html">Contacts</a></li>
        </ul>
    </nav>
</header>

<div class="contact-container">
    <div class="contact-box">
        <h1>CONTACT</h1>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            echo "<div class='success-msg'>Thank you, " . $name . "! Your message has been sent.</div>";
        }
        ?>

        <form method="POST" action="">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <input type="text" name="phone" placeholder="Phone" required>
            <textarea name="message" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </div>
</div>

</body>
</html>