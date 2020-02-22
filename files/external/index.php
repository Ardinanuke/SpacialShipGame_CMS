<?php require_once(INCLUDES . 'header.php'); ?>
<div id="modal" class="modal modal-fixed-footer">
          <div class="modal-content center">
            <h4>Agreement Web Site Terms and Conditions of Use</h4>
          </div>
  </div>
<div class="main_bar">
  <button type="button" class="login_button" onclick="document.getElementById('id02').style.display='block'"><i class="material-icons left">person_outline</i>Login</button>
  <img src="<?php echo DOMAIN; ?>img/login-logo.png" alt="ds_logo" class="img_logo">
</div>
<div class="row">
  <div class="col-12 col-s-7">
    <div class="contenedor_titulos">
      <p class="title_custom">Are you the next</p>
      <p class="title_custom">legend?</p>
      <p class="sub_title_custom">Play now <i class="material-icons rigth">arrow_forward</i></p>
    </div>
  </div>
  <div class="col-12 col-s-5">
    <div class="contenedor_formulario">
      <form id="register" method="post">
        <div class="card-content">
          <p>Username</p>
          <input type="text" class="field_personal" placeholder="     Enter your username" name="username" id="r-username" class="validate" maxlength="20" required>
          <p>Email</p>
          <input type="email" class="field_personal" placeholder="     Enter your email" name="email" id="r-email" class="validate" maxlength="260" required>
          <p>Password</p>
          <input type="password" class="field_personal" placeholder="     Enter your password" name="password" id="r-password" class="validate" maxlength="45" required>
          <p>Password confirm</p>
          <input type="password" class="field_personal" placeholder="     Confirm your password" name="password_confirm" id="r-password-confirm" class="validate" maxlength="45" required>
          <span class="helper-text" data-error="Enter a valid password!">Confirm your password.</span>
          <div class="input-field">
            <p>
              <label>
                <input type="checkbox" name="agreement" required  >
                <span><a class="text" onclick="document.getElementById('id01').style.display='block'">Terms & Conditions</a> read and accepted</span>
              </label>
            </p>
          </div>
          <button class="reg_button">REGISTER</button>
        </div>
      </form>
    </div>
  </div>

</div>
<div class="bottom_bar">
    <p>DeathSpace is an MMO (Massive Multiplayer Online) game of space battles where </p>
    <p>You will have to fight for the resources of the universe.</p>
</div>
<!-- The Modal -->
<div id="id02" class="w3-modal">
  <div class="w3-modal-content modal_modification">
    <div class="w3-container">
      <span onclick="document.getElementById('id02').style.display='none'"
      class="w3-button w3-display-topright">&times;</span>
      <p class="texto_login_modificado">Login</p>
      <form id="login" method="post" >
      <div class="card-content modal_padding">
          <p class="texto_login_modificado">Username</p>
          <input type="text" class="field_personal" placeholder="     Enter your username"  name="username" id="l-username" maxlength="20" required>
          <br><br><br>
          <p class="texto_login_modificado">Password</p>
          <input type="password" class="field_personal" placeholder="     Enter your password" name="password" id="l-password" maxlength="45" required>
          <br><br><br>
          <button class="reg_button">LOG IN</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- The Modal -->
<div id="id01" class="w3-modal">
  <div class="w3-modal-content">
    <div class="w3-container">
      <span onclick="document.getElementById('id01').style.display='none'"
      class="w3-button w3-display-topright">&times;</span>
      <h4>Agreement Web Site Terms and Conditions of Use</h4>

            <div style="padding: 15px;">
              <h4>1. Terms</h4>
              <ol type="a">
                <li>By accessing this web site, you are agreeing to be bound by these web site Terms and Conditions of Use, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this site. The materials contained in this web site are not protected by applicable copyright and trade mark law. By surfing on this website, you agree that your the only one who would be punished for breaking copyright laws.By accessing this web site, you are agreeing to be bound by these web site Terms and Conditions of Use, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this site. The materials contained in this web site are not protected by applicable copyright and trade mark law. By surfing on this website, you agree that your the only one who would be punished for breaking copyright laws.</li>
               </ol>
              <br>
              <h4>2. Use License</h4>
              <ol type="a">
                <li>Permission is granted to temporarily download one copy of the materials (information or software) on <b><?php echo SERVER_NAME; ?></b>'s web site for personal, non-commercial transitory viewing only.</li>
              </ol>
              <br>
              <h4>3. Disclaimer</h4>
              <ol type="a">
                <li>The materials on <b><?php echo SERVER_NAME; ?></b>'s web site are provided "as is". <b><?php echo SERVER_NAME; ?></b> makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties, including without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights. Further, <b><?php echo SERVER_NAME; ?></b> does not warrant or make any representations concerning the accuracy, likely results, or reliability of the use of the materials on its Internet web site or otherwise relating to such materials or on any sites linked to this site.</li>
              </ol>
              <br>
              <h4>4. Limitations</h4>
              <ol type="a">
                <li>In no event shall <b><?php echo SERVER_NAME; ?></b> or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption,) arising out of the use or inability to use the materials on <b><?php echo SERVER_NAME; ?></b>'s Internet site, even if <b><?php echo SERVER_NAME; ?></b> or a <b><?php echo SERVER_NAME; ?></b> authorized representative has been notified orally or in writing of the possibility of such damage. Because some jurisdictions do not allow limitations on implied warranties, or limitations of liability for consequential or incidental damages, these limitations may not apply to you.</li>
              </ol>
              <br>
              <h4>5. Revisions and Errata</h4>
              <ol type="a">
                <li>The materials appearing on <b><?php echo SERVER_NAME; ?></b>'s web site could include technical, typographical, or photographic errors. <b><?php echo SERVER_NAME; ?></b> does not warrant that any of the materials on its web site are accurate, complete, or current. <b><?php echo SERVER_NAME; ?></b> may make changes to the materials contained on its web site at any time without notice. <b><?php echo SERVER_NAME; ?></b> does not, however, make any commitment to update the materials.</li>
              </ol>
              <br>
              <h4>6. Links</h4>
              <ol type="a">
                <li><b><?php echo SERVER_NAME; ?></b> has not reviewed all of the sites linked to its Internet web site and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by <b><?php echo SERVER_NAME; ?></b> of the site. Use of any such linked web site is at the user's own risk.</li>
              </ol>
              <br>
              <h4>7. Site Terms of Use Modifications</h4>
              <ol type="a">
                <li><b><?php echo SERVER_NAME; ?></b> may revise these terms of use for its web site at any time without notice. By using this web site you are agreeing to be bound by the then current version of these Terms and Conditions of Use.</li>
              </ol>
              <br>
              <h4>8. Governing Law</h4>
              <ol type="a">
                <li>Any claim relating to <b><?php echo SERVER_NAME; ?></b>'s web site shall be governed by the laws of the State of Spain without regard to its conflict of law provisions. <br> General Terms and Conditions applicable to Use of a Web Site.</li>
              </ol>
              <br>
              <h4>9. Copyright Protection</h4>
              <p>If you believe any materials accessible on or from the Site infringe your copyright, you may request removal of those materials (or access thereto) from this web site by contacting us and providing the following information:</p>
              <ol type="a">
                <li> Identification of the copyrighted work that you believe to be copied. Please describe the work,and where possible, include a copy or the location of an authorized version of the work.</li>
                <li> Your name, address, telephone number, and e-mail address.</li>
                <li> A statement that you have a good faith belief that the complained of use of the materials is not authorized by the copyright owner, its agent, or the law.</li>
                <li> A statement that the information that you have supplied is accurate, and indicating that "under penalty of perjury," you are the copyright owner or are authorized to act on the copyright owner’s behalf.</li>
                <li> A signature or the electronic equivalent from the copyright holder or authorized representative.</li>
              </ol>
              <br>
              <h4>10. Privacy Policy</h4>
              <p>Your privacy is very important to us. Accordingly, we have developed this Policy in order for you to understand how we collect, use, communicate and disclose and make use of personal information. The following outlines our privacy policy.</p>
              <ol type="a">
                <li> Before or at the time of collecting personal information, we will identify the purposes for which information is being collected.</li>
                <li> We will collect and use of personal information solely with the objective of fulfilling those purposes specified by us and for other compatible purposes, unless we obtain the consent of the individual concerned or as required by law. </li>
                <li> We will only retain personal information as long as necessary for the fulfillment of those purposes. </li>
                <li> We will collect personal information by lawful and fair means and, where appropriate, with the knowledge or consent of the individual concerned. </li>
                <li> Personal data should be relevant to the purposes for which it is to be used, and, to the extent necessary for those purposes, should be accurate, complete, and up-to-date. </li>
                <li> We will protect personal information by reasonable security safeguards against loss or theft, as well as unauthorized access, disclosure, copying, use or modification.</li>
                <li> We will make readily available to customers information about our policies and practices relating to the management of personal information. </li>
              </ol>
              <br>
              <p>We are committed to conducting our business in accordance with these principles in order to ensure that the confidentiality of personal information is protected and maintained.</p>
              <br>
              <div><b><?php echo SERVER_NAME; ?></b> is an independent project (Nonprofit goal) © <?php echo date('Y'); ?>. <br> <a class="blue-text" target="_blank" href="http://darkorbit.com/">DarkOrbit</a> is a registered trademark of <a class="blue-text" target="_blank" href="http://bigpoint.com/">BigPoint GmbH</a>. All rights reserved to their respective owner(s). <br> We are not endorsed, affiliated or offered by <a class="blue-text" target="_blank" href="http://bigpoint.com/">BigPoint GmbH</a>.
              </div>
            </div>
          </div>
    </div>
  </div>
</div>
<?php require_once(INCLUDES . 'footer.php'); ?>