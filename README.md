Drunycode: Using Punycode and Special Characters to Encrypt Files and Libraries (and some cool html tools)
==========================================================================================================

Overview
--------

The basis behind the concept is that using foreign characters in the url of a website using punycode, and using foreign and special characters in website files will make the websites more secure from hacking and surveillance. The methods have been tested on multiple penetration testing platforms, in which the software could not even identify the urls or the files as real pages because it didn't understand the characters. In a way, drunycode is an extremely simple and basic way of encrypting a website from systems and software rather than the traditional method of encryption from people. With over 20 separate NSA (and counting) that at least a few of them will be coded in way that will make it so that it cannot recognize the pages. In a way it is a hope that it is so simple, yet obscure, that it will work (which from our testing, it does).
For those of you that may think it is wrong to try and create a method to elude the NSA, that isn't our goal. In fact, I for one see why the original surveillance program started. Intelligence is definitely vital to keeping us safe, but so is privacy. United States intelligence objectives depend on individuals and primary sources, who wouldn't be willing to share that information with us if they didn't feel safe. The NSA surveillance programs set a world precedent for surveillance meaning nobody knows which country or government is watching them, and every government knows what they can do to watch or prevent that information from getting out. In short, our security depends on people feeling free and safe enough to share important information with us.

Punycode URL
------------

Punycode is a type of encoding used to create Internationialzed Domain Names (aka Domain names in foreign languages), what we have determined is that by having a domain name in non-ASCII it cannot be resolved by most penetration software (and hopefully snooping software, but we don't have access to that... yet).
Basically punycode converts unicode characters into ASCII characters such as 비밀2a becoming xn--2a-kt1jc010ada which means a browser can read the foreign characters instead of just "a-z" "0-9" and "-", but the software I've tested, can't. If you would like to convert text to punycode Click Here
Sometimes the browser likes to change the foreign domain back into punycode, and converting the domain to punycode instead of foreign characters can make it vulnerable again, a possible solution is adding the <meta http-equiv="location" content="http://мкд.tk"> tag to make the http response recognize the foreign domain.


Filename Character Encoding
----------------------------

The concept behind this part is again to use foreign characters to encode filenames, and including special characters to make it even more complex and harder to scan such as making "blahblahblah.html" into "a末_-яb1.1c~d.html". In my original tests only periods, tildes, underscores, dashes, foreign characters, and the usual numbers/letters work for these file, but have encrypted them from software being able to detect them. Of course foreign characters won't work on all systems, and to use them you have to have a utf-8 tag. More recently I've stuck to using { } ~ $ ^ _ - because these are not specifically forbidden by most systems (and they worked with my apache-chrome combo).

Cool PHP, RDF, and HTML tools and codes that I added to this repo
-----------------------------------------------------------------

So my other repos on here are bash scripts, and when I decided to publish my drunycode stuff on here, I decided I would just add some cool little rdf, html, and php files so people can add cool stuff to their websites, and I can keep my repos neat and tidy. So the SEO stuff is pretty simple. I've seen TONS of these SEO plugins for wordpress and other content management systems, and they all really suck and/or make it so people use the same code twice. So just to break it down here it is: meta decription and keywords for obvious reason, the og tags are facebook opengraph and works just like your meta description etc (this is really good to have), canonical url somehow plays into the google search algorithm (I don't know why), the rdf file has dc (dublin core) tags and is a new SEO feature for external seo files, the robots.txt is also good to have (don't change it if you want your whole site indexed), the sitemap.xml file is required by baidu, and the matching h1 and title tags are a well known SEO trick.

The php file and email form is a cool tool to allow people to send you text messages (SMS) to your phone instead of sending you an email. Its basically a simple php email form that send to a set gateway by phone providers, then adds a field for a call/text back number. It is really simple and easy to implement.


