<?php include 'header.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .add img {
        width: 350px;
    }

    .container {
      padding: 20px;
    }

    .card {
      transition: transform 0.3s ease-in-out;
    }

    .card:hover {
      transform: translateY(-10px);
    }

    .card-img-top {
      height: 200px;
      object-fit: cover;
    }

    @media (max-width: 576px) {
      .card-img-top {
        height: 150px;
      }
    }

    </style>
<body>
    
<!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout5 bg-overlay">
      <div class="bg-img"><img src="assets/images/page-titles/5.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1 class="pagetitle__heading">Treatment Package</h1>
            <nav>
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Treatment Package</li>
              </ol>
            </nav>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

<div class="container my-5 pb-5">
        <div class="row align-items-center">
            <!-- Left Div with Image -->
            <div class="col-lg-6 col-md-12 text-center add mb-4 mb-lg-0">
                <img src="assets\images\team\4.jpg" class="img-fluid rounded"  >
            </div>
            <!-- Right Div with Text and Button -->
            <div class="col-lg-6 col-md-12 d-flex flex-column align-items-start justify-content-center">
                <h3 class="mb-3"> Comprehensive Treatment Packages Tailored to Your Needs</h3>
                <p  class="text-justify">In addition to patient counseling and guiding you to the right hospital and doctor, we go a step further by offering customized treatment packages that cater to the specific needs and preferences of each patient. Our packages are designed to provide a seamless healthcare experience from start to finish, covering every detail so patients and their families can focus solely on recovery. From making the right travel arrangements based on the patient's condition and urgency, to providing comfortable accommodation for both the patient and their companion near the hospital, we ensure that every aspect of the patient's journey is handled with care and precision.</p>
               <button id="moreInfoBtn" class="btn btn-primary">Learn More</button>
               
            </div>
        </div>
    </div>







<!--/2-->
<section class="features-layout1 pt-150 pb-4 mt--120">
    <hr>
    <div class="container">
        <div class="row mb-175">
            <div class="col-sm-12 col-md-12 col-lg-5">
                <div class="heading__layout2">
                    <h3 class="mb-3">Providing Care for The Sickest In Community.</h3>
               <p>Our treatment packages also include thoughtful extras like pre- and post-operation stays with appropriate facilities for the patient’s recovery, along with a tailored menu to meet dietary needs. For international patients or those who require assistance, we provide language interpreters to ensure smooth communication throughout the process. After a successful treatment, patients can even enjoy local sightseeing as part of their recovery experience. We also offer free follow-up consultations post-surgery to ensure that patients are on the right path to recovery, ensuring ongoing support even after their treatment is complete. With our comprehensive packages, we take the stress out of medical travel, allowing patients to focus on their health with confidence.<p> 
                <br><br>
                <button id="moreInfoBtn" class="btn btn-primary">Learn More</button>
           
                </div>
            </div><!-- /col-lg-5 -->
             <img src="assets\images\team\3.jpg" class="img-fluid rounded"  >
                </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.Features Layout 1 -->
</body>
</html>



<?php include 'footer.php';?>















    