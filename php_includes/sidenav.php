<!-- Section:SideNav -->
<ul id="slide-out" class="side-nav">
        <li>
            <div class="user-view">
                <div class="background">
                    <img src="img/sidenav-bg2.jpg" alt="">
                </div>

                <div class="touxiang">
                    <a href="#">
                        <img src="img/sidenav-me.jpg" alt="" class=" large">
                    </a>
                </div>

                  <!-- Count Unapprove Comments -->
                <?php 
                    $query = "SELECT * FROM post WHERE user_status = 'unapprove'";
                    $select_unapprove_com = mysqli_query($con,$query);
                    $unapprove_count = mysqli_num_rows($select_unapprove_com);
                    if($unapprove_count > 9){
                      $unapprove_count = 9;
                    }
                ?>
                <div class="row">
                    <a href="#" class="left">
                    <span class="white-text name" style="font-size: 20px">Troy Wu</span>
                    </a>
                    <a href="#" id="notif_icon" class="white-text tooltipped" data-position="bottom" data-tooltip="You have <?php echo $unapprove_count; ?> New Comment pending"><i class="material-icons red lighten-2 pulse" style="margin-left:18px;margin-top:10px;font-size:20px">filter_<?php echo $unapprove_count; ?></i><span class="red-text" style="font-size:25px;font-weight:600">!</span></a>
                </div>
                <div class="row" style="margin-top:-12px">
                    <a href="download/resume.docx" download="resume" class="tooltipped download-a" data-position="bottom" data-tooltip="Download My Resume"
                        style="text-decoration: underline; font-size: 17px; margin-right: 13px">
                        <span class="white-text" style="font-size: 15px">Resume</span>
                    </a>
                    <a href="download/volunteer-resume.pdf" download="resume" class="tooltipped download-a" data-position="bottom" data-tooltip="Download My Volunteer Resume"
                        style="text-decoration: underline; font-size: 17px">
                        <span class="white-text" style="font-size: 15px">Volunteer Resume</span>
                    </a>
                </div>
           
            </div>
        </li>
        <ul class="collapsible" data-collapsible="accordion">
            <li>
                <div class="collapsible-header">
                    <i class="large material-icons">assignment_ind</i>
                    <span class="sidenav-header">About Me</span>
                </div>
                <div class="collapsible-body center about">
                    <div class="">
                        <img src="img/ksu_logo.jpg" alt="" class="imagesa">
                    </div>
                    <h5>Kennesaw State University</h5>
                    <ul>
                        <li>Majoring In Computer Science</li>
                        <li>Expected Graduation Date: Dec 2018</li>
                        <li class="about-gpa">GPA: 3.67</li>
                        <li style="text-decoration: underline">Romantic Poet(just became)</li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="divider"></div>
            </li>
            <li>
                <div class="collapsible-header">
                    <i class="material-icons">grade</i>
                    <span class="sidenav-header">Achievements</span>
                </div>
                <div class="collapsible-body center Achievements">
                    <div class="materialboxed">
                        <img src="img/jiangzuang.jpg" alt="" class="imegasa2">
                    </div>
                    <ul>
                        <li class="hover-large">Dean's List (2013-Present)</li>
                        <li class="hover-large">3rd Place In URS</li>
                        <li class="grey-text" style="font-size: 12px">(Undergraduated Research Competition)</li>
                        <li class="hover-large">President International Wavior Award</li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="divider"></div>
            </li>
            <li>
                <div class="collapsible-header">
                    <i class="material-icons">mode_edit</i>
                    <span class="sidenav-header">Skills</span>
                </div>
                <div class="collapsible-body">
                    <div class="skillbar clearfix " data-percent="95%">
                        <div class="skillbar-title" style="background: #03a9f4;">
                            <span>HTML5</span>
                        </div>
                        <div class="skillbar-bar" style="background: #82b1ff;"></div>
                        <div class="skill-bar-percent">90%</div>
                    </div>
                    <div class="skillbar clearfix " data-percent="95%">
                        <div class="skillbar-title" style="background: #03a9f4;">
                            <span>CSS</span>
                        </div>
                        <div class="skillbar-bar" style="background: #82b1ff;"></div>
                        <div class="skill-bar-percent">90%</div>
                    </div>
                    <div class="skillbar clearfix " data-percent="85%">
                        <div class="skillbar-title" style="background: #03a9f4;">
                            <span>PHP</span>
                        </div>
                        <div class="skillbar-bar" style="background: #82b1ff;"></div>
                        <div class="skill-bar-percent">80%</div>
                    </div>
                    <div class="skillbar clearfix " data-percent="70%">
                        <div class="skillbar-title" style="background: #03a9f4;">
                            <span>Javascript</span>
                        </div>
                        <div class="skillbar-bar" style="background: #82b1ff;"></div>
                        <div class="skill-bar-percent">60%</div>
                    </div>
                    <div class="skillbar clearfix " data-percent="70%">
                        <div class="skillbar-title" style="background: #03a9f4;">
                            <span>Ptyhon</span>
                        </div>
                        <div class="skillbar-bar" style="background: #82b1ff;"></div>
                        <div class="skill-bar-percent">60%</div>
                    </div>
                    <div class="skillbar clearfix " data-percent="65%">
                        <div class="skillbar-title" style="background: #03a9f4;">
                            <span>C++</span>
                        </div>
                        <div class="skillbar-bar" style="background: #82b1ff;"></div>
                        <div class="skill-bar-percent">50%</div>
                    </div>
                    <div class="skillbar clearfix " data-percent="75%">
                        <div class="skillbar-title" style="background: #03a9f4;">
                            <span>Java</span>
                        </div>
                        <div class="skillbar-bar" style="background: #82b1ff;"></div>
                        <div class="skill-bar-percent">70%</div>
                    </div>
                    <div class="skillbar clearfix " data-percent="60%">
                        <div class="skillbar-title" style="background: #03a9f4;">
                            <span>Django</span>
                        </div>
                        <div class="skillbar-bar" style="background: #82b1ff;"></div>
                        <div class="skill-bar-percent">40%</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="divider"></div>
            </li>
            <li>
                <div class="collapsible-header">
                    <i class="large material-icons">call</i>
                    <span class="sidenav-header">Contact</span>
                </div>
                <div class="collapsible-body center about">
                    <ul>
                        <li>Phone: 404-317-xXxX</li>
                        <li>Email:troywu0917@gmail.com</li>
                        <li>Email:troywu@troycu.com</li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="divider"></div>
            </li>
            <li>
                <div class="collapsible-header">
                    <i class="large material-icons">assignment_ind</i>
                    <span class="sidenav-header">Admin Login</span>
                </div>
                <div class="collapsible-body center about">
                    <form action="php_includes/cms.php" method="post" id="admin_login" enctype="multipart/form-data">
                        <div class="input-field">
                            <input type="text" id="admin_name" name="admin_name" placeholder="Admin">
                            <label for="admin_name">Admin Name</label>
                        </div>
                        <div class="input-field">
                            <input type="password" id="admin_key" name="admin_key" placeholder="Admin Password">
                            <label for="admin_key">Admin Password</label>
                        </div>
                        <button class="btn waves-effect waves-light cyan center" type="button" name="admin-login" onclick="checkAdmin()">Submit<i class="material-icons right">send</i></button>
                    </form>
                    <?php 
                        $query = "SELECT * FROM user WHERE user_rule = 'admin'";
                        $all_user_query = mysqli_query($con,$query);
                        while($row = mysqli_fetch_array($all_user_query)){
                            $user_acc = $row['user_acc'];
                            $user_key = $row['user_password'];
                        }
                    ?>
                </div>
            </li>
        </ul>
        <div class="divider"></div>
        <div class="center quote">
            <h1 class="left-align quote-a">"</h1>
            <h3>Sleep</h3>
            <h3>Eat</h3>
            <h3>Code</h3>
            <h3>Love</h3>
            <h3>Never Give Up</h3>
            <h1 class="right-align quote-b">"</h1>
        </div>
        <footer class="sidenav-footer">
            <div class="center">
                <a href="img/wechatCode.jpg" target="_blank">
                    <i class="fab fa-weixin"></i>
                </a>
                <a href="https://www.facebook.com/hongbo.wu.56" target="_blank">
                    <i class="fab fa-facebook-square"></i>
                </a>
                <a href="https://www.youtube.com/channel/UCZR6VpFnGVev_yHLpv4yMeA?view_as=subscriber" target="_blank">
                    <i class="fab fa-youtube"></i>
                </a>
                <a href="https://www.instagram.com/troy_waitforit_wu/" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://twitter.com/bobo0917x" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
                <p>TroyWu &copy;2018
                    <br>Version 2 </p>
            </div>

        </footer>
    </ul>