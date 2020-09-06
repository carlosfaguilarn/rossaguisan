---
layout: docs
title: Navigation bars
description: Use the responsive navigation bar from Spaces to add nav items and multi-level nested dropdowns for a seamless navigation
group: components
toc: true
---

## Navbar

The following navigation bar is a basic example from what is used in Spaces:

{{< example >}}
<nav class="navbar navbar-expand-lg navbar-transparent navbar-dark navbar-theme-primary mb-4">
    <div class="container position-relative">
        <a class="navbar-brand mr-lg-3" href="#">
            <img class="navbar-brand-dark" src="../../assets/brand/light.svg" alt="menuimage">
            <img class="navbar-brand-light" src="../../assets/brand/dark.svg" alt="menuimage">
        </a>
        <div class="navbar-collapse collapse" id="navbar-default-primary">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="#">
                            <img src="../../assets/img/brand/dark.svg" alt="menuimage">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <i class="fas fa-times" data-toggle="collapse" role="button"
                            data-target="#navbar-default-primary" aria-controls="navbar-default-primary"
                            aria-expanded="false" aria-label="Toggle navigation"></i>
                    </div>
                </div>
            </div>
            <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                <li class="nav-item">
                    <a href="#" class="nav-link">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown link
                    <i class="fas fa-angle-down nav-link-arrow ml-2"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Submenu <i class="fas fa-angle-down nav-link-arrow ml-2"></i></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Submenu action</a></li>
                                <li><a class="dropdown-item" href="#">Another submenu action</a></li>
                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Subsubmenu <i class="fas fa-angle-down nav-link-arrow ml-2"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Subsubmenu action</a></li>
                                        <li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Second subsubmenu <i class="fas fa-angle-down nav-link-arrow ml-2"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Subsubmenu action</a></li>
                                        <li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="d-flex align-items-center">
            <button class="navbar-toggler ml-2" type="button" data-toggle="collapse"
                data-target="#navbar-default-primary" aria-controls="navbar-default-primary"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</nav>
{{< /example >}}

## Navigation items

### Example

Use the following code inside the `navbar-nav` unordered list tag to add a simple navigation item:

{{< highlight html >}}
<li class="nav-item">
    <a href="#" class="nav-link">Nav item 1</a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">Nav item 1</a>
</li>
{{< /highlight >}}

### Dropdown

Use the following code inside the `navbar-nav` unordered list tag to add a navigation item with a dropdown menu. Make sure to link the `.dropdown-toggle` and `.dropdown-menu` tags with an id and aria-labeledby (eg. `navbarDropdownMenuLink`):

{{< highlight html >}}
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown link
    <i class="fas fa-angle-down nav-link-arrow ml-2"></i>
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
    </ul>
</li>
{{< /highlight >}}

### Multiple nested

You can use the following markup to create multiple nested dropdowns:

{{< highlight html >}}
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown link
    <i class="fas fa-angle-down nav-link-arrow ml-2"></i>
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Submenu <i class="fas fa-angle-down nav-link-arrow ml-2"></i></a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Submenu action</a></li>
            <li><a class="dropdown-item" href="#">Another submenu action</a></li>
            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Subsubmenu <i class="fas fa-angle-down nav-link-arrow ml-2"></i></a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Subsubmenu action</a></li>
                    <li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
                </ul>
            </li>
            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Second subsubmenu <i class="fas fa-angle-down nav-link-arrow ml-2"></i></a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Subsubmenu action</a></li>
                    <li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
                </ul>
            </li>
        </ul>
    </li>
    </ul>
</li>
{{< /highlight >}}

## Navbar colors

We've made sure that you can change the colors of the navbar very easily. All you have to do is add the modifier class .navbar-theme-* (eg. `.navbar-theme-primary`, `.navbar-theme-secondary`, `.navbar-theme-dark`) in order to change the colors. As you can see, even the dropdown item hover effect will change their color.

{{< example >}}
<nav class="navbar navbar-expand-lg navbar-transparent navbar-dark navbar-theme-tertiary mb-4">
    <div class="container position-relative">
        <a class="navbar-brand mr-lg-3" href="#">
            <img class="navbar-brand-dark" src="../../assets/brand/light.svg" alt="menuimage">
            <img class="navbar-brand-light" src="../../assets/brand/dark.svg" alt="menuimage">
        </a>
        <div class="navbar-collapse collapse" id="navbar-default-tertiary">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="#">
                            <img src="../../assets/img/brand/dark.svg" alt="menuimage">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <i class="fas fa-times" data-toggle="collapse" role="button"
                            data-target="#navbar-default-tertiary" aria-controls="navbar-default-tertiary"
                            aria-expanded="false" aria-label="Toggle navigation"></i>
                    </div>
                </div>
            </div>
            <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                <li class="nav-item">
                    <a href="#" class="nav-link">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLinkTertiary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown link
                    <i class="fas fa-angle-down nav-link-arrow ml-2"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkTertiary">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Submenu <i class="fas fa-angle-down nav-link-arrow ml-2"></i></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Submenu action</a></li>
                                <li><a class="dropdown-item" href="#">Another submenu action</a></li>
                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Subsubmenu <i class="fas fa-angle-down nav-link-arrow ml-2"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Subsubmenu action</a></li>
                                        <li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Second subsubmenu <i class="fas fa-angle-down nav-link-arrow ml-2"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Subsubmenu action</a></li>
                                        <li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="d-flex align-items-center">
            <button class="navbar-toggler ml-2" type="button" data-toggle="collapse"
                data-target="#navbar-default-tertiary" aria-controls="navbar-default-tertiary"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</nav>
{{< /example >}}

## Navbar light

Using `.navbar-dark` will make the content within the navbar white while `.navbar-light` will make the content and menu items dark. We made sure the logo also changes based on the `.navbar-brand-dark` and `.navbar-brand-light` identifier classes

{{< example >}}
<nav class="navbar navbar-expand-lg navbar-transparent navbar-light navbar-theme-light mb-4">
    <div class="container position-relative">
        <a class="navbar-brand mr-lg-3" href="#">
            <img class="navbar-brand-dark" src="../../assets/brand/light.svg" alt="menuimage">
            <img class="navbar-brand-light" src="../../assets/brand/dark.svg" alt="menuimage">
        </a>
        <div class="navbar-collapse collapse" id="navbar-default-light">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="#">
                            <img src="../../assets/img/brand/dark.svg" alt="menuimage">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <i class="fas fa-times" data-toggle="collapse" role="button"
                            data-target="#navbar-default-light" aria-controls="navbar-default-light"
                            aria-expanded="false" aria-label="Toggle navigation"></i>
                    </div>
                </div>
            </div>
            <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                <li class="nav-item">
                    <a href="#" class="nav-link">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLinklight" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown link
                    <i class="fas fa-angle-down nav-link-arrow ml-2"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinklight">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Submenu <i class="fas fa-angle-down nav-link-arrow ml-2"></i></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Submenu action</a></li>
                                <li><a class="dropdown-item" href="#">Another submenu action</a></li>
                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Subsubmenu <i class="fas fa-angle-down nav-link-arrow ml-2"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Subsubmenu action</a></li>
                                        <li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Second subsubmenu <i class="fas fa-angle-down nav-link-arrow ml-2"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Subsubmenu action</a></li>
                                        <li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="d-flex align-items-center">
            <button class="navbar-toggler ml-2" type="button" data-toggle="collapse"
                data-target="#navbar-default-light" aria-controls="navbar-default-light"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</nav>
{{< /example >}}

## Headroom.js

In order to enable headroom for the navbar add the class `.headroom` to the main `.navbar` element.

{{< highlight javascript >}}
if ($('.headroom')[0]) {
    var headroom = new Headroom(document.querySelector("#navbar-main"), {
        offset: 0,
        tolerance: {
            up: 0,
            down: 0
        },
    });
    headroom.init();
}
{{< /highlight >}}
