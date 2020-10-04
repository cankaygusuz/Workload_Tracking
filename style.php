<?php

.sc-section{
    padding-top: 100px!important;
    padding-bottom: 100px!important;
}



.sc-main{
    background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.7)),
        url(../img/image.jpg) no-repeat 50% 50% !important;
    background-size: cover !important;
    position: relative;
}
.sc-main.segment{
    min-height: 100vh!important;
}
.sc-header-content{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.sc-bar{
    background-color: darkcyan!important;
    
}
h1.ui.header{
    font-size: 5em;
    font-weight: 200;
}
.sc-bck{
    background-color: black!important;
}
.sc-button{
    background-color: red!important;
    border-radius: 20px!important;
    font-size: 15px!important;
}
.sc-button:hover{
    background-color: darkred!important;
}
.sc-h2{
    font-size: 35px!important;
}
.empcol{
    margin-left: 45%!important;
    margin-right: 55%!important;
}

/*css alıntı kod*/


.progress {
  width: 200px;
  height: 200px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) rotateY(180deg);
}
.progress:before {
  content: "";
  position: absolute;
  width: 185px;
  height: 185px;
  background: #232323;
  border-radius: 100%;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 99;
}
.progress:after {
  content: "";
  position: absolute;
  width: 8px;
  height: 100px;
  background: linear-gradient(180deg, #d63031, #232323);
  border-radius: 10px;
  box-shadow: 0 -19px 9px -3px #d63031;
  top: 0;
  right: 50%;
  margin-right: -4px;
  z-index: 999;
  transform: rotate(90deg);
  transform-origin: bottom;
  animation-name: meter;
  animation-duration: 5s;
  animation-iteration-count: infinite;
  animation-timing-function: cubic-bezier(0, 0.1, 0.9, 0.81);
  animation-play-state:paused;
  animation-direction: reverse;
  animation-delay: 5s;
}
.progress .precent {
  position: absolute;
  top: 29px;
  left: 50%;
  z-index: 99;
  transform: translate(-50%, 0) rotateY(180deg);
  font-size: 19px;
  color: white;
  width: 47px;
  text-align: center;
  line-height: 1.5;
}
.progress .precent:after {
  content: "";
  position: absolute;
  width: 35px;
  height: 35px;
  background: #323232;
  border-radius: 100%;
  top: 85px;
  right: -35px;
  background-color: red;
}
.progress .precent:before {
  content: "";
  position: absolute;
  width: 35px;
  height: 35px;
  background: #323232;
  border-radius: 100%;
  top: 85px;
  left: -35px;
  background-color: blue;
}
.progress .circle {
  width: 200px;
  height: 200px;
  background: white;
  background: conic-gradient(
    from 91deg,
    #d63031 0%,
    #ffffff 20%,
    transparent 100%
  );
  -webkit-clip-path: polygon(
    0% 100%,
    0% 0%,
    100% 0%,
    100% 50%,
    50% 50%,
    100% 50%,
    100% 100%
  );
  clip-path: polygon(
    0% 100%,
    0% 0%,
    100% 0%,
    100% 50%,
    50% 50%,
    100% 50%,
    100% 100%
  );
  animation-name: loading;
  animation-duration: 5s;
  animation-iteration-count: infinite;
  animation-timing-function: cubic-bezier(0, 0.1, 0.9, 0.81);
  animation-play-state: paused;
  animation-direction: reverse;
  animation-delay: 5s;
  border-radius: 100%;
}
@keyframes loading {
  0% {
    -webkit-clip-path: polygon(
      0% 100%,
      0% 0%,
      100% 0%,
      100% 50%,
      50% 50%,
      100% 50%,
      100% 100%
    );
    clip-path: polygon(
      0% 100%,
      0% 0%,
      100% 0%,
      100% 50%,
      50% 50%,
      100% 50%,
      100% 100%
    );
  }
  12.5% {
    -webkit-clip-path: polygon(
      0% 100%,
      0% 0%,
      100% 0%,
      100% 50%,
      50% 50%,
      100% 100%,
      100% 100%
    );
    clip-path: polygon(
      0% 100%,
      0% 0%,
      100% 0%,
      100% 50%,
      50% 50%,
      100% 100%,
      100% 100%
    );
  }
  25% {
    -webkit-clip-path: polygon(
      0% 100%,
      0% 0%,
      100% 0%,
      100% 50%,
      50% 50%,
      50% 100%,
      50% 100%
    );
    clip-path: polygon(
      0% 100%,
      0% 0%,
      100% 0%,
      100% 50%,
      50% 50%,
      50% 100%,
      50% 100%
    );
  }
  37.5% {
    -webkit-clip-path: polygon(
      0% 100%,
      0% 0%,
      100% 0%,
      100% 50%,
      50% 50%,
      0% 100%,
      0% 100%
    );
    clip-path: polygon(
      0% 100%,
      0% 0%,
      100% 0%,
      100% 50%,
      50% 50%,
      0% 100%,
      0% 100%
    );
  }
  50% {
    -webkit-clip-path: polygon(
      0% 50%,
      0% 0%,
      100% 0%,
      100% 50%,
      50% 50%,
      0% 50%,
      0% 50%
    );
    clip-path: polygon(
      0% 50%,
      0% 0%,
      100% 0%,
      100% 50%,
      50% 50%,
      0% 50%,
      0% 50%
    );
  }
  62.5% {
    -webkit-clip-path: polygon(
      0% 0%,
      0% 0%,
      100% 0%,
      100% 50%,
      50% 50%,
      0% 0%,
      0% 0%
    );
    clip-path: polygon(0% 0%, 0% 0%, 100% 0%, 100% 50%, 50% 50%, 0% 0%, 0% 0%);
  }
  75% {
    -webkit-clip-path: polygon(
      50% 0%,
      50% 0%,
      100% 0%,
      100% 50%,
      50% 50%,
      50% 0%,
      50% 0%
    );
    clip-path: polygon(
      50% 0%,
      50% 0%,
      100% 0%,
      100% 50%,
      50% 50%,
      50% 0%,
      50% 0%
    );
  }
  87.5% {
    -webkit-clip-path: polygon(
      100% 0%,
      100% 0%,
      100% 0%,
      100% 50%,
      50% 50%,
      100% 0%,
      100% 0%
    );
    clip-path: polygon(
      100% 0%,
      100% 0%,
      100% 0%,
      100% 50%,
      50% 50%,
      100% 0%,
      100% 0%
    );
  }
  100% {
    -webkit-clip-path: polygon(
      100% 50%,
      100% 50%,
      100% 50%,
      100% 50%,
      50% 50%,
      100% 50%,
      100% 50%
    );
    clip-path: polygon(
      100% 50%,
      100% 50%,
      100% 50%,
      100% 50%,
      50% 50%,
      100% 50%,
      100% 50%
    );
  }
}
@keyframes meter {
  0% {
    transform: rotate(90deg);
  }
  25% {
    transform: rotate(179deg);
  }
  50% {
    transform: rotate(269deg);
  }
  75% {
    transform: rotate(360deg);
  }
  100% {
    transform: rotate(450deg);
  }
}
.progress .range {
  margin-top: 20px;
}
.progress input[type="range"] {
  -webkit-appearance: none;
  width: 100%;
  background: transparent;
}

.progress input[type="range"]::-webkit-slider-thumb {
  -webkit-appearance: none;
}

.progress input[type="range"]:focus {
  outline: none;
}

.progress input[type="range"]::-webkit-slider-thumb {
  -webkit-appearance: none;
  height: 16px;
  width: 16px;
  border-radius: 100%;
  background: white;
  cursor: pointer;
  margin-top: -6px;
  z-index: 9;
  position: relative;
}

.progress input[type="range"]::-moz-range-thumb {
  height: 16px;
  width: 16px;
  border-radius: 100%;
  background: white;
  cursor: pointer;
  border: 0;
  z-index: 9;
  position: relative;
}

.progress input[type="range"]::-webkit-slider-runnable-track {
  width: 100%;
  height: 5px;
  cursor: pointer;
  background: white;
  border-radius: 20px;
}

.progress input[type="range"]::-moz-range-track {
  width: 100%;
  height: 5px;
  cursor: pointer;
  background: white;
  border-radius: 20px;
}

/* second gauge css code */
.progress1 {
  width: 200px;
  height: 200px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) rotateY(180deg);
}
.progress1:before {
  content: "";
  position: absolute;
  width: 185px;
  height: 185px;
  background: #232323;
  border-radius: 100%;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 99;
}
.progress1:after {
  content: "";
  position: absolute;
  width: 8px;
  height: 100px;
  background: linear-gradient(180deg, #d63031, #232323);
  border-radius: 10px;
  box-shadow: 0 -19px 9px -3px #d63031;
  top: 0;
  right: 50%;
  margin-right: -4px;
  z-index: 999;
  transform: rotate(90deg);
  transform-origin: bottom;
  animation-name: meter;
  animation-duration: 5s;
  animation-iteration-count: infinite;
  animation-timing-function: cubic-bezier(0, 0.1, 0.9, 0.81);
  animation-play-state: paused;
  animation-direction: reverse;
  animation-delay: 5s;
}
.progress1 .precent1 {
  position: absolute;
  top: 29px;
  left: 50%;
  z-index: 99;
  transform: translate(-50%, 0) rotateY(180deg);
  font-size: 19px;
  color: white;
  width: 47px;
  text-align: center;
  line-height: 1.5;
}
.progress1 .precent1:after {
  content: "";
  position: absolute;
  width: 35px;
  height: 35px;
  background: #323232;
  border-radius: 100%;
  top: 85px;
  right: -35px;
  background-color: red;
}
.progress1 .precent1:before {
  content: "";
  position: absolute;
  width: 35px;
  height: 35px;
  background: #323232;
  border-radius: 100%;
  top: 85px;
  left: -35px;
  background-color: blue;
}
.progress1 .circle1 {
  width: 200px;
  height: 200px;
  background: white;
  background: conic-gradient(
    from 91deg,
    #d63031 0%,
    #ffffff 20%,
    transparent 100%
  );
  -webkit-clip-path: polygon(
    0% 100%,
    0% 0%,
    100% 0%,
    100% 50%,
    50% 50%,
    100% 50%,
    100% 100%
  );
  clip-path: polygon(
    0% 100%,
    0% 0%,
    100% 0%,
    100% 50%,
    50% 50%,
    100% 50%,
    100% 100%
  );
  animation-name: loading;
  animation-duration: 5s;
  animation-iteration-count: infinite;
  animation-timing-function: cubic-bezier(0, 0.1, 0.9, 0.81);
  animation-play-state: paused;
  animation-direction: reverse;
  animation-delay: 5s;
  border-radius: 100%;
}
@keyframes loading {
  0% {
    -webkit-clip-path: polygon(
      0% 100%,
      0% 0%,
      100% 0%,
      100% 50%,
      50% 50%,
      100% 50%,
      100% 100%
    );
    clip-path: polygon(
      0% 100%,
      0% 0%,
      100% 0%,
      100% 50%,
      50% 50%,
      100% 50%,
      100% 100%
    );
  }
  12.5% {
    -webkit-clip-path: polygon(
      0% 100%,
      0% 0%,
      100% 0%,
      100% 50%,
      50% 50%,
      100% 100%,
      100% 100%
    );
    clip-path: polygon(
      0% 100%,
      0% 0%,
      100% 0%,
      100% 50%,
      50% 50%,
      100% 100%,
      100% 100%
    );
  }
  25% {
    -webkit-clip-path: polygon(
      0% 100%,
      0% 0%,
      100% 0%,
      100% 50%,
      50% 50%,
      50% 100%,
      50% 100%
    );
    clip-path: polygon(
      0% 100%,
      0% 0%,
      100% 0%,
      100% 50%,
      50% 50%,
      50% 100%,
      50% 100%
    );
  }
  37.5% {
    -webkit-clip-path: polygon(
      0% 100%,
      0% 0%,
      100% 0%,
      100% 50%,
      50% 50%,
      0% 100%,
      0% 100%
    );
    clip-path: polygon(
      0% 100%,
      0% 0%,
      100% 0%,
      100% 50%,
      50% 50%,
      0% 100%,
      0% 100%
    );
  }
  50% {
    -webkit-clip-path: polygon(
      0% 50%,
      0% 0%,
      100% 0%,
      100% 50%,
      50% 50%,
      0% 50%,
      0% 50%
    );
    clip-path: polygon(
      0% 50%,
      0% 0%,
      100% 0%,
      100% 50%,
      50% 50%,
      0% 50%,
      0% 50%
    );
  }
  62.5% {
    -webkit-clip-path: polygon(
      0% 0%,
      0% 0%,
      100% 0%,
      100% 50%,
      50% 50%,
      0% 0%,
      0% 0%
    );
    clip-path: polygon(0% 0%, 0% 0%, 100% 0%, 100% 50%, 50% 50%, 0% 0%, 0% 0%);
  }
  75% {
    -webkit-clip-path: polygon(
      50% 0%,
      50% 0%,
      100% 0%,
      100% 50%,
      50% 50%,
      50% 0%,
      50% 0%
    );
    clip-path: polygon(
      50% 0%,
      50% 0%,
      100% 0%,
      100% 50%,
      50% 50%,
      50% 0%,
      50% 0%
    );
  }
  87.5% {
    -webkit-clip-path: polygon(
      100% 0%,
      100% 0%,
      100% 0%,
      100% 50%,
      50% 50%,
      100% 0%,
      100% 0%
    );
    clip-path: polygon(
      100% 0%,
      100% 0%,
      100% 0%,
      100% 50%,
      50% 50%,
      100% 0%,
      100% 0%
    );
  }
  100% {
    -webkit-clip-path: polygon(
      100% 50%,
      100% 50%,
      100% 50%,
      100% 50%,
      50% 50%,
      100% 50%,
      100% 50%
    );
    clip-path: polygon(
      100% 50%,
      100% 50%,
      100% 50%,
      100% 50%,
      50% 50%,
      100% 50%,
      100% 50%
    );
  }
}
@keyframes meter {
  0% {
    transform: rotate(90deg);
  }
  25% {
    transform: rotate(179deg);
  }
  50% {
    transform: rotate(269deg);
  }
  75% {
    transform: rotate(360deg);
  }
  100% {
    transform: rotate(450deg);
  }
}
.progress1 .range1 {
  margin-top: 20px;
}
.progress1 input[type="range"] {
  -webkit-appearance: none;
  width: 100%;
  background: transparent;
}

.progress1 input[type="range"]::-webkit-slider-thumb {
  -webkit-appearance: none;
}

.progress1 input[type="range"]:focus {
  outline: none;
}

.progress1 input[type="range"]::-webkit-slider-thumb {
  -webkit-appearance: none;
  height: 16px;
  width: 16px;
  border-radius: 100%;
  background: white;
  cursor: pointer;
  margin-top: -6px;
  z-index: 9;
  position: relative;
}

.progress1 input[type="range"]::-moz-range-thumb {
  height: 16px;
  width: 16px;
  border-radius: 100%;
  background: white;
  cursor: pointer;
  border: 0;
  z-index: 9;
  position: relative;
}

.progress1 input[type="range"]::-webkit-slider-runnable-track {
  width: 100%;
  height: 5px;
  cursor: pointer;
  background: white;
  border-radius: 20px;
}

.progress1 input[type="range"]::-moz-range-track {
  width: 100%;
  height: 5px;
  cursor: pointer;
  background: white;
  border-radius: 20px;
}

/* third gauge css code */

.progress2 {
  width: 200px;
  height: 200px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) rotateY(180deg);
}
.progress2:before {
  content: "";
  position: absolute;
  width: 185px;
  height: 185px;
  background: #232323;
  border-radius: 100%;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 99;
}
.progress2:after {
  content: "";
  position: absolute;
  width: 8px;
  height: 100px;
  background: linear-gradient(180deg, #d63031, #232323);
  border-radius: 10px;
  box-shadow: 0 -19px 9px -3px #d63031;
  top: 0;
  right: 50%;
  margin-right: -4px;
  z-index: 999;
  transform: rotate(90deg);
  transform-origin: bottom;
  animation-name: meter;
  animation-duration: 5s;
  animation-iteration-count: infinite;
  animation-timing-function: cubic-bezier(0, 0.1, 0.9, 0.81);
  animation-play-state: paused;
  animation-direction: reverse;
  animation-delay: 5s;
}
.progress2 .precent2 {
  position: absolute;
  top: 29px;
  left: 50%;
  z-index: 99;
  transform: translate(-50%, 0) rotateY(180deg);
  font-size: 19px;
  color: white;
  width: 47px;
  text-align: center;
  line-height: 1.5;
}
.progress2 .precent2:after {
  content: "";
  position: absolute;
  width: 35px;
  height: 35px;
  background: #323232;
  border-radius: 100%;
  top: 85px;
  right: -35px;
  background-color: red;
}
.progress2 .precent2:before {
  content: "";
  position: absolute;
  width: 35px;
  height: 35px;
  background: #323232;
  border-radius: 100%;
  top: 85px;
  left: -35px;
  background-color: blue;
}
.progress2 .circle2 {
  width: 200px;
  height: 200px;
  background: white;
  background: conic-gradient(
    from 91deg,
    #d63031 0%,
    #ffffff 20%,
    transparent 100%
  );
  -webkit-clip-path: polygon(
    0% 100%,
    0% 0%,
    100% 0%,
    100% 50%,
    50% 50%,
    100% 50%,
    100% 100%
  );
  clip-path: polygon(
    0% 100%,
    0% 0%,
    100% 0%,
    100% 50%,
    50% 50%,
    100% 50%,
    100% 100%
  );
  animation-name: loading;
  animation-duration: 5s;
  animation-iteration-count: infinite;
  animation-timing-function: cubic-bezier(0, 0.1, 0.9, 0.81);
  animation-play-state: paused;
  animation-direction: reverse;
  animation-delay: 5s;
  border-radius: 100%;
}
@keyframes loading {
  0% {
    -webkit-clip-path: polygon(
      0% 100%,
      0% 0%,
      100% 0%,
      100% 50%,
      50% 50%,
      100% 50%,
      100% 100%
    );
    clip-path: polygon(
      0% 100%,
      0% 0%,
      100% 0%,
      100% 50%,
      50% 50%,
      100% 50%,
      100% 100%
    );
  }
  12.5% {
    -webkit-clip-path: polygon(
      0% 100%,
      0% 0%,
      100% 0%,
      100% 50%,
      50% 50%,
      100% 100%,
      100% 100%
    );
    clip-path: polygon(
      0% 100%,
      0% 0%,
      100% 0%,
      100% 50%,
      50% 50%,
      100% 100%,
      100% 100%
    );
  }
  25% {
    -webkit-clip-path: polygon(
      0% 100%,
      0% 0%,
      100% 0%,
      100% 50%,
      50% 50%,
      50% 100%,
      50% 100%
    );
    clip-path: polygon(
      0% 100%,
      0% 0%,
      100% 0%,
      100% 50%,
      50% 50%,
      50% 100%,
      50% 100%
    );
  }
  37.5% {
    -webkit-clip-path: polygon(
      0% 100%,
      0% 0%,
      100% 0%,
      100% 50%,
      50% 50%,
      0% 100%,
      0% 100%
    );
    clip-path: polygon(
      0% 100%,
      0% 0%,
      100% 0%,
      100% 50%,
      50% 50%,
      0% 100%,
      0% 100%
    );
  }
  50% {
    -webkit-clip-path: polygon(
      0% 50%,
      0% 0%,
      100% 0%,
      100% 50%,
      50% 50%,
      0% 50%,
      0% 50%
    );
    clip-path: polygon(
      0% 50%,
      0% 0%,
      100% 0%,
      100% 50%,
      50% 50%,
      0% 50%,
      0% 50%
    );
  }
  62.5% {
    -webkit-clip-path: polygon(
      0% 0%,
      0% 0%,
      100% 0%,
      100% 50%,
      50% 50%,
      0% 0%,
      0% 0%
    );
    clip-path: polygon(0% 0%, 0% 0%, 100% 0%, 100% 50%, 50% 50%, 0% 0%, 0% 0%);
  }
  75% {
    -webkit-clip-path: polygon(
      50% 0%,
      50% 0%,
      100% 0%,
      100% 50%,
      50% 50%,
      50% 0%,
      50% 0%
    );
    clip-path: polygon(
      50% 0%,
      50% 0%,
      100% 0%,
      100% 50%,
      50% 50%,
      50% 0%,
      50% 0%
    );
  }
  87.5% {
    -webkit-clip-path: polygon(
      100% 0%,
      100% 0%,
      100% 0%,
      100% 50%,
      50% 50%,
      100% 0%,
      100% 0%
    );
    clip-path: polygon(
      100% 0%,
      100% 0%,
      100% 0%,
      100% 50%,
      50% 50%,
      100% 0%,
      100% 0%
    );
  }
  100% {
    -webkit-clip-path: polygon(
      100% 50%,
      100% 50%,
      100% 50%,
      100% 50%,
      50% 50%,
      100% 50%,
      100% 50%
    );
    clip-path: polygon(
      100% 50%,
      100% 50%,
      100% 50%,
      100% 50%,
      50% 50%,
      100% 50%,
      100% 50%
    );
  }
}
@keyframes meter {
  0% {
    transform: rotate(90deg);
  }
  25% {
    transform: rotate(179deg);
  }
  50% {
    transform: rotate(269deg);
  }
  75% {
    transform: rotate(360deg);
  }
  100% {
    transform: rotate(450deg);
  }
}
.progress2 .range2 {
  margin-top: 20px;
}
.progress2 input[type="range"] {
  -webkit-appearance: none;
  width: 100%;
  background: transparent;
}

.progress2 input[type="range"]::-webkit-slider-thumb {
  -webkit-appearance: none;
}

.progress2 input[type="range"]:focus {
  outline: none;
}

.progress2 input[type="range"]::-webkit-slider-thumb {
  -webkit-appearance: none;
  height: 16px;
  width: 16px;
  border-radius: 100%;
  background: white;
  cursor: pointer;
  margin-top: -6px;
  z-index: 9;
  position: relative;
}

.progress2 input[type="range"]::-moz-range-thumb {
  height: 16px;
  width: 16px;
  border-radius: 100%;
  background: white;
  cursor: pointer;
  border: 0;
  z-index: 9;
  position: relative;
}

.progress2 input[type="range"]::-webkit-slider-runnable-track {
  width: 100%;
  height: 5px;
  cursor: pointer;
  background: white;
  border-radius: 20px;
}

.progress2 input[type="range"]::-moz-range-track {
  width: 100%;
  height: 5px;
  cursor: pointer;
  background: white;
  border-radius: 20px;
}


?>


