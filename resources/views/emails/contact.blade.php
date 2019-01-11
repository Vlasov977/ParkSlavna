<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table class="body-wrap">
    <tr>
        <td class="container">

            <!-- Message start -->
            <table>
                <tr>
                    <td align="center" class="masthead">

                        <img src="<?php echo $message->embed(asset('images/gold.png')); ?>" width="200" alt="logo">

                    </td>
                </tr>
                <tr>
                    <td class="content">

                        <h2>Hi im {{$content['name']}},</h2>

                        <hr>

                        <h3>{{$content['email']}}</h3>
                        <p>{{ $content['phone'] }}</p>
                        <p>{{ $content['message'] }}</p>

                        <table>
                            <tr>
                                <td align="center">
                                    <p>
                                        <a href="http://google.com" class="button">Visit site</a>
                                    </p>
                                </td>
                            </tr>
                        </table>


                        <p>This letter your get from your site. Visit <a href="http://google.com">Gold Master</a>.</p>

                        <p><em>Gold</em></p>

                    </td>
                </tr>
            </table>

        </td>
    </tr>
    <tr>
        <td class="container">

            <!-- Message start -->
            <table>
                <tr>
                    <td class="content footer" align="center">
                        <p>Sent by <a href="http://google.com">Gold Master</a></p>
                        <p><a href="mailto:">info@orxa.io</a> | +44 (0)7842 745460</p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>