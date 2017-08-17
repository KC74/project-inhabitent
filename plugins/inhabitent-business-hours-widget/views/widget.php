<!-- This file is used to markup the public-facing widget. -->
<?php if ( strlen( trim( $monday_friday ) ) > 0 ) : ?>
    <p>
        <span class="day-of-week">Monday-Friday:</span> 9am to 5pm   
    </p>
<?php endif; ?>
<?php if ( strlen( trim( $saturday ) ) > 0 ) : ?>
    <p>
        <span class="day-of-week">Saturday:</span> 10am to 2pm   
    </p>
<?php endif; ?>
<?php if ( strlen( trim( $sunday ) ) > 0 ) : ?>
    <p>
        <span class="day-of-week">Sunday:</span> Closed   
    </p>
<?php endif; ?>
