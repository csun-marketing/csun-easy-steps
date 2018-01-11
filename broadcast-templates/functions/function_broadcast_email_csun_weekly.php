<?php

  function function_broadcast_email_csun_weekly($csun_weekly) {

  $broadcast_csun_weekly = ('


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head>

    <title>CSUN Weekly</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <style type="text/css">

    body {

        margin: 0;

        mso-line-height-rule: exactly;

        padding: 0;

        min-width: 100%;

    }

    table {

        border-collapse: collapse;

        border-spacing: 0;

    }

    td {

        padding: 0;

        vertical-align: top;

    }

    .spacer,

    .border {

        font-size: 1px;

        line-height: 1px;

    }

    .spacer {

        width: 100%;

    }

    img {

        border: 0;

        -ms-interpolation-mode: bicubic;

    }

    .image {

        font-size: 12px;

        margin-bottom: 24px;

        mso-line-height-rule: at-least;

    }

    .image img {

        display: block;

    }

    .logo {

        mso-line-height-rule: at-least;

    }

    .logo img {

        display: block;

    }

    strong {

        font-weight: bold;

    }

    h1,

    h2,

    h3,

    p,

    ol,

    ul,

    li {

        margin-top: 0;

    }

    ol,

    ul,

    li {

        padding-left: 0;

    }

    blockquote {

        margin-top: 0;

        margin-right: 0;

        margin-bottom: 0;

        padding-right: 0;

    }

    .column-top {

        font-size: 32px;

        line-height: 32px;

    }

    .column-bottom {

        font-size: 8px;

        line-height: 8px;

    }

    .column {

        text-align: left;

    }

    .contents {

        table-layout: fixed;

        width: 100%;

    }

    .padded {

        padding-left: 32px;

        padding-right: 32px;

        word-break: break-word;

        word-wrap: break-word;

    }

    .wrapper {

        display: table;

        table-layout: fixed;

        width: 100%;

        min-width: 620px;

        -webkit-text-size-adjust: 100%;

        -ms-text-size-adjust: 100%;

    }

    table.wrapper {

        table-layout: fixed;

    }

    .one-col,

    .two-col,

    .three-col {

        margin-left: auto;

        margin-right: auto;

        width: 600px;

    }

    .centered {

        margin-left: auto;

        margin-right: auto;

    }

    .two-col .image {

        margin-bottom: 23px;

    }

    .two-col .column-bottom {

        font-size: 9px;

        line-height: 9px;

    }

    .two-col .column {

        width: 300px;

    }

    .three-col .image {

        margin-bottom: 21px;

    }

    .three-col .column-bottom {

        font-size: 11px;

        line-height: 11px;

    }

    .three-col .column {

        width: 200px;

    }

    .three-col .first .padded {

        padding-left: 32px;

        padding-right: 16px;

    }

    .three-col .second .padded {

        padding-left: 24px;

        padding-right: 24px;

    }

    .three-col .third .padded {

        padding-left: 16px;

        padding-right: 32px;

    }

    @media only screen and (min-width: 0) {

        .wrapper {

            text-rendering: optimizeLegibility;

        }

    }

    @media only screen and (max-width: 620px) {

        [class="wrapper"] {

            min-width: 318px !important;

            width: 100% !important;

        }

        [class="wrapper"] .one-col,

        [class="wrapper"] .two-col,

        [class="wrapper"] .three-col {

            width: 318px !important;

        }

        [class="wrapper"] .column,

        [class="wrapper"] .gutter {

            display: block;

            float: left;

            width: 318px !important;

        }

        [class="wrapper"] .padded {

            padding-left: 32px !important;

            padding-right: 32px !important;

        }

        [class="wrapper"] .block {

            display: block !important;

        }

        [class="wrapper"] .hide {

            display: none !important;

        }

        [class="wrapper"] .image {

            margin-bottom: 24px !important;

        }

        [class="wrapper"] .image img {

            height: auto !important;

            width: 100% !important;

        }

    }

    .wrapper h1 {

        font-weight: 700;

    }

    .wrapper h2 {

        font-weight: normal;

    }

    .wrapper h3 {

        font-weight: normal;

    }

    .one-col blockquote,

    .two-col blockquote,

    .three-col blockquote {} .one-col-feature h1 {

        font-weight: normal;

    }

    .one-col-feature h2 {

        font-style: normal;

        font-weight: bold;

    }

    .one-col-feature h3 {} td.border {

        width: 1px;

    }

    tr.border {

        background-color: #e9e9e9;

        height: 1px;

    }

    tr.border td {

        line-height: 1px;

    }

    .one-col,

    .two-col,

    .three-col,

    .one-col-feature {

        background-color: #ffffff;

        font-size: 14px;

        table-layout: fixed;

    }

    .one-col,

    .two-col,

    .three-col,

    .one-col-feature,

    .preheader,

    .header,

    .footer {

        margin-left: auto;

        margin-right: auto;

    }

    .preheader table {

        width: 602px;

    }

    .preheader .title,

    .preheader .webversion {

        padding-top: 10px;

        padding-bottom: 12px;

        font-size: 12px;

        line-height: 21px;

    }

    .preheader .title {

        text-align: left;

    }

    .preheader .webversion {

        text-align: right;

        width: 300px;

    }

    .header {

        width: 602px;

    }

    .header .logo {

        padding: 32px 0;

    }

    .header .logo div {

        font-size: 26px;

        font-weight: 700;

        letter-spacing: -0.02em;

        line-height: 32px;

    }

    .header .logo div a {

        text-decoration: none;

    }

    .header .logo div.logo-center {

        text-align: center;

    }

    .header .logo div.logo-center img {

        margin-left: auto;

        margin-right: auto;

    }

    .gmail {

        width: 650px;

        min-width: 650px;

    }

    .gmail td {

        font-size: 1px;

        line-height: 1px;

    }

    .wrapper a {

        text-decoration: underline;

        transition: all .2s;

    }

    .wrapper h1 {

        font-size: 36px;

        margin-bottom: 18px;

    }

    .wrapper h2 {

        font-size: 26px;

        line-height: 32px;

        margin-bottom: 20px;

    }

    .wrapper h3 {

        font-size: 18px;

        line-height: 22px;

        margin-bottom: 16px;

    }

    .wrapper h1 a,

    .wrapper h2 a,

    .wrapper h3 a {

        text-decoration: none;

    }

    .one-col blockquote,

    .two-col blockquote,

    .three-col blockquote {

        font-size: 14px;

        border-left: 2px solid #e9e9e9;

        margin-left: 0;

        padding-left: 16px;

    }

    table.divider {

        width: 100%;

    }

    .divider .inner {

        padding-bottom: 24px;

    }

    .divider table {

        background-color: #e9e9e9;

        font-size: 2px;

        line-height: 2px;

        width: 60px;

    }

    .wrapper .gray {

        background-color: #ffffff;

    }

    .wrapper .gray blockquote {

        border-left-color: #dddddd;

    }

    .wrapper .gray .divider table {

        background-color: #dddddd;

    }

    .padded .image {

        font-size: 0;

    }

    .image-frame {

        padding: 8px;

    }

    .image-background {

        display: inline-block;

        font-size: 12px;

    }

    .btn {

        margin-bottom: 24px;

        padding: 2px;

    }

    .btn a {

        border: 1px solid #ffffff;

        display: inline-block;

        font-size: 13px;

        font-weight: bold;

        line-height: 15px;

        outline-style: solid;

        outline-width: 2px;

        padding: 10px 30px;

        text-align: center;

        text-decoration: none !important;

    }

    .one-col .column table:nth-last-child(2) td h1:last-child,

    .one-col .column table:nth-last-child(2) td h2:last-child,

    .one-col .column table:nth-last-child(2) td h3:last-child,

    .one-col .column table:nth-last-child(2) td p:last-child,

    .one-col .column table:nth-last-child(2) td ol:last-child,

    .one-col .column table:nth-last-child(2) td ul:last-child {

        margin-bottom: 24px;

    }

    .one-col p,

    .one-col ol,

    .one-col ul {

        font-size: 16px;

        line-height: 24px;

    }

    .one-col ol,

    .one-col ul {

        margin-left: 18px;

    }

    .two-col .column table:nth-last-child(2) td h1:last-child,

    .two-col .column table:nth-last-child(2) td h2:last-child,

    .two-col .column table:nth-last-child(2) td h3:last-child,

    .two-col .column table:nth-last-child(2) td p:last-child,

    .two-col .column table:nth-last-child(2) td ol:last-child,

    .two-col .column table:nth-last-child(2) td ul:last-child {

        margin-bottom: 23px;

    }

    .two-col .image-frame {

        padding: 6px;

    }

    .two-col h1 {

        font-size: 26px;

        line-height: 32px;

        margin-bottom: 16px;

    }

    .two-col h2 {

        font-size: 20px;

        line-height: 26px;

        margin-bottom: 18px;

    }

    .two-col h3 {

        font-size: 16px;

        line-height: 20px;

        margin-bottom: 14px;

    }

    .two-col p,

    .two-col ol,

    .two-col ul {

        font-size: 14px;

        line-height: 23px;

    }

    .two-col ol,

    .two-col ul {

        margin-left: 16px;

    }

    .two-col li {

        padding-left: 5px;

    }

    .two-col .divider .inner {

        padding-bottom: 23px;

    }

    .two-col .btn {

        margin-bottom: 23px;

    }

    .two-col blockquote {

        padding-left: 16px;

    }

    .three-col .column table:nth-last-child(2) td h1:last-child,

    .three-col .column table:nth-last-child(2) td h2:last-child,

    .three-col .column table:nth-last-child(2) td h3:last-child,

    .three-col .column table:nth-last-child(2) td p:last-child,

    .three-col .column table:nth-last-child(2) td ol:last-child,

    .three-col .column table:nth-last-child(2) td ul:last-child {

        margin-bottom: 21px;

    }

    .three-col .image-frame {

        padding: 4px;

    }

    .three-col h1 {

        font-size: 20px;

        line-height: 26px;

        margin-bottom: 12px;

    }

    .three-col h2 {

        font-size: 16px;

        line-height: 22px;

        margin-bottom: 14px;

    }

    .three-col h3 {

        font-size: 14px;

        line-height: 18px;

        margin-bottom: 10px;

    }

    .three-col p,

    .three-col ol,

    .three-col ul {

        font-size: 12px;

        line-height: 21px;

    }

    .three-col ol,

    .three-col ul {

        margin-left: 14px;

    }

    .three-col li {

        padding-left: 6px;

    }

    .three-col .divider .inner {

        padding-bottom: 21px;

    }

    .three-col .btn {

        margin-bottom: 21px;

    }

    .three-col .btn a {

        font-size: 12px;

        line-height: 14px;

        padding: 8px 19px;

    }

    .three-col blockquote {

        padding-left: 16px;

    }

    .one-col-feature .column-top {

        font-size: 36px;

        line-height: 36px;

    }

    .one-col-feature .column-bottom {

        font-size: 4px;

        line-height: 4px;

    }

    .one-col-feature .column {

        text-align: center;

        width: 600px;

    }

    .one-col-feature .image {

        margin-bottom: 32px;

    }

    .one-col-feature .column table:nth-last-child(2) td h1:last-child,

    .one-col-feature .column table:nth-last-child(2) td h2:last-child,

    .one-col-feature .column table:nth-last-child(2) td h3:last-child,

    .one-col-feature .column table:nth-last-child(2) td p:last-child,

    .one-col-feature .column table:nth-last-child(2) td ol:last-child,

    .one-col-feature .column table:nth-last-child(2) td ul:last-child {

        margin-bottom: 32px;

    }

    .one-col-feature h1,

    .one-col-feature h2,

    .one-col-feature h3 {

        text-align: center;

    }

    .one-col-feature h1 {

        font-size: 52px;

        margin-bottom: 22px;

    }

    .one-col-feature h2 {

        font-size: 42px;

        margin-bottom: 20px;

    }

    .one-col-feature h3 {

        font-size: 32px;

        line-height: 42px;

        margin-bottom: 20px;

    }

    .one-col-feature p,

    .one-col-feature ol,

    .one-col-feature ul {

        font-size: 21px;

        line-height: 32px;

        margin-bottom: 32px;

    }

    .one-col-feature p a,

    .one-col-feature ol a,

    .one-col-feature ul a {

        text-decoration: none;

    }

    .one-col-feature p {

        text-align: center;

    }

    .one-col-feature ol,

    .one-col-feature ul {

        margin-left: 40px;

        text-align: left;

    }

    .one-col-feature li {

        padding-left: 3px;

    }

    .one-col-feature .btn {

        margin-bottom: 32px;

        text-align: center;

    }

    .one-col-feature .divider .inner {

        padding-bottom: 32px;

    }

    .one-col-feature blockquote {

        border-bottom: 2px solid #e9e9e9;

        border-left-color: #ffffff;

        border-left-width: 0;

        border-left-style: none;

        border-top: 2px solid #e9e9e9;

        margin-bottom: 32px;

        margin-left: 0;

        padding-bottom: 42px;

        padding-left: 0;

        padding-top: 42px;

        position: relative;

    }

    .one-col-feature blockquote:before,

    .one-col-feature blockquote:after {

        background: -moz-linear-gradient(left, #ffffff 25%, #e9e9e9 25%, #e9e9e9 75%, #ffffff 75%);

        background: -webkit-gradient(linear, left top, right top, color-stop(25%, #ffffff), color-stop(25%, #e9e9e9), color-stop(75%, #e9e9e9), color-stop(75%, #ffffff));

        background: -webkit-linear-gradient(left, #ffffff 25%, #e9e9e9 25%, #e9e9e9 75%, #ffffff 75%);

        background: -o-linear-gradient(left, #ffffff 25%, #e9e9e9 25%, #e9e9e9 75%, #ffffff 75%);

        background: -ms-linear-gradient(left, #ffffff 25%, #e9e9e9 25%, #e9e9e9 75%, #ffffff 75%);

        background: linear-gradient(to right, #ffffff 25%, #e9e9e9 25%, #e9e9e9 75%, #ffffff 75%);

        content: \'\';

        display: block;

        height: 2px;

        left: 0;

        outline: 1px solid #ffffff;

        position: absolute;

        right: 0;

    }

    .one-col-feature blockquote:before {

        top: -2px;

    }

    .one-col-feature blockquote:after {

        bottom: -2px;

    }

    .one-col-feature blockquote p,

    .one-col-feature blockquote ol,

    .one-col-feature blockquote ul {

        font-size: 42px;

        line-height: 48px;

        margin-bottom: 48px;

    }

    .one-col-feature blockquote p:last-child,

    .one-col-feature blockquote ol:last-child,

    .one-col-feature blockquote ul:last-child {

        margin-bottom: 0 !important;

    }

    .footer {

        width: 602px;

    }

    .footer .padded {

        font-size: 12px;

        line-height: 20px;

    }

    .social {

        padding-top: 32px;

        padding-bottom: 22px;

    }

    .social img {

        display: block;

    }

    .social .divider {

        font-family: sans-serif;

        font-size: 10px;

        line-height: 21px;

        text-align: center;

        padding-left: 14px;

        padding-right: 14px;

    }

    .social .social-text {

        height: 21px;

        vertical-align: middle !important;

        font-size: 10px;

        font-weight: bold;

        text-decoration: none;

        text-transform: uppercase;

    }

    .social .social-text a {

        text-decoration: none;

    }

    .address {

        width: 250px;

    }

    .address .padded {

        text-align: left;

        padding-left: 0;

        padding-right: 10px;

    }

    .subscription {

        width: 350px;

    }

    .subscription .padded {

        text-align: right;

        padding-right: 0;

        padding-left: 10px;

    }

    .address,

    .subscription {

        padding-top: 32px;

        padding-bottom: 64px;

    }

    .address a,

    .subscription a {

        font-weight: bold;

        text-decoration: none;

    }

    .address table,

    .subscription table {

        width: 100%;

    }

    @media only screen and (max-width: 651px) {

        .gmail {

            display: none !important;

        }

    }

    @media only screen and (max-width: 620px) {

        [class="wrapper"] .one-col .column:last-child table:nth-last-child(2) td h1:last-child,

        [class="wrapper"] .two-col .column:last-child table:nth-last-child(2) td h1:last-child,

        [class="wrapper"] .three-col .column:last-child table:nth-last-child(2) td h1:last-child,

        [class="wrapper"] .one-col-feature .column:last-child table:nth-last-child(2) td h1:last-child,

        [class="wrapper"] .one-col .column:last-child table:nth-last-child(2) td h2:last-child,

        [class="wrapper"] .two-col .column:last-child table:nth-last-child(2) td h2:last-child,

        [class="wrapper"] .three-col .column:last-child table:nth-last-child(2) td h2:last-child,

        [class="wrapper"] .one-col-feature .column:last-child table:nth-last-child(2) td h2:last-child,

        [class="wrapper"] .one-col .column:last-child table:nth-last-child(2) td h3:last-child,

        [class="wrapper"] .two-col .column:last-child table:nth-last-child(2) td h3:last-child,

        [class="wrapper"] .three-col .column:last-child table:nth-last-child(2) td h3:last-child,

        [class="wrapper"] .one-col-feature .column:last-child table:nth-last-child(2) td h3:last-child,

        [class="wrapper"] .one-col .column:last-child table:nth-last-child(2) td p:last-child,

        [class="wrapper"] .two-col .column:last-child table:nth-last-child(2) td p:last-child,

        [class="wrapper"] .three-col .column:last-child table:nth-last-child(2) td p:last-child,

        [class="wrapper"] .one-col-feature .column:last-child table:nth-last-child(2) td p:last-child,

        [class="wrapper"] .one-col .column:last-child table:nth-last-child(2) td ol:last-child,

        [class="wrapper"] .two-col .column:last-child table:nth-last-child(2) td ol:last-child,

        [class="wrapper"] .three-col .column:last-child table:nth-last-child(2) td ol:last-child,

        [class="wrapper"] .one-col-feature .column:last-child table:nth-last-child(2) td ol:last-child,

        [class="wrapper"] .one-col .column:last-child table:nth-last-child(2) td ul:last-child,

        [class="wrapper"] .two-col .column:last-child table:nth-last-child(2) td ul:last-child,

        [class="wrapper"] .three-col .column:last-child table:nth-last-child(2) td ul:last-child,

        [class="wrapper"] .one-col-feature .column:last-child table:nth-last-child(2) td ul:last-child {

            margin-bottom: 24px !important;

        }

        [class="wrapper"] .address,

        [class="wrapper"] .subscription {

            display: block;

            float: left;

            width: 318px !important;

            text-align: center !important;

        }

        [class="wrapper"] .address {

            padding-bottom: 0 !important;

        }

        [class="wrapper"] .subscription {

            padding-top: 0 !important;

        }

        [class="wrapper"] h1 {

            font-size: 24px !important;

            line-height: 32px !important;

            margin-bottom: 18px !important;

        }

        [class="wrapper"] h2 {

            font-size: 24px !important;

            line-height: 32px !important;

            margin-bottom: 20px !important;

        }

        [class="wrapper"] h3 {

            font-size: 18px !important;

            line-height: 22px !important;

            margin-bottom: 16px !important;

        }

        [class="wrapper"] p,

        [class="wrapper"] ol,

        [class="wrapper"] ul {

            font-size: 16px !important;

            line-height: 24px !important;

            margin-bottom: 24px !important;

        }

        [class="wrapper"] ol,

        [class="wrapper"] ul {

            margin-left: 18px !important;

        }

        [class="wrapper"] li {

            padding-left: 2px !important;

        }

        [class="wrapper"] blockquote {

            padding-left: 16px !important;

        }

        [class="wrapper"] .two-col .column:nth-child(n + 3) {

            border-top: 1px solid #e9e9e9;

        }

        [class="wrapper"] .btn {

            margin-bottom: 24px !important;

        }

        [class="wrapper"] .btn a {

            display: block !important;

            font-size: 13px !important;

            font-weight: bold !important;

            line-height: 15px !important;

            padding: 10px 30px !important;

        }

        [class="wrapper"] .column-bottom {

            font-size: 8px !important;

            line-height: 8px !important;

        }

        [class="wrapper"] .first .column-bottom,

        [class="wrapper"] .three-col .second .column-bottom {

            display: none;

        }

        [class="wrapper"] .second .column-top,

        [class="wrapper"] .third .column-top {

            display: none;

        }

        [class="wrapper"] .image-frame {

            padding: 4px !important;

        }

        [class="wrapper"] .header .logo {

            padding-left: 10px !important;

            padding-right: 10px !important;

        }

        [class="wrapper"] .header .logo div {

            font-size: 26px !important;

            line-height: 32px !important;

        }

        [class="wrapper"] .header .logo div img {

            display: inline-block !important;

            max-width: 280px !important;

            height: auto !important;

        }

        [class="wrapper"] table.border,

        [class="wrapper"] .header,

        [class="wrapper"] .webversion,

        [class="wrapper"] .footer {

            width: 320px !important;

        }

        [class="wrapper"] .preheader .webversion,

        [class="wrapper"] .header .logo a {

            text-align: center !important;

        }

        [class="wrapper"] .preheader table,

        [class="wrapper"] .border td {

            width: 318px !important;

        }

        [class="wrapper"] .border td.border {

            width: 1px !important;

        }

        [class="wrapper"] .image .border td {

            width: auto !important;

        }

        [class="wrapper"] .title {

            display: none;

        }

        [class="wrapper"] .footer .padded {

            text-align: center !important;

        }

        [class="wrapper"] .footer .subscription .padded {

            padding-top: 20px !important;

        }

        [class="wrapper"] .footer .social-link {

            display: block !important;

        }

        [class="wrapper"] .footer .social-link table {

            margin: 0 auto 10px !important;

        }

        [class="wrapper"] .footer .divider {

            display: none !important;

        }

        [class="wrapper"] .one-col-feature .btn {

            margin-bottom: 28px !important;

        }

        [class="wrapper"] .one-col-feature .image {

            margin-bottom: 28px !important;

        }

        [class="wrapper"] .one-col-feature .divider .inner {

            padding-bottom: 28px !important;

        }

        [class="wrapper"] .one-col-feature h1 {

            font-size: 42px !important;

            line-height: 48px !important;

            margin-bottom: 20px !important;

        }

        [class="wrapper"] .one-col-feature h2 {

            font-size: 32px !important;

            line-height: 36px !important;

            margin-bottom: 18px !important;

        }

        [class="wrapper"] .one-col-feature h3 {

            font-size: 26px !important;

            line-height: 32px !important;

            margin-bottom: 20px !important;

        }

        [class="wrapper"] .one-col-feature p,

        [class="wrapper"] .one-col-feature ol,

        [class="wrapper"] .one-col-feature ul {

            font-size: 20px !important;

            line-height: 28px !important;

            margin-bottom: 28px !important;

        }

        [class="wrapper"] .one-col-feature blockquote {

            font-size: 18px !important;

            line-height: 26px !important;

            margin-bottom: 28px !important;

            padding-bottom: 26px !important;

            padding-left: 0 !important;

            padding-top: 26px !important;

        }

        [class="wrapper"] .one-col-feature blockquote p,

        [class="wrapper"] .one-col-feature blockquote ol,

        [class="wrapper"] .one-col-feature blockquote ul {

            font-size: 26px !important;

            line-height: 32px !important;

        }

        [class="wrapper"] .one-col-feature blockquote p:last-child,

        [class="wrapper"] .one-col-feature blockquote ol:last-child,

        [class="wrapper"] .one-col-feature blockquote ul:last-child {

            margin-bottom: 0 !important;

        }

        [class="wrapper"] .one-col-feature .column table:last-of-type h1:last-child,

        [class="wrapper"] .one-col-feature .column table:last-of-type h2:last-child,

        [class="wrapper"] .one-col-feature .column table:last-of-type h3:last-child {

            margin-bottom: 28px !important;

        }



         .column-top {

          display: none;

         }



         .article {

          border-bottom: 1px solid #e9e9e9;

          margin-bottom: 20px;

         }



        .border-image {

          display: none;

        }



        [class="wrapper"] h2 {

          margin-bottom: 0 !important;

        }

    }

    @media only screen and (max-width: 320px) {

        [class="wrapper"] td.border {

            display: none;

        }

        [class="wrapper"] table.border,

        [class="wrapper"] .header,

        [class="wrapper"] .webversion,

        [class="wrapper"] .footer {

            width: 318px !important;

        }

    }

  </style>

  <!--[if gte mso 9]>

    <style>

      .column-top {

        mso-line-height-rule: exactly !important;

      }

    </style>

  <![endif]-->

  <meta name="robots" content="noindex,nofollow" />

  <meta property="og:title" content="My First Campaign" />

</head>



<body style="margin: 0;mso-line-height-rule: exactly;padding: 0;min-width: 100%;background-color: #f8f7ec;">

  <style type="text/css">

    body,.wrapper,.emb-editor-canvas{background-color:#f8f7ec}.border{background-color:#e9e9e9}h1{color:#000000}.wrapper h1{}.wrapper h1{font-family:sans-serif}@media only screen and (min-width: 0){.wrapper h1{font-family:Avenir,sans-serif !important}}h1{}.one-col h1{line-height:42px}.two-col h1{line-height:32px}.three-col h1{line-height:26px}.wrapper .one-col-feature h1{line-height:58px}@media only screen and (max-width: 620px){h1{line-height:42px !important}}h2{color:#000000}.wrapper h2{}.wrapper h2{font-family:sans-serif}@media only screen and (min-width: 0){.wrapper h2{font-family:Avenir,sans-serif !important}}h2{}.one-col h2{line-height:32px}.two-col h2{line-height:26px}.three-col h2{line-height:22px}.wrapper .one-col-feature h2{line-height:48px}@media only screen and (max-width: 620px){h2{line-height:32px !important}}h3{color:#000000}.wrapper h3{}.wrapper h3{font-family:Georgia,serif}h3{}.one-col h3{line-height:26px}.two-col h3{line-height:22px}.three-col h3{line-height:20px}.wrapper .one-col-feature h3{line-height:42px}@media only screen and (max-width: 620px){h3{line-height:26px !important}}p,ol,ul{color:#000}.wrapper p,.wrapper ol,.wrapper ul{}.wrapper p,.wrapper ol,.wrapper ul{font-family:Georgia,serif}p,ol,ul{}.one-col p,.one-col ol,.one-col ul{line-height:25px;margin-bottom:25px}.two-col p,.two-col ol,.two-col ul{line-height:23px;margin-bottom:23px}.three-col p,.three-col ol,.three-col ul{line-height:21px;margin-bottom:21px}.wrapper .one-col-feature p,.wrapper .one-col-feature ol,.wrapper .one-col-feature ul{line-height:32px}.one-col-feature blockquote p,.one-col-feature blockquote ol,.one-col-feature blockquote ul{line-height:50px}@media only screen and (max-width: 620px){p,ol,ul{line-height:25px !important;margin-bottom:25px !important}}.image{color:#000}.image{font-family:Georgia,serif}.wrapper a{color:#d00d2d}.wrapper a:hover{color:#a00a23 !important}.wrapper .logo div{color:#41637e}.wrapper .logo div{font-family:sans-serif}@media only screen and (min-width: 0){.wrapper .logo div{font-family:Avenir,sans-serif !important}}.wrapper .logo div a{color:#41637e}.wrapper .logo div a:hover{color:#41637e !important}.wrapper .one-col-feature p a,.wrapper .one-col-feature ol a,.wrapper .one-col-feature ul a{border-bottom:1px solid #d00d2d}.wrapper .one-col-feature p a:hover,.wrapper .one-col-feature ol a:hover,.wrapper .one-col-feature ul a:hover{color:#a00a23 !important;border-bottom:1px solid #a00a23 !important}.btn a{}.wrapper .btn a{}.wrapper .btn a{font-family:Georgia,serif}.wrapper .btn a{background-color:#d00d2d;color:#fff !important;outline-color:#d00d2d;text-shadow:0 1px 0 #bb0c29}.wrapper .btn a:hover{background-color:#bb0c29 !important;color:#fff !important;outline-color:#bb0c29 !important}.preheader .title,.preheader .webversion,.footer .padded{color:#000}.preheader .title,.preheader .webversion,.footer .padded{font-family:Georgia,serif}.preheader .title a,.preheader .webversion a,.footer .padded a{color:#000}.preheader .title a:hover,.preheader .webversion a:hover,.footer .padded a:hover{color:#000 !important}.footer .social .divider{color:#e9e9e9}.footer .social .social-text,.footer .social a{color:#000}.wrapper .footer .social .social-text,.wrapper .footer .social a{}.wrapper .footer .social .social-text,.wrapper .footer .social a{font-family:Georgia,serif}.footer .social .social-text,.footer .social a{}.footer .social .social-text,.footer .social a{letter-spacing:0.05em}.footer .social .social-text:hover,.footer .social a:hover{color:#000 !important}.image .border{background-color:#c8c8c8}.image-frame{background-color:#f8f7ec}.image-background{background-color:#ffffff}

  </style>

  <center class="wrapper" style="display: table;table-layout: fixed;width: 100%;min-width: 620px;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;background-color: #f8f7ec;">













<!--

   HEADER 

  --> 

    <table class="gmail" style="border-collapse: collapse;border-spacing: 0;width: 650px;min-width: 650px">

      <tbody>

        <tr>

          <td style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px">&nbsp;</td>

        </tr>

      </tbody>

    </table>

    <table class="preheader centered" style="border-collapse: collapse;border-spacing: 0;margin-left: auto;margin-right: auto">

      <tbody>

        <tr>

          <td style="padding: 0;vertical-align: top">

            <table style="border-collapse: collapse;border-spacing: 0;width: 602px">

              <tbody>

                <tr>

                  <td class="title" style="padding: 0;vertical-align: top;padding-top: 10px;padding-bottom: 12px;font-size: 12px;line-height: 21px;text-align: left;color: #000;font-family: Georgia,serif">

    <!-- Pre-header -->

                    '.$csun_weekly['issue_date'].'<br/>

                    Volume '.$csun_weekly['volume_number'].', Edition '.$csun_weekly['issue_number'].'    <!-- End Pre-header -->

                  </td>

                  <td class="webversion" style="padding: 0;vertical-align: top;padding-top: 10px;padding-bottom: 12px;font-size: 12px;line-height: 21px;text-align: right;width: 300px;color: #000;font-family: Georgia,serif">

    <!-- View Online -->

                    Trouble loading? <a style="color: #d00d2d" href="http://www.csun.edu/ua/email/20170620_shine_weekly_alumni_v1/"><strong>View this email online.</strong></a>

    <!-- End View Online -->

                  </td>

                </tr>

              </tbody>

            </table>

          </td>

        </tr>

      </tbody>

    </table>

    <table class="header centered" style="border-collapse: collapse;border-spacing: 0;margin-left: auto;margin-right: auto;width: 602px">

      <tbody>

        <tr>

          <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e9e9e9;width: 1px">&nbsp;</td>

        </tr>

        <tr>

          <td class="logo" style="padding: 32px 0;vertical-align: top;mso-line-height-rule: at-least">

            <div class="logo-center" style="font-size: 26px;font-weight: 700;letter-spacing: -0.02em;line-height: 32px;color: #41637e;font-family: sans-serif;text-align: center" align="center" id="emb-email-header">

    <!-- Logo -->

              <img style="border: 0;-ms-interpolation-mode: bicubic;display: block;margin-left: auto;margin-right: auto;max-width: 600px" src="http://www.csun.edu/ua/email/20170620_shine_weekly_alumni_v1/images/logo.png" alt="CSUN | California State University, Northridge" width="600" height="120" />

    <!-- End Logo -->

            </div>

          </td>

        </tr>

      </tbody>

    </table>

<!--

   END HEADER 

  --> 













<!-- LARGE STORY 

  --> 

    <table class="border" style="border-collapse: collapse;border-spacing: 0;font-size: 1px;line-height: 1px;background-color: #e9e9e9;margin-left: auto;margin-right: auto" width="602">

      <tbody>

        <tr>

          <td style="padding: 0;vertical-align: top">&#8203;</td>

        </tr>

      </tbody>

    </table>

    <table class="centered" style="border-collapse: collapse;border-spacing: 0;margin-left: auto;margin-right: auto">

      <tbody>

        <tr>

          <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e9e9e9;width: 1px">&#8203;</td>

          <td style="padding: 0;vertical-align: top">

            <table class="one-col" style="border-collapse: collapse;border-spacing: 0;margin-left: auto;margin-right: auto;width: 600px;background-color: #ffffff;font-size: 14px;table-layout: fixed">

              <tbody>

                <tr>

                  <td class="column" style="padding: 0;vertical-align: top;text-align: left">

    <!-- CONTENT BLOCK -->

      <!-- MACHO IMAGE

         NOTE: Add 24px padding to top of headline IF you REMOVE the IMAGE block.



            - OR -



             Set div class="image" margin-bottom to 0 IF you REMOVE the STORY CONTENT block;

             REMOVE BOTTOM BORDER as well. -->

                    <div class="image" style="font-size: 12px;margin-bottom: 24px;mso-line-height-rule: at-least;color: #000;font-family: Georgia,serif" align="center">

                      <a href="http://csunshinetoday.csun.edu/faculty-and-staff-news/faculty-and-staff-achievements/honors-awards/csun-gave-la-valley-college-president-erika-endrijonas-a-new-direction/" target="_blank">

                        <img style="border: 0;-ms-interpolation-mode: bicubic;display: block;max-width: 600px" src="'.$csun_weekly['featured_photo'].'" alt="'.$csun_weekly['featured_image_alt_text'].'" width="600" height="400" />

                      </a>

                    </div>

      <!-- END MACHO IMAGE -->

    <!-- END CONTENT BLOCK -->

    <!-- CONTENT BLOCK -->

                    <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%">

                      <tbody>

                        <tr>

                          <td class="padded" style="padding: 0;vertical-align: top;padding-left: 32px;padding-right: 32px;word-break: break-word;word-wrap: break-word">

      <!-- LIVE AREA -->

        <!-- Text Block (Single Column) -->

          <!-- Headline -->

                            <h1 style="margin-top: 0;color: #000000;font-weight: 700;font-size: 36px;margin-bottom: 18px;font-family: sans-serif;line-height: 42px">

                              <a style="color: #d00d2d" href="'.$csun_weekly['featured_story_url'].'" target="_blank">

                                '.$csun_weekly['featured_story_title'].'</a>

                            </h1>

          <!-- End Headline -->

          <!-- Content -->

                            <p style="margin-top: 0;color: #000;font-family: Georgia,serif;font-size: 16px;line-height: 25px;margin-bottom: 25px">

                              '.$csun_weekly['featured_story_lede'].'</p>

          <!-- End Content -->

        <!-- End Text Block (Single COlumn) -->

      <!-- END LIVE AREA -->

                          </td>

                        </tr>

                      </tbody>

                    </table>

    <!-- END CONTENT BLOCK -->  

                    <div class="column-bottom" style="font-size: 8px;line-height: 8px">&nbsp;</div>

                  </td>

                </tr>

              </tbody>

            </table>

          </td>

          <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e9e9e9;width: 1px">&#8203;</td>

        </tr>

      </tbody>

    </table>

<!--

   END HEADLINE STORY 

  -->













<!--

   TWO COLUMN ROW 

  

  The two column row can be configured in multiple ways be inserting either Image Blocks, or Text Blocks, in the CONTENT AREA section.

  Blocks can even be stacked, but they must remain within a CONTENT AREA section.

  -->

    <table class="centered" style="border-collapse: collapse;border-spacing: 0;margin-left: auto;margin-right: auto">

      <tbody>

        <tr>

          <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e9e9e9;width: 1px">&#8203;</td>

          <td style="padding: 0;vertical-align: top">

            <table class="two-col" style="border-collapse: collapse;border-spacing: 0;margin-left: auto;margin-right: auto;width: 600px;background-color: #ffffff;font-size: 14px;table-layout: fixed">

              <tbody>

                <tr>



  <!-- __________ -->

  <!-- COLUMN ONE -->

  <!-- ^^^^^^^^^^ -->

                  <td class="column first" style="padding: 0;vertical-align: top;text-align: left;width: 300px">

                    <div>

                      <div class="column-top" style="font-size: 32px;line-height: 32px">&nbsp;</div>

                    </div>

    <!-- CONTENT BLOCK -->

                    <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%">

                      <tbody>

                        <tr>

                          <td class="padded" style="padding: 0;vertical-align: top;padding-left: 32px;padding-right: 32px;word-break: break-word;word-wrap: break-word">

      <!-- LIVE AREA -->

        <!-- Button Block

           NOTE: Two versions, one normal, one for IE -->

                            <div class="btn" style="margin-bottom: 23px;padding: 2px;text-align: left">

                              <![if !mso]>

                                <a style="border: 1px solid #ffffff;display: inline-block;font-size: 13px;font-weight: bold;line-height: 15px;outline-style: solid;outline-width: 2px;padding: 10px 0 !important;;text-align: center;text-decoration: none !important;transition: all .2s;color: #fff !important;font-family: sans-serif;background-color: #d00d2d;outline-color: #d00d2d;text-shadow: 0 1px 0 #bb0c29; width: 100% !important;" href="'.$csun_weekly['featured_story_url'].'" target="_blank">

                                  READ MORE +

                                </a>

                              <![endif]>

                            </div>

        <!-- End Button Block -->

      <!-- END Live AREA -->

                          </td>

                        </tr>

                      </tbody>

                    </table>

    <!-- END CONTENT BLOCK -->

                    <div class="column-bottom" style="font-size: 9px;line-height: 9px">&nbsp;</div>

                  </td>

  <!-- __________ -->

  <!-- COLUMN ONE -->

  <!-- ^^^^^^^^^^ -->





  <!-- __________ -->

  <!-- COLUMN TWO -->

  <!-- ^^^^^^^^^^ -->

                  <td class="column article second" style="padding: 0;vertical-align: top;text-align: left;width: 300px">

                    <div>

                      <div class="column-top" style="font-size: 32px;line-height: 32px">&nbsp;</div>

                    </div>

    <!-- CONTENT BLOCK -->

                    <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%">

                      <tbody>

                        <tr>

                          <td class="padded" style="padding: 0;vertical-align: top;padding-left: 32px;padding-right: 32px;word-break: break-word;word-wrap: break-word">

      <!-- LIVE AREA -->

        <!-- Button Block

           NOTE: Two versions, one normal, one for IE -->

                                                          <div class="btn" style="margin-bottom: 23px;padding: 2px;text-align: left">

                                <![if !mso]>

                                  <a style="border: 1px solid #ffffff;display: inline-block;font-size: 13px;font-weight: bold;line-height: 15px;outline-style: solid;outline-width: 2px;padding: 10px 0 !important;;text-align: center;text-decoration: none !important;transition: all .2s;color: #fff !important;font-family: sans-serif;background-color: #3b5893;outline-color: #3b5893;text-shadow: 0 1px 0 #5572ad; width: 100% !important;" href="https://www.facebook.com/calstatenorthridge/photos/a.77869149242.74204.6684699242/10155412313859243/?type=3&amp;theater" target="_blank">

                                    DISCUSS ON FACEBOOK +

                                  </a>

                                <![endif]>

                              </div>

                                    <!-- End Button Block -->

      <!-- END Live AREA -->

                          </td>

                        </tr>

                      </tbody>

                    </table>

    <!-- END CONTENT BLOCK -->

                    <div class="column-bottom" style="font-size: 9px;line-height: 9px">&nbsp;</div>

                  </td>

  <!-- ______________ -->

  <!-- END COLUMN TWO -->

  <!-- ^^^^^^^^^^^^^^ -->

                </tr>

              </tbody>

            </table>

          </td>

          <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e9e9e9;width: 1px">&#8203;</td>

        </tr>

      </tbody>

    </table>

<!--

   END TWO COLUMN ROW 

  -->













<!--

   TWO COLUMN ROW 

  

  The two column row can be configured in multiple ways be inserting either Image Blocks, or Text Blocks, in the CONTENT AREA section.

  Blocks can even be stacked, but they must remain within a CONTENT AREA section.

  -->

    <table class="centered" style="border-collapse: collapse;border-spacing: 0;margin-left: auto;margin-right: auto">

      <tbody>

        <tr>

          <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e9e9e9;width: 1px">&#8203;</td>

          <td style="padding: 0;vertical-align: top">

            <table class="two-col" style="border-collapse: collapse;border-spacing: 0;margin-left: auto;margin-right: auto;width: 600px;background-color: #ffffff;font-size: 14px;table-layout: fixed">

              <tbody>

                <tr>



  <!-- __________ -->

  <!-- COLUMN ONE -->

  <!-- ^^^^^^^^^^ -->

                  <td class="column article first" style="padding: 0;vertical-align: top;text-align: left;width: 300px">

                    <div>

                      <div class="column-top" style="font-size: 32px;line-height: 32px">&nbsp;</div>

                    </div>

    <!-- CONTENT BLOCK -->

                    <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%">

                      <tbody>

                        <tr>

                          <td class="padded" style="padding: 0;vertical-align: top;padding-left: 32px;padding-right: 32px;word-break: break-word;word-wrap: break-word">

      <!-- LIVE AREA -->

        <!-- Image Block (Two Column) -->

                            <table class="image" style="border-collapse: collapse;border-spacing: 0;font-size: 0;margin-bottom: 23px;mso-line-height-rule: at-least;color: #000;font-family: Georgia,serif" align="center">

                              <tbody>

                                <tr>

                                  <td class="image-frame" style="padding: 6px;vertical-align: top;background-color: #ffffff">

                                    <span class="image-background" style="display: inline-block;font-size: 12px;background-color: #ffffff">

                                      <a href="'.$csun_weekly['story_one_url'].'" target="_blank">

                                        <img style="border: 0;-ms-interpolation-mode: bicubic;display: block;max-width: 300px" src="'.$csun_weekly['story_one_photo'].'" alt="'.$csun_weekly['story_one_image_alt_text'].'" width="220" height="220" />

                                      </a>

                                    </span>

                                  </td>

                                </tr>

                              </tbody>

                            </table>

                            <!--[if mso]><br clear="all" style="mso-special-character:line-break;font-size:1px;">

                            <![endif]-->

        <!-- End Image Block (Two Column) -->

      <!-- END Live AREA -->

                          </td>

                        </tr>

                      </tbody>

                    </table>

    <!-- END CONTENT BLOCK -->

    <!-- CONTENT BLOCK -->

                    <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%">

                      <tbody>

                        <tr>

                          <td class="padded" style="padding: 0;vertical-align: top;padding-left: 32px;padding-right: 32px;word-break: break-word;word-wrap: break-word">

      <!-- LIVE AREA -->

        <!-- Text Block (Two Column) -->

          <!-- Title -->

                            <h2 style="margin-top: 0;color: #000000;font-weight: 700;font-size: 18px;margin-bottom: 16px;font-family: sans-serif;line-height: 24px">

                              <a style="color: #d00d2d" href="'.$csun_weekly['story_one_url'].'" target="_blank">

                                '.$csun_weekly['story_one_title'].' 

                              </a>

                            </h2>

          <!-- End Title -->

          <!-- Content -->

                            <p style="margin-top: 0;color: #000;font-family: Georgia,serif;font-size: 14px;line-height: 23px;margin-bottom: 23px">

                              '.$csun_weekly['story_one_lede'].'                           </p>

          <!-- End Content -->

          <!-- Continue Reading -->

                            <p style="margin-top: 0;color: #000;font-family: sans-serif;font-size: 14px;line-height: 23px;margin-bottom: 23px">

                              <strong style="font-weight: bold">

                                <a style="text-decoration: none;transition: all .2s;color: #d00d2d" data-emb-href-display="www.csun.edu" href="'.$csun_weekly['story_one_url'].'" target="_blank">

                                  Read More +

                                </a>

                              </strong>

                            </p>

          <!-- End Continue Reading -->

          <!-- Continue Reading -->

                                                          <p style="margin-top: 0;color: #000;font-family: sans-serif;font-size: 14px;line-height: 23px;margin-bottom: 23px">

                                <strong style="font-weight: bold">

                                  <a style="text-decoration: none;transition: all .2s;color: #3b5893" data-emb-href-display="www.csun.edu" href="https://www.facebook.com/calstatenorthridge/photos/a.77869149242.74204.6684699242/10155295585724243/?type=3&amp;theater" target="_blank">

                                    Discuss on Facebook +

                                  </a>

                                </strong>

                              </p>

                                      <!-- End Continue Reading -->

        <!-- End Text Block (Two Column) -->

      <!-- END LIVE AREA -->

                          </td>

                        </tr>

                      </tbody>

                    </table>

    <!-- END CONTENT BLOCK -->

                    <div class="column-bottom" style="font-size: 9px;line-height: 9px">&nbsp;</div>

                  </td>

  <!-- __________ -->

  <!-- COLUMN ONE -->

  <!-- ^^^^^^^^^^ -->





  <!-- __________ -->

  <!-- COLUMN TWO -->

  <!-- ^^^^^^^^^^ -->

                  <td class="column article second" style="padding: 0;vertical-align: top;text-align: left;width: 300px">

                    <div>

                      <div class="column-top" style="font-size: 32px;line-height: 32px">&nbsp;</div>

                    </div>

    <!-- CONTENT BLOCK -->

                    <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%">

                      <tbody>

                        <tr>

                          <td class="padded" style="padding: 0;vertical-align: top;padding-left: 32px;padding-right: 32px;word-break: break-word;word-wrap: break-word">

      <!-- LIVE AREA -->

        <!-- Image Block (Two Column) -->

                            <table class="image" style="border-collapse: collapse;border-spacing: 0;font-size: 0;margin-bottom: 23px;mso-line-height-rule: at-least;color: #000;font-family: Georgia,serif" align="center">

                              <tbody>

                                <tr>

                                  <td class="image-frame" style="padding: 6px;vertical-align: top;background-color: #ffffff">

                                    <span class="image-background" style="display: inline-block;font-size: 12px;background-color: #ffffff">

                                      <a href="'.$csun_weekly['story_two_url'].'" target="_blank">

                                        <img style="border: 0;-ms-interpolation-mode: bicubic;display: block;max-width: 300px" src="'.$csun_weekly['story_two_photo'].'" alt="'.$csun_weekly['story_two_image_alt_text'].'" width="220" height="220" />

                                      </a>

                                    </span>

                                  </td>

                                </tr>

                              </tbody>

                            </table>

                            <!--[if mso]><br clear="all" style="mso-special-character:line-break;font-size:1px;">

                            <![endif]-->

        <!-- End Image Block (Two Column) -->

      <!-- END Live AREA -->

                          </td>

                        </tr>

                      </tbody>

                    </table>

    <!-- END CONTENT BLOCK -->

    <!-- CONTENT BLOCK -->

                    <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%">

                      <tbody>

                        <tr>

                          <td class="padded" style="padding: 0;vertical-align: top;padding-left: 32px;padding-right: 32px;word-break: break-word;word-wrap: break-word">

      <!-- LIVE AREA -->

        <!-- Text Block (Two Column) -->

          <!-- Title -->

                            <h2 style="margin-top: 0;color: #000000;font-weight: 700;font-size: 18px;margin-bottom: 16px;font-family: sans-serif;line-height: 24px">

                              <a style="color: #d00d2d" href="'.$csun_weekly['story_two_url'].'" target="_blank">

                                '.$csun_weekly['story_two_title'].' 

                              </a>

                            </h2>

          <!-- End Title -->

          <!-- Content -->

                            <p style="margin-top: 0;color: #000;font-family: Georgia,serif;font-size: 14px;line-height: 23px;margin-bottom: 23px">

                              '.$csun_weekly['story_two_lede'].'                         </p>

          <!-- End Content -->

          <!-- Continue Reading -->

                            <p style="margin-top: 0;color: #000;font-family: sans-serif;font-size: 14px;line-height: 23px;margin-bottom: 23px">

                              <strong style="font-weight: bold">

                                <a style="text-decoration: none;transition: all .2s;color: #d00d2d" data-emb-href-display="www.csun.edu" href="'.$csun_weekly['story_two_url'].'" target="_blank">

                                  Read More +

                                </a>

                              </strong>

                            </p>

          <!-- End Continue Reading -->

          <!-- Continue Reading -->

                                                          <p style="margin-top: 0;color: #000;font-family: sans-serif;font-size: 14px;line-height: 23px;margin-bottom: 23px">

                                <strong style="font-weight: bold">

                                  <a style="text-decoration: none;transition: all .2s;color: #3b5893" data-emb-href-display="www.csun.edu" href="https://www.facebook.com/calstatenorthridge/photos/a.77869149242.74204.6684699242/10155404383449243/?type=3&amp;theater" target="_blank">

                                    Discuss on Facebook +

                                  </a>

                                </strong>

                              </p>

                                      <!-- End Continue Reading -->

        <!-- End Text Block (Two Column) -->

      <!-- END LIVE AREA -->

                          </td>

                        </tr>

                      </tbody>

                    </table>

    <!-- END CONTENT BLOCK -->

                    <div class="column-bottom" style="font-size: 9px;line-height: 9px">&nbsp;</div>

                  </td>

  <!-- ______________ -->

  <!-- END COLUMN TWO -->

  <!-- ^^^^^^^^^^^^^^ -->

                </tr>

              </tbody>

            </table>

          </td>

          <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e9e9e9;width: 1px">&#8203;</td>

        </tr>

      </tbody>

    </table>

<!--

   END TWO COLUMN ROW 

  -->













<!--

   SECTION HEADER 

  -->

  <!-- BORDER BLOCK

     Just leave this stuff alone...

     I mean, it works for now. 

    <table class="centered border-image" style="border-collapse: collapse;border-spacing: 0;margin-left: auto;margin-right: auto">

      <tbody>

        <tr>

          <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e9e9e9;width: 1px">&#8203;</td>

          <td style="padding: 0;vertical-align: top">

            <table class="one-col" style="border-collapse: collapse;border-spacing: 0;margin-left: auto;margin-right: auto;width: 600px;background-color: #ffffff;font-size: 14px;table-layout: fixed">

              <tbody>

                <tr>

                  <td class="column" style="padding: 0;vertical-align: top;text-align: left">

                    <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%">

                      <tbody>

                        <tr>

                          <td class="padded" style="padding: 0;vertical-align: top;padding-left: 0;padding-right: 0;">

                            <table class="image" style="border-collapse: collapse;border-spacing: 0;margin-bottom: 0;mso-line-height-rule: at-least;" align="center">

                              <tbody>

                                <tr>

                                  <td class="image-frame" style="padding: 0;vertical-align: top;background-color: #ffffff">

                                    <img style="border: 0;-ms-interpolation-mode: bicubic;display: block;max-width: 600px" src="http://www.csun.edu/ua/email/20170620_shine_weekly_alumni_v1/images/bg_border.png" alt="" width="600" height="13" />

                                  </td>

                                </tr>

                              </tbody>

                            </table>

                          </td>

                        </tr>

                      </tbody>

                    </table>

                    <div class="column-bottom" style="font-size: 8px;line-height: 8px">&nbsp;</div>

                  </td>

                </tr>

              </tbody>

            </table>

          </td>

          <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e9e9e9;width: 1px">&#8203;</td>

        </tr>

      </tbody>

    </table>

   END BORDER BLOCK -->

    <table class="centered" style="border-collapse: collapse;border-spacing: 0;margin-left: auto;margin-right: auto">

      <tbody>

        <tr>

          <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e9e9e9;width: 1px">&#8203;</td>

          <td style="padding: 0;vertical-align: top">

            <table class="one-col gray" style="border-collapse: collapse;border-spacing: 0;margin-left: auto;margin-right: auto;width: 600px;background-color: #ffffff;font-size: 14px;table-layout: fixed">

              <tbody>

                <tr>

                  <td class="column" style="padding: 0;vertical-align: top;text-align: left">

                    <div>

                      <div class="column-top" style="font-size: 0;line-height: 0">&nbsp;</div>

                    </div>

                    <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%">

                      <tbody>

                        <tr>

                          <td class="padded" style="padding: 0;vertical-align: top;padding-left: 32px;padding-right: 32px;word-break: break-word;word-wrap: break-word">

  <!-- Section Header Text -->

                            <h1 style="margin-top: 0;color: #000000;font-weight: 700;font-size: 36px;margin-bottom: 0;font-family: sans-serif;line-height: 42px">

                              Upcoming Events

                            </h1>

  <!-- End Section Header Text -->

                          </td>

                        </tr>

                      </tbody>

                    </table>

                    <div class="column-bottom" style="font-size: 8px;line-height: 8px">&nbsp;</div>

                  </td>

                </tr>

              </tbody>

            </table>

          </td>

          <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e9e9e9;width: 1px">&#8203;</td>

        </tr>

      </tbody>

    </table>

  <!-- BORDER BLOCK

     Just leave this stuff alone...

     I mean, it works for now. -->

    <table class="centered border-image" style="border-collapse: collapse;border-spacing: 0;margin-left: auto;margin-right: auto">

      <tbody>

        <tr>

          <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e9e9e9;width: 1px">&#8203;</td>

          <td style="padding: 0;vertical-align: top">

            <table class="one-col" style="border-collapse: collapse;border-spacing: 0;margin-left: auto;margin-right: auto;width: 600px;background-color: #ffffff;font-size: 14px;table-layout: fixed">

              <tbody>

                <tr>

                  <td class="column" style="padding: 0;vertical-align: top;text-align: left">

                    <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%">

                      <tbody>

                        <tr>

                          <td class="padded" style="padding: 0;vertical-align: top;padding-left: 0;padding-right: 0;">

                            <table class="image" style="border-collapse: collapse;border-spacing: 0;margin-bottom: 0;mso-line-height-rule: at-least;" align="center">

                              <tbody>

                                <tr>

                                  <td class="image-frame" style="padding: 0;vertical-align: top;background-color: #ffffff">

                                    <img style="border: 0;-ms-interpolation-mode: bicubic;display: block;max-width: 600px" src="http://www.csun.edu/ua/email/20170620_shine_weekly_alumni_v1/images/bg_border.png" alt="" width="600" height="13" />

                                  </td>

                                </tr>

                              </tbody>

                            </table>

                          </td>

                        </tr>

                      </tbody>

                    </table>

                    <div class="column-bottom" style="font-size: 8px;line-height: 8px">&nbsp;</div>

                  </td>

                </tr>

              </tbody>

            </table>

          </td>

          <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e9e9e9;width: 1px">&#8203;</td>

        </tr>

      </tbody>

    </table>

  <!-- END BORDER BLOCK -->

<!--

   END SECTION HEADER 

  -->













<!--

   THREE COLUMN ROW 

  -->

    <table class="centered" style="border-collapse: collapse;border-spacing: 0;margin-left: auto;margin-right: auto">

      <tbody>

        <tr>

          <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e9e9e9;width: 1px">&#8203;</td>

          <td style="padding: 0;vertical-align: top">

            <table class="three-col" style="border-collapse: collapse;border-spacing: 0;margin-left: auto;margin-right: auto;width: 600px;background-color: #ffffff;font-size: 14px;table-layout: fixed">

              <tbody>

                <tr>





    <!-- __________ -->

    <!-- COLUMN ONE -->

    <!-- ^^^^^^^^^^ -->

                  <td class="column article first" style="padding: 0;vertical-align: top;text-align: left;width: 200px">

                    <div>

                      <div class="column-top" style="font-size: 32px;line-height: 32px">&nbsp;</div>

                    </div>

      <!-- CONTENT BLOCK -->

                    <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%">

                      <tbody>

                        <tr>

                          <td class="padded" style="padding: 0;vertical-align: top;padding-left: 32px;padding-right: 16px;word-break: break-word;word-wrap: break-word">

        <!-- LIVE AREA -->

          <!-- Image Block (Three Column) -->

                            <table class="image" style="border-collapse: collapse;border-spacing: 0;font-size: 0;margin-bottom: 21px;mso-line-height-rule: at-least;color: #000;font-family: Georgia,serif" align="center">

                              <tbody>

                                <tr>

                                  <td class="image-frame" style="padding: 4px;vertical-align: top;background-color: #ffffff">

                                    <span class="image-background" style="display: inline-block;font-size: 12px;background-color: #ffffff">

                                      <a href="http://www.valleyperformingartscenter.org/tickets/subscriptions/mknb/" target="_blank">

                                        <img style="border: 0;-ms-interpolation-mode: bicubic;display: block;max-width: 200px" src="http://www.csun.edu/ua/email/20170620_shine_weekly_alumni_v1/images/thumbnail-11.jpg" alt="Single tickets are now on sale for the 2017-18 Valley Performing Arts Center season." width="144" height="144" />

                                      </a>

                                    </span>

                                  </td>

                                </tr>

                              </tbody>

                            </table>

                            <!--[if mso]><br clear="all" style="mso-special-character:line-break;font-size:1px;">

                            <![endif]-->

          <!-- End Image Block (Three Column) -->

        <!-- END LIVE AREA -->

                          </td>

                        </tr>

                      </tbody>

                    </table>

      <!-- END CONTENT BLOCK -->

      <!-- CONTENT BLOCK -->

                    <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%">

                      <tbody>

                        <tr>

                          <td class="padded" style="padding: 0;vertical-align: top;padding-left: 32px;padding-right: 16px;word-break: break-word;word-wrap: break-word">

        <!-- LIVE AREA -->

          <!-- Text Block (Three Column) -->

            <!-- Title -->

                            <h2 style="margin-top: 0;color: #000000;font-weight: 700;font-size: 12px;margin-bottom: 12px;font-family: sans-serif;line-height: 22px">

                              <a style="color: #d00d2d" href="http://www.valleyperformingartscenter.org/tickets/subscriptions/mknb/" target="_blank">

                                2017-18 VPAC Single Tickets                              </a>

                            </h2>

            <!-- End Title -->

            <!-- Copy -->

                            <p style="margin-top: 0;color: #000;font-family: Georgia,serif;font-size: 12px;line-height: 21px;margin-bottom: 21px">

                              <strong>On Sale Now</strong><br/>

                              Get your single tickets for the upcoming 2017-18 VPAC season, <em>Music Knows No Borders</em>.                            </p>

            <!-- End Copy -->

            <!-- Continue Reading -->

                            <p style="margin-top: 0;color: #000;font-family: sans-serif;font-size: 12px;line-height: 21px;margin-bottom: 21px">

                              <strong style="font-weight: bold">

                                <a style="text-decoration: none;transition: all .2s;color: #d00d2d" href="http://www.valleyperformingartscenter.org/tickets/subscriptions/mknb/" target="_blank">

                                  Attend this Event +

                                </a>

                              </strong>

                            </p>

            <!-- End Continue Reading -->

          <!-- End Text Block (Three Column) -->

        <!-- END LIVE AREA -->

                          </td>

                        </tr>

                      </tbody>

                    </table>

      <!-- END CONTENT BLOCK -->

                    <div class="column-bottom" style="font-size: 11px;line-height: 11px">&nbsp;</div>

                  </td>

    <!-- ______________ -->

    <!-- END COLUMN ONE -->

    <!-- ^^^^^^^^^^^^^^ -->





    <!-- __________ -->

    <!-- COLUMN TWO -->

    <!-- ^^^^^^^^^^ -->

                  <td class="column article second" style="padding: 0;vertical-align: top;text-align: left;width: 200px">

                    <div>

                      <div class="column-top" style="font-size: 32px;line-height: 32px">&nbsp;</div>

                    </div>

      <!-- CONTENT BLOCK -->

                    <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%">

                      <tbody>

                        <tr>

                          <td class="padded" style="padding: 0;vertical-align: top;padding-left: 24px;padding-right: 24px;word-break: break-word;word-wrap: break-word">

        <!-- LIVE AREA -->

          <!-- Image Block (Three Column) -->

                            <table class="image" style="border-collapse: collapse;border-spacing: 0;font-size: 0;margin-bottom: 21px;mso-line-height-rule: at-least;color: #000;font-family: Georgia,serif" align="center">

                              <tbody>

                                <tr>

                                  <td class="image-frame" style="padding: 4px;vertical-align: top;background-color: #ffffff">

                                    <span class="image-background" style="display: inline-block;font-size: 12px;background-color: #ffffff">

                                      <a href="http://www.csun.edu/as/summer-movie-fest" target="_blank">

                                        <img style="border: 0;-ms-interpolation-mode: bicubic;display: block;max-width: 200px" src="http://www.csun.edu/ua/email/20170620_shine_weekly_alumni_v1/images/thumbnail-6-1.jpg" alt="Selena is the next Summer Movie Fest feature, on June 22." width="144" height="144" />

                                      </a>

                                    </span>

                                  </td>

                                </tr>

                              </tbody>

                            </table>

                            <!--[if mso]><br clear="all" style="mso-special-character:line-break;font-size:1px;">

                            <![endif]-->

          <!-- End Image Block (Three Column) -->

        <!-- END LIVE AREA -->

                          </td>

                        </tr>

                      </tbody>

                    </table>

      <!-- END CONTENT BLOCK -->

      <!-- CONTENT BLOCK -->

                    <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%">

                      <tbody>

                        <tr>

                          <td class="padded" style="padding: 0;vertical-align: top;padding-left: 24px;padding-right: 24px;word-break: break-word;word-wrap: break-word">

        <!-- LIVE AREA -->

          <!-- Text Block (Three Column) -->

            <!-- Title -->

                            <h2 style="margin-top: 0;color: #000000;font-weight: 700;font-size: 12px;margin-bottom: 12px;font-family: sans-serif;line-height: 22px">

                              <a style="color: #d00d2d" href="http://www.csun.edu/as/summer-movie-fest" target="_blank">

                                Associated Students Summer Movie Fest: <em>Selena</em>                              </a>

                              </h2>

            <!-- End Title -->

            <!-- Copy -->

                            <p style="margin-top: 0;color: #000;font-family: Georgia,serif;font-size: 12px;line-height: 21px;margin-bottom: 21px">

                              <strong>Thur, June 22, 5:30 p.m.</strong><br/>

                              Head to the Oviatt Lawn and enjoy &rsquo;90s hit <em>Selena</em>. This free event is open to the public and will feature a variety of food trucks.                            </p>

            <!-- End Copy -->

            <!-- Continue Reading -->

                            <p style="margin-top: 0;color: #000;font-family: sans-serif;font-size: 12px;line-height: 21px;margin-bottom: 21px">

                              <strong style="font-weight: bold">

                                <a style="text-decoration: none;transition: all .2s;color: #d00d2d" href="http://www.csun.edu/as/summer-movie-fest" target="_blank">

                                  Attend this Event +

                                </a>

                              </strong>

                            </p>

            <!-- End Continue Reading -->

          <!-- End Text Block (Three Column) -->

        <!-- END LIVE AREA -->

                          </td>

                        </tr>

                      </tbody>

                    </table>

      <!-- END CONTENT BLOCK -->

                    <div class="column-bottom" style="font-size: 11px;line-height: 11px">&nbsp;</div>

                  </td>

    <!-- ______________ -->

    <!-- END COLUMN TWO -->

    <!-- ^^^^^^^^^^^^^^ -->





    <!-- ____________ -->

    <!-- COLUMN THREE -->

    <!-- ^^^^^^^^^^^^ -->

                  <td class="column article third" style="padding: 0;vertical-align: top;text-align: left;width: 200px">

                    <div>

                      <div class="column-top" style="font-size: 32px;line-height: 32px">&nbsp;</div>

                    </div>

      <!-- CONTENT BLOCK -->

                    <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%">

                      <tbody>

                        <tr>

                          <td class="padded" style="padding: 0;vertical-align: top;padding-left: 16px;padding-right: 32px;word-break: break-word;word-wrap: break-word">

        <!-- LIVE AREA -->

          <!-- Image Block (Three Column) -->

                            <table class="image" style="border-collapse: collapse;border-spacing: 0;font-size: 0;margin-bottom: 21px;mso-line-height-rule: at-least;color: #000;font-family: Georgia,serif" align="center">

                              <tbody>

                                <tr>

                                  <td class="image-frame" style="padding: 4px;vertical-align: top;background-color: #ffffff">

                                    <span class="image-background" style="display: inline-block;font-size: 12px;background-color: #ffffff">

                                      <a href="https://www.csun.edu/alumni/events/public-health-chapter-summer-mixer" target="_blank">

                                        <img style="border: 0;-ms-interpolation-mode: bicubic;display: block;max-width: 200px" src="http://www.csun.edu/ua/email/20170620_shine_weekly_alumni_v1/images/Unknown-4.jpg" alt="The Public Health Alumni Chapter is hosting a social on June 28 at Public School 818." width="144" height="144" />

                                      </a>

                                    </span>

                                  </td>

                                </tr>

                              </tbody>

                            </table>

                            <!--[if mso]><br clear="all" style="mso-special-character:line-break;font-size:1px;">

                            <![endif]-->

          <!-- End Image Block (Three Column) -->

        <!-- END LIVE AREA -->

                          </td>

                        </tr>

                      </tbody>

                    </table>

      <!-- END CONTENT BLOCK -->

      <!-- CONTENT BLOCK -->

                    <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%">

                      <tbody>

                        <tr>

                          <td class="padded" style="padding: 0;vertical-align: top;padding-left: 16px;padding-right: 32px;word-break: break-word;word-wrap: break-word">

        <!-- LIVE AREA -->

          <!-- Text Block (Three Column) -->

            <!-- Title -->

                            <h2 style="margin-top: 0;color: #000000;font-weight: 700;font-size: 12px;margin-bottom: 12px;font-family: sans-serif;line-height: 22px">

                              <a style="color: #d00d2d" href="https://www.csun.edu/alumni/events/public-health-chapter-summer-mixer" target="_blank">

                                Join the Public Health Alumni Chapter Summer Mixer                              </a>

                              </h2>

            <!-- End Title -->

            <!-- Copy -->

                            <p style="margin-top: 0;color: #000;font-family: Georgia,serif;font-size: 12px;line-height: 21px;margin-bottom: 21px">

                              <strong>Wed, June 28, 6 p.m.</strong><br/>

                              The Public Health Alumni Chapter is hosting a fun summer social at Public School 818 restaurant and bar in Sherman Oaks. Network with fellow alumni and chapter board members and show your support for CSUN, the chapter and our students.                            </p>

            <!-- End Copy -->

            <!-- Continue Reading -->

                            <p style="margin-top: 0;color: #000;font-family: sans-serif;font-size: 12px;line-height: 21px;margin-bottom: 21px">

                              <strong style="font-weight: bold">

                                <a style="text-decoration: none;transition: all .2s;color: #d00d2d" href="https://www.csun.edu/alumni/events/public-health-chapter-summer-mixer" target="_blank">

                                  Attend this Event +

                                </a>

                              </strong>

                            </p>

            <!-- End Continue Reading -->

          <!-- End Text Block (Three Column) -->

        <!-- END LIVE AREA -->

                          </td>

                        </tr>

                      </tbody>

                    </table>

      <!-- END CONTENT BLOCK -->

                    <div class="column-bottom" style="font-size: 11px;line-height: 11px">&nbsp;</div>

                  </td>

    <!-- ________________ -->

    <!-- END COLUMN THREE -->

    <!-- ^^^^^^^^^^^^^^^^ -->





                </tr>

              </tbody>

            </table>

          </td>

          <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e9e9e9;width: 1px">&#8203;</td>

        </tr>

      </tbody>

    </table>

<!--

   END THREE COLUMN ROW 

  -->













<!--

   SECTION HEADER 

  -->

  <!-- BORDER BLOCK

     Just leave this stuff alone...

     I mean, it works for now. 

    <table class="centered border-image" style="border-collapse: collapse;border-spacing: 0;margin-left: auto;margin-right: auto">

      <tbody>

        <tr>

          <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e9e9e9;width: 1px">&#8203;</td>

          <td style="padding: 0;vertical-align: top">

            <table class="one-col" style="border-collapse: collapse;border-spacing: 0;margin-left: auto;margin-right: auto;width: 600px;background-color: #ffffff;font-size: 14px;table-layout: fixed">

              <tbody>

                <tr>

                  <td class="column" style="padding: 0;vertical-align: top;text-align: left">

                    <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%">

                      <tbody>

                        <tr>

                          <td class="padded" style="padding: 0;vertical-align: top;padding-left: 0;padding-right: 0;">

                            <table class="image" style="border-collapse: collapse;border-spacing: 0;margin-bottom: 0;mso-line-height-rule: at-least;" align="center">

                              <tbody>

                                <tr>

                                  <td class="image-frame" style="padding: 0;vertical-align: top;background-color: #ffffff">

                                    <img style="border: 0;-ms-interpolation-mode: bicubic;display: block;max-width: 600px" src="http://www.csun.edu/ua/email/20170620_shine_weekly_alumni_v1/images/bg_border.png" alt="" width="600" height="13" />

                                  </td>

                                </tr>

                              </tbody>

                            </table>

                          </td>

                        </tr>

                      </tbody>

                    </table>

                    <div class="column-bottom" style="font-size: 8px;line-height: 8px">&nbsp;</div>

                  </td>

                </tr>

              </tbody>

            </table>

          </td>

          <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e9e9e9;width: 1px">&#8203;</td>

        </tr>

      </tbody>

    </table>

  END BORDER BLOCK -->

    <table class="centered" style="border-collapse: collapse;border-spacing: 0;margin-left: auto;margin-right: auto">

      <tbody>

        <tr>

          <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e9e9e9;width: 1px">&#8203;</td>

          <td style="padding: 0;vertical-align: top">

            <table class="one-col gray" style="border-collapse: collapse;border-spacing: 0;margin-left: auto;margin-right: auto;width: 600px;background-color: #ffffff;font-size: 14px;table-layout: fixed">

              <tbody>

                <tr>

                  <td class="column" style="padding: 0;vertical-align: top;text-align: left">

                    <div>

                      <div class="column-top" style="font-size: 0;line-height: 0">&nbsp;</div>

                    </div>

                    <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%">

                      <tbody>

                        <tr>

                          <td class="padded" style="padding: 0;vertical-align: top;padding-left: 32px;padding-right: 32px;word-break: break-word;word-wrap: break-word">

  <!-- Section Header Text -->

                            <h1 style="margin-top: 0;color: #000000;font-weight: 700;font-size: 36px;margin-bottom: 0;font-family: sans-serif;line-height: 42px">

                              Focus on Alumni &amp; Community

                            </h1>

  <!-- End Section Header Text -->

                          </td>

                        </tr>

                      </tbody>

                    </table>

                    <div class="column-bottom" style="font-size: 8px;line-height: 8px">&nbsp;</div>

                  </td>

                </tr>

              </tbody>

            </table>

          </td>

          <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e9e9e9;width: 1px">&#8203;</td>

        </tr>

      </tbody>

    </table>

  <!-- BORDER BLOCK

     Just leave this stuff alone...

     I mean, it works for now. -->

    <table class="centered border-image" style="border-collapse: collapse;border-spacing: 0;margin-left: auto;margin-right: auto">

      <tbody>

        <tr>

          <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e9e9e9;width: 1px">&#8203;</td>

          <td style="padding: 0;vertical-align: top">

            <table class="one-col" style="border-collapse: collapse;border-spacing: 0;margin-left: auto;margin-right: auto;width: 600px;background-color: #ffffff;font-size: 14px;table-layout: fixed">

              <tbody>

                <tr>

                  <td class="column" style="padding: 0;vertical-align: top;text-align: left">

                    <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%">

                      <tbody>

                        <tr>

                          <td class="padded" style="padding: 0;vertical-align: top;padding-left: 0;padding-right: 0;">

                            <table class="image" style="border-collapse: collapse;border-spacing: 0;margin-bottom: 0;mso-line-height-rule: at-least;" align="center">

                              <tbody>

                                <tr>

                                  <td class="image-frame" style="padding: 0;vertical-align: top;background-color: #ffffff">

                                    <img style="border: 0;-ms-interpolation-mode: bicubic;display: block;max-width: 600px" src="http://www.csun.edu/ua/email/20170620_shine_weekly_alumni_v1/images/bg_border.png" alt="" width="600" height="13" />

                                  </td>

                                </tr>

                              </tbody>

                            </table>

                          </td>

                        </tr>

                      </tbody>

                    </table>

                    <div class="column-bottom" style="font-size: 8px;line-height: 8px">&nbsp;</div>

                  </td>

                </tr>

              </tbody>

            </table>

          </td>

          <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e9e9e9;width: 1px">&#8203;</td>

        </tr>

      </tbody>

    </table>

  <!-- END BORDER BLOCK -->

<!--

   END SECTION HEADER 

  -->













<!--

   SINGLE ROW 

  -->

    <table class="centered" style="border-collapse: collapse;border-spacing: 0;margin-left: auto;margin-right: auto">

      <tbody>

        <tr>

          <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e9e9e9;width: 1px">&#8203;</td>

          <td style="padding: 0;vertical-align: top">

            <table class="one-col" style="border-collapse: collapse;border-spacing: 0;margin-left: auto;margin-right: auto;width: 600px;background-color: #ffffff;font-size: 14px;table-layout: fixed">

              <tbody>

                <tr>

                  <td class="column article" style="padding: 0;vertical-align: top;text-align: left">

                    <div>

                      <div class="column-top" style="font-size: 32px;line-height: 32px">&nbsp;</div>

                    </div>

  <!-- CONTENT BLOCK -->

                    <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%">

                      <tbody>

                        <tr>

                          <td class="padded" style="padding: 0;vertical-align: top;padding-left: 32px;padding-right: 32px;word-break: break-word;word-wrap: break-word">

    <!-- LIVE AREA -->

      <!-- Text Block (Single Column) -->

        <!-- Linked Headline -->

                            <h2 style="margin-top: 0;color: #000000;font-weight: 700;font-size: 18px;margin-bottom: 0;font-family: sans-serif;line-height: 24px">

                              <a style="color: #d00d2d" href="http://gomatadors.com/news/2017/6/20/general-nominations-now-being-accepted-for-2018-matador-hall-of-fame.aspx" target="_blank">

                                <strong style="font-weight: bold">

                                  Nominations Open for Matador Hall of Fame                                </strong>

                              </a>

                            </h2>

        <!-- End Linked Headline -->

        <!-- Content -->

                            <p style="margin-top: 0;color: #000;font-family: Georgia,serif;font-size: 16px;line-height: 25px;margin-bottom: 24px">

                              Nominations are now being accepted for new members of the Matador Hall of Fame. Until Sept. 1, fans, alumni and supporters can nominate worthy applicants to be members of the 2018 class.                             </p>

                            <p style="margin-top: 0;color: #000;font-family: sans-serif;font-size: 14px;line-height: 23px;margin-bottom: 23px">

                                <a style="text-decoration: none;transition: all .2s;color: #d00d2d" href="http://gomatadors.com/news/2017/6/20/general-nominations-now-being-accepted-for-2018-matador-hall-of-fame.aspx" target="_blank">

                                    <strong style="font-weight: bold">

                                      Read More +

                                    </strong>

                                </a>

                            </p>

        <!-- End Content -->

      <!-- End Text Block (Single Column) -->

    <!-- END LIVE AREA -->

                          </td>

                        </tr>

                      </tbody>

                    </table>

  <!-- END CONTENT BLOCK -->

  <!-- CONTENT BLOCK -->

                    <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%">

                      <tbody>

                        <tr>

                          <td class="padded" style="padding: 0;vertical-align: top;padding-left: 32px;padding-right: 32px;word-break: break-word;word-wrap: break-word">

    <!-- LIVE AREA -->

      <!-- Text Block (Single Column) -->

        <!-- Linked Headline -->

                            <h2 style="margin-top: 0;color: #000000;font-weight: 700;font-size: 18px;margin-bottom: 0;font-family: sans-serif;line-height: 24px">

                              <a style="color: #d00d2d" href="http://csun.edu/alumni/membership" target="_blank">

                                <strong style="font-weight: bold">

                                  Sign up for a CSUN Alumni Membership Today!                                </strong>

                              </a>

                            </h2>

        <!-- End Linked Headline -->

        <!-- Content -->

                            <p style="margin-top: 0;color: #000;font-family: Georgia,serif;font-size: 16px;line-height: 25px;margin-bottom: 24px">

                              A CSUN alumni membership has numerous benefits that will serve you well this summer, such as car rental, hotel and theme park discounts.                            </p>

                            <p style="margin-top: 0;color: #000;font-family: sans-serif;font-size: 14px;line-height: 23px;margin-bottom: 23px">

                                <a style="text-decoration: none;transition: all .2s;color: #d00d2d" href="http://csun.edu/alumni/membership" target="_blank">

                                    <strong style="font-weight: bold">

                                      Read More +

                                    </strong>

                                </a>

                            </p>

        <!-- End Content -->

      <!-- End Text Block (Single Column) -->

    <!-- END LIVE AREA -->

                          </td>

                        </tr>

                      </tbody>

                    </table>

  <!-- END CONTENT BLOCK -->

  <!-- CONTENT BLOCK -->

                    <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%">

                      <tbody>

                        <tr>

                          <td class="padded" style="padding: 0;vertical-align: top;padding-left: 32px;padding-right: 32px;word-break: break-word;word-wrap: break-word">

    <!-- LIVE AREA -->

      <!-- Text Block (Single Column) -->

        <!-- Linked Headline -->

                            <h2 style="margin-top: 0;color: #000000;font-weight: 700;font-size: 18px;margin-bottom: 0;font-family: sans-serif;line-height: 24px">

                              <a style="color: #d00d2d" href="http://www.csun.edu/alumni/events/attorney-networking-group-july-meeting" target="_blank">

                                <strong style="font-weight: bold">

                                  Attorney Networking Group &mdash; July Meeting                                </strong>

                              </a>

                            </h2>

        <!-- End Linked Headline -->

        <!-- Content -->

                            <p style="margin-top: 0;color: #000;font-family: Georgia,serif;font-size: 16px;line-height: 25px;margin-bottom: 24px">

                              This monthly meeting, which will be on July 5 at 5:30 p.m. at Lewitt Hackman 11th Floor 16333 Ventura Blvd., will look to generate business relationships, share qualified referrals and work together to support your circle of resources.                             </p>

                            <p style="margin-top: 0;color: #000;font-family: sans-serif;font-size: 14px;line-height: 23px;margin-bottom: 23px">

                                <a style="text-decoration: none;transition: all .2s;color: #d00d2d" href="http://www.csun.edu/alumni/events/attorney-networking-group-july-meeting" target="_blank">

                                    <strong style="font-weight: bold">

                                      Read More +

                                    </strong>

                                </a>

                            </p>

        <!-- End Content -->

      <!-- End Text Block (Single Column) -->

    <!-- END LIVE AREA -->

                          </td>

                        </tr>

                      </tbody>

                    </table>

  <!-- END CONTENT BLOCK -->
  <!-- CONTENT BLOCK -->

                    <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%">

                      <tbody>

                        <tr>

                          <td class="padded" style="padding: 0;vertical-align: top;padding-left: 32px;padding-right: 32px;word-break: break-word;word-wrap: break-word">

    <!-- LIVE AREA -->

      <!-- Text Block (Single Column) -->

        <!-- Linked Headline -->

                            <h2 style="margin-top: 0;color: #000000;font-weight: 700;font-size: 18px;margin-bottom: 0;font-family: sans-serif;line-height: 24px">

                              <a style="color: #d00d2d" href="http://csunshinetoday.csun.edu/arts-and-culture/csun-professor-wins-american-theatre-and-drama-societys-2017-john-w-frick-book-award/" target="_blank">

                                <strong style="font-weight: bold">

                                  CSUN Professor Wins American Theatre and Drama Society&rsquo;s 2017 John W. Frick Book Award                                </strong>

                              </a>

                            </h2>

        <!-- End Linked Headline -->

        <!-- Content -->

                            <p style="margin-top: 0;color: #000;font-family: Georgia,serif;font-size: 16px;line-height: 25px;margin-bottom: 24px">

                              CSUN theatre professor Hillary Miller will be honored at the annual Association for Theatre in Higher Education conference with the 2017 John W. Frick Book Award for her monograph titled, <em>Drop Dead: Performance in Crisis, 1970s New York</em>.</p>

                            <p style="margin-top: 0;color: #000;font-family: sans-serif;font-size: 14px;line-height: 23px;margin-bottom: 23px">

                                <a style="text-decoration: none;transition: all .2s;color: #d00d2d" href="http://csunshinetoday.csun.edu/arts-and-culture/csun-professor-wins-american-theatre-and-drama-societys-2017-john-w-frick-book-award/" target="_blank">

                                    <strong style="font-weight: bold">

                                      Read More +

                                    </strong>

                                </a>

                            </p>

        <!-- End Content -->

      <!-- End Text Block (Single Column) -->

    <!-- END LIVE AREA -->

                          </td>

                        </tr>

                      </tbody>

                    </table>

  <!-- END CONTENT BLOCK -->
  <!-- CONTENT BLOCK -->

                    <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%">

                      <tbody>

                        <tr>

                          <td class="padded" style="padding: 0;vertical-align: top;padding-left: 32px;padding-right: 32px;word-break: break-word;word-wrap: break-word">

    <!-- LIVE AREA -->

      <!-- Text Block (Single Column) -->

        <!-- Linked Headline -->

                            <h2 style="margin-top: 0;color: #000000;font-weight: 700;font-size: 18px;margin-bottom: 0;font-family: sans-serif;line-height: 24px">

                              <a style="color: #d00d2d" href="http://csunshinetoday.csun.edu/community/mba-students-win-small-business-institute-project-of-the-year-award/" target="_blank">

                                <strong style="font-weight: bold">

                                  CSUN MBA Students Win Small Business Institute Project of the Year Award                               </strong>

                              </a>

                            </h2>

        <!-- End Linked Headline -->

        <!-- Content -->

                            <p style="margin-top: 0;color: #000;font-family: Georgia,serif;font-size: 16px;line-height: 25px;margin-bottom: 24px">

                              Five students from the Master of Business Administration program at CSUN received first place for the Small Business Institute Experiential Learning Project of the Year Award in the Graduate Feasibility/Business Plan category, for helping a small business improve its operational workflow.</p>

                            <p style="margin-top: 0;color: #000;font-family: sans-serif;font-size: 14px;line-height: 23px;margin-bottom: 23px">

                                <a style="text-decoration: none;transition: all .2s;color: #d00d2d" href="http://csunshinetoday.csun.edu/community/mba-students-win-small-business-institute-project-of-the-year-award/" target="_blank">

                                    <strong style="font-weight: bold">

                                      Read More +

                                    </strong>

                                </a>

                            </p>

        <!-- End Content -->

      <!-- End Text Block (Single Column) -->

    <!-- END LIVE AREA -->

                          </td>

                        </tr>

                      </tbody>

                    </table>

  <!-- END CONTENT BLOCK -->
  <!-- CONTENT BLOCK -->

                    <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%">

                      <tbody>

                        <tr>

                          <td class="padded" style="padding: 0;vertical-align: top;padding-left: 32px;padding-right: 32px;word-break: break-word;word-wrap: break-word">

    <!-- LIVE AREA -->

      <!-- Text Block (Single Column) -->

        <!-- Linked Headline -->

                            <h2 style="margin-top: 0;color: #000000;font-weight: 700;font-size: 18px;margin-bottom: 0;font-family: sans-serif;line-height: 24px">

                              <a style="color: #d00d2d" href="http://gomatadors.com/news/2017/6/16/general-blog-BLOG-Track-Field-Seniors-Commune-with-Frogs-Coffee-and-School-Children_in_Costa_Rica.aspx" target="_blank">

                                <strong style="font-weight: bold">

                                 ATHLETICS BLOG: Follow the CSUN Student-Athletes&rsquo; Trip to Costa Rica                     </strong>

                              </a>

                            </h2>

        <!-- End Linked Headline -->

        <!-- Content -->

                            <p style="margin-top: 0;color: #000;font-family: Georgia,serif;font-size: 16px;line-height: 25px;margin-bottom: 24px">CSUN student-athletes arrived in Costa Rica for a two-week service trip in an effort to volunteer, learn about Costa Rica&rsquo;s economy, culture and environment, and grow their camaraderie as Matadors. </p>

                            <p style="margin-top: 0;color: #000;font-family: sans-serif;font-size: 14px;line-height: 23px;margin-bottom: 23px">

                                <a style="text-decoration: none;transition: all .2s;color: #d00d2d" href="http://gomatadors.com/news/2017/6/16/general-blog-BLOG-Track-Field-Seniors-Commune-with-Frogs-Coffee-and-School-Children_in_Costa_Rica.aspx" target="_blank">

                                    <strong style="font-weight: bold">

                                      Read More +

                                    </strong>

                                </a>

                            </p>

        <!-- End Content -->

      <!-- End Text Block (Single Column) -->

    <!-- END LIVE AREA -->

                          </td>

                        </tr>

                      </tbody>

                    </table>

  <!-- END CONTENT BLOCK -->

                    <div class="column-bottom" style="font-size: 8px;line-height: 8px">&nbsp;</div>

                  </td>

                </tr>

              </tbody>

            </table>

          </td>

          <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e9e9e9;width: 1px">&#8203;</td>

        </tr>

      </tbody>

    </table>

<!--

   END SINGLE ROW 

  -->













<!--

   SECTION HEADER 

  -->

  <!-- BORDER BLOCK

     Just leave this stuff alone...

     I mean, it works for now. 

    <table class="centered border-image" style="border-collapse: collapse;border-spacing: 0;margin-left: auto;margin-right: auto">

      <tbody>

        <tr>

          <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e9e9e9;width: 1px">&#8203;</td>

          <td style="padding: 0;vertical-align: top">

            <table class="one-col" style="border-collapse: collapse;border-spacing: 0;margin-left: auto;margin-right: auto;width: 600px;background-color: #ffffff;font-size: 14px;table-layout: fixed">

              <tbody>

                <tr>

                  <td class="column" style="padding: 0;vertical-align: top;text-align: left">

                    <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%">

                      <tbody>

                        <tr>

                          <td class="padded" style="padding: 0;vertical-align: top;padding-left: 0;padding-right: 0;">

                            <table class="image" style="border-collapse: collapse;border-spacing: 0;margin-bottom: 0;mso-line-height-rule: at-least;" align="center">

                              <tbody>

                                <tr>

                                  <td class="image-frame" style="padding: 0;vertical-align: top;background-color: #ffffff">

                                    <img style="border: 0;-ms-interpolation-mode: bicubic;display: block;max-width: 600px" src="http://www.csun.edu/ua/email/20170620_shine_weekly_alumni_v1/images/bg_border.png" alt="" width="600" height="13" />

                                  </td>

                                </tr>

                              </tbody>

                            </table>

                          </td>

                        </tr>

                      </tbody>

                    </table>

                    <div class="column-bottom" style="font-size: 8px;line-height: 8px">&nbsp;</div>

                  </td>

                </tr>

              </tbody>

            </table>

          </td>

          <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e9e9e9;width: 1px">&#8203;</td>

        </tr>

      </tbody>

    </table>

   END BORDER BLOCK -->

    <table class="centered" style="border-collapse: collapse;border-spacing: 0;margin-left: auto;margin-right: auto">

      <tbody>

        <tr>

          <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e9e9e9;width: 1px">&#8203;</td>

          <td style="padding: 0;vertical-align: top">

            <table class="one-col gray" style="border-collapse: collapse;border-spacing: 0;margin-left: auto;margin-right: auto;width: 600px;background-color: #ffffff;font-size: 14px;table-layout: fixed">

              <tbody>

                <tr>

                  <td class="column" style="padding: 0;vertical-align: top;text-align: left">

                    <div>

                      <div class="column-top" style="font-size: 0;line-height: 0">&nbsp;</div>

                    </div>

                    <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%">

                      <tbody>

                        <tr>

                          <td class="padded" style="padding: 0;vertical-align: top;padding-left: 32px;padding-right: 32px;word-break: break-word;word-wrap: break-word">

  <!-- Section Header Text -->

                            <h1 style="margin-top: 0;color: #000000;font-weight: 700;font-size: 36px;margin-bottom: 0;font-family: sans-serif;line-height: 42px">

                              CSUN in the News

                            </h1>

  <!-- End Section Header Text -->

                          </td>

                        </tr>

                      </tbody>

                    </table>

                    <div class="column-bottom" style="font-size: 8px;line-height: 8px">&nbsp;</div>

                  </td>

                </tr>

              </tbody>

            </table>

          </td>

          <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e9e9e9;width: 1px">&#8203;</td>

        </tr>

      </tbody>

    </table>

  <!-- BORDER BLOCK

     Just leave this stuff alone...

     I mean, it works for now. -->

    <table class="centered border-image" style="border-collapse: collapse;border-spacing: 0;margin-left: auto;margin-right: auto">

      <tbody>

        <tr>

          <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e9e9e9;width: 1px">&#8203;</td>

          <td style="padding: 0;vertical-align: top">

            <table class="one-col" style="border-collapse: collapse;border-spacing: 0;margin-left: auto;margin-right: auto;width: 600px;background-color: #ffffff;font-size: 14px;table-layout: fixed">

              <tbody>

                <tr>

                  <td class="column" style="padding: 0;vertical-align: top;text-align: left">

                    <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%">

                      <tbody>

                        <tr>

                          <td class="padded" style="padding: 0;vertical-align: top;padding-left: 0;padding-right: 0;">

                            <table class="image" style="border-collapse: collapse;border-spacing: 0;margin-bottom: 0;mso-line-height-rule: at-least;" align="center">

                              <tbody>

                                <tr>

                                  <td class="image-frame" style="padding: 0;vertical-align: top;background-color: #ffffff">

                                    <img style="border: 0;-ms-interpolation-mode: bicubic;display: block;max-width: 600px" src="http://www.csun.edu/ua/email/20170620_shine_weekly_alumni_v1/images/bg_border.png" alt="" width="600" height="13" />

                                  </td>

                                </tr>

                              </tbody>

                            </table>

                          </td>

                        </tr>

                      </tbody>

                    </table>

                    <div class="column-bottom" style="font-size: 8px;line-height: 8px">&nbsp;</div>

                  </td>

                </tr>

              </tbody>

            </table>

          </td>

          <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e9e9e9;width: 1px">&#8203;</td>

        </tr>

      </tbody>

    </table>

  <!-- END BORDER BLOCK -->

<!--

   END SECTION HEADER 

  -->













<!--

   SINGLE ROW 

  -->

    <table class="centered" style="border-collapse: collapse;border-spacing: 0;margin-left: auto;margin-right: auto">

      <tbody>

        <tr>

          <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e9e9e9;width: 1px">&#8203;</td>

          <td style="padding: 0;vertical-align: top">

            <table class="one-col" style="border-collapse: collapse;border-spacing: 0;margin-left: auto;margin-right: auto;width: 600px;background-color: #ffffff;font-size: 14px;table-layout: fixed">

              <tbody>

                <tr>

                  <td class="column article" style="padding: 0;vertical-align: top;text-align: left">

                    <div>

                      <div class="column-top" style="font-size: 32px;line-height: 32px">&nbsp;</div>

                    </div>

  <!-- CONTENT BLOCK -->

                    <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%">

                      <tbody>

                        <tr>

                          <td class="padded" style="padding: 0;vertical-align: top;padding-left: 32px;padding-right: 32px;word-break: break-word;word-wrap: break-word">

    <!-- LIVE AREA -->

      <!-- Text Block (Single Column) -->

        <!-- Linked Headline -->

                            <h2 style="margin-top: 0;color: #000000;font-weight: 700;font-size: 18px;margin-bottom: 0;font-family: sans-serif;line-height: 24px">

                              <a style="color: #d00d2d" href="http://www.nbclosangeles.com/on-air/as-seen-on/CSUN-DEAF-Project-Fathers-Day-Celebration-Santa-Monica-Northridge-428187173.html" target="_blank">

                                <strong style="font-weight: bold">

                                  CSUN DEAF Project Marks 10 Years With Father&rsquo;s Day Celebration                                </strong>

                              </a>

                            </h2>

        <!-- End Linked Headline -->

        <!-- Content -->

                            <p style="margin-top: 0;color: #000;font-family: Georgia,serif;font-size: 16px;line-height: 25px;margin-bottom: 24px">

                              NBC 4                            </p>

        <!-- End Content -->

      <!-- End Text Block (Single Column) -->

    <!-- END LIVE AREA -->

                          </td>

                        </tr>

                      </tbody>

                    </table>

  <!-- END CONTENT BLOCK -->

  <!-- CONTENT BLOCK -->

                    <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%">

                      <tbody>

                        <tr>

                          <td class="padded" style="padding: 0;vertical-align: top;padding-left: 32px;padding-right: 32px;word-break: break-word;word-wrap: break-word">

    <!-- LIVE AREA -->

      <!-- Text Block (Single Column) -->

        <!-- Linked Headline -->

                            <h2 style="margin-top: 0;color: #000000;font-weight: 700;font-size: 18px;margin-bottom: 0;font-family: sans-serif;line-height: 24px">

                              <a style="color: #d00d2d" href="http://www.latimes.com/socal/glendale-news-press/news/tn-gnp-me-professor-award-20170616-story.html" target="_blank">

                                <strong style="font-weight: bold">

                                  CSUN Professor Earns Book Award for Research into New York Theater During 1970s Fiscal Crisis                                </strong>

                              </a>

                            </h2>

        <!-- End Linked Headline -->

        <!-- Content -->

                            <p style="margin-top: 0;color: #000;font-family: Georgia,serif;font-size: 16px;line-height: 25px;margin-bottom: 24px">

                              Los Angeles Times                            </p>

        <!-- End Content -->

      <!-- End Text Block (Single Column) -->

    <!-- END LIVE AREA -->

                          </td>

                        </tr>

                      </tbody>

                    </table>

  <!-- END CONTENT BLOCK -->

  <!-- CONTENT BLOCK -->

                    <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%">

                      <tbody>

                        <tr>

                          <td class="padded" style="padding: 0;vertical-align: top;padding-left: 32px;padding-right: 32px;word-break: break-word;word-wrap: break-word">

    <!-- LIVE AREA -->

      <!-- Text Block (Single Column) -->

        <!-- Linked Headline -->

                            <h2 style="margin-top: 0;color: #000000;font-weight: 700;font-size: 18px;margin-bottom: 0;font-family: sans-serif;line-height: 24px">

                              <a style="color: #d00d2d" href="https://parade.com/578150/stephaniestephens/cheech-marin-we-come-in-peace-and-we-have-you-surrounded/" target="_blank">

                                <strong style="font-weight: bold">

                                  Cheech Marin: &ldquo;We Come in Peace and We Have You Surrounded&rdquo;                                </strong>

                              </a>

                            </h2>

        <!-- End Linked Headline -->

        <!-- Content -->

                            <p style="margin-top: 0;color: #000;font-family: Georgia,serif;font-size: 16px;line-height: 25px;margin-bottom: 24px">

                              Parade Magazine                            </p>

        <!-- End Content -->

      <!-- End Text Block (Single Column) -->

    <!-- END LIVE AREA -->

                          </td>

                        </tr>

                      </tbody>

                    </table>

  <!-- END CONTENT BLOCK -->

                    <div class="column-bottom" style="font-size: 8px;line-height: 8px">&nbsp;</div>

                  </td>

                </tr>

              </tbody>

            </table>

          </td>

          <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e9e9e9;width: 1px">&#8203;</td>

        </tr>

      </tbody>

    </table>

<!--

   END SINGLE ROW 

  -->













    <table class="border" style="border-collapse: collapse;border-spacing: 0;font-size: 1px;line-height: 1px;background-color: #e9e9e9;margin-left: auto;margin-right: auto" width="602">

      <tbody>

        <tr>

          <td style="padding: 0;vertical-align: top">&#8203;</td>

        </tr>

      </tbody>

    </table>









      <table class="footer centered" style="border-collapse: collapse;border-spacing: 0;margin-left: auto;margin-right: auto;width: 602px">

        <tbody>

          <tr>

            <td class="social" style="padding: 0;vertical-align: top;padding-top: 32px;padding-bottom: 22px" align="center">

              <table style="border-collapse: collapse;border-spacing: 0">

                <tbody>

                  <tr>

    <!-- SUPPORT LINKS -->

                    <td class="social-link" style="padding: 0;vertical-align: top">

                      <table style="border-collapse: collapse;border-spacing: 0">

                        <tbody>

                          <tr>

                            <td class="social-text" style="padding: 0;vertical-align: middle !important;height: 21px;font-size: 10px;font-weight: bold;text-decoration: none;text-transform: uppercase;color: #000;letter-spacing: 0.05em;font-family: Georgia,serif">

                              <img style="border: 0;-ms-interpolation-mode: bicubic;display: block;margin-left: auto;margin-right: auto;max-width: 600px" src="http://www.csun.edu/ua/email/20150423_logos/csun_logo_2015.png" alt="CSUN | California State University, Northridge" width="184" height="64" />

                            </td>

                          </tr>

                        </tbody>

                      </table>

                    </td>

    <!-- END SUPPORT LINKS -->

                  </tr>

                </tbody>

              </table>

            </td>

          </tr>

        </tbody>

      </table>





























      <table class="footer centered" style="border-collapse: collapse;border-spacing: 0;margin-left: auto;margin-right: auto;width: 602px">

        <tbody>

          <tr>

            <td class="social" style="padding: 0;vertical-align: top;padding-top: 32px;padding-bottom: 22px" align="center">

              <table style="border-collapse: collapse;border-spacing: 0">

                <tbody>

                  <tr>

    <!-- FACEBOOK -->

                    <td class="social-link" style="padding: 0;vertical-align: top">

                      <table style="border-collapse: collapse;border-spacing: 0">

                        <tbody>

                          <tr>

                            <td style="padding: 0;vertical-align: top">

                              <div style="text-decoration:none;" likeurl="http://www.facebook.com/calstatenorthridge">

                                <img style="border: 0;-ms-interpolation-mode: bicubic;display: block" src="http://www.csun.edu/ua/email/20170620_shine_weekly_alumni_v1/images/facebook.png" width="32" height="32" />

                              </div>

                            </td>

                            <td class="social-text" style="padding: 0;vertical-align: middle !important;height: 21px;font-size: 10px;font-weight: bold;text-decoration: none;text-transform: uppercase;color: #000;letter-spacing: 0.05em;font-family: Georgia,serif">

                              <a style="text-decoration:none;" href="http://www.facebook.com/calstatenorthridge" target="_blank">

                                Like us on Facebook

                              </a>

                            </td>

                          </tr>

                        </tbody>

                      </table>

                    </td>

    <!-- END FACEBOOK -->

                    <td class="divider" style="padding: 0;vertical-align: top;font-family: sans-serif;font-size: 10px;line-height: 21px;text-align: center;padding-left: 14px;padding-right: 14px;color: #000000">&nbsp;

                      

                    </td>

    <!-- TWITTER -->

                    <td class="social-link" style="padding: 0;vertical-align: top">

                      <table style="border-collapse: collapse;border-spacing: 0">

                        <tbody>

                          <tr>

                            <td style="padding: 0;vertical-align: top">

                              <tweet style="text-decoration:none;">

                                <img style="border: 0;-ms-interpolation-mode: bicubic;display: block" src="http://www.csun.edu/ua/email/20170620_shine_weekly_alumni_v1/images/twitter.png" width="32" height="32" />

                              </tweet>

                            </td>

                            <td class="social-text" style="padding: 0;vertical-align: middle !important;height: 21px;font-size: 10px;font-weight: bold;text-decoration: none;text-transform: uppercase;color: #000;letter-spacing: 0.05em;font-family: Georgia,serif">

                              <a style="text-decoration:none;" href="http://www.twitter.com/csunorthridge" target="_blank">

                                Follow us on Twitter

                              </a>

                            </td>

                          </tr>

                        </tbody>

                      </table>

                    </td>

    <!-- END TWITTER -->

                    <td class="social-link" style="padding: 0;vertical-align: top">

                    </td>

                  </tr>

                </tbody>

              </table>









      <table class="footer centered" style="border-collapse: collapse;border-spacing: 0;margin-left: auto;margin-right: auto;width: 602px">

        <tbody>

          <tr>

            <td class="social" style="padding: 0;vertical-align: top;padding-top: 32px;padding-bottom: 22px" align="center">

              <table style="border-collapse: collapse;border-spacing: 0">

                <tbody>

                  <tr>

    <!-- SUPPORT LINKS -->

                    <td class="social-link" style="padding: 0;vertical-align: top">

                      <table style="border-collapse: collapse;border-spacing: 0">

                        <tbody>

                          <tr>

                            <td class="social-text" style="padding: 0;vertical-align: middle !important;height: 21px;font-size: 10px;font-weight: bold;text-decoration: none;text-transform: uppercase;color: #000;letter-spacing: 0.05em;font-family: Georgia,serif">

                                  <center>

                              <a style="text-decoration:none; color: #d00d2d;" href="http://www.csun.edu/alumni/" target="_blank">

                                Alumni •

                              </a>

                              <a style="text-decoration:none; color: #d00d2d;" href="http://give.csun.edu/" target="_blank">

                                Giving •

                              </a>

                              <a style="text-decoration:none; color: #d00d2d;" href="http://www.gomatadors.com/" target="_blank">

                                Athletics •

                              </a>

                              <a style="text-decoration:none; color: #d00d2d;" href="http://www.valleyperformingartscenter.org/" target="_blank">

                                Valley Performing Arts Center •

                              </a>

                              <a style="text-decoration:none; color: #d00d2d;" href="http://csunshinetoday.csun.edu/csun-shine-weekly-archives/" target="_blank">

                                About

                              </a>

                                                            </center>



                            </td>

                          </tr>

                        </tbody>

                      </table>

                    </td>

    <!-- END SUPPORT LINKS -->

                  </tr>

                </tbody>

              </table>

            </td>

          </tr>

        </tbody>

      </table>









            </td>

          </tr>

          <tr>

            <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e9e9e9;width: 1px">&nbsp;</td>

          </tr>

          <tr>

            <td style="padding: 0;vertical-align: top">

              <table style="border-collapse: collapse;border-spacing: 0">

                <tbody>

                  <tr>

                    <td class="address" style="padding: 0;vertical-align: top;width: 250px;padding-top: 32px;padding-bottom: 64px">

                      <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%">

                        <tbody>

                          <tr>

                            <td class="padded" style="padding: 0;vertical-align: top;padding-left: 0;padding-right: 10px;word-break: break-word;word-wrap: break-word;text-align: left;font-size: 12px;line-height: 20px;color: #000;font-family: Georgia,serif">

    <!-- Address -->

                              <div>

                                California State University, Northridge<br />

                                18111 Nordhoff St., Northridge, CA 91330

                              </div>

    <!-- End Address -->

                            </td>

                          </tr>

                        </tbody>

                      </table>

                    </td>

                    <td class="subscription" style="padding: 0;vertical-align: top;width: 350px;padding-top: 32px;padding-bottom: 64px">

                      <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%">

                        <tbody>

                          <tr>

                            <td class="padded" style="padding: 0;vertical-align: top;padding-left: 10px;padding-right: 0;word-break: break-word;word-wrap: break-word;font-size: 12px;line-height: 20px;color: #000;font-family: Georgia,serif;text-align: right">

    <!-- Copyright -->

                              <div>

                                Copyright 2017 California State University, Northridge

                              </div>

    <!-- End Copyright -->

                            </td>

                          </tr>

                        </tbody>

                      </table>

                    </td>

                  </tr>

                </tbody>

              </table>

            </td>

          </tr>

        </tbody>

      </table>

    </center>

  </body>

</html>
  ');
  
  return $broadcast_csun_weekly;

}
?>