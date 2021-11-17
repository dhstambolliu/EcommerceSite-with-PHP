<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-green layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper">
	    <div class="container">
<style>

.column {
  float: left;
  width: 19.4%;
  margin: 3px;
  padding: 1 18px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 1px;
}

.about-section {
  padding: 20px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.permbajtja {
  padding: 0 10px;
}

.permbajtja::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.contact_button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.contact_button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
    p {
        font-size: 12px;
    }
</style>


<div class="about-section">
  <h1>About Us Page</h1>
  <p>Some text about who we are and what we do.</p>
  <p>Resize the browser window to see that this page is responsive by the way.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/dhimiter.jpg" alt="Dhimiter" style="width:100%">
      <div class="permbajtja">
        <h3 style="text-align: center">Dhimiter Stambolliu</h3>
        <p class="title">Title</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>dhimiter.stambolliu@fshnstudent.info</p>
          <p><a style="text-decoration: none" href="mailto:dhimiter.stambolliu@fshnstudent.info"><button class="contact_button">Contact</button></a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/dhimiter.jpg" alt="Dhimiter" style="width:100%">
      <div class="permbajtja">
        <h3 style="text-align: center">Dhimiter Stambolliu</h3>
        <p class="title">Title</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>dhimiter.stambolliu@fshnstudent.info</p>
          <p><a style="text-decoration: none" href="mailto:dhimiter.stambolliu@fshnstudent.info"><button class="contact_button">Contact</button></a></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="images/dhimiter.jpg" alt="Dhimiter" style="width:100%">
      <div class="permbajtja">
        <h3 style="text-align: center">Dhimiter Stambolliu</h3>
        <p class="title">Title</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>dhimiter.stambolliu@fshnstudent.info</p>
          <p><a style="text-decoration: none" href="mailto:dhimiter.stambolliu@fshnstudent.info"><button class="contact_button">Contact</button></a></p>
      </div>
    </div>
  </div>
    <div class="column">
    <div class="card">
      <img src="images/dhimiter.jpg" alt="Dhimiter" style="width:100%">
      <div class="permbajtja">
        <h3 style="text-align: center">Dhimiter Stambolliu</h3>
        <p class="title">Title</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>dhimiter.stambolliu@fshnstudent.info</p>
          <p><a style="text-decoration: none" href="mailto:dhimiter.stambolliu@fshnstudent.info"><button class="contact_button">Contact</button></a></p>
      </div>
    </div>
  </div>
    <div class="column">
    <div class="card">
      <img src="images/dhimiter.jpg" alt="Dhimiter" style="width:100%">
      <div class="permbajtja">
        <h3 style="text-align: center">Dhimiter Stambolliu</h3>
        <p class="title">Title</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>dhimiter.stambolliu@fshnstudent.info</p>
          <p><a style="text-decoration: none" href="mailto:dhimiter.stambolliu@fshnstudent.info"><button class="contact_button">Contact</button></a></p>
      </div>
    </div>
  </div>
</div>
	    </div>
	  </div>
  
  	<?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</div>

</body>
