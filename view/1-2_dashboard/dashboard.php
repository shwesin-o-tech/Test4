<!DOCTYPE html>
<html lang="en">
<head>
  <title>THEME 1</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <base href='<?php echo $_SERVER['PHP_SELF']; ?>'>
  <link rel="stylesheet" type="text/css" href="../../css/frame.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
  <div class="wrapper">
	 <?php include_once "../part/top_bar.php"; ?>
     <div class="main-body">
      <?php include_once "../part/side_bar.php"; ?>
      <div class="container">
        <div class="page-header">
          <h1>Dashboard</h1>
        </div>

        <div class="d-flex">
          <div class="col-md-3">
            <div class="box-info">
              <span class="info-box-icon bg-icon">
                <i class="far fa-building icon-font"></i>
              </span>
              <div class="info-box-content">
                <span class="info-box-text">Company</span>
                <span class="info-box-number">90<small>%</small></span>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="box-info ">
              <span class="info-box-icon bg-red bg-icon">
                <i class="fas fa-users icon-font"></i>
              </span>
              <div class="info-box-content">
                <span class="info-box-text">Staff</span>
                <span class="info-box-number">80<small>%</small></span>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="box-info">
              <span class="info-box-icon bg-green bg-icon">
                <i class="fas fa-truck-moving icon-font"></i>
              </span>
              <div class="info-box-content">
                <span class="info-box-text">Vehicle</span>
                <span class="info-box-number">50<small>%</small></span>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="box-info">
              <span class="info-box-icon bg-y bg-icon">
                <i class="fas fa-truck-moving icon-font"></i>
              </span>
              <div class="info-box-content">
                <span class="info-box-text">Equipment</span>
                <span class="info-box-number">40<small>%</small></span>
              </div>
            </div>
          </div>
        </div>
         <div class="d-flex" style="display: flex;">
            <div class="col-md-6">
              <div class="box">
                <div class="box_body">
                  <h2>Latest Company List</h2>
                   <table class="table_border border-left" style="margin-top: 20px;">
                      <thead>
                        <tr>
                          <th><input type="checkbox" name=""></th>
                          <th>Company Name</th>
                          <th>Business Type</th>
                          <th>Phone</th>
                          <th>Email</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                         <td><input type="checkbox" name=""></td>
                         <td>O Technique</td>
                         <td>IT</td>
                         <td>0979865444</td>
                         <td>o_tech@gmail.com</td>
                         <td>
                           <span><i class="fas fa-pen icon"></i></span>
                           <span><i class="fas fa-trash-alt icon"></i></span>
                         </td>
                        </tr>
                        <tr>
                         <td><input type="checkbox" name=""></td>
                         <td>O Technique</td>
                         <td>IT</td>
                         <td>0979865444</td>
                         <td>o_tech@gmail.com</td>
                         <td>
                           <span><i class="fas fa-pen icon"></i></span>
                           <span><i class="fas fa-trash-alt icon"></i></span>
                         </td>
                        </tr>
                        <tr>
                         <td><input type="checkbox" name=""></td>
                         <td>O Technique</td>
                         <td>IT</td>
                         <td>0979865444</td>
                         <td>o_tech@gmail.com</td>
                         <td>
                           <span><i class="fas fa-pen icon"></i></span>
                           <span><i class="fas fa-trash-alt icon"></i></span>
                         </td>
                        </tr>
                        <tr>
                         <td><input type="checkbox" name=""></td>
                         <td>O Technique</td>
                         <td>IT</td>
                         <td>0979865444</td>
                         <td>o_tech@gmail.com</td>
                         <td>
                           <span><i class="fas fa-pen icon"></i></span>
                           <span><i class="fas fa-trash-alt icon"></i></span>
                         </td>
                        </tr>
                        <tr>
                         <td><input type="checkbox" name=""></td>
                         <td>O Technique</td>
                         <td>IT</td>
                         <td>0979865444</td>
                         <td>o_tech@gmail.com</td>
                         <td>
                           <span><i class="fas fa-pen icon"></i></span>
                           <span><i class="fas fa-trash-alt icon"></i></span>
                         </td>
                        </tr>
                        <tr>
                         <td><input type="checkbox" name=""></td>
                         <td>O Technique</td>
                         <td>IT</td>
                         <td>0979865444</td>
                         <td>o_tech@gmail.com</td>
                         <td>
                           <span><i class="fas fa-pen icon"></i></span>
                           <span><i class="fas fa-trash-alt icon"></i></span>
                         </td>
                        </tr>

                      </tbody>
                    </table>
                </div>
              </div>  
            </div>
            <div class="col-md-6">
              <div class="box">
                <div class="box_body">
                  <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                  
                </div>
              </div>
            </div>
         </div> 
      </div>
    </div>
	</div>
</body>
</html>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script type="text/javascript" src="../../js/main.js"></script>
