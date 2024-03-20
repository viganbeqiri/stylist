<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Surose</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="/backend/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="/backend/css/adminlte.min.css?v=3.2.0">
  <script nonce="67d76ab5-11b8-4cef-810e-3478d22cce52">
    try {
      (function(w, d) {
        ! function(du, dv, dw, dx) {
          du[dw] = du[dw] || {};
          du[dw].executed = [];
          du.zaraz = {
            deferred: [],
            listeners: []
          };
          du.zaraz.q = [];
          du.zaraz._f = function(dy) {
            return async function() {
              var dz = Array.prototype.slice.call(arguments);
              du.zaraz.q.push({
                m: dy,
                a: dz
              })
            }
          };
          for (const dA of ["track", "set", "debug"]) du.zaraz[dA] = du.zaraz._f(dA);
          du.zaraz.init = () => {
            var dB = dv.getElementsByTagName(dx)[0],
              dC = dv.createElement(dx),
              dD = dv.getElementsByTagName("title")[0];
            dD && (du[dw].t = dv.getElementsByTagName("title")[0].text);
            du[dw].x = Math.random();
            du[dw].w = du.screen.width;
            du[dw].h = du.screen.height;
            du[dw].j = du.innerHeight;
            du[dw].e = du.innerWidth;
            du[dw].l = du.location.href;
            du[dw].r = dv.referrer;
            du[dw].k = du.screen.colorDepth;
            du[dw].n = dv.characterSet;
            du[dw].o = (new Date).getTimezoneOffset();
            if (du.dataLayer)
              for (const dH of Object.entries(Object.entries(dataLayer).reduce(((dI, dJ) => ({
                  ...dI[1],
                  ...dJ[1]
                })), {}))) zaraz.set(dH[0], dH[1], {
                scope: "page"
              });
            du[dw].q = [];
            for (; du.zaraz.q.length;) {
              const dK = du.zaraz.q.shift();
              du[dw].q.push(dK)
            }
            dC.defer = !0;
            for (const dL of [localStorage, sessionStorage]) Object.keys(dL || {}).filter((dN => dN.startsWith("_zaraz_"))).forEach((dM => {
              try {
                du[dw]["z_" + dM.slice(7)] = JSON.parse(dL.getItem(dM))
              } catch {
                du[dw]["z_" + dM.slice(7)] = dL.getItem(dM)
              }
            }));
            dC.referrerPolicy = "origin";
            dC.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(du[dw])));
            dB.parentNode.insertBefore(dC, dB)
          };
          ["complete", "interactive"].includes(dv.readyState) ? zaraz.init() : du.addEventListener("DOMContentLoaded", zaraz.init)
        }(w, d, "zarazData", "script");
      })(window, document)
    } catch (e) {
      throw fetch("/cdn-cgi/zaraz/t"), e;
    };
  </script>
  @yield('backend_css')
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

  <div class="wrapper">

    @include('backend.layouts.header')

    @include('backend.layouts.sidebar')

    <div class="content-wrapper">

      @yield('backend_content')

    </div>

    @include('backend.layouts.footer')

    <aside class="control-sidebar control-sidebar-dark">

    </aside>

  </div>


  <script src="/backend/plugins/jquery/jquery.min.js"></script>
  <script src="/backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/backend/js/adminlte.min.js?v=3.2.0"></script>
  <script src="/backend/plugins/select2/js/select2.full.min.js"></script>
  @yield('backend_js')
</body>

</html>