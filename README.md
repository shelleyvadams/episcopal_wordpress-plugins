Episcopal WordPress plugins
===========================

A collection of WordPress plugins for websites of Episcopal churches, dioceses, and organizations.

Plugin         | Status
---------------|-------
contacts       | :wrench: In development
episcopal-news | :construction: Ready for testing
service-times  | :wrench: In development


## Background

In December 2014, [The Episcopal Church][E1] released free, branded WordPress themes for use by congregations and dioceses. That code became the base for continuing development as the [episcopal_wordpress][G1] project on GitHub.

The themes provided some capabilities &ndash; Episcopal News Service headlines and sidebar lists of  service times and parish contacts &ndash; that would be more useful (and easier to maintain) as individual plugins.

## Philosophy

[Separation of concerns][W1] is a technical term for simple idea. In [The Episcopal Church][E1], we can see a liturgical separation of concerns in a typical Sunday Eucharist:

The congregation needs a priest to celebrate the Eucharist. At the altar rail, the priest *could* serve the bread and then serve the wine. It's optional to have a Lay Eucharist Minister there to serve the wine, but it will make commuion go more smoothly.

What does that have to do with themes and plugins?

A WordPress site needs a them to display and format content. A theme *can* do things like define custom post types and [add widget-like content][C2], but it probably *shouldn't*. An optional plugin can [define custom post types][C1] and provide widgets that are availible regardless of the site's theme.

## Plugin installation

Copy the directory (folder) for the desired plugin into wp-content/plugins/ as a subdirectory.

### Caveat

:heavy_exclamation_mark:
These plugins are under *active development* and may be *unstable*. **Install at your own risk.**

That said, if a plugin breaks your site, deleting the entire directory (folder) for that plugin should fix things. :wink:

## License

GNU General Public License, version 2.0 or later (GPLv2+).

## For more information 

### About individual plugins

See `readme.txt` in each subdirectory.

### About the project

See the [episcopal_wordpress wiki][G2].

[W1]: https://en.wikipedia.org/wiki/Separation_of_concerns
[E1]: http://episcopalchurch.org/
[C1]: http://codex.wordpress.org/Post_Types#A_word_about_custom_post_types_as_a_plugin
[C2]: http://codex.wordpress.org/Theme_Development#Widgets_.28sidebar.php.29
[G1]: https://github.com/shelleyvadams/episcopal_wordpress/
[G2]: https://github.com/shelleyvadams/episcopal_wordpress/wiki
