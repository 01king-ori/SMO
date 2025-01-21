<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo "Social Metrics Organisation"; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <!-- Favicon -->
    <link href="assets/images/favicon.ico" rel="icon">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
        }
        .nav-link {
            color: #ffffff !important;
            font-weight: 600;
            padding: 10px 15px;
            text-decoration: none;
        }
        .nav-link:hover {
            color: #3b82f6 !important;
            background-color: #f3f4f6;
            border-radius: 5px;
            transition: all 0.3s;
        }
        .navbar {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 15px 0;
        }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Header with logo -->
    <header class="gradient-bg text-white py-8 mb-4">
        <div class="container mx-auto px-4">
            <div class="flex flex-col items-center text-center">
                <img src="../assets/images/logo.png" alt="Logo" class="h-16 mb-4">
                <h1 class="text-4xl font-bold mb-4">Social Metrics Organisation</h1>
                <p class="text-xl">Time-based delivery of results and reports for decision making</p>
                <!-- <div class="mt-6">
                    <a href="#services" class="bg-white text-blue-700 font-bold py-2 px-6 rounded-full shadow-lg hover:bg-gray-200 transition">Explore Our Services</a>
                    <a href="#contact" class="bg-blue-700 text-white font-bold py-2 px-6 rounded-full shadow-lg hover:bg-blue-800 transition ml-4">Get in Touch</a>
                </div> -->
            </div>
        </div>
    </header>

    <!-- Navigation -->
    <nav class="gradient-bg shadow-lg sticky top-0 z-50">
        <div class="container mx-auto">
            <div class="navbar">
                <a href="../templates/index.php" class="nav-link">Home</a>
                <a href="../templates/about.php" class="nav-link">About Us</a>
                <!-- <a href="organisation.php" class="nav-link">Organisation</a>
                <a href="research.php" class="nav-link">Research</a>
                <a href="consulting.php" class="nav-link">Consulting</a>
                <a href="training.php" class="nav-link">Training</a> -->
                <a href="../templates/whistleblowing_policy.php" class="nav-link">Whistleblowing Policy</a>
                <a href="../templates/anticorruption_policy.php" class="nav-link">Anti-Corruption Policy</a>
                <a href="../templates/code_of_conduct.php" class="nav-link">Code of Conduct</a>
                <a href="../templates/complaints_policy.php" class="nav-link">Complaints Policy</a>
                <a href="../templates/safeguarding_policy.php" class="nav-link">Safeguarding Policy</a>
                <a href="../templates/contact.php" class="nav-link">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Main Content (Index Page) -->
    <main class="container mx-auto px-4 py-8">
        <!-- Organization Info Card -->
        <div class="card p-6 mb-8">
            <h2 class="text-2xl font-bold mb-4">Organization Profile</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <p><strong>Name:</strong> SOCIAL METRICS ORGANISATION (SMO)</p>
                    <p><strong>Type:</strong> National Non-Governmental</p>
                    <p><strong>Registration:</strong> RRC #2996 (2020)</p>
                </div>
                <div>
                    <p><strong>Location:</strong> South Sudan</p>
                    <p><strong>Address:</strong> Off Unity Road, Hai Malakal, Juba</p>
                    <p><strong>Contact:</strong> +211922189467 | smo.org.ssd@gmail.com</p>
                </div>
            </div>
        </div>

        <!-- Vision & Mission -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
            <div class="card p-6">
                <h2 class="text-2xl font-bold mb-4">Vision</h2>
                <p>A time-based delivery of results and reports for decision making in humanitarian, development and environmental actions.</p>
            </div>
            <div class="card p-6">
                <h2 class="text-2xl font-bold mb-4">Mission</h2>
                <p>Social Metrics Organization seeks to respond to and or disseminate humanitarian, development and environmental issues based on informed data, assessments and reports.</p>
            </div>
        </div>

        <!-- Core Values -->
        <div class="card p-6 mb-8">
            <h2 class="text-2xl font-bold mb-4">Core Values</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <?php
                $coreValues = ['Integrity', 'Professionalism', 'Respect for diversity', 'Accountability', 'Team work', 'Non-violence', 'Justice'];
                foreach ($coreValues as $value) {
                    echo "<div class='bg-blue-100 p-3 rounded-lg text-center'>{$value}</div>";
                }
                ?>
            </div>
        </div>

        <!-- Key Areas -->
        <div class="card p-6 mb-8">
            <h2 class="text-2xl font-bold mb-4">Key Areas of Operation</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-gray-50 p-4 rounded-lg">
                    <h3 class="text-xl font-bold mb-2">Research and Development</h3>
                    <p>Employing systematic qualitative and quantitative research methodologies to establish scientific facts and use research outputs to inform humanitarian, environmental and development objectives.</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg">
                    <h3 class="text-xl font-bold mb-2">Humanitarian Action</h3>
                    <p>Carry out interventions that alleviate man-made or nature triggered human suffering, support recovery and empower communities to realize development initiatives.</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg">
                    <h3 class="text-xl font-bold mb-2">Climate Change Reversal</h3>
                    <p>Commitment to climate change reversal and healthy environmental for a world fit for fauna and flora on land and in water.</p>
                </div>
            </div>
        </div>

        <!-- Organizational Capacity -->
        <div class="card p-6">
            <h2 class="text-2xl font-bold mb-4">Organizational Capacity</h2>
            <div class="space-y-4">
                <?php
                $capacities = [
                    'Research and development' => 'Social Metrics Organisation personnel have vast experience designing and employing systematic qualitative and quantitative research methodologies.',
                    'Food sovereignty' => 'Vast practical experience in food independence interventions including sustainable agri-actions via innovative agri-technology.',
                    'Peaceful and inclusive society' => 'Expertise in gender and child protection services in conflict and post conflict countries.',
                    'Sustainable environment action' => 'Well versed in ecological conversation using environmentally safe models (Reduce, Reuse, Recycle).',
                    'Business process model' => 'Well trained on CaLP platforms in cash transfer and voucher programs.',
                    'Protection and safeguarding' => 'Embraces inclusivity and diversity with zero tolerance for sexual abuse and exploitation.'
                ];

                foreach ($capacities as $title => $description) {
                    echo "
                    <div class='bg-gray-50 p-4 rounded-lg'>
                        <h3 class='text-xl font-bold mb-2'>{$title}</h3>
                        <p>{$description}</p>
                    </div>";
                }
                ?>
            </div>
        </div>
    </main>
       <!-- Footer -->
       <footer class="gradient-bg text-white py-6 mt-8">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; <?php echo date('Y'); ?> Social Metrics Organisation. All rights reserved.</p>
        </div>
    </footer>
    
</body>
</html>
