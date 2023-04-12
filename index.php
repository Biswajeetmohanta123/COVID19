<?php 

session_start();

if(isset($_POST['submit'])){
  require_once('connection.php');
  $name = $_POST['username'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $symp = $_POST['coronasym'];
  $msg = $_POST['msg'];

  $chk = "";

  foreach($symp as $chk1){
    $chk .= $chk1.",";
  }

  if($con->connect_error){
    die("connect error: ".$con->connect_error);
  }else{
    $inst = "INSERT INTO `contact_us`(`name`, `email`, `mobile`, `symp`, `message`) 
    VALUES ('$name','$email','$mobile','$chk','$msg')";
  }
  if($con->query($inst) == TRUE ){
    ?>
    <script>
      alert("Inserted Sucessfull");
    </script>
    <?php
  }else{
    ?>
    <script>
      alert("Not Inserted");
    </scrip>
    <?php
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID-19</title>
    <?php include 'links/links.php'; ?>
    <?php include 'css/style.php'; ?>
    
</head>
<body onload="fetch()">

<nav class="navbar navbar-expand-lg nav_style p-3">
  <h4><font color="white">COVID-19</font></h4>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sympid">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventid">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiacovid.php">IndiaCoronaLive</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">Contact</a>
      </li>
      
    </ul>
    
  </div>
</nav>
<div class="main_header">
      <div class="row w-100 h-100">
        <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
              <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
                  <img src="images/download.png" width="300" height="300">
              </div>
        </div>

        <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
              <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
                <h1>Let's Stay Safe & Fight Together Against Cor <span class="corona_rot">
                <img src="images/coronavirus.png" width="70" height="70"></span> na Virus</h1>
              </div>
        </div>

      </div>
</div>
<!-- *************corona latest updates*************** -->
<section class="corona_update container-fluid">
  <div class="mb-3">
    <h3 class="text-uppercase text-center">covid-19 live updates of the world</h3>
  </div>
      <div class="table-responsive">
        <table class="table table-bordered table-striped text-center" id="tbval">
          <tr>
            <th>Country</th>
            <th>TotalConfirmed</th>
            <th>TotalRecovery</th>
            <th>TotalDeaths</th>
            <th>NewConfirmed</th>
            <th>NewRecovered</th>
            <th>NewDeaths</th>
          </tr>
        </table>
      </div>
  </div>
</section>

<!--  *************About Section*************** -->

<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
  <div class="section_header text-center mb-5 mt-4">
      <h1> About COVID-19</h1>
  </div>

    <div class="row pt-5">
      <div class="col-lg-5 col-md-6 col-12 ml-5 about_res">
          <img src="images\aboutcorona.jpg" class="img-fluid">
      </div>
      <div class="col-lg-6 col-md-6 col-12">
          <h2>What is COVID-19 (Corona-Virus) </h2>
          <p>COVID-19 is the infection disease caused by the most
            recently discovered coronavirus. This new virus and disease
            where unknown before the outbreak began in Wuhan, China, in
            December 2019.</p>
          <p>Coronavirus are a large family of virues which my casue
            illness in animals or humans. In humans, several coronaviruses
            are known to cause respiratory infections such as middle East
            Respiratory Syndrome (MERS) and sever Acute Respiratory
            Syndrome (SARS). The most recently discovered coreonavirus
            causes coronavirues COVID-19.</p>
      </div>
    </div>
</div>

<!--******************* corona symptoms ******************** -->

<div class="container-fluid  pt-5 pb-5" id="sympid">
  <div class="section_header text-center mb-5 mt-4">
      <h1> Coronavirus Symptoms</h1>
  </div>
    <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12 mt-5">
            <figure class="text-center">
              <img src="images\cough.png" class="img-fluid" width="120" height="120">
              <figcaption> cough</figcaption>
              </figure>
          </div>

          <div class="col-lg-4 col-md-4 col-12 mt-5">
            <figure class="text-center">
              <img src="images\runnynose.png" class="img-fluid" width="120" height="120">
              <figcaption> runny nose</figcaption>
              </figure>
          </div>
          <div class="col-lg-4 col-md-4 col-12 mt-5">
            <figure class="text-center">
              <img src="images\fever.jpg" class="img-fluid" width="120" height="120">
              <figcaption> fever</figcaption>
              </figure>
          </div>
          <div class="col-lg-4 col-md-4 col-12 mt-5">
            <figure class="text-center">
              <img src="images\cold.jfif" class="img-fluid" width="120" height="120">
              <figcaption> cold</figcaption>
              </figure>
          </div>
          <div class="col-lg-4 col-md-4 col-12 mt-5">
            <figure class="text-center">
              <img src="images\tiredness.png" class="img-fluid" width="120" height="130">
              <figcaption> tiredness</figcaption>
              </figure>
          </div>
          <div class="col-lg-4 col-md-4 col-12 mt-5">
            <figure class="text-center">
              <img src="images\breathing.png" class="img-fluid" width="120" height="120">
              <figcaption> difficulty breathing (sever coses)</figcaption>
              </figure>
          </div>
        </div>
    </div>
</div>

<!-- ******************* prevention against coronavirus ************** -->

<div class="container-fluid sub_section pt-5 pb-5" id="preventid">
  <div class="section_header text-center mb-5 mt-4">
      <h1> 6 Steps Prevention Against Coronavirus</h1>
  </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-12">
                  <figure class="text-center">
                    <img src="images\handwash.png" class="img-fluid" width="90" height="90">
                  </figure>
                  </div>
                  <div class="col-lg-8 col-md-8 col-12">
                    <p>Wash your hands regularly for 20 seconds, with 
                      soap and water or alcohol-based hand rub</p>
                  </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-12">
                  <figure class="text-center">
                    <img src="images\mask.png" class="img-fluid" width="90" height="90">
                  </figure>
                  </div>
                  <div class="col-lg-8 col-md-8 col-12">
                    <p>Cover your nose and mouth with a disposable
                      tissue or flexed elbow when your cough or sneeze</p>
                  </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-12">
                  <figure class="text-center">
                    <img src="images\stay home.jpeg" class="img-fluid" width="90" height="90">
                  </figure>
                  </div>
                  <div class="col-lg-8 col-md-8 col-12">
                    <p>Stay home and self-isolate from others in the 
                      household if you feel unwell</p>
                  </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-12">
                  <figure class="text-center">
                    <img src="images\distance.jpeg" class="img-fluid" width="90" height="90">
                  </figure>
                  </div>
                  <div class="col-lg-8 col-md-8 col-12">
                    <p>Avoid close contact(1 meter or 3 feet) 
                      with peoplewho are unwall</p>
                  </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-12">
                  <figure class="text-center">
                    <img src="images\tv.png" class="img-fluid" width="90" height="90">
                  </figure>
                  </div>
                  <div class="col-lg-8 col-md-8 col-12">
                    <p>Stay informed by watching news & follow 
                      the recommended practices</p>
                  </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-12">
                  <figure class="text-center">
                    <img src="images\cold fever.png" class="img-fluid" width="90" height="90">
                  </figure>
                  </div>
                  <div class="col-lg-8 col-md-8 col-12">
                    <p>If you have fever , cough and difficulty 
                      breathing. Seek medical care early</p>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ********************* contact Us ***************** -->

<div class="container-fluid  pt-5 pb-5" id="contactid">
  <div class="section_header text-center mb-5 mt-4">
      <h1> Contact Us</h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 col-12">
 <form action="index.php" method="POST">

 <div class="form-group">
    <label>Full Name</label>
    <input type="text" class="form-control" name="username" placeholder="Your Name" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label >Email</label>
    <input type="email" class="form-control" name="email" placeholder="name@example.com" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label>Mobile</label>
    <input type="number" class="form-control" name="mobile" placeholder="Contact No." autocomplete="off" required>
  </div>
    <div class="form-group">
        <label>Select Symptoms</label><br>
        
        <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
          <input type="checkbox" class="custom-control-input" 
          id="customcheckbox1" name="coronasym[]" value="cold">
          <label class="custom-control-label" for="customcheckbox1">Cold</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
          <input type="checkbox" class="custom-control-input" 
          id="customcheckbox2" name="coronasym[]" value="fever">
          <label class="custom-control-label" for="customcheckbox2">Fever</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
          <input type="checkbox" class="custom-control-input" 
          id="customcheckbox3" name="coronasym[]" value="breath">
          <label class="custom-control-label" for="customcheckbox3">Difficulty In Breath</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
          <input type="checkbox" class="custom-control-input" 
          id="customcheckbox4" name="coronasym[]" value="tired">
          <label class="custom-control-label" for="customcheckbox4">Feeling Weak</label>
        </div>
    </div>
  <div class="form-group">
    <label>Descripe how you are feeling</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg" placeholder="Descripe how you are feeling"></textarea>
  </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
      </div>
    </div>
  </div>
</div>

<!-- ************************* footer ************************* -->

<footer class="mt-5">
    <div class="footer_style text-white text-center container-fluid">
        <p>copyright by TechnophyleRaja</p>
    </div>
</footer>
<script>
function fetch() {
  $.get('https://api.covid19api.com/summary', function (data) {
    // console.log(data['Countries'].length)
    var tbval = document.getElementById('tbval');
    for (var i = 1; i < data['Countries'].length; i++) {
      var x = tbval.insertRow();
      x.insertCell(0);
      tbval.rows[i].cells[0].innerHTML = data['Countries'][i - 1]['Country'];
      tbval.rows[i].cells[0].style.background = '#7a4a91';
      tbval.rows[i].cells[0].style.color = '#fff';

      x.insertCell(1);
      tbval.rows[i].cells[1].innerHTML =
        data['Countries'][i - 1]['TotalConfirmed'];
      tbval.rows[i].cells[1].style.background = '#4bb7d8';

      x.insertCell(2);
      tbval.rows[i].cells[2].innerHTML =
        data['Countries'][i - 1]['TotalRecovered'];
      tbval.rows[i].cells[2].style.background = '#4bb7d8';

      x.insertCell(3);
      tbval.rows[i].cells[3].innerHTML =
        data['Countries'][i - 1]['TotalDeaths'];
      tbval.rows[i].cells[3].style.background = '#f36e23';

      x.insertCell(4);
      tbval.rows[i].cells[4].innerHTML =
        data['Countries'][i - 1]['NewConfirmed'];
      tbval.rows[i].cells[4].style.background = '#4bb7d8';

      x.insertCell(5);
      tbval.rows[i].cells[5].innerHTML =
        data['Countries'][i - 1]['NewRecovered'];
      tbval.rows[i].cells[5].style.background = '#9cc850';

      x.insertCell(6);
      tbval.rows[i].cells[6].innerHTML = data['Countries'][i - 1]['NewDeaths'];
      tbval.rows[i].cells[6].style.background = '#f36e23';
    }
  });
}
// let calcScrollValue = () => {
//   let scrollProgress = document.getElementById("progress");
//   let progressValue = document.getElementById("progress-value");
//   let pos = document.documentElement.scrollTop;
//   let calcHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
//   let scrollValue = Math.round((pos * 100)/calcHeight);
//   if(pos>100){
//     scrollProgress.style.display = "grid";
//   }else{
//     scrollProgress.style.display = "none";
//   }
//   scrollProgress.addEventListener("click",() =>{
//     document.documentElement.scrollTop = 0;
//   })
//   scrollProgress.style.background = `conic-gradient(rgb(222, 59, 86) ${scrollValue}%, #d7d7d7 ${scrollValue}%)`;
// }
// window.onscroll  = calcScrollValue;
// window.onload = calcScrollValue;
</script>
</body>
</html>

