      
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>TilawatiClassMobile</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

        <a class="nav-link text-white clearfix" href="index.php">
          <i class="fas fa-fw fa-home"></i>
          <span>Beranda</span></a>
      </li>
     
        <a class="nav-link text-white clearfix" href="timeline.php">
          <i class="fas fa-fw fa-heart"></i>
          <span>Inspirasi</span></a>
      </li>
      

    

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Cari .." aria-label="Search"
          aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
     
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
        <ul class="nav navbar-nav">
        <a class="dropdown-item" href="Akunsaya.php">AKUN SAYA</a></li>
        <a class="dropdown-item" href="callcenter.php">CALL CENTER TILAWATI</a></li>
        <a class="dropdown-item" href="email.php">EMAIL TILAWATI</a></li>
        <a class="dropdown-item" href="Tentang.php">TENTANG KAMI</a>
        
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Keluar</a>
        </div>
        </ul>
      </li>
    </ul>

  </nav>


  <div id="wrapper">

    

    <div id="content-wrapper">

      <div class="container-fluid">

        

        <!-- Icon Cards-->
        <br>
        <br>
        <br>
        <!DOCTYPE html>
<!-- credit : http://cordova-travel.com/prayertimes/simple.html -->
<html>
<head>
    <title> Daily Prayer Timetable </title>
    <style>
        body, td, th {font-family: "trebuchet MS"; font-size: 19px; color: #fff;padding-top: 8px;margin-left: 0px;}
        #timetable {border-width: 0px; border-style: outset; border-collapse: collapse; border-color: gray; width: 9em;}
        #timetable td, #timetable th {border-width: 0px; border-spacing: 0px; padding-right: 1.369em; border-style: inset; border-color: #CCCCCC;}
        #timetable th {color:black; *text-align: center; font-weight: bold; background-color: #F8F7F4;}
        div.prayss{
            background-color: orange;
            width:590px;
            height:100px;
 
        }
 
        div.tablex{
            position: relative;
            top:28px;
            left:210px;
        }
        div.kotass{
            position: relative;
            top:9px;
            left:58px;
            font-size: 11px;
        }
        a{
            text-decoration: none;
            font-family: "trebuchet MS"; font-size: 20px; color: #fff;
        }
    </style>
</head>
 
<body>
 
<script type="text/javascript" src="PrayTimes.js"></script>
<a href="" target="_parent">
<div class="prayss">
    <div class="tablex">
    <div   id="table"></div>
    <script type="text/javascript">
         
        var date = new Date(); // today
        var times = prayTimes.getTimes(date, [-6.914744, 107.609810], 7.00);
        var list = ['Fajr', 'Dhuhr', 'Asr', 'Maghrib', 'Isha'];
 
        var html = '<table id="timetable"><tr>';
 
            for(var i in list)  {
            //html += '<tr><td>'+ list[i]+ '</td>';
            html += '<td><span>'+ list[i]+"</span><br/>"+times[list[i].toLowerCase()]+ '</td>';
        }
        html += '</tr></table>';
        document.getElementById('table').innerHTML = html;
         
    </script>
    </div>
<div class="kotass">
Bandung, 
<script type="text/javascript">
//var dayxx = currentDate.getDate();
var objToday = new Date(),
                weekday = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'),
                dayOfWeek = weekday[objToday.getDay()],
                domEnder = new Array( 'th', 'st', 'nd', 'rd', 'th', 'th', 'th', 'th', 'th', 'th' ),
                dayOfMonth = today + (objToday.getDate() < 10) ? '0' + objToday.getDate() + domEnder[objToday.getDate()] : objToday.getDate() + domEnder[parseFloat(("" + objToday.getDate()).substr(("" + objToday.getDate()).length - 1))],
                months = new Array('Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'),
                curMonth = months[objToday.getMonth()],
                curYear = objToday.getFullYear(),
                curHour = objToday.getHours() > 12 ? objToday.getHours() - 12 : (objToday.getHours() < 10 ? "0" + objToday.getHours() : objToday.getHours()),
                curMinute = objToday.getMinutes() < 10 ? "0" + objToday.getMinutes() : objToday.getMinutes(),
                curSeconds = objToday.getSeconds() < 10 ? "0" + objToday.getSeconds() : objToday.getSeconds(),
                curMeridiem = objToday.getHours() > 12 ? "PM" : "AM";
//var today = curHour + ":" + curMinute + "." + curSeconds + curMeridiem + " " + dayOfWeek + " " + dayOfMonth + " of " + curMonth + ", " + curYear;
var dayxx = objToday.getDate();
var today =  dayxx+" "+ curMonth + " " + curYear;
document.write(today);
</script>
 
</div>
 
<div style="font-size:20pt;position:absolute;margin:-40px 0px 0px 34px;">Jadwal Sholat</div>
 
</div>
</a>
 
</body>
</html>


  
        

      
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Apakah anda mau keluar?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Pilih "Keluar" di bawah ini jika Anda siap untuk mengakhiri sesi Anda saat ini.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
          <a class="btn btn-primary" href="login.php">Keluar</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>