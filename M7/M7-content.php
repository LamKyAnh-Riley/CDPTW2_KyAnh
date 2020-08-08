<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];

    $url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-M7">
    <div class="container">
      <div id="wrap-contact-form">
        <section class="contacts section">
             <div class="container">
                <header class="section-header">
                   <h2 class="section-title">Get <span class="text-primary">in touch</span></h2>
                   <strong class="fade-title-right">contact</strong>
                </header>
                <div class="section-content">
                 <div class="row-base row">
                    <div class="col-address col-base col-md-4">
                       +7 (212) 654-33-35<br>
                       +7 (212) 287-85-22<br>
                       info@goarch.com<br>
                       USA, New York, 57 Quigley Bridge<br>
                    </div>
                    <!-- /.col-md-4 -->
                    <div class="col-base  col-md-8">
                       <div class="sscf-form-container">
                          <div class="sscf-success-message"></div>
                          <form id="formBody" class='sscf-form wprt-contact-form' method="post" action="post">
                             <div class="row-field row">
                                <div class="col-field col-sm-6 col-md-4">
                                   <div class="form-group">
                                      <div class='fl_wrap sscf-valid-true'>
                                         <span class="sscf-error">Please, enter your name</span>
                                         <input class="form-control" type="text" id="name" name="name" />
                                         <label class="fl_label" for="name">Name</label>
                                      </div>
                                   </div>
                                   <div class="form-group">
                                      <div class='fl_wrap sscf-valid-true'>
                                         <span class="sscf-error">Please, enter your e-mail address</span>
                                         <span class="sscf-error sscf-email-error">Mail address is not not valid</span>
                                         <input class="form-control" type="text" id="email" name="email" onkeydown="return check(event);"/>
                                         <label class="fl_label" for="email">E-mail</label>
                                      </div>
                                   </div>
                                </div>
                                <div class="col-field col-sm-6 col-md-4">
                                   <div class="form-group">
                                      <div class='fl_wrap sscf-valid-true'>
                                         <span class="sscf-error">Please, enter your phone number</span>
                                         <input class="form-control" type="text" id="phone" name="phone" />
                                         <label class="fl_label" for="phone">Phone number</label>
                                      </div>
                                   </div>
                                   <div class="form-group">
                                      <div class='fl_wrap sscf-valid-false'>
                                         <span class="sscf-error"></span>
                                         <input class="form-control" type="text" id="input_custom_one" name="input_custom_one"/>
                                         <label class="fl_label" for="input_custom_one">Company</label>
                                      </div>
                                   </div>
                                </div>
                                <div class="col-field col-sm-12 col-md-4">
                                   <div class="form-group">
                                      <div class='fl_wrap sscf-valid-true'>
                                         <span class="sscf-error">Please, enter your message</span>
                                         <textarea class="form-control" id="message" name="message" rows="5" cols="20"></textarea>
                                         <label class="fl_label" for="message">Message</label>
                                      </div>
                                   </div>
                                </div>
                                <div class="form-group">
                                   <input type="hidden" name="send" value="true">
                                </div>
                             </div>
                             <div class="form-submit text-right">
                                <input class='rf_submit btn btn-shadow-2 wow swing' type="submit" value="Send" id="send" name="submitcontactform" />
                             </div>
                          </form>
                          <!-- /.wprt-contact-form -->
                       </div>
                       <!-- /.col-md-8 -->
                    </div>
                    <div class="col-md-12">
                       <div class="wprt-spacer" data-desktop="100" data-mobi="60" data-smobi="60"></div>
                    </div>
                    <!-- /.col-md-12 -->
                 </div>
              </div>
            </div>
        </section>

        <!-- Footer -->
        <footer id="footer" class="footer">
           <div class="container">
              <div class="row-base row">
                 <div class="col-base text-left-md col-md-4">
                    <a class="brand" href="#">
                    go<span class="text-primary">.</span>arch						</a>
                 </div>
                 <div class="text-center-md col-base col-md-4">
                    <a href="#" class="author-link">
                    by CodePedant		              </a>
                 </div>
                 <div class="text-right-md col-base col-md-4">
                    © go.arch 2017. All Rights Reserved.
                 </div>
              </div>
           </div>
        </footer>

    </div>
  </div>
</div>
