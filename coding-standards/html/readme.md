# HTML Standards

Adhere to the [Front End Guidelines for HTML](https://github.com/bendc/frontend-guidelines#html)

## Summary

- HTML5 provides us with lots of semantic elements aimed to describe precisely the content. Make sure you benefit from its rich vocabulary.
- Make sure you understand the semantics of the elements you're using. It's worse to use a semantic element in a wrong way than staying neutral.
- Keep your code terse. Use double quotation marks for attributes.
- Unless there's a valid reason for loading your scripts before your content, don't block the rendering of your page. If your style sheet is heavy, isolate the styles that are absolutely required initially and defer the loading of the secondary declarations in a separate style sheet. Two HTTP requests is significantly slower than one, but the perception of speed is the most important factor.

## Accessibility

Accessibility shouldn't be an afterthought. You can immediately fix the little things that make a huge difference, such as:

- learning to use the alt attribute properly
- making sure your links and buttons are marked as such (no `<div class="button">` atrocities)
- not relying exclusively on colors to communicate information
- explicitly labeling form controls


## Image Guidelines

- Use the proper format for the image. In general, pngs should be used for images with flat colors (a lot of things you would make in Illustrator), while jpgs should be used for photos or graphics with gradients or a lot of colors. Don't use gif unless it's animating (and only use those sparingly).  (http://www.sitepoint.com/gif-png-jpg-which-one-to-use/)
	- SVGs are your friend. They look great no matter their size. But they also can get heavy if the shape(s) are very complex.
- Optimize / compress your images. 
	- If using a task runner, this can be put in as one of your tasks.
	- Otherwise you can run optimization through the command line (http://www.clock.co.uk/blog/optimise-your-pngs-from-the-terminal-in-osx)
- Try not to stretch images bigger than their actual size.
- If you're using a ton of images, consider lazy loading them after the basics of the page load.
- As noted above, all `<img>s` should have a proper alt attribute
