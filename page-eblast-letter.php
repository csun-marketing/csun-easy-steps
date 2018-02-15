<?php
/**
 * Template Name: eBlast: Letter
 */

  // Replace paragraphs, smart quotes, and links
  function es_replace($replace, $section){
    if($section == "copy"){
      $copy_paragraphs = array(
        "<p style=\"text-align: right;\">",
        "<p style=\"text-align: center;\">",
        "<p style=\"text-align: left;\">",
        "<p>",
        "’",
        "'",
        "“",
        "”",
        ":00",
        "—"
      );
      $copy_fixes = array(
        "<p style=\"margin-top: 0;color: #000;font-family: helvetica, arial, sans-serif;font-size: 16px;line-height: 24px;margin-bottom: 24px; text-align: right;\">",
        "<p style=\"margin-top: 0;color: #000;font-family: helvetica, arial, sans-serif;font-size: 16px;line-height: 24px;margin-bottom: 24px; text-align: center;\">",
        "<p style=\"margin-top: 0;color: #000;font-family: helvetica, arial, sans-serif;font-size: 16px;line-height: 24px;margin-bottom: 24px; text-align: left;\">",
        "<p style=\"margin-top: 0;color: #000;font-family: helvetica, arial, sans-serif;font-size: 16px;line-height: 24px;margin-bottom: 24px; text-align: left;\">",
        "&rsquo;",
        "&rsquo;",
        "&ldquo;",
        "&rdquo;",
        "",
        "&mdash;"
      );
    } elseif($section == "button" || $section == "headline" || $section == "preheader") {
      $copy_paragraphs = array(
        "’",
        "'",
        "“",
        "”",
        "—"
      );
      $copy_fixes = array(
        "&rsquo;",
        "&rsquo;",
        "&ldquo;",
        "&rdquo;",
        "&mdash;"
      );
    }

    $replace = str_replace($copy_paragraphs, $copy_fixes, $replace);

    return $replace;
  }

  if(get_field('link_or_email') == 'Link'){
    $button_link = get_field('button_url');
  } else {
    $button_link = get_field('button_email');
  }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>
      <?php the_field('title'); ?>
    </title>




<!-- ============================================================================ -->
<!-- THE PARTY DOESN'T START UNTIL AROUND LINE 1237. DON'T TOUCH THE STUFF BELOW. -->
<!-- ============================================================================ -->
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta content="noindex,nofollow" name="robots" />
    <style type="text/css">
      body {
        margin:0;
        mso-line-height-rule:exactly;
        padding:0;
        min-width:100%
      }

      table {
        border-collapse:collapse;
        border-spacing:0
      }

      td {
        padding:0;
        vertical-align:top
      }

      .spacer,.border {
        font-size:1px;
        line-height:1px
      }

      .spacer {
        width:100%
      }

      img {
        border:0;
        -ms-interpolation-mode:bicubic
      }

      .image {
        font-size:12px;
        margin-bottom:24px;
        mso-line-height-rule:at-least
      }

      .image img {
        display:block
      }

      .logo {
        mso-line-height-rule:at-least
      }

      .logo img {
        display:block
      }

      strong {
        font-weight:700
      }

      h1,h2,h3,p,ol,ul,li {
        margin-top:0
      }

      ol,ul,li {
        padding-left:0
      }

      blockquote {
        margin-top:0;
        margin-right:0;
        margin-bottom:0;
        padding-right:0
      }

      .column-top {
        font-size:32px;
        line-height:32px
      }

      .column-bottom {
        font-size:8px;
        line-height:8px
      }

      .column {
        text-align:left
      }

      .contents {
        table-layout:fixed;
        width:100%
      }

      .padded {
        padding-left:32px;
        padding-right:32px;
        word-break:break-word;
        word-wrap:break-word
      }

      .wrapper {
        display:table;
        table-layout:fixed;
        width:100%;
        min-width:620px;
        -webkit-text-size-adjust:100%;
        -ms-text-size-adjust:100%
      }

      .wrapper a {
        transition:opacity .2s ease-in
      }

      table.wrapper {
        table-layout:fixed
      }

      .one-col,.two-col,.three-col {
        margin-left:auto;
        margin-right:auto;
        width:600px
      }

      .centered {
        margin-left:auto;
        margin-right:auto
      }

      .btn {
        margin-bottom:24px
      }

      .btn a {
        border-radius:3px;
        display:inline-block;
        font-size:14px;
        font-weight:700;
        line-height:24px;
        padding:13px 35px 12px;
        text-align:center;
        text-decoration:none !important
      }

      .btn a:hover {
        opacity:.8
      }

      .two-col .btn {
        margin-bottom:23px
      }

      .two-col .btn a {
        font-size:12px;
        line-height:22px;
        padding:10px 28px
      }

      .three-col .btn {
        margin-bottom:21px
      }

      .three-col .btn a {
        font-size:11px;
        line-height:19px;
        padding:6px 18px 5px
      }

      @media only screen and (max-width: 620px) {
        .btn {
          margin-bottom:24px !important
        }

        .btn a {
          display:block !important;
          font-size:14px !important;
          line-height:24px !important;
          padding:13px 10px 12px !important
        }
      }

      .two-col .image {
        margin-bottom:23px
      }

      .two-col .column-bottom {
        font-size:9px;
        line-height:9px
      }

      .two-col .column {
        width:300px
      }

      .three-col .image {
        margin-bottom:21px
      }

      .three-col .column-bottom {
        font-size:11px;
        line-height:11px
      }

      .three-col .column {
        width:200px
      }

      .three-col .first .padded {
        padding-left:32px;
        padding-right:16px
      }

      .three-col .second .padded {
        padding-left:24px;
        padding-right:24px
      }

      .three-col .third .padded {
        padding-left:16px;
        padding-right:32px
      }

      @media only screen and (min-width: 0) {
        .wrapper {
          text-rendering:optimizeLegibility
        }
      }

      @media only screen and (max-width: 620px) {
        [class=wrapper] {
          min-width:318px !important;
          width:100% !important
        }

        [class=wrapper] .one-col,[class=wrapper] .two-col,[class=wrapper] .three-col {
          width:318px !important
        }

        [class=wrapper] .column,[class=wrapper] .gutter {
          display:block;
          float:left;
          width:318px !important
        }

        [class=wrapper] .padded {
          padding-left:32px !important;
          padding-right:32px !important
        }

        [class=wrapper] .block {
          display:block !important
        }

        [class=wrapper] .hide {
          display:none !important
        }

        [class=wrapper] .image {
          margin-bottom:24px !important
        }

        [class=wrapper] .image img {
          height:auto !important;
          width:100% !important
        }
      }

      .wrapper h1 {
        font-weight:700
      }

      .wrapper h2 {
        font-style:italic;
        font-weight:400
      }

      .wrapper h3 {
        font-weight:400
      }

      .one-col blockquote,.two-col blockquote,.three-col blockquote {
        font-style:italic
      }

      .one-col-feature h1 {
        font-weight:400
      }

      .one-col-feature h2 {
        font-style:normal;
        font-weight:700
      }

      .one-col-feature h3 {
        font-style:italic
      }

      td.border {
        width:1px
      }

      tr.border {
        background-color:#fff;
        height:1px
      }

      tr.border td {
        line-height:1px
      }

      .one-col,.two-col,.three-col,.one-col-feature {
        background-color:#fff;
        font-size:14px;
        table-layout:fixed
      }

      .one-col,.two-col,.three-col,.one-col-feature,.preheader,.header,.footer {
        margin-left:auto;
        margin-right:auto
      }

      .preheader table {
        width:602px
      }

      .preheader .title,.preheader .webversion {
        padding-top:10px;
        padding-bottom:12px;
        font-size:12px;
        line-height:21px
      }

      .preheader .title {
        text-align:left
      }

      .preheader .webversion {
        text-align:right;
        width:300px
      }

      .header {
        width:602px
      }

      .header .logo {
        padding-top:6px;
        padding-bottom:20px
      }

      .header .logo div {
        font-size:26px;
        font-weight:700;
        letter-spacing:-.02em;
        line-height:32px
      }

      .header .logo div a {
        text-decoration:none
      }

      .header .logo div.logo-center {
        text-align:center
      }

      .header .logo div.logo-center img {
        margin-left:auto;
        margin-right:auto
      }

      .gmail {
        width:650px;
        min-width:650px
      }

      .gmail td {
        font-size:1px;
        line-height:1px
      }

      .wrapper a {
        text-decoration:underline
      }

      .wrapper h1 {
        font-size:36px;
        margin-bottom:18px
      }

      .wrapper h2 {
        font-size:26px;
        line-height:32px;
        margin-bottom:20px
      }

      .wrapper h3 {
        font-size:18px;
        line-height:22px;
        margin-bottom:16px
      }

      .wrapper h1 a,.wrapper h2 a,.wrapper h3 a {
        text-decoration:none
      }

      .one-col blockquote,.two-col blockquote,.three-col blockquote {
        font-size:14px;
        border-left:2px solid #fff;
        margin-left:0;
        padding-left:16px
      }

      table.divider {
        width:100%
      }

      .divider .inner {
        padding-bottom:24px
      }

      .divider table {
        background-color:#fff;
        font-size:2px;
        line-height:2px;
        width:60px
      }

      .padded .image {
        font-size:0
      }

      .image-frame {
        padding:8px
      }

      .image-background {
        display:inline-block;
        font-size:12px
      }

      .one-col .column table:nth-last-child(2) td h1:last-child,.one-col .column table:nth-last-child(2) td h2:last-child,.one-col .column table:nth-last-child(2) td h3:last-child,.one-col .column table:nth-last-child(2) td p:last-child,.one-col .column table:nth-last-child(2) td ol:last-child,.one-col .column table:nth-last-child(2) td ul:last-child {
        margin-bottom:24px
      }

      .one-col p,.one-col ol,.one-col ul {
        font-size:16px;
        line-height:24px
      }

      .one-col ol,.one-col ul {
        margin-left:18px
      }

      .two-col .column table:nth-last-child(2) td h1:last-child,.two-col .column table:nth-last-child(2) td h2:last-child,.two-col .column table:nth-last-child(2) td h3:last-child,.two-col .column table:nth-last-child(2) td p:last-child,.two-col .column table:nth-last-child(2) td ol:last-child,.two-col .column table:nth-last-child(2) td ul:last-child {
        margin-bottom:23px
      }

      .two-col .image-frame {
        padding:6px
      }

      .two-col h1 {
        font-size:26px;
        line-height:32px;
        margin-bottom:16px
      }

      .two-col h2 {
        font-size:20px;
        line-height:26px;
        margin-bottom:18px
      }

      .two-col h3 {
        font-size:16px;
        line-height:20px;
        margin-bottom:14px
      }

      .two-col p,.two-col ol,.two-col ul {
        font-size:14px;
        line-height:23px
      }

      .two-col ol,.two-col ul {
        margin-left:16px
      }

      .two-col li {
        padding-left:5px
      }

      .two-col .divider .inner {
        padding-bottom:23px
      }

      .two-col blockquote {
        padding-left:16px
      }

      .three-col .column table:nth-last-child(2) td h1:last-child,.three-col .column table:nth-last-child(2) td h2:last-child,.three-col .column table:nth-last-child(2) td h3:last-child,.three-col .column table:nth-last-child(2) td p:last-child,.three-col .column table:nth-last-child(2) td ol:last-child,.three-col .column table:nth-last-child(2) td ul:last-child {
        margin-bottom:21px
      }

      .three-col .image-frame {
        padding:4px
      }

      .three-col h1 {
        font-size:20px;
        line-height:26px;
        margin-bottom:12px
      }

      .three-col h2 {
        font-size:16px;
        line-height:22px;
        margin-bottom:14px
      }

      .three-col h3 {
        font-size:14px;
        line-height:18px;
        margin-bottom:10px
      }

      .three-col p,.three-col ol,.three-col ul {
        font-size:12px;
        line-height:21px
      }

      .three-col ol,.three-col ul {
        margin-left:14px
      }

      .three-col li {
        padding-left:6px
      }

      .three-col .divider .inner {
        padding-bottom:21px
      }

      .three-col blockquote {
        padding-left:16px
      }

      .one-col-feature {
        width:600px
      }

      @media only screen and (max-width: 620px) {
        .one-col-feature {
          width:318px !important
        }
      }

      .one-col-feature .column-top {
        font-size:36px;
        line-height:36px
      }

      .one-col-feature .column-bottom {
        font-size:4px;
        line-height:4px
      }

      .one-col-feature .column {
        text-align:center;
        width:600px
      }

      .one-col-feature .image {
        margin-bottom:32px
      }

      .one-col-feature .column table:nth-last-child(2) td h1:last-child,.one-col-feature .column table:nth-last-child(2) td h2:last-child,.one-col-feature .column table:nth-last-child(2) td h3:last-child,.one-col-feature .column table:nth-last-child(2) td p:last-child,.one-col-feature .column table:nth-last-child(2) td ol:last-child,.one-col-feature .column table:nth-last-child(2) td ul:last-child {
        margin-bottom:32px
      }

      .one-col-feature h1 {
        font-size:52px;
        margin-bottom:22px
      }

      .one-col-feature h2 {
        font-size:42px;
        margin-bottom:20px
      }

      .one-col-feature h3 {
        font-size:32px;
        line-height:42px;
        margin-bottom:20px
      }

      .one-col-feature p,.one-col-feature ol,.one-col-feature ul {
        font-size:21px;
        line-height:32px;
        margin-bottom:32px
      }

      .one-col-feature p a,.one-col-feature ol a,.one-col-feature ul a {
        text-decoration:none
      }

      .one-col-feature h1,.one-col-feature h2,.one-col-feature h3,.one-col-feature p {
        text-align:center
      }

      .one-col-feature ol,.one-col-feature ul {
        margin-left:40px;
        text-align:left
      }

      .one-col-feature li {
        padding-left:3px
      }

      .one-col-feature .btn {
        margin-bottom:32px;
        text-align:center
      }

      .one-col-feature .divider .inner {
        padding-bottom:32px
      }

      .one-col-feature blockquote {
        border-bottom:2px solid #fff;
        border-left-color:#fff;
        border-left-width:0;
        border-left-style:none;
        border-top:2px solid #fff;
        margin-bottom:32px;
        margin-left:0;
        padding-bottom:42px;
        padding-left:0;
        padding-top:42px
      }

      .wrapper .one-col-feature blockquote p,.wrapper .one-col-feature blockquote ol,.wrapper .one-col-feature blockquote ul {
        font-size:42px;
        line-height:48px;
        margin-bottom:48px
      }

      .one-col-feature blockquote p:last-child,.one-col-feature blockquote ol:last-child,.one-col-feature blockquote ul:last-child {
        margin-bottom:0 !important
      }

      .footer {
        width:602px
      }

      .footer .padded {
        font-size:12px;
        line-height:20px
      }

      .social {
        padding-top:32px;
        padding-bottom:22px
      }

      .social img {
        display:block
      }

      .social .divider {
        font-family:sans-serif;
        font-size:10px;
        line-height:21px;
        text-align:center;
        padding-left:14px;
        padding-right:14px
      }

      .social .social-text {
        height:21px;
        vertical-align:middle !important;
        font-size:10px;
        font-weight:700;
        text-decoration:none;
        text-transform:uppercase
      }

      .social .social-text a {
        text-decoration:none
      }

      .address {
        width:250px
      }

      .address .padded {
        text-align:left;
        padding-left:0;
        padding-right:10px
      }

      .subscription {
        width:350px
      }

      .subscription .padded {
        text-align:right;
        padding-right:0;
        padding-left:10px
      }

      .address,.subscription {
        padding-top:32px;
        padding-bottom:64px
      }

      .address a,.subscription a {
        font-weight:700;
        text-decoration:none
      }

      .address table,.subscription table {
        width:100%
      }

      @media only screen and (max-width: 651px) {
        .gmail {
          display:none !important
        }
      }

      @media only screen and (max-width: 620px) {
        [class=wrapper] .one-col .column:last-child table:nth-last-child(2) td h1:last-child,[class=wrapper] .two-col .column:last-child table:nth-last-child(2) td h1:last-child,[class=wrapper] .three-col .column:last-child table:nth-last-child(2) td h1:last-child,[class=wrapper] .one-col-feature .column:last-child table:nth-last-child(2) td h1:last-child,[class=wrapper] .one-col .column:last-child table:nth-last-child(2) td h2:last-child,[class=wrapper] .two-col .column:last-child table:nth-last-child(2) td h2:last-child,[class=wrapper] .three-col .column:last-child table:nth-last-child(2) td h2:last-child,[class=wrapper] .one-col-feature .column:last-child table:nth-last-child(2) td h2:last-child,[class=wrapper] .one-col .column:last-child table:nth-last-child(2) td h3:last-child,[class=wrapper] .two-col .column:last-child table:nth-last-child(2) td h3:last-child,[class=wrapper] .three-col .column:last-child table:nth-last-child(2) td h3:last-child,[class=wrapper] .one-col-feature .column:last-child table:nth-last-child(2) td h3:last-child,[class=wrapper] .one-col .column:last-child table:nth-last-child(2) td p:last-child,[class=wrapper] .two-col .column:last-child table:nth-last-child(2) td p:last-child,[class=wrapper] .three-col .column:last-child table:nth-last-child(2) td p:last-child,[class=wrapper] .one-col-feature .column:last-child table:nth-last-child(2) td p:last-child,[class=wrapper] .one-col .column:last-child table:nth-last-child(2) td ol:last-child,[class=wrapper] .two-col .column:last-child table:nth-last-child(2) td ol:last-child,[class=wrapper] .three-col .column:last-child table:nth-last-child(2) td ol:last-child,[class=wrapper] .one-col-feature .column:last-child table:nth-last-child(2) td ol:last-child,[class=wrapper] .one-col .column:last-child table:nth-last-child(2) td ul:last-child,[class=wrapper] .two-col .column:last-child table:nth-last-child(2) td ul:last-child,[class=wrapper] .three-col .column:last-child table:nth-last-child(2) td ul:last-child,[class=wrapper] .one-col-feature .column:last-child table:nth-last-child(2) td ul:last-child {
          margin-bottom:24px !important
        }

        [class=wrapper] .address,[class=wrapper] .subscription {
          display:block;
          float:left;
          width:318px !important;
          text-align:center !important
        }

        [class=wrapper] .address {
          padding-bottom:0 !important
        }

        [class=wrapper] .subscription {
          padding-top:0 !important
        }

        [class=wrapper] h1 {
          font-size:36px !important;
          line-height:42px !important;
          margin-bottom:18px !important
        }

        [class=wrapper] h2 {
          font-size:26px !important;
          line-height:32px !important;
          margin-bottom:20px !important
        }

        [class=wrapper] h3 {
          font-size:18px !important;
          line-height:22px !important;
          margin-bottom:16px !important
        }

        [class=wrapper] p,[class=wrapper] ol,[class=wrapper] ul {
          font-size:16px !important;
          line-height:24px !important;
          margin-bottom:24px !important
        }

        [class=wrapper] ol,[class=wrapper] ul {
          margin-left:18px !important
        }

        [class=wrapper] li {
          padding-left:2px !important
        }

        [class=wrapper] blockquote {
          padding-left:16px !important
        }

        [class=wrapper] .two-col .column:nth-child(n + 3) {
          border-top:1px solid #fff
        }

        [class=wrapper] .column-bottom {
          font-size:8px !important;
          line-height:8px !important
        }

        [class=wrapper] .first .column-bottom,[class=wrapper] .three-col .second .column-bottom {
          display:none
        }

        [class=wrapper] .second .column-top,[class=wrapper] .third .column-top {
          display:none
        }

        [class=wrapper] .image-frame {
          padding:4px !important
        }

        [class=wrapper] .header .logo {
          padding-left:10px !important;
          padding-right:10px !important
        }

        [class=wrapper] .header .logo div {
          font-size:26px !important;
          line-height:32px !important
        }

        [class=wrapper] .header .logo div img {
          display:inline-block !important;
          max-width:280px !important;
          height:auto !important
        }

        [class=wrapper] table.border,[class=wrapper] .header,[class=wrapper] .webversion,[class=wrapper] .footer {
          width:320px !important
        }

        [class=wrapper] .preheader .webversion,[class=wrapper] .header .logo a {
          text-align:center !important
        }

        [class=wrapper] .preheader table,[class=wrapper] .border td {
          width:318px !important
        }

        [class=wrapper] .border td.border {
          width:1px !important
        }

        [class=wrapper] .image .border td {
          width:auto !important
        }

        [class=wrapper] .title {
          display:none
        }

        [class=wrapper] .footer .padded {
          text-align:center !important
        }

        [class=wrapper] .footer .subscription .padded {
          padding-top:20px !important
        }

        [class=wrapper] .footer .social-link {
          display:block !important
        }

        [class=wrapper] .footer .social-link table {
          margin:0 auto 10px !important
        }

        [class=wrapper] .footer .divider {
          display:none !important
        }

        [class=wrapper] .one-col-feature .btn {
          margin-bottom:28px !important
        }

        [class=wrapper] .one-col-feature .image {
          margin-bottom:28px !important
        }

        [class=wrapper] .one-col-feature .divider .inner {
          padding-bottom:28px !important
        }

        [class=wrapper] .one-col-feature h1 {
          font-size:42px !important;
          line-height:48px !important;
          margin-bottom:20px !important
        }

        [class=wrapper] .one-col-feature h2 {
          font-size:32px !important;
          line-height:36px !important;
          margin-bottom:18px !important
        }

        [class=wrapper] .one-col-feature h3 {
          font-size:26px !important;
          line-height:32px !important;
          margin-bottom:20px !important
        }

        [class=wrapper] .one-col-feature p,[class=wrapper] .one-col-feature ol,[class=wrapper] .one-col-feature ul {
          font-size:20px !important;
          line-height:28px !important;
          margin-bottom:28px !important
        }

        [class=wrapper] .one-col-feature blockquote {
          font-size:18px !important;
          line-height:26px !important;
          margin-bottom:28px !important;
          padding-bottom:26px !important;
          padding-left:0 !important;
          padding-top:26px !important
        }

        [class=wrapper] .one-col-feature blockquote p,[class=wrapper] .one-col-feature blockquote ol,[class=wrapper] .one-col-feature blockquote ul {
          font-size:26px !important;
          line-height:32px !important
        }

        [class=wrapper] .one-col-feature blockquote p:last-child,[class=wrapper] .one-col-feature blockquote ol:last-child,[class=wrapper] .one-col-feature blockquote ul:last-child {
          margin-bottom:0 !important
        }

        [class=wrapper] .one-col-feature .column table:last-of-type h1:last-child,[class=wrapper] .one-col-feature .column table:last-of-type h2:last-child,[class=wrapper] .one-col-feature .column table:last-of-type h3:last-child {
          margin-bottom:28px !important
        }
      }

      @media only screen and (max-width: 320px) {
        [class=wrapper] td.border {
          display:none
        }

        [class=wrapper] table.border,[class=wrapper] .header,[class=wrapper] .webversion,[class=wrapper] .footer {
          width:318px !important
        }
      }
    </style>
    <!--[if gte mso 9]>
      <style>
        .column-top {
          mso-line-height-rule: exactly  !important;
        }
      </style>
    <![endif]-->
    <style type="text/css">
      body,.wrapper,.emb-editor-canvas {
        background-color:#f8f7ec
      }

      .border {
        background-color:#e7e6db
      }

      h1 {
        color:#000
      }

      .wrapper h1 {
      }

      .wrapper h1 {
        font-family:Georgia,serif
      }

      .one-col h1 {
        line-height:44px
      }

      .two-col h1 {
        line-height:32px
      }

      .three-col h1 {
        line-height:26px
      }

      .wrapper .one-col-feature h1 {
        line-height:60px
      }

      @media only screen and (max-width: 620px) {
        h1 {
          line-height:44px !important
        }
      }

      h2 {
        color:#000
      }

      .wrapper h2 {
      }

      .wrapper h2 {
        font-family:Georgia,serif
      }

      h2 {
      }

      .one-col h2 {
        line-height:32px
      }

      .two-col h2 {
        line-height:26px
      }

      .three-col h2 {
        line-height:22px
      }

      .wrapper .one-col-feature h2 {
        line-height:52px
      }

      @media only screen and (max-width: 620px) {
        h2 {
          line-height:32px !important
        }
      }

      h3 {
        color:#000
      }

      .wrapper h3 {
      }

      .wrapper h3 {
        font-family:Georgia,serif
      }

      h3 {
      }

      .one-col h3 {
        line-height:26px
      }

      .two-col h3 {
        line-height:22px
      }

      .three-col h3 {
        line-height:20px
      }

      .wrapper .one-col-feature h3 {
        line-height:42px
      }

      @media only screen and (max-width: 620px) {
        h3 {
          line-height:26px !important
        }
      }

      p,ol,ul {
        color:#000
      }

      .wrapper p,.wrapper ol,.wrapper ul {
      }

      .wrapper p,.wrapper ol,.wrapper ul {
        font-family:sans-serif
      }

      p,ol,ul {
      }

      .one-col p,.one-col ol,.one-col ul {
        line-height:24px;
        margin-bottom:24px
      }

      .two-col p,.two-col ol,.two-col ul {
        line-height:22px;
        margin-bottom:22px
      }

      .three-col p,.three-col ol,.three-col ul {
        line-height:20px;
        margin-bottom:20px
      }

      .wrapper .one-col-feature p,.wrapper .one-col-feature ol,.wrapper .one-col-feature ul {
        line-height:29px
      }

      .one-col-feature blockquote p,.one-col-feature blockquote ol,.one-col-feature blockquote ul {
        line-height:48px
      }

      @media only screen and (max-width: 620px) {
        p,ol,ul {
          line-height:24px !important;
          margin-bottom:24px !important
        }
      }

      .image {
        color:#000
      }

      .image {
        font-family:sans-serif
      }

      .wrapper a {
        color:#d00d2d
      }

      .wrapper a:hover {
        color:#a00a23 !important
      }

      .wrapper .logo div {
        color:#41637e
      }

      .wrapper .logo div {
        font-family:sans-serif
      }

      @media only screen and (min-width: 0) {
        .wrapper .logo div {
          font-family:Avenir,sans-serif !important
        }
      }

      .wrapper .logo div a {
        color:#41637e
      }

      .wrapper .logo div a:hover {
        color:#41637e !important
      }

      .wrapper .one-col-feature p a,.wrapper .one-col-feature ol a,.wrapper .one-col-feature ul a {
        border-bottom:1px solid #d00d2d
      }

      .wrapper .one-col-feature p a:hover,.wrapper .one-col-feature ol a:hover,.wrapper .one-col-feature ul a:hover {
        color:#a00a23 !important;
        border-bottom:1px solid #a00a23 !important
      }

      .btn a {
      }

      .wrapper .btn a {
      }

      .wrapper .btn a {
        font-family:sans-serif
      }

      .wrapper .btn a {
        background-color:#d00d2d;
        color:#fff
      }

      .wrapper .btn a:hover {
        color:#fff !important
      }

      .preheader .title,.preheader .webversion,.footer .padded {
        color:#000
      }

      .preheader .title,.preheader .webversion,.footer .padded {
        font-family:sans-serif
      }

      .preheader .title a,.preheader .webversion a,.footer .padded a {
        color:#000
      }

      .preheader .title a:hover,.preheader .webversion a:hover,.footer .padded a:hover {
        color:#000 !important
      }

      .footer .social .divider {
        color:#e7e6db
      }

      .footer .social .social-text,.footer .social a {
        color:#000
      }

      .wrapper .footer .social .social-text,.wrapper .footer .social a {
      }

      .wrapper .footer .social .social-text,.wrapper .footer .social a {
        font-family:sans-serif
      }

      .footer .social .social-text,.footer .social a {
      }

      .footer .social .social-text,.footer .social a {
        letter-spacing:.05em
      }

      .footer .social .social-text:hover,.footer .social a:hover {
        color:#000 !important
      }

      .image .border {
        background-color:#ddd8a1
      }

      .image-frame {
        background-color:#D8D2C4
      }

      .image-background {
        background-color:#f6f5e6
      }
    </style>
  </head>
  <body style="margin: 0;mso-line-height-rule: exactly;padding: 0;min-width: 100%;background-color: #f8f7ec">
    <center class="wrapper" style="display: table;table-layout: fixed;width: 100%;min-width: 620px;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;background-color: #f8f7ec">
<!-- ================================================================ -->
<!-- SERIOUSLY, JUST DON'T TOUCH ANYTHING ABOVE THIS LINE. SERIOUSLY. -->
<!-- ================================================================ -->




<!-- ============ -->
<!-- HEADER BLOCK -->
<!-- ============ -->
      <table class="gmail" style="border-collapse: collapse;border-spacing: 0;width: 650px;min-width: 650px">
        <tbody>
          <tr>
            <td style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px">
              &nbsp;
            </td>
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
                    <td class="title" style="padding: 0;vertical-align: top;padding-top: 10px;padding-bottom: 12px;font-size: 12px;line-height: 21px;text-align: left;color: #000;font-family: helvetica, arial, sans-serif">
<!-- PREHEADER -->
<!-- https://www.campaignmonitor.com/blog/post/3628/a-practical-guide-to-email-preheaders/ -->
                      <?php the_field('preheader'); ?>
<!-- END PREHEADER -->
                    </td>
                    <td class="webversion" style="padding: 0;vertical-align: top;padding-top: 10px;padding-bottom: 12px;font-size: 12px;line-height: 21px;text-align: right;width: 300px;color: #000;font-family: helvetica, arial, sans-serif">
<!-- VIEW ONLINE -->
                      <a href="<?php the_permalink(); ?>" target="_blank" style="color: #D00D2D;">Read This Email Online</a>
<!-- END VIEW ONLINE -->
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table>
<!-- ================ -->
<!-- END HEADER BLOCK -->
<!-- ================ -->




<!-- ========== -->
<!-- LOGO BLOCK -->
<!-- ========== -->
      <table class="header centered" style="border-collapse: collapse;border-spacing: 0;margin-left: auto;margin-right: auto;width: 602px">
        <tbody>
          <tr>
            <td class="logo" style="padding: 0;vertical-align: top;mso-line-height-rule: at-least;padding-top: 32px;padding-bottom: 42px">
              <div class="logo-center" id="emb-email-header" style="color: #41637e; font-family: helvetica, arial, sans-serif; font-size: 26px; font-weight: 700; letter-spacing: -0.02em; line-height: 32px; text-align: center">
                <img alt="California State University, Northridge" src="<?php the_field('logo_url'); ?>" style="border: 0;-ms-interpolation-mode: bicubic;display: block;margin-left: auto;margin-right: auto;">
              </div>
            </td>
          </tr>
        </tbody>
      </table>
      <table class="border" style="border-collapse: collapse;border-spacing: 0;font-size: 1px;line-height: 1px;background-color: #e7e6db;margin-left: auto;margin-right: auto" width="602">
        <tbody>
          <tr>
            <td style="padding: 0;vertical-align: top">
              &#8203;
            </td>
          </tr>
        </tbody>
      </table>
<!-- ============== -->
<!-- END LOGO BLOCK -->
<!-- ============== -->




<!-- ================== -->
<!-- HEADER IMAGE BLOCK -->
<!-- ================== -->
      <table class="centered" style="border-collapse: collapse;border-spacing: 0;margin-left: auto;margin-right: auto">
        <tbody>
          <tr>
            <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e7e6db;width: 1px">
              &#8203;
            </td>
            <td style="padding: 0;vertical-align: top">
              <table class="one-col" style="border-collapse: collapse;border-spacing: 0;margin-left: auto;margin-right: auto;width: 600px;background-color: #ffffff;font-size: 14px;table-layout: fixed">
                <tbody>
                  <tr>
                    <td class="column" style="padding: 0;vertical-align: top;text-align: left">
                      <div class="image" style="margin-bottom: 24px; color: #000; font-family: helvetica, arial, sans-serif; font-size: 12px; mso-line-height-rule: at-least; text-align: center">
                        <img alt="<?php the_field('image_alt_text'); ?>" src="<?php the_field('banner_image'); ?>" style="border: 0;-ms-interpolation-mode: bicubic;display: block;max-width: 600px" width="600" />
                      </div>
                      <div class="column-bottom" style="font-size: 8px;line-height: 8px">
                        &nbsp;
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
            <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e7e6db;width: 1px">
              &#8203;
            </td>
          </tr>
        </tbody>
      </table>
      <table class="border" style="border-collapse: collapse;border-spacing: 0;font-size: 1px;line-height: 1px;background-color: #e7e6db;margin-left: auto;margin-right: auto" width="602">
        <tbody>
          <tr class="border" style="font-size: 1px;line-height: 1px;background-color: #ffffff;height: 1px">
            <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e7e6db;width: 1px">
              &#8203;
            </td>
            <td style="padding: 0;vertical-align: top;line-height: 1px">
              &#8203;
            </td>
            <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e7e6db;width: 1px">
              &#8203;
            </td>
          </tr>
        </tbody>
      </table>
<!-- ====================== -->
<!-- END HEADER IMAGE BLOCK -->
<!-- ====================== -->




<!-- ============= -->
<!-- CONTENT BLOCK -->
<!-- ============= -->
      <table class="centered" style="border-collapse: collapse;border-spacing: 0;margin-left: auto;margin-right: auto">
        <tbody>
          <tr>
            <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e7e6db;width: 1px">
              &#8203;
            </td>
            <td style="padding: 0;vertical-align: top">
              <table class="one-col" style="border-collapse: collapse;border-spacing: 0;margin-left: auto;margin-right: auto;width: 600px;background-color: #ffffff;font-size: 14px;table-layout: fixed">
                <tbody>
                  <tr>
                    <td class="column" style="padding: 0;vertical-align: top;text-align: left">
                      <div>
                        <div class="column-top" style="font-size: 32px;line-height: 32px">
                          &nbsp;
                        </div>
                      </div>
                      <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%">
                        <tbody>
                          <tr>
                            <td class="padded" style="padding: 0;vertical-align: top;padding-left: 32px;padding-right: 32px;word-break: break-word;word-wrap: break-word">
                              <!-- CONTENT -->
                              <?php if(get_field('title')): ?>
                                <h1 style="Margin-top: 0;color: #000;font-family: Georgia,serif;font-size: 22px;line-height: 25px;Margin-bottom: 24px">
                                  <?php echo es_replace(get_field('title'), 'headline'); ?>
                                </h1>
                              <?php endif; ?>
                              <?php
                                echo es_replace(get_field('invite_body'), 'copy');
                              ?>
                              <?php
                                if(get_field('has_button') == 'Yes'): ?>
                              <!-- BUTTON -->
                                <div class="btn" style="margin-bottom: 24px;text-align: center">
                                  <![if !mso]><a href="<?php echo $button_link; ?>" target="blank" style="border-radius: 3px;display: inline-block;font-size: 14px;font-weight: 700;line-height: 24px;padding: 13px 35px 12px 35px;text-align: center;text-decoration: none  !important;transition: opacity 0.2s ease-in;color: #fff;font-family: sans-serif;background-color: #d00d2d"><?php echo es_replace(get_field('button_title'), 'button'); ?></a><![endif]> <!--[if mso]><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" href="<?php echo $button_link; ?>" target="blank" style="width:168px" arcsize="7%" fillcolor="#D00D2D" stroke="f"><v:textbox style="mso-fit-shape-to-text:t" inset="0px,12px,0px,11px"><center style="font-size:14px;line-height:24px;color:#FFFFFF;font-family:sans-serif;font-weight:700;mso-line-height-rule:exactly;mso-text-raise:4px"><?php echo es_replace(get_field('button_title'), 'button'); ?></center></v:textbox></v:roundrect><![endif]-->
                                </div>
                              <!-- END BUTTON -->
           

                                <?php
                                  if(get_field('invite_body_bottom')){
                                    echo es_replace(get_field('invite_body_bottom'), 'copy');
                                  }
                                ?>
                              <?php endif; ?>
                              <!-- END CONTENT -->
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <div class="column-bottom" style="font-size: 8px;line-height: 8px">
                        &nbsp;
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
            <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e7e6db;width: 1px">
              &#8203;
            </td>
          </tr>
        </tbody>
      </table>
      <table class="border" style="border-collapse: collapse;border-spacing: 0;font-size: 1px;line-height: 1px;background-color: #e7e6db;margin-left: auto;margin-right: auto" width="602">
        <tbody>
          <tr class="border" style="font-size: 1px;line-height: 1px;background-color: #ffffff;height: 1px">
            <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e7e6db;width: 1px">
              &#8203;
            </td>
            <td style="padding: 0;vertical-align: top;line-height: 1px">
              &#8203;
            </td>
            <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e7e6db;width: 1px">
              &#8203;
            </td>
          </tr>
        </tbody>
      </table>
      <table class="border" style="border-collapse: collapse;border-spacing: 0;font-size: 1px;line-height: 1px;background-color: #e7e6db;margin-left: auto;margin-right: auto" width="602">
        <tbody>
          <tr class="border" style="font-size: 1px;line-height: 1px;background-color: #e7e6db;height: 1px">
            <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e7e6db;width: 1px">
              &#8203;
            </td>
            <td style="padding: 0;vertical-align: top;line-height: 1px">
              &#8203;
            </td>
            <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: #e7e6db;width: 1px">
              &#8203;
            </td>
          </tr>
        </tbody>
      </table>
<!-- ================= -->
<!-- END CONTENT BLOCK -->
<!-- ================= -->




<!-- ============== -->
<!-- FOOTER CONTENT -->
<!-- ============== -->
      <div class="spacer" style="font-size: 1px;line-height: 32px;width: 100%">
        &nbsp;
      </div>
      <table class="footer centered" style="border-collapse: collapse;border-spacing: 0;margin-left: auto;margin-right: auto;width: 602px">
        <tbody>
          <tr>
            <td align="center" class="social" style="padding: 0;vertical-align: top;padding-top: 32px;padding-bottom: 22px">
              <table style="border-collapse: collapse;border-spacing: 0">
                <tbody>
                  <tr>
  <!-- DUB DUB DUB BLOCK -->
                    <td class="social-link" style="padding: 0;vertical-align: top">
                      <table style="border-collapse: collapse;border-spacing: 0">
                        <tbody>
                          <tr>
                            <td style="padding: 0;vertical-align: top">
                              <a href="http://www.csun.edu/" target="_blank"><img height="26" src="http://www.csun.edu/ua/email/20150831_email-assets_v1/social-images/dub-dub-dub.png" alt="Website icon" style="border: 0;-ms-interpolation-mode: bicubic;display: block" width="26" /></a>
                            </td>
                            <td class="social-text" style="padding: 0;vertical-align: middle  !important;height: 21px;font-size: 10px;font-weight: bold;text-decoration: none;text-transform: uppercase;color: #000;letter-spacing: 0.05em;font-family: helvetica, arial, sans-serif">
                              <a href="http://www.csun.edu/" style="color: #D00D2D" target="_blank">&nbsp;&nbsp;CSUN.EDU</a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
  <!-- END DUB DUB DUB BLOCK -->
   <?php if(get_field('facebook_url')): ?>
    <!-- DIVIDER -->
                      <td class="divider" style="padding: 0;vertical-align: top;font-family: helvetica, arial, sans-serif;font-size: 10px;line-height: 21px;text-align: center;padding-left: 14px;padding-right: 14px;color: #e7e6db">
                        <img alt="" height="21" src="http://www.csun.edu/ua/email/20150831_email-assets_v1/social-images/diamond.png" style="border: 0;-ms-interpolation-mode: bicubic;display: block" width="5" />
                      </td>
    <!-- END DIVIDER -->
    <!-- FACEBOOK BLOCK -->
                      <td class="social-link" style="padding: 0;vertical-align: top">
                        <table style="border-collapse: collapse;border-spacing: 0">
                          <tbody>
                            <tr>
                              <td style="padding: 0;vertical-align: top">
                                <a href="<?php the_field('facebook_url'); ?>" target="_blank"><img height="26" src="http://www.csun.edu/ua/email/20150831_email-assets_v1/social-images/facebook.png" alt="Facebook icon" style="border: 0;-ms-interpolation-mode: bicubic;display: block" width="26" /></a>
                              </td>
                              <td class="social-text" style="padding: 0;vertical-align: middle  !important;height: 21px;font-size: 10px;font-weight: bold;text-decoration: none;text-transform: uppercase;color: #000;letter-spacing: 0.05em;font-family: helvetica, arial, sans-serif">
                                <a href="<?php the_field('facebook_url'); ?>" style="color: #D00D2D" target="_blank">Facebook </a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
    <!-- END FACEBOOK BLOCK -->
    <?php endif; ?>
    <?php if(get_field('twitter_url')): ?>
    <!-- DIVIDER -->
                      <td class="divider" style="padding: 0;vertical-align: top;font-family: helvetica, arial, sans-serif;font-size: 10px;line-height: 21px;text-align: center;padding-left: 14px;padding-right: 14px;color: #e7e6db">
                        <img alt="" height="21" src="http://www.csun.edu/ua/email/20150831_email-assets_v1/social-images/diamond.png" style="border: 0;-ms-interpolation-mode: bicubic;display: block" width="5" />
                      </td>
    <!-- END DIVIDER -->
    <!-- TWITTER BLOCK -->
                      <td class="social-link" style="padding: 0;vertical-align: top">
                        <table style="border-collapse: collapse;border-spacing: 0">
                          <tbody>
                            <tr>
                              <td style="padding: 0;vertical-align: top">
                                <a href="<?php the_field('twitter_url'); ?>" target="_blank"><img height="26" src="http://www.csun.edu/ua/email/20150831_email-assets_v1/social-images/twitter.png" alt="Twitter icon" style="border: 0;-ms-interpolation-mode: bicubic;display: block" width="26" /></a>
                              </td>
                              <td class="social-text" style="padding: 0;vertical-align: middle  !important;height: 21px;font-size: 10px;font-weight: bold;text-decoration: none;text-transform: uppercase;color: #000;letter-spacing: 0.05em;font-family: helvetica, arial, sans-serif">
                                <a href="<?php the_field('twitter_url'); ?>" style="color: #D00D2D" target="_blank">&nbsp;&nbsp;Twitter</a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
    <!-- END TWITTER BLOCK -->
    <?php endif; ?>
    <?php if(get_field('instagram_url')): ?>
    <!-- DIVIDER -->
                      <td class="divider" style="padding: 0;vertical-align: top;font-family: helvetica, arial, sans-serif;font-size: 10px;line-height: 21px;text-align: center;padding-left: 14px;padding-right: 14px;color: #e7e6db">
                        <img alt="" height="21" src="http://www.csun.edu/ua/email/20150831_email-assets_v1/social-images/diamond.png" style="border: 0;-ms-interpolation-mode: bicubic;display: block" width="5" />
                      </td>
    <!-- END DIVIDER -->
    <!-- INSTAGRAM BLOCK -->
                      <td class="social-link" style="padding: 0;vertical-align: top">
                        <table style="border-collapse: collapse;border-spacing: 0">
                          <tbody>
                            <tr>
                              <td style="padding: 0;vertical-align: top">
                                <a href="<?php the_field('instagram_url'); ?>" target="_blank"><img height="26" src="http://www.csun.edu/ua/email/20150831_email-assets_v1/social-images/instagram.png" alt="Instagram" style="border: 0;-ms-interpolation-mode: bicubic;display: block" width="26" /></a>
                              </td>
                              <td class="social-text" style="padding: 0;vertical-align: middle  !important;height: 21px;font-size: 10px;font-weight: bold;text-decoration: none;text-transform: uppercase;color: #000;letter-spacing: 0.05em;font-family: helvetica, arial, sans-serif">
                                <a href="<?php the_field('instagram_url'); ?>" style="color: #D00D2D" target="_blank">&nbsp;&nbsp;Instagram</a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
    <!-- END INSTAGRAM BLOCK -->
                    <?php endif; ?>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
          <tr>
            <td class="border" style="padding: 0;vertical-align: top;font-size: 1px;line-height: 1px;background-color: transparent;width: 1px">
              &nbsp;
            </td>
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
                            <td class="padded" style="padding: 0;vertical-align: top;padding-left: 0;padding-right: 10px;word-break: break-word;word-wrap: break-word;text-align: left;font-size: 12px;line-height: 20px;color: #000;font-family: helvetica, arial, sans-serif">
                              <div>
                                California State University, Northridge<br/>
                                18111 Nordhoff St., Northridge, CA 91330
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                    <td class="subscription" style="padding: 0;vertical-align: top;width: 350px;padding-top: 32px;padding-bottom: 64px">
                      <table class="contents" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%">
                        <tbody>
                          <tr>
                            <td class="padded" style="padding: 0;vertical-align: top;padding-left: 10px;padding-right: 0;word-break: break-word;word-wrap: break-word;font-size: 12px;line-height: 20px;color: #000;font-family: helvetica, arial, sans-serif;text-align: right">
                              <div>
                                Copyright <?php echo date('Y'); ?> California State University, Northridge
                              </div>
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
<!-- ================== -->
<!-- END FOOTER CONTENT -->
<!-- ================== -->




    </center>
  </body>
</html>
