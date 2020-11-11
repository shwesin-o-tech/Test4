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
            <h1>Company Entry</h1>
          </div>
          <div class="row">
            <div class="box">
               <div class="box_body">

                  <div class="half_container">
                    <div class="col-md-6">
                        <div class="form_group">
                          <label>Company Name</label>
                          <input type="text" name="" class="form_control" >
                        </div>
                        <div class="form_group">
                          <label>Phone</label>
                          <input type="text" name="" class="form_control" >
                        </div>
                        <div class="form_group">
                          <label>Email</label>
                          <input type="text" name="" class="form_control" >
                        </div>
                        <div class="form_group">
                          <label>Postal Code</label>
                          <input type="text" name="" class="form_control" >
                        </div>
                        <div class="form_group">
                          <label>Business Type</label>
                          <div class="multi-select-box-container">
                              <div class="multi-select-button">
                                <div class="multi-selected-value">
                                </div>
                                <div class="chevrons">
                                  <i class="fas fa-chevron-down"></i>
                                </div>
                              </div>
                              <div class="opts-group">
                                <div class="opt">
                                  <span class="opt-label">Construction</span>
                                </div>
                                <div class="opt">
                                  <span class="opt-label">Steel Construction</span>
                                </div>
                                <div class="opt">
                                  <span class="opt-label">Tobi/ earth work</span>
                                </div>
                                <div class="opt">
                                  <span class="opt-label">Carpentry</span>
                                </div>
                                <div class="opt">
                                  <span class="opt-label">Construction</span>
                                </div>
                                <div class="opt">
                                  <span class="opt-label">Steel Construction</span>
                                </div>
                                <div class="opt">
                                  <span class="opt-label">Tobi/ earth work</span>
                                </div>
                                <div class="opt">
                                  <span class="opt-label">Carpentry</span>
                                </div>
                                <div class="opt">
                                  <span class="opt-label">Construction</span>
                                </div>
                                <div class="opt">
                                  <span class="opt-label">Steel Construction</span>
                                </div>
                                <div class="opt">
                                  <span class="opt-label">Tobi/ earth work</span>
                                </div>
                                <div class="opt">
                                  <span class="opt-label">Carpentry</span>
                                </div>
                                <div class="opt">
                                  <span class="opt-label">Construction</span>
                                </div>
                                <div class="opt">
                                  <span class="opt-label">Steel Construction</span>
                                </div>
                                <div class="opt">
                                  <span class="opt-label">Tobi/ earth work</span>
                                </div>
                                <div class="opt">
                                  <span class="opt-label">Carpentry</span>
                                </div>
                              </div>
                          </div> 
                        </div>
                        <div class="form_group" style="margin-top: -23px;">
                          <label>Prefecture</label>
                          <div class="select-box-container">
                              <div class="select-button">
                                <div class="selected-value">
                                  <span>Select Prefecture</span>
                                </div>
                                <div class="chevrons">
                                  <i class="fas fa-chevron-down"></i>
                                </div>
                              </div>
                              <div class="options-group">
                                <div class="option">
                                  <span class="label">-- Select Prefecture --</span>
                                </div>
                                <div class="optgroup">
                                  <label>北海道"</label>                      
                                  <div class="option selected">
                                    <span class="label">Hokaido</span>
                                  </div>
                                </div>
                                <div class="optgroup">
                                  <label>青森県</label>
                                  <div class="option">
                                    <span class="label">Amori</span>
                                  </div>
                                  <div class="option">
                                    <span class="label">Iwate</span>
                                  </div>
                                  <div class="option">
                                    <span class="label">Miyagi</span>
                                  </div>
                                  <div class="option">
                                    <span class="label">Akita</span>
                                  </div>
                                  <div class="option">
                                    <span class="label">Yamagata</span>
                                  </div>
                                  <div class="option">
                                    <span class="label">Fukushima</span>
                                  </div>
                                </div>
                                <div class="optgroup">
                                  <label>茨城県</label>
                                  <div class="option">
                                    <span class="label">Ibaraki</span>
                                  </div>
                                  <div class="option">
                                    <span class="label">Tochigi</span>
                                  </div>
                                  <div class="option">
                                    <span class="label">Gunma</span>
                                  </div>
                                  <div class="option">
                                    <span class="label">Saitama</span>
                                  </div>
                                  <div class="option">
                                    <span class="label">Chiba</span>
                                  </div>
                                  <div class="option">
                                    <span class="label">Tokyo</span>
                                  </div>
                                  <div class="option">
                                    <span class="label">Kanagawa</span>
                                  </div>
                                </div>
                              </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                       <div class="form_group">
                          <label>Company Logo</label>
                          <img src="../../img/company_logo.jpg" style="width: 230px !important;height: 174px;border:1px solid #d2d6de;">
                          <div class="btn_container m_top">
                              <a href="#" class="btn btn_info">
                                <i class="fas fa-arrow-up"></i>
                                <span>Upload</span>
                              </a>
                          </div>
                        </div>
                        <div class="form_group" style="margin-top: 47px;">
                          <label>Longitude</label>
                          <input type="text" name="" class="form_control" >
                        </div>
                        <div class="form_group">
                          <label>Latitude</label>
                          <input type="text" name="" class="form_control"  >
                        </div>

                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="tabs-wrapper">
                      <div class="tabs">
                        <ul>
                          <li class="active">
                            <span class="text">Department</span>
                          </li>
                          <li>
                            <span class="text">Location</span>
                          </li>
                          <div class="btn_container m_left">
                              <a href="#" class="btn btn_primary">
                                <i class="fas fa-plus"></i>
                                <span>Add</span>
                              </a>
                          </div>
        
                        </ul>   
                       </div>

                       <div class="contents">
                          <div class="tab-wrap" style="display: block;">
                            <div class="tab-content">
                               <table class="table_border  border">
                                  <thead>
                                    <tr>
                                      <th>Department Name</th>
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>O Technique</td>
                                          <td>
                                           
                                            <span><i class="fas fa-trash-alt icon"></i></span>
                                          </td>
                                       </tr>  
                                       <tr>
                                          <td>
                                            <div class="form_group" style="margin-bottom: 0px;">
                                              <input type="text" name="" class="form_control"  style="width: 80%;">
                                            </div>
                                          </td>
                                          <td>
                                            <span><i class="fas fa-trash-alt icon"></i></span>
                                          </td>
                                       </tr>   
                                  </tbody>
                                 </table>
                            </div>
                          </div>

                          <div class="tab-wrap" style="display: none;">
                            <div class="tab-content" >
                              <table class="table_border border">
                                  <thead>
                                    <tr>
                                      <th>Location Name</th>
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>O Technique</td>
                                          <td>
                                            <span><i class="fas fa-trash-alt icon"></i></span>
                                          </td>
                                       </tr>  
                                       <tr>
                                          <td>
                                            <div class="form_group" style="margin-bottom: 0px;">
                                              <input type="text" name="" class="form_control"  style="width: 80%;">
                                            </div>
                                          </td>
                                          <td>
                                            <span><i class="fas fa-trash-alt icon" ></i></span>
                                          </td>
                                       </tr>   
                                  </tbody>
                                 </table>
                            </div>
                          </div>
                       </div>
                  </div> 
              </div>
            </div>
          </div>
        </div>
        </div>
	   </div>
  </div>   
</body>
</html>
<script type="text/javascript" src="../../js/main.js"></script>
