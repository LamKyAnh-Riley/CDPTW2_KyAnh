<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];

    $url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-M19">
    <div class="container">
      <div id="sidebar" class="col-secondary col-md-4">
         <div class="moduletable">
            <div id="k2ModuleBox112" class="widget widget_search k2SearchBlock">
               <h3 class="widget-title">Search</h3>
               <form action="/joomla/go.arch/blog/blog-post/itemlist/search" method="get" autocomplete="off" class="k2SearchBlockForm">
                  <input type="text" value="Search" name="searchword" maxlength="" size="" alt="Search" class="inputbox" onblur="if(this.value=='') this.value='Search';" onfocus="if(this.value=='Search') this.value='';" />
               </form>
            </div>
         </div>
         <div class="moduletable">
            <div id="k2ModuleBox106" class="widget widget_recent_post k2ContentPost ">
               <h3 class="widget-title">Recent Posts</h3>
               <article class="recent-post ">

                  <div class="recent-post-thumbnail">
                     <a href="#" title="Continue reading &quot;Advice for stirring your online community and fostering engagement&quot;">
                     <img src="./images/img1M19.png" alt="Advice for stirring your online community and fostering engagement" class="wp-post-image"/>
                     </a>
                  </div>
                  <div class="recent-post-body">
                     <h4 class="recent-post-title"><a href="#">Advice for stirring your online community and fostering engagement</a></h4>
                     <div class="recent-post-time">
                        Oct 12, 2017
                     </div>
                     <div class="clr"></div>
                     <div class="clr"></div>
                     <div class="clr"></div>
                  </div>
               </article>
               <article class="recent-post ">
                  <div class="recent-post-thumbnail">
                     <a href="#" title="Continue reading &quot;Advice for stirring your online community and fostering engagement&quot;">
                     <img src="./images/img2M19.png" alt="Advice for stirring your online community and fostering engagement" class="wp-post-image"/>
                     </a>
                  </div>
                  <div class="recent-post-body">
                     <h4 class="recent-post-title"><a href="#">Advice for stirring your online community and fostering engagement</a></h4>
                     <div class="recent-post-time">
                        Oct 12, 2017
                     </div>
                     <div class="clr"></div>
                     <div class="clr"></div>
                     <div class="clr"></div>
                  </div>
               </article>
               <article class="recent-post  lastItem">
                  <div class="recent-post-thumbnail">
                     <a href="#" title="Continue reading &quot;Advice for stirring your online community and fostering engagement&quot;">
                     <img src="./images/img3M19.png" alt="Advice for stirring your online community and fostering engagement" class="wp-post-image"/>
                     </a>
                  </div>
                  <div class="recent-post-body">
                     <h4 class="recent-post-title"><a href="#">Advice for stirring your online community and fostering engagement</a></h4>
                     <div class="recent-post-time">
                        Oct 12, 2017
                     </div>
                     <div class="clr"></div>
                     <div class="clr"></div>
                     <div class="clr"></div>
                  </div>
               </article>
            </div>
         </div>
         <div class="moduletable">
            <div id="k2ModuleBox107" class="widget widget_categories ">
               <h3 class="widget-title">Categories</h3>
               <ul class="level0">
                  <li><a href="#"><span class="catTitle">Blog</span><span class="catCounter"> (4)</span></a></li>
               </ul>
            </div>
         </div>
         <div class="moduletable">
            <div id="k2ModuleBox113" class="widget ">
               <h3 class="widget-title">Tags</h3>
               <div class="blog-tags">
                  <a href="#" style="font-size:1" title="3 items tagged with Design">
                  Design			</a>
                  <a href="#" style="font-size:1" title="3 items tagged with marketing">
                  marketing			</a>
                  <a href="#" style="font-size:1" title="2 items tagged with technology">
                  technology			</a>
               </div>
            </div>
         </div>
         <!-- End Right Sidebar -->
      </div>
    </div>
</div>
19
