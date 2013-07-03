<div class="contentlft">
<h5>we are always glad to hear from you drop us a word of to and an admin will get back to you</h5>

  <!-- START CONTACT FORM -->
  <?php echo form_open('contact/email');
  
$name = array(
'id'=>'name', 
'name'=>'name',
 'type'=>'text', 
 'class'=>'inputText',
 'placeholder'=>'your name',


);
$email = array(
'id'=>'email', 
'name'=>'name',
 'type'=>'email', 
 'class'=>'inputText',
 'placeholder'=>'your email',


);
$subject = array(
'id'=>'website', 
'name'=>'subject',
 'type'=>'email', 
 'class'=>'inputText',
 'placeholder'=>'your subject',


);
  
  ?>

    <p>
      <label for="name">Name <span>*</span></label>
       <?php echo form_input($name);?>
    </p>
    <div class="clear"></div>
    <p>
      <label for="email">E-mail <span>*</span></label>
    <?php echo form_input($email);?>
    </p>
    <div class="clear"></div>
    <p>
      <label for="website">subject</label>
    <?php echo form_input($subject);?>
    </p>
    <div class="clear"></div>
    <p>
      <label for="message">Message <span>*</span></label>
      <textarea class="inputTextarea" cols="88" rows="6" id="message" name="message" placeholder="your message"></textarea>

<?php echo form_submit('submit','feeback');?>
<?php echo form_close();?>
 <h3> Visit one of our shops</h3>
  <br/>
  <iframe width="100%" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=Kencom+House,+Nairobi,+Kenya&amp;daddr=Nakumatt+Westgate,+Nairobi,+Kenya&amp;hl=en&amp;geocode=FURg7P8dFukxAiHCUDCiM3ARDCnDlTwkKBEvGDHCUDCiM3ARDA%3BFavS7P8d3ZIxAiHr18ZDusiwMildGjJSbRcvGDHr18ZDusiwMg&amp;aq=1&amp;oq=nakumatt&amp;sll=-1.332659,36.865311&amp;sspn=0.207997,0.338173&amp;mra=ls&amp;ie=UTF8&amp;t=m&amp;ll=-1.272078,36.816902&amp;spn=0.041189,0.054932&amp;z=14&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=d&amp;source=embed&amp;saddr=Kencom+House,+Nairobi,+Kenya&amp;daddr=Nakumatt+Westgate,+Nairobi,+Kenya&amp;hl=en&amp;geocode=FURg7P8dFukxAiHCUDCiM3ARDCnDlTwkKBEvGDHCUDCiM3ARDA%3BFavS7P8d3ZIxAiHr18ZDusiwMildGjJSbRcvGDHr18ZDusiwMg&amp;aq=1&amp;oq=nakumatt&amp;sll=-1.332659,36.865311&amp;sspn=0.207997,0.338173&amp;mra=ls&amp;ie=UTF8&amp;t=m&amp;ll=-1.272078,36.816902&amp;spn=0.041189,0.054932&amp;z=14" style="color:#0000FF;text-align:left">View Larger Map</a></small>
</div>
<div class="contentrgt">
  <h4>Our Family</h4>
  <img src="<?php echo base_url();?>images/naivacom.png" class="sep-img"/> <br/>
  <img src="<?php echo base_url();?>images/phonelink.png" class="sep-img"/> <br/>
  <img src="<?php echo base_url();?>images/tuscom.png" class="sep-img"/> </div>
