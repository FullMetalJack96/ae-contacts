<?php if ($form_type=='contact'): ?>
    
      <form class="company_data_form" action="new_contact/create" method="post">
        <div class="row">
          <label for="company_name">Company name</label>
          <input type="text" name="company_name" value="">
        </div>

        <div class="row">
          <label for="company_website">Company website</label>
          <input type="text" name="company_website" value="">
        </div>

        <div class="row">
          <label for="company_facebook">Company facebook</label>
          <input type="text" name="company_facebook" value="">
        </div>

        <div class="row">
          <label for="company_email">Company email</label>
          <input type="text" name="company_email" value="">
        </div>

        <div class="row">
          <label for="company_phone">Company phone</label>
          <input type="text" name="company_phone" value="">
        </div>

        <div class="row">
          <label for="company_additional">Company additional</label>
          <textarea name="company_additional" value=""></textarea>
        </div>
        <div class="row">
          <button type="submit" class='btn btn-success' name="button">Submit</button>
        </div>
      </form>
    
    <?php else: ?>
      <form class="category_form" action="./new_category/create" method="post">
        <div class="row">
          <label for="category_name">Category name</label>
          <input type="text" name="company_name" value="">
        </div>

        <div class="row">
          <label for="company_icon">Category icon</label>
          <select class="company_icon" name="company_icon">
            <option value="1">test-icon</option>
            <option value="2">test-icon2</option>
            <option value="3">test-icon3</option>
          </select>
        </div>
        <div class="row">
          <button type="submit" class='btn btn-success' name="button">Submit</button>
        </div>
      </form>
    
<?php endif; ?>
