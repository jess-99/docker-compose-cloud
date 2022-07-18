<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>profile with data and skills - Bootdey.com</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
  <style type="text/css">
    body {
      margin-top: 20px;
      color: #1a202c;
      text-align: left;
      background-color: #e2e8f0;
    }

    .main-body {
      padding: 15px;
    }

    .card {
      box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
    }

    .card {
      position: relative;
      display: flex;
      flex-direction: column;
      min-width: 0;
      word-wrap: break-word;
      background-color: #fff;
      background-clip: border-box;
      border: 0 solid rgba(0, 0, 0, .125);
      border-radius: .25rem;
    }

    .card-body {
      flex: 1 1 auto;
      min-height: 1px;
      padding: 1rem;
      height: 300px;
    }

    .gutters-sm {
      margin-right: -8px;
      margin-left: -8px;
    }

    .gutters-sm>.col,
    .gutters-sm>[class*=col-] {
      padding-right: 8px;
      padding-left: 8px;
    }

    .mb-3,
    .my-3 {
      margin-bottom: 1rem !important;
    }

    .bg-gray-300 {
      background-color: #e2e8f0;
    }

    .h-100 {
      height: 100% !important;
    }

    .shadow-none {
      box-shadow: none !important;
    }
  </style>
</head>

<body>
  <?php
  $mysqli = new mysqli("db", "root", "example", "friends");

  $sql = "INSERT INTO characters(Name,profession,email,phone,mobile,address,image) VALUES('Ross Geller', 'Paleontologist','Dr-RossGeller@gmail.com','(03)5494210','0124575619','Centrel Perk, New York, USA','images/1.jpg')";
  $result = $mysqli->query($sql);
  $sql = "INSERT INTO characters(Name,profession,email,phone,mobile,address,image) VALUES('Rachel Green', 'Fashion Exec','RachelGreenFashion@gmail.com','(03)5482160','01852346826','Centrel Perk, New York, USA','images/2.jpg')";
  $result = $mysqli->query($sql);
  $sql = "INSERT INTO characters(Name,profession,email,phone,mobile,address,image) VALUES('Chandler Bing', 'Advertising Copywriter','ChanChanMan@gmail.com','(03)957135','01152469200','Centrel Perk, New York, USA','images/3.jpg')";
  $result = $mysqli->query($sql);
  $sql = "INSERT INTO characters(Name,profession,email,phone,mobile,address,image) VALUES('Monica Geller', 'Chef','Cheef-MonicaGellerBing@gmail.com','(03)957135','01151249002','Centrel Perk, New York, USA','images/4.jpg')";
  $result = $mysqli->query($sql);
  $sql = "INSERT INTO characters(Name,profession,email,phone,mobile,address,image) VALUES('Joey Tribbiany', 'Actor','HowYouDoin@gmail.com','(03)957135','0115103985','Centrel Perk, New York, USA','images/joey3.jpg')";
  $result = $mysqli->query($sql);
  $sql2 = "INSERT INTO characters(Name,profession,email,phone,mobile,address,image) VALUES('Phoebe Buffay', 'Musician','PrincessConsoelaBananaHamock@gmail.com','(03)846130','015216265065','Centrel Perk, New York, USA','images/6.jpg')";
  $result = $mysqli->query($sql2);
  $sql = 'SELECT * FROM characters';
  
  if ($result = $mysqli->query($sql)) {
    while ($data = $result->fetch_object()) {
        $friends[] = $data;
    }
}

echo " <h1 style='text-align: center;'>Friends</h1>";

foreach ($friends as $friend) {
  echo "<div class='container'>
  <div class='main-body'>
    <div class='row gutters-sm'>
      <div class='col-md-4 mb-3'>
        <div class='card'>
          <div class='card-body'>
            <div class='d-flex flex-column align-items-center text-center'>
              <img src='$friend->image' alt='Admin' class='rounded-circle' width='150'>
              <div class='mt-3'>
                <h4>$friend->Name</h4>
                <p class='text-secondary mb-1'>$friend->profession</p>
                <p class='text-muted font-size-sm'>$friend->address</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class='col-md-8'>
        <div class='card mb-3'>
          <div class='card-body'>
            <div class='row'>
              <div class='col-sm-3'>
                <h6 class='mb-0'>Full Name</h6>
              </div>
              <div class='col-sm-9 text-secondary'>
                $friend->Name
              </div>
            </div>
            <hr>
            <div class='row'>
              <div class='col-sm-3'>
                <h6 class='mb-0'>Email</h6>
              </div>
              <div class='col-sm-9 text-secondary'>
                $friend->email
              </div>
            </div>
            <hr>
            <div class='row'>
              <div class='col-sm-3'>
                <h6 class='mb-0'>Phone</h6>
              </div>
              <div class='col-sm-9 text-secondary'>
                $friend->phone
              </div>
            </div>
            <hr>
            <div class='row'>
              <div class='col-sm-3'>
                <h6 class='mb-0'>Mobile</h6>
              </div>
              <div class='col-sm-9 text-secondary'>
                $friend->mobile
              </div>
            </div>
            <hr>
            <div class='row'>
              <div class='col-sm-3'>
                <h6 class='mb-0'>Address</h6>
              </div>
              <div class='col-sm-9 text-secondary'>
                $friend->address
                <br>
                <br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>";
  
}
  ?>
  <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript">

  </script>
</body>

</html>