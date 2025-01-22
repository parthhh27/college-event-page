<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Event 2</title>
    <link href="styles/styles.css" rel="stylesheet">
</head>
<body>
    <?php
        $pageTitle='create_event'; 
        include 'header.php';
        // include 'sidebar.php';
        // echo "Page Title in create_event.php: " . $pageTitle;
    ?>


    <div class="event_form">
        <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
            <label id="create_event_header">Create Event</label>
            <div class="sub_form_details">

                <div class="event_main_details_and_thumbnail">
                    <div class="event_main_details">
                        <div class="single_detail">
                            <label class="details_key">Event Title:</label>
                            <input name="event_title" type="text" class="input_form_data" >
                        </div>
                        <div class="single_detail">
                            <label class="details_key">Event Date:</label>
                            <input name="event_date" type="date" class="input_form_data" >
                        </div>
                        <div class="single_detail">
                            <label class="details_key">Event Venue:</label>
                            <input name="event_venue" type="text" class="input_form_data" >
                        </div>
                    </div>
                    <div class="event_thumbnail">
                        <label class="details_key">Upload Event thumbnail:</label>
                        <input name="event_thumbnail" type="file" accept=".jpg,.jpeg,.png," id="imageUpload" name="image">
                    </div>
                </div>
                    
                <div class="event_sub_details">
                    <div id="event_type_box" class="single_detail">
                        <label class="details_key">Event type:</label>
                        <input name="event_type" type="select" class="input_form_data" >
                    </div>
                    <div id="event_category_box" class="single_detail">
                        <label class="details_key">Event category</label>
                        <input name="event_category" type="select" class="input_form_data" >
                    </div>
                </div>

                <div class="event_description">
                    <div class="single_detail">
                        <label class="details_key">Event Description</label>
                        <textarea name="event_description" class="input_form_data" id="event_description" name="event_description" rows="5" cols="5" placeholder="Enter the event description here..."></textarea>
                    </div>
                </div>

                <div class="event_other_details">
                    <div class="event_coordinator_details">
                        <label id="coordinator_title">Event Coordinator Details</label>

                        <div class="single_detail">
                            <label class="details_key">Number of Coordinators:</label>
                            <input name="event_totalCoordinators" type="select" class="input_form_data">
                        </div>
                        <div class="single_detail">
                            <label class="details_key">Coordinator Name:</label>
                            <input name="event_coordinatorName" type="text" class="input_form_data" >
                        </div>
                        <div class="single_detail">
                            <label class="details_key">Coordinator Contact:</label>
                            <input name="event_contact" type="text" class="input_form_data" >
                        </div>
                    </div>
                    <div class="event_guest_details">
                        <label id="chiefGuest_title">Chief Guest Details</label>

                        <div class="single_detail">
                            <label class="details_key">Number of Chief Guests:</label>
                            <input name="event_totalChiefGuests" type="select" class="input_form_data">
                        </div>
                        <div class="single_detail">
                            <label class="details_key">Resource Person Name:</label>
                            <input name="event_guestName" type="text" class="input_form_data" >
                        </div>
                        <div class="single_detail">
                            <label class="details_key">Company:</label>
                            <input name="event_guestName" type="text" class="input_form_data" >
                        </div>
                        <div class="single_detail">
                            <label class="details_key">Contact:</label>
                            <input name="event_guestName" type="text" class="input_form_data" >
                        </div>
                        <div class="single_detail">
                            <label class="details_key">Email:</label>
                            <input name="event_guestName" type="text" class="input_form_data" >
                        </div>
                    </div>
                </div>


            </div>
            
            <div class="add_event">
                    <input class="add_event_button" name="add_event_btn" type="submit" value="Add Event">
            </div>
            
        </form>

    </div>
    
</body>
</html>