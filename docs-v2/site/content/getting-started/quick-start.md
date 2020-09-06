---
layout: docs
title: Quick Start
description: This guide will help you get started with Rocket and give you an overview of the integrated UI Kit
group: getting-started
aliases:
  - "/getting-started/"
toc: true
---

## Quick start

This template requires Node and Gulp CLI. Please follow these steps to install the required technologies:

1. Make sure you have Node locally installed.
2. Download Gulp Command Line Interface to be able to use gulp in your Terminal.

{{< highlight bash >}}
npm install gulp-cli -g
{{< /highlight >}}

3. After installing Gulp, run npm install in the main `rocket/` folder to download all the project dependencies. You'll find them in the `node_modules/` folder.

{{< highlight bash >}}
npm install
{{< /highlight >}}

4. Run gulp in the `pixel/` folder to serve the project files using BrowserSync. Running gulp will compile the theme and open `/index.html` in your main browser.

{{< highlight bash >}}
gulp
{{< /highlight >}}

While the gulp command is running, files in the `assets/scss/`, `assets/js/` and `components/` folders will be monitored for changes. Files from the `assets/scss/` folder will generate injected CSS.

Hit `CTRL+C` to terminate the gulp command. This will stop the local server from running.

## Theme without Sass, Gulp or Npm

If you'd like to get a version of our theme without Sass, Gulp or Npm, we've got you covered. Run the following command:

{{< highlight bash >}}
gulp build:dev
{{< /highlight >}}

This will generate a folder `html&css` which will have unminified CSS, Html and Javascript.

## Minified version

If you'd like to compile the code and get a minified version of the HTML and CSS just run the following Gulp command:

{{< highlight bash >}}
gulp build:dist
{{< /highlight >}}

This will generate a folder `dist` which will have minified CSS, Html and Javascript.
