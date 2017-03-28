<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <title>Seth Today - Today!</title>
        <meta name="description" content="Keep up with Seth Gossler and his semi-yearly take on the world of web development, and general life.">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="icon" type="image/png" href="/icons/two.png">

        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/main.css">
        <link href='http://fonts.googleapis.com/css?family=Muli:300,400' rel='stylesheet' type='text/css'>

	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="@sethgossler" />
	<meta name="twitter:creator" content="@sethgossler" />
	<meta property="og:type" content="blog" />
	<meta property="og:title" content="{{ $post->title }}" />
	<meta property="og:description" content="{{ $post->subtitle }}" />
	<meta property="og:image" content="http://seth.today/icons/two.png" />
	<meta property="og:image:width" content="100" />
	<meta property="og:image:height" content="100" />
        <script src="/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 10]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="container">
  
            <div class="content">
                <div class="page top">
                    <div class="inner">
                        <div class="background">
                            <img src="/img/bg.jpg">
                        </div>    
                        <div class="copy">
                            <h1>Seth Gossler</h1>
                        </div>

                        <article id="one" class="paper">
                            <h1>The Stolen Ghost<h1>
                            <p>
                                "How does one steal a ghost?" said Sherrie, the young and intelligent intern. "It's not how one steals a ghost, its why one steals a ghost" The professor shot back. In his 30 years of super-natural ghost detective work, the professor was always a step ahead of the ghosts. But this time, he wasn't after ghosts, he was trying to save them.
                            </p>
                        </article>

                        <article id="two" class="paper">
                            <h1>Shopping List<h1>
                            <p>
                                1. Milk
				</p>
				<p>
					2. Eggs
				</p>
				<p>

					3. Snickers Bar
				</p><p>
				4. Bread</p><p>
				5. Fish </p><p>
				6. Cat Food</p>
  
                        </article>
                    </div> 
                </div>

                <div class="page blog">
                    <div class="row scrollDown white">
                        <h3 class="header-scrollDown centerText">Scroll</h3>
                    </div>
                    <div class="row inner white">
                        <div class="copy">
                            <h1>{{ $post->title }}</h1>
                            <h3 class="h3"><span class="span">{{ $post->subtitle }}</span></h3>
                            <div class="post">
                                <p>
                                	{{ nl2br($post->copy) }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row white blog-navigator">
                        <div class="row narrow">
                            <div class="col-2 left">

                                @if($prevPost)
                                <a href="{{ action("PostsController@show", $prevPost->id) }}">
                                    <div class="button-text left">Previous</div>
                                </a>
                                @else
                                    <div class="button-text disabled left">Previous</div>
                                @endif

                            </div>
                            <div class="col-2 right">

                                @if($nextPost)
                                <a href="{{ action("PostsController@show", $nextPost->id) }}">
                                    <div class="button-text left">Next</div>
                                </a>
                                @else
                                    <div class="button-text disabled left">Next</div>
                                @endif

                            </div>
                        </div>
                    </div>

                    <div class="row white">
                        <div id="disqus_thread" class="row narrow"></div>
                        <script type="text/javascript">
                            /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                            var disqus_shortname = 'sethtoday'; // required: replace example with your forum shortname
                            var disqus_identifier = "post-{{ $post->id }}";
                            var disqus_title = "{{ $post->title }}";
                            /* * * DON'T EDIT BELOW THIS LINE * * */
                            (function() {
                                var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                                dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                            })();
                        </script>
                        <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                        <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
                    </div>

                </div>
            </div>

        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="/js/plugins.js"></script>
        <script src="//cdn.jsdelivr.net/jquery.ui/1.10.4/jquery-ui.min.js"></script>       
        <script src="/js/vendor/jquery.ui.touch-punch.min.js"></script>


        <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.15.0/TweenLite.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.15.0/utils/Draggable.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.15.0/plugins/CSSPlugin.min.js"></script>


        <script src="/js/main.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
          ga('create', 'UA-49504905-1', 'seth.today');
          ga('send', 'pageview');
        </script>
    </body>
</html>
