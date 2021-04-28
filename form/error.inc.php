<style type="text/css">
  * {
    margin: 0;
    padding: 0;
    border: 0;
  }
  .container {
    max-width: 1000px;
    margin: 0 auto;
    text-align: center;
  }

  header {
  background: white;
  padding: 20px;
  left: 0;
  right: 0;
  text-align: center;
  }

  header nav ul li {
    display: inline;
    padding: 0 15 px;
  }

  header nav a {
    font-family: 'Belleza', sans-serif;
    text-decoration: none;
    color: #9f6953;
    margin: 0 15px;
  }

  header nav a:hover {
    color: rgb(255, 204, 204);
  }

  header nav a:active {
    color: #9f9696;
  }

  footer {
    background: #9f9696;
    color: rgb(255, 204, 204);
    text-align: center;
    padding: 30px 0;
    margin-top: 50px
  }

</style>

<header>
  <div class="container">
    <nav>
      <ul>
        <li><a href="index.html">HOME</a></li>
        <li><a href="about.html">ABOUT</a></li>
        <li><a href="blog.html">BLOG</a></li>
        <li><a href="contact.html">CONTACT</a></li>
      </ul>
    </nav>
  </div>
</header>

<div class="container"
	<h1>Looks like you missed something!</h1>
	<p>Sorry about that, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
		}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>

<footer>
  <p>Website by Lacey White</p>
</footer>
