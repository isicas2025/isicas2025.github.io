        <div class="timestamp">
        <?php
            date_default_timezone_set('Asia/Singapore');
            //echo "Last update: ".date("F d Y H:i.", filemtime("index.php"));
            $last_modification = filemtime($_SERVER['SCRIPT_FILENAME']);
            echo "Last modified: ".date("F d Y H:i", $last_modification)," GMT+8";
        ?>
        </div>