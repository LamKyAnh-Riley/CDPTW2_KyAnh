<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];

    $url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-M28">
  <div class="content">
     <div class="container">
        <div class="row">
           <!-- Begin Content -->
           <div class="col-md-6 col-sm-6">
              <div class="blog-article">
                 <div class="blog-article-head text-center">
                    <!-- Item category name -->
                    <div class="blog-article-category">
                       <h6 class="inline">Published in</h6>
                       <a href="#">
                          <h4 class="inline black">Blog</h4>
                       </a>
                    </div>
                    <div class="blog-article-title black">
                       <!-- Item title -->
                       <h2>
                          <a href="#">
                          Advice for stirring your online community and fostering engagement								  		</a>
                       </h2>
                    </div>
                    <div class="blog-article-date">
                       <!-- Date created -->
                       <h6>Oct 12, 2017</h6>
                    </div>
                 </div>
                 <!-- Item Image -->
                 <a href="#" title="Advice for stirring your online community and fostering engagement">
                    <div class="blog-article-image">
                       <img class="pb10" src="./images/img1M28.png" alt="Advice for stirring your online community and fostering engagement" style="width:100%; height:auto;">
                    </div>
                 </a>
                 <!-- Item introtext -->
                 <h6>When you enter into any new area of science, you almost always find</h6>
                 <!-- Item "read more..." link -->
                 <div class="read-more">
                    <a href="#">
                       <h4 class="black">Read more...</h4>
                    </a>
                 </div>
              </div>
           </div>
           <div class="col-md-6 col-sm-6">
              <div class="blog-article">
                 <div class="blog-article-head text-center">
                    <!-- Item category name -->
                    <div class="blog-article-category">
                       <h6 class="inline">Published in</h6>
                       <a href="#">
                          <h4 class="inline black">Blog</h4>
                       </a>
                    </div>
                    <div class="blog-article-title black">
                       <!-- Item title -->
                       <h2>
                          <a href="#">
                          Advice for stirring your online community and fostering engagement								  		</a>
                       </h2>
                    </div>
                    <div class="blog-article-date">
                       <!-- Date created -->
                       <h6>Oct 12, 2017</h6>
                    </div>
                 </div>
                 <!-- Item Image -->
                 <a href="#" title="Advice for stirring your online community and fostering engagement">
                    <div class="blog-article-image">
                       <img class="pb10" src="./images/img2M28.png" alt="Advice for stirring your online community and fostering engagement" style="width:100%; height:auto;">
                    </div>
                 </a>
                 <!-- Item introtext -->
                 <h6>When you enter into any new area of science, you almost always find</h6>
                 <!-- Item "read more..." link -->
                 <div class="read-more">
                    <a href="#">
                       <h4 class="black">Read more...</h4>
                    </a>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </div>
</div>
