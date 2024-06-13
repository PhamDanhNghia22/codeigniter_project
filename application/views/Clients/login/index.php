
<div class="contact-page section">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 m-auto p-0">
          <?php 
          if($this->session->flashdata('success')){
          ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?=$this->session->flashdata('success')?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <?php }else if($this->session->flashdata('error')){ ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?=$this->session->flashdata('error')?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <?php } ?>
          <form id="contact-form" action="<?=base_url('login_user')?>" method="POST">
            <h2 class="text-center my-2">Đăng nhập</h1>
            <div class="row">
              <div class="col-lg-12">
                <fieldset>
                  <label for="email">Email Address</label>
                  <input type="text" name="email" id="email" placeholder="Your E-mail..." >
                  <span class="text-danger"><?=form_error('email')?></span>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="subject">Password</label>
                  <input type="password" name="password" id="password" placeholder="Password..."  >
                  <span class="text-warning"><?=form_error('password')?></span>
                </fieldset>
              </div>
              
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="orange-button">Đăng nhập</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
        
        
      </div>
    </div>
  </div>