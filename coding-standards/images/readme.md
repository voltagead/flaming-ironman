# Semantic Image Naming

## What is it?

The goal of Semantic Image Naming is to make large numbers of images easier to deal with. It's a system to keep them organized, and make it easier to pinpoint an image's location/role from a quick glance at its filename.

## General Form

In general, the pattern to follow is [where]-[what]-[name].jpg.

[Where] is specific to the location/module on a page the image is found, without naming the page itself. `callout-img-chef.jpg` provides a pretty good notion of where the image is being used - `homepagecalloutleft-img-chef.jpg` is cumbersome and overly specific, and may be incorrect if the image is used elsewhere on the site.

[What] is the general role of the image, to differentiate between things like hero images, icons, and backgrounds.

[Name] is basically the id of the image, to differentiate between images of the same location and role. e.g. article-gallery-cooking.jpg and article-gallery-food.jpg

For more generic and multipurpose images, it's fine to leave off the [where]. `icon-[name].jpg` and `sprite-[name].png` still keep everything grouped together and provide adequate information about what/where the image is.

## FPO Images

It's tempting, but FPO (for placement only, ie temp images) shouldn't have an FPO prefix. FPO images should instead be placed in a separate subdirectory - this keeps them from mingling with your production images, and makes them easier to identify and remove prior to launch.

## Examples

Bad:
```
blue.jpg
chefs-article.jpg
chefs-callout.png
cooking.jpg
food.jpg
footer-logo.png
green.jpg
header-sprite.png
hero.jpg
hero-other.jpg
logo.png
mapicon.png
searchicon.png
social-sprite.png
```

Good:
```
article-gallery-cooking.jpg
article-gallery-food.jpg
article-header-chefs.jpg
callout-img-chef.png
header-hero-main.jpg
header-hero-secondary.jpg
icon-map.png
icon-search.png
logo-footer.png
logo-main.png
sprite-header.png
sprite-social.png
pattern-blue.jpg
pattern-green.jpg
```
