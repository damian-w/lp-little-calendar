<?php

	/*----------------------------------------------------------*\
	| ******* Little Calendar for Little Printer by BERG ******* |
	+------------------------------------------------------------+
	|      Released under the GNU General Public Licence v2      |
	+------------------------------------------------------------+
	|   Created by Damian Worsdell           http://djw.net.au/  |
	\*----------------------------------------------------------*/
	
	// Grab all of our lovely functions...
	require ('../functions.php');
	
	// Send the ETag and the Character Set to the BERG Cloud...
	littleprinterETag();
	charset();
	
	// Create the publication...
	generateHeader(); // Generate the header HTML
	generateContent(); // Generate the HTML for the items
	generateFooter(); // Generate the footer HTML
	
	// Publication sent!!

?>