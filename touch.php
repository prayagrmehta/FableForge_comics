<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get in Touch - FableForge Support</title>
    <style>
        /* Basic Reset */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            align-items: stretch;
        }

        /* Container Styling */
        .container {
            margin:auto;
            background-color: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            width: 90%;
            max-width: 600px;
        }
        
        /* Header Styling */
        h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 1.5rem;
            text-align: center;
            font-weight: 500;
        }
        
        /* Form Group Styling */
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        /* Label Styling */
        label {
            display: block;
            font-size: 14px;
            font-weight: bold;
            color: #555;
            margin-bottom: 0.5rem;
        }
        
        /* Input, Select, Textarea Styling */
        input[type="text"],
        input[type="email"],
        input[type="file"],
        select,
        textarea {
            width: 100%;
            padding: 0.8rem;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f9f9f9;
            transition: border-color 0.3s;
        }
        input:focus,
        select:focus,
        textarea:focus {
            border-color: #007bff;
            outline: none;
        }
        
        /* Two Columns for First and Last Name */
        .name-fields {
            display: flex;
            gap: 1rem;
        }
        .name-fields input[type="text"] {
            width: 100%;
        }

        /* Textarea Styling */
        textarea {
            resize: vertical;
            min-height: 100px;
        }

        /* Submit Button Styling */
        .submit-button {
            width: 100%;
            padding: 0.75rem;
            font-size: 16px;
            color: #fff;
            background-color: #d9534f;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        .submit-button:hover {
            background-color: #c9302c;
        }

        /* File Attachment Note */
        .attachment-note {
            font-size: 12px;
            color: #888;
            margin-top: 0.5rem;
        }

        /* Success Message Styling */
        .success-message {
            display: none;
            text-align: center;
            color: #4CAF50;
            font-size: 18px;
            margin-top: 1rem;
            font-weight: bold;
        }

        /* Error Message Styling */
        .error-message {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Get in Touch with FableForge Customer Support</h1>
        <form id="supportForm" action="#">
            <div class="form-group">
                <label for="product">Please select a product</label>
                <select id="product" name="product" required>
                    <option value="" disabled selected>Select a product</option>
                    <option value="product1">Product 1</option>
                    <option value="product2">Product 2</option>
                    <option value="product3">Product 3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
                <div class="error-message" id="emailError"></div>
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" required>
                <div class="error-message" id="subjectError"></div>
            </div>
            <div class="form-group name-fields">
                <div>
                    <label for="first-name">First Name</label>
                    <input type="text" id="first-name" name="first-name" required>
                </div>
                <div>
                    <label for="last-name">Last Name</label>
                    <input type="text" id="last-name" name="last-name" required>
                </div>
            </div>
            <div class="form-group">
                <label for="description">How can we help?</label>
                <textarea id="description" name="description" placeholder="Describe your issue in detail..." required></textarea>
                <div class="error-message" id="descriptionError"></div>
            </div>
            <div class="form-group">
                <label for="attachment">Attachments (optional)</label>
                <input type="file" id="attachment" name="attachment">
                <p class="attachment-note">Max file size: 5MB</p>
            </div>
            <button type="button" class="submit-button" onclick="submitForm()">Submit</button>
        </form>
        <p class="success-message" id="successMessage">Your request has been sent successfully!</p>
    </div>

    <script>
        function submitForm() {
            // Clear previous error messages
            document.getElementById('emailError').innerText = "";
            document.getElementById('subjectError').innerText = "";
            document.getElementById('descriptionError').innerText = "";

            // Get form values
            const email = document.getElementById('email').value;
            const subject = document.getElementById('subject').value;
            const description = document.getElementById('description').value;

            // Regular Expressions for validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            const textRegex = /^[A-Za-z0-9 ]{3,}$/;

            let isValid = true;

            // Email validation
            if (!emailRegex.test(email)) {
                document.getElementById('emailError').innerText = "Please enter a valid email address.";
                isValid = false;
            }

            // Subject validation
            if (!textRegex.test(subject)) {
                document.getElementById('subjectError').innerText = "Subject must contain at least 3 alphanumeric characters.";
                isValid = false;
            }

            // Description validation
            if (description.length < 10) {
                document.getElementById('descriptionError').innerText = "Description must be at least 10 characters long.";
                isValid = false;
            }

            // If all fields are valid, show success message
            if (isValid) {
                document.getElementById('supportForm').reset(); // Clear the form
                document.getElementById('successMessage').style.display = 'block'; // Show success message
            }
        }
    </script>
<?php include 'footer.php'; ?>
</body>
</html>
