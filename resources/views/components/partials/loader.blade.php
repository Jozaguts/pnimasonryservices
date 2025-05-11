<div id="websiteLoading" onclick="var elem = document.getElementById('websiteLoading');
    elem.parentNode.removeChild(elem);"
     onkeyup="var elem = document.getElementById('websiteLoading');
    elem.parentNode.removeChild(elem);"
     class="isLoading isLoading-1">
    <div style="background:white;position:absolute;top:0;left:0;right:0;bottom:0;height:100%;width:100%" class="d-none"></div>
    <noscript>
        <style>#websiteLoading{display:none!important}body{visibility:visible!important;overflow:auto!important}</style>
    </noscript>
    <style>
        body {
            overflow:hidden
        }
        body.body {
            visibility:visible;
            overflow:auto
        }
        #websiteLoading
        {
            visibility:visible;
            position:fixed;top:0;left:0;right:0;bottom:0;transition:0.5s all;z-index:100000;background: linear-gradient(135deg, rgba(255,255,255,.95) 20%, rgba(255,255,255,.5), rgba(255,255,255,.95) 80%);
            cursor:wait
        }
        #websiteLoading.isLoading-1{
            background:#fff;
        }
        #websiteLoading.isLoaded{
            opacity:0;cursor:default;
            pointer-events:none;
        }
        @-webkit-keyframes koLoadingRotation {
            to {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        @keyframes koLoadingRotation {
            to {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        .isLoading .spinner
        {
            -webkit-animation: koLoadingRotation 1.5s linear infinite;
            animation: koLoadingRotation 1.5s linear infinite;
            /*will-change: transform;*/
        }
        .isLoading .spinner .path {
            -webkit-animation: dash 1.5s ease-in-out infinite;
            animation: dash 1.5s ease-in-out infinite;
        }
        @-webkit-keyframes dash {
            0% {
                stroke-dasharray: 1, 150;
                stroke-dashoffset: 0;
                stroke:var(--color1);
            }
            50% {
                stroke-dasharray: 90, 150;
                stroke-dashoffset: -35;
                stroke:var(--color2);
            }
            100% {
                stroke-dasharray: 90, 150;
                stroke-dashoffset: -124;
                stroke:var(--color1);
            }
        }
        @keyframes dash {
            0% {
                stroke-dasharray: 1, 150;
                stroke-dashoffset: 0;
                stroke:var(--color1);
            }
            50% {
                stroke-dasharray: 90, 150;
                stroke-dashoffset: -35;
                stroke:var(--color2);
            }
            100% {
                stroke-dasharray: 90, 150;
                stroke-dashoffset: -124;
                stroke:var(--color1);
            }
        }
        #websiteLoading::after
        {
            content:"";
            background: #fff;
            border-radius:100%;
            box-shadow: 5px 5px 50px rgba(0,0,0,0.1);
            position: absolute;
            top: 50%;
            left: 50%;
            margin: -57px 0 0 -57px;
            width: 114px;
            height: 114px;
        }
    </style>
    <svg class="spinner" viewBox="0 0 50 50" style="z-index: 2;position: absolute;top: 50%;left: 50%;width:120px;height:120px;	  margin: -60px 0 0 -60px;">
        <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="2" style="stroke: #ccc; stroke: var(--color1);stroke-linecap: round;">
        </circle>
    </svg>
</div>
