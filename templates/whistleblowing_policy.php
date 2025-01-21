<?php
$pageTitle = "SMO Whistleblowing Policy";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #2c5282;
            --secondary-color: #4299e1;
            --accent-color: #ebf8ff;
            --text-color: #2d3748;
            --border-radius: 12px;
        }

        body {
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            line-height: 1.7;
            margin: 0;
            padding: 0;
            color: var(--text-color);
            background: linear-gradient(135deg, #f6f9fc 0%, #edf2f7 100%);
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
        }

        .policy-card {
            background: white;
            border-radius: var(--border-radius);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);
            padding: 40px;
            margin-bottom: 30px;
        }

        h1 {
            color: var(--primary-color);
            text-align: center;
            font-size: 2.5em;
            margin-bottom: 40px;
            padding-bottom: 20px;
            border-bottom: 3px solid var(--accent-color);
            position: relative;
        }

        h1::after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background-color: var(--secondary-color);
        }

        h2 {
            color: var(--primary-color);
            font-size: 1.5em;
            margin-top: 35px;
            padding: 15px 0;
            border-left: 4px solid var(--secondary-color);
            padding-left: 15px;
            background: linear-gradient(to right, var(--accent-color), white);
        }

        .section-card {
            background: white;
            border-radius: var(--border-radius);
            padding: 25px;
            margin: 20px 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease;
        }

        .section-card:hover {
            transform: translateY(-2px);
        }

        ul, ol {
            padding-left: 25px;
        }

        li {
            margin-bottom: 10px;
            position: relative;
        }

        .alert {
            background: var(--accent-color);
            border-radius: var(--border-radius);
            padding: 20px;
            margin: 20px 0;
            border-left: 4px solid var(--secondary-color);
            position: relative;
        }

        .alert::before {
            font-family: 'Font Awesome 6 Free';
            content: '\f05a';
            position: absolute;
            left: -12px;
            top: 50%;
            transform: translateY(-50%);
            background: white;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--secondary-color);
            font-weight: 900;
        }

        .important {
            background: #fff3cd;
            border-left: 4px solid #ffc107;
            border-radius: var(--border-radius);
            padding: 20px;
            margin: 20px 0;
        }

        .icon-list li {
            list-style: none;
            padding-left: 30px;
            position: relative;
        }

        .icon-list li::before {
            font-family: 'Font Awesome 6 Free';
            content: '\f058';
            position: absolute;
            left: 0;
            color: var(--secondary-color);
            font-weight: 900;
        }

        .contact-section {
            background: var(--primary-color);
            color: white;
            padding: 30px;
            border-radius: var(--border-radius);
            margin: 40px 0;
        }

        .contact-section h3 {
            color: white;
            margin-top: 0;
        }

        .footer {
            text-align: center;
            padding: 30px;
            color: #666;
            background: white;
            border-radius: var(--border-radius);
            margin-top: 40px;
        }

        @media (max-width: 768px) {
            .container {
                padding: 15px;
                margin: 20px auto;
            }

            .policy-card {
                padding: 20px;
            }

            h1 {
                font-size: 2em;
            }

            h2 {
                font-size: 1.3em;
            }
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin: 30px 0;
        }

        .grid-item {
            background: white;
            padding: 20px;
            border-radius: var(--border-radius);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .process-step {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            padding: 15px;
            background: white;
            border-radius: var(--border-radius);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .step-number {
            background: var(--secondary-color);
            color: white;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            flex-shrink: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="policy-card">
            <h1><?php echo $pageTitle; ?></h1>

            <div class="alert">
                <p><i class="fas fa-shield-alt"></i> SMO aims to maintain the highest standards of openness, decency, integrity and accountability in its work. This policy outlines how to report concerns and the protection offered to whistleblowers.</p>
            </div>

            <h2><i class="fas fa-bullseye"></i> Policy Purpose</h2>
            <ul class="icon-list">
                <li>Encourage SMO staff to feel confident to make a disclosure of concerns</li>
                <li>Provide avenues for raising those concerns</li>
                <li>Reassure protection when raising a concern</li>
                <li>Provide a framework for raising concerns in a supportive atmosphere</li>
            </ul>

            <h2><i class="fas fa-users"></i> Who Does This Policy Apply To?</h2>
            <div class="grid-container">
                <div class="grid-item">
                    <h3>Internal Stakeholders</h3>
                    <ul class="icon-list">
                        <li>Trustees</li>
                        <li>Employees</li>
                        <li>Volunteers</li>
                        <li>Temporary staff</li>
                    </ul>
                </div>
                <div class="grid-item">
                    <h3>External Stakeholders</h3>
                    <ul class="icon-list">
                        <li>Consultants</li>
                        <li>Suppliers</li>
                        <li>Contractors</li>
                        <li>Service users</li>
                    </ul>
                </div>
            </div>

            <h2><i class="fas fa-exclamation-triangle"></i> What Should Be Reported?</h2>
            <div class="grid-container">
                <div class="grid-item">
                    <h3>Financial Concerns</h3>
                    <ul class="icon-list">
                        <li>Corruption and bribery</li>
                        <li>Money laundering</li>
                        <li>Fraud</li>
                        <li>Financial irregularities</li>
                    </ul>
                </div>
                <div class="grid-item">
                    <h3>Operational Concerns</h3>
                    <ul class="icon-list">
                        <li>Policy breaches</li>
                        <li>Procurement irregularities</li>
                        <li>Position abuse</li>
                        <li>Health and safety risks</li>
                    </ul>
                </div>
                <div class="grid-item">
                    <h3>Other Concerns</h3>
                    <ul class="icon-list">
                        <li>Discrimination</li>
                        <li>Environmental damage</li>
                        <li>Confidentiality breaches</li>
                        <li>Gross injustice</li>
                    </ul>
                </div>
            </div>

            <h2><i class="fas fa-comment-dots" aria-label="How to Report a Concern"></i> How to Report a Concern</h2>
            <div class="contact-section">
                <h3>Reporting Channels</h3>
                
                <div class="process-step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <p>Report through the normal line of management:</p>
                        <ul class="icon-list">
                            <li>Contact your immediate line manager first</li>
                            <li>They have responsibility to investigate allegations in line with SMO's disciplinary procedures</li>
                        </ul>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <p>If uncomfortable with the line manager or unsatisfied with the response, contact:</p>
                        <ul class="icon-list">
                            <li>Project Manager</li>
                            <li>Country Director</li>
                            <li>HR representative</li>
                        </ul>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <p>For safeguarding concerns:</p>
                        <ul class="icon-list">
                            <li>Report to the line manager, functional lead, or designated safeguarding officer</li>
                            <li>They will initiate the procedure for dealing with suspected or actual incidents</li>
                        </ul>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <p>Additional Rights:</p>
                        <ul class="icon-list">
                            <li>You have the right to seek advice from a union representative</li>
                            <li>You may consult one trusted colleague under confidentiality</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <h2><i class="fas fa-user-shield"></i> Confidentiality and Protection</h2>
            <div class="grid-container">
                <div class="grid-item">
                    <h3>Reporting Options</h3>
                    <ul class="icon-list">
                        <li><strong>Confidential:</strong> Identity known but protected</li>
                        <li><strong>Anonymous:</strong> Identity completely unknown</li>
                    </ul>
                </div>
                <div class="grid-item">
                    <h3>Protection Guarantees</h3>
                    <ul class="icon-list">
                        <li>Protection from retaliation</li>
                        <li>Protection from victimization</li>
                        <li>Protection from unfair treatment</li>
                    </ul>
                </div>
            </div>

            <h2><i class="fas fa-search"></i> Investigation Process</h2>
            <div class="process-step">
                <div class="step-number">1</div>
                <div>Appropriate investigator appointed based on concern type</div>
            </div>
            <div class="process-step">
                <div class="step-number">2</div>
                <div>Whistleblower informed of investigator's identity</div>
            </div>
            <div class="process-step">
                <div class="step-number">3</div>
                <div>Confidentiality maintained throughout process</div>
            </div>
            <div class="process-step">
                <div class="step-number">4</div>
                <div>Accused informed and given opportunity to respond</div>
            </div>
            <div class="process-step">
                <div class="step-number">5</div>
                <div>Whistleblower briefed on investigation outcome</div>
            </div>

            <div class="alert" style="margin-top: 40px;">
                <p><strong>Important Note:</strong> Reports must be made in good faith. Malicious or knowingly untrue reports may result in disciplinary action.</p>
            </div>

            <h2><i class="fas fa-external-link-alt"></i> External Reporting</h2>
            <p>While SMO encourages internal reporting first, in some circumstances it may be appropriate to report concerns to external regulators. Please seek advice before reporting externally.</p>

            <div class="footer">
                <p>Last Updated: 2020<br>
                This policy is subject to periodic review and updates.</p>
            </div>
        </div>
    </div>
</body>
</html>