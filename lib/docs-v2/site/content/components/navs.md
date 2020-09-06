---
layout: docs
title: Navs
description: Use navigation tabs to break up pieces of content
group: components
toc: true
---

## Default nav

The following navigation bar is a basic example:

{{< example >}}
<div class="nav-wrapper position-relative">
    <ul class="nav nav-pills nav-fill flex-column flex-sm-row">
        <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0 active" data-toggle="tab" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0" data-toggle="tab" href="#">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0" data-toggle="tab" href="#">Settings</a>
        </li>
        <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0" data-toggle="tab" href="#">Messages</a>
        </li>
    </ul>
</div>
{{< /example >}}

## Rounded navs

{{< example >}}
<div class="nav-wrapper position-relative">
    <ul class="nav nav-pills rounded nav-fill flex-column flex-md-row">
        <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0 active" data-toggle="tab" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0" data-toggle="tab" href="#">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0" data-toggle="tab" href="#">Settings</a>
        </li>
        <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0" data-toggle="tab" href="#">Messages</a>
        </li>
    </ul>
</div>
{{< /example >}}

## Rounded navs with icons

{{< example >}}
<div class="nav-wrapper position-relative">
    <ul class="nav nav-pills nav-fill flex-column flex-md-row">
        <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0 active" data-toggle="tab" href="#"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0" data-toggle="tab" href="#"><i class="far fa-user-circle mr-2"></i>Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0" data-toggle="tab" href="#"><i class="far fa-sun mr-2"></i>Settings</a>
        </li>
        <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0" data-toggle="tab" href="#"><i class="far fa-comments mr-2"></i>Messages</a>
        </li>
    </ul>
</div>
{{< /example >}}

## Color variations

Use `icon-secondary`, `icon-tertiary`, `icon-info` modifier classes to change the color of the navs:

{{< example >}}
<div class="nav-wrapper position-relative">
    <ul class="nav nav-pills nav-fill flex-column flex-md-row">
        <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0 active" href="#"><span class="icon-primary"><i
                        class="fas fa-tachometer-alt mr-2"></i>Dashboard</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0" data-toggle="tab" href="#"><span class="icon-secondary"><i class="far fa-user-circle mr-2"></i>Profile</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0" data-toggle="tab" href="#"><span class="icon-tertiary"><i class="far fa-sun mr-2"></i>Settings</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0" data-toggle="tab" href="#"><span class="icon-info"><i class="far fa-comments mr-2 mr-2"></i>Messages</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0" data-toggle="tab" href="#"><span class="icon-danger"><i class="fas fa-signature mr-2"></i>Stats</span></a>
        </li>
    </ul>
</div>
{{< /example >}}

## Circle navs

{{< example >}}
<div class="nav-wrapper position-relative">
    <ul class="nav nav-pills nav-pill-circle flex-column flex-md-row">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#">
                <span class="nav-link-icon d-block"><i class="far fa-user"></i></span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#">
                <span class="nav-link-icon d-block"><i class="far fa-lightbulb"></i></span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#">
                <span class="nav-link-icon d-block"><i class="far fa-sun"></i></span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#">
                <span class="nav-link-icon d-block"><i class="far fa-paper-plane"></i></span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#">
                <span class="nav-link-icon d-block"><i class="far fa-comments mr-2"></i></span>
            </a>
        </li>
    </ul>
</div>
{{< /example >}}

## Square navs

{{< example >}}
<div class="nav-wrapper position-relative">
    <ul class="nav nav-pills nav-pill-square flex-column flex-md-row">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#">
                <span class="nav-link-icon d-block"><i class="far fa-user"></i></span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#">
                <span class="nav-link-icon d-block"><i class="far fa-lightbulb"></i></span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#">
                <span class="nav-link-icon d-block"><i class="far fa-sun"></i></span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#">
                <span class="nav-link-icon d-block"><i class="far fa-paper-plane"></i></span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#">
                <span class="nav-link-icon d-block"><i class="far fa-comments mr-2"></i></span>
            </a>
        </li>
    </ul>
</div>
{{< /example >}}

## Vertical navs

Use the following vertical navs for sidebars:

{{< example >}}
<div class="nav-wrapper position-relative">
    <ul class="nav nav-pills square nav-fill flex-column vertical-tab">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#"><span class="d-block"><i class="fas fa-dungeon mr-2"></i>Home</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#"><span class="d-block"><i class="far fa-user-circle mr-2"></i>Profile</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#"><span class="d-block"><i class="far fa-sun mr-2"></i>Settings</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#"><span class="d-block"><i class="far fa-comments mr-2"></i>Messages</span></a>
        </li>
    </ul>
</div>
{{< /example >}}