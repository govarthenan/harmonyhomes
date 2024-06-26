<?php
include(APP_ROOT . '/views/inc/general_side_nav.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create announcement</title>
    <link rel="stylesheet" href="<?php echo URL_ROOT . '/css/general_style.css' ?>" />

</head>

<body>
    <div class="main-content">
        <?php
        try {
            foreach ($_SESSION['flash'] as $key => $value) {
                flash($key);
            }
        } catch (Throwable $th) {
            echo '';
        }
        ?>
        <div class="announcement-container">
            <div class="announcement-type">
                <div class="new-next-announcement">
                    <img src="<?php echo URL_ROOT . '/resources/generals/announcement_log.svg' ?>" class="select-announcement-img" />
                    <a href="<?php echo URL_ROOT . '/generals/announcementsLog' ?>" style="text-decoration: none;"><span class="announcement-type-title">Announcement Log</span></a>
                </div>

                <div class="announcement-next-log">
                    <img src="<?php echo URL_ROOT . '/resources/complaint/hand-held-tablet-writing.svg' ?>" class="new-announcement-img" />
                    <span class="announcement-type-title">Create New Announcement</span>
                </div>
            </div>
            <form enctype="multipart/form-data" name="announcementForm" method="post" action="<?php echo URL_ROOT . '/generals/announcementAdd' ?>">
                <div class="announcement-audience">
                    <div class="audience-heading">Audience</div>
                    <div class="audience-details">
                        <div class="send-heading">Send to :</div>
                        <div class="select-audience">
                            <select id="userType" name="receiver" onchange="toggleDropdowns()">
                                <option value="all">All</option>
                                <option value="north">North wing</option>
                                <option value="east">East wing</option>
                                <option value="south">South wing</option>
                                <option value="west">West wing</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="announcement-message">
                    <div class="announcement-content-heading">Announcement Content</div>
                    <div class="announcement-content-details-title">
                        <div class="announcement-title">Title:</div>
                        <div class="title-for-announcement">
                            <input type="text" id="title" name="title" style="height:15%; width: 80%;" required>
                        </div>
                    </div>
                    <div class="announcement-content-details-message">
                        <div class="announcement-message-heading">Message:</div>
                        <div class="message-for-announcement">
                            <input id="editor" name="message" style="height:80%; width: 80%; ">
                        </div>
                    </div>
                </div>
                <div class="announcement-send-container">
                    <div class="send-announcement-button">
                        <button type="submit" id="sendButton">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="<?php echo URL_ROOT . '/js/index.js' ?>"></script>
</body>

</html>