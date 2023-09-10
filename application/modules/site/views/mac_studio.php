<!DOCTYPE html>
<html lang="en-US">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="version:build" content="0.0.18">
    <style>
      .channel-html {
        font-weight: normal;
        -webkit-text-size-adjust: 100%;
        text-size-adjust: 100%;
      }

      .channel-html,
      .channel-html:before,
      .channel-html:after,
      .channel-html *,
      .channel-html *:before,
      .channel-html *:after {
        box-sizing: content-box;
        margin: 0;
        padding: 0;
        float: initial;
        pointer-events: auto;
        letter-spacing: normal;
      }

      .channel-html *,
      .channel-html *:before,
      .channel-html *:after {
        float: inherit;
        font-size: 1em;
        font-family: inherit;
        font-weight: inherit;
        line-height: inherit;
        letter-spacing: inherit;
        text-align: inherit;
      }

      .channel-html div,
      .channel-html figure,
      .channel-html header,
      .channel-html nav,
      .channel-html section {
        display: block;
      }

      .channel-html img {
        border: 0;
        vertical-align: middle;
      }

      .channel-html ul {
        list-style: none;
      }

      .channel-html,
      .channel-html button {
        font-synthesis: none;
        -moz-font-feature-settings: "kern";
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        direction: ltr;
        text-align: left;
      }

      .channel-html,
      .channel-html button {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      }

      .channel-html sup {
        font-size: 0.6em;
        vertical-align: top;
        position: relative;
        bottom: -0.2em;
      }

      h1 .channel-html sup,
      h2 .channel-html sup,
      h3 .channel-html sup {
        font-size: 0.4em;
      }

      .channel-html sup a {
        vertical-align: inherit;
        color: inherit;
      }

      .channel-html sup a:hover {
        color: #0066cc;
        text-decoration: none;
      }

      .channel-html html {
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
      }

      .channel-html body {
        margin: 0;
        padding: 0;
      }

      .channel-html ul,
      .channel-html li,
      .channel-html dd,
      .channel-html h1,
      .channel-html h2,
      .channel-html h3,
      .channel-html h4,
      .channel-html h5,
      .channel-html h6,
      .channel-html p,
      .channel-html figure,
      .channel-html button {
        margin: 0;
        padding: 0;
      }

      .channel-html caption {
        font-size: 1em;
        font-weight: normal;
        font-style: normal;
      }

      .channel-html caption {
        text-align: left;
      }

      .channel-html table {
        border-collapse: collapse;
        border-spacing: 0;
      }

      .channel-html button {
        background: none;
        border: 0;
        box-sizing: content-box;
        color: inherit;
        cursor: pointer;
        font: inherit;
        line-height: inherit;
        overflow: visible;
        vertical-align: inherit;
      }

      .channel-html button:disabled {
        cursor: default;
      }

      .channel-html :focus {
        outline: 4px solid rgba(0, 125, 250, 0.6);
        outline-offset: 1px;
      }

      .channel-html :focus[data-focus-method=mouse]:not(input):not(textarea):not(select),
      .channel-html :focus[data-focus-method=touch]:not(input):not(textarea):not(select) {
        outline: none;
      }

      .channel-html ::-moz-focus-inner {
        border: 0;
        padding: 0;
      }

      .channel-html html {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
        font-size: 106.25%;
        quotes: "“""”";
      }

      .channel-html body {
        font-size: 17px;
        line-height: 1.4705882353;
        font-weight: 400;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
        background-color: white;
        color: #1d1d1f;
        font-style: normal;
      }

      .channel-html body,
      .channel-html button {
        font-synthesis: none;
        -moz-font-feature-settings: "kern";
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        direction: ltr;
        text-align: left;
      }

      .channel-html h1,
      .channel-html h2,
      .channel-html h3,
      .channel-html h4,
      .channel-html h5,
      .channel-html h6 {
        font-weight: 600;
        color: #1d1d1f;
      }

      .channel-html h1 img,
      .channel-html h2 img,
      .channel-html h3 img,
      .channel-html h4 img,
      .channel-html h5 img,
      .channel-html h6 img {
        display: block;
        margin: 0;
      }

      .channel-html h1+*,
      .channel-html h2+*,
      .channel-html h3+*,
      .channel-html h4+*,
      .channel-html h5+*,
      .channel-html h6+* {
        margin-top: 0.8em;
      }

      .channel-html h1+h1,
      .channel-html h1+h2,
      .channel-html h1+h3,
      .channel-html h1+h4,
      .channel-html h1+h5,
      .channel-html h1+h6,
      .channel-html h2+h1,
      .channel-html h2+h2,
      .channel-html h2+h3,
      .channel-html h2+h4,
      .channel-html h2+h5,
      .channel-html h2+h6,
      .channel-html h3+h1,
      .channel-html h3+h2,
      .channel-html h3+h3,
      .channel-html h3+h4,
      .channel-html h3+h5,
      .channel-html h3+h6,
      .channel-html h4+h1,
      .channel-html h4+h2,
      .channel-html h4+h3,
      .channel-html h4+h4,
      .channel-html h4+h5,
      .channel-html h4+h6,
      .channel-html h5+h1,
      .channel-html h5+h2,
      .channel-html h5+h3,
      .channel-html h5+h4,
      .channel-html h5+h5,
      .channel-html h5+h6,
      .channel-html h6+h1,
      .channel-html h6+h2,
      .channel-html h6+h3,
      .channel-html h6+h4,
      .channel-html h6+h5,
      .channel-html h6+h6 {
        margin-top: 0.4em;
      }

      p+.channel-html h1,
      ul+.channel-html h1,
      p+.channel-html h2,
      ul+.channel-html h2,
      p+.channel-html h3,
      ul+.channel-html h3,
      p+.channel-html h4,
      ul+.channel-html h4,
      p+.channel-html h5,
      ul+.channel-html h5,
      p+.channel-html h6,
      ul+.channel-html h6 {
        margin-top: 1.6em;
      }

      .channel-html p+*,
      .channel-html ul+* {
        margin-top: 0.8em;
      }

      .channel-html ul {
        margin-left: 1.1764705882em;
      }

      .channel-html ul ul {
        margin-top: 0;
        margin-bottom: 0;
      }

      nav .channel-html ul {
        margin: 0;
        list-style: none;
      }

      .channel-html li li {
        font-size: 1em;
      }

      .channel-html a,
      .channel-html .link {
        color: #0066cc;
        letter-spacing: inherit;
      }

      .channel-html a:link,
      .channel-html a:visited,
      .channel-html .link:link,
      .channel-html .link:visited {
        text-decoration: none;
      }

      .channel-html a:hover,
      .channel-html .link:hover {
        text-decoration: underline;
      }

      .channel-html a:active,
      .channel-html .link:active {
        text-decoration: none;
      }

      .channel-html a:disabled,
      .channel-html .link:disabled {
        opacity: 0.32;
      }

      .channel-html b {
        font-weight: 600;
      }

      .channel-html em,
      .channel-html i {
        font-style: italic;
      }

      .channel-html sup {
        position: relative;
        font-size: 0.6em;
        vertical-align: baseline;
      }

      .channel-html sup {
        top: -0.5em;
      }

      .channel-html .footnote a {
        vertical-align: inherit;
        color: inherit;
      }

      .channel-html .footnote a:hover {
        color: #0066cc;
        text-decoration: none;
      }

      .channel-html .footnote-reduced {
        font-size: 0.45em;
      }

      sup.channel-html .footnote-reduced {
        top: -0.86em;
      }

      .channel-html .footnote-diamond {
        position: relative;
        vertical-align: baseline;
        font-size: 0.6em;
        top: -0.5em;
      }

      .channel-html .footnote-diamond.footnote-reduced {
        font-size: 0.45em;
        top: -0.86em;
      }

      .channel-html .align-items-end {
        align-items: flex-end;
      }

      .channel-html .large-align-items-end {
        align-items: flex-end;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .medium-align-items-end {
          align-items: flex-end;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .small-align-items-end {
          align-items: flex-end;
        }
      }

      .channel-html .visuallyhidden {
        position: absolute;
        clip: rect(1px, 1px, 1px, 1px);
        -webkit-clip-path: inset(0px 0px 99.9% 99.9%);
        clip-path: inset(0px 0px 99.9% 99.9%);
        overflow: hidden;
        height: 1px;
        width: 1px;
        padding: 0;
        border: 0;
      }

      .channel-html .row {
        display: flex;
        flex-wrap: wrap;
        flex-direction: row;
        width: 100%;
      }

      .channel-html .column {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        min-width: 0px;
      }

      .channel-html .large-1 {
        flex-basis: 8.3333333333%;
        max-width: 8.3333333333%;
      }

      .channel-html .large-2 {
        flex-basis: 16.6666666667%;
        max-width: 16.6666666667%;
      }

      .channel-html .large-3 {
        flex-basis: 25%;
        max-width: 25%;
      }

      .channel-html .large-4 {
        flex-basis: 33.3333333333%;
        max-width: 33.3333333333%;
      }

      .channel-html .large-5 {
        flex-basis: 41.6666666667%;
        max-width: 41.6666666667%;
      }

      .channel-html .large-6 {
        flex-basis: 50%;
        max-width: 50%;
      }

      .channel-html .large-7 {
        flex-basis: 58.3333333333%;
        max-width: 58.3333333333%;
      }

      .channel-html .large-8 {
        flex-basis: 66.6666666667%;
        max-width: 66.6666666667%;
      }

      .channel-html .large-9 {
        flex-basis: 75%;
        max-width: 75%;
      }

      .channel-html .large-10 {
        flex-basis: 83.3333333333%;
        max-width: 83.3333333333%;
      }

      .channel-html .large-11 {
        flex-basis: 91.6666666667%;
        max-width: 91.6666666667%;
      }

      .channel-html .large-12 {
        flex-basis: 100%;
        max-width: 100%;
      }

      .channel-html .large-grow {
        flex: auto;
        max-width: initial;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .medium-1 {
          flex-basis: 8.3333333333%;
          max-width: 8.3333333333%;
        }

        .channel-html .medium-2 {
          flex-basis: 16.6666666667%;
          max-width: 16.6666666667%;
        }

        .channel-html .medium-3 {
          flex-basis: 25%;
          max-width: 25%;
        }

        .channel-html .medium-4 {
          flex-basis: 33.3333333333%;
          max-width: 33.3333333333%;
        }

        .channel-html .medium-5 {
          flex-basis: 41.6666666667%;
          max-width: 41.6666666667%;
        }

        .channel-html .medium-6 {
          flex-basis: 50%;
          max-width: 50%;
        }

        .channel-html .medium-7 {
          flex-basis: 58.3333333333%;
          max-width: 58.3333333333%;
        }

        .channel-html .medium-8 {
          flex-basis: 66.6666666667%;
          max-width: 66.6666666667%;
        }

        .channel-html .medium-9 {
          flex-basis: 75%;
          max-width: 75%;
        }

        .channel-html .medium-10 {
          flex-basis: 83.3333333333%;
          max-width: 83.3333333333%;
        }

        .channel-html .medium-11 {
          flex-basis: 91.6666666667%;
          max-width: 91.6666666667%;
        }

        .channel-html .medium-12 {
          flex-basis: 100%;
          max-width: 100%;
        }

        .channel-html .medium-grow {
          flex: auto;
          max-width: initial;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .small-1 {
          flex-basis: 8.3333333333%;
          max-width: 8.3333333333%;
        }

        .channel-html .small-2 {
          flex-basis: 16.6666666667%;
          max-width: 16.6666666667%;
        }

        .channel-html .small-3 {
          flex-basis: 25%;
          max-width: 25%;
        }

        .channel-html .small-4 {
          flex-basis: 33.3333333333%;
          max-width: 33.3333333333%;
        }

        .channel-html .small-5 {
          flex-basis: 41.6666666667%;
          max-width: 41.6666666667%;
        }

        .channel-html .small-6 {
          flex-basis: 50%;
          max-width: 50%;
        }

        .channel-html .small-7 {
          flex-basis: 58.3333333333%;
          max-width: 58.3333333333%;
        }

        .channel-html .small-8 {
          flex-basis: 66.6666666667%;
          max-width: 66.6666666667%;
        }

        .channel-html .small-9 {
          flex-basis: 75%;
          max-width: 75%;
        }

        .channel-html .small-10 {
          flex-basis: 83.3333333333%;
          max-width: 83.3333333333%;
        }

        .channel-html .small-11 {
          flex-basis: 91.6666666667%;
          max-width: 91.6666666667%;
        }

        .channel-html .small-12 {
          flex-basis: 100%;
          max-width: 100%;
        }

        .channel-html .small-grow {
          flex: auto;
          max-width: initial;
        }
      }

      .channel-html .large-span-0 {
        grid-column: span 0;
      }

      .channel-html .large-span-1 {
        grid-column: span 1;
      }

      .channel-html .large-span-2 {
        grid-column: span 2;
      }

      .channel-html .large-span-3 {
        grid-column: span 3;
      }

      .channel-html .large-span-4 {
        grid-column: span 4;
      }

      .channel-html .large-span-5 {
        grid-column: span 5;
      }

      .channel-html .large-span-6 {
        grid-column: span 6;
      }

      .channel-html .large-span-7 {
        grid-column: span 7;
      }

      .channel-html .large-span-8 {
        grid-column: span 8;
      }

      .channel-html .large-span-9 {
        grid-column: span 9;
      }

      .channel-html .large-span-10 {
        grid-column: span 10;
      }

      .channel-html .large-span-11 {
        grid-column: span 11;
      }

      .channel-html .large-span-12 {
        grid-column: span 12;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .medium-span-0 {
          grid-column: span 0;
        }

        .channel-html .medium-span-1 {
          grid-column: span 1;
        }

        .channel-html .medium-span-2 {
          grid-column: span 2;
        }

        .channel-html .medium-span-3 {
          grid-column: span 3;
        }

        .channel-html .medium-span-4 {
          grid-column: span 4;
        }

        .channel-html .medium-span-5 {
          grid-column: span 5;
        }

        .channel-html .medium-span-6 {
          grid-column: span 6;
        }

        .channel-html .medium-span-7 {
          grid-column: span 7;
        }

        .channel-html .medium-span-8 {
          grid-column: span 8;
        }

        .channel-html .medium-span-9 {
          grid-column: span 9;
        }

        .channel-html .medium-span-10 {
          grid-column: span 10;
        }

        .channel-html .medium-span-11 {
          grid-column: span 11;
        }

        .channel-html .medium-span-12 {
          grid-column: span 12;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .small-span-0 {
          grid-column: span 0;
        }

        .channel-html .small-span-1 {
          grid-column: span 1;
        }

        .channel-html .small-span-2 {
          grid-column: span 2;
        }

        .channel-html .small-span-3 {
          grid-column: span 3;
        }

        .channel-html .small-span-4 {
          grid-column: span 4;
        }

        .channel-html .small-span-5 {
          grid-column: span 5;
        }

        .channel-html .small-span-6 {
          grid-column: span 6;
        }

        .channel-html .small-span-7 {
          grid-column: span 7;
        }

        .channel-html .small-span-8 {
          grid-column: span 8;
        }

        .channel-html .small-span-9 {
          grid-column: span 9;
        }

        .channel-html .small-span-10 {
          grid-column: span 10;
        }

        .channel-html .small-span-11 {
          grid-column: span 11;
        }

        .channel-html .small-span-12 {
          grid-column: span 12;
        }
      }

      .channel-html .icon::before,
      .channel-html .icon::after,
      .channel-html .more::before,
      .channel-html .more::after {
        font-family: "SF Pro Icons";
        color: inherit;
        display: inline-block;
        font-style: normal;
        font-weight: inherit;
        font-size: inherit;
        line-height: 1;
        text-decoration: underline;
        position: relative;
        z-index: 1;
        alt: "";
      }

      .channel-html .icon::before,
      .channel-html .icon::after,
      .channel-html .more::before,
      .channel-html .more::after {
        text-decoration: none;
      }

      .channel-html .icon::before,
      .channel-html .more::before {
        display: none;
      }

      .channel-html .icon-after::after,
      .channel-html .more::after {
        padding-left: 0.3em;
        top: 0;
      }

      .channel-html .icon-apple::before,
      .channel-html .icon-apple::after {
        content: "\f8ff";
      }

      .channel-html .icon-chevronright::before,
      .channel-html .icon-chevronright::after {
        content: "\f301";
      }

      .channel-html .icon-plus::before,
      .channel-html .icon-plus::after {
        content: "\f309";
      }

      .channel-html .more::before,
      .channel-html .more::after {
        content: "\f301";
      }

      .channel-html .icon-wrapper .icon,
      .channel-html .icon-wrapper .more::after,
      .channel-html .icon-wrapper .icon-after::after {
        display: inline;
        position: static;
      }

      .channel-html a.icon-wrapper {
        text-decoration: none;
      }

      .channel-html a.icon-wrapper:hover .icon-copy {
        text-decoration: underline;
      }

      .channel-html .icon-wrapper {
        unicode-bidi: bidi-override;
      }

      .channel-html .icon-copy {
        unicode-bidi: embed;
      }

      .channel-html body {
        min-width: 320px;
      }

      .channel-html .large-hide {
        display: none;
      }

      .channel-html .large-show {
        display: block;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .medium-hide {
          display: none;
        }

        .channel-html .medium-show {
          display: block;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .small-hide {
          display: none;
        }

        .channel-html .small-show {
          display: block;
        }
      }

      .channel-html [class*=typography-eyebrow] {
        display: block;
        margin-bottom: 0.4em;
      }

      .channel-html [class*=typography-eyebrow]+* {
        margin-top: 0;
      }

      .channel-html .button {
        cursor: pointer;
        display: inline-block;
        text-align: center;
        white-space: nowrap;
        font-size: 17px;
        line-height: 1.1764805882;
        font-weight: 400;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
        min-width: 28px;
        padding-left: 16px;
        padding-right: 16px;
        padding-top: 8px;
        padding-bottom: 8px;
        border-radius: 980px;
        background: #0071e3;
        color: white;
      }

      .channel-html .button:hover {
        text-decoration: none;
      }

      .channel-html .button:focus {
        box-shadow: 0 0 0 4px rgba(0, 125, 250, 0.6);
        outline: none;
      }

      .channel-html .button:focus[data-focus-method=mouse]:not(input):not(textarea):not(select),
      .channel-html .button:focus[data-focus-method=touch]:not(input):not(textarea):not(select) {
        box-shadow: none;
      }

      .channel-html .button:active {
        outline: none;
      }

      .channel-html .button:disabled {
        cursor: default;
      }

      .channel-html .button:hover {
        background: #0077ED;
      }

      .channel-html .button:active {
        background: #006EDB;
      }

      .channel-html .button:disabled {
        background: #0071e3;
        color: white;
        opacity: 0.32;
      }

      .channel-html .button-super {
        font-size: 17px;
        line-height: 1.1764805882;
        font-weight: 400;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
        min-width: 28px;
        padding-left: 31px;
        padding-right: 31px;
        padding-top: 18px;
        padding-bottom: 18px;
      }

      .channel-html .button-elevated {
        font-size: 17px;
        line-height: 1.1764805882;
        font-weight: 400;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
        min-width: 26px;
        padding-left: 22px;
        padding-right: 22px;
        padding-top: 12px;
        padding-bottom: 12px;
      }

      .channel-html .button-reduced {
        font-size: 12px;
        line-height: 1.3333733333;
        font-weight: 400;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
        min-width: 23px;
        padding-left: 11px;
        padding-right: 11px;
        padding-top: 4px;
        padding-bottom: 4px;
      }

      .channel-html .badge {
        margin-right: 2em;
        box-sizing: border-box;
        display: inline-block;
        font-size: 20px;
        min-width: 5em;
        position: relative;
        z-index: 1;
        color: #1d1d1f;
      }

      .channel-html .badge .badge-content {
        margin: 1em 0;
        padding-top: 4px;
        padding-bottom: 2px;
        position: relative;
        z-index: 1;
      }

      .channel-html .badge .badge-value {
        left: -2px;
        display: block;
        white-space: nowrap;
        position: relative;
        z-index: 1;
      }

      .channel-html .badge .badge-caption {
        left: 0;
        box-sizing: border-box;
        display: block;
        position: absolute;
        top: 100%;
        width: 100%;
        z-index: 1;
      }

      .channel-html .badge .badge-caption:first-child {
        top: auto;
        bottom: 100%;
      }

      .channel-html .badge .badge-caption {
        color: #1d1d1f;
      }

      .channel-html .badge .badge-value {
        font-size: 48px;
        line-height: 1;
        font-weight: 400;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      }

      .channel-html .badge .badge-caption {
        font-size: 14px;
        line-height: 1.2857742857;
        font-weight: 400;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      }

      .channel-html .badge-right {
        margin-right: 2em;
        text-align: right;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .badge-right {
          margin-right: 1em;
        }
      }

      .channel-html .badge-right .badge-caption {
        margin-left: -0.3em;
      }

      .channel-html .badge-super .badge-value {
        font-size: 80px;
        line-height: 1;
        font-weight: 400;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      }

      .channel-html .badge-super .badge-caption {
        font-size: 17px;
        line-height: 1.2353641176;
        font-weight: 400;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      }

      .channel-html .badge-elevated .badge-value {
        font-size: 64px;
        line-height: 1;
        font-weight: 400;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      }

      .channel-html .badge-elevated .badge-caption {
        font-size: 14px;
        line-height: 1.2857742857;
        font-weight: 400;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      }

      .channel-html .badge-reduced .badge-value {
        font-size: 40px;
        line-height: 1;
        font-weight: 400;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      }

      .channel-html .badge-reduced .badge-caption {
        font-size: 14px;
        line-height: 1.2857742857;
        font-weight: 400;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      }

      .channel-html .colornav {
        display: inline-block;
        text-align: center;
      }

      .channel-html .colornav-items {
        display: inline-block;
        list-style: none;
        margin: 0 -1px;
        padding-top: 17px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .colornav-items {
          margin-left: 2px;
          margin-right: 2px;
          padding-top: 13px;
        }
      }

      .channel-html .colornav-item {
        float: left;
        margin: -1px 5px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .colornav-item {
          margin-left: 4px;
          margin-right: 4px;
        }
      }

      .channel-html .colornav-value {
        position: absolute;
        clip: rect(1px, 1px, 1px, 1px);
        -webkit-clip-path: inset(0px 0px 99.9% 99.9%);
        clip-path: inset(0px 0px 99.9% 99.9%);
        overflow: hidden;
        height: 1px;
        width: 1px;
        padding: 0;
        border: 0;
      }

      .channel-html .colornav-link {
        border: 2px solid transparent;
        border-radius: 50%;
        box-sizing: border-box;
        color: #1d1d1f;
        cursor: pointer;
        float: left;
        margin-bottom: 2.4705882353em;
        padding: 3px;
        position: relative;
        width: 42px;
        height: 42px;
        z-index: 1;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .colornav-link {
          margin-bottom: 2.5882352941em;
          padding: 2px;
          width: 36px;
          height: 36px;
        }
      }

      .channel-html .colornav-value:checked~.colornav-link {
        border-color: #0071e3;
        cursor: default;
      }

      .channel-html .colornav-link:focus,
      .channel-html .colornav-value:focus~.colornav-link {
        box-shadow: 0 0 0 4px rgba(0, 125, 250, 0.6);
        outline: none;
      }

      .channel-html .colornav-link:focus[data-focus-method=mouse]:not(input):not(textarea):not(select),
      .channel-html .colornav-link:focus[data-focus-method=touch]:not(input):not(textarea):not(select),
      .channel-html .colornav-value:focus~.colornav-link[data-focus-method=mouse]:not(input):not(textarea):not(select),
      .channel-html .colornav-value:focus~.colornav-link[data-focus-method=touch]:not(input):not(textarea):not(select) {
        box-shadow: none;
      }

      .channel-html .colornav-swatch {
        background: #f5f5f7 center center;
        border-radius: 50%;
        display: block;
        width: 32px;
        height: 32px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .colornav-swatch {
          width: 28px;
          height: 28px;
        }
      }

      .channel-html .colornav-swatch:after {
        border-radius: inherit;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.1);
        content: "";
        display: block;
        height: inherit;
        position: absolute;
        width: inherit;
      }

      .channel-html .colornav-label,
      .channel-html .colornav-label-hidden {
        position: absolute;
        clip: rect(1px, 1px, 1px, 1px);
        -webkit-clip-path: inset(0px 0px 99.9% 99.9%);
        clip-path: inset(0px 0px 99.9% 99.9%);
        overflow: hidden;
        height: 1px;
        width: 1px;
        padding: 0;
        border: 0;
      }

      .channel-html .colornav-label {
        overflow: visible;
      }

      .channel-html .colornav-value:checked~.colornav-link .colornav-label {
        font-size: 12px;
        line-height: 1.3333733333;
        font-weight: 400;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
        clip: auto;
        -webkit-clip-path: none;
        clip-path: none;
        margin-left: -50px;
        padding-top: 7px;
        position: absolute;
        top: 100%;
        left: 50%;
        text-align: center;
        white-space: nowrap;
        width: 100px;
        height: auto;
        z-index: 1;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .colornav-value:checked~.colornav-link .colornav-label {
          padding-top: 4px;
        }
      }

      .channel-html [copy-type=h1]+*,
      .channel-html [copy-type=h2]+*,
      .channel-html [copy-type=h3]+*,
      .channel-html [copy-type=h4]+*,
      .channel-html [copy-type=h5]+*,
      .channel-html [copy-type=h6]+* {
        margin-top: 0.8em;
      }

      .channel-html .section-background {
        width: 100%;
        height: 100%;
        position: absolute;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
      }

      .channel-html .badge {
        white-space: normal;
        margin: 0;
      }

      .channel-html .badge .badge-content {
        margin: 0 !important;
      }

      .channel-html .badge-caption-up {
        word-wrap: break-word;
        bottom: 0.3em !important;
        position: relative !important;
        display: inline-block !important;
      }

      .channel-html .badge-caption-bottom {
        top: 0.2em !important;
        position: relative !important;
        display: block !important;
      }

      .channel-html .badge .badge-caption-up.helvetica-neue,
      .channel-html .badge .badge-caption-bottom.helvetica-neue {
        font-family: "Helvetica Neue", "Helvetica", "Arial", sans-serif;
        letter-spacing: normal;
      }

      .channel-html .button {
        padding-left: 19px;
        padding-top: 7px;
        padding-bottom: 7px;
        padding-right: 19px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .button {
          padding-left: 19px;
          padding-top: 7px;
          padding-bottom: 7px;
          padding-right: 19px;
        }
      }

      .channel-html .button-channel {
        background: transparent;
        border: 1px solid #1d1d1f;
        color: #1d1d1f;
      }

      .channel-html .button-channel:hover {
        background: transparent;
        border: 1px solid #6e6e73;
        color: #6e6e73;
      }

      .channel-html .colornav-items {
        margin-left: 0;
        padding-top: 0;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .colornav-items {
          max-width: 83px;
        }
      }

      .channel-html .colornav-swatch {
        position: relative;
      }



      /*
When you have two images of a different size, this function will
allow you to align the smaller one to the bottom of the column.

@example scss
	.bigger-image {
		@include picture(image_bigger);
	}

	.smaller-image {
		@include picture(image_smaller);

		@each $viewport in viewport-list() {
			@include viewport($viewport) {
				@include techspecs-image-bottom-align(image_bigger, image_smaller, $viewport);
			}
		}
	}
*/

      /*
When you have two images of a different size, this function will
allow you to align the smaller one to the vertical center of the bigger one.

@example scss
	.bigger-image {
		@include picture(image_bigger);
	}

	.smaller-image {
		@include picture(image_smaller);

		@each $viewport in viewport-list() {
			@include viewport($viewport) {
				@include techspecs-image-middle-align(image_bigger, image_smaller, $viewport);
			}
		}
	}
*/

      /*
This will generate unique classes for all provided built-in app images.

@example scss
	.section-apps, .section-freeapps {
		@include techspecs-appicon-classes();
	}

@example html
	<figure class="techspecs-app">
		<div class="techspecs-app-icon techspecs-app-icon-camera"></div>
		<figcaption>Camera</figcaption>
	</figure>
*/

      /**
Mixin to define gaps per viewport and column number
@see Compare.vue: computed.columnRange()
 */

      /**
Mixin to define padding per viewport and column number
@see Compare.vue: computed.columnRange()
 */

      .channel-compare .compare-wrapper {
        position: relative;
        overflow: hidden;
      }

      .channel-compare .compare-section,
      .channel-compare .selector-table {
        position: relative;
      }

      .channel-compare sup * {
        vertical-align: inherit;
        font-weight: 400;
      }

      .channel-compare ul {
        margin: 0;
        list-style: none;
      }

      .channel-compare .compare-section {
        padding-top: 39px;
        border: 0;
      }

      @media only screen and (max-width: 1068px) {
        .channel-compare .compare-section {
          padding-top: 53px;
          padding-bottom: 25px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-compare .compare-section {
          padding-top: 20px;
          padding-bottom: 14px;
        }
      }

      .channel-compare .compare-section.no-padding-top {
        padding: 0;
      }

      .channel-compare .compare.compare-column-range-large-5 .compare-header-row,
      .channel-compare .compare.compare-column-range-large-5 .compare-row {
        padding: 0 16px;
      }

      .channel-compare .compare.compare-column-range-large-4 .compare-header-row,
      .channel-compare .compare.compare-column-range-large-4 .compare-row {
        padding: 0 42px;
      }

      .channel-compare .compare.compare-column-range-large-3 .compare-header-row,
      .channel-compare .compare.compare-column-range-large-3 .compare-row {
        padding: 0 0px;
      }

      .channel-compare .compare.compare-column-range-large-2 .compare-header-row,
      .channel-compare .compare.compare-column-range-large-2 .compare-row {
        padding: 0 0px;
      }

      @media only screen and (max-width: 1068px) {

        .channel-compare .compare.compare-column-range-medium-5 .compare-header-row,
        .channel-compare .compare.compare-column-range-medium-5 .compare-row {
          padding: 0 0px;
        }
      }

      @media only screen and (max-width: 1068px) {

        .channel-compare .compare.compare-column-range-medium-4 .compare-header-row,
        .channel-compare .compare.compare-column-range-medium-4 .compare-row {
          padding: 0 0px;
        }
      }

      @media only screen and (max-width: 1068px) {

        .channel-compare .compare.compare-column-range-medium-3 .compare-header-row,
        .channel-compare .compare.compare-column-range-medium-3 .compare-row {
          padding: 0 58px;
        }
      }

      @media only screen and (max-width: 1068px) {

        .channel-compare .compare.compare-column-range-medium-2 .compare-header-row,
        .channel-compare .compare.compare-column-range-medium-2 .compare-row {
          padding: 0 0px;
        }
      }

      @media only screen and (max-width: 734px) {

        .channel-compare .compare.compare-column-range-small-5 .compare-header-row,
        .channel-compare .compare.compare-column-range-small-5 .compare-row {
          padding: 0 0px;
        }
      }

      @media only screen and (max-width: 734px) {

        .channel-compare .compare.compare-column-range-small-4 .compare-header-row,
        .channel-compare .compare.compare-column-range-small-4 .compare-row {
          padding: 0 0px;
        }
      }

      @media only screen and (max-width: 734px) {

        .channel-compare .compare.compare-column-range-small-3 .compare-header-row,
        .channel-compare .compare.compare-column-range-small-3 .compare-row {
          padding: 0 0px;
        }
      }

      @media only screen and (max-width: 734px) {

        .channel-compare .compare.compare-column-range-small-2 .compare-header-row,
        .channel-compare .compare.compare-column-range-small-2 .compare-row {
          padding: 0 0;
        }
      }

      .channel-compare .compare.compare-column-range-large-5 .compare-header-row,
      .channel-compare .compare.compare-column-range-large-5 .compare-row {
        --column-gap: 32px;
      }

      .channel-compare .compare.compare-column-range-large-4 .compare-header-row,
      .channel-compare .compare.compare-column-range-large-4 .compare-row {
        --column-gap: 80px;
      }

      .channel-compare .compare.compare-column-range-large-3 .compare-header-row,
      .channel-compare .compare.compare-column-range-large-3 .compare-row {
        --column-gap: 31px;
      }

      .channel-compare .compare.compare-column-range-large-2 .compare-header-row,
      .channel-compare .compare.compare-column-range-large-2 .compare-row {
        --column-gap: 16px;
      }

      @media only screen and (max-width: 1068px) {

        .channel-compare .compare.compare-column-range-medium-5 .compare-header-row,
        .channel-compare .compare.compare-column-range-medium-5 .compare-row {
          --column-gap: 28px;
        }
      }

      @media only screen and (max-width: 1068px) {

        .channel-compare .compare.compare-column-range-medium-4 .compare-header-row,
        .channel-compare .compare.compare-column-range-medium-4 .compare-row {
          --column-gap: 28px;
        }
      }

      @media only screen and (max-width: 1068px) {

        .channel-compare .compare.compare-column-range-medium-3 .compare-header-row,
        .channel-compare .compare.compare-column-range-medium-3 .compare-row {
          --column-gap: 42px;
        }
      }

      @media only screen and (max-width: 1068px) {

        .channel-compare .compare.compare-column-range-medium-2 .compare-header-row,
        .channel-compare .compare.compare-column-range-medium-2 .compare-row {
          --column-gap: 28px;
        }
      }

      @media only screen and (max-width: 734px) {

        .channel-compare .compare.compare-column-range-small-5 .compare-header-row,
        .channel-compare .compare.compare-column-range-small-5 .compare-row {
          --column-gap: 18px;
        }
      }

      @media only screen and (max-width: 734px) {

        .channel-compare .compare.compare-column-range-small-4 .compare-header-row,
        .channel-compare .compare.compare-column-range-small-4 .compare-row {
          --column-gap: 18px;
        }
      }

      @media only screen and (max-width: 734px) {

        .channel-compare .compare.compare-column-range-small-3 .compare-header-row,
        .channel-compare .compare.compare-column-range-small-3 .compare-row {
          --column-gap: 18px;
        }
      }

      @media only screen and (max-width: 734px) {

        .channel-compare .compare.compare-column-range-small-2 .compare-header-row,
        .channel-compare .compare.compare-column-range-small-2 .compare-row {
          --column-gap: 18px;
        }
      }

      .channel-compare .compare-header-row,
      .channel-compare .compare-row {
        --column-gap: 16px;
        display: grid;
        column-gap: var(--column-gap);
        grid-template-columns: repeat(var(--grid-column), calc((100% - var(--column-gap) * (var(--grid-column) - 1)) / var(--grid-column)));
      }

      @media only screen and (max-width: 1068px) {

        .channel-compare .compare-header-row,
        .channel-compare .compare-row {
          --column-gap: 28px;
        }
      }

      @media only screen and (max-width: 734px) {

        .channel-compare .compare-header-row,
        .channel-compare .compare-row {
          --column-gap: 18px;
        }
      }

      .channel-compare .compare-row {
        margin-bottom: 40px;
      }

      .channel-compare .compare-row.compare-template-border-bottom .compare-column {
        border-bottom: 1px solid #d6d6d6;
        margin: 0 73px;
        margin-bottom: 30px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-compare .compare-row.compare-template-border-bottom .compare-column {
          margin: 0 0;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-compare .compare-row.compare-template-border-bottom .compare-column {
          margin: 0 0;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-compare .compare-row.compare-template-border-bottom .compare-column {
          margin-bottom: 25px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-compare .compare-row.compare-template-border-bottom .compare-column {
          margin-bottom: 20px;
        }
      }

      .channel-compare .compare-row:last-child {
        margin-bottom: 0;
      }

      .channel-compare .compare-header-row {
        margin: 0;
      }

      .channel-compare .compare-rowheader {
        order: -1;
      }

      .channel-compare .compare-rowheader,
      .channel-compare .compare-rowheader-style {
        grid-column: 1/var(--grid-column) span;
      }

      .channel-compare .compare-columnheader,
      .channel-compare .compare-column {
        display: none;
        box-sizing: border-box;
      }

      .channel-compare .compare.with-fullwidthrowheader .compare-rowheader {
        width: 100%;
      }

      .channel-compare .compare.with-fullwidthrowheader .compare-rowheader-style {
        font-size: 24px;
        line-height: 1.1666666667;
        font-weight: 600;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
        padding-bottom: 27px;
        border-bottom: 1px solid #d6d6d6;
        margin-bottom: 33px;
        padding-bottom: 27px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-compare .compare.with-fullwidthrowheader .compare-rowheader-style {
          font-size: 21px;
          line-height: 1.1904761905;
          font-weight: 600;
          letter-spacing: 0em;
          font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-compare .compare.with-fullwidthrowheader .compare-rowheader-style {
          font-size: 17px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-compare .compare.with-fullwidthrowheader .compare-rowheader-style {
          margin-bottom: 28px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-compare .compare.with-fullwidthrowheader .compare-rowheader-style {
          margin-bottom: 17px;
          padding-bottom: 13px;
        }
      }

      .channel-compare .compare.with-fullwidthrowheader .compare-columnheader,
      .channel-compare .compare.with-fullwidthrowheader .compare-column {
        text-align: center;
        justify-content: center;
      }

      .channel-compare .compare.with-fullwidthrowheader .compare-columnheader-span,
      .channel-compare .compare.with-fullwidthrowheader .compare-column-span {
        width: 100%;
      }

      .channel-compare .compare .copy.helvetica-neue {
        font-weight: 500;
        line-height: 1.235;
      }

      .compare-wrapper {
        width: 100%;
      }



      .channel-compare .selector-table {
        padding-top: 10px;
        margin-bottom: 60px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-compare .selector-table {
          margin-bottom: 42px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-compare .selector-table {
          margin-bottom: 24px;
        }
      }

      .channel-compare .selector-table .compare-row {
        margin: 0;
      }

      .channel-compare .selector-table .compare-rowheader {
        height: 0;
      }

      .channel-compare .selector-dropdown {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Helvetica Neue", "Helvetica", "Arial", sans-serif;
        font-size: 19px;
        line-height: 1.4737642105;
        font-weight: 600;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
        width: 100%;
        margin: 0;
        background: transparent;
        border: 0;
        border-radius: 0;
        overflow: hidden;
        -webkit-appearance: none;
        appearance: none;
        cursor: pointer;
        outline: none;
        padding: 16px;
        color: black;
      }

      @media only screen and (max-width: 1068px) {
        .channel-compare .selector-dropdown {
          font-size: 17px;
          line-height: 1.3529611765;
          font-weight: 600;
          letter-spacing: 0em;
          font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-compare .selector-dropdown {
          font-size: 14px;
          line-height: 1.4285914286;
          font-weight: 600;
          letter-spacing: 0em;
          font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
        }
      }

      .channel-compare .selector-dropdown:focus {
        border-radius: 12px;
        box-shadow: 0 0 0 4px rgba(131, 192, 253, 0.5);
      }

      @media only screen and (max-width: 734px) {
        .channel-compare .selector-dropdown {
          font-size: 100%;
          padding-bottom: 11px;
          padding-left: 0px;
          padding-top: 11px;
          color: black;
        }

        .channel-compare .selector-dropdown:focus {
          border-radius: 5px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-compare .selector-dropdown {
          color: black;
        }
      }

      .channel-compare .selector-icon {
        display: block;
        position: absolute;
        top: 4px;
        right: 0;
        font-size: 20px;
        line-height: 1;
        color: #0066cc;
        padding-right: 10px;
        padding-top: 15px;
        pointer-events: none;
        right: 6px;
      }

      .channel-compare .selector-icon:after {
        pointer-events: none;
      }

      @media only screen and (max-width: 1068px) {
        .channel-compare .selector-icon {
          top: 2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-compare .selector-icon {
          font-size: 24px;
          top: -8px;
          padding-right: 0;
          right: 0px;
        }
      }

      .channel-compare .static-dropdown {
        text-align: center;
        font-size: 19px;
        line-height: 1.4737642105;
        font-weight: 600;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
        width: 100%;
        margin: 0;
        padding-bottom: 7px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-compare .static-dropdown {
          border-bottom: 1px solid #d6d6d6;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-compare .static-dropdown {
          font-size: 17px;
          line-height: 1.3529611765;
          font-weight: 600;
          letter-spacing: 0em;
          font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-compare .static-dropdown {
          font-size: 14px;
          line-height: 1.4285914286;
          font-weight: 600;
          letter-spacing: 0em;
          font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
        }
      }

      @media only screen and (min-width: 1069px) {
        .channel-compare .static-dropdown::before {
          content: "";
          position: absolute;
          bottom: 0;
          height: 1px;
          width: 160px;
          border-bottom: 1px solid #d6d6d6;
        }
      }



      .channel-compare .badge {
        min-width: 0;
        margin: 0 auto;
      }

      .channel-compare .badge .badge-content {
        margin: 0;
        padding: 0;
      }

      .channel-compare .badge-content {
        margin: 0;
        padding: 0;
      }

      .channel-compare .badge-content .badge-caption {
        position: static;
        margin-bottom: 0;
        font-size: 17px;
        line-height: 1.4705882353;
        font-weight: 600;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
        font-size: 12px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-compare .badge-content .badge-caption {
          font-size: 14px;
          line-height: 1.4285914286;
          font-weight: 600;
          letter-spacing: 0em;
          font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-compare .badge-content .badge-caption {
          font-size: 12px;
          line-height: 1.3333733333;
          font-weight: 600;
          letter-spacing: 0em;
          font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-compare .badge-content .badge-caption {
          font-size: 12px;
        }
      }

      .channel-compare .badge-content .badge-caption p {
        color: #1d1d1f;
        font-family: "Helvetica Neue", "Helvetica", "Arial", sans-serif;
      }

      .channel-compare .badge-content .badge-caption.copy {
        font-family: "Helvetica Neue", "Helvetica", "Arial", sans-serif;
        font-weight: 500;
        line-height: 1.4;
      }

      .channel-compare .badge-content .badge-value {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Helvetica Neue", "Helvetica", "Arial", sans-serif;
        font-size: 64px;
        line-height: 1.0625;
        font-weight: 600;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
        font-size: 21px;
        line-height: 0.74em;
        white-space: unset;
        overflow-wrap: break-word;
      }

      @media only screen and (max-width: 1068px) {
        .channel-compare .badge-content .badge-value {
          font-size: 48px;
          line-height: 1.0834933333;
          font-weight: 600;
          letter-spacing: 0em;
          font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-compare .badge-content .badge-value {
          font-size: 32px;
          line-height: 1.125;
          font-weight: 600;
          letter-spacing: 0em;
          font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-compare .badge-content .badge-value {
          font-size: 21px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-compare .badge-content .badge-value {
          font-size: 21px;
        }
      }

      .channel-compare .badge-content .badge-elevated .badge-caption p {
        color: #86868b;
      }

      .channel-compare .badge-content .image-icon-wrapper {
        position: relative;
        text-align: center;
        margin-bottom: -4px;
      }

      .channel-compare .badge-content .image-icon-wrapper figure {
        display: block;
        margin: auto;
      }

      .channel-compare .badge-content .badge-row {
        padding: 0 16px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-compare .badge-content .badge-row {
          padding: 0 22px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-compare .badge-content .badge-row {
          padding: 0 0;
        }
      }

      .channel-compare .badge-content .badge-row:not(:last-child) {
        margin-bottom: 15px;
      }

      .channel-compare .badge-content .badge-row:first-child .copy {
        margin-bottom: -4px;
      }

      .channel-compare .badge-content .badge-row:first-child .badge-value:not(.copy) {
        margin-bottom: -3px;
      }

      .channel-compare .compare-template-border-bottom .button-container {
        margin-bottom: 30px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-compare .compare-template-border-bottom .button-container {
          margin-bottom: 25px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-compare .compare-template-border-bottom .button-container {
          margin-bottom: 20px;
        }
      }

      .channel-compare .button {
        background: transparent;
        border: 1px solid #1d1d1f;
        color: #1d1d1f;
        font-family: "SF Pro Text", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
        padding-left: 19px;
        padding-right: 19px;
        padding-top: 7px;
        padding-bottom: 7px;
        font-size: 17px;
      }

      @media only screen and (max-width: 734px) {
        .channel-compare .button {
          padding-left: 12px;
          padding-right: 12px;
          padding-top: 4px;
          padding-bottom: 4px;
          font-size: 12px;
        }
      }

      .channel-compare .button:hover {
        background: transparent;
        border: 1px solid #6e6e73;
        color: #6e6e73;
      }

      .channel-compare .button-container {
        margin-bottom: 55px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-compare .button-container {
          margin-bottom: 55px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-compare .button-container {
          margin-bottom: 32px;
        }
      }

      .channel-compare .button-container .copy.helvetica-neue {
        font-weight: 400;
      }

      .channel-compare .multi-row .compare-template-preview-item-color-nav {
        margin-bottom: 41px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-compare .multi-row .compare-template-preview-item-color-nav {
          margin-bottom: 36px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-compare .multi-row .compare-template-preview-item-color-nav {
          margin-bottom: 27px;
        }
      }

      .channel-compare .multi-row .compare-template-preview-item-color-nav:last-child {
        margin-bottom: 75px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-compare .multi-row .compare-template-preview-item-color-nav:last-child {
          margin-bottom: 60px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-compare .multi-row .compare-template-preview-item-color-nav:last-child {
          margin-bottom: 41px;
        }
      }

      .channel-compare .multi-row .row-colors {
        padding-bottom: 0;
        margin-bottom: 0;
        margin-top: 0;
      }

      .channel-compare .row-colors {
        width: 100%;
        text-align: center;
        padding-bottom: 27px;
        margin-top: 27px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-compare .row-colors {
          padding-bottom: 27px;
          margin-top: 27px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-compare .row-colors {
          padding-bottom: 17px;
          margin-top: 17px;
        }
      }

      .channel-compare .colornav-item-row {
        display: flex;
        justify-content: center;
      }

      .channel-compare .colornav-item-row:not(:first-child) {
        margin-top: 10px;
      }

      .channel-compare .colornav-item-row .colornav-item {
        margin-left: 0;
        margin-right: 6px;
      }

      .channel-compare .colornav-item-row .colornav-item:last-child {
        margin-right: 0;
      }

      .channel-compare .colornav-swatch {
        width: 12px;
        height: 12px;
      }

      .channel-compare .swatch-image {
        position: relative;
        left: calc(100% + 5px);
      }

      @media only screen and (max-width: 734px) {
        .channel-compare .swatch-image {
          left: calc(100% + 3px);
        }
      }

      .channel-compare .embed-image {
        align-self: flex-end;
      }





      .channel-html .copy {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Helvetica Neue", "Helvetica", "Arial", sans-serif;
        word-break: break-word;
      }

      .channel-html .copy.helvetica-neue {
        font-family: "Helvetica Neue", "Helvetica", "Arial", sans-serif;
        letter-spacing: normal;
      }

      @font-face {
        font-family: "SF Pro Icons";
        /*Icon font file encoded in base64 format.*/
        /*It's a valid css code.*/
        src: url(data:font/truetype;charset=utf-8;base64,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AAIACv/XBjsHdABKAFgAAAEjBgcGBwYXFhcWFxYXFQYHBgcGBwYHBgcGJyYnJicmIyIHBgcGBwYHBicmJyYnJicmNTQ3PgE3NhcWFxYXFjMyNzY3Njc2FxYXFiU2NzYnDgIHBhcWNzYGCAEeIDwlMwEBQzBNJx0OFio5NCAwLzk+KigYLC8bLjM1MB0xKhYmJjw6MTUiNVk4PFFB13svOiE/LRQhFxMfEyxMK0tBV0d8/oM1HB0JSaFpHSAKT1FLBNwTHDZEXWyDZkkzGgsCLTJhU0wmOx0kAQELBxMVBw0NCBUSBwsCAiYfPilNgKe3qsCNb4MCAREJGRIGCwoGER4MEwQHHDHzQU9VUgNTektXTwYpJgAAAAAAACIBngABAAAAAAAAACYATgABAAAAAAABAAwAjwABAAAAAAACAAcArAABAAAAAAADAB0A8AABAAAAAAAEABQBOAABAAAAAAAFAA0BaQABAAAAAAAGABIBnQABAAAAAAAHACkCBAABAAAAAAAIAAkCQgABAAAAAAAJAAsCZAABAAAAAAAKBAsKiAABAAAAAAALABQOvgABAAAAAAAMABQO/QABAAAAAAANAL4QkAABAAAAAAAOADIRtQABAAAAAAAPAAwSAgABAAAAAAARAAcSHwADAAEECQAAAEwAAAADAAEECQABABgAdQADAAEECQACAA4AnAADAAEECQADADoAtAADAAEECQAEACgBDgADAAEECQAFABoBTQADAAEECQAGACQBdwADAAEECQAHAFIBsAADAAEECQAIABICLgADAAEECQAJABYCTAADAAEECQAKCBYCcAADAAEECQALACgOlAADAAEECQAMACgO0wADAAEECQANAXwPEgADAAEECQAOAGQRTwADAAEECQAPABgR6AADAAEECQARAA4SDwCpACAAMgAwADEANwAgAEEAcABwAGwAZQAgAEkAbgBjAC4AIABBAGwAbAAgAHIAaQBnAGgAdABzACAAcgBlAHMAZQByAHYAZQBkAC4AAKkgMjAxNyBBcHBsZSBJbmMuIEFsbCByaWdodHMgcmVzZXJ2ZWQuAABTAEYAIABQAHIAbwAgAEkAYwBvAG4AcwAAU0YgUHJvIEljb25zAABSAGUAZwB1AGwAYQByAABSZWd1bGFyAABTAEYAUABSAE8ASQBDAE8ATgBTACAANAA3ADAAOQAyAGMAYQAtADIAMAAxADYALgAwADMALgAyADIAAFNGUFJPSUNPTlMgNDcwOTJjYS0yMDE2LjAzLjIyAABTAEYAIABQAHIAbwAgAEkAYwBvAG4AcwAgAFIAZQBnAHUAbABhAHIAAFNGIFBybyBJY29ucyBSZWd1bGFyAABWAGUAcgBzAGkAbwBuACAANAAuADIAMAAwAABWZXJzaW9uIDQuMjAwAABTAEYAUAByAG8ASQBjAG8AbgBzAC0AUgBlAGcAdQBsAGEAcgAAU0ZQcm9JY29ucy1SZWd1bGFyAABTAEYAIABQAHIAbwAgAEkAYwBvAG4AcwAgAGkAcwAgAGEAIAB0AHIAYQBkAGUAbQBhAHIAawAgAG8AZgAgAEEAcABwAGwAZQAgAEkAbgBjAC4AAFNGIFBybyBJY29ucyBpcyBhIHRyYWRlbWFyayBvZiBBcHBsZSBJbmMuAABBAHAAcABsAGUAIABJAG4AYwAAQXBwbGUgSW5jAABBAHAAcABsAGUAIABJAG4AYwAuAC4AAEFwcGxlIEluYy4uAABDAHIAZQBhAHQAZQBkACAAaQBuACAAMgAwADEANQAsACAAdABoAGUAIABvAHIAaQBnAGkAbgBhAGwAIABnAGwAeQBwAGgAIABmAG8AbgB0ACwAIABBAHAAcABsAGUAIABJAGMAbwBuAHMALAAgAHcAYQBzACAAcAByAG8AZAB1AGMAZQBkACAAdABvACAAdwBvAHIAawAgAGkAbgAgAHUAbgBpAHMAbwBuACAAdwBpAHQAaAAgAE0AeQByAGkAYQBkACAAUwBlAHQAIABQAHIAbwAgAGEAbgBkACAAcwBlAHIAdgBlAGQAIAB0AG8AIABzAHQAcgBlAG4AZwB0AGgAZQBuACAAaQBuAHQAZQByAGEAYwB0AGkAdgBlACAAbABpAG4AawBzACAAbwBuACAAdwBlAGIALgAgAEEAcABwAGwAZQAgAEkAYwBvAG4AcwAgAHcAbwB1AGwAZAAgAGwAYQB0AGUAcgAgAGIAZQBjAG8AbQBlACAAUwBGACAAUAByAG8AIABJAGMAbwBuAHMAIAByAGUAZABlAHMAaQBnAG4AZQBkACAAdABvACAAYQBsAGkAZwBuACAAdABvACAAQQBwAHAAbABlACcAcwAgAG4AZQB3ACAAdAB5AHAAZQBmAGEAYwBlACwAIABTAGEAbgAgAEYAcgBhAG4AYwBpAHMAYwBvACwAIABpAG4AIAAyADAAMQA2AC4AIABUAGgAZQAgAHIAZQBkAGUAcwBpAGcAbgAgAGEAZABkAHIAZQBzAHMAZQBzACAAYQAgAG4AdQBtAGIAZQByACAAbwBmACAAaQBzAHMAdQBlAHMAIAB0AGgAYQB0ACAAdwBlAHIAZQAgAHAAcgBlAHMAZQBuAHQAIABpAG4AIABBAHAAcABsAGUAIABJAGMAbwBuAHMALgAgAEkAbQBwAHIAbwB2AGUAbQBlAG4AdABzACAAaQBuAGMAbAB1AGQAZQAgAG0AYQB0AGMAaABlAGQAIAB0AHkAcABlACAAbQBlAHQAcgBpAGMAcwAsACAAYgByAGEAbgBkACAASQBEACAAcwB0AGEAbgBkAGEAcgBkAGkAegBlAGQAIABBAHAAcABsAGUAIABsAG8AZwBvACAAYwBoAGEAcgBhAGMAdABlAHIALAAgAHcAZQBiACAAZgBvAG4AdAAgAG8AcAB0AGkAbQBpAHoAYQB0AGkAbwBuACwAIABjAHUAcwB0AG8AbQAgAGMAaABhAHIAYQBjAHQAZQByACAAcwBwAGEAYwBpAG4AZwAsACAAcABhAHIAZQBuAHQAIAB0AHkAcABlACAAYQBsAGkAZwBuAG0AZQBuAHQALAAgAGUAdABjAC4AIABTAEYAIABQAHIAbwAgAEkAYwBvAG4AcwAgAGkAcwAgAGQAZQBzAGkAZwBuAGUAZAAgAHQAbwAgAGIAZQAgAGEAZABhAHAAdABhAGIAbABlACAAdABvACAAdwBvAHIAawAgAHcAaQB0AGgAIABvAHUAcgAgAHQAdwBvACAAdwBlAGIAIABmAG8AbgB0ACAAZgBhAG0AaQBsAGkAZQBzACwAIABTAEYAIABQAHIAbwAgAEQAaQBzAHAAbABhAHkAIABhAG4AZAAgAFMARgAgAFAAcgBvACAAVABlAHgAdAAuACAAVABoAGUAIAB3AGUAYgAgAGYAbwBuAHQAIABmAGEAbQBpAGwAaQBlAHMAIABoAGEAdgBlACAAZABpAGYAZgBlAHIAaQBuAGcAIAB4AGgAZQBpAGcAaAB0AHMALAAgAGQAZQBzAGMAZQBuAGQAZQByACAAYQBuAGQAIABhAHMAYwBlAG4AZABlAHIAIABlAHgAdABlAG4AcwBpAG8AbgBzACwAIABhAGQAdgBhAG4AYwBlAG0AZQBuAHQALAAgAGMAbwB1AG4AdABlAHIAcwAsACAAYQBuAGQAIABiAG8AdwBsAHMALgAgAFQAaABlAHMAZQAgAGQAaQBmAGYAZQByAGUAbgBjAGUAcwAgAHcAZQByAGUAIABwAHUAcgBwAG8AcwBlAGwAeQAgAG0AYQBkAGUAIAB0AG8AIABvAHAAdABpAG0AaQB6AGUAIAB0AGgAZQAgAGwAZQBnAGkAYgBpAGwAaQB0AHkAIABvAGYAIABlAGEAYwBoACAAZgBhAG0AaQBsAHkAIABpAG4AIAB0AGgAZQAgAHQAeQBwAGUAIABzAGkAegBlACAAZgBvAHIAIAB3AGgAaQBjAGgAIAB0AGgAZQB5ACAAYQByAGUAIAB1AHQAaQBsAGkAegBlAGQALgAgAFQAaABlACAAUwBGACAAUAByAG8AIABJAGMAbwBuAHMAIABjAGgAYQByAGEAYwB0AGUAcgAgAHMAZQB0ACAAaQBuAGMAbAB1AGQAZQBzACAAQwBUAEEAIABpAGMAbwBuAG8AZwByAGEAcABoAHkALAAgAFUASQAgAGUAbABlAG0AZQBuAHQAcwAsACAAYQBuAGQAIABpAG4AdABlAHIAbgBhAGwAIAB1AHMAZQAgAHMAcABlAGMAaQBhAGwAIABjAGgAYQByAGEAYwB0AGUAcgBzACAAYQBuAGQAIABpAHMAIABhAHYAYQBpAGwAYQBiAGwAZQAgAGEAcwAgAGEAIABmAGEAbQBpAGwAeQAgAG8AZgAgAHQAcgB1AGUAIAB0AHkAcABlACAAZgBvAG4AdABzACAAaQBuACAAZgBvAHUAcgAgAHcAZQBpAGcAaAB0AHMALgAAQ3JlYXRlZCBpbiAyMDE1LCB0aGUgb3JpZ2luYWwgZ2x5cGggZm9udCwgQXBwbGUgSWNvbnMsIHdhcyBwcm9kdWNlZCB0byB3b3JrIGluIHVuaXNvbiB3aXRoIE15cmlhZCBTZXQgUHJvIGFuZCBzZXJ2ZWQgdG8gc3RyZW5ndGhlbiBpbnRlcmFjdGl2ZSBsaW5rcyBvbiB3ZWIuIEFwcGxlIEljb25zIHdvdWxkIGxhdGVyIGJlY29tZSBTRiBQcm8gSWNvbnMgcmVkZXNpZ25lZCB0byBhbGlnbiB0byBBcHBsZSdzIG5ldyB0eXBlZmFjZSwgU2FuIEZyYW5jaXNjbywgaW4gMjAxNi4gVGhlIHJlZGVzaWduIGFkZHJlc3NlcyBhIG51bWJlciBvZiBpc3N1ZXMgdGhhdCB3ZXJlIHByZXNlbnQgaW4gQXBwbGUgSWNvbnMuIEltcHJvdmVtZW50cyBpbmNsdWRlIG1hdGNoZWQgdHlwZSBtZXRyaWNzLCBicmFuZCBJRCBzdGFuZGFyZGl6ZWQgQXBwbGUgbG9nbyBjaGFyYWN0ZXIsIHdlYiBmb250IG9wdGltaXphdGlvbiwgY3VzdG9tIGNoYXJhY3RlciBzcGFjaW5nLCBwYXJlbnQgdHlwZSBhbGlnbm1lbnQsIGV0Yy4gU0YgUHJvIEljb25zIGlzIGRlc2lnbmVkIHRvIGJlIGFkYXB0YWJsZSB0byB3b3JrIHdpdGggb3VyIHR3byB3ZWIgZm9udCBmYW1pbGllcywgU0YgUHJvIERpc3BsYXkgYW5kIFNGIFBybyBUZXh0LiBUaGUgd2ViIGZvbnQgZmFtaWxpZXMgaGF2ZSBkaWZmZXJpbmcgeGhlaWdodHMsIGRlc2NlbmRlciBhbmQgYXNjZW5kZXIgZXh0ZW5zaW9ucywgYWR2YW5jZW1lbnQsIGNvdW50ZXJzLCBhbmQgYm93bHMuIFRoZXNlIGRpZmZlcmVuY2VzIHdlcmUgcHVycG9zZWx5IG1hZGUgdG8gb3B0aW1pemUgdGhlIGxlZ2liaWxpdHkgb2YgZWFjaCBmYW1pbHkgaW4gdGhlIHR5cGUgc2l6ZSBmb3Igd2hpY2ggdGhleSBhcmUgdXRpbGl6ZWQuIFRoZSBTRiBQcm8gSWNvbnMgY2hhcmFjdGVyIHNldCBpbmNsdWRlcyBDVEEgaWNvbm9ncmFwaHksIFVJIGVsZW1lbnRzLCBhbmQgaW50ZXJuYWwgdXNlIHNwZWNpYWwgY2hhcmFjdGVycyBhbmQgaXMgYXZhaWxhYmxlIGFzIGEgZmFtaWx5IG9mIHRydWUgdHlwZSBmb250cyBpbiBmb3VyIHdlaWdodHMuAABoAHQAdABwADoALwAvAHcAdwB3AC4AYQBwAHAAbABlAC4AYwBvAG0AAGh0dHA6Ly93d3cuYXBwbGUuY29tAABoAHQAdABwADoALwAvAHcAdwB3AC4AYQBwAHAAbABlAC4AYwBvAG0AAGh0dHA6Ly93d3cuYXBwbGUuY29tAABUAGgAaQBzACAAZgBvAG4AdAAgAHMAbwBmAHQAdwBhAHIAZQAgAGkAcwAgAHQAaABlACAAdgBhAGwAdQBhAGIAbABlACAAcAByAG8AcABlAHIAdAB5ACAAbwBmACAAQQBwAHAAbABlACAASQBuAGMALgAgAHwAIABJAG4AdABlAHIAYQBjAHQAaQB2AGUAIABNAEEAUgBDAE8ATQAuACAAUgBlAHAAbABpAGMAYQB0AGkAbwBuACwAIABhAGwAdABlAHIAYQB0AGkAbwBuACwAIABhAG4AZAAgAGQAaQBzAHQAcgBpAGIAdQB0AGkAbwBuACAAbwBmACAAdABoAGkAcwAgAGYAbwBuAHQAIABpAHMAIABzAHQAcgBpAGMAdABsAHkAIABwAHIAbwBoAGkAYgBpAHQAZQBkAC4AIABBAHAAcABsAGUAIABJAG4AYwAuACAAYQBsAGwAIAByAGkAZwBoAHQAcwAgAHIAZQBzAGUAcgB2AGUAZAAuAABUaGlzIGZvbnQgc29mdHdhcmUgaXMgdGhlIHZhbHVhYmxlIHByb3BlcnR5IG9mIEFwcGxlIEluYy4gfCBJbnRlcmFjdGl2ZSBNQVJDT00uIFJlcGxpY2F0aW9uLCBhbHRlcmF0aW9uLCBhbmQgZGlzdHJpYnV0aW9uIG9mIHRoaXMgZm9udCBpcyBzdHJpY3RseSBwcm9oaWJpdGVkLiBBcHBsZSBJbmMuIGFsbCByaWdodHMgcmVzZXJ2ZWQuAABoAHQAdABwAHMAOgAvAC8AdwB3AHcALgBhAHAAcABsAGUALgBjAG8AbQAvAGwAZQBnAGEAbAAvAGkAbgB0AGUAbABsAGUAYwB0AHUAYQBsAC0AcAByAG8AcABlAHIAdAB5AC8AAGh0dHBzOi8vd3d3LmFwcGxlLmNvbS9sZWdhbC9pbnRlbGxlY3R1YWwtcHJvcGVydHkvAABTAEYAIABQAHIAbwAgAEkAYwBvAG4AcwAAU0YgUHJvIEljb25zAABSAGUAZwB1AGwAYQByAABSZWd1bGFyAAAAAAACAAAAAAAAABQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGwAAAABAAIBAgEDAQQBBQEGAQcBCAEJAQoBCwEMAQ0BDgEPARABEQESARMBFAEVARYBFwEYARkBGgEbARwBHQEeAR8BIAEhASIBIwEkASUBJgEnASgBKQEqAA4A7wErASwAIgEtAS4BLwEwATEBMgEzATQBNQE2ATcBOAE5AToBOwE8AT0BPgE/AUABQQFCAUMBRAFFAUYBRwFIAUkBSgFLAUwBTQFOAU8BUAFRAVIBUwFUAVUBVgFXAVgBWQFaAVsBXAFdAV4BXwFgAWEBYgFjAWQBZQFmANIDZ2FwCWZ1bGxibG9jawV1RjMxQQV1RjMxQgV1RjMxQwV1RjMxRAV1RjMyMgV1RjMyMwV1RjMyNAV1RjMyNQV1RjMyNgV1RjMyNwV1RjMyOAV1RjMyOQV1RjMyRgV1RjMzNAV1RjMzNQV1RjMzNgV1RjMzNwV1RjMzOAV1RjMzOQV1RjMzQQV1RjMzQgV1RjMzQwV1RjMzRAV1RjMzRQV1RjMzRgV1RjM0MAV1RjM0MQV1RjM1NgV1RjM1RgV1RjM2NQtjaGV2cm9ubGVmdAxjaGV2cm9ucmlnaHQJY2hldnJvbnVwC2NoZXZyb25kb3duEWNoZXZyb25sZWZ0Y2lyY2xlEmNoZXZyb25yaWdodGNpcmNsZQ9jaGV2cm9udXBjaXJjbGURY2hldnJvbmRvd25jaXJjbGUFcmVzZXQFY2hlY2sLZXhjbGFtYXRpb24LcmVzZXRjaXJjbGUKcGx1c2NpcmNsZQttaW51c2NpcmNsZQtjaGVja2NpcmNsZRFleGNsYW1hdGlvbmNpcmNsZQ5xdWVzdGlvbmNpcmNsZQpyZXNldHNvbGlkCXBsdXNzb2xpZAptaW51c3NvbGlkCmNoZWNrc29saWQQZXhjbGFtYXRpb25zb2xpZA1xdWVzdGlvbnNvbGlkBHBsYXkFcGF1c2UEc3RvcAZyZXBsYXkEaW5mbwhkb3dubG9hZAZjaXJjbGUIZXh0ZXJuYWwFc2hhcmUTcXVlc3Rpb25fY2lyY2xlX3J0bBJxdWVzdGlvbl9zb2xpZF9ydGwMcXVlc3Rpb25fcnRsDGV4dGVybmFsX3J0bAlzZWN0aW9uMDEJc2VjdGlvbjAyCXNlY3Rpb24wMwlzZWN0aW9uMDQJc2VjdGlvbjA1CXNlY3Rpb24wNglzZWN0aW9uMDcJc2VjdGlvbjA4CXNlY3Rpb24wOQlzZWN0aW9uMTAJc2VjdGlvbjExCXNlY3Rpb24xMglzZWN0aW9uMTMJc2VjdGlvbjE0CXNlY3Rpb24xNQlzZWN0aW9uMTYJc2VjdGlvbjE3CXNlY3Rpb24xOAlzZWN0aW9uMTkJc2VjdGlvbjIwC3ZpZGVvcmVwbGF5CnZpZGVvcGF1c2UJdmlkZW9wbGF5CnBhZGRsZWxlZnQLcGFkZGxlcmlnaHQIcGFkZGxldXAKcGFkZGxlZG93bgptb2RhbGNsb3NlD3BhZGRsZWxlZnRzaG9ydBBwYWRkbGVyaWdodHNob3J0DXBhZGRsZXVwc2hvcnQPcGFkZGxlZG93bnNob3J0D21vZGFsY2xvc2VzaG9ydAAAAAAAAf//AAIAAQAAAAwAAAAWAAAAAgABAAMAawABAAQAAAACAAAAAAAAAAEAAAAA2pIEAQAAAADXPJGTAAAAANc8kZM=) format("truetype");
        font-weight: normal;
        font-style: normal;
      }

      .channel-html .icon-after {
        display: inline-block;
      }

      .channel-html .icon-after::after {
        background: inherit;
        background-size: 5em 100%;
        background-position: -60px center;
      }

      .visually-hidden-text {
        font-size: 0.0001em;
        text-indent: -9999px;
        line-height: 0;
      }

      .channel-html .key-line {
        display: flex;
        width: 100%;
        height: 20px;
      }

      .channel-html .key-line .liner {
        align-self: center;
      }

      .channel-html .link-wrapper {
        display: inline-flex;
      }

      body {
        margin: 0;
        overflow-x: hidden;
      }



      @media only screen and (min-width: 1069px) {
        .channel-html .row.large-display-bleed {
          position: relative;
        }

        .channel-html .row.large-display-bleed .column {
          z-index: 1;
        }

        .channel-html .row.large-display-bleed::after,
        .channel-html .row.large-display-bleed::before {
          display: block;
          content: " ";
          position: absolute;
          top: 0;
          height: 100%;
          width: 44px;
          left: -44px;
        }

        .channel-html .row.large-display-bleed::after {
          left: initial;
          right: -44px;
        }
      }

      @media only screen and (min-width: 735px) and (max-width: 1068px) {
        .channel-html .row.medium-display-bleed {
          position: relative;
        }

        .channel-html .row.medium-display-bleed .column {
          z-index: 1;
        }

        .channel-html .row.medium-display-bleed::after,
        .channel-html .row.medium-display-bleed::before {
          display: block;
          content: " ";
          position: absolute;
          top: 0;
          height: 100%;
          width: 22px;
          left: -22px;
        }

        .channel-html .row.medium-display-bleed::after {
          left: initial;
          right: -22px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .row.small-display-bleed {
          position: relative;
        }

        .channel-html .row.small-display-bleed .column {
          z-index: 1;
        }

        .channel-html .row.small-display-bleed::after,
        .channel-html .row.small-display-bleed::before {
          display: block;
          content: " ";
          position: absolute;
          top: 0;
          height: 100%;
          width: 20px;
          left: -20px;
        }

        .channel-html .row.small-display-bleed::after {
          left: initial;
          right: -20px;
        }
      }

      .channel-html .section {
        display: flex;
        position: relative;
        overflow-x: hidden;
      }

      .channel-html .section .section-content {
        margin-left: auto;
        margin-right: auto;
        width: 980px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .section .section-content {
          width: 692px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .section .section-content {
          width: 280px;
        }
      }

      .channel-html .section.large-show {
        display: flex;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .section.medium-show {
          display: flex !important;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .section.small-show {
          display: flex !important;
        }
      }

      .channel-html .section.large-hide {
        display: none;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .section.medium-hide {
          display: none;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .section.small-hide {
          display: none !important;
        }
      }

      .image-design {
        width: 1745px;
        height: 534px;
        background-size: 1745px 534px;
        background-repeat: no-repeat;
        background-image:url(./files/uploads/landing_pages/mac_studio/design_large.png?1646363640206);
      }

      .image-pro_apps {
        width: 545px;
        height: 419px;
        background-size: 545px 419px;
        background-repeat: no-repeat;
        background-image:url(./files/uploads/landing_pages/mac_studio/pro_apps_large.png?1646363640208);
      }

      .image-hero {
        width: 627px;
        height: 307px;
        background-size: 627px 307px;
        background-repeat: no-repeat;
        background-image:url(./files/uploads/landing_pages/mac_studio/hero_large.png?1646363640208);
      }

      .image-performance_icon_m1_max {
        width: 289px;
        height: 289px;
        background-size: 289px 289px;
        background-repeat: no-repeat;
        background-image:url(./files/uploads/landing_pages/mac_studio/performance_icon_m1_max_large.png?1646363640209);
      }

      .image-why_mac_icon_m1 {
        width: 92px;
        height: 42px;
        background-size: 92px 42px;
        background-repeat: no-repeat;
        background-image:url(./files/uploads/landing_pages/mac_studio/why_mac_icon_m1_large.png?1646363640209);
      }

      .image-icon_intel {
        width: 42px;
        height: 42px;
        background-size: 42px 42px;
        background-repeat: no-repeat;
        background-image:url(./files/uploads/landing_pages/mac_studio/icon_intel_large.png?1646363640209);
      }

      .image-compare_mac_studio_silver {
        width: 72px;
        height: 36px;
        background-size: 72px 36px;
        background-repeat: no-repeat;
        background-image:url(./files/uploads/landing_pages/mac_studio/compare_mac_studio_silver_large.png?1646363640210);
      }

      .image-compare_mac_pro_silver {
        width: 54px;
        height: 127px;
        background-size: 54px 127px;
        background-repeat: no-repeat;
        background-image:url(./files/uploads/landing_pages/mac_studio/compare_mac_pro_silver_large.png?1646363640210);
      }

      .image-flex_icon_applecare {
        width: 14px;
        height: 14px;
        background-size: 14px 14px;
        background-repeat: no-repeat;
        background-image:url(./files/uploads/landing_pages/mac_studio/flex_icon_applecare_large.png?1646363640211);
      }

      .image-hero_logo {
        width: 160px;
        height: 24px;
        background-size: 160px 24px;
        background-repeat: no-repeat;
        background-image:url(./files/uploads/landing_pages/mac_studio/hero_logo_large.png?1646363640211);
      }

      .image-accessories_keyboard {
        width: 833px;
        height: 273px;
        background-size: 833px 273px;
        background-repeat: no-repeat;
        background-image:url(./files/uploads/landing_pages/mac_studio/accessories_keyboard_large.png?1646363640211);
      }

      .image-flex_applecare {
        width: 332px;
        height: 164px;
        background-size: 332px 164px;
        background-repeat: no-repeat;
        background-image:url(./files/uploads/landing_pages/mac_studio/flex_applecare_large.png?1646363640212);
      }

      .image-icon_M1_chip {
        width: 42px;
        height: 42px;
        background-size: 42px 42px;
        background-repeat: no-repeat;
        background-image:url(./files/uploads/landing_pages/mac_studio/icon_M1_chip_large.png?1646363640212);
      }

      .image-accessories_trackpad {
        width: 301px;
        height: 216px;
        background-size: 301px 216px;
        background-repeat: no-repeat;
        background-image:url(./files/uploads/landing_pages/mac_studio/accessories_trackpad_large.png?1646363640213);
      }

      .image-studio_display {
        width: 921px;
        height: 470px;
        background-size: 921px 470px;
        background-repeat: no-repeat;
        background-image:url(./files/uploads/landing_pages/mac_studio/studio_display_large.png?1646363640214);
      }

      .image-why_mac_icon_ease {
        width: 50px;
        height: 42px;
        background-size: 50px 42px;
        background-repeat: no-repeat;
        background-image:url(./files/uploads/landing_pages/mac_studio/why_mac_icon_ease_large.png?1646363640214);
      }

      .image-flex_accessories {
        width: 327px;
        height: 327px;
        background-size: 327px 327px;
        background-repeat: no-repeat;
        background-image:url(./files/uploads/landing_pages/mac_studio/flex_accessories_large.png?1646363640214);
      }

      .image-why_mac_icon_connectivity {
        width: 54px;
        height: 42px;
        background-size: 54px 42px;
        background-repeat: no-repeat;
        background-image:url(./files/uploads/landing_pages/mac_studio/why_mac_icon_connectivity_large.png?1646363640215);
      }

      .image-connectivity {
        width: 628px;
        height: 644px;
        background-size: 628px 644px;
        background-repeat: no-repeat;
        background-image:url(./files/uploads/landing_pages/mac_studio/connectivity_large.png?1646363640215);
      }

      .image-icon_M1_Max_M1_Ultra {
        width: 94px;
        height: 42px;
        background-size: 94px 42px;
        background-repeat: no-repeat;
        background-image:url(./files/uploads/landing_pages/mac_studio/icon_M1_Max_M1_Ultra_large.png?1646363640215);
      }

      .image-accessories_mouse {
        width: 122px;
        height: 241px;
        background-size: 122px 241px;
        background-repeat: no-repeat;
        background-image:url(./files/uploads/landing_pages/mac_studio/accessories_mouse_large.png?1646363640216);
      }

      .image-compare_mac_mini_m1_2020_silver {
        width: 72px;
        height: 15px;
        background-size: 72px 15px;
        background-repeat: no-repeat;
        background-image:url(./files/uploads/landing_pages/mac_studio/compare_mac_mini_m1_2020_silver_large.png?1646363640216);
      }

      .image-performance_icon_m1_ultra {
        width: 290px;
        height: 290px;
        background-size: 290px 290px;
        background-repeat: no-repeat;
        background-image:url(./files/uploads/landing_pages/mac_studio/performance_icon_m1_ultra_large.png?1646363640216);
      }

      .image-studio_display_icon {
        width: 123px;
        height: 54px;
        background-size: 123px 54px;
        background-repeat: no-repeat;
        background-image:url(./files/uploads/landing_pages/mac_studio/studio_display_icon_large.png?1646363640218);
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-pro_apps {
          width: 545px;
          height: 419px;
          background-size: 545px 419px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/pro_apps_large_2x.png?1646363640206);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-compare_mac_mini_m1_2020_silver {
          width: 72px;
          height: 15px;
          background-size: 72px 15px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/compare_mac_mini_m1_2020_silver_large_2x.png?1646363640207);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-flex_applecare {
          width: 332px;
          height: 164px;
          background-size: 332px 164px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/flex_applecare_large_2x.png?1646363640208);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-design {
          width: 1745px;
          height: 534px;
          background-size: 1745px 534px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/design_large_2x.png?1646363640208);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-flex_accessories {
          width: 327px;
          height: 327px;
          background-size: 327px 327px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/flex_accessories_large_2x.png?1646363640208);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-compare_mac_studio_silver {
          width: 72px;
          height: 36px;
          background-size: 72px 36px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/compare_mac_studio_silver_large_2x.png?1646363640209);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-hero {
          width: 627px;
          height: 307px;
          background-size: 627px 307px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/hero_large_2x.png?1646363640209);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-accessories_trackpad {
          width: 301px;
          height: 216px;
          background-size: 301px 216px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/accessories_trackpad_large_2x.png?1646363640210);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-accessories_mouse {
          width: 122px;
          height: 241px;
          background-size: 122px 241px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/accessories_mouse_large_2x.png?1646363640210);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-why_mac_icon_connectivity {
          width: 54px;
          height: 42px;
          background-size: 54px 42px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/why_mac_icon_connectivity_large_2x.png?1646363640210);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-why_mac_icon_m1 {
          width: 92px;
          height: 42px;
          background-size: 92px 42px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/why_mac_icon_m1_large_2x.png?1646363640210);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-flex_icon_applecare {
          width: 14px;
          height: 14px;
          background-size: 14px 14px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/flex_icon_applecare_large_2x.png?1646363640211);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-icon_intel {
          width: 42px;
          height: 42px;
          background-size: 42px 42px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/icon_intel_large_2x.png?1646363640212);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-connectivity {
          width: 628px;
          height: 644px;
          background-size: 628px 644px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/connectivity_large_2x.png?1646363640212);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-icon_M1_chip {
          width: 42px;
          height: 42px;
          background-size: 42px 42px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/icon_M1_chip_large_2x.png?1646363640212);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-icon_M1_Max_M1_Ultra {
          width: 94px;
          height: 42px;
          background-size: 94px 42px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/icon_M1_Max_M1_Ultra_large_2x.png?1646363640213);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-studio_display {
          width: 921px;
          height: 470px;
          background-size: 921px 470px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/studio_display_large_2x.png?1646363640213);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-why_mac_icon_ease {
          width: 50px;
          height: 42px;
          background-size: 50px 42px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/why_mac_icon_ease_large_2x.png?1646363640213);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-studio_display_icon {
          width: 123px;
          height: 54px;
          background-size: 123px 54px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/studio_display_icon_large_2x.png?1646363640214);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-compare_mac_pro_silver {
          width: 54px;
          height: 127px;
          background-size: 54px 127px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/compare_mac_pro_silver_large_2x.png?1646363640216);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-performance_icon_m1_max {
          width: 289px;
          height: 289px;
          background-size: 289px 289px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/performance_icon_m1_max_large_2x.png?1646363640216);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-hero_logo {
          width: 160px;
          height: 24px;
          background-size: 160px 24px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/hero_logo_large_2x.png?1646363640218);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-accessories_keyboard {
          width: 833px;
          height: 273px;
          background-size: 833px 273px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/accessories_keyboard_large_2x.png?1646363640219);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-performance_icon_m1_ultra {
          width: 290px;
          height: 290px;
          background-size: 290px 290px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/performance_icon_m1_ultra_large_2x.png?1646363640219);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-hero {
          width: 482px;
          height: 236px;
          background-size: 482px 236px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/hero_medium.png?1646363640206);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-performance_icon_m1_ultra {
          width: 223px;
          height: 222px;
          background-size: 223px 222px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/performance_icon_m1_ultra_medium.png?1646363640206);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-studio_display_icon {
          width: 81px;
          height: 36px;
          background-size: 81px 36px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/studio_display_icon_medium.png?1646363640206);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-studio_display {
          width: 650px;
          height: 332px;
          background-size: 650px 332px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/studio_display_medium.png?1646363640208);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-why_mac_icon_m1 {
          width: 92px;
          height: 42px;
          background-size: 92px 42px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/why_mac_icon_m1_medium.png?1646363640209);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-flex_applecare {
          width: 322px;
          height: 160px;
          background-size: 322px 160px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/flex_applecare_medium.png?1646363640209);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-flex_accessories {
          width: 267px;
          height: 267px;
          background-size: 267px 267px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/flex_accessories_medium.png?1646363640209);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-design {
          width: 1202px;
          height: 374px;
          background-size: 1202px 374px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/design_medium.png?1646363640210);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-why_mac_icon_ease {
          width: 50px;
          height: 42px;
          background-size: 50px 42px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/why_mac_icon_ease_medium.png?1646363640210);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-hero_logo {
          width: 137px;
          height: 21px;
          background-size: 137px 21px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/hero_logo_medium.png?1646363640211);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-accessories_trackpad {
          width: 241px;
          height: 173px;
          background-size: 241px 173px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/accessories_trackpad_medium.png?1646363640211);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-flex_icon_applecare {
          width: 14px;
          height: 14px;
          background-size: 14px 14px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/flex_icon_applecare_medium.png?1646363640214);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-pro_apps {
          width: 451px;
          height: 347px;
          background-size: 451px 347px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/pro_apps_medium.png?1646363640215);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-performance_icon_m1_max {
          width: 222px;
          height: 222px;
          background-size: 222px 222px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/performance_icon_m1_max_medium.png?1646363640215);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-accessories_mouse {
          width: 101px;
          height: 195px;
          background-size: 101px 195px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/accessories_mouse_medium.png?1646363640215);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-why_mac_icon_connectivity {
          width: 54px;
          height: 42px;
          background-size: 54px 42px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/why_mac_icon_connectivity_medium.png?1646363640217);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-accessories_keyboard {
          width: 665px;
          height: 218px;
          background-size: 665px 218px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/accessories_keyboard_medium.png?1646363640218);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-connectivity {
          width: 482px;
          height: 487px;
          background-size: 482px 487px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/connectivity_medium.png?1646363640218);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-accessories_trackpad {
          width: 241px;
          height: 173px;
          background-size: 241px 173px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/accessories_trackpad_medium_2x.png?1646363640206);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-studio_display {
          width: 650px;
          height: 332px;
          background-size: 650px 332px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/studio_display_medium_2x.png?1646363640207);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-why_mac_icon_m1 {
          width: 92px;
          height: 42px;
          background-size: 92px 42px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/why_mac_icon_m1_medium_2x.png?1646363640208);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-flex_accessories {
          width: 267px;
          height: 267px;
          background-size: 267px 267px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/flex_accessories_medium_2x.png?1646363640209);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-performance_icon_m1_max {
          width: 222px;
          height: 222px;
          background-size: 222px 222px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/performance_icon_m1_max_medium_2x.png?1646363640210);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-studio_display_icon {
          width: 81px;
          height: 36px;
          background-size: 81px 36px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/studio_display_icon_medium_2x.png?1646363640211);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-pro_apps {
          width: 451px;
          height: 347px;
          background-size: 451px 347px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/pro_apps_medium_2x.png?1646363640211);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-hero {
          width: 482px;
          height: 236px;
          background-size: 482px 236px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/hero_medium_2x.png?1646363640212);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-hero_logo {
          width: 137px;
          height: 21px;
          background-size: 137px 21px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/hero_logo_medium_2x.png?1646363640212);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-flex_applecare {
          width: 322px;
          height: 160px;
          background-size: 322px 160px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/flex_applecare_medium_2x.png?1646363640213);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-why_mac_icon_connectivity {
          width: 54px;
          height: 42px;
          background-size: 54px 42px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/why_mac_icon_connectivity_medium_2x.png?1646363640214);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-flex_icon_applecare {
          width: 14px;
          height: 14px;
          background-size: 14px 14px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/flex_icon_applecare_medium_2x.png?1646363640214);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-performance_icon_m1_ultra {
          width: 223px;
          height: 222px;
          background-size: 223px 222px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/performance_icon_m1_ultra_medium_2x.png?1646363640215);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-accessories_mouse {
          width: 101px;
          height: 195px;
          background-size: 101px 195px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/accessories_mouse_medium_2x.png?1646363640215);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-why_mac_icon_ease {
          width: 50px;
          height: 42px;
          background-size: 50px 42px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/why_mac_icon_ease_medium_2x.png?1646363640215);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-accessories_keyboard {
          width: 665px;
          height: 218px;
          background-size: 665px 218px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/accessories_keyboard_medium_2x.png?1646363640217);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-connectivity {
          width: 482px;
          height: 487px;
          background-size: 482px 487px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/connectivity_medium_2x.png?1646363640219);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-design {
          width: 1202px;
          height: 374px;
          background-size: 1202px 374px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/design_medium_2x.png?1646363640219);
        }
      }

      @media only screen and (max-width:734px) {
        .image-studio_display_icon {
          width: 70px;
          height: 31px;
          background-size: 70px 31px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/studio_display_icon_small.png?1646363640206);
        }
      }

      @media only screen and (max-width:734px) {
        .image-hero_logo {
          width: 115px;
          height: 18px;
          background-size: 115px 18px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/hero_logo_small.png?1646363640206);
        }
      }

      @media only screen and (max-width:734px) {
        .image-performance_icon_m1_max {
          width: 222px;
          height: 224px;
          background-size: 222px 224px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/performance_icon_m1_max_small.png?1646363640206);
        }
      }

      @media only screen and (max-width:734px) {
        .image-accessories_trackpad {
          width: 182px;
          height: 131px;
          background-size: 182px 131px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/accessories_trackpad_small.png?1646363640207);
        }
      }

      @media only screen and (max-width:734px) {
        .image-flex_applecare {
          width: 286px;
          height: 140px;
          background-size: 286px 140px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/flex_applecare_small.png?1646363640207);
        }
      }

      @media only screen and (max-width:734px) {
        .image-compare_mac_pro_silver {
          width: 42px;
          height: 100px;
          background-size: 42px 100px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/compare_mac_pro_silver_small.png?1646363640207);
        }
      }

      @media only screen and (max-width:734px) {
        .image-flex_accessories {
          width: 280px;
          height: 280px;
          background-size: 280px 280px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/flex_accessories_small.png?1646363640212);
        }
      }

      @media only screen and (max-width:734px) {
        .image-pro_apps {
          width: 328px;
          height: 253px;
          background-size: 328px 253px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/pro_apps_small.png?1646363640213);
        }
      }

      @media only screen and (max-width:734px) {
        .image-studio_display {
          width: 382px;
          height: 198px;
          background-size: 382px 198px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/studio_display_small.png?1646363640214);
        }
      }

      @media only screen and (max-width:734px) {
        .image-performance_icon_m1_ultra {
          width: 222px;
          height: 224px;
          background-size: 222px 224px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/performance_icon_m1_ultra_small.png?1646363640215);
        }
      }

      @media only screen and (max-width:734px) {
        .image-why_mac_icon_ease {
          width: 65px;
          height: 54px;
          background-size: 65px 54px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/why_mac_icon_ease_small.png?1646363640215);
        }
      }

      @media only screen and (max-width:734px) {
        .image-accessories_mouse {
          width: 75px;
          height: 146px;
          background-size: 75px 146px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/accessories_mouse_small.png?1646363640215);
        }
      }

      @media only screen and (max-width:734px) {
        .image-compare_mac_studio_silver {
          width: 58px;
          height: 29px;
          background-size: 58px 29px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/compare_mac_studio_silver_small.png?1646363640215);
        }
      }

      @media only screen and (max-width:734px) {
        .image-design {
          width: 327px;
          height: 92px;
          background-size: 327px 92px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/design_small.png?1646363640215);
        }
      }

      @media only screen and (max-width:734px) {
        .image-why_mac_icon_m1 {
          width: 114px;
          height: 52px;
          background-size: 114px 52px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/why_mac_icon_m1_small.png?1646363640216);
        }
      }

      @media only screen and (max-width:734px) {
        .image-connectivity {
          width: 277px;
          height: 282px;
          background-size: 277px 282px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/connectivity_small.png?1646363640216);
        }
      }

      @media only screen and (max-width:734px) {
        .image-accessories_keyboard {
          width: 509px;
          height: 183px;
          background-size: 509px 183px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/accessories_keyboard_small.png?1646363640217);
        }
      }

      @media only screen and (max-width:734px) {
        .image-compare_mac_mini_m1_2020_silver {
          width: 58px;
          height: 12px;
          background-size: 58px 12px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/compare_mac_mini_m1_2020_silver_small.png?1646363640218);
        }
      }

      @media only screen and (max-width:734px) {
        .image-why_mac_icon_connectivity {
          width: 67px;
          height: 53px;
          background-size: 67px 53px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/why_mac_icon_connectivity_small.png?1646363640218);
        }
      }

      @media only screen and (max-width:734px) {
        .image-hero {
          width: 282px;
          height: 140px;
          background-size: 282px 140px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/hero_small.png?1646363640219);
        }
      }

      @media only screen and (max-width:734px) {
        .image-flex_icon_applecare {
          width: 15px;
          height: 14px;
          background-size: 15px 14px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/flex_icon_applecare_small.png?1646363640219);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-studio_display {
          width: 382px;
          height: 198px;
          background-size: 382px 198px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/studio_display_small_2x.png?1646363640206);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-accessories_mouse {
          width: 75px;
          height: 146px;
          background-size: 75px 146px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/accessories_mouse_small_2x.png?1646363640206);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-compare_mac_mini_m1_2020_silver {
          width: 58px;
          height: 12px;
          background-size: 58px 12px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/compare_mac_mini_m1_2020_silver_small_2x.png?1646363640207);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-accessories_trackpad {
          width: 182px;
          height: 131px;
          background-size: 182px 131px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/accessories_trackpad_small_2x.png?1646363640208);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-performance_icon_m1_ultra {
          width: 222px;
          height: 224px;
          background-size: 222px 224px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/performance_icon_m1_ultra_small_2x.png?1646363640209);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-connectivity {
          width: 277px;
          height: 282px;
          background-size: 277px 282px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/connectivity_small_2x.png?1646363640211);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-hero {
          width: 282px;
          height: 140px;
          background-size: 282px 140px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/hero_small_2x.png?1646363640212);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-why_mac_icon_connectivity {
          width: 67px;
          height: 53px;
          background-size: 67px 53px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/why_mac_icon_connectivity_small_2x.png?1646363640212);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-pro_apps {
          width: 328px;
          height: 253px;
          background-size: 328px 253px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/pro_apps_small_2x.png?1646363640213);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-flex_icon_applecare {
          width: 15px;
          height: 14px;
          background-size: 15px 14px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/flex_icon_applecare_small_2x.png?1646363640213);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-accessories_keyboard {
          width: 509px;
          height: 183px;
          background-size: 509px 183px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/accessories_keyboard_small_2x.png?1646363640214);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-performance_icon_m1_max {
          width: 222px;
          height: 224px;
          background-size: 222px 224px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/performance_icon_m1_max_small_2x.png?1646363640216);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-flex_accessories {
          width: 280px;
          height: 280px;
          background-size: 280px 280px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/flex_accessories_small_2x.png?1646363640216);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-design {
          width: 327px;
          height: 92px;
          background-size: 327px 92px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/design_small_2x.png?1646363640216);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-why_mac_icon_m1 {
          width: 114px;
          height: 52px;
          background-size: 114px 52px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/why_mac_icon_m1_small_2x.png?1646363640216);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-studio_display_icon {
          width: 70px;
          height: 31px;
          background-size: 70px 31px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/studio_display_icon_small_2x.png?1646363640216);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-compare_mac_studio_silver {
          width: 58px;
          height: 29px;
          background-size: 58px 29px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/compare_mac_studio_silver_small_2x.png?1646363640216);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-hero_logo {
          width: 115px;
          height: 18px;
          background-size: 115px 18px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/hero_logo_small_2x.png?1646363640217);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-flex_applecare {
          width: 286px;
          height: 140px;
          background-size: 286px 140px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/flex_applecare_small_2x.png?1646363640218);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-compare_mac_pro_silver {
          width: 42px;
          height: 100px;
          background-size: 42px 100px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/compare_mac_pro_silver_small_2x.png?1646363640219);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-why_mac_icon_ease {
          width: 65px;
          height: 54px;
          background-size: 65px 54px;
          background-repeat: no-repeat;
          background-image:url(./files/uploads/landing_pages/mac_studio/why_mac_icon_ease_small_2x.png?1646363640219);
        }
      }

      .w6b801e {
        /* But you can break out of scoping via SCSS "@at-root" feature */
      }

      .channel-html {
        background-color: #f5f5f7;
      }

      .channel-html .channel-custom-font-custom-80-headline-super {
        font-size: 80px;
        line-height: 84px;
        letter-spacing: -0.015rem;
        font-weight: 600;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .channel-custom-font-custom-80-headline-super {
          font-size: 64px;
          line-height: 68px;
          letter-spacing: -0.009rem;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .channel-custom-font-custom-80-headline-super {
          font-size: 36px;
          line-height: 44px;
          letter-spacing: 0.004rem;
        }
      }

      .channel-html .channel-custom-font-custom-48-headline {
        font-size: 48px;
        line-height: 52px;
        letter-spacing: -0.003rem;
        font-weight: 600;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .channel-custom-font-custom-48-headline {
          font-size: 40px;
          line-height: 44px;
          letter-spacing: 0rem;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .channel-custom-font-custom-48-headline {
          font-size: 32px;
          line-height: 36px;
          letter-spacing: 0.004rem;
        }
      }

      .channel-html .channel-custom-font-custom-40-headline-reduced {
        font-size: 40px;
        line-height: 44px;
        letter-spacing: 0rem;
        font-weight: 600;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .channel-custom-font-custom-40-headline-reduced {
          font-size: 32px;
          line-height: 36px;
          letter-spacing: 0.004rem;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .channel-custom-font-custom-40-headline-reduced {
          font-size: 28px;
          line-height: 32px;
          letter-spacing: 0.007rem;
        }
      }

      .channel-html .channel-custom-font-custom-32-headline-hero {
        font-size: 32px;
        line-height: 36px;
        letter-spacing: 0.004rem;
        font-weight: 600;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .channel-custom-font-custom-32-headline-hero {
          font-size: 28px;
          line-height: 32px;
          letter-spacing: 0.007rem;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .channel-custom-font-custom-32-headline-hero {
          font-size: 19px;
          line-height: 23px;
          letter-spacing: 0.012rem;
        }
      }

      .channel-html .channel-custom-font-custom-24-eyebrow {
        font-size: 24px;
        line-height: 28px;
        letter-spacing: 0.009rem;
        font-weight: 600;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .channel-custom-font-custom-24-eyebrow {
          font-size: 21px;
          line-height: 25px;
          letter-spacing: 0.011rem;
        }
      }

      .channel-html .channel-custom-font-custom-24-intro-elevated {
        font-size: 24px;
        line-height: 32px;
        letter-spacing: 0.009rem;
        font-weight: 400;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .channel-custom-font-custom-24-intro-elevated {
          font-size: 21px;
          line-height: 29px;
          letter-spacing: 0.011rem;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .channel-custom-font-custom-24-intro-elevated {
          font-size: 19px;
          line-height: 27px;
          letter-spacing: 0.012rem;
        }
      }

      .channel-html .channel-custom-font-custom-21-eyebrow-reduced {
        font-size: 21px;
        line-height: 25px;
        letter-spacing: 0.011rem;
        font-weight: 600;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .channel-custom-font-custom-21-eyebrow-reduced {
          font-size: 19px;
          line-height: 23px;
          letter-spacing: 0.012rem;
        }
      }

      .channel-html .channel-custom-font-custom-21-intro {
        font-size: 21px;
        line-height: 29px;
        letter-spacing: 0.011rem;
        font-weight: 400;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .channel-custom-font-custom-21-intro {
          font-size: 19px;
          line-height: 27px;
          letter-spacing: 0.012rem;
        }
      }

      .channel-html .channel-custom-font-custom-17-body-reduced {
        font-size: 17px;
        line-height: 25px;
        letter-spacing: -0.022rem;
        font-weight: 400;
      }

      .channel-html .channel-custom-font-custom-17-body-reduced-flex-subhead {
        font-size: 17px;
        line-height: 25px;
        letter-spacing: -0.022rem;
        font-weight: 500;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .channel-custom-font-custom-17-body-reduced-flex-subhead {
          font-size: 14px;
          line-height: 20px;
          letter-spacing: -0.016rem;
        }
      }

      .channel-html .channel-custom-font-custom-17-body-reduced-flex {
        font-size: 17px;
        line-height: 25px;
        letter-spacing: -0.022rem;
        font-weight: 400;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .channel-custom-font-custom-17-body-reduced-flex {
          font-size: 14px;
          line-height: 20px;
          letter-spacing: -0.016rem;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .channel-custom-font-custom-17-body-reduced-flex {
          font-size: 14px;
          line-height: 20px;
          letter-spacing: -0.016rem;
        }
      }

      .channel-html .channel-custom-font-custom-17-body-tight {
        font-size: 17px;
        line-height: 21px;
        font-weight: 500;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .channel-custom-font-custom-17-body-tight {
          font-size: 17px;
          line-height: 25px;
        }
      }

      .channel-html .channel-custom-font-custom-14-body-reduced-subhead {
        font-size: 14px;
        line-height: 20px;
        letter-spacing: -0.016rem;
        font-weight: 500;
      }

      .channel-html .channel-custom-font-custom-14-body-reduced {
        font-size: 14px;
        line-height: 20px;
        letter-spacing: -0.016rem;
        font-weight: 400;
      }

      .channel-html .channel-custom-font-custom-12-sosumi-subhead {
        font-size: 12px;
        line-height: 16px;
        font-weight: 500;
      }

      .channel-html .channel-custom-font-custom-12-sosumi {
        font-size: 12px;
        line-height: 16px;
        font-weight: 400;
      }

      .channel-html .channel-custom-font-Custom-17-body-reduced-bold {
        font-size: 17px;
        line-height: 25px;
        letter-spacing: -0.022rem;
        font-weight: 550;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .channel-custom-font-Custom-17-body-reduced-bold {
          font-size: 14px;
          line-height: 20px;
        }
      }

      .channel-html .channel-custom-font-custom-29-table {
        font-size: 29px;
        line-height: 36px;
        letter-spacing: 0rem;
        font-weight: 600;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .channel-custom-font-custom-29-table {
          font-size: 21px;
          line-height: 25px;
          letter-spacing: 0rem;
          font-weight: 600;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .channel-custom-font-custom-29-table {
          font-size: 19px;
          line-height: 25px;
          letter-spacing: -0.015rem;
          font-weight: 600;
        }
      }

      .channel-html .fa908b4 {
        background-color: #ffffff;
        /** Margin */
        /** Padding */
        /** Overflow */
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .z9a22bc {
        /** alignment */
        /** Margin */
        margin-top: 81.5px;
        margin-bottom: 79.5px;
        margin-right: 0px;
        /** Padding */
        padding-left: 0px;
        padding-right: 0px;
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z9a22bc {
          margin-top: 55px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z9a22bc {
          margin-top: 49.5px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z9a22bc {
          margin-bottom: 60px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z9a22bc {
          margin-bottom: 44px;
        }
      }

      .channel-html .x746c32 {
        /** Margin */
        margin-left: 0px;
        margin-right: 0px;
        /** Padding */
        padding-left: 0px;
        padding-right: 0px;
        /** Align text*/
        text-align: center;
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .v5af1c5 {
        /** alignment */
        justify-content: center;
        /** Margin */
        margin-left: 0px;
        margin-right: 0px;
        /** Padding */
        padding-left: 0px;
        padding-right: 0px;
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .v5af1c5 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v5af1c5 {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v5af1c5 {
          padding-bottom: 0px;
        }
      }

      .channel-html .adb5135 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .y8d5222 {
        /** Margin */
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .y8d5222 {
          margin-bottom: 12px;
        }
      }

      .channel-html .k4ECF12 {
        /** alignment */
        /** Margin */
        margin-top: 0px;
        margin-bottom: 0px;
        /** Padding */
        padding-top: 0px;
        padding-bottom: 0px;
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .t65F4DA {
        /** Margin */
        margin-top: 0px;
        margin-bottom: 0px;
        /** Padding */
        padding-top: 0px;
        padding-bottom: 0px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .z9b16b1 {
        color: #1d1d1f;
        margin-top: 29.5px;
        padding-left: 85px;
        padding-right: 82px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z9b16b1 {
          margin-top: 18.5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z9b16b1 {
          margin-top: 7px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z9b16b1 {
          margin-left: -5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z9b16b1 {
          margin-right: -5px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z9b16b1 {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z9b16b1 {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z9b16b1 {
          padding-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z9b16b1 {
          padding-right: 0px;
        }
      }

      .channel-html .w4D7985 {
        /** Margin */
        margin-top: 71px;
        margin-left: 176px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w4D7985 {
          margin-top: 42px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w4D7985 {
          margin-top: 30px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w4D7985 {
          margin-left: 105px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w4D7985 {
          margin-left: -0.5px;
        }
      }

      .channel-html .w6fd73a {
        color: #1d1d1f;
        margin-top: 51px;
        padding-left: 200px;
        padding-right: 200px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w6fd73a {
          margin-top: 51px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w6fd73a {
          margin-top: 36px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w6fd73a {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w6fd73a {
          padding-left: 100px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w6fd73a {
          padding-left: 20px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w6fd73a {
          padding-right: 100px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w6fd73a {
          padding-right: 20px;
        }
      }

      .channel-html .e3364d1 {
        color: #1d1d1f;
        margin-top: 29.5px;
        margin-bottom: 22.5px;
        padding-left: 164px;
        padding-right: 164px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .e3364d1 {
          margin-top: 20px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .e3364d1 {
          margin-top: 15px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .e3364d1 {
          margin-left: 1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .e3364d1 {
          margin-bottom: 14px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .e3364d1 {
          margin-bottom: 9.5px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .e3364d1 {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .e3364d1 {
          padding-right: 0px;
        }
      }

      .channel-html .bb2da7f {
        /** Color */
        color: #6e6e73;
        border: solid 1px #6e6e73;
      }

      .channel-html .y9F02BE {
        background-color: #000000;
        /** Margin */
        /** Padding */
        /** Overflow */
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .r21D5AB {
        /** alignment */
        /** Margin */
        margin-top: 82.5px;
        margin-bottom: 54px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .r21D5AB {
          margin-top: 55px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .r21D5AB {
          margin-top: 40.5px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .r21D5AB {
          margin-bottom: 56px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .r21D5AB {
          margin-bottom: 41px;
        }
      }

      .channel-html .q379C49 {
        /** Margin */
        /** Padding */
        /** Align text*/
        text-align: center;
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .m978188 {
        color: #ffffff;
        margin-left: 3px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .m978188 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .m978188 {
          margin-left: 1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .m978188 {
          margin-left: 1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .m978188 {
          margin-bottom: 0px;
        }
      }

      .channel-html .yE30650 {
        color: #f5f5f7;
        margin-top: 10px;
        margin-left: 0px;
        padding-left: 82px;
        padding-right: 82px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .yE30650 {
          margin-top: 8px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .yE30650 {
          margin-top: 7px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .yE30650 {
          margin-left: 1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .yE30650 {
          margin-left: 1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .yE30650 {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .yE30650 {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .yE30650 {
          padding-right: 0px;
        }
      }

      .channel-html .a84A2C9 {
        color: #f5f5f7;
        margin-top: 26px;
        padding-left: 120px;
        padding-right: 120px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .a84A2C9 {
          margin-top: 24px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .a84A2C9 {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .a84A2C9 {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .a84A2C9 {
          padding-left: 60px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .a84A2C9 {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .a84A2C9 {
          padding-right: 60px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .a84A2C9 {
          padding-right: 0px;
        }
      }

      .channel-html .n489056 {
        /** alignment */
        /** Margin */
        margin-top: -0.5px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .n489056 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .n489056 {
          margin-top: 0px;
        }
      }

      .channel-html .v4CEBF4 {
        /** Margin */
        margin-top: 16.5px;
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v4CEBF4 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .v4CEBF4 {
          margin-top: 0px;
        }
      }

      .channel-html .tA60F3F {
        /** Margin */
        margin-top: 0px;
        margin-left: 145.5px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .tA60F3F {
          margin-top: -8.5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .tA60F3F {
          margin-top: -9.5px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .tA60F3F {
          margin-left: 94px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .tA60F3F {
          margin-left: 29.5px;
        }
      }

      .channel-html .vD0ED7F {
        margin-top: -38.5px;
        margin-left: 94px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .vD0ED7F {
          margin-top: -19px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .vD0ED7F {
          margin-top: -15px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .vD0ED7F {
          margin-left: 68px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .vD0ED7F {
          margin-left: 1px;
        }
      }

      .channel-html .n40F191 {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .eB71FF2 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .a9F735A {
        color: #ffffff;
      }

      .channel-html .a9F735A {
        background: linear-gradient(230deg, #622CAB 30%, #E8D8FF 80%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }

      .channel-html .a9F735A [data-no-gradient] {
        background: none;
        -webkit-text-fill-color: #1d1d1f;
      }

      .channel-html .a9F735A * {
        background: inherit;
      }

      .channel-html .mB6EA7D {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .d3F83E4 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .aD9E1C1 {
        color: #ffffff;
      }

      .channel-html .aD9E1C1 {
        background: linear-gradient(230deg, #622CAB 22%, #E8D8FF 78%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }

      .channel-html .aD9E1C1 [data-no-gradient] {
        background: none;
        -webkit-text-fill-color: #1d1d1f;
      }

      .channel-html .aD9E1C1 * {
        background: inherit;
      }

      .channel-html .i6A5F7B {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .gB73506 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .c9FA8A9 {
        color: #ffffff;
      }

      .channel-html .c9FA8A9 {
        background: linear-gradient(230deg, #622CAB 15%, #E8D8FF 72%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }

      .channel-html .c9FA8A9 [data-no-gradient] {
        background: none;
        -webkit-text-fill-color: #1d1d1f;
      }

      .channel-html .c9FA8A9 * {
        background: inherit;
      }

      .channel-html .o7C8165 {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .b91C3AE {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .w1DEE01 {
        color: #ffffff;
      }

      .channel-html .w1DEE01 {
        background: linear-gradient(230deg, #622CAB 16%, #E8D8FF 65%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }

      .channel-html .w1DEE01 [data-no-gradient] {
        background: none;
        -webkit-text-fill-color: #1d1d1f;
      }

      .channel-html .w1DEE01 * {
        background: inherit;
      }

      .channel-html .u60FBCF {
        /** Margin */
        margin-top: 16.5px;
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .u60FBCF {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .u60FBCF {
          margin-top: 0px;
        }
      }

      .channel-html .r510381 {
        /** Margin */
        margin-left: 55px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .r510381 {
          margin-top: -8.5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .r510381 {
          margin-top: 15px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .r510381 {
          margin-left: 30px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .r510381 {
          margin-left: 29px;
        }
      }

      .channel-html .x69B4C6 {
        margin-top: -39.5px;
        margin-left: -81.5px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .x69B4C6 {
          margin-top: -19px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .x69B4C6 {
          margin-top: -16px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .x69B4C6 {
          margin-left: -60px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .x69B4C6 {
          margin-left: 0px;
        }
      }

      .channel-html .t80CF34 {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .y5CA345 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .h623314 {
        color: #ffffff;
      }

      .channel-html .h623314 {
        background: linear-gradient(230deg, #858585 22%, #FFFFFF 78%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }

      .channel-html .h623314 [data-no-gradient] {
        background: none;
        -webkit-text-fill-color: #1d1d1f;
      }

      .channel-html .h623314 * {
        background: inherit;
      }

      .channel-html .lD637B2 {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .h6CEFCB {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .wD2ECB5 {
        color: #ffffff;
      }

      .channel-html .wD2ECB5 {
        background: linear-gradient(230deg, #858585 18%, #FFFFFF 78%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }

      .channel-html .wD2ECB5 [data-no-gradient] {
        background: none;
        -webkit-text-fill-color: #1d1d1f;
      }

      .channel-html .wD2ECB5 * {
        background: inherit;
      }

      .channel-html .t26022C {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .g341041 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .bC2B62E {
        color: #ffffff;
      }

      .channel-html .bC2B62E {
        background: linear-gradient(230deg, #858585 12%, #FFFFFF 70%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }

      .channel-html .bC2B62E [data-no-gradient] {
        background: none;
        -webkit-text-fill-color: #1d1d1f;
      }

      .channel-html .bC2B62E * {
        background: inherit;
      }

      .channel-html .t89C2B2 {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .q3DB57E {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .x8ABF62 {
        color: #ffffff;
      }

      .channel-html .x8ABF62 {
        background: linear-gradient(230deg, #858585 12%, #FFFFFF 68%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }

      .channel-html .x8ABF62 [data-no-gradient] {
        background: none;
        -webkit-text-fill-color: #1d1d1f;
      }

      .channel-html .x8ABF62 * {
        background: inherit;
      }

      .channel-html .y9F5832 {
        background-color: #ffffff;
        /** Margin */
        /** Padding */
        /** Overflow */
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .y9F5832 {
          margin-top: -1px;
        }
      }

      .channel-html .sBFABE8 {
        /** alignment */
        /** Margin */
        margin-bottom: 52.5px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .sBFABE8 {
          justify-content: center;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .sBFABE8 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .sBFABE8 {
          margin-bottom: 53px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .sBFABE8 {
          margin-bottom: 37.5px;
        }
      }

      .channel-html .r69D461 {
        /** Margin */
        margin-top: 76px;
        /** Padding */
        padding-top: 0px;
        /** Align text*/
        /** Flexbox order*/
        order: 2;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .r69D461 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .r69D461 {
          margin-left: 0px;
        }
      }

      .channel-html .z240029 {
        color: #1d1d1f;
        margin-top: 0px;
        margin-left: -1px;
        padding-right: 50%;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z240029 {
          margin-top: 51px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z240029 {
          margin-top: 23px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z240029 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z240029 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z240029 {
          margin-bottom: 6px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z240029 {
          padding-right: 0px;
        }
      }

      .channel-html .n0CCA35 {
        color: #1d1d1f;
        margin-top: 10px;
        margin-left: -2px;
        padding-right: 125px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .n0CCA35 {
          margin-top: 8px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .n0CCA35 {
          margin-top: 7px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .n0CCA35 {
          margin-left: -2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .n0CCA35 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .n0CCA35 {
          padding-right: 100px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .n0CCA35 {
          padding-right: 80px;
        }
      }

      .channel-html .lCD67DB {
        /** Margin */
        margin-top: 78px;
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        order: 3;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .lCD67DB {
          margin-top: 50px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .lCD67DB {
          margin-top: 25px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .lCD67DB {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .lCD67DB {
          padding-left: 12px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .lCD67DB {
          padding-left: 0px;
        }
      }

      .channel-html .o1DD64F {
        color: #1d1d1f;
        margin-top: -1px;
        margin-left: 0px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .o1DD64F {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .o1DD64F {
          margin-right: -8px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .o1DD64F {
          margin-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .o1DD64F {
          padding-right: 10px;
        }
      }

      .channel-html .iB47C12 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        order: 1;
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .yB01183 {
        /** Margin */
        margin-top: 0px;
        margin-left: -787px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .yB01183 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .yB01183 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .yB01183 {
          margin-left: -532px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .yB01183 {
          margin-left: -116px;
        }
      }

      .channel-html .yA2A76C {
        background-color: #f5f5f7;
        /** Margin */
        /** Padding */
        /** Overflow */
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .n427F78 {
        /** alignment */
        /** Margin */
        margin-top: 76px;
        margin-bottom: 53px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .n427F78 {
          justify-content: center;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .n427F78 {
          margin-top: 54px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .n427F78 {
          margin-top: 40px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .n427F78 {
          margin-bottom: 54.5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .n427F78 {
          margin-bottom: 39px;
        }
      }

      .channel-html .c4E75E3 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .q937487 {
        color: #1d1d1f;
        margin-top: 1px;
        margin-left: -0.5px;
        margin-bottom: 10px;
        padding-right: 50%;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q937487 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q937487 {
          margin-left: 0.5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q937487 {
          margin-bottom: 7px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q937487 {
          padding-right: 0px;
        }
      }

      .channel-html .wBCF9D7 {
        /** alignment */
        align-items: flex-start;
        /** Margin */
        margin-top: 0px;
        margin-bottom: 71px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .wBCF9D7 {
          align-items: flex-start;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .wBCF9D7 {
          align-items: flex-start;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .wBCF9D7 {
          margin-bottom: 53px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .wBCF9D7 {
          margin-bottom: 0px;
        }
      }

      .channel-html .v618821 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .d3F4182 {
        color: #1d1d1f;
        margin-top: 0px;
        margin-left: -2px;
        padding-right: 20px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .d3F4182 {
          margin-top: -2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .d3F4182 {
          margin-top: 0.5px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .d3F4182 {
          margin-left: -1.5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .d3F4182 {
          margin-left: -1px;
        }
      }

      .channel-html .o538E91 {
        /** Margin */
        margin-top: -37px;
        margin-left: 0px;
        /** Padding */
        padding-left: 0px;
        padding-right: 0px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .o538E91 {
          margin-top: 24px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .o538E91 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .o538E91 {
          margin-right: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .o538E91 {
          padding-left: 14px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .o538E91 {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .o538E91 {
          padding-right: 0px;
        }
      }

      .channel-html .y8F1E77 {
        color: #1d1d1f;
        margin-top: 0.5px;
        margin-left: -1px;
        padding-right: 6px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .y8F1E77 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .y8F1E77 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .y8F1E77 {
          margin-left: -2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .y8F1E77 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .y8F1E77 {
          margin-right: -5px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .y8F1E77 {
          padding-right: 0px;
        }
      }

      .channel-html .gB0E2A6 {
        /** Margin */
        margin-top: 92px;
        margin-left: 176px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .gB0E2A6 {
          margin-top: -0.5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .gB0E2A6 {
          margin-top: 31.5px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .gB0E2A6 {
          margin-left: 105px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .gB0E2A6 {
          margin-left: 1.5px;
        }
      }

      .channel-html .e5B97CA {
        /** alignment */
        /** Margin */
        margin-top: 59px;
        margin-left: 0px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .e5B97CA {
          margin-top: 41px;
        }
      }

      .channel-html .x73C895 {
        /** Margin */
        /** Padding */
        padding-right: 45px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .c405AE7 {
        margin-left: -1px;
        margin-bottom: 0px;
        padding-left: 1px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c405AE7 {
          margin-left: 15.5px;
        }
      }

      .channel-html .lE54F27 {
        justify-content: flex-start;
        /** Margin */
        margin-top: -4.5px;
        margin-left: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .lE54F27 {
          margin-left: 17.5px;
        }
      }

      .channel-html .lE54F27 .liner {
        background-color: #d2d2d7;
        width: 75%;
        height: 1px;
        opacity: 1;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .lE54F27 .liner {
          width: 181px;
        }
      }

      .channel-html .dE7A63C {
        margin-top: 2.5px;
        margin-left: 0px;
      }

      .channel-html .hDAF40D {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .f9785C0 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .q6C02BC {
        color: #1d1d1f;
        margin-left: 0px;
        margin-bottom: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q6C02BC {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q6C02BC {
          margin-left: 16px;
        }
      }

      .channel-html .x21322F {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .w13DFD2 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .i914860 {
        color: #1d1d1f;
        margin-top: 0px;
        margin-left: 0px;
      }

      .channel-html .r35E667 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .u5B47EA {
        margin-left: -1px;
        margin-bottom: 0px;
        padding-left: 2px;
      }

      .channel-html .wF3833B {
        justify-content: flex-start;
        /** Margin */
        margin-top: -4.5px;
        margin-left: 0px;
      }

      .channel-html .wF3833B .liner {
        background-color: #d2d2d7;
        width: 100%;
        height: 1px;
        opacity: 1;
      }

      .channel-html .d90AC49 {
        /** alignment */
        /** Margin */
        margin-top: 1.5px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .cFD8C02 {
        /** Margin */
        margin-left: 0px;
        /** Padding */
        padding-right: 45px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .v1B325A {
        margin-top: 1px;
        margin-left: 0px;
      }

      .channel-html .vF7F6D0 {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .m2EC67E {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .e6A5CE0 {
        color: #1d1d1f;
        margin-left: 0px;
      }

      .channel-html .yC66CC8 {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .kE67BFD {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .c77374F {
        color: #1d1d1f;
        margin-top: 0px;
        margin-left: 0px;
      }

      .channel-html .j264C2A {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .e1BD40D {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .u023F3C {
        color: #1d1d1f;
        margin-top: 0px;
        margin-left: 0px;
      }

      .channel-html .y3272A7 {
        /** Margin */
        margin-left: 0px;
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .tC647FD {
        margin-top: 1px;
        margin-left: 0px;
      }

      .channel-html .kF0F745 {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .c06E1C0 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .l051447 {
        color: #1d1d1f;
        margin-left: -2px;
      }

      .channel-html .vF524FC {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .n7926F4 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .cC41B73 {
        color: #1d1d1f;
        margin-top: 0px;
        margin-left: -2px;
      }

      .channel-html .h84AAE8 {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .h84AAE8 {
          margin-top: 39px;
        }
      }

      .channel-html .e5A6826 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .e5A6826 {
          padding-right: 26px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .i6BE3BA {
          margin-left: 20px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .i6BE3BA {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .i6BE3BA {
          padding-bottom: 0px;
        }
      }

      .channel-html .kB93473 {
        justify-content: flex-start;
        /** Margin */
        margin-top: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .kB93473 {
          justify-content: flex-start;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .kB93473 {
          margin-top: -4.5px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .kB93473 {
          margin-left: 19px;
        }
      }

      .channel-html .kB93473 .liner {
        background-color: #d2d2d7;
        width: 25%;
        height: 1px;
        opacity: 1;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .kB93473 .liner {
          width: 181px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .m0CEAC4 {
          margin-top: 2px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .m0CEAC4 {
          margin-left: 19px;
        }
      }

      .channel-html .o2FB231 {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .aE3740E {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .pB22EAB {
        margin-bottom: 0px;
        padding-bottom: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .pB22EAB {
          margin-top: 0.5px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .pB22EAB {
          margin-left: 1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .pB22EAB {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .pB22EAB {
          padding-bottom: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .fC2F1B3 {
          margin-top: 0px;
        }
      }

      .channel-html .sCB068F {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .xC2A9C4 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .nE85D00 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .nE85D00 {
          margin-left: 1px;
        }
      }

      .channel-html .w44E9E0 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w44E9E0 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .yF28F81 {
          margin-left: 0px;
        }
      }

      .channel-html .o706F4B {
        justify-content: flex-start;
        /** Margin */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .o706F4B {
          justify-content: flex-start;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .o706F4B {
          margin-top: -4.5px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .o706F4B {
          margin-left: 1px;
        }
      }

      .channel-html .o706F4B .liner {
        background-color: #d2d2d7;
        width: 25%;
        height: 1px;
        opacity: 1;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .o706F4B .liner {
          width: 442px;
        }
      }

      .channel-html .n5332B6 {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .n5332B6 {
          margin-top: 2px;
        }
      }

      .channel-html .tEE7915 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .tEE7915 {
          padding-right: 26px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .nCC33D6 {
          margin-left: 0.5px;
        }
      }

      .channel-html .fCCD568 {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .n6315F2 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .iC70621 {
          margin-top: 0.5px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .iC70621 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w09C9A2 {
          margin-top: 0px;
        }
      }

      .channel-html .v318881 {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .b590A55 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .h3D5B77 {
          margin-top: 0px;
        }
      }

      .channel-html .u72F02A {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .tD4C2E7 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q58B68F {
          margin-top: 0px;
        }
      }

      .channel-html .sE6B6D2 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .m40C299 {
          margin-left: 0px;
        }
      }

      .channel-html .sD6A150 {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .e232822 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .g733F27 {
          margin-top: 0.5px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .g733F27 {
          margin-left: 7px;
        }
      }

      .channel-html .s336D9B {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .x371EE2 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .o027EB5 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .o027EB5 {
          margin-left: 7px;
        }
      }

      .channel-html .pB5762C {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .pB5762C {
          margin-top: 37px;
        }
      }

      .channel-html .m6C630B {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .vD97DC1 {
          margin-left: 0px;
        }
      }

      .channel-html .cEAC888 {
        justify-content: flex-start;
        /** Margin */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .cEAC888 {
          margin-top: -8px;
        }
      }

      .channel-html .cEAC888 .liner {
        background-color: #d2d2d7;
        width: 100%;
        height: 1px;
        opacity: 1;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .cEAC888 .liner {
          width: 280px;
        }
      }

      .channel-html .k6EC1B6 {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .k6EC1B6 {
          margin-top: 5px;
        }
      }

      .channel-html .u47333C {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .u47333C {
          padding-right: 7px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .k566B9A {
          margin-left: 0px;
        }
      }

      .channel-html .g599AB0 {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .f2BD75D {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .b3E0D49 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .b3E0D49 {
          margin-top: 14.5px;
        }
      }

      .channel-html .n0DA196 {
        justify-content: flex-start;
        /** Margin */
        margin-left: 1px;
      }

      .channel-html .n0DA196 .liner {
        background-color: #d2d2d7;
        width: 1px;
        height: 40px;
        opacity: 1;
      }

      .channel-html .rA4DBD2 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .rA4DBD2 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .rA4DBD2 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .rA4DBD2 {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .a96111F {
          margin-left: -8px;
        }
      }

      .channel-html .hBDEB25 {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .k9C88B8 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .i794E4C {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .r645B2C {
          margin-top: 21px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .r645B2C {
          margin-left: 0px;
        }
      }

      .channel-html .a6BA1DB {
        justify-content: flex-start;
        /** Margin */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .a6BA1DB {
          margin-top: -7.5px;
        }
      }

      .channel-html .a6BA1DB .liner {
        background-color: #d2d2d7;
        width: 25%;
        height: 1px;
        opacity: 1;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .a6BA1DB .liner {
          width: 280px;
        }
      }

      .channel-html .k60DC4C {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .k60DC4C {
          margin-top: 4.5px;
        }
      }

      .channel-html .s8C499B {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .s8C499B {
          padding-right: 10px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .k6D35D4 {
          margin-left: -0.5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z369110 {
          margin-bottom: 0px;
        }
      }

      .channel-html .p68C52C {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .s6F16A6 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q52C978 {
          margin-left: 1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .jC10AE8 {
          margin-top: 0px;
        }
      }

      .channel-html .b6D0D72 {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .rEC1F74 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .lA24910 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .lA24910 {
          margin-left: 1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .l9A3A3A {
          margin-top: 0px;
        }
      }

      .channel-html .k231AD9 {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .l4FAA4B {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .uD612F9 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .uD612F9 {
          margin-left: 1px;
        }
      }

      .channel-html .mF04D25 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .mF04D25 {
          margin-top: 40px;
        }
      }

      .channel-html .u4940EB {
        justify-content: flex-start;
        /** Margin */
        margin-left: 1px;
      }

      .channel-html .u4940EB .liner {
        background-color: #d2d2d7;
        width: 1px;
        height: 89px;
        opacity: 1;
      }

      .channel-html .t026BDB {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t026BDB {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t026BDB {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .cE3FF49 {
          margin-left: -8px;
        }
      }

      .channel-html .i2243DC {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .c6F8926 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .rF02165 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .rF02165 {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .x72A28A {
          margin-top: 0px;
        }
      }

      .channel-html .q721901 {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .r29EA96 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .u2C2B1C {
          margin-top: 0px;
        }
      }

      .channel-html .jDDFFD5 {
        background-color: #ffffff;
        /** Margin */
        /** Padding */
        /** Overflow */
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .jDDFFD5 {
          overflow: hidden;
        }
      }

      .channel-html .jA8DEDD {
        /** alignment */
        /** Margin */
        margin-top: 99px;
        margin-bottom: 59px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .jA8DEDD {
          justify-content: center;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .jA8DEDD {
          margin-top: 75px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .jA8DEDD {
          margin-top: 58px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .jA8DEDD {
          margin-bottom: 52.5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .jA8DEDD {
          margin-bottom: 40px;
        }
      }

      .channel-html .lD33CF3 {
        /** Margin */
        margin-top: 60px;
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        order: 2;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .lD33CF3 {
          margin-top: 28px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .lD33CF3 {
          margin-top: 22px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .lD33CF3 {
          margin-bottom: 19px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .lD33CF3 {
          order: 2;
        }
      }

      .channel-html .oE47246 {
        color: #1d1d1f;
        margin-left: -1px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .oE47246 {
          margin-top: 1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .oE47246 {
          margin-bottom: 8px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .oE47246 {
          margin-bottom: 7px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .oE47246 {
          padding-right: 40px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .oE47246 {
          padding-right: 0px;
        }
      }

      .channel-html .n417941 {
        color: #1d1d1f;
        margin-top: 12px;
        margin-left: -2px;
        padding-right: 100px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .n417941 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .n417941 {
          margin-left: -1.5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .n417941 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .n417941 {
          padding-right: 0px;
        }
      }

      .channel-html .oF9320C {
        /** Margin */
        margin-top: 61px;
        margin-bottom: 0px;
        /** Padding */
        padding-bottom: 0px;
        padding-right: 8px;
        /** Align text*/
        /** Flexbox order*/
        order: 3;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .oF9320C {
          margin-top: 26px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .oF9320C {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .oF9320C {
          padding-left: 11px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .oF9320C {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .oF9320C {
          order: 3;
        }
      }

      .channel-html .e77DD2A {
        color: #1d1d1f;
        margin-top: 0px;
        margin-right: 0px;
        padding-right: 0px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .e77DD2A {
          margin-top: -0.5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .e77DD2A {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .e77DD2A {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .e77DD2A {
          margin-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .e77DD2A {
          margin-right: -7px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .e77DD2A {
          padding-bottom: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .e77DD2A {
          padding-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .e77DD2A {
          padding-right: 0px;
        }
      }

      .channel-html .t794026 {
        /** alignment */
        /** Margin */
        margin-top: 20px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .t794026 {
          margin-top: 36px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t794026 {
          margin-top: 21.5px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .t794026 {
          margin-left: 0px;
        }
      }

      .channel-html .w37CCB1 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .k4D57F6 {
        /** Margin */
        margin-top: 1px;
        margin-left: -1.5px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .k4D57F6 {
          margin-top: 13px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .k4D57F6 {
          margin-top: 15.5px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .k4D57F6 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .k4D57F6 {
          margin-left: -1.5px;
        }
      }

      .channel-html .j8F5130 {
        /** Margin */
        margin-top: 2px;
        margin-left: 0px;
        /** Padding */
        padding-left: 0px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .j8F5130 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .j8F5130 {
          padding-left: 1px;
        }
      }

      .channel-html .eA63EB9 {
        margin-top: 1.5px;
        margin-bottom: 0px;
        padding-left: 18px;
        padding-bottom: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .eA63EB9 {
          margin-top: -7px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .eA63EB9 {
          padding-left: 14px;
        }
      }

      .channel-html .j0CAA8D {
        color: #86868b;
        margin-top: 0px;
        padding-left: 18px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .j0CAA8D {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .j0CAA8D {
          padding-left: 14px;
        }
      }

      .channel-html .z8D8FCE {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z8D8FCE {
          margin-top: 2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z8D8FCE {
          padding-left: 12px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .iE0C21D {
          margin-top: 0px;
        }
      }

      .channel-html .d088AB0 {
        color: #86868b;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .d088AB0 {
          margin-top: 0px;
        }
      }

      .channel-html .fDA2A53 {
        /** Margin */
        margin-top: -1px;
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        order: 1;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .fDA2A53 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .fDA2A53 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .fDA2A53 {
          order: 1;
        }
      }

      .channel-html .lCEC15A {
        /** Margin */
        margin-top: 0px;
        margin-left: 28px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .lCEC15A {
          margin-top: 1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .lCEC15A {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .lCEC15A {
          margin-left: 21px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .lCEC15A {
          margin-left: 0px;
        }
      }

      .channel-html .q3B5771 {
        background-color: #f5f5f7;
        /** Margin */
        /** Padding */
        /** Overflow */
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q3B5771 {
          overflow: hidden;
        }
      }

      .channel-html .r33A754 {
        /** alignment */
        /** Margin */
        margin-top: 77px;
        margin-bottom: 53px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .r33A754 {
          justify-content: center;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .r33A754 {
          margin-top: 55px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .r33A754 {
          margin-top: 40.5px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .r33A754 {
          margin-bottom: 52.5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .r33A754 {
          margin-bottom: 43px;
        }
      }

      .channel-html .aF33675 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .b669A41 {
        color: #1d1d1f;
        margin-left: -0.5px;
        margin-bottom: 9px;
        padding-right: 50%;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .b669A41 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .b669A41 {
          margin-left: -0.5px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .b669A41 {
          margin-bottom: 8px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .b669A41 {
          margin-bottom: 7px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .b669A41 {
          padding-right: 0px;
        }
      }

      .channel-html .eBBDED3 {
        /** alignment */
        align-items: flex-start;
        /** Margin */
        margin-top: 0px;
        margin-bottom: 0px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .eBBDED3 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .eBBDED3 {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .eBBDED3 {
          margin-bottom: 0px;
        }
      }

      .channel-html .s97C0F9 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .s97C0F9 {
          margin-bottom: 24px;
        }
      }

      .channel-html .uB79E6E {
        color: #1d1d1f;
        margin-top: 0px;
        margin-left: -2px;
        padding-right: 80px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .uB79E6E {
          margin-left: -2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .uB79E6E {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .uB79E6E {
          padding-right: 60px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .uB79E6E {
          padding-right: 0px;
        }
      }

      .channel-html .y1FA7DA {
        /** Margin */
        margin-top: -36px;
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .y1FA7DA {
          margin-top: -35px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .y1FA7DA {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .y1FA7DA {
          padding-left: 11px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .y1FA7DA {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .y1FA7DA {
          padding-right: 1px;
        }
      }

      .channel-html .y4A05A9 {
        color: #1d1d1f;
        margin-top: 0px;
        margin-left: 0px;
        padding-right: 27px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .y4A05A9 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .y4A05A9 {
          margin-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .y4A05A9 {
          margin-right: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .y4A05A9 {
          padding-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .y4A05A9 {
          padding-right: 5px;
        }
      }

      .channel-html .j76D7BC {
        /** Margin */
        margin-top: 101px;
        margin-left: 173px;
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .j76D7BC {
          margin-top: 34px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .j76D7BC {
          margin-left: 86px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .j76D7BC {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .j76D7BC {
          padding-bottom: 0px;
        }
      }

      .channel-html .w7E5738 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w7E5738 {
          margin-top: 28px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w7E5738 {
          margin-left: 93px;
        }
      }

      .channel-html .jEBE038 {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .j70CD81 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .n8D855F {
        /** Margin */
        margin-top: -1px;
        margin-left: -354px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .n8D855F {
          margin-top: 2.5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .n8D855F {
          margin-top: 2px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .n8D855F {
          margin-left: -333.5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .n8D855F {
          margin-left: -228px;
        }
      }

      .channel-html .r970C07 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .x2FEC73 {
        /** Margin */
        margin-top: 37px;
        margin-left: 70.5px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .x2FEC73 {
          margin-top: 31px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .x2FEC73 {
          margin-top: 13px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .x2FEC73 {
          margin-left: 37px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .x2FEC73 {
          margin-left: 3.5px;
        }
      }

      .channel-html .vA7752F {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .x79958B {
        /** Margin */
        margin-top: 49.5px;
        margin-left: 21.5px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .x79958B {
          margin-top: 42px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .x79958B {
          margin-top: 19.5px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .x79958B {
          margin-left: 21px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .x79958B {
          margin-left: 5px;
        }
      }

      .channel-html .j6EAE5C {
        /** alignment */
        /** Margin */
        margin-top: 14px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .j6EAE5C {
          margin-top: 20.5px;
        }
      }

      .channel-html .y975168 {
        /** Margin */
        /** Padding */
        /** Align text*/
        text-align: end;
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .kA53C3A {
        padding-right: 10px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .kA53C3A {
          padding-right: 15px;
        }
      }

      .channel-html .q2C27C0 {
        /** Margin */
        /** Padding */
        /** Align text*/
        text-align: center;
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .uA351EC {
        margin-left: 19px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .uA351EC {
          margin-left: 4px;
        }
      }

      .channel-html .xE560C2 {
        /** Margin */
        /** Padding */
        /** Align text*/
        text-align: start;
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .x98EA41 {
        margin-left: 21.5px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .x98EA41 {
          margin-left: 22px;
        }
      }

      .channel-html .sD902D3 {
        background-color: #ffffff;
        /** Margin */
        margin-bottom: 50px;
        /** Padding */
        /** Overflow */
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .sD902D3 {
          margin-bottom: 0px;
        }
      }

      .channel-html .z4A503F {
        /** alignment */
        align-items: center;
        /** Margin */
        margin-top: 59px;
        margin-bottom: 59px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z4A503F {
          align-items: center;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z4A503F {
          align-items: center;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z4A503F {
          justify-content: center;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z4A503F {
          margin-top: 46px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z4A503F {
          margin-top: 40.5px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z4A503F {
          margin-bottom: 45px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z4A503F {
          margin-bottom: 43px;
        }
      }

      .channel-html .bF89A38 {
        /** Margin */
        margin-top: 0.5px;
        margin-left: -2px;
        /** Padding */
        /** Align text*/
        text-align: start;
        /** Flexbox order*/
        order: 2;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .bF89A38 {
          margin-top: 3px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .bF89A38 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .bF89A38 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .bF89A38 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .bF89A38 {
          padding-left: 9px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .bF89A38 {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .bF89A38 {
          order: 2;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .bF89A38 {
          order: 1;
        }
      }

      .channel-html .x6345E7 {
        color: #1d1d1f;
        margin-left: 2px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .x6345E7 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .x6345E7 {
          margin-left: 2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .x6345E7 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .x6345E7 {
          margin-bottom: 8px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .x6345E7 {
          margin-bottom: 7px;
        }
      }

      .channel-html .z024A91 {
        color: #1d1d1f;
        margin-top: 10px;
        padding-right: 74px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z024A91 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z024A91 {
          margin-left: 1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z024A91 {
          margin-left: -1px;
        }
      }

      .channel-html .aA0F756 {
        color: #1d1d1f;
        margin-top: 25px;
        margin-left: 2px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .aA0F756 {
          margin-top: 25px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .aA0F756 {
          margin-top: 23.5px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .aA0F756 {
          margin-left: 2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .aA0F756 {
          margin-left: -0.5px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .aA0F756 {
          padding-right: 4px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .aA0F756 {
          padding-right: 0px;
        }
      }

      .channel-html .iA25070 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        order: 1;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .iA25070 {
          margin-top: 22px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .iA25070 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .iA25070 {
          margin-bottom: 22px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .iA25070 {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .iA25070 {
          order: 1;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .iA25070 {
          order: 2;
        }
      }

      .channel-html .k214126 {
        /** Margin */
        margin-left: -113.5px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .k214126 {
          margin-top: 37.5px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .k214126 {
          margin-left: -162px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .k214126 {
          margin-left: -69px;
        }
      }

      .channel-html .w6c736d {
        background-color: #f5f5f7;
        /** Margin */
        margin-top: 0px;
        margin-bottom: 0px;
        /** Padding */
        padding-top: 0px;
        padding-bottom: 0px;
        /** Overflow */
        overflow: hidden;
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .q0a3e94 {
        background-color: #ffffff;
        /** alignment */
        /** Margin */
        margin-top: 0px;
        /** Padding */
        padding-top: 60px;
        padding-bottom: 59px;
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q0a3e94 {
          margin-top: 50px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q0a3e94 {
          margin-top: 50px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q0a3e94 {
          margin-left: -50vw;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q0a3e94 {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q0a3e94 {
          margin-right: -50vw;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q0a3e94 {
          padding-top: 50px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q0a3e94 {
          padding-top: 41px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q0a3e94 {
          padding-left: 50vw;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q0a3e94 {
          padding-bottom: 50px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q0a3e94 {
          padding-bottom: 42px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q0a3e94 {
          padding-right: 50vw;
        }
      }

      .channel-html .q0a3e94.large-display-bleed::before,
      .channel-html .q0a3e94.large-display-bleed::after {
        background-color: #ffffff;
      }

      .channel-html .q0a3e94.medium-display-bleed::before,
      .channel-html .q0a3e94.medium-display-bleed::after {
        background-color: #ffffff;
      }

      .channel-html .q0a3e94.small-display-bleed::before,
      .channel-html .q0a3e94.small-display-bleed::after {
        background-color: #ffffff;
      }

      .channel-html .q02c985 {
        /** Margin */
        margin-bottom: 35px;
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q02c985 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q02c985 {
          margin-bottom: 37px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q02c985 {
          margin-bottom: 0px;
        }
      }

      .channel-html .f89a263 {
        color: #1d1d1f;
        margin-left: 0px;
        margin-bottom: 8px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .f89a263 {
          margin-top: 1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .f89a263 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .f89a263 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .f89a263 {
          margin-bottom: 6px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .f89a263 {
          margin-bottom: 7px;
        }
      }

      .channel-html .a0c7426 {
        color: #1d1d1f;
        margin-top: 0px;
        margin-left: -1px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .a0c7426 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .a0c7426 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .a0c7426 {
          margin-right: -10px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .a0c7426 {
          padding-right: 0px;
        }
      }

      .channel-html .ecd1114 {
        /** Margin */
        margin-top: 0px;
        margin-left: -1px;
        /** Padding */
        padding-right: 41px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .ecd1114 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .ecd1114 {
          margin-top: 29.5px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .ecd1114 {
          padding-right: 29px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .ecd1114 {
          padding-right: 10px;
        }
      }

      .channel-html .w6189bf {
        /** Margin */
        margin-top: 0px;
        margin-left: 0.5px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w6189bf {
          margin-top: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w6189bf {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w6189bf {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w6189bf {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w6189bf {
          margin-bottom: 0px;
        }
      }

      .channel-html .s2fd10f {
        color: #1d1d1f;
        margin-top: 14.5px;
        margin-left: 1.5px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .s2fd10f {
          margin-top: 14px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .s2fd10f {
          margin-top: 14px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .s2fd10f {
          margin-left: 1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .s2fd10f {
          margin-left: 1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .s2fd10f {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .s2fd10f {
          margin-bottom: 0px;
        }
      }

      .channel-html .z9a22cb {
        color: #86868b;
        margin-top: 1px;
        margin-left: 2px;
        padding-right: 7px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z9a22cb {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z9a22cb {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z9a22cb {
          margin-left: 1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z9a22cb {
          margin-left: 1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z9a22cb {
          padding-right: 0px;
        }
      }

      .channel-html .c3c737c {
        /** Margin */
        /** Padding */
        padding-right: 41px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c3c737c {
          margin-top: 31px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c3c737c {
          padding-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c3c737c {
          padding-right: 5px;
        }
      }

      .channel-html .x7471c6 {
        /** Margin */
        margin-top: 0px;
        margin-left: 1.5px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .x7471c6 {
          margin-top: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .x7471c6 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .x7471c6 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .x7471c6 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .x7471c6 {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .x7471c6 {
          margin-bottom: 0px;
        }
      }

      .channel-html .q05c363 {
        color: #1d1d1f;
        margin-top: 14px;
        margin-left: 2px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q05c363 {
          margin-top: 14px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q05c363 {
          margin-top: 13.5px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q05c363 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q05c363 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q05c363 {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q05c363 {
          margin-bottom: 0px;
        }
      }

      .channel-html .t3cf362 {
        color: #86868b;
        margin-top: 1px;
        margin-left: 2px;
        padding-right: 14px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .t3cf362 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t3cf362 {
          margin-top: 0.5px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .t3cf362 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t3cf362 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .t3cf362 {
          padding-right: 18px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t3cf362 {
          padding-right: 0px;
        }
      }

      .channel-html .ec88939 {
        /** Margin */
        margin-left: 1px;
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .ec88939 {
          margin-top: 30px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .ec88939 {
          padding-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .ec88939 {
          padding-right: 10px;
        }
      }

      .channel-html .t34db34 {
        /** Margin */
        margin-top: 0.5px;
        margin-left: 0px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .t34db34 {
          margin-top: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t34db34 {
          margin-top: -0.25px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .t34db34 {
          margin-left: -0.5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t34db34 {
          margin-left: -2px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .t34db34 {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t34db34 {
          margin-bottom: 0px;
        }
      }

      .channel-html .ea02c4b {
        color: #1d1d1f;
        margin-top: 13.5px;
        margin-left: 1px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .ea02c4b {
          margin-top: 14px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .ea02c4b {
          margin-top: 14px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .ea02c4b {
          margin-left: 1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .ea02c4b {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .ea02c4b {
          margin-bottom: 0px;
        }
      }

      .channel-html .c8278a9 {
        color: #86868b;
        margin-top: 1px;
        margin-left: 1px;
        margin-bottom: -2px;
        padding-right: 48px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c8278a9 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c8278a9 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c8278a9 {
          margin-left: 1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c8278a9 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c8278a9 {
          padding-right: 3px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c8278a9 {
          padding-right: 0px;
        }
      }

      .channel-html .c3669a0 {
        background-color: #f5f5f7;
        /** Margin */
        /** Padding */
        /** Overflow */
        overflow: hidden;
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .u4bd09c {
        background-color: #ffffff;
        /** alignment */
        /** Margin */
        margin-top: 10px;
        /** Padding */
        padding-top: 60px;
        padding-bottom: 60px;
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .u4bd09c {
          margin-top: 10px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .u4bd09c {
          margin-left: -50vw;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .u4bd09c {
          margin-right: -50vw;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .u4bd09c {
          padding-top: 50px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .u4bd09c {
          padding-top: 41px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .u4bd09c {
          padding-left: 50vw;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .u4bd09c {
          padding-bottom: 40px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .u4bd09c {
          padding-bottom: 40px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .u4bd09c {
          padding-right: 50vw;
        }
      }

      .channel-html .u4bd09c.large-display-bleed::before,
      .channel-html .u4bd09c.large-display-bleed::after {
        background-color: #ffffff;
      }

      .channel-html .u4bd09c.medium-display-bleed::before,
      .channel-html .u4bd09c.medium-display-bleed::after {
        background-color: #ffffff;
      }

      .channel-html .u4bd09c.small-display-bleed::before,
      .channel-html .u4bd09c.small-display-bleed::after {
        background-color: #ffffff;
      }

      .channel-html .q0d85cf {
        /** Margin */
        margin-bottom: 51px;
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q0d85cf {
          margin-bottom: 41.5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q0d85cf {
          margin-bottom: 19px;
        }
      }

      .channel-html .s2eea35 {
        color: #1d1d1f;
        margin-left: -1px;
        margin-bottom: 8px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .s2eea35 {
          margin-bottom: 6px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .s2eea35 {
          margin-bottom: 7px;
        }
      }

      .channel-html .y81e5d6 {
        color: #111111;
        margin-top: 0px;
        margin-left: -1.5px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .y81e5d6 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .y81e5d6 {
          margin-left: 0px;
        }
      }

      .r1293d6 {
        width: 100%;
        --columns: 3;
        --grid-column: 3;
        --static-enabled: true;
        --column-data: 16, 19, 20, 16, 19, 20, 16, 19;
        --allowed-columns: 3, 3, 2;
      }

      .r1293d6 .compare-column-0 {
        display: flex;
        order: 1;
      }

      .r1293d6 .compare-column-1 {
        display: flex;
        order: 2;
      }

      .r1293d6 .compare-column-2 {
        display: flex;
        order: 3;
      }

      .r1293d6 .compare-static-16 {
        display: flex;
        order: 1;
      }

      .r1293d6 .compare-static-19 {
        display: flex;
        order: 2;
      }

      .r1293d6 .compare-static-20 {
        display: flex;
        order: 3;
      }

      @media only screen and (max-width: 1068px) {
        .r1293d6 {
          --columns: 3;
          --grid-column: 3;
        }
      }

      @media only screen and (max-width: 1068px) {
        .r1293d6 .compare-column-0 {
          display: flex;
          order: 1;
        }
      }

      @media only screen and (max-width: 1068px) {
        .r1293d6 .compare-column-1 {
          display: flex;
          order: 2;
        }
      }

      @media only screen and (max-width: 1068px) {
        .r1293d6 .compare-column-2 {
          display: flex;
          order: 3;
        }
      }

      @media only screen and (max-width: 1068px) {
        .r1293d6 {
          --static-enabled: true;
        }

        .r1293d6 .compare-static-16 {
          display: flex;
          order: 1;
        }

        .r1293d6 .compare-static-19 {
          display: flex;
          order: 2;
        }

        .r1293d6 .compare-static-20 {
          display: flex;
          order: 3;
        }
      }

      @media only screen and (max-width: 734px) {
        .r1293d6 {
          --columns: 2;
          --grid-column: 2;
        }
      }

      @media only screen and (max-width: 734px) {
        .r1293d6 .compare-column-0 {
          display: flex;
          order: 1;
        }
      }

      @media only screen and (max-width: 734px) {
        .r1293d6 .compare-column-1 {
          display: flex;
          order: 2;
        }
      }

      @media only screen and (max-width: 734px) {
        .r1293d6 .compare-column-2 {
          display: none;
          order: 3;
        }
      }

      @media only screen and (max-width: 734px) {
        .r1293d6 {
          --static-enabled: true;
        }

        .r1293d6 .compare-static-20 {
          display: none;
        }

        .r1293d6 .compare-static-20 {
          display: none;
        }

        .r1293d6 .compare-static-16 {
          display: flex;
          order: 1;
        }

        .r1293d6 .compare-static-19 {
          display: flex;
          order: 2;
        }
      }

      .channel-html .e49985d {
        background-color: #f5f5f7;
        /** Margin */
        /** Padding */
        /** Overflow */
        overflow: hidden;
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .bebb53d {
        background-color: #ffffff;
        /** alignment */
        align-items: flex-start;
        /** Margin */
        margin-top: 10px;
        /** Padding */
        padding-top: 44px;
        padding-bottom: 44px;
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .bebb53d {
          align-items: flex-start;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .bebb53d {
          margin-top: 10px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .bebb53d {
          margin-left: -50vw;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .bebb53d {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .bebb53d {
          margin-right: -50vw;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .bebb53d {
          padding-top: 44px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .bebb53d {
          padding-top: 41px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .bebb53d {
          padding-left: 50vw;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .bebb53d {
          padding-bottom: 44px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .bebb53d {
          padding-bottom: 45px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .bebb53d {
          padding-right: 50vw;
        }
      }

      .channel-html .bebb53d.large-display-bleed::before,
      .channel-html .bebb53d.large-display-bleed::after {
        background-color: #ffffff;
      }

      .channel-html .bebb53d.medium-display-bleed::before,
      .channel-html .bebb53d.medium-display-bleed::after {
        background-color: #ffffff;
      }

      .channel-html .bebb53d.small-display-bleed::before,
      .channel-html .bebb53d.small-display-bleed::after {
        background-color: #ffffff;
      }

      .channel-html .ab27272 {
        /** Margin */
        margin-top: 85px;
        margin-left: 0px;
        /** Padding */
        padding-bottom: 10px;
        padding-right: 82px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .ab27272 {
          margin-top: 60px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .ab27272 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .ab27272 {
          padding-bottom: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .ab27272 {
          padding-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .ab27272 {
          padding-right: 0px;
        }
      }

      .channel-html .s2d1062 {
        color: #1d1d1f;
        margin-left: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .s2d1062 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .s2d1062 {
          margin-bottom: 6px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .s2d1062 {
          margin-bottom: 7px;
        }
      }

      .channel-html .c41b14d {
        color: #1d1d1f;
        margin-top: 8px;
        margin-left: -1px;
        padding-right: 110px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c41b14d {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c41b14d {
          margin-left: -1.5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c41b14d {
          margin-left: -0.5px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c41b14d {
          margin-bottom: 19px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c41b14d {
          margin-bottom: 13px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c41b14d {
          padding-right: 0px;
        }
      }

      .channel-html .ca33ec8 {
        color: #1d1d1f;
        margin-top: 18px;
        margin-left: 0px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .ca33ec8 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .ca33ec8 {
          padding-right: 20px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .ca33ec8 {
          padding-right: 37px;
        }
      }

      .channel-html .f917494 {
        /** alignment */
        /** Margin */
        margin-top: 13px;
        margin-left: 0px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .f917494 {
          margin-top: 13px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .f917494 {
          margin-left: 0px;
        }
      }

      .channel-html .c58aa7e {
        /** Margin */
        margin-left: -0.5px;
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .b1e8cb9 {
        color: #0066cc;
      }

      .channel-html .u4c208c {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .u4c208c {
          margin-top: 50px;
        }
      }

      .channel-html .y8aa809 {
        /** Margin */
        margin-top: 0px;
        margin-left: 0px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .y8aa809 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .y8aa809 {
          margin-top: -7.5px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .y8aa809 {
          margin-left: 21.5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .y8aa809 {
          margin-left: 0px;
        }
      }

      .channel-html .c333372 {
        background-color: #f5f5f7;
        /** Margin */
        /** Padding */
        /** Overflow */
        overflow: hidden;
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .y863eb8 {
        background-color: #ffffff;
        /** alignment */
        align-items: center;
        /** Margin */
        margin-top: 10px;
        /** Padding */
        padding-top: 69px;
        padding-bottom: 71px;
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .y863eb8 {
          margin-left: -50vw;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .y863eb8 {
          margin-right: -50vw;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .y863eb8 {
          padding-top: 48.5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .y863eb8 {
          padding-top: 41px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .y863eb8 {
          padding-left: 50vw;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .y863eb8 {
          padding-bottom: 59px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .y863eb8 {
          padding-bottom: 42px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .y863eb8 {
          padding-right: 50vw;
        }
      }

      .channel-html .y863eb8.large-display-bleed::before,
      .channel-html .y863eb8.large-display-bleed::after {
        background-color: #ffffff;
      }

      .channel-html .y863eb8.medium-display-bleed::before,
      .channel-html .y863eb8.medium-display-bleed::after {
        background-color: #ffffff;
      }

      .channel-html .y863eb8.small-display-bleed::before,
      .channel-html .y863eb8.small-display-bleed::after {
        background-color: #ffffff;
      }

      .channel-html .s2cff78 {
        /** Margin */
        margin-top: 13px;
        /** Padding */
        padding-bottom: 10px;
        padding-right: 82px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .s2cff78 {
          margin-top: 13px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .s2cff78 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .s2cff78 {
          padding-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .s2cff78 {
          padding-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .s2cff78 {
          padding-bottom: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .s2cff78 {
          padding-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .s2cff78 {
          padding-right: 0px;
        }
      }

      .channel-html .z92eeb6 {
        color: #1d1d1f;
        margin-left: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z92eeb6 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z92eeb6 {
          margin-left: -0.5px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z92eeb6 {
          margin-bottom: 6px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z92eeb6 {
          margin-bottom: 0px;
        }
      }

      .channel-html .d6c9ea4 {
        color: #1d1d1f;
        margin-top: 8px;
        margin-left: -1px;
        padding-right: 117px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .d6c9ea4 {
          margin-top: 1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .d6c9ea4 {
          margin-top: 7px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .d6c9ea4 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .d6c9ea4 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .d6c9ea4 {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .d6c9ea4 {
          padding-right: 0px;
        }
      }

      .channel-html .uC80FC7 {
        /** alignment */
        /** Margin */
        margin-top: 18px;
        margin-left: 0px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .uC80FC7 {
          margin-top: 18.5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .uC80FC7 {
          margin-top: 12px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .uC80FC7 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .uC80FC7 {
          margin-bottom: 13px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .uC80FC7 {
          margin-bottom: 13px;
        }
      }

      .channel-html .n9392EA {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .n9392EA {
          margin-left: -1px;
        }
      }

      .channel-html .l829F71 {
        margin-left: 0px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .l829F71 {
          margin-left: 2px;
        }
      }

      .channel-html .r662F4F {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .gB87DB1 {
        /** Margin */
        margin-top: 5.5px;
        margin-left: -1.5px;
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .gB87DB1 {
          margin-top: 6px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .gB87DB1 {
          margin-left: -1.5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .gB87DB1 {
          padding-left: 0px;
        }
      }

      .channel-html .sD81520 {
        /** Margin */
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .sD81520 {
          margin-left: 0px;
        }
      }

      .channel-html .wDE5C0D {
        /** Margin */
        margin-left: 11px;
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .wDE5C0D {
          margin-top: 1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .wDE5C0D {
          margin-left: 11px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .wDE5C0D {
          margin-left: 9px;
        }
      }

      .channel-html .eDF67E3 {
        margin-left: -1px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .eDF67E3 {
          margin-left: 0px;
        }
      }

      .channel-html .e6D011D {
        /** alignment */
        /** Margin */
        margin-top: 0px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .v925DA3 {
        /** Margin */
        margin-top: 5.5px;
        margin-left: -1.5px;
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .v925DA3 {
          margin-top: 5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .v925DA3 {
          margin-left: -0.5px;
        }
      }

      .channel-html .h011405 {
        /** Margin */
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .h011405 {
          margin-left: -1px;
        }
      }

      .channel-html .oF11AA6 {
        /** Margin */
        margin-left: 11px;
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .oF11AA6 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .oF11AA6 {
          margin-left: 11px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .oF11AA6 {
          margin-left: 9px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .oF11AA6 {
          padding-left: 1px;
        }
      }

      .channel-html .h594938 {
        margin-left: -1px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .h594938 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .h594938 {
          padding-right: 40px;
        }
      }

      .channel-html .d96DCA4 {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .w44500F {
        /** Margin */
        margin-top: 5.5px;
        margin-left: -1.5px;
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w44500F {
          margin-top: 5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w44500F {
          margin-left: -0.5px;
        }
      }

      .channel-html .r5B274C {
        /** Margin */
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .r5B274C {
          margin-left: -1px;
        }
      }

      .channel-html .lCA6884 {
        /** Margin */
        margin-left: 11px;
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .lCA6884 {
          margin-left: 11px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .lCA6884 {
          margin-left: 9px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .lCA6884 {
          padding-left: 1px;
        }
      }

      .channel-html .a7D7BA1 {
        margin-left: -1px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .a7D7BA1 {
          margin-left: 0px;
        }
      }

      .channel-html .q381EBA {
        /** alignment */
        /** Margin */
        margin-top: 13px;
        margin-left: 0px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q381EBA {
          margin-top: 9px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q381EBA {
          margin-left: 1px;
        }
      }

      .channel-html .zAEA783 {
        /** Margin */
        margin-left: 0px;
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .zAEA783 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .zAEA783 {
          padding-right: 60px;
        }
      }

      .channel-html .y00CBF9 {
        color: #0066cc;
      }

      .channel-html .x7b6000 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .x7b6000 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .x7b6000 {
          margin-top: 26px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .x7b6000 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .x7b6000 {
          margin-left: -47px;
        }
      }

      .channel-html .t3f263f {
        /** Margin */
        margin-top: 2px;
        margin-left: -3px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .t3f263f {
          margin-top: 9px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t3f263f {
          margin-top: 15px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .t3f263f {
          margin-left: 20px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t3f263f {
          margin-left: 43px;
        }
      }

      .channel-html .q7ABA85 {
        background-color: #f5f5f7;
        /** Margin */
        /** Padding */
        /** Overflow */
        overflow: hidden;
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .c0ADE54 {
        background-color: #f5f5f7;
        /** alignment */
        /** Margin */
        margin-top: 46px;
        margin-left: 0px;
        margin-bottom: 7px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c0ADE54 {
          margin-top: 46px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c0ADE54 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c0ADE54 {
          margin-left: -50vw;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c0ADE54 {
          margin-right: -50vw;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c0ADE54 {
          padding-left: 50vw;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c0ADE54 {
          padding-right: 50vw;
        }
      }

      .channel-html .c0ADE54.large-display-bleed::before,
      .channel-html .c0ADE54.large-display-bleed::after {
        background-color: #f5f5f7;
      }

      .channel-html .c0ADE54.medium-display-bleed::before,
      .channel-html .c0ADE54.medium-display-bleed::after {
        background-color: #f5f5f7;
      }

      .channel-html .c0ADE54.small-display-bleed::before,
      .channel-html .c0ADE54.small-display-bleed::after {
        background-color: #f5f5f7;
      }

      .channel-html .s185A56 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .s185A56 {
          margin-left: 0;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .s185A56 {
          margin-left: 1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .s185A56 {
          margin-right: 0px;
        }
      }

      .channel-html .x67B730 {
        /** alignment */
        /** Margin */
        margin-bottom: 9px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .n22495C {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .kA26997 {
        color: #6E6E73;
        margin-left: -1px;
      }

      .channel-html .nBAAB83 {
        /** alignment */
        /** Margin */
        margin-bottom: 9px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .w076B92 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .rF00FC0 {
        color: #6E6E73;
        margin-left: -0.5px;
      }

      .channel-html .e233D21 {
        /** alignment */
        /** Margin */
        margin-bottom: 9px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .e233D21 {
          margin-top: 9px;
        }
      }

      .channel-html .kF41620 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .bB18953 {
        color: #6E6E73;
        margin-left: -0.5px;
      }

      .channel-html .u8B52BF {
        /** alignment */
        /** Margin */
        margin-bottom: 9px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .k29A416 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .tBED2F5 {
        color: #6E6E73;
        margin-left: -0.5px;
      }

      .channel-html .dB7745D {
        /** alignment */
        /** Margin */
        margin-bottom: 9px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .dB7745D {
          margin-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .dB7745D {
          padding-right: 0px;
        }
      }

      .channel-html .mD02F81 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .mD02F81 {
          margin-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .mD02F81 {
          padding-right: 0px;
        }
      }

      .channel-html .j4ABDBF {
        color: #6E6E73;
        margin-left: -0.5px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .j4ABDBF {
          margin-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .j4ABDBF {
          padding-right: 0px;
        }
      }
    </style>
  </head>

  <body>
    <div class="channel-html">
      <!--BEGIN > SECTION 1 - HERO (LIGHT)-->
      <div class="section fa908b4">
        <div class="section-content">
          <div class="row z9a22bc">
            <div class="column large-12 x746c32">
              <div class="row v5af1c5">
                <div class="column adb5135">
                  <h2 class="visually-hidden-text"> Mac Studio <figure aria-hidden="true" class="image image-hero_logo y8d5222"></figure>
                  </h2>
                </div>
              </div>
              <div class="row k4ECF12">
                <div class="column large-12 t65F4DA">
                  <p class="copy z9b16b1 channel-custom-font-custom-80-headline-super">Empower station.</p>
                </div>
              </div>
              <figure aria-label="Mac Studio" role="img" class="image image-hero w4D7985"></figure>
              <p class="copy helvetica-neue w6fd73a channel-custom-font-custom-24-intro-elevated">Astonishing performance. Stunningly compact. Extensive connectivity. Ready to dive in?</p>
              <!-- <p class="copy helvetica-neue e3364d1 channel-custom-font-custom-17-body-tight">[Your Message]</p> -->
              <!--BEGIN CHANNEL-BUTTON-->
              <!-- <a href="#" aria-label="Buy Mac Studio now." class="button button-channel button-base bb2da7f"> Buy now </a> -->
              <!--END CHANNEL-BUTTON-->
            </div>
          </div>
        </div>
      </div>
      <!--END > SECTION 1 - HERO (LIGHT)-->
      <!--BEGIN > SECTION 2 - PERFORMANCE-->
      <div class="section y9F02BE">
        <div class="section-content">
          <div class="row r21D5AB">
            <div class="column large-12 q379C49">
              <h3 class="copy m978188 channel-custom-font-custom-24-eyebrow">Performance</h3>
              <p class="copy yE30650 channel-custom-font-custom-48-headline">Choose your superpower. </p>
              <p class="copy helvetica-neue a84A2C9 channel-custom-font-custom-21-intro">Mac&nbsp;Studio comes with your choice of the ferociously fast M1&nbsp;Max or the astounding M1&nbsp;Ultra.</p>
              <div class="row n489056">
                <div class="column large-6 small-12 v4CEBF4">
                  <figure aria-label="M1 Max chip" role="img" class="image image-performance_icon_m1_max tA60F3F"></figure>
                  <ul role="list" aria-label="M1 Max chip features" class="list vD0ED7F">
                    <li role="listitem" class="list-item b61D02A">
                      <div class="row n40F191">
                        <div class="column large-12 eB71FF2">
                          <p class="copy helvetica-neue a9F735A channel-custom-font-Custom-17-body-reduced-bold">10-core CPU</p>
                        </div>
                      </div>
                    </li>
                    <li role="listitem" class="list-item i7DA5F9">
                      <div class="row mB6EA7D">
                        <div class="column large-12 d3F83E4">
                          <p class="copy helvetica-neue aD9E1C1 channel-custom-font-Custom-17-body-reduced-bold">Up to 32-core GPU</p>
                        </div>
                      </div>
                    </li>
                    <li role="listitem" class="list-item d74EE84">
                      <div class="row i6A5F7B">
                        <div class="column large-12 gB73506">
                          <p class="copy helvetica-neue c9FA8A9 channel-custom-font-Custom-17-body-reduced-bold">Up to 64GB unified memory</p>
                        </div>
                      </div>
                    </li>
                    <li role="listitem" class="list-item wD5297E">
                      <div class="row o7C8165">
                        <div class="column large-12 b91C3AE">
                          <p class="copy helvetica-neue w1DEE01 channel-custom-font-Custom-17-body-reduced-bold">400GB/s memory bandwidth</p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="column large-6 small-12 u60FBCF">
                  <figure aria-label="M1 Ultra chip" role="img" class="image image-performance_icon_m1_ultra r510381"></figure>
                  <ul role="list" aria-label="M1 Ultra chip features" class="list x69B4C6">
                    <li role="listitem" class="list-item nEEC2A0">
                      <div class="row t80CF34">
                        <div class="column large-12 y5CA345">
                          <p class="copy helvetica-neue h623314 channel-custom-font-Custom-17-body-reduced-bold">20-core CPU</p>
                        </div>
                      </div>
                    </li>
                    <li role="listitem" class="list-item gD6E505">
                      <div class="row lD637B2">
                        <div class="column large-12 h6CEFCB">
                          <p class="copy helvetica-neue wD2ECB5 channel-custom-font-Custom-17-body-reduced-bold">Up to 64-core GPU</p>
                        </div>
                      </div>
                    </li>
                    <li role="listitem" class="list-item m56EA12">
                      <div class="row t26022C">
                        <div class="column large-12 g341041">
                          <p class="copy helvetica-neue bC2B62E channel-custom-font-Custom-17-body-reduced-bold">Up to 128GB unified memory</p>
                        </div>
                      </div>
                    </li>
                    <li role="listitem" class="list-item x84A4FA">
                      <div class="row t89C2B2">
                        <div class="column large-12 q3DB57E">
                          <p class="copy helvetica-neue x8ABF62 channel-custom-font-Custom-17-body-reduced-bold">800GB/s memory bandwidth</p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--END > SECTION 2 - PERFORMANCE-->
      <!--BEGIN > SECTION 3 - DESIGN-->
      <div class="section y9F5832">
        <div class="section-content">
          <div class="row sBFABE8">
            <div class="column large-6 medium-6 small-12 r69D461">
              <h3 class="copy z240029 channel-custom-font-custom-24-eyebrow">Design</h3>
              <p class="copy n0CCA35 channel-custom-font-custom-48-headline">Outsized performance. Fits right in.</p>
            </div>
            <div class="column large-6 small-12 lCD67DB">
              <p class="copy helvetica-neue o1DD64F channel-custom-font-custom-21-intro">Apple silicon has allowed for the reimagining of the high-performance desktop. The strikingly compact Mac&nbsp;Studio fits perfectly under most displays and transforms any workspace into a studio. </p>
            </div>
            <div class="column large-12 iB47C12">
              <figure aria-hidden="true" class="image image-design yB01183"></figure>
            </div>
          </div>
        </div>
      </div>
      <!--END > SECTION 3 - DESIGN-->
      <!--BEGIN > SECTION 4 - CONNECTIVITY-->
      <div class="section yA2A76C">
        <div class="section-content">
          <div class="row n427F78">
            <div class="column large-12 c4E75E3">
              <h3 class="copy q937487 channel-custom-font-custom-24-eyebrow">Connectivity</h3>
              <div class="row wBCF9D7">
                <div class="column large-6 small-12 v618821">
                  <p class="copy d3F4182 channel-custom-font-custom-48-headline">Powerful connections.</p>
                </div>
                <div class="column large-6 small-12 small-grow o538E91">
                  <p class="copy helvetica-neue y8F1E77 channel-custom-font-custom-21-intro">With a versatile array of 12 high-performance, easy-to-reach ports, Mac&nbsp;Studio lets you create the studio of your dreams.</p>
                </div>
              </div>
              <figure aria-label="Mac Studio front and back ports views." role="img" class="image image-connectivity gB0E2A6"></figure>
              <div class="row medium-hide small-hide e5B97CA">
                <div class="column large-4 small-12 x73C895">
                  <h4 class="copy helvetica-neue c405AE7 channel-custom-font-custom-17-body-reduced"><span style="font-weight: 500;">Front Ports</span></h4>
                  <div class="key-line lE54F27">
                    <div class="liner"></div>
                  </div>
                  <ul role="list" class="list dE7A63C">
                    <li role="listitem" class="list-item l413BE3">
                      <div class="row hDAF40D">
                        <div class="column large-12 f9785C0">
                          <p class="copy q6C02BC channel-custom-font-custom-29-table">2x USB-C or<br>2x Thunderbolt 4<span aria-hidden="true" style="top: -0.3em; position: relative; font-size: .55em;vertical-align: top;">◊</span><span class="visuallyhidden">Refer to legal disclaimers</span> </p>
                        </div>
                      </div>
                    </li>
                    <li role="listitem" class="list-item kD01ACD">
                      <div class="row x21322F">
                        <div class="column large-12 w13DFD2">
                          <p class="copy i914860 channel-custom-font-custom-29-table">1x SDXC</p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="column large-8 small-12 r35E667">
                  <h4 class="copy helvetica-neue u5B47EA channel-custom-font-custom-17-body-reduced"><span style="font-weight: 500;">Back Ports</span></h4>
                  <div class="key-line wF3833B">
                    <div class="liner"></div>
                  </div>
                  <div class="row d90AC49">
                    <div class="column large-5 small-7 cFD8C02">
                      <ul role="list" class="list v1B325A">
                        <li role="listitem" class="list-item z00C8BE">
                          <div class="row vF7F6D0">
                            <div class="column large-12 m2EC67E">
                              <p class="copy e6A5CE0 channel-custom-font-custom-29-table">4x Thunderbolt 4</p>
                            </div>
                          </div>
                        </li>
                        <li role="listitem" class="list-item v9700DE">
                          <div class="row yC66CC8">
                            <div class="column large-12 kE67BFD">
                              <p class="copy c77374F channel-custom-font-custom-29-table">1x 10Gb Ethernet</p>
                            </div>
                          </div>
                        </li>
                        <li role="listitem" class="list-item s3BDCB3">
                          <div class="row j264C2A">
                            <div class="column large-12 e1BD40D">
                              <p class="copy u023F3C channel-custom-font-custom-29-table">2x USB-A</p>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="column large-7 small-5 y3272A7">
                      <ul role="list" class="list tC647FD">
                        <li role="listitem" class="list-item h274D87">
                          <div class="row kF0F745">
                            <div class="column large-12 c06E1C0">
                              <p class="copy l051447 channel-custom-font-custom-29-table">1x HDMI </p>
                            </div>
                          </div>
                        </li>
                        <li role="listitem" class="list-item i84CB3B">
                          <div class="row vF524FC">
                            <div class="column large-12 n7926F4">
                              <p class="copy cC41B73 channel-custom-font-custom-29-table">1x 3.5 mm headphone jack</p>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row small-hide h84AAE8">
                <div class="column large-4 large-hide medium-show e5A6826">
                  <h4 class="copy helvetica-neue i6BE3BA channel-custom-font-custom-17-body-reduced"><span style="font-weight: 500;">Front Ports</span></h4>
                  <div class="key-line kB93473">
                    <div class="liner"></div>
                  </div>
                  <ul role="list" class="list m0CEAC4">
                    <li role="listitem" class="list-item b0EE9BC">
                      <div class="row o2FB231">
                        <div class="column large-12 aE3740E">
                          <p class="copy pB22EAB channel-custom-font-custom-29-table">2x USB-C or<br>2x Thunderbolt 4<span style="font-weight: 500;"><span aria-hidden="true" style="top: -0.3em; position: relative; font-size: .6em;vertical-align: top;">◊</span></span><span class="visuallyhidden">Refer to legal disclaimers</span> </p>
                        </div>
                      </div>
                    </li>
                    <li role="listitem" class="list-item fC2F1B3">
                      <div class="row sCB068F">
                        <div class="column large-12 xC2A9C4">
                          <p class="copy nE85D00 channel-custom-font-custom-29-table">1x SDXC</p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="column large-8 large-hide medium-show w44E9E0">
                  <h4 class="copy helvetica-neue yF28F81 channel-custom-font-custom-17-body-reduced"><span style="font-weight: 500;">Back Ports</span></h4>
                  <div class="key-line o706F4B">
                    <div class="liner"></div>
                  </div>
                  <div class="row n5332B6">
                    <div class="column large-5 tEE7915">
                      <ul role="list" class="list nCC33D6">
                        <li role="listitem" class="list-item z3669FC">
                          <div class="row fCCD568">
                            <div class="column large-12 n6315F2">
                              <p class="copy iC70621 channel-custom-font-custom-29-table">4x Thunderbolt 4</p>
                            </div>
                          </div>
                        </li>
                        <li role="listitem" class="list-item w09C9A2">
                          <div class="row v318881">
                            <div class="column large-12 b590A55">
                              <p class="copy h3D5B77 channel-custom-font-custom-29-table">1x 10Gb Ethernet</p>
                            </div>
                          </div>
                        </li>
                        <li role="listitem" class="list-item t06E4D5">
                          <div class="row u72F02A">
                            <div class="column large-12 tD4C2E7">
                              <p class="copy q58B68F channel-custom-font-custom-29-table">2x USB-A</p>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="column large-7 sE6B6D2">
                      <ul role="list" class="list m40C299">
                        <li role="listitem" class="list-item r656218">
                          <div class="row sD6A150">
                            <div class="column large-12 e232822">
                              <p class="copy g733F27 channel-custom-font-custom-29-table">1x HDMI</p>
                            </div>
                          </div>
                        </li>
                        <li role="listitem" class="list-item a2839AA">
                          <div class="row s336D9B">
                            <div class="column large-12 x371EE2">
                              <p class="copy o027EB5 channel-custom-font-custom-29-table">1x 3.5 mm headphone jack</p>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row large-hide small-show pB5762C">
                <div class="column large-12 m6C630B">
                  <h4 class="copy helvetica-neue vD97DC1 channel-custom-font-custom-14-body-reduced-subhead">Front Ports</h4>
                  <div class="key-line cEAC888">
                    <div class="liner"></div>
                  </div>
                  <div class="row k6EC1B6">
                    <div class="column large-12 small-7 u47333C">
                      <ul role="list" class="list k566B9A">
                        <li role="listitem" class="list-item q7A9DFB">
                          <div class="row g599AB0">
                            <div class="column large-12 f2BD75D">
                              <p class="copy iCD8D8A channel-custom-font-custom-29-table">2x USB-C or<br>2x Thunderbolt 4<span aria-hidden="true" style="top: -0.35em; position: relative; font-size: .6em;vertical-align: top;">◊</span><span class="visuallyhidden">Refer to legal disclaimers</span> </p>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="column large-12 small-1 b3E0D49">
                      <div class="key-line n0DA196">
                        <div class="liner"></div>
                      </div>
                    </div>
                    <div class="column large-12 small-4 rA4DBD2">
                      <ul role="list" class="list a96111F">
                        <li role="listitem" class="list-item t08B348">
                          <div class="row hBDEB25">
                            <div class="column large-12 k9C88B8">
                              <p class="copy i794E4C channel-custom-font-custom-29-table">1x SDXC</p>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <h4 class="copy helvetica-neue r645B2C channel-custom-font-custom-14-body-reduced-subhead">Back Ports</h4>
                  <div class="key-line a6BA1DB">
                    <div class="liner"></div>
                  </div>
                  <div class="row k60DC4C">
                    <div class="column large-12 small-7 s8C499B">
                      <ul role="list" class="list k6D35D4">
                        <li role="listitem" class="list-item z369110">
                          <div class="row p68C52C">
                            <div class="column large-12 s6F16A6">
                              <p class="copy q52C978 channel-custom-font-custom-29-table">4x Thunderbolt 4</p>
                            </div>
                          </div>
                        </li>
                        <li role="listitem" class="list-item jC10AE8">
                          <div class="row b6D0D72">
                            <div class="column large-12 rEC1F74">
                              <p class="copy lA24910 channel-custom-font-custom-29-table">1x 10Gb Ethernet</p>
                            </div>
                          </div>
                        </li>
                        <li role="listitem" class="list-item l9A3A3A">
                          <div class="row k231AD9">
                            <div class="column large-12 l4FAA4B">
                              <p class="copy uD612F9 channel-custom-font-custom-29-table">2x USB-A</p>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="column large-12 small-1 mF04D25">
                      <div class="key-line u4940EB">
                        <div class="liner"></div>
                      </div>
                    </div>
                    <div class="column large-12 small-4 t026BDB">
                      <ul role="list" class="list cE3FF49">
                        <li role="listitem" class="list-item e9586E4">
                          <div class="row i2243DC">
                            <div class="column large-12 c6F8926">
                              <p class="copy rF02165 channel-custom-font-custom-29-table">1x HDMI</p>
                            </div>
                          </div>
                        </li>
                        <li role="listitem" class="list-item x72A28A">
                          <div class="row q721901">
                            <div class="column large-12 r29EA96">
                              <p class="copy u2C2B1C channel-custom-font-custom-29-table">1x 3.5 mm headphone jack</p>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--END > SECTION 4 - CONNECTIVITY-->
      <!--BEGIN > SECTION 5 - STUDIO DISPLAY + MAC STUDIO-->
      <div class="section jDDFFD5">
        <div class="section-content">
          <div class="row jA8DEDD">
            <div class="column large-6 small-12 lD33CF3">
              <h3 class="copy oE47246 channel-custom-font-custom-24-eyebrow">Studio&nbsp;Display and Mac&nbsp;Studio</h3>
              <p class="copy n417941 channel-custom-font-custom-48-headline">Dream team.</p>
            </div>
            <div class="column large-6 small-12 oF9320C">
              <p class="copy helvetica-neue e77DD2A channel-custom-font-custom-21-intro">Apple designed Mac&nbsp;Studio together with the expansive 68.29-centimetre 5K Retina Studio&nbsp;Display for the ultimate studio setup.<span aria-hidden="true" style="top: -0.2em; position: relative; font-size: .6em;vertical-align: top;">◊</span><span class="visuallyhidden">Refer to legal disclaimers</span> </p>
              <div class="row t794026">
                <div class="column large-3 w37CCB1">
                  <figure aria-hidden="true" class="image image-studio_display_icon k4D57F6"></figure>
                </div>
                <div class="column large-9 small-hide j8F5130">
                  <p class="copy helvetica-neue eA63EB9 channel-custom-font-custom-17-body-reduced"><span style="font-weight: 500;">Supports even more</span></p>
                  <p class="copy helvetica-neue j0CAA8D channel-custom-font-custom-17-body-reduced">Up to four Pro XDR displays and one 4K TV</p>
                </div>
                <div class="column large-9 large-hide small-9 small-show z8D8FCE">
                  <p class="copy helvetica-neue iE0C21D channel-custom-font-custom-14-body-reduced-subhead">Supports even more</p>
                  <p class="copy helvetica-neue d088AB0 channel-custom-font-custom-14-body-reduced">Up to four Pro XDR displays and one 4K TV</p>
                </div>
              </div>
            </div>
            <div class="column large-12 fDA2A53">
              <figure aria-label="Top view of Studio Display,  Mac Studio, Magic Keyboard, and Magic Mouse." role="img" class="image image-studio_display lCEC15A"></figure>
            </div>
          </div>
        </div>
      </div>
      <!--END > SECTION 5 - STUDIO DISPLAY + MAC STUDIO-->
      <!--BEGIN > SECTION 6 - MAGIC ACCESSORIES-->
      <div class="section q3B5771">
        <div class="section-content">
          <div class="row r33A754">
            <div class="column large-12 aF33675">
              <h3 class="copy b669A41 channel-custom-font-custom-24-eyebrow">Magic Accessories</h3>
              <div class="row eBBDED3">
                <div class="column large-6 small-12 s97C0F9">
                  <p class="copy uB79E6E channel-custom-font-custom-48-headline">Need more magic?</p>
                </div>
                <div class="column large-6 small-12 y1FA7DA">
                  <p class="copy helvetica-neue y4A05A9 channel-custom-font-custom-21-intro">Magic&nbsp;accessories are wireless, rechargeable, precise, comfortable — and now come in a silver-and-black option to round out your studio.<span aria-hidden="true" style="top: -0.2em; position: relative; font-size: .6em;vertical-align: top;">◊</span><span class="visuallyhidden">Refer to legal disclaimers</span> </p>
                </div>
                <div class="column large-12 small-hide j76D7BC">
                  <p class="copy helvetica-neue eDCA153 channel-custom-font-custom-17-body-reduced"><span style="font-weight: 500;">Touch ID</span></p>
                </div>
                <div class="column large-12 large-hide small-show w7E5738">
                  <p class="copy helvetica-neue b422F0C channel-custom-font-custom-14-body-reduced-subhead">Touch ID</p>
                </div>
              </div>
              <div class="row jEBE038">
                <div class="column large-6 small-12 j70CD81">
                  <figure aria-label="Pointer showcasing Touch ID key on the Magic Keyboard." role="img" class="image image-accessories_keyboard n8D855F"></figure>
                </div>
                <div class="column large-3 small-4 r970C07">
                  <figure aria-label="Magic Mouse" role="img" class="image image-accessories_mouse x2FEC73"></figure>
                </div>
                <div class="column large-3 small-8 vA7752F">
                  <figure aria-label="Magic Trackpad" role="img" class="image image-accessories_trackpad x79958B"></figure>
                </div>
              </div>
              <div class="row small-hide j6EAE5C">
                <div class="column large-6 y975168">
                  <p class="copy helvetica-neue kA53C3A channel-custom-font-custom-17-body-reduced"><span style="font-weight: 500;">Magic Keyboard</span></p>
                </div>
                <div class="column large-3 q2C27C0">
                  <p class="copy helvetica-neue uA351EC channel-custom-font-custom-17-body-reduced"><span style="font-weight: 500;">Magic Mouse</span></p>
                </div>
                <div class="column large-3 xE560C2">
                  <p class="copy helvetica-neue x98EA41 channel-custom-font-custom-17-body-reduced"><span style="font-weight: 500;">Magic Trackpad</span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--END > SECTION 6 - MAGIC ACCESSORIES-->
      <!--BEGIN > SECTION 7 - MACOS + PRO APPS-->
      <div class="section sD902D3">
        <div class="section-content">
          <div class="row z4A503F">
            <div class="column large-6 small-12 bF89A38">
              <h3 class="copy x6345E7 channel-custom-font-custom-24-eyebrow">macOS and pro apps</h3>
              <p class="copy z024A91 channel-custom-font-custom-48-headline">Optimised for Apple silicon.</p>
              <p class="copy helvetica-neue aA0F756 channel-custom-font-custom-21-intro">Powerful and intuitive, macOS was designed to scale with Apple silicon.  And over 10,000 apps and plug-ins are optimised to give you the most from M1&nbsp;Max or M1&nbsp;Ultra.</p>
            </div>
            <div class="column large-6 small-12 small-show iA25070">
              <figure aria-label="Illustration of macOS and pro apps on Studio Display with Mac Studio next to it." role="img" class="image image-pro_apps k214126"></figure>
            </div>
          </div>
        </div>
      </div>
      <!--END > SECTION 7 - MACOS + PRO APPS-->
      <!--BEGIN > FLEX 1 WHY MAC-->
      <div class="section w6c736d">
        <div class="section-content">
          <div class="row large-display-bleed medium-display-bleed q0a3e94">
            <div class="column large-12 q02c985">
              <h2 class="copy f89a263 channel-custom-font-custom-21-eyebrow-reduced">Why Mac</h2>
              <p class="copy a0c7426 channel-custom-font-custom-40-headline-reduced">There’s more to love in every Mac.</p>
            </div>
            <div class="column large-4 small-12 ecd1114">
              <figure aria-hidden="true" class="image image-why_mac_icon_m1 w6189bf"></figure>
              <h3 class="copy helvetica-neue s2fd10f channel-custom-font-custom-17-body-reduced-flex-subhead">Everything is powerful. </h3>
              <p class="copy helvetica-neue z9a22cb channel-custom-font-custom-17-body-reduced-flex">The combination of Apple silicon and macOS means Mac delivers incredible performance.</p>
            </div>
            <div class="column large-4 small-12 c3c737c">
              <figure aria-hidden="true" class="image image-why_mac_icon_connectivity x7471c6"></figure>
              <h3 class="copy helvetica-neue q05c363 channel-custom-font-custom-17-body-reduced-flex-subhead">Everything works together. </h3>
              <p class="copy helvetica-neue t3cf362 channel-custom-font-custom-17-body-reduced-flex">When you combine Mac with other Apple devices, connectivity is seamless and effortless.</p>
            </div>
            <div class="column large-4 small-12 ec88939">
              <figure aria-hidden="true" class="image image-why_mac_icon_ease t34db34"></figure>
              <h3 class="copy helvetica-neue ea02c4b channel-custom-font-custom-17-body-reduced-flex-subhead">Everything is easy. </h3>
              <p class="copy helvetica-neue c8278a9 channel-custom-font-custom-17-body-reduced-flex">Starting projects is simple. Sign in to your iCloud account to access your photos, videos and music.</p>
            </div>
          </div>
        </div>
      </div>
      <!--END > FLEX 1 WHY MAC-->
      <!--BEGIN > FLEX 2 - COMPARE-->
      <div class="section c3669a0 d-none">
        <div class="section-content">
          <div class="row large-display-bleed medium-display-bleed u4bd09c">
            <div class="column large-12 q0d85cf">
              <h2 class="copy s2eea35 channel-custom-font-custom-21-eyebrow-reduced">Compare</h2>
              <h3 class="copy y81e5d6 channel-custom-font-custom-40-headline-reduced">Find the Mac that’s right for you.</h3>
            </div>
            <div class="r1293d6">
              <div class="channel-compare">
                <!---->
                <div class="section section-compare-table">
                  <div class="compare-wrapper">
                    <div role="table" aria-label="Compare models" class="compare compare-table with-fullwidthrowheader compare-column-range-large-3 compare-column-range-medium-3 compare-column-range-small-2">
                      <div>
                        <div role="rowgroup">
                          <!---->
                          <div role="row" compare-header-row="" class="compare-row visuallyhidden">
                            <div role="columnheader">&nbsp;</div>
                            <div role="columnheader">Mac mini</div>
                            <div role="columnheader">Mac Studio</div>
                            <div role="columnheader">Mac Pro</div>
                          </div>
                        </div>
                        <div role="rowgroup" aria-hidden="true" class="compare selector-table with-fullwidthrowheader">
                          <div role="row" data-column-group="" class="compare-row">
                            <div role="rowheader" aria-rowspan="0" class="compare-rowheader">
                              <div class="visuallyhidden">Product name</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-0 first-child">
                              <div>MacBook Air (M1, 2020)</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-1">
                              <div>MacBook Pro 14-in. (2021)</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-2">
                              <div>MacBook Pro 16-in. (2021)</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-3">
                              <div>MacBook Air (Retina, 2020)</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-4">
                              <div>MacBook Air (2017)</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-5">
                              <div>MacBook Pro 13-in. (M1, 2020)</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-6">
                              <div>MacBook Pro 13-in. (Two Thunderbolt 3 ports, 2020)</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-7">
                              <div>MacBook Pro 13-in. (Two Thunderbolt 3 ports, 2016)</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-8">
                              <div>MacBook Pro 13-in. (Four Thunderbolt 3 ports, 2020)</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-9">
                              <div>MacBook Pro 16-in. (2019)</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-10">
                              <div>iMac 21.5-in.</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-11">
                              <div>iMac 21.5-in. (4K Retina)</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-12">
                              <div>iMac 24-in. (M1, Two ports, 2021)</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-13">
                              <div>iMac 24-in. (M1, Four ports, 2021)</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-14">
                              <div>iMac 27-in. (5K Retina)</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-15">
                              <div>iMac Pro</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-16">
                              <div>Mac mini</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-17">
                              <div>Mac mini (2018)</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-18">
                              <div>Mac mini (Late 2014)</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-19">
                              <div>Mac Studio</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-20">
                              <div>Mac Pro</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--BEGIN > CATEGORY > PRODUCT-IMAGES-->
                      <div role="rowgroup" class="compare-section section-product-images no-padding-top">
                        <!--BEGIN > CATEGORY > PRODUCT-IMAGES > FEATURE > PRODUCT-IMAGES-->
                        <div role="row" data-column-group="" class="compare-row compare-template-preview-item-default">
                          <div role="rowheader" aria-rowspan="0" class="compare-rowheader">
                            <div class="visuallyhidden">Product Images</div>
                          </div>
                          <div role="cell" class="first-child compare-column compare-static-16 product-0">
                            <div class="e49173F embed-image" index="16">
                              <figure role="img" aria-label="Mac mini" class="compare-image image-compare_mac_mini_m1_2020_silver"></figure>
                            </div>
                          </div>
                          <div role="cell" class="compare-column compare-static-19 product-1">
                            <div class="h21AC1B embed-image" index="19">
                              <figure role="img" aria-label="Mac Studio" class="compare-image image-compare_mac_studio_silver"></figure>
                            </div>
                          </div>
                          <div role="cell" class="compare-column compare-static-20 product-2">
                            <div class="jEA4A4B embed-image" index="20">
                              <figure role="img" aria-label="Mac Pro" class="compare-image image-compare_mac_pro_silver"></figure>
                            </div>
                          </div>
                        </div>
                        <!--END > CATEGORY > PRODUCT-IMAGES > FEATURE > PRODUCT-IMAGES-->
                      </div>
                      <!--END > CATEGORY > PRODUCT-IMAGES-->
                      <!--BEGIN > CATEGORY > FINISH-->
                      <div role="rowgroup" class="compare-section section-finish no-padding-top">
                        <!--BEGIN > CATEGORY > FINISH > FEATURE > COLOR-NAV-->
                        <div role="row" data-column-group="" class="compare-row compare-template-border-bottom compare-template-preview-item-color-nav">
                          <div role="rowheader" aria-rowspan="0" class="compare-rowheader">
                            <div class="visuallyhidden">Finish</div>
                          </div>
                          <div role="cell" class="first-child compare-column compare-static-16 product-0">
                            <div class="row-colors" index="16" productname="Mac mini">
                              <!---->
                              <div class="colornav">
                                <div role="list" aria-label="available colors" class="colornav-items">
                                  <div class="colornav-item-row">
                                    <div role="listitem" class="colornav-item">
                                      <figure role="img" aria-label="Silver" class="colornav-swatch" style="background-color: rgb(199, 200, 202);"></figure>
                                    </div>
                                  </div>
                                  <!---->
                                </div>
                              </div>
                            </div>
                          </div>
                          <div role="cell" class="compare-column compare-static-19 product-1">
                            <div class="row-colors" index="19" productname="Mac Studio">
                              <!---->
                              <div class="colornav">
                                <div role="list" aria-label="available colors" class="colornav-items">
                                  <div class="colornav-item-row">
                                    <div role="listitem" class="colornav-item">
                                      <figure role="img" aria-label="Silver" class="colornav-swatch" style="background-color: rgb(199, 200, 202);"></figure>
                                    </div>
                                  </div>
                                  <!---->
                                </div>
                              </div>
                            </div>
                          </div>
                          <div role="cell" class="compare-column compare-static-20 product-2">
                            <div class="row-colors" index="20" productname="Mac Pro">
                              <!---->
                              <div class="colornav">
                                <div role="list" aria-label="available colors" class="colornav-items">
                                  <div class="colornav-item-row">
                                    <div role="listitem" class="colornav-item">
                                      <figure role="img" aria-label="Silver" class="colornav-swatch" style="background-color: rgb(199, 200, 202);"></figure>
                                    </div>
                                  </div>
                                  <!---->
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--END > CATEGORY > FINISH > FEATURE > COLOR-NAV-->
                      </div>
                      <!--END > CATEGORY > FINISH-->
                      <!--BEGIN > CATEGORY > BUY-->
                      <div role="rowgroup" class="compare-section section-buy no-padding-top">
                        <!--BEGIN > CATEGORY > BUY > FEATURE > BUY-->
                          <!-- <div role="row" data-column-group="" class="compare-row compare-template-preview-item-button">
                            <div role="rowheader" aria-rowspan="0" class="compare-rowheader">
                              <div class="visuallyhidden">Buy</div>
                            </div>
                            <div role="cell" class="first-child compare-column compare-static-16 product-0">
                              <div class="button-container" index="16" productname="Mac mini"><a href="#" aria-label="Buy Mac mini (M1, 2020) now" class="button">Buy now</a></div>
                            </div>
                            <div role="cell" class="compare-column compare-static-19 product-1">
                              <div class="button-container" index="19" productname="Mac Studio"><a href="#" aria-label="Buy Mac Studio now" class="button">Buy now</a></div>
                            </div>
                            <div role="cell" class="compare-column compare-static-20 product-2">
                              <div class="button-container" index="20" productname="Mac Pro"><a href="#" aria-label="Buy Mac Pro now" class="button">Buy now</a></div>
                            </div>
                          </div> -->
                        <!--END > CATEGORY > BUY > FEATURE > BUY-->
                      </div>
                      <!--END > CATEGORY > BUY-->
                      <!--BEGIN > CATEGORY > QUICK-LOOK-->
                      <div role="rowgroup" class="compare-section section-quick-look no-padding-top multi-row">
                        <!--BEGIN > CATEGORY > QUICK-LOOK > FEATURE > CHIP-->
                        <div role="row" data-column-group="" class="compare-row compare-template-preview-item-badge">
                          <div role="rowheader" aria-rowspan="0" class="compare-rowheader">
                            <div class="visuallyhidden">Quick look</div>
                          </div>
                          <div role="cell" class="first-child compare-column compare-static-16 product-0">
                            <figure role="presentation" class="badge" index="16">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper e9FC0E1 embed-image">
                                    <figure class="compare-image image-icon_M1_chip"></figure>
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Apple M1 chip</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column compare-static-19 product-1">
                            <figure role="presentation" class="badge" index="19">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper q414BA6 embed-image">
                                    <figure class="compare-image image-icon_M1_Max_M1_Ultra"></figure>
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Apple M1 Max chip or<br>Apple M1 Ultra chip</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column compare-static-20 product-2">
                            <figure role="presentation" class="badge" index="20">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper k2B535C embed-image">
                                    <figure class="compare-image image-icon_intel"></figure>
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Xeon W processor</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                        </div>
                        <!--END > CATEGORY > QUICK-LOOK > FEATURE > CHIP-->
                        <!--BEGIN > CATEGORY > QUICK-LOOK > FEATURE > CPU-->
                        <div role="row" data-column-group="" class="compare-row compare-template-preview-item-badge">
                          <div role="rowheader" aria-rowspan="0" class="compare-rowheader">
                            <div class="visuallyhidden">CPU</div>
                          </div>
                          <div role="cell" class="first-child compare-column compare-static-16 product-0">
                            <figure role="presentation" class="badge" index="16">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">&nbsp;</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">8-core</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">CPU</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column compare-static-19 product-1">
                            <figure role="presentation" class="badge" index="19">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">20-core</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">CPU</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column compare-static-20 product-2">
                            <figure role="presentation" class="badge" index="20">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">28-core</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">CPU</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                        </div>
                        <!--END > CATEGORY > QUICK-LOOK > FEATURE > CPU-->
                        <!--BEGIN > CATEGORY > QUICK-LOOK > FEATURE > GPU-->
                        <div role="row" data-column-group="" class="compare-row compare-template-preview-item-badge">
                          <div role="rowheader" aria-rowspan="0" class="compare-rowheader">
                            <div class="visuallyhidden">GPU</div>
                          </div>
                          <div role="cell" class="first-child compare-column compare-static-16 product-0">
                            <figure role="presentation" class="badge" index="16">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">&nbsp;</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">8-core</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">GPU</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column compare-static-19 product-1">
                            <figure role="presentation" class="badge" index="19">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">64-core</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">GPU</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column compare-static-20 product-2">
                            <figure role="presentation" class="badge" index="20">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">AMD</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Radeon Pro W6800X Duo GPU</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                        </div>
                        <!--END > CATEGORY > QUICK-LOOK > FEATURE > GPU-->
                        <!--BEGIN > CATEGORY > QUICK-LOOK > FEATURE > MEMORY-->
                        <div role="row" data-column-group="" class="compare-row compare-template-preview-item-badge">
                          <div role="rowheader" aria-rowspan="0" class="compare-rowheader">
                            <div class="visuallyhidden">Memory</div>
                          </div>
                          <div role="cell" class="first-child compare-column compare-static-16 product-0">
                            <figure role="presentation" class="badge" index="16">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">16GB</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">unified memory</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column compare-static-19 product-1">
                            <figure role="presentation" class="badge" index="19">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">128GB</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">unified memory</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column compare-static-20 product-2">
                            <figure role="presentation" class="badge" index="20">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">1.5TB</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">memory</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                        </div>
                        <!--END > CATEGORY > QUICK-LOOK > FEATURE > MEMORY-->
                        <!--BEGIN > CATEGORY > QUICK-LOOK > FEATURE > HD-CAPACITY-->
                        <div role="row" data-column-group="" class="compare-row compare-template-preview-item-badge">
                          <div role="rowheader" aria-rowspan="0" class="compare-rowheader">
                            <div class="visuallyhidden">HD Capacity</div>
                          </div>
                          <div role="cell" class="first-child compare-column compare-static-16 product-0">
                            <figure role="presentation" class="badge" index="16">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">2TB</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">storage<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers</span></span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column compare-static-19 product-1">
                            <figure role="presentation" class="badge" index="19">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">8TB</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">storage<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers</span></span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column compare-static-20 product-2">
                            <figure role="presentation" class="badge" index="20">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">8TB</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">storage<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers</span></span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                        </div>
                        <!--END > CATEGORY > QUICK-LOOK > FEATURE > HD-CAPACITY-->
                      </div>
                      <!--END > CATEGORY > QUICK-LOOK-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--END > FLEX 2 - COMPARE-->
      <!--BEGIN > FLEX 3 - MAC ACCESSORIES-->
        <!-- <div class="section e49985d">
          <div class="section-content">
            <div class="row large-display-bleed medium-display-bleed bebb53d">
              <div class="column large-8 medium-7 small-12 ab27272">
                <h2 class="copy s2d1062 channel-custom-font-custom-21-eyebrow-reduced">Accessories</h2>
                <p class="copy c41b14d channel-custom-font-custom-40-headline-reduced">Explore Mac accessories.</p>
                <p class="copy helvetica-neue ca33ec8 channel-custom-font-custom-17-body-reduced">Explore keyboards, devices and other essentials.</p>
                <div class="row f917494">
                  <div class="column large-12 c58aa7e"><a href="#" aria-label="Learn more about Mac accessories." class="link-wrapper"><span class="b1e8cb9 icon icon-chevronright icon-after channel-custom-font-custom-17-body-reduced"><span>Learn more</span></span></a></div>
                </div>
              </div>
              <div class="column large-4 medium-5 small-12 u4c208c">
                <figure aria-label="Multiple accessores like Magic Keyboard, Magic Mouse, USB-C cable, Air Pods and Track Pad." role="img" class="image image-flex_accessories y8aa809"></figure>
              </div>
            </div>
          </div>
        </div> -->
      <!--END > FLEX 3 - MAC ACCESSORIES-->
      <!--BEGIN > FLEX 4 - APPLECARE+-->
        <!-- <div class="section c333372">
          <div class="section-content">
            <div class="row large-display-bleed medium-display-bleed y863eb8">
              <div class="column large-8 medium-6 small-12 s2cff78">
                <h2 class="copy z92eeb6 channel-custom-font-custom-21-eyebrow-reduced">AppleCare+</h2>
                <p class="copy d6c9ea4 channel-custom-font-custom-40-headline-reduced">Expert support, enhanced coverage.</p>
                <div class="row uC80FC7">
                  <div class="column large-12 n9392EA">
                    <ul role="list" aria-label="Apple care plus support and coverage" class="list l829F71">
                      <li role="listitem" class="list-item iD8441F">
                        <div class="row r662F4F">
                          <div class="column large-0 gB87DB1">
                            <figure aria-hidden="true" class="image image-flex_icon_applecare sD81520"></figure>
                          </div>
                          <div class="column large-11 wDE5C0D">
                            <p class="copy helvetica-neue eDF67E3 channel-custom-font-custom-17-body-reduced">Apple-certified service</p>
                          </div>
                        </div>
                      </li>
                      <li role="listitem" class="list-item x13CE33">
                        <div class="row e6D011D">
                          <div class="column large-0 v925DA3">
                            <figure aria-hidden="true" class="image image-flex_icon_applecare h011405"></figure>
                          </div>
                          <div class="column large-11 oF11AA6">
                            <p class="copy helvetica-neue h594938 channel-custom-font-custom-17-body-reduced">Priority access to Apple experts </p>
                          </div>
                        </div>
                      </li>
                      <li role="listitem" class="list-item w018B0F">
                        <div class="row d96DCA4">
                          <div class="column large-0 w44500F">
                            <figure aria-hidden="true" class="image image-flex_icon_applecare r5B274C"></figure>
                          </div>
                          <div class="column large-11 lCA6884">
                            <p class="copy helvetica-neue a7D7BA1 channel-custom-font-custom-17-body-reduced">Accidental damage coverage</p>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="row q381EBA">
                  <div class="column large-12 zAEA783"><a href="#" class="link-wrapper"><span class="y00CBF9 icon icon-chevronright icon-after channel-custom-font-custom-17-body-reduced"><span>Learn more about AppleCare+ for Mac</span></span></a></div>
                </div>
              </div>
              <div class="column large-4 medium-6 small-12 x7b6000">
                <figure aria-label="Mac Studio and Apple Care Plus." role="img" class="image image-flex_applecare t3f263f"></figure>
              </div>
            </div>
          </div>
        </div> -->
      <!--END > FLEX 4 - APPLECARE+-->
      <!--BEGIN > LEGAL-->
      <div class="section q7ABA85 pb-5">
        <div class="section-content">
          <div class="row large-display-bleed medium-display-bleed c0ADE54">
            <div class="column large-12 medium-12 s185A56">
              <div class="row x67B730">
                <div class="column large-12 n22495C">
                  <h2 class="copy helvetica-neue kA26997 channel-custom-font-custom-12-sosumi"><span id="footnote-diamond-1">◊</span>Legal Disclaimers</h2>
                </div>
              </div>
              <div class="row nBAAB83">
                <div class="column large-12 w076B92">
                  <p class="copy helvetica-neue rF00FC0 channel-custom-font-custom-12-sosumi"><span style="font-weight: 500;">Front Ports:</span> When configured with M1&nbsp;Ultra, the two USB-C ports support Thunderbolt&nbsp;4 at up to 40&nbsp;Gbps.</p>
                </div>
              </div>
              <div class="row e233D21">
                <div class="column large-12 kF41620">
                  <p class="copy helvetica-neue bB18953 channel-custom-font-custom-12-sosumi"><span style="font-weight: 500;">Studio&nbsp;Display:</span> Sold separately.</p>
                </div>
              </div>
              <div class="row u8B52BF">
                <div class="column large-12 k29A416">
                  <p class="copy helvetica-neue tBED2F5 channel-custom-font-custom-12-sosumi"><span style="font-weight: 500;">Accessories:</span> Sold separately.</p>
                </div>
              </div>
              <div class="row dB7745D">
                <div class="column large-12 mD02F81">
                  <p class="copy helvetica-neue j4ABDBF channel-custom-font-custom-12-sosumi"><span style="font-weight: 500;">Storage:</span> 1GB = 1 billion bytes and 1TB = 1 trillion&nbsp;bytes; actual formatted capacity less.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--END > LEGAL-->
    </div>


  </body>

</html>