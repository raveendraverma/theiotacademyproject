<!DOCTYPE html>
<html lang="en">
<head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <!---Change SEO Data Here For Title-->
        <title>All Instructor led Courses | The IoT Academy</title> 
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-site-verification" content="C9Cq_KXvbhDfCA8PO4rSqFevR_ebDyX4_y8iuj4">
        <meta name="msvalidate.01" content="B59ACA364606E77DFA470E8E79DBC20A" /> 
        <link rel="canonical" href="https://www.theiotacademy.co/our-courses"/>
        <meta name="keywords" content="all Courses, data science,ds,ml,machine learning,java,iot" />
        
        <meta name="description" content="The IoT Academy is provides Instructor led courses like data science ,machine learning ,embedded systems with e&ict academy IIT Roorkee, IIT Guwahati, IIT kanpur" />
        <!---Change SEO Data Here End-->
        <meta name="distribution" content="global" />
        <meta http-equiv="content-language" content="en-gb">

        <meta name="yandex-verification" content="44a2a6f2942a8a2a" />

        <meta name="geo.region" content="IN-UP" />
        <meta name="geo.position" content="28.613207;77.372733" />
        <meta name="ICBM" content="28.613207, 77.372733" />

        <meta name="robots" content="index, follow" />
        <meta name="googlebot" content="index, follow" />
        <meta name="yahooSeeker" content="index, follow" />
        <meta name="msnbot" content="index, follow" />

        <!-- Theiotacademy Open Graph data -->
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="theiotacademy" />
        <!---Change SEO Data Here Start-->
        <meta property="og:title" content="All Instructor led Courses | The IoT Academy" />
        <meta property="og:description" content="The IoT Academy is provides Instructor led courses like data science ,machine learning ,embedded systems with e&ict academy IIT Roorkee, IIT Guwahati, IIT kanpur"/>  
        <meta property="og:url" content="https://www.theiotacademy.co/our-courses"/>
        <meta property="og:image" content="https://www.theiotacademy.co/assets/images/tiaimages/background/our-courses-header.png"/>
        <meta property="og:image:type" content="image/png"/>
        <meta property="og:image:alt" content="Blogs"/>
        <!---Change SEO Data Here End-->
        <meta property="og:ttl" content="345600" />
        <meta property="fb:profile_id" content="426804161019130" />

        <!-- Theiotacademy Twitter Card data -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="@academyforiot" />
        <meta name="twitter:creator" content="@academyforiot" />
        <meta https-equiv="Content-Type" content="Text/HTML" />

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107997348-3"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-107997348-3');
        </script>
        <link rel="stylesheet" type="text/css" href="<?php echo asset_url()?>css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo asset_url()?>fonts/flaticon.css"> 
        <link rel="stylesheet" type="text/css" href="<?php echo asset_url()?>fonts/fonts2/flaticon.css">
        <link rel="stylesheet" type="text/css" href="<?php echo asset_url()?>css/style.min.css">
        <?php $this->load->view("commons/commonheaderlink.php") ?>
        <!-- responsive css -->
        <style type="text/css">
            .blog-main-card-st{
                box-shadow: 0 2px 4px 0 rgb(0 0 0 / 35%);
            }
            .duration_n-deadline{
                text-align: center;
                font-weight: 600;
                margin-top: 14px;
                border: 1px solid #eee;
                color: black;
            }
            .blog-main-card-st:hover {
                box-shadow: 0 2px 4px 0 rgb(0 0 0 / 35%);
                margin-top: -7px;
                transition: all .9s;
            }
            @media only screen and (max-width: 600px) {
                  
                }
        </style>
    </head>
<body class="instructor-home">
<?php $this->load->view("commons/header.php")?>
        <!-- Breadcrumbs Start -->
    <div>
        <img src="<?=asset_url()?>images/tiaimages/background/our-courses-header.png" alt="All course banner image" class="img img-responsive" width="100%"/>
    </div>
        <!-- Breadcrumbs End -->
                <div style="padding: 0 7%;" class="mb-5">
                <div class="row pt-4">
                    <div class="col-sm-6">
                         <div><i class="fas fa-search" style="position:absolute;top:12px;font-size:19px;left:24px;"></i>
                             <input class="form-control" style="padding-left: 45px;" name="keyBlogValue" required="required" autocomplete="off" placeholder="Search Course ..." id="SearchRecordByKey"/>
                         </div>
                    </div>
                    <div class="col-sm-6">
<!--                         <div>
                            <select name="category" id="SearchRecordByCategory" class=" form-control" style="height:39px">
                                <option value="">Search Blog By Category Name</option>
                                <option value="Anudaksh">Anudaksh</option>      
                                <option value="Android">Android</option>
                                <option value="Artificial Intelligence">Artificial Intelligence</option>            
                                <option value="Angular">Angular</option>
                                <option value="Digital Marketing">Digital Marketing</option>
                                <option value="Data Science">Data Science</option>
                                <option value="Embedded Systems">Embedded Systems</option>
                                <option value="Ed-Tech">Ed-Tech</option>
                                <option value="Internet Of Things">Internet Of Things</option>
                                <option value="Java">Java</option>
                                <option value="Python">Python</option>              
                                <option value="PHP">PHP</option>
                                <option value="Selenium">Selenium</option>
                                <option value="Machine Learning">Machine Learning</option>
                            </select>
                        </div> -->
                    </div>
                </div>
        <!-- Blog Section Start Here -->
        <div class="blog-page-area blog-box pt-4">
                <div class="row mb-2 blog-inner" >
                    <?php
                        if(count($result)>0){
                        foreach($result as $row){
                        ?>
                        
                        <div class="col-lg-4 col-md-6 mt-4 mb-2">
                            <a href="<?php echo $row->course_url?>">
                                <div class="blog-main-card-st pb-4" id="post_<?php echo $row->id; ?>">
                                    <div class="blog-images">
                                    <img src="<?php echo base_url().'uploads/allcourse/'.$row->course_image?>" alt="<?=$row->course_title?>" width="100%">
                                    </div>
                                    <div class="blog-content p-3">
                                        <h5 class="mt-1 mb-4"><?=$row->course_title?></h5>
                                        <p class="text-justify" style="color:#000;"><?=substr($row->course_description,0,110)?>...</p>
                                        <div class="row mt-3">
                                            <div class="col">
                                                <div class="duration_n-deadline">
                                                <div>Course Duration</div>
                                                <div><?=$row->course_duration?></div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="duration_n-deadline">
                                                <div>Application Deadline</div>
                                                <div><?=date('d-m-Y',strtotime($row->course_deadline))?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                     <?php }}else{?>

                <h2 class="text-center">Oops! There is No Relevant Course</h2>
            <?php }?>

                </div>
            </div>
        </div>

        <!-- course end  -->
       
<?php $this->load->view("commons/footer.php")?>

<script type="text/javascript">

    //search course by keyword name start
 $(document).ready(function(){
    $("#SearchRecordByKey").on("keyup", function(e){
          var searchkey= $(this).val();
          if (searchkey!="") {
          
          //console.log(searchkey);
          
        $.ajax({
             
             url:"<?=base_url()?>AddAllCourses/search_course_by_keywords",
             type:"POST",
             data:{searchinval:searchkey},
             success: function(data){
                //alert(data);
                
                  $(".blog-box").html(data);
             }
        });
        }
        else{ 
            $.ajax({
             
             url:"<?=base_url()?>AddAllCourses/search_course_by_keywords",
             type:"POST",
             data:{searchinval:searchkey},
             success: function(data){
                //alert(data);
                
                  $(".blog-box").html(data);
             }
        });  
}
      }); 
});

//   //search blog by category name start
//  $(document).ready(function(){
//     $("#SearchRecordByCategory").on("click", function(e){
//           var categorykey= $(this).val();
//           //console.log(categorykey);
//           if (categorykey!="") {
          
//         $.ajax({
             
//              url:"<?=base_url()?>Blog/search_blogs_by_categoryname",
//              type:"POST",
//              data:{searchval:categorykey},
//              success: function(data){
//                 //alert(data);
                
//                   $(".blog-box").html(data);
//              }
//         });
//         $("#BlogLoadMr").hide();
//         }
//         else{
//             $.ajax({
             
//              url:"<?=base_url()?>Blog/search_blogs_by_categoryname",
//              type:"POST",
//              data:{searchval:categorykey},
//              success: function(data){
//                 //alert(data);
                
//                   $(".blog-box").html(data);
//              }
//         });
//           $("#BlogLoadMr").show();  
// }
//       }); 
// });
</script>
</body>
</html>