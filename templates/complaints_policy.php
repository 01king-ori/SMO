<?php
// complaints_policy.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMO Complaints Mechanism Policy</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            color: #333;
        }
        
        .policy-header {
            background-color: #f5f5f5;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 30px;
        }
        
        h1 {
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }
        
        h2 {
            color: #2c3e50;
            margin-top: 30px;
            border-left: 4px solid #3498db;
            padding-left: 10px;
        }
        
        .section {
            background-color: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .complaint-types {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            margin: 10px 0;
        }
        
        ul, ol {
            padding-left: 20px;
        }
        
        .important-note {
            background-color: #fff3cd;
            border-left: 4px solid #ffc107;
            padding: 15px;
            margin: 15px 0;
        }
        
        .confidentiality {
            background-color: #d4edda;
            border-radius: 5px;
            padding: 15px;
            margin: 15px 0;
        }
    </style>
</head>
<body>
    <div class="policy-header">
        <h1>Social Metrics Organisation (SMO)</h1>
        <h2>Complaints Mechanisms Policy</h2>
    </div>

    <div class="section">
        <h2>1. Definition of a Complaint</h2>
        <p>A complaint is an expression of concern or dissatisfaction by an individual or group, related to possible misconduct by SMO staff, program activities, or non-compliance with SMO policies and guidelines.</p>
        
        <div class="complaint-types">
            <h3>Common Complaints Include:</h3>
            <ul>
                <li>Activity management concerns affecting SMO's work</li>
                <li>Program/project/activities delivery quality</li>
                <li>Staff behavior concerns</li>
                <li>Abuse of power</li>
                <li>Corruption or resource misuse</li>
                <li>Sexual coercion and manipulation</li>
                <li>Sexual harassment</li>
                <li>General inquiries about SMO work</li>
                <li>Information requests</li>
                <li>Contractual disputes</li>
            </ul>
        </div>
    </div>

    <div class="section">
        <h2>2. Types of Complaints</h2>
        
        <h3>a. Operational Complaints</h3>
        <ul>
            <li>Issues of entitlements and commitments not met</li>
            <li>Service quality concerns</li>
            <li>Program/project delivery issues</li>
            <li>Management of services affecting SMO communities</li>
        </ul>

        <h3>b. Breach of Conduct Complaints</h3>
        <ul>
            <li>Staff behavior violations</li>
            <li>Physical and psychological abuse</li>
            <li>Sexual exploitation and abuse</li>
            <li>Harassment</li>
            <li>Child abuse/exploitation</li>
            <li>Fraud and corruption</li>
            <li>Unethical business practices</li>
            <li>Criminal offences</li>
        </ul>

        <h3>c. Anonymous Complaints</h3>
        <p>While identity disclosure is encouraged for thorough investigation, anonymous complaints will be reviewed.</p>

        <div class="important-note">
            <h3>Time Limit for Complaints</h3>
            <p>Complaints must be filed within <strong>six months</strong> of the incident date.</p>
        </div>
    </div>

    <div class="section">
        <h2>3. Complaint Handling Process</h2>
        <ol>
            <li>Complaint receipt and acknowledgment (within 2 days)</li>
            <li>Risk assessment and protection measures</li>
            <li>Investigation determination</li>
            <li>Investigation process (if warranted)</li>
            <li>Outcome communication</li>
        </ol>
    </div>

    <div class="section">
        <div class="confidentiality">
            <h2>4. Confidentiality</h2>
            <p>SMO maintains strict confidentiality throughout the complaints process:</p>
            <ul>
                <li>Only authorized staff members handle complaints</li>
                <li>All participant information is protected</li>
                <li>Written consent required for information disclosure</li>
                <li>Disclosure only permitted when legally required or in organization's best interest</li>
            </ul>
        </div>
    </div>
    <!-- Footer -->
    <footer class="gradient-bg text-white py-6 mt-8">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; <?php echo date('Y'); ?> Social Metrics Organisation. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>