<form action="index.php?page=pages" method="post">
	 <div class="form-group">
		<label>Title</label>
		 <input class="form-control"  name="title" value = "<?php if(isset($_GET['id'])) {echo $page['title'];} ?>"placeholder="Title">
	 </div>
	 <div class="form-group">
		<label>Nav</label>
		 <input class="form-control" name="nav" value = " <?php if(isset($_GET['id'])) {echo $page['nav'];} ?>" placeholder="Nav">
	 </div><div class="form-group">
		<label>Header</label>
		 <input class="form-control" name="header" value = "<?php if(isset($_GET['id'])) { echo $page['header'];} ?>" placeholder="Header">
	 </div><div class="form-group">
		<label>Page Body</label>
		 <textarea class="form-control mytextarea"  name="body" rows="8"  placeholder= "page body" ><?php if(isset($_GET['id'])){ echo $page['body'];} ?> </textarea>
	 </div>
	 <button type="submit" class="btn btn-default">Submit</button>
	 <input type="hidden" name="submitted" value="1" />
	 <input type="hidden" name="pageId" value="<?php if(isset($_GET['id'])) { echo $page['id'];}?>" />
</form>

<?php // <?php if(isset($_GET['page']) && $_GET['page']!=='pages' )?>