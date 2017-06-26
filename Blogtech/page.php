<?php get_header(); ?>

<section>
  <figure class="w-25">
  <img class="w-100" src="louisdefunes.jpg">
</figure>

<form>
  <div class="form-group">
    <label for="usr"> Name:</label>
    <input type="text" class="form-control" id="usr">
  </div>
  <div class="form-group">
    <label for="email">Adresse Mail</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="comment">Comment:</label>
    <textarea class="form-control" rows="5" id="comment"></textarea>
  </div>
  <button type="submit" class="btn btn-default" onClick="return check() ">Submit</button>
</form>
</section>


<?php get_footer(); ?>
