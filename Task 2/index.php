<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Sabelli Antebi - PHP Demo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="container">
        <header class="profile-header">
            <img src="images/Sabelli.png" alt="Sabelli Antebi Profile Picture" class="profile-picture">
            <h1>Sabelli Antebi</h1>
            <p class="tagline">PHP Demo | Lab 11 | Web Development</p>
            <nav>
                <a href="index.html">Profile</a>
                <a href="#server-info">Server Info</a>
                <a href="#php-vars">PHP Variables</a>
                <a href="#php-form">PHP Form</a>
                <button id="toggleTheme" aria-label="Toggle theme">
                    <i class="fas fa-sun"></i> / <i class="fas fa-moon"></i>
                </button>
            </nav>
        </header>

        <main>
            <section id="server-info" class="card">
                <h2><i class="fas fa-server icon"></i> Server Information</h2>
                <?php 
                    echo "<p>This page demonstrates dynamic PHP content generation.</p>"; 
                    echo "<p><strong>Current date and time:</strong> " . date('Y-m-d H:i:s') . "</p>";
                    echo "<p><strong>Server software:</strong> " . $_SERVER['SERVER_SOFTWARE'] . "</p>";
                    echo "<p><strong>PHP version:</strong> " . phpversion() . "</p>";
                    echo "<p><strong>Server name:</strong> " . $_SERVER['SERVER_NAME'] . "</p>";
                    echo "<p><strong>User agent:</strong> " . $_SERVER['HTTP_USER_AGENT'] . "</p>";
                ?>
            </section>

            <section id="php-vars" class="card">
                <h2><i class="fas fa-code icon"></i> PHP Environment Variables</h2>
                <div class="table-container">
                    <table>
                        <tr>
                            <th>Variable</th>
                            <th>Value</th>
                        </tr>
                        <?php
                            $env_vars = array('DOCUMENT_ROOT', 'REMOTE_ADDR', 'REMOTE_PORT', 'SERVER_ADDR', 'SERVER_PORT');
                            foreach ($env_vars as $var) {
                                echo "<tr><td>$var</td><td>" . $_SERVER[$var] . "</td></tr>";
                            }
                        ?>
                    </table>
                </div>
            </section>

            <section id="php-form" class="card">
                <h2><i class="fas fa-paper-plane icon"></i> PHP Form Processing</h2>
                
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    echo "<div class='form-response'>";
                    echo "<h3>Form Submission Received:</h3>";
                    echo "<p><strong>Name:</strong> " . htmlspecialchars($_POST["name"]) . "</p>";
                    echo "<p><strong>Email:</strong> " . htmlspecialchars($_POST["email"]) . "</p>";
                    echo "<p><strong>Message:</strong> " . htmlspecialchars($_POST["message"]) . "</p>";
                    echo "</div>";
                }
                ?>
                
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="contact-form">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" rows="4" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn">Submit</button>
                </form>
            </section>

            <section class="card">
                <h2><i class="fas fa-link icon"></i> Links</h2>
                <p>
                    Return to my personal profile page to learn more about me and my projects.
                </p>
                <a href="index.html" class="btn">
                    <i class="fas fa-user"></i> View Profile Page
                </a>
            </section>
        </main>

        <footer>
            <p>&copy; 2025 Sabelli Antebi. All rights reserved.</p>
            <p>Made with <i class="fas fa-heart" style="color: #e25555;"></i> and <i class="fas fa-coffee"></i>.</p>
        </footer>
    </div>
    
    <script src="script.js"></script>
</body>
</html>
