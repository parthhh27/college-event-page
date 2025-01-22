<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link href="styles/styles.css" rel="stylesheet">

</head>
<body>
    <?php
        $pageTitle = isset($pageTitle) ? $pageTitle : 'default'; // Default value if not set
        // echo 'Page Title: ' . $pageTitle;
    ?>
    <!-- Header -->
    <div class="header">
        <div class="left_section">
            <a href="https://www.keystoneschoolofengineering.com/">
                <div class="college_info">
                    <img class=college_logo src="images/logo.jpeg">
                    <p class="college_name">
                        <span class="keystone">KEYSTONE<br></span> SCHOOL OF ENGINEERING
                    </p>
                </div>
            </a>
            
            
            <img class=naac_logo src="images/naac_logo.webp">
        </div>
        <div class="middle_section">
            <img class="search_icon" src="images/search_icon_whiteBG.webp">
            <input type="text" class="search_input" placeholder='Search for events' name="search" >
        </div>
        <div class="right_section">
            <!-- <button id="show_login" class="reg_button">Log in</button>
            <button id="show_signin" class="reg_button">Sign in</button> -->
            <!-- Conditional buttons based on page -->
            <?php if ($pageTitle == 'create_event'): ?>
                <!-- <button class="reg_button">Create Event</button> -->
                 <a>Create Event</a>
            <?php else: ?>
                <button id="show_login" class="reg_button">Log in</button>
                <button id="show_signin" class="reg_button">Sign in</button>
            <?php endif; ?>
        </div>  
    </div>

</body>
</html>