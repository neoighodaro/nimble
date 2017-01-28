<!DOCTYPE html>
<html>
    <head>
        <title>{{ $sitename }}</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <style>
            html, body{height: 100%;}
            body{margin: 0; padding: 0; width: 100%; display: table; font-weight: 100; font-family: 'Lato', sans-serif;}
            .container{text-align: center; display: table-cell; vertical-align: middle;}
            .content{text-align: center; display: inline-block;}
            .title{font-size: 96px;}
            .tag{font-size: :50px;}
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">{{ $sitename }}</div>
                <div class="tag">{{ $tag }}</div>
            </div>
        </div>
    </body>
</html>
