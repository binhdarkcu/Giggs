  <footer class="site-footer" role="contentinfo">
    <div class="site">
      <div class="site-copyright">
        <p>
          Email: <?php $linkemail= (get_option('url_email') != '') ? get_option('url_email')  : 'javascript:void(0);';?>
          <a style="text-decoration: underline;" href="mailto:<?php echo $linkemail;?>"><?php echo $linkemail;?></a>
          <br>
          <?php $linkskype= (get_option('url_skype') != '') ? get_option('url_skype')  : 'javascript:void(0);';?>
          Skype: <a href="skype:<?php echo $linkskype;?>?chat" class="nickskye"><span>yvesfaesdupont</span></a>
          
  			
  		<br>
  		<span class="spanCopy">© 2015 Yves Faes-Dupont</span>
         </p>
      </div>
    </div>
  </footer>
  <script type="text/javascript" src="js/all.js"></script></div>
  
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54298693-3', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>