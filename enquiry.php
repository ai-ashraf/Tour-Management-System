<?php include_once("./header.php");?>
<div class="container" style="height: 420px;">
<div class="row justify-content-center">
    <div class="col-md-6">
<form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="email" placeholder="Enter Email">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Subject</label>
    <input type="text" class="form-control" id="subject" placeholder="Please fill the subject">
  </div>
  <!-- <div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div> -->
  <!-- <div class="form-group">
    <label for="exampleFormControlSelect2">Example multiple select</label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div> -->
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control mb-2" id="textarea" placeholder="Please describe what do you want to know." rows="6"></textarea>
    <button type="submit" class="btn btn-primary mb-5">Submit</button>
  </div>
</form>
</div>
</div>
</div>
<?php include_once("./footer.php");?>