@extends('layout.user.master_layout')

@section('styles')
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap');

    @font-face {
      font-family: 'Bazinga';
      font-style: normal;
      font-weight: 400;
      src: url('fonts/Bazinga-Regular.ttf');
    }

    .yellow {
      background-color: #FBD019;
    }

    .green {
      background-color: #3395A9;
    }

    .spiral-bg {
      background-image: url('images/workshop/base/spiral-bright.png');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      /* background-attachment: fixed; */
    }

    .first-section {
      min-height: 40rem;
      max-width: 100%;
      position: relative;
    }

    .mh-100vh {
      min-height: 100vh;
    }

    .mw-100 {
      max-width: 80%;
    }

    .ptop-5 {
      padding-top: 5rem;
    }

    .pbot-5 {
      padding-bottom: 5rem;
    }

    .h-2rem {
      height: 2rem;
    }

    .w-max-3 {
      width: 3rem;
    }

    .h-max-10 {
      height: 10rem;
    }

    .w-max-50 {
      width: 50rem;
    }

    .w-max-21vw {
      width: 21vw;
    }

    .base-right {
      right: 1rem;
    }

    .base-left {
      left: 1rem;
    }

    .hero-title {
      font-family: Bazinga;
      text-shadow: 1px -2px 0 #000, 2px 4px 0 #000, 3px 6px 0 #000;
      -webkit-text-stroke: 2px #000;
      font-size: 500px;
    }

    .title-content {
      font-family: 'Inter', sans-serif;
      font-weight: 400;
    }

    .fs-4rem {
      font-size: 4rem;
    }

    .timer {
      font-family: 'Inter', sans-serif;
    }

    .base-top-left {
      left: 2rem;
    }

    .w-max-95vw {
      width: 95vw;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
    }

    .sun-bg {
      z-index: 0;
      opacity: 35%;
    }

    .cloud-1 {
      z-index: 3;
      top: -90px;
      left: -120px;
      overflow: hidden;
    }

    .cloud-2 {
      z-index: 3;
      bottom: -90px;
      left: -120px;
      overflow: hidden;
    }

    .cloud-3 {
      z-index: 3;
      top: -90px;
      right: -120px;
      overflow: hidden;
    }

    .cloud-4 {
      z-index: 3;
      bottom: -90px;
      right: -120px;
      overflow: hidden;
    }

    .bar {
      z-index: 4;
    }

    .logo {
      width: 80%;
      height: 80%;
      max-width: 50vw;
      padding-left: 5%;

    }

    .text-content {
      z-index: 100;
    }
    div.my-alert.my-alert__unique9 {
  min-height: 100vh;
  width: 100%;
  position: relative;
}

div.my-alert > div.my-alert__unique5 {
  display: flex;
  flex-direction: column;
}

@media (min-width: 768px) {
  div.my-alert > div.my-alert__unique5 {
    flex-direction: row;
  }
}

div.my-alert > div.my-alert__unique5 {
  width: 100%;
  height: 100%;
  z-index: 50;
  position: absolute;
  justify-content: space-around;
  align-items: center;
}

div.my-alert > div > div.my-alert__unique1 {
  width: 100%;
}

@media (min-width: 768px) {
  div.my-alert > div > div.my-alert__unique1 {
    width: 33.333333%;
  }
}

div.my-alert > div > div.my-alert__unique1 {
  height: 100vh;
}

div.my-alert > div > div > img {
  height: 100%;
  width: 100%;
  -o-object-fit: fill;
  object-fit: fill;
}

div.my-alert > div > div.my-alert__unique2 {
  width: 100%;
}

@media (min-width: 768px) {
  div.my-alert > div > div.my-alert__unique2 {
    width: 40%;
  }
}

div.my-alert > div > div.my-alert__unique2 {
  height: 100vh;
}

div.my-alert > div > div.my-alert__unique3 {
  width: 100%;
}

@media (min-width: 768px) {
  div.my-alert > div > div.my-alert__unique3 {
    width: 33.333333%;
  }
}

div.my-alert > div > div.my-alert__unique3 {
  padding-left: var(--tw-size-12);
  padding-right: var(--tw-size-12);
}

div.my-alert > div > div > h1 {
  text-align: center;
  font-size: var(--tw-font-size-sm);
  line-height: var(--tw-line-height-5);
}

@media (min-width: 768px) {
  div.my-alert > div > div > h1 {
    font-size: var(--tw-font-size-xl);
    line-height: var(--tw-line-height-7);
  }
}

div.my-alert > div > div > h1 {
  --tw-text-opacity: 1;
  color: rgb(var(--tw-color-white) / var(--tw-text-opacity));
  --tw-drop-shadow: drop-shadow(0 4px 4px rgba(0, 0, 0, 1));
  filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast)
    var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate)
    var(--tw-sepia) var(--tw-drop-shadow);
}

div.my-alert > div > div > ul {
  list-style-type: disc;
  font-size: 0.6rem;
}

@media (min-width: 768px) {
  div.my-alert > div > div > ul {
    font-size: var(--tw-font-size-sm);
    line-height: var(--tw-line-height-5);
  }
}

div.my-alert > div > div > ul {
  margin-top: var(--tw-size-2);
}

@media (min-width: 768px) {
  div.my-alert > div > div > ul {
    margin-top: var(--tw-size-4);
  }
}

div.my-alert > div > div > ul {
  font-weight: var(--tw-font-weight-bold);
}

div.my-alert > div > div.my-alert__unique4 {
  width: 100%;
}

@media (min-width: 768px) {
  div.my-alert > div > div.my-alert__unique4 {
    width: 33.333333%;
  }
}

div.my-alert > div > div.my-alert__unique4 {
  padding-left: var(--tw-size-12);
  padding-right: var(--tw-size-12);
}

div.my-alert > div.my-alert__unique6 {
  opacity: 0;
  display: flex;
  flex-direction: column;
}

@media (min-width: 768px) {
  div.my-alert > div.my-alert__unique6 {
    flex-direction: row;
  }
}

div.my-alert > div.my-alert__unique6 {
  width: 100%;
  height: 100%;
  z-index: 50;
  justify-content: space-around;
  align-items: center;
}

div.my-alert > div > div.my-alert__unique7 {
  width: 100%;
}

@media (min-width: 768px) {
  div.my-alert > div > div.my-alert__unique7 {
    width: 33.333333%;
  }
}

div.my-alert > div > div.my-alert__unique7 {
  padding-left: var(--tw-size-12);
  padding-right: var(--tw-size-12);
}

div.my-alert > div > div.my-alert__unique8 {
  width: 100%;
}

@media (min-width: 768px) {
  div.my-alert > div > div.my-alert__unique8 {
    width: 33.333333%;
  }
}

div.my-alert > div > div.my-alert__unique8 {
  padding-left: var(--tw-size-12);
  padding-right: var(--tw-size-12);
}

div.my-alert > img.my-alert__unique15 {
  height: 100%;
  position: absolute;
  bottom: var(--tw-size-0);
  z-index: 40;
}

div.my-alert.my-alert__unique10 {
  min-height: 150vh;
  width: 100%;
  position: relative;
}

div.my-alert > div.my-alert__unique11 {
  display: flex;
  flex-direction: column;
  width: 100%;
  height: 100%;
  z-index: 50;
  position: absolute;
  justify-content: center;
  align-items: center;
  gap: var(--tw-size-12);
}

div.my-alert > div > h1.my-alert__unique20 {
  --tw-text-opacity: 1;
  color: rgb(var(--tw-color-white) / var(--tw-text-opacity));
  font-size: var(--tw-font-size-4xl);
  line-height: var(--tw-line-height-10);
}

@media (min-width: 768px) {
  div.my-alert > div > h1.my-alert__unique20 {
    font-size: var(--tw-font-size-6xl);
    line-height: var(--tw-line-height-none);
  }
}

div.my-alert > div > h1.my-alert__unique20 {
  --tw-drop-shadow: drop-shadow(0 4px 4px rgba(0, 0, 0, 1));
  filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast)
    var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate)
    var(--tw-sepia) var(--tw-drop-shadow);
}

div.my-alert > div > div.my-alert__unique12 {
  display: flex;
  flex-direction: column;
}

@media (min-width: 768px) {
  div.my-alert > div > div.my-alert__unique12 {
    flex-direction: row;
  }
}

div.my-alert > div > div.my-alert__unique12 {
  justify-content: center;
  align-items: center;
  gap: var(--tw-size-4);
}

div.my-alert > div > div > a > img {
  width: 33.333333%;
}

@media (min-width: 768px) {
  div.my-alert > div > div > a > img {
    width: 100%;
  }
}

div.my-alert > div > div > a > img {
  margin-left: auto;
  margin-right: auto;
}

div.my-alert > div.my-alert__unique13 {
  display: flex;
  flex-direction: column;
  width: 100%;
  height: 100%;
  z-index: 50;
  opacity: 0;
  justify-content: center;
  align-items: center;
  gap: var(--tw-size-12);
}

div.my-alert > div > div.my-alert__unique14 {
  display: flex;
  flex-direction: column;
}

@media (min-width: 768px) {
  div.my-alert > div > div.my-alert__unique14 {
    flex-direction: row;
  }
}

div.my-alert > div > div.my-alert__unique14 {
  justify-content: center;
  align-items: center;
  gap: var(--tw-size-4);
}

div.my-alert > img.my-alert__unique16 {
  height: 150vh;
  width: 100%;
  position: absolute;
  top: calc(var(--tw-size-2) * -1);
  bottom: var(--tw-size-0);
  z-index: 40;
}

div.my-alert > img.my-alert__unique17 {
  width: 100%;
  position: absolute;
  bottom: var(--tw-size-0);
  z-index: 50;
}

div.my-alert.my-alert__unique18 {
  width: 100%;
  min-height: 100vh;
  --tw-bg-opacity: 1;
  background-color: rgb(51 149 169 / var(--tw-bg-opacity));
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
}

div.my-alert > div.my-alert__unique19 {
  position: absolute;
  width: 50%;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
}

div.my-alert > div.my-alert__unique19:nth-child(odd) {
  align-items: flex-end;
}

div.my-alert > div.my-alert__unique19:nth-child(even) {
  align-items: flex-start;
}

div.my-alert > div.my-alert__unique19 {
  z-index: 20;
  /* Unknown class .px-auto */
  gap: var(--tw-size-2);
  padding-top: var(--tw-size-12);
  padding-bottom: var(--tw-size-12);
}

div.my-alert > div > h1.my-alert__unique21 {
  margin-left: auto;
  margin-right: auto;
  --tw-text-opacity: 1;
  color: rgb(var(--tw-color-white) / var(--tw-text-opacity));
  font-size: var(--tw-font-size-4xl);
  line-height: var(--tw-line-height-10);
}

@media (min-width: 768px) {
  div.my-alert > div > h1.my-alert__unique21 {
    font-size: var(--tw-font-size-6xl);
    line-height: var(--tw-line-height-none);
  }
}

div.my-alert > div > h1.my-alert__unique21 {
  --tw-drop-shadow: drop-shadow(0 4px 4px rgba(0, 0, 0, 1));
  filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast)
    var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate)
    var(--tw-sepia) var(--tw-drop-shadow);
  /* Unknown class .text-decoration-underline */
  margin-top: var(--tw-size-8);
  margin-bottom: var(--tw-size-8);
}

div.my-alert > div > a:nth-child(even) {
  margin-right: auto;
}

div.my-alert > div > a:nth-child(odd) {
  margin-left: auto;
}

div.my-alert > div.my-alert__unique22 {
  opacity: 0;
  width: 50%;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
}

div.my-alert > div.my-alert__unique22:nth-child(odd) {
  align-items: flex-end;
}

div.my-alert > div.my-alert__unique22:nth-child(even) {
  align-items: flex-start;
}

div.my-alert > div.my-alert__unique22 {
  z-index: 20;
  /* Unknown class .px-auto */
  gap: var(--tw-size-2);
  padding-top: var(--tw-size-12);
  padding-bottom: var(--tw-size-12);
}

div.my-alert > div > h1.my-alert__unique23 {
  margin-left: auto;
  margin-right: auto;
  --tw-text-opacity: 1;
  color: rgb(var(--tw-color-white) / var(--tw-text-opacity));
  font-size: var(--tw-font-size-4xl);
  line-height: var(--tw-line-height-10);
}

@media (min-width: 768px) {
  div.my-alert > div > h1.my-alert__unique23 {
    font-size: var(--tw-font-size-6xl);
    line-height: var(--tw-line-height-none);
  }
}

div.my-alert > div > h1.my-alert__unique23 {
  --tw-drop-shadow: drop-shadow(0 4px 4px rgba(0, 0, 0, 1));
  filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast)
    var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate)
    var(--tw-sepia) var(--tw-drop-shadow);
  /* Unknown class .text-decoration-underline */
  margin-top: var(--tw-size-8);
  margin-bottom: var(--tw-size-8);
}

div.my-alert > img.my-alert__unique24 {
  width: 100%;
  min-height: 100%;
  position: absolute;
  bottom: var(--tw-size-0);
  z-index: 10;
}

div.my-alert > img.my-alert__unique25 {
  position: absolute;
  top: var(--tw-size-4);
  left: var(--tw-size-4);
  z-index: 10;
  width: 33.333333%;
}

@media (min-width: 768px) {
  div.my-alert > img.my-alert__unique25 {
    width: var(--tw-size-72);
  }
}

div.my-alert > img.my-alert__unique26 {
  position: absolute;
  bottom: var(--tw-size-4);
  right: var(--tw-size-4);
  z-index: 10;
  width: 33.333333%;
}

@media (min-width: 768px) {
  div.my-alert > img.my-alert__unique26 {
    width: var(--tw-size-72);
  }
}
:root {
  --tw-screen-sm: 640px;
  --tw-screen-md: 768px;
  --tw-screen-lg: 1024px;
  --tw-screen-xl: 1280px;
  --tw-screen-2xl: 1536px;
  --tw-color-inherit: inherit;
  --tw-color-current: currentColor;
  --tw-color-transparent: transparent;
  --tw-color-black: 0 0 0;
  --tw-color-white: 255 255 255;
  --tw-color-slate-50: 248 250 252;
  --tw-color-slate-100: 241 245 249;
  --tw-color-slate-200: 226 232 240;
  --tw-color-slate-300: 203 213 225;
  --tw-color-slate-400: 148 163 184;
  --tw-color-slate-500: 100 116 139;
  --tw-color-slate-600: 71 85 105;
  --tw-color-slate-700: 51 65 85;
  --tw-color-slate-800: 30 41 59;
  --tw-color-slate-900: 15 23 42;
  --tw-color-gray-50: 249 250 251;
  --tw-color-gray-100: 243 244 246;
  --tw-color-gray-200: 229 231 235;
  --tw-color-gray-300: 209 213 219;
  --tw-color-gray-400: 156 163 175;
  --tw-color-gray-500: 107 114 128;
  --tw-color-gray-600: 75 85 99;
  --tw-color-gray-700: 55 65 81;
  --tw-color-gray-800: 31 41 55;
  --tw-color-gray-900: 17 24 39;
  --tw-color-zinc-50: 250 250 250;
  --tw-color-zinc-100: 244 244 245;
  --tw-color-zinc-200: 228 228 231;
  --tw-color-zinc-300: 212 212 216;
  --tw-color-zinc-400: 161 161 170;
  --tw-color-zinc-500: 113 113 122;
  --tw-color-zinc-600: 82 82 91;
  --tw-color-zinc-700: 63 63 70;
  --tw-color-zinc-800: 39 39 42;
  --tw-color-zinc-900: 24 24 27;
  --tw-color-neutral-50: 250 250 250;
  --tw-color-neutral-100: 245 245 245;
  --tw-color-neutral-200: 229 229 229;
  --tw-color-neutral-300: 212 212 212;
  --tw-color-neutral-400: 163 163 163;
  --tw-color-neutral-500: 115 115 115;
  --tw-color-neutral-600: 82 82 82;
  --tw-color-neutral-700: 64 64 64;
  --tw-color-neutral-800: 38 38 38;
  --tw-color-neutral-900: 23 23 23;
  --tw-color-stone-50: 250 250 249;
  --tw-color-stone-100: 245 245 244;
  --tw-color-stone-200: 231 229 228;
  --tw-color-stone-300: 214 211 209;
  --tw-color-stone-400: 168 162 158;
  --tw-color-stone-500: 120 113 108;
  --tw-color-stone-600: 87 83 78;
  --tw-color-stone-700: 68 64 60;
  --tw-color-stone-800: 41 37 36;
  --tw-color-stone-900: 28 25 23;
  --tw-color-red-50: 254 242 242;
  --tw-color-red-100: 254 226 226;
  --tw-color-red-200: 254 202 202;
  --tw-color-red-300: 252 165 165;
  --tw-color-red-400: 248 113 113;
  --tw-color-red-500: 239 68 68;
  --tw-color-red-600: 220 38 38;
  --tw-color-red-700: 185 28 28;
  --tw-color-red-800: 153 27 27;
  --tw-color-red-900: 127 29 29;
  --tw-color-orange-50: 255 247 237;
  --tw-color-orange-100: 255 237 213;
  --tw-color-orange-200: 254 215 170;
  --tw-color-orange-300: 253 186 116;
  --tw-color-orange-400: 251 146 60;
  --tw-color-orange-500: 249 115 22;
  --tw-color-orange-600: 234 88 12;
  --tw-color-orange-700: 194 65 12;
  --tw-color-orange-800: 154 52 18;
  --tw-color-orange-900: 124 45 18;
  --tw-color-amber-50: 255 251 235;
  --tw-color-amber-100: 254 243 199;
  --tw-color-amber-200: 253 230 138;
  --tw-color-amber-300: 252 211 77;
  --tw-color-amber-400: 251 191 36;
  --tw-color-amber-500: 245 158 11;
  --tw-color-amber-600: 217 119 6;
  --tw-color-amber-700: 180 83 9;
  --tw-color-amber-800: 146 64 14;
  --tw-color-amber-900: 120 53 15;
  --tw-color-yellow-50: 254 252 232;
  --tw-color-yellow-100: 254 249 195;
  --tw-color-yellow-200: 254 240 138;
  --tw-color-yellow-300: 253 224 71;
  --tw-color-yellow-400: 250 204 21;
  --tw-color-yellow-500: 234 179 8;
  --tw-color-yellow-600: 202 138 4;
  --tw-color-yellow-700: 161 98 7;
  --tw-color-yellow-800: 133 77 14;
  --tw-color-yellow-900: 113 63 18;
  --tw-color-lime-50: 247 254 231;
  --tw-color-lime-100: 236 252 203;
  --tw-color-lime-200: 217 249 157;
  --tw-color-lime-300: 190 242 100;
  --tw-color-lime-400: 163 230 53;
  --tw-color-lime-500: 132 204 22;
  --tw-color-lime-600: 101 163 13;
  --tw-color-lime-700: 77 124 15;
  --tw-color-lime-800: 63 98 18;
  --tw-color-lime-900: 54 83 20;
  --tw-color-green-50: 240 253 244;
  --tw-color-green-100: 220 252 231;
  --tw-color-green-200: 187 247 208;
  --tw-color-green-300: 134 239 172;
  --tw-color-green-400: 74 222 128;
  --tw-color-green-500: 34 197 94;
  --tw-color-green-600: 22 163 74;
  --tw-color-green-700: 21 128 61;
  --tw-color-green-800: 22 101 52;
  --tw-color-green-900: 20 83 45;
  --tw-color-emerald-50: 236 253 245;
  --tw-color-emerald-100: 209 250 229;
  --tw-color-emerald-200: 167 243 208;
  --tw-color-emerald-300: 110 231 183;
  --tw-color-emerald-400: 52 211 153;
  --tw-color-emerald-500: 16 185 129;
  --tw-color-emerald-600: 5 150 105;
  --tw-color-emerald-700: 4 120 87;
  --tw-color-emerald-800: 6 95 70;
  --tw-color-emerald-900: 6 78 59;
  --tw-color-teal-50: 240 253 250;
  --tw-color-teal-100: 204 251 241;
  --tw-color-teal-200: 153 246 228;
  --tw-color-teal-300: 94 234 212;
  --tw-color-teal-400: 45 212 191;
  --tw-color-teal-500: 20 184 166;
  --tw-color-teal-600: 13 148 136;
  --tw-color-teal-700: 15 118 110;
  --tw-color-teal-800: 17 94 89;
  --tw-color-teal-900: 19 78 74;
  --tw-color-cyan-50: 236 254 255;
  --tw-color-cyan-100: 207 250 254;
  --tw-color-cyan-200: 165 243 252;
  --tw-color-cyan-300: 103 232 249;
  --tw-color-cyan-400: 34 211 238;
  --tw-color-cyan-500: 6 182 212;
  --tw-color-cyan-600: 8 145 178;
  --tw-color-cyan-700: 14 116 144;
  --tw-color-cyan-800: 21 94 117;
  --tw-color-cyan-900: 22 78 99;
  --tw-color-sky-50: 240 249 255;
  --tw-color-sky-100: 224 242 254;
  --tw-color-sky-200: 186 230 253;
  --tw-color-sky-300: 125 211 252;
  --tw-color-sky-400: 56 189 248;
  --tw-color-sky-500: 14 165 233;
  --tw-color-sky-600: 2 132 199;
  --tw-color-sky-700: 3 105 161;
  --tw-color-sky-800: 7 89 133;
  --tw-color-sky-900: 12 74 110;
  --tw-color-blue-50: 239 246 255;
  --tw-color-blue-100: 219 234 254;
  --tw-color-blue-200: 191 219 254;
  --tw-color-blue-300: 147 197 253;
  --tw-color-blue-400: 96 165 250;
  --tw-color-blue-500: 59 130 246;
  --tw-color-blue-600: 37 99 235;
  --tw-color-blue-700: 29 78 216;
  --tw-color-blue-800: 30 64 175;
  --tw-color-blue-900: 30 58 138;
  --tw-color-indigo-50: 238 242 255;
  --tw-color-indigo-100: 224 231 255;
  --tw-color-indigo-200: 199 210 254;
  --tw-color-indigo-300: 165 180 252;
  --tw-color-indigo-400: 129 140 248;
  --tw-color-indigo-500: 99 102 241;
  --tw-color-indigo-600: 79 70 229;
  --tw-color-indigo-700: 67 56 202;
  --tw-color-indigo-800: 55 48 163;
  --tw-color-indigo-900: 49 46 129;
  --tw-color-violet-50: 245 243 255;
  --tw-color-violet-100: 237 233 254;
  --tw-color-violet-200: 221 214 254;
  --tw-color-violet-300: 196 181 253;
  --tw-color-violet-400: 167 139 250;
  --tw-color-violet-500: 139 92 246;
  --tw-color-violet-600: 124 58 237;
  --tw-color-violet-700: 109 40 217;
  --tw-color-violet-800: 91 33 182;
  --tw-color-violet-900: 76 29 149;
  --tw-color-purple-50: 250 245 255;
  --tw-color-purple-100: 243 232 255;
  --tw-color-purple-200: 233 213 255;
  --tw-color-purple-300: 216 180 254;
  --tw-color-purple-400: 192 132 252;
  --tw-color-purple-500: 168 85 247;
  --tw-color-purple-600: 147 51 234;
  --tw-color-purple-700: 126 34 206;
  --tw-color-purple-800: 107 33 168;
  --tw-color-purple-900: 88 28 135;
  --tw-color-fuchsia-50: 253 244 255;
  --tw-color-fuchsia-100: 250 232 255;
  --tw-color-fuchsia-200: 245 208 254;
  --tw-color-fuchsia-300: 240 171 252;
  --tw-color-fuchsia-400: 232 121 249;
  --tw-color-fuchsia-500: 217 70 239;
  --tw-color-fuchsia-600: 192 38 211;
  --tw-color-fuchsia-700: 162 28 175;
  --tw-color-fuchsia-800: 134 25 143;
  --tw-color-fuchsia-900: 112 26 117;
  --tw-color-pink-50: 253 242 248;
  --tw-color-pink-100: 252 231 243;
  --tw-color-pink-200: 251 207 232;
  --tw-color-pink-300: 249 168 212;
  --tw-color-pink-400: 244 114 182;
  --tw-color-pink-500: 236 72 153;
  --tw-color-pink-600: 219 39 119;
  --tw-color-pink-700: 190 24 93;
  --tw-color-pink-800: 157 23 77;
  --tw-color-pink-900: 131 24 67;
  --tw-color-rose-50: 255 241 242;
  --tw-color-rose-100: 255 228 230;
  --tw-color-rose-200: 254 205 211;
  --tw-color-rose-300: 253 164 175;
  --tw-color-rose-400: 251 113 133;
  --tw-color-rose-500: 244 63 94;
  --tw-color-rose-600: 225 29 72;
  --tw-color-rose-700: 190 18 60;
  --tw-color-rose-800: 159 18 57;
  --tw-color-rose-900: 136 19 55;
  --tw-color-primary-50: 239 246 255;
  --tw-color-primary-100: 219 234 254;
  --tw-color-primary-200: 191 219 254;
  --tw-color-primary-300: 147 197 253;
  --tw-color-primary-400: 96 165 250;
  --tw-color-primary-500: 59 130 246;
  --tw-color-primary-600: 37 99 235;
  --tw-color-primary-700: 29 78 216;
  --tw-color-primary-800: 30 64 175;
  --tw-color-primary-900: 30 58 138;
  --tw-color-primary: 48 86 211;
  --tw-size-0: 0px;
  --tw-size-1: 0.25rem;
  --tw-size-2: 0.5rem;
  --tw-size-3: 0.75rem;
  --tw-size-4: 1rem;
  --tw-size-5: 1.25rem;
  --tw-size-6: 1.5rem;
  --tw-size-7: 1.75rem;
  --tw-size-8: 2rem;
  --tw-size-9: 2.25rem;
  --tw-size-10: 2.5rem;
  --tw-size-11: 2.75rem;
  --tw-size-12: 3rem;
  --tw-size-14: 3.5rem;
  --tw-size-16: 4rem;
  --tw-size-20: 5rem;
  --tw-size-24: 6rem;
  --tw-size-28: 7rem;
  --tw-size-32: 8rem;
  --tw-size-36: 9rem;
  --tw-size-40: 10rem;
  --tw-size-44: 11rem;
  --tw-size-48: 12rem;
  --tw-size-52: 13rem;
  --tw-size-56: 14rem;
  --tw-size-60: 15rem;
  --tw-size-64: 16rem;
  --tw-size-72: 18rem;
  --tw-size-80: 20rem;
  --tw-size-96: 24rem;
  --tw-size-px: 1px;
  --tw-size-0_5: 0.125rem;
  --tw-size-1_5: 0.375rem;
  --tw-size-2_5: 0.625rem;
  --tw-size-3_5: 0.875rem;
  --tw-width-1: 1;
  --tw-width-2: 2;
  --tw-width-3: 3;
  --tw-width-4: 4;
  --tw-width-5: 5;
  --tw-width-6: 6;
  --tw-width-7: 7;
  --tw-width-8: 8;
  --tw-width-9: 9;
  --tw-width-10: 10;
  --tw-width-11: 11;
  --tw-width-12: 12;
  --tw-width-auto: auto;
  --tw-width-3xs: 16rem;
  --tw-width-2xs: 18rem;
  --tw-width-xs: 20rem;
  --tw-width-sm: 24rem;
  --tw-width-md: 28rem;
  --tw-width-lg: 32rem;
  --tw-width-xl: 36rem;
  --tw-width-2xl: 42rem;
  --tw-width-3xl: 48rem;
  --tw-width-4xl: 56rem;
  --tw-width-5xl: 64rem;
  --tw-width-6xl: 72rem;
  --tw-width-7xl: 80rem;
  --tw-width-prose: 65ch;
  --tw-font-family-sans: ui-sans-serif, system-ui, -apple-system,
    BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans",
    sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
    "Noto Color Emoji";
  --tw-font-family-serif: ui-serif, Georgia, Cambria, "Times New Roman", Times,
    serif;
  --tw-font-family-mono: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas,
    "Liberation Mono", "Courier New", monospace;
  --tw-font-size-xs: 0.75rem;
  --tw-font-size-sm: 0.875rem;
  --tw-font-size-base: 1rem;
  --tw-font-size-lg: 1.125rem;
  --tw-font-size-xl: 1.25rem;
  --tw-font-size-2xl: 1.5rem;
  --tw-font-size-3xl: 1.875rem;
  --tw-font-size-4xl: 2.25rem;
  --tw-font-size-5xl: 3rem;
  --tw-font-size-6xl: 3.75rem;
  --tw-font-size-7xl: 4.5rem;
  --tw-font-size-8xl: 6rem;
  --tw-font-size-9xl: 8rem;
  --tw-font-weight-thin: 100;
  --tw-font-weight-extralight: 200;
  --tw-font-weight-light: 300;
  --tw-font-weight-normal: 400;
  --tw-font-weight-medium: 500;
  --tw-font-weight-semibold: 600;
  --tw-font-weight-bold: 700;
  --tw-font-weight-extrabold: 800;
  --tw-font-weight-black: 900;
  --tw-line-height-3: 0.75rem;
  --tw-line-height-4: 1rem;
  --tw-line-height-5: 1.25rem;
  --tw-line-height-6: 1.5rem;
  --tw-line-height-7: 1.75rem;
  --tw-line-height-8: 2rem;
  --tw-line-height-9: 2.25rem;
  --tw-line-height-10: 2.5rem;
  --tw-line-height-none: 1;
  --tw-line-height-tight: 1.25;
  --tw-line-height-snug: 1.375;
  --tw-line-height-normal: 1.5;
  --tw-line-height-relaxed: 1.625;
  --tw-line-height-loose: 2;
  --tw-border-radius-none: 0px;
  --tw-border-radius-sm: 0.125rem;
  --tw-border-radius-default: 0.25rem;
  --tw-border-radius-md: 0.375rem;
  --tw-border-radius-lg: 0.5rem;
  --tw-border-radius-xl: 0.75rem;
  --tw-border-radius-2xl: 1rem;
  --tw-border-radius-3xl: 1.5rem;
  --tw-border-radius-full: 9999px;
}

@layer tailwind-reset {
  /*
! tailwindcss v3.1.8 | MIT License | https://tailwindcss.com
*/ /*
1. Prevent padding and border from affecting element width. (https://github.com/mozdevs/cssremedy/issues/4)
2. Allow adding a border to an element by just adding a border-width. (https://github.com/tailwindcss/tailwindcss/pull/116)
*/

  *,
  ::before,
  ::after {
    box-sizing: border-box; /* 1 */
    border-width: 0; /* 2 */
    border-style: solid; /* 2 */
    border-color: rgb(var(--tw-color-gray-200) / 1); /* 2 */
  }

  ::before,
  ::after {
    --tw-content: "";
  }

  /*
1. Use a consistent sensible line-height in all browsers.
2. Prevent adjustments of font size after orientation changes in iOS.
3. Use a more readable tab size.
4. Use the user's configured `sans` font-family by default.
*/

  html {
    line-height: 1.5; /* 1 */
    -webkit-text-size-adjust: 100%; /* 2 */
    -moz-tab-size: 4; /* 3 */
    -o-tab-size: 4;
    tab-size: 4; /* 3 */
    font-family: var(--tw-font-family-sans); /* 4 */
  }

  /*
1. Remove the margin in all browsers.
2. Inherit line-height from `html` so users can set them as a class directly on the `html` element.
*/

  body {
    margin: 0; /* 1 */
    line-height: inherit; /* 2 */
  }

  /*
1. Add the correct height in Firefox.
2. Correct the inheritance of border color in Firefox. (https://bugzilla.mozilla.org/show_bug.cgi?id=190655)
3. Ensure horizontal rules are visible by default.
*/

  hr {
    height: 0; /* 1 */
    color: inherit; /* 2 */
    border-top-width: 1px; /* 3 */
  }

  /*
Add the correct text decoration in Chrome, Edge, and Safari.
*/

  abbr:where([title]) {
    -webkit-text-decoration: underline dotted;
    text-decoration: underline dotted;
  }

  /*
Remove the default font size and weight for headings.
*/

  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    font-size: inherit;
    font-weight: inherit;
  }

  /*
Reset links to optimize for opt-in styling instead of opt-out.
*/

  a {
    color: inherit;
    text-decoration: inherit;
  }

  /*
Add the correct font weight in Edge and Safari.
*/

  b,
  strong {
    font-weight: bolder;
  }

  /*
1. Use the user's configured `mono` font family by default.
2. Correct the odd `em` font sizing in all browsers.
*/

  code,
  kbd,
  samp,
  pre {
    font-family: var(--tw-font-family-mono); /* 1 */
    font-size: 1em; /* 2 */
  }

  /*
Add the correct font size in all browsers.
*/

  small {
    font-size: 80%;
  }

  /*
Prevent `sub` and `sup` elements from affecting the line height in all browsers.
*/

  sub,
  sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline;
  }

  sub {
    bottom: -0.25em;
  }

  sup {
    top: -0.5em;
  }

  /*
1. Remove text indentation from table contents in Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=999088, https://bugs.webkit.org/show_bug.cgi?id=201297)
2. Correct table border color inheritance in all Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=935729, https://bugs.webkit.org/show_bug.cgi?id=195016)
3. Remove gaps between table borders by default.
*/

  table {
    text-indent: 0; /* 1 */
    border-color: inherit; /* 2 */
    border-collapse: collapse; /* 3 */
  }

  /*
1. Change the font styles in all browsers.
2. Remove the margin in Firefox and Safari.
3. Remove default padding in all browsers.
*/

  button,
  input,
  optgroup,
  select,
  textarea {
    font-family: inherit; /* 1 */
    font-size: 100%; /* 1 */
    font-weight: inherit; /* 1 */
    line-height: inherit; /* 1 */
    color: inherit; /* 1 */
    margin: 0; /* 2 */
    padding: 0; /* 3 */
  }

  /*
Remove the inheritance of text transform in Edge and Firefox.
*/

  button,
  select {
    text-transform: none;
  }

  /*
1. Correct the inability to style clickable types in iOS and Safari.
2. Remove default button styles.
*/

  button,
  [type="button"],
  [type="reset"],
  [type="submit"] {
    -webkit-appearance: button; /* 1 */
    background-color: transparent; /* 2 */
    background-image: none; /* 2 */
  }

  /*
Use the modern Firefox focus style for all focusable elements.
*/

  :-moz-focusring {
    outline: auto;
  }

  /*
Remove the additional `:invalid` styles in Firefox. (https://github.com/mozilla/gecko-dev/blob/2f9eacd9d3d995c937b4251a5557d95d494c9be1/layout/style/res/forms.css#L728-L737)
*/

  :-moz-ui-invalid {
    box-shadow: none;
  }

  /*
Add the correct vertical alignment in Chrome and Firefox.
*/

  progress {
    vertical-align: baseline;
  }

  /*
Correct the cursor style of increment and decrement buttons in Safari.
*/

  ::-webkit-inner-spin-button,
  ::-webkit-outer-spin-button {
    height: auto;
  }

  /*
1. Correct the odd appearance in Chrome and Safari.
2. Correct the outline style in Safari.
*/

  [type="search"] {
    -webkit-appearance: textfield; /* 1 */
    outline-offset: -2px; /* 2 */
  }

  /*
Remove the inner padding in Chrome and Safari on macOS.
*/

  ::-webkit-search-decoration {
    -webkit-appearance: none;
  }

  /*
1. Correct the inability to style clickable types in iOS and Safari.
2. Change font properties to `inherit` in Safari.
*/

  ::-webkit-file-upload-button {
    -webkit-appearance: button; /* 1 */
    font: inherit; /* 2 */
  }

  /*
Add the correct display in Chrome and Safari.
*/

  summary {
    display: list-item;
  }

  /*
Removes the default spacing and border for appropriate elements.
*/

  blockquote,
  dl,
  dd,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6,
  hr,
  figure,
  p,
  pre {
    margin: 0;
  }

  fieldset {
    margin: 0;
    padding: 0;
  }

  legend {
    padding: 0;
  }

  ol,
  ul,
  menu {
    list-style: none;
    margin: 0;
    padding: 0;
  }

  /*
Prevent resizing textareas horizontally by default.
*/

  textarea {
    resize: vertical;
  }

  /*
1. Reset the default placeholder opacity in Firefox. (https://github.com/tailwindlabs/tailwindcss/issues/3300)
2. Set the default placeholder color to the user's configured gray 400 color.
*/

  input::-moz-placeholder,
  textarea::-moz-placeholder {
    opacity: 1; /* 1 */
    color: rgb(var(--tw-color-gray-400) / 1); /* 2 */
  }

  input::placeholder,
  textarea::placeholder {
    opacity: 1; /* 1 */
    color: rgb(var(--tw-color-gray-400) / 1); /* 2 */
  }

  /*
Set the default cursor for buttons.
*/

  button,
  [role="button"] {
    cursor: pointer;
  }

  /*
Make sure disabled buttons don't get the pointer cursor.
*/
  :disabled {
    cursor: default;
  }

  /*
1. Make replaced elements `display: block` by default. (https://github.com/mozdevs/cssremedy/issues/14)
2. Add `vertical-align: middle` to align replaced elements more sensibly by default. (https://github.com/jensimmons/cssremedy/issues/14#issuecomment-634934210)
   This can trigger a poorly considered lint error in some tools but is included by design.
*/

  img,
  svg,
  video,
  canvas,
  audio,
  iframe,
  embed,
  object {
    display: block; /* 1 */
    vertical-align: middle; /* 2 */
  }

  /*
Constrain images and videos to the parent width and preserve their intrinsic aspect ratio. (https://github.com/mozdevs/cssremedy/issues/14)
*/

  img,
  video {
    max-width: 100%;
    height: auto;
  }
  *,
  ::before,
  ::after {
    --tw-border-spacing-x: 0;
    --tw-border-spacing-y: 0;
    --tw-translate-x: 0;
    --tw-translate-y: 0;
    --tw-rotate: 0;
    --tw-skew-x: 0;
    --tw-skew-y: 0;
    --tw-scale-x: 1;
    --tw-scale-y: 1;
    --tw-pan-x: ;
    --tw-pan-y: ;
    --tw-pinch-zoom: ;
    --tw-scroll-snap-strictness: proximity;
    --tw-ordinal: ;
    --tw-slashed-zero: ;
    --tw-numeric-figure: ;
    --tw-numeric-spacing: ;
    --tw-numeric-fraction: ;
    --tw-ring-inset: ;
    --tw-ring-offset-width: 0px;
    --tw-ring-offset-color: #fff;
    --tw-ring-color: rgb(147 197 253 / 0.5);
    --tw-ring-offset-shadow: 0 0 #0000;
    --tw-ring-shadow: 0 0 #0000;
    --tw-shadow: 0 0 #0000;
    --tw-shadow-colored: 0 0 #0000;
    --tw-blur: ;
    --tw-brightness: ;
    --tw-contrast: ;
    --tw-grayscale: ;
    --tw-hue-rotate: ;
    --tw-invert: ;
    --tw-saturate: ;
    --tw-sepia: ;
    --tw-drop-shadow: ;
    --tw-backdrop-blur: ;
    --tw-backdrop-brightness: ;
    --tw-backdrop-contrast: ;
    --tw-backdrop-grayscale: ;
    --tw-backdrop-hue-rotate: ;
    --tw-backdrop-invert: ;
    --tw-backdrop-opacity: ;
    --tw-backdrop-saturate: ;
    --tw-backdrop-sepia: ;
  }
  ::-webkit-backdrop {
    --tw-border-spacing-x: 0;
    --tw-border-spacing-y: 0;
    --tw-translate-x: 0;
    --tw-translate-y: 0;
    --tw-rotate: 0;
    --tw-skew-x: 0;
    --tw-skew-y: 0;
    --tw-scale-x: 1;
    --tw-scale-y: 1;
    --tw-pan-x: ;
    --tw-pan-y: ;
    --tw-pinch-zoom: ;
    --tw-scroll-snap-strictness: proximity;
    --tw-ordinal: ;
    --tw-slashed-zero: ;
    --tw-numeric-figure: ;
    --tw-numeric-spacing: ;
    --tw-numeric-fraction: ;
    --tw-ring-inset: ;
    --tw-ring-offset-width: 0px;
    --tw-ring-offset-color: #fff;
    --tw-ring-color: rgb(147 197 253 / 0.5);
    --tw-ring-offset-shadow: 0 0 #0000;
    --tw-ring-shadow: 0 0 #0000;
    --tw-shadow: 0 0 #0000;
    --tw-shadow-colored: 0 0 #0000;
    --tw-blur: ;
    --tw-brightness: ;
    --tw-contrast: ;
    --tw-grayscale: ;
    --tw-hue-rotate: ;
    --tw-invert: ;
    --tw-saturate: ;
    --tw-sepia: ;
    --tw-drop-shadow: ;
    --tw-backdrop-blur: ;
    --tw-backdrop-brightness: ;
    --tw-backdrop-contrast: ;
    --tw-backdrop-grayscale: ;
    --tw-backdrop-hue-rotate: ;
    --tw-backdrop-invert: ;
    --tw-backdrop-opacity: ;
    --tw-backdrop-saturate: ;
    --tw-backdrop-sepia: ;
  }
  ::backdrop {
    --tw-border-spacing-x: 0;
    --tw-border-spacing-y: 0;
    --tw-translate-x: 0;
    --tw-translate-y: 0;
    --tw-rotate: 0;
    --tw-skew-x: 0;
    --tw-skew-y: 0;
    --tw-scale-x: 1;
    --tw-scale-y: 1;
    --tw-pan-x: ;
    --tw-pan-y: ;
    --tw-pinch-zoom: ;
    --tw-scroll-snap-strictness: proximity;
    --tw-ordinal: ;
    --tw-slashed-zero: ;
    --tw-numeric-figure: ;
    --tw-numeric-spacing: ;
    --tw-numeric-fraction: ;
    --tw-ring-inset: ;
    --tw-ring-offset-width: 0px;
    --tw-ring-offset-color: #fff;
    --tw-ring-color: rgb(147 197 253 / 0.5);
    --tw-ring-offset-shadow: 0 0 #0000;
    --tw-ring-shadow: 0 0 #0000;
    --tw-shadow: 0 0 #0000;
    --tw-shadow-colored: 0 0 #0000;
    --tw-blur: ;
    --tw-brightness: ;
    --tw-contrast: ;
    --tw-grayscale: ;
    --tw-hue-rotate: ;
    --tw-invert: ;
    --tw-saturate: ;
    --tw-sepia: ;
    --tw-drop-shadow: ;
    --tw-backdrop-blur: ;
    --tw-backdrop-brightness: ;
    --tw-backdrop-contrast: ;
    --tw-backdrop-grayscale: ;
    --tw-backdrop-hue-rotate: ;
    --tw-backdrop-invert: ;
    --tw-backdrop-opacity: ;
    --tw-backdrop-saturate: ;
    --tw-backdrop-sepia: ;
  }
}
div.my-love {
  min-height: 120vh;
  width: 100%;
  position: relative;
}

div.my-love > div {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 100%;
  position: absolute;
  top: 33.333333%;
}

div.my-love > div > img {
  width: 100%;
}

@media (min-width: 1024px) {
  div.my-love > div > img {
    width: 90%;
  }
}

div.my-love > div > img {
  position: absolute;
  z-index: 40;
  top: auto;
  bottom: auto;
}

div.my-love > div > div {
  display: flex;
  flex-direction: column;
}

@media (min-width: 768px) {
  div.my-love > div > div {
    /* Unknown class .flew-col */
  }
}

div.my-love > div > div {
  width: 80%;
  height: 100%;
  z-index: 50;
  position: absolute;
  justify-content: center;
  align-items: center;
  gap: var(--tw-size-6);
}

@media (min-width: 1024px) {
  div.my-love > div > div {
    gap: var(--tw-size-12);
  }
}

div.my-love > div > div > h1 {
  --tw-text-opacity: 1;
  color: rgb(var(--tw-color-yellow-400) / var(--tw-text-opacity));
  font-size: var(--tw-font-size-5xl);
  line-height: var(--tw-line-height-none);
}

@media (min-width: 1024px) {
  div.my-love > div > div > h1 {
    font-size: var(--tw-font-size-9xl);
    line-height: var(--tw-line-height-none);
  }
}

div.my-love > div > div > h1 {
  --tw-drop-shadow: drop-shadow(0 4px 4px rgba(0, 0, 0, 1));
  filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast)
    var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate)
    var(--tw-sepia) var(--tw-drop-shadow);
}

div.my-love > div > div > p {
  --tw-text-opacity: 1;
  color: rgb(var(--tw-color-black) / var(--tw-text-opacity));
  font-size: var(--tw-font-size-lg);
  line-height: var(--tw-line-height-7);
}

@media (min-width: 768px) {
  div.my-love > div > div > p {
    font-size: var(--tw-font-size-xl);
    line-height: var(--tw-line-height-7);
  }
}

@media (min-width: 1024px) {
  div.my-love > div > div > p {
    font-size: var(--tw-font-size-5xl);
    line-height: var(--tw-line-height-none);
  }
}

div.my-love > div > div > p {
  text-align: center;
}

div.my-love > img.my-love__unique1 {
  width: 33.333333%;
}

@media (min-width: 768px) {
  div.my-love > img.my-love__unique1 {
    width: 25%;
  }
}

@media (min-width: 1024px) {
  div.my-love > img.my-love__unique1 {
    width: 28%;
  }
}

div.my-love > img.my-love__unique1 {
  position: absolute;
  z-index: 40;
  bottom: var(--tw-size-0);
  left: 25%;
}

@media (min-width: 768px) {
  div.my-love > img.my-love__unique1 {
    left: 20%;
  }
}

div.my-love > img.my-love__unique2 {
  width: 33.333333%;
}

@media (min-width: 768px) {
  div.my-love > img.my-love__unique2 {
    width: 25%;
  }
}

@media (min-width: 1024px) {
  div.my-love > img.my-love__unique2 {
    width: 28%;
  }
}

div.my-love > img.my-love__unique2 {
  position: absolute;
  z-index: 40;
  bottom: var(--tw-size-0);
  right: 25%;
}

@media (min-width: 768px) {
  div.my-love > img.my-love__unique2 {
    right: 20%;
  }
}

div.my-love > img.my-love__unique3 {
  height: 120vh;
  width: 100%;
  position: absolute;
  top: calc(var(--tw-size-2) * -1);
  bottom: var(--tw-size-0);
  z-index: 30;
}

div.my-love > img.my-love__unique4 {
  width: 100%;
  position: absolute;
  bottom: var(--tw-size-0);
  z-index: 50;
}
div.my-heart {
  min-height: 150vh;
  width: 100%;
  position: relative;
}

div.my-heart > div {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 100%;
  height: 100%;
  position: absolute;
}

div.my-heart > div > div {
  display: flex;
  flex-direction: column;
}

@media (min-width: 768px) {
  div.my-heart > div > div {
    /* Unknown class .flew-col */
  }
}

div.my-heart > div > div {
  width: 80%;
  height: 100%;
  z-index: 50;
  position: absolute;
  justify-content: center;
  align-items: center;
  gap: var(--tw-size-6);
}

@media (min-width: 1024px) {
  div.my-heart > div > div {
    gap: var(--tw-size-12);
  }
}

div.my-heart > div > div > img {
  width: 33.333333%;
}

div.my-heart > div > div > h1.my-heart__unique1 {
  --tw-text-opacity: 1;
  color: rgb(var(--tw-color-white) / var(--tw-text-opacity));
  font-size: var(--tw-font-size-5xl);
  line-height: var(--tw-line-height-none);
}

@media (min-width: 1024px) {
  div.my-heart > div > div > h1.my-heart__unique1 {
    font-size: var(--tw-font-size-9xl);
    line-height: var(--tw-line-height-none);
  }
}

div.my-heart > div > div > h1.my-heart__unique1 {
  --tw-drop-shadow: drop-shadow(0 4px 4px rgba(0, 0, 0, 1));
  filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast)
    var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate)
    var(--tw-sepia) var(--tw-drop-shadow);
}

div.my-heart > div > div > h1.my-heart__unique2 {
  --tw-text-opacity: 1;
  color: rgb(var(--tw-color-yellow-400) / var(--tw-text-opacity));
  font-size: var(--tw-font-size-5xl);
  line-height: var(--tw-line-height-none);
}

@media (min-width: 1024px) {
  div.my-heart > div > div > h1.my-heart__unique2 {
    font-size: var(--tw-font-size-9xl);
    line-height: var(--tw-line-height-none);
  }
}

div.my-heart > div > div > h1.my-heart__unique2 {
  --tw-drop-shadow: drop-shadow(0 4px 4px rgba(0, 0, 0, 1));
  filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast)
    var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate)
    var(--tw-sepia) var(--tw-drop-shadow);
}

div.my-heart > div > div > p {
  --tw-text-opacity: 1;
  color: rgb(var(--tw-color-white) / var(--tw-text-opacity));
  font-size: var(--tw-font-size-lg);
  line-height: var(--tw-line-height-7);
}

@media (min-width: 1024px) {
  div.my-heart > div > div > p {
    font-size: var(--tw-font-size-4xl);
    line-height: var(--tw-line-height-10);
  }
}

div.my-heart > div > div > p {
  text-align: center;
}

div.my-heart > img.my-heart__unique3 {
  width: 100%;
  position: absolute;
  top: var(--tw-size-0);
  z-index: 50;
}

div.my-heart > img.my-heart__unique4 {
  height: 150vh;
  width: 100%;
  position: absolute;
  bottom: var(--tw-size-0);
  z-index: 40;
}

div.my-heart > img.my-heart__unique5 {
  width: 100%;
  position: absolute;
  bottom: var(--tw-size-0);
  z-index: 50;
}
  </style>
@endsection

@section('contents')
  <div class="w-full overflow-w-hidden">
    
  </div>
  <div class="main-content first-section position-relative yellow">
    <section class="h-100">
      <div class="mh-100">
        <img class="position-absolute overflow-hidden cloud-1" src="{{ asset('images/home/components/awan-kiri-atas.png') }}" alt="cloud-1">
        <img class="position-absolute overflow-hidden cloud-2" src="{{ asset('images/home/components/awan-kiri-bawah.png') }}" alt="cloud-2">
        <img class="position-absolute overflow-hidden cloud-3" src="{{ asset('images/home/components/awan-kanan-atas.png') }}" alt="cloud-3">
        <img class="position-absolute overflow-hidden cloud-4" src="{{ asset('images/home/components/awan-kanan-bawah.png') }}" alt="cloud-4">
      </div>
      <img class="position-absolute start-0 w-100 h-100 sun-bg" src="{{ asset('images/home/bg/sun-bg.png') }}" alt="pattern">
      <img class="position-absolute start-0 w-100 h-2rem bar" src="{{ asset('/images/workshop/base/Top.png') }}" alt="top">
      <img class="position-absolute bottom-0 w-100 h-2rem bar" src="{{ asset('/images/workshop/base/bottom.png') }}" alt="bottom">
    </section>

    <section class="position-relative ptop-5 pbot-5 mw-100 mx-3">
      <div class="d-flex flex-column flex-md-row align-items-stretch fw-bold gap-5 justify-content-center">
        <img class="img-fluid align-self-center logo" src="{{ asset('/images/home/components/logo.png') }}" alt="Logo">
        <div class=" align-self-center">
          <div class="hero-title px-5 mb-4">
            <h1 class="text-white fs-4rem text-center">COMMPRESS</h1>
          </div>
          <div class="mx-3 title-content fw-bold fs-5 text-content">
            <p class="px-5 mb-3 text-black text-justify">COMMPRESS merupakan kegiatan tahunan Program Studi Jurnalistik Universitas Multimedia Nusantara (UMN). COMMPRESS merupakan istilah dari gabungan dua kata dalam bahasa Inggris: “communication” dan “press”. COMMPRESS memiliki makna “compress” yang berarti “memampatkan”. Dengan begitu, secara umum COMMPRESS hadir sebagai wadah yang memampatkan karya-karya jurnalistik mahasiswa/i.</p><br>

            <p class="px-5 mb-5 text-black text-justify">COMMPRESS pertama kali diselenggarakan pada 2012 dan telah dilaksanakan tiap tahun hingga saat ini. COMMPRESS dibentuk sebagai tempat bagi mahasiswa untuk menyalurkan minat dan bakat mereka dalam dunia jurnalistik. Oleh karena itu, fokus COMMPRESS mengacu pada bidang jurnalistik. Setiap tahun, COMMPRESS menarik pengunjung dan peserta dari berbagai kalangan jurnalistik dan nonjurnalistik.</p>
          </div>
        </div>
      </div>
    </section>
  </div>

  <div class="my-alert__unique9 my-alert">
    <div class="my-alert__unique5">
      <div class="my-alert__unique1">
        <img src="{{ asset('/images/home/bg/kotakR.svg') }}" alt="bottom">
      </div>
      <div class="my-alert__unique2">
        <img src="{{ asset('/images/home/bg/kotakL.svg') }}" alt="bottom">
      </div>
    </div>
    <div class="my-alert__unique5">
      <div class="my-alert__unique3">
        <h1 style="font-family: Bazinga; text-shadow: -2px -2px 0 #000, 2px -2px 0 #000, -2px 2px 0 #000, 2px 2px 0 #000;">DAMPAK INTERNAL</h1>
        <ul style="font-family: 'Inter', sans-serif;">
          <li>Meningkatkan awareness tentang Jurnalistik kepada mahasiswa UMN,</li>
          <li>Mengasah kemampuan dan keterampilan mahasiswa UMN terhadap kerja Jurnalistik,</li>
          <li>Memperkenalkan kemajuan teknologi di bidang Jurnalistik kepada mahasiswa UMN,</li>
          <li>Memperkenalkan Komik Jurnalistik dalam bentuk digital,</li>
          <li>Menambah pengetahuan dan pengalaman mahasiswa tentang kerja jurnalistik</li>
        </ul>
      </div>
      <div class="my-alert__unique4">
        <h1 style="font-family: Bazinga; text-shadow: -2px -2px 0 #000, 2px -2px 0 #000, -2px 2px 0 #000, 2px 2px 0 #000;">DAMPAK EKSTERNAL</h1>
        <ul style="font-family: 'Inter', sans-serif;">
          <li>Memperkenalkan UMN kepada pihak eksternal secara lebih luas,</li>
          <li>Memperkenalkan karya jurnalistik mahasiswa/i UMN kepada pihak eksternal,</li>
          <li>Memperkenalkan Program Studi Jurnalistik kepada pihak eksternal,</li>
          <li>Memperkenalkan COMMPRESS UMN kepada pihak eksternal, tidak hanya siswa dan mahasiswa, tetapi juga perusahaan media jurnalisme yang ikut terlibat kerja sama,</li>
          <li>Mendorong minat mahasiswa/i Indonesia dalam bidang jurnalistik melalui workshop dan lomba bertemakan jurnalistik.</li>
        </ul>
      </div>
    </div>
    <div class="my-alert__unique6">
      <div class="my-alert__unique7">
        <h1 style="font-family: Bazinga; text-shadow: -2px -2px 0 #000, 2px -2px 0 #000, -2px 2px 0 #000, 2px 2px 0 #000;">DAMPAK INTERNAL</h1>
        <ul style="font-family: 'Inter', sans-serif;">
          <li>Meningkatkan awareness tentang Jurnalistik kepada mahasiswa UMN,</li>
          <li>Mengasah kemampuan dan keterampilan mahasiswa UMN terhadap kerja Jurnalistik,</li>
          <li>Memperkenalkan kemajuan teknologi di bidang Jurnalistik kepada mahasiswa UMN,</li>
          <li>Memperkenalkan Komik Jurnalistik dalam bentuk digital,</li>
          <li>Menambah pengetahuan dan pengalaman mahasiswa tentang kerja jurnalistik</li>
        </ul>
      </div>
      <div class="my-alert__unique8">
        <h1 style="font-family: Bazinga; text-shadow: -2px -2px 0 #000, 2px -2px 0 #000, -2px 2px 0 #000, 2px 2px 0 #000;">DAMPAK EKSTERNAL</h1>
        <ul style="font-family: 'Inter', sans-serif;">
          <li>Memperkenalkan UMN kepada pihak eksternal secara lebih luas,</li>
          <li>Memperkenalkan karya jurnalistik mahasiswa/i UMN kepada pihak eksternal,</li>
          <li>Memperkenalkan Program Studi Jurnalistik kepada pihak eksternal,</li>
          <li>Memperkenalkan COMMPRESS UMN kepada pihak eksternal, tidak hanya siswa dan mahasiswa, tetapi juga perusahaan media jurnalisme yang ikut terlibat kerja sama,</li>
          <li>Mendorong minat mahasiswa/i Indonesia dalam bidang jurnalistik melalui workshop dan lomba bertemakan jurnalistik.</li>
        </ul>
      </div>
    </div>
    <img src="{{ asset('/images/home/bg/bgsplit.png') }}" alt="bottom" class="my-alert__unique15">
  </div>

  <div class="my-heart">
    <div>

      <div>
        <img src="{{ asset('/images/home/components/modernisasi-logo.png') }}" alt="Logo">
        <h1 style="font-family: Bazinga; text-shadow: -2px -2px 0 #000, 2px -2px 0 #000, -2px 2px 0 #000, 2px 2px 0 #000;" class="my-heart__unique1">COMMPRESS 2023:</h1>
        <h1 class="my-heart__unique2" style="font-family: Bazinga; text-shadow: -2px -2px 0 #000, 2px -2px 0 #000, -2px 2px 0 #000, 2px 2px 0 #000;">MODERNISASI MEDIA</h1>
        <p>Kerja jurnalistik hadir di tengah-tengah masyarakat sebagai penyambung informasi dari satu pihak ke pihak lain. Jurnalisme berdiri secara independen menegakkan tonggak imparsialisme. Tahun ke tahun, jurnalisme bergerak mengikuti perkembangan zaman yang ada dengan mempertahankan nilai etikanya. Perkembangan tersebut pun sampai pada tahun ini, dimana dunia berdampingan erat dengan kemajuan teknologi dan modernisasi. Atas perkembangan itu lahirlah istilah yang kini dikenal dengan modernisasi media. Dengan demikian, perkembangan yang ada patut diketahui bahwa jurnalisme tegak lurus berbaur dengan kemajuan yang ada dengan tetap berpegang pada etika dan sisi independennya.&nbsp;Atas dasar tersebut, terguguslah COMMPRESS 2023 dengan tema “Modernisasi Media”.</p>
      </div>
    </div>
    
    <img src="{{ asset('/images/home/components/flat-bar.png') }}" alt="top" class="my-heart__unique3">
    <img class="my-heart__unique4" src="{{ asset('/images/home/bg/bgmodernisasi.png') }}" alt="bg">
    <img class="my-heart__unique5" src="{{ asset('/images/home/components/flat-bar.png') }}" alt="bottom">
  </div>
  
  <div class="my-love">
    <div>
      <img src="{{ asset('/images/home/components/awan-tagline.png') }}" alt="bottom">
      <div>
        <h1 style="font-family: Bazinga; text-shadow: -2px -2px 0 #000, 2px -2px 0 #000, -2px 2px 0 #000, 2px 2px 0 #000;">"GET READY FOR BIGGER CHANGE!"</h1>
        <p>COMMPRESS 2023 bertekad melalui tagline yang diusung yaitu “Get ready for bigger change!” yang diartikan sebagai kesiapan diri dalam menghadapi perubahan dan modernisasi yang besar. Kesiapan ini juga diimbangi dengan wawasan diri yang baik sebagai alat untuk menghadapi modernisasi tersebut. Hal tersebut demikian supaya modernisasi dapat dimanfaatkan secara maksimal sebagai wadah pemberi perubahan yang lebih maju dalam bidang jurnalisme.&nbsp;</p>
      </div>
    </div>
    <img src="{{ asset('/images/home/components/cowok-tagline.png') }}" alt="bottom" class="my-love__unique1">
    <img class="my-love__unique2" src="{{ asset('/images/home/components/cewek-tagline.png') }}" alt="bottom">
    
    <img class="my-love__unique3" src="{{ asset('/images/home/bg/bgtagline.png') }}" alt="bg">
    <img class="my-love__unique4" src="{{ asset('/images/home/components/flat-bar.png') }}" alt="bottom">
  </div>

  <div class="my-alert__unique10 my-alert">
    <div class="my-alert__unique11">
      <h1 style="font-family: Bazinga; text-shadow: -2px -2px 0 #000, 2px -2px 0 #000, -2px 2px 0 #000, 2px 2px 0 #000;" class="my-alert__unique20">LATEST ACTIVITIES!</h1>
      <div class="my-alert__unique12">
        <a href="https://www.instagram.com/p/Cu9LeiBMQwf/"><img src="{{ asset('/images/home/components/IG3.png') }}"></a>
        <a href="https://www.instagram.com/p/CrDb_qbLlUI/"><img src="{{ asset('/images/home/components/IG1.png') }}"></a>
        <a href="https://www.instagram.com/p/CssrBpZtZls/"><img src="{{ asset('/images/home/components/IG2.png') }}"></a>
      </div>
    </div>
    <div class="my-alert__unique13">
      <h1 style="font-family: Bazinga; text-shadow: -2px -2px 0 #000, 2px -2px 0 #000, -2px 2px 0 #000, 2px 2px 0 #000;" class="my-alert__unique20">LATEST ACTIVITIES!</h1>
      <div class="my-alert__unique14">
        <a href="https://www.instagram.com/p/Cu9LeiBMQwf/"><img src="{{ asset('/images/home/components/IG3.png') }}"></a>
        <a href="https://www.instagram.com/p/CrDb_qbLlUI/"><img src="{{ asset('/images/home/components/IG1.png') }}"></a>
        <a href="https://www.instagram.com/p/CssrBpZtZls/"><img src="{{ asset('/images/home/components/IG2.png') }}"></a>
      </div>
    </div>
    <img class="my-alert__unique16" src="{{ asset('/images/home/bg/bgactivity.png') }}" alt="bg">
    <img class="my-alert__unique17" src="{{ asset('/images/home/components/flat-bar.png') }}" alt="bottom">
  </div>
  
  <div class="my-alert__unique18 my-alert">
    <div class="my-alert__unique19">
      <h1 class="my-alert__unique21" style="font-family: Bazinga; text-shadow: -2px -2px 0 #000, 2px -2px 0 #000, -2px 2px 0 #000, 2px 2px 0 #000;">TIMELINE</h1>
      <a href="">
        <img src="{{ asset('/images/home/components/tl1.png') }}">
      </a>
      <a href="">
        <img src="{{ asset('/images/home/components/tl2.png') }}">
      </a>
      <a href="">
        <img src="{{ asset('/images/home/components/tl3.png') }}">
      </a>
      <a href="">
        <img src="{{ asset('/images/home/components/tl4.png') }}">
      </a>
      <a href="">
        <img src="{{ asset('/images/home/components/tl5.png') }}">
      </a>
      <a href="">
        <img src="{{ asset('/images/home/components/tl6.png') }}">
      </a>
      <a href="">
        <img src="{{ asset('/images/home/components/tl7.png') }}">
      </a>
      <a href="">
        <img src="{{ asset('/images/home/components/tl8.png') }}">
      </a>
    </div>
    <div class="my-alert__unique22">
      <h1 class="my-alert__unique23" style="font-family: Bazinga; text-shadow: -2px -2px 0 #000, 2px -2px 0 #000, -2px 2px 0 #000, 2px 2px 0 #000;">TIMELINE</h1>
      <a href="">
        <img src="{{ asset('/images/home/components/tl1.png') }}">
      </a>
      <a href="">
        <img src="{{ asset('/images/home/components/tl2.png') }}">
      </a>
      <a href="">
        <img src="{{ asset('/images/home/components/tl3.png') }}">
      </a>
      <a href="">
        <img src="{{ asset('/images/home/components/tl4.png') }}">
      </a>
      <a href="">
        <img src="{{ asset('/images/home/components/tl5.png') }}">
      </a>
      <a href="">
        <img src="{{ asset('/images/home/components/tl6.png') }}">
      </a>
      <a href="">
        <img src="{{ asset('/images/home/components/tl7.png') }}">
      </a>
      <a href="">
        <img src="{{ asset('/images/home/components/tl8.png') }}">
      </a>
    </div>
    <img class="my-alert__unique24" src="{{ asset('/images/home/bg/Frame.png') }}">
    <img class="my-alert__unique25" src="{{ asset('/images/home/components/petirL.png') }}">
    <img class="my-alert__unique26" src="{{ asset('/images/home/components/petirR.png') }}">
  </div>
@endsection

@section('scripts')
  {{-- <script>
        const fetchData = async () => {
        const parsedDateRoute = "{{ route('time.diff') }}";

        const times = [
            "{{ $time }}",
        ];

        fetch(`${parsedDateRoute}?startDates=${times}`)
            .then(response => response.json())
            .then(response => {
            document.getElementById("data").textContent = response.parsedDates[0];
            });
        }

        fetchData();

        setInterval(() => {
        fetchData();
        }, 1000);
    </script> --}}
@endsection
