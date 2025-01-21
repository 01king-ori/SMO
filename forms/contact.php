<?php
include 'includes/header.php';
?>

<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-center mb-4">Contact Us</h2>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (handleContactForm($_POST)) {
                    echo '<div class="alert alert-success">Thank you for your message. We will get back to you soon.</div>';
                } else {
                    echo '<div class="alert alert-danger">Sorry, there was an error sending your message. Please try again.</div>';
                }
            }
            ?>
            <form method="POST" action="">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>