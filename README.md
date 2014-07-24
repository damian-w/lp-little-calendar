Little Calendar for Little Printer
=============
I bought a Little Printer, plugged it in and discovered there was no publications to pull calendar data!! So, this is my answer to that dilemma.

Little Calendar for iCloud is very much a work in progress. It'll likely be launched to Little Printer owners in some sore of weird beta phase.

Obviously this readme also a work in progress. I'll be much more detailed once completed more of the project.

About
-----

This is a semi-complex publication for the [Little Printer](http://bergcloud.com/littleprinter/) that uses external configuration to connect and publish iCloud Calender data straight to a users Little Printer for their Monday-morning digest. Theoretically and eventually, this same principle could be used to access contact data (eg. to publish birthday notifications without the need for Facebook connectivity).

Released under the GNU General Public Licence v2.


How you could use it
--------------------

If you'd like to clone this project and use it yourself, you're more than welcome!

...

Don't hesitate to contact me if you'd like some help with anything.


How it Works
------------

BERG has a defined [specification](http://remote.bergcloud.com/developers/reference/) for Little Printer which is super helpful.
Explained below is the layout and file structure... the method to my (little) madness.

*	edition/
	*	index.php - processes the main publication (what the user recieves) [edition](http://remote.bergcloud.com/developers/reference/edition)
*	sample/
	*	index.php - generates a "sample" for the BERG Cloud publication viewer, currently identical to the "edition" as we don't need any authentication or data from the viewer - it's just a simple news publication [sample](http://remote.bergcloud.com/developers/reference/sample)
*	validate_config/	
	*	index.php - used in [validating](http://remote.bergcloud.com/developers/reference/validate_config) any user configuration which is then passed to/from BERG (which is none as explained above)
*	meta.json - the configuration of the publication as defined in the [reference documentation](http://remote.bergcloud.com/developers/reference/metajson)
*	icon.png - 55px by 55px icon used in the publication viewer for users to quickly identify the content
*	functions.php - includes all the custom functions and handles practically everything
*	header.php - contains the template for the header section of the publication
*	footer.php - just like the header, contains the footer section template
*	style.css - contains the styling for the publication
*	reset.css - Eric Meyer's Reset CSS v2.0 - used to reset Webkit, which aided in development

Thanks
------

...