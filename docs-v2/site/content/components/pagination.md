---
layout: docs
title: Pagination
description: Use pagination elements to organize posts or other models of data into groups
group: components
toc: true
---

## Pagination example

The following example is the basic pagination style:

{{< example >}}
<nav aria-label="Page navigation example">
    <ul class="pagination">
        <li class="page-item">
            <a class="page-link" href="#">Previous</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item active">
            <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">4</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">5</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">Next</a>
        </li>
    </ul>
</nav>
{{< /example >}}

## Pagination with icons

The following example is the pagination style with icons for navigating left or right:

{{< example >}}
<nav aria-label="Page navigation example">
    <ul class="pagination">
        <li class="page-item">
            <a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item active">
            <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">4</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">5</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a>
        </li>
    </ul>
</nav>
{{< /example >}}

## Rounded Pagination

{{< example >}}
<nav aria-label="Page navigation example">
    <ul class="pagination circle-pagination">
        <li class="page-item">
            <a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item active">
            <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">4</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">5</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a>
        </li>
    </ul>
</nav>
{{< /example >}}

## Disabled and active states

{{< example >}}
<nav aria-label="Page navigation example">
    <ul class="pagination">
        <li class="page-item disabled">
            <a class="page-link" tabindex="-1" href="#">Previous</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item active">
            <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">4</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">5</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">Next</a>
        </li>
    </ul>
</nav>
{{< /example >}}

## Sizing

Use the modifier classes `.pagination-lg` and `.pagination-sm` to change the size of the elements:

{{< example >}}
<nav aria-label="Page navigation example">
    <ul class="pagination pagination-lg">
        <li class="page-item">
            <a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item active">
            <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">4</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">5</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a>
        </li>
    </ul>
</nav>
<nav aria-label="Page navigation example">
    <ul class="pagination pagination-md">
        <li class="page-item">
            <a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item active">
            <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">4</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">5</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a>
        </li>
    </ul>
</nav>
<nav aria-label="Page navigation example">
    <ul class="pagination pagination-sm">
        <li class="page-item">
            <a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item active">
            <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">4</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">5</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a>
        </li>
    </ul>
</nav>
{{< /example >}}