<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url() ?>assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/img/favicon.png">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/styles.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/materialize.min.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Encode
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!-- Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php echo base_url() ?>assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet"/>
</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="danger" data-background-color="white" data-image="<?php echo base_url() ?>assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="./dashboard.html">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item active ">
            <a class="nav-link" href="./user.html">
              <i class="material-icons">person</i>
              <p>Patient's Info</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./tables.html">
              <i class="material-icons">content_paste</i>
              <p>Table List</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./typography.html">
              <i class="material-icons">library_books</i>
              <p>Typography</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./icons.html">
              <i class="material-icons">bubble_chart</i>
              <p>Icons</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./map.html">
              <i class="material-icons">location_ons</i>
              <p>Maps</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./notifications.html">
              <i class="material-icons">notifications</i>
              <p>Notifications</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./rtl.html">
              <i class="material-icons">language</i>
              <p>RTL Support</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Patient's Info</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <!-- <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
        </div> -->
        <div class="container-fluid">
          <div class="row">
              <div class="col-md-12 card-margin">
                  <div class="card">
                    <div class="card-header card-header-tabs card-header-danger card-transparent">
                    <div class="nav-tabs-navigation">
                        <div class="nav-tabs-wrapper">
                        <ul class="nav nav-tabs" data-tabs="tabs">
                            <li class="nav-item">
                            <a class="nav-link active" href="#personal_information" data-toggle="tab">
                                <i class="material-icons">person</i> Personal Information
                                <div class="ripple-container"></div>
                            </a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#operation_staff" data-toggle="tab">
                                <i class="material-icons">groups</i> Operation Staffs
                                <div class="ripple-container"></div>
                            </a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#operation" data-toggle="tab">
                                <i class="material-icons">content_paste</i> Operation
                                <div class="ripple-container"></div>
                            </a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#anesthesia" data-toggle="tab">
                              <i class="material-icons">healing</i> Anesthesia
                              <div class="ripple-container"></div>
                            </a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#diagnosis" data-toggle="tab">
                              <i class="material-icons">assignment</i> Diagnosis
                              <div class="ripple-container"></div>
                            </a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#specimens" data-toggle="tab">
                              <i class="material-icons">biotech</i> Specimens
                              <div class="ripple-container"></div>
                            </a>
                            </li>
                        </ul>
                        </div>
                    </div>
                    </div>
                      <div class="card-body">
                        <div class="tab-content">
                          <div class="tab-pane active" id="personal_information">
                            <table class="table">
                              <tbody>
                                <tr>
                                    <div class="row">
                                      <div class="col-md-12 card-margin">
                                              <div class="card">
                                                <div class="card-header card-header-danger">
                                                  <h4 class="card-title">Personal Information</h4>
                                                  <!-- <p class="card-category">Complete profile</p> -->
                                                  </div>
                                                  <div class="card-body">
                                                    <form>
                                                        <div class="row">
                                                          <div class="col-md-3">
                                                              <div class="form-group">
                                                                <label class="bmd-label-floating">Case No.:</label>
                                                                <input type="text" class="form-control">
                                                              </div>
                                                          </div>
                                                          <div class="col-md-3">
                                                              <div class="form-group">
                                                                <label class="bmd-label-floating">Room No.:</label>
                                                                <input type="text" class="form-control">
                                                              </div>
                                                          </div>
                                                        </div>
                                                        <div class="row">
                                                          <div class="col-md-3">
                                                              <div class="form-group">
                                                                <label class="bmd-label-floating">Date:</label>
                                                                <input type="text" class="form-control" id="datepicker">
                                                              </div>
                                                          </div>
                                                        </div>
                                                        <div class="row">
                                                          <div class="col-md-4">
                                                              <div class="form-group">
                                                                <label class="bmd-label-floating">First Name:</label>
                                                                <input type="text" class="form-control">
                                                              </div>
                                                          </div>
                                                          <div class="col-md-3">
                                                              <div class="form-group">
                                                                <label class="bmd-label-floating">Middle Name:</label>
                                                                <input type="text" class="form-control">
                                                              </div>
                                                          </div>
                                                          <div class="col-md-3">
                                                              <div class="form-group">
                                                                <label class="bmd-label-floating">Last Name:</label>
                                                                <input type="text" class="form-control">
                                                              </div>
                                                          </div>
                                                          <div class="col-md-2">
                                                            <div class="form-group">
                                                              <select class="form-control">
                                                                <option value="" disabled selected>Suffix:</option>
                                                                <option value="1">Option 1</option>
                                                                <option value="2">Option 2</option>
                                                                <option value="3">Option 3</option>
                                                              </select>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="row">
                                                          <div class="col-md-3">
                                                              <div class="form-group">
                                                                <label class="bmd-label-floating">Birthday:</label>
                                                                <input type="text" class="form-control">
                                                              </div>
                                                          </div>
                                                          <div class="col-md-3">
                                                              <div class="form-group">
                                                                <label class="bmd-label-floating">Age:</label>
                                                                <input type="text" class="form-control">
                                                              </div>
                                                          </div>
                                                          <div class="col-md-3">
                                                              <div class="form-group">
                                                                <label class="bmd-label-floating">Sex:</label>
                                                                <input type="text" class="form-control">
                                                              </div>
                                                          </div>
                                                          <div class="col-md-3">
                                                              <div class="form-group">
                                                                <select class="form-control">
                                                                  <option value="" disabled selected>Status:</option>
                                                                  <option value="1">Option 1</option>
                                                                  <option value="2">Option 2</option>
                                                                  <option value="3">Option 3</option>
                                                                </select>
                                                              </div>
                                                          </div>
                                                        </div>
                                                        <div class="row">
                                                          <div class="col-md-12">
                                                              <div class="form-group">
                                                                  <label class="bmd-label-floating">Address:</label>
                                                                  <input type="text" class="form-control">
                                                              </div>
                                                          </div>
                                                        </div>
                                                        <div class="row">
                                                          <div class="col-md-4">
                                                              <div class="form-group">
                                                                <select class="form-control">
                                                                  <option value="" disabled selected>Province:</option>
                                                                  <option value="1">Option 1</option>
                                                                  <option value="2">Option 2</option>
                                                                  <option value="3">Option 3</option>
                                                                </select>
                                                              </div>
                                                          </div>
                                                          <div class="col-md-4">
                                                              <div class="form-group">
                                                                <select class="form-control">
                                                                  <option value="" disabled selected>City:</option>
                                                                  <option value="1">Option 1</option>
                                                                  <option value="2">Option 2</option>
                                                                  <option value="3">Option 3</option>
                                                                </select>
                                                              </div>
                                                          </div>
                                                          <div class="col-md-4">
                                                              <div class="form-group">
                                                                <select class="form-control">
                                                                  <option value="" disabled selected>Barangay:</option>
                                                                  <option value="1">Option 1</option>
                                                                  <option value="2">Option 2</option>
                                                                  <option value="3">Option 3</option>
                                                                </select>
                                                              </div>
                                                          </div>
                                                        </div>
                                                        <div class="row">
                                                          <div class="col-md-3">
                                                              <div class="form-group">
                                                                  <label class="bmd-label-floating">Trans-IN:</label>
                                                                  <input type="text" class="form-control">
                                                              </div>
                                                          </div>
                                                          <div class="col-md-3">
                                                              <div class="form-group">
                                                                  <label class="bmd-label-floating">Trans-OUT:</label>
                                                                  <input type="text" class="form-control">
                                                              </div>
                                                          </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </form>
                                                  </div>
                                              </div>
                                      </div>
                                  </div>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="tab-pane" id="operation_staff">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <div class="row">
                                        <div class="col-md-12 card-margin">
                                                <div class="card">
                                                    <div class="card-header card-header-danger">
                                                      <h4 class="card-title">Operation Staffs</h4>
                                                    </div>
                                                    <div class="card-body">
                                                    <form>
                                                      <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                              <label class="bmd-label-floating">Surgeon:</label>
                                                              <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                              <label class="bmd-label-floating">Scrub Staff:</label>
                                                              <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                              <label class="bmd-label-floating">Assistant Surgeon:</label>
                                                              <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                              <label class="bmd-label-floating">Circulating Staff:</label>
                                                              <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                              <label class="bmd-label-floating">Anesthesiologist:</label>
                                                              <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                              <label class="bmd-label-floating">Other Personnel:</label>
                                                              <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                      </div>
                                                      <div class="clearfix"></div>
                                                    </form>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="tab-pane" id="operation">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <div class="row">
                                        <div class="col-md-12 card-margin">
                                                <div class="card">
                                                    <div class="card-header card-header-danger">
                                                      <h4 class="card-title">Operation</h4>
                                                    </div>
                                                    <div class="card-body">
                                                    <form>
                                                      <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                            <label class="bmd-label-floating">Date of Operation:</label>
                                                            <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                            <label class="bmd-label-floating">Started:</label>
                                                            <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                            <label class="bmd-label-floating">Ended:</label>
                                                            <input type="email" class="form-control">
                                                            </div>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-12">
                                                          <div class="form-group">
                                                            <label class="bmd-label-floating">Operative Performed:</label>
                                                            <textarea class="form-control" rows="3"></textarea>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-1">
                                                          <div class="form-group">
                                                            <label><b>PRE-OP:</b></label>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                          <div class="form-group">
                                                            <label class="bmd-label-floating">Sponges:</label>
                                                            <input type="text" class="form-control">
                                                          </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                          <div class="form-group">
                                                            <label class="bmd-label-floating">Kellys:</label>
                                                            <input type="text" class="form-control">
                                                          </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                          <div class="form-group">
                                                            <label class="bmd-label-floating">Needles:</label>
                                                            <input type="text" class="form-control">
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-1">
                                                          <div class="form-group">
                                                            <label><b>POST-OP:</b></label>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                          <div class="form-group">
                                                            <label class="bmd-label-floating">Sponges:</label>
                                                            <input type="text" class="form-control">
                                                          </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                          <div class="form-group">
                                                            <label class="bmd-label-floating">Kellys:</label>
                                                            <input type="text" class="form-control">
                                                          </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                          <div class="form-group">
                                                            <label class="bmd-label-floating">Needles:</label>
                                                            <input type="text" class="form-control">
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-4">
                                                          <div class="form-group">
                                                            <label class="bmd-label-floating">Baby Out:</label>
                                                            <input type="text" class="form-control">
                                                          </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                          <div class="form-group">
                                                            <label class="bmd-label-floating">APGAR:</label>
                                                            <input type="text" class="form-control">
                                                          </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                          <div class="form-group">
                                                            <label class="bmd-label-floating">Sex:</label>
                                                            <input type="text" class="form-control">
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="clearfix"></div>
                                                    </form>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="tab-pane" id="anesthesia">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <div class="row">
                                        <div class="col-md-12 card-margin">
                                                <div class="card">
                                                    <div class="card-header card-header-danger">
                                                      <h4 class="card-title">Anesthesia</h4>
                                                    </div>
                                                    <div class="card-body">
                                                    <form>
                                                      <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                            <label class="bmd-label-floating">Type of Anesthesia used:</label>
                                                            <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                            <label class="bmd-label-floating">Began:</label>
                                                            <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                            <label class="bmd-label-floating">Ended:</label>
                                                            <input type="email" class="form-control">
                                                            </div>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-12">
                                                          <div class="form-group">
                                                            <label><b>Treatment given in the Operating Room:</b></label>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-12">
                                                          <div class="form-group">
                                                            <label class="bmd-label-floating">Before OR:</label>
                                                            <textarea class="form-control" rows="2"></textarea>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-12">
                                                          <div class="form-group">
                                                            <label class="bmd-label-floating">During OR:</label>
                                                            <textarea class="form-control" rows="2"></textarea>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-12">
                                                          <div class="form-group">
                                                            <label class="bmd-label-floating">Immediately OR:</label>
                                                            <textarea class="form-control" rows="2"></textarea>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="clearfix"></div>
                                                    </form>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="tab-pane" id="diagnosis">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <div class="row">
                                        <div class="col-md-12 card-margin">
                                                <div class="card">
                                                    <div class="card-header card-header-danger">
                                                      <h4 class="card-title">Diagnosis</h4>
                                                    </div>
                                                    <div class="card-body">
                                                    <form>
                                                      <div class="row">
                                                        <div class="col-md-12">
                                                          <div class="form-group">
                                                            <label class="bmd-label-floating">Pre-Operative Diagnosis:</label>
                                                            <textarea class="form-control" rows="3"></textarea>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                        <div class="col-md-12">
                                                          <div class="form-group">
                                                            <label class="bmd-label-floating">Post-Operative Diagnosis:</label>
                                                            <textarea class="form-control" rows="3"></textarea>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="clearfix"></div>
                                                    </form>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="tab-pane" id="specimens">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <div class="row">
                                        <div class="col-md-12 card-margin">
                                                <div class="card">
                                                    <div class="card-header card-header-danger">
                                                      <h4 class="card-title">Specimen/s forwarded to Laboratory for Examination:</h4>
                                                    </div>
                                                    <div class="card-body">
                                                    <form>
                                                      <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" value="">
                                                            Urine
                                                            <span class="form-check-sign">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                      </div>
                                                      <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" value="">
                                                            Blood
                                                            <span class="form-check-sign">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                      </div>
                                                      <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" value="">
                                                            Blood
                                                            <span class="form-check-sign">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                      </div>
                                                      <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" value="">
                                                            Blood
                                                            <span class="form-check-sign">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                      </div>
                                                      <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" value="">
                                                            Blood
                                                            <span class="form-check-sign">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                      </div>
                                                      <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" value="">
                                                            Blood
                                                            <span class="form-check-sign">
                                                                <span class="check"></span>
                                                            </span>
                                                        </label>
                                                      </div>
                                                      <button type="submit" class="btn btn-danger pull-right">Save Record</button>
                                                      <div class="clearfix"></div>
                                                    </form>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
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
      <!-- modal -->
      <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<!-- <div class="modal bot" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->
      <!-- end of modal -->
      <footer class="footer">
        <div class="container-fluid">
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>
            <a target="_blank">St. Dominic Medical Center</a>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script src="<?php echo base_url() ?>assets/js/materialize.min.js"></script>
  <script>
        const Calendar = document.querySelector('#datepicker');
        M.Datepicker.init(Calendar,{});
  </script>
  <!--   Core JS Files   -->
  <script src="<?php echo base_url() ?>assets/js/core/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/core/popper.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="<?php echo base_url() ?>assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="<?php echo base_url() ?>assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="<?php echo base_url() ?>assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="<?php echo base_url() ?>assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="<?php echo base_url() ?>assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="<?php echo base_url() ?>assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="<?php echo base_url() ?>assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="<?php echo base_url() ?>assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="<?php echo base_url() ?>assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="<?php echo base_url() ?>assets/js/plugins/fullcalendar.min.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?php echo base_url() ?>assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="<?php echo base_url() ?>assets/js/plugins/arrive.min.js"></script>
  <!-- Chartist JS -->
  <script src="<?php echo base_url() ?>assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo base_url() ?>assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url() ?>assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
  <!-- <script src="<?php echo base_url() ?>assets/demo/demo.js"></script> -->
  <!-- date picker -->
  <!-- <script>
    $(document).ready(function(){
      $('#datepicker').datepicker();
    });
  </script> -->
  <!-- <script type="text/javascript">
         $(function () {
             $('#date').datetimepicker();
         });
  </script> -->
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
</body>
</html>