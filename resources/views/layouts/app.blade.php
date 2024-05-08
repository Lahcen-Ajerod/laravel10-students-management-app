<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="icon" href="favicon.ico" />
    <link href="{{asset('style.css')}}" rel="stylesheet" />
    <script nonce="d16a277e-3e86-45cf-b2f0-75d38b4d1dde">
      try {
        (function (w, d) {
          !(function (dr, ds, dt, du) {
            dr[dt] = dr[dt] || {};
            dr[dt].executed = [];
            dr.zaraz = { deferred: [], listeners: [] };
            dr.zaraz.q = [];
            dr.zaraz._f = function (dv) {
              return async function () {
                var dw = Array.prototype.slice.call(arguments);
                dr.zaraz.q.push({ m: dv, a: dw });
              };
            };
            for (const dx of ["track", "set", "debug"])
              dr.zaraz[dx] = dr.zaraz._f(dx);
            dr.zaraz.init = () => {
              var dy = ds.getElementsByTagName(du)[0],
                dz = ds.createElement(du),
                dA = ds.getElementsByTagName("title")[0];
              dA && (dr[dt].t = ds.getElementsByTagName("title")[0].text);
              dr[dt].x = Math.random();
              dr[dt].w = dr.screen.width;
              dr[dt].h = dr.screen.height;
              dr[dt].j = dr.innerHeight;
              dr[dt].e = dr.innerWidth;
              dr[dt].l = dr.location.href;
              dr[dt].r = ds.referrer;
              dr[dt].k = dr.screen.colorDepth;
              dr[dt].n = ds.characterSet;
              dr[dt].o = new Date().getTimezoneOffset();
              if (dr.dataLayer)
                for (const dE of Object.entries(
                  Object.entries(dataLayer).reduce(
                    (dF, dG) => ({ ...dF[1], ...dG[1] }),
                    {}
                  )
                ))
                  zaraz.set(dE[0], dE[1], { scope: "page" });
              dr[dt].q = [];
              for (; dr.zaraz.q.length; ) {
                const dH = dr.zaraz.q.shift();
                dr[dt].q.push(dH);
              }
              dz.defer = !0;
              for (const dI of [localStorage, sessionStorage])
                Object.keys(dI || {})
                  .filter((dK) => dK.startsWith("_zaraz_"))
                  .forEach((dJ) => {
                    try {
                      dr[dt]["z_" + dJ.slice(7)] = JSON.parse(dI.getItem(dJ));
                    } catch {
                      dr[dt]["z_" + dJ.slice(7)] = dI.getItem(dJ);
                    }
                  });
              dz.referrerPolicy = "origin";
              dz.src =
                "cdn-cgi/zaraz/sd0d9.js?z=" +
                btoa(encodeURIComponent(JSON.stringify(dr[dt])));
              dy.parentNode.insertBefore(dz, dy);
            };
            ["complete", "interactive"].includes(ds.readyState)
              ? zaraz.init()
              : dr.addEventListener("DOMContentLoaded", zaraz.init);
          })(w, d, "zarazData", "script");
        })(window, document);
      } catch (e) {
        throw (fetch("/cdn-cgi/zaraz/t"), e);
      }
    </script>
  </head>
    <body class="font-sans antialiased">
                <!-- ===== Page Wrapper Start ===== -->
    <div class="flex h-screen overflow-hidden">
        @include('layouts.sidebar')
              <!-- ===== Content Area Start ===== -->
      <div
      class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden"
    >
            @include('layouts.navbar')

        <!-- ===== Main Content Start ===== -->
        <main>
                {{ $slot }}
            </main>
                    <!-- ===== Main Content End ===== -->

        </div>
        </div>
                        <!-- ===== Page Wrapper End ===== -->
        <script defer src="{{asset('bundle.js')}}"></script>
        <script
          defer
          src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317"
          integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA=="
          data-cf-beacon='{"rayId":"873f26271a580daf","version":"2024.3.0","r":1,"token":"67f7a278e3374824ae6dd92295d38f77","b":1}'
          crossorigin="anonymous"
        ></script>
    </body>
</html>
