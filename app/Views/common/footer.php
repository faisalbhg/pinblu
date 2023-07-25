<footer id="tt-footer">
         <div class="footer-wrapper01">
            <div class="container container-fluid-xl">
               <div class="row f-col-wrapper">
                  <div class="col-md-4">
                     <a href="index.html" class="f-logo"><i class="icons-logo tt-icon"></i><span class="tt-base-color">Pro</span>Laundry</a>
                     <div class="f-text">We are professionals in the laundry and dry cleaning business, which means we always stay up to date on the latest technologies and cleaning methods.</div>
                     <ul class="f-social">
                        <li><a href="https://twitter.com" target="_blank" class="icons-733635"></a></li>
                        <li><a href="https://www.facebook.com/" target="_blank" class="icons-59439"></a></li>
                        <li><a href="" target="_blank" class="icons-2111532"></a></li>
                        <li><a href="https://www.instagram.com/" target="_blank" class="icons-733614"></a></li>
                     </ul>
                  </div>
                  <div class="col-md-4">
                     <h6 class="f-title">Contacts</h6>
                     <ul class="f-info">
                        <li><i class="icons-484169"></i> 8494 Signal Hill Road Manassas, VA, 20110</li>
                        <li><i class="icons-59252"></i> Mon-Fri: 8am - 5pm<br>Sat-Sun: 10am - 5pm</li>
                        <li><a href="mailto:info@yourlaundrysite.com"><i class="icons-1004017"></i> info@yourlaundrysite.com</a></li>
                        <li><strong><a href="tel:1(800)765-43-21"><i class="icons-4839471"></i> 1 (800) 765-43-21</a></strong></li>
                     </ul>
                  </div>
                  <div class="col-md-4">
                     <h6 class="f-title">Newsletter Subscribe</h6>
                     <form id="subscribeform" method="post" novalidate="novalidate" action="#">
                        <div class="f-form">
                           <div class="f-form__label">Sign up and receive our special offers.</div>
                           <div class="f-form__input"><input type="text" name="email" class="form-control" placeholder="Your e-mail address"></div>
                           <div class="f-form__btn">
                              <div class="tt-btn"><span class="mask">Subscribe now</span> <button class="button" type="submit">Subscribe now</button></div>
                           </div>
                        </div>
                        <div class="tt-modal-message">Form sent successfully</div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <div class="container container-fluid-xl">
            <div class="f-holder">
               <div class="f-copyright">&copy; 2020 <span class="tt-base-color">Pro</span>Laundry. All Rights Reserved.</div>
               <ul class="f-link">
                  <li><a href="#">Terms and Conditions</a></li>
                  <li><a href="#">Privacy Policy</a></li>
               </ul>
            </div>
         </div>
      </footer>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <!-- <script async src="<?=base_url('assets/js/bundle.js?v=0.9');?>"></script> -->
      <script async src="<?=base_url('assets/js/main.js?v=0.9');?>"></script>
      <!-- modal - Make an Appointment -->
      <div class="modal fade" id="modalMRequestQuote" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-md">
            <div class="modal-content">
               <div class="modal-body form-default modal-layout-dafault">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icons-860796"></span></button>
                  <div class="modal-titleblock">
                     <div class="modal-title">Schedule a Pickup</div>
                  </div>
                  <form class="form-modal" id="jsFormRequestQuote" method="post" novalidate="novalidate" action="#">
                     <div class="form-group"><input type="text" name="name" class="form-control" id="modalName01" placeholder="Your Name *"></div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group"><input type="text" name="email" class="form-control" id="modalEmail01" placeholder="Your e-mail address *"></div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group"><input type="text" name="phone" class="form-control" id="modalPhone01" placeholder="Your phone number"></div>
                        </div>
                     </div>
                     <div class="form-group"><input type="text" name="modalAddress" class="form-control" id="modalAddress" placeholder="Address *"></div>
                     <div class="form-group">
                        <div class="custom-select">
                           <select name="service" class="tt-select">
                              <option value="Service">Service</option>
                              <option value="Service 02">Service 02</option>
                              <option value="Service 03">Service 03</option>
                              <option value="Service 04">Service 04</option>
                              <option value="Service 05">Service 05</option>
                           </select>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="form-group">
                              <input name="date-pick-up" placeholder="Pick-Up Date" autocomplete="off" data-timepicker="true" class="js_datepicker-1 form-control" type="text">
                              <div class="form-group__icon icons-747310"></div>
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="form-group">
                              <input name="date-delivery" placeholder="Delivery Date" autocomplete="off" data-timepicker="true" class="js_datepicker-2 form-control" type="text">
                              <div class="form-group__icon icons-747310"></div>
                           </div>
                        </div>
                     </div>
                     <div class="form-group"><textarea name="message" class="form-control" placeholder="Your comment"></textarea></div>
                     <div class="tt-btn tt-btn__wide"><span class="mask">Order Now</span> <button type="submit" class="button">Order Now</button></div>
                     <div class="tt-modal-message">Form sent successfully</div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <a href="#" class="tt-btn tt-back-to-top" id="js-backtotop">
         <span class="mask">
            <svg version="1.1" x="0px" y="0px" width="24" height="24" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
               <g>
                  <polygon fill="currentColor" points="20.9,17.1 12.5,8.6 4.1,17.1 2.9,15.9 12.5,6.4 22.1,15.9     "></polygon>
               </g>
            </svg>
         </span>
         <div class="button">
            <svg version="1.1" x="0px" y="0px" width="24" height="24" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
               <g>
                  <polygon fill="currentColor" points="20.9,17.1 12.5,8.6 4.1,17.1 2.9,15.9 12.5,6.4 22.1,15.9    ">
                  </polygon>
               </g>
            </svg>
         </div>
      </a>