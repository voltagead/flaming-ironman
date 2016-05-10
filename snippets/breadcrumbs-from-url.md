# Make breadcrumbs from the url
## With Yoast / SEO friendly
### PHP - You will need to modify this code.

`
<?php

//Set breadcrumbs globally for the hardcoded parts
define( 'BREADCRUMBS' , true );

$siteUrl = get_home_url(); 
	//adding custom breadcrumbs  because of an issue with archive pages and yoast custom bread crumbs.  Grabbing the url and setting the custom breadcrumbs
	$custom_breadcrumb = '<p id="breadcrumbs"><span typeof="v:Breadcrumb"><a href="' . $siteUrl . '?>">Home</a> » ';
	$url = $_SERVER['REQUEST_URI'];
	$url = substr( $url, 1, -1 );
	$url = explode( '/' , $url );
	$file_path = '/';
	$count = 1;
	foreach( $url as $i ) {
		$cleaned_i = str_replace('-', ' ', $i);
		if( $count < count( $url ) ) {
		
			$custom_breadcrumb .= '<a href=" '. $siteUrl . $file_path . $i . ' ">'. $cleaned_i .'</a> » ';
		} else {
			$custom_breadcrumb .= '<span>'. $cleaned_i .'</span>';
		}
		$count ++;
		$file_path .= $i . '/' ;
	}
	$custom_breadcrumb .= '</p>';
	//funciton to add any pages that need the hardcoded breadcrumbs
	$hardcode_breadcrumbs = function() {
		if( is_archive( 'archive-chef_bio.php' ) || is_single( ) ) {
			return true;
		}
	};
	//check to see if the global breadcrumbs are set located in the header - the yoast ones are located in the yoast settings 
	if( BREADCRUMBS ) : ?>
		<div class="breadcrumb-container">

			<?php if( $hardcode_breadcrumbs() ) : 
				echo $custom_breadcrumb;
			else : 
				{yoast_breadcrumb('<p id="breadcrumbs">','</p>');} 
			endif; ?>
		</div>
	<?php endif; ?>
`
