Description of Twitter bootstrap import into Moodle

Twitter bootstrap
-----------------

Sass:
This theme uses Bootstrap version 4.6.0
The Bootstrap repository is available on:

https://github.com/twitter/bootstrap.git

To update to the latest release of twitter bootstrap:

* download bootstrap to your home folder
* remove folder theme/ilb/scss/bootstrap
* copy the scss files from ~/bootstrap/scss to theme/ilb/scss/bootstrap
* comment out left: 0; from .popover {} in scss/bootstrap/_popover.scss. In RTL mode this prevents popovers from showing and it is not required in LTR mode.
* comment out this line in theme/ilb/scss/_print.scss
    @page {
       size: $print-page-size;
    }
  It breaks when compiled with phpscss.
* update ./thirdpartylibs.xml

Javascript:

* remove folder theme/ilb/amd/src/bootstrap
* copy the js files from ~/bootstrap/js/src to theme/ilb/amd/src/bootstrap (including the subfolder)
* copy index.js from ~/bootstrap/js to theme/ilb/amd/src
* edit theme/ilb/amd/src/index.js and update import path (src -> bootstrap)
* Moodle core includes the popper.js library, make sure each of the new Bootstrap js files
includes the 'core/popper' library instead of 'popper.js'. For version 4.6.0 these files were: tooltip.js and dropdown.js
* update ./thirdpartylibs.xml to include all new Bootstrap js files
* run "grunt ignorefiles" to prevent linting errors appearing from the new Bootstrap js files.
* in folder theme/ilb run "grunt amd" to compile the bootstrap JS
* in folder theme/ilb run "grunt css" to compile scss
