#Yoast Guidelines

##XML Sitemaps

> **Warning:** The sitemaps generated for taxonomies can be "corrupted" for some wordpress configurations. Double check these sitemaps to make sure they have sane URLs. If they don't, make sure to remove them from the sitemap in the Yoast settings.

###Sitemap Caching Errors

If a wordpress site has caching enabled (either through wp-engine.com or a plugin) it will cache the sitemap. This will conflict with sitemaps that are dynamically changed as pages/posts/etc are added and plugins like Yoast SEO will generate a new sitemap.xml accordingly. [Sitemap Not Updating](http://kb.yoast.com/article/252-sitemap-does-not-update)

	add_filter('wpseo_enable_xml_sitemap_transient_caching', '__return_false');

*TODO: Make Look Nice*

## Robots.txt

Sitemaps should also be included in robots.txt for other search engines that you don't manually submit the sitemaps too. The robots.txt file can be edited through Yoast.

	Sitemap: http://voltagead.com/sitemap_index.xml

## Focus Keywords

Despite what intuition may dictate, the focus keyword field does not directly affect SEO performance. According to the [Yoast SEO blog](https://yoast.com/focus-keyword/), "the focus keyword is the keyword that you want your page to show up in search results for. Once you've set it in the Yoast SEO focus keyword input field, the plugin evaluates the content of the page and provides feedback on how to better optimize the page."

In general it's best to use multi word keyphrase such as `focus keyword`, `market strategy` or `flaming ironman`. However, the focus keyword field only accepts ONE keyword or phrase. The entire contents of the field is used as the focus keyword, and the score will become less viable when there are too many words.

## Canonical Links

Canonical links allow multiple, similar URLs to point search engines to a single "canonical" version. It functions similarly to a 301 redirect, but only for search engines. When considering whether to use a 301 redirect or a canonical link, the [Yoast SEO Blog](https://yoast.com/rel-canonical/) says, "The answer is simple: if there are no technical reasons not to do a redirect, you should always do a redirect. If you cannot redirect because that would break the user experience or be otherwise problematic: set a canonical URL." The Yoast plugin provides a field to edit the canonical link under the advanced tab while in the post editor.

	<link rel="canonical" href="http://example.com/wordpress/seo-plugin/">

## Advanced Custom Fields

When calculating an SEO score, Yoast only considers the default content of the post. Meta data is not included, so custom fields that are added by plugins such as ACF or CMB2 will not have their contents included in the SEO score by default. There are plugins to enable these extra fields, but for simpler projects, custom javascript can be included in the admin in order to include these extra fields. The snippet below shows how to add an image field and wysiwyg from ACF into the SEO score.

	(function ($) {

		var YoastACF = {};

		YoastACF.registerYoast = function() {
			YoastSEO.app.registerPlugin( 'yoast-acf', { status: 'ready' } );
			YoastSEO.app.registerModification( 'content', YoastACF.contentModification, 'yoast-acf', 5 );
			acf.add_action('change', YoastACF.reload );
		};

		YoastACF.reload = function() {
			YoastSEO.app.pluginReloaded( 'yoast-acf' );
		};

		YoastACF.contentModification = function( content ) {
			var img1 = $( '.acf-field-5434749c153ba img[src!=""]' );
			var bottom = $( 'textarea[name="acf[field_5475e2adc47fb]"' );
			if ( img1.length > 0 ) {
				content = img1.outerHTML() + '\n' + content;
			}
			if ( bottom.length > 0 ) {
				content = content + '\n' + bottom.val();
			}
			return content;
		};

		$( window ).on( 'YoastSEO:ready', function () {
			YoastACF.registerYoast();
		});

	} ( window.jQuery || window.$ ));

> **Note:** Yoast SEO uses a different method to retrieve the content when recalculating all the scores at once from the backend. Yoast has provided the `wpseo_post_content_for_recalculation` and `wpseo_term_description_for_recalculation` filters for this purpose.
