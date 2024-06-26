<?php
include(APP_ROOT . '/views/inc/resident_side_nav.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo URL_ROOT . '/css/style.css'; ?>" />
</head>

<body onload="randerDate()">
    <div class="main-content">
        <?php
        // flash message
        try {
            foreach ($_SESSION['flash'] as $key => $value) {
                flash($key);
            }
        } catch (Throwable $th) {
            echo '';
        }
        ?>
        <div class="new-complaint-landing">
            <div class="complaint-column-new">
                <div class="complaint-type">
                    <div class="complaint-log">
                        <img src="<?php echo URL_ROOT . '/resources/complaint/one-finger-tap.svg' ?>" class="select-complaint-img" />
                        <span class="complaint-type-title">Complaints Log</span>
                    </div>

                    <div class="new-complaint">
                        <img src="<?php echo URL_ROOT . '/resources/complaint/hand-held-tablet-writing.svg' ?>" class="new-complaint-img" />
                        <a href="<?php echo URL_ROOT . '/residents/complaintAdd' ?>"><span class="complaint-type-title">New Complaint</span></a>
                    </div>
                </div>

                <?php foreach ($data['complaints'] as $index => $complaint) : ?>
                    <div class="complaint-log-content">
                        <div class="id-column">
                            <h4 class="complaint-id-heading">Complaint ID</h4>
                            <p class="complaint-id"></p><?php echo $complaint->complaint_id; ?></p>
                        </div>

                        <div class="date-column">
                            <h4 class="complaint-date-heading">Complaint Date</h4>
                            <p class="complaint-date"></p><?php echo $complaint->created_date; ?></p>
                        </div>

                        <div class="description-column">
                            <h4 class="complaint-type-heading"><?php echo $complaint->topic; ?></h4>
                            <p class="complaint-description"></p><?php echo $complaint->subject; ?></p>
                        </div>

                        <div class="status-column">
                            <h4 class="complaint-status-heading">Status</h4>
                            <p class="status-inprogress"><?php echo $complaint->status; ?></p>
                        </div>

                        <div class="file-column">
                            <h4 class="complaint-action-heading">Action</h4>
                            <div class="button-action">
                                <a href="<?php echo URL_ROOT . '/residents/complaintDetail/' . $complaint->complaint_id; ?>">
                                    <button class="viewButton">View</button>
                                </a>
                                <a href="<?php echo URL_ROOT . '/residents/complaintEdit/' . $complaint->complaint_id; ?>">
                                    <button class="updateButton">Update</button>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
    <script src="<?php echo URL_ROOT . '/js/index.js'; ?>"></script>
</body>

</html>