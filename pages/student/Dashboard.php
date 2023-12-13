<?php 
    include '../../partials/header.php'; 
    include '../../config/config.php'; 
    include '../../queries/student.php'; 
?>
<section class="relative  bg-blueGray-50">
  <div class="relative pt-16 pb-32 flex content-center items-center justify-center min-h-screen-75">
    <div class="absolute top-0 w-full h-full bg-center bg-cover" style="
        background-image: url('https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1267&amp;q=80');
      ">
      <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
    </div>
    <div class="container relative mx-auto">
      <div class="items-center flex flex-wrap">
        <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
          <div class="pr-12">
            <h1 class="text-white font-semibold text-5xl">
              Hi <?= $firstname ?>.
            </h1>
            <p class="mt-4 text-lg text-white">
              Welcome to your dashboard, here you can check your course details and find out what is happening in the college.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px" style="transform: translateZ(0px)">
      <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
        <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
      </svg>
    </div>
  </div>
  <section class="pb-10 bg-blueGray-200 -mt-24">
    <div class="container mx-auto px-4">
      <div class="flex flex-wrap">
        <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
          <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
            <div class="px-4 py-5 flex-auto">
              <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
                <i class="fas fa-award"></i>
              </div>
              <h6 class="text-xl font-semibold">Awarded Agency</h6>
              <p class="mt-2 mb-4 text-blueGray-500">
                Divide details about your product or agency work into parts.
                A paragraph describing a feature will be enough.
              </p>
            </div>
          </div>
        </div>
        <div class="w-full md:w-4/12 px-4 text-center">
          <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
            <div class="px-4 py-5 flex-auto">
              <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-lightBlue-400">
                <i class="fas fa-retweet"></i>
              </div>
              <h6 class="text-xl font-semibold">My Course</h6>
              <p class="mt-2 mb-4 text-blueGray-500">
                You are currently enrolled on <span class="text-red-600"><?= $course ?></span> for the term <?= $term ?> and working towards an <?= $award ?>
              </p>
            </div>
          </div>
        </div>
        <div class="pt-6 w-full md:w-4/12 px-4 text-center">
          <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
            <div class="px-4 py-5 flex-auto">
              <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-emerald-400">
                <i class="fas fa-fingerprint"></i>
              </div>
              <h6 class="text-xl font-semibold">Verified Company</h6>
              <p class="mt-2 mb-4 text-blueGray-500">
                Write a few lines about each one. A paragraph describing a
                feature will be enough. Keep you user engaged!
              </p>
            </div>
          </div>
        </div>
      </div>
  </section>
</section>
<?php include '../../partials/footer.php'; ?>
