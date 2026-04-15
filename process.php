<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Submission Results</title>
    <style>

        @import url('https://googleapis.com');

        body {
            font-family: 'Inter', sans-serif;
            background: #0f172a; 
            color: #f8fafc;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .results-container {
            background: rgba(30, 41, 59, 0.7);
            backdrop-filter: blur(10px);
            padding: 40px;
            border-radius: 24px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            width: 450px;
        }

        h1 {
            font-size: 2rem;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: -1px;
            margin: 0 0 10px 0;
            background: linear-gradient(to right, #38bdf8, #818cf8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .data-row {
            margin-bottom: 20px;
            padding: 15px;
            background: rgba(15, 23, 42, 0.5);
            border-radius: 12px;
            border-left: 4px solid #38bdf8;
        }

        .label {
            display: block;
            font-weight: 700;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #94a3b8;
            margin-bottom: 4px;
        }

        .value {
            font-size: 1.1rem;
            color: #f8fafc;
            word-break: break-all;
        }

        .back-link {
            display: inline-block;
            margin-top: 20px;
            color: #38bdf8;
            text-decoration: none;
            font-weight: 700;
            font-size: 0.9rem;
            transition: color 0.2s;
        }

        .back-link:hover {
            color: #818cf8;
        }
    </style>
</head>
<body>

<div class="results-container">
    <h1>Success!</h1>
    <p style="color: #94a3b8; margin-bottom: 30px;">Here is the information we received:</p>

    <?php
 
    $name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'Not provided';
    $email = isset($_GET['email']) ? htmlspecialchars($_GET['email']) : 'Not provided';
    $age = isset($_GET['age']) ? htmlspecialchars($_GET['age']) : 'Not provided';
    

    $password = isset($_GET['password']) ? htmlspecialchars($_GET['password']) : 'Not provided';
    ?>

    <div class="data-row">
        <span class="label">Full Name</span>
        <span class="value"><?php echo $name; ?></span>
    </div>

    <div class="data-row">
        <span class="label">Email Address</span>
        <span class="value"><?php echo $email; ?></span>
    </div>

    <div class="data-row">
        <span class="label">Age</span>
        <span class="value"><?php echo $age; ?> years old</span>
    </div>

    <div class="data-row">
        <span class="label">Passcode</span>
        <span class="value">•••••••• (Hidden for security)</span>
    </div>

    <a href="javascript:history.back()" class="back-link">← Go back to form</a>
</div>

</body>
</html>