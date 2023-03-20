Course contents block
*********************

The Course Contacts block displays a list of users on your course and various
methods for communicating with them.

The block is highly customisable and allows you to choose specific roles which
you wish to display users from. By default the block will show teachers on the
course but this can be changed however you wish.

You can also configure which communication types you wish to show, the block
can provide quick links to Email, Message or Telephone each user.

The block also shows whether the user has been active in the last five minutes.

Changelog
**********
v3.9 - Remove old/unused references to emails and quickmail. Apply fixes for identified issues and pull requests
	Thanks to mkpelletier, VladimirSavitchi, bel-omahoney, bradnielsen2981 and others
	With apologies for the large gap between reviews and updates!
v3.5.0.1 - Add Privacy API
v3.2 - Add missing capability language strings (thanks SK-Unikent)
       Add profile description as a display option
v3.1 - Option to use Alternate name for display instead of truncated full name (Thanks mkpelletier)
     - Font sizes of role name and text altered for consistency across other blocks
     - Bug fixed to add capability (Thanks savva312)
v3.0 - Minor updates to make the block work on Moodle3: minimal changes not reworked.
     - Code Checker edits
v2.0 - Fixed compatibility with MS-SQL.
     - The current user will no longer be filtered out of contacts list
       although the contact links will not be displayed for them.
     - Improved coding, removed custom DB query and made use of html writer.
     - Added a simple email form allowing users to email others directly
       from Moodle. This can be disabled through site configuration.
     - Added option to sort contact cards by recently active or date enrolled.
     - Added option to display inherited role assignments.
     - Removed dummy pluralisation after role names.
v1.0.1 - cleaned up sql queries, fixed a problem in the stylesheet
v1.0 - first release


Maintainer
**********
The block has been written and is being maintained by Mark Ward for Burton &
South Derbyshire College (UK).
v3.0/3.1 - Contributions from Richard Oelmann


Many thanks to
**************
Matthew Cannings of Sandwell.ac.uk for contributing code, suggestions and testing.
Paul Haddad for suggesting intergrated emailing and contact sorting options.
Aaricia Thorgalson for suggesting that users who are contacts should be visible on list.
Simon Hanmer for identifying problem and solution to issues with MSSQL databases.

Contact
*******
Mark Ward - http://moodle.org/user/profile.php?id=489101
Richard Oelmann - https://moodle.org/user/profile.php?id=480148

License
*******
Released Under the GNU General Public Licence http://www.gnu.org/copyleft/gpl.html
