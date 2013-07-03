<div class="contentlft">
 <?php
$form_array = array(
 'id'=>'form73', 
 'name'=>'form73',
 'class'=>'wufoo  page',
 'autocomplete'=>'on'
 
 
);
$userfile = array(
'id'=>'Field12', 
'name'=>'userfile',
 'type'=>'file', 
 'class'=>'field file',
 'size'=>'12',
 'tabindex'=>'8'

);
$name = array(
'id'=>'Field22', 
'name'=>'Field22',
 'type'=>'text', 
 'class'=>'field text fn',
 'size'=>'12',
 'tabindex'=>'11'

);
//form_textarea
$message = array(
'id'=>'message', 
'name'=>'message',
 'type'=>'text', 
 'class'=>'inputTextarea',
 ' cols'=>'88',
 'rows'=>'6',
'placeholder'=>'brief description'

);

$email = array(
'id'=>'Field13', 
'name'=>'Field13',
 'type'=>'email', 
 'class'=>'field text large',
 'size'=>'12',
 'tabindex'=>'13',
 'spellcheck' =>'false',
 'maxlength'=>'255',
'required'
);
   
$name = array(
'id'=>'Field22', 
'name'=>'Field22',
 'type'=>'text', 
 'class'=>'field text fn',
 'size'=>'12',
 'tabindex'=>'11'

);


 echo form_open_multipart('career/upload',$form_array);
?>
<header id="header" class="info">
  <h2>Employment Application</h2>
</header>
<ul>
  <li id="foli17" class="notranslate       ">
    <label class="desc" id="title17" for="Field17"> Which position are you applying for? <span id="req_17" class="req">*</span> </label>
    <div>
      <select id="Field17" name="Field17" class="field select medium" tabindex="1" >
        <option value="" selected="selected"> </option>
        <option value="Interface Designer" > Interface Designer </option>
        <option value="Software Engineer" > Software Engineer </option>
        <option value="System Administrator" > System Administrator </option>
        <option value="Office Manager" > Office Manager </option>
      </select>
    </div>
  </li>
  <li id="foli19" class="notranslate      ">
    <fieldset>
      <![if !IE | (gte IE 8)]>
      <legend id="title19" class="desc"> Are you willing to relocate? <span id="req_19" class="req">*</span> </legend>
      <![endif]> 
      <!--[if lt IE 8]>
<label id="title19" class="desc">
Are you willing to relocate?
<span id="req_19" class="req">*</span>
</label>
<![endif]-->
      <div>
        <input id="radioDefault_19" name="Field19" type="hidden" value="" />
        <span>
        <input id="Field19_0" name="Field19" type="radio" class="field radio" value="Yes" tabindex="2" checked="checked" required />
        <label class="choice" for="Field19_0" > Yes</label>
        </span> <span>
        <input id="Field19_1" name="Field19" type="radio" class="field radio" value="No" tabindex="3" required />
        <label class="choice" for="Field19_1" > No</label>
        </span> </div>
    </fieldset>
  </li>
  <li id="foli20" class="date notranslate      ">
    <label class="desc" id="title20" for="Field20"> When can you start? <span id="req_20" class="req">*</span> </label>
    <span>
    <input id="Field20-1" name="Field20-1" type="text" class="field text" value="" size="2" maxlength="2" tabindex="4" required />
    <label for="Field20-1">MM</label>
    </span> <span class="symbol">/</span> <span>
    <input id="Field20-2" name="Field20-2" type="text" class="field text" value="" size="2" maxlength="2" tabindex="5" required />
    <label for="Field20-2">DD</label>
    </span> <span class="symbol">/</span> <span>
    <input id="Field20" name="Field20" type="text" class="field text" value="" size="4" maxlength="4" tabindex="6" required />
    <label for="Field20">YYYY</label>
    </span> <span id="cal20"> <img id="pick20" class="datepicker" src="images/calendar.png" alt="Pick a date." /> </span> </li>
  <li id="foli25" class="phone notranslate      ">
    <label class="desc" id="title25" for="Field25"> Phone <span id="req_25" class="req">*</span> </label>
    <span>
    <input id="Field25" name="Field25" type="tel" class="field text" value="" size="3" maxlength="3" tabindex="14" required />
    <label for="Field25">###</label>
    </span> <span class="symbol">-</span> <span>
    <input id="Field25-1" name="Field25-1" type="tel" class="field text" value="" size="3" maxlength="3" tabindex="15" required />
    <label for="Field25-1">###</label>
    </span> <span class="symbol">-</span> <span>
    <input id="Field25-2" name="Field25-2" type="tel" class="field text" value="" size="4" maxlength="4" tabindex="16" required />
    <label for="Field25-2">####</label>
    </span> </li>
  
  <!--name and email-->
  <li id="foli22" class="notranslate      ">
    <label class="desc" id="title22" for="Field22"> Name <span id="req_22" class="req">*</span> </label>
    <span>
 <?php echo form_input($name)?>
    <label for="Field22">First</label>
    </span> <span>
    <input id="Field23" name="Field23" type="text" class="field text ln" value=""  tabindex="12" required />
    <label for="Field23">Last</label>
    </span> </li>
  <li id="foli13" class="notranslate      ">
    <label class="desc" id="title13" for="Field13"> Email Address <span id="req_13" class="req">*</span> </label>
    <div>
<?php echo form_input($email);?>
    </div>
  </li>
  <li id="foli14" class="notranslate       ">
    <label class="desc" id="title14" for="Field14"> Brief Description </label>
    <div>
<?php echo form_textarea($message);?>
    </div>
  </li>
  <li id="foli12" class="notranslate altInstruct      "  >
    <label class="desc" id="title12" for="Field12"> Attach a Copy of Your Resume </label>
    <div> <?php echo form_upload($userfile);?> </div>
    <p class="instruct" id="instruct12"><small>Word or PDF Documents Only</small></p>
  </li>
  <li class="buttons ">
    <div> <?php echo form_submit('upload','upload');?> </div>
  </li>
</ul>
<?php echo form_close();?>
  &nbsp; </div>

<!--contentlft-->
<div class="contentrgt">
<div class="inner-rgt">
  <div class="widget">
    <h2><span class="heading">Other Posts</span></h2>
    <div class="recent_post">
      <ul class="bage2">
        <li><a href="#">Accounting Officer</a></li>
        <li><a href="#">Auditors</a></li>
        <li><a href="#">IT specialist</a></li>
        <li><a href="#">designers</a></li>
      </ul>
    </div>
    <!--widget--> 
  </div>
  <!--end inner--> 
  
</div>
<!--end contentlft-->