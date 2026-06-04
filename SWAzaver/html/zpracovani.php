<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zpracování formuláře</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main style="text-align: center; margin-top: 50px;">
        <div style="background: #fff; padding: 40px; border-radius: 12px; max-width: 600px; margin: 0 auto; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
            
            <h2 style="color: #028090; margin-bottom: 20px;">Shrnutí odeslaných dat</h2>

            <?php
            $jmeno = $_POST["jmeno"];
            $email = $_POST["email"];
            $destinace = $_POST["destinace"];
            $zprava = $_POST["zprava"];

            echo "<p><strong>Jméno a příjmení:</strong> " . $jmeno . "</p>";
            echo "<p><strong>E-mail:</strong> " . $email . "</p>";
            echo "<p><strong>Vybraná destinace:</strong> " . $destinace . "</p>";
            echo "<p><strong>Text zprávy:</strong> " . $zprava . "</p>";
            
            echo "<br>";
            echo "<h3 style='color: #222;'>Děkujeme za kontaktování!</h3>";
            ?>

            <br>
            <a href="kontakt.html" style="display: inline-block; margin-top: 20px; padding: 10px 20px; background: #028090; color: white; text-decoration: none; border-radius: 8px;">Vrátit se zpět</a>
            
        </div>
    </main>

</body>
</html>