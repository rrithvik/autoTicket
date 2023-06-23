autoTicket
========
<img height="80px" width="80px" src="images/favicon.png"
align="left" hspace="10" vspace="6">

**autoTicket** is an expansion of osTicket, a widely-used open source support ticket system. It seamlessly
integrates inquiries created via email, phone and web-based forms into a
simple easy-to-use multi-user web interface. Manage, organize and archive
all your support requests and responses in one place while providing your
customers with accountability and responsiveness they deserve.

How autoTicket works for you
--------------------------
  1. Users create tickets via your website, email, or phone
  1. Incoming tickets are saved and assigned to agents
  1. Agents help your users resolve their issues

autoTicket is an attractive alternative to higher-cost and complex customer
support systems; simple, lightweight, reliable, open source, web-based and
easy to setup and use. The best part is, it's completely free.

Requirements
------------
  * HTTP server running Microsoft® IIS or Apache
  * PHP version 8.0 - 8.1 (8.1 recommended)
  * mysqli extension for PHP
  * MySQL database version 5.5

### Recommendations
  * gd, gettext, imap, json, mbstring, and xml extensions for PHP
  * APC module enabled and configured for PHP

Deployment
----------
autoTicket now supports bleeding-edge installations. The easiest way to
install the software and track updates is to clone the public repository.
Create a folder on you web server (using whatever method makes sense for
you) and cd into it. Then clone the repository (the folder must be empty!):

    git clone https://github.com/rrithvik/autoTicket

And install the required dependencies. (Note: There may be more dependencies required during the setup)

    pip install requirements.txt
    sed 's/#.*//' requirements-apt.txt | xargs sudo apt-get install

And deploy the code into somewhere in your server's www root folder, for
instance

    cd autoTicket
    php manage.php deploy --setup /var/www/htdocs/autoticket/

Then you can configure your server if necessary to serve that folder, and
visit the page and install autoTicket as usual. Go ahead and even delete
setup/ folder out of the deployment location when you’re finished. Then,
later, you can fetch updates and deploy them (from the folder where you
cloned the git repo into)

    git pull
    php manage.php deploy -v /var/www/htdocs/autoTicket/

Help
----
Visit the [Documentation](https://docs.osticket.com/) or the
[forum](https://forum.osticket.com/). And if you'd like professional help
managing your autoTicket installation,
[commercial support](https://osticket.com/support/) is available.
Many of the issues you may face can be addressed in the osTicket. If the 
answer to your issue does not exist there, please ask the question in 
autoTicket's issue's tab.

Contributing
------------
Create your own fork of the project and use
[git-flow](https://github.com/nvie/gitflow) to create a new feature. Once
the feature is published in your fork, send a pull request to begin the
conversation of integrating your new feature into autoTicket.

### Localization
[![Crowdin](https://d322cqt584bo4o.cloudfront.net/osticket-official/localized.png)](http://i18n.osticket.com/project/osticket-official)

The interface for autoTicket is now completely translatable. Language packs
are available on the [download page](https://osticket.com/download). If you
do not see your language there, join the [Crowdin](https://crowdin.com/project/osticket-official)
project and request to have your language added. Languages which reach 100%
translated are are significantly reviewed will be made available on the
autoTicket download page.

The software can also be translated in place in our [JIPT site](http://jipt.i18n.osticket.com).
Once you have a Crowdin account, login and translate the software in your browser!

Localizing strings in new code requires usage of a [few rules](setup/doc/i18n.md).

License
-------
autoTicket is released under the GPL2 license. See the included LICENSE.txt
file for the gory details of the General Public License.

autoTicket is supported by several magical open source projects including:
  * [osTicket](https://github.com/osTicket/osTicket/)
  * [Font-Awesome](http://fortawesome.github.com/Font-Awesome/)
  * [HTMLawed](http://www.bioinformatics.org/phplabware/internal_utilities/htmLawed)
  * [jQuery dropdown](http://labs.abeautifulsite.net/jquery-dropdown/)
  * [jsTimezoneDetect](http://pellepim.bitbucket.org/jstz/)
  * [mPDF](http://www.mpdf1.com/)
  * [PasswordHash](http://www.openwall.com/phpass/)
  * [PEAR](http://pear.php.net/package/PEAR)
  * [PEAR/Auth_SASL](http://pear.php.net/package/Auth_SASL)
  * [PEAR/Mail](http://pear.php.net/package/mail)
  * [PEAR/Net_SMTP](http://pear.php.net/package/Net_SMTP)
  * [PEAR/Net_Socket](http://pear.php.net/package/Net_Socket)
  * [PEAR/Serivces_JSON](http://pear.php.net/package/Services_JSON)
  * [php-gettext](https://launchpad.net/php-gettext/)
  * [phpseclib](http://phpseclib.sourceforge.net/)
  * [Spyc](http://github.com/mustangostang/spyc)
