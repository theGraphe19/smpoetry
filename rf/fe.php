<!----------------FeedBack-------------------->
<section style="background: #8885850a">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="" style="margin-top: 50px">
                     <center><h3 style="color: black;font-family:'Marvel', sans-serif;"><b>inspire us</b></h3></center>
                     <form id="fupForm" enctype="multipart/form-data">
                        <div class="container" style="width: 90%">
                           <div class="row" style="margin-bottom: 10px; margin-top: 10px">
                              <div class="col-sm-4 col-xs-12">
                                 <label for="name" class="para">Full Name</label>
                                 <input type="text" placeholder="Full name" id="name" name="name" class="form-control" required data-error="NEW ERROR MESSAGE">
                                 <div class="help-block with-errors"></div>
                              </div>
                              <div class="col-sm-4 col-xs-12">
                                 <label for="email" class="para">Email</label>
                                 <input type="email" placeholder="Email" id="email" name="email" class="form-control" required>
                                 <div class="help-block with-errors"></div>
                              </div>
                              <div class="col-sm-4 col-xs-12">
                                 <label for="image" class="para">Image</label>
                                 <input type="file" id="file" name="file" class="form-control" required>
                                 <div class="help-block with-errors"></div>
                              </div>
                            </div>
                           <div class="row" style="margin-bottom: 10px">
                              <div class="col-sm-12">
                                 <label for="message" class="para">Message</label>
                                 <textarea placeholder="Your Message" class="form-control" rows="5" id="msg" name="msg" required></textarea>
                                 <div class="help-block with-errors"></div>
                              </div>
                           </div>
                           <div class="row" style="margin-top: 20px; margin-bottom: 50px">
                              <div class="col-sm-12 text-center">
                                 <input type="submit" id="send" name="submit" class="btn btn-lg btnstyle" value="SEND"/>
                                 <input type="button" id="sent" class="btn btn-lg btnstyle" style="display: none;" value="SENT"/>
                              </div>
                              <br>
                           </div>
                           <div style="color: #000; margin-top: -30px; margin-bottom: 50px; font-size: 16px;" id="msgSubmit" 
                           class="row h5 text-center hidden"></div>
                        </div>
                     </form>
                     <div class="statmsg" style="text-align: center"></div>
                     <script>
                        $(document).ready(function(e){
                              // Submit form data via Ajax
                              $("#fupForm").on('submit', function(e){
                                 e.preventDefault();
                                 $.ajax({
                                    type: 'POST',
                                    url: 'feedback.php',
                                    data: new FormData(this),
                                    dataType: 'json',
                                    contentType: false,
                                    cache: false,
                                    processData:false,
                                    beforeSend: function(){
                                          $('.submitBtn').attr("disabled","disabled");
                                          $('#fupForm').css("opacity",".5");
                                    },
                                    success: function(response){ //console.log(response);
                                          $('.statmsg').html('');
                                          if(response.status == 1){
                                             $('#fupForm')[0].reset();
                                             $('.statmsg').html('<p style="color: #000; font-family: Helvetica, sans-serif; font-size: 14px; margin-top: -10px;">'+response.message+'</p>');
                                             $('#send').css({'display':'none'});
                                             $('#sent').fadeIn();
                                          }else{
                                             $('.statmsg').html('<p style="color: #000; font-family: Helvetica, sans-serif; font-size: 14px; margin-top: -10px;">'+response.message+'</p>');
                                          }
                                          $('#fupForm').css("opacity","");
                                          $(".submitBtn").removeAttr("disabled");
                                    }
                                 });
                              });
                        });
                     </script>
                  </div>
               </div>
            </div>
         </div>
      </section>