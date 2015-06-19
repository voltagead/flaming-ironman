# CSS / Sass Standards

To consider:
- [CSS Guidelines](http://cssguidelin.es/)
- [Front-end Guidelines](https://github.com/bendc/frontend-guidelines)

## CSS

Use hypen case, not camel or underscore (snake)

If there are multiple selectors, place one selector per line:

```css
.first-item,
.second-item,
.third-item {
	/* ... */
}
```

Don't make values and selectors hard to override.

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



