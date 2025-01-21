<?php
$pageTitle = "SMO Anti-Corruption Policy";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
            --text-color: #333;
            --light-bg: #f5f6fa;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            color: var(--text-color);
        }

        .header {
            background-color: var(--primary-color);
            color: white;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        .section {
            background: white;
            border-radius: 8px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }

        h1 {
            margin: 0;
            font-size: 2.5rem;
        }

        h2 {
            color: var(--secondary-color);
            border-bottom: 2px solid var(--secondary-color);
            padding-bottom: 0.5rem;
            margin-top: 0;
        }

        .alert {
            background-color: var(--light-bg);
            border-left: 4px solid var(--accent-color);
            padding: 1rem;
            margin: 1rem 0;
        }

        .declaration-form {
            background: var(--light-bg);
            padding: 2rem;
            border-radius: 8px;
            margin-top: 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .important-note {
            background-color: #fff3cd;
            border-left: 4px solid #ffc107;
            padding: 1rem;
            margin: 1rem 0;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1><?php echo $pageTitle; ?></h1>
        <p>Social Metrics Organisation (SMO) - 2020</p>
    </div>

    <div class="container">
        <div class="section">
            <h2>Policy Objective</h2>
            <p>SMO is committed to doing business with integrity and the highest anti-corruption standards. This policy establishes SMO's standards regarding the prevention of corruption. All SMO employees, partners, and suppliers are expected to conduct themselves with honesty, fairness, and high ethical standards.</p>
        </div>

        <div class="section">
            <h2>What Constitutes a Bribe?</h2>
            <div class="alert">
                <p>A bribe is not just cash in an envelope. It can be "anything of value," including:</p>
                <ul>
                    <li>Gift cards</li>
                    <li>Home repairs</li>
                    <li>Event tickets</li>
                    <li>Private club access</li>
                    <li>No-bid contracts</li>
                    <li>Employment opportunities for family members</li>
                    <li>Free transportation services</li>
                </ul>
            </div>
        </div>

        <div class="section">
            <h2>Gifts and Entertainment</h2>
            <p>While informal interactions and exchanges of gifts may be important for building relationships, they must be:</p>
            <ul>
                <li>Appropriate and transparent</li>
                <li>Of reasonable value</li>
                <li>Not an attempt to influence business decisions</li>
                <li>Compliant with all laws and regulations</li>
            </ul>
        </div>

        <div class="section">
            <h2>Facilitation Payments</h2>
            <div class="important-note">
                <p><strong>Important:</strong> SMO does not permit facilitation payments except in cases where:</p>
                <ul>
                    <li>Personal safety or security is at risk</li>
                    <li>Explicit approval is obtained from the SMO Country Director</li>
                    <li>The payment is properly documented and recorded</li>
                </ul>
            </div>
        </div>

        <div class="section">
            <h2>Reporting Violations</h2>
            <p>If you suspect any corruption or bribery activity, you must report it through:</p>
            <ul>
                <li>The Director's office</li>
                <li>Your supervisor/manager</li>
                <li>SMO Whistleblowing Reporting Line</li>
            </ul>
        </div>

        <div class="section">
            <h2>Staff Declaration</h2>
            <div class="declaration-form">
                <p>I have read and understood the Anti-Corruption and Anti-Bribery Policy of Social Metrics Organisation. I understand that any violation may result in disciplinary action, including dismissal.</p>
                
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="position">Position:</label>
                        <input type="text" id="position" name="position" required>
                    </div>

                    <div class="form-group">
                        <label for="date">Date:</label>
                        <input type="date" id="date" name="date" required>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>