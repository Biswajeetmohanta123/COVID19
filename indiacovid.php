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
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiacovid.php">IndiaCoronaLive</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Contact</a>
      </li>
      
    </ul>
    
  </div>
</nav>

<!-- *************corona latest updates*************** -->
<section class="corona_update container-fluid">
  <div class="my-5">
    <h3 class="text-uppercase text-center">covid-19 live updates of the india</h3>
  </div>
      <div class="table-responsive">
        <table class="table table-bordered table-striped text-center">
          <tr>
            <th>lastupdatedtime</th>
            <th>state</th>
            <th>confirmed</th>
            <th>active</th>
            <th>recovered</th>
            <th>deaths</th>
          </tr>

    <?php
        $data = file_get_contents('https://api.covid19india.org/data.json');
        $coronalive = json_decode($data, TRUE);

        $statcount = count($coronalive['statewise']);

        $i=1;
        while($i < $statcount){

            ?>
            <tr>
                <td><?php echo $coronalive['statewise'][$i]['lastupdatedtime']; ?></td>
                <td><?php echo $coronalive['statewise'][$i]['state']; ?></td>
                <td><?php echo $coronalive['statewise'][$i]['confirmed']; ?></td>
                <td><?php echo $coronalive['statewise'][$i]['active']; ?></td>
                <td><?php echo $coronalive['statewise'][$i]['recovered']; ?></td>
                <td><?php echo $coronalive['statewise'][$i]['deaths']; ?></td>
            </tr>

            <?php
            $i++;
        }
    ?>

        </table>
      </div>
  </div>
</section>

<!-- ///////////// footer \\\\\\\\\\\ -->

<footer class="mt-5">
    <div class="footer_style text-white text-center container-fluid">
        <p>copyright by TechnophyleRaja</p>
    </div>
</body>
</html>