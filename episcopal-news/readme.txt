=== Episcopal News ===
Contributors: shelleyvadams
Donate link: http://example.com/
Tags: Episcopal Church, news, headlines, video, embed
Requires at least: 4.0.1
Tested up to: 4.0.1
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Headlines from Episcopal News Service and featured videos from The Episcopal Church, Office of Communication.


== Description ==

Plugin features:

* Shortcode to display Episcopal News Service headlines (Widget coming soon).
* Shortcode to embed The Episcopal Church, Office of Communication featured videos playlist.

This plugin was initially derived from content that was hard-coded into a
front page template of themes developed for The Episcopal Church and offered as
a free website resource for dioceses and congregations.


== Installation ==

After activating the plugin, you can add headlines to your WordPress site using
the shortcode `[episcopalnews]`. See &ldquo;Usage&rdquo; section for parameter
documentation.


The featured videos playlist can be embedded with the shortcode
`[episcopalvideo]`. Currently, there are no plans to add parameters to this
shortcode.


== Frequently Asked Questions ==

= What is Episcopal News Service? =

From &ldquo;[About Episcopal News Service](http://episcopaldigitalnetwork.com/ens/about-episcopal-news-service/)&rdquo;:

> Episcopal News Service (ENS) offers in-depth reporting and analysis of local, regional, national and international news for Episcopalians and others interested in the church’s mission and ministry. Providing written and multimedia coverage, Episcopal News Service is the officially sponsored online news source of the Episcopal Church.

[That page](http://episcopaldigitalnetwork.com/ens/about-episcopal-news-service/)
also provides information about copying and republishing content.

= How can I submit content to Episcopal News Service? =

[Submission guidelines](http://episcopaldigitalnetwork.com/ens/submission-guidelines/)
are listed on the Episcopal News Service website.

= How is the video embedded? =

As of version 0.0.1, video is embedded in an `iframe` element. At the time of
writing (December 2014), video is streamed through a Flash object inside that
frame.

= What is the video source? =

As of version 0.0.1, [Wistia](http://wistia.com/) is the video source. At the
time of writing (December 2014), Content was served from the `wistia.com` and
`wistia.net` domains.

The Episcopal Church also has videos on
[YouTube](https://www.youtube.com/user/EpiscopalChurchYT) and
[Vimeo](http://vimeo.com/episcopalchurch). Several plugins are availible to
embed video from these sources.

= Can you add my (church's) video to the playlist? =

No. Contact the [Office of Communication](http://www.episcopalchurch.org/office/office-communication).


== Changelog ==

= 0.0.1 =
* First alpha release.


== Upgrade Notice ==

= 0.0.1 =
* First alpha release, there's nothing to upgrade from.


== Usage ==

The `[episcopalnews]` shortcode supports the following parameters:

* `getitems` specifies the number of news items to display. This should be an integer greater than zero. Default value: 5.
* `requestedfeed` specifies a particular set of news items to display. Supported values (case insensitive):
* * `blog` &ndash; Featured posts from the [ENS Blog](http://episcopaldigitalnetwork.com/ens/category/ens-blog/).
* * `main` &ndash; Posts from the main ENS news sections: [Top Stories](http://episcopaldigitalnetwork.com/ens/top-stories/), [Churchwide](http://episcopaldigitalnetwork.com/ens/churchwide/), [Worldwide](http://episcopaldigitalnetwork.com/ens/worldwide/) and [Commentary](http://episcopaldigitalnetwork.com/ens/commentary/).
* * `Spanish` &ndash; [Noticias](http://episcopaldigitalnetwork.com/ens/noticias/) Spanish translations of posts from the main ENS news sections.
* * `default` &ndash; Posts from the main ENS news sections and featured posts from the ENS Blog. This is the default value, used when `requestedfeed` is unspecified or an unsupported value.
* * `all` &ndash; Everything.

Examples:

* Three Spanish-language items: `[episcopalnews getitems="3" requestedfeed="Spanish"]`
* Five items featured on the ENS Blog: `[episcopalnews requestedfeed="blog"]` or `[episcopalnews getitems="5" requestedfeed="blog"]`
* Five items from the main news sections and ENS Blog: `[episcopalnews]` or `[episcopalnews getitems="5"]` or `[episcopalnews requestedfeed="default"]` or `[episcopalnews getitems="5" requestedfeed="default"]`

In future releases, this shortcode will also support parameters to control the
display of item summaries and thumbnail images.
