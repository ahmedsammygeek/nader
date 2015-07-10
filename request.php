<?php
include 'header.php';
?>



  <section id="registration-page" class="container">
    <form class="center" dir="rtl" action='' method="POST">
      <fieldset class="registration-form">
         <label for="">username</label>
        <div class="control-group">
          <!-- Username -->
          <input type="text" id="username" name="username" placeholder="Username" class="small_input">
        </div>

        <div class="control-group">
          <label for="">email</label>
          <!-- E-mail -->
          <div class="controls">
            <input type="text" id="email" name="email" placeholder="E-mail" class="small_input">
          </div>
        </div>


        <div class="control-group">
          <label for="">country</label>
          <!-- Password-->
          <div class="controls">
            <select name="" id="" class="small_input">
              <option value=""></option>
              <option value=""></option>
              <option value=""></option>
              <option value=""></option>
              <option value=""></option>
            </select>
          </div>
        </div>


        <div class="control-group">
          <!-- Password -->
          <div class="controls">
            <input type="password" id="password_confirm" name="password_confirm" placeholder="Password (Confirm)" class="small_input">
          </div>
        </div>

        <div class="control-group">
          <!-- Button -->
          <div class="controls">
            <button class="btn btn-success btn-large btn-block">Register</button>
          </div>
        </div>
      </fieldset>
    </form>
  </section>

<?php
include 'footer.php';
include 'scripts.php';
?>