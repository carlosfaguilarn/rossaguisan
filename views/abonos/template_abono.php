<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <style>
        @font-face {
            font-family: SourceSansPro;
            src: url(SourceSansPro-Regular.ttf);
        }

        html,
        body,
        div,
        span,
        applet,
        object,
        iframe,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        blockquote,
        pre,
        a,
        abbr,
        acronym,
        address,
        big,
        cite,
        code,
        del,
        dfn,
        em,
        img,
        ins,
        kbd,
        q,
        s,
        samp,
        small,
        strike,
        strong,
        sub,
        sup,
        tt,
        var,
        b,
        u,
        i,
        center,
        dl,
        dt,
        dd,
        ol,
        ul,
        li,
        fieldset,
        form,
        label,
        legend,
        table,
        caption,
        tbody,
        tfoot,
        thead,
        tr,
        th,
        td,
        article,
        aside,
        canvas,
        details,
        embed,
        figure,
        figcaption,
        footer,
        header,
        hgroup,
        menu,
        nav,
        output,
        ruby,
        section,
        summary,
        time,
        mark,
        audio,
        span,
        video {
            margin: 0;
            padding: 0;
            border: 0;
            font: inherit;
            font-size: 100%;
            vertical-align: baseline;
        }

        html {
            line-height: 1;
        }

        ol,
        ul {
            list-style: none;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        caption,
        th,
        td {
            text-align: left;
            font-weight: normal;
            vertical-align: middle;
        }

        q,
        blockquote {
            quotes: none;
        }

        q:before,
        q:after,
        blockquote:before,
        blockquote:after {
            content: '';
            content: none;
        }

        a img {
            border: none;
        }

        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        main,
        menu,
        nav,
        section,
        summary {
            display: block;
        }

        body {
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 300;
            font-size: 12px;
            margin: 0;
            padding: 0;
        }

        body a {
            text-decoration: none;
            color: inherit;
        }

        body a:hover {
            color: inherit;
            opacity: 0.7;
        }

        body .container {
            min-width: 500px;
            margin: 0 auto;
            padding: 0 20px;
        }

        body .clearfix:after {
            content: '';
            display: table;
            clear: both;
        }

        body .left {
            float: left;
        }

        body .right {
            float: right;
        }

        body .helper {
            display: inline-block;
            height: 100%;
            vertical-align: middle;
        }

        body .no-break {
            page-break-inside: avoid;
        }

        header {
            margin-top: 20px;
            margin-bottom: 50px;
        }

        header figure {
            float: left;
            width: 60px;
            height: 60px;
            margin-right: 10px;
            background-color: #1f65a6;
            border-radius: 50%;
            text-align: center;
        }

        header figure img {
            margin-top: 13px;
        }

        header .company-address {
            float: left;
            max-width: 300px;
            line-height: 1.7em;
        }

        header .company-address .title {
            color: #1f65a6;
            font-weight: 400;
            font-size: 1.5em;
        }

        .upper {
            text-transform: uppercase;
        }

        header .company-contact {
            float: right;
            height: 60px;
            padding: 0 10px;
            background-color: #1f65a6;
            color: white;
        }

        header .company-contact span {
            display: inline-block;
            vertical-align: middle;
        }

        header .company-contact .circle {
            width: 20px;
            height: 20px;
            background-color: white;
            border-radius: 50%;
            margin-top: 10px;
        }

        header .company-contact .circle img {
            vertical-align: middle;
        }

        header .company-contact .phone {
            height: 100%;
            margin-right: 50px;
        }

        header .company-contact .email {
            height: 100%;
            min-width: 100px;
            text-align: right;
        }

        section .details {
            margin-bottom: 55px;
        }

        section .details .client {
            width: 50%;
            line-height: 20px;
        }

        section .details .client .name {
            font-style: bold;
            font-weight: 700px;
            margin-top: -10px;
        }

        section .details .data {
            width: 50%;
            text-align: right;
        }

        section .details .title {
            margin-bottom: 15px;
            color: #1f65a6;
            font-size: 2em;
            font-weight: 400;
            text-transform: uppercase;
        }

        section table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            font-size: 0.9166em;
        }

        section table .qty,
        section table .unit,
        section table .total {
            width: 25%;
        }

        section table .desc {
            width: 25%;
        }

        section table thead {
            display: table-header-group;
            vertical-align: middle;
            border-color: inherit;
        }

        section table thead th {
            padding: 5px 10px;
            background: #04B504;
            border-bottom: 5px solid #FFFFFF;
            border-right: 4px solid #FFFFFF;
            text-align: right;
            color: white;
            font-weight: 400;
            text-transform: uppercase;
        }

        section table thead th:last-child {
            border-right: none;
        }

        section table thead .unit {
            text-align: center;
        }

        section table thead .total {
            text-align: center;
        }

        section table thead .desc {
            text-align: center;
        }

        section table thead .qty {
            text-align: center;
        }

        section table tbody td {
            padding: 10px;
            background: white;
            color: #777777;
            text-align: right;
            border-bottom: 0px solid #FFFFFF;
            border-right: 0px solid #E8F3DB;
        }

        section table tbody td:last-child {
            border-right: none;
        }

        section table tbody h3 {
            margin-bottom: 5px;
            color: #1f65a6;
            font-weight: 600;
        }

        section table tbody .desc {
            text-align: center;
            font-weight: 700;
            color: black;
            font-size: 16px;
            height: 10px;
        }

        section table tbody .qty {
            text-align: center;
            font-weight: 700;
            color: black;
            font-size: 16px;
        }

        section table tbody .unit {
            text-align: right;
            font-weight: 700;
            color: black;
            font-size: 16px;
        }

        section table tbody .total {
            text-align: center;
            font-weight: 700;
            color: black;
            font-size: 16px;
        }

        section table.grand-total {
            margin-bottom: 45px;
        }

        section table.grand-total td {
            padding: 5px 10px;
            border: none;
            color: #777777;
            text-align: right;
        }

        section table.grand-total .desc {
            background-color: transparent;
        }

        section table.grand-total tr:last-child td {
            font-weight: 700;
            color: #1f65a6;
            font-size: 20px;
            margin-top: 20px;
        }

        footer {
            margin-bottom: 20px;
        }

        .thanks {
            margin-bottom: 40px; 
            font-weight: 600;
        }

        footer .notice {
            margin-bottom: 25px;
        }

        footer .end {
            padding-top: 5px;
            border-top: 2px solid #1f65a6;
            text-align: center;
        }

        .logo {
            width: 100px;
            height: 100px;
        }

        .head {
            height: 100px;
            background-color: #1f65a6;
            margin-top: 10px;
            margin-bottom: 30px;
            padding: 20px;
        }

        .head img {}

        .foot {
            position: absolute;
            bottom: 120px;
            width: 100%;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2 !important;
        }

        body {
            background-color: #FFFFFF !important;
            font-size: 18px;
        }

        .name {}
    </style>
</head>

<body>
    <section>
        <div class='head' style='margin-right:30px; margin-left:20px'>
            <img class='logo' src='data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjMsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkNhcGFfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQoJIHdpZHRoPSIyMjhweCIgaGVpZ2h0PSIzMjdweCIgdmlld0JveD0iMCAwIDIyOCAzMjciIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIyOCAzMjciIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPHBhdGggZmlsbD0ibm9uZSIgc3Ryb2tlPSIjRkZGRkZGIiBzdHJva2Utd2lkdGg9IjEwIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIGQ9Ik0xNTQuMDc4LDEzLjEyNSIvPg0KPHBhdGggZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMUI0ODlEIiBzdHJva2Utd2lkdGg9IjEwIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIGQ9Ik0xNDcuMjEsMi42NDEiLz4NCjxwYXRoIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0ZGRkZGRiIgc3Ryb2tlLXdpZHRoPSIxMCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBkPSJNMjA5LjA4LDEwMi4yMThjMCwzNy40NC0yMi4zOCw2OS42Ni01NC40OSw4NA0KCWMtMC4yNCwwLjExLTAuNDksMC4yMjEtMC43NCwwLjMybDAuMDEsMC4wMmMtMTEuMjMsNC45LTIzLjYyLDcuNjEtMzYuNjYsNy42MWMtMS4wNCwwLTIuMDctMC4wMi0zLjA5LTAuMDYNCgljLTIuODctMC4wOS01LjctMC4zMi04LjUtMC42N2wtMC4wMS0wLjAyMWwtMjUuMzQtNDQuODVoMzYuOTNjNC44NiwwLDkuNTQtMC43NCwxMy45NC0yLjEzYzAuMDItMC4wMTEsMC4wMy0wLjAxMSwwLjA1LTAuMDIxDQoJYzE4Ljc2LTUuOTMsMzIuMzYtMjMuNDgsMzIuMzYtNDQuMTljMC0yNC4wMi0xOC4yNzEtNDMuNzctNDEuNjctNDYuMTFjLTEuNTQtMC4xNi0zLjEtMC4yNC00LjY4LTAuMjRINzkuOThsLTIwLjI1LTM1Ljc2DQoJbC0wLjAyLTAuMDRjLTMuMzEtNC43OC04LjQxLTguMjMtMTQuMzQtOS4zOGMtMC40Ny0wLjEtMC45NS0wLjE4LTEuNDMtMC4yM2MtMC4yNC0wLjA0LTAuNDgtMC4wNy0wLjczLTAuMDgNCgljLTAuNDEtMC4wNS0wLjg0LTAuMDgtMS4yNi0wLjA5Yy0wLjI3LTAuMDEtMC41NS0wLjAyLTAuODItMC4wMmg3Ni4wMUMxNjcuOTIsMTAuMjc4LDIwOS4wOCw1MS40MzgsMjA5LjA4LDEwMi4yMTh6Ii8+DQo8cGF0aCBmaWxsPSJub25lIiBzdHJva2U9IiNGRkZGRkYiIHN0cm9rZS13aWR0aD0iMTAiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgZD0iTTYwLjA3LDIwLjU5OGMtMC4xMS0wLjE2LTAuMjEtMC4zMi0wLjM0LTAuNDgiLz4NCjxwYXRoIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0ZGRkZGRiIgc3Ryb2tlLXdpZHRoPSIxMCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBkPSJNNDUuMzcsMTAuNjk4Yy0wLjQ3LTAuMDktMC45NS0wLjE3LTEuNDMtMC4yMw0KCWMtMC4yNC0wLjAzLTAuNDgtMC4wNi0wLjczLTAuMDhjLTAuNDItMC4wNC0wLjg0LTAuMDctMS4yNi0wLjA5Ii8+DQo8cGF0aCBmaWxsPSJub25lIiBzdHJva2U9IiNGRkZGRkYiIHN0cm9rZS13aWR0aD0iMTAiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgZD0iTTIxLjU2LDQ0LjkxOGwtMC4yNC0wLjQzDQoJYy0xLjk2LTMuMzUtMy4wNy03LjI1LTMuMDctMTEuNDFjMC0xMi41OSwxMC4yMS0yMi44LDIyLjgtMjIuOGMwLjAzLDAsMC4wNSwwLDAuMDgsMCIvPg0KPHBhdGggZmlsbD0ibm9uZSIgc3Ryb2tlPSIjRkZGRkZGIiBzdHJva2Utd2lkdGg9IjEwIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIGQ9Ik0xMzEuMTMsMTQ2LjQzOGwtMC4wMS0wLjAyMQ0KCWMwLjAyLTAuMDEsMC4wMy0wLjAxLDAuMDUtMC4wMmMxOC43My01Ljk0LDMyLjMxLTIzLjQ4LDMyLjMxLTQ0LjE3YzAtMjQtMTguMjQtNDMuNzQtNDEuNjEtNDYuMTEiLz4NCjxwYXRoIGZpbGw9IiNGRkZGRkYiIHN0cm9rZT0iI0ZGRkZGRiIgc3Ryb2tlLXdpZHRoPSIxMCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBkPSJNMTA1LjYxLDE5My40MzgNCgljLTAuMDUtMC4wMTEtMC4xMS0wLjAxMS0wLjE2LTAuMDIxbC0yNS4zNC00NC44NWgwLjE1bDI1LjM0LDQ0Ljg1TDEwNS42MSwxOTMuNDM4eiIvPg0KPHBhdGggZmlsbD0ibm9uZSIgc3Ryb2tlPSIjRkZGRkZGIiBzdHJva2Utd2lkdGg9IjEwIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIGQ9Ik0xNjMuNTQsMTAyLjIyOGMwLDIwLjcxLTEzLjYsMzguMjYtMzIuMzYsNDQuMTkNCglsLTAuMDEtMC4wMmwtNDQuNi03OC45NmwtNi41My0xMS41NmgzNy4xNWMxLjU4LDAsMy4xNCwwLjA4LDQuNjgsMC4yNEMxNDUuMjcsNTguNDU4LDE2My41NCw3OC4yMDgsMTYzLjU0LDEwMi4yMjh6Ii8+DQo8cGF0aCBmaWxsPSJub25lIiBzdHJva2U9IiNGRkZGRkYiIHN0cm9rZS13aWR0aD0iMTAiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgZD0iTTUyLjAxLDI4LjMxOSIvPg0KPHBhdGggZmlsbD0ibm9uZSIgc3Ryb2tlPSIjRkZGRkZGIiBzdHJva2Utd2lkdGg9IjEwIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIGQ9Ik00NS4zNywxMC42OThjNS4wMywwLjk1LDkuNDgsMy41NywxMi43NCw3LjI2Ii8+DQo8cGF0aCBmaWxsPSJub25lIiBzdHJva2U9IiNGRkZGRkYiIHN0cm9rZS13aWR0aD0iMTAiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgZD0iTTQxLjk1LDEwLjI5OGMtMC4yNy0wLjAxLTAuNTUtMC4wMi0wLjgyLTAuMDINCgljLTAuMDMsMC0wLjA1LDAtMC4wOCwwYy0xMi41OSwwLTIyLjgsMTAuMjEtMjIuOCwyMi44YzAsNC4xNiwxLjExLDguMDYsMy4wNywxMS40MWwwLjI0LDAuNDNjMy40OSw1LjcyLDkuNDIsOS43OSwxNi4zNCwxMC43NA0KCWMxLjAzLDAuMTUsMi4wOCwwLjIyLDMuMTUsMC4yMmgzOC45MyIvPg0KPHBhdGggZmlsbD0ibm9uZSIgc3Ryb2tlPSIjRkZGRkZGIiBzdHJva2Utd2lkdGg9IjEwIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIGQ9Ik00MC45OSwxNDguNTY4aDIyLjh2NDUuNmgtMjIuOA0KCWMtMTIuMDcsMC0yMS45NS05LjM4LTIyLjc0LTIxLjI0Yy0wLjA0LTAuNTItMC4wNi0xLjA0LTAuMDYtMS41NmMwLTExLjUzLDguNTYtMjEuMDYxLDE5LjY2LTIyLjU4DQoJQzM4Ljg4LDE0OC42MzgsMzkuOTIsMTQ4LjU2OCw0MC45OSwxNDguNTY4eiIvPg0KPHBhdGggZmlsbD0ibm9uZSIgc3Ryb2tlPSIjRkZGRkZGIiBzdHJva2Utd2lkdGg9IjEwIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIGQ9Ik0xMDYuMDIsMTk0LjE2OEg2NHYtNDUuNmgxNi4xMWwyNS4zNCw0NC44NQ0KCWMwLjA1LDAuMDEsMC4xMSwwLjAxLDAuMTYsMC4wMjFMMTA2LjAyLDE5NC4xNjh6Ii8+DQo8cGF0aCBmaWxsPSJub25lIiBzdHJva2U9IiMxQjQ4OUQiIHN0cm9rZS13aWR0aD0iMTAiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgZD0iTS0xOS4yMDUsMTI0LjU4OCIvPg0KPHBhdGggZmlsbD0ibm9uZSIgc3Ryb2tlPSIjRkZGRkZGIiBzdHJva2Utd2lkdGg9IjEwIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIGQ9Ik02My44NSwyOTAuMjg4YzAsMTIuNTktMTAuMjEsMjIuNzktMjIuOCwyMi43OQ0KCXMtMjIuOC0xMC4yLTIyLjgtMjIuNzl2LTAuMDVjMC4wMDItMC44MTksMC4wNDctMS42MjksMC4xMzMtMi40MjYiLz4NCjxwYXRoIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0ZGRkZGRiIgc3Ryb2tlLXdpZHRoPSIxMCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBkPSJNMjA5LjE0LDI5MC4yODhjMCwxMi41OS0xMC4yMSwyMi43OS0yMi44LDIyLjc5DQoJYy04Ljc2LDAtMTYuMzctNC45NC0yMC4xOC0xMi4xOWwtMC4wNjEtMC4xMDlsLTYwLjIzLTEwNi42MWgxMS4zM2MxMy4wNCwwLDI1LjQzLTIuNzEsMzYuNjYtNy42MWw1MS4zOSw5MC45OA0KCUMyMDcuNzEsMjgxLjE3OCwyMDkuMTQsMjg1LjU2OCwyMDkuMTQsMjkwLjI4OHoiLz4NCjxsaW5lIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0ZGRkZGRiIgc3Ryb2tlLXdpZHRoPSIxMCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiB4MT0iMjA2LjYiIHkxPSIyNzkuOTI4IiB4Mj0iMjA1LjI1IiB5Mj0iMjc3LjUzOCIvPg0KPHBhdGggZmlsbD0ibm9uZSIgc3Ryb2tlPSIjRkZGRkZGIiBzdHJva2Utd2lkdGg9IjEwIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIGQ9Ik0xMzEuMTgsMTQ2LjQxOGMtMC4wMiwwLjAxLTAuMDMsMC4wMS0wLjA1LDAuMDIxDQoJYy00LjQsMS4zOS05LjA4LDIuMTMtMTMuOTQsMi4xM0g4MC4xMWwtNDcuMS04My4zOGwtMTEuNDUtMjAuMjdjMy40OSw1LjcyLDkuNDIsOS43OSwxNi4zNCwxMC43NGMxLjAzLDAuMTUsMi4wOCwwLjIyLDMuMTUsMC4yMg0KCWgzOC45OWw2LjUzLDExLjU2bDQ0LjYsNzguOTZMMTMxLjE4LDE0Ni40MTh6Ii8+DQo8bGluZSBmaWxsPSJub25lIiBzdHJva2U9IiNGRkZGRkYiIHN0cm9rZS13aWR0aD0iMTAiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgeDE9IjE4LjI1IiB5MT0iMjkwLjI0IiB4Mj0iMTguMjUiIHkyPSIxNzIuMzY4Ii8+DQo8cG9seWxpbmUgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjRkZGRkZGIiBzdHJva2Utd2lkdGg9IjEwIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHBvaW50cz0iNjMuODUsMTk0LjE2OCA2My44NSwyOTAuMjg4IA0KCTYzLjg1LDI5MC41NTggIi8+DQo8Zz4NCgk8bGluZSBmaWxsPSJub25lIiBzdHJva2U9IiNGRkZGRkYiIHN0cm9rZS13aWR0aD0iMTAiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgeDE9IjgwLjI2IiB5MT0iMTQ4LjU2OCIgeDI9IjgwLjExIiB5Mj0iMTQ4LjU2OCIvPg0KPC9nPg0KPC9zdmc+DQo=' alt=''>
        </div>

        <div class='container'>
            <div class='details clearfix'>
                <div class='client left'>
                    <span class='name'>Folio: </span><?= $ultimo_abono->ID; ?><br> 
                    <span class='name'>Préstamo: </span>$<?= number_format($prestamo->IMPORTE); ?><br>
                    <span class='name'>Cliente: </span><?= $prestamo->NOMBRE . ' ' . $prestamo->APELLIDO; ?><br>
                    <span class='name'>Plazo: </span> Del <?= (new DateTime($prestamo->FECHA_INICIO))->format('d/m/Y'); ?> al <?= (new DateTime($prestamo->FECHA_FIN))->format('d/m/Y'); ?><br> 
                </div>
                <div class='data right'>
                    <div class='title'>Recibo de Abono</div>
                    <div class='date'>
                        Fecha de abono: <?= $ultimo_abono->FECHA; ?><br>
                    </div>
                </div>
            </div>

            <p style='margin-bottom: 10px'>Lista de Abonos</p>
            <table border='0' cellspacing='0' cellpadding='0'>
                <thead>
                    <tr>
                        <th class='desc'>Semana</th>
                        <th class='qty'>Abono</th>
                        <th class='unit'>Saldo</th>
                        <th class='total'>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < count($abonos); $i++): ?>
                        <?php if (isset($abonos[$i])): ?>
                            <tr>
                                <td class='desc'><?= $i + 1; ?></td>
                                <td class='qty'>$<?= number_format($abonos[$i]->ABONO); ?></td>
                                <td class='unit'>$<?= number_format($abonos[$i]->SALDO); ?></td>
                                <td class='total'><?= $abonos[$i]->FECHA; ?></td>
                            </tr>
                            <?php if ($i % 13 == 0 && $i > 0): ?> </tbody>
                        </table>
                        
                        <div style='page-break-after:always;'></div>
                        <div class='head' style='margin-top: 30px;'>
                            <img class='logo' src='data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjMsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkNhcGFfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQoJIHdpZHRoPSIyMjhweCIgaGVpZ2h0PSIzMjdweCIgdmlld0JveD0iMCAwIDIyOCAzMjciIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIyOCAzMjciIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPHBhdGggZmlsbD0ibm9uZSIgc3Ryb2tlPSIjRkZGRkZGIiBzdHJva2Utd2lkdGg9IjEwIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIGQ9Ik0xNTQuMDc4LDEzLjEyNSIvPg0KPHBhdGggZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMUI0ODlEIiBzdHJva2Utd2lkdGg9IjEwIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIGQ9Ik0xNDcuMjEsMi42NDEiLz4NCjxwYXRoIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0ZGRkZGRiIgc3Ryb2tlLXdpZHRoPSIxMCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBkPSJNMjA5LjA4LDEwMi4yMThjMCwzNy40NC0yMi4zOCw2OS42Ni01NC40OSw4NA0KCWMtMC4yNCwwLjExLTAuNDksMC4yMjEtMC43NCwwLjMybDAuMDEsMC4wMmMtMTEuMjMsNC45LTIzLjYyLDcuNjEtMzYuNjYsNy42MWMtMS4wNCwwLTIuMDctMC4wMi0zLjA5LTAuMDYNCgljLTIuODctMC4wOS01LjctMC4zMi04LjUtMC42N2wtMC4wMS0wLjAyMWwtMjUuMzQtNDQuODVoMzYuOTNjNC44NiwwLDkuNTQtMC43NCwxMy45NC0yLjEzYzAuMDItMC4wMTEsMC4wMy0wLjAxMSwwLjA1LTAuMDIxDQoJYzE4Ljc2LTUuOTMsMzIuMzYtMjMuNDgsMzIuMzYtNDQuMTljMC0yNC4wMi0xOC4yNzEtNDMuNzctNDEuNjctNDYuMTFjLTEuNTQtMC4xNi0zLjEtMC4yNC00LjY4LTAuMjRINzkuOThsLTIwLjI1LTM1Ljc2DQoJbC0wLjAyLTAuMDRjLTMuMzEtNC43OC04LjQxLTguMjMtMTQuMzQtOS4zOGMtMC40Ny0wLjEtMC45NS0wLjE4LTEuNDMtMC4yM2MtMC4yNC0wLjA0LTAuNDgtMC4wNy0wLjczLTAuMDgNCgljLTAuNDEtMC4wNS0wLjg0LTAuMDgtMS4yNi0wLjA5Yy0wLjI3LTAuMDEtMC41NS0wLjAyLTAuODItMC4wMmg3Ni4wMUMxNjcuOTIsMTAuMjc4LDIwOS4wOCw1MS40MzgsMjA5LjA4LDEwMi4yMTh6Ii8+DQo8cGF0aCBmaWxsPSJub25lIiBzdHJva2U9IiNGRkZGRkYiIHN0cm9rZS13aWR0aD0iMTAiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgZD0iTTYwLjA3LDIwLjU5OGMtMC4xMS0wLjE2LTAuMjEtMC4zMi0wLjM0LTAuNDgiLz4NCjxwYXRoIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0ZGRkZGRiIgc3Ryb2tlLXdpZHRoPSIxMCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBkPSJNNDUuMzcsMTAuNjk4Yy0wLjQ3LTAuMDktMC45NS0wLjE3LTEuNDMtMC4yMw0KCWMtMC4yNC0wLjAzLTAuNDgtMC4wNi0wLjczLTAuMDhjLTAuNDItMC4wNC0wLjg0LTAuMDctMS4yNi0wLjA5Ii8+DQo8cGF0aCBmaWxsPSJub25lIiBzdHJva2U9IiNGRkZGRkYiIHN0cm9rZS13aWR0aD0iMTAiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgZD0iTTIxLjU2LDQ0LjkxOGwtMC4yNC0wLjQzDQoJYy0xLjk2LTMuMzUtMy4wNy03LjI1LTMuMDctMTEuNDFjMC0xMi41OSwxMC4yMS0yMi44LDIyLjgtMjIuOGMwLjAzLDAsMC4wNSwwLDAuMDgsMCIvPg0KPHBhdGggZmlsbD0ibm9uZSIgc3Ryb2tlPSIjRkZGRkZGIiBzdHJva2Utd2lkdGg9IjEwIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIGQ9Ik0xMzEuMTMsMTQ2LjQzOGwtMC4wMS0wLjAyMQ0KCWMwLjAyLTAuMDEsMC4wMy0wLjAxLDAuMDUtMC4wMmMxOC43My01Ljk0LDMyLjMxLTIzLjQ4LDMyLjMxLTQ0LjE3YzAtMjQtMTguMjQtNDMuNzQtNDEuNjEtNDYuMTEiLz4NCjxwYXRoIGZpbGw9IiNGRkZGRkYiIHN0cm9rZT0iI0ZGRkZGRiIgc3Ryb2tlLXdpZHRoPSIxMCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBkPSJNMTA1LjYxLDE5My40MzgNCgljLTAuMDUtMC4wMTEtMC4xMS0wLjAxMS0wLjE2LTAuMDIxbC0yNS4zNC00NC44NWgwLjE1bDI1LjM0LDQ0Ljg1TDEwNS42MSwxOTMuNDM4eiIvPg0KPHBhdGggZmlsbD0ibm9uZSIgc3Ryb2tlPSIjRkZGRkZGIiBzdHJva2Utd2lkdGg9IjEwIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIGQ9Ik0xNjMuNTQsMTAyLjIyOGMwLDIwLjcxLTEzLjYsMzguMjYtMzIuMzYsNDQuMTkNCglsLTAuMDEtMC4wMmwtNDQuNi03OC45NmwtNi41My0xMS41NmgzNy4xNWMxLjU4LDAsMy4xNCwwLjA4LDQuNjgsMC4yNEMxNDUuMjcsNTguNDU4LDE2My41NCw3OC4yMDgsMTYzLjU0LDEwMi4yMjh6Ii8+DQo8cGF0aCBmaWxsPSJub25lIiBzdHJva2U9IiNGRkZGRkYiIHN0cm9rZS13aWR0aD0iMTAiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgZD0iTTUyLjAxLDI4LjMxOSIvPg0KPHBhdGggZmlsbD0ibm9uZSIgc3Ryb2tlPSIjRkZGRkZGIiBzdHJva2Utd2lkdGg9IjEwIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIGQ9Ik00NS4zNywxMC42OThjNS4wMywwLjk1LDkuNDgsMy41NywxMi43NCw3LjI2Ii8+DQo8cGF0aCBmaWxsPSJub25lIiBzdHJva2U9IiNGRkZGRkYiIHN0cm9rZS13aWR0aD0iMTAiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgZD0iTTQxLjk1LDEwLjI5OGMtMC4yNy0wLjAxLTAuNTUtMC4wMi0wLjgyLTAuMDINCgljLTAuMDMsMC0wLjA1LDAtMC4wOCwwYy0xMi41OSwwLTIyLjgsMTAuMjEtMjIuOCwyMi44YzAsNC4xNiwxLjExLDguMDYsMy4wNywxMS40MWwwLjI0LDAuNDNjMy40OSw1LjcyLDkuNDIsOS43OSwxNi4zNCwxMC43NA0KCWMxLjAzLDAuMTUsMi4wOCwwLjIyLDMuMTUsMC4yMmgzOC45MyIvPg0KPHBhdGggZmlsbD0ibm9uZSIgc3Ryb2tlPSIjRkZGRkZGIiBzdHJva2Utd2lkdGg9IjEwIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIGQ9Ik00MC45OSwxNDguNTY4aDIyLjh2NDUuNmgtMjIuOA0KCWMtMTIuMDcsMC0yMS45NS05LjM4LTIyLjc0LTIxLjI0Yy0wLjA0LTAuNTItMC4wNi0xLjA0LTAuMDYtMS41NmMwLTExLjUzLDguNTYtMjEuMDYxLDE5LjY2LTIyLjU4DQoJQzM4Ljg4LDE0OC42MzgsMzkuOTIsMTQ4LjU2OCw0MC45OSwxNDguNTY4eiIvPg0KPHBhdGggZmlsbD0ibm9uZSIgc3Ryb2tlPSIjRkZGRkZGIiBzdHJva2Utd2lkdGg9IjEwIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIGQ9Ik0xMDYuMDIsMTk0LjE2OEg2NHYtNDUuNmgxNi4xMWwyNS4zNCw0NC44NQ0KCWMwLjA1LDAuMDEsMC4xMSwwLjAxLDAuMTYsMC4wMjFMMTA2LjAyLDE5NC4xNjh6Ii8+DQo8cGF0aCBmaWxsPSJub25lIiBzdHJva2U9IiMxQjQ4OUQiIHN0cm9rZS13aWR0aD0iMTAiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgZD0iTS0xOS4yMDUsMTI0LjU4OCIvPg0KPHBhdGggZmlsbD0ibm9uZSIgc3Ryb2tlPSIjRkZGRkZGIiBzdHJva2Utd2lkdGg9IjEwIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIGQ9Ik02My44NSwyOTAuMjg4YzAsMTIuNTktMTAuMjEsMjIuNzktMjIuOCwyMi43OQ0KCXMtMjIuOC0xMC4yLTIyLjgtMjIuNzl2LTAuMDVjMC4wMDItMC44MTksMC4wNDctMS42MjksMC4xMzMtMi40MjYiLz4NCjxwYXRoIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0ZGRkZGRiIgc3Ryb2tlLXdpZHRoPSIxMCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBkPSJNMjA5LjE0LDI5MC4yODhjMCwxMi41OS0xMC4yMSwyMi43OS0yMi44LDIyLjc5DQoJYy04Ljc2LDAtMTYuMzctNC45NC0yMC4xOC0xMi4xOWwtMC4wNjEtMC4xMDlsLTYwLjIzLTEwNi42MWgxMS4zM2MxMy4wNCwwLDI1LjQzLTIuNzEsMzYuNjYtNy42MWw1MS4zOSw5MC45OA0KCUMyMDcuNzEsMjgxLjE3OCwyMDkuMTQsMjg1LjU2OCwyMDkuMTQsMjkwLjI4OHoiLz4NCjxsaW5lIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0ZGRkZGRiIgc3Ryb2tlLXdpZHRoPSIxMCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiB4MT0iMjA2LjYiIHkxPSIyNzkuOTI4IiB4Mj0iMjA1LjI1IiB5Mj0iMjc3LjUzOCIvPg0KPHBhdGggZmlsbD0ibm9uZSIgc3Ryb2tlPSIjRkZGRkZGIiBzdHJva2Utd2lkdGg9IjEwIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIGQ9Ik0xMzEuMTgsMTQ2LjQxOGMtMC4wMiwwLjAxLTAuMDMsMC4wMS0wLjA1LDAuMDIxDQoJYy00LjQsMS4zOS05LjA4LDIuMTMtMTMuOTQsMi4xM0g4MC4xMWwtNDcuMS04My4zOGwtMTEuNDUtMjAuMjdjMy40OSw1LjcyLDkuNDIsOS43OSwxNi4zNCwxMC43NGMxLjAzLDAuMTUsMi4wOCwwLjIyLDMuMTUsMC4yMg0KCWgzOC45OWw2LjUzLDExLjU2bDQ0LjYsNzguOTZMMTMxLjE4LDE0Ni40MTh6Ii8+DQo8bGluZSBmaWxsPSJub25lIiBzdHJva2U9IiNGRkZGRkYiIHN0cm9rZS13aWR0aD0iMTAiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgeDE9IjE4LjI1IiB5MT0iMjkwLjI0IiB4Mj0iMTguMjUiIHkyPSIxNzIuMzY4Ii8+DQo8cG9seWxpbmUgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjRkZGRkZGIiBzdHJva2Utd2lkdGg9IjEwIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHBvaW50cz0iNjMuODUsMTk0LjE2OCA2My44NSwyOTAuMjg4IA0KCTYzLjg1LDI5MC41NTggIi8+DQo8Zz4NCgk8bGluZSBmaWxsPSJub25lIiBzdHJva2U9IiNGRkZGRkYiIHN0cm9rZS13aWR0aD0iMTAiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgeDE9IjgwLjI2IiB5MT0iMTQ4LjU2OCIgeDI9IjgwLjExIiB5Mj0iMTQ4LjU2OCIvPg0KPC9nPg0KPC9zdmc+DQo=' alt=''>
                        </div> 
                        <div class='details clearfix'>
                            <div class='client left'>
                                <span class='name'>Folio: </span><?= $ultimo_abono->ID; ?><br> 
                                <span class='name'>Préstamo: </span>$<?= number_format($prestamo->IMPORTE); ?><br>
                                <span class='name'>Cliente: </span><?= $prestamo->NOMBRE . ' ' . $prestamo->APELLIDO; ?><br>
                                <span class='name'>Plazo: </span> Del <?= (new DateTime($prestamo->FECHA_INICIO))->format('d/m/Y'); ?> al <?= (new DateTime($prestamo->FECHA_FIN))->format('d/m/Y'); ?><br> 
                            </div>
                            <div class='data right'>
                                <div class='title'>Recibo de Abono</div>
                                <div class='date'>
                                    Fecha de abono: <?= $ultimo_abono->FECHA; ?><br>
                                </div>
                            </div>
                        </div>
                        <p style='margin-bottom: 10px'>Lista de Abonos</p>
                        <table border='0' cellspacing='0' cellpadding='0'>
                            <thead>
                                <tr>
                                    <th class='desc'>Semana</th>
                                    <th class='qty'>Abono</th>
                                    <th class='unit'>Saldo</th>
                                    <th class='total'>Fecha</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endfor; ?>
                </tbody>
            </table>

            <div class='no-break'>
                <table class='grand-total'>
                    <tbody>
                        <tr>
                            <td class='desc'></td>
                            <td class='qty'></td>
                            <td class='unit'>SALDO ACTUAL:</td>
                            <td class='total'>$<?= number_format($prestamo->SALDO); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <footer class='foot'>
        <div class='container'>
            <div class=''>¡Gracias!</div>
            <div class='notice'>
                <div><span class="thanks">NOTA:</span> Este recibo es solo informativo, cualquier aclaración llame al número 6681110599.</div> 
            </div>
            <div class='end'>Cambia tu deuda con nosotros y mejoramos tus intereses</div>
        </div>
    </footer>
</body>

</html>