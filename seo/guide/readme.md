#SEO Guide

##First steps should be to audit the site:

1. Robots.txt
	- Should be setup to block pages like privacy policy, disclaimers, secure directories, pages with personal information.
	- Do not block css, js, font, etc files.
	- Client should know that they may see errors in Webmaster Tools if new pages like privacy policy, etc get blocked.

2. Global Redirects - *Are they needed?*
	- Domain redirects like non-www to www.
	- Page level redirects.

3. Webmaster Tools
	- Make sure the search engine can find the robots.txt file and the sitemap.
	- Check for 404 errors and crawl errors.

4. Google Analytics
	- Check if Google Analytics is setup on the website.
	- 

4. Image Optimization
	- Do images have good, descriptive alt tags?

5. Rich Snippets
	- Would this website benefit from using rich snippets?

##Internal IP filtering
Using IP filtering will block analytics traffic from internal sources such as VoltageAd or the client in order to prevent skewing the statistics.

##Rich Snippets

[Schema.org Microdata Specification](http://schema.org/docs/gs.html)

##SEO and Pay Walls

*May want a blurb about this. More research needed.*

 - Google's First Click Free system

##SEO Wordpress Plugins

Probably want a blurb here...

<img src="https://yoast-mercury.s3.amazonaws.com/uploads/edd/2015/09/Yoast_SEO_Icon_Small.svg" width="150" align="right">

### [Yoast SEO for Wordpress](https://yoast.com/wordpress/plugins/seo/)

Yoast SEO (formerly known as WordPress SEO by Yoast) is the most complete WordPress SEO plugin that exists today for WordPress.org users. It incorporates everything from a snippet editor and real time page analysis functionality that helps you optimize your pages content, images titles, meta descriptions and more to XML sitemaps, and loads of optimization options in between.

[**VoltageAd Guidelines**](yoast.md) | 
[Plugin Link](https://yoast.com/wordpress/plugins/seo/)

###[All In One Schema.org Rich Snippets](https://wordpress.org/plugins/all-in-one-schemaorg-rich-snippets/)

*This may be a good plugin for quickly adding rich snippits to website.*

[Plugin Link](https://wordpress.org/plugins/all-in-one-schemaorg-rich-snippets/)

  _IN PROGRESS_

###Paywalls and SEO

The general rule to remember is that Search Robots are not humans. If a site requires more complex human interaction, such as filling out a form, in order to view content, a search engine will not be able to index that content.

1. 

[Google defines cloaking](https://support.google.com/webmasters/answer/66355?hl=en) as "the practice of presenting different content or URLs to human users and search engines."
