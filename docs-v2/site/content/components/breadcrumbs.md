---
layout: docs
title: Breadcrumbs
description: Use breadcrumbs to indicate the navigational hierarchy of the current page
group: components
toc: true
---

## Breadcrumbs

For changing background of breadcrumb, use contextual classes (e.g, `.breadcrumb-primary`).

{{< example >}}
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-text-light breadcrumb-primary text-white">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Library</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data</li>
    </ol>
</nav>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-text-light breadcrumb-secondary text-white">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Library</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data</li>
    </ol>
</nav>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-text-light breadcrumb-tertiary text-white">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Library</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data</li>
    </ol>
</nav>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-text-light breadcrumb-info text-white">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Library</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data</li>
    </ol>
</nav>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-text-light breadcrumb-warning text-white">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Library</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data</li>
    </ol>
</nav>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-text-light breadcrumb-danger text-white">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Library</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data</li>
    </ol>
</nav>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-text-light breadcrumb-dark text-white">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Library</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data</li>
    </ol>
</nav>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-text-light breadcrumb-gray text-white">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Library</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data</li>
    </ol>
</nav>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-text-light breadcrumb-light text-white">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Library</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data</li>
    </ol>
</nav>
{{< /example >}}

## Transparent Breadcrumbs

The following breadcrumbs have a transparent background which can be used for dark backgrounds:

{{< example >}}
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-transparent">
        <li class="breadcrumb-item active" aria-current="page">Home</li>
    </ol>
</nav>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-transparent">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Library</li>
    </ol>
</nav>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-transparent">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Library</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data</li>
    </ol>
</nav>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-primary breadcrumb-transparent">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Library</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data</li>
    </ol>
</nav>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-secondary breadcrumb-transparent">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Library</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data</li>
    </ol>
</nav>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-tertiary breadcrumb-transparent">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Library</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data</li>
    </ol>
</nav>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-info breadcrumb-transparent">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Library</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data</li>
    </ol>
</nav>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-warning breadcrumb-transparent">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Library</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data</li>
    </ol>
</nav>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-danger breadcrumb-transparent">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Library</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data</li>
    </ol>
</nav>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Library</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data</li>
    </ol>
</nav>
{{< /example >}}
