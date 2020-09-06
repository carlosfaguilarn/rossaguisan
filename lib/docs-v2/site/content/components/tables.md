---
layout: docs
title: Tables
description: Use tables to show more complex amount of data
group: components
toc: true
---

## Default

{{< example >}}
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>
                <div class="d-flex align-items-center">
                    Jackson <span class="badge badge-primary ml-2">Pro</span>
                </div>
            </td>
            <td>Larry</td>
            <td>
                <div class="d-flex">
                    <i class="fas fa-edit mr-3" data-toggle="tooltip" data-placement="top" title="Edit item"></i>
                    <i class="fas fa-trash text-danger mr-2" data-toggle="tooltip" data-placement="top" title="Delete item"></i>
                </div>
            </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>
                <div class="d-flex align-items-center">
                    Jacob <span class="badge badge-secondary ml-2">Mid</span>
                </div>
            </td>
            <td>Thornton</td>
            <td>
                <div class="d-flex">
                    <i class="fas fa-edit mr-3" data-toggle="tooltip" data-placement="top" title="Edit item"></i>
                    <i class="fas fa-trash text-danger mr-2" data-toggle="tooltip" data-placement="top" title="Delete item"></i>
                </div>
            </td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>
                <div class="d-flex align-items-center">
                    Larry <span class="badge badge-tertiary ml-2">Pro</span>
                </div>
            </td>
            <td>Doe</td>
            <td>
                <div class="d-flex">
                    <i class="fas fa-edit mr-3" data-toggle="tooltip" data-placement="top" title="Edit item"></i>
                    <i class="fas fa-trash text-danger mr-2" data-toggle="tooltip" data-placement="top" title="Delete item"></i>
                </div>
            </td>
        </tr>
    </tbody>
</table>
{{< /example >}}

## Dark

Use the `.table-dark` modifier class to make tables dark:

{{< example >}}
<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Larry</td>
            <td>Jackson</td>
            <td>@larry</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@jacobt</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>Page</td>
            <td>@lpage</td>
        </tr>
    </tbody>
</table>
{{< /example >}}

## Hover

Use the `.table-hover` modifier class to enable hovering over table rows:

{{< example >}}
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>
                <div class="d-flex align-items-center">
                    Jackson <span class="badge badge-primary ml-2">Pro</span>
                </div>
            </td>
            <td>Larry</td>
            <td>
                <div class="d-flex">
                    <i class="fas fa-edit mr-3" data-toggle="tooltip" data-placement="top" title="Edit item"></i>
                    <i class="fas fa-trash text-danger mr-2" data-toggle="tooltip" data-placement="top" title="Delete item"></i>
                </div>
            </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>
                <div class="d-flex align-items-center">
                    Jacob <span class="badge badge-secondary ml-2">Mid</span>
                </div>
            </td>
            <td>Thornton</td>
            <td>
                <div class="d-flex">
                    <i class="fas fa-edit mr-3" data-toggle="tooltip" data-placement="top" title="Edit item"></i>
                    <i class="fas fa-trash text-danger mr-2" data-toggle="tooltip" data-placement="top" title="Delete item"></i>
                </div>
            </td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>
                <div class="d-flex align-items-center">
                    Larry <span class="badge badge-tertiary ml-2">Pro</span>
                </div>
            </td>
            <td>Doe</td>
            <td>
                <div class="d-flex">
                    <i class="fas fa-edit mr-3" data-toggle="tooltip" data-placement="top" title="Edit item"></i>
                    <i class="fas fa-trash text-danger mr-2" data-toggle="tooltip" data-placement="top" title="Delete item"></i>
                </div>
            </td>
        </tr>
    </tbody>
</table>
{{< /example >}}
