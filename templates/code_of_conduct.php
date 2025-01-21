<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOCIO METRICS ORGANIZATION - Code of Conduct</title>
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
            --background-color: #f8f9fa;
            --text-color: #2c3e50;
            --border-radius: 8px;
            --box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.8;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: var(--background-color);
            color: var(--text-color);
        }

        .header {
            text-align: center;
            padding: 40px 20px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border-radius: var(--border-radius);
            margin-bottom: 40px;
            box-shadow: var(--box-shadow);
        }

        .header h1 {
            margin: 0;
            font-size: 2.5em;
            font-weight: 700;
        }

        .header h2 {
            margin: 10px 0 0;
            font-weight: 300;
            opacity: 0.9;
        }

        .container {
            background: white;
            padding: 30px;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            margin-bottom: 30px;
        }

        h3 {
            color: var(--primary-color);
            border-bottom: 2px solid var(--secondary-color);
            padding-bottom: 10px;
            margin-top: 40px;
        }

        h4 {
            color: var(--secondary-color);
            margin-top: 30px;
        }

        .section {
            margin-bottom: 40px;
            padding: 20px;
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
        }

        .must-list, .must-never-list {
            margin: 20px 0;
            padding: 25px;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
        }

        .must-list {
            background-color: #e8f7f3;
            border-left: 4px solid #2ecc71;
        }

        .must-never-list {
            background-color: #fdedec;
            border-left: 4px solid var(--accent-color);
        }

        .definition {
            background-color: #eef2f7;
            padding: 20px;
            border-radius: var(--border-radius);
            margin: 20px 0;
            border-left: 4px solid var(--secondary-color);
            box-shadow: var(--box-shadow);
        }

        ul {
            padding-left: 20px;
        }

        li {
            margin-bottom: 10px;
            list-style-type: none;
            position: relative;
            padding-left: 25px;
        }

        li:before {
            content: "•";
            color: var(--secondary-color);
            font-weight: bold;
            position: absolute;
            left: 0;
        }

        .compliance-form {
            background: white;
            padding: 30px;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            margin-top: 40px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: var(--border-radius);
            margin-top: 5px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="date"]:focus {
            outline: none;
            border-color: var(--secondary-color);
            box-shadow: 0 0 0 2px rgba(52, 152, 219, 0.2);
        }

        input[type="submit"] {
            background-color: var(--secondary-color);
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: var(--border-radius);
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }

        @media (max-width: 768px) {
            body {
                padding: 10px;
            }
            
            .header {
                padding: 20px;
            }

            .header h1 {
                font-size: 2em;
            }

            .container {
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <?php
    // Header section
    echo "<div class='header'>";
    echo "<h1>SOCIO METRICS ORGANIZATION</h1>";
    echo "<h2>STAFF CODE OF CONDUCT</h2>";
    echo "</div>";

    echo "<div class='container'>";
    // Introduction section
    echo "<div class='section'>";
    echo "<h3>I. Introduction and Purpose</h3>";
    echo "<p>SMO's Staff Code of Conduct is intended to assist all staff to uphold the values of the SMO and make ethical decisions in their professional and private lives, both within and outside office hours, and to better understand the obligations placed upon their conduct. This Code of Conduct refers to any misuse of power and exploitation in the relationships among staff and between them and those they serve.</p>";
    echo "</div>";

    // Scope section
    echo "<div class='section'>";
    echo "<h3>II. Scope of Application</h3>";
    echo "<p>SMO's Staff Code of Conduct applies to:</p>";
    echo "<ul>";
    echo "<li>All staff during their service with and for the SMO working under an agreement of employment, at all times</li>";
    echo "<li>Anyone working for the SMO or on behalf of the SMO on another basis</li>";
    echo "<li>Casual staff including persons representing the SMO in conferences and events</li>";
    echo "<li>All individuals carrying out activities under SMO's name and status</li>";
    echo "<li>Individuals involved in SMO-led projects and programs at any level</li>";
    echo "</ul>";
    echo "</div>";

    // Rules of Conduct section
    echo "<div class='section'>";
    echo "<h3>III. Rules of Conduct</h3>";
    
    // General Rules
    echo "<h4>1. General Rules</h4>";
    echo "<p>SMO core values include:</p>";
    echo "<ul>";
    echo "<li>Respect for the dignity and integrity of all human beings</li>";
    echo "<li>Fair and just treatment of all, without discrimination</li>";
    echo "<li>Promotion of gender justice</li>";
    echo "<li>Responsible stewardship and integrity</li>";
    echo "<li>Respect for diversity, inclusiveness and participation</li>";
    echo "</ul>";

    // Sexual Exploitation and Abuse
    echo "<h4>2. Sexual Exploitation and Abuse (SEA)</h4>";
    echo "<div class='definition'>";
    echo "<strong>Definitions:</strong><br>";
    echo "Sexual exploitation and abuse (SEA) cause physical, sexual and/or psychological harm and suffering to individuals.";
    echo "</div>";
    
    echo "<div class='must-list'>";
    echo "<h5>Staff must:</h5>";
    echo "<ul>";
    echo "<li>Become aware of the SEA risks and possible measures to actively mitigate these risks</li>";
    echo "<li>Report all the witnessed or suspected cases of SEA</li>";
    echo "</ul>";
    echo "</div>";

    echo "<div class='must-never-list'>";
    echo "<h5>Staff must never:</h5>";
    echo "<ul>";
    echo "<li>Sexually exploit or sexually abuse any individual</li>";
    echo "<li>Engage in any sexual activity with a child under the age of 18</li>";
    echo "<li>Exchange money, employment, goods or services for sex</li>";
    echo "<li>Engage in sexual relationships with members of crisis-affected populations</li>";
    echo "</ul>";
    echo "</div>";

    // Add other sections similarly...

    // Compliance Agreement form
    echo "<div class='compliance-form'>";
    echo "<h3>Compliance Agreement</h3>";
    echo "<form action='submit_compliance.php' method='POST'>";
    echo "<div class='form-group'>";
    echo "<label for='name'>Name:</label>";
    echo "<input type='text' id='name' name='name' required>";
    echo "</div>";
    echo "<div class='form-group'>";
    echo "<label for='position'>Position:</label>";
    echo "<input type='text' id='position' name='position' required>";
    echo "</div>";
    echo "<div class='form-group'>";
    echo "<label for='place'>Place:</label>";
    echo "<input type='text' id='place' name='place' required>";
    echo "</div>";
    echo "<div class='form-group'>";
    echo "<label for='date'>Date:</label>";
    echo "<input type='date' id='date' name='date' required>";
    echo "</div>";
    echo "<input type='submit' value='I Agree to the Code of Conduct'>";
    echo "</form>";
    echo "</div>";
    echo "</div>"; // Close container
    ?>
    <!-- Footer -->
    <footer class="gradient-bg text-white py-6 mt-8">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; <?php echo date('Y'); ?> Social Metrics Organisation. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>