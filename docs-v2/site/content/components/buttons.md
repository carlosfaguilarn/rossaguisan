---
layout: docs
title: Buttons
description: Use custom button styles for actions in forms, dialogs, and more with support for multiple sizes, states, and more.
group: components
toc: true
---

## Buttons

The following are the default style of buttons. Use the modified classes (ie. `btn-primary` or `btn-secondary`) to change colors:

{{< example >}}
<button class="btn mb-2 mr-2 btn-primary" type="button">Primary</button>
<button class="btn mb-2 mr-2 btn-secondary" type="button">Secondary</button>
<button class="btn mb-2 mr-2 btn-tertiary" type="button">Tertiary</button>
<button class="btn mb-2 mr-2 btn-success" type="button">Success</button>
<button class="btn mb-2 mr-2 btn-warning" type="button">Warning</button>
<button class="btn mb-2 mr-2 btn-danger" type="button">Danger</button>
<button class="btn mb-2 mr-2 btn-info" type="button">Info</button>
<button class="btn mb-2 mr-2 btn-dark" type="button">Dark</button>
<button class="btn mb-2 mr-2 btn-gray" type="button">Gray</button>
<button class="btn mb-2 mr-2 btn-light" type="button">Light</button>
<button class="btn mb-2 mr-2 btn-white" type="button">White</button>
{{< /example >}}

## Buttons with outline

Use the following modifier class to add colors only to the outline of the button. Can be used very well when there are two buttons in the layout but the outlined one is of secondary importance:

{{< example >}}
<button class="btn mb-2 mr-2 btn-outline-primary" type="button">Primary</button>
<button class="btn mb-2 mr-2 btn-outline-secondary" type="button">Secondary</button>
<button class="btn mb-2 mr-2 btn-outline-tertiary" type="button">Tertiary</button>
<button class="btn mb-2 mr-2 btn-outline-success" type="button">Success</button>
<button class="btn mb-2 mr-2 btn-outline-warning" type="button">Warning</button>
<button class="btn mb-2 mr-2 btn-outline-danger" type="button">Danger</button>
<button class="btn mb-2 mr-2 btn-outline-info" type="button">Info</button>
<button class="btn mb-2 mr-2 btn-outline-dark" type="button">Dark</button>
<button class="btn mb-2 mr-2 btn-outline-gray" type="button">Gray</button>
<button class="btn mb-2 mr-2 btn-outline-light" type="button">Light</button>
<button class="btn mb-2 mr-2 btn-outline-white" type="button">White</button>
{{< /example >}}

## Pill buttons

Adding the `.btn-pill` modifier class will add a larger amount of border radius to the button:

{{< example >}}
<button class="btn mb-2 mr-2 btn-pill btn-primary" type="button">Primary</button>
<button class="btn mb-2 mr-2 btn-pill btn-outline-primary" type="button">Primary</button>
{{< /example >}}

## Buttons with icon

Example with buttons coupled with an icon:

{{< example >}}
<button class="btn mb-2 mr-2 btn-outline-primary" type="button"><i class="far fa-heart mr-2"></i>Primary</button>
<button class="btn mb-2 mr-2 btn-outline-secondary" type="button"><i class="far fa-thumbs-up mr-2"></i>Secondary</button>
{{< /example >}}

## Circle buttons

You can use the border utility class, like `.rounded-circle` if you want circle button.

{{< example >}}
<button class="btn mb-2 mr-2 btn-icon-only btn-primary" type="button">
    <span class="btn-inner-icon"><i class="far fa-heart"></i></span>
</button>
<button class="btn mb-2 mr-2 btn-icon-only rounded-circle btn-primary" type="button">
    <span class="btn-inner-icon"><i class="far fa-thumbs-up"></i></span>
</button>
{{< /example >}}

## Button animations

In todays world well animated elements can make the difference between good and great layouts. Use animation modifier classes `.animate-*-#` (eg. `.animate-up-1`, `.animate-down-3`). You can use up, right, down and bottom and use a counter from 1 to 5 to specify the distance in pixels.

{{< example >}}
<button class="btn mb-2 mr-2 btn-primary animate-up-2" type="button">Animate up</button>
<button class="btn mb-2 mr-2 btn-secondary animate-right-3" type="button">Animate right</button>
<button class="btn mb-2 mr-2 btn-tertiary animate-left-3" type="button">Animate left</button>
<button class="btn mb-2 mr-2 btn-success animate-down-2" type="button">Animate down</button>
{{< /example >}}

## Dropdown buttons

Example of using a dropdown menu with a button:

{{< example >}}
<div class="btn-group mr-2 mb-2">
    <button type="button" class="btn btn-primary">Primary</button>
    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-angle-down dropdown-arrow"></i>
        <span class="sr-only">Toggle Dropdown</span>
    </button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Separated link</a>
    </div>
</div>
<div class="btn-group mr-2 mb-2">
    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split border-top-right-radius-0 border-bottom-right-radius-0"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-angle-down dropdown-arrow"></i>
        <span class="sr-only">Toggle Dropdown</span>
    </button>
    <button type="button" class="btn btn-secondary">Secondary</button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Separated link</a>
    </div>
</div>
<div class="btn-group mb-2 mr-2">
    <button type="button" class="btn btn-tertiary dropdown-toggle dropdown-toggle-split"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-angle-down dropdown-arrow"></i>
        <span class="sr-only">Toggle Dropdown</span>
    </button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Separated link</a>
    </div>
</div>
{{< /example >}}

### Dropdown sizing

Use the `.btn-sm` and `.btn-lg` modifier classes to change the size of the dropdown buttons:

{{< example >}}
<div class="btn-group mr-2 mb-2">
    <button type="button" class="btn btn-sm btn-primary">Small</button>
    <button type="button" class="btn btn-sm btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-angle-down dropdown-arrow"></i>
        <span class="sr-only">Toggle Dropdown</span>
    </button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Separated link</a>
    </div>
</div>
<div class="btn-group mr-2 mb-2">
    <button type="button" class="btn btn-secondary">Default</button>
    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split mr-n1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-angle-down dropdown-arrow"></i>
        <span class="sr-only">Toggle Dropdown</span>
    </button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Separated link</a>
    </div>
</div>
<div class="btn-group mb-2 mr-2">
    <button type="button" class="btn btn-lg btn-tertiary">Large</button>
    <button type="button" class="btn btn-lg btn-tertiary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-angle-down dropdown-arrow"></i>
        <span class="sr-only">Toggle Dropdown</span>
    </button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Separated link</a>
    </div>
</div>
{{< /example >}}

### Dropdown direction

Use `dropup`, `dropdown`, `dropright` or `dropleft` to set the direction of the dropdown:

{{< example >}}
<div class="btn-group dropup mb-2 mr-2">
    <button type="button" class="btn btn-primary">Up</button>
    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-angle-up dropdown-arrow"></i>
        <span class="sr-only">Toggle Dropdown</span>
    </button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Separated link</a>
    </div>
</div>
<div class="btn-group dropright mb-2 mr-2">
    <button type="button" class="btn btn-primary">Right</button>
    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-angle-right dropdown-arrow"></i>
        <span class="sr-only">Toggle Dropdown</span>
    </button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Separated link</a>
    </div>
</div>
<div class="btn-group mb-2 mr-2">
    <button type="button" class="btn btn-primary">Down</button>
    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-angle-down dropdown-arrow"></i>
        <span class="sr-only">Toggle Dropdown</span>
    </button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Separated link</a>
    </div>
</div>
<div class="btn-group dropleft mb-2 mr-2">
    <button type="button" class="btn btn-primary">Left</button>
    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split mr-n1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-angle-left dropdown-arrow"></i>
        <span class="sr-only">Toggle Dropdown</span>
    </button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Separated link</a>
    </div>
</div>
{{< /example >}}

## Social media buttons

Use the following buttons for social media related actions:

{{< example >}}
<button class="btn mb-2 mr-2 btn-icon btn-twitter" type="button">
    <span class="btn-inner-icon"><i class="fab fa-twitter"></i></span>
    <span class="btn-inner-text">Login with Twitter</span>
</button>
<button class="btn mb-2 mr-2 btn-icon btn-pill btn-facebook" type="button">
    <span class="btn-inner-icon"><i class="fab fa-twitter"></i></span>
    <span class="btn-inner-text">Login with Facebook</span>
</button>
<button class="btn mb-2 mr-2 btn-icon-only btn-github" type="button">
    <span class="btn-inner-icon"><i class="fab fa-github"></i></span>
</button>
<button class="btn mb-2 mr-2 btn-icon-only btn-pill btn-dribbble" type="button">
    <span class="btn-inner-icon"><i class="fab fa-dribbble"></i></span>
</button>
{{< /example >}}

## Animated buttons

Use the following classes to animate the buttons when hovering:

{{< example >}}
<button class="btn btn-secondary animate-up-2" type="button">Animate up</button>
<button class="btn btn-secondary animate-right-3" type="button">Animate right</button>
<button class="btn btn-secondary animate-down-2" type="button">Animate down</button>
<button class="btn btn-secondary animate-left-3" type="button">Animate left</button>
{{< /example >}}

## Loading buttons

Use the following classes to indicate loading:

{{< example >}}
<button class="btn btn-primary" type="button" disabled>
    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
    <span class="sr-only">Loading...</span>
</button>
<button class="btn btn-primary" type="button" disabled>
    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
    <span class="ml-1">Loading...</span>
</button>
<button class="btn btn-secondary" type="button" disabled>
    <span class="ml-1">Loading...</span>
    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
</button>
{{< /example >}}

## Button sizing & states

Use the following modifier classes to update the size & state of the button.

### Button size

With Rocket there comes 3 sizes for button: `.btn-sm`, `.btn-md` and `.btn-lg`:

{{< example >}}
<button class="btn mb-2 mr-2 btn-sm btn-primary" type="button">Small</button>
<button class="btn mb-2 mr-2 btn-primary" type="button">Regular</button>
<button class="btn mb-2 mr-2 btn-lg btn-primary" type="button">Large Button</button>
{{< /example >}}

### Block level Buttons

With Rocket there comes 3 sizes for button: `.btn-sm`, `.btn-md` and `.btn-lg`:

{{< example >}}
<button class="btn mb-2 mr-2 btn-sm btn-primary" type="button">Small</button>
<button class="btn mb-2 mr-2 btn-primary" type="button">Regular</button>
<button class="btn mb-2 mr-2 btn-lg btn-primary" type="button">Large Button</button>
{{< /example >}}

### Disabled state

Make buttons look inactive by adding the disabled boolean attribute to any `<button>` element.

{{< example >}}
<button type="button" class="btn mb-2 mr-2 btn-primary" disabled>Primary button</button>
<button type="button" class="btn mb-2 mr-2 btn-secondary" disabled>Button</button>
{{< /example >}}
