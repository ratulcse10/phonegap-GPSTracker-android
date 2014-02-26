<?php
include("include/config.php");
include("include/ebooks_core_class.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>SUST CSE e-Books Zone</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Academic e-Books Collection,Dept of CSE,SUST" />
        <meta name="author" content="Abu Shahriar Ratul,Yousuf Khan Ratul" />
        <!-- google font -->
        <link href="http://fonts.googleapis.com/css?family=Aclonica:regular" rel="stylesheet" type="text/css" />
        <!-- styles -->
        <link href="css/bootstrap.css" rel="stylesheet" />
        <link href="css/bootstrap-responsive.css" rel="stylesheet" />
        <link href="css/stilearn.css" rel="stylesheet" />
        <link href="css/stilearn-responsive.css" rel="stylesheet" />
        <link href="css/stilearn-helper.css" rel="stylesheet" />
        <link href="css/stilearn-icon.css" rel="stylesheet" />
        <link href="css/font-awesome.css" rel="stylesheet" />
        <link href="css/animate.css" rel="stylesheet" />
        <link href="css/uniform.default.css" rel="stylesheet" />
        
        <link href="css/DT_bootstrap.css" rel="stylesheet" />
        <link href="css/responsive-tables.css" rel="stylesheet" />
        
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
        <body>
            
            <!-- section content -->
            <section class="section">
                <div class="row-fluid">
                    <!-- span side-left -->
                    <div class="span1">
                        <!--side bar-->
                        
                        </div><!-- span side-left -->
                        
                        <!-- span content -->
                        <div class="span9">
                            <!-- content -->
                            <div class="content" style="margin-top:0%;margin-right:-21%;margin-left:-9.4%">
                                <!-- content-header -->
                                <div class="content-header">
                                    <ul class="content-header-action pull-right">
                                        <li>
                                            <a >
                                            <div class="badge-circle grd-green color-white"><i class="icofont-bar-chart"></i></div>
                                            <div class="action-text color-green">
                                                <?php
                                                $tb= new  Books();
                                                $tbget=$tb->getCountBooks();
                                                echo $tbget;
                                                ?>
                                            <span class="helper-font-small color-silver-dark">Total Books</span></div>
                                            </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a >
                                            <div class="badge-circle grd-teal color-white"><i class="icofont-dashboard"></i></div>
                                            <div class="action-text color-teal">
                                                <?php
                                                $hc= new  Books();
                                                $hcget=$hc->getCountHits();
                                                echo  $hcget;
                                                ?>
                                            <span class="helper-font-small color-silver-dark">Total Hits</span></div>
                                            </a>
                                        </li>
                                        <li class="divider"></li>
                                        
                                        <li>
                                            <div id="totalDownloadShow">
                                                <a >
                                                <div class="badge-circle grd-orange color-white"><i class="icofont-download-alt"></i></div>
                                                <div class="action-text color-orange">
                                                    <?php
                                                    $dc= new  Books();
                                                    $dcget=$dc->getCountDownloads();
                                                    echo  $dcget;
                                                    ?>
                                                <span class="helper-font-small color-silver-dark">Total Downloads</span></div>
                                                </a>
                                            </div>
                                        </li>
                                        
                                    </ul>
                                    <h2 style="font-size:30px"><i class=" icofont-book"></i>  SUST  CSE e-Books Zone</h2>
                                    </div><!-- /content-header -->
                                    
                                    
                                    
                                    <!-- content-body -->
                                    <div class="content-body">
                                        <!-- tables -->
                                        <!--datatables-->
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <div class="box corner-all">
                                                    <div class="box-header grd-white corner-top">
                                                        
                                                        <span>Upload Account Details</span>
                                                    </div>
                                                    <div class="box-body">
                                                        <div class="box-tab corner-all">
                                                            <div class="tabbable tabs-left">
                                                                <ul class="nav nav-tabs" >
                                                                    <!--tab menus-->
                                                                   
                                                                    <li class="active"><a data-toggle="tab" href="#googledrive"><span class='label label-inverse'>Google Drive</span></a></li>
                                                                    <li class=""><a data-toggle="tab" href="#skydrive"><span class='label label-important'>Skydrive</span></a></li>
                                                                    <li class=""><a data-toggle="tab" href="#boxdotnet"><span class='label label-success'>box.net</span></a></li>
                                                                    <li class=""><a data-toggle="tab" href="#4shared"><span class='label label-warning'>4shared</span></a></li>
                                                                </ul>
                                                                <!-- widgets-tab-body -->
                                                                <div class="tab-content">
                                                                   
                                                                    <div class="tab-pane fade active in" id="googledrive">
                                                                        <button class="btn"><a href="http://drive.google.com" target="_blnak"><span class='label label-inverse'>Google Drive Login Link</span></a></button>
                                                                        </br></br>
                                                                        <p>Username: <strong>sustcsebooks@gmail.com</strong></p>
                                                                        <p>Password: <strong>sustcsebooks2013</strong></p>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="skydrive">
                                                                        <button class="btn"><a href="https://skydrive.live.com" target="_blnak"><span class='label label-important'>Skydrive Login Link</span></a></button>
                                                                        </br></br>
                                                                        <p>Username: <strong>sustcsebooks@outlook.com</strong></p>
                                                                        <p>Password: <strong>books4sustcse</strong></p>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="boxdotnet">
                                                                        <button class="btn"><a href="https://app.box.com/" target="_blnak"><span class='label label-success'>box.net Login Link</span></a></button>
                                                                        </br></br>
                                                                        <p>Username: <strong>sustcsebooks@gmail.com</strong></p>
                                                                        <p>Password: <strong>sustcsebooks2013</strong></p>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="4shared">
                                                                        <button class="btn"><a href="http://www.4shared.com/" target="_blnak"><span class='label label-warning'>4shared Login Link</span></a></button>
                                                                        </br></br>
                                                                        <p>Username: <strong>sustcsebooks@gmail.com</strong></p>
                                                                        <p>Password: <strong>sustcsebooks2013</strong></p>
                                                                    </div>
                                                                    </div><!--/widgets-tab-body-->
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                            
                                                            
                                                            </div><!-- /box-body -->
                                                            </div><!-- /box -->
                                                            </div><!-- /span -->
                                                            </div><!--/datatables-->
                                                            <div class="row-fluid">
                                                                <div class="span12">
                                                                    <div class="box corner-all">
                                                                        <div class="box-header grd-white corner-top">
                                                                            
                                                                            <span>বই আপলোডের নিয়মাবলী</span>
                                                                        </div>
                                                                        <div class="box-body">
                                                                            <li>উপরে দেয়া সবগুলো সাইটে প্রদত্ত ইউজার নেম এবং পাসওয়ার্ড দিয়ে প্রবেশ করে বই আপলোড করুন</li>
                                                                            <li>অবশ্যই সবগুলো হোস্টিং সার্ভারে আপলোড করতে হবে (মানে GoogleDrive,SkyDrive,box.net,4shared প্রত্যেকটি সাইটেই বই আপলোড করতে হবে)</li>
                                                                            <li>আপলোডের পর প্রতিটি বইয়ের Course Title,Book Title,Writers,Edition, Links (GoogleDrive,SkyDrive,box.net,4shared) তালিকা আকারে করে একটি টেক্সট ফাইল করতে হবে</li>
                                                                            <li>তৈরিকৃত টেক্সট ফাইল নিজ নিজ রেজিস্ট্রেশন নাম্বারের নামে (উদাহরণস্বরুপ : 2010331016.txt) ফরমেটে <strong>sustcsebooks@gmail.com</strong> এ পাঠাতে হবে</li>
                                                                            <li>আপনার অবদানের স্বীকৃতিস্বরুপ সাইটের "অবদানকারী" পাতায় আপনার নাম যুক্ত হবে</li>
                                                                            <li>এই প্রজেক্ট সম্পর্কিত যে কোন সমস্যা অথবা জিজ্ঞাসায় ইমেইল করুন <strong>ratul@student.sust.edu</strong> এই ঠিকানায়</li>
                                                                 <!--           <form class="form-horizontal" id="book_entry_form" />
                                                        <fieldset>
                                                            <legend>Please check before submit</legend>
                                                            <div class="control-group">
                                                                <label class="control-label" for="required">Course Title: </label>
                                                                <div class="controls">
                                                                    <input type="text" class="grd-white" name="course_title" id="course_title" />
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label class="control-label" for="required">Book Title:  </label>
                                                                <div class="controls">
                                                                    <input type="text" class="grd-white" name="book_title" id="book_title" />
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label class="control-label" for="required">Writers:  </label>
                                                                <div class="controls">
                                                                    <input type="text" class="grd-white" name="writers" id="writers" />
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label class="control-label" for="required">Edition:  </label>
                                                                <div class="controls">
                                                                    <input type="text" class="grd-white" name="edition" id="edition" />
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label class="control-label" for="required">Mediafire Link:  </label>
                                                                <div class="controls">
                                                                    <input type="text" class="grd-white" name="mediafire" id="mediafire" />
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label class="control-label" for="required">Google Drive Link:  </label>
                                                                <div class="controls">
                                                                    <input type="text" class="grd-white" name="googe_drive" id="googe_drive" />
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label class="control-label" for="required">Sky Drive Link:  </label>
                                                                <div class="controls">
                                                                    <input type="text" class="grd-white" name="sky_drive" id="sky_drive" />
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label class="control-label" for="required">box.net Link:  </label>
                                                                <div class="controls">
                                                                    <input type="text" class="grd-white" name="boxdotnet" id="boxdotnet" />
                                                                </div>
                                                            </div>
                                                            <div class="control-group">
                                                                <label class="control-label" for="required">4shared Link:  </label>
                                                                <div class="controls">
                                                                    <input type="text" class="grd-white" name="4shared" id="4shared" />
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                             
                                                                <div class="controls">
                                                                    <button type="submit" class="btn btn-primary" id="book_entry_button">Entry</button>
                                                                </div>
                                                            </div>


                                                        </fieldset>
                                                    </form> -->

                                                                        
                                                                            
                                                                            
                                                                            </div><!-- /box-body -->
                                                                            </div><!-- /box -->
                                                                            </div><!-- /span -->
                                                                            </div><!--/datatables-->
                                                                            
                                                                            <div align="center" ><div class="alert alert-success">
                                                                                All Right Reserved | 2013 | Proudly Developed By
                                                                                <strong>SUST CSE'10 Web Zone</strong>
                                                                                </br>
                                                                                Department of Computer Science & Engineering (CSE), Shahjalal University of Science & Technology (SUST),Sylhet
                                                                            </div>
                                                                            
                                                                        </div>
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        
                                                                        <!--/tables-->
                                                                        </div><!--/content-body -->
                                                                        </div><!-- /content -->
                                                                        </div><!-- /span content -->
                                                                        
                                                                        
                                                                    </div>
                                                                </section>
                                                                <!-- section footer -->
                                                                <footer>
                                                                    <a rel="to-top" href="#top"><i class="icofont-circle-arrow-up"></i></a>
                                                                </footer>

                                                                <!-- javascript
        ================================================== -->
       
        <script src="js/jquery-ui.min.js"></script>

        
        <script src="js/datepicker/bootstrap-datepicker.js"></script>
        <script src="js/colorpicker/bootstrap-colorpicker.js"></script>
        <script src="js/select2/select2.js"></script>
        <script src="js/wysihtml5/wysihtml5-0.3.0.js"></script>
        <script src="js/wysihtml5/bootstrap-wysihtml5.js"></script>
        <script src="js/validate/jquery.validate.js"></script>
        <script src="js/validate/jquery.metadata.js"></script>
        <script src="js/wizard/jquery.ui.widget.js"></script> <!-- this required for jquery.wizard-->
        <script src="js/wizard/jquery.wizard.js"></script>




                                                                <!-- javascript
                                                                ================================================== -->

                                                                <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
                                                                <script src="js/jquery.js"></script>
                                                                <script src="js/bootstrap.js"></script>
                                                                <script src="js/uniform/jquery.uniform.js"></script>
                                                                
                                                                <script src="js/datatables/jquery.dataTables.min.js"></script>
                                                                <script src="js/datatables/extras/ZeroClipboard.js"></script>
                                                                <script src="js/datatables/extras/TableTools.min.js"></script>
                                                                <script src="js/datatables/DT_bootstrap.js"></script>
                                                                <script src="js/responsive-tables/responsive-tables.js"></script>
                                                                
                                                                <!-- required stilearn template js, for full feature-->
                                                                <script src="js/holder.js"></script>
                                                                <script src="js/stilearn-base.js"></script>
                                                                <script type="text/javascript">
                                                                $(document).ready(function() {
                                                                // try your js
                                                                
                                                              


                                                                $("#regForm").submit(function(evt) {
                                                                    alert("sd");
                                                                        $.ajax({
                                                                        type    : "POST",
                                                                        url : "entry_done.php",
                                                                        data    : $("#regForm").serialize(),
                                                                        }).done(function() {
                                                                        // $('#result').load('list.php');
                                                                        });
                                                                        evt.preventDefault();
                                                                    });

                                                            }
                                                                
                                                                
                                                                </script>


                                                            </body>
                                                        </html>