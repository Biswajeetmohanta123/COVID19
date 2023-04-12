<style type="text/css">

html {
  scroll-behavior: smooth;
}
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Mulish', sans-serif;
}

.row {
  margin-left: 0 !important;
  margin-right: 0 !important;
}

.nav_style {
  background-color: #a29bfe !important;
}
.nav_style a {
  color: white;
}
.nav_style a:hover {
  background-color: #b3aefa !important;
  border-radius: 6px;
  font-size: 17px;
}
/* *******************Main-Header*************** */
.main_header {
  height: 450px;
  width: 100%;
}
.rightside h1 {
  font-size: 2.6rem;
}
.corona_rot img {
  animation: gocorona 3s linear infinite;
}
@keyframes gocorona {
  0% {
    transform: rotate(0);
  }
  100% {
    transform: rotate(360deg);
  }
}
.leftside img {
  animation: heartbeat 5s linear infinite;
}
@keyframes heartbeat {
  0% {
    transform: scale(0.75);
  }
  20% {
    transform: scale(1);
  }
  40% {
    transform: scale(0.75);
  }
  60% {
    transform: scale(1);
  }
  80% {
    transform: scale(0.75);
  }
  100% {
    transform: scale(0.75);
  }
}

/* *******************Covid-Update*************** */
.corona_update {
  margin: 0 0 30px 0;
}
.corona_update h3 {
  color: #ff7675;
}
.corona_update h1 {
  font-size: 2rem;
  text-align: center;
}
/* *******************About_section*************** */
.sub_section {
  background-color: #fbfafd;
}

/* *******************Footer*************** */
.footer_style {
  background-color: #a29bfe !important;
}
.footer_style p {
  margin-bottom: 0 !important;
}
/* *******************scroll*************** */
/* #progress {
  position: fixed;
  bottom: 20px;
  right: 10px;
  height: 70px;
  width: 70px;
  display: none;
  place-items: center;
  border-radius: 50%;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  cursor: pointer;
}
#progress-value {
  display: block;
  height: calc(100% - 15px);
  width: calc(100% - 15px);
  background-color: #fff;
  border-radius: 50%;
  display: grid;
  place-items: center;
  font-size: 35px;
  color: #001a2e;
} */

/* *******************Responsive*************** */

@media (max-width: 768px) {
  .main_header {
    height: 700px;
    text-align: center;
  }
  .main_header h1 {
    text-align: center;
    padding: 0;
    width: 100%;
    font-size: 30px;
  }
  .count_style {
    display: inline !important;
  }
  .count_style p {
    text-align: center;
  }
  .about_res {
    margin-left: 0 !important;
  }
}

</style>
