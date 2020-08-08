<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];

    $url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-M16">
    <div class="container">
      <div class="itemContainer itemContainerLast  col-md-12">
         <div class="groupLeading">
            <div class="row">
               <article class="blog">
                  <div class="row">
                     <div class="blog-thumbnail col-md-8">
                        <!-- Item Image -->
                        <a href="#" title="Advice for stirring your online community and fostering engagement">
                        <img src="./images/imgM16.png" alt="Advice for stirring your online community and fostering engagement" class="img-responsive" style="width:100%; height:auto;" />
                        </a>
                     </div>
                     <div class="blog-info col-md-4">
                        <div class="blog-tags">
                           <a href="#">marketing</a>
                           <a href="#">Design</a>
                        </div>
                        <!-- Item title -->
                        <h3 class="blog-title"><a href="#">Advice for stirring your online community and fostering engagement</a></h3>
                        <!-- Item introtext -->
                        <p>When you enter into any new area of science, you almost always find</p>
                        <div class="blog-meta">
                           <div class="author">
                              <!-- Item Author -->
                              <a rel="author" href="#">
                              Super User							</a>
                           </div>
                           <div class="time">
                              Oct 12, 2017
                           </div>
                        </div>
                        <div class="extra-info">
                           <!-- Anchor link to comments below -->
                           <span>
                           <a href="#">
                           Be the first to comment!												</a>
                           </span>
                           <!-- Plugins: BeforeDisplayContent -->
                           <!-- K2 Plugins: K2BeforeDisplayContent -->
                           <div class="clr"></div>
                           <!-- Plugins: AfterDisplayContent -->
                           <!-- K2 Plugins: K2AfterDisplayContent -->
                        </div>
                        <div class="text-right">
                           <a href="#" class="read-more">
                           Read more...						</a>
                        </div>
                     </div>
                  </div>
               </article>
            </div>
         </div>
         <!-- End K2 Item Layout -->
      </div>
      <div class="clr"></div>
      <div class="clr"></div>
      </div>
      </div>
      <!-- Pagination -->
      <div class="pagination col-md-12 text-center">
         <ul class="blog-pagination">
            <li class="disabled"><a><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
            <li class="disabled"><a><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
            <li class="active hidden-phone"><a>1</a></li>
            <li class="hidden-phone"><a title="2" href="#" class="pagenav">2</a></li>
            <li><a title="Next" href="#" class="pagenav"><i class="fa fa-angle-right" aria-hidden="true"></i></i></a></li>
            <li><a title="End" href="#" class="pagenav"><i class="fa fa-angle-double-right" aria-hidden="true"></i></i></a></li>
         </ul>
         <div class="clr"></div>
         Page 1 of 2
      </div>
      </div>
    </div>
</div>
