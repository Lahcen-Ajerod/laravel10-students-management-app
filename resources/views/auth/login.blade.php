<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>Login</title>
  <link rel="icon" href="{{asset('favicon.ico')}}"><link href="{{asset('style.css')}}" rel="stylesheet"><script nonce="81bf9697-3485-4076-8e7a-bcf5215e7d6b">try{(function(w,d){!function(dr,ds,dt,du){dr[dt]=dr[dt]||{};dr[dt].executed=[];dr.zaraz={deferred:[],listeners:[]};dr.zaraz.q=[];dr.zaraz._f=function(dv){return async function(){var dw=Array.prototype.slice.call(arguments);dr.zaraz.q.push({m:dv,a:dw})}};for(const dx of["track","set","debug"])dr.zaraz[dx]=dr.zaraz._f(dx);dr.zaraz.init=()=>{var dy=ds.getElementsByTagName(du)[0],dz=ds.createElement(du),dA=ds.getElementsByTagName("title")[0];dA&&(dr[dt].t=ds.getElementsByTagName("title")[0].text);dr[dt].x=Math.random();dr[dt].w=dr.screen.width;dr[dt].h=dr.screen.height;dr[dt].j=dr.innerHeight;dr[dt].e=dr.innerWidth;dr[dt].l=dr.location.href;dr[dt].r=ds.referrer;dr[dt].k=dr.screen.colorDepth;dr[dt].n=ds.characterSet;dr[dt].o=(new Date).getTimezoneOffset();if(dr.dataLayer)for(const dE of Object.entries(Object.entries(dataLayer).reduce(((dF,dG)=>({...dF[1],...dG[1]})),{})))zaraz.set(dE[0],dE[1],{scope:"page"});dr[dt].q=[];for(;dr.zaraz.q.length;){const dH=dr.zaraz.q.shift();dr[dt].q.push(dH)}dz.defer=!0;for(const dI of[localStorage,sessionStorage])Object.keys(dI||{}).filter((dK=>dK.startsWith("_zaraz_"))).forEach((dJ=>{try{dr[dt]["z_"+dJ.slice(7)]=JSON.parse(dI.getItem(dJ))}catch{dr[dt]["z_"+dJ.slice(7)]=dI.getItem(dJ)}}));dz.referrerPolicy="origin";dz.src="cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(dr[dt])));dy.parentNode.insertBefore(dz,dy)};["complete","interactive"].includes(ds.readyState)?zaraz.init():dr.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document)}catch(e){throw fetch("/cdn-cgi/zaraz/t"),e;};</script>
</head>
<body>
<div class="w-full h-screen flex items-center justify-center">

    <div class="w-5/12 flex flex-col">
        <!-- Sign In Form -->
        <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
          <div class="border-b border-stroke px-6.5 py-4 dark:border-strokedark">
            <h3 class="font-medium text-black dark:text-white">
              Sign In Form
            </h3>
          </div>
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="p-6.5">
              <div class="mb-4.5">
                <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                  Email
                </label>
                <input type="email" name="email" id="email" placeholder="Enter your email address" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
              </div>
  
              <div>
                <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                  Password
                </label>
                <input type="password"  name="password" id="password" placeholder="Enter password" autocomplete="new-password" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
              </div>
  
              <div class="mb-5.5 mt-5 flex items-center justify-start gap-5">
  
                <a href="forgot-password" class="text-sm text-primary hover:underline">Forget password?</a>
                <a href="/register" class="text-sm text-primary hover:underline">Register</a>
              </div>
  
              <button class="flex w-full justify-center rounded bg-primary p-3 font-medium text-gray hover:bg-opacity-90">
                Sign In
              </button>
            </div>
          </form>
        </div>
    </div>
</div>
</body>
</html>