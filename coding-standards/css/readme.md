# CSS / Sass Standards

Adhere (mostly) to the [CSS Guidelines](http://cssguidelin.es/)

## General

Leverage the [LiveReload browser extension](http://livereload.com/extensions/) where possible.

Create a style guide / kitchen sink when possible. It can be hard to maintain, but it will pay off over time.

At a high level, we want:
- 80 character wide columns;
- multi-line CSS;
- meaningful use of whitespace.


## CSS

Split discrete chunks of code into their own files, which are concatenated during a build step.

Use hyphen case, not camel or underscore (snake)

If there are multiple selectors, place one selector per line. Exceptions to this rule should be fairly apparent, such as similar rulesets that only carry one declaration each.

```css
.first-item,
.second-item,
.third-item {
	/* ... */
}

.fourth-item { display: none; }
```

Avoid [collapsing margins](http://www.sitepoint.com/web-foundations/collapsing-margins/) by applying vertical margins to the bottom of elements, where possible.

For media queries, use `min-width`s when possible (mobile first):

```scss
.selector {
	/* Default mobile style */
	display: none;

	@include breakpoint(min-width 480px) {
		display: inline;
	}

	@include breakpoint(min-width 720px) {
		display: inline-block;
	}	

	@include breakpoint(min-width 990px) {
		display: block;
	}

	...
}

```

Refrain from using capitalized text in your markup. Uppercase text should be set in the CSS via `text-transform: uppercase;`

Use `padding` instead of `line-height` where possible when applying vertical padding to elements.

Don't make values and selectors hard to override with unnecessary specificity (watch your nesting levels).

When indenting Sass, we stick to the same four (4) spaces, and we also leave a blank line before and after the nested ruleset.

Minimize the use of id's 

`!important` should be the nuclear option. Avoid if possible.

Use shorthand properties and avoid using multiple properties when it's not needed:

```css
.class-name {
 	/* correct */
	margin: 0 0 30px 20px;

	/* incorrect */
	padding-top: 0;
	padding-right: 0;
	padding-bottom: 30px;
	padding-left: 20px;
}
```

Use unitless values when you can. Ex: `line-height: 1;`

Favor rem if you use relative units, but be sure to provide a fallback if using IE8:
```css
...
font-size: 18px;
font-size: 1.8rem;

```

Prefer seconds over milliseconds. Ex: `transition: opacity 0.3s;`

## Sass

Preferred ordering of properties inside selectors:
- `@include`s
- `@extend`s
- CSS properties

```scss
.class-name {
	@include border-radius(5px);
	@extend .clearfix;
	margin: 0;
}
```
website	
Comment liberally, explaining decisions for things that may seem odd to fresh eyes. 
Always use the double-slash format: `// Comment`

Selector Intent is the process of deciding and defining what you want to style and how you will go about selecting it. This helps with:
- Reusability
- Location Independence
- Portability

Pick a class name / ID that is sensible, but somewhat ambiguous: aim for high re-usability. Using a class name to describe content is redundant because content describes itself.

- Select what you want explicitly, rather than relying on circumstance or coincidence. Good Selector Intent will rein in the reach and leak of your styles.
- Write selectors for reusability, so that you can work more efficiently and reduce waste and repetition.
- Do not nest selectors unnecessarily, because this will increase specificity and affect where else you can use your styles.
- Do not qualify selectors unnecessarily, as this will impact the number of different elements you can apply styles to.
- Keep selectors as short as possible

Regarding specificity, avoid:
- using IDs in your CSS;
- nesting selectors;
- qualifying classes;
- chaining selectors.



## To Discuss

- BEM-like Naming

