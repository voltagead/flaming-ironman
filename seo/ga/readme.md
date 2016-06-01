#Google Analytics

<!--  -->
	<!-- Google Analytics -->
	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-XXXXX-Y', 'auto');
	ga('send', 'pageview');
	</script>
	<!-- End Google Analytics -->
<!--  -->

##Site Search Analytics

Google Analytics has a built in feature that can track internal searches on websites, and only needs a few minor steps to setup for wordpress sites.

1. Enable Site Search Tracking in view settings. `Dashboard > Admin > View Settings`
2. In the Query Parameter field, enter "s".

##Event Tracking `analytics.js`

Events can be manually fired via javascript if tracking is needed for an action that isn't typically tracked by google analytics. For example, downloads or video plays can be tracked using events. See the Google Developer Events Documentation for more details.

	/* Signature */
	// ga( 'send', 'event', [eventCategory], [eventAction], [eventLabel], [eventValue] );
	/* Example */
	ga( 'send', 'event', 'Videos', 'play', 'Fall Campaign' );

#### Outbound Link Tracking
Google Analytics typically doesn't track outbound links due to the nature of it's design, but these types of links can be manually tracked using this method if needed. See the Google Developers Events Documentation for more information.

[Google Developers Events Documentation](https://developers.google.com/analytics/devguides/collection/analyticsjs/events)


##Gravity Forms Event Tracking

#### [Gravity Forms Google Analytics Event Tracking](https://wordpress.org/plugins/gravity-forms-google-analytics-event-tracking/)

This plugin provides an easy way to add Google Analytics event tracking to your Gravity Forms, allowing you to properly track form submissions as events/conversions within Google Analytics.

### Basic Setup
The original [setup guide](http://nvision.co/blog/search-engine-optimization/gravity-forms-scalable-event-tracking-google-analytics/) for this plugin can be found on the nvision.com blog, but the basics are covered here.

1. Add Tracking UA ID to Event Tracking settings page within Gravity Forms `Forms > Settings > Event Tracking`
2. Add a new tracking feed for each form under Form Settings `Forms > Form > Settings > Event Tracking`
	> Every form can have multiple tracking feeds with varying categories, actions, labels, values, and conditions. By default, a new tracking feed will submit the following values to Google Analytics every time the form is submitted.
	>
	> **Event Category:** Forms
	>
	> **Event Action:** Submission
	>
	> **Event Label:** Form: [form-name] ID: [form-id]
	>
	> **Event Value:** Payment Amount on payment forms, but nothing otherwise
3. Setup a corresponding Tracking Goal in Google Analytics `Dashboard > Admin - Goals > New Goal`
	1. Setup the goal as `Custom`, and click continue.
	2. Give the goal a name, set the type to `Event`, and click continue.
	3. Setup the Category, Action, and Label to match the tracking feed settings, and click save.

		> You can also use the Value field to help filter submissions if the tracking feed is setup to provide a value. Just note that this value will also factor into the analytics.

### Testing and Reporting 
You can test your event setup by submitting the form and checking the events page on google analytics. `Dashboard > Real-Time > Events` You should see your event listed near the bottom of the page.

The analytics for past events can be found on the events overview page. `Dashboard > Behavior > Events > Overview`

