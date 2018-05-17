<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Open+Sans');

html {
  font-family: Arial;
  font-size: 16px;
  background: #5e42a6;
}

.sidebar {
  position: fixed;
  width: 25%;
  height: 100vh;
  background: #312450;
  font-size: 0.65em;
}

.nav {
  position: relative;
  margin: 0 15%;
  text-align: right;
  top: 50%;
  transform: translateY(-50%);
  font-weight: bold;
}

.nav ul {
  list-style: none;
}
  
  li {
    position: relative;
    margin: 3.2em 0;
}
    
    a {
      line-height: 5em;
      text-transform: uppercase;
      text-decoration: none;
      letter-spacing: 0.4em;
      color: rgba(#FFF, 0.35);
      display: block;
      transition: all ease-out 300ms;
    }
    
    &.active a {
      color: white;
    }
    
    &:not(.active)::after {
      opacity: 0.2;
    }
    
    &:not(.active):hover a {
      color: rgba(#FFF, 0.75);
    }
    
    &::after {
      content: '';
      position: absolute;
      width: 100%;
      height: 0.2em;
      background: black;
      left: 0;
      bottom: 0;
      background-image: linear-gradient(to right, #5e42a6, #b74e91)
    }
  }
}

.twitter {
  position: relative;
  width: 75%;
  float: right;
  height: 100vh;
}
  
  .container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100%;
  }
  
  a {
    position: relative;
}
    
    img {
      width: 48px;
      height: 48px;
    }
  }
  
  p {
    text-transform: uppercase;
    font-size: 1em;
    letter-spacing: 0.1em;
    color: #FFF;
    font-weight: bold;
    margin-top: 20px;
  }
}
</style>

<!-- This is a reverse engineering of the "Hyperspace"
     design from HTML5 Up! https://html5up.net/hyperspace -->

<main class="main">
  <aside class="sidebar">
    <nav class="nav">
      <ul>
        <li class="active"><a href="#">Welcome</a></li>
        <li><a href="#">Who We Are</a></li>
        <li><a href="#">What We Do</a></li>
        <li><a href="#">Get In Touch</a></li>
      </ul>
    </nav>
  </aside>

  <section class="twitter">
    <div class="container">
      <a target="_blank" href="https://twitter.com/ReisnerShawn">
        <img class="social" src="https://cdn1.iconfinder.com/data/icons/logotypes/32/twitter-128.png">
      </a>
      <p>Follow me</p>
      <p>on Twitter!</p>
    </div>
  </section>
</main>