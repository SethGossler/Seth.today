<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <title>Seth Today - Making a blog!</title>
        <meta name="description" content="Keep up with Seth Gossler and his semi-daily take on the world of web development, and general life.">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="icon" type="image/png" href="icons/two.png">

        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/main.css">
        <link href='http://fonts.googleapis.com/css?family=Muli:300,400' rel='stylesheet' type='text/css'>

        <script src="/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
    	<div class="row narrow">
			{{ Form::open(array('action' => array('PostsController@store'))) }}
				{{ Form::label('title', 'Title') }}
				{{ Form::text('title') }}

				{{ Form::label('subTitle', 'Sub Title') }}
				{{ Form::text('subtitle') }}

				{{ Form::label('copy', 'Content') }}
				{{ Form::textarea('copy') }}

				{{ Form::submit('Click Me!') }}

			{{ Form::close() }}
    	</div>
    </body>
</html>
