<?php
    echo '<ul>';
    $hours = array(
        array( 'Monday', '9:00 AM', '5:00 PM' ),
        array( 'Tuesday', '9:00 AM', '5:00 PM' ),
        array( 'Wednesday', '9:00 AM', '5:00 PM' ),
        array( 'Thursday', '8:00 AM', '5:00 PM' ),
        array( 'Friday', '9:00 AM', '5:00 PM' ),
        array( 'Saturday', '9:00 AM', '5:00 PM' ),
        array( 'Sunday', '9:00 AM', '3:00 PM' ),
				array( '', '', '' ) //Leave last blank array to avoid php array offset notice.
    );
    // Set sub
    $s = -1;
    for ( $i = 1; $i <= 7; $i++ ) {
        if ( $hours[ $i ][ 1 ] !== $hours[ $i - 1 ][ 1 ] || $hours[ $i ][ 2 ] !== $hours[ $i - 1 ][ 2 ] ) {
            if ( $hours[ $i + $s ][ 0 ] !== $hours[ $i - 1 ][ 0 ] ) {
                // Multiple days
                echo '<li>'.  $hours[ $i + $s ][ 0 ] . ' - ' . $hours[ $i - 1 ][ 0 ] . ': ' . $hours[ $i - 1 ][ 1 ] . ' - ' . $hours[ $i - 1 ][ 2 ] . '</li>';
            } else {
                // Single day
                echo '<li>'. $hours[ $i - 1 ][ 0 ] . ': ' . $hours[ $i - 1 ][ 1 ] . ' - ' . $hours[ $i - 1 ][ 2 ] . '</li>';
            }
            // Reset sub
            $s = -1;
        }
        else {
            // Increase (decrease) sub
            $s--;
        }
    }
    echo '</ul>';
?>
